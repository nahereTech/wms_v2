<?php
include_once("_common/menu.php"); // menu list
include_once("../gen/_common/header.php"); // header contents
include_once("assets/wms.php"); // header contents
?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Best Selling Items</h3>
              </div>

              <!-- <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div> -->

              <div class="title_right" style="text-align: right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group" style="float: right">
                    <!--span class="input-group-btn"-->
                    <a href="./" class="btn btn-primary">Back</a>
                    
                    
                  </div>
                </div>
              </div>
            </div>

            

            <div class="clearfix"></div>

            <div class="row">

              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <br>

                  <div class="x_content">

                    

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <!-- <th class="column-title">Warehouse</th>   -->
                            <th class="column-title">Item Code</th>
                            <th class="column-title">Item Name</th>
                            <th class="column-title no-link last"><span class="nobr">Warehouse Name</span>
                            <th class="column-title no-link last"><span class="nobr">Quantity Sold</span>
                            <th class="column-title no-link last"><span class="nobr"> Item Description</span>

                            </th>
                            <!-- <th class="bulk-actions" colspan="2">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th> -->
                          </tr>
                        </thead>

                         <tr id="loading">
                          <td colspan="4"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;" ></i></td>
                        </tr>
                        
                       <tbody id="lowData">
                          
                        
                          
                        </tbody>
                      </table>

                      <div class="container">
                          <nav aria-label="Page navigation">
                              <ul class="pagination" id="pagination"></ul>
                          </nav>
                      </div>
                    </div>
							
						
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

          

        <script type="text/javascript">
          $(document).ready(function(){
              // var warehouse_id; 

              best_selling_items('');
              
              // $('#add_warehouse').on('click', warehouse);
              // $('#add_ware').on('click', add_company_warehouse);

              // $(document).on('click', '.delete_warehouse', function(){
              //   var warehouse_id = $(this).attr('id').replace(/war_/,''); 
              //   delete_warehouse(warehouse_id);
              // });

              // $(document).on('click', '.warehouse_info', function(){
              //   warehouse_id = $(this).attr('id').replace(/wareIn_/,''); 
              //   fetch_warehouse_info(warehouse_id);
                
              // });

              // $(document).on('click', '.edit_warehouse_icon', function(){
              //   warehouse_id = $(this).attr('id').replace(/warh_/,''); 
              //   fetch_warehouse_details(warehouse_id);
                
              // });

              // $(document).on('click', '#edit_ware', function(){
              //   // var warehouse_id = $(this).attr('id').replace(/edt_/,''); 
              //   edit_company_warehouse(warehouse_id);
              //   // alert(warehouse_id);
              // });

              

          })



          

          function warehouse(){
            $('#warehouse_display').toggle();
            $('#add_warehouse_name').val('');
            $('#add_warehouse_address').val('');

            $('#error').html('');

            $(".required").each(function(){

              var the_val = $.trim($(this).val());

              $(this).removeClass("has-error");

            });
          }

          function best_selling_items(page){

            var company_id = localStorage.getItem('company_id');
            var warehouse_id = localStorage.getItem('warehouse_id');

             if(page == ""){
                var page = 1;
              }
              var limit = 10;

            
            $("#loading").show();
            $("#lowData").html('');

            $.ajax({
                
                type: "GET",
                dataType: "json",
                 headers: {
                'Authorization':localStorage.getItem('token'),
    },
                url: api_path+"wms/top_selling_items",
                data: { "company_id": company_id, "warehouse_id": warehouse_id },
                timeout: 60000,

                success: function(response) {
                    console.log(response.data.items);

                    var strTable = "";
                    
                    if (response.status == '200'){
                        
                        $('#loading').hide();

                        if(response.data != undefined){

                            var k = 1;
                            $.each(response.data, function (i, v) {
                            //   console.log(v.ItemDetails.name)

                            
                              strTable += '<tr>';
                              strTable += `<td>${v.item_code}</td>`;
                              strTable += `<td>${v.item_name}</td>`;
                              strTable += `<td>${v.warehouse_name}</td>`;
                              strTable += `<td>${v.qty_sold}</td>`;
                              strTable += `<td>${v.item_description}</td>`;


                              
                              
                              strTable += '</tr>';  


                                k++;
                                 
                            });


                            // $('#pagination').twbsPagination({
                            //     totalPages: Math.ceil(response.total_rows/limit),
                            //     visiblePages: 10,
                            //     onPageClick: function (event, page) {
                            //         best_selling_items(page);
                            //     }
                            // });

                            
                        }else{

                            strTable = '<tr><td colspan="3">'+response.msg+'</td></tr>';

                        }
                        
                        

                                   
                        $("#lowData").html(strTable);
                        $("#lowData").show();

                    }else if(response.data <= 0){
                      $('#loading').hide();
                      
                      strTable = '<tr><td colspan="3">'+response.msg+'</td></tr>';

                      $("#lowData").html(strTable);
                      $("#lowData").show();

                    }else if(response.status == '400'){
                        var strTable = "";
                        $('#loading').hide();
                        // alert(response.msg);
                        strTable += '<tr>';
                        strTable += '<td colspan="3">'+response.msg+'</td>';
                        strTable += '</tr>';

                        
                        $("#lowData").html(strTable);
                        $("#lowData").show();
                        

                    }    
                
                },

                error: function(response){
                     var strTable = "";
                        $('#loading').hide();
                        // alert(response.msg);
                        strTable += '<tr>';
                        strTable += '<td colspan="3"><strong class="text-danger">Connection error</strong></td>';
                        strTable += '</tr>';

                        
                        $("#lowData").html(strTable);
                        $("#lowData").show();

                }        

            });
          }

        </script>



<?php
include_once("../gen/_common/footer.php"); // header contents
?>