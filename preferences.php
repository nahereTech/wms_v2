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
                            
                            <!-- <th class="column-title" style="width: 5%"></th> -->
                            <th class="column-title" style="width: 20%">Preferences</th>
                            <th class="column-title" style="width: 75%">Options</th>
                            <!-- <th class="column-title" style="width: 15%">Permissions</th> -->
                      
                          </tr>
                        </thead>



                        <tr id="loading">
                          <td colspan="5"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;" ></i></td>
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

                  
               
            $(document).on('click', '.radio_', function(){
             
                var val_id = $(this).val();



                // localStorage.setItem(`check_${check_id}`, 'checked');
                // console.log(`.spin_${val_id}`)
                 // var ch = 'checked'

                $(`.spin_${localStorage.getItem('setting_id')}`).show();
                set_company_preference(val_id);
                // }
                // else if($(this).prop("checked") == false){
                // var check_id = $(this).attr('id');
                // var val_id = $(this).val();

                // $(`.spin_${val_id}`).show();
                
                // localStorage.setItem(`check_${check_id}`, '');
                // var ch = ''
                // set_company_preference(check_id, val_id, ch);


                // }



              })

              
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
                          list_of_module_roles();                           
                            
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
                    
                      if(`${v.setting_id}` == 1){
                        tr_line += '<tr id="preference_tr_'+v.setting_id+'" class="text">';
                        tr_line +=`<td>
                      <span style="position: relative;top: 7px;">${v.setting}</span></td><td><span><input type="radio" name="pre" value ='po' style="position:relative; top:2px;" class="option-input_ radio_" id="pref_po" lang=${v.setting_id} ${localStorage.getItem('po')}/> <span class=" style="position:relative; top:-10px;" spin spin_${v.setting_id}">PO System</span>           ${'       '}      <span style="margin-left:20px;"><input type="radio" name="pre" value='ro' style="position:relative; top:2px;" class="option-input_ radio_" id="pref_ro" value ='ro' ${localStorage.getItem('ro')}/> <span class=" style="position:relative; top:-10px;" spin spin_${v.setting_id}" >RO System</span> <span class=" spin spin_${v.setting_id}" style="position: relative;top: 0px; margin-left:10px; display:none;"><i class="fa fa-spinner fa-spin fa-fw fa-1x"></i></span><span class=" spin spin${v.setting_id}" style="position: relative;top: 0px; margin-left:10px; color:#2A3F54; display:none;">Preference Updated!</span></span></td>`

                      }
                    // tr_line += '<tr id="preference_tr_'+v.setting_id+'" class="text">';
                    // tr_line +=`<td>
                    //   <span style="position: relative;top: 7px;">${v.setting}</span><span class=" spin spin_${v.setting_id}" style="position: relative;top: 2px; display:none;">
                    //   <i class="fa fa-spinner fa-spin fa-fw fa-1x"></i></span></td><td><span><input type="radio" value=${v.setting_id} style="position:relative; top:2px;" class="option-input_ radio_" id="pref_${v.setting_id}" ${localStorage.getItem(`check_pref_${v.setting_id}`)}/> <span class=" style="position:relative; top:-10px;" spin spin_${v.setting_id}">${v.value}</span></span></td>`

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



            function set_company_preference(val_id){
            var company_id = localStorage.getItem('company_id');
            var setting_id = localStorage.getItem('setting_id');

            // var setting_id = $("#"+check_id).val();
            // var status = ch == 'checked'? 'yes': 'no';
         
            $.ajax({
                  
              type: "POST",
              dataType: "json",
                    headers: {'Authorization':localStorage.getItem('token') },
              
              url: api_path+"wms/set_company_preference",
              data: { "module_id" : 6 , "company_id" : company_id, "setting_id": setting_id, "value": val_id },
              timeout: 60000,

              success: function(response) {

                $('#page_loader').hide();

                console.log(response);

                if (response.status == '200'){
                $(`.spin_${setting_id}`).hide();
                $(`.spin${setting_id}`).show();
                setTimeout(function(){
                $(`.spin${setting_id}`).hide();
                }, 3000);
                      localStorage.setItem('po', '');
                      localStorage.setItem('ro', '');
                  localStorage.setItem(`${val_id}`, 'checked');
                  // location.reload();

                } else {
                $(`.spin_${val_id}`).hide();
                  localStorage.setItem(`${val_id}`, '');
                  alert(response.msg);


                }
              },

                  error: function(response){
                $(`.spin_${val_id}`).hide();
                    alert(response.msg)
      

}
              })

              } 


                   


          

        </script>



<?php
include_once("../gen/_common/footer.php"); // header contents
?>