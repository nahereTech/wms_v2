<?php
include_once("_common/menu.php"); // menu list
include_once("../gen/_common/header.php"); // header contents
include_once("assets/wms.php"); // header contents
?>



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
            <h2 id="error_erdk"><strong>Access Denied</strong><br>You do not have permission to access this page</h2>
          </div>
        </div>
      </div>
    </div>
  </div>   
</div>

        <!-- page content -->
        <div class="right_col" role="main" id="main_display" style="display: none;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3 id="user_count"></h3>
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
                    <button type="button" class="btn btn-success" id="add">Add User</button>
                    
                    
                  </div>
                </div>
              </div>
            </div>

            <div id="user_display" style="display: none;">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <br />
                    <span id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Add User <span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" class="form-control col-md-7 col-xs-12 required" placeholder="Enter User's E-mail">
                        </div>

                        
                      </div>

                    

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12 text-danger" id="error">
                          
                        </div>
                      </div>
                          
                      
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <!-- <button class="btn btn-primary" type="button">Cancel</button>
                          <button class="btn btn-primary" type="reset">Reset</button> -->
                          <button type="button" class="btn btn-success" id="add_user">Add</button>
                          <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="user_loader"></i>
                        </div>
                      </div>

                    </span>
                  </div>
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
                            
                            <th class="column-title">S/N </th>
                            <th class="column-title">Name </th>
                            <th class="column-title">Email </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="2">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                         <tr id="loading">
                          <td colspan="4"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;" ></i></td>
                        </tr>
                        
                       <tbody  id="userData">
                          
                        
                          
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
                <h4>User Invited Successfully!</h4>
              </div>
              <!-- <div class="modal-footer"> -->
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
              <!-- </div> -->
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





          <!-- modal -->
        
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
              
            //does user have access to this module
            // user_page_access();

            //has company username been set
            has_company_username_been_set();

            
            
        
            // list_of_company_warehouse();
            
            $('#add').on('click', user);
            $('#add_user').on('click', add_user);

            $(document).on('click', '.delete_user', function(){
              var row_id = $(this).attr('id').replace(/usr_/,''); 
              delete_user(row_id);
            });

            $(document).on('click', '.suspend_user', function(){
              var row_id = $(this).attr('id').replace(/usr_/,'');
              var check_status = $(this).attr('class').replace(/su_/,'');
              var status = check_status.split(' ')[1]
              console.log(row_id) 
              suspend_user(row_id, status);
            });

          });



          function has_company_username_been_set(){

            $.ajax({

              type: "POST",
              dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

              cache: false,
              url: api_path+"company/get_company_details_by_ID",
              data: { "company_id" : localStorage.getItem('company_id') },

              success: function(response) {

                console.log(response);

                if (response.status == '200') {

                  if(response.data.company_username == "" || response.data.company_username == null || response.data.company_username == undefined){

                    $("#error_erdk").html('You need to update your business profile first before viewing list of users. <a href="bizprofile" style="text-decoration: none; color: white"><u>Update</u></a>');
                    $("#page_div").show();

                  }else{
                    
                    // $("#company_username_fm").attr("disabled","disabled");

                  }

                  does_user_have_access_to_page();
                  
                }else if(response.status == '400'){ // coder error message

                    $("#error_erdk").html('error_erdk');
                    $("#page_div").show();

                }else if(response.status == '401'){ //user error message

                  
                    $("#error_erdk").html('error_erdk');
                    $("#page_div").show();

                }

                 
                $('#add').show();
                $('#item_loader').hide();

              },

              error: function(response){

                $("#error_erdk").html('error_erdk');
                $("#page_div").show();

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
                headers: {'Authorization':localStorage.getItem('token') },

                    cache: false,
                    url: api_path + "wms/check_if_user_has_profile",
                    data: {
                        "user_id": user_id,
                        "company_id" : localStorage.getItem('company_id'),
                        "warehouse_id" : "not_needed",
                        "module_id": module_id,
                        "profile_id": profile_id
                    },

                    success: function(response) {

                        console.log(response);
                        
                        if (response.status == '200') {

                          if(response.is_admin == "yes"){
                            $("#main_display").show();
                            list_of_warehouse_users('');
                          }else{
                            $("#main_display").hide();
                            // $(".page_div").html('<br><br><br><br><h2>Access Denied</h2>You do not have permission to access this page<br><br<br>');
                            $("#page_div").show();
                          }                            
                            
                        } else {
                            $("#main_display").hide();
                            // $(".page_div").html('<br><br><br><br><h2>Access Denied</h2>You do not have permission to access this page<br><br<br>');
                            $("#page_div").show();

                        }

                    },

                    error: function(response) {
                        $("#main_display").hide();
                        // $(".page_div").html('<br><br><br><br><h2>Access Denied</h2>You do not have permission to access this page<br><br<br>');
                        $("#page_div").show();
                    }

              });

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
          //           list_of_warehouse_users('');
                    

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

          function delete_user(row_id){
            
            var company_id = localStorage.getItem('company_id');
            var module_id = 6;

            var ans = confirm("Are you sure you want to delete this user?");
            if(!ans){
                return;
            }
            

            $('#row_'+row_id).hide();
            $('#loader_row_'+row_id).show();
            $.ajax({ 
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                // url: api_path+"modules/delete_module_user",
                url: api_path+"user/remove_user_from_this_module",
                data: {"company_id": company_id, "module_id" : module_id , "user_id" : row_id },
                timeout: 60000, // sets timeout to one minute
                // objAJAXRequest, strError

                error: function(response){
                    $('#loader_row_'+row_id).hide();
                    $('#row_'+row_id).show();

                    alert('connection error');
                },

                success: function(response) {  
                    // console.log(response);
                    if(response.status == '200'){
                        $('#row_'+row_id).hide();
                    }else{
                        alert("Error Deleting User");
                    }

                    $('#loader_row_'+row_id).hide();
                }
            });
        }


        function suspend_user(row_id, status){
            
            var company_id = localStorage.getItem('company_id');
            var module_id = 6;
            
            if(status == 'active'){
              var ans = confirm("Are you sure you want to suspend this user?");
            if(!ans){
                return;
            }
            }
            else{
               var ans = confirm("Are you sure you want to activate this user account?");
            if(!ans){
                return;
            }

            }
             
            var chk_status = status;
            if(status == 'active'){
              chk_status = 'suspended'
            }
            else if(status == 'suspended'){
              chk_status = 'active'
            }


            
            $('#loader_sus_'+row_id).show();
            // $('#row_'+row_id).hide();

            $.ajax({ 
                type: "PUT",
                dataType: "json",
                // url: api_path+"modules/delete_module_user",
                url: api_path+"user/set_invitee_status",
                headers: {'Authorization':localStorage.getItem('token') },

                data: {"company_id": company_id, "module_id" : module_id , "user_id" : row_id, "status" : chk_status},
                timeout: 60000, // sets timeout to one minute
                // objAJAXRequest, strError

                error: function(response){
                    // $('#loader_row_'+row_id).hide();
                    // $('#row_'+row_id).show();

                    alert('connection error');
                },

                success: function(response) {  
                    // console.log(response);
                    if(response.status == '200'){
                        // $('#row_'+row_id).hide();
                        $('#loader_sus_'+row_id).hide();
                        alert(`user account ${status == 'active' ? 'suspended':'activated'}`)
                        location.reload()
                        // $('#loader_row_'+row_id).hide();
                        // $('#row_'+row_id).show();
                    }else{
                        $('#loader_sus_'+row_id).hide();
                        alert("Error Suspending User");
                    }

                    // $('#loader_row_'+row_id).hide();

                }
            });
        }

          function edit_company_warehouse(warehouse_id){
            
            var warehouse_name = $("#modal_edit_warehouse #warehouse_name").val();                 
            var warehouse_address =  $("#modal_edit_warehouse #warehouse_address").val();
            var company_id = localStorage.getItem('company_id');
            
            var blank;

            
            // alert(warehouse_id);

            $("#modal_edit_warehouse .required").each(function(){

              var the_val = $.trim($(this).val());

              if(the_val == "" || the_val == "0"){

                $(this).addClass('has-error');

                blank = "yes";

              }else{

                $(this).removeClass("has-error");

              }

            });

            if(blank == "yes"){
    
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
            url: api_path+"wms/edit_warehouse",
                headers: {'Authorization':localStorage.getItem('token') },

            data: { "warehouse_name" : warehouse_name, "warehouse_address" : warehouse_address, "company_id" : company_id, "warehouse_id" : warehouse_id},

            success: function(response) {

              console.log(response);

              if (response.status == '200') {
                $("#modal_edit_warehouse #error").html("");
                $("#modal_edit_warehouse #edit_ware_loader").hide();   
                $("#modal_edit_warehouse #edit_ware").show(); 
                $('#modal_edit_warehouse #edit_form').hide();
                $('#modal_edit_warehouse #edit_msg').show();

                // $('#modal_department_edit').on('hidden.bs.modal', function () {
                //     $('#department_name').val();
                //     $('#department_description').val();
                //     // window.location.reload();
                //     window.location.href = base_url+"/erp/hrm/departments";
                // })
                
                
              }else if(response.status == '400'){ // coder error message

                
                 $("#modal_edit_warehouse #error").html('Technical Error. Please try again later.');

              }else if(response.status == '401'){ //user error message

                
                 $("#modal_edit_warehouse #error").html(response.msg);

              }
            },

            error: function(response){

                  console.log(response);
                 $("#modal_edit_warehouse #edit_ware_loader").hide(); 
                 $("#modal_edit_warehouse #edit_ware").show();
                 $("#modal_edit_warehouse #error").html("Connection Error.");

            }

          });

          }

          function fetch_warehouse_info(warehouse_id){
             
            var company_id = localStorage.getItem('company_id');

            $('#wareIn_'+warehouse_id).hide();
            $('#loader11_'+warehouse_id).show();
             
          $.ajax({

            type: "POST",
            dataType: "json",
            cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

            url: api_path+"wms/get_warehouse_details",
            data: { "warehouse_id" : warehouse_id, "company_id" : company_id},

            success: function(response) {

              var str = "";
              console.log(response);
        
                
              $('#loader11_'+warehouse_id).hide();
              $('#wareIn_'+warehouse_id).show();

              if (response.status == '200') {

                $("#modal_view_warehouse #name").html( response.data.warehouse_name); 
                $("#modal_view_warehouse #address").html( response.data.warehouse_address);

                
                $('#modal_view_warehouse').modal('show');          
              }


            },

            error: function(response){
              $('#loader11_'+warehouse_id).hide();
              $('#wareIn_'+warehouse_id).show();
              alert("Connection Error.");

            }

            });
          }

          function fetch_warehouse_details(warehouse_id){
            // var pathArray = window.location.pathname.split( '/' );
            // var warehouse_id = $.urlParam('id');  

            var company_id = localStorage.getItem('company_id');

            $('#warh_'+warehouse_id).hide();
            $('#loader_'+warehouse_id).show();
             
          $.ajax({

            type: "POST",
            dataType: "json",
            cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

            url: api_path+"wms/get_warehouse_details",
            data: { "warehouse_id" : warehouse_id, "company_id" : company_id},

            success: function(response) {

              var str = "";
              console.log(response);
               $("#modal_edit_warehouse #error").html("");

                $("#modal_edit_warehouse .required").each(function(){

                  var the_val = $.trim($(this).val());

                  $(this).removeClass("has-error");

                });
              $('#loader_'+warehouse_id).hide();
              $('#warh_'+warehouse_id).show();
              if (response.status == '200') {

                $("#modal_edit_warehouse #warehouse_name").val( response.data.warehouse_name); 
                $("#modal_edit_warehouse #warehouse_address").val( response.data.warehouse_address);

                // str += '<button type="submit" class="btn btn-success" id="edt_'+response.data.warehouse_id+'" class="update_ware">Update</button>';
                // str += '<i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="edit_ware_loader"></i>';   

                // $("#modal_edit_warehouse #form_footer").html(str);
                $('#modal_edit_warehouse').modal('show');          
              }


            },

            error: function(response){
              $('#loader_'+warehouse_id).hide();
              $('#warh_'+warehouse_id).show();
              alert("Connection Error.");

            }

            });
          }

          function delete_warehouse(warehouse_id){
            
            var company_id = localStorage.getItem('company_id');

          
            var ans = confirm("Are you sure you want to delete this warehouse?");
            if(!ans){
                return;
            }
            

            $('#row_'+warehouse_id).hide();
            $('#loader_row_'+warehouse_id).show();
            $.ajax({ 
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path+"wms/delete_warehouse",
                data: {"company_id": company_id, "warehouse_id" : warehouse_id},
                timeout: 60000, // sets timeout to one minute
                // objAJAXRequest, strError

                error: function(response){
                    $('#loader_row_'+warehouse_id).hide();
                    $('#row_'+warehouse_id).show();

                    alert('connection error');
                },

                success: function(response) {  
                    // console.log(response);
                    if(response.status == '200'){
                        // $('#row_'+user_id).hide();

         
                    }else if(response.status == '401'){
                            
                                
                    }

                    $('#loader_row_'+warehouse_id).hide();
                }
            });
        }

          function add_user(){

            var company_id = localStorage.getItem('company_id');
            var module_id = 6;
            var email = $('#email').val();

        
            var blank;


            $(".required").each(function(){

              var the_val = $.trim($(this).val());

              if(the_val == "" || the_val == "0"){

                $(this).addClass('has-error');

                blank = "yes";

              }else{

                $(this).removeClass("has-error");

              }

            });

            if(blank == "yes"){
  
              return; 

            }
            if(!validateEmail(email)){
            
              // $('#error-email').show();
              $('#error').html('invalid Email');
                  
              return;
            }
         
          
          $('#add_user').hide();
          $('#user_loader').show();
          $('#error').html("");



          $.ajax({

            type: "POST",
            dataType: "json",
            cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

            url: api_path+"user/add_module_user",
            data: { "company_id" : company_id, "module_id" : module_id, "email" : email },

            success: function(response) {

              console.log(response);

              if (response.status == '200') {

                $('#error').html('');
                $('#modal_warehouse_user').modal('show');

                $('#modal_warehouse_user').on('hidden.bs.modal', function () {
                    // do something…
                    $('#user_display').hide();
                    window.location.reload();
                    //window.location.href = base_url+"/erp/hrm/employees";
                })
                
                
              }else if(response.status == '400'){ // coder error message

                
                $('#error').html(response.msg);

              }else if(response.status == '401'){ //user error message

                
                $('#error').html(response.msg);

              }

               
              $('#add_user').show();
              $('#user_loader').hide();

            },

            error: function(response){

              $('#add_user').show();
              $('#user_loader').hide();
              $('#error').html("Connection Error.");

            }

          });

          }

          function user(){
            $('#user_display').toggle();
            $('#email').val('');
      

            $('#error').html('');

            $(".required").each(function(){

              var the_val = $.trim($(this).val());

              $(this).removeClass("has-error");

            });
          }

          function list_of_warehouse_users(page){

            var company_id = localStorage.getItem('company_id');
            var module_id = 6;
            var limit = 25;

            // alert(page);

            if(page == ""){
              var page = 1;
              var k = 1;
            }else{
              var k = (page * limit) - limit  + 1;
            }

           

            $("#loading").show();
            $("#userData").html('');
            // $(".right_col").css("min-height", $(window).height() - 51); //adjust height

            $.ajax({
                  
              type: "POST",
              dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },
              
              url: api_path+"user/fetch_list_of_module_invitees", //list_module_users
              data: { "company_id": company_id, "module_id": module_id, "page": page, "limit": limit},
              timeout: 60000,

              success: function(response) {
                  
                  console.log(response);
                  $('#loading').hide();
                  var strTable = "";
                  
                  if (response.status == '200'){

                      if(response.data.length > 0){



                        $('#user_count').html('Users ('+response.total_rows+')');

                          // var k = 1;
                          $.each(response['data'], function (i, v) {
                              // strTable += '<td width="8%" valign="top"><div class="profile_pic"><img src="'+base_url+'/erp/assets/admin_template/production/images/img.jpg" alt="..." width="50"></div></td>';

                              // alert(response['data'][i]['is_admin']);

                              function status(string) {
                                  return string.charAt(0).toUpperCase() + string.slice(1);
                              }

                              

                              strTable += '<tr id="row_'+response['data'][i]['user_id']+'">';
                              strTable += '<td valign="top">'+k+'</td>';

                              strTable += '<td valign="top">'+response['data'][i]['lastname']+ ' ' +response['data'][i]['firstname']+'</td>';
                              strTable += '<td valign="top">'+response['data'][i]['email']+'</td>';
                              
                              strTable += '<td valign="top">';

                              if(response['data'][i]['status'] == "inactive"){

                                strTable += '<font color="orange">Pending Registration</font>';


                              }else if(response['data'][i]['status'] == "active"){

                                  strTable += '<a href="usage_logs?id='+response['data'][i]['user_id']+'"><i  class="fa fa-clock-o"  data-toggle="tooltip" data-placement="top" style="color: #000; font-size: 20px;" title="User Logs"></i></a>&nbsp;&nbsp;';

                                  strTable += '<a href="user_roles_backup?id='+response['data'][i]['user_id']+'"><i  class="fa fa-lock"  data-toggle="tooltip" data-placement="top" title="User Permissions" style="font-size : 24px; cursor : pointer;"></i></a>&nbsp;&nbsp;';


                                  if(response['data'][i]['is_admin'] == 'yes'){
                                    
                                  }else if(response['data'][i]['is_admin'] == 'no'){
                                    strTable += '<a class="delete_user  btn btn-danger btn-xs" style="cursor: pointer;" id="usr_'+response['data'][i]['user_id']+'"><i  class="fa fa-trash"  data-toggle="tooltip" data-placement="top" title="Delete User"></i> Delete</a>';

                                    
                                    strTable += '<a class=" su_'+response['data'][i]['status']+' suspend_user btn btn-warning btn-xs" style="cursor: pointer;" id="usr_'+response['data'][i]['user_id']+'"><i  class="fa fa-trash"  data-toggle="tooltip" data-placement="top" title="Suspend User"></i> Suspend User</a>'
                                  }
                                  
                                  

                              }else if(response['data'][i]['status'] == "suspended"){
                                 strTable += '<a href="usage_logs?id='+response['data'][i]['user_id']+'"><i  class="fa fa-clock-o"  data-toggle="tooltip" data-placement="top" style="color: #000; font-size: 20px;" title="User Logs"></i></a>&nbsp;&nbsp;';

                                  strTable += '<a href="user_roles_backup?id='+response['data'][i]['user_id']+'"><i  class="fa fa-lock"  data-toggle="tooltip" data-placement="top" title="User Permissions" style="font-size : 24px; cursor : pointer;"></i></a>&nbsp;&nbsp;';
                                  
                                strTable += '<a class="delete_user  btn btn-danger btn-xs" style="cursor: pointer;" id="usr_'+response['data'][i]['user_id']+'"><i  class="fa fa-trash"  data-toggle="tooltip" data-placement="top" title="Delete User"></i> Delete</a>';

                                strTable += '<a class=" su_'+response['data'][i]['status']+' suspend_user btn btn-warning btn-xs" style="cursor: pointer;" id="usr_'+response['data'][i]['user_id']+'"><i  class="fa fa-pause"  data-toggle="tooltip" data-placement="top" title="Suspend User"></i>  User Suspended </a> <span style="display:none" id="loader_sus_'+response['data'][i]['user_id']+'"><i class="fa fa-spinner fa-spin fa-fw fa-1x"></i></span>'
                              }else{

                              }


                              strTable += '</td></tr>';

                              



                              strTable += '<tr style="display: none;" id="loader_row_'+response['data'][i]['user_id']+'">';
                              strTable += '<td colspan="4"><i class="fa fa-spinner fa-spin fa-fw fa-1x"></i>';
                              strTable +=  '</td>';
                              strTable += '</tr>';
                              
                              
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

                      }else{

                          strTable = '<tr><td colspan="4">No record.</td></tr>';

                      }

                      $('#pagination').twbsPagination({
                          totalPages: Math.ceil(response.total_rows/limit),
                          visiblePages: 10,
                          onPageClick: function (event, page) {
                              list_of_warehouse_users(page);
                              $("html, body").animate({
                                scrollTop: 0
                              }, "slow");
                          }
                      });
                     
                                 
                      $("#userData").html(strTable);
                      $("#userData").show();

                  }else if(response.status == '400'){
                      
                      $('#loading').hide();
                      strTable += '<tr>';
                      strTable += '<td colspan="4">No result</td>';
                      strTable += '</tr>';

                      
                      $("#userData").html(strTable);
                      $("#userData").show();
                      

                  }else if(response.status == "401"){
                      //missing parameters
                      var strTable = "";
                      $('#loading').hide();
                      strTable += '<tr>';
                      strTable += '<td colspan="4">'+response.msg+'</td>';
                      strTable += '</tr>';

                      
                      $("#userData").html(strTable);
                      $("#userData").show();

                  }


                  $("#loading").hide();
              
              },

              error: function(response){
                

                var strTable = "";
                $('#loading').hide();
                // alert(response.msg);
                strTable += '<tr>';
                strTable += '<td colspan="4"><strong class="text-danger">Connection error!</strong></td>';
                strTable += '</tr>';

                
                $("#userData").html(strTable);
                $("#userData").show();
                $("#loading").hide();

              }        

          });
          }

          function validateEmail(emailaddress){  

             var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;  

             if(!emailReg.test(emailaddress)) {  

                  return false

             }else{

                  return true;

             }

          }

        </script>



<?php
include_once("../gen/_common/footer.php"); // header contents
?>