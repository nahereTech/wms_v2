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
                <h3>Edit Item</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group" style="float: right">
                    <a href="items"><button type="button" class="btn btn-primary">Back</button></a>
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

                    

                    <span id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="item_name">Item Name <span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="item_name"  class="form-control col-md-7 col-xs-12 required">
                        </div>

                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="custom_id">Custom ID <span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="custom_id"  class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea cols="3" class="form-control col-md-7 col-xs-12" id="description">
                            
                          </textarea>
                        </div>
                      </div>

                      

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="unit_type">Unit Type <span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <select class="form-control col-sm-2 col-xs-2 required" id="unit_type">
                                <option value="">----</option>
                                
                            </select>
                        </div>
                      </div>

                      <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="unit_type">Expiry Notification Period(In days)<span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="notification"  class="form-control col-md-7 col-xs-12">
                           <em>Input the number of days you want to start recieving notifications of the expiration of this item</em>
                        </div>
                      </div> -->

                      <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="min_alert">Low Qty Alert<span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="min_alert"  class="form-control col-md-7 col-xs-12">
                        </div>

                      </div> -->


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Edit Item Pictures<span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      
                            <form action="/api/wms/upload_images" class="dropzone" id="itempictureform">
                              <div class="fallback">
                                  <input name="file" type="file"/>
                              </div>
                            </form>
                            <br /> 
                  
                        </div>

                      </div>


                      <div class="show_imgs" style="display: flex; width: 100%; position: relative; left: 25.5%">
                        

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
                          <button type="submit" class="btn btn-success" id="upd_item">Update Item</button>
                          <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="edit_item_loader"></i>
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
        <div class="modal fade" id="modal_upd_item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <h4>Item Updated Successfully!</h4>
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
              var image_name = "";
              page_warehouse_access();
              load_unit_type();
              fetch_item_details();


                $(document).on('click', '.edt_itm', function(){
                
                  var image = $(this).attr('dir');
                  console.log(image);
                  remove_item(image)

              });



       
              
              $(document).on('click', '#upd_item', function(){

                edit_company_item(image_name);

              })
              
              // $('#upd_item').on('click', edit_company_item);

          })

          function page_warehouse_access(){

            var company_id = localStorage.getItem('company_id');

            var user_id = localStorage.getItem('user_id');
            var module_id = 6;
            

            $.ajax({
                  
              type: "POST",
              dataType: "json",
                   headers: {
                'Authorization':localStorage.getItem('token'),
               },
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
                
                alert('Connection error!');
                

              }        

          });
          }

          function load_unit_type(){

            var company_id = localStorage.getItem('company_id');

             $.ajax({
                url: api_path+"wms/list_unit",
                type: "POST",
                     headers: {
                'Authorization':localStorage.getItem('token'),
               },
                data: {"company_id" : company_id},
                dataType: "json",
                
                
                success: function (response) {
                    
                    // $('#page_loader').hide();
                    // $('#employee_details_display').show();
                    
                    console.log(response);
                    var options = '';

                    $.each(response['data'], function (i, v) {
                        options += '<option value="'+ response['data'][i]['id'] +'">' + response['data'][i]['unit_name'] +'</option>';

                        // emp_type = response['data'][i]['type_id'];
                    });
                    $('#unit_type').append(options);
                },
                // jqXHR, textStatus, errorThrown
                error(response) {
                  alert('Connection error');
                    // $('#page_loader').hide();
                    // $('#employee_details_display').hide();
                    // $('#employee_error_display').show();
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

      var images = [];

              Dropzone.options.itempictureform = {

                maxFiles: 4,
                maxFilesize: 1, //2 MB
                accept: function(file, done) {
                  if (file.type != "image/jpeg" && file.type != "image/png" && file.type != "image/gif"){
                    alert("You are allowed to drag only images");
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
                  // alert(response.data.image_name)
                  // console.log()
                  if(images.length < 4){
                    if(`${response.data.image_name}`.split(":").length < 2){
                      images.push(`https://empl-dev.site//files/images/warehouse_images/${response.data.image_name}`)
                  }else{
                      images.push(`${response.data.image_name}`)
                  }
                  }else{
                    alert('Maximum number of files exceeded')
                  }

                  console.log(images);
                  upload_images(images);
                  this.removeFile(file);

                  // upload_images(`"https://empl-dev.site//files/images/warehouse_images/${images}`);
                }

              };


      function pop_img() {

        //Populate any existing thumbnails
        if (images) {
            for (var i = 0; i < images.length; i++) {
                var mockFile = { 
                    name: "myimage.jpg", 
                    size: 12345, 
                    type: 'image/jpeg', 
                    status: Dropzone.ADDED, 
                    url: images[i] 
                };

                // Call the default addedfile event handler
                Dropzone.emit("addedfile", mockFile);

                // And optionally show the thumbnail of the file:
                Dropzone.emit("images", mockFile, images[i]);

               Dropzone.files.push(mockFile);
            }
        }

        
}




      function remove_item(image){
        // console.log(id.split("warehouse_images/")[0]);
        // console.log(images[0].split("warehouse_images/")[1])

           console.log(image)
      
            var index = images.findIndex(function(item) {return item == image})
            console.log(index)
            images.splice(index, 1)
            console.log(images);
            upload_images(images)

           
          }

    // function add_images(images){
    //             $.each(images, function(i, v){
    //             $(".show_imgs").append(`<img src="${v}" style="width:10%" /><i class="fa fa-times edt_itm" aria-hidden="true" dir="${v}"></i>`);
    //             })
    //     }

         function upload_images(id){
          // if(id.length > 5){
          //   alert('You can only upload a maximum of 5 images');
          //   return;
          // }
                $(".show_imgs").empty()
                $.each(id, function(i, v){
                
                var spli = `${v.split("/warehouse_images")}`;
                         console.log(spli.length)

                         // if(spli.length > 2){

                         // }
                         var splited = `${v.split("/warehouse_images/")}`
                            var arr = splited.split(',');
                            console.log(arr);
                            var arr_len = arr.length - 1;

                 if(spli.length < 110){
                 $(".show_imgs").append(`<img src="${v}" style="width:10%" /><i class="fa fa-times edt_itm" aria-hidden="true" style="position:relative; left: -1%; cursor: pointer; color: red;" dir="${v}"></i>`);

                 }else{
                  $(".show_imgs").append(`<img src=${v.split("/warehouse_images/")[1]}/warehouse_images/${v.split("/warehouse_images/")[arr_len]} style="width:10%"><i class="fa fa-times edt_itm" aria-hidden="true" style="position:relative; left: -1%; cursor: pointer; color: red;" dir="${v}"></i>`);
                }
        })
              }



      function fetch_item_details(){
            // var pathArray = window.location.pathname.split( '/' );
            var item_id  = localStorage.getItem('edit_item');
            var company_id = localStorage.getItem('company_id');
            if(!item_id){
                alert('Access Denied');
                localStorage.removeItem('token');
                window.location.href='../'
            }


   
          $.ajax({
            type: "GET",
            dataType: "json",
                 headers: {
                'Authorization':localStorage.getItem('token'),
               },
            cache: false,
            url: api_path+"wms/get_item_details",
            data: { "item_id" : item_id, "company_id" : company_id},

            success: function(response) {

              console.log(response);
              if (response.status == '200') {
              $.each(response['data']['item_images'], function(i, v) {
                console.log(v.image_name)
                       images.push(v.image_name);
                      })

                $("#item_name").val( response.data.item_name); 
                $("#description").val( response.data.item_description);
                $("#min_alert").val( response.data.item_lowQty);
                $("#unit_type").val( response.data.unit_id);
                $("#custom_id").val( response.data.custom_id);
                $.each(images, function(i, v) {
                  var img = v;
                  // alert(v)
                  var spli = `${v.split("/warehouse_images")}`;
                         console.log(spli.length)

                         // if(spli.length > 2){

                         // }
                         var splited = `${v.split("/warehouse_images/")}`
                            var arr = splited.split(',');
                            console.log(arr);
                            var arr_len = arr.length - 1;

                 if(spli.length < 110){
                 $(".show_imgs").append(`<img src="${v}" style="width:10%" /><i class="fa fa-times edt_itm" aria-hidden="true" style="position:relative; left: -1%; cursor: pointer; color: red;" dir="${v}"></i>`);

                 }else{
                  $(".show_imgs").append(`<img src=${v.split("/warehouse_images/")[1]}/warehouse_images/${v.split("/warehouse_images/")[arr_len]} style="width:10%"><i class="fa fa-times edt_itm" aria-hidden="true" style="position:relative; left: -1%; cursor: pointer; color: red;" dir="${v}"></i>`);
                }
                })

                



        
              }
              console.log(images);

                localStorage.setItem('update_id', item_id);
                localStorage.removeItem('edit_item');
            },

            error: function(response){
              
              alert("Connection Error.");

            }

            });
          }


         




          function edit_company_item(){

            var item_name = $("#item_name").val();                 
            var description =  $("#description").val();
            var custom_id =  $("#custom_id").val();
            var unit_type =  $("#unit_type").val();
            var notification =  $("#notification").val();

            // var min_alert =  $("#min_alert").val();;
            var company_id = localStorage.getItem('company_id');
            var item_id = localStorage.getItem('update_id');
            
            var blank;



            
            // alert(warehouse_id);

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
    
              $("#error").html("You have a blank field");

              return; 

            }

                        
           // $("#modal_edit_warehouse #error").html("");

          $("#upd_item").hide();
          $("#edit_item_loader").show();



          $.ajax({

            type: "POST",
            dataType: "json",
            cache: false,
                 headers: {
                'Authorization':localStorage.getItem('token'),
               },
            url: api_path+"wms/edit_item",
            data: { "item_name" : item_name, "custom_id" : custom_id, "description" : description, "company_id" : company_id, "item_id" : item_id, "unit_type" : unit_type, "item_images" : images, "day": notification},

            success: function(response) {

              console.log(response);
              console.log(images);


              if (response.status == '200') {
                $("#error").html("");
                $("#edit_item_loader").hide();   
                $("#upd_item").show();

                $('#modal_upd_item').modal('show');

                $('#modal_upd_item').on('hidden.bs.modal', function () {
                    // do something…
                    localStorage.removeItem('update_id');
                    window.location.reload();
                    window.location.href = base_url+"items";
                })
                
                
                
              }else if(response.status == '400'){ // coder error message

                $("#edit_item_loader").hide(); 
                 $("#upd_item").show();
                 $("#error").html('Technical Error. Please try again later.');


              }else if(response.status == '401'){ //user error message

                $("#edit_item_loader").hide(); 
                 $("#upd_item").show();
                 $("#error").html(response.msg);


              }


            },

            error: function(response){

                  console.log(response);
                 $("#edit_item_loader").hide(); 
                 $("#upd_item").show();
                 $("#error").html("Connection Error.");

            }

          });

          }
          
          
        </script>



<?php

include_once("../gen/_common/footer.php"); // header contents

?>