<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id"
        content="341582025304-09693s1st8481k09g6qj5omt6h9tgoie.apps.googleusercontent.com">

    <title>NaHere! | Warehouse Management Software </title>

    <link rel="icon" href="../favicon.png">
    <!-- <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="icon" href="../favicon.ico" type="image/x-icon"> -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Ubuntu" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="assets/admin_template/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/admin_template/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/admin_template/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="assets/admin_template/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"
        integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css"
        integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="assets/tree-list-bootstrap/dist/js/bstreeview.min.js"></script>
    <link rel="stylesheet" href="assets/vakata-jstree/dist/themes/default/style.min.css" />


    <!-- <script>document.getElementsByTagName("html")[0].className += " js";</script> -->
    <!-- <link rel="stylesheet" href="assets/assets/css/style.css"> -->


    <link href="assets/admin_template/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">

    <link href="assets/admin_template/build/css/custom.min.css" rel="stylesheet">

    <script src="https://js.paystack.co/v1/inline.js"></script>

    <script src="./accounting.min.js"></script>




    <script src="assets/js/echarts.js?v=883"></script>
    <style type="text/css">
        .dd {
            position: relative;
            left: -6%;
        }

        .dropzone {
            min-height: 100px;
        }



        .info-number:hover {
            display: block;
        }



        .abbrv::hover {
            display: none;
        }

        ul.msg_list li a .message {
            display: block !important;
            font-size: 11px;
            position: relative;
            left: 45px;
            text-align: left;
            padding: 0 5px;
        }

        li {
            text-decoration: none;
        }

        .dropdown-menu.msg_list span {
            white-space: normal;
            margin-right: 50px;
        }

        .sect,
        .batch {
            text-decoration: underline;
            cursor: pointer;
        }


        .nav.side-menu>li {
            background-color: #2A3F54 !important;
        }

        [data-tooltip]:hover::before {
            all: initial;
            font-family: Arial, Helvetica, sans-serif;
            display: inline-block;
            border-radius: 5px;
            padding: 10px;
            background-color: #1a1a1a;
            content: attr(data-tooltip);
            box-shadow: rgba(0, 0, 0, 0.19);
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
            box-shadow: rgba(0, 0, 0, 0.19);
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

        .badg {
            text-align: center;
            background: red;
            width: 20px;
            height: 20px;
            margin: 0;
            border-radius: 100%;
            position: absolute;
            top: 5px;
            left: 23px;
            padding: 5px;
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

        .content:hover .content-overlay {
            opacity: 1;
        }

        .content-image {
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

        .content:hover .content-details {
            top: 50%;
            left: 50%;
            opacity: 1;
        }

        .content-details h3 {
            color: #fff;
            /*font-weight: 500;*/
            letter-spacing: 0.15em;
            margin-bottom: 0.5em;
            text-transform: uppercase;
        }

        .content-details a {
            color: #fff;
            font-size: 1px;
        }

        ul {
            list-style-type: none;
        }

        li {
            list-style-type: none;
        }

        .content-details p {
            /*font-size: bold;*/
        }

        .fadeIn-top {
            top: 20%;
        }

        .app {
            /*font-family: 'Raleway', sans-serif;*/
            color: #393939;
            font-size: 24px;
            line-height: 44px;
            margin: 10px 0 0 0;
            padding: 20px 30px;
            font-weight: ;
            text-align: center;
            margin-top: 5%;
        }

        .fst_dd {
            z-index: 10;
            font-size: 16px;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            /*  position: relative;
    top: 100%;*/
            /*overflow-x: hidden;*/
        }

        .last {
            /*position: relative;
    right: 50%;*/

        }

        .first_ {
            width: 15%;
            font-size: 16px;
            margin-left: auto;
            margin-right: auto;
            /*font-weight: bold;*/
            margin-left: 10px;
        }

        .get_comp_list {
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

        .message {
            position: relative;
            left: -10%;
            text-align: center;
            /*margin-top: 20px;*/
            font-size: 18px;

        }

        .image img {
            position: relative;
            left: 25%;
            width: 30%;
        }

        .abbrv {
            position: relative;
            left: -10%;
            font-size: 16px;
            text-align: center;
            font-weight: 0px;
        }

        .more {
            display: block;
        }

        .text-center {
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

    .block33:nth-child(4n+1) {
        animation: wave 2s ease .0s infinite;
    }

    .block33:nth-child(4n+2) {
        animation: wave 2s ease .2s infinite;
    }

    .block33:nth-child(4n+3) {
        animation: wave 2s ease .4s infinite;
    }

    .block33:nth-child(4n+4) {
        animation: wave 2s ease .6s infinite;
        margin-right: 0;
    }

    @keyframes wave {
        0% {
            top: 0;
            opacity: 1;
        }

        50% {
            top: 30px;
            opacity: .2;
        }

        100% {
            top: 0;
            opacity: 1;
        }
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
        content: '';
        position: absolute;
        top: 0;
        left: -2px;
        bottom: 50%;
        width: 0.75em;
        border: 2px solid #000;
        border-top: 0 none transparent;
        border-right: 0 none transparent;
    }

    div#navbar_div ul>li:last-child {
        border-left: 2px solid transparent;
    }

    /*end of for sections*/



    .costing_cnc {
        display: none;
    }
/* .loading tr td{

} */
    /*.open{
          display: none;
        }*/
    .img_style {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        border: 4px solid white;

    }


    .user-post-profile {
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
    <script src="assets/admin_template/vendors/twbs-pagination-1.4.0/jquery.twbsPagination.js" type="text/javascript">
    </script>
    <script src="assets/js/jquerysession.js?v=1"></script>
    <script src="assets/js/wms.js?v=2.0"></script>
    <script src="assets/js/jquery-ui.min.js?v=1"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- jQuery autocomplete -->
    <script src="assets/admin_template/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.4.3/jquery.timeago.js">
    </script>

    <script src="assets/admin_template/vendors/dropzone/dist/min/dropzone.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js">
    </script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
    <!-- 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script> -->

    <script type="text/javascript">
    $(document).ready(function() {
        fetch_feeds("")
        // about_to_expire();

        function openNav() {
            document.getElementById(
                "myNav").style.width = "100%";
        }


        function closeNav() {
            document.getElementById(
                "myNav").style.height = "0%";
        }

        // $(".gg").hover(function () {
        //  $(".open").show();
        //  });

        // $('.gg').mouseenter(function () {
        //        $('.open').show();
        //        // $('#hover_tutor_hidden').show();
        //      });

        // $('.open').mouseenter(function () {
        //        $(this).show();
        // });
        // $('.open').mouseleave(function () {
        //        $(this).hide();
        // });
        //  $('.gg').mouseleave(function () {
        //        // $('#hover_tutor').show();
        //      $('.open').hide();
        //      }
        //  ).mouseleave()

        //confirm user id and company id are available
        if (localStorage.getItem('user_id') == "" || localStorage.getItem('user_id') == null || localStorage
            .getItem('company_id') == "" || localStorage.getItem('company_id') == null) {

            //redirect user to feeds page if not available
            // window.location.href = site_url+"/feeds";

        } else {

            can_company_access_page();

        }

        $(document).on('click', '#switch', function() {
            $('#loading_dlv').show();
            $('#warehouse_dlv').html('');
            $('#modal_switch').modal('show');
            getListOfWarehouseUSerHasAccessTo();

        });

        $(document).on('click', '.enter_ware', function() {

            var warehouse_id = $(this).attr("id").replace(/enter_/, '');
            // alert(warehouse_id);
            var warehouse_name = $(this).attr("dir").replace(/entername_/, '');
            localStorage.setItem('warehouse_id', warehouse_id);
            localStorage.setItem('warehouse_name', warehouse_name);
            // alert("Set to this - " + localStorage.getItem('warehouse_name'));
            window.location.href = base_url;

        });

        $(document).on('click', '.set_as_default', function() {

            $("#set_default").modal("show")

        });

        $(document).on('click', '#update_default', function() {
           var val = $(".set_").val();
           console.log(val)
            update_app(val)

            });         


        $(document).on('click', '.get_comp_list', function() {
            $('#list_comp_tables').html(
                        `<span style="position:relative; left:250px"><i class="fa fa-spinner fa-spin fa-fw fa-3x"></i></span>`);
                    $("#modal_choose_company").modal("show");

            // var id = $(this).attr("id").replace(/themodli_/,'');
            // var compn_and_d = $(this).attr("dir").split("-");
            // var module_name = compn_and_d[0];

            // $("#list_comp_tables").html($("#comp_todi_"+id).html());
            // $(".mdl_hdn").html("Which company's "+module_name+"?");
            // $("#modal_choose_company").modal("show");
            // $("#modal_choose_company").modal("show");
            var id = $(this).attr("id").replace(/themodli_/, '');
            var landing = $(this).attr("data");
            var compn_and_d = $(this).attr("dir").split("-");
            localStorage.setItem('module-id', id);
            var module_name = compn_and_d[0];
            localStorage.setItem('module-name', module_name);
            list_active_companies(id, landing);



            // $("#list_comp_tables").html($("#comp_todi_"+id).html());
            $(".mdl_hdn").html("Which company's " + module_name + "?");
            // $("#modal_choose_company").modal("show");

        });

           $(document).on('click', '.get_comp_list', function() {
            $('#list_comp_tables').html(
                        `<span style="position:relative; left:250px"><i class="fa fa-spinner fa-spin fa-fw fa-3x"></i></span>`);
                    $("#modal_choose_company").modal("show");

            // var id = $(this).attr("id").replace(/themodli_/,'');
            // var compn_and_d = $(this).attr("dir").split("-");
            // var module_name = compn_and_d[0];

            // $("#list_comp_tables").html($("#comp_todi_"+id).html());
            // $(".mdl_hdn").html("Which company's "+module_name+"?");
            // $("#modal_choose_company").modal("show");
            // $("#modal_choose_company").modal("show");
            var id = $(this).attr("id").replace(/themodli_/, '');
            var landing = $(this).attr("data");
            var compn_and_d = $(this).attr("dir").split("-");
            localStorage.setItem('module-id', id);
            var module_name = compn_and_d[0];
            localStorage.setItem('module-name', module_name);

            if(Number(id) == 15){
               list_active_companies_pos(id, landing);
              $(".mdl_hdn").html("Which company's " + module_name + "?");
            }else{
            list_active_companies(id, landing);
            // $("#list_comp_tables").html($("#comp_todi_"+id).html());
            $(".mdl_hdn").html("Which company's " + module_name + "?");
            // $("#modal_choose_company").modal("show");
            }

        });

        $(document).on('click', '.set_coy', function() {


            var compn_and_d = $(this).attr("dir").split("-");
            var company_id = compn_and_d[1];
            var md_landing_page = compn_and_d[2]
            localStorage.setItem('company_id', company_id);
            localStorage.setItem('landing_page', md_landing_page);
            // alert(localStorage.getItem('company_id'));
            // localStorage.setItem('company_name', company_name);

            window.location.href = "../" + md_landing_page;

        });

    });

    function can_company_access_page() {

        var company_id = localStorage.getItem('company_id');
        var user_id = localStorage.getItem('user_id');
        var module_id = 6;

        $.ajax({

            type: "POST",
            dataType: "json",
             headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
            url: api_path + "wms/can_company_access_module",
            data: {
                "company_id": company_id,
                "user_id": user_id,
                "module_id": module_id
            },
            timeout: 60000,

            success: function(response) {

                // console.log(response);

                if (response.status == '200') {

                    //show details
                    // $("#whole_body").fadeIn();
                    // $(".container33").hide();

                    //2.
                    can_user_access_this_module();
                    // populate_item(module_id)
                    // fetch_user_module_roles();
                    // group_modules_users_can_access();

                } else {

                    $("#page_error_div").html(
                        '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;&nbsp;' +
                        response.msg);
                    $(".container33").hide();
                    $("#page_error_div").show();

                }

            },

            error: function(response) {

                // alert("You do not have access to this module");
                $("#page_error_div").html(
                    '<i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i>&nbsp;&nbsp; Connection Error. Please try again.'
                );
                $(".container33").hide();
                $("#page_error_div").show();
                // window.location.href = site_url+"/feeds";

            }

        });

    }



    function delete_incoming_item(list_id) {

        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');

        var ans = confirm("Are you sure you want to delete this item?");
        if (!ans) {
            return;
        }

        $('#row_' + list_id).hide();
        $('#loader_row_' + list_id).show();
        $.ajax({
            type: "POST",
            dataType: "json",
             headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
            url: api_path + "wms/del_incoming_item",
            data: {
                "company_id": company_id,
                "warehouse_id": warehouse_id,
                "list_id": list_id
            },
            timeout: 60000, // sets timeout to one minute
            // objAJAXRequest, strError

            error: function(response) {
                $('#loader_row_' + list_id).hide();
                $('#row_' + list_id).show();

                alert('connection error');
            },

            success: function(response) {
                // console.log(response);
                if (response.status == '200') {
                    // $('#row_'+user_id).hide();

                } else if (response.status == '401') {

                }

                $('#loader_row_' + list_id).hide();
            }
        });
    }


    function can_user_access_this_module() {
        //accesscontrol/check_if_user_has_access_to_a_module
        $.ajax({

            type: "POST",
            dataType: "json",
             headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
            url: api_path + "accesscontrol/check_if_user_has_access_to_a_module",
            data: {
                "company_id": localStorage.getItem('company_id'),
                "user_id": localStorage.getItem('user_id'),
                "module_id": 6
            },
            timeout: 60000,

            success: function(response) {

                if (response.status == '200') {

                    $("#whole_body").fadeIn();
                    $(".right_col").css("min-height", $(window).height() - 51);
                    $(".container33").hide();

                    var user_permission_status = response.user_status;
                    //store this on the page
                    $("#user_perm_status").html(user_permission_status);
                    group_modules_users_can_access();

                } else {

                    $("#page_error_div").html(
                        "<i class='fa fa-exclamation-triangle' aria-hidden='true'></i>&nbsp;&nbsp;You do not have access to this company's Warehouse Management System. <a href='../feeds' style='color: white'><u>Back to Feeds</u></a>"
                    );
                    $(".container33").hide();
                    $("#page_error_div").show();

                }

            },

            error: function(response) {

                // alert("You do not have access to this module");
                $("#page_error_div").html(
                    '<i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i>&nbsp;&nbsp; Connection Error. Please refresh page.'
                );
                $(".container33").hide();
                $("#page_error_div").show();
                // window.location.href = site_url+"/feeds";

            }

        });
    }

    function update_app(id) {
        $("#update_default").hide();
        $('#edit_item_selling_cost_loader').show();

        $.ajax({

            type: "POST",
            dataType: "json",
             headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
            url: api_path + "user/set_default_module",
            data: {
                "module_id": id,
                "user_id": localStorage.getItem('user_id')
            },
            timeout: 60000,


            success: function(response) {

                if (response.status == '200') {

                    console.log(response.data);
                    $("#set_default").modal("hide");
                    $('#edit_item_selling_cost_loader').hide();
                    $("#upd_item_unit_cost").show();
                    $("#modal_successful").modal("show");

                    // var list_mds = "";
                    // list_mds += `<span id="comp_todi_${module_id}" >`;
                    // $.each(response.data, function(i, v) {
                    //     list_mds +=
                    //         `<li class="" style="display:"><a class="set_coy" dir="${module_name}-${v.company_id}-${landing}" style="cursor: pointer" >${v.company_name}</a></li>`;
                    // });

                }else{
                    $('#edit_item_selling_cost_loader').hide();
                    $("#upd_item_unit_cost").show();
                }
                // console.log(list_mds);
                // if (list_mds == undefined) {
                //     $('#list_comp_tables').html(
                //         `<span>You have no active subscription for ${landing} module</span>`);
                //     $("#modal_choose_company").modal("show");
                // }
                // $('#list_comp_tables').html(list_mds);
                // $("#modal_choose_company").modal("show");

            },
            error: function(response) {

            }
        })

    }

    function about_to_expire() {

        $.ajax({

            type: "POST",
            dataType: "json",
             headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
            url: api_path + "wms/itemsAboutExpiry",
            data: {
                "warehouse_id": localStorage.getItem('warehouse_id'),
                "company_id": localStorage.getItem('company_id')
            },
            timeout: 60000,


            success: function(response) {

                if (response.status == '200') {

                    console.log(response.data);
                    // var list_mds = "";
                    // list_mds += `<span id="comp_todi_${module_id}" >`;
                    // $.each(response.data, function(i, v) {
                    //     list_mds +=
                    //         `<li class="" style="display:"><a class="set_coy" dir="${module_name}-${v.company_id}-${landing}" style="cursor: pointer" >${v.company_name}</a></li>`;
                    // });

                }
                // console.log(list_mds);
                // if (list_mds == undefined) {
                //     $('#list_comp_tables').html(
                //         `<span>You have no active subscription for ${landing} module</span>`);
                //     $("#modal_choose_company").modal("show");
                // }
                // $('#list_comp_tables').html(list_mds);
                // $("#modal_choose_company").modal("show");

            },
            error: function(response) {

            }
        })

    }

    function list_active_companies_pos(id, landing) {
        var user_id = localStorage.getItem('user_id');
        var module_id = localStorage.getItem('module-id');
        var module_name = localStorage.getItem('module-name');


        $.ajax({

            type: "GET",
            dataType: "json",
             headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
            url: api_path + "pos/my_connections",
            data: {
                "user_id": user_id,
                "module_id": id
            },
            timeout: 60000,


            success: function(response) {

                if (response.status == '200') {
                    var list_mds = "";
                    console.log(response.data);
                    if (response.data.length == 1) {
                        // var compn_and_d = $(this).attr("dir").split("-");
                        $.each(response.data, function(i, v) {
                            var company_id = v.company_id;
                            // var md_landing_page = v.landing;
                            localStorage.setItem('company_id', company_id);
                            // localStorage.setItem('landing_page', md_landing_page);
                            // alert(localStorage.getItem('company_id'));
                            // localStorage.setItem('company_name', company_name);
                            // var list_mds = "";
                            list_mds += `<span id="comp_todi_${module_id}" >`;
                            $.each(response.data, function(i, v) {
                                list_mds +=
                                    `<li class="" style="display:"><a class="set_coy" dir="${module_name}-${v.company_id}-${landing}" style="cursor: pointer" >${v.company_name}</a></li>`;
                            });

                        })
                        window.location.href = "../pos";
                    } else {
                        var list_mds = "";
                        list_mds += `<span id="comp_todi_${module_id}" >`;
                        $.each(response.data, function(i, v) {
                            list_mds +=
                                `<li class="" style="display:"><a class="set_coy" dir="${module_name}-${v.company_id}-${landing}" style="cursor: pointer" >${v.company_name}</a></li>`;
                        });
                    }

                }
                console.log(list_mds);
                if (list_mds == undefined) {
                    $('#list_comp_tables').html(
                        `<span>You have no active subscription for ${landing} module</span>`);
                    $("#modal_choose_company").modal("show");
                }
                $('#list_comp_tables').html(list_mds);
                $("#modal_choose_company").modal("show");

            },
            error: function(response) {

            }
        })

    }

    function list_active_companies(id, landing) {
        var user_id = localStorage.getItem('user_id');
        var module_id = localStorage.getItem('module-id');
        var module_name = localStorage.getItem('module-name');


        $.ajax({

            type: "GET",
            dataType: "json",
             headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
            url: api_path + "wms/my_connections",
            data: {
                // "user_id": user_id,
                "module_id": id
            },
            timeout: 60000,


            success: function(response) {

                if (response.status == '200') {

                    

                    console.log(response.data);
                    if (response.data.length == 1) {
                        // var compn_and_d = $(this).attr("dir").split("-");
                        $.each(response.data, function(i, v) {
                            var company_id = response.data.company_id;
                            var md_landing_page = response.data.landing;
                            localStorage.setItem('company_id', company_id);
                            localStorage.setItem('landing_page', md_landing_page);
                            // alert(localStorage.getItem('company_id'));
                            // localStorage.setItem('company_name', company_name);

                        })
                        window.location.href = "../" + md_landing_page;
                    } else {
                        var list_mds = "";
                        list_mds += `<span id="comp_todi_${module_id}" >`;
                        $.each(response.data, function(i, v) {
                            list_mds +=
                                `<li class="" style="display:"><a class="set_coy" dir="${module_name}-${v.company_id}-${landing}" style="cursor: pointer" >${v.company_name}</a></li>`;
                        });
                    }

                }
                console.log(list_mds);
                if (list_mds == undefined) {
                    $('#list_comp_tables').html(
                        `<span>You have no active subscription for ${landing} module</span>`);
                    $("#modal_choose_company").modal("show");
                }
                $('#list_comp_tables').html(list_mds);
                $("#modal_choose_company").modal("show");

            },
            error: function(response) {

            }
        })

    }


    function group_modules_users_can_access() {

        // return;

        var user_id = localStorage.getItem('user_id');
        var company_id = localStorage.getItem('company_id');

        var pathArray = window.location.href.split('/');
        var username = pathArray[2].split('.')[0];

        $.ajax({

            type: "GET",
            dataType: "json",
             headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
            url: api_path + "user/group_modules_users_can_access",
            data: {
                "user_id": user_id,
                "company_id": company_id,
                "token": localStorage.getItem('token')
            },
            timeout: 60000,

            success: function(response) {

                console.log(response);

                $('#user_name').html(localStorage.getItem('firstname') + ' ' + localStorage.getItem(
                    'lastname'));
                $('#hi_user_name').html(localStorage.getItem('firstname'));
                $('.hi_user_name').html(localStorage.getItem('firstname'));

                if (response.status == '200') {
                    // $(".fst_dd").append(list_mds+'<li><div class="text-center"><a href="/user/myapps"><strong>Add More Apps </strong><i class="fa fa-angle-right"></i></a></div></li>');
                    for_default = `<option value='2'>Workgroup</option>`;

                    $.each(response.data, function(i, v) {
                        console.log(v)
                        if (v.module_full_name) {
                            console.log(v.module_full_name)
                            for_default +=
                                `<option value='${v.module_id}'>${v.module_full_name}</option>`
                        }
                    })

                    if (response.total_rows != 0) {

                        var k = 1;
                        var list_mds = "";
                        list_mds +=
                            `<div class="col-md-2" data-tooltip="Workgroup">
                               <li class="dd">   <a style="position: relative;
                               right: 20%;" href="../workgroup" class="get_comp_list" id="themodli_"  data="feeds"><span class="image"><img src="../files/images/icons/feeds_icon.png" alt="" style="position:relative; left:33%;"></span>     <span>        <div class="abbrv" ><span class="" style="position:relative; left:10%;">Workgroup</div></span></span>   </a></li></div>`;
                        $.each(response.data, function(i, v) {
                            console.log(v)


                            if (v.access_count == 1) {

                                var link_lk = 'class="get_comp_list"';
                                var set_coy_class = "";

                            } else {

                                var link_lk = 'class="get_comp_list"';
                                var set_coy_class = "";

                            }




                            // if(v.module_id != 19){ //remove this particular module from the list

                            // list_mds += '<li>   <a '+link_lk+' id="themodli_'+v.module_id+'"  dir="'+v.module_abbrv+"-"+v.company_id+"-"+v.company_name+'" class="'+set_coy_class+'" >   <span class="image"><img src="../files/images/icons/'+v.module_little_icon+'" alt=""></span>     <span>        <span><b>'+v.module_abbrv+'</b></span> </span>       <span class="message">'+v.module_full_name+'</span>                      </a>          </li>';



                            // list_mds += '<span id="comp_todi_'+v.module_id+'" style="display: none">';
                            // $.each(v.more_comp_list, function (i2, v2){
                            //     list_mds += '<li class="" style="display:"><a class="set_coy"   dir="'+v.module_abbrv+"-"+v2.id+"-"+v2.landing_page+'" style="cursor: pointer" >'+v2.comp_name+'</a></li>';
                            // });
                            // list_mds += '</span>';

                            // list_mds += '<li>   <a '+link_lk+' id="themodli_'+v.module_id+'"  dir="'+v.module_abbrv+"-"+v.company_id+"-"+v.company_name+'" class="'+set_coy_class+'" data="'+v.module_landing_page+'">   <span class="image"><img src="../files/images/icons/'+v.module_little_icon+'" alt=""></span>     <span>        <span><b>'+v.module_abbrv+'</b></span> </span>       <span class="message">'+v.module_full_name+'</span>                      </a>          </li>';




                            // list_mds += '<span><div class="col-md-3 first_"  style="font-size:10px" data-tooltip="'+v.module_full_name+'"> <div class="">  <li>   <a '+link_lk+'  class="'+set_coy_class+'" data="'+v.module_landing_page+'">   <span class="image"><img src="../files/images/icons/'+v.module_little_icon+'" alt=""></span>     <span>        <div class="abbrv" ><span class="hide_hover">'+v.module_abbrv+'</span></div> </span>       <div class="message"></div>                      </a>          </li></div></div></span>';


                            list_mds +=
                                '<div class="col-md-2"  style="font-size:10px" data-tooltip="' +
                                v.module_full_name + '"> <div class="">  <li>   <a ' + link_lk +
                                ' id="themodli_' + v.module_id + '" dir="' + v.module_abbrv + "-" +
                                v.company_id + "-" + v.company_name + '"  class="' + set_coy_class +
                                '" data="' + v.module_landing_page +
                                '">   <span class="image"><img src="../files/images/icons/' + v
                                .module_little_icon +
                                '" alt=""></span>     <span>        <div class="abbrv" ><span class="">' +
                                v.module_abbrv +
                                '</span></div>      <div class="message"></div>                      </a>          </li></div></div></span>';





                            // list_mds +=
                            //     '<span><div class="col-md-3 first_"  style="font-size:10px" data-tooltip="' +
                            //     v.module_full_name + '"> <div class="">  <li>   <a ' + link_lk +
                            //     ' id="themodli_' + v.module_id + '" dir="' + v.module_abbrv + "-" +
                            //     v.company_id + "-" + v.company_name + '"  class="' + set_coy_class +
                            //     '" data="' + v.module_landing_page +
                            //     '">   <span class="image"><img src="../files/images/icons/' + v
                            //     .module_little_icon +
                            //     '" alt=""></span>     <span>        <div class="abbrv" ><span class="hide_hover">' +
                            //     v.module_abbrv +
                            //     '</span></div> </span>       <div class="message"></div>                      </a>          </li></div></div></span>';





                            //         <a id="feed_tg" href="../feeds">
                            // <span class="tooltiptext">'+v.module_full_name+'</span>
                            //                     <span class="image"><img src="../files/images/icons/feeds_icon.png" alt=""></span>
                            //                     <span>
                            //   <span><b>Feeds</b></span>

                            //                     </span>
                            //                     <span class="message">
                            //   Notifications Feeds
                            // </span>
                            //                 </a>


                            // list_mds += '<span id="comp_todi_'+v.module_id+'" style="display: none">';
                            // $.each(v.more_comp_list, function (i2, v2){
                            //   list_mds += '<li class="" style="display:"><a class="set_coy"   dir="'+v.module_abbrv+"-"+v2.id+"-"+v2.landing_page+'" style="cursor: pointer" >'+v2.comp_name+'</a></li>';

                            // });
                            // list_mds += '</span>';


                            k++;

                        });




                        $(".fst_dd").append(list_mds);
                        console.log(for_default)




                        // $( list_mds ).insertAfter( ".fst_dd" );

                    } else {


                    }

                    // $('#whole_body').show();
                    $(".set_").append(for_default);


                    fetch_company_colors();

                } else {

                    fetch_company_colors();

                }

            },
            error: function(response) {

                fetch_company_colors();
            }

        });

    }



    function fetch_company_colors() {



        var company_id = localStorage.getItem('company_id');

        $.ajax({

            type: "POST",
            dataType: "json",
             headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
            url: api_path + "company/get_company_colours",
            data: {
                "company_id": company_id
            },
            timeout: 60000,

            success: function(response) {

                console.log(response);

                if (response.status == '200') {

                    var color = '#2A3F54';
                    if (response.data.middle_left_bar == '' || response.data.middle_left_bar == null) {
                        response.data.middle_left_bar = color;
                    }

                    if (response.data.body_color == '' || response.data.body_color == null) {
                        response.data.body_color = color;
                    }

                    if (response.data.bottom_left_bar == '' || response.data.bottom_left_bar == null) {
                        response.data.bottom_left_bar = color;
                    }

                    if (response.data.top_left_bar == '' || response.data.top_left_bar == null) {
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

                $('#user_name').html(localStorage.getItem('firstname') + ' ' + localStorage.getItem(
                    'lastname'));

                if (localStorage.getItem('profile_photo') == "" || localStorage.getItem('profile_photo') ==
                    null || localStorage.getItem('profile_photo') == undefined) {

                    $('#profile_img').attr('src',
                        '/files/images/user_profile_images/sml_default_picture.png');

                } else {

                    $('#profile_img').attr('src', '/files/images/user_profile_images/sml_' + localStorage
                        .getItem('profile_photo'));

                }

                fetch_warehouse_list();

            },
            // objAJAXRequest, strError
            error: function(response) {

                fetch_warehouse_list();
                // alert('Error fetching customization!');

            }

        });
    }


    function fetch_warehouse_list() {

        var company_id = localStorage.getItem('company_id');
        var user_id = localStorage.getItem('user_id');


        $.ajax({

            type: "POST",
            dataType: "json",
             headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
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

                    if (localStorage.getItem("warehouse_id") == undefined) {
                        localStorage.setItem("warehouse_id", response['data'][0]['warehouse_id']);
                        localStorage.setItem("warehouse_name", response['data'][0]['warehouse_name']);
                    }

                    localStorage.setItem("warehouses", response.data.length);
                    console.log(response.data.length);
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

                        if (kup > 1) {
                            $('#switch_tab').show();
                        } else {
                            // $('#switch_tab').show();
                            $('#switch_tab').hide();
                            $("#transfer").hide();
                        }



                    }



                    $("#does_user_have_profile").html('yes');

                    if (!(localStorage.getItem('warehouse_id'))) {
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

                    if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status").html() ==
                        "Admin") {




                        $("#assgn_roles").addClass("fa-times"); //mark roles as x

                        //now check if other setups are ready
                        $.ajax({

                            type: "POST",
                            dataType: "json",
                             headers: {
                                    'Authorization':localStorage.getItem('token'),
                                    // 'Content-Type':'application/json'
                            },
                            url: api_path + "wms/is_setup_done",
                            data: {
                                "company_id": localStorage.getItem('company_id')
                            },
                            timeout: 60000,

                            success: function(response) {
                                console.log(response);
                                if (response.status == '200') {

                                    if (response.data.warehouse == "yes") {
                                        $("#crt_whs").addClass("fa-check");
                                    } else {
                                        $("#crt_whs").addClass("fa-times");
                                    }

                                    if (response.data.user_name == "yes") {
                                        $("#updt_comp_dtl").addClass("fa-check");
                                    } else {
                                        $("#updt_comp_dtl").addClass("fa-times");
                                    }

                                } else {

                                }
                            },
                            error: function(response) {

                            }
                        });





                        $(".dsh_dvs").fadeOut(200).promise().done(function() {
                            $("#admins_no_permission_dv").fadeIn(400);
                        });

                    } else {

                        $(".dsh_dvs").fadeOut(200).promise().done(function() {
                            $("#no_permission_dv").fadeIn(400);
                        });

                    }

                }

            },
            // objAJAXRequest, strError
            error: function(response) {

                $("#page_error_div").html(
                    '<i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i>&nbsp;&nbsp; Connection Error. Please try again.'
                );
                $(".container33").hide();
                $("#page_error_div").show();
                $("#whole_body").hide();

            }

        });
    }










    function fetch_user_module_roles() {

        var company_id = localStorage.getItem('company_id');
        var urlParams = new URLSearchParams(window.location.search).get('id');
        var user_id = urlParams ? urlParams : localStorage.getItem('user_id');
        var warehouse_id = localStorage.getItem('warehouse_id');
        var module_id = 6;
        localStorage.setItem('module_key', module_id);
        // alert(urlParams)
        // if(urlParams){
        //   user_id = urlParams.get('id');
        // }else{
        //   user_id = localStorage.getItem('user_id');
        // }
        // alert(user_id)
        console.log(warehouse_id);
        // $("#settings_tab").show();


        if ($("#user_perm_status").html() == "super_admin" || $("#user_perm_status").html() == "Admin") {
            $("#settings_tab").show();
        }

        $.ajax({

            type: "POST",
            dataType: "json",
             headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
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
                var user_roles_2 = [];
                $.each(response['data']['profile_details'], function(i, v) {
                    console.log(v.id)
                    user_roles.push(Number(v.id))

                })


                if (response.status == '200') {
                    console.log(Array.from((response['data']['profile_details'])))
                    // var role = localStorage.setItem("user_role", user_roles)

                    localStorage.setItem("user_role", user_roles.filter(a => a !== 0)
                        .filter(a => a !== 1))
                    $("#qty_adjustment").hide();
                    $("#transfer").hide();
                    $("#total_overdue_po").show();
                    $("#total_overdue_inv").show();
                    $("#best_selling_items").show();
                    $("#lowest_selling_items").show();


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
                            $("#expiry").show();
                            $("#expired").show();

                            $("#transactions_dashboard").show();
                            $("#expired_dashboard").show();
                            $("#incoming_graph").show();
                            $("#expenses_graph").show();
                            $("#profit_loss_graph").show();
                            $("#warehouse_value").show();
                            $("#report_tab").show();
                            $("#transfer").show();
                            user_roles_2.push(2);






                            var roles = localStorage.getItem("user_role");
                            var arr = ['2', '4']
                            var users = roles.split(',')

                            users.map((a, i) => {
                                if (a.includes(arr[i])) {
                                    $("#expenses_revenue").show();
                                    $("#expenses_graph").hide();
                                    $("#revenue_graph").hide();
                                }
                            })

                            // if(Array.from(Number(roles)).includes(2 & 4)){
                            //    alert(roles)
                            // }






                        }

                        if (v.id == 26) { //warehouse manager

                            $("#incoming_tab").show(); //warehouse manager
                            $("#receiveorders").show(); //receive orders/create orders

                            $("#outgoing_tab").show(); //warehouse manager
                            $("#invoicesreceipts").show();
                            $("#supplyitems").show(); //but cannot issue
                            $("#contacts").show(); // show contact page
                            $("#items").show(); //show items page
                            $("#itemsreceivedlist").show();
                            $("#qty_adjustment").show();
                            $("#report_tab").show();
                            $("#transfer").show();

                            $("#items_dashboard").show();
                            $("#unique_dashboard").show();
                            $("#low_dashboard").show();
                            $("#expiry").show();
                            $("#expired").show();
                            $("#transactions_dashboard").show();
                            $("#expired_dashboard").show();
                            $("#transactions_activities").show();
                            $("#warehouse_value").show();
                            user_roles_2.push(26);













                            //if the
                            if (localStorage.getItem('warehouse_id') != "") {
                                $("#whsections").attr("href", "whsections?i=" + localStorage
                                    .getItem('warehouse_id'));
                                $("#whsections").show(); //
                            }



                        }


                        if (v.id == 24) { //store manager outgoing

                            $("#outgoing_tab").show(); //warehouse manager
                            $("#supplyitems").show();
                            $("#items_dashboard").show();
                            $("#unique_dashboard").show();
                            $("#low_dashboard").show();
                            $("#expiry").show();
                            $("#expired").show();
                            $("#transactions_out_dashboard").show();
                            $("#expired_dashboard").show();
                            $("#outgoing_graph").show();
                            $("#invoicesreceipts").hide();
                            $("#report_tab").show();
                            $("#transfer").hide();
                            $("#qty_adjustment").hide();
                            user_roles_2.push(24);





                            var roles = localStorage.getItem("user_role");
                            var users = roles.split(',')

                            users.map((a) => {
                                if (a.includes('26')) {
                                    $("#outgoing_graph").hide();
                                }
                            })




                        }

                        if (v.id == 3) { //store manager incoming

                            $("#incoming_tab").show();
                            $("#itemsreceivedlist").show();
                            $("#items_dashboard").show();
                            $("#unique_dashboard").show();
                            $("#low_dashboard").show();
                            $("#transactions_in_dashboard").show();
                            $("#expired_dashboard").show();
                            $("#expiry").show();
                            $("#expired").show();
                            $("#incoming_graph").show();
                            $("#receiveorders").hide();
                            $("#report_tab").show();
                            $("#transfer").hide();
                            $("#qty_adjustment").hide();
                            user_roles_2.push(3);





                            var roles = localStorage.getItem("user_role");
                            var users = roles.split(',')

                            users.map((a) => {
                                if (a.includes('26')) {
                                    $("#incoming_graph").hide();
                                    $("#transfer").show();
                                    $("#qty_adjustment").show();
                                }
                            })


                        }


                        if (v.id == 0) { //store manager incoming
                            $("#settings_tab").show();
                        }

                        var preference = localStorage.getItem('value')
                        console.log(preference);
                        if (preference == 'ro') {
                            $("#expense_dashboard").hide();
                            $("#creditors_dashboard").hide();
                            $("#revenue_dashboard").hide();
                            $("#debtors_dashboard").hide();
                            $("#warehouse_value").hide();

                        }
                        if (preference == 'ro' && v.id == 25) {
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
                            $("#transactions_activities").show();
                            $("#warehouse_value").hide();
                            $("#profit_loss_graph").show();
                            $("#expenses_revenue").hide();
                            $("#report_tab").show();
                            $("#transfer").show();
                            user_roles_2.push(25);



                            var roles = localStorage.getItem("user_role");
                            var arr = ['2', '3', '4', '24']
                            var users = roles.split(',')

                            users.map((a, i) => {
                                if (a.includes(arr[i])) {
                                    $("#outgoing_graph").hide();
                                    $("#incoming_graph").hide();
                                }
                            })

                        }

                        if (preference == 'po') {
                            // $("#qty_adjustment").show();
                            // $("#transfer").show();
                        }
                        // if (preference == 'po' && v.id == 2||) {
                        //     $("#qty_adjustment").show();
                        //     $("#transfer").show();
                        // }

                        if (preference == 'po' && v.id == 25) {
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
                            $("#transfer").show();
                            user_roles_2.push(25);



                            var roles = localStorage.getItem("user_role");
                            var arr = ['2', '3', '4', '24']
                            var users = roles.split(',')

                            users.map((a, i) => {
                                if (a.includes(arr[i])) {
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
                        if (v.id == 4) {
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
                            $("#transfer").show();
                            user_roles_2.push(4);









                            var roles = localStorage.getItem("user_role");
                            var arr = ['2', '4']
                            var users = roles.split(',')
                            console.log(users)

                            users.map((a, i) => {
                                if (a.includes(arr[i])) {
                                    $("#expenses_revenue").show();
                                    $("#expenses_graph").hide();
                                    $("#revenue_graph").hide();
                                }
                            })




                        }


                        // arr2.map((a, i) => {
                        //     if (a.includes(user_roles_2[i])){
                        //         $("#transfer").show();
                        //         $("#qty_adjustment").show();
                        //     }
                        // })

                        var arr2 = [2, 4, 26];


                        arr2.some((a, i) => {
                            if (user_roles_2[i] == parseInt(a)) {
                                console.log(a);
                                console.log(user_roles_2[i]);
                                $("#transfer").show();
                                $("#qty_adjustment").show();
                            }
                        })

                        console.log(Number(localStorage.getItem('warehouses')))

                        if (Number(localStorage.getItem('warehouses')) < 2) {
                            // alert('here')
                            $("#transfer").hide();
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

    function fetch_feeds(page) {

        var company_id = localStorage.getItem('company_id');
        var user_id = localStorage.getItem('user_id');
        if (page == "") {
            var page = 1;
        }
        var limit = 5;

        $.ajax({
            type: "GET",
            dataType: "json",
             headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
            url: api_path + "feeds/list_feeds",
            data: {
                "company_id": company_id,
                "user_id": user_id,
                "limit": limit,
                "page": 1,
                "token": localStorage.getItem('token')
            },
            timeout: 60000,
            success: function(response) {

                console.log(response);

                var the_list = "";

                if (response.status == '200') {

                    if (response.data.length > 0) {

                        var k = 1;
                        var time = ""

                        // the_list += '<ul class="list-unstyled timeline">';


                        $.each(response['data'], function(i, v) {

                            var avatar = `${v.profile_pic}`
                            var feed = `${v.feed_id}`

                            if (!avatar) {
                                // time = $.timeago(new Date(response['data'][i]['action_time']));

                                the_list += `<li class="nav-item" onclick="location.href = '../warehouse/warehouse_feeds';"><a class="dropdown-item"><span class="image"><img src="../files/images/user_profile_images/sml_default_picture.png" alt="Profile Image" style="margin-left:-60px"/></span><span><span>${v.done_by}</span><span class="time">${time}</span></span>
                          <span class="message" style="padding:5px;">${v.message}</span></a>
                          </li>`

                                // the_list += '<li style="background-color:#F7F7F7; display:flex; border-bottom:1px solid #EDEDED"> <a class="user-post-profile">       <img src="../files/images/user_profile_images/sml_default_picture.png" alt="img" class="img_style">   </a>   <div class="block_content" style="width:100%; position:relative; left:-30px;">   <h2 class="title" style="font-weight: bold; position:relative; left:-20px;">       <a>'+v.done_by+'</a>    </h2>   <div class="byline"> <span>'+time+'</span><!-- by <a>Jane Smith</a> --></div>    <p class="">'+v.message+'</p>     </div>   </div> </li>';
                            }
                            if (avatar) {
                                // time = $.timeago(new Date(response['data'][i]['action_time']));
                                the_list += `<li class="nav-item" onclick="location.href = '../warehouse/warehouse_feeds';"><a class="dropdown-item"><span class="image"><img src="${v.profile_pic_path}" alt="Profile Image" style="margin-left:-60px"/></span><span><span>${v.done_by}</span><span class="time">${time}</span></span>
                          <span class="message" style="padding:5px;">${v.message}</span></a>
                          </li>`

                                // the_list += '<li style="background-color:#F7F7F7; display:flex; border-bottom:1px solid #EDEDED"> <a class="user-post-profile">       <img src="'+v.profile_pic_path+'" alt="img" class="img_style">   </a>   <div class="block_content" style="width:100%; position:relative; left:-30px;">   <h2 class="title" style="font-weight: bold; position:relative; left:-20px;">       <a>'+v.done_by+'</a>    </h2>   <div class="byline"> <span>'+time+'</span><!-- by <a>Jane Smith</a> --></div>    <p class="">'+v.message+'</p>     </div>   </div> </li>';
                            }

                            // the_list += `<li style="background-color:#F7F7F7"></li>`

                            //    if(`${v.ref_id}` > 0){
                            //        time = $.timeago(new Date(response['data'][i]['action_time']));
                            //       the_list += '<li>    <div class="block">  <div class="tags">    <a class="user-post-profile">       <img src="'+v.profile_pic_path+'" alt="img" class="img_style">   </a> <!--  <a href="#" class="tag" style="margin-top:-20px;">Transfer</a> -->        </div>   <div class="block_content">   <h2 class="title" style="font-weight: bold">       <a>'+v.done_by+'</a> <i class="fa fa-exchange" aria-hidden="true" title="Transfer" style="width:60%; font-size:18px; position:relative; left:80%"></i>     </h2>   <div class="byline"> <span>'+time+'</span><!-- by <a>Jane Smith</a> --></div>    <p class="excerpt">'+v.message+'</p> <span class="tf" id="tf_'+v.feed_id+'"><button data="'+v.company_id+'" dir="'+v.ref_id+'" id="accept" style="background-color: #3CB371; color:white; border:none; padding:5px; padding:5px 10px; border-radius: 3px;"> Accept</button> <button  id="decline" dir="'+v.ref_id+'" style="background-color:#CD5C5C; padding:10px; color:white; border:none; padding:5px 10px; border-radius: 3px;">Decline</button></span><i class="fa fa-spinner fa-spin fa-fw fa-1x" style="display: none;" id="filter_acc_dec"></i>    </div>   </div> </li>';

                            //     }
                            //     else{
                            //       // alert(v.profile_pic_path);
                            //       time = $.timeago(new Date(response['data'][i]['action_time']));
                            //        // <img src="../files/images/user_profile_images/mid_'+v.profile_pic+'" alt="img">
                            //       the_list += '<li>    <div class="block">  <div class="tags">    <a class="user-post-profile">       <img src="'+v.profile_pic_path+'" alt="img">    </a>   <!--<i  class="fa fa-info-circle"  data-toggle="tooltip" data-placement="top" style="font-style: italic; color: #add8e6; font-size: 20px; cursor : pointer;" title="View Low Item Info"></i> -->            </div>   <div class="block_content">   <h2 class="title" style="font-weight: bold">       <a>'+v.done_by+'</a>   </h2>   <div class="byline"> <span>'+time+'</span><!-- by <a>Jane Smith</a> --></div>    <p class="excerpt">'+v.message+'</p>    </div>   </div> </li>'; 
                            //       } 
                            // alert('good');


                        });


                        // the_list += "</ul>";

                    } else {

                        strTable = '<tr><td colspan="6">' + response.msg + '</td></tr>';

                    }

                    // $('#pagination').twbsPagination({
                    //     totalPages: Math.ceil(response.total_rows / limit),
                    //     visiblePages: 10,
                    //     onPageClick: function(event, page) {
                    //         fetch_feeds(page);
                    //     }
                    // });
                    // alert('good');

                    $("#add_notif").append(the_list);
                    $("#add_notif").append(
                        ` <li class="nav-item" onclick="location.href = '../warehouse/warehouse_feeds';"><div class="text-center"><a class="dropdown-item"> <strong>See All Notifications</strong> <i class="fa fa-angle-right"></i></a> </div></li>`
                    );


                    // $("#notfi_ddv").show();
                    // $('#loading').hide();

                } else {

                    // console.log(response);

                    var the_list = "";
                    $('#loading').hide();
                    the_list += response.msg;


                    // $("#notfi_ddv").html(the_list);
                    // $("#notfi_ddv").show();


                }

            },

            error: function(response) {

                // console.log(response);

                var the_list = "";
                $('#loading').hide();
                the_list += '<li>' + response.msg + '</li>';


                $("#notfi_ddv").show();
                $("#incomingData").html(the_list);

            }

        });

    }






    function getListOfWarehouseUSerHasAccessTo() {
        var company_id = localStorage.getItem('company_id');
        var user_id = localStorage.getItem('user_id');

        $.ajax({

            type: "POST",
            dataType: "json",
             headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
            url: api_path + "wms/list_warehouses_user_connected",
            data: {
                "company_id": company_id,
                "user_id": user_id
            },
            timeout: 60000,

            success: function(response) {

                if (response.status == '200') {
                    console.log(response);
                    $('#loading_dlv').hide();
                    var str = "";
                    // alert(response.data.length)
                    if (Object.keys(response.data).length > 0) {

                        $.each(response['data'], function(i, v) {

                            str += '<tr>';
                            str += '<td>' + response['data'][i]['warehouse_name'] + '</td>';
                            str += '<td>' + response['data'][i]['warehouse_address'] + '</td>';
                            str +=
                                '<td><button name="enter_ware" class="enter_ware btn btn-primary btn-sm" id="enter_' +
                                response['data'][i]['warehouse_id'] + '" dir="entername_' +
                                response['data'][i]['warehouse_name'] +
                                '" data-dismiss="modal">Enter</button></td>';
                            str += '</tr>';

                        })

                        // $('#switch_tab').show();
                        $('#warehouse_dlv').html(str);

                    }

                } else {
                    $('#loading_dlv').hide();
                    $('#warehouse_dlv').html('');
                    $('#warehouse_dlv').html('Technical error!');
                }

            },
            // objAJAXRequest, strError
            error: function(response) {
                $('#loading_dlv').hide();
                $('#warehouse_dlv').html('');
                // alert('Error fetching warehouses!');
                $('#warehouse_dlv').html('Error fetching List!');

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



    <!-- <i class="fa fa-spinner fa-spin fa-fw fa-3x" id="preloader_loader" style="display: flex; align-items: center; justify-content: center;"></i> -->


    <div id="whole_body" style="display: none;">
        <!-- page beside loader section -->
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="./" class="site_title"><i class="fa fa-paw"></i> <span>Warehouse</span></a>

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
                                    <li id="dshbd" style="display: ;"><a href="/warehouse/"><i class="fa fa-home"></i>
                                            Home </a>
                                    </li>

                                    <li id="procurement" style="display: none;"><a><i class="fa fa-home"></i>
                                            Procurement <span class="fa fa-chevron-down"></span> </a>

                                        <ul class="nav child_menu">
                                            <li id="purchaseorders" style="display: none;"><a
                                                    href="purchaseorders">Purchase Orders</a></li>
                                            <li id="paystovendors" style="display: none;"><a
                                                    href="paystovendors">Payments to Vendors</a></li>
                                        </ul>

                                    </li>

                                    <li id="incoming_tab" style="display: none;"><a><i
                                                class="fa fa-cart-arrow-down"></i> Incoming <span
                                                class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">

                                            <li id="receiveorders" style="display: none;"><a href="po_test">Receive
                                                    Orders</a></li>
                                            <li id="itemsreceivedlist" style="display: none;"><a
                                                    href="receivepoitems">Items Received</a></li>

                                        </ul>
                                    </li>

                                    <li id="outgoing_tab" style="display: none;"><a><i class="fa fa-arrow-up"></i>
                                            Outgoing <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <!-- <li><a href="salesquotes">Sales Quotes</a></li> -->
                                            <li id="invoicesreceipts" style="display: none;"><a
                                                    href="invoicesreceipts">Issue Orders</a></li>

                                            <li id="supplyitems" style="display: none;"><a href="supplyitems">Items
                                                    Issued</a></li>
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

                                    <li id="sales_tab" style="display: none;"><a><i class="fa fa-money"></i> Sales <span
                                                class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <!-- <li><a href="salesquotes">Sales Quotes</a></li> -->
                                            <li id="invoicesreceipts333"><a
                                                    href="invoicesandreceipts">Invoice/Receipt</a></li>
                                            <li id="paysfromclients_2"><a href="paysfromclients">Payments from
                                                    Clients</a></li>

                                        </ul>
                                    </li>

                                    <li id="qty_adjustment" style="display: none;"><a><i class="fa fa-sliders"></i>
                                            Quantity Adjustment <span class="fa fa-chevron-down"></span></a>
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

                                    <li id="expenses" style="display: none;"><a href="expenses"><i
                                                class="fa fa-money"></i> Expenses </a>

                                    </li>


                                    <li id="transfer" style="display: none;"><a><i
                                                class="fa fa-sliders"></i>Transfers<span
                                                class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li id="transfer" ><a href="#">Send Out</a>
                                                <ul class="nav child_menu">
                                                    <li id="transfer" ><a
                                                            href="internal_transfer">Internal</a></li>
                                                    <li id="transfer_history"><a href="external_transfer">External</a>
                                                    </li>
                                                </ul>

                                            </li>
                                            <li id="transfer"><a href="accepted_transfers">Receive</a>
                                                <!-- <ul class="nav child_menu">
                                                    <li id="transfer" style="display: "><a href="accepted_transfers">Accepted Transfers</a></li>
                                                    <li id="transfer_history"><a href="moved_items">Moved Items</a>
                                                    </li>
                                            </ul> -->

                                            </li>
                                            <!-- <li id="transfer_history"><a href="transfer_history">Transfer History</a>
                                            </li> -->
                                            <li id="transfer_not"><a href="transfer_notifications">Transfer
                                                    Notifications</a>
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



                                    <li id="items" style="display: none;"><a href="items"><i
                                                class="fa fa-shopping-basket"></i> Items List </a>
                                    </li>

                                    <li id="contacts" style="display: none;"><a href="contacts"><i
                                                class="fa fa-users"></i> Contacts </a>
                                    </li>

                                    <li id="settings_tab" style="display: none;"><a><i class="fa fa-gear"></i> Settings
                                            <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="warehouses">Warehouses</a></li>
                                            <li><a href="unit_type">Unit Type</a></li>
                                            <li><a href="users">Users</a></li>
                                            <li><a href="preferences">Prefrences</a>
                                            </li>


                                            <!-- <li><a href="bizprofile">Business Profile</a></li> -->
                                            <li style="display: none"><a href="whsections" id="whsections">Warehouse
                                                    Sections</a></li>

                                        </ul>
                                    </li>


                                    <!--   <li id="procurement_report" style="display: none;"><a><i class="fa fa-file"></i> Reports <span class="fa fa-chevron-down"></span> </a>

                                    <ul class="nav child_menu">
                                      <li id="vendors" style="display: none;"><a href="vendors_report">Vendors</a></li>
                                      <li id="expenses" style="display: none;"><a href="expenses_report">Expenses</a></li>
                                    </ul>

                                </li> -->

                                    <li id="report_tab" style="display: none;"><a href="reports"><i
                                                class="fa fa-bar-chart"></i> Reports </a>
                                    </li>

                                    <li id="switch_tab" style="display: none;"><a id="switch"><i
                                                class="fa fa-refresh"></i> Switch Warehouse</a>
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

                            <a data-toggle="tooltip" data-placement="top" title="Logout"
                                onclick="localStorage.clear();  window.location.href = site_url ">
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
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false" id="username">
                                        <img src="" alt="" id="profile_img"><span class=" fa fa-angle-down"></span>

                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right" id="user_list">

                                        <li style="background-color: "><a
                                                onclick="window.location.href = site_url+'/user/myprofile'"><i
                                                    class="fa fa-pencil pull-right"></i><b id="user_name"></b></a></li>

                                        <li><a onclick="window.location.href = site_url+'/user/change_password'">Change
                                                Password</a></li>

                                        <li><a
                                                onclick="function hi(){ localStorage.clear(); window.location.href = site_url}; hi();"><i
                                                    class="fa fa-sign-out pull-right"></i> Log Out</a></li>

                                    </ul>
                                </li>







                                <!-- <div id="myNav" class="overlay" style="z-index: 10">
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
                                        style="color: #09B1F0; font-size: 40px"> × </a>
                                    <a href="javascript:void(0)" class="logo" onclick="closeNav()"
                                        style="font-size: 16px">
                                        <img src="../nahere_logo_blue.png" alt="alternative" style="width: 28px">
                                        <span> NaHere!</span>
                                    </a>
                                    <div>
                                    </div>

                                    <div class="container">
                                        <h2 class="app">Applications</h2>
                                        <h4 style="text-align: center; color: black;">Connected applications </h4>
                                        <a href="/user/myapps"
                                            style="text-align: center; font-weight: 0px; font-size: 14px;">Add More Apps
                                            <i class="fa fa-angle-right"></i></a>
                                        <div class="row fst_dd" style="margin-top: 3%;">

                                        </div>
                          
                                    </div>
                             
                                    <div class="container" style="">
                                        <div class="col-md-12">
                                            <li>
                                                <a href="/user/myapps">Add More Apps<i class="fa fa-angle-right"></i></a>
                                            </li>
                                        </div>
                                    </div>
                                </div> -->

                                <li role="presentation" class="nav-item dropdown" style="display: block;">
                                    <a href="javascript:;" style="display: block;"
                                        class="dropdown-toggle info-number gg" id="navbarDropdown1"
                                        data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-bell-o"></i>

                                        <span class="badge bg-red"></span>
                                    </a>
                                    <ul class="dropdown-menu list-unstyled msg_list open" id="add_notif" role="menu"
                                        aria-labelledby="navbarDropdown1">
                                        <!-- <li class="nav-item">
                                            <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                            <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                            Film festivals used to be do-or-die moments for movie makers. They were where...
                                            </span>
                                            </a>
                                            </li> -->
                                    </ul>
                                </li>

                                <li role="presentation" class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                                        aria-expanded="false" onclick="openNav()">
                                        <i class="fa fa-th fa-3x"></i>

                                    </a>

                                </li>
                                <!-- <li role="presentation" class="dropdown" style="text-align: center; cursor: pointer;">
                                <a onclick="window.location.href = site_url+'/warehouse/warehouse_feeds'"; class="dropdown-toggle info-number gg" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-bell fa-4x " style="font-size: 20px; color: grey; box-shadow: rgba(0,0,0,0.19); "></i>
                                    <span class="badge bg-red" style="box-shadow: rgba(0,0,0,0.19); position:absolute;top:7px; left:23px;  height: 18px; border:1px solid white; text-align: center;">6</span>
                                </a>
                                


                                  <div class="open" style="display:none; position: relative; top: 2px; box-shadow: rgba(0,0,0,0.19);" >
                                      <ul class="dropdown-menu dropdown-usermenu pull-right" id="user_list_" style="width: 400px;">
                                         

                                          <li style="text-align: center; padding: 10px; background-color:white;">Notifications</li>
                                         

                                          <li style="text-align: center; padding: 10px; background-color: white;">See more notifications</li>

                                      </ul>
                                    </div>
                            </li> -->

                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- 
                               <div class="col-md-12">
                                    <div id="myNav" class="overlay" style="z-index: 10"> -->
                <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="color: #09B1F0; font-size: 40px"> × </a>  -->
                <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
                                        style="color: #09B1F0; font-size: 40px"> × </a>
                                        <a href="javascript:void(0)" class="logo" onclick="closeNav()"
                                        style="font-size: 16px">
                                            <img src="../nahere_logo_blue.png" alt="alternative" style="width: 28px">
                                            <span> NaHere!</span>
                                        </a>
                                        <div>
                                        </div>

                                        <div class="container" style="height: 100vh; width:100vw;">
                                            <h2 class="app">Applications</h2>
                                            <a href="/user/myapps"
                                                style="text-align: center; font-weight: 0px; font-size: 14px;">Add
                                                More Apps <i class="fa fa-angle-right"></i></a>
                                            <div class="row fst_dd" style="margin-top: 3%;">

                                            </div>

                                        </div>



                                        <div class="container" style="">
                                            <div class="col-md-12">
                                                <li>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->


                <div class="col-md-12">
                    <div id="myNav" class="overlay" style="z-index: 10">
                        <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="color: #09B1F0; font-size: 40px"> × </a>  -->
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
                            style="color: #09B1F0; font-size: 40px"> × </a>
                        <a href="javascript:void(0)" class="logo" style="font-size: 16px">
                            <img src="../nahere_logo_blue.png" alt="alternative" style="width: 28px">
                            <span> NaHere!</span>
                        </a>
                        <div>
                        </div>

                        <div class="container" style="height: 100vh; width:100vw;">
                            <h2 class="app">Applications</h2>
                            <!-- <h4 style="text-align: center; color: black;">Connected applications </h4> -->
                            <a href="/user/myapps" style="text-align: center; font-weight: 0px; font-size: 14px;">Add
                                More Apps <i class="fa fa-angle-right"></i></a>
                            <span class="set_as_default" style="cursor: pointer">
                                <a style="text-align: center; font-weight: 0px; font-size: 11px;">Set default app</a>
                            </span>
                            <!-- <p>Set default app</p> -->
                            <div class="row fst_dd" style="margin-top: 3%;">

                            </div>
                            <!-- <div class="row" align="center" >
                                        <div class="col-md-12" style="position: absolute; bottom: 0;">
                                        <a href="/user/myapps">Add More Apps<i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div> -->
                        </div>



                        <!-- <div class="container">
                                        <div class="row">

                                        <div class="col-md-2" data-tooltip="Social">
                                        <li class="dd"><a style="position: relative;right: 20%;" href="../workgroup" class="get_comp_list" id="themodli_" data="feeds"><span class="image">
                                        <img src="../files/images/icons/feeds_icon.png" alt=""></span>     <span>        <div class="abbrv"><span class="hide_hover">Social</span></div></span>   </a></li></div>

                                                <div class="col-md-2" data-tooltip="Social">
                                                <li class="dd"><a style="position: relative;right: 20%;" href="../workgroup" class="get_comp_list" id="themodli_" data="feeds"><span class="image">
                                                <img src="../files/images/icons/feeds_icon.png" alt=""></span>     <span>        <div class="abbrv"><span class="hide_hover">Social</span></div></span>   </a></li></div>

                                                <div class="col-md-2" data-tooltip="Social">
                                                <li class="dd"><a style="position: relative;right: 20%;" href="../workgroup" class="get_comp_list" id="themodli_" data="feeds"><span class="image">
                                                <img src="../files/images/icons/feeds_icon.png" alt=""></span>     <span>        <div class="abbrv"><span class="hide_hover">Social</span></div></span>   </a></li></div>

                                                <div class="col-md-2 " data-tooltip="Social">
                                                <li class="dd"><a style="position: relative;right: 20%;" href="../workgroup" class="get_comp_list" id="themodli_" data="feeds"><span class="image">
                                                <img src="../files/images/icons/feeds_icon.png" alt=""></span>     <span>        <div class="abbrv"><span class="hide_hover">Social</span></div></span>   </a></li></div>

                                                <div class="col-md-2 " data-tooltip="Social">
                                                <li class="dd"><a style="position: relative;right: 20%;" href="../workgroup" class="get_comp_list" id="themodli_" data="feeds"><span class="image">
                                                <img src="../files/images/icons/feeds_icon.png" alt=""></span>     <span>        <div class="abbrv"><span class="hide_hover">Social</span></div></span>   </a></li></div>

                                                <div class="col-md-2" data-tooltip="Social">
                                                <li class="dd"><a style="position: relative;right: 20%;" href="../workgroup" class="get_comp_list" id="themodli_" data="feeds"><span class="image">
                                                <img src="../files/images/icons/feeds_icon.png" alt=""></span>     <span>        <div class="abbrv"><span class="hide_hover">Social</span></div></span>   </a></li></div>
                                        </div>
                                    </div> -->


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
                </div>

                <div class="modal fade" id="set_default" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header ">
                                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;">Set Default App
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </h3>

                            </div>
                            <div class="modal-body">
                                <br>
                                <br>
                                <div id="edit_form">
                                    <span id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                for="low_item">Select Default<span>*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- <input type="number" id="selling_cost" required="required"
                                    class="form-control col-md-7 col-xs-12 required4 allownumericwithdecimal"> -->
                                                <select class="form-control col-md-7 col-xs-12 required4 set_">
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12 text-danger" id="error_low">

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" id="form_footer">
                                                <button type="submit" class="btn btn-success"
                                                    id="update_default">Update</button>
                                                <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;"
                                                    id="edit_item_selling_cost_loader"></i>
                                                <!-- <div id="add_user_loading" style="display:  none">Loading...</div> -->
                                            </div>
                                        </div>
                                    </span>
                                </div>

                            </div>
                            <!-- <div class="modal-footer"> -->
                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            <!-- </div> -->
                        </div>
                    </div>
                </div>

                 <!-- modal -->
                 <div class="modal fade" id="modal_successful" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">

                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header ">
                                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;">Default App
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </h3>

                            </div>
                            <div class="modal-body" style="margin-bottom: 20px;">
                                <h4 id="modal_msg">Default App updated successfully!</h4>
<!-- 
                                <div class="row">
                                    <div class="form-group" style="margin-bottom: 20px;">
                                        <label class="control-label col-md-4 col-sm-4 col-xs-12"
                                            for="default_home">Select a default module
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">

                                            <select class="form-control" id="def_home">

                                            </select>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-success" id="yes_delete_position"
                                    data-dismiss="modal">Confirm</button>
                            </div> -->
                        </div>
                    </div>
                </div>


                <!-- modal -->
                <div class="modal fade" id="modal_switch" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <td colspan="3" style="text-align: center; padding-top: 15px"><i
                                                        class="fa fa-spinner fa-spin fa-fw fa-3x"
                                                        style="display: ;"></i></td>
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






                <!-- modal for apps company question -->
                <div class="modal fade" id="modal_choose_company" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <h4 id="list_comp_tables">Team Member Added Successfully!</h4>
                                <span id="list_comp_tables2"></span>
                            </div>
                            <!-- <div class="modal-footer"> -->
                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            <!-- </div> -->
                        </div>
                    </div>
                </div>

                <span id="user_perm_status" style="display: none"></span>
                <span id="current_warehouse_id" style="display: none"></span>
                <span id="does_user_have_profile" style="display: none"></span>


                