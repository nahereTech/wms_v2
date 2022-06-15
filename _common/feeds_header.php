<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="341582025304-09693s1st8481k09g6qj5omt6h9tgoie.apps.googleusercontent.com">

    <title>NaHere | Notifications </title>

    <link rel="icon" href="../favicon.png">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Ubuntu" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="assets/admin_template/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/admin_template/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/admin_template/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <!-- <link href="assets/admin_template/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"> -->

     <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->

     <link href="assets/admin_template/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">


<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
     <!-- <script data-ad-client="ca-pub-6149188842223532" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->

    <!-- Custom Theme Style -->
    <link href="assets/admin_template/build/css/custom.min.css" rel="stylesheet">
    
    <style type="text/css">
        
.dd{
        position: relative;
        left: -6%;
      }
      .info-number:hover{
        display: block;
      }
      [data-tooltip]:hover {
        position: relative;
        margin-top: 30px;
  }
.abbrv::hover{
  display: none;
}
[data-tooltip]:hover::before {
  all: initial;
  font-family: Arial, Helvetica, sans-serif;
  display: inline-block;
  border-radius: 5px;
  padding: 10px;
  background-color: #1a1a1a;
  content: attr(data-tooltip);
  box-shadow: rgba(0,0,0,0.19);
  color: #f9f9f9;
  position: absolute;
  bottom: 100%;
  width: 100px;
  left: 50%;
  transform: translate(-50%, 0);
  margin-bottom: 15px;
  text-align: center;
  font-size: 14px;
  padding: 15px;
}
[data-tooltip-bottom]:hover,
[data-tooltip-left]:hover,
[data-tooltip-right]:hover,
[data-tooltip]:hover {
  position: relative;
  z-index: 10;

}
[data-tooltip-bottom]:hover::after,
[data-tooltip-left]:hover::after,
[data-tooltip-right]:hover::after,
[data-tooltip]:hover::after {
  all: initial;
  display: inline-block;
  width: 0; 
  height: 0; 
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;     
  border-top: 10px solid #1a1a1a;
  position: absolute;
  bottom: 100%;
  content: '';
  left: 50%;
  transform: translate(-50%, 0);
  margin-bottom: 5px;
}
[data-tooltip-right]:hover::after {
  margin-bottom: 0;
  bottom: auto;
  transform: rotate(90deg) translate(0, -50%);
  left: 100%;
  top: 50%;
  margin-left: -5px;
  margin-top: -5px;
}
[data-tooltip-left]:hover::after {
  margin-bottom: 0;
  bottom: auto;
  transform: rotate(-90deg) translate(0, -50%);
  left: auto;
  right: 100%;
  top: 50%;
  margin-right: -5px;
  margin-top: -5px;
}
[data-tooltip-bottom]:hover::after {
  margin-bottom: 0;
  bottom: auto;
  transform: rotate(180deg) translate(-50%, 0);
  top: 100%;
  margin-left: -20px;
  margin-top: 5px;
}
[data-tooltip-bottom]:hover::before,
[data-tooltip-left]:hover::before,
[data-tooltip-right]:hover::before,
[data-tooltip]:hover::before {
  all: initial;
  font-family: Arial, Helvetica, sans-serif;
  display: inline-block;
  border-radius: 5px;
  padding: 10px;
  background-color: #1a1a1a;
  box-shadow: rgba(0,0,0,0.19);
  content: attr(data-tooltip);
  color: #f9f9f9;
  position: absolute;
  bottom: 100%;
  width: 100px;
  left: 50%;
  transform: translate(-50%, 0);
  margin-bottom: 15px;
  text-align: center;
  font-size: 14px;
}
[data-tooltip-right]:hover::before {
  margin-bottom: 0;
  bottom: auto;
  transform: translate(0, -50%);
  left: 100%;
  top: 50%;
  content: attr(data-tooltip-right);
  margin-left: 15px;
}
[data-tooltip-left]:hover::before {
  margin-bottom: 0;
  bottom: auto;
  transform: translate(0, -50%);
  left: auto;
  right: 100%;
  top: 50%;
  content: attr(data-tooltip-left);
  margin-right: 15px;
}
[data-tooltip-bottom]:hover::before {
  margin-bottom: 0;
  bottom: auto;
  top: 100%;
  content: attr(data-tooltip-bottom);
  margin-top: 15px;
}

.nav.side-menu>li {
  background-color: #2A3F54 !important;
}

.badg{
  text-align: center;
    background: red;
    width: 20px;
    height: 20px;
    margin: 0;
    border-radius: 100%;
    position:absolute;
    top:5px;
    left:23px;
    padding:5px;
}

.content .content-overlay {
  background: rgb(0, 175, 239, .99);
  border-radius: 10px;
  position: absolute;
  z-index: 1;
  height: 70%;
  width: 100%;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  opacity: 0;
  -webkit-transition: all 0.4s ease-in-out 0s;
  -moz-transition: all 0.4s ease-in-out 0s;
  transition: all 0.4s ease-in-out 0s;
}

.content:hover .content-overlay{
  opacity: 1;
}

.content-image{
  width: 100%;
}

.content-details {
  font-family: 'Raleway';
  position: absolute;
  font-size: 26px;
  text-align: center;
  padding-left: 1em;
  padding-right: 1em;
  width: 100%;
  top: 50%;
  left: 50%;
  opacity: 0;
  z-index: 2;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-transition: all 0.3s ease-in-out 0s;
  -moz-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}

.content:hover .content-details{
  top: 50%;
  left: 50%;
  opacity: 1;
}

.content-details h3{
  color: #fff;
  /*font-weight: 500;*/
  letter-spacing: 0.15em;
  margin-bottom: 0.5em;
  text-transform: uppercase;
}

.content-details a{
  color: #fff;
  font-size: 1px;
}

.content-details p{
  /*font-size: bold;*/
}

.fadeIn-top{
  top: 20%;
}

      .app{
        /*font-family: 'Raleway', sans-serif;*/
         color: #393939; font-size: 24px; line-height: 44px; margin: 10px 0 0 0; padding: 20px 30px; font-weight: ; text-align: center;  
         margin-top: 5%;
      }
      .fst_dd{
  z-index: 10;
  font-size: 16px;
  width: 80%;
  margin-left: auto;
  margin-right: auto;
/*  position: relative;
  top: 100%;*/
  /*overflow-x: hidden;*/
}
.last{
  /*position: relative;
  right: 50%;*/

}
.first_{
  width: 15%;
  font-size: 16px;
  margin-left: auto;
  margin-right: auto;
  /*font-weight: bold;*/
  margin-left: 10px;
}
.get_comp_list{
 /* display: flex;
  justify-content: center;*/
  /*width: 50%;*/
 /* margin-left: auto;
  margin-right: auto;*/
  position: relative;
  left: 10%;

  cursor: pointer;
  /*padding: 10px;*/
  width: 90%;
  color: white;
  font-size: 16px;
}
.message{
    position: relative;
  left: -10%;
  text-align: center;
  /*margin-top: 20px;*/
  font-size: 18px;

}
.image img{
 position: relative;
 left: 25%;
 width: 30%;
}
.abbrv{
  position: relative;
  left: -10%;
  font-size: 16px;
  text-align: center;
  font-weight: 0px;
}
.more{
  display: block;
}
.text-center{
  display: block;
}


  .overlay { 
            /*height:%; */
            width: 100%; 
            /*position: fixed; 
            top: 0; 
            left: 0; */
            background-color: #fff;
  overflow-y: scroll;

  overflow-x: hidden;

            transition: 1.0s; 
        } 
  
        .overlay-content { 
            display: flex;
            position: relative; 
            top: 40%;
            /*left: 25%; */
            cursor: pointer;
            justify-content: center;
            align-items: center;
            text-align: center; 
        } 
  
        .overlay a { 
            padding: 10px; 
            text-decoration: none; 
            font-size: 40px; 
            color: black; 
            display: block; 
            transition: 0.3s; 
        } 
  
        .overlay a:hover, 
        .overlay a:focus { 
            color: black; 
        } 
  
        .overlay .closebtn { 
            position: absolute; 
            top: -10px; 
            right: 35px; 
            /*font-size: 20px; */
        }
        .logo {
            position: absolute; 
            top: 30px; 
            left: 35px; 
            font-size: 10px;

        }

        @keyframes click-wave {
  0% {
    height: 40px;
    width: 40px;
    opacity: 0.35;
    position: relative;
  }
  100% {
    height: 50px;
    width: 50px;
    margin-left: -20px;
    margin-top: -20px;
    opacity: 0;
  }
}

.option-input_ {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
  position: relative;
  top: 13.33333px;
  right: 0;
  bottom: 0;
  left: 0;
  height: 20px;
  width: 20px;
  transition: all 0.15s ease-out 0s;
  background: #cbd1d8;
  border: none;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  margin-right: 0.5rem;
  outline: none;
  position: relative;
  z-index: 1000;
}
.option-input_:hover {
  background: #9faab7;
}
.option-input_:checked {
  background: #2A3F54;
}

.img_style {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        border: 4px solid white;

    }
.option-input_:checked::before {
  height: 20px;
  width: 20px;
  position: absolute;
  content: '✔';
  display: inline-block;
  font-size: 26.66667px;
  text-align: center;
  line-height: 20px;
}
.option-input_:checked::after {
  -webkit-animation: click-wave 0.65s;
  -moz-animation: click-wave 0.65s;
  animation: click-wave 0.65s;
  background: #40e0d0;
  content: '';
  display: block;
  position: relative;
  z-index: 100;
}

.option-input_.radio_ {
  border-radius: 50%;
}
.option-input_.radio_::after {
  border-radius: 50%;
}


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



         .user-post-profile img {
              width: 80px;
              height: 80px;
              border-radius: 50%;
              margin-right: 10px;
          }









          .container33 {
          width: 80px;
          height: 100px;
          margin: 100px auto;
          margin-top: calc(100vh / 2 - 50px);
        }

        .block33 {
          position: relative;
          box-sizing: border-box;
          float: left;
          margin: 0 10px 10px 0;
          width: 12px;
          height: 12px;
          border-radius: 3px;
          background: #FFF;
        }

        .block33:nth-child(4n+1) { animation: wave 2s ease .0s infinite; }
        .block33:nth-child(4n+2) { animation: wave 2s ease .2s infinite; }
        .block33:nth-child(4n+3) { animation: wave 2s ease .4s infinite; }
        .block33:nth-child(4n+4) { animation: wave 2s ease .6s infinite; margin-right: 0; }

        @keyframes wave {
          0%   { top: 0;     opacity: 1; }
          50%  { top: 30px;  opacity: .2; }
          100% { top: 0;     opacity: 1; }
        }

        .user-post-profile img{
          border: 4px solid #E8E8E8;
          width: 60px;
          height: 60px;
          margin-left: 10px
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
    
     <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.4.3/jquery.timeago.js"></script>


     <script src="assets/admin_template/vendors/dropzone/dist/min/dropzone.min.js"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  

     <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.4.3/jquery.timeago.js"></script>



    <script type="text/javascript">

      // const domains = [
      //   "https://www.employee.ng",
      //   "https://me.employee.ng"
      // ]
      
      // window.addEventListener("message", messageHandler, false);

      // function messageHandler(event) {

      //   if (!domains.includes(event.origin))
      //     return;
      //   const { action, key, value } = event.data
      //   if (action == 'save'){
      //     window.localStorage.setItem(key, JSON.stringify(value))
      //   } else if (action == 'get') {
      //     event.source.postMessage({
      //       action: 'returnData',
      //       key,
      //       JSON.parse(window.localStorage.getItem(key))
      //     }, '*')
      //   }

      // }
    </script>



    <script type="text/javascript">
      
      
      $(document).ready(function(){

        //clear company id since this is a neutral ground
        // localStorage.setItem('company_id','');

        


        //reset company id to blanks since you are on feeds page
        var hosta = window.location.host;
        var hosta_arr = hosta.split(".");

        var sub = hosta_arr[0];
        
        //if user_id or token is blank
        if(localStorage.getItem('token') == "" || localStorage.getItem('token') == null){

          window.location.href = site_url;

        }

        // if(sub == "imo"){

        //      window.location.href = site_url+"/cis";          

        // }

        
        // if(localStorage.getItem('token') != "" || localStorage.getItem('token') != null || localStorage.getItem('company_id') != null && sub != "imo"){

        //   fetch_company_colors();
        //   group_modules_users_can_access();
        //   $('#whole_body').show(); 

        // }

        group_modules_users_can_access();
        fetch_warehouse_list();

        // list_active_companies();



        if(localStorage.getItem('profile_photo') == "" || localStorage.getItem('profile_photo') == null || localStorage.getItem('profile_photo') == undefined){

          $('#profile_img').attr('src', '/files/images/user_profile_images/sml_default_picture.png');

        }else{

          $('#profile_img').attr('src', '/files/images/user_profile_images/sml_'+localStorage.getItem('profile_photo'));

        }

        //
        $(document).on('click', '.get_comp_list', function(){
          
          var id = $(this).attr("id").replace(/themodli_/,'');
          var landing = $(this).attr("data");
          var compn_and_d = $(this).attr("dir").split("-");
          localStorage.setItem('module-id', id);
          var module_name = compn_and_d[0];
          localStorage.setItem('module-name', module_name);
          list_active_companies(id, landing);


          
          // $("#list_comp_tables").html($("#comp_todi_"+id).html());
          $(".mdl_hdn").html("Which company's "+module_name+"?");
          // $("#modal_choose_company").modal("show");
          
        });

        //set_coy
        $(document).on('click', '.set_coy', function(){

          var compn_and_d = $(this).attr("dir").split("-");
          var company_id = compn_and_d[1];
          var md_landing_page = compn_and_d[2]
          localStorage.setItem('landing_page', md_landing_page);
          localStorage.setItem('company_id', company_id);

          // localStorage.setItem('company_name', company_name);

          window.location.href = "../"+md_landing_page;
          
        });
        
  
      });
      function openNav() { 
            document.querySelector( 
                ".myNav").style.width = "100%"; 
        } 
  
        function closeNav() { 
             document.querySelector( 
                ".myNav").style.width = "0%"; 
        }

           function openNav() { 
             document.querySelector( 
                ".myNav").style.height = "100%"; 
        } 
  
        function closeNav() { 
          document.querySelector( 
                ".myNav").style.height = "0%"; 
        }

      function fetch_company_colors(){

        $.ajax({
            
            type: "POST",
            dataType: "json",
            url: api_path+"company/get_company_colours",
            data: { 
              "company_id": localStorage.getItem('company_id') , "token" : localStorage.getItem('token') 
            },
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
                
                // group_modules_users_can_access();        
                  // fetch_company_colors();
                // $('#whole_body').show();         

              }   
                
            },
            // objAJAXRequest, strError
            error: function(response){
              
              alert('Connection error!');
              
            }        

        });
      }

      function list_active_companies(id, landing){
        var user_id = localStorage.getItem('user_id');
        var module_id = localStorage.getItem('module-id');
        var module_name = localStorage.getItem('module-name');


         $.ajax({
              
          type: "GET",
          dataType: "json",
          url: api_path+"wms/my_connections",
          data: { "user_id" : user_id , "module_id" : id},
          timeout: 60000,
          

            success: function(response) {

          if (response.status == '200'){

            console.log(response.data);
                  var list_mds = "";
                    list_mds += `<span id="comp_todi_${module_id}" >`;
            $.each(response.data, function (i,v){
                      list_mds += `<li class="" style="display:"><a class="set_coy" dir="${module_name}-${v.company_id}-${landing}" style="cursor: pointer" >${v.company_name}</a></li>`;
                    });

        }
        console.log(list_mds);
        if(list_mds == undefined){
             $('#list_comp_tables').html(`<span>You have no active subscription for ${landing} module</span>`);
          $("#modal_choose_company").modal("show");
        }
        $('#list_comp_tables').html(list_mds);
          $("#modal_choose_company").modal("show");

      },
          error: function(response){
              
            }
        })

      }

      function fetch_warehouse_list() {

            var company_id = localStorage.getItem('company_id');
            var user_id = localStorage.getItem('user_id');


            $.ajax({

                type: "POST",
                dataType: "json",
                url: api_path + "wms/list_warehouses_user_connected",
                data: {
                    "company_id": company_id,
                    "user_id": user_id
                },
                timeout: 60000,

                success: function(response) {

                    console.log(response)

                    if (response.status == '200') {
                        
                        var warehouse_id;
                        var warehouse_name;


                        //if 
                        if (isEmptyObject(response.data)) {

                            $('#switch_tab').show();

                        } else if (!isEmptyObject(response.data)) {

                            var kup = 0;
                            $.each(response['data'], function(i, v) {

                                warehouse_id = response['data'][i]['warehouse_id'];
                                warehouse_name = response['data'][i]['warehouse_name'];

                                kup++;

                            });

                            if(kup > 1){
                                $('#switch_tab').show();
                            }else{
                               // $('#switch_tab').show();
                                $('#switch_tab').hide();
                            }



                        }

                        

                        $("#does_user_have_profile").html('yes');

                         if(!(localStorage.getItem('warehouse_id'))){
                          localStorage.setItem('warehouse_id', warehouse_id);
                          localStorage.setItem('warehouse_name', warehouse_name);
                         }
                          
                          $("#current_warehouse_id").html(warehouse_id);

                        // if (localStorage.getItem('warehouse_id') == "null" ||
                        //     localStorage.getItem('warehouse_id') == null || 
                        //     localStorage.getItem('warehouse_id') == "" || 
                        //     localStorage.getItem('warehouse_id') == 'undefined' || 
                        //     localStorage.getItem('warehouse_name') == "null" || 
                        //     localStorage.getItem('warehouse_name') == "" || 
                        //     localStorage.getItem('warehouse_name') == undefined 
                        //     ) 
                        // {

                        //     localStorage.setItem('warehouse_id', warehouse_id);
                        //     localStorage.setItem('warehouse_name', warehouse_name);

                        //     //save warehouse id on page
                        //     $("#current_warehouse_id").html(warehouse_id);

                        // }else{
                        //     //still save warehouse id on page
                        //     $("#current_warehouse_id").html(localStorage.getItem('warehouse_id'));
                        // }

                        //set warehouse name              
                        $('#wareh_name').html(localStorage.getItem('warehouse_name'));

                        //show page
                        $("#whole_body").fadeIn();
                        $(".container33").hide();


                        fetch_user_module_roles();

                    } else {

                        
                        fetch_user_module_roles();

                        if($("#user_perm_status").html() == "super_admin" || $("#user_perm_status").html() == "Admin"){




                            $("#assgn_roles").addClass("fa-times"); //mark roles as x
                            
                            //now check if other setups are ready
                            $.ajax({

                                type: "POST",
                                dataType: "json",
                                url: api_path + "wms/is_setup_done",
                                data: {
                                    "company_id": localStorage.getItem('company_id')
                                },
                                timeout: 60000,

                                success: function(response) {
                                    console.log(response);
                                    if (response.status == '200') {

                                        if(response.data.warehouse == "yes"){
                                            $("#crt_whs").addClass("fa-check");
                                        }else{
                                            $("#crt_whs").addClass("fa-times");
                                        }

                                        if(response.data.user_name == "yes"){
                                            $("#updt_comp_dtl").addClass("fa-check");
                                        }else{
                                            $("#updt_comp_dtl").addClass("fa-times");
                                        } 

                                    } else {

                                    }
                                },
                                error: function(response) {

                                }
                            });





                            $(".dsh_dvs").fadeOut(200).promise().done(function(){
                                $("#admins_no_permission_dv").fadeIn(400);
                            });

                        }else{

                            $(".dsh_dvs").fadeOut(200).promise().done(function(){
                                $("#no_permission_dv").fadeIn(400);
                            });

                        }      

                    }

                },
                // objAJAXRequest, strError
                error: function(response) {

                    $("#page_error_div").html('<i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i>&nbsp;&nbsp; Connection Error. Please try again.');
                    $(".container33").hide();
                    $("#page_error_div").show();
                    $("#whole_body").hide();

                }

            });
        }

      function fetch_user_module_roles() {

            var company_id = localStorage.getItem('company_id');
            var user_id = localStorage.getItem('user_id');
            var warehouse_id = localStorage.getItem('warehouse_id');
            var module_id = 6;
            localStorage.setItem('module_key',module_id);
            // alert(urlParams)
            // if(urlParams){
            //   user_id = urlParams.get('id');
            // }else{
            //   user_id = localStorage.getItem('user_id');
            // }
            // alert(user_id)
            console.log(warehouse_id);

            if($("#user_perm_status").html() == "super_admin" || $("#user_perm_status").html() == "Admin"){
            $("#settings_tab").show();
            }

            $.ajax({

                type: "POST",
                dataType: "json",
                url: api_path + "wms/get_user_profile_in_warehouse",
                data: {
                    "company_id": company_id,
                    "user_id": user_id,
                    "module_id": module_id,
                    "warehouse_id": warehouse_id
                },
                timeout: 60000,

                success: function(response) {

                    console.log(response);

                    var an_admin;
                    var user_roles = [];
                    $.each(response['data']['profile_details'], function(i,v){
                        console.log(v.id)
                        user_roles.push(Number(v.id))
                    
                    })


                    if (response.status == '200') {
                        console.log(Array.from((response['data']['profile_details'])))
                        // var role = localStorage.setItem("user_role", user_roles)
                        
                        localStorage.setItem("user_role", user_roles.filter(a => a !== 0)
                        .filter(a => a !== 1))
                        // console.log(user_roles.filter(a => a !== 0))

                        var k = 1;
                        $.each(response['data']['profile_details'], function(i, v) {
                          $("#qty_adjustment").show();

                            if (v.id == 2) { //Procurement
                                
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
                                $("#transactions_dashboard").show();
                                $("#expired_dashboard").show();
                                $("#incoming_graph").show();
                                $("#expenses_graph").show();
                                $("#profit_loss_graph").show();
                                $("#warehouse_value").show();
                                $("#report_tab").show();

                                



                                
                              var roles = localStorage.getItem("user_role");
                              var arr = ['2','4']
                              var users = roles.split(',')

                              users.map((a,i) => {
                                if(a.includes(arr[i])){
                                $("#expenses_revenue").show();
                                $("#expenses_graph").hide();
                                $("#revenue_graph").hide();
                                }
                              })

                                 // if(Array.from(Number(roles)).includes(2 & 4)){
                                 //    alert(roles)
                                 // }






                            }

                            if(v.id == 26){ //warehouse manager

                                $("#incoming_tab").show();//warehouse manager
                                $("#receiveorders").show(); //receive orders/create orders

                                $("#outgoing_tab").show();  //warehouse manager
                                $("#invoicesreceipts").show();
                                $("#supplyitems").show(); //but cannot issue
                                $("#contacts").show(); // show contact page
                                $("#items").show(); //show items page
                                $("#itemsreceivedlist").show();
                                $("#qty_adjustment").show();
                                $("#report_tab").show();

                                $("#items_dashboard").show();
                                $("#unique_dashboard").show();
                                $("#low_dashboard").show();
                                $("#transactions_dashboard").show();
                                $("#expired_dashboard").show();
                                $("#transactions_activities").show();
                                $("#warehouse_value").show();



                                
                                 




                               


                                //if the
                                if(localStorage.getItem('warehouse_id') != ""){
                                    $("#whsections").attr("href","whsections?i="+localStorage.getItem('warehouse_id'));
                                    $("#whsections").show(); //
                                }


                                
                            }


                            if(v.id == 24){ //store manager outgoing

                                $("#outgoing_tab").show();  //warehouse manager
                                $("#supplyitems").show();
                                $("#items_dashboard").show();
                                $("#unique_dashboard").show();
                                $("#low_dashboard").show();
                                $("#transactions_out_dashboard").show();
                                $("#expired_dashboard").show();
                                $("#outgoing_graph").show();
                                $("#invoicesreceipts").hide();
                                $("#report_tab").show();



                                var roles = localStorage.getItem("user_role");
                              var users = roles.split(',')

                              users.map((a) => {
                                if(a.includes('26')){
                                $("#outgoing_graph").hide();
                                }
                              })



                                
                            }

                            if(v.id == 3){//store manager incoming

                                $("#incoming_tab").show();
                                $("#itemsreceivedlist").show();
                                $("#items_dashboard").show();
                                $("#unique_dashboard").show();
                                $("#low_dashboard").show();
                                $("#transactions_in_dashboard").show();
                                $("#expired_dashboard").show();
                                $("#incoming_graph").show();
                                $("#receiveorders").hide();
                                $("#report_tab").show();




                                 var roles = localStorage.getItem("user_role");
                              var users = roles.split(',')

                              users.map((a) => {
                                if(a.includes('26')){
                                $("#incoming_graph").hide();
                                }
                              })


                            }


                            if(v.id == 0){//store manager incoming
                                $("#settings_tab").show();
                            }

                            var preference = localStorage.getItem('value')
                            console.log(preference);
                            if(preference == 'ro'){
                               $("#expense_dashboard").hide();
                                $("#creditors_dashboard").hide();
                                $("#revenue_dashboard").hide();
                                $("#debtors_dashboard").hide();
                            }
                            if(preference == 'ro' && v.id == 25){
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
                                $("#warehouse_value").show();
                                $("#transactions_activities").show();
                                $("#profit_loss_graph").show();
                                $("#expenses_revenue").hide();
                                $("#report_tab").show();


                                 var roles = localStorage.getItem("user_role");
                              var arr = ['2','3','4','24']
                              var users = roles.split(',')

                              users.map((a,i) => {
                                if(a.includes(arr[i])){
                                $("#outgoing_graph").hide();
                                $("#incoming_graph").hide();
                                }
                              })

                            }

                            if(preference == 'po'){
                                $("#qty_adjustment").show();
                            }

                            if(preference == 'po' && v.id == 25){
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


                                 var roles = localStorage.getItem("user_role");
                              var arr = ['2','3','4','24']
                              var users = roles.split(',')

                              users.map((a,i) => {
                                if(a.includes(arr[i])){
                                $("#outgoing_graph").hide();
                                $("#incoming_graph").hide();
                                }
                              })


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
                            if(v.id == 4){
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





                                var roles = localStorage.getItem("user_role");
                              var arr = ['2','4']
                              var users = roles.split(',')

                              users.map((a,i) => {
                                if(a.includes(arr[i])){
                                $("#expenses_revenue").show();
                                $("#expenses_graph").hide();
                                $("#revenue_graph").hide();
                                }
                              })




                            }
                            

                            // $("#report_tab").show();

                            k++;
                        });

                        

                        $("#does_user_have_profile").html('yes_profile');


                    } else if (response.status == '400') {

                        //
                        $("#does_user_have_profile").html('no_profile');

                    } else if (response.status == "401") {

                        $("#does_user_have_profile").html('no_profile');

                    }

                },

                error: function(response) {

                }

            });
        }

      function group_modules_users_can_access(){

        var user_id = localStorage.getItem('user_id');
        var company_id = localStorage.getItem('company_id');

        var pathArray = window.location.href.split('/');
        var username = pathArray[2].split('.')[0];

        $.ajax({
              
          type: "GET",
          dataType: "json",
          url: api_path+"user/group_modules_users_can_access",
          data: { "user_id" : user_id , "company_id" : company_id , "token" : localStorage.getItem('token') },
          timeout: 60000,

          success: function(response) {

            console.log(response.data);

            // $("#companies").append(`<option>${v.comp_name}<option>`);
                  // $( list_mds ).insertAfter( ".fst_dd" );
                  $("#feed_tg").attr("href", site_url+"/feeds");

            $('#user_name').html(localStorage.getItem('firstname')+' '+localStorage.getItem('lastname'));
            $('#hi_user_name').html(localStorage.getItem('firstname'));
            
              if (response.status == '200'){
                
                
                if(response.total_rows != 0){

                  var k = 1;
                  var list_mds = "";
                  var list_com = "";
                  var list_type = "";
               list_mds+=`<span><div class="col-md-3 first_" data-tooltip="Social"><div class="">
                               <li class="dd" >   <a style="position: relative;
                               right: 20%;" href="../social" class="get_comp_list" id="themodli_"  data="feeds"><span class="image"><img src="../files/images/icons/feeds_icon.png" alt=""></span>     <span>        <div class="abbrv" ><span class="hide_hover">Social</div></span></span>   </a></li></div></div></span>`;



                  // list_mds+=`<span><div class="col-md-3 first_" data-tooltip="Social"><div class="">
                  //              <li class="dd" >   <a style="position: relative;
                  //              right: 20%;" href="../social" class="get_comp_list" id="themodli_"  data="feeds"><span class="image"><img src="../files/images/icons/feeds_icon.png" alt=""></span>     <span>        <div class="abbrv" ><span class="hide_hover">Social</div></span></span>   </a></li></div></div></span>`;

                  $.each(response.data, function (i, v) {
                      localStorage.setItem('mod', `${v.module_id}`)
                       




                    if(v.access_count == 1){


                      // uzanam = response.data[i]['more_comp_list'][0].username;
                      // zaiturl = site_url;

                      // var remove_https = site_url.replace(/http:\/\//,'').replace(/https:\/\//,'');
                      // var link_lk = ' href="https://'+response.data[i]['more_comp_list'][0].username+'.'+remove_https+'/login/?mdl='+v.module_landing_page+'" ';


                      // var link_lk = ' href="'+site_url+'/'+v.module_landing_page+'" ';
                      // var set_coy_class = "set_coy";


                      console.log(v)

                      var link_lk = 'class="get_comp_list"';
                      var set_coy_class = "";

                    }else{

                      var link_lk = 'class="get_comp_list"';
                      var set_coy_class = "";

                    }

                    console.log(v.more_comp_list)

                    $.each(v.more_comp_list, function (i2, v2){
                      list_com += `<option value=${v2.id}>${v2.comp_name}</option>`;

                    //        $("#companies_fill").change(function () {

                    // var selected = $("#companies_fill option:selected").val();
                    // if(selected == `${v2.id}`){
                    //   list_type += `<option value=>${v2.landing_page}</option>`;


                    // }

                    // });
                         });
                      


                    // list_mds += '<div class="col-md-3 first_"> <li>   <a '+link_lk+' id="themodli_'+v.module_id+'"  dir="'+v.module_abbrv+"-"+v.company_id+"-"+v.company_name+'" class="'+set_coy_class+'" data="'+v.module_landing_page+'">   <span class="image"><img src="../files/images/icons/'+v.module_little_icon+'" alt=""></span>     <span>        <div class="abbrv"><b>'+v.module_abbrv+'</b></div> </span>       <div class="message">'+v.module_full_name+'</div>                      </a>          </li></div>';


                     list_mds += '<span><div class="col-md-3 first_"  style="font-size:10px" data-tooltip="'+v.module_full_name+'"> <div class="">  <li>   <a '+link_lk+' id="themodli_'+v.module_id+'" dir="'+v.module_abbrv+"-"+v.company_id+"-"+v.company_name+'"  class="'+set_coy_class+'" data="'+v.module_landing_page+'">   <span class="image"><img src="../files/images/icons/'+v.module_little_icon+'" alt=""></span>     <span>        <div class="abbrv" ><span class="hide_hover">'+v.module_abbrv+'</span></div> </span>       <div class="message"></div>                      </a>          </li></div></div></span>';

// +v.module_full_name+
                    // list_mds += '<span id="comp_todi_'+v.module_id+'" style="display: none">';
                    // $.each(v.more_comp_list, function (i2, v2){
                    //   list_mds += '<li class="" style="display:"><a class="set_coy"   dir="'+v.module_abbrv+"-"+v2.id+"-"+v2.landing_page+'" style="cursor: pointer" >'+v2.comp_name+'</a></li>';

                    // });
                    // list_mds += '</span>';


                    

                    k++;

                  });

                    $(".fst_dd").append(list_mds);
                    $(".fst_d").append('<li class="more"><div class="text-center"><a href="/user/myapps">Add More Apps <i class="fa fa-angle-right"></i></a></div></li>')
                      // $("#companies_fill").append(list_mds);

                    $("#companies_fill").append(list_com);
                       // $("#not").append(list_type);


                  // $( list_mds ).insertAfter( ".fst_dd" );
                  $("#feed_tg").attr("href", site_url+"/feeds");
                  
                }else{
                  $(".fst_dd").append('<li><div class="text-center"><a href="/user/myapps"><strong>Add More Apps </strong><i class="fa fa-angle-right"></i></a></div></li>');
                  
                  // alert("No sd");

                }

                // $('#whole_body').show();
                $("#whole_body").fadeIn();
                $(".right_col").css("min-height", $(window).height() - 51);
                $(".container33").hide();
                

              }
              // else{

              //   alert("You do not have access to this module");
              //   // $('#whole_body').html('<font color="black">You do not have access to this module</font>');

              // }
          
            },

            error: function(response){
              
            }        

        });
      }



      

      
       
      
    </script>
  </head>

  <body class="nav-md">


    <div class="container33">
      <div class="block33"></div>
      <div class="block33"></div>
      <div class="block33"></div>
      <div class="block33"></div>
      <div class="block33"></div>
      <div class="block33"></div>
      <div class="block33"></div>
      <div class="block33"></div>
      <div class="block33"></div>
      <div class="block33"></div>
      <div class="block33"></div>
      <div class="block33"></div>
      <div class="block33"></div>
      <div class="block33"></div>
      <div class="block33"></div>
      <div class="block33"></div>
    </div>

    <div id="page_error_div" style="color: white; font-size: 16px; display: none ">

    </div>



<div id="whole_body"  style="display: none;"> <!-- page beside loader section -->
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="./" class="site_title"><i class="fa fa-paw"></i> <span>Notifications</span></a>

                    </div>

                    <div class="clearfix"></div>

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">

                            <p id="wareh_name" class="text-center" style="color: #ccc;"></p>
                            <!-- <hr style="color: #ccc;"> -->
                            <ul class="nav side-menu" style="display: ;" id="main_menu">
                                <!-- <li style="color: #ccc;"> NahereLimited </li> -->
                                <li id="dshbd" style="display: ;"><a href="/warehouse/"><i class="fa fa-home"></i> Home </a>
                                </li>

                                <li id="procurement" style="display: none;"><a><i class="fa fa-home"></i> Procurement <span class="fa fa-chevron-down"></span> </a>

                                    <ul class="nav child_menu">
                                      <li id="purchaseorders" style="display: none;"><a href="purchaseorders">Purchase Orders</a></li>
                                      <li id="paystovendors" style="display: none;"><a href="paystovendors">Payments to Vendors</a></li>
                                      
                                    </ul>

                                </li>

                                <li id="incoming_tab" style="display: none;"><a><i class="fa fa-cart-arrow-down"></i> Incoming <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">

                                        <li id="receiveorders" style="display: none;"><a href="po_test">Receive Orders</a></li>
                                        <li id="itemsreceivedlist" style="display: none;"><a href="receivepoitems">Items Received</a></li>

                                    </ul>
                                </li>

                                <li id="outgoing_tab" style="display: none;"><a><i class="fa fa-arrow-up"></i> Outgoing  <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                      <!-- <li><a href="salesquotes">Sales Quotes</a></li> -->
                                      <li id="invoicesreceipts" style="display: none;"><a href="invoicesreceipts">Issue Orders</a></li>
                                      
                                      <li id="supplyitems"  style="display: none;" ><a href="supplyitems">Items Issued</a></li>
                                    </ul>
                                </li>

                                <!-- <li id="po_tab" style="display: none;"><a href="po"><i class="fa fa-money"></i> Purchase Orders </a>
                                </li>
                                <li id="incoming_tab" style="display: none;"><a href="receive_items"><i class="fa fa-cart-arrow-down"></i> Incoming </a>
                                </li> -->

                                <!-- <li id="invoice_tab" style="display: none;"><a href="outgoing_by_batch"><i class="fa fa-file-text-o"></i> Invoices </a>
                                </li>

                                <li id="outgoing_tab" style="display: none;"><a href="release_items"><i class="fa fa-arrow-up"></i> Outgoing </a>
                                </li> -->

                                <li id="sales_tab" style="display: none;"><a><i class="fa fa-money"></i> Sales  <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                      <!-- <li><a href="salesquotes">Sales Quotes</a></li> -->
                                      <li id="invoicesreceipts333" ><a href="invoicesandreceipts">Invoice/Receipt</a></li>
                                      <li id="paysfromclients_2"><a href="paysfromclients">Payments from Clients</a></li>
                                      
                                    </ul>
                                </li>

                                <li id="qty_adjustment" style="display: none;"><a><i class="fa fa-sliders"></i> Quantity Adjustment  <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li id="upward_adjustment"><a href="upward_adjustment">Add</a></li>
                                        <li id="downward_adjustment"><a href="downward_adjustment">Remove</a></li>
                                        <li id="qty_adj_history"><a href="qty_adj_history">History</a></li>
                                        <!-- <li id="transfer"><a href="transfer">Transfer</a>
                                        </li>
                                        <li id="transfer_history"><a href="transfer_history">Transfer History</a>
                                        </li> -->
                                    </ul>
                                </li>

                                
                                  <li id="transfer" style="display: "><a><i class="fa fa-sliders"></i>Transfer Items<span class="fa fa-chevron-down"></span></a>
                                     <ul class="nav child_menu">
                                      <li id="transfer" style="display: "><a href="transfer">Transfer</a>
                                        <li id="transfer_history"><a href="transfer_history">Transfer History</a>
                                        </li>
                                    </ul>


                                  </li>
                                    <!-- <ul class="nav child_menu">
                                        <li id="upward_adjustment"><a href="upward_adjustment">Add</a></li>
                                        <li id="downward_adjustment"><a href="downward_adjustment">Remove</a></li>
                                        <li id="qty_adj_history"><a href="qty_adj_history">History</a></li>
                                        
                                        <li id="transfer_history"><a href="transfer_history">Transfer History</a>
                                        </li>
                                    </ul> -->
                                </li>


                                

                                <!-- <li id="warehouses" style="display: none;"><a href="warehouses"><i class="fa fa-arrow-up"></i> Warehouses </a>  -->
                                <!-- </li> -->

                                

                                <li id="items" style="display: none;"><a href="items"><i class="fa fa-shopping-basket"></i> Items List </a>
                                </li>

                                <li id="contacts" style="display: none;"><a href="contacts"><i class="fa fa-users"></i> Contacts </a>
                                </li>

                                <li id="settings_tab" style="display: none;"><a><i class="fa fa-gear"></i> Settings <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="warehouses">Warehouses</a></li>
                                        <li><a href="unit_type">Unit Type</a></li>
                                        <li><a href="users">Users</a></li>
                                        <li><a href="preferences">Prefrences</a>
                                        </li>


                                        <!-- <li><a href="bizprofile">Business Profile</a></li> -->
                                        <li style="display: none" ><a href="whsections"id="whsections">Warehouse Sections</a></li>

                                    </ul>
                                </li>

                               
                              <!--   <li id="procurement_report" style="display: none;"><a><i class="fa fa-file"></i> Reports <span class="fa fa-chevron-down"></span> </a>

                                    <ul class="nav child_menu">
                                      <li id="vendors" style="display: none;"><a href="vendors_report">Vendors</a></li>
                                      <li id="expenses" style="display: none;"><a href="expenses_report">Expenses</a></li>
                                    </ul>

                                </li> -->

                                <li id="report_tab" style="display: none;"><a href="reports"><i class="fa fa-bar-chart"></i> Reports </a>
                                </li>

                                <li id="switch_tab" style="display: none;"><a id="switch"><i class="fa fa-refresh"></i> Switch Warehouse</a>
                                </li>

                                <!-- <li id="switch_ooo"></li> -->

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
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
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
            <!--   <span style="font-size:35px;cursor:pointer; color: black" 
            onclick="openNav()"> 
        ≡ 
    </span> -->

        <div id="myNav" class="overlay" style="z-index: 10"> 
        <a href="javascript:void(0)" 
        class="closebtn" onclick="closeNav()" style="color: #09B1F0; font-size: 40px"> 
            × 
        </a> 
        <a href="javascript:void(0)"
            class="logo" onclick="closeNav()" style="font-size: 16px"> 
            <img src="../nahere_logo_blue.png" alt="alternative" style="width: 28px">
                 <span>    NaHere!</span>  
        </a>
        <div>
        </div>

        <div class="container" >
          <h2 class="app" >Applications</h2>
          <!-- <h4 style="text-align: center; color: black;">Connected applications </h4> -->
              <a href="/user/myapps" style="text-align: center; font-weight: 0px; font-size: 14px;">Add More Apps <i class="fa fa-angle-right"></i></a>
          <div class="row fst_dd" style="margin-top: 3%;">
              
            </div>
            <!-- <div class="row" align="center" >
              <div class="col-md-12" style="position: absolute; bottom: 0;">
              <a href="/user/myapps">Add More Apps<i class="fa fa-angle-right"></i></a>
              </div>
        </div> -->
        </div>
          <!-- <div class="container" style="position: relative;top: 20%">
            
          
        </div> -->
        <!-- <div class="container">
              <a href="/user/myapps">Add More Apps<i class="fa fa-angle-right"></i></a>
        </div> -->
        <!--  <div class="container" style="margin-left: 60px; display: flex; justify-content: center;align-items:center; position: absolute; bottom: 5%;">
              <a href="/user/myapps">Add More Apps<i class="fa fa-angle-right"></i></a>
        </div>
         <div class="container" style="margin-left: 60px; display: flex; justify-content: center;align-items:center; position: absolute; bottom: 5%;">
              <a href="/user/myapps">Add More Apps<i class="fa fa-angle-right"></i></a>
        </div> -->
        <div class="container" style="">
            <div class="col-md-12">
              <li>
              <!-- <a href="/user/myapps">Add More Apps<i class="fa fa-angle-right"></i></a> -->
            </li>
          </div>
        </div> 
    </div>


                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false" onclick="openNav()">
                    <i class="fa fa-th fa-3x" ></i>

                    <!-- <span class="badge bg-green">0</span> -->
                  </a>
                  <!-- <ul id="menu1" class="dropdown-menu list-unstyled msg_list fst_dd" role="menu"> -->
                    <!-- <li class="">
                      <a href="https://me.employee.ng/social">
                        <span class="image"><img src="assets/admin_template/production/images/img.jpg" alt=""></span>
                        <span>
                          <span><b>Feeds</b></span>
                          
                        </span>
                        <span class="message">
                          Notifications Feeds
                        </span>
                      </a>
                    </li> -->
                    
                    <!-- <li>
                      <div class="text-center">
                        <a>
                          <strong>Add More Apps</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li> -->
      

                  
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












        <!-- modal for apps company question -->
        <div class="modal fade" id="modal_choose_company" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header ">
                <h3 class="modal-title mdl_hdn" id="exampleModalLabel" style="color: #fff;">-
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </h3>
                
              </div>
              <div class="modal-body">
                <h4 id="list_comp_tables"></h4>
                <span id="list_comp_tables2"></span>
              </div>
              <!-- <div class="modal-footer"> -->
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
              <!-- </div> -->
            </div>
          </div>
        </div>