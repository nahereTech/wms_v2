    <!-- jQuery -->
    <!-- remember: move to footer -->
    <!-- jQuery -->

    <style type="text/css">
        /*.nav_menu{
            background: #EDEDED !important;
        }*/
    </style>

<script src="assets/js/common.js?v=1.4"></script>
    <script src="assets/js/wms.js?v=2.0"></script>


<script type="text/javascript">
    var base_url = window.location.origin + '/' + window.location.pathname.split( '/' )[1] + '/' 

$(document).ready(function() {
    list_of_company_warehouse();
    list_of_module_roles()

    var base_url = window.location.origin + '/' + window.location.pathname.split( '/' )[1]


            function list_of_module_roles(){

            var company_id = localStorage.getItem('company_id');

            $.ajax({
                  
              type: "POST",
              dataType: "json",
                    headers: {'Authorization':localStorage.getItem('token') },

              url: api_path+"wms/list_general_settings",
              data: { "module_id" : 6 , "company_id" : company_id },
              timeout: 60000,

              success: function(response) {

                $('#page_loader').hide();
                $('#main_display').show();     

                console.log(response);

                var k = 1;
                var tr_line = "";
                  
                if (response.status == '200'){

                  $('#fullname').html('Set your preference')
                  
                  //for each warehouse
                  var warehouse_id;
                  $.each(response.data, function (i, v) {


                      localStorage.setItem('setting_id', `${v.setting_id}`);

                    if(`${v.value}` == 'ro'){
                      localStorage.setItem('po', '');
                      localStorage.setItem('ro', 'checked');
                    } else if(`${v.value}` == 'po'){
                      localStorage.setItem('ro', '');
                      localStorage.setItem('po', 'checked');
                    }
                     })
                  $('#loading').hide();
                  $('#permData').html(tr_line);

                } 

                else {

                }

              },

                  error: function(response){
                    alert(response.msg)
      

}
              })

              } 
    function list_of_company_warehouse(){
            var company_id = localStorage.getItem('company_id');
             

            $("#loading").show();
            $("#warehouseData").html('');

            $.ajax({
                  
              type: "POST",
              dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },
              
              url: api_path+"wms/list_warehouse",
              data: { "company_id": company_id},
              timeout: 60000,

              success: function(response) {
                  
                  console.log(response);
                  $('#loading').hide();
                  var strTable = "";
                  
                  if (response.status == '200'){
                    if(response.data.length == 1){
                    localStorage.setItem('warehouse_id', response['data'][0]['warehouse_id']);
                    localStorage.setItem('warehouse_name', response['data'][0]['warehouse_name']);
                    }


                      if(response.data.length > 0){

                          var k = 1;
                          $.each(response['data'], function (i, v) {
                              // strTable += '<td width="8%" valign="top"><div class="profile_pic"><img src="'+base_url+'/erp/assets/admin_template/production/images/img.jpg" alt="..." width="50"></div></td>';

                              function status(string) {
                                  return string.charAt(0).toUpperCase() + string.slice(1);
                              }
                              strTable += '<tr id="row_'+response['data'][i]['warehouse_id']+'">';
                              
                              strTable += '<td width="75%" valign="top">'+status(response['data'][i]['warehouse_name'])+'</td>';
                              
                              strTable += '<td valign="top"> [<a href="batches?i='+response['data'][i]['warehouse_id']+'"><u>Batches</u></a>] &nbsp; [<a href="whsections?i='+response['data'][i]['warehouse_id']+'"><u>Sections</u></a>] &nbsp; <a class="warehouse_info btn btn-primary btn-xs" id="wareIn_'+response['data'][i]['warehouse_id']+'"><i  class="fa fa-eye"  data-toggle="tooltip" data-placement="top" title="View Warehouse Info"></i></a>';

                              strTable += '<i  class="fa fa-spinner fa-spin fa-1x fa-fw" aria-hidden="true" style="display: none;" id="loader11_'+response['data'][i]['warehouse_id']+'"></i>&nbsp;&nbsp;';

                              strTable += '<a class="edit_warehouse_icon btn btn-info btn-xs" id="warh_'+response['data'][i]['warehouse_id']+'" style="cursor: pointer;"><i  class="fa fa-pencil"  data-toggle="tooltip" data-placement="top" title="Edit Warehouses"></i> </a>';

                              strTable += '<i  class="fa fa-spinner fa-spin fa-1x fa-fw" aria-hidden="true" style="display: none;" id="loader_'+response['data'][i]['warehouse_id']+'"></i>&nbsp;&nbsp;';


                              strTable +=  '<a class="delete_warehouse btn btn-danger btn-xs" style="cursor: pointer;" id="war_'+response['data'][i]['warehouse_id']+'"><i  class="fa fa-trash-o"  data-toggle="tooltip" data-placement="top" title="Delete Warehouse"></i></a>&nbsp;&nbsp;';

                              strTable += '<a href="'+base_url+'warehouse_activities?id='+response['data'][i]['warehouse_id']+'"  class="btn btn-danger btn-xs"><i  class="fa fa-hourglass-half"  data-toggle="tooltip" data-placement="top" title="Activity History"></i></a></td>'; 

                              // strTable += '<a href="whsections?id='+response['data'][i]['warehouse_id']+'"  class="btn btn-danger btn-xs"><i  class="fa fa-hourglass-half"  data-toggle="tooltip" data-placement="top" title="Activity History"></i>sections</a></td>';
                              
                              strTable += '</tr>';



                              strTable += '<tr style="display: none;" id="loader_row_'+response['data'][i]['warehouse_id']+'">';
                              strTable += '<td colspan="2"><i class="fa fa-spinner fa-spin fa-fw fa-2x"  id="loading"></i>';
                              strTable +=  '</td>';
                              strTable += '</tr>';


                              k++;
                               
                          });

                      }else{

                          strTable = '<tr><td colspan="2">No record.</td></tr>';

                      }
    
                      $("#warehouseData").html(strTable);
                      $("#warehouseData").show();

                  }else if(response.status == '400'){
                      
                      $('#loading').hide();
                      strTable += '<tr>';
                      strTable += '<td colspan="2">No result</td>';
                      strTable += '</tr>';

                      
                      $("#warehouseData").html(strTable);
                      $("#warehouseData").show();
                      

                  }else if(response.status == "401"){
                      //missing parameters
                      var strTable = "";
                      $('#loading').hide();
                      strTable += '<tr>';
                      strTable += '<td colspan="2">'+response.msg+'</td>';
                      strTable += '</tr>';

                      
                      $("#warehouseData").html(strTable);
                      $("#warehouseData").show();

                  }


                  $("#loading").hide();
              
              },

              error: function(response){
                

                var strTable = "";
                $('#loading').hide();
                // alert(response.msg);
                strTable += '<tr>';
                strTable += '<td colspan="2"><strong class="text-danger">Connection error!</strong></td>';
                strTable += '</tr>';

                
                $("#warehouseData").html(strTable);
                $("#warehouseData").show();
                $("#loading").hide();

              }        

          });
          }
        // about_to_expire();

        // toggle-navbar

          var myVar2 = setInterval(function () {
        if ($("#does_user_have_roles").html() != "") {
            //stop the loop

            myStopFunction();
            // fetch_roles_user_can_access()

            //does user have access to this module
            user_page_access();
        } else {
            console.log("No profile");
        }
    }, 1000);

    function myStopFunction() {
        clearInterval(myVar2);
    }

    $("#add").on("click", user);
    $("#add_user").on("click", add_user);

    $(document).on("click", ".delete_user", function () {
        var row_id = $(this).attr("id").replace(/usr_/, "");
        delete_user(row_id);
    });
});

function user_page_access() {
    var role_list = $("#does_user_have_roles").html();
    var an_admin;
    var user_roles = [];
    var user_roles_2 = [];


     if (role_list.indexOf("-93-") >= 0 ) {
        $("#error_display").hide();
        $("#contacts").show(); // show contact page
        $(".dsh_dvs").hide();
        $("#home_dv").show();
        $("#main_display_loader_page").hide();
        $("#main_display").show();
        $(".versatile").hide();

     }

     if (role_list.indexOf("-94-") >= 0 ) {
        $("#error_display").hide();
        $(".home_dv").show();
        $("#contacts").show(); // show contact page
        $(".vendor_info").show();
        $(".dsh_dvs").hide();
        $("#main_display_loader_page").hide();
        $("#main_display").show();
        $(".versatile").hide();

     }

      if (role_list.indexOf("-95-") >= 0 ) {
        $("#error_display").hide();
        $("#home_dv").show();
        $(".versatile").hide();


        $("#contacts").show(); // show contact page
        $(".edit_vend").show();
        $(".dsh_dvs").hide();
        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

       if (role_list.indexOf("-96-") >= 0 ) {
            $("#error_display").hide();
            $("#home_dv").show();

            $("#contacts").show(); // show contact page
            $(".delete_vendor").show();
            $(".dsh_dvs").hide();

            $("#main_display_loader_page").hide();
            $("#main_display").show();
        }



        if (role_list.indexOf("-100-") >= 0 ) {
        $("#error_display").hide();
        $("#home_dv").show();


        $("#report_tab").show();
   
        $(".dsh_dvs").hide();


        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }


    if (role_list.indexOf("-101-") >= 0 && localStorage.getItem('warehouse_id')) {
        $(".dsh_dvs").hide();
        $("#home_dv").show();
        $(".versatile").hide();
        $("#admins_no_permission_dv").hide();


        



        //Settings
        // $("#procurement").show();
        // $("#purchaseorders").show();
        // $("#paystovendors").show();

        // $("#contacts").show(); // show contact page
        // $("#items").show(); //show items page
        // $("#procurement_report").show();
        // $("#vendors").show();
        // $("#expenses").show();
        // $("#sales_tab").show();


        // $("#invoicesreceipts").show();
        // $("#invoicesreceipts333").show();

        // $("#expense_dashboard").show();
        // $("#creditors_dashboard").show();
        // $("#items_dashboard").show();
        // $("#unique_dashboard").show();
        // $("#low_dashboard").show();
        // $("#expiry").show();
        // $("#expired").show();

        // $("#transactions_dashboard").show();
        // $("#expired_dashboard").show();
        // $("#incoming_graph").show();
        // $("#expenses_graph").show();
        // $("#profit_loss_graph").show();
        // $("#warehouse_value").show();
        // $("#report_tab").show();
        // $("#transfer").show();
        $(".settings_tab").show();
        $("#main_display_loader_page").hide();
        $("#main_display").show();

    } else if(role_list.indexOf("-101-") >= 0 && !(localStorage.getItem('warehouse_id'))){
        $(".dsh_dvs").hide();
        $("#home_dv").hide();
        $(".versatile").hide();
        
        $("#sales_tab").hide();
        $("#report_tab").hide();

        $("#admins_no_permission_dv").show();




        //Settings
        // $("#procurement").show();
        // $("#purchaseorders").show();
        // $("#paystovendors").show();

        // $("#contacts").show(); // show contact page
        // $("#items").show(); //show items page
        // $("#procurement_report").show();
        // $("#vendors").show();
        // $("#expenses").show();
        // $("#sales_tab").show();


        // $("#invoicesreceipts").show();
        // $("#invoicesreceipts333").show();

        // $("#expense_dashboard").show();
        // $("#creditors_dashboard").show();
        // $("#items_dashboard").show();
        // $("#unique_dashboard").show();
        // $("#low_dashboard").show();
        // $("#expiry").show();
        // $("#expired").show();

        // $("#transactions_dashboard").show();
        // $("#expired_dashboard").show();
        // $("#incoming_graph").show();
        // $("#expenses_graph").show();
        // $("#profit_loss_graph").show();
        // $("#warehouse_value").show();
        // $("#report_tab").show();
        // $("#transfer").show();
        $(".settings_tab").show();
        $("#main_display_loader_page").hide();
        $("#main_display").show();
    }

       if (role_list.indexOf("-84-") >= 0 ) {
        $("#error_display").hide();
        $(".crt_exp").show();
        $(".dsh_dvs").hide();
        $("#home_dv").show();
        $(".versatile").hide();





        $("#expenses").show();

        $("#expense_dashboard").show();
        $("#expenses_graph").show();

        $("#main_display_loader_page").hide();
        $("#main_display").show();

        list_of_warehouse_users("");
    }

    if (role_list.indexOf("-85-") >= 0 ) {
        $("#error_display").hide();
        $(".dsh_dvs").hide();
        $("#home_dv").show();
        $(".versatile").hide();




        $("#expenses").show();

        $("#expense_dashboard").show();
        $("#expenses_graph").show();

        $("#main_display_loader_page").hide();
        $("#main_display").show();

    }

     if (role_list.indexOf("-86-") >= 0 ) {
        $("#error_display").hide();
        $(".dsh_dvs").hide();
        $("#home_dv").show();
        $(".versatile").hide();




        $("#expenses").show();
        $("#expense_dashboard").show();
        $("#expenses_graph").show();

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }








     if (role_list.indexOf("-87-") >= 0 ) {
        $("#error_display").hide();
               $("#items").show(); //show items page
               $("#items_dashboard").show();
        $(".items_activities").show();
        $(".add_item").show();
        $(".home_dv").hide();
        $(".dsh_dvs").show();




           // $("#transactions_out_dashboard").show();
        $("#best_selling_items").show();
        $("#lowest_selling_items").show();
        $("#expired").show();
        $("#expiry").show();
        $("#low_dashboard").show();
         $("#items_dashboard").show();
        $("#unique_dashboard").show();

        



        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

if (role_list.indexOf("-88-") >= 0 ) {
        $("#error_display").hide();

        $("#items").show(); //show items page
        $("#items_dashboard").show();
        $(".items_activities").show();
        $(".home_dv").hide();
        $(".dsh_dvs").show();



           // $("#transactions_out_dashboard").show();
        $("#best_selling_items").show();
        $("#lowest_selling_items").show();
        $("#expired").show();
        $("#expiry").show();
        $("#items_dashboard").show();
        $("#unique_dashboard").show();



        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

if (role_list.indexOf("-89-") >= 0 ) {
        $("#error_display").hide();

        $("#items").show(); //show items page
        $("#items_dashboard").show();
        $(".items_activities").show();
        $("#main_display_loader_page").hide();
        $("#main_display").show();
        $(".home_dv").hide();
        $(".dsh_dvs").show();

        // $("#transactions_out_dashboard").show();
        $("#best_selling_items").show();
        $("#lowest_selling_items").show();
        $("#expired").show();
        $("#expiry").show();
        $("#low_dashboard").show();
         $("#items_dashboard").show();
        $("#unique_dashboard").show();
        list_of_warehouse_users("");
     }
     if (role_list.indexOf("-90-") >= 0 ) {
        $("#error_display").hide();
        $(".itm_del").show();
        $(".home_dv").hide();
        $(".dsh_dvs").show();

           // $("#transactions_out_dashboard").show();
        $("#best_selling_items").show();
        $("#lowest_selling_items").show();
        $("#expired").show();
        $("#expiry").show();
        $("#low_dashboard").show();
         $("#items_dashboard").show();
        $("#unique_dashboard").show();

        $("#items").show(); //show items page
        $("#items_dashboard").show();

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
       if (role_list.indexOf("-91-") >= 0 ) {
        $("#error_display").hide();
        $("#items").show(); //show items page
        $("#items_dashboard").show();
        $(".itm_info").show();
        $(".dsh_dvs").show();

        $(".home_dv").hide();

           // $("#transactions_out_dashboard").show();
        $("#best_selling_items").show();
        $("#lowest_selling_items").show();
        $("#expired").show();
        $("#expiry").show();
        $("#low_dashboard").show();
         $("#items_dashboard").show();
        $("#unique_dashboard").show();

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
      if (role_list.indexOf("-92-") >= 0 ) {
        $("#error_display").hide();
        $("#contacts").show(); // show contact page
        $("#add_vendor").show();
        $("#main_display_loader_page").hide();
        $("#main_display").show();
        $(".home_dv").show();
        $(".dsh_dvs").hide();
        $(".versatile").hide();


     }
     
     if (role_list.indexOf("-97-") >= 0 ) {
        $("#error_display").hide();
        $("#qty_adjustment").show();
        $("#upward_adjustment").show();
        $("#qty_adj_history").hide();
        $(".home_dv").hide();
        $(".dsh_dvs").show();


        $("#items_dashboard").show();
        $("#unique_dashboard").show();

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
     if (role_list.indexOf("-98-") >= 0 ) {
        $("#error_display").hide();
        $("#qty_adjustment").show();
        $("#downward_adjustment").show();
        $("#qty_adj_history").hide();
        $(".dsh_dvs").show();

        $(".home_dv").hide();

         $("#items_dashboard").show();
        $("#unique_dashboard").show();

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
     if (role_list.indexOf("-99-") >= 0 ) {
        $("#error_display").hide();
        $("#qty_adjustment").show();
        $("#qty_adj_history").show();
        $(".home_dv").hide();
        $(".dsh_dvs").show();

         $("#items_dashboard").show();
        $("#unique_dashboard").show();

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

  
      








      if (role_list.indexOf("-102-") >= 0 ) {
        $("#error_display").hide();
        $(".home_dv").hide();
        $(".dsh_dvs").show();

        
         $("#procurement").show();
         $("#paystovendors").hide();
         $("#expense_dashboard").show();
        $("#creditors_dashboard").show();
        $("#total_overdue_inv").show();
         $("#createpoorder").show();
         $("#profit_loss_graph").show();
         $("#expenses_graph").show();

         

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

       if (role_list.indexOf("-103-") >= 0 ) {
        $("#error_display").hide();
        $(".home_dv").hide();
$(".dsh_dvs").show();

         $("#procurement").show();
         $("#paystovendors").hide();
         $("#purchaseorders").show();
        $("#expense_dashboard").show();
        $("#creditors_dashboard").show();
        $("#total_overdue_inv").show();
          $("#profit_loss_graph").show();
         $("#expenses_graph").show();

   

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

       if (role_list.indexOf("-104-") >= 0 ) {
        $("#error_display").hide();
        $(".home_dv").hide();
        $(".dsh_dvs").show();
        $("#procurement").show();
        $(".del_this_grn").show();
        $("#expense_dashboard").show();
        $("#creditors_dashboard").show();
        $("#total_overdue_inv").show();

          $("#profit_loss_graph").show();
         $("#expenses_graph").show();

         $("#paystovendors").hide();
         $("#purchaseorders").show();
   

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
       if (role_list.indexOf("-105-") >= 0 ) {
        $("#error_display").hide();
        $(".home_dv").hide();
        $(".dsh_dvs").show();

        $("#procurement").show();
        $(".incoming_info").show();
        $("#expense_dashboard").show();
        $("#creditors_dashboard").show();
        $("#total_overdue_inv").show();
          $("#profit_loss_graph").show();
         $("#expenses_graph").show();

        $("#paystovendors").hide();
        $("#purchaseorders").show();
   

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
       if (role_list.indexOf("-106-") >= 0 ) {
        $("#error_display").hide();
        $(".home_dv").hide();
        $(".dsh_dvs").show();

        $("#procurement").show();
        $("#show_po_box").show();
          $("#expense_dashboard").show();
        $("#creditors_dashboard").show();
        $("#total_overdue_inv").show();

          $("#profit_loss_graph").show();
         $("#expenses_graph").show();
   

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
       if (role_list.indexOf("-107-") >= 0 ) {
        $("#error_display").hide();
        $(".home_dv").hide();
        $(".dsh_dvs").show();

        $("#paystovendors").show();
          $("#expense_dashboard").show();
        $("#creditors_dashboard").show();
        $("#total_overdue_inv").show();

          $("#profit_loss_graph").show();
         $("#expenses_graph").show();
   

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
       if (role_list.indexOf("-108-") >= 0 ) {
        $("#error_display").hide();
        $(".home_dv").hide();
        $(".dsh_dvs").show();

        $("#paystovendors").show();
        $(".incoming_info").show();
          $("#expense_dashboard").show();
        $("#creditors_dashboard").show();
        $("#total_overdue_inv").show();

          $("#profit_loss_graph").show();
         $("#expenses_graph").show();


        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
       if (role_list.indexOf("-109-") >= 0 ) {
        $("#error_display").hide();
        $("#paystovendors").show();
        $(".home_dv").hide();

        $("#del_this_grn").show();
          $("#expense_dashboard").show();
        $("#creditors_dashboard").show();
        $("#total_overdue_inv").show();

          $("#profit_loss_graph").show();
          $("#expenses_graph").show();



         
   

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
     

       if (role_list.indexOf("-110-") >= 0 ) {
        $("#error_display").hide();
        $("#incoming_tab").show();
        $("#itemsreceivedlist").show();
        $("#show_po_box").show();
        $("#incoming_graph").show();

        $(".home_dv").hide();
        $(".dsh_dvs").show();


        

        $("#transactions_in_dashboard").show();
        $("#best_selling_items").show();
        $("#lowest_selling_items").show();
        $("#items_dashboard").show();
        $("#unique_dashboard").show();




        

        

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

     if (role_list.indexOf("-111-") >= 0 ) {
        $("#error_display").hide();
        $("#incoming_tab").show();
        $("#itemsreceivedlist").show();
        $(".home_dv").hide();
        $(".dsh_dvs").show();

        $("#transactions_in_dashboard").show();
        $("#best_selling_items").show();
        $("#lowest_selling_items").show();
        $("#items_dashboard").show();
        $("#unique_dashboard").show();

        $("#incoming_graph").show();


        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
     if (role_list.indexOf("-112-") >= 0 ) {
        $("#error_display").hide();
        $("#incoming_tab").show();
        $("#incoming_info").show();
        $(".home_dv").hide();
        $(".dsh_dvs").show();

        $("#transactions_in_dashboard").show();
        $("#best_selling_items").show();
        $("#lowest_selling_items").show();
        $("#items_dashboard").show();
        $("#unique_dashboard").show();

        $("#incoming_graph").show();


     
        $("#itemsreceivedlist").show();

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

     if (role_list.indexOf("-113-") >= 0 ) {
        $("#error_display").hide();
        $(".home_dv").hide();
        $(".dsh_dvs").show();
     
        $("#createissueorder").show();
        $("#revenue_dashboard").show();
        $("#total_overdue_inv").show();
        $("#debtors_dashboard").show();

         $("#profit_loss_graph").show();
         $("#revenue_graph").show();

        

        

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

     if (role_list.indexOf("-114-") >= 0 ) {
        $("#error_display").hide();
        $(".home_dv").hide();
        $(".dsh_dvs").show();
       
        // $("#invoicesreceipts").show();
        $("#sales_tab").show();
        $("#invoicesreceipts333").show();

         $("#revenue_dashboard").show();
        $("#total_overdue_inv").show();
        $("#debtors_dashboard").show();

         $("#profit_loss_graph").show();
         $("#revenue_graph").show();

        

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

     if (role_list.indexOf("-115-") >= 0 ) {
        $("#error_display").hide();
        $(".home_dv").hide();
        $(".dsh_dvs").show();

         $("#profit_loss_graph").show();
         $("#revenue_graph").show();
   
        $("#del_this_grn").show();
        $("#revenue_dashboard").show();
        $("#total_overdue_inv").show();
        $("#debtors_dashboard").show();
        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

     if (role_list.indexOf("-116-") >= 0 ) {
        $("#error_display").hide();
        
        $("#incoming_info").show();

         $("#profit_loss_graph").show();
         $("#revenue_graph").show();

         $("#revenue_dashboard").show();
        $("#total_overdue_inv").show();
        $("#debtors_dashboard").show();
        $(".home_dv").hide();

     
      

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

      if (role_list.indexOf("-117-") >= 0 ) {
        $("#error_display").hide();
        
        $("#incoming_info").show();

         $("#profit_loss_graph").show();
         $("#revenue_graph").show();

         $("#revenue_dashboard").show();
        $("#total_overdue_inv").show();
        $("#debtors_dashboard").show();

      $(".home_dv").hide();
        $(".dsh_dvs").show();
     
      

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

      if (role_list.indexOf("-118-") >= 0 ) {
        $("#error_display").hide();
        
        $("#incoming_info").show();

         $("#profit_loss_graph").show();
         $("#revenue_graph").show();

         $("#revenue_dashboard").show();
        $("#total_overdue_inv").show();
        $("#debtors_dashboard").show();

     
       $(".home_dv").hide();
        $(".dsh_dvs").show();
      

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

      if (role_list.indexOf("-119-") >= 0 ) {
        $("#error_display").hide();
        
        $("#show_po_box").show();

          $("#profit_loss_graph").show();
         $("#revenue_graph").show();

        $(".home_dv").hide();
        $(".dsh_dvs").show();

     
       $("#revenue_dashboard").show();
        $("#total_overdue_inv").show();
        $("#debtors_dashboard").show();

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
      if (role_list.indexOf("-120-") >= 0 ) {
        $("#error_display").hide();
        
        $("#paysfromclients_2").show();
        $("#profit_loss_graph").show();
        $("#revenue_graph").show();
        $(".home_dv").hide();
        $(".dsh_dvs").show();


        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

     if (role_list.indexOf("-123-") >= 0 ) {
        $("#error_display").hide();
        
        $("#incoming_info").show();

        $(".home_dv").hide();
        $(".dsh_dvs").show();


        $("#profit_loss_graph").show();
         $("#revenue_graph").show();

      

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

      if (role_list.indexOf("-124-") >= 0 ) {
        $("#error_display").hide();
        
        $("#del_this_grn").show();
        $(".home_dv").hide();
        $(".dsh_dvs").show();


          $("#profit_loss_graph").show();
         $("#revenue_graph").show();
      

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }



     if (role_list.indexOf("-125-") >= 0 ) {

        $("#error_display").hide();
        $("#outgoing_tab").show(); //show items page
        $("#supplyitems").show(); //show items page
        $("#show_po_box").show();
        $(".home_dv").hide();
        $(".dsh_dvs").show();


          $("#transactions_out_dashboard").show();
        $("#best_selling_items").show();
        $("#lowest_selling_items").show();
        $("#expired").show();
        $("#expiry").show();
        $("#low_dashboard").show();
        $("#outgoing_graph").show();


        
    

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

     if (role_list.indexOf("-126-") >= 0 ) {
        $("#error_display").hide();
        $("#supplyitems").show();
        $("#transactions_out_dashboard").show();
        $("#best_selling_items").show();
        $("#lowest_selling_items").show();
        $("#expired").show();
        $("#expiry").show();
        $("#low_dashboard").show();
        $("#outgoing_graph").show();
        $("#main_display_loader_page").hide();
        $("#main_display").show();
        $(".home_dv").hide();
        $(".dsh_dvs").show();


     }

    // if (role_list.indexOf("-2-") >= 0) {
    //     //Procurement

    //     $("#procurement").show();
    //     $("#purchaseorders").show();
    //     $("#paystovendors").show();

    //     $("#contacts").show(); // show contact page
    //     $("#items").show(); //show items page
    //     $("#procurement_report").show();
    //     $("#vendors").show();
    //     $("#expenses").show();

    //     $("#expense_dashboard").show();
    //     $("#creditors_dashboard").show();
    //     $("#items_dashboard").show();
    //     $("#unique_dashboard").show();
    //     $("#low_dashboard").show();
    //     $("#expiry").show();
    //     $("#expired").show();

    //     $("#transactions_dashboard").show();
    //     $("#expired_dashboard").show();
    //     $("#incoming_graph").show();
    //     $("#expenses_graph").show();
    //     $("#profit_loss_graph").show();
    //     $("#warehouse_value").show();
    //     $("#report_tab").show();
    //     $("#transfer").show();
    //     user_roles_2.push(2);
    //     $("#main_display_loader_page").hide();
    //     $("#main_display").show();


    //     list_of_warehouse_users("");

    //     var roles = localStorage.getItem("user_role");
    //     var arr = ["2", "4"];
    //     var users = roles.split(",");

    //     users.map((a, i) => {
    //         if (a.includes(arr[i])) {
    //             $("#expenses_revenue").show();
    //             $("#expenses_graph").hide();
    //             $("#revenue_graph").hide();
    //         }
    //     });

    //     // if(Array.from(Number(roles)).includes(2 & 4)){
    //     //    alert(roles)
    //     // }
    // }

    // if (role_list.indexOf("-26-") >= 0) {
    //     //warehouse manager

    //     $("#incoming_tab").show(); //warehouse manager
    //     $("#receiveorders").show(); //receive orders/create orders

    //     $("#outgoing_tab").show(); //warehouse manager
    //     $("#invoicesreceipts").show();
    //     $("#supplyitems").show(); //but cannot issue
    //     $("#contacts").show(); // show contact page
    //     $("#items").show(); //show items page
    //     $("#itemsreceivedlist").show();
    //     $("#qty_adjustment").show();
    //     $("#report_tab").show();
    //     $("#transfer").show();

    //     $("#items_dashboard").show();
    //     $("#unique_dashboard").show();
    //     $("#low_dashboard").show();
    //     $("#expiry").show();
    //     $("#expired").show();
    //     $("#transactions_dashboard").show();
    //     $("#expired_dashboard").show();
    //     $("#transactions_activities").show();
    //     $("#warehouse_value").show();

    //     user_roles_2.push(26);

    //     $("#main_display_loader_page").hide();
    //     $("#main_display").show();

    //     list_of_warehouse_users("");

    //     //if the
    //     if (localStorage.getItem("warehouse_id") != "") {
    //         $("#whsections").attr("href", "whsections?i=" + localStorage.getItem("warehouse_id"));
    //         $("#whsections").show(); //
    //     }
    // }

    // if (role_list.indexOf("-24-") >= 0) {
    //     //store manager outgoing

    //     $("#outgoing_tab").show(); //warehouse manager
    //     $("#supplyitems").show();
    //     $("#items_dashboard").show();
    //     $("#unique_dashboard").show();
    //     $("#low_dashboard").show();
    //     $("#expiry").show();
    //     $("#expired").show();
    //     $("#transactions_out_dashboard").show();
    //     $("#expired_dashboard").show();
    //     $("#outgoing_graph").show();
    //     $("#invoicesreceipts").hide();
    //     $("#report_tab").show();
    //     $("#transfer").hide();
    //     $("#qty_adjustment").hide();

    //     user_roles_2.push(24);

    //     var roles = localStorage.getItem("user_role");
    //     var users = roles.split(",");

    //     users.map((a) => {
    //         if (a.includes("26")) {
    //             $("#outgoing_graph").hide();
    //         }
    //     });
    // }

    // if (role_list.indexOf("-3-") >= 0) {
    //     //store manager incoming

    //     $("#incoming_tab").show();
    //     $("#itemsreceivedlist").show();
    //     $("#items_dashboard").show();
    //     $("#unique_dashboard").show();
    //     $("#low_dashboard").show();
    //     $("#transactions_in_dashboard").show();
    //     $("#expired_dashboard").show();
    //     $("#expiry").show();
    //     $("#expired").show();
    //     $("#incoming_graph").show();
    //     $("#receiveorders").hide();
    //     $("#report_tab").show();
    //     $("#transfer").hide();
    //     $("#qty_adjustment").hide();

    //     user_roles_2.push(3);
    //     $("#main_display_loader_page").hide();
    //     $("#main_display").show();

    //     list_of_warehouse_users("");

    //     var roles = localStorage.getItem("user_role");
    //     var users = roles.split(",");

    //     users.map((a) => {
    //         if (a.includes("26")) {
    //             $("#incoming_graph").hide();
    //             $("#transfer").show();
    //             $("#qty_adjustment").show();
    //         }
    //     });
    // }

    if (role_list.indexOf("-0-") >= 0) {
        //store manager incoming
        $("#settings_tab").show();
    }

    var user_po = localStorage.getItem("po") == "checked";
    var user_ro = localStorage.getItem("ro") == "checked";


    if (user_ro) {
        // $("#invoicesreceipts").show();

        $("#expense_dashboard").hide();
        $("#creditors_dashboard").hide();
        $("#revenue_dashboard").hide();
        $("#debtors_dashboard").hide();
        $("#warehouse_value").hide();
        $("#main_display_loader_page").hide();
        $("#main_display").show();

        // list_of_warehouse_users("");
    }
    // if (preference == "ro" && role_list.indexOf("-25-") >= 0) {
    //     $("#report_tab").show();

    //     $("#expense_dashboard").hide();
    //     $("#creditors_dashboard").hide();
    //     $("#revenue_dashboard").hide();
    //     $("#debtors_dashboard").hide();
    //     $("#items_dashboard").show();
    //     $("#unique_dashboard").show();
    //     $("#low_dashboard").show();
    //     $("#transactions_in_dashboard").show();
    //     $("#transactions_out_dashboard").show();
    //     $("#expired_dashboard").show();
    //     $("#expenses_graph").hide();
    //     $("#transactions_activities").show();
    //     $("#warehouse_value").hide();
    //     $("#profit_loss_graph").show();
    //     $("#expenses_revenue").hide();
    //     $("#report_tab").show();
    //     $("#transfer").show();

    //     user_roles_2.push(25);

    //     $("#main_display_loader_page").hide();
    //     $("#main_display").show();

    //     list_of_warehouse_users("");

    //     var roles = localStorage.getItem("user_role");
    //     var arr = ["2", "3", "4", "24"];
    //     var users = roles.split(",");

    //     users.map((a, i) => {
    //         if (a.includes(arr[i])) {
    //             $("#outgoing_graph").hide();
    //             $("#incoming_graph").hide();
    //         }
    //     });
    // }

    if (user_po) {
      $("#invoicesreceipts").hide();

    }
    // if (preference == 'po' && v.id == 2||) {
    //     $("#qty_adjustment").show();
    //     $("#transfer").show();
    // }



     if($('#expenses_graph').css('display') == 'block')
    {

        $("#revenue_graph").hide()

    }

     if($('#incoming_graph').css('display') == 'block' && $('#outgoing_graph').css('display') == 'block')
    {
        $('#incoming_graph').hide();
        $('#outgoing_graph').hide();
        $("#inc_out_graph").show();
    }

     if($('.dsh_dvs').css('display') == 'block')
    {
      $(".versatile").show();
    }

       // if (preference == "po"){
       //  $("#invoicesreceipts").hide();
       // }



    

    if (user_po && role_list.indexOf("-101-") >= 0) {
        $("#report_tab").show();
        $("#sales_tab").show();
        $("#invoicesreceipts").hide();

        // $("#qty_adjustment").show();

        $("#expense_dashboard").show();
        $("#creditors_dashboard").show();
        $("#revenue_dashboard").show();
        $("#debtors_dashboard").show();
        $("#items_dashboard").show();
        $("#unique_dashboard").show();
        $("#low_dashboard").show();
        $("#transactions_in_dashboard").show();
        $("#transactions_out_dashboard").show();
        $("#expired_dashboard").show();
        // $("#expenses_graph").show();
        $("#warehouse_value").show();
        $("#transactions_activities").show();
        $("#profit_loss_graph").show();
        $("#expenses_revenue").show();
        $("#report_tab").show();
        $("#transfer").show();

        user_roles_2.push(25);

        $("#main_display_loader_page").hide();
        $("#main_display").show();

        // list_of_warehouse_users("");

        // var roles = localStorage.getItem("user_role");
        // var arr = ["2", "3", "4", "24"];
        // var users = roles.split(",");

        // users.map((a, i) => {
        //     if (a.includes(arr[i])) {
        //         $("#outgoing_graph").hide();
        //         $("#incoming_graph").hide();
        //     }
        // });

        // $("#outgoing_graph").show();
        // $("#incoming_graph").show();
        //   var roles = localStorage.getItem("user_role");
        // var users = roles.split(',')

        // users.map((a,i) => {
        //   if(a.includes('25')){
        //   $("#incoming_graph").hide();
        //   $("#outgoing_graph").hide();
        //   }
        // })
    }
    if (role_list.indexOf("-4-") >= 0) {
        $("#sales_tab").show();
        $("#revenue_dashboard").show();
        $("#debtors_dashboard").show();
        $("#items_dashboard").show();
        $("#unique_dashboard").show();
        $("#low_dashboard").show();
        $("#transactions_dashboard").show();
        $("#expired_dashboard").show();
        $("#profit_loss_graph").show();
        $("#revenue_graph").show();
        $("#outgoing_graph").show();
        $("#warehouse_value").show();
        $("#report_tab").show();
        $("#transfer").show();

        user_roles_2.push(4);

        $("#main_display_loader_page").hide();
        $("#main_display").show();

        list_of_warehouse_users("");

        // var roles = localStorage.getItem("user_role");
        // var arr = ["2", "4"];
        // var users = roles.split(",");
        // console.log(users);

        // users.map((a, i) => {
        //     if (a.includes(arr[i])) {
        //         $("#expenses_revenue").show();
        //         $("#expenses_graph").hide();
        //         $("#revenue_graph").hide();
        //         $("#main_display_loader_page").hide();
        //         $("#main_display").show();

        //         list_of_warehouse_users("");
        //     }
        // });
    }

    // arr2.map((a, i) => {
    //     if (a.includes(user_roles_2[i])){
    //         $("#transfer").show();
    //         $("#qty_adjustment").show();
    //     }
    // })

    var arr2 = [2, 4, 26];

    arr2.some((a, i) => {
        if (user_roles_2[i] == parseInt(a)) {
            console.log(a);
            console.log(user_roles_2[i]);
            $("#transfer").show();
            $("#qty_adjustment").show();
            $("#main_display_loader_page").hide();
            $("#main_display").show();

            list_of_warehouse_users("");
        }
    });

    console.log(Number(localStorage.getItem("warehouses")));

    if (Number(localStorage.getItem("warehouses")) < 2) {
        // alert('here')
        $("#transfer").hide();
    } else {
        $("#loader_mssg").html("You do not have access to this page");
        $("#ldnuy").hide();
        // $("#modal_no_access").modal('show');
    }
}

function delete_user(row_id) {
    var company_id = localStorage.getItem("company_id");
    var module_id = 6;

    var ans = confirm("Are you sure you want to delete this user?");
    if (!ans) {
        return;
    }

    $("#row_" + row_id).hide();
    $("#loader_row_" + row_id).show();
    $.ajax({
        type: "POST",
        dataType: "json",
        // url: api_path+"modules/delete_module_user",
        url: api_path + "user/remove_user_from_this_module",
        data: { company_id: company_id, module_id: module_id, user_id: row_id },
        timeout: 60000, // sets timeout to one minute
        // objAJAXRequest, strError

        error: function (response) {
            $("#loader_row_" + row_id).hide();
            $("#row_" + row_id).show();

            alert("connection error");
        },

        success: function (response) {
            // console.log(response);
            if (response.status == "200") {
                $("#row_" + row_id).hide();
            } else {
                alert("Error Deleting User");
            }

            $("#loader_row_" + row_id).hide();
        },
    });
}

function edit_company_warehouse(warehouse_id) {
    var warehouse_name = $("#modal_edit_warehouse #warehouse_name").val();
    var warehouse_address = $("#modal_edit_warehouse #warehouse_address").val();
    var company_id = localStorage.getItem("company_id");

    var blank;

    // alert(warehouse_id);

    $("#modal_edit_warehouse .required").each(function () {
        var the_val = $.trim($(this).val());

        if (the_val == "" || the_val == "0") {
            $(this).addClass("has-error");

            blank = "yes";
        } else {
            $(this).removeClass("has-error");
        }
    });

    if (blank == "yes") {
        $("#modal_edit_warehouse #error").html("You have a blank field");

        return;
    }

    // $("#modal_edit_warehouse #error").html("");

    $("#modal_edit_warehouse #edit_ware").hide();
    $("#modal_edit_warehouse #edit_ware_loader").show();

    $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        url: api_path + "wms/edit_warehouse",
        data: { warehouse_name: warehouse_name, warehouse_address: warehouse_address, company_id: company_id, warehouse_id: warehouse_id },

        success: function (response) {
            console.log(response);

            if (response.status == "200") {
                $("#modal_edit_warehouse #error").html("");
                $("#modal_edit_warehouse #edit_ware_loader").hide();
                $("#modal_edit_warehouse #edit_ware").show();

                $("#modal_edit_warehouse #edit_form").hide();
                $("#modal_edit_warehouse #edit_msg").show();

                // $('#modal_department_edit').on('hidden.bs.modal', function () {
                //     $('#department_name').val();
                //     $('#department_description').val();
                //     // window.location.reload();
                //     window.location.href = base_url+"/erp/hrm/departments";
                // })
            } else if (response.status == "400") {
                // coder error message

                $("#modal_edit_warehouse #error").html("Technical Error. Please try again later.");
            } else if (response.status == "401") {
                //user error message

                $("#modal_edit_warehouse #error").html(response.msg);
            }
        },

        error: function (response) {
            console.log(response);
            $("#modal_edit_warehouse #edit_ware_loader").hide();
            $("#modal_edit_warehouse #edit_ware").show();
            $("#modal_edit_warehouse #error").html("Connection Error.");
        },
    });
}

function fetch_warehouse_info(warehouse_id) {
    var company_id = localStorage.getItem("company_id");

    $("#wareIn_" + warehouse_id).hide();
    $("#loader11_" + warehouse_id).show();

    $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        url: api_path + "wms/get_warehouse_details",
        data: { warehouse_id: warehouse_id, company_id: company_id },

        success: function (response) {
            var str = "";
            console.log(response);

            $("#loader11_" + warehouse_id).hide();
            $("#wareIn_" + warehouse_id).show();

            if (response.status == "200") {
                $("#modal_view_warehouse #name").html(response.data.warehouse_name);
                $("#modal_view_warehouse #address").html(response.data.warehouse_address);

                $("#modal_view_warehouse").modal("show");
            }
        },

        error: function (response) {
            $("#loader11_" + warehouse_id).hide();
            $("#wareIn_" + warehouse_id).show();
            alert("Connection Error.");
        },
    });
}

function fetch_warehouse_details(warehouse_id) {
    // var pathArray = window.location.pathname.split( '/' );
    // var warehouse_id = $.urlParam('id');

    var company_id = localStorage.getItem("company_id");

    $("#warh_" + warehouse_id).hide();
    $("#loader_" + warehouse_id).show();

    $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        url: api_path + "wms/get_warehouse_details",
        data: { warehouse_id: warehouse_id, company_id: company_id },

        success: function (response) {
            var str = "";
            console.log(response);
            $("#modal_edit_warehouse #error").html("");

            $("#modal_edit_warehouse .required").each(function () {
                var the_val = $.trim($(this).val());

                $(this).removeClass("has-error");
            });
            $("#loader_" + warehouse_id).hide();
            $("#warh_" + warehouse_id).show();
            if (response.status == "200") {
                $("#modal_edit_warehouse #warehouse_name").val(response.data.warehouse_name);
                $("#modal_edit_warehouse #warehouse_address").val(response.data.warehouse_address);

                // str += '<button type="submit" class="btn btn-success" id="edt_'+response.data.warehouse_id+'" class="update_ware">Update</button>';
                // str += '<i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="edit_ware_loader"></i>';

                // $("#modal_edit_warehouse #form_footer").html(str);
                $("#modal_edit_warehouse").modal("show");
            }
        },

        error: function (response) {
            $("#loader_" + warehouse_id).hide();
            $("#warh_" + warehouse_id).show();
            alert("Connection Error.");
        },
    });
}

function delete_warehouse(warehouse_id) {
    var company_id = localStorage.getItem("company_id");

    var ans = confirm("Are you sure you want to delete this warehouse?");
    if (!ans) {
        return;
    }

    $("#row_" + warehouse_id).hide();
    $("#loader_row_" + warehouse_id).show();
    $.ajax({
        type: "POST",
        dataType: "json",
        url: api_path + "wms/delete_warehouse",
        data: { company_id: company_id, warehouse_id: warehouse_id },
        timeout: 60000, // sets timeout to one minute
        // objAJAXRequest, strError

        error: function (response) {
            $("#loader_row_" + warehouse_id).hide();
            $("#row_" + warehouse_id).show();

            alert("connection error");
        },

        success: function (response) {
            // console.log(response);
            if (response.status == "200") {
                // $('#row_'+user_id).hide();
            } else if (response.status == "401") {
            }

            $("#loader_row_" + warehouse_id).hide();
        },
    });
}

function add_user() {
    var company_id = localStorage.getItem("company_id");
    var module_id = 6;
    var email = $("#email").val();

    // alert(employee_id);
    var blank;

    // alert('welcome');

    $(".required").each(function () {
        var the_val = $.trim($(this).val());

        if (the_val == "" || the_val == "0") {
            $(this).addClass("has-error");

            blank = "yes";
        } else {
            $(this).removeClass("has-error");
        }
    });

    if (blank == "yes") {
        return;
    }
    if (!validateEmail(email)) {
        // $('#error-email').show();
        $("#error").html("invalid Email");

        return;
    }

    // alert('success');
    $("#add_user").hide();
    $("#user_loader").show();

    $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        url: api_path + "user/add_module_user",
        data: { company_id: company_id, module_id: module_id, email: email, role_id: 3 },

        success: function (response) {
            console.log(response);

            if (response.status == "200") {
                $("#error").html("");
                $("#modal_warehouse_user").modal("show");

                $("#modal_warehouse_user").on("hidden.bs.modal", function () {
                    // do something…
                    $("#user_display").hide();
                    window.location.reload();
                    //window.location.href = base_url+"/erp/hrm/employees";
                });
            } else if (response.status == "400") {
                // coder error message

                $("#error").html(response.msg);
            } else if (response.status == "401") {
                //user error message

                $("#error").html(response.msg);
            }

            $("#add_user").show();
            $("#user_loader").hide();
        },

        error: function (response) {
            $("#add_user").show();
            $("#user_loader").hide();
            $("#error").html("Connection Error.");
        },
    });
}

function user() {
    $("#user_display").toggle();
    $("#email").val("");

    $("#error").html("");

    $(".required").each(function () {
        var the_val = $.trim($(this).val());

        $(this).removeClass("has-error");
    });
}

function list_of_warehouse_users(page) {
    // fetch_user_module_roles();
    var company_id = localStorage.getItem("company_id");
    var module_id = 6;
    var limit = 10;

    if (page == "") {
        var page = 1;
        var k = 1;
    } else {
        var k = page * limit - limit + 1;
    }

    $("#loading").show();
    $("#userData").html("");

    $.ajax({
        type: "POST",
        dataType: "json",
        headers: { Authorization: localStorage.getItem("token") },
        url: api_path + "user/fetch_list_of_module_invitees", //list_module_users
        data: { company_id: company_id, module_id: module_id, page: page, limit: limit },
        timeout: 60000,

        success: function (response) {
            console.log(response);
            $("#loading").hide();
            var strTable = "";

            if (response.status == "200") {
                if (response.data.length > 0) {
                    $("#user_count").html("Users (" + response.total_rows + ")");

                    var k = 1;
                    $.each(response["data"], function (i, v) {
                        // strTable += '<td width="8%" valign="top"><div class="profile_pic"><img src="'+base_url+'/erp/assets/admin_template/production/images/img.jpg" alt="..." width="50"></div></td>';

                        function status(string) {
                            return string.charAt(0).toUpperCase() + string.slice(1);
                        }

                        strTable += '<tr id="row_' + response["data"][i]["user_id"] + '">';
                        strTable += '<td valign="top">' + k + "</td>";

                        strTable += '<td valign="top">' + response["data"][i]["lastname"] + " " + response["data"][i]["firstname"] + "</td>";
                        strTable += '<td valign="top">' + response["data"][i]["email"] + "</td>";

                        // strTable +=  '<td valign="top">
                        // <a href="usage_log?id='+response['data'][i]['user_id']+'"><i  class="fa fa-clock-o"  data-toggle="tooltip" data-placement="top" style="color: #000; font-size: 20px;" title="User Logs"></i></a>&nbsp;&nbsp;';

                        strTable +=
                            '<td valign="top"><a href="user_roles_former?id=' +
                            response["data"][i]["user_id"] +
                            '"><i  class="fa fa-pencil"  data-toggle="tooltip" data-placement="top" title="User Permissions" style="font-size : 24px; cursor : pointer;"></i></a>&nbsp;&nbsp;';

                        strTable +=
                            '<a class="delete_user  btn btn-danger btn-xs" style="cursor: pointer;" id="usr_' +
                            response["data"][i]["user_id"] +
                            '"><i  class="fa fa-trash"  data-toggle="tooltip" data-placement="top" title="Delete User"></i> Delete</a></td>';

                        strTable += "</tr>";

                        strTable += '<tr style="display: none;" id="loader_row_' + response["data"][i]["user_id"] + '">';
                        strTable += '<td colspan="4"><i class="fa fa-spinner fa-spin fa-fw fa-1x"></i>';
                        strTable += "</td>";
                        strTable += "</tr>";

                        // if(response['data'][i]['is_mod_admin'] == "yes"){

                        //   strTable += '<tr>';
                        //   strTable += '<td valign="top">'+k+'</td>';

                        //   strTable += '<td valign="top">'+response['data'][i]['lastname']+ ' ' +response['data'][i]['firstname']+'</td>';
                        //   strTable += '<td valign="top">'+response['data'][i]['email']+'</td>';

                        //   strTable +=  '<td valign="top"><a href="'+base_url+'user_logs?id='+response['data'][i]['user_id']+'"><i  class="fa fa-clock-o"  data-toggle="tooltip" data-placement="top" style="color: #000; font-size: 20px;" title="User Logs"></i></a></td>';

                        //   strTable += '</tr>';

                        // }else if(response['data'][i]['is_mod_admin'] == "no"){

                        //   strTable += '<tr id="row_'+response['data'][i]['row_id']+'">';
                        //   strTable += '<td valign="top">'+k+'</td>';

                        //   strTable += '<td valign="top">'+response['data'][i]['lastname']+ ' ' +response['data'][i]['firstname']+'</td>';
                        //   strTable += '<td valign="top">'+response['data'][i]['email']+'</td>';

                        //   strTable +=  '<td valign="top"><a href="user_logs?id='+response['data'][i]['user_id']+'"><i  class="fa fa-clock-o"  data-toggle="tooltip" data-placement="top" style="color: #000; font-size: 20px;" title="User Logs"></i></a>&nbsp;&nbsp;';

                        //   strTable += '<a href="user_roles?id='+response['data'][i]['user_id']+'"><i  class="fa fa-lock"  data-toggle="tooltip" data-placement="top" title="User Permissions" style="font-size : 24px; cursor : pointer;"></i></a>&nbsp;&nbsp;';

                        //   strTable += '<a class="delete_user  btn btn-danger btn-xs" style="cursor: pointer;" id="usr_'+response['data'][i]['row_id']+'"><i  class="fa fa-trash"  data-toggle="tooltip" data-placement="top" title="Delete User"></i> Delete</a></td>';

                        //   strTable += '</tr>';

                        //   strTable += '<tr style="display: none;" id="loader_row_'+response['data'][i]['row_id']+'">';
                        //   strTable += '<td colspan="4"><i class="fa fa-spinner fa-spin fa-fw fa-2x"  id="loading"></i>';
                        //   strTable +=  '</td>';
                        //   strTable += '</tr>';

                        // }

                        k++;
                    });
                } else {
                    strTable = '<tr><td colspan="4">No record.</td></tr>';
                }

                $("#pagination").twbsPagination({
                    totalPages: Math.ceil(response.total_rows / limit),
                    visiblePages: 10,
                    onPageClick: function (event, page) {
                        list_of_warehouse_users(page);
                    },
                });

                $("#userData").html(strTable);
                $("#userData").show();
            } else if (response.status == "400") {
                $("#loading").hide();
                strTable += "<tr>";
                strTable += '<td colspan="4">No result</td>';
                strTable += "</tr>";

                $("#userData").html(strTable);
                $("#userData").show();
            } else if (response.status == "401") {
                //missing parameters
                var strTable = "";
                $("#loading").hide();
                strTable += "<tr>";
                strTable += '<td colspan="4">' + response.msg + "</td>";
                strTable += "</tr>";

                $("#userData").html(strTable);
                $("#userData").show();
            }

            $("#loading").hide();
        },

        error: function (response) {
            var strTable = "";
            $("#loading").hide();
            // alert(response.msg);
            strTable += "<tr>";
            strTable += '<td colspan="4"><strong class="text-danger">Connection error!</strong></td>';
            strTable += "</tr>";

            $("#userData").html(strTable);
            $("#userData").show();
            $("#loading").hide();
        },
    });
}


        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }


        function closeNav() {
            document.getElementById("myNav").style.height = "0%";
        }

        // $(".gg").hover(function () {
        //  $(".open").show();
        //  });

        // $('.gg').mouseenter(function () {
        //        $('.open').show();
        //        // $('#hover_tutor_hidden').show();
        //      });

        // $('.open').mouseenter(function () {
        //        $(this).show();
        // });
        // $('.open').mouseleave(function () {
        //        $(this).hide();
        // });
        //  $('.gg').mouseleave(function () {
        //        // $('#hover_tutor').show();
        //      $('.open').hide();
        //      }
        //  ).mouseleave()

        //confirm user id and company id are available
        // if (localStorage.getItem('user_id') == "" || localStorage.getItem('user_id') == null || localStorage
        //     .getItem('company_id') == "" || localStorage.getItem('company_id') == null) {

        //     //redirect user to feeds page if not available
        //     // window.location.href = site_url+"/feeds";

        // } else {

        //     can_company_access_page();

        // }

        $(document).on('click', '#switch', function() {
            $('#loading_dlv').show();
            $('#warehouse_dlv').html('');
            $('#modal_switch').modal('show');
            getListOfWarehouseUSerHasAccessTo();

        });

        $(document).on('click', '.toggle-navbar', function() {
            // alert('here')
           // $(".dropdown-usermenu").css("display", "block !important")
           $(".dropdown-usermenu").toggle();
        });


        $(document).on('click', '.enter_ware', function() {

            var warehouse_id = $(this).attr("id").replace(/enter_/, '');
            // alert(warehouse_id);
            var warehouse_name = $(this).attr("dir").replace(/entername_/, '');
            localStorage.setItem('warehouse_id', warehouse_id);
            localStorage.setItem('warehouse_name', warehouse_name);
            // alert("Set to this - " + localStorage.getItem('warehouse_name'));
            window.location.href = base_url;

        });

        $(document).on('click', '.set_as_default', function() {

            $("#set_default").modal("show")

        });

        $(document).on('click', '#update_default', function() {
           var val = $(".set_").val();
           console.log(val)
            update_app(val)

            });         


        $(document).on('click', '.get_comp_list', function() {
            // $(document).on('click', '.get_comp_list', function() {

            // alert('here')

            var landing = $(this).attr("data")

            var id = $(this).attr("id").replace(/themodli_/, '');
            var compn_and_d = $(this).attr("dir").split("-");
            var module_name = compn_and_d[0];

            var md_landing_page = localStorage.getItem("landing_page")


            // var company_id = compn_and_d[1];
            // var md_landing_page = compn_and_d[2]
            // localStorage.setItem('company_id', company_id);

            // alert(localStorage.getItem('company_id'));
            // localStorage.setItem('company_name', company_name);

            window.location.href = "../" + landing;


            // list_active_companies

            // $("#list_comp_tables").html($("#comp_todi_" + id).html());
            // console.log($("span#comp_todi_" + id).children().length);

            // $(".mdl_hdn").html("Which company's " + module_name + "?");
            // $("#modal_choose_company").modal("show");

            // $('#list_comp_tables').html(
            //             `<span style="position:relative; left:250px"><i class="fa fa-spinner fa-spin fa-fw fa-3x"></i></span>`);
            //         $("#modal_choose_company").modal("show");

            // // var id = $(this).attr("id").replace(/themodli_/,'');
            // // var compn_and_d = $(this).attr("dir").split("-");
            // // var module_name = compn_and_d[0];

            // // $("#list_comp_tables").html($("#comp_todi_"+id).html());
            // // $(".mdl_hdn").html("Which company's "+module_name+"?");
            // // $("#modal_choose_company").modal("show");
            // // $("#modal_choose_company").modal("show");
            // var id = $(this).attr("id").replace(/themodli_/, '');
            // var landing = $(this).attr("data");
            // var compn_and_d = $(this).attr("dir").split("-");
            // localStorage.setItem('module-id', id);
            // var module_name = compn_and_d[0];
            // localStorage.setItem('module-name', module_name);
            // list_active_companies(id, landing);



            // // $("#list_comp_tables").html($("#comp_todi_"+id).html());
            // $(".mdl_hdn").html("Which company's " + module_name + "?");
            // // $("#modal_choose_company").modal("show");

        });

           $(document).on('click', '.get_comp_list', function() {


            // $('#list_comp_tables').html(
            //             `<span style="position:relative; left:250px"><i class="fa fa-spinner fa-spin fa-fw fa-3x"></i></span>`);
            //         $("#modal_choose_company").modal("show");

            // // var id = $(this).attr("id").replace(/themodli_/,'');
            // // var compn_and_d = $(this).attr("dir").split("-");
            // // var module_name = compn_and_d[0];

            // // $("#list_comp_tables").html($("#comp_todi_"+id).html());
            // // $(".mdl_hdn").html("Which company's "+module_name+"?");
            // // $("#modal_choose_company").modal("show");
            // // $("#modal_choose_company").modal("show");
            // var id = $(this).attr("id").replace(/themodli_/, '');
            // var landing = $(this).attr("data");
            // var compn_and_d = $(this).attr("dir").split("-");
            // localStorage.setItem('module-id', id);
            // var module_name = compn_and_d[0];
            // localStorage.setItem('module-name', module_name);

            // if(Number(id) == 15){
            //    list_active_companies_pos(id, landing);
            //   $(".mdl_hdn").html("Which company's " + module_name + "?");
            // }else{
            // list_active_companies(id, landing);
            // // $("#list_comp_tables").html($("#comp_todi_"+id).html());
            // $(".mdl_hdn").html("Which company's " + module_name + "?");
            // // $("#modal_choose_company").modal("show");
            // }

        });

        $(document).on('click', '.set_coy', function() {


            var compn_and_d = $(this).attr("dir").split("-");
            var company_id = compn_and_d[1];
            var md_landing_page = compn_and_d[2]
            localStorage.setItem('company_id', company_id);
            localStorage.setItem('landing_page', md_landing_page);
            // alert(localStorage.getItem('company_id'));
            // localStorage.setItem('company_name', company_name);

            window.location.href = "../" + md_landing_page;

        // });

    });

    function can_company_access_page() {

        var company_id = localStorage.getItem('company_id');
        var user_id = localStorage.getItem('user_id');
        var module_id = 6;

        $.ajax({

            type: "POST",
            dataType: "json",
                        headers: {'Authorization':localStorage.getItem('token') },

            url: api_path + "wms/can_company_access_module",
            data: {
                "company_id": company_id,
                "user_id": user_id,
                "module_id": module_id
            },
            timeout: 60000,

            success: function(response) {

                // console.log(response);

                if (response.status == '200') {

                    //show details
                    // $("#whole_body").fadeIn();
                    // $(".container33").hide();

                    //2.
                    can_user_access_this_module();
                    // populate_item(module_id)
                    // fetch_user_module_roles();
                    // group_modules_users_can_access();

                } else {

                    $("#page_error_div").html(
                        '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;&nbsp;' +
                        response.msg);
                    $(".container33").hide();
                    $("#page_error_div").show();

                }

            },

            error: function(response) {

                // alert("You do not have access to this module");
                $("#page_error_div").html(
                    '<i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i>&nbsp;&nbsp; Connection Error. Please try again.'
                );
                $(".container33").hide();
                $("#page_error_div").show();
                // window.location.href = site_url+"/feeds";

            }

        });

    }



    function delete_incoming_item(list_id) {

        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');

        var ans = confirm("Are you sure you want to delete this item?");
        if (!ans) {
            return;
        }

        $('#row_' + list_id).hide();
        $('#loader_row_' + list_id).show();
        $.ajax({
            type: "POST",
                        headers: {'Authorization':localStorage.getItem('token') },

            dataType: "json",
            url: api_path + "wms/del_incoming_item",
            data: {
                "company_id": company_id,
                "warehouse_id": warehouse_id,
                "list_id": list_id
            },
            timeout: 60000, // sets timeout to one minute
            // objAJAXRequest, strError

            error: function(response) {
                $('#loader_row_' + list_id).hide();
                $('#row_' + list_id).show();

                alert('connection error');
            },

            success: function(response) {
                // console.log(response);
                if (response.status == '200') {
                    // $('#row_'+user_id).hide();

                } else if (response.status == '401') {

                }

                $('#loader_row_' + list_id).hide();
            }
        });
    }


    // function can_user_access_this_module() {
    //     //accesscontrol/check_if_user_has_access_to_a_module
    //     $.ajax({

    //         type: "POST",
    //         dataType: "json",
    //         url: api_path + "accesscontrol/check_if_user_has_access_to_a_module",
    //         data: {
    //             "company_id": localStorage.getItem('company_id'),
    //             "user_id": localStorage.getItem('user_id'),
    //             "module_id": 6
    //         },
    //         timeout: 60000,

    //         success: function(response) {

    //             if (response.status == '200') {

    //                 $("#whole_body").fadeIn();
    //                 $(".right_col").css("min-height", $(window).height() - 51);
    //                 $(".container33").hide();

    //                 var user_permission_status = response.user_status;
    //                 //store this on the page
    //                 $("#user_perm_status").html(user_permission_status);
    //                 group_modules_users_can_access();

    //             } else {

    //                 $("#page_error_div").html(
    //                     "<i class='fa fa-exclamation-triangle' aria-hidden='true'></i>&nbsp;&nbsp;You do not have access to this company's Warehouse Management System. <a href='../feeds' style='color: white'><u>Back to Feeds</u></a>"
    //                 );
    //                 $(".container33").hide();
    //                 $("#page_error_div").show();

    //             }

    //         },

    //         error: function(response) {

    //             // alert("You do not have access to this module");
    //             $("#page_error_div").html(
    //                 '<i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i>&nbsp;&nbsp; Connection Error. Please refresh page.'
    //             );
    //             $(".container33").hide();
    //             $("#page_error_div").show();
    //             // window.location.href = site_url+"/feeds";

    //         }

    //     });
    // }

    function update_app(id) {
        $("#update_default").hide();
        $('#edit_item_selling_cost_loader').show();

        $.ajax({

            type: "POST",
            dataType: "json",
                        headers: {'Authorization':localStorage.getItem('token') },

            url: api_path + "user/set_default_module",
            data: {
                "module_id": id,
                "user_id": localStorage.getItem('user_id')
            },
            timeout: 60000,


            success: function(response) {

                if (response.status == '200') {

                    console.log(response.data);
                    $("#set_default").modal("hide");
                    $('#edit_item_selling_cost_loader').hide();
                    $("#upd_item_unit_cost").show();
                    $("#modal_successful").modal("show");

                    // var list_mds = "";
                    // list_mds += `<span id="comp_todi_${module_id}" >`;
                    // $.each(response.data, function(i, v) {
                    //     list_mds +=
                    //         `<li class="" style="display:"><a class="set_coy" dir="${module_name}-${v.company_id}-${landing}" style="cursor: pointer" >${v.company_name}</a></li>`;
                    // });

                }else{
                    $('#edit_item_selling_cost_loader').hide();
                    $("#upd_item_unit_cost").show();
                }
                // console.log(list_mds);
                // if (list_mds == undefined) {
                //     $('#list_comp_tables').html(
                //         `<span>You have no active subscription for ${landing} module</span>`);
                //     $("#modal_choose_company").modal("show");
                // }
                // $('#list_comp_tables').html(list_mds);
                // $("#modal_choose_company").modal("show");

            },
            error: function(response) {

            }
        })

    }

    function about_to_expire() {

        $.ajax({

            type: "POST",
            dataType: "json",
                        headers: {'Authorization':localStorage.getItem('token') },

            url: api_path + "wms/itemsAboutExpiry",
            data: {
                "warehouse_id": localStorage.getItem('warehouse_id'),
                "company_id": localStorage.getItem('company_id')
            },
            timeout: 60000,


            success: function(response) {

                if (response.status == '200') {

                    console.log(response.data);
                    // var list_mds = "";
                    // list_mds += `<span id="comp_todi_${module_id}" >`;
                    // $.each(response.data, function(i, v) {
                    //     list_mds +=
                    //         `<li class="" style="display:"><a class="set_coy" dir="${module_name}-${v.company_id}-${landing}" style="cursor: pointer" >${v.company_name}</a></li>`;
                    // });

                }
                // console.log(list_mds);
                // if (list_mds == undefined) {
                //     $('#list_comp_tables').html(
                //         `<span>You have no active subscription for ${landing} module</span>`);
                //     $("#modal_choose_company").modal("show");
                // }
                // $('#list_comp_tables').html(list_mds);
                // $("#modal_choose_company").modal("show");

            },
            error: function(response) {

            }
        })

    }

    function list_active_companies_pos(id, landing) {
        var user_id = localStorage.getItem('user_id');
        var module_id = localStorage.getItem('module-id');
        var module_name = localStorage.getItem('module-name');


        $.ajax({

            type: "GET",
            dataType: "json",
                        headers: {'Authorization':localStorage.getItem('token') },

            url: api_path + "pos/my_connections",
            data: {
                "user_id": user_id,
                "module_id": id
            },
            timeout: 60000,


            success: function(response) {

                if (response.status == '200') {
                    var list_mds = "";
                    console.log(response.data);
                    if (response.data.length == 1) {
                        // var compn_and_d = $(this).attr("dir").split("-");
                        $.each(response.data, function(i, v) {
                            var company_id = v.company_id;
                            // var md_landing_page = v.landing;
                            localStorage.setItem('company_id', company_id);
                            // localStorage.setItem('landing_page', md_landing_page);
                            // alert(localStorage.getItem('company_id'));
                            // localStorage.setItem('company_name', company_name);
                            // var list_mds = "";
                            list_mds += `<span id="comp_todi_${module_id}" >`;
                            $.each(response.data, function(i, v) {
                                list_mds +=
                                    `<li class="" style="display:"><a class="set_coy" dir="${module_name}-${v.company_id}-${landing}" style="cursor: pointer" >${v.company_name}</a></li>`;
                            });

                        })
                        window.location.href = "../pos";
                    } else {
                        var list_mds = "";
                        list_mds += `<span id="comp_todi_${module_id}" >`;
                        $.each(response.data, function(i, v) {
                            list_mds +=
                                `<li class="" style="display:"><a class="set_coy" dir="${module_name}-${v.company_id}-${landing}" style="cursor: pointer" >${v.company_name}</a></li>`;
                        });
                    }

                }
                console.log(list_mds);
                if (list_mds == undefined) {
                    $('#list_comp_tables').html(
                        `<span>You have no active subscription for ${landing} module</span>`);
                    $("#modal_choose_company").modal("show");
                }
                $('#list_comp_tables').html(list_mds);
                $("#modal_choose_company").modal("show");

            },
            error: function(response) {

            }
        })

    }

    function list_active_companies(id, landing) {
        var user_id = localStorage.getItem('user_id');
        var module_id = localStorage.getItem('module-id');
        var module_name = localStorage.getItem('module-name');


        $.ajax({

            type: "GET",
            dataType: "json",
                        headers: {'Authorization':localStorage.getItem('token') },

            url: api_path + "wms/my_connections",
            data: {
                "user_id": user_id,
                "module_id": id
            },
            timeout: 60000,


            success: function(response) {

                if (response.status == '200') {

                    console.log(response.data);
                    if (response.data.length == 1) {
                        // var compn_and_d = $(this).attr("dir").split("-");
                        $.each(response.data, function(i, v) {
                            var company_id = response.data.company_id;
                            var md_landing_page = response.data.landing;
                            localStorage.setItem('company_id', company_id);
                            localStorage.setItem('landing_page', md_landing_page);
                            // alert(localStorage.getItem('company_id'));
                            // localStorage.setItem('company_name', company_name);

                        })
                        window.location.href = "../" + md_landing_page;
                    } else {
                        var list_mds = "";
                        list_mds += `<span id="comp_todi_${module_id}" >`;
                        $.each(response.data, function(i, v) {
                            list_mds +=
                                `<li class="" style="display:"><a class="set_coy" dir="${module_name}-${v.company_id}-${landing}" style="cursor: pointer" >${v.company_name}</a></li>`;
                        });
                    }

                }
                console.log(list_mds);
                if (list_mds == undefined) {
                    $('#list_comp_tables').html(
                        `<span>You have no active subscription for ${landing} module</span>`);
                    $("#modal_choose_company").modal("show");
                }
                $('#list_comp_tables').html(list_mds);
                $("#modal_choose_company").modal("show");

            },
            error: function(response) {

            }
        })

    }


    // function group_modules_users_can_access() {

    //     // return;

    //     var user_id = localStorage.getItem('user_id');
    //     var company_id = localStorage.getItem('company_id');

    //     var pathArray = window.location.href.split('/');
    //     var username = pathArray[2].split('.')[0];

    //     $.ajax({

    //         type: "GET",
    //         dataType: "json",
    //         url: api_path + "user/group_modules_users_can_access",
    //         data: {
    //             "user_id": user_id,
    //             "company_id": company_id,
    //             "token": localStorage.getItem('token')
    //         },
    //         timeout: 60000,

    //         success: function(response) {

    //             console.log(response);

    //             $('#user_name').html(localStorage.getItem('firstname') + ' ' + localStorage.getItem(
    //                 'lastname'));
    //             $('#hi_user_name').html(localStorage.getItem('firstname'));
    //             $('.hi_user_name').html(localStorage.getItem('firstname'));

    //             if (response.status == '200') {
    //                 // $(".fst_dd").append(list_mds+'<li><div class="text-center"><a href="/user/myapps"><strong>Add More Apps </strong><i class="fa fa-angle-right"></i></a></div></li>');
    //                 for_default = `<option value='2'>Workgroup</option>`;

    //                 $.each(response.data, function(i, v) {
    //                     console.log(v)
    //                     if (v.module_full_name) {
    //                         console.log(v.module_full_name)
    //                         for_default +=
    //                             `<option value='${v.module_id}'>${v.module_full_name}</option>`
    //                     }
    //                 })

    //                 if (response.total_rows != 0) {

    //                     var k = 1;
    //                     var list_mds = "";
    //                     list_mds +=
    //                         `<div class="col-md-2" data-tooltip="Workgroup">
    //                            <li class="dd">   <a style="position: relative;
    //                            right: 20%;" href="../workgroup" class="get_comp_list" id="themodli_"  data="feeds"><span class="image"><img src="../files/images/icons/feeds_icon.png" alt="" style="position:relative; left:33%;"></span>     <span>        <div class="abbrv" ><span class="" style="position:relative; left:10%;">Workgroup</div></span></span>   </a></li></div>`;
    //                     $.each(response.data, function(i, v) {
    //                         console.log(v)


    //                         if (v.access_count == 1) {

    //                             var link_lk = 'class="get_comp_list"';
    //                             var set_coy_class = "";

    //                         } else {

    //                             var link_lk = 'class="get_comp_list"';
    //                             var set_coy_class = "";

    //                         }




    //                         // if(v.module_id != 19){ //remove this particular module from the list

    //                         // list_mds += '<li>   <a '+link_lk+' id="themodli_'+v.module_id+'"  dir="'+v.module_abbrv+"-"+v.company_id+"-"+v.company_name+'" class="'+set_coy_class+'" >   <span class="image"><img src="../files/images/icons/'+v.module_little_icon+'" alt=""></span>     <span>        <span><b>'+v.module_abbrv+'</b></span> </span>       <span class="message">'+v.module_full_name+'</span>                      </a>          </li>';



    //                         // list_mds += '<span id="comp_todi_'+v.module_id+'" style="display: none">';
    //                         // $.each(v.more_comp_list, function (i2, v2){
    //                         //     list_mds += '<li class="" style="display:"><a class="set_coy"   dir="'+v.module_abbrv+"-"+v2.id+"-"+v2.landing_page+'" style="cursor: pointer" >'+v2.comp_name+'</a></li>';
    //                         // });
    //                         // list_mds += '</span>';

    //                         // list_mds += '<li>   <a '+link_lk+' id="themodli_'+v.module_id+'"  dir="'+v.module_abbrv+"-"+v.company_id+"-"+v.company_name+'" class="'+set_coy_class+'" data="'+v.module_landing_page+'">   <span class="image"><img src="../files/images/icons/'+v.module_little_icon+'" alt=""></span>     <span>        <span><b>'+v.module_abbrv+'</b></span> </span>       <span class="message">'+v.module_full_name+'</span>                      </a>          </li>';




    //                         // list_mds += '<span><div class="col-md-3 first_"  style="font-size:10px" data-tooltip="'+v.module_full_name+'"> <div class="">  <li>   <a '+link_lk+'  class="'+set_coy_class+'" data="'+v.module_landing_page+'">   <span class="image"><img src="../files/images/icons/'+v.module_little_icon+'" alt=""></span>     <span>        <div class="abbrv" ><span class="hide_hover">'+v.module_abbrv+'</span></div> </span>       <div class="message"></div>                      </a>          </li></div></div></span>';


    //                         list_mds +=
    //                             '<div class="col-md-2"  style="font-size:10px" data-tooltip="' +
    //                             v.module_full_name + '"> <div class="">  <li>   <a ' + link_lk +
    //                             ' id="themodli_' + v.module_id + '" dir="' + v.module_abbrv + "-" +
    //                             v.company_id + "-" + v.company_name + '"  class="' + set_coy_class +
    //                             '" data="' + v.module_landing_page +
    //                             '">   <span class="image"><img src="../files/images/icons/' + v
    //                             .module_little_icon +
    //                             '" alt=""></span>     <span>        <div class="abbrv" ><span class="">' +
    //                             v.module_abbrv +
    //                             '</span></div>      <div class="message"></div>                      </a>          </li></div></div></span>';





    //                         // list_mds +=
    //                         //     '<span><div class="col-md-3 first_"  style="font-size:10px" data-tooltip="' +
    //                         //     v.module_full_name + '"> <div class="">  <li>   <a ' + link_lk +
    //                         //     ' id="themodli_' + v.module_id + '" dir="' + v.module_abbrv + "-" +
    //                         //     v.company_id + "-" + v.company_name + '"  class="' + set_coy_class +
    //                         //     '" data="' + v.module_landing_page +
    //                         //     '">   <span class="image"><img src="../files/images/icons/' + v
    //                         //     .module_little_icon +
    //                         //     '" alt=""></span>     <span>        <div class="abbrv" ><span class="hide_hover">' +
    //                         //     v.module_abbrv +
    //                         //     '</span></div> </span>       <div class="message"></div>                      </a>          </li></div></div></span>';





    //                         //         <a id="feed_tg" href="../feeds">
    //                         // <span class="tooltiptext">'+v.module_full_name+'</span>
    //                         //                     <span class="image"><img src="../files/images/icons/feeds_icon.png" alt=""></span>
    //                         //                     <span>
    //                         //   <span><b>Feeds</b></span>

    //                         //                     </span>
    //                         //                     <span class="message">
    //                         //   Notifications Feeds
    //                         // </span>
    //                         //                 </a>


    //                         // list_mds += '<span id="comp_todi_'+v.module_id+'" style="display: none">';
    //                         // $.each(v.more_comp_list, function (i2, v2){
    //                         //   list_mds += '<li class="" style="display:"><a class="set_coy"   dir="'+v.module_abbrv+"-"+v2.id+"-"+v2.landing_page+'" style="cursor: pointer" >'+v2.comp_name+'</a></li>';

    //                         // });
    //                         // list_mds += '</span>';


    //                         k++;

    //                     });




    //                     $(".fst_dd").append(list_mds);
    //                     console.log(for_default)




    //                     // $( list_mds ).insertAfter( ".fst_dd" );

    //                 } else {


    //                 }

    //                 // $('#whole_body').show();
    //                 $(".set_").append(for_default);


    //                 fetch_company_colors();

    //             } else {

    //                 fetch_company_colors();

    //             }

    //         },
    //         error: function(response) {

    //             fetch_company_colors();
    //         }

    //     });

    // }



    function fetch_company_colors() {



        var company_id = localStorage.getItem('company_id');

        $.ajax({

            type: "POST",
            dataType: "json",
                        headers: {'Authorization':localStorage.getItem('token') },

            url: api_path + "company/get_company_colours",
            data: {
                "company_id": company_id
            },
            timeout: 60000,

            success: function(response) {

                console.log(response);

                if (response.status == '200') {

                    var color = '#2A3F54';
                    if (response.data.middle_left_bar == '' || response.data.middle_left_bar == null) {
                        response.data.middle_left_bar = color;
                    }

                    if (response.data.body_color == '' || response.data.body_color == null) {
                        response.data.body_color = color;
                    }

                    if (response.data.bottom_left_bar == '' || response.data.bottom_left_bar == null) {
                        response.data.bottom_left_bar = color;
                    }

                    if (response.data.top_left_bar == '' || response.data.top_left_bar == null) {
                        response.data.top_left_bar = color;
                    }

                    $('.left_col').css('background', response.data.middle_left_bar);
                    $('body').css('background', response.data.body_color);
                    // $('a').css('background', response.data.body_color);
                    $('.sidebar-footer').css('background', response.data.bottom_left_bar);
                    $('.sidebar-footer a').css('background', response.data.bottom_left_bar);
                    $('.site_title').css('background', response.data.top_left_bar);
                    $('table.jambo_table thead').css('background', response.data.body_color);
                    $('ul.side-menu li a').children().css('background-color', response.data.body_color);





                }

                $('#user_name').html(localStorage.getItem('firstname') + ' ' + localStorage.getItem(
                    'lastname'));

                if (localStorage.getItem('profile_photo') == "" || localStorage.getItem('profile_photo') ==
                    null || localStorage.getItem('profile_photo') == undefined) {

                    $('#profile_img').attr('src',
                        '/files/images/user_profile_images/sml_default_picture.png');

                } else {

                    $('#profile_img').attr('src', '/files/images/user_profile_images/sml_' + localStorage
                        .getItem('profile_photo'));

                }

                fetch_warehouse_list();

            },
            // objAJAXRequest, strError
            error: function(response) {

                fetch_warehouse_list();
                // alert('Error fetching customization!');

            }

        });
    }


    function fetch_warehouse_list() {

        var company_id = localStorage.getItem('company_id');
        var user_id = localStorage.getItem('user_id');


        $.ajax({

            type: "POST",
            dataType: "json",
                        headers: {'Authorization':localStorage.getItem('token') },

            url: api_path + "wms/list_warehouses_user_connected",
            data: {
                "company_id": company_id,
                "user_id": user_id
            },
            timeout: 60000,

            success: function(response) {

                console.log(response)
                console.log(response.data)


                if (response.status == '200') {

                    var warehouse_id;
                    var warehouse_name;

                    if (localStorage.getItem("warehouse_id") == undefined) {
                        localStorage.setItem("warehouse_id", response['data'][0]['warehouse_id']);
                        localStorage.setItem("warehouse_name", response['data'][0]['warehouse_name']);
                    }


                    localStorage.setItem("warehouses", response.data.length);
                    //if 
                    if (response.total_warehouses == 0 ) {

                        $('#switch_tab').show();

                    } else if (response.total_warehouses > 0) {

                        var kup = 0;
                        $.each(response['data'], function(i, v) {

                            warehouse_id = response['data'][i]['warehouse_id'];
                            warehouse_name = response['data'][i]['warehouse_name'];

                            kup++;

                        });

                        if (kup > 1) {
                            $('#switch_tab').show();
                        } else {
                            // $('#switch_tab').show();
                            $('#switch_tab').hide();
                            $("#transfer").hide();
                        }



                    }



                    $("#does_user_have_profile").html('yes');
                    // fetch_user_module_roles();


                    if (!(localStorage.getItem('warehouse_id'))) {
                        localStorage.setItem('warehouse_id', warehouse_id);
                        localStorage.setItem('warehouse_name', warehouse_name);
                    }

                    $("#current_warehouse_id").html(warehouse_id);

                    // if (localStorage.getItem('warehouse_id') == "null" ||
                    //     localStorage.getItem('warehouse_id') == null || 
                    //     localStorage.getItem('warehouse_id') == "" || 
                    //     localStorage.getItem('warehouse_id') == 'undefined' || 
                    //     localStorage.getItem('warehouse_name') == "null" || 
                    //     localStorage.getItem('warehouse_name') == "" || 
                    //     localStorage.getItem('warehouse_name') == undefined 
                    //     ) 
                    // {

                    //     localStorage.setItem('warehouse_id', warehouse_id);
                    //     localStorage.setItem('warehouse_name', warehouse_name);

                    //     //save warehouse id on page
                    //     $("#current_warehouse_id").html(warehouse_id);

                    // }else{
                    //     //still save warehouse id on page
                    //     $("#current_warehouse_id").html(localStorage.getItem('warehouse_id'));
                    // }

                    //set warehouse name              
                    $('#wareh_name').html(localStorage.getItem('warehouse_name'));

                    //show page
                    $("#whole_body").fadeIn();
                    $(".container33").hide();

                    fetch_roles_user_can_access()



                } else {


                    // fetch_user_module_roles();
                    fetch_roles_user_can_access()

                    if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status").html() ==
                        "Admin") {




                        $("#assgn_roles").addClass("fa-times"); //mark roles as x

                        //now check if other setups are ready
                        $.ajax({

                            type: "POST",
                        headers: {'Authorization':localStorage.getItem('token') },

                            dataType: "json",
                            url: api_path + "wms/is_setup_done",
                            data: {
                                "company_id": localStorage.getItem('company_id')
                            },
                            timeout: 60000,

                            success: function(response) {
                                console.log(response);
                                if (response.status == '200') {

                                    if (response.data.warehouse == "yes") {
                                        $("#crt_whs").addClass("fa-check");
                                    } else {
                                        $("#crt_whs").addClass("fa-times");
                                    }

                                    if (response.data.user_name == "yes") {
                                        $("#updt_comp_dtl").addClass("fa-check");
                                    } else {
                                        $("#updt_comp_dtl").addClass("fa-times");
                                    }
                                    fetch_roles_user_can_access();


                                } else {

                                }
                            },
                            error: function(response) {

                            }
                        });





                        $(".dsh_dvs").fadeOut(200).promise().done(function() {
                            $("#admins_no_permission_dv").fadeIn(400);
                        });

                    } else {

                        $(".dsh_dvs").fadeOut(200).promise().done(function() {
                            $("#no_permission_dv").fadeIn(400);
                        });

                    }

                }

            },
            // objAJAXRequest, strError
            error: function(response) {

                $("#page_error_div").html(
                    '<i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i>&nbsp;&nbsp; Connection Error. Please try again.'
                );
                $(".container33").hide();
                $("#page_error_div").show();
                $("#whole_body").hide();

            }

        });
    }










    function fetch_user_module_roles() {

    var role_list = $("#does_user_have_roles").html();
    var an_admin;
    var user_roles = [];
    var user_roles_2 = [];

    if (role_list.indexOf("-84-") >= 0 && role_list.indexOf("-85-") >= 0 && role_list.indexOf("-86-") >= 0) {
        //Settings
        
        $("#expenses").show();
        $("#expense_dashboard").show();
        $("#main_display_loader_page").hide();
        $("#main_display").show();

        list_of_warehouse_users("");
    }

    if (role_list.indexOf("-101-") >= 0) {
        //Settings
        $("#procurement").show();
        $("#purchaseorders").show();
        $("#paystovendors").show();

        $("#contacts").show(); // show contact page
        $("#items").show(); //show items page
        $("#procurement_report").show();
        $("#vendors").show();
        // $("#expenses").show();

        $("#expense_dashboard").show();
        $("#creditors_dashboard").show();
        $("#items_dashboard").show();
        $("#unique_dashboard").show();
        $("#low_dashboard").show();
        $("#expiry").show();
        $("#expired").show();

        $("#transactions_dashboard").show();
        $("#expired_dashboard").show();
        $("#incoming_graph").show();
        $("#expenses_graph").show();
        $("#profit_loss_graph").show();
        $("#warehouse_value").show();
        $("#report_tab").show();
        $("#transfer").show();
        $("#settings_tab").show();

        $("#main_display_loader_page").hide();
        $("#main_display").show();

        // list_of_warehouse_users("");
    }

    if (role_list.indexOf("-2-") >= 0) {
        //Procurement

        $("#procurement").show();
        $("#purchaseorders").show();
        $("#paystovendors").show();

        $("#contacts").show(); // show contact page
        $("#items").show(); //show items page
        $("#procurement_report").show();
        $("#vendors").show();
        $("#expenses").show();

        $("#expense_dashboard").show();
        $("#creditors_dashboard").show();
        $("#items_dashboard").show();
        $("#unique_dashboard").show();
        $("#low_dashboard").show();
        $("#expiry").show();
        $("#expired").show();

        $("#transactions_dashboard").show();
        $("#expired_dashboard").show();
        $("#incoming_graph").show();
        $("#expenses_graph").show();
        $("#profit_loss_graph").show();
        $("#warehouse_value").show();
        $("#report_tab").show();
        $("#transfer").show();
        user_roles_2.push(2);
        $("#main_display_loader_page").hide();
        $("#main_display").show();


        // list_of_warehouse_users("");

        // var roles = localStorage.getItem("user_role");
        // var arr = ["2", "4"];
        // var users = roles.split(",");

        // users.map((a, i) => {
        //     if (a.includes(arr[i])) {
        //         $("#expenses_revenue").show();
        //         $("#expenses_graph").hide();
        //         $("#revenue_graph").hide();
        //     }
        // });

        // if(Array.from(Number(roles)).includes(2 & 4)){
        //    alert(roles)
        // }
    }

    if (role_list.indexOf("-26-") >= 0) {
        //warehouse manager

        $("#incoming_tab").show(); //warehouse manager
        $("#receiveorders").show(); //receive orders/create orders

        $("#outgoing_tab").show(); //warehouse manager
        // $("#invoicesreceipts").show();
        $("#supplyitems").show(); //but cannot issue
        $("#contacts").show(); // show contact page
        $("#items").show(); //show items page
        $("#itemsreceivedlist").show();
        $("#qty_adjustment").show();
        $("#report_tab").show();
        $("#transfer").show();

        $("#items_dashboard").show();
        $("#unique_dashboard").show();
        $("#low_dashboard").show();
        $("#expiry").show();
        $("#expired").show();
        $("#transactions_dashboard").show();
        $("#expired_dashboard").show();
        $("#transactions_activities").show();
        $("#warehouse_value").show();

        user_roles_2.push(26);

        $("#main_display_loader_page").hide();
        $("#main_display").show();

        // list_of_warehouse_users("");

        //if the
        if (localStorage.getItem("warehouse_id") != "") {
            $("#whsections").attr("href", "whsections?i=" + localStorage.getItem("warehouse_id"));
            $("#whsections").show(); //
        }
    }

    if (role_list.indexOf("-24-") >= 0) {
        //store manager outgoing

        $("#outgoing_tab").show(); //warehouse manager
        $("#supplyitems").show();
        $("#items_dashboard").show();
        $("#unique_dashboard").show();
        $("#low_dashboard").show();
        $("#expiry").show();
        $("#expired").show();
        $("#transactions_out_dashboard").show();
        $("#expired_dashboard").show();
        $("#outgoing_graph").show();
        $("#invoicesreceipts").hide();
        $("#report_tab").show();
        $("#transfer").hide();
        $("#qty_adjustment").hide();

        // user_roles_2.push(24);

        // var roles = localStorage.getItem("user_role");
        // var users = roles.split(",");

        // users.map((a) => {
        //     if (a.includes("26")) {
        //         $("#outgoing_graph").hide();
        //     }
        // });
    }

    if (role_list.indexOf("-3-") >= 0) {
        //store manager incoming

        $("#incoming_tab").show();
        $("#itemsreceivedlist").show();
        $("#items_dashboard").show();
        $("#unique_dashboard").show();
        $("#low_dashboard").show();
        $("#transactions_in_dashboard").show();
        $("#expired_dashboard").show();
        $("#expiry").show();
        $("#expired").show();
        $("#incoming_graph").show();
        $("#receiveorders").hide();
        $("#report_tab").show();
        $("#transfer").hide();
        $("#qty_adjustment").hide();

        user_roles_2.push(3);
        $("#main_display_loader_page").hide();
        $("#main_display").show();

        // list_of_warehouse_users("");

        // var roles = localStorage.getItem("user_role");
        // var users = roles.split(",");

        // users.map((a) => {
        //     if (a.includes("26")) {
        //         $("#incoming_graph").hide();
        //         $("#transfer").show();
        //         $("#qty_adjustment").show();
        //     }
        // });
    }

    if (role_list.indexOf("-0-") >= 0) {
        //store manager incoming
        $("#settings_tab").show();
    }

    // var preference = localStorage.getItem("value");
    // console.log(preference);
    if (user_ro) {
        $("#expense_dashboard").hide();
        $("#creditors_dashboard").hide();
        $("#revenue_dashboard").hide();
        $("#debtors_dashboard").hide();
        $("#warehouse_value").hide();
        $("#main_display_loader_page").hide();
        $("#main_display").show();
        // $("#invoicesreceipts").show();


        // list_of_warehouse_users("");
    }
    if (user_ro && role_list.indexOf("-25-") >= 0) {
        $("#report_tab").show();

        $("#expense_dashboard").hide();
        $("#creditors_dashboard").hide();
        $("#revenue_dashboard").hide();
        $("#debtors_dashboard").hide();
        $("#items_dashboard").show();
        $("#unique_dashboard").show();
        $("#low_dashboard").show();
        $("#transactions_in_dashboard").show();
        $("#transactions_out_dashboard").show();
        $("#expired_dashboard").show();
        $("#expenses_graph").hide();
        $("#transactions_activities").show();
        $("#warehouse_value").hide();
        $("#profit_loss_graph").show();
        $("#expenses_revenue").hide();
        $("#report_tab").show();
        $("#transfer").show();

        user_roles_2.push(25);

        $("#main_display_loader_page").hide();
        $("#main_display").show();

        // // list_of_warehouse_users("");

        // var roles = localStorage.getItem("user_role");
        // var arr = ["2", "3", "4", "24"];
        // var users = roles.split(",");

        // users.map((a, i) => {
        //     if (a.includes(arr[i])) {
        //         $("#outgoing_graph").hide();
        //         $("#incoming_graph").hide();
        //     }
        // });
    }

    if (user_po) {
        // $("#qty_adjustment").show();
        // $("#transfer").show();
    }
    // if (preference == 'po' && v.id == 2||) {
    //     $("#qty_adjustment").show();
    //     $("#transfer").show();
    // }

    if (user_po && role_list.indexOf("-25-") >= 0) {
        $("#report_tab").show();
        $("#sales_tab").show();

        // $("#qty_adjustment").show();

        $("#expense_dashboard").show();
        $("#creditors_dashboard").show();
        $("#revenue_dashboard").show();
        $("#debtors_dashboard").show();
        $("#items_dashboard").show();
        $("#unique_dashboard").show();
        $("#low_dashboard").show();
        $("#transactions_in_dashboard").show();
        $("#transactions_out_dashboard").show();
        $("#expired_dashboard").show();
        // $("#expenses_graph").show();
        $("#warehouse_value").show();
        $("#transactions_activities").show();
        $("#profit_loss_graph").show();
        $("#expenses_revenue").show();
        $("#report_tab").show();
        $("#transfer").show();

        user_roles_2.push(25);

        $("#main_display_loader_page").hide();
        $("#main_display").show();

        // list_of_warehouse_users("");

        // var roles = localStorage.getItem("user_role");
        // var arr = ["2", "3", "4", "24"];
        // var users = roles.split(",");

        // users.map((a, i) => {
        //     if (a.includes(arr[i])) {
        //         $("#outgoing_graph").hide();
        //         $("#incoming_graph").hide();
        //     }
        // });

        // $("#outgoing_graph").show();
        // $("#incoming_graph").show();
        //   var roles = localStorage.getItem("user_role");
        // var users = roles.split(',')

        // users.map((a,i) => {
        //   if(a.includes('25')){
        //   $("#incoming_graph").hide();
        //   $("#outgoing_graph").hide();
        //   }
        // })
    }
    if (role_list.indexOf("-4-") >= 0) {
        $("#sales_tab").show();
        $("#revenue_dashboard").show();
        $("#debtors_dashboard").show();
        $("#items_dashboard").show();
        $("#unique_dashboard").show();
        $("#low_dashboard").show();
        $("#transactions_dashboard").show();
        $("#expired_dashboard").show();
        $("#profit_loss_graph").show();
        $("#revenue_graph").show();
        $("#outgoing_graph").show();
        $("#warehouse_value").show();
        $("#report_tab").show();
        $("#transfer").show();

        user_roles_2.push(4);

        $("#main_display_loader_page").hide();
        $("#main_display").show();

        // list_of_warehouse_users("");

        // var roles = localStorage.getItem("user_role");
        // var arr = ["2", "4"];
        // var users = roles.split(",");
        // console.log(users);

        // users.map((a, i) => {
        //     if (a.includes(arr[i])) {
        //         $("#expenses_revenue").show();
        //         $("#expenses_graph").hide();
        //         $("#revenue_graph").hide();
        //         $("#main_display_loader_page").hide();
        //         $("#main_display").show();

        //         // list_of_warehouse_users("");
        //     }
        // });
    }



    // arr2.map((a, i) => {
    //     if (a.includes(user_roles_2[i])){
    //         $("#transfer").show();
    //         $("#qty_adjustment").show();
    //     }
    // })

    var arr2 = [2, 4, 26];

    arr2.some((a, i) => {
        if (user_roles_2[i] == parseInt(a)) {
            console.log(a);
            console.log(user_roles_2[i]);
            $("#transfer").show();
            $("#qty_adjustment").show();
            $("#main_display_loader_page").hide();
            $("#main_display").show();

            // list_of_warehouse_users("");
        }
    });

    console.log(Number(localStorage.getItem("warehouses")));

    if (Number(localStorage.getItem("warehouses")) < 2) {
        // alert('here')
        $("#transfer").hide();
    } else {
        $("#loader_mssg").html("You do not have access to this page");
        $("#ldnuy").hide();
        // $("#modal_no_access").modal('show');
    }

   

        // var company_id = localStorage.getItem('company_id');
        // var urlParams = new URLSearchParams(window.location.search).get('id');
        // var user_id = urlParams ? urlParams : localStorage.getItem('user_id');
        // var warehouse_id = localStorage.getItem('warehouse_id');
        // var module_id = 6;
        // localStorage.setItem('module_key', module_id);
        // // alert(urlParams)
        // // if(urlParams){
        // //   user_id = urlParams.get('id');
        // // }else{
        // //   user_id = localStorage.getItem('user_id');
        // // }
        // // alert(user_id)
        // console.log(warehouse_id);
        // // $("#settings_tab").show();


        // if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status").html() == "Admin") {
        //     $("#settings_tab").show();
        // }

        // $.ajax({

        //     type: "POST",
        //     dataType: "json",
        //                 headers: {'Authorization':localStorage.getItem('token') },

        //     url: api_path + "wms/get_user_profile_in_warehouse",
        //     data: {
        //         "company_id": company_id,
        //         "user_id": user_id,
        //         "module_id": module_id,
        //         "warehouse_id": warehouse_id
        //     },
        //     timeout: 60000,

        //     success: function(response) {

        //         console.log(response);

        //         var an_admin;
        //         var user_roles = [];
        //         var user_roles_2 = [];
               


        //         if (response.status == '200') {
        //             console.log(Array.from((response['data']['profile_details'])))
        //              $.each(response['data']['profile_details'], function(i, v) {
        //             console.log(v.id)
        //             user_roles.push(Number(v.id))

        //         })
        //             // var role = localStorage.setItem("user_role", user_roles)

        //             localStorage.setItem("user_role", user_roles.filter(a => a !== 0)
        //                 .filter(a => a !== 1))
        //             $("#qty_adjustment").hide();
        //             $("#transfer").hide();
        //             $("#total_overdue_po").show();
        //             $("#total_overdue_inv").show();
        //             $("#best_selling_items").show();
        //             $("#lowest_selling_items").show();


        //             // console.log(user_roles.filter(a => a !== 0))

        //             var k = 1;
        //             $.each(response['data']['profile_details'], function(i, v) {
        //                 $("#qty_adjustment").show();

        //                 if (v.id == 2) { //Procurement

        //                     $("#procurement").show();
        //                     $("#purchaseorders").show();
        //                     $("#paystovendors").show();

        //                     $("#contacts").show(); // show contact page
        //                     $("#items").show(); //show items page
        //                     $("#procurement_report").show();
        //                     $("#vendors").show();
        //                     $("#expenses").show();

        //                     $("#expense_dashboard").show();
        //                     $("#creditors_dashboard").show();
        //                     $("#items_dashboard").show();
        //                     $("#unique_dashboard").show();
        //                     $("#low_dashboard").show();
        //                     $("#expiry").show();
        //                     $("#expired").show();

        //                     $("#transactions_dashboard").show();
        //                     $("#expired_dashboard").show();
        //                     $("#incoming_graph").show();
        //                     $("#expenses_graph").show();
        //                     $("#profit_loss_graph").show();
        //                     $("#warehouse_value").show();
        //                     $("#report_tab").show();
        //                     $("#transfer").show();
        //                     user_roles_2.push(2);






        //                     var roles = localStorage.getItem("user_role");
        //                     var arr = ['2', '4']
        //                     var users = roles.split(',')

        //                     users.map((a, i) => {
        //                         if (a.includes(arr[i])) {
        //                             $("#expenses_revenue").show();
        //                             $("#expenses_graph").hide();
        //                             $("#revenue_graph").hide();
        //                         }
        //                     })

        //                     // if(Array.from(Number(roles)).includes(2 & 4)){
        //                     //    alert(roles)
        //                     // }






        //                 }

        //                 if (v.id == 26) { //warehouse manager

        //                     $("#incoming_tab").show(); //warehouse manager
        //                     $("#receiveorders").show(); //receive orders/create orders

        //                     $("#outgoing_tab").show(); //warehouse manager
        //                     $("#invoicesreceipts").show();
        //                     $("#supplyitems").show(); //but cannot issue
        //                     $("#contacts").show(); // show contact page
        //                     $("#items").show(); //show items page
        //                     $("#itemsreceivedlist").show();
        //                     $("#qty_adjustment").show();
        //                     $("#report_tab").show();
        //                     $("#transfer").show();

        //                     $("#items_dashboard").show();
        //                     $("#unique_dashboard").show();
        //                     $("#low_dashboard").show();
        //                     $("#expiry").show();
        //                     $("#expired").show();
        //                     $("#transactions_dashboard").show();
        //                     $("#expired_dashboard").show();
        //                     $("#transactions_activities").show();
        //                     $("#warehouse_value").show();
        //                     user_roles_2.push(26);













        //                     //if the
        //                     if (localStorage.getItem('warehouse_id') != "") {
        //                         $("#whsections").attr("href", "whsections?i=" + localStorage
        //                             .getItem('warehouse_id'));
        //                         $("#whsections").show(); //
        //                     }



        //                 }


        //                 if (v.id == 24) { //store manager outgoing

        //                     $("#outgoing_tab").show(); //warehouse manager
        //                     $("#supplyitems").show();
        //                     $("#items_dashboard").show();
        //                     $("#unique_dashboard").show();
        //                     $("#low_dashboard").show();
        //                     $("#expiry").show();
        //                     $("#expired").show();
        //                     $("#transactions_out_dashboard").show();
        //                     $("#expired_dashboard").show();
        //                     $("#outgoing_graph").show();
        //                     $("#invoicesreceipts").hide();
        //                     $("#report_tab").show();
        //                     $("#transfer").hide();
        //                     $("#qty_adjustment").hide();
        //                     user_roles_2.push(24);





        //                     var roles = localStorage.getItem("user_role");
        //                     var users = roles.split(',')

        //                     users.map((a) => {
        //                         if (a.includes('26')) {
        //                             $("#outgoing_graph").hide();
        //                         }
        //                     })




        //                 }

        //                 if (v.id == 3) { //store manager incoming

        //                     $("#incoming_tab").show();
        //                     $("#itemsreceivedlist").show();
        //                     $("#items_dashboard").show();
                        //     $("#unique_dashboard").show();
                        //     $("#low_dashboard").show();
                        //     $("#transactions_in_dashboard").show();
                        //     $("#expired_dashboard").show();
                        //     $("#expiry").show();
                        //     $("#expired").show();
                        //     $("#incoming_graph").show();
                        //     $("#receiveorders").hide();
                        //     $("#report_tab").show();
                        //     $("#transfer").hide();
                        //     $("#qty_adjustment").hide();
                        //     user_roles_2.push(3);





                        //     var roles = localStorage.getItem("user_role");
                        //     var users = roles.split(',')

                        //     users.map((a) => {
                        //         if (a.includes('26')) {
                        //             $("#incoming_graph").hide();
                        //             $("#transfer").show();
                        //             $("#qty_adjustment").show();
                        //         }
                        //     })


                        // }


                //         if (v.id == 0) { //store manager incoming
                //             $("#settings_tab").show();
                //         }

                //         var preference = localStorage.getItem('value')
                //         console.log(preference);
                //         if (preference == 'ro') {
                //             $("#expense_dashboard").hide();
                //             $("#creditors_dashboard").hide();
                //             $("#revenue_dashboard").hide();
                //             $("#debtors_dashboard").hide();
                //             $("#warehouse_value").hide();

                //         }
                //         if (preference == 'ro' && v.id == 25) {
                //             $("#report_tab").show();

                //             $("#expense_dashboard").hide();
                //             $("#creditors_dashboard").hide();
                //             $("#revenue_dashboard").hide();
                //             $("#debtors_dashboard").hide();
                //             $("#items_dashboard").show();
                //             $("#unique_dashboard").show();
                //             $("#low_dashboard").show();
                //             $("#transactions_in_dashboard").show();
                //             $("#transactions_out_dashboard").show();
                //             $("#expired_dashboard").show();
                //             $("#expenses_graph").hide();
                //             $("#transactions_activities").show();
                //             $("#warehouse_value").hide();
                //             $("#profit_loss_graph").show();
                //             $("#expenses_revenue").hide();
                //             $("#report_tab").show();
                //             $("#transfer").show();
                //             user_roles_2.push(25);



                //             var roles = localStorage.getItem("user_role");
                //             var arr = ['2', '3', '4', '24']
                //             var users = roles.split(',')

                //             users.map((a, i) => {
                //                 if (a.includes(arr[i])) {
                //                     $("#outgoing_graph").hide();
                //                     $("#incoming_graph").hide();
                //                 }
                //             })

                //         }

                //         if (preference == 'po') {
                //             // $("#qty_adjustment").show();
                //             // $("#transfer").show();
                //         }
                //         // if (preference == 'po' && v.id == 2||) {
                //         //     $("#qty_adjustment").show();
                //         //     $("#transfer").show();
                //         // }

                //         if (preference == 'po' && v.id == 25) {
                //             $("#report_tab").show();
                //             $("#sales_tab").show();



                //             // $("#qty_adjustment").show();

                //             $("#expense_dashboard").show();
                //             $("#creditors_dashboard").show();
                //             $("#revenue_dashboard").show();
                //             $("#debtors_dashboard").show();
                //             $("#items_dashboard").show();
                //             $("#unique_dashboard").show();
                //             $("#low_dashboard").show();
                //             $("#transactions_in_dashboard").show();
                //             $("#transactions_out_dashboard").show();
                //             $("#expired_dashboard").show();
                //             // $("#expenses_graph").show();
                //             $("#warehouse_value").show();
                //             $("#transactions_activities").show();
                //             $("#profit_loss_graph").show();
                //             $("#expenses_revenue").show();
                //             $("#report_tab").show();
                //             $("#transfer").show();
                //             user_roles_2.push(25);



                //             var roles = localStorage.getItem("user_role");
                //             var arr = ['2', '3', '4', '24']
                //             var users = roles.split(',')

                //             users.map((a, i) => {
                //                 if (a.includes(arr[i])) {
                //                     $("#outgoing_graph").hide();
                //                     $("#incoming_graph").hide();
                //                 }
                //             })


                //             // $("#outgoing_graph").show();
                //             // $("#incoming_graph").show();
                //             //   var roles = localStorage.getItem("user_role");
                //             // var users = roles.split(',')

                //             // users.map((a,i) => {
                //             //   if(a.includes('25')){
                //             //   $("#incoming_graph").hide();
                //             //   $("#outgoing_graph").hide();
                //             //   }
                //             // })

                //         }
                //         if (v.id == 4) {
                //             $("#sales_tab").show();
                //             $("#revenue_dashboard").show();
                //             $("#debtors_dashboard").show();
                //             $("#items_dashboard").show();
                //             $("#unique_dashboard").show();
                //             $("#low_dashboard").show();
                //             $("#transactions_dashboard").show();
                //             $("#expired_dashboard").show();
                //             $("#profit_loss_graph").show();
                //             $("#revenue_graph").show();
                //             $("#outgoing_graph").show();
                //             $("#warehouse_value").show();
                //             $("#report_tab").show();
                //             $("#transfer").show();
                //             user_roles_2.push(4);









                //             var roles = localStorage.getItem("user_role");
                //             var arr = ['2', '4']
                //             var users = roles.split(',')
                //             console.log(users)

                //             users.map((a, i) => {
                //                 if (a.includes(arr[i])) {
                //                     $("#expenses_revenue").show();
                //                     $("#expenses_graph").hide();
                //                     $("#revenue_graph").hide();
                //                 }
                //             })




                //         }


                //         // arr2.map((a, i) => {
                //         //     if (a.includes(user_roles_2[i])){
                //         //         $("#transfer").show();
                //         //         $("#qty_adjustment").show();
                //         //     }
                //         // })

                //         var arr2 = [2, 4, 26];


                //         arr2.some((a, i) => {
                //             if (user_roles_2[i] == parseInt(a)) {
                //                 console.log(a);
                //                 console.log(user_roles_2[i]);
                //                 $("#transfer").show();
                //                 $("#qty_adjustment").show();
                //             }
                //         })

                //         console.log(Number(localStorage.getItem('warehouses')))

                //         if (Number(localStorage.getItem('warehouses')) < 2) {
                //             // alert('here')
                //             $("#transfer").hide();
                //         }




                //         // $("#report_tab").show();

                //         k++;
                //     });



                //     $("#does_user_have_profile").html('yes_profile');


                // } else if (response.status == '400') {

                //     //
                //     $("#does_user_have_profile").html('no_profile');

                // } else if (response.status == "401") {

                //     $("#does_user_have_profile").html('no_profile');

                // }

        //     },

        //     error: function(response) {

        //     }

        // });

        $("#invoicesreceipts").hide();
    }

    function fetch_feeds(page) {

        var company_id = localStorage.getItem('company_id');
        var user_id = localStorage.getItem('user_id');
        if (page == "") {
            var page = 1;
        }
        var limit = 5;

        $.ajax({
            type: "GET",
            dataType: "json",
                        headers: {'Authorization':localStorage.getItem('token') },

            url: api_path + "feeds/list_feeds",
            data: {
                "company_id": company_id,
                "user_id": user_id,
                "limit": limit,
                "page": 1,
                "token": localStorage.getItem('token')
            },
            timeout: 60000,
            success: function(response) {

                console.log(response);

                var the_list = "";

                if (response.status == '200') {

                    if (response.data.length > 0) {

                        var k = 1;
                        var time = ""

                        // the_list += '<ul class="list-unstyled timeline">';


                        $.each(response['data'], function(i, v) {

                            var avatar = `${v.profile_pic}`
                            var feed = `${v.feed_id}`

                            if (!avatar) {
                                // time = $.timeago(new Date(response['data'][i]['action_time']));

                                the_list += `<li class="nav-item" onclick="location.href = '../warehouse/warehouse_feeds';"><a class="dropdown-item"><span class="image"><img src="../files/images/user_profile_images/sml_default_picture.png" alt="Profile Image" style="margin-left:-60px"/></span><span><span>${v.done_by}</span><span class="time">${time}</span></span>
                          <span class="message" style="padding:5px;">${v.message}</span></a>
                          </li>`

                                // the_list += '<li style="background-color:#F7F7F7; display:flex; border-bottom:1px solid #EDEDED"> <a class="user-post-profile">       <img src="../files/images/user_profile_images/sml_default_picture.png" alt="img" class="img_style">   </a>   <div class="block_content" style="width:100%; position:relative; left:-30px;">   <h2 class="title" style="font-weight: bold; position:relative; left:-20px;">       <a>'+v.done_by+'</a>    </h2>   <div class="byline"> <span>'+time+'</span><!-- by <a>Jane Smith</a> --></div>    <p class="">'+v.message+'</p>     </div>   </div> </li>';
                            }
                            if (avatar) {
                                // time = $.timeago(new Date(response['data'][i]['action_time']));
                                the_list += `<li class="nav-item" onclick="location.href = '../warehouse/warehouse_feeds';"><a class="dropdown-item"><span class="image"><img src="${v.profile_pic_path}" alt="Profile Image" style="margin-left:-60px"/></span><span><span>${v.done_by}</span><span class="time">${time}</span></span>
                          <span class="message" style="padding:5px;">${v.message}</span></a>
                          </li>`

                                // the_list += '<li style="background-color:#F7F7F7; display:flex; border-bottom:1px solid #EDEDED"> <a class="user-post-profile">       <img src="'+v.profile_pic_path+'" alt="img" class="img_style">   </a>   <div class="block_content" style="width:100%; position:relative; left:-30px;">   <h2 class="title" style="font-weight: bold; position:relative; left:-20px;">       <a>'+v.done_by+'</a>    </h2>   <div class="byline"> <span>'+time+'</span><!-- by <a>Jane Smith</a> --></div>    <p class="">'+v.message+'</p>     </div>   </div> </li>';
                            }

                            // the_list += `<li style="background-color:#F7F7F7"></li>`

                            //    if(`${v.ref_id}` > 0){
                            //        time = $.timeago(new Date(response['data'][i]['action_time']));
                            //       the_list += '<li>    <div class="block">  <div class="tags">    <a class="user-post-profile">       <img src="'+v.profile_pic_path+'" alt="img" class="img_style">   </a> <!--  <a href="#" class="tag" style="margin-top:-20px;">Transfer</a> -->        </div>   <div class="block_content">   <h2 class="title" style="font-weight: bold">       <a>'+v.done_by+'</a> <i class="fa fa-exchange" aria-hidden="true" title="Transfer" style="width:60%; font-size:18px; position:relative; left:80%"></i>     </h2>   <div class="byline"> <span>'+time+'</span><!-- by <a>Jane Smith</a> --></div>    <p class="excerpt">'+v.message+'</p> <span class="tf" id="tf_'+v.feed_id+'"><button data="'+v.company_id+'" dir="'+v.ref_id+'" id="accept" style="background-color: #3CB371; color:white; border:none; padding:5px; padding:5px 10px; border-radius: 3px;"> Accept</button> <button  id="decline" dir="'+v.ref_id+'" style="background-color:#CD5C5C; padding:10px; color:white; border:none; padding:5px 10px; border-radius: 3px;">Decline</button></span><i class="fa fa-spinner fa-spin fa-fw fa-1x" style="display: none;" id="filter_acc_dec"></i>    </div>   </div> </li>';

                            //     }
                            //     else{
                            //       // alert(v.profile_pic_path);
                            //       time = $.timeago(new Date(response['data'][i]['action_time']));
                            //        // <img src="../files/images/user_profile_images/mid_'+v.profile_pic+'" alt="img">
                            //       the_list += '<li>    <div class="block">  <div class="tags">    <a class="user-post-profile">       <img src="'+v.profile_pic_path+'" alt="img">    </a>   <!--<i  class="fa fa-info-circle"  data-toggle="tooltip" data-placement="top" style="font-style: italic; color: #add8e6; font-size: 20px; cursor : pointer;" title="View Low Item Info"></i> -->            </div>   <div class="block_content">   <h2 class="title" style="font-weight: bold">       <a>'+v.done_by+'</a>   </h2>   <div class="byline"> <span>'+time+'</span><!-- by <a>Jane Smith</a> --></div>    <p class="excerpt">'+v.message+'</p>    </div>   </div> </li>'; 
                            //       } 
                            // alert('good');


                        });


                        // the_list += "</ul>";

                    } else {

                        strTable = '<tr><td colspan="6">' + response.msg + '</td></tr>';

                    }

                    // $('#pagination').twbsPagination({
                    //     totalPages: Math.ceil(response.total_rows / limit),
                    //     visiblePages: 10,
                    //     onPageClick: function(event, page) {
                    //         fetch_feeds(page);
                    //     }
                    // });
                    // alert('good');

                    $("#add_notif").append(the_list);
                    $("#add_notif").append(
                        ` <li class="nav-item" onclick="location.href = '../warehouse/warehouse_feeds';"><div class="text-center"><a class="dropdown-item"> <strong>See All Notifications</strong> <i class="fa fa-angle-right"></i></a> </div></li>`
                    );


                    // $("#notfi_ddv").show();
                    // $('#loading').hide();

                } else {

                    // console.log(response);

                    var the_list = "";
                    $('#loading').hide();
                    the_list += response.msg;


                    // $("#notfi_ddv").html(the_list);
                    // $("#notfi_ddv").show();


                }

            },

            error: function(response) {

                // console.log(response);

                var the_list = "";
                $('#loading').hide();
                the_list += '<li>' + response.msg + '</li>';


                $("#notfi_ddv").show();
                $("#incomingData").html(the_list);

            }

        });

    }






    function getListOfWarehouseUSerHasAccessTo() {
        var company_id = localStorage.getItem('company_id');
        var user_id = localStorage.getItem('user_id');

        $.ajax({

            type: "POST",
                        headers: {'Authorization':localStorage.getItem('token') },
            
            dataType: "json",
            url: api_path + "wms/list_warehouses_user_connected",
            data: {
                "company_id": company_id,
                "user_id": user_id
            },
            timeout: 60000,

            success: function(response) {

                if (response.status == '200') {
                    console.log(response);
                    $('#loading_dlv').hide();
                    var str = "";
                    // alert(response.data.length)
                    if (Object.keys(response.data).length > 0) {

                        $.each(response['data'], function(i, v) {

                            str += '<tr>';
                            str += '<td>' + response['data'][i]['warehouse_name'] + '</td>';
                            str += '<td>' + response['data'][i]['warehouse_address'] + '</td>';
                            str +=
                                '<td><button name="enter_ware" class="enter_ware btn btn-primary btn-sm" id="enter_' +
                                response['data'][i]['warehouse_id'] + '" dir="entername_' +
                                response['data'][i]['warehouse_name'] +
                                '" data-dismiss="modal">Enter</button></td>';
                            str += '</tr>';

                        })

                        // $('#switch_tab').show();
                        $('#warehouse_dlv').html(str);
                        fetch_roles_user_can_access()


                    }

                } else {
                    $('#loading_dlv').hide();
                    $('#warehouse_dlv').html('');
                    $('#warehouse_dlv').html('Technical error!');
                }

            },
            // objAJAXRequest, strError
            error: function(response) {
                $('#loading_dlv').hide();
                $('#warehouse_dlv').html('');
                // alert('Error fetching warehouses!');
                $('#warehouse_dlv').html('Error fetching List!');

            }

        });
    }
    </script>