<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="341582025304-09693s1st8481k09g6qj5omt6h9tgoie.apps.googleusercontent.com">

    <title>Employee.ng | Warehouse </title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Ubuntu" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="assets/admin_template/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/admin_template/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/admin_template/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="assets/admin_template/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

     <link href="assets/admin_template/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/admin_template/build/css/custom.min.css" rel="stylesheet">
    
    <style type="text/css">
        
        /*.ui-autocomplete-loading {
            background: white url("images/ui-anim_basic_16x16.gif") right center no-repeat;
          }*/

          .typeahead,
.tt-query,
.tt-hint {
  width: 350px;
  padding: 8px 12px;
  font-size: 12px;
  line-height: 20px;
  border: 2px solid #ccc;
  -webkit-border-radius: 8px;
     -moz-border-radius: 8px;
          border-radius: 8px;
  outline: none;
}



.tt-query {
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
     -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}



.tt-dropdown-menu {
  width: 422px;
  margin-top: 12px;
  padding: 8px 0;
  background-color: #fff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-border-radius: 8px;
     -moz-border-radius: 8px;
          border-radius: 8px;
  -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
     -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
          box-shadow: 0 5px 10px rgba(0,0,0,.2);
}



.tt-suggestion.tt-cursor {
  color: #fff;
  background-color: #0097cf;

}

.tt-suggestion p {
  margin: 0;
}
        .background{
          background-color: #fff;
        }

         .has-error{
            background-color: #f7cdcd;
         }

        .modal-header {
            padding:9px 15px;
            
            border-bottom:1px solid #eee;
            background-color: #0480be;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
             border-top-left-radius: 5px;
             border-top-right-radius: 5px;
         }

         .green{
          color: green;
         }

         .gray{
          color: gray;
         }

         

    </style>

     <!-- jQuery -->
    <!-- remember: move to footer -->
     <!-- jQuery -->
     <script src="assets/admin_template/vendors/jquery/dist/jquery.min.js?v=1.1"></script>
     <!-- Bootstrap -->
     <script src="assets/js/common.js?v=1.3"></script>
     <script src="assets/admin_template/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
     <script src="assets/admin_template/vendors/twbs-pagination-1.4.0/jquery.twbsPagination.js" type="text/javascript"></script>
     <script src="assets/js/jquerysession.js?v=1"></script>
      <script src="assets/js/wms.js?v=2.0"></script>
     <script src="assets/js/jquery-ui.min.js?v=1"></script>

     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

      <!-- jQuery autocomplete -->
     <!-- <script src="assets/admin_template/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script> -->
    

     <script src="assets/admin_template/vendors/dropzone/dist/min/dropzone.min.js"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  

     <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>


    <script type="text/javascript">
      

      $(document).ready(function(){
        
        if(localStorage.getItem('user_id') == "" || localStorage.getItem('user_id') == null ||localStorage.getItem('company_id') == "" || localStorage.getItem('company_id') == null){

          //redirect user to login page
          window.location.href = site_url;

        }else{
          fetch_warehouse_list();
          fetch_user_module_roles();
          can_company_access_page();
          fetch_company_colors();
          
              //2.
          group_modules_users_can_access();

          // $('#itempictureform').attr('action', '/api/wms/upload_images')
          // alert(window.location.host+'api/wms/upload_images');          

        }

        $(document).on('click', '#switch', function(){
          $('#loading_dlv').show();
          $('#warehouse_dlv').html('');
          $('#modal_switch').modal('show');
          getListOfWarehouseUSerHasAccessTo();
          
        });

        $(document).on('click', '.enter_ware', function(){
          var warehouse_id = $(this).attr("id").replace(/enter_/,'');
          var warehouse_name = $(this).attr("dir").replace(/entername_/,'');
          localStorage.setItem('warehouse_id', warehouse_id);
          localStorage.setItem('warehouse_name', warehouse_name); 
          window.location.href = base_url;
          
        });
        
  
      });


      function can_company_access_page(){

        var company_id = localStorage.getItem('company_id');
        var user_id = localStorage.getItem('user_id');
        var module_id = 6;

        $.ajax({
              
          type: "POST",
          dataType: "json",
          url: api_path+"wms/can_company_access_module",
          data: { "company_id" : company_id , "user_id" : user_id , "module_id" : module_id },
          timeout: 60000,

          success: function(response) {
            
            console.log(response);

            if (response.status == '200'){
              
              //1. check colour customization 
              
              //3.
              

              //set warehouse name              
              $('#wareh_name').html(localStorage.getItem('warehouse_name'));
              $("#whole_body").show();
            }else{

              // alert("You do not have access to this module.");
              alert(response.msg);
              // window.location.href = site_url+"/feeds";

            }
        
          },

          error: function(response){

            // alert("You do not have access to this module");
            alert(response.msg);
            // window.location.href = site_url+"/feeds";

          }        

        });

      }

      function fetch_warehouse_list(){

        var company_id = localStorage.getItem('company_id');
        var user_id =  localStorage.getItem('user_id'); 

        
        
        $.ajax({
            
            type: "POST",
            dataType: "json",
            url: api_path+"wms/list_warehouses_user_connected",
            data: {"company_id": company_id, "user_id" : user_id},
            timeout: 60000,

            success: function(response) {
                
              

              if (response.status == '200'){
                
                var warehouse_id;
                var warehouse_name;

                if(response.data.length < 1){

                  $('#switch_tab').hide();
                   // alert('hide');
            
                }else if(response.data.length > 1){
	                $.each(response['data'], function(i, v){
	                  warehouse_id = response['data'][i]['warehouse_id'];
	                  warehouse_name = response['data'][i]['warehouse_name'];

                    // alert(warehouse_id);
                    // alert(warehouse_name);
	                })
                  // alert('show');
                  $('#switch_tab').show();
	               
  	            }

                

                // if(response.data.length > 1){

        	      	// $('#switch_tab').show();
        		      // // alert('show');
        		
                // }
                  


                console.log(warehouse_id)
                console.log(warehouse_name);

                if(localStorage.getItem('warehouse_id') == null || localStorage.getItem('warehouse_id') == "" 
                  || localStorage.getItem('warehouse_id') == 'undefined'){

                  localStorage.setItem('warehouse_id', warehouse_id);
                  localStorage.setItem('warehouse_name', warehouse_name);
                }
                

              }else{
                              
              }


                
            },
            // objAJAXRequest, strError
            error: function(response){
                 
              alert('Error fetching warehouses!');
              
              
            }        

        });
      }

      function getListOfWarehouseUSerHasAccessTo(){
        var company_id = localStorage.getItem('company_id');
        var user_id =  localStorage.getItem('user_id'); 

        
        
        $.ajax({
            
            type: "POST",
            dataType: "json",
            url: api_path+"wms/list_warehouses_user_connected",
            data: {"company_id": company_id, "user_id" : user_id},
            timeout: 60000,

            success: function(response) {
                
              

              if (response.status == '200'){
                $('#loading_dlv').hide();
                var str = "";
                if(response.data.length > 0){

	                $.each(response['data'], function(i, v){

	                	
                		str += '<tr>';
                		str += '<td>'+response['data'][i]['warehouse_name']+'</td>';
                		str += '<td>'+response['data'][i]['warehouse_address']+'</td>';
                		str += '<td><button name="enter_ware" class="enter_ware btn btn-primary btn-sm" id="enter_'+response['data'][i]['warehouse_id']+'" dir="entername_'+response['data'][i]['warehouse_name']+'" data-dismiss="modal">Enter</button></td>';
                		str += '</tr>';	

              

	                  		

	                })

	                // $('#switch_tab').show();
        			$('#warehouse_dlv').html(str);

                }

              }else{
                $('#loading_dlv').hide();
                $('#warehouse_dlv').html('');
                $('#warehouse_dlv').html('Technical error!');                
              }


                
            },
            // objAJAXRequest, strError
            error: function(response){
              $('#loading_dlv').hide();   
              $('#warehouse_dlv').html('');   
              // alert('Error fetching warehouses!');
              $('#warehouse_dlv').html('Error fetching List!');
              
            }        

        });     
      }

      function fetch_company_colors(){

        var company_id = localStorage.getItem('company_id');

        $.ajax({
            
            type: "POST",
            dataType: "json",
            url: api_path+"company/get_company_colours",
            data: {"company_id": company_id},
            timeout: 60000,

            success: function(response) {
                
              

              if (response.status == '200'){

                var color = '#2A3F54';
                if(response.data.middle_left_bar == '' || response.data.middle_left_bar == null){
                  response.data.middle_left_bar = color;
                }

                if(response.data.body_color == '' || response.data.body_color == null){
                  response.data.body_color = color;
                }

                if(response.data.bottom_left_bar == '' || response.data.bottom_left_bar == null){
                  response.data.bottom_left_bar = color;
                }

                if(response.data.top_left_bar == '' || response.data.top_left_bar == null){
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


              
              $('#user_name').html(localStorage.getItem('firstname')+' '+localStorage.getItem('lastname'));

              if(localStorage.getItem('profile_photo') == "" || localStorage.getItem('profile_photo') == null || localStorage.getItem('profile_photo') == undefined){

                $('#profile_img').attr('src', '/files/images/user_profile_images/sml_default_picture.png');

              }else{

                $('#profile_img').attr('src', '/files/images/user_profile_images/sml_'+localStorage.getItem('profile_photo'));

              }

              

                
            },
            // objAJAXRequest, strError
            error: function(response){
              
              alert('Error fetching customization!');
              
            }        

        });
      }

      function group_modules_users_can_access(){

        var user_id = localStorage.getItem('user_id');
        var company_id = localStorage.getItem('company_id');

        var pathArray = window.location.href.split('/');
        var username = pathArray[2].split('.')[0];
        
        $.ajax({
              
          type: "POST",
          dataType: "json",
          url: api_path+"user/modules_users_can_access_within_company",
          data: { "user_id" : user_id , "company_id" : company_id  },
          timeout: 60000,

          success: function(response) {
            
              if (response.status == '200'){
                

                if(response.total_rows != 0){

                  var k = 1;
                  var list_mds = "";
                  $.each(response.data, function (i, v) {


                    if(v.access_count == 1){

                      var link_lk = ' href="'+site_url+'/'+v.module_landing_page+'" ';
                      var set_coy_class = "set_coy";

                    }else{

                      var link_lk = 'class="get_comp_list"';
                      var set_coy_class = "";

                    }


                    list_mds += '<li>   <a '+link_lk+' id="themodli_'+v.module_id+'"  dir="'+v.module_abbrv+"-"+v.company_id+"-"+v.company_name+'" class="'+set_coy_class+'" >   <span class="image"><img src="../files/images/icons/'+v.module_little_icon+'" alt=""></span>     <span>        <span><b>'+v.module_abbrv+'</b></span> </span>       <span class="message">'+v.module_full_name+'</span>                      </a>          </li>';



                    list_mds += '<span id="comp_todi_'+v.module_id+'" style="display: none">';
                    $.each(v.more_comp_list, function (i2, v2){
                      list_mds += '<li class="" style="display:"><a href="https://employee.ng/'+v2.landing_page+'" class="set_coy"   dir="'+v.module_abbrv+"-"+v2.company_id+"-"+v2.comp_name+'" >'+v2.comp_name+'</a></li>';
                    });
                    list_mds += '</span>';


                    

                    k++;

                  });

                  $(".fst_dd").append(list_mds+'<li><div class="text-center"><a href="https://'+username+'.employee.ng/user/modules_list4"><strong>Add More Apps </strong><i class="fa fa-angle-right"></i></a></div></li>');
                  // $( list_mds ).insertAfter( ".fst_dd" );
                  $("#feed_tg").attr("href", site_url+"/feeds");

                }else{
                  
                  // alert("No sd");

                }
                

              }else{

                // alert("You do not have access to this module");
                // $('#whole_body').html('<font color="black">You do not have access to this module</font>');

              }
          
            },

            error: function(response){
              // alert("error");
              // console.log(response);
              // alert("You do not have access to this module");
              // $("#whole_body").html('<font color="black">You do not have access to this module</font>');
            }        

        });

      }


      function fetch_user_module_roles(){

        var company_id = localStorage.getItem('company_id');
        var user_id = localStorage.getItem('user_id');
        var warehouse_id = localStorage.getItem('warehouse_id');
        var module_id = 6;

        $.ajax({
              
          type: "POST",
          dataType: "json",
          url: api_path+"wms/get_user_roles_in_warehouse",
          data: { "company_id" : company_id , "user_id" : user_id , "module_id" : module_id, "warehouse_id" : warehouse_id },
          timeout: 60000,

          success: function(response) {
              
              console.log(response);

              if (response.status == '200'){

                var k = 1;
                $.each(response['data'], function (i, v) {
                  
                  if(v.role_id == 8){//a
                    $("#settings_tab").show();
                  }

                  if(v.role_id == 5){ //Procurement
                    $("#po_tab").show();
                    $("#items").show();
                  }

                  if(v.role_id == 6){ //Procurement
                    $("#incoming_tab").show();
                    $("#items").show();
                  }

                  if(v.role_id == 8){ //Procurement
                    $("#outgoing_tab").show();
                  }

                  if(v.role_id == 9){ //Procurement
                    $("#qty_adjustment").show();
                  }

                  if(v.role_id == 7){ //Warehouse manager

                    $("#invoice_tab").show();
                    
                    // $("#outgoing_tab").show();
                    // $("#qty_adjustment").show();
                    // $("#warehouses").show();
                    // $("#contacts").show();
                    // $("#dshbd").show();
                  }

                  if(v.role_id == 0){ //Settings
                    $("#settings_tab").show();
                  }

                  k++;
                });            


              }else if(response.status == '400'){


              }else if(response.status == "401"){
                  

              }
          
            },

            error: function(response){


            }        

        });
      }
       
      
    </script>











  </head>

  <body class="nav-md" style="display: none;" id="whole_body">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view" >
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Warehouse</span></a>

            </div>

            <div class="clearfix"></div>

            

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section" >
                
                <p id="wareh_name" class="text-center" style="color: #ccc;"></p>
                <!-- <hr style="color: #ccc;"> -->
                <ul class="nav side-menu" style="display: ;" id="main_menu">
                  <!-- <li style="color: #ccc;"> NahereLimited </li> -->
                  <li id="dshbd" style="display: ;"><a href="/warehouse/"><i class="fa fa-home"></i> Home </a>              
                  </li>
                  <li id="po_tab" style="display: none;"><a><i class="fa fa-cart-arrow-down"></i> Incoming <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="po_test">Purchase Orders</a></li>
                      <li><a href="paystovendors">Payments to Vendors</a></li>
                      <li><a href="receivepoitems">Receive Items</a></li>
                    </ul>
                  </li>
                  <li id="incoming_tab" style="display: none;"><a><i class="fa fa-arrow-up"></i> Outgoing  <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <!-- <li><a href="salesquotes">Sales Quotes</a></li> -->
                      <li><a href="invoicesreceipts">Invoices/Receipts</a></li>
                      <li><a href="paysfromclients">Payments from Clients</a></li>
                      <li><a href="supplyitems">Supply Items</a></li>
                    </ul>
                  </li>
                  
                  <!-- <li id="invoice_tab" style="display: none;"><a href="outgoing_by_batch"><i class="fa fa-file-text-o"></i> Invoices </a>              
                  </li>

                  <li id="outgoing_tab" style="display: none;"><a href="release_items"><i class="fa fa-arrow-up"></i> Outgoing </a>              
                  </li> -->

                  <!-- <li id="outgoing" style="display: none;"><a href="leases"><i class="fa fa-reply"></i> Lease </a>              
                  </li> -->

                  <li id="qty_adjustment" style="display: none;"><a><i class="fa fa-sliders"></i> Quantity Adjustment  <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="upward_adjustment">Add</a></li>
                      <li><a href="downward_adjustment">Remove</a></li>
                      <li><a href="qty_adj_history">History</a></li>
                    </ul>           
                  </li>

                  <!-- <li id="warehouses" style="display: none;"><a href="warehouses"><i class="fa fa-arrow-up"></i> Warehouses </a>  -->             
                  <!-- </li> -->

                  <li id="items" style="display: none;"><a href="items"><i class="fa fa-arrow-up"></i> Items List </a>              
                  </li>

                  <li id="contacts" style="display: ;"><a href="contacts"><i class="fa fa-users"></i> Contacts </a>              
                  </li>

                  
                  <li id="settings_tab" style="display: none;"><a><i class="fa fa-gear"></i> Settings <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="warehouses">Warehouses</a></li>
                      <!-- <li><a href="items">Items List</a></li> -->
                      <!-- <li><a href="contacts">Contacts</a></li> -->
                      <li><a href="unit_type">Unit Type</a></li>
                      <li><a href="users">Users</a></li>
                      
                    </ul>      
                  </li>

                  <li id="switch_tab" style="display: none;"><a id="switch"><i class="fa fa-refresh"></i> Switch Warehouse</a>              
                  </li>
                  
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small" id="footer_logout">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>

              <a data-toggle="tooltip" data-placement="top" title="Logout" onclick="localStorage.clear();  window.location.href = site_url ">
                <span class="glyphicon glyphicon-off" aria-hidden="true" ></span>
              </a>
              
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false" id="username">
                    <img src="" alt="" id="profile_img"><span class=" fa fa-angle-down"></span>
                
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right" id="user_list">

                    <li style="background-color: "><a onclick="window.location.href = site_url+'/user/myprofile'"><i class="fa fa-pencil pull-right"></i><b id="user_name"></b></a></li>

                    <li><a onclick="window.location.href = site_url+'/user/change_password'">Change Password</a></li>

                    <li><a onclick="function hi(){ localStorage.clear(); window.location.href = site_url}; hi();" ><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>

                    <!-- <img style="display:none;"
                    onload="show_login_status('Google', true)"
                    onerror="show_login_status('Google', false)"
                    src="https://accounts.google.com/CheckCookie?continue=https%3A%2F%2Fwww.google.com%2Fintl%2Fen%2Fimages%2Flogos%2Faccounts_logo.png&followup=https%3A%2F%2Fwww.google.com%2Fintl%2Fen%2Fimages%2Flogos%2Faccounts_logo.png&chtml=LoginDoneHtml&checkedDomains=youtube&checkConnection=youtube%3A291%3A1"
                    /> -->
                                        
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-th fa-3x"></i>
                    <!-- <span class="badge bg-green">0</span> -->
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list fst_dd" role="menu">
                    <li class="">
                      <a id="feed_tg" href="">
                        <span class="image"><img src="../files/images/icons/feeds_icon.png" alt=""></span>
                        <span>
                          <span><b>Feeds</b></span>
                          
                        </span>
                        <span class="message">
                          Notifications Feeds
                        </span>
                      </a>
                    </li>
                    <!-- 
                    
                    
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
      
                    -->
                  
                  </ul> 
                </li>

                <!-- <li role="presentation">
                    <a href="/user/modules" class="dropdown-toggle info-number" >
                      <i class="fa fa-arrow-circle-left fa-3x text-center" style="font-size: 20px;"></i>
                      
                    </a>
                  </li> -->

                  <!-- <li role="presentation">
                    <a href="/user/modules">
                      <i class="fa fa-home fa-3x" style="font-size: 20px;"></i>
                    </a>
                    
                  </li> -->
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- modal -->
        <div class="modal fade" id="modal_switch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;">Warehouses
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </h3>
                
              </div>
              <div class="modal-body">
                <!-- <h4 id="modal_msg">User permission updated successfully!</h4> -->

                <div class="row">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="headings">

                                  <th class="column-title" width="25%">Warehouse Name</th>
                                  <th class="column-title" width="50%">Warehouse Address</th>
                                  <th class="column-title" width="25%"></th>
                                  

                                </tr>
                            </thead>

                              <tr id="loading_dlv">
                                  <td colspan="3" style="text-align: center; padding-top: 15px"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i></td>
                              </tr>
                            <tbody id="warehouse_dlv">
                              
                              
                            </tbody>
                        </table>
                      </div>
                    </div>
              
              </div>
              <!-- <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="yes_delete_position" data-dismiss="modal">Yes</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
              </div> -->
            </div>
          </div>
        </div>
