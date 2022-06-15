<?php
include_once("_common/menu.php"); // menu list
include_once("../gen/_common/header.php"); // header contents
include_once("assets/wms.php"); // header contents
?>


        <!-- page content -->

        <div id="page_loader" style="display: ;">

           <div class="right_col" role="main">
           <div class="">
             <div class="page-title">
               
             </div>
             
             <div class="clearfix"></div>

             <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                 <i class="fa fa-spinner fa-spin fa-fw fa-4x"  ></i>
               </div>
             </div>
           </div>
         </div>   
       </div>


       <div id="employee_error_display" style="display: none;">

         <div class="right_col" role="main">
         <div class="">
           <div class="page-title">
             
           </div>
           
           <div class="clearfix"></div>

           <div class="row">
             <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="alert alert-danger alert-dimissible fade-in" role="alert">
                 <button type="button" class="close" data-dismiss="alert" aria-label="close">
                   <span aria-hidden="true"></span>
                 </button>
                 <strong>Error fetching data. Please refresh page</strong>
               </div>
             </div>
           </div>
         </div>
       </div>   
     </div>



     <div id="employee_data_display" style="display: none;">

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
               <strong id="error_txt_spc">Technical error!</strong>
             </div>
           </div>
         </div>
       </div>
     </div>   
   </div>


     <div id="page_div" style="display: none;">

       <div class="right_col" role="main">
       <div class="">
         <div class="page-title">
           
         </div>
         
         <div class="clearfix"></div>

         <div class="row">
           <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="alert alert-danger alert-dimissible fade-in" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="close">
                 <span aria-hidden="true"></span>
               </button>
               <h2><strong>Access Denied</strong><br>You do not have permission to access this page</h2>
             </div>
           </div>
         </div>
       </div>
     </div>   
   </div>




        <div class="right_col" role="main" id="main_display" style="display: none;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3 id="fullname"></h3>
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
                    <a href="users" class="btn btn-primary">Back</a>
                    
                    
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

                    <h2 id="user_name"></h2>

                    

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title" style="width: 5%"></th>
                            <th class="column-title" style="width: 20%">Warehouse</th>
                            <th class="column-title" style="width: 20%">Roles</th>
                            <th class="column-title" style="width: 75%">Activities</th>
                            <!-- <th class="column-title" style="width: 15%">Permissions</th> -->
                      
                          </tr>
                        </thead>



                        <tr id="loading">
                          <td colspan="4"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;" ></i></td>
                        </tr>
                        
                        
                       <tbody  id="permData">

                        </tbody>

                      </table>

                      <!-- <button type="button" class="btn btn-success" id="update_perm">Update</button> -->
                      <!-- <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="perm_loader"></i> -->
                    </div>
							
						
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

          <!-- modal -->
        <div class="modal fade" id="modal_warehouse_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;">Success
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </h3>
                
              </div>
              <div class="modal-body">
                <h4>User Added Successfully!</h4>
              </div>
              <!-- <div class="modal-footer"> -->
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
              <!-- </div> -->
            </div>
          </div>
        </div>

          <!-- modal -->
        
          <!-- modal -->
          <div class="modal fade" id="modal_perm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header ">
                  <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;">Success
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  </h3>
                  
                </div>
                <div class="modal-body">
                  <h4 id="modal_msg">User permission updated successfully!</h4>
                </div>
                <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-danger" id="yes_delete_position" data-dismiss="modal">Yes</button>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                </div> -->
              </div>
            </div>
          </div>


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

          <!-- modal -->
          <div class="modal fade" id="modal_no_access" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header ">
                  <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;">Access Denied
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  </h3>
                  
                </div>
                <div class="modal-body">
                  <h4>You do not have access to this role</h4>
                </div>
                <!-- <div class="modal-footer"> -->
                  <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                  <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                <!-- </div> -->
              </div>
            </div>
          </div>
        <script type="text/javascript">

          $(document).ready(function(){

              does_user_have_access_to_page();
              // user_page_access();
              //if user click on a check box to add or remove role
              $(document).on('click', '.chk_role', function(e){
                  var ans = confirm("Are you sure?");
                  var role_id = $(this).attr("id").replace(/chkb_/,'');
                  var warehouse_id = $(this).attr("dir").replace(/chkw_/,'');
                  if(ans == true){

                    if($(this).prop('checked') == true){
                        // alert('Checks');
                        var a_r_action = "add";
                        
                     }else if($(this).prop('checked') == false) {
                        // alert('unChecks');
                        var a_r_action = "remove";
                      
                     }

                    add_remove_role(role_id, warehouse_id, a_r_action);
                    
                  }else if(ans == false){

                    e.preventDefault();
                    return false;
                  }

              });


              $(document).on('click', '.chk_prfl', function(e){
                // var ans = confirm("Are you sure you want to give the user this profile?");
                var profile_id = $(this).attr("id").replace(/chk_prfl_/,'');
                var warehouse_id = $(this).attr("dir").replace(/chkw_/,'');
                var roles_list = $(this).attr("lang");

                // if(ans == true){

                    if($(this).prop('checked') == true){
                        // alert('Checks');
                        var a_r_action = "add";
                        
                     }else if($(this).prop('checked') == false) {
                        // alert('unChecks');
                        var a_r_action = "remove";
                      
                     }

                    // bulk_add_remove_role(profile_id, warehouse_id, a_r_action, roles_list);
                    add_or_remove_profile(profile_id, warehouse_id, a_r_action, roles_list);
                    
                    
                    
                // }else if(ans == false){
                //   // alert(roles_list);
                //   e.preventDefault();
                //   return false;
                // }

              });

              
          });
 



          function add_or_remove_profile(profile_id, warehouse_id, a_r_action, roles_list){

            var company_id = localStorage.getItem('company_id');
            var user_id = $.urlParam('id');
            var roles_list_array = roles_list.split("-");

            $("#loading_chng_"+warehouse_id).show();
            $("#role_tr_"+warehouse_id).hide();

            $.ajax({
                  
              type: "POST",
              dataType: "json",
              headers: {'Authorization':localStorage.getItem('token') },

              url: api_path+"user/add_or_remove_permission_profile",
              data: { "module_id" : 6 , "company_id" : company_id , "user_id" : user_id , "profile_id" : profile_id , "warehouse_id" : warehouse_id, "add_or_remove" : a_r_action },
              timeout: 60000,

              success: function(response) {

                if (response.status == '200'){

                  // if it is to add roles
                  if(a_r_action == "add"){
                    
                    $(roles_list_array).each(function(i,v){
                      $("#chkb_"+v).attr("checked", true);
                    });
                    location.reload()

                    // if(localStorage.getItem('warehouse_id') == ""){

                    //   localStorage.setItem('warehouse_id', warehouse_id);

                    // }


                  }else{ // if it is to remove role

                    $(roles_list_array).each(function(i,v){
                      $("#chkb_"+v).attr("checked", false);
                    });
                    location.reload()
                    

                  }

                  $("#loading_chng_"+warehouse_id).hide();
                  $("#role_tr_"+warehouse_id).show();


                }else if(response.status == '400'){

                    // if(a_r_action == "add"){
                    //   $('#chkb_'+profile_id).attr('checked', false); // Checks it
                    // }else{
                    //   $('#chkb_'+profile_id).attr('checked', true); // UnChecks it
                    // }
                    
                    $("#loading_chng_"+warehouse_id).hide();
                    $("#role_tr_"+warehouse_id).show();

                    alert("error updating permission");

                }

              },

              error: function(response){

                // if(a_r_action == "add"){
                //   $('#chkb_'+profile_id).attr('checked', false); // Checks it
                // }else{
                //   $('#chkb_'+profile_id).attr('checked', true); // UnChecks it
                // }

                alert("Error Updating role");
                $("#loading_chng_"+warehouse_id).hide();
                $("#role_tr_"+warehouse_id).show();

              }         

            });
          }




          function does_user_have_access_to_page(){

                var user_id = localStorage.getItem('user_id');
                var module_id = 6;
                var profile_id = 0;

                $.ajax({

                    type: "POST",
                    dataType: "json",
                    cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/check_if_user_has_profile",
                    data: {
                        "user_id": user_id,
                        "company_id" : localStorage.getItem('company_id'),
                        "warehouse_id" :localStorage.getItem('warehouse_id'),
                        "module_id": module_id,
                        "profile_id": profile_id
                    },

                    success: function(response) {

                        console.log(response);
                        
                        if (response.status == '200') {

                          $("#main_display").show();
                          get_value_id();
                            
                        } else {
                            // $("#modal_no_access").modal('show');
                            $("#main_display").hide();
                            $("#page_div").show();
                        }

                    },

                    error: function(response) {
                        // $("#modal_no_access").modal('show');
                        $("#main_display").hide();
                        $("#page_div").show();
                    }

              });

          }


           function get_value_id(){

            var company_id = localStorage.getItem('company_id');

            $.ajax({
                  
              type: "POST",
              dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

              url: api_path+"wms/list_general_settings",
              data: { "module_id" : 6 , "company_id" : company_id, },
              timeout: 60000,

              success: function(response) {

                $('#page_loader').hide();
                $('#main_display').show();     

                console.log(response);

                var k = 1;
                var tr_line = "";
                  
                if (response.status == '200'){

                  // $('#fullname').html('Set your preference')
                  
                  //for each warehouse
                  var warehouse_id;
                  $.each(response.data, function (i, v) {
                   localStorage.setItem('value', `${v.value}`)

                })
                list_of_module_roles();                           
              }
              else {
                    alert(response.msg)
              }
            },

                  error: function(response){
                    alert(response.msg)
      
}
              })

              }


          // function user_page_access(){

          //   var company_id = localStorage.getItem('company_id');
          //   var user_id = localStorage.getItem('user_id');
          //   var warehouse_id = localStorage.getItem('warehouse_id');
          //   var module_id = 6;

          //   $.ajax({
                  
          //     type: "POST",
          //     dataType: "json",
          //     url: api_path+"user/does_user_have_access_to_this_role",
          //     data: { "company_id": company_id,  "user_id": user_id, "module_id": module_id , "role_id" : 11, "warehouse_id": warehouse_id },
          //     timeout: 60000,

          //     success: function(response) {
                  
          //         console.log(response);
                  
          //         if (response.status == '200'){
          //           //show div
          //           $("#main_display").show();
          //           list_of_module_roles();
                    

          //         }else{

          //           // $("#modal_no_access").modal('show');
          //           $("#main_display").hide();
          //           $("#page_div").show();

          //         }

          //     },

          //     error: function(response){
                
          //       // $("#modal_no_access").modal('show');
          //       $("#main_display").hide();
          //       $("#page_div").show();

          //     }        

          // });
          // }

          // function does_user_have_access_to_page(){

          //     var user_id = localStorage.getItem('user_id');
          //     var module_id = 6;
          //     var role_id = 0;

          //     $.ajax({

          //         type: "POST",
          //         dataType: "json",
          //         cache: false,
          //         url: api_path + "wms/check_if_user_has_role",
          //         data: {
          //             "user_id": user_id,
          //             "company_id" : localStorage.getItem('company_id'),
          //             "warehouse_id": localStorage.getItem('warehouse_id'),
          //             "module_id": module_id,
          //             "role_id": role_id
          //         },

          //         success: function(response) {

          //             console.log(response);
                      
          //             if (response.status == '200') {

          //                 // page_warehouse_access();
          //                 // var list_id;
          //                 // list_grns('');
          //                 list_of_module_roles();
          //                 $(".page_div").show();
                          
          //             } else {
                          
          //                 $(".page_div").html('<br><br><br><br><h2>Access Denied</h2>You do not have permission to access this page<br><br<br>');
          //                 $(".page_div").show();

          //             }

          //         },

          //         error: function(response) {
          //             $(".page_div").html('<br><br><br><br><h2>Access Denied</h2>You do not have permission to access this page<br><br<br>');
          //             $(".page_div").show();
          //         }

          //     });

          // }

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


          function bulk_add_remove_role(profile_id, warehouse_id, a_r_action, roles_list){

            var company_id = localStorage.getItem('company_id');
            var user_id = $.urlParam('id');
            var roles_list_array = roles_list.split("-");

            $("#loading_chng_"+warehouse_id).show();
            $("#role_tr_"+warehouse_id).hide();

            $.ajax({
                  
              type: "POST",
              dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

              url: api_path+"user/bulk_add_or_remove_role",
              data: { "module_id" : 6 , "company_id" : company_id , "user_id" : user_id , "profile_id" : profile_id , "warehouse_id" : warehouse_id, "add_or_remove" : a_r_action },
              timeout: 60000,

              success: function(response) {

                if (response.status == '200'){

                  // if it is to add roles
                  if(a_r_action == "add"){
                    
                    $(roles_list_array).each(function(i,v){
                      $("#chkb_"+v).attr("checked", true);
                    });

                  }else{ // if it is to remove role

                    $(roles_list_array).each(function(i,v){
                      $("#chkb_"+v).attr("checked", false);
                    });

                  }

                  $("#loading_chng_"+warehouse_id).hide();
                  $("#role_tr_"+warehouse_id).show();


                }else if(response.status == '400'){

                    // if(a_r_action == "add"){
                    //   $('#chkb_'+profile_id).attr('checked', false); // Checks it
                    // }else{
                    //   $('#chkb_'+profile_id).attr('checked', true); // UnChecks it
                    // }
                    
                    $("#loading_chng_"+warehouse_id).hide();
                    $("#role_tr_"+warehouse_id).show();

                    alert("error updating permission");

                }

              },

              error: function(response){

                // if(a_r_action == "add"){
                //   $('#chkb_'+profile_id).attr('checked', false); // Checks it
                // }else{
                //   $('#chkb_'+profile_id).attr('checked', true); // UnChecks it
                // }

                alert("Error Updating role");
                $("#loading_chng_"+warehouse_id).hide();
                $("#role_tr_"+warehouse_id).show();

              }         

            });
          }

          function add_remove_role(role_id, warehouse_id, a_r_action){

            
            var company_id = localStorage.getItem('company_id');
            var user_id = $.urlParam('id');

            $("#loading_chng_"+warehouse_id).show();
            $("#role_tr_"+warehouse_id).hide();

            $.ajax({
                  
              type: "POST",
              dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

              url: api_path+"user/add_or_remove_role",
              data: { "module_id" : 6 , "company_id" : company_id , "user_id" : user_id , "role_id" : role_id , "warehouse_id" : warehouse_id, "add_or_remove" : a_r_action },
              timeout: 60000,

              success: function(response) {

                if (response.status == '200'){

                  // if(a_r_action == "add"){
                  //     // alert('Checks');
                  //     $('#chw_'+response.warehouse_id).attr('checked', true);
                     
                  //  }else {
                  //     // alert('unChecks');
                  //     $('#chw_'+response.warehouse_id).attr('checked', false);
                     
                  //  }

                }else if(response.status == '400'){
                    if(a_r_action == "add"){
                      $('#chkb_'+role_id).attr('checked', false); // Checks it
                    }else{
                      $('#chkb_'+role_id).attr('checked', true); // UnChecks it
                    }
                    alert("error updating permission");
                }

                $("#loading_chng_"+warehouse_id).hide();
                $("#role_tr_"+warehouse_id).show();

              },

              error: function(response){
                if(a_r_action == "add"){
                  $('#chkb_'+role_id).attr('checked', false); // Checks it
                }else{
                  $('#chkb_'+role_id).attr('checked', true); // UnChecks it
                }
                alert("Error Updating role");
                $("#loading_chng_"+warehouse_id).hide();
                $("#role_tr_"+warehouse_id).show();

              }         

            });



          }


          function list_of_module_roles(){

            var company_id = localStorage.getItem('company_id');
            var user_id = $.urlParam('id');
            var value = localStorage.getItem('value');
            console.log(value);
            


            $.ajax({
                  
              type: "POST",
              dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },
              
              url: api_path+"user/fetch_permissions_settings",
              data: { "module_id" : 6 , "company_id" : company_id , "user_id" : user_id, "value": value },
              timeout: 60000,

              success: function(response) {

                $('#page_loader').hide();
                $('#main_display').show();    

                console.log(response);

                var k = 1;
                var tr_line = "";
                  
                if (response.status == '200'){

                  $('#fullname').html('<strong>'+response.fullname+'\'s </strong>Roles')
                  
                  //for each warehouse
                  var warehouse_id;
                  $.each(response.data, function (i, v) {

                    // if(v.warehouse_access == "yes"){
                    //   var checkit = "checked";
                    //   var disable_checkboxrole = "disabled=disabled";
                    // }else{
                    //   var checkit = "";
                    //   var disable_checkboxrole = "disabled=disabled";
                    // }
                    // console.log(response['data'][i]['role_details'][i]['role_id']);
                    warehouse_id = v.warehouse_id

                    tr_line += '<tr id="role_tr_'+warehouse_id+'">';
                    tr_line += '<td>'+k+'<!--<input type="checkbox" name="chk_ware" class="chk_ware" id="chw_'+warehouse_id+'">--></td>';

                    tr_line += '<td>'+response.data[i]['warehouse_name']+'</td>';
                    

                    //column that shows list of profiles
                    var group_roles = "";
                    tr_line += '<td>';
                    $.each(response.data[i]['profile_details'], function (i, v) {

                        if(v.has_access == "yes"){
                          var checkrole = "checked";
                        }else if(v.has_access == "no"){
                          var checkrole = "";
                        }


                        if(v.name == "Admin"){
                          var disable_checkbox = "disabled=disabled";
                        }else{
                          var disable_checkbox = "";
                        }
                                
                        tr_line += '<input type="checkbox" name="chk_prfl" class="chk_prfl" id="chk_prfl_'+v.profile_id+'" lang="'+v.roles_id.join('-')+'" dir="chkw_'+warehouse_id+'" '+checkrole+' '+disable_checkbox+'>&nbsp;'+v.name+'<br>';

                        //for marking roles
                        if(checkrole == "checked"){
                          group_roles += v.roles_id.join('-')+"-";
                        }
                        

                    });
                    tr_line += '</td>';

                    var uhuh = group_roles.slice(0, -1);
                    group_roles = ""; //empty this each time a new warehouse row is ran through
                    
                    
                    var strArray = uhuh.split("-");
                    tr_line += '<td>';
                    $.each(response.data[i]['role_details'], function (i, v) {

                        if(strArray.includes(v.role_id)){
                          var checkrole = "checked";
                        }else{
                          var checkrole = "";
                        }
                                        
                        tr_line += '<input type="checkbox" name="chk_role" disabled="disabled" class="chk_role" id="chkb_'+v.role_id+'" dir="chkw_'+warehouse_id+'" '+checkrole+'>&nbsp;'+v.role_name+' &nbsp; - &nbsp;'+v.comment+'<br>';

                    }); 
                    tr_line += '</td>';


                  

                    tr_line += '</tr>';

                    tr_line += '<tr id="loading_chng_'+warehouse_id+'" style="display: none"><td colspan="3"><i class="fa fa-spinner fa-spin fa-fw fa-5x" style="display: ;" ></i></td></tr>';

                    k++;                   
                    
                  });

                  $("#permData").html(tr_line);
                  $("#loading").hide();

                              


                }else if(response.status == '400'){
                      
                    // $("#permData").html('<tr id="loading"><td colspan="3">Error fetching data. Please refresh page</td></tr>');

                      $('#employee_data_display').show();
                      $('#main_display').hide();
                }else if(response.status == "401"){
                    
                    // $("#permData").html('<tr id="loading"><td colspan="3">Error fetching data. Please refresh page</td></tr>');
                    $("#error_txt_spc").html("You need to create a warehouse first before accessing this page.");
                    $('#employee_data_display').show();
                    $('#main_display').hide();
                }

                $("#loading").hide();

              },

              error: function(response){
                
                $('#page_loader').hide();
                $('#main_display').show();

                // $("#permData").html('<tr id="loading"><td colspan="3">Error fetching data. Please refresh page</td></tr>');

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


          

        </script>



<?php
include("../gen/_common/footer.php");
?>