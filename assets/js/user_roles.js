$(document).ready(function(){
  var myVar2 = setInterval(function () {
        if ($("#does_user_have_roles").html() != "") {
            //stop the loop
            myStopFunction();
            // user_page_acces();
            var role_list = $("#does_user_have_roles").html();
 
                if (role_list.indexOf("-101-") >= 0) {
                    list_of_profiles();
                }

            //does user have access to this module
            // user_page_access();
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
  // user_page_access()




























function user_page_access() {
    var role_list = $("#does_user_have_roles").html();
    var an_admin;
    var user_roles = [];
    var user_roles_2 = [];


     if (role_list.indexOf("-93-") >= 0 ) {
        $("#error_display").hide();
            $("#contacts").show(); // show contact page
        $(".dsh_dvs").hide();
        $(".home_dv").show();


        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }
           if (role_list.indexOf("-94-") >= 0 ) {
        $("#error_display").hide();
        $(".home_dv").show();

        $("#contacts").show(); // show contact page

        $(".vendor_info").show();
        $(".dsh_dvs").hide();


        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

      if (role_list.indexOf("-95-") >= 0 ) {
        $("#error_display").hide();
        $(".home_dv").show();

        $("#contacts").show(); // show contact page
        $(".edit_vend").show();
        $(".dsh_dvs").hide();
        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

       if (role_list.indexOf("-96-") >= 0 ) {
            $("#error_display").hide();
        $(".home_dv").show();

            $("#contacts").show(); // show contact page
            $(".delete_vendor").show();
            $(".dsh_dvs").hide();

            $("#main_display_loader_page").hide();
            $("#main_display").show();
        }



        if (role_list.indexOf("-100-") >= 0 ) {
        $("#error_display").hide();
        $(".home_dv").show();


        $("#report_tab").show();
   
        $(".dsh_dvs").hide();


        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }


    if (role_list.indexOf("-101-") >= 0 && localStorage.getItem('warehouse_id')) {
        $(".dsh_dvs").hide();
        $(".home_dv").show();


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
        $(".home_dv").show();




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
        $(".home_dv").show();



        $("#expenses").show();

        $("#expense_dashboard").show();
        $("#expenses_graph").show();

        $("#main_display_loader_page").hide();
        $("#main_display").show();

    }

     if (role_list.indexOf("-86-") >= 0 ) {
        $("#error_display").hide();
        $(".dsh_dvs").hide();
        $(".home_dv").show();



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



           $("#transactions_out_dashboard").show();
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


           $("#transactions_out_dashboard").show();
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

           $("#transactions_out_dashboard").show();
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

           $("#transactions_out_dashboard").show();
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

           $("#transactions_out_dashboard").show();
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
        $(".home_dv").hide();
        $(".dsh_dvs").show();

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
       
        $("#invoicesreceipts").show();
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

    if (preference == "po") {
        // $("#qty_adjustment").show();
        // $("#transfer").show();
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
  //if user click on a check box to add or remove role
  $(document).on('click', '.chk_b_k', function(){
      var ans = confirm("Are you sure");
      var role_id = $(this).attr("id").replace(/chkb_/,'');
      add_remove_role(role_id);
  });
    
// });

// function user_page_access(){

//   var role_list = $("#does_user_have_roles").html();
//   if (role_list.indexOf("-101-") >= 0) {
    
//     //Settings
//     $("#main_display_loader_page").hide();
//     $("#main_display").show();
//     list_of_profiles();

//   }else{

    // $("#main_display").remove();
    // $("#loader_mssg").html("You do not have access to this page");
    // $("#ldnuy").hide();
    // // $("#modal_no_access").modal('show');

//   }

// }

function user_page_acces() {
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
               $("#items").show(); //show items page
               $("#items_dashboard").show();
        $(".items_activities").show();


        $("#main_display_loader_page").hide();
        $("#main_display").show();
     }

if (role_list.indexOf("-88-") >= 0 ) {
        $("#error_display").hide();

        $("#items").show(); //show items page
        $("#items_dashboard").show();
        $(".items_activities").show();



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



function fetch_users_assigned_profiles(){

  var company_id = localStorage.getItem('company_id');
  var module_id = 6;
  
  $.ajax({

    type: "GET",
    dataType: "json",
    headers: {
        'Authorization':localStorage.getItem('token'),
    },
    url: api_path + "accesscontrol/get_user_profiles_in_module",
    data: {
        "company_id": company_id,
        "module_id": module_id,
        "user_id": $.urlParam('user_id'),
        "pri_level_access": localStorage.getItem('warehouse_id')
    },
    timeout: 60000,

    success: function(response) {

        var tr_line = "";

        if (response.status == '200') {

            var k = 1;
            $.each(response.data, function (i, v) {

              $("#chkb_"+v.profile_id).attr("checked", true);

              k++;                   
              
            });

        } else {


        }



    },

    error: function(response) {



    }

  });

}

function list_of_profiles(){

  var company_id = localStorage.getItem('company_id');
  var module_id = 6;

  $("#loading").show();
  $("#permData").html('');
  
  $.ajax({

    type: "GET",
    dataType: "json",
    headers: {
        'Authorization':localStorage.getItem('token'),
    },
    url: api_path + "accesscontrol/get_company_profile_in_module",
    data: {
        "company_id": company_id,
        "module_id": module_id
    },
    timeout: 60000,

    success: function(response) {

        var tr_line = "";

        if (response.status == '200') {

            if (response.data.length > 0) {

                var k = 1;
                $.each(response.data, function (i, v) {

                  if(v.profile_name == "Basic" || v.profile_name == "Admin"){
                    var disbl = 'disabled="disabled"';
                  }else{
                    var disbl = '';
                  }

                    
                  tr_line += '<tr id="role_tr_'+v.profile_id+'"><td><input type="checkbox" name="chk_b_k" class="chk_b_k" id="chkb_'+v.profile_id+'" '+disbl+' ></td><td>'+v.profile_name+'</td><td>...</td></tr>';

                  tr_line += '<tr id="loading_chng_'+v.profile_id+'" style="display: none"><td colspan="3"><i class="fa fa-spinner fa-spin fa-fw fa-1x" style="display: ;" ></i></td></tr>';

                  k++;                   
                  
                });

                fetch_users_assigned_profiles();

            } else {

                tr_line = '<tr><td colspan="3">' + response.data.msg + '</td></tr>';

            }

            $("#permData").html(tr_line);
            $("#permData").show();
            $('#loading').hide();

            

        } else if (response.data <= 0) {

            tr_line = '<tr><td colspan="3">' + response.data.msg + '</td></tr>';

            $("#permData").html(tr_line);
            $("#permData").show();
            $('#loading').hide();

        } else if (response.status == '400') {

          tr_line += '<tr>';
          tr_line += '<td colspan="3">' + response.data.msg + '</td>';
          tr_line += '</tr>';

          $("#permData").html(tr_line);
          $("#permData").show();
          $('#loading').hide();

        }

    },

    error: function(response) {
      var strTable = "";
        $('#loading').hide();
        // alert(response.msg);
        tr_line += '<tr>';
        tr_line += '<td colspan="3"><strong class="text-danger">Connection error</strong></td>';
        tr_line += '</tr>';

        $("#incomingData").html(tr_line);
        $("#incomingData").show();

    }

  });
}

function add_remove_role(profile_id){


  if ($('#chkb_'+profile_id).is(":checked"))
  {
    var a_r_action = "add";
    var endpoint = "assign_profile_to_user";
  }else{
    var a_r_action = "remove";
    var endpoint = "remove_user_from_profile";
  }

  var company_id = localStorage.getItem('company_id');
  var user_id = $.urlParam('user_id');

  $("#loading_chng_"+profile_id).show();
  $("#role_tr_"+profile_id).hide();

  $.ajax({
        
    type: "POST",
    dataType: "json",
    url: api_path+"accesscontrol/"+endpoint,
    headers: {
        'Authorization':localStorage.getItem('token'),
    },
    data: { 
      "module_id" : 6 , 
      "company_id" : company_id , 
      "user_id" : user_id , 
      "profile_id" : profile_id,
      "pri_level_access": $.urlParam('id').split('&')[0],    

    },
    timeout: 60000,

    success: function(response) {

      if (response.status == '200'){

       location.reload();

      }else if(response.status == '400'){
          
          if(a_r_action == "add"){
            $('#chkb_'+profile_id).attr('checked', false); // Checks it
          }else{
            $('#chkb_'+profile_id).attr('checked', true); // UnChecks it
          }
          alert("error updating permission");

      }

      $("#loading_chng_"+profile_id).hide();
      $("#role_tr_"+profile_id).show();

    },

    error: function(response){
      
      if(a_r_action == "add"){
        $('#chkb_'+profile_id).attr('checked', false); // Checks it
      }else{
        $('#chkb_'+profile_id).attr('checked', true); // UnChecks it
      }
      alert("Error Updating role");
      $("#loading_chng_"+profile_id).hide();
      $("#role_tr_"+profile_id).show();

    }         

  });



}


function list_of_module_roles(){

  var company_id = localStorage.getItem('company_id');
  var user_id = $.urlParam('id');
  

  $.ajax({
        
    type: "POST",
    dataType: "json",
    url: api_path+"user/module_roles_plus_user_roles",
    data: { "module_id" : 6 , "company_id" : company_id , "user_id" : user_id },
    timeout: 60000,

    success: function(response) {
        
      console.log(response);

      var k = 1;
      var tr_line = "";
        
      if (response.status == '200'){

        $.each(response.data, function (i, v) {

          if(v.has_access == "yes"){
            var checkit = "checked";
          }else{
            var checkit = "";
          }

          if(v.role_name == "Admin" || v.role_name == "Basic"){
            var disable_checkbox = "disabled=disabled";
          }else{
            var disable_checkbox = "";
          }
            
          tr_line += '<tr id="role_tr_'+v.role_id+'"><td><input type="checkbox" name="chk_b_k" '+disable_checkbox+' class="chk_b_k" id="chkb_'+v.role_id+'" '+checkit+'></td><td>'+v.role_name+'</td><td>'+v.comment+'</td><td><a class="delete_employee" style="cursor: pointer;" id="emp_` +v.id +`"><i  class="fa fa-trash del_profile"  data-toggle="tooltip" data-placement="top" style="font-style: italic; color: #f97c7c; font-size: 20px;" title="Delete Profile" id="del_profile_`+v.profile_id+`"></i></a></td></tr>';

          tr_line += '<tr id="loading_chng_'+v.role_id+'" style="display: none"><td colspan="3"><i class="fa fa-spinner fa-spin fa-fw fa-1x" style="display: ;" ></i></td></tr>';


          // if(v.role_name == "Basic"){
          //   $("#chkb_"+v.role_id).attr("checked", true);
          // }else{
          //   var disable_checkbox = "";
          // }

          k++;                   
          
        });

        $("#permData").html(tr_line);
        $("#loading").hide();             


      }else if(response.status == '400'){
            
          $("#permData").html('<tr id="loading"><td colspan="3">Error fetching data. Please refresh page</td></tr>');

      }else if(response.status == "401"){
          
          $("#permData").html('<tr id="loading"><td colspan="3">Error fetching data. Please refresh page</td></tr>');

      }

      $("#loading").hide();

    },

    error: function(response){
      
      
      $("#permData").html('<tr id="loading"><td colspan="3">Error fetching data. Please refresh page</td></tr>');

      $("#loading").hide();

    }        

  });
}



$.urlParam = function(name){

    var results = new RegExp('[\?&]' + name + '=([^]*)').exec(window.location.href);
    if (results==null){
       return null;
    }
    else{
       return results[1] || 0;
    }
}
