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
                <h3>User Permissions</h3>
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
                            <th class="column-title" style="width: 60%">Permissions</th>
                      
                          </tr>
                        </thead>



                        <tr id="loading">
                          <td colspan="3"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;" ></i></td>
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

        <script type="text/javascript">

          $(document).ready(function(){

              // list_of_module_roles();

              //if user click on a check box to add or remove role
              $(document).on('click', '.chk_b_k', function(){
                  var ans = confirm("Are you sure");
                  var role_id = $(this).attr("id").replace(/chkb_/,'');
                  add_remove_role(role_id);
              });
              
          });

          function add_remove_role(role_id){


            if ($('#chkb_'+role_id).is(":checked"))
            {
              var a_r_action = "add";
            }else{
              var a_r_action = "remove";
            }

            var company_id = localStorage.getItem('company_id');
            var user_id = $.urlParam('id');

            $("#loading_chng_"+role_id).show();
            $("#role_tr_"+role_id).hide();

            $.ajax({
                  
              type: "POST",
              dataType: "json",
              url: api_path+"user/add_or_remove_role",
              data: { "module_id" : 6 , "company_id" : company_id , "user_id" : user_id , "role_id" : role_id , "add_or_remove" : a_r_action },
              timeout: 60000,

              success: function(response) {

                if (response.status == '200'){

                }else if(response.status == '400'){
                    if(a_r_action == "add"){
                      $('#chkb_'+role_id).attr('checked', false); // Checks it
                    }else{
                      $('#chkb_'+role_id).attr('checked', true); // UnChecks it
                    }
                    alert("error updating permission");
                }

                $("#loading_chng_"+role_id).hide();
                $("#role_tr_"+role_id).show();

              },

              error: function(response){
                if(a_r_action == "add"){
                  $('#chkb_'+role_id).attr('checked', false); // Checks it
                }else{
                  $('#chkb_'+role_id).attr('checked', true); // UnChecks it
                }
                alert("Error Updating role");
                $("#loading_chng_"+role_id).hide();
                $("#role_tr_"+role_id).show();

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
                      
                    tr_line += '<tr id="role_tr_'+v.role_id+'"><td><input type="checkbox" name="chk_b_k" '+disable_checkbox+' class="chk_b_k" id="chkb_'+v.role_id+'" '+checkit+'></td><td>'+v.role_name+'</td><td>'+v.comment+'</td></tr>';

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


          

        </script>



<?php

include_once("../gen/_common/footer.php"); // header contents

?>
