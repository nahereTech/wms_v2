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
                <h3>Batch Details</h3>
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
                        <!-- <button type="button" class="btn btn-success" id="add_warehouse">Add Batches</button> -->


                    </div>
                </div>
            </div>
        </div>

        <div id="warehouse_display">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">

                        <div class="x_content" id="bach_err">
                            <br />
                            <span id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                        for="add_warehouse_name">Batch Name<span>*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <!-- <datalist id="options">

                                        </datalist> -->

                                        <input class="form-control col-md-7 col-xs-12 required1" id="batch_name"
                                            autocomplete="off" readonly style="background-color: white;">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                        for="add_warehouse_name">Batch Code
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input class="form-control col-md-7 col-xs-12" id="batch_code"
                                            autocomplete="off" readonly style="background-color: white;">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                        for="add_warehouse_address">Description
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea cols="3" class="form-control col-md-7 col-xs-12" id="description" readonly style="background-color: white;">

                          </textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                        for="add_warehouse_name">Batch No<span>*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="batch_no"
                                            class="form-control col-md-7 col-xs-12 required1" readonly style="background-color: white;">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                        for="add_warehouse_name">Expiry<span>*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="date_received"
                                            class="form-control col-md-7 col-xs-12 not_empty required1" name="fullname"
                                            required="" value="" autocomplete="off" readonly style="background-color: white;">
                                    </div>
                                </div>
                              


                               

                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <!-- <div class="row">

            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <br>

                    <div class="x_content">



                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">

                                        <th class="column-title" style="width: 20%"> Batch Code </th>
                                        <th class="column-title" style="width: 30%"> Batch Name </th>
                                        <th class="column-title no-link last" style="width: 25%"><span
                                                class="nobr">Expiry</span>
                                        </th>
                                        <th class="column-title no-link last" style="width: 25%"><span
                                                class="nobr">Action</span>
                                        </th>
                                        <th class="bulk-actions" colspan="2">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span
                                                    class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tr id="loading">
                                    <td colspan="3"><i class="fa fa-spinner fa-spin fa-fw fa-3x"
                                            style="display: none ;"></i>
                                    </td>
                                </tr>

                                <tbody id="warehouseData">



                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div> -->
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

<!-- modal -->
<div class="modal fade" id="modal_view_warehouse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;">Warehouse Info
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">


                <div id="container4">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p><strong>Warehouse Name:</strong></p>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p id="name"></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p><strong>Warehouse Address:</strong></p>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p id="address"></p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
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



<div class="modal fade" id="modal_edit_warehouse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;">Edit Warehouse
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">
                <div id="edit_form">
                    <span id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="warehouse_name">Warehouse
                                Name<span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="warehouse_name" required="required"
                                    class="form-control col-md-7 col-xs-12 required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="warehouse_address">Warehouse
                                Address<span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea cols="3" class="form-control col-md-7 col-xs-12 required"
                                    id="warehouse_address">

                      </textarea>
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12 text-danger" id="error">


                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" id="form_footer">
                                <button type="submit" class="btn btn-success" id="edit_ware">Update</button>
                                <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;"
                                    id="edit_ware_loader"></i>
                                <!-- <div id="add_user_loading" style="display:  none">Loading...</div> -->
                            </div>
                        </div>

                    </span>
                </div>

                <div id="edit_msg" style="display: none;">
                    <h4>Warehouse Updated Successfully!</h4>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="update_refresh"
                            data-dismiss="modal">Ok</button>
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
$(document).ready(function() {
    // page_warehouse_access();
    $('#warehouse_display').show();
    load_items_for_pop();
    list_of_batches();
    $("#update_refresh").click(function() {
        location.reload(true);
    });

    
    $.urlParam = function(name){
              var results = new RegExp('[\?&]' + name + '=([^]*)').exec(window.location.href);
              if (results==null){
                 return null;
              }
              else{
                 return results[1] || 0;
              }
          }

    function getItem(listid) {
        if ($('#select_item').val() == "") {
            $('#select_item').addClass('has-error');
        } else {
            $('#select_item').removeClass('has-error');
        }
        var listObj = document.getElementById(listid);
        console.log(listObj);
        var datalist = document.getElementById(listObj.getAttribute("list"));
        console.log(datalist);
        var fa = datalist.options.namedItem(listObj.value);
        console.log(fa)
        var selected = fa.getAttribute('data-value');
        submit_add_batch(selected)
        localStorage.setItem('value_w', fa.getAttribute('data-value'))
    }

    // $('input#date_received').datepicker({
    //     dateFormat: "yy-mm-dd"
    // });
    does_user_have_access_to_page();
    var warehouse_id;



    $(document).on('click', '#add_batch', function() {
        getItem('select_item')
    });
    $('#add_warehouse').on('click', warehouse);

    // $('#add_ware').on('click', add_company_warehouse);

    $(document).on('click', '.delete_warehouse', function() {
        var warehouse_id = $(this).attr('id').replace(/war_/, '');
        delete_warehouse(warehouse_id);
    });

    $(document).on('click', '.warehouse_info', function() {
        warehouse_id = $(this).attr('id').replace(/wareIn_/, '');
        fetch_warehouse_info(warehouse_id);
    });

    $(document).on('click', '.edit_warehouse_icon', function() {
        warehouse_id = $(this).attr('id').replace(/warh_/, '');
        fetch_warehouse_details(warehouse_id);
    });

    $(document).on('click', '#edit_ware', function() {
        // var warehouse_id = $(this).attr('id').replace(/edt_/,''); 
        edit_company_warehouse(warehouse_id);
        // alert(warehouse_id);
    });



});


function does_user_have_access_to_page() {

    var user_id = localStorage.getItem('user_id');
    var module_id = 6;
    var profile_id = 0;

    $.ajax({

        type: "POST",
        dataType: "json",
        cache: false,
         headers: {
                'Authorization':localStorage.getItem('token'),
         },
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
                // list_of_company_warehouse();

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

function load_items_for_pop() {

    var company_id = localStorage.getItem('company_id');
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const id = urlParams.get('i');


    var list_whs = "";
    $.ajax({

        type: "POST",
        dataType: "json",
        cache: false,
         headers: {
                'Authorization':localStorage.getItem('token'),
         },
        url: api_path + "wms/list_store_items",
        data: {
            "warehouse_id": id,
            "company_id": company_id,
            "custom_id": "",
            "item_name": "",
            "item_code": "",
            "limit": 50,
            "page": 1
        },

        success: function(response) {

            var k = 1;
            console.log(response.data)
            $(response.data).each(function(i, v) {
                list_whs +=
                    `<option name=${v.item_name} value=${v.item_name} data-value=${v.item_id}></option>`;
                // strg += `<option value=${v.id}>${v.section_name}</option>`;
                // strg += `<option name=${v.section_name} value=${v.section_name} data-value=${v.id}></option>`;

            })

            $("#options").append(list_whs);

        },
        error: function() {
            console.log(response);
        }

    });

}

// $("#select_item").change(function() {
//         var selected = $(this).children("option:selected").val();
//         alert($(this).attr('data-value'))
//         alert(selected)
//         localStorage.setItem('selected_item', selected);
//         // alert("You have selected the country - " + selectedCountry);
// });

function submit_add_batch(item) {

    var blank;


    // alert($("#date_received").val());
    $(".required1").each(function() {

        var the_val = $(this).val();

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

    $("#ware_loader").show();
    $("#add_batch").hide();

    // Select Item, Batch Name, Batch Code, Description, Batch No., Expiry Date

    var select_name = item;
    var batch_name = $.trim($("#batch_name").val());
    var batch_code = $("#batch_code").val();
    var description = $("#description").val();
    var batch_no = $("#batch_no").val();
    var expiry_date = $("#date_received").val();

    alert(item)
    // return;



    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const id = urlParams.get('i');
    // ters: item_id,batch_name,batch_code,batch_description,batch_number,expiry_date

    $.ajax({

        type: "POST",
        dataType: "json",
         headers: {
                'Authorization':localStorage.getItem('token'),
         },
        url: api_path + "wms/createBatch", //list_warehouse_sections_2
        data: {
            "item_id": select_name,
            "batch_name": batch_name,
            "batch_code": batch_code,
            "batch_description": description,
            "company_id":localStorage.getItem('company_id'),
            "warehouse_id":localStorage.getItem('warehouse_id'),
            "batch_number": batch_no,
            "expiry_date": expiry_date
        },
        timeout: 60000,

        success: function(response) {

            console.log(response);

            if (response.status == '200') {

                alert("successfully added");
                location.reload();

                // window.location.href = "";

            } else {
                alert("Error creating section");
                $("#ware_loader").hide();
                $("#add_batch").show();
            }
        },

        error: function(response) {

            console.log(response);
            $("#ware_loader").hide();
            $("#add_batch").show();

        }

    });


}


function user_page_access() {

    var company_id = localStorage.getItem('company_id');
    var user_id = localStorage.getItem('user_id');
    var warehouse_id = localStorage.getItem('warehouse_id');
    var module_id = 6;

    $.ajax({

        type: "POST",
        dataType: "json",
         headers: {
                'Authorization':localStorage.getItem('token'),
    },
        url: api_path + "user/does_user_have_access_to_this_role",
        data: {
            "company_id": company_id,
            "user_id": user_id,
            "module_id": module_id,
            "role_id": 11,
            "warehouse_id": warehouse_id
        },
        timeout: 60000,

        success: function(response) {

            console.log(response);

            if (response.status == '200') {
                //show div
                $("#main_display").show();
                // list_of_company_warehouse();


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

function page_warehouse_access() {

    var company_id = localStorage.getItem('company_id');

    var user_id = localStorage.getItem('user_id');
    var module_id = 6;


    $.ajax({

        type: "POST",
        dataType: "json",
         headers: {
                'Authorization':localStorage.getItem('token'),
    },
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


function edit_company_warehouse(warehouse_id) {
    var warehouse_name = $("#modal_edit_warehouse #warehouse_name").val();
    var warehouse_address = $("#modal_edit_warehouse #warehouse_address").val();
    var company_id = localStorage.getItem('company_id');

    var blank;


    // alert(warehouse_id);

    $("#modal_edit_warehouse .required").each(function() {

        var the_val = $.trim($(this).val());

        if (the_val == "" || the_val == "0") {

            $(this).addClass('has-error');

            blank = "yes";

        } else {

            $(this).removeClass("has-error");

        }

    });

    if (blank == "yes") {

        $("#modal_edit_warehouse #error").html("You have a blank field");

        return;

    }


    // $("#modal_edit_warehouse #error").html("");

    $("#modal_edit_warehouse #edit_ware").hide();
    $("#modal_edit_warehouse #edit_ware_loader").show();



    $.ajax({

        type: "POST",
        dataType: "json",
        cache: false,
         headers: {
                'Authorization':localStorage.getItem('token'),
    },
        url: api_path + "wms/edit_warehouse",
        data: {
            "warehouse_name": warehouse_name,
            "warehouse_address": warehouse_address,
            "company_id": company_id,
            "warehouse_id": warehouse_id
        },

        success: function(response) {

            console.log(response);

            if (response.status == '200') {
                localStorage.setItem('warehouse_name', warehouse_name);
                $("#modal_edit_warehouse #error").html("");
                $("#modal_edit_warehouse #edit_ware_loader").hide();
                $("#modal_edit_warehouse #edit_ware").show();


                $('#modal_edit_warehouse #edit_form').hide();
                $('#modal_edit_warehouse #edit_msg').show();

                // $('#modal_department_edit').on('hidden.bs.modal', function () {
                //     $('#department_name').val();
                //     $('#department_description').val();
                //     // window.location.reload();
                //     window.location.href = base_url+"/erp/hrm/departments";
                // })


            } else if (response.status == '400') { // coder error message


                $("#modal_edit_warehouse #error").html('Technical Error. Please try again later.');

            } else if (response.status == '401') { //user error message


                $("#modal_edit_warehouse #error").html(response.msg);

            }






        },

        error: function(response) {

            console.log(response);
            $("#modal_edit_warehouse #edit_ware_loader").hide();
            $("#modal_edit_warehouse #edit_ware").show();
            $("#modal_edit_warehouse #error").html("Connection Error.");

        }

    });

}

function fetch_warehouse_info(warehouse_id) {

    var company_id = localStorage.getItem('company_id');

    $('#wareIn_' + warehouse_id).hide();
    $('#loader11_' + warehouse_id).show();

    $.ajax({

        type: "POST",
        dataType: "json",
        cache: false,
         headers: {
                'Authorization':localStorage.getItem('token'),
    },
        url: api_path + "wms/get_warehouse_details",
        data: {
            "warehouse_id": warehouse_id,
            "company_id": company_id
        },

        success: function(response) {

            var str = "";
            console.log(response);


            $('#loader11_' + warehouse_id).hide();
            $('#wareIn_' + warehouse_id).show();

            if (response.status == '200') {

                $("#modal_view_warehouse #name").html(response.data.warehouse_name);
                $("#modal_view_warehouse #address").html(response.data.warehouse_address);


                $('#modal_view_warehouse').modal('show');
            }


        },

        error: function(response) {
            $('#loader11_' + warehouse_id).hide();
            $('#wareIn_' + warehouse_id).show();
            alert("Connection Error.");

        }

    });
}

function fetch_warehouse_details(warehouse_id) {
    // var pathArray = window.location.pathname.split( '/' );
    // var warehouse_id = $.urlParam('id');  

    var company_id = localStorage.getItem('company_id');

    $('#warh_' + warehouse_id).hide();
    $('#loader_' + warehouse_id).show();

    $.ajax({

        type: "POST",
        dataType: "json",
        cache: false,
         headers: {
                'Authorization':localStorage.getItem('token'),
    },
        url: api_path + "wms/get_warehouse_details",
        data: {
            "warehouse_id": warehouse_id,
            "company_id": company_id
        },

        success: function(response) {

            var str = "";
            console.log(response);
            $("#modal_edit_warehouse #error").html("");

            $("#modal_edit_warehouse .required").each(function() {

                var the_val = $.trim($(this).val());

                $(this).removeClass("has-error");

            });
            $('#loader_' + warehouse_id).hide();
            $('#warh_' + warehouse_id).show();
            if (response.status == '200') {

                $("#modal_edit_warehouse #warehouse_name").val(response.data.warehouse_name);
                $("#modal_edit_warehouse #warehouse_address").val(response.data.warehouse_address);

                // str += '<button type="submit" class="btn btn-success" id="edt_'+response.data.warehouse_id+'" class="update_ware">Update</button>';
                // str += '<i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="edit_ware_loader"></i>';   

                // $("#modal_edit_warehouse #form_footer").html(str);
                $('#modal_edit_warehouse').modal('show');
            }


        },

        error: function(response) {
            $('#loader_' + warehouse_id).hide();
            $('#warh_' + warehouse_id).show();
            alert("Connection Error.");

        }

    });
}

function delete_warehouse(warehouse_id) {

    var company_id = localStorage.getItem('company_id');


    var ans = confirm("Are you sure you want to delete this warehouse?");
    if (!ans) {
        return;
    }


    $('#row_' + warehouse_id).hide();
    $('#loader_row_' + warehouse_id).show();
    $.ajax({
        type: "POST",
        dataType: "json",
         headers: {
                'Authorization':localStorage.getItem('token'),
    },
        url: api_path + "wms/delete_warehouse",
        data: {
            "company_id": company_id,
            "warehouse_id": warehouse_id
        },
        timeout: 60000, // sets timeout to one minute
        // objAJAXRequest, strError

        error: function(response) {
            $('#loader_row_' + warehouse_id).hide();
            $('#row_' + warehouse_id).show();

            alert('connection error');
        },

        success: function(response) {
            // console.log(response);
            if (response.status == '200') {
                // $('#row_'+user_id).hide();


            } else if (response.status == '401') {


            }

            $('#loader_row_' + warehouse_id).hide();
        }
    });
}

function add_company_warehouse() {
    var company_id = localStorage.getItem('company_id');
    var warehouse_name = $('#add_warehouse_name').val();
    var warehouse_address = $('#add_warehouse_address').val();

    // alert(employee_id);
    var blank;




    $(".required1").each(function() {

        var the_val = $.trim($(this).val());

        if (the_val == "" || the_val == "0") {

            $(this).addClass('has-error');

            blank = "yes";

        } else {

            $(this).removeClass("has-error");

        }

    });

    if (blank == "yes") {

        $('#error').html("You have a blank field");

        return;

    }


    $('#add_ware').hide();
    $('#ware_loader').show();



    $.ajax({

        type: "POST",
        dataType: "json",
        cache: false,
         headers: {
                'Authorization':localStorage.getItem('token'),
    },
        url: api_path + "wms/create",
        data: {
            "company_id": company_id,
            "warehouse_name": warehouse_name,
            "warehouse_address": warehouse_address
        },

        success: function(response) {

            // console.log(response);

            if (response.status == '200') {

                $('#error').html('');
                $('#modal_warehouse').modal('show');

                //if no warehouse before set this warehouse as active warehouse

                $('#modal_warehouse').on('hidden.bs.modal', function() {
                    // do something…
                    $('#warehouse_display').hide();
                    window.location.reload();
                    //window.location.href = base_url+"/erp/hrm/employees";
                })


            } else if (response.status == '400') { // coder error message


                $('#error').html('Technical Error. Please try again later.');

            } else if (response.status == '401') { //user error message


                $('#error').html("No result");

            }


            $('#add_ware').show();
            $('#ware_loader').hide();

        },

        error: function(response) {

            $('#add_ware').show();
            $('#ware_loader').hide();
            $('#error').html("Connection Error.");

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

function list_of_batches() {

    var company_id = localStorage.getItem('company_id');
    var warehouse_id = localStorage.getItem('warehouse_id');
    // var batch_id = $.urlParam('id');
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const batch_id = urlParams.get('id');


    $.ajax({

        type: "GET",
        dataType: "json",
         headers: {
                'Authorization':localStorage.getItem('token'),
    },
        url: api_path + "wms/batchDetails",
        data: {
            "company_id": company_id,
            "warehouse_id": warehouse_id,
            "batch_id": batch_id
        },
        timeout: 60000,
        success: function(response) {
            console.log(response);

            var strTable = "";

            if (response.status == '200') {
                console.log(response.data.batch_name)
                // $("#select_item").val(response.data.batch_name);
                $("#batch_name").val(response.data.batch_name);
                $("#batch_code").val(response.data.batch_code);
                $("#description").val(response.data.description);
                $("#batch_no").val(response.data.batch_no);
                $("#date_received").val(response.data.expiry_date);




                // $('#item_id').val('')
                if (response.data.length > 0) {

                    console.log(response.data.length)
                    var k = 1;
                    $.each(response['data'], function(i, v) {

                        // strTable += '<tr id="row_' + response['data'][i]['batch_id'] + '">';
                        
                        strTable += ``


                        k++;

                    });

                } else {

                    strTable = '<tr><td colspan="3">No record.</td></tr>';

                }




                // $("#demo-form2").html(strTable);
                // $("#warehouseData").show();

            } else if (response.status == '400') {

                $('#loading').hide();
                strTable += '<tr>';
                strTable += '<td colspan="2">No result</td>';
                strTable += '</tr>';


                $("#warehouseData").html(strTable);
                $("#warehouseData").show();


            } else if (response.status == "401") {
                //missing parameters
                var strTable = "";
                $('#loading').hide();
                strTable += '<tr>';
                strTable += '<td colspan="2">' + response.msg + '</td>';
                strTable += '</tr>';


                $("#warehouseData").html(strTable);
                $("#warehouseData").show();

            }


            $("#loading").hide();

        },

        error: function(response) {


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