<?php
include_once("_common/menu.php"); // menu list
include_once("../gen/_common/header.php"); // header contents
include_once("assets/wms.php"); // header contents
?>




      <script>



          $(document).ready(function(){

            var myVar = setInterval(myTimer, 1000);
            function myTimer() {
              if($("#current_warehouse_id").html() == ""){
                console.log("not ready");
              }else{
                clearInterval(myVar);
                get_and_set_warehouses();
                
              }
            }
            
            // window.setInterval(function(){
            //   /// call your function here
            //   if($("#current_warehouse_id").html() == ""){
            //     console.log("not ready");
            //   }else{
            //     console.log("ready");
            //     clearInterval();
            //   }
              
            // }, 1000);

            // get_and_set_warehouses();
            
          });

          function get_and_set_warehouses(){

            var company_id = localStorage.getItem('company_id');
            var user_id = localStorage.getItem('user_id');
            var warehouse_id;
            var warehouse_name;

            $.ajax({

                type: "POST",
                dataType: "json",
                url: api_path + "wms/list_warehouses_user_connected",
                data: {
                    "company_id": company_id,
                    "user_id": user_id
                },
                timeout: 60000,

                success: function(response) {

                    console.log(response.data);

                    if (response.status == '200') {

                        if (isEmptyObject(response.data)) {

                            // $('#switch_tab').hide();
                            // alert('hide');

                        } else if (!isEmptyObject(response.data)) {

                            $.each(response['data'], function(i, v) {

                                warehouse_id = response['data'][i]['warehouse_id'];
                                warehouse_name = response['data'][i]['warehouse_name'];
                            });
                                // alert('show');
                            // $('#switch_tab').show();

                        }

                        // if (localStorage.getItem('warehouse_id') == null || localStorage.getItem('warehouse_id') == "" || localStorage.getItem('warehouse_id') == 'undefined') {

                            // localStorage.setItem('warehouse_id', warehouse_id);
                            // localStorage.setItem('warehouse_name', warehouse_name);

                        // }

                        if(localStorage.getItem('warehouse_id') != "" && localStorage.getItem('warehouse_id') != "undefined" && localStorage.getItem('warehouse_id') != undefined){

                          defCalls(localStorage.getItem('warehouse_id'));//returns the promise object

                        }else{

                          // alert("No warehouse found");
                          // window.location.href = "";

                        }

                        

                    } else {

                    }

                },
                // objAJAXRequest, strError
                error: function(response) {

                    alert('Error fetching warehouses!');

                }

            });
          }


          function load_rev_exp_graph(warehouse_id){

            var company_id = localStorage.getItem('company_id');       

            $.ajax({
                    
              type: "POST",
              dataType: "json",
              url: api_path+"wms/monthly_grn_and_inv_rpt",
              data: {"company_id": company_id, "warehouse_id": warehouse_id},
              timeout: 60000,

              success: function(response) {

                if (response.status == '200'){
                
                  console.log(response);

                  if(response.data.list.length != 0){

                    var list_of_names = [];
                    var list_of_exp_values = [];
                    var list_of_rev_values = [];

                    $(response.data.list).each(function(index, value){
                      // alert(index)
                      list_of_names.push( value.name );
                      list_of_exp_values.push({ value: Number(value.exp_amount), name: value.name});
                      list_of_rev_values.push({ value: Number(value.rev_amount), name: value.name});

                    });


                    var echartBar = echarts.init(document.getElementById('main'));

                    echartBar.setOption({

                      title: {
                        
                      },
                      tooltip: {
                        trigger: 'axis'
                      },
                      legend: {
                        data: ['expense', 'revenue']
                      },
                      toolbox: {
                        show: false
                      },
                      calculable: false,
                      xAxis: [{
                        type: 'category',
                        data: list_of_names
                      }],
                      yAxis: [{
                        type: 'value'
                      }],
                      series: [


                        {
                          name: 'expense',
                          type: 'bar',
                          data: list_of_exp_values,
                          markPoint: {
                          data: [{
                            type: 'max',
                            name: '-'
                          }, {
                            type: 'min',
                            name: '-'
                          }]
                          },
                          markLine: {
                          data: [{
                            type: 'average',
                            name: '-'
                          }]
                          }
                        },


                        {
                          name: 'revenue',
                          type: 'bar',
                          data: list_of_rev_values,
                          markPoint: {
                          data: [{
                            type: 'max',
                            name: '-'
                          }, {
                            type: 'min',
                            name: '-'
                          }]
                          },
                          markLine: {
                          data: [{
                            type: 'average',
                            name: '-'
                          }]
                          }
                        }

                      ] 

                    });

                  }
                
                }   
                
              },
              // objAJAXRequest, strError
              error: function(response){
                alert("error");                         
              }        

            });
          }



          function load_profit_loss_graph(warehouse_id){

            var company_id=localStorage.getItem('company_id');
            // var warehouse_id=localStorage.getItem('warehouse_id');

            $.ajax( {
                type: "POST", dataType: "json", url: api_path+"wms/monthly_grn_and_inv_rpt", data: {
                    "company_id": company_id, "warehouse_id": warehouse_id
                }
                , timeout: 60000, success: function(response) {
                    if (response.status=='200') {
                        console.log(response);
                        if(response.data.list.length !=0) {
                            var list_of_names=[];
                            var list_of_values=[];
                            $(response.data.list).each(function(index, value) {
                                // alert(index)
                                list_of_names.push( value.name);
                                list_of_values.push( {
                                    value: Number(value.profit), name: value.name
                                }
                                );
                            }
                            );
                            // alert(list_of_names);
                            var echartBar=echarts.init(document.getElementById('yearly_sales_report'));
                            echartBar.setOption( {
                                title: {}
                                , tooltip: {
                                    trigger: 'axis'
                                }
                                , legend: {
                                    data: ['sales']
                                }
                                , toolbox: {
                                    show: false
                                }
                                , calculable: false, xAxis: [ {
                                    type: 'category', data: list_of_names
                                }
                                ], yAxis: [ {
                                    type: 'value'
                                }
                                ], series: [ {
                                    name: 'sales', type: 'bar', data: list_of_values, markPoint: {
                                        data: [ {
                                            type: 'max', name: '???'
                                        }
                                        , {
                                            type: 'min', name: '???'
                                        }
                                        ]
                                    }
                                    , markLine: {
                                        data: [ {
                                            type: 'average', name: '???'
                                        }
                                        ]
                                    }
                                }
                                ]
                            }
                            );
                        }
                    }
                }
                , // objAJAXRequest, strError
                error: function(response) {
                    // $("#ddsh_loading_1").hide();
                    alert("error");
                    // $('#employee_details_display').hide();
                    // $('#employee_error_display').show();
                }

            });

          }



          function load_warehouse_value_pie(warehouse_id){

            var company_id=localStorage.getItem('company_id');

            $.ajax( {
                type: "POST", dataType: "json", url: api_path+"wms/grp_values_of_stock", data: {
                    "company_id": company_id, "warehouse_id": warehouse_id
                }
                , timeout: 60000, success: function(response) {
                    if (response.status=='200') {
                        console.log(response);
                        if(response.data.warehouse.length !=0) {
                            var list_of_names=[];
                            var list_of_values=[];
                            $(response.data.warehouse).each(function(index, value) {
                                // alert(index)
                                list_of_names.push( value.name);
                                list_of_values.push( {
                                    value: Number(value.cost), name: value.name
                                }
                                );
                            }
                            );
                            // alert(list_of_values)
                            var echartPie=echarts.init(document.getElementById('warehouse_pie'));
                            echartPie.setOption( {
                                tooltip: {
                                    trigger: 'item', formatter: "{a} <br/>{b} : {c} ({d}%)"
                                }
                                , legend: {
                                    x: 'center', y: 'bottom', data: list_of_names
                                }
                                , toolbox: {
                                    show: true, feature: {
                                        magicType: {
                                            show: true, type: ['pie', 'funnel'], option: {
                                                funnel: {
                                                    x: '25%', width: '50%', funnelAlign: 'left', max: 1548
                                                }
                                            }
                                        }
                                        , restore: {
                                            show: true, title: "Restore"
                                        }
                                        , saveAsImage: {
                                            show: true, title: "Save Image"
                                        }
                                    }
                                }
                                , calculable: true, series: [ {
                                    name: '', type: 'pie', radius: '55%', center: ['50%', '48%'], data: list_of_values //[{
                                    // value: 335,
                                    // name: 'Ikeja'
                                    //  }, {
                                    // value: 310,
                                    // name: 'Ilupeju'
                                    //  }, {
                                    // value: 234,
                                    // name: 'Union Ad'
                                    //  }, {
                                    // value: 135,
                                    // name: 'Video Ads'
                                    //  }, {
                                    // value: 1548,
                                    // name: 'Search Engine'
                                    //  }]
                                }
                                ]
                            }
                            );
                            var dataStyle= {
                                normal: {
                                    label: {
                                        show: false
                                    }
                                    , labelLine: {
                                        show: false
                                    }
                                }
                            }
                            ;
                            var placeHolderStyle= {
                                normal: {
                                    color: 'rgba(0,0,0,0)', label: {
                                        show: false
                                    }
                                    , labelLine: {
                                        show: false
                                    }
                                }
                                , emphasis: {
                                    color: 'rgba(0,0,0,0)'
                                }
                            }
                            ;
                        }
                        else {
                            $("#loader_lgn").hide();
                            $('#warehouse_pie').html('<strong>No Data Available</strong>');
                        }
                    }
                    else if(response.status=='400') {
                        $("#loader_lgn").hide();
                        $('#warehouse_pie').html(response.msg);
                    }
                }
                , // objAJAXRequest, strError
                error: function(response) {
                    // $("#ddsh_loading_1").hide();
                    $("#loader_lgn").hide();
                    alert("error");
                    // $('#employee_details_display').hide();
                    // $('#employee_error_display').show();
                }
            }

            );
          }

      </script>
        

        
        <!-- page content -->
        <div class="right_col" role="main" style="display: ">
          <div class="">


            <div class="page-title">
              <div class="title_left">
                <h3>Dashboard </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <!-- <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div> -->
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>


            <div class="row top_tiles">
              
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i></div>
                  <div class="count" id="the_rev">
                    <i class="fa fa-spinner fa-spin fa-fw" style="display: "></i>
                  </div>
                  <h3>Revenue</h3>
                  <p>From Receipts Generated</p>
                </div>
              </div>



              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-line-chart"></i></div>
                  <!-- <div class="count">₦90.3mil</div> -->
                  <div class="count" id="total_xxs">
                    <i class="fa fa-spinner fa-spin fa-fw" style="display: "></i>
                  </div>
                  <h3>Creditors</h3>
                  <p>We Owe</p>
                </div>
              </div>


              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-line-chart"></i></div>
                  <!-- <div class="count">₦90.3mil</div> -->
                  <div class="count" id="total_ddds">
                    <i class="fa fa-spinner fa-spin fa-fw" style="display: "></i>
                  </div>
                  <h3>Debtors</h3>
                  <p>We are Owed</p>
                </div>
              </div>

              <a href="low_items">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-exclamation-triangle"></i></div>
                  <div class="count" id="low_itms">
                    <i class="fa fa-spinner fa-spin fa-fw" style="display: "></i>
                  </div>
                  <h3>Low Items</h3>
                  <p>.</p>
                </div>
              </div>
              </a>
              <!-- <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-long-arrow-up"></i></div>
                  <div class="count">₦50,320</div>
                  <h3>Bills</h3>
                  <p>Pending.</p>
                </div>
              </div> -->
              <!-- <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-line-chart"></i></div>
                  
                  <div class="count" id="total_st_v">
                    <i class="fa fa-spinner fa-spin fa-fw" style="display: "></i>
                  </div>
                  <h3>Value of Stock</h3>
                  <p>Value of Current Items in Warehouse</p>
                </div>
              </div> -->

            </div>




            <div class="row">
                
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo date("Y"); ?> Expense & Revenue Summary [₦ mil]</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="background-color: ">

                    <!-- <div id="yearly_expense_report" style="height:350px;"><i class="fa fa-spinner fa-spin fa-fw fa-3x loader_lga_grh" style="display: " id="loader_lgn"></i></div> -->
                    <!-- prepare a DOM container with width and height -->
                    <div id="main" style="height:400px;"><i class="fa fa-spinner fa-spin fa-fw fa-3x loader_lga_grh" style="display: ;" id="loader_lgn"></i></div>
                    <script type="text/javascript">

                        // var company_id=localStorage.getItem('company_id');
                        // var warehouse_id=localStorage.getItem('warehouse_id');

                        // $.ajax( {
                        //     type: "POST", dataType: "json", url: api_path+"wms/monthly_grn_and_inv_rpt", data: {
                        //         "company_id": company_id, "warehouse_id": warehouse_id
                        //     }
                        //     , timeout: 60000, success: function(response) {
                        //         if (response.status=='200') {
                        //             console.log(response);
                        //             if(response.data.list.length !=0) {
                        //                 var list_of_names=[];
                        //                 var list_of_exp_values=[];
                        //                 var list_of_rev_values=[];
                        //                 $(response.data.list).each(function(index, value) {
                        //                     // alert(index)
                        //                     list_of_names.push( value.name);
                        //                     list_of_exp_values.push( {
                        //                         value: Number(value.exp_amount), name: value.name
                        //                     }
                        //                     );
                        //                     list_of_rev_values.push( {
                        //                         value: Number(value.rev_amount), name: value.name
                        //                     }
                        //                     );
                        //                 }
                        //                 );
                        //                 var echartBar=echarts.init(document.getElementById('main'));
                        //                 echartBar.setOption( {
                        //                     title: {}
                        //                     , tooltip: {
                        //                         trigger: 'axis'
                        //                     }
                        //                     , legend: {
                        //                         data: ['expense', 'revenue']
                        //                     }
                        //                     , toolbox: {
                        //                         show: false
                        //                     }
                        //                     , calculable: false, xAxis: [ {
                        //                         type: 'category', data: list_of_names
                        //                     }
                        //                     ], yAxis: [ {
                        //                         type: 'value'
                        //                     }
                        //                     ], series: [ {
                        //                         name: 'expense', type: 'bar', data: list_of_exp_values, markPoint: {
                        //                             data: [ {
                        //                                 type: 'max', name: '-'
                        //                             }
                        //                             , {
                        //                                 type: 'min', name: '-'
                        //                             }
                        //                             ]
                        //                         }
                        //                         , markLine: {
                        //                             data: [ {
                        //                                 type: 'average', name: '-'
                        //                             }
                        //                             ]
                        //                         }
                        //                     }
                        //                     , {
                        //                         name: 'revenue', type: 'bar', data: list_of_rev_values, markPoint: {
                        //                             data: [ {
                        //                                 type: 'max', name: '-'
                        //                             }
                        //                             , {
                        //                                 type: 'min', name: '-'
                        //                             }
                        //                             ]
                        //                         }
                        //                         , markLine: {
                        //                             data: [ {
                        //                                 type: 'average', name: '-'
                        //                             }
                        //                             ]
                        //                         }
                        //                     }
                        //                     ]
                        //                 }
                        //                 );
                        //             }
                        //         }
                        //         // else{
                        //         //                    //no data available
                        //         //                  }
                        //         //                }else if(response.status == '400'){
                        //         //                     $("#ddsh_loading_1").hide();
                        //         //                     $('#no_record').show();
                        //         //                     $('#no_record3').show();
                        //         //                     // alert("no record")
                        //         //                }    
                        //     }
                        //     , // objAJAXRequest, strError
                        //     error: function(response) {
                        //         alert("error");
                        //     }
                        // }

                        // );
                    </script>

                  </div>
                </div>
              </div>

            </div>




            <div class="row">



              <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Warehouse Value</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="warehouse_pie" style="height:350px;"><i class="fa fa-spinner fa-spin fa-fw fa-3x loader_lga_grh" style="display: " id="loader_lgn"></i></div>

                  </div>
                </div>
              </div>



              <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo date("Y"); ?> Profit/Loss</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="yearly_sales_report" style="height:350px;"><i class="fa fa-spinner fa-spin fa-fw fa-3x loader_lga_grh" style="display: ;" id="loader_lgn"></i></div>

                  </div>
                </div>
              </div>


              <!-- <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo date("Y"); ?> Profit/Loss</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <div id="echart_line_445" style="height:350px;"><i class="fa fa-spinner fa-spin fa-fw fa-3x loader_lga_grh" style="display: " id="loader_lgn"></i></div>

                  </div>
                </div>
              </div> -->




            </div>

            <!-- <div class="row">
              <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo date("Y"); ?> Profit/Loss</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="echart_pie2" style="height:350px;"></div>

                  </div>
                </div>
              </div>
            </div> -->


              
            </div>
          </div>
        </div>
        <!-- /page content -->



        <script>
          

          function defCalls(warehouse_id){
                        
             var def = $.Deferred();
             $.when(fetch_dashboard_stats(warehouse_id),fetch_money_we_owe(warehouse_id),fetch_money_we_are_owed(warehouse_id),low_item_counts(warehouse_id),load_rev_exp_graph(warehouse_id),load_profit_loss_graph(warehouse_id),load_warehouse_value_pie(warehouse_id)).done(function(){
               setTimeout(function(){
                 def.resolve();
               },3000)
             })
             return def.promise();
          }

          function fetch_dashboard_stats (warehouse_id){   
              
            var company_id = localStorage.getItem('company_id');
            // var warehouse_id = localStorage.getItem('warehouse_id');

            $.ajax({ 
                type: "POST",
                dataType: "json",
                url: api_path+"wms/total_inv_revenue",
                data: {"company_id": company_id , "warehouse_id" : warehouse_id },
                timeout: 60000,
                success: function(response) { 

                  $("#the_rev").html('₦'+numeral(parseFloat(response.amount)).format('0.0a'));
                   console.log(response);
                },
                error: function(response){
                  console.log(response);
                }
            });

          }


          function fetch_money_we_owe(warehouse_id){   
              
            var company_id = localStorage.getItem('company_id');


            $.ajax({ 

                type: "POST",
                dataType: "json",
                url: api_path+"wms/total_amount_we_owe",
                data: {"company_id": company_id, "warehouse_id": warehouse_id },
                timeout: 60000,
                success: function(response) { 

                  $("#total_xxs").html('₦'+numeral(parseFloat(response.amount)).format('0.0a'));
                   console.log(response);
                },
                error: function(response){
                  console.log(response);
                }

            });

          }

          function fetch_money_we_are_owed(warehouse_id){   
              
            var company_id = localStorage.getItem('company_id');


            $.ajax({ 

                type: "POST",
                dataType: "json",
                url: api_path+"wms/total_amount_we_are_owed",
                data: {"company_id": company_id, "warehouse_id": warehouse_id },
                timeout: 60000,
                success: function(response) { 

                  $("#total_ddds").html('₦'+numeral(parseFloat(response.amount)).format('0.0a'));
                   console.log(response);
                },
                error: function(response){
                  console.log(response);
                }

            });

          }

          function low_item_counts(warehouse_id){ 

            var company_id = localStorage.getItem('company_id');

            $.ajax({ 
                type: "POST",
                dataType: "json",
                url: api_path+"wms/low_item_counts",
                data: {"company_id": company_id, "warehouse_id": warehouse_id },
                timeout: 60000,
                success: function(response) {
                  console.log('chief3');
                  console.log(response);
                  console.log('dsd');
                  if(response.status == "200"){

                    $("#low_itms").html(response.counts);  
                   

                  }else if(response.status == "401"){

                    $("#low_itms").html('?');  
                   
                  }else{
                    $("#low_itms").html('0');
                  }
                
                },
                error: function(response){
                  console.log(response);
                }
            });

          }

          function total_values_of_stock (warehouse_id){   
            
            var company_id = localStorage.getItem('company_id');

            $.ajax({ 
                type: "POST",
                dataType: "json",
                url: api_path+"wms/total_values_of_stock",
                data: {"company_id": company_id, "warehouse_id": warehouse_id },
                timeout: 60000,
                success: function(response) {
                $("#total_st_v").html('₦'+numeral(parseFloat(response.amount)).format('0.0a'));
                   console.log(response);
                },
                error: function(response){
                  console.log(response);
                }
            });

          }

          
           
          

        </script>



<?php

include_once("../gen/_common/footer.php"); // header contents

?>
