$(document).ready(function(){
  //this time interval check if the user roles have been fetched before running anything on this page
  

  var myVar2 = setInterval(

    function(){

      if($("#does_user_have_roles").html() != ""){

        //stop the loop
        myStopFunction();

        //does user have access to this module
        user_page_access_();
        
        
      }else{
        console.log("No profile");
      }
       
    },
    1000
  );

  function myStopFunction(){
    clearInterval(myVar2);
  }
  //end of interval set

  
  
  $(document).on('click', '#update_profile', function(){
    update_profile();
  });
  
});
function user_page_access_(){
  var role_list = $("#does_user_have_roles").html();
    var an_admin;
    var user_roles = [];
    var user_roles_2 = [];

       if (role_list.indexOf("-84-") >= 0 ) {
        $("#error_display").hide();
        $(".crt_exp").show();


        $("#expenses").show();

        $("#expense_dashboard").show();
        $("#expenses_graph").show();

        $("#main_display_loader_page").hide();
        $("#main_display").show();

        list_of_warehouse_users("");
    }

    if (role_list.indexOf("-85-") >= 0 ) {
        $("#error_display").hide();

        $("#expenses").show();

        $("#expense_dashboard").show();
        $("#expenses_graph").show();

        $("#main_display_loader_page").hide();
        $("#main_display").show();

    }

     if (role_list.indexOf("-86-") >= 0 ) {
        $("#error_display").hide();

        $("#expenses").show();
        $("#expense_dashboard").show();
        $("#expenses_graph").show();

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
     if (role_list.indexOf("-87-") >= 0 ) {
        $("#error_display").hide();

        $("#expenses").show();
        $("#expense_dashboard").show();
        $("#expenses_graph").show();

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

if (role_list.indexOf("-88-") >= 0 ) {
        $("#error_display").hide();

               $("#items").show(); //show items page

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
        list_of_warehouse_users("");
     }
     if (role_list.indexOf("-90-") >= 0 ) {
        $("#error_display").hide();
        $(".itm_del").show();

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

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
      if (role_list.indexOf("-92-") >= 0 ) {
        $("#error_display").hide();
        $("#contacts").show(); // show contact page
        $("#add_vendor").show();
        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
      if (role_list.indexOf("-93-") >= 0 ) {
        $("#error_display").hide();
            $("#contacts").show(); // show contact page

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
           if (role_list.indexOf("-94-") >= 0 ) {
        $("#error_display").hide();
        $("#contacts").show(); // show contact page

        $(".vendor_info").show();

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
      if (role_list.indexOf("-95-") >= 0 ) {
        $("#error_display").hide();
        $("#contacts").show(); // show contact page
        $(".edit_vend").show();



        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
   if (role_list.indexOf("-96-") >= 0 ) {
        $("#error_display").hide();
        $("#contacts").show(); // show contact page
        $(".delete_vendor").show();
        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
     if (role_list.indexOf("-97-") >= 0 ) {
        $("#error_display").hide();
        $("#qty_adjustment").show();
        $("#upward_adjustment").show();
        $("#qty_adj_history").hide();



        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
     if (role_list.indexOf("-98-") >= 0 ) {
        $("#error_display").hide();
        $("#qty_adjustment").show();
        $("#downward_adjustment").show();
        $("#qty_adj_history").hide();

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
     if (role_list.indexOf("-99-") >= 0 ) {
        $("#error_display").hide();
        $("#qty_adjustment").show();
        $("#qty_adj_history").show();

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

     if (role_list.indexOf("-100-") >= 0 ) {
        $("#error_display").hide();

        $("#report_tab").show();
   

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

      if (role_list.indexOf("-100-") >= 0 ) {
        $("#error_display").hide();

        $("#report_tab").show();
   

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }







    if (role_list.indexOf("-101-") >= 0 && localStorage.getItem('warehouse_id')) {
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


      if (role_list.indexOf("-102-") >= 0 ) {
        $("#error_display").hide();
        
         $("#procurement").show();
         $("#paystovendors").hide();
         // $("#purchaseorders").show();
         $("#createpoorder").show();


         

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

       if (role_list.indexOf("-103-") >= 0 ) {
        $("#error_display").hide();

         $("#procurement").show();
         $("#paystovendors").hide();
         $("#purchaseorders").show();
   

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

       if (role_list.indexOf("-104-") >= 0 ) {
        $("#error_display").hide();

        $("#procurement").show();
        $(".del_this_grn").show();

         $("#paystovendors").hide();
         $("#purchaseorders").show();
   

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
       if (role_list.indexOf("-105-") >= 0 ) {
        $("#error_display").hide();

        $("#procurement").show();
        $(".incoming_info").show();

        $("#paystovendors").hide();
        $("#purchaseorders").show();
   

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
       if (role_list.indexOf("-106-") >= 0 ) {
        $("#error_display").hide();

        $("#procurement").show();
        $("#show_po_box").show();
   

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
       if (role_list.indexOf("-107-") >= 0 ) {
        $("#error_display").hide();

        $("#paystovendors").show();
   

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
       if (role_list.indexOf("-108-") >= 0 ) {
        $("#error_display").hide();

        $("#paystovendors").show();
        $(".incoming_info").show();


        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
       if (role_list.indexOf("-109-") >= 0 ) {
        $("#error_display").hide();
        $("#paystovendors").show();

        $("#del_this_grn").show();
   

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
       if (role_list.indexOf("-109-") >= 0 ) {
        $("#error_display").hide();

        $("#report_tab").show();
   

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

       if (role_list.indexOf("-110-") >= 0 ) {
        $("#error_display").hide();
        $("#incoming_tab").show();
        $("#itemsreceivedlist").show();
        $("#show_po_box").show();

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

     if (role_list.indexOf("-111-") >= 0 ) {
        $("#error_display").hide();
        $("#incoming_tab").show();
        $("#itemsreceivedlist").show();

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
     if (role_list.indexOf("-112-") >= 0 ) {
        $("#error_display").hide();
        $("#incoming_tab").show();
        $("#incoming_info").show();

     
        $("#itemsreceivedlist").show();

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

     if (role_list.indexOf("-113-") >= 0 ) {
        $("#error_display").hide();
     
        $("#createissueorder").show();

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

     if (role_list.indexOf("-114-") >= 0 ) {
        $("#error_display").hide();
       
        $("#invoicesreceipts").show();
        $("#sales_tab").show();
        $("#invoicesreceipts333").show();

        

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

     if (role_list.indexOf("-115-") >= 0 ) {
        $("#error_display").hide();
   
        $("#del_this_grn").show();

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

     if (role_list.indexOf("-116-") >= 0 ) {
        $("#error_display").hide();
        
        $("#incoming_info").show();

     
      

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

      if (role_list.indexOf("-119-") >= 0 ) {
        $("#error_display").hide();
        
        $("#show_po_box").show();

     
      

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
      if (role_list.indexOf("-120-") >= 0 ) {
        $("#error_display").hide();
        
        $("#paysfromclients_2").show();
      

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

     if (role_list.indexOf("-123-") >= 0 ) {
        $("#error_display").hide();
        
        $("#incoming_info").show();
      

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

      if (role_list.indexOf("-124-") >= 0 ) {
        $("#error_display").hide();
        
        $("#del_this_grn").show();
      

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }



     if (role_list.indexOf("-125-") >= 0 ) {

        $("#error_display").hide();
        $("#outgoing_tab").show(); //show items page
        $("#supplyitems").show(); //show items page
        $("#show_po_box").show();
    

        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

     if (role_list.indexOf("-126-") >= 0 ) {
        $("#error_display").hide();
        $("#supplyitems").show();

     

        $("#main_display_loader_page").hide();
        $("#main_display").show();
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


        list_of_warehouse_users("");

        var roles = localStorage.getItem("user_role");
        var arr = ["2", "4"];
        var users = roles.split(",");

        users.map((a, i) => {
            if (a.includes(arr[i])) {
                $("#expenses_revenue").show();
                $("#expenses_graph").hide();
                $("#revenue_graph").hide();
            }
        });

        // if(Array.from(Number(roles)).includes(2 & 4)){
        //    alert(roles)
        // }
    }

    if (role_list.indexOf("-26-") >= 0) {
        //warehouse manager

        $("#incoming_tab").show(); //warehouse manager
        $("#receiveorders").show(); //receive orders/create orders

        $("#outgoing_tab").show(); //warehouse manager
        $("#invoicesreceipts").show();
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

        list_of_warehouse_users("");

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

        user_roles_2.push(24);

        var roles = localStorage.getItem("user_role");
        var users = roles.split(",");

        users.map((a) => {
            if (a.includes("26")) {
                $("#outgoing_graph").hide();
            }
        });
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

        list_of_warehouse_users("");

        var roles = localStorage.getItem("user_role");
        var users = roles.split(",");

        users.map((a) => {
            if (a.includes("26")) {
                $("#incoming_graph").hide();
                $("#transfer").show();
                $("#qty_adjustment").show();
            }
        });
    }

    if (role_list.indexOf("-0-") >= 0) {
        //store manager incoming
        $("#settings_tab").show();
    }

    var preference = localStorage.getItem("value");
    console.log(preference);
    if (preference == "ro") {
        $("#expense_dashboard").hide();
        $("#creditors_dashboard").hide();
        $("#revenue_dashboard").hide();
        $("#debtors_dashboard").hide();
        $("#warehouse_value").hide();
        $("#main_display_loader_page").hide();
        $("#main_display").show();

        list_of_warehouse_users("");
    }
    if (preference == "ro" && role_list.indexOf("-25-") >= 0) {
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

        list_of_warehouse_users("");

        var roles = localStorage.getItem("user_role");
        var arr = ["2", "3", "4", "24"];
        var users = roles.split(",");

        users.map((a, i) => {
            if (a.includes(arr[i])) {
                $("#outgoing_graph").hide();
                $("#incoming_graph").hide();
            }
        });
    }

    if (preference == "po") {
        // $("#qty_adjustment").show();
        // $("#transfer").show();
    }
    // if (preference == 'po' && v.id == 2||) {
    //     $("#qty_adjustment").show();
    //     $("#transfer").show();
    // }

    if (preference == "po" && role_list.indexOf("-25-") >= 0) {
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

        list_of_warehouse_users("");

        var roles = localStorage.getItem("user_role");
        var arr = ["2", "3", "4", "24"];
        var users = roles.split(",");

        users.map((a, i) => {
            if (a.includes(arr[i])) {
                $("#outgoing_graph").hide();
                $("#incoming_graph").hide();
            }
        });

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

        var roles = localStorage.getItem("user_role");
        var arr = ["2", "4"];
        var users = roles.split(",");
        console.log(users);

        users.map((a, i) => {
            if (a.includes(arr[i])) {
                $("#expenses_revenue").show();
                $("#expenses_graph").hide();
                $("#revenue_graph").hide();
                $("#main_display_loader_page").hide();
                $("#main_display").show();

                list_of_warehouse_users("");
            }
        });
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


function fetch_profile_details(){


  var profile_id = $.urlParam('id');
  
  $.ajax({

      type: "GET",
      dataType: "json",
      headers: {
          'Authorization':localStorage.getItem('token'),
      },
      url: api_path + "accesscontrol/get_profile_details",
      data: {
          "profile_id": profile_id
      },
      timeout: 60000,

      success: function(response) {

          var strTable = "";

          if (response.status == '200') {


          

            $("#profile_name").val(response.data.profile_name);
            $("#profile_desc").val(response.data.profile_description);
            $("#update_profile").show();

            var k = 1;
            $.each(response.data.roles, function(i, v) {
            
              $("#chkb_"+v.id).attr("checked", true);

             
              k++;

            });

          } else if (response.data <= 0) {


          }

      },
      error: function(response) {

      }

  });
}


function fetch_role_given_to_a_profile(){

}

function fetch_app_roles(){

  var company_id = localStorage.getItem('company_id');
  var module_id = 1;

  $("#loading").show();
  $("#incomingData").html('');

  
  $.ajax({

      type: "GET",
      dataType: "json",
      headers: {
          'Authorization':localStorage.getItem('token'),
      },
      url: api_path + "modules/get_roles_in_module",
      data: {
          "module_id": module_id
      },
      timeout: 60000,

      success: function(response) {

          var strTable = "";

          if (response.status == '200') {
            alert('juh')

              if (response.data.length > 0) {

                  var k = 1;
                  $.each(response.data, function(i, v) {

                      strTable += `<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                         ${localStorage.getItem('super_admin') == "super_admin" && v.role_id == "101" ? 
                          `<input type="checkbox" id="chkb_`+v.role_id+`" class="role_box" >&nbsp;&nbsp;`+v.role_name+``
                          : !localStorage.getItem('super_admin') && v.role_id == "101" ?  `<input type="checkbox" id="chkb_`+v.role_id+`" class="role_box" disabled="disabled">&nbsp;&nbsp;`+v.role_name+``:
                          `<input type="checkbox" id="chkb_`+v.role_id+`" class="role_box">&nbsp;&nbsp;`+v.role_name+``
                           }


                        </div>
                      </div>`;

                      k++;

                  });


                  fetch_profile_details(); // fetch the roles that were assigned to the profile


              } else {

                  strTable = '<tr><td colspan="5">' + response.data.msg + '</td></tr>';

              }

              $("#holds_roles").html(strTable);
              $("#holds_roles").show();
              $('#loading').hide();

          } else if (response.data <= 0) {

            $('#loading').hide();

              strTable = '<tr><td colspan="3">' + response.data.msg + '</td></tr>';

              $("#incomingData").html(strTable);
              $("#incomingData").show();

          }

      },

      error: function(response) {
        var strTable = "";
        $('#loading').hide();
        // alert(response.msg);
        strTable += '<tr>';
        strTable += '<td colspan="3"><strong class="text-danger">Connection error</strong></td>';
        strTable += '</tr>';

        $("#incomingData").html(strTable);
        $("#incomingData").show();

      }

  });
}

function update_profile(){

  var company_id = localStorage.getItem('company_id');
  var profile_id = $.urlParam('id');
  var profile_name = $.trim($('#profile_name').val());
  var profile_desc = $.trim($('#profile_desc').val());


  var blank;

  $(".add_item_required").each(function(){

    var the_val = $.trim($(this).val());

    if(the_val == "" || the_val == "0"){

      $(this).addClass('has-error');

      blank = "yes";

    }else{

      $(this).removeClass("has-error");

    }

  });


  if(blank == "yes"){

    $('#error').html("You have a blank field");
    return; 

  }


  //role_box
  var acheck = "";
  var keys = [];
  var role_list = [];
  $('.role_box:checked').each(function () {

    acheck = "yes";
    var id = $(this).attr("id").replace(/chkb_/,'');
    role_list.push(id);

  });


  if(acheck != "yes"){

    $('#error').html("You have to check at least one role box before submitting");

    return; 

  }


  $('#update_profile').hide();
  $('#item_loader').show();

  $('#error').html('');


  $.ajax({

    type: "POST",
    dataType: "json",
    cache: false,
    headers: {
      'Authorization':localStorage.getItem('token'),
    },
    url: api_path+"accesscontrol/update_profile",
    data: {

      "company_id" : company_id, 
      "profile_id" : profile_id,
      "profile_name": profile_name,
      "profile_description": profile_desc,
      "role_list" : role_list,
      "module_id": 1
      
    },

    success: function(response) {


      if (response.status == '200') {

        $('#modal_item').modal('show');

        $('#modal_item').on('hidden.bs.modal', function () {
            
            window.location.reload();
        });
        
        
      }else if(response.status == '400'){ // coder error message

        $('#error').html('Technical Error. Please try again later.');

      }else if(response.status == '401'){ //user error message

        $('#error').html("No result");

      }

      $('#update_profile').show();
      $('#item_loader').hide();

    },

    error: function(response){

      $('#update_profile').show();
      $('#item_loader').hide();
      $('#error').html("Connection Error.");

    }

  });

}