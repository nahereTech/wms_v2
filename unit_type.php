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
              <h2><strong>Access Denied</strong><br>You do not have permission to access this page</h2>
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
                <h3>Unit Types</h3>
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
                    <button type="button" class="btn btn-success" id="add_unit">Add</button>
                    
                    
                  </div>
                </div>
              </div>
            </div>

            <div id="unit_display" style="display: none;">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <br />
                    <span id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_unit_name">Unit Name<span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="add_unit_name" class="form-control col-md-7 col-xs-12 required1">
                        </div>
                      </div>

                      <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_warehouse_address">Warehouse Address<span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea cols="3" class="form-control col-md-7 col-xs-12 required1" id="add_warehouse_address">
                            
                          </textarea>
                        </div>
                      </div> -->

                    

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
                          <button type="button" class="btn btn-success" id="add_unt">Add</button>
                          <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="unit_loader"></i>
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
                            
                        
                            <th class="column-title">Name </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="2">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                         <tr id="loading">
                          <td colspan="2"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;" ></i></td>
                        </tr>
                        
                       <tbody  id="unitData">
                          
                        
                          
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

          <!-- modal -->
        <div class="modal fade" id="modal_unit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <h4>Unit type Added Successfully!</h4>
              </div>
              <!-- <div class="modal-footer"> -->
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
              <!-- </div> -->
            </div>
          </div>
        </div>

          <!-- modal -->
        <div class="modal fade" id="modal_view_unit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;">Unit Info
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </h3>
                
              </div>
              <div class="modal-body">

                
                  <div id="container4" >
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <p><strong>Unit Name:</strong></p>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <p id="name"></p>
                      </div>
                    </div>

                    <!-- <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <p><strong>Warehouse Address:</strong></p>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <p id="address"></p>
                      </div>
                    </div>
                     -->
                  </div>
        
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
              </div>
            </div>
          </div>
        </div>



         <div class="modal fade" id="modal_edit_unit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;">Edit Unit Type
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </h3>
                
              </div>
              <div class="modal-body">
                <div id="edit_form">
                <span id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="unit_name">Unit Name<span>*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="unit_name" required="required" class="form-control col-md-7 col-xs-12 required">
                    </div>
                  </div>

                  <!-- <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="warehouse_address">Warehouse Address<span>*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <textarea cols="3" class="form-control col-md-7 col-xs-12 required" id="warehouse_address">
                        
                      </textarea>
                    </div>
                  </div> -->

                  

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12 text-danger" id="error">
                     
                  
                      </div>
                    </div>

                  
                  <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" id="form_footer">
                      <button type="submit" class="btn btn-success" id="edit_unit">Update</button>
                      <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="edit_unit_loader"></i>
                      <!-- <div id="add_user_loading" style="display:  none">Loading...</div> -->
                    </div>
                  </div>

                </span>
              </div>

              <div id="edit_msg" style="display: none;">
                <h4>Unit Type Updated Successfully!</h4>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                </div>
              </div>

              </div>
              <!-- <div class="modal-footer"> -->
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
              <!-- </div> -->
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

        <script type="text/javascript">
          $(document).ready(function(){
            
            // does_user_have_access_to_page();
              does_user_have_access_to_page();            
              var row_id; 

              
              
              $('#add_unit').on('click', add_unit_type);
              $('#add_unt').on('click', add_company_unit_type);

              $(document).on('click', '.delete_unit', function(){
                var row_id = $(this).attr('id').replace(/unt_/,''); 
                delete_unit_type(row_id);
              });

              $(document).on('click', '.unit_info', function(){
                var row_id = $(this).attr('id').replace(/unitIn_/,''); 
                fetch_unit_info(row_id);
                
              });

              $(document).on('click', '.edit_unit_icon', function(){
                row_id = $(this).attr('id').replace(/unit_/,''); 
                fetch_unit_details(row_id);
                
              });

              $(document).on('click', '#edit_unit', function(){
                // var warehouse_id = $(this).attr('id').replace(/edt_/,''); 
                edit_company_unit_type(row_id);
                // alert(warehouse_id);
              });    

          });


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
                        "warehouse_id" : "not_needed",
                        "module_id": module_id,
                        "profile_id": profile_id
                    },

                    success: function(response) {

                        console.log(response);
                        
                        if (response.status == '200') {

                            $("#main_display").show();
                            list_of_company_unit_type();
                            
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
          //           list_of_company_unit_type();
                    

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
          //     var role_id = 11;

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
          //                 list_of_company_unit_type();
          //                 $("#main_display").show();
                          
          //             } else {
          //                 $("#main_display").hide();
          //                 // $(".page_div").html('<br><br><br><br><h2>Access Denied</h2>You do not have permission to access this page<br><br<br>');
          //                 $("#page_div").show();

          //             }

          //         },

          //         error: function(response) {
          //             $("#main_display").hide();
          //             // $(".page_div").html('<br><br><br><br><h2>Access Denied</h2>You do not have permission to access this page<br><br<br>');
          //             $("#page_div").show();
          //         }

          //     });

          // }

          // function page_warehouse_access(){

          //   var company_id = localStorage.getItem('company_id');

          //   var user_id = localStorage.getItem('user_id');
          //   var module_id = 6;
            

          //   $.ajax({
                  
          //     type: "POST",
          //     dataType: "json",
          //     url: api_path+"wms/list_user_wms_sections",
          //     data: { "company_id": company_id,  "user_id": user_id, "module_id": module_id},
          //     timeout: 60000,

          //     success: function(response) {
                  
          //         console.log(response);
            
          //         var strTable = "";
                  
          //         if (response.status == '200'){

          //           if (response.is_admin == 'no'){
          //             $('#main_display').hide();
          //             $('#error_display').show();
          //             var k = 1;
          //             $.each(response['data'], function (i, v) {
                          

          //                 if(response['data'][i]['section_name'] == "Incoming" && response['data'][i]['section_exist'] == "yes"){

          //                     $('#incoming').show();
                              

          //                 }else if(response['data'][i]['section_name'] == "Incoming" && response['data'][i]['section_exist'] == "no"){

          //                     $('#incoming').hide();
                              
                            
          //                 }else if(response['data'][i]['section_name'] == "Outgoing" && response['data'][i]['section_exist'] == "yes"){

          //                   $('#outgoing').show();
                            

          //                 }else if(response['data'][i]['section_name'] == "Outgoing" && response['data'][i]['section_exist'] == "no"){

          //                   $('#outgoing').hide();
                            
          //                 }else if(response['data'][i]['section_name'] == "Sales/Receipts" && response['data'][i]['section_exist'] == "yes"){

          //                   $('#receipts').show();
                            

          //                 }else if(response['data'][i]['section_name'] == "Sales/Receipts" && response['data'][i]['section_exist'] == "no"){

          //                   $('#receipts').hide();
                            
          //                 }


          //                 k++;
                           
          //             });

                      

          //           }else if (response.is_admin == 'yes'){

          //               $('#incoming').show();
          //               $('#outgoing').show();
          //               $('#receipts').show(); 
          //               $('#user_page').show(); 
          //           }               


          //         }else if(response.status == '400'){
                      
                      

          //         }else if(response.status == "401"){
          //             //missing parameters
                      

          //         }

              
          //     },

          //     error: function(response){
                

                

          //     }        

          // });
          // }


          function edit_company_unit_type(row_id){
            var unit_type = $("#modal_edit_unit #unit_name").val();                 
            // var warehouse_address =  $("#modal_edit_warehouse #warehouse_address").val();
            var company_id = localStorage.getItem('company_id');
            
            var blank;

            
            // alert(warehouse_id);

            $("#modal_edit_unit .required").each(function(){

              var the_val = $.trim($(this).val());

              if(the_val == "" || the_val == "0"){

                $(this).addClass('has-error');

                blank = "yes";

              }else{

                $(this).removeClass("has-error");

              }

            });

            if(blank == "yes"){
    
              $("#modal_edit_unit #error").html("You have a blank field");

              return; 

            }

                        
           // $("#modal_edit_warehouse #error").html("");

          $("#modal_edit_unit #edit_unit").hide();
          $("#modal_edit_unit #edit_unit_loader").show();



          $.ajax({

            type: "POST",
            dataType: "json",
            cache: false,
                    headers: {'Authorization':localStorage.getItem('token') },

            url: api_path+"wms/edit_unit",
            data: { "unit_type" : unit_type, "company_id" : company_id, "warehouse_id" : localStorage.getItem('warehouse_id'), "row_id" : row_id},

            success: function(response) {

              console.log(response);

              if (response.status == '200') {
                $("#modal_edit_unit #error").html("");
                $("#modal_edit_unit #edit_unit_loader").hide();   
                $("#modal_edit_unit #edit_unit").show();

                
                $('#modal_edit_unit #edit_form').hide();
                $('#modal_edit_unit #edit_msg').show();

                $('#modal_edit_unit').on('hidden.bs.modal', function () {
                
                    window.location.reload();
                })
                
                
              }else if(response.status == '400'){ // coder error message

                
                 $("#modal_edit_unit #error").html('Technical Error. Please try again later.');

              }else if(response.status == '401'){ //user error message

                
                 $("#modal_edit_unit #error").html(response.msg);

              }

               

            },

            error: function(response){

                  console.log(response);
                 $("#modal_edit_unit #edit_unit_loader").hide(); 
                 $("#modal_edit_unit #edit_unit").show();
                 $("#modal_edit_unit #error").html("Connection Error.");

            }

          });

          }

          function fetch_unit_info(row_id){
             
            var company_id = localStorage.getItem('company_id');

            $('#unitIn_'+row_id).hide();
            $('#loader11_'+row_id).show();
             
          $.ajax({

            type: "POST",
            dataType: "json",
            cache: false,
                    headers: {'Authorization':localStorage.getItem('token') },

            url: api_path+"wms/fetch_unit",
            data: { "row_id" : row_id, "company_id" : company_id, "warehouse_id" : localStorage.getItem('warehouse_id') },

            success: function(response) {

              var str = "";
              console.log(response);
        
                
              $('#loader11_'+row_id).hide();
              $('#unitIn_'+row_id).show();

              if (response.status == '200') {

                $("#modal_view_unit #name").html( response.data.unit_name); 
                // $("#modal_view_warehouse #address").html( response.data.warehouse_address);

                
                $('#modal_view_unit').modal('show');          
              }


            },

            error: function(response){
              $('#loader11_'+row_id).hide();
              $('#unitIn_'+row_id).show();
              alert("Connection Error.");

            }

            });
          }

          function fetch_unit_details(row_id){
            // var pathArray = window.location.pathname.split( '/' );
            // var warehouse_id = $.urlParam('id');  

            var company_id = localStorage.getItem('company_id');

            $('#unit_'+row_id).hide();
            $('#loader_'+row_id).show();
             
          $.ajax({

            type: "POST",
            dataType: "json",
            cache: false,
                    headers: {'Authorization':localStorage.getItem('token') },

            url: api_path+"wms/fetch_unit",
            data: { "row_id" : row_id, "company_id" : company_id, "warehouse_id" : localStorage.getItem('warehouse_id')},

            success: function(response) {

              var str = "";
              console.log(response);
               $("#modal_edit_unit #error").html("");

                $("#modal_edit_unit .required").each(function(){

                  var the_val = $.trim($(this).val());

                  $(this).removeClass("has-error");

                });
              $('#loader_'+row_id).hide();
              $('#unit_'+row_id).show();
              if (response.status == '200') {

                $("#modal_edit_unit #unit_name").val( response.data.unit_name); 
                // $("#modal_edit_unit #warehouse_address").val( response.data.warehouse_address);

                // str += '<button type="submit" class="btn btn-success" id="edt_'+response.data.warehouse_id+'" class="update_ware">Update</button>';
                // str += '<i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="edit_ware_loader"></i>';   

                // $("#modal_edit_warehouse #form_footer").html(str);
                $('#modal_edit_unit').modal('show');          
              }


            },

            error: function(response){
              $('#loader_'+row_id).hide();
              $('#unit_'+row_id).show();
              alert("Connection Error.");

            }

            });
          }

          function delete_unit_type(row_id){
            
            var company_id = localStorage.getItem('company_id');

          
            var ans = confirm("Are you sure you want to delete this unit type?");
            if(!ans){
                return;
            }
            

            $('#row_'+row_id).hide();
            $('#loader_row_'+row_id).show();
            $.ajax({ 
                type: "POST",
                dataType: "json",
                    headers: {'Authorization':localStorage.getItem('token') },

                url: api_path+"wms/delete_unit",
                data: {"company_id": company_id, "row_id" : row_id, "warehouse_id" : localStorage.getItem('warehouse_id')},
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
                        // $('#row_'+user_id).hide();

         
                    }else if(response.status == '401'){
                            
                                
                    }

                    $('#loader_row_'+row_id).hide();
                }
            });
        }

          function add_company_unit_type(){
            var company_id = localStorage.getItem('company_id');
            var unit_type = $('#add_unit_name').val();
            // var warehouse_address = $('#add_warehouse_address').val();

            // alert(employee_id);
            var blank;

            


            $(".required1").each(function(){

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
         
          
          $('#add_unt').hide();
          $('#unit_loader').show();



          $.ajax({

            type: "POST",
            dataType: "json",
            cache: false,
                    headers: {'Authorization':localStorage.getItem('token') },

            url: api_path+"wms/add_unit",
            data: { "company_id" : company_id, "unit_type" : unit_type, "warehouse_id" : localStorage.getItem('warehouse_id')},

            success: function(response) {

              // console.log(response);

              if (response.status == '200') {

                $('#error').html('');
                $('#modal_unit').modal('show');

                $('#modal_unit').on('hidden.bs.modal', function () {
                    // do something…
                    $('#unit_display').hide();
                    window.location.reload();
                    //window.location.href = base_url+"/erp/hrm/employees";
                })
                
                
              }else if(response.status == '400'){ // coder error message

                
                $('#error').html('Technical Error. Please try again later.');

              }else if(response.status == '401'){ //user error message

                
                $('#error').html("No result");

              }

               
              $('#add_unt').show();
              $('#unit_loader').hide();

            },

            error: function(response){

              $('#add_unt').show();
              $('#unit_loader').hide();
              $('#error').html("Connection Error.");

            }

          });

          }

          function add_unit_type(){
            $('#unit_display').toggle();
            $('#add_unit_name').val('');
            // $('#add_warehouse_address').val('');

            $('#error').html('');

            $(".required").each(function(){

              var the_val = $.trim($(this).val());

              $(this).removeClass("has-error");

            });
          }

          function list_of_company_unit_type(){

            var company_id = localStorage.getItem('company_id');
             

            $("#loading").show();
            $("#unitData").html('');

            $.ajax({
                  
              type: "POST",
              dataType: "json",
                    headers: {'Authorization':localStorage.getItem('token') },
              
              url: api_path+"wms/list_unit",
              data: { "company_id": company_id, "warehouse_id" : localStorage.getItem('warehouse_id')},
              timeout: 60000,

              success: function(response) {
                  
                  console.log(response);
                  $('#loading').hide();
                  var strTable = "";
                  
                  if (response.status == '200'){

                      if(response.data.length > 0){

                          var k = 1;
                          $.each(response['data'], function (i, v) {
                              // strTable += '<td width="8%" valign="top"><div class="profile_pic"><img src="'+base_url+'/erp/assets/admin_template/production/images/img.jpg" alt="..." width="50"></div></td>';

                              function status(string) {
                                  return string.charAt(0).toUpperCase() + string.slice(1);
                              }
                              strTable += '<tr id="row_'+response['data'][i]['id']+'">';
                              
                              strTable += '<td width="75%" valign="top">'+status(response['data'][i]['unit_name'])+'</td>';
                              
                              strTable += '<td valign="top"><a class="unit_info btn btn-primary btn-xs" id="unitIn_'+response['data'][i]['id']+'"><i  class="fa fa-folder"  data-toggle="tooltip" data-placement="top" title="View Unit info"></i> View</a>';

                              strTable += '<i  class="fa fa-spinner fa-spin fa-1x fa-fw" aria-hidden="true" style="display: none;" id="loader11_'+response['data'][i]['id']+'"></i>&nbsp;&nbsp;';

                              strTable += '<a class="edit_unit_icon btn btn-info btn-xs" id="unit_'+response['data'][i]['id']+'" style="cursor: pointer;"><i  class="fa fa-pencil"  data-toggle="tooltip" data-placement="top" title="Edit Unit Type"></i> Edit</a>';

                              strTable += '<i  class="fa fa-spinner fa-spin fa-1x fa-fw" aria-hidden="true" style="display: none;" id="loader_'+response['data'][i]['id']+'"></i>&nbsp;&nbsp;';


                              strTable +=  '<a class="delete_unit btn btn-danger btn-xs" style="cursor: pointer;" id="unt_'+response['data'][i]['id']+'"><i  class="fa fa-trash-o"  data-toggle="tooltip" data-placement="top" title="Delete Unit Type"></i> Delete</a></td>';

                              
                              strTable += '</tr>';



                              strTable += '<tr style="display: none;" id="loader_row_'+response['data'][i]['id']+'">';
                              strTable += '<td colspan="2"><i class="fa fa-spinner fa-spin fa-fw fa-2x"  id="loading"></i>';
                              strTable +=  '</td>';
                              strTable += '</tr>';


                              k++;
                               
                          });

                      }else{

                          strTable = '<tr><td colspan="2">No record.</td></tr>';

                      }


                     
                                 
                      $("#unitData").html(strTable);
                      $("#unitData").show();

                  }else if(response.status == '400'){
                      
                      $('#loading').hide();
                      strTable += '<tr>';
                      strTable += '<td colspan="2">No result</td>';
                      strTable += '</tr>';

                      
                      $("#unitData").html(strTable);
                      $("#unitData").show();
                      

                  }else if(response.status == "401"){
                      //missing parameters
                      var strTable = "";
                      $('#loading').hide();
                      strTable += '<tr>';
                      strTable += '<td colspan="2">'+response.msg+'</td>';
                      strTable += '</tr>';

                      
                      $("#unitData").html(strTable);
                      $("#unitData").show();

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

        </script>



<?php
include_once("../gen/_common/footer.php"); // header contents
?>
