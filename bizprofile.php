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
        <div class="right_col" role="main" id="main_display" style="display: ;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Business Profile</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <!-- <div class="input-group" style="float: right">
                    <a href="items"><button type="button" class="btn btn-primary">Back</button></a>
                  </div> -->
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

                    

                    <span id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_item_name">Company Name <span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="company_name_fm"  class="form-control col-md-7 col-xs-12 add_item_required">
                        </div>

                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_description">Business Description <span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea cols="3" class="form-control col-md-7 col-xs-12" id="company_desc_fm"></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_custom_id">Business Phone <span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="company_phone_fm"  class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_custom_id">Email Address <span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="company_email_fm"  class="form-control col-md-7 col-xs-12" disabled="disabled">
                        </div>

                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_custom_id">Country <span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="company_country_fm">
                            <option value="">-- Select ---</option>
                          </select>
                          <input type="hidden" value="" id="company_country_hdn">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_custom_id">Company Address <span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea cols="3" class="form-control col-md-7 col-xs-12" id="company_address_fm"></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_custom_id">Public URL<span>*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                          <input type="text" id="company_username_fm"  class="form-control col-md-7 col-xs-12 add_item_required" style="text-align: right">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                          <input type="text" disabled="disabled" class="form-control col-md-7 col-xs-12" value=".nahere.com">
                        </div>

                      </div>


                      <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_custom_id"> Location <span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          -
                          <input type="hidden" value="" id="company_country_hdn">
                        </div>

                      </div> -->

                      

                      

                      <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_unit_type">Unit Type <span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <select class="form-control col-sm-2 col-xs-2 add_item_required" id="add_unit_type">
                                <option value="">----</option>
                                
                            </select>
                        </div>
                      </div> -->

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Business Logo <span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      
                            <form action="/api/company/upload_images?to_where=company_logo" class="dropzone" id="itempictureform">
                              <div class="fallback">
                                <div style=" img.display: none;">
                                  <img src="" id="image_loader" height="50" width="50">
                                </div>
                                  <input name="file" type="file" id="file" />
                              </div>
                            </form>
                            <br /> 
                  
                        </div>

                      </div>



                      
                      
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12 text-danger" id="error">
                          
                        </div>
                      </div>

                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success" id="update_baker_profile">Update</button>
                          <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="item_loader"></i>
                          <!-- <div id="add_user_loading" style="display:  none">Loading...</div> -->
                        </div>
                      </div>

                    </span>
              
            
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- modal -->
        <div class="modal fade" id="modal_item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <h4>Item Added Successfully!</h4>
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


            does_user_have_access_to_page();

            
            $(document).on('click', '#update_baker_profile', function(){
                update_baker_profile();
            });

            
              var image_name = "";
              
              Dropzone.options.itempictureform = {

                maxFiles: 1,
                maxFilesize: 1, //1 MB
                accept: function(file, done) {
                  if (file.type != "image/png" && file.type != "image/jpg" && file.type != "image/jpeg"){
                    alert("You are not allowed to upload this file extension");
                  }else{
                    done();
                  }
                  
                },
                

                init: function() {

                  this.on("maxfilesexceeded", function(file){
                      alert("No more files please!");
                  });


                  this.on("sending", function(file, xhr, formData) {

                    formData.append("company_id", localStorage.getItem('company_id'));

                  });
                },
                success: function(file, response){

                  var obj = jQuery.parseJSON(response);
              
                  
                  //console.log(obj.data.image_name);
                  image_name = obj.data.image_name;
                  console.log(image_name);

                  

                }

              };

              $(document).on('click', '#add', function(){

                add_company_item(image_name);
              

              })

              // $('#add').on('click', add_company_item);

          });



          function does_user_have_access_to_page(){

              var user_id = localStorage.getItem('user_id');
              var module_id = 6;
              var profile_id = 0;

              $.ajax({

                  type: "POST",
                  dataType: "json",
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

                          $("#main_display").show();
                          fetch_baker_profile();
                          fetch_country_list();
                          
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


          function update_baker_profile(){


            $("#item_loader").show();
            $("#update_baker_profile").hide();


            var company_name = $("#company_name_fm").val();
            var company_description = $("#company_desc_fm").val();
            var company_phone = $("#company_phone_fm").val();
            var company_address = $("#company_address_fm").val();
            var company_email = $("#company_email_fm").val();
            var company_country = $("#company_country_fm").val();
            var description = $("#company_desc_fm").val();
            var latitude = $("#company_lat").val();
            var longtitude = $("#company_long").val();
            var company_username = $("#company_username_fm").val();

            $.ajax({

              type: "POST",
              dataType: "json",
              cache: false,
              url: api_path+"company/update_company_details",
              data: {

                "company_id" : localStorage.getItem('company_id'),
                "company_name" : company_name,
                "company_phone" : company_phone,
                "company_email" : company_email,
                "company_address": company_address,
                "country": company_country,
                "company_username" : company_username,
                "description": company_description,
                "lat": latitude,
                "lng": longtitude
              
              },

              success: function(response) {

                if (response.status == '200') {

                  alert("Update was successful");
                  window.location.reload();
                  
                }else if(response.status == '400'){ // coder error message

                  $('#error').html("You have blank field(s).");

                }else if(response.status == '401'){ //user error message

                  $('#error').html("You have blank field(s).");

                }

                 
                $("#item_loader").hide();
                $("#update_baker_profile").show();

              },

              error: function(response){

                $("#item_loader").hide();
                $("#update_baker_profile").show();
                $('#error').html("Connection Error.");

              }

            });
          }


          function fetch_country_list(){

            $.ajax({

              type: "GET",
              dataType: "json",
              cache: false,
              url: api_path+"country/list_world_currencies",
              data: { "company_id" : localStorage.getItem('company_id') },

              success: function(response) {

                console.log(response.data);

                if (response.status == '200') {

                  $(response.data).each(function(i,v){

                    if($("#company_country_hdn").val() == v.countryID){
                      var aznu = 'selected="selected"';
                    }else{
                      var aznu = "";
                    }

                      $("#company_country_fm").append('<option value="'+v.countryID+'" '+aznu+'>'+v.countryName+'</option>');

                  });


                  
                }else if(response.status == '400'){ // coder error message

                  $('#error').html('Technical Error. Please try again later.');

                }else if(response.status == '401'){ //user error message

                  
                  $('#error').html("No result");

                }

                 
                $('#add').show();
                $('#item_loader').hide();

              },

              error: function(response){

                $('#add').show();
                $('#item_loader').hide();
                $('#error').html("Connection Error.");

              }

            });

          }


          
          function fetch_baker_profile(){

            $.ajax({

              type: "POST",
              dataType: "json",
              cache: false,
              url: api_path+"company/get_company_details_by_ID",
              data: { "company_id" : localStorage.getItem('company_id') },

              success: function(response) {

                console.log(response);

                if (response.status == '200') {

                  $("#company_name_fm").val(response.data.company_name);
                  $("#company_desc_fm").val(response.data.company_description);
                  $("#company_phone_fm").val(response.data.company_phone);
                  $("#company_email_fm").val(response.data.company_email);
                  $("#company_username_fm").val(response.data.company_username);
                  // alert(response.data.company_username);
                  if(response.data.company_username == "" || response.data.company_username == null || response.data.company_username == undefined){

                  }else{
                    $("#company_username_fm").attr("disabled","disabled");
                  }
                  $("#company_country_hdn").val(response.data.country);
                  $("#company_address_fm").val(response.data.company_address);

                  // $('#error').html('');
                  // $('#modal_item').modal('show');

                  // $('#modal_item').on('hidden.bs.modal', function () {
                  //     window.location.reload();
                  // });
                  
                  
                }else if(response.status == '400'){ // coder error message

                  $('#error').html('Technical Error. Please try again later.');

                }else if(response.status == '401'){ //user error message

                  
                  $('#error').html("No result");

                }

                 
                $('#add').show();
                $('#item_loader').hide();

              },

              error: function(response){

                $('#add').show();
                $('#item_loader').hide();
                $('#error').html("Connection Error.");

              }

            });

          }

        </script>



<?php

include_once("../gen/_common/footer.php"); // header contents

?>