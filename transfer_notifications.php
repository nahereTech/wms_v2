<?php
include_once("_common/menu.php"); // menu list
include_once("../gen/_common/header.php"); // header contents
include_once("assets/wms.php"); // header contents
?>


<style type="text/css">
.tag {
    background: #324960;
    border-radius: 3px 0 0 3px;
    color: #999;
    display: inline-block;
    height: 26px;
    line-height: 26px;
    float: left;
    margin-top: -30px;
    /*padding: 0 20px 0 23px;*/
    position: relative;
    margin: 0 10px 10px 0;
    text-decoration: none;
    -webkit-transition: color 0.2s;
}

.menu_section {
    background-color: #2A3F54 !important;
}

.tag::before {
    background: #fff;
    border-radius: 10px;
    box-shadow: inset 0 1px rgba(0, 0, 0, 0.25);
    /*content: '';*/
    height: 6px;
    left: 10px;
    position: absolute;
    width: 6px;
    top: 10px;
}

.tag::after {
    background: #fff;
    border-bottom: 13px solid transparent;
    border-left: 10px solid #324960;
    border-top: 13px solid transparent;
    content: '';
    position: absolute;
    right: 0;
    top: 0;
}

.tag:hover {
    background-color: crimson;
    color: white;
}

.tag:hover::after {
    border-left-color: crimson;
}

.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active,
.accordion:hover {
    /* background-color: #ccc;  */
}

.panel {
    padding: 0 18px;
    display: none;
    background-color: white;
    overflow: hidden;
}
</style>



<!-- page content -->
<div class="right_col" role="main">
    <div class="">


        <div class="page-title">
            <div class="title_left">
                <h3>Hi <span id="hi_user_name"></span>, &nbsp;
                    <!-- <button type="button" class="btn btn-default" id="outgoing_filter">Filter</button> -->
                </h3>
                <!-- Here are some important notifications for you. <br><br> -->
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group" style="float: right">

                        <!-- <a id="post_a_feed"><button type="button" class="btn btn-success">Post</button></a> -->

                        <button type="button" class="btn btn-default" id="display_filter">Filter Notifications</button>



                        <!-- <a href="downward_adjustment?a=remove"><button type="button" class="btn btn-primary">Adjustment</button></a> -->


                    </div>
                </div>
            </div>
        </div>








        <div id="filter_display" style="display: none;">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">

                        <div class="x_content">
                            <br />


                            <div class="form-row">

                                <div class="col-sm-3 col-xs-4">
                                    <label>Company</label>
                                    <select class="form-control" id="companies_fill">
                                        <option>-- Select Company --</option>
                                    </select>
                                </div>

                                <!--  <div class="col-sm-3 col-xs-4">
                        <label>Notification Type</label>
                         <select  class="form-control" id="not">
                          <option>-- All --</option> -->
                                <!-- <option value="ess">ESS</option> -->
                                <!-- <option value="6">WMS</option>
                          <option value="18">CIS</option> -->
                                <!--  </select>
                      </div> -->

                                <!-- <div class="col-sm-3 col-xs-4">
                        <label>User</label>
                        <input type="text" class="form-control" id="item_code">
                      </div> -->

                                <div class="col-sm-2 col-md-2 col-xs-12" id="period" style="display: ">
                                    <label>Period</label>
                                    <select class="form-control col-md-7 col-xs-12 required" id="deleted_itms">
                                        <option value="">-- Select --</option>
                                        <option value="today">Today</option>
                                        <option value="yesterday">Yesterday</option>
                                        <option value="this_week">This Week</option>
                                        <option value="last_week">Last Week</option>
                                        <option value="this_month">This Month</option>
                                        <option value="this_quarter">This Quarter</option>
                                        <option value="this_year">This Year</option>
                                        <option value="custom" id="custom">Custom</option>

                                    </select>
                                </div>

                                <!-- <div class="col-sm-3 col-xs-12" id="show_custom" style="display: ">
                                    <label>Date Range</label><br>
                                <input type="text" name="datefilter" value="" style="background: #fff; cursor: pointer; padding: 7px 10px; border: 1px solid #ccc; width: 50%"/>
                                    
                                </div> -->



                                <!-- <div id="reportrange" class="col-sm-3 col-xs-12" style="background: #fff; cursor: pointer; padding: 7px 10px; margin-top:23px; border: 1px solid #ccc; width: 20%">
                                <i class="fa fa-calendar"></i>&nbsp;
                                <span></span> <i class="fa fa-caret-down"></i>
                                </div>    -->

                                <div class="col-sm-3 col-xs-4" id="show_custom">
                                    <label>Date Range</label>
                                    <input type="text" id="date_range" class="form-control" name="datefilter" value="">
                                </div>

                                <span class="form-row" style="margin-top: 10px;">

                                    <div class="col-sm-3 col-xs-4">
                                        <br>
                                        <button type="button" class="btn btn-success" id="do_filter"
                                            style="margin-right: 100%; position: relative; top: 4px;">Go</button>
                                        <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;"
                                            id="filter_loader"></i>
                                </span>

                            </div>


                        </div>
                        <br><br>


                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="clearfix"></div>


    <div class="row top_tiles">


    </div>


    <div class="row" id="show_filt" style="display: none;">
        <!-- <div class="col-md-9 col-sm-9 col-xs-12"> -->
        <!-- <div class="x_panel"> -->

        <!-- <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none ; text-align: center;" id="loading_not"></i>
                  <div class="x_content" id="notfi">


                    <span>

                    </span>

                      <div class="container">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination" id="pagination_not"></ul>
                                </nav>
                            </div>

                  </div> -->


        <!-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                     <ins class="adsbygoogle"
                      style="display:block"
                      data-ad-format="fluid"
                      data-ad-layout-key="-fb+5w+4e-db+86"
                      data-ad-client="ca-pub-6149188842223532"
                      data-ad-slot="2728717183"></ins>
                  <script>
       (adsbygoogle = window.adsbygoogle || []).push({});
  </script>

                </div> -->
        <!-- </div> -->
        <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Online</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <!-- <div style="color: #a3424c; font-size: 14px;">Send Cakes to Friends</div>
                    <div>With a click of a button, send</div>
                    <div>cakes to your loved ones</div>
                    <div style="color: green;">www.cakeicon.com</div>

                    <br><br>

                    <div style="color: #a3424c; font-size: 14px;">Send Cakes to Friends</div>
                    <div>With a click of a button, send</div>
                    <div>cakes to your loved ones</div>
                    <div style="color: green;">www.cakeicon.com</div> -->


                    <!-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-6149188842223532"
                         data-ad-slot="6625598816"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                         (adsbygoogle = window.adsbygoogle || []).push({});
                    </script> -->


                </div>
            </div>
        </div>
    </div>

    <!-- </div> -->





    <div class="row" id="noft">

        <div class="col-md-9 col-sm-9 col-xs-12">
            <!-- <button class="accordion" style="color: #ce7379; display: none;">Some transfer notifications needs your attention, click here to check<span style="float: right;"><i class="fa fa-caret-down" aria-hidden="true"></i></span></button> -->

            <div class="x_content" id="transaction_ddv" style="display: block; background-color: white; border-radius:7px;">

                <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ; text-align: center;" id="loading"></i>

                <span>

                </span>

                <div class="container">
                    <nav aria-label="Page navigation">
                        <ul class="pagination" id="pagination"></ul>
                    </nav>
                </div>

            </div>
            <!-- <div class="x_panel">

                 
                  
                  <div class="x_content" id="notfi_ddv">

                    <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ; text-align: center;" id="loading"></i>

                    <span>

                    </span>

                      <div class="container">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination" id="pagination"></ul>
                                </nav>
                            </div>

                  </div>

                </div> -->
        </div>









        <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Online</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <!-- <div style="color: #a3424c; font-size: 14px;">Send Cakes to Friends</div>
                    <div>With a click of a button, send</div>
                    <div>cakes to your loved ones</div>
                    <div style="color: green;">www.cakeicon.com</div>

                    <br><br>

                    <div style="color: #a3424c; font-size: 14px;">Send Cakes to Friends</div>
                    <div>With a click of a button, send</div>
                    <div>cakes to your loved ones</div>
                    <div style="color: green;">www.cakeicon.com</div> -->


                    <!-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-6149188842223532"
                         data-ad-slot="6625598816"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                         (adsbygoogle = window.adsbygoogle || []).push({});
                    </script> -->


                </div>
            </div>
        </div>



    </div>




</div>
</div>
</div>
<!-- /page content -->








<div class="modal fade" id="modal_post_feed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header ">
                        <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;"><i class="fa info-circle"></i> Cake Info <span id="btch_cddd" style="font-size: 14px"></span>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        </h3>
                    </div> -->
            <div class="modal-body">

                <div class="row" style="margin-top: 0px">

                    <div class="col-md-2 col-sm-2 col-xs-2">
                        <img class="img-responsive avatar-view"
                            src="https://colorlib.com/polygon/gentelella/images/picture.jpg" alt="Avatar"
                            title="Change the avatar" width="100%">
                    </div>

                    <div class="col-md-10 col-sm-10 col-xs-10">


                        <textarea id="message" required="required" class="form-control" name="message"
                            data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100"
                            data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10" rows="3"></textarea>

                        <div style="float: right">
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="flat" checked="checked" style="">&nbsp;Post to
                                            my companies<br>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-success">Post</button>
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>


                        <!-- <div class="table-responsive">
                                    <table class="table">
                                        
                                      

                                    </table>
                                </div> -->

                    </div>

                </div>

            </div>
            <!-- <div class="modal-footer"> -->
            <!-- <button class="btn btn-primary">Generate</button> -->
            <!-- <button type="button" class="btn btn-primary">Print</button>
                        <button type="button" class="btn btn-primary">Email</button> -->
            <!-- <button type="button" class="btn" style="background-color: #f9aba9; color: white" data-dismiss="modal">Close</button> -->
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->

            <!-- </div> -->
        </div>
    </div>
</div>



<script>
$(document).on('click', '#accept', function() {
    var ref = $(this).attr('dir');
    var feed_id = $(".tf").attr('id');
    var comp_id = $(this).attr('data');
    // alert(feed_id);
    // alert(`${ref}`);
    accept_decline(ref, "accept", comp_id, feed_id);

});
$(document).on('click', '#decline', function() {

    var ref = $(this).attr('dir');
    var feed_id = $(this).attr('id');
    var comp_id = $(this).attr('data');
    accept_decline(ref, "decline", comp_id, feed_id);

});

function accept_decline(ref_id, status, company_id, feed_id) {
    var user_id = localStorage.getItem('user_id');
    var list_type = "";

    $(`#filter_acc_dec_${ref_id}`).show();

    $.ajax({
        type: "POST",
        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/confirm_transfer",
        data: {
            "ref_id": ref_id,
            "company_id": company_id,
            "status": status,
            "user_id": localStorage.getItem("user_id"),
        },
        timeout: 60000, // sets timeout to one minute

        error: function(response) {

            alert('connection error');
        },

        success: function(response) {
            console.log(response);
            if (response.status == '200') {
                $(`#${feed_id}`).slideUp('slow');
                $(`#filter_acc_dec_${ref_id}`).hide();

                // $(".tf").slideUp();

                alert('successful')
            } else {
                alert(response.msg);
                $(`#filter_acc_dec_${ref_id}`).hide();


            }



            // $('#loader_row_' + list_id).hide();
        }
    });

}

function fetch_feeds(page) {

    var company_id = localStorage.getItem('company_id');
    var user_id = localStorage.getItem('user_id');
    if (page == "") {
        var page = 1;
    }
    var limit = 25;

    $.ajax({
        type: "GET",
        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },
        
        url: api_path + "feeds/list_feeds",
        data: {
            "company_id": company_id,
            "user_id": user_id,
            "limit": limit,
            "page": page,
            "token": localStorage.getItem('token')
        },
        timeout: 60000,
        success: function(response) {

            console.log(response);

            var the_list = "";
            var transac = "";
            var num = ""

            if (response.status == '200') {

                if (response.data.length > 0) {

                    var k = 1;
                    var time = ""

                    //   the_list += '<ul class="list-unstyled timeline">';
                    transac += '<ul class="list-unstyled timeline">';


                    $.each(response['data'], function(i, v) {

                        var avatar = `${v.profile_pic}`
                        var feed = `${v.feed_id}`

                        // if(!avatar){
                        //   time = $.timeago(new Date(response['data'][i]['action_time']));
                        //   the_list += '<li>    <div class="block">  <div class="tags">    <a class="user-post-profile">       <img src="../files/images/user_profile_images/sml_default_picture.png" alt="img" class="img_style">   </a> <!-- <i  class="fa fa-info-circle"  data-toggle="tooltip" data-placement="top" style="font-style: italic; color: #add8e6; font-size: 20px; cursor : pointer;" title="View Low Item Info"></i>     -->           </div>   <div class="block_content">   <h2 class="title" style="font-weight: bold">       <a>'+v.done_by+'</a>    </h2>   <div class="byline"> <span>'+time+'</span><!-- by <a>Jane Smith</a> --></div>    <p class="excerpt">'+v.message+'</p>     </div>   </div> </li>';
                        // }
                        if (`${v.ref_id}` > 0 && `${v.module_name}` ==
                            "Warehouse Management System" && `${v.feed_type}` == "item transfer" &&
                            `${v.from_warehouse}` !== localStorage.getItem('warehouse_id')) {
                            //  time = $.timeago(new Date(response['data'][i]['action_time']));
                            transac +=
                                '<li>    <div class="block">  <div class="tags">    <a class="user-post-profile">       <img src="' +
                                v.profile_pic_path +
                                '" alt="img" class="img_style">   </a> <!--  <a href="#" class="tag" style="margin-top:-20px;">Transfer</a> -->        </div>   <div class="block_content">   <h2 class="title" style="font-weight: bold">       <a>' +
                                v.done_by +
                                '</a> <i class="fa fa-exchange" aria-hidden="true" title="Transfer" style="width:60%; font-size:18px; position:relative; left:80%"></i>     </h2>   <div class="byline"> <span>' +
                                time +
                                '</span><!-- by <a>Jane Smith</a> --></div>    <p class="excerpt">' +
                                v.message + '</p> <span class="tf" id="tf_' + v.feed_id +
                                '"><button data="' + v.company_id + '" dir="' + v.ref_id +
                                '" id="accept" style="background-color: #3CB371; color:white; border:none; padding:5px; padding:5px 10px; border-radius: 3px;"> Accept</button> <button  id="decline" dir="' +
                                v.ref_id +
                                '" style="background-color:#CD5C5C; padding:10px; color:white; border:none; padding:5px 10px; border-radius: 3px;">Decline</button></span><i class="fa fa-spinner fa-spin fa-fw fa-1x filter_acc_dec' +
                                v.ref_id + '" style="display: none;" id="filter_acc_dec_' + v
                                .ref_id + '"></i>    </div>   </div> </li>';
                            $(".accordion").show();



                        } else if (`${v.feed_type}` == "item transfer") {

                            // time = $.timeago(new Date(response['data'][i]['action_time']));

                            // <img src="../files/images/user_profile_images/mid_'+v.profile_pic+'" alt="img">
                            transac +=
                                '<li>    <div class="block">  <div class="tags">    <a class="user-post-profile">       <img src="' +
                                v.profile_pic_path +
                                '" alt="img">    </a>                </div>   <div class="block_content">   <h2 class="title" style="font-weight: bold">       <a>' +
                                v.done_by + '</a>   </h2>   <div class="byline"> <span>' + time +
                                '</span><!-- by <a>Jane Smith</a> --></div>    <p class="excerpt">' +
                                v.message + '</p>    </div>   </div> </li>';


                            // alert(v.profile_pic_path);
                            // time = $.timeago(new Date(response['data'][i]['action_time']));
                            // <img src="../files/images/user_profile_images/mid_'+v.profile_pic+'" alt="img">
                            // the_list += '<li>    <div class="block">  <div class="tags">    <a class="user-post-profile">       <img src="'+v.profile_pic_path+'" alt="img">    </a>   <!--<i  class="fa fa-info-circle"  data-toggle="tooltip" data-placement="top" style="font-style: italic; color: #add8e6; font-size: 20px; cursor : pointer;" title="View Low Item Info"></i> -->            </div>   <div class="block_content">   <h2 class="title" style="font-weight: bold">       <a>'+v.done_by+'</a>   </h2>   <div class="byline"> <span>'+time+'</span><!-- by <a>Jane Smith</a> --></div>    <p class="excerpt">'+v.message+'</p>    </div>   </div> </li>'; 
                        }

                    });


                    //   the_list += "</ul>";

                } else {

                    strTable = '<tr><td colspan="6">' + response.msg + '</td></tr>';

                }

                //   $('#pagination').twbsPagination({
                //       totalPages: Math.ceil(response.total_rows / limit),
                //       visiblePages: 10,
                //       onPageClick: function(event, page) {
                //           fetch_feeds(page);
                //       }
                //   });

                if (transac == "") {
                    $(".accordion").hide();
                } else {
                    $("#transaction_ddv").html(transac);
                }
                $(".num").html(num);
                //   $("#notfi_ddv").html(the_list);
                //   $("#notfi_ddv").show();
                $('#loading').hide();

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


            //   $("#notfi_ddv").show();
            $("#incomingData").html(the_list);

        }

    });

}
</script>
<?php
// include_once("_common/menu.php"); // menu list
include_once("../gen/_common/footer.php"); // header contents
// include_once("assets/wms.php"); // header contents
?>
