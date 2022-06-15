<?php
include_once("_common/menu.php"); // menu list
include_once("../gen/_common/header.php"); // header contents
include_once("assets/wms.php"); // header contents
?>

        <!-- page content -->
        <div class="right_col" role="main" id="main_display" style="display: ;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Item History</h3>
                <h2 id="item_zz_nn"></h2>
              </div>

              <div class="title_right" style="text-align: right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group" style="float: right; display:flex">
                   
                    
                    <li><a id="download" class="btn btn-success add_item" download>Download Items History</a><li>

                    <a href="items"><button type="button" class="btn btn-primary">Back</button></a>
                    
                    
                  </div>
                </div>
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                        
                            <th class="column-title" style="width: 4%">Date </th>
                            <th class="column-title" style="width: 2%"> </th>
                            <!-- <th class="column-title">Item </th> -->
                            <th class="column-title" style="width: 25%">Inserted By </th>
                            <th class="column-title">Vendor/Contact </th>
                            <th class="column-title">Section </th>
                            <th class="column-title">Batch </th>
                            <th class="column-title" style="width: 5%">Qty </th>
                            <th class="column-title" style="width: 10%">New Balance</th>
                            <!-- <th class="column-title no-link last" style="width: 5%"><span class="nobr">Action</span> -->
                            </th>
                            <th class="bulk-actions" colspan="6">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                         <tr id="loading">
                          <td colspan="6"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;" ></i></td>
                        </tr>
                        
                        <tbody  id="itemData">
                          
                        
                          
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

       
          <div id="error_display" style="display: none;">

            <div class="right_col" role="main">
            <div class="">
              <div class="page-title">
                
              </div>
              
              <div class="clearfix"></div>

              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="alert alert-info alert-dimissible fade-in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                      <span aria-hidden="true"></span>
                    </button>
                    <strong>Sorry you don't have access to this page!</strong>
                  </div>
                </div>
              </div>
            </div>
          </div>   
        </div>

        <script type="text/javascript">
          $(document).ready(function(){

            page_warehouse_access();
            list_items_activities('');
            // list_warehouse_items('');
            // $('#edit_dept').on('click', edit_company_department);

          })

          $.urlParam = function(name){
              var results = new RegExp('[\?&]' + name + '=([^]*)').exec(window.location.href);
              if (results==null){
                 return null;
              }
              else{
                 return results[1] || 0;
              }
          }

          // $(document).on('click', '#download', function() {
            download_pdf()
          // });

            function download_pdf() {

            // var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
            // var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
            var item_id = $.urlParam('id');
            var company_id = localStorage.getItem('company_id');
            var warehouse_id = localStorage.getItem('warehouse_id');
          


            $.ajax({
                  type: "GET",
                  dataType: "json",
            headers: {'Authorization':localStorage.getItem('token') },

                  url: api_path + "wms/download_item_history",
                  data: {
                      "company_id": company_id, 
                      "warehouse_id": warehouse_id,
                      "item_id": item_id,
                      
                  },
              timeout: 60000, // sets timeout to one minute
                error: function(response) {

            },

            success: function(response) {
            console.log(response);
            if (response.status == '200') {
            console.log(response.d_link);
            var url = response.d_link;
            $('#download').attr("href", url);
            // $('#export_file').show();
              // $('#download').trigger('click')

            } 
            }


            });


            };


          function page_warehouse_access(){

            var company_id = localStorage.getItem('company_id');

            var user_id = localStorage.getItem('user_id');
            var module_id = 6;
            

            $.ajax({
                  
              type: "POST",
              dataType: "json",
            headers: {'Authorization':localStorage.getItem('token') },

              url: api_path+"wms/list_user_wms_sections",
              data: { "company_id": company_id,  "user_id": user_id, "module_id": module_id},
              timeout: 60000,

              success: function(response) {
                  
                  console.log(response);
            
                  var strTable = "";
                  
                  if (response.status == '200'){

                    if (response.is_admin == 'no'){
                      $('#main_display').hide();
                      $('#error_display').show();
                      var k = 1;
                      $.each(response['data'], function (i, v) {
                          

                          if(response['data'][i]['section_name'] == "Incoming" && response['data'][i]['section_exist'] == "yes"){

                              $('#incoming').show();
                              

                          }else if(response['data'][i]['section_name'] == "Incoming" && response['data'][i]['section_exist'] == "no"){

                              $('#incoming').hide();
                              
                            
                          }else if(response['data'][i]['section_name'] == "Outgoing" && response['data'][i]['section_exist'] == "yes"){

                            $('#outgoing').show();
                            

                          }else if(response['data'][i]['section_name'] == "Outgoing" && response['data'][i]['section_exist'] == "no"){

                            $('#outgoing').hide();
                            
                          }else if(response['data'][i]['section_name'] == "Sales/Receipts" && response['data'][i]['section_exist'] == "yes"){

                            $('#receipts').show();
                            

                          }else if(response['data'][i]['section_name'] == "Sales/Receipts" && response['data'][i]['section_exist'] == "no"){

                            $('#receipts').hide();
                            
                          }


                          k++;
                           
                      });

                      

                    }else if (response.is_admin == 'yes'){

                        $('#incoming').show();
                        $('#outgoing').show();
                        $('#receipts').show(); 
                        $('#user_page').show(); 
                    }               


                  }else if(response.status == '400'){
                      
                      

                  }else if(response.status == "401"){
                      //missing parameters
                      

                  }

              
              },

              error: function(response){
                

                

              }        

          });
          }

          function list_items_activities(page){

            var company_id = localStorage.getItem('company_id');
            var warehouse_id = localStorage.getItem('warehouse_id');

            var item_id = $.urlParam('id');
            if(page == ""){
              var page = 1;
            }
            var limit = 25;

            
            
            // alert(company_id);
            

            $("#loading").show();
            $("#itemData").html('');

            $.ajax({
                  
              type: "POST",
              dataType: "json",
            headers: {'Authorization':localStorage.getItem('token') },
              
              url: api_path+"wms/list_delivery_supply_history",
              data: { "company_id": company_id, "warehouse_id": warehouse_id, "page": page, "limit": limit, "item_id": item_id },
              timeout: 60000,

              success: function(response) {
                        
                  console.log(response);
                  $('#loading').hide();
                  var strTable = "";
                  
                  if (response.status == '200'){

                      if(response.data.length != 0){

                          $("#item_zz_nn").html(response['data'][0]['item_name']);
                        
                          var k = 1;
                          $.each(response['data'], function (i, v) {
 
                              function status(string) {
                                  return string.charAt(0).toUpperCase() + string.slice(1);
                              }

                              var monthNames = [
                                "Jan", "Feb", "Mar",
                                "Apr", "May", "Jun", "Jul",
                                "August", "Sep", "Oct",
                                "Nov", "Dec"
                              ];

                             var d = new Date(response['data'][i]['date_recieved']);
                             // var d2 = new Date(response['data'][i]['outgoing_date']);
                             var monthIndex = d.getMonth();
                             var datestring = d.getDate()  + "/" +  monthNames[monthIndex] + "/" + d.getFullYear();
                              // var monthIndex = d2.getMonth();
                             // var datestring2 = d2.getDate()  + "/" +  monthNames[monthIndex] + "/" + d2.getFullYear();

                              

                              if(response['data'][i]['store_type'] == "outgoing" || response['data'][i]['store_type'] == "correction_outgoing"){

                                  var dirctn = '<i class="fa fa-long-arrow-up" aria-hidden="true"  style="font-size: 24px; color: red;"></i>';

                                  if(response['data'][i]['store_type'] == "correction_outgoing"){

                                    response['data'][i]['vendor'] = '<span class="badge ull-left" style="font-weight: normal; background: #398f7c; color: #fff"><b>Correction</b></span>';
                                  }

                              }else if(response['data'][i]['store_type'] == "incoming" || response['data'][i]['store_type'] == "correction_incoming" || response['data'][i]['store_type'] == "starting_balance" ){

                                  var dirctn = '<i class="fa fa-long-arrow-down" aria-hidden="true"  style="font-size: 24px; color: green;"></i>';

                                  //if this is starting balance input
                                  if(response['data'][i]['store_type'] == "starting_balance"){

                                    response['data'][i]['vendor'] = '<span class="badge ull-left" style="font-weight: normal; background: #398f7c; color: #fff"><b>Starting Balance</b></span>';
                                  }

                                  if(response['data'][i]['store_type'] == "correction_incoming"){

                                    response['data'][i]['vendor'] = '<span class="badge ull-left" style="font-weight: normal; background: #398f7c; color: #fff"><b>Correction</b></span>';
                                  }

                              }

                              strTable += '<tr>';


                              strTable += '<td valign="top">'+datestring+'</td>';
                                strTable += '<td valign="top">'+dirctn+'</td>';
                                
                                // strTable += '<td valign="top">'+response['data'][i]['item_name']+'</td>';
                                strTable += '<td valign="top">'+response['data'][i]['person_concerned']+'</td>';
                                strTable += '<td valign="top">'+response['data'][i]['vendor']+'</td>';
                                strTable += '<td valign="top">'+response['data'][i]['warehouse_section']+'</td>';
                                strTable += '<td valign="top">'+response['data'][i]['batch']+'</td>';
                                strTable += '<td valign="top">'+response['data'][i]['qty']+'</td>';
                                strTable += '<td valign="top">'+response['data'][i]['new_balance']+'</td>';
                              
                              
                              // if(response['data'][i]['store_type'] == "outgoing"){

                              //   strTable += '<td valign="top">'+datestring+'</td>';
                              //   strTable += '<td valign="top"><i class="fa fa-long-arrow-up" aria-hidden="true"  style="font-size: 24px; color: red;"></i></td>';
                                
                              //   // strTable += '<td valign="top">'+response['data'][i]['item_name']+'</td>';
                              //   strTable += '<td valign="top">'+response['data'][i]['person_concerned']+'</td>';
                              //   strTable += '<td valign="top">'+response['data'][i]['vendor']+'</td>';
                              //   strTable += '<td valign="top">'+response['data'][i]['qty']+'</td>';
                              //   strTable += '<td valign="top">'+response['data'][i]['new_balance']+'</td>';

                              //   // strTable += '<td valign="top"><a class="vendor_info btn btn-primary btn-xs"  id="venIn_'+response['data'][i]['vendor_id']+'"><i  class="fa fa-folder"  data-toggle="tooltip" data-placement="top" title="View Vendor info"></i> View</a>';

                              //   // strTable += '<i  class="fa fa-spinner fa-spin fa-1x fa-fw" aria-hidden="true" style="display: none;" id="loader11_'+response['data'][i]['item_id']+'"></i></td>;';

                              // }else if(response['data'][i]['store_type'] == "incoming"){

                              //   strTable += '<td valign="top">'+datestring+'</td>';
                                
                              //   strTable += '<td valign="top"><i class="fa fa-long-arrow-down" aria-hidden="true"  style="font-size: 24px; color: green;"></i></td>';
                              //   // strTable += '<td valign="top">'+response['data'][i]['item_name']+'</td>';
                              //   strTable += '<td valign="top">'+response['data'][i]['person_concerned']+'</td>';
                              //   strTable += '<td valign="top">'+response['data'][i]['vendor']+'</td>';

                              //   strTable += '<td valign="top">'+response['data'][i]['qty']+'</td>';
                              //   strTable += '<td valign="top">'+response['data'][i]['new_balance']+'</td>';

                              //   // strTable += '<td valign="top"><a class="vendor_info btn btn-primary btn-xs"  id="venIn_'+response['data'][i]['vendor_id']+'"><i  class="fa fa-folder"  data-toggle="tooltip" data-placement="top" title="View Vendor info"></i> View</a>';

                              //   //   strTable += '<i  class="fa fa-spinner fa-spin fa-1x fa-fw" aria-hidden="true" style="display: none;" id="loader11_'+response['data'][i]['item_id']+'"></i></td>';
                              // }
                              
                              
                              strTable += '</tr>';



                              k++;
                               
                          });
                          
                        
                      }else{

                          strTable = '<tr><td colspan="6">No record.</td></tr>';

                      }


                      $('#pagination').twbsPagination({
                          totalPages: Math.ceil(response.total_rows/limit),
                          visiblePages: 10,
                          onPageClick: function (event, page) {
                             list_items_activities(page);
                          }
                      });
                      
                                 
                      $("#itemData").html(strTable);
                      $("#itemData").show();

                  }else if(response.status == '400'){
                      
                      $('#loading').hide();
                      strTable += '<tr>';
                      strTable += '<td colspan="6">No result</td>';
                      strTable += '</tr>';

                      
                      $("#itemData").html(strTable);
                      $("#itemData").show();
                      

                  }else if(response.status == "401"){
                      //missing parameters
                      var strTable = "";
                      $('#loading').hide();
                      strTable += '<tr>';
                      strTable += '<td colspan="6">'+response.msg+'</td>';
                      strTable += '</tr>';

                      
                      $("#itemData").html(strTable);
                      $("#itemData").show();

                  }


                  $("#loading").hide();
              
              },

              error: function(response){
                
                // alert(warehouse_id);
                var strTable = "";
                $('#loading').hide();
                // alert(response.msg);
                strTable += '<tr>';
                strTable += '<td colspan="6"><strong class="text-danger">Connection error!</strong></td>';
                strTable += '</tr>';

                
                $("#itemData").html(strTable);
                $("#itemData").show();
                $("#loading").hide();

              }        

          });
          }

           
          
        </script>

<?php

include_once("../gen/_common/footer.php"); // header contents

?>
