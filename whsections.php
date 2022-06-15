<?php
include_once("_common/menu.php"); // menu list
// include_once("_common/section_header.php"); // menu list

include_once("../gen/_common/header.php"); // header contents
include_once("assets/wms.php"); // header contents
?>


  <script src="assets/js/echarts.js?v=883"></script>
 <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="./css/style.css">
    <style type="text/css">
      :root {
            --cd-color-1: #2A3F54 !important;
            --shadow-lg: 0 4px 8px rgba(0,0,0,0.19);
          }
      .actions{
    position: absolute;
    right: 0%;
      }
      .cd-accordion__item{
        /*border-radius: 10px !important;*/
        border-bottom: 1px solid white !important;
      }
      .max-width-sm {
    /*max-width: 48rem;*/
    max-width: 1000px;
    }
      a, .link {
      text-decoration: none !important;
}
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


/*@keyframes click-wave {
  0% {
    height: 30px;
    width: 30px;
    opacity: 0.35;
    position: relative;
  }
  100% {
    height: 100px;
    width: 100px;
    margin-left: -80px;
    margin-top: -80px;
    opacity: 0;
  }
}

.option-input {
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
  height: 30px;
  width: 30px;
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
.option-input:hover {
  background: #9faab7;
}
.option-input:checked {
  background: #2A3F54;
}
.option-input:checked::before {
  height: 30px;
  width: 30px;
  position: absolute;
  content: '✔';
  display: inline-block;
  font-size: 26.66667px;
  text-align: center;
  line-height: 30px;
}
.option-input:checked::after {
  -webkit-animation: click-wave 0.65s;
  -moz-animation: click-wave 0.65s;
  animation: click-wave 0.65s;
  background: #40e0d0;
  content: '';
  display: block;
  position: relative;
  z-index: 100;
}
.option-input.radio {
  border-radius: 50%;
}
.option-input.radio::after {
  border-radius: 50%;
}*/
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
            -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
            -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
            box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
        }
        
        .tt-suggestion.tt-cursor {
            color: #fff;
            background-color: #0097cf;
        }
        
        .tt-suggestion p {
            margin: 0;
        }
        
        .background {
            background-color: #fff;
        }
        
        .has-error {
            background-color: #f7cdcd;
        }
        
        .modal-header {
            padding: 9px 15px;
            border-bottom: 1px solid #eee;
            background-color: #0480be;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        
        .green {
            color: green;
        }
        
        .gray {
            color: gray;
        }

        #page_error_div {
          width: 50%;
          height: 100px;
          margin: 100px auto;
          margin-top: calc(100vh / 2 - 50px);
          text-align: center;
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




        /*for sections*/
        div#navbar_div ul {
          padding: 0;
          margin: 0;
          list-style-type: none;
          position: relative;
        }
        div#navbar_div li {
          list-style-type: none;
          border-left: 2px solid #000;
          margin-left: 1em;
        }
        div#navbar_div li div {
          padding-left: 1em;
          position: relative;
        }
        div#navbar_div li div::before {
          content:'';
          position: absolute;
          top: 0;
          left: -2px;
          bottom: 50%;
          width: 0.75em;
          border: 2px solid #000;
          border-top: 0 none transparent;
          border-right: 0 none transparent;
        }
        div#navbar_div ul > li:last-child {
          border-left: 2px solid transparent;
        }
        /*end of for sections*/



        .costing_cnc {
          display: none;
        }
        /*.open{
          display: none;
        }*/
        .img_style{
          width: 70px;
          height: 70px;
          border-radius: 50%;
          border:4px solid white;

        }
        .user-post-profile{
          margin-right: -100px;
          /*box-shadow: rgba(0,0,0,0.19);*/
        }




    </style>

    <!-- jQuery -->
    <!-- remember: move to footer -->
    <!-- jQuery -->
    <script src="assets/admin_template/vendors/jquery/dist/jquery.min.js?v=1.1"></script>
    <!-- Bootstrap -->
    <script src="assets/js/common.js?v=1.4"></script>
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
<!-- 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script> -->

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
                        <h2 id="msd_yu"><strong>Access Denied</strong><br>You do not have permission to access this page
                        </h2>
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
                <h3>Warehouse Section</h3>
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
                        <!-- <button type="button" class="btn btn-success" id="add_warehouse">Add Warehouse</button> -->


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

                        <!-- <div id="tree"></div> -->
                        <div id="jstree">
                            <!-- in this example the tree is populated from inline HTML -->
                            <ul id="the_list_di" style="display: none">



                            </ul>
                        </div>
                        <!-- <div id="tree">
          
              </div> -->

                        <section class="container max-width-sm" style="background-color: white !important">
                            <div class="text-component text-center" style="background-color: white !important">
                                <h1>SECTION TREE</h1>
                                <div id="warehouse_name_hlda"></div><br>

                            </div>

                            <ul class="cd-accordion cd-accordion--animated margin-top-lg margin-bottom-lg"
                                style="background-color: white !important">
                                <!-- <li class="cd-accordion__item cd-accordion__item--has-children">
      <input class="cd-accordion__input" type="checkbox" name ="group-1" id="group-1">
      <label class="cd-accordion__label cd-accordion__label--icon-folder" for="group-1"><span>Group 1</span></label>

      <ul class="cd-accordion__sub cd-accordion__sub--l1">
        <li class="cd-accordion__item cd-accordion__item--has-children">
          <input class="cd-accordion__input" type="checkbox" name ="sub-group-1" id="sub-group-1">
          <label class="cd-accordion__label cd-accordion__label--icon-folder" for="sub-group-1"><span>Sub Group 1</span></label>

          <ul class="cd-accordion__sub cd-accordion__sub--l2">
            <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
            <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
            <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
          </ul>
        </li>
        
        <li class="cd-accordion__item cd-accordion__item--has-children">
          <input class="cd-accordion__input" type="checkbox" name ="sub-group-2" id="sub-group-2">
          <label class="cd-accordion__label cd-accordion__label--icon-folder" for="sub-group-2"><span>Sub Group 2</span></label>

          <ul class="cd-accordion__sub cd-accordion__sub--l2">
            <li class="cd-accordion__item cd-accordion__item--has-children">
              <input class="cd-accordion__input" type="checkbox" name ="sub-group-level-3" id="sub-group-level-3">
              <label class="cd-accordion__label cd-accordion__label--icon-folder" for="sub-group-level-3"><span>Sub Group Level 3</span></label>

              <ul class="cd-accordion__sub cd-accordion__sub--l3">
                <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
                <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
              </ul>
            </li>
            <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
          </ul>
        </li>
        <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
        <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
      </ul>
    </li>

    <li class="cd-accordion__item cd-accordion__item--has-children">
      <input class="cd-accordion__input" type="checkbox" name ="group-2" id="group-2">
      <label class="cd-accordion__label cd-accordion__label--icon-folder" for="group-2"><span>Group 2</span></label>

      <ul class="cd-accordion__sub cd-accordion__sub--l1">
        <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
        <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
      </ul>
    </li>

    <li class="cd-accordion__item cd-accordion__item--has-children">
      <input class="cd-accordion__input" type="checkbox" name ="group-3" id="group-3">
      <label class="cd-accordion__label cd-accordion__label--icon-folder" for="group-3"><span>Group 3</span></label>

      <ul class="cd-accordion__sub cd-accordion__sub--l1">
        <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
        <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
      </ul>
    </li>

    <li class="cd-accordion__item cd-accordion__item--has-children">
      <input class="cd-accordion__input" type="checkbox" name ="group-4" id="group-4">
      <label class="cd-accordion__label cd-accordion__label--icon-folder" for="group-4"><span>Group 4</span></label>

      <ul class="cd-accordion__sub cd-accordion__sub--l1">
        <li class="cd-accordion__item cd-accordion__item--has-children">
          <input class="cd-accordion__input" type="checkbox" name ="sub-group-3" id="sub-group-3">
          <label class="cd-accordion__label cd-accordion__label--icon-folder" for="sub-group-3"><span>Sub Group 3</span></label>

          <ul class="cd-accordion__sub cd-accordion__sub--l2">
            <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
            <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
          </ul>
        </li>
        <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
        <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
      </ul>
    </li> -->
                            </ul>
                        </section>


                        <div class="table-responsive" id="navbar_div">
                            <!-- <div id="warehouse_name_hlda"></div><br> -->
                            <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;" id="whsec_loader"></i>
                            <ul id="the_list_div" style="display: none">


                                <!-- <li><div><b>A</b></div>
                          <ul>
                            <li><div>A1</div></li>
                            <li><div>A2</div>
                              <ul>
                                <li><div>A21</div></li>
                                <li><div>A22</div></li>
                                <li><div style="color: #c99f7d">+add</div></li>
                              </ul>
                            </li>
                            <li><div style="color: #c99f7d"><u>+add</u></div></li>
                          </ul>
                        </li>
                        <li><div>B</div>
                          <ul>
                            <li><div>Level 2</div></li>
                            <li><div>Level 2</div>
                              <ul>
                                <li><div>Level 3</div></li>
                                <li><div>Level 3</div></li>
                              </ul>
                            </li>
                            <li><div style="color: #c99f7d"><u>+add</u></div>
                          </ul>
                        </li>
                        <li><div>C</div></li>
                        <li><div><a class="add_section" dir="the_parent" style="color: #c99f7d"><u>+add</u></a></div></li> -->

                            </ul>



                            <!-- <div id="jstree_demo_div"></div>

                      <div class="row">
                          <div class="container">

                              <input type="hidden" name="node" id="node" value="" />

                              <div class="form-group">
                                  <div id="tree-container"></div>
                              </div>
                          </div>
                      </div> -->



                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->


<!-- modal -->
<div class="modal fade" id="modal_warehouse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
                <h4>Warehouse Added Successfully!</h4>
            </div>
            <!-- <div class="modal-footer"> -->
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            <!-- </div> -->
        </div>
    </div>
</div>





<div class="modal fade" id="modal_warehouse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
                <h4>Warehouse Added Successfully!</h4>
            </div>
            <!-- <div class="modal-footer"> -->
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            <!-- </div> -->
        </div>
    </div>
</div>



<!-- modal -->
<div class="modal fade" id="modal_create_sub_section" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;">Create Sub Section
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">


                <div id="container4">

                    <div class="row">



                        <span id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="add_parent_name">Parent<span>*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="sub_parent_name_dv"
                                        class="form-control col-md-7 col-xs-12 required" disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="add_warehouse_name">Section Name<span>*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="sub_section_name"
                                        class="form-control col-md-7 col-xs-12 required">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="add_warehouse_address">Section Description<span>*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea cols="3" class="form-control col-md-7 col-xs-12 required"
                                        id="sub_section_description"></textarea>
                                </div>
                            </div>


                            <input type="hidden" id="parent_sub_section_hd" value="">



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
                                    <button type="button" class="btn btn-success"
                                        id="submit_add_sub_section">Create</button>
                                    <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;"
                                        id="create_sub_section_loader"></i>
                                </div>
                            </div>

                        </span>



                    </div>


                </div>

            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div> -->
        </div>
    </div>
</div>





<!-- modal -->
<div class="modal fade" id="modal_create_section" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;">Create Section
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">


                <div id="container4">

                    <div class="row">



                        <span id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="add_parent_name">Parent<span>*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="parent_name_dv"
                                        class="form-control col-md-7 col-xs-12 required" disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="add_warehouse_name">Section Name<span>*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="section_name"
                                        class="form-control col-md-7 col-xs-12 required">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="add_warehouse_address">Section Description<span>*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea cols="3" class="form-control col-md-7 col-xs-12 required"
                                        id="section_description"></textarea>
                                </div>
                            </div>


                            <input type="hidden" id="parent_section_hd" value="">



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
                                    <button type="button" class="btn btn-success"
                                        id="submit_add_section">Create</button>
                                    <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;"
                                        id="create_section_loader"></i>
                                </div>
                            </div>

                        </span>



                    </div>


                </div>

            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div> -->
        </div>
    </div>
</div>

<!-- modal -->
<div class="modal fade" id="modal_edit_section" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;">Edit Section
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">


                <div id="container4">

                    <div class="row">



                        <span id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">



                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="add_warehouse_name">Section Name<span>*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="sect_name" class="form-control col-md-7 col-xs-12 required">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="add_warehouse_description">Section Description <span>*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="sect_description"
                                        class="form-control col-md-7 col-xs-12 required">
                                </div>
                            </div>

                            <input type="hidden" id="parent_section_hd" value="">



                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12 text-danger" id="error">

                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" id="form_footer">
                                    <button type="button" class="btn btn-success" id="submit_edit_sect">Edit</button>
                                    <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;"
                                        id="create_edit_loader"></i>
                                </div>
                            </div>



                        </span>
                        <div id="edit_msg" style="display: none;">
                            <h4>Section Updated Successfully!</h4>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary ok_refresh" data-dismiss="modal"
                                    onclick="location.reload(true)">Ok</button>
                            </div>
                        </div>


                    </div>


                </div>

            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                <button type="button" class="btn btn-primary">Save changes</button>
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
$(document).ready(function() {

    // var myData = [{
    //         text: "Node 1",
    //         icon: "fa fa-folder",
    //         nodes: [{
    //                 text: "Node 1-1",
    //                 icon: "fa fa-folder",
    //                 nodes: [{
    //                         text: "Node 1-1-1",
    //                         icon: "fa fa-file",
    //                         class: "custom-class",
    //                         href: "#"
    //                     },
    //                     {
    //                         text: "Node 1-1-2",
    //                         icon: "fa fa-folder"
    //                     }
    //                 ]
    //             },
    //             {
    //                 text: "Node 1-2",
    //                 icon: "fa fa-folder"
    //             }
    //         ]
    //     },
    //     {
    //         text: "Node 2",
    //         icon: "fa fa-folder"
    //     },
    //     {
    //         text: "Node 3",
    //         icon: "fa fa-folder"
    //     }
    // ];
    // $('#tree').bstreeview({
    //     data: JSON.stringify(myData)
    // });

    // $('#tree').bstreeview({
    //     expandIcon: 'fa fa-angle-down',
    //     collapseIcon: 'fa fa-angle-right'
    // });

    // $('#tree').bstreeview({
    //     indent: 2
    // });



    $('#submit_edit_sect').show();

    $(document).on('click', '#submit_edit_sect', function() {
        $('#submit_edit_sect').hide();
        $('#create_edit_loader').show();

        edit_button();
    });

    // $(document).on('click', '#submit_edit_sect', function(){
    //   $('#modal_edit_section').modal('hide'); 
    //   });




    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const id = urlParams.get('i');

    if (id == "") {

        $("#main_display").hide();
        $("#msd_yu").html('Invalid Page Request. Warehouse not selected.');
        $("#page_div").show();



    } else {



        var company_id = localStorage.getItem('company_id');

        $.ajax({

            type: "POST",
            dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

            cache: false,
            url: api_path + "wms/get_warehouse_details",
            data: {
                "warehouse_id": id,
                "company_id": company_id
            },

            success: function(response) {

                console.log(response);

                if (response.status == '200') {

                    $("#warehouse_name_hlda").html(response.data.warehouse_name);

                    does_user_have_access_to_page();

                } else {

                    $("#main_display").hide();
                    $("#page_div").show();

                }

            },

            error: function(response) {
                $("#main_display").hide();
                $("#page_div").show();
            }

        });

    }



    $("#submit_add_section").on('click', submit_add_section);
    $(document).on('click', '.add_section', function() {
        var section_s_parent = $(this).attr("dir");
        add_section(section_s_parent);

    });

    $("#submit_add_sub_section").on('click', submit_add_sub_section);
    $(document).on('click', '.add_sub_section', function() {
        var section_s_parent = $(this).attr("dir");
        add_sub_section(section_s_parent);

    });

    $(document).on('click', '.remove_secion', function() {

        var section_id = $(this).attr("id").replace(/remove_section_/, '');

    });


    // $("#warehouse_name_hlda").html(localStorage.getItem('warehouse_name'));

    // use_tree_plugin();
});




function does_user_have_access_to_page() {

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
            "company_id": localStorage.getItem('company_id'),
            "warehouse_id": "not_needed",
            "module_id": module_id,
            "profile_id": profile_id
        },

        success: function(response) {

            console.log(response);

            if (response.status == '200') {

                $("#main_display").show();
                // user_page_access();
                fetch_list_of_sections();

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


function use_tree_plugin() {

    var company_id = localStorage.getItem('company_id');
    var warehouse_id = localStorage.getItem('warehouse_id');

    //setting to hidden field
    //fill data to tree  with AJAX call
    // 6 create an instance when the DOM is ready
    // $('#jstree').jstree();
    //  // 7 bind to events triggered on the tree
    //  $('#jstree').on("changed.jstree", function (e, data) {
    //      var i, j, r = [];
    //                // var state = false;
    //                for(i = 0, j = data.selected.length; i < j; i++) {
    //                    r.push(data.instance.get_node(data.selected[i]).id);
    //                }
    //                $('#txttuser').val(r.join(','));
    //  });
    $('#jstree').jstree({
        'core': {
            'data': [
                'Simple root node',
                {
                    'text': 'Root node 2',
                    'state': {
                        'opened': true,
                        'selected': true
                    },
                    'children': [{
                            'text': 'Child 1'
                        },
                        'Child 2'
                    ]
                }
            ]
        }
    });
    $('#tree-container').on('changed.jstree', function(e, data) {
        var i, j, r = [];
        // var state = false;
        for (i = 0, j = data.selected.length; i < j; i++) {
            r.push(data.instance.get_node(data.selected[i]).id);
        }
        $('#txttuser').val(r.join(','));
    }).jstree({
        'plugins': ["wholerow", "checkbox"],
        'core': {
            "multiple": true,
            "animation": 0,
            "check_callback": true,
            "themes": {
                "stripes": false
            },
            'data': {
                "url": api_path + "wms/my_sections",
                "dataType": "json", // needed only if you do not supply JSON headers
                "data": {
                    "company_id": company_id,
                    "warehouse_id": warehouse_id,
                    "parent_id": 0
                }
            }
        },
        // 'checkbox': {
        //     three_state: false,
        //     cascade: 'up'
        // },
        // 'plugins': ["checkbox"]
    })

}

function add_sub_section(parent_id) {

    // $("#modal_view_warehouse #name").html( response.data.warehouse_name); 
    // $("#modal_view_warehouse #address").html( response.data.warehouse_address);
    $('#modal_create_section').modal('hide');

    $('#modal_create_sub_section').modal('show');
    $("#parent_sub_section_hd").val(parent_id);
    console.log($("#sub_sec_" + parent_id).val())
    $("#sub_parent_name_dv").val($("#sub_sec_" + parent_id).val());

}

function add_section(parent_id) {

    // $("#modal_view_warehouse #name").html( response.data.warehouse_name); 
    // $("#modal_view_warehouse #address").html( response.data.warehouse_address);
    $('#modal_create_section').modal('show');
    $("#parent_section_hd").val(parent_id);
    if (parent_id == 0) {
        $("#parent_name_dv").val('No Parent');
    } else {
        console.log($("input#section_line_" + parent_id).val())

        // $("#parent_name_dv").val($("#section_line_"+parent_id).html());
        $("#parent_name_dv").val($("input#section_line_" + parent_id).val());

    }

}

function submit_add_section() {

    var blank;
    $("#modal_create_section .required").each(function() {

        var the_val = $.trim($(this).val());

        if (the_val == "" || the_val == "0") {

            $(this).addClass('has-error');

            blank = "yes";

        } else {

            $(this).removeClass("has-error");

        }

    });

    if (blank == "yes") {
        $("#modal_create_section #error").html("You have a blank field");
        return;
    } else {
        $("#modal_create_section #error").html("");

    }

    $("#create_section_loader").show();
    $("#submit_add_section").hide();

    var section_name = $.trim($("#section_name").val());
    var section_description = $.trim($("#section_description").val());
    var section_parent = $("#parent_section_hd").val();

    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const id = urlParams.get('i');

    $.ajax({

        type: "POST",
        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/create_section", //list_warehouse_sections_2
        data: {
            "section_name": section_name,
            "section_description": section_description,
            "warehouse_id": id,
            "parent_id": section_parent,
            "company_id": localStorage.getItem('company_id')
        },
        timeout: 60000,

        success: function(response) {

            console.log(response);

            if (response.status == '200') {

                alert("successfully added");
                window.location.href = "";

            } else {
                alert("Error creating section");
                $("#create_section_loader").hide();
                $("#submit_add_section").show();
            }
        },

        error: function(response) {

            console.log(response);
            $("#create_section_loader").hide();
            $("#submit_add_section").show();

        }

    });


}


function submit_add_sub_section() {

    var blank;
    $("#modal_create_sub_section .required").each(function() {

        var the_val = $.trim($(this).val());

        if (the_val == "" || the_val == "0") {

            $(this).addClass('has-error');

            blank = "yes";

        } else {

            $(this).removeClass("has-error");

        }

    });

    if (blank == "yes") {
        $("#modal_create_sub_section #error").html("You have a blank field");
        return;
    } else {
        $("#modal_create_sub_section #error").html("");

    }

    $("#create_sub_section_loader").show();
    $("#submit_add_sub_section").hide();

    var section_name = $.trim($("#sub_section_name").val());
    var section_description = $.trim($("#sub_section_description").val());
    var section_parent = $("#parent_sub_section_hd").val();

    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const id = urlParams.get('i');

    $.ajax({

        type: "POST",
        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/create_section", //list_warehouse_sections_2
        data: {
            "section_name": section_name,
            "section_description": section_description,
            "warehouse_id": id,
            "parent_id": section_parent,
            "company_id": localStorage.getItem('company_id')
        },
        timeout: 60000,

        success: function(response) {

            console.log(response);

            if (response.status == '200') {

                alert("successfully added");
                window.location.href = "";

            } else {
                alert("Error creating section");
                $("#create_sub_section_loader").hide();
                $("#submit_add_sub_section").show();
            }
        },

        error: function(response) {

            console.log(response);
            $("#create_sub_section_loader").hide();
            $("#submit_add_sub_section").show();

        }

    });

}

function check_for_sub_sub(data) {
    var dat = data
    console.log(dat)
    var num = [];

    for (var i = 0; i < 10; i++) {
        num.push(i);
    }

    $(dat).each(function(i, v) {
        console.log(v);
        console.log(v.children)
        var chks = v.children;
        // console.log("#the_sub_"+v.id)
        var nam = v.children;
        // console.log(nam.children)
        if (v.children.length > 0) {
            $(nam).each(function(i, v) {
                console.log(v.children)
                var uid = v.id;
                var sub_sub = v.children;
                if (sub_sub.length > 0) {
                    $(sub_sub).each(function(i, v) {
                        console.log(uid);
                        console.log(v.section_name)

                        // $("#sub_sec_"+uid).append(`<li><div id="sub_sec_${v.id}" class="sub_sub_sec"> ${v.section_name}<span class="edit_warehouse_icon btn btn-info btn-xs" style="cursor: pointer; margin-left:20px" onclick="edit_sec(${v.id},'${v.section_name}','${v.section_description}')"><i id="edit_butt" class="fa fa-pencil"  data-toggle="tooltip" data-placement="top" title="Edit Section" ></i></span><span class="delete_warehouse btn btn-danger btn-xs" style="cursor: pointer;" onclick="del_sec(${v.id})"><i  class="fa fa-trash-o"   data-toggle="tooltip" data-placement="top" title="Delete Section" ></i></span> </div<u id="the_sub_sub_${v.uid}"></u></li>`);




                        $("#the_sub_sub_" + uid).append(
                            `<li class="cd-accordion__item cd-accordion__item--has-children"><input id="sub_sec_${v.id}" class="sub_sec cd-accordion__input" value=${v.section_name}  name="sub_sec_${v.id}" dir="${v.id}" lang="${i}" type="checkbox"><label class="cd-accordion__label cd-accordion__label--icon-folder" for="sub_sec_${v.id}"><span>${v.section_name}</span> <span class="actions"><span class="edit_warehouse_icon btn btn-info btn-xs" style="cursor: pointer; margin-left:20px" onclick="edit_sec(${v.id},'${v.section_name}','${v.section_description}')"><i id="edit_butt" class="fa fa-pencil"  data-toggle="tooltip" data-placement="top" title="Edit Section" ></i></span><span class="delete_warehouse btn btn-danger btn-xs" style="cursor: pointer;" onclick="del_sec(${v.id})"><i  class="fa fa-trash-o"   data-toggle="tooltip" data-placement="top" title="Delete Section" ></i></span></span></label><ul id="the_sub_sub_${v.id}" class="cd-accordion__sub cd-accordion__sub--l4"></ul></li>`
                            );

                    })
                    $("#the_sub_sub_" + uid).append(
                        `<li><div><a class="add_sub_section cd-accordion__label cd-accordion__label--icon-folder" dir="${v.id}"><ul>+add</ul></a></div></li>`
                        );
                } else {
                    $("#the_sub_sub_" + uid).append(
                        `<li><div><a class="add_sub_section cd-accordion__label cd-accordion__label--icon-folder" dir="${v.id}"><ul>+add</ul></a></div></li>`
                        );
                }



            })
        }
    });
    console.log(dat)
    for (var i = 0; i < dat.length; i++) {
        console.log(dat.length)
        console.log(dat[i])
    }
    var a = [];
    for (var i = 0; i < dat.length; i++) {
        console.log(dat[1])

        check_for_sub_sub(dat[i].children)

    }



    return;
}



function check_for_sub(data) {
    // console.log(data);
    var dat = data
    console.log(dat)

    // $(".sub_sec").each(function(){
    // console.log(data['children'])

    // var id = $(this).attr("id").replace(/sub_sec_/,'');
    // var sector_key = $(this).attr("lang");
    // var size_of_kids = data.length;
    // var chk =(data[sector_key]['children']['children'])
    // console.log(data[sector_key]['children']['children'])

    // console.log(data[sector_key]['children'][i]['id'])

    $(dat).each(function(i, v) {
        console.log(v);
        console.log(v.children)
        var chks = v.children;
        // console.log("#the_sub_"+v.id)
        var nam = v.children;
        // console.log(nam.children)
        if (v.children.length > 0) {
            $(nam).each(function(i, v) {
                console.log(v.children)
                var uid = v.id;
                var sub_sub = v.children;
                if (sub_sub.length > 0) {
                    $(sub_sub).each(function(i, v) {
                        console.log(uid);
                        console.log(v.section_name)

                        // $("#sub_sec_"+uid).append(`<li><div id="sub_sec_${v.id}" class="sub_sub_sec"> ${v.section_name}<span class="edit_warehouse_icon btn btn-info btn-xs" style="cursor: pointer; margin-left:20px" onclick="edit_sec(${v.id},'${v.section_name}','${v.section_description}')"><i id="edit_butt" class="fa fa-pencil"  data-toggle="tooltip" data-placement="top" title="Edit Section" ></i></span><span class="delete_warehouse btn btn-danger btn-xs" style="cursor: pointer;" onclick="del_sec(${v.id})"><i  class="fa fa-trash-o"   data-toggle="tooltip" data-placement="top" title="Delete Section" ></i></span> </div><u id="the_sub_sub_${v.uid}"></u></li>`);




                        //   <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
                        //   <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
                        //   <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
                        // </ul>
                        // id="the_sub_${v.uid}"
                        // <li class="cd-accordion__item cd-accordion__item--has-children"><input class=" cd-accordion__input sub_sec" name="sub_sec_${v.id}" lang="${i}"  type="checkbox"><label class="cd-accordion__label cd-accordion__label--icon-folder" for="sub_sec_${v.id}"><span>${v.section_name}</span> <span class="edit_warehouse_icon btn btn-info btn-xs" style="cursor: pointer; margin-left:20px" onclick="edit_sec(${v.id},'${v.section_name}','${v.section_description}')"><i id="edit_butt" class="fa fa-pencil"  data-toggle="tooltip" data-placement="top" title="Edit Section" ></i></span><span class="delete_warehouse btn btn-danger btn-xs" style="cursor: pointer;" onclick="del_sec(${v.id})"><i  class="fa fa-trash-o"   data-toggle="tooltip" data-placement="top" title="Delete Section" ></i></span></label>

                        $("#the_sub_" + uid).append(
                            `<li class="cd-accordion__item cd-accordion__item--has-children"><input id="sub_sec_${v.id}" class="sub_sec cd-accordion__input"  value=${v.section_name}  name="sub_sec_${v.id}" dir="${v.id}" lang="${i}" type="checkbox"><label class="cd-accordion__label cd-accordion__label--icon-folder" for="sub_sec_${v.id}"><span>${v.section_name}</span><span class="actions"><span class="edit_warehouse_icon btn btn-info btn-xs" style="cursor: pointer; margin-left:20px" onclick="edit_sec(${v.id},'${v.section_name}','${v.section_description}')"><i id="edit_butt" class="fa fa-pencil"  data-toggle="tooltip" data-placement="top" title="Edit Section" ></i></span><span class="delete_warehouse btn btn-danger btn-xs" style="cursor: pointer;" onclick="del_sec(${v.id})"><i  class="fa fa-trash-o"   data-toggle="tooltip" data-placement="top" title="Delete Section" ></i></span></span></label><ul id="the_sub_sub_${v.id}" class="cd-accordion__sub cd-accordion__sub--l3"></ul></li>`
                            );

                    })
                }
                // $("#sub_sec_"+v.id).append(`<li><div><a class="add_sub_section" dir="${v.id}"><u>+add</u></a></div></li>`);
                $("#the_sub_" + v.id).append(
                    '<li><div><a class="add_sub_section add_section cd-accordion__label cd-accordion__label--icon-folder" dir="' +
                    v.id + '"><ul>+add</ul></a></div></li>');


            })
        }
    });

    console.log(dat)
    for (var i = 0; i < dat.length; i++) {
        console.log(dat.length)
        console.log(dat[i])
    }
    var a = [];
    for (var i = 0; i < dat.length; i++) {
        console.log(dat[1])

        check_for_sub_sub(dat[i].children)

    }
    return;
}

// function recurse(data){
//       var dat = data
//   console.log(dat)

//   $(dat).each(function(i,v){
//             console.log(v);
//             console.log(v.children)
//             var chks = v.children;
//             // console.log("#the_sub_"+v.id)
//             var nam = v.children;
//             // console.log(nam.children)
//             if(v.children.length > 0){
//               $(nam).each(function(i,v){
//                 console.log(v.children)
//                 var uid = v.id;
//                 var sub_sub = v.children;
//                 if(sub_sub.length > 0){
//                 $(sub_sub).each(function(i,v){
//                   console.log(uid);
//                   console.log(v.section_name)

//                    $("#sub_sec_"+uid).append(`<li><div id="sub_sub_sec_${v.id}" class="sub_sub_sec"> ${v.section_name}<span class="edit_warehouse_icon btn btn-info btn-xs" style="cursor: pointer; margin-left:20px" onclick="edit_sec(${v.id},'${v.section_name}','${v.section_description}')"><i id="edit_butt" class="fa fa-pencil"  data-toggle="tooltip" data-placement="top" title="Edit Section" ></i></span><span class="delete_warehouse btn btn-danger btn-xs" style="cursor: pointer;" onclick="del_sec(${v.id})"><i  class="fa fa-trash-o"   data-toggle="tooltip" data-placement="top" title="Delete Section" ></i></span> </div<u id="the_sub_sub_${v.uid}"></u></li>`);

//                 })
//         }
//     $("#sub_sec_"+v.id).append(`<li><div><a class="add_sub_section" dir="${v.id}"><u>+add</u></a></div></li>`);

//             })
//             }

//   }); 
//   if (data) {}     

//       }



function check_for_children(data) {
    var dat = data;
    console.log(dat)

    // $(".section_line").each(function(){
    $(dat).each(function(i, v) {
        console.log(v);
        console.log(v.children)
        var chks = v.children;
        // console.log("#the_sub_"+v.id)
        var nam = v.children;
        var uid = v.id;
        if (v.children.length > 0) {
            $(nam).each(function(i, v) {
                console.log(v.section_name)


                //                   </ul>
                //     <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
                //     <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
                //     <li class="cd-accordion__item"><a class="cd-accordion__label cd-accordion__label--icon-img" href="#0"><span>Image</span></a></li>
                //   </ul>
                // </li>

                // <li id="del_${v.id}" class="cd-accordion__item cd-accordion__item--has-children"><input id="section_line_${v.id}" class="section_line cd-accordion__input" name="section_line_${v.id}" dir="${new_tree}" lang="${i}"  type="checkbox"><label class="cd-accordion__label cd-accordion__label--icon-folder" for="section_line_${v.id}"><span>${v.section_name}</span> <span class="edit_warehouse_icon btn btn-info btn-xs" style="cursor: pointer; margin-left:20px" onclick="edit_sec(${v.id},'${v.section_name}','${v.section_description}')"><i id="edit_butt" class="fa fa-pencil"  data-toggle="tooltip" data-placement="top" title="Edit Section" ></i></span><span class="delete_warehouse btn btn-danger btn-xs" style="cursor: pointer;" onclick="del_sec(${v.id})"><i  class="fa fa-trash-o"   data-toggle="tooltip" data-placement="top" title="Delete Section" ></i></span></label><ul id="the_u_${v.id}" class="cd-accordion__sub cd-accordion__sub--l1"></ul>



                $("#the_u_" + uid).append(
                    `<li class="cd-accordion__item cd-accordion__item--has-children"><input id="sub_sec_${v.id}" class=" cd-accordion__input sub_sec" value=${v.section_name} name="sub_sec_${v.id}" lang="${i}" dir="${v.id}"  type="checkbox"><label class="cd-accordion__label cd-accordion__label--icon-folder" for="sub_sec_${v.id}"><span>${v.section_name}</span><span class="actions"><span class="edit_warehouse_icon btn btn-info btn-xs" style="cursor: pointer; margin-left:20px" onclick="edit_sec(${v.id},'${v.section_name}','${v.section_description}')"><i id="edit_butt" class="fa fa-pencil"  data-toggle="tooltip" data-placement="top" title="Edit Section" ></i></span><span class="delete_warehouse btn btn-danger btn-xs" style="cursor: pointer;" onclick="del_sec(${v.id})"><i  class="fa fa-trash-o"   data-toggle="tooltip" data-placement="top" title="Delete Section" ></i></span></span></label><ul id="the_sub_${v.id}" class="cd-accordion__sub cd-accordion__sub--l2"></ul></li>`
                    );

                // OLD
                // $("#the_u_"+uid).append(`<li><div id="sub_sec_${v.id}" class="sub_sec"> ${v.section_name}<span class="edit_warehouse_icon btn btn-info btn-xs" style="cursor: pointer; margin-left:20px" onclick="edit_sec(${v.id},'${v.section_name}','${v.section_description}')"><i id="edit_butt" class="fa fa-pencil"  data-toggle="tooltip" data-placement="top" title="Edit Section" ></i></span><span class="delete_warehouse btn btn-danger btn-xs" style="cursor: pointer;" onclick="del_sec(${v.id})"><i  class="fa fa-trash-o"   data-toggle="tooltip" data-placement="top" title="Delete Section" ></i></span> </div<u id="the_sub_${v.uid}"></u></li>`);

            })
        }



        //  var id = $(this).attr("id").replace(/section_line_/,'');
        //  var sector_key = $(this).attr("lang");
        //  var size_of_kids = data[sector_key]['children'].length;
        // var chk =(data[sector_key]['children'])
        // console.log(data[sector_key]['children'])
        // // localStorage.setItem("dat", JSON.stringify(chk))




        //  if($(this).attr("dir") == "has_children"){
        // localStorage.setItem("dat", JSON.stringify(chk))


        //    for (i = 0; i < size_of_kids; i++) {
        //      console.log(+id)

        //      $("#the_u_"+id).append(`<li><div id="sub_sec_${id}" class="sub_sec"><a>${data[sector_key]['children'][i]['section_name']}</a><span style="margin-left:10px" class="edit_warehouse_icon btn btn-info btn-xs" style="cursor: pointer;margin-left:20px;" onclick="edit_sec(${data[sector_key]['children'][i]['id']}, '${data[sector_key]['children'][i]['section_name']}', '${data[sector_key]['children'][i]['section_description']}')"><i  class="fa fa-pencil"  data-toggle="tooltip" data-placement="top" title="Edit Section" style=""></i></span><span class="delete_warehouse btn btn-danger btn-xs" style="cursor: pointer;"onclick="del_sec(${data[sector_key]['children'][i]['id']})"><i  class="fa fa-trash-o" data-toggle="tooltip" data-placement="top" title="Delete Section" ></i></span></div><u id="the_sub_${id}"></u></li>`);

        //    }

        //  }
        // $("#the_u_"+id).append('<li><div><a class="add_section" dir="'+id+'"><u>+add</u></a></div></li>');

        $("#the_u_" + v.id).append(
            '<li><div><a class="add_section cd-accordion__label cd-accordion__label--icon-folder" dir="' + v
            .id + '"><ul>+add</ul></a></div></li>');


    });

    check_for_sub(dat);
    // })

}


function fetch_list_of_sections() {

    var company_id = localStorage.getItem('company_id');
    // var warehouse_id = localStorage.getItem('warehouse_id');
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const id = urlParams.get('i');

    // var module_id = 6;

    $.ajax({
        type: "POST",
        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/my_sections", //list_warehouse_sections_2
        data: {
            "company_id": company_id,
            "warehouse_id": id,
            "parent_id": 0
        },
        timeout: 60000,

        success: function(response) {

            console.log(response);

            var the_list = "";
            if (response.status == '200') {



                var k = 1;
                $(response.data).each(function(i, v) {
                    console.log(response.data);
                    console.log(v.id)

                    //does this section have children
                    if (v.children.length > 0) {
                        var new_tree = 'has_children';
                    } else {
                        var new_tree = '';
                    }

                    //<span class="remove_section" id="remove_section_'+v.id+'" style="display: none">-<span>

                    //create a line for the current section
                    // '"+query + "
                    // onclick="edit_sec('+v.id+')"

                    // `<li><div id="section_line_${v.id}" class="section_line" dir="${new_tree}" lang="${i}"> ${v.section_name}<span class="edit_warehouse_icon btn btn-info btn-xs" style="cursor: pointer;"><i id="edit_button" class="fa fa-pencil"  data-toggle="tooltip" data-placement="top" title="Edit Section" onclick="edit_sec(${v.id})"></i></span><span class="delete_warehouse btn btn-danger btn-xs" style="cursor: pointer;"><i  class="fa fa-trash-o"   data-toggle="tooltip" data-placement="top" title="Delete Section" onclick="del_sec({v.id})"></i></span> </div><u id="the_u_${v.id}"></u></li>`




                    // the_list += `<li id="del_${v.id}"><div id="section_line_${v.id}" class="section_line" dir="${new_tree}" lang="${i}"> ${v.section_name}<span class="edit_warehouse_icon btn btn-info btn-xs" style="cursor: pointer; margin-left:20px" onclick="edit_sec(${v.id},'${v.section_name}','${v.section_description}')"><i id="edit_butt" class="fa fa-pencil"  data-toggle="tooltip" data-placement="top" title="Edit Section" ></i></span><span class="delete_warehouse btn btn-danger btn-xs" style="cursor: pointer;" onclick="del_sec(${v.id})"><i  class="fa fa-trash-o"   data-toggle="tooltip" data-placement="top" title="Delete Section" ></i></span> </div><u id="the_u_${v.id}"></u></li>`;
                    if(v.section_name == "Default Section"){
                        the_list +=
                        `<li id="del_${v.id}" class="cd-accordion__item cd-accordion__item--has-children" style="background-color:#535860"><input id="section_line_${v.id}" class="section_line cd-accordion__input" value=${v.section_name} name="section_line_${v.id}" dir="${new_tree}" lang="${i}"  type="checkbox"><label class="cd-accordion__label cd-accordion__label--icon-folder" for="section_line_${v.id}"><span>${v.section_name}</span></span></label>`;
                    }else{
                     the_list +=
                        `<li id="del_${v.id}" class="cd-accordion__item cd-accordion__item--has-children" style="background-color:#535860"><input id="section_line_${v.id}" class="section_line cd-accordion__input" value=${v.section_name} name="section_line_${v.id}" dir="${new_tree}" lang="${i}"  type="checkbox"><label class="cd-accordion__label cd-accordion__label--icon-folder" for="section_line_${v.id}"><span>${v.section_name}</span><span class="actions"><span class="edit_warehouse_icon btn btn-info btn-xs" style="cursor: pointer; margin-left:20px" onclick="edit_sec(${v.id},'${v.section_name}','${v.section_description}')"><i id="edit_butt" class="fa fa-pencil"  data-toggle="tooltip" data-placement="top" title="Edit Section" ></i></span><span class="delete_warehouse btn btn-danger btn-xs" style="cursor: pointer;" onclick="del_sec(${v.id})"><i  class="fa fa-trash-o"   data-toggle="tooltip" data-placement="top" title="Delete Section" ></i></span></span></label><ul id="the_u_${v.id}" class="cd-accordion__sub cd-accordion__sub--l1"></ul>`;
                    }



                    // 

                    // the_list += `<li id="del_${v.id}" class="cd-accordion__item cd-accordion__item--has-children">
                    // <input id="section_line_${v.id}" class="section_line cd-accordion__input" dir="${new_tree}" lang="${i}" type="checkbox" name ="group-1" id="group-1">
                    // <label class="cd-accordion__label cd-accordion__label--icon-folder" for="group-1"><span>${v.section_name}</span></label>`

                    //if this is the last line, do this...create +add button
                    if (k == response.data.length) {
                        // the_list += `<ul class="cd-accordion__sub cd-accordion__sub--l1">`
                        // the_list += '<li><a class="add_section cd-accordion__label cd-accordion__label--icon-folder" dir="0"><u>+add</u></a></li>';
                        // the_list += `</ul">`
                        if(response.section_name !== "Default Section"){
                            the_list +=
                            '<li><div><a class="add_section cd-accordion__label cd-accordion__label--icon-folder" dir="0"><ul>+add</ul></a></div></li>';
                        }
                        
                        //   the_list += `

                        // <label class="add_section  cd-accordion__label cd-accordion__label--icon-folder" for="group-1"><span>${v.section_name}</span></label>`
                        // console.log(the_list);

                    }

                    k++;
                });


                $(".cd-accordion").html(the_list);

                // $("#the_list_div").html(the_list);
                // $("#the_list_div").show();

                check_for_children(response.data);

            } else {

                if(response.section_name !== "Default Section"){
                    the_list += '<li><div><a class="add_section" dir="0"><u>+add</u></a></div></li>';
                }
                $("#the_list_div").html(the_list);
                $("#the_list_div").show();
            }

            $("#whsec_loader").hide();

        },

        error: function(response) {
            console.log(response);
            $("#whsec_loader").hide();
        }

    });

}


function del_sec(id) {
    console.log(id);
    var ans = confirm("Are you sure you want to delete this warehouse?");
    if (!ans) {
        return;
    }

    let section_id = id;
    let company_id = localStorage.getItem('company_id');
    let warehouse_id = localStorage.getItem('warehouse_id');
    // $('#row_'+warehouse_id).hide();
    // $('#loader_row_'+warehouse_id).show();
    $.ajax({
        type: "POST",
        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/remove_section",
        data: {
            "company_id": company_id,
            "section_id": section_id,
            "warehouse_id": warehouse_id
        },
        timeout: 60000, // sets timeout to one minute
        // objAJAXRequest, strError
        error: function(response) {
            // $('#loader_row_'+warehouse_id).hide();
            // $('#row_'+warehouse_id).show();
            // $('#submit_edit_sect').show();

            alert('connection error');

        },

        success: function(response) {
            // console.log(response);
            if (response.status == '200') {
                $('#del_' + section_id).hide();
                alert('Deleted Successfully');
                location.reload();



            } else if (response.status == '400') {
                alert(response.msg);
                $('#submit_edit_sect').show();


            }

            // $('#loader_row_'+warehouse_id).hide();
        }
    });

}

function edit_button() {
    var section_name = $('#sect_name').val();
    var section_description = $('#sect_description').val();
    var section_id = localStorage.getItem('section_id');

    var company_id = localStorage.getItem('company_id');
    var warehouse_id = localStorage.getItem('warehouse_id');


    // $('#loader_'+warehouse_id).show();

    $.ajax({

        type: "POST",
        dataType: "json",
        cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/modify_section",
        data: {
            "warehouse_id": warehouse_id,
            "company_id": company_id,
            "section_id": section_id,
            "section_name": section_name,
            "section_description": section_description
        },

        success: function(response) {

            var str = "";
            console.log(response);
            $("#modal_edit_section #error").html("");

            $("#modal_edit_section .required").each(function() {

                var the_val = $.trim($(this).val());

                $(this).removeClass("has-error");

            });
            // $('#loader_'+warehouse_id).hide();

            if (response.status == '200') {
                $("#modal_edit_section #demo-form2").hide();
                $("#modal_edit_section #edit_msg").show();


                // $("#modal_edit_warehouse #sect_name").val( response.data.section_name); 
                // $("#modal_edit_warehouse #sect_description").val( response.data.section_description);

                // str += '<button type="submit" class="btn btn-success" id="edt_'+response.data.warehouse_id+'" class="update_ware">Update</button>';
                // str += '<i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="edit_ware_loader"></i>';   

                // // $("#modal_edit_warehouse #form_footer").html(str);
                $('#modal_edit_warehouse').modal('show');
            }


        },

        error: function(response) {
            // $('#loader_'+warehouse_id).hide();
            // $('#warh_'+warehouse_id).show();
            alert("Connection Error.");


        }
    })

}

function edit_sec(id, section, description) {
    localStorage.setItem('section_name', section);
    localStorage.setItem('section_description', description);
    localStorage.setItem('section_id', id);

    var section_name = section;
    var section_description = description;
    var section_id = id;
    $('#sect_name').val(section);
    $('#sect_description').val(description);

    $('#modal_edit_section').modal('show');
    $("#modal_edit_section #edit_msg").hide();
    $("#modal_edit_section #demo-form2").show();


    console.log(id);
}

// function user_page_access() {

//     var company_id = localStorage.getItem('company_id');
//     var user_id = localStorage.getItem('user_id');
//     var warehouse_id = localStorage.getItem('warehouse_id');
//     var module_id = 6;

//     $.ajax({

//         type: "POST",
//         dataType: "json",
//                 headers: {'Authorization':localStorage.getItem('token') },

//         url: api_path + "user/does_user_have_access_to_this_role",
//         data: {
//             "company_id": company_id,
//             "user_id": user_id,
//             "module_id": module_id,
//             "role_id": 11,
//             "warehouse_id": warehouse_id
//         },
//         timeout: 60000,

//         success: function(response) {

//             console.log(response);

//             if (response.status == '200') {
//                 //show div
//                 $("#main_display").show();
//                 // list_of_company_warehouse();


//             } else {

//                 // $("#modal_no_access").modal('show');
//                 $("#main_display").hide();
//                 $("#page_div").show();

//             }

//         },

//         error: function(response) {

//             // $("#modal_no_access").modal('show');
//             $("#main_display").hide();
//             $("#page_div").show();
//         }

//     });
// }

function page_warehouse_access() {

    var company_id = localStorage.getItem('company_id');

    var user_id = localStorage.getItem('user_id');
    var module_id = 6;


    $.ajax({

        type: "POST",
        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },
        
        url: api_path + "wms/list_user_wms_sections",
        data: {
            "company_id": company_id,
            "user_id": user_id,
            "module_id": module_id
        },
        timeout: 60000,

        success: function(response) {

            console.log(response);

            var strTable = "";

            if (response.status == '200') {

                if (response.is_admin == 'no') {
                    $('#main_display').hide();
                    $('#error_display').show();
                    var k = 1;
                    $.each(response['data'], function(i, v) {


                        if (response['data'][i]['section_name'] == "Incoming" && response['data'][i]
                            ['section_exist'] == "yes") {

                            $('#incoming').show();


                        } else if (response['data'][i]['section_name'] == "Incoming" && response[
                                'data'][i]['section_exist'] == "no") {

                            $('#incoming').hide();


                        } else if (response['data'][i]['section_name'] == "Outgoing" && response[
                                'data'][i]['section_exist'] == "yes") {

                            $('#outgoing').show();


                        } else if (response['data'][i]['section_name'] == "Outgoing" && response[
                                'data'][i]['section_exist'] == "no") {

                            $('#outgoing').hide();

                        } else if (response['data'][i]['section_name'] == "Sales/Receipts" &&
                            response['data'][i]['section_exist'] == "yes") {

                            $('#receipts').show();


                        } else if (response['data'][i]['section_name'] == "Sales/Receipts" &&
                            response['data'][i]['section_exist'] == "no") {

                            $('#receipts').hide();

                        }


                        k++;

                    });



                } else if (response.is_admin == 'yes') {

                    $('#incoming').show();
                    $('#outgoing').show();
                    $('#receipts').show();
                    $('#user_page').show();
                }


            } else if (response.status == '400') {



            } else if (response.status == "401") {
                //missing parameters


            }


        },

        error: function(response) {




        }

    });
}






function warehouse() {
    $('#warehouse_display').toggle();
    $('#add_warehouse_name').val('');
    $('#add_warehouse_address').val('');

    $('#error').html('');

    $(".required").each(function() {

        var the_val = $.trim($(this).val());

        $(this).removeClass("has-error");

    });
}
</script>
<script src="vakata-jstree/dist/jstree.min.js"></script>
<script src="./utils.js"></script>
<script src="./main.js"></script>
<script>

</script>



<?php
include_once("../gen/_common/footer.php");
?>