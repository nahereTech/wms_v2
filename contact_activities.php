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
                <h3>Contact History</h3>
              </div>

              <div class="title_right" style="text-align: right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group" style="float: right">
                    
                    <a href="contacts"><button type="button" class="btn btn-primary">Back</button></a>
                    
                    
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
                            
                        
                            <th class="column-title">Date </th>
                            <th class="column-title">Direction </th>
                            <th class="column-title">Item </th>
                            <th class="column-title">Person Concerned </th>
                            <th class="column-title">Qty </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="6">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                         <tr id="loading">
                          <td colspan="6"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;" ></i></td>
                        </tr>
                        
                        <tbody  id="contactData">
                          
                        
                          
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
            list_contact_activities('');
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


          function page_warehouse_access(){

            var company_id = localStorage.getItem('company_id');

            var user_id = localStorage.getItem('user_id');
            var module_id = 6;
            

            $.ajax({
                  
              type: "POST",
              dataType: "json",
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

          function list_contact_activities(page){

            var company_id = localStorage.getItem('company_id');

            var vendor_id = $.urlParam('id');
            if(page == ""){
              var page = 1;
            }
            var limit = 50;

            
            
            // alert(company_id);
            

            $("#loading").show();
            $("#contactData").html('');
            $("html, body").animate({ scrollTop: 0 }, "slow");

            $.ajax({
                  
              type: "POST",
              dataType: "json",
              url: api_path+"wms/list_vendor_activities",
              data: { "company_id": company_id, "page": page, "limit": limit, "vendor_id": vendor_id},
              timeout: 60000,

              success: function(response) {
                        
                  console.log(response);
                  
                  
                  var strTable = "";
                  
                  if (response.status == '200'){

                      if(response.data.length > 0){

                          var k = 1;
                          $.each(response['data'], function (i, v) {
                              // strTable += '<td width="8%" valign="top"><div class="profile_pic"><img src="'+base_url+'/erp/assets/admin_template/production/images/img.jpg" alt="..." width="50"></div></td>';

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
                             var d2 = new Date(response['data'][i]['outgoing_date']);
                             var monthIndex = d.getMonth();
                             var datestring = d.getDate()  + "/" +  monthNames[monthIndex] + "/" + d.getFullYear();
                              var monthIndex = d2.getMonth();
                             var datestring2 = d2.getDate()  + "/" +  monthNames[monthIndex] + "/" + d2.getFullYear();

                               

                              strTable += '<tr>';
                              
                              
                              if(response['data'][i]['store_type'] == "outgoing"){
                                strTable += '<td valign="top">'+datestring2+'</td>';
                                strTable += '<td valign="top"><i class="fa fa-long-arrow-up" aria-hidden="true"  style="font-size: 24px; color: red;"></i></td>';
                                
                                strTable += '<td valign="top">'+response['data'][i]['item_name']+'</td>';
                                strTable += '<td valign="top">'+response['data'][i]['person_concerned']+'</td>';
                                strTable += '<td valign="top">'+response['data'][i]['qty']+'</td>';

                                strTable += '<td valign="top"><a class="vendor_info btn btn-primary btn-xs"  id="venIn_'+response['data'][i]['vendor_id']+'"><i  class="fa fa-folder"  data-toggle="tooltip" data-placement="top" title="View Vendor info"></i> View</a>';

                                    strTable += '<i  class="fa fa-spinner fa-spin fa-1x fa-fw" aria-hidden="true" style="display: none;" id="loader11_'+response['data'][i]['vendor_id']+'"></i></td>';

                              }else if(response['data'][i]['store_type'] == "incoming"){
                                strTable += '<td valign="top">'+datestring+'</td>';
                                
                                strTable += '<td valign="top"><i class="fa fa-long-arrow-down" aria-hidden="true"  style="font-size: 24px; color: green;"></i></td>';
                                strTable += '<td valign="top">'+response['data'][i]['item_name']+'</td>';
                                strTable += '<td valign="top">'+response['data'][i]['person_concerned']+'</td>';
                                strTable += '<td valign="top">'+response['data'][i]['qty']+'</td>';

                                strTable += '<td valign="top"><a class="vendor_info btn btn-primary btn-xs"  id="venIn_'+response['data'][i]['vendor_id']+'"><i  class="fa fa-folder"  data-toggle="tooltip" data-placement="top" title="View Vendor info"></i> View</a>';

                                strTable += '<i  class="fa fa-spinner fa-spin fa-1x fa-fw" aria-hidden="true" style="display: none;" id="loader11_'+response['data'][i]['vendor_id']+'"></i></td>';
                              }
                              
                              
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
                             list_contact_activities(page);
                          }
                      });
                      
                      $('#loading').hide();
                      $("#contactData").html(strTable);
                      $("#contactData").show();

                  }else if(response.status == '400'){
                      
                      $('#loading').hide();
                      strTable += '<tr>';
                      strTable += '<td colspan="6">No result</td>';
                      strTable += '</tr>';

                      
                      $("#contactData").html(strTable);
                      $("#contactData").show();
                      

                  }else if(response.status == "401"){
                      //missing parameters
                      var strTable = "";
                      $('#loading').hide();
                      strTable += '<tr>';
                      strTable += '<td colspan="6">'+response.msg+'</td>';
                      strTable += '</tr>';

                      
                      $("#contactData").html(strTable);
                      $("#contactData").show();

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

                
                $("#contactData").html(strTable);
                $("#contactData").show();
                $("#loading").hide();

              }        

          });
          }

           
          
        </script>

<?php

include_once("../gen/_common/footer.php"); // header contents

?>   

