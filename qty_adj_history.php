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
                <h3>Quantity Adjustment History</h3>
            </div>

            <div class="title_right">
                <div class="col-md-6 col-sm-6 col-xs-12 form-group pull-right top_search">
                    <div class="input-group" style="float: right">

                        <!-- <a href="invoice_type_outgoing"><button type="button" class="btn btn-default" id="">Add</button></a> -->

                        <!-- <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" aria-expanded="false"> Add <span class="caret"></span>
                            </button>
                            <ul role="menu" class="dropdown-menu pull-right">
                                <li><a href="add_incoming_items">From Vendor</a>
                                </li>
                                <li><a href="upward_adjustment">Quantity Adjustment</a>
                                </li>
                            </ul> -->

                        <button type="button" class="btn btn-default" id="incoming_filter">Filter</button>
                        <!-- <a href="add_incoming_items"><button type="button" class="btn btn-success">Receive</button></a> -->

                        <!-- <a href="upward_adjustment?a=add"><button type="button" class="btn btn-primary">Adjustment</button></a> -->

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

                                <!-- <div class="col-sm-2 col-md-2 col-xs-12">
                                        <label>Code</label>
                                        <input type="text" id="code" class="form-control">
                                    </div> -->

                                <div class="col-sm-2 col-md-3 col-xs-12">

                                    <label>Item</label>

                                    <span id="canccl_vdn">
                                        <input type="text" class="form-control" placeholder="Last Name"
                                            id="holds_vendor_name" style="display: none;" disabled="disabled">
                                    </span>


                                    <!-- <div id="holds_vendor_name" style="float: left"></div> -->

                                    <div id="holds_item_id" style="float: left; display: none"></div>

                                    <input type="text" id="item_text" class="form-control" name="fullname" required=""
                                        autocomplete="off">


                                    <!-- <input type="text" id="vendor_text" class="form-control"> -->

                                </div>

                                <div class="col-sm-2 col-md-3 col-xs-12">
                                    <label>Date Range</label>
                                    <input type="text" class="form-control" id="date_range">
                                </div>

                                <div class="col-sm-2 col-md-2 col-xs-12">
                                    <label>Adjustment Type</label>
                                    <select class="form-control col-md-7 col-xs-12 required" id="store_type">
                                        <option value="">-- Select --</option>

                                        <option value="correction_incoming">Addition</option>
                                        <option value="correction_outgoing">Deduction</option>

                                    </select>
                                </div>


                                <div class="col-sm-2 col-md-2 col-xs-12">
                                    <label>Adjusted By</label>
                                    <input type="text" class="form-control" id="adj_by">
                                </div>


                                <!-- <div class="col-sm-2 col-md-2 col-xs-12">
                                        <label>Warehouse</label>
                                        <select class="form-control col-md-7 col-xs-12 required" id="warehouse_srch">
                                          <option value="">-- Select --</option>
                                        </select>
                                    </div> -->

                            </div>
                            <br>
                            <br>



                            <div class="form-row">

                                <div class="col-sm-2 col-md-6 col-xs-12">
                                    <br>
                                    <button type="button" class="btn btn-success" id="filter">Go</button>
                                    <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;"
                                        id="filter_loader"></i>
                                </div>

                            </div>

                        </div>
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

                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">

                                        <th class="column-title" width="5%">Type</th>
                                        <th class="column-title" width="10%">Date</th>
                                        <th class="column-title" width="25%">Item</th>
                                        <th class="column-title" width="25%">SKU/Barcode</th>
                                        <th class="column-title" width="10%" style="text-align: right">Adjustment</th>
                                        <th class="column-title" style="text-align: right" width="10%">New Balance</th>
                                        <th class="column-title" width="20%">Warehouse</th>
                                        <th class="column-title no-link last" width="15%"><span class="nobr">Adjusted
                                                By</span>
                                        </th>
                                        <th class="bulk-actions" colspan="4">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span
                                                    class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tr id="loading">
                                    <td colspan="8"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i>
                                    </td>
                                </tr>
                                <tbody id="incomingData">

                                </tbody>
                            </table>

                            <div class="container">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination" id="pagination"></ul>
                                </nav>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<div class="modal fade" id="modal_view_incoming" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;"><i class="fa info-circle"></i> <span
                        id="btch_cddd"></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">
                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                        <b>Vendor</b>
                        <address id="ivvv_fff">
                            asdf af asdfasdf asdf
                            <br>
                            <br>
                        </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                        <b>Date</b>
                        <address id="ivvv_dtt">

                        </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col" id="ivvv_ddtt">

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="headings">

                                    <th class="column-title" width="5%">S/N</th>
                                    <th class="column-title" width="50%">Item</th>
                                    <th class="column-title" width="15%" style="text-align: right">Quantity</th>
                                    <th class="column-title" width="15%" style="text-align: right">Unit Cost(₦)</th>
                                    <th class="column-title" width="15%" style="text-align: right">Total(₦)</th>

                                </tr>
                            </thead>

                            <tr id="loading">
                                <td colspan="6"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;"></i>
                                </td>
                            </tr>
                            <tbody id="generateData">

                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <!-- <button class="btn btn-primary">Generate</button> -->
                <!-- <button type="button" class="btn btn-primary">Print</button>
                <button type="button" class="btn btn-primary">Email</button> -->
                <button type="button" class="btn" style="background-color: #f9aba9; color: white"
                    data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->

            </div>
        </div>
    </div>
</div>








<div class="modal fade" id="modal_view_payment_history" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;"><i class="fa info-circle"></i> <span
                        id="btch_cddd_ph"></span> <span id="btch_id_ph" style="display: none"></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">



                <div class="row">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="headings">

                                    <th class="column-title" width="20%">Date</th>
                                    <th class="column-title" width="50%">Amount</th>
                                    <th class="column-title" width="10%" style="text-align: right">Action</th>

                                </tr>
                            </thead>

                            <tr id="loading_ph">
                                <td colspan="3" style="text-align: center; padding-top: 15px"><i
                                        class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i></td>
                            </tr>
                            <tbody id="generateData_ph">

                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
            <div class="modal-footer">





                <span id="">
                    <!-- <button type="button" class="btn btn-default add_payment_ph" id="">Add Payment</button> -->
                    <button type="button" class="btn btn-default" id="cancel_debt" style="display: none">Cancel
                        Debt</button>
                    <button type="button" class="btn btn-default" id="open_debt" style="display: none">Open
                        Debt</button>

                </span>

                <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="cancel_debt_loader"></i>

            </div>
        </div>
    </div>
</div>











<div class="modal fade" id="modal_delete_mdl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;"><i class="fa info-circle"></i> <span
                        id="">Delete</span> <span id="hold_grnid_to_del" style="display: none"></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">



                <div class="row" style="text-align: center;">

                    <h2>This INV will now be moved to trash. </h2>
                    Are you sure you want to proceed?<br><br>

                    <div id="pck_btns">
                        <button type="button" class="btn btn-success" id="yes_del_grn" style="display: ">Yes,
                            Delete</button>
                        <button type="button" class="btn btn-danger" id="" style="display: " data-dismiss="modal">No,
                            Cancel</button>
                    </div>

                    <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;"
                        id="deleting_grn_in_progress"></i>

                    <h2 id="show_good_deleted" style="display: none; color: red; font-weight: bold">Deleted</h2>

                </div>

            </div>
            <div class="modal-footer">





                <span id="">
                    <!-- <button type="button" class="btn btn-default add_payment_ph" id="">Add Payment</button> -->
                    <button type="button" class="btn btn-default" id="cancel_debt" style="display: none">Cancel
                        Debt</button>
                    <button type="button" class="btn btn-default" id="open_debt" style="display: none">Open
                        Debt</button>

                </span>

                <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="cancel_debt_loader"></i>

            </div>
        </div>
    </div>
</div>










<div class="modal fade" id="modal_view_dlv_history" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;"><i class="fa info-circle"></i>
                    Supply History <span id="btch_cddd_dlv" style="font-size: 14px"></span> <span id="btch_id_dlv"
                        style="display: none"></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">



                <div class="row">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="headings">

                                    <th class="column-title" width="15%">Date</th>
                                    <th class="column-title" width="30%">Item</th>
                                    <th class="column-title" width="15%" style="text-align: right">Qty</th>
                                    <th class="column-title" width="20%" style="text-align: right">Warehouse</th>
                                    <th class="column-title" width="20%" style="text-align: right">Action</th>

                                </tr>
                            </thead>

                            <tr id="loading_dlv">
                                <td colspan="5" style="text-align: center; padding-top: 15px"><i
                                        class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i></td>
                            </tr>
                            <tbody id="generateData_dlv">

                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
            <div class="modal-footer">

                <span id="">

                    <!-- <button type="button" class="btn btn-default" id="cancel_debt" style="display: none">Cancel Debt</button> -->
                    <!-- <button type="button" class="btn btn-default" id="open_debt" style="display: none">Open Debt</button> -->

                </span>

                <!-- <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="cancel_debt_loader"></i> -->

            </div>
        </div>
    </div>
</div>













<div class="modal fade" id="modal_delete_mdl_restore" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;"><i class="fa info-circle"></i> <span
                        id=""></span> <span id="hold_grnid_to_del2" style="display: none"></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">



                <div class="row" style="text-align: center;">

                    <h2>This will be restored</h2>
                    Are you sure you want to proceed?<br><br>

                    <div id="pck_btns2">
                        <button type="button" class="btn btn-success" id="yes_undo_del_grn" style="display: ">Yes,
                            Restore</button>
                        <button type="button" class="btn btn-danger" id="" style="display: " data-dismiss="modal">No,
                            Cancel</button>
                    </div>

                </div>

            </div>
            <div class="modal-footer">





                <span id="">
                    <!-- <button type="button" class="btn btn-default add_payment_ph" id="">Add Payment</button> -->
                    <button type="button" class="btn btn-default" id="cancel_debt" style="display: none">Cancel
                        Debt</button>
                    <button type="button" class="btn btn-default" id="open_debt" style="display: none">Open
                        Debt</button>

                </span>

                <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="cancel_debt_loader"></i>

            </div>
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
    // does_user_have_access_to_page();
    // page_warehouse_access();
    list_delivery_supply_history('')
    var list_id;
    var company_id = localStorage.getItem('company_id')

    load_warehouses_for_pop();

    $(document).on('click', '#filter', function() {
        $('#pagination').twbsPagination('destroy');
        list_delivery_supply_history('');
    });

    $('#incoming_filter').on('click', display_filter);

    $('input#date_range').daterangepicker({
        autoUpdateInput: false
    });

    $('input#date_range').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('YYYY/MM/DD') + ' - ' + picker.endDate.format(
        'YYYY/MM/DD'));

    });


    $("#vendor_text").autocomplete({

        source: function(request, response) {
            // Fetch data
            console.log(response);
            $.ajax({

                url: api_path + "wms/vendors_autocomplete",
                headers: {'Authorization':localStorage.getItem('token') },

                type: 'post',
                dataType: "json",
                data: {
                    term: request.term,
                    company_id: company_id
                },
                success: function(data) {
                    response(data);
                    console.log(data);
                    console.log(company_id);
                    console.log(request.term);
                }

            });
        },
        minLength: 2,
        select: function(event, ui) {

            console.log(ui.item.id);
            // Set selection
            $("#holds_vendor_name").val(ui.item.label);
            $("#holds_vendor_name").show(ui.item.label);
            $("#holds_vendor_id").html(ui.item.id);
            $("#vendor_text").hide();
            $("#v_name_pencil").show();

            $('#vendor_text').val(ui.item.label + ' ' + ui.item.id);
            return false;

        }

    });


    $("#item_text").autocomplete({

        source: function(request, response) {
            // Fetch data
            $("#holds_item_id").html('');
            $.ajax({

                url: api_path + "wms/items_autocomplete",
                type: 'post',
                headers: {'Authorization':localStorage.getItem('token') },

                dataType: "json",
                data: {
                    term: request.term,
                    company_id: company_id
                },
                success: function(data) {
                    response(data);
                    console.log(data);
                }

            });
        },
        minLength: 2,
        select: function(event, ui) {

            console.log(ui.item.id);
            // Set selection
            $('#item_text').val(ui.item.label + ' ' + ui.item.id);
            $("#holds_item_id").html(ui.item.id); // display the selected text
            // save selected id to input
            // $('#selct_itn_text').html(ui.item.label); // save selected id to input
            // $("#unit_type").val(ui.item.unit).trigger("change");
            return false;

        }

    });

});




function does_user_have_access_to_page() {

    var user_id = localStorage.getItem('user_id');
    var module_id = 6;

    var roles = localStorage.getItem("user_role");
    var arr = ['4']
    var users = roles.split(',');
    var profile_id;

    var arr2 = [2, 4, 26];


    arr2.some((a, i) => {
        if (roles[i] == parseInt(a)) {
            profile_id = roles[i]
        }
    })
    // var profile_id = 26;

    $.ajax({

        type: "POST",
        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

        cache: false,
        url: api_path + "wms/check_if_user_has_profile",
        data: {
            "user_id": user_id,
            "company_id": localStorage.getItem('company_id'),
            "warehouse_id": localStorage.getItem('warehouse_id'),
            "module_id": module_id,
            "profile_id": profile_id
        },

        success: function(response) {

            console.log(response);

            if (response.status == '200') {

                // page_warehouse_access();
                // var list_id;
                // list_grns('');
                list_delivery_supply_history('');
                $("#main_display").show();

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

function load_warehouses_for_pop() {

    var company_id = localStorage.getItem('company_id');


    var list_whs = "";
    $.ajax({

        type: "POST",
        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

        cache: false,
        url: api_path + "wms/list_warehouse",
        data: {
            "company_id": company_id
        },

        success: function(response) {

            var k = 1;
            $.each(response.data, function(i, v) {

                list_whs += '<option value="' + v.warehouse_id + '">' + v.warehouse_name +
                    '</option>';

                k++;

            });

            $("#warehouse_srch").append(list_whs);

        },
        error: function() {
            console.log(response);
        }

    });

}





function list_delivery_supply_history(page) {

    var company_id = localStorage.getItem('company_id');
    if (page == "") {
        var page = 1;
    }
    var limit = 25;

    var date_range = $('#date_range').val();
    var store_type = $('#store_type').val();
    var item_id = $("#holds_item_id").html();


    if (store_type == "") {
        store_type = "all_adjustments";
    }

    // alert(store_type)

    $("#loading").show();
    $("#incomingData").html('');

    $("html, body").animate({
        scrollTop: 0
    }, "slow");

    $.ajax({

        type: "POST",
        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/list_delivery_supply_history",
        data: {
            "company_id": company_id,
            "warehouse_id": localStorage.getItem('warehouse_id'),
            "page": page,
            "limit": limit,
            "date_range": date_range,
            "store_type": store_type,
            "item_id": item_id,

        },
        timeout: 60000,

        success: function(response) {
            console.log(response);

            var strTable = "";

            if (response.status == '200') {

                // $('#item_id').val('')
                if (response.data.length > 0) {

                    var k = 1;
                    $.each(response['data'], function(i, v) {

                        if (response['data'][i]['payment_status'] == "completed" || response['data']
                            [i]['payment_status'] == "uncompleted_and_closed") {
                            var ps_cl = '<a><span class="label label-success">Completed</span></a>';
                        } else if (response['data'][i]['payment_status'] == "uncompleted") {
                            var ps_cl =
                                '<a><span class="label label-warning">Uncompleted</span></a>';
                        }


                        var delete_btn = "";
                        var del_forv = "";
                        var undo_del_btn = '';
                        var direction_icon = "";

                        if (response['data'][i]['store_type'] == "correction_incoming") {

                            direction_icon = '<i class="fa fa-plus" style="color: green"></i>';

                        } else if (response['data'][i]['store_type'] == "correction_outgoing") {

                            direction_icon = '<i class="fa fa-minus"  style="color: red"></i>';

                        }

                        strTable += '<tr id="row_' + response['data'][i]['batch_id'] + '">';
                        strTable += '<td id="batch_cod_tx_' + response['data'][i]['batch_id'] +
                            '">' + direction_icon + '</td>';

                        // +response['data'][i]['Vendor']+
                        strTable += '<td>' + format_a_date(response['data'][i]['date_recieved']) +
                            '</td>';
                        strTable += '<td>' + response['data'][i]['item_name'] + '</td>';
                        strTable += '<td>' + response['data'][i]['barcode'] + '</td>';

                        strTable += '<td style="text-align: right">' + response['data'][i]['qty'] +
                            '</td>';
                        strTable += '<td style="text-align: right">' + response['data'][i][
                            'new_balance'
                        ] + '</td>';

                        strTable += '<td>' + response['data'][i]['warehouse_name'] + '</td>';

                        strTable += '<td valign="top">' + response['data'][i]['person_concerned'] +
                            '</td>';
                        // strTable += '<div class="x_content" style="margin: 0px; padding: 0px"><button data-toggle="dropdown" class="btn btn-default dropdown-toggle btn-xs" type="button" aria-expanded="true">Action <span class="caret"></span></button>';

                        // strTable += '<ul role="menu" class="dropdown-menu  pull-right">    <li class="incoming_info"  id="in_'+ response['data'][i]['batch_id']+'"><a>View Items</a></li> <li class="inc_payment_history"  id="in_p_' + response['data'][i]['batch_id'] + '"><a>Payment History</a></li> <li class="dlv"  id="dlv_' + response['data'][i]['batch_id'] + '"><a>Items Supply</a></li>   <li class="dwnld_grn"  id="dwnld_grn_' + response['data'][i]['batch_id'] + '"><a>Download</a></li> '+delete_btn+undo_del_btn+del_forv+ '</ul></div>';

                        strTable += '</tr>';

                        strTable += '<tr style="display: none;" id="loader_row_' + response['data'][
                            i
                        ]['batch_id'] + '">';
                        strTable +=
                            '<td colspan="6"><i class="fa fa-spinner fa-spin fa-fw fa-2x"  id="loading"></i>';
                        strTable += '</td>';
                        strTable += '</tr>';


                        strTable += '<tr id="tr_act_loader_' + response['data'][i]['batch_id'] +
                            '" style="display: none"><td colspan="5"><i class="fa fa-spinner fa-spin fa-fw fa-1x" style="display: ;" id="filter_loader"></i>';
                        strTable += '<td></tr>';

                        k++;

                    });

                } else {

                    strTable = '<tr><td colspan="7">' + response.msg + '</td></tr>';

                }

                $('#pagination').twbsPagination({
                    totalPages: Math.ceil(response.total_rows / limit),
                    visiblePages: 10,
                    onPageClick: function(event, page) {
                        list_delivery_supply_history(page);
                    }
                });

                $("#incomingData").html(strTable);
                $("#incomingData").show();
                $('#loading').hide();

            } else if (response.data <= 0) {
                $('#loading').hide();

                strTable = '<tr><td colspan="7">' + response.msg + '</td></tr>';

                $("#incomingData").html(strTable);
                $("#incomingData").show();

            } else if (response.status == '400') {
                var strTable = "";
                $('#loading').hide();
                // alert(response.msg);
                strTable += '<tr>';
                strTable += '<td colspan="8">' + response.msg + '</td>';
                strTable += '</tr>';

                $("#incomingData").html(strTable);
                $("#incomingData").show();

            }

        },

        error: function(response) {
            var strTable = "";
            $('#loading').hide();
            // alert(response.msg);
            strTable += '<tr>';
            strTable += '<td colspan="7"><strong class="text-danger">Connection error</strong></td>';
            strTable += '</tr>';

            $("#incomingData").html(strTable);
            $("#incomingData").show();

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

                    var k = 1;
                    $.each(response['data'], function(i, v) {

                        if (response['data'][i]['section_name'] == "Incoming" && response['data'][i]
                            ['section_exist'] == "yes") {

                            $('#incoming').show();
                            $('#main_display').show();
                            $('#error_display').hide();

                        } else if (response['data'][i]['section_name'] == "Incoming" && response[
                                'data'][i]['section_exist'] == "no") {

                            $('#main_display').hide();
                            $('#error_display').show();

                        } else if (response['data'][i]['section_name'] == "Outgoing" && response[
                                'data'][i]['section_exist'] == "yes") {

                            $('#outgoing').show();

                        } else if (response['data'][i]['section_name'] == "Outgoing" && response[
                                'data'][i]['section_exist'] == "no") {

                            $('#outgoing').hide();
                            // $('#user_page').hide();
                        } else if (response['data'][i]['section_name'] == "Sales/Receipts" &&
                            response['data'][i]['section_exist'] == "yes") {

                            $('#receipts').show();
                            // $('#user_page').hide();

                        } else if (response['data'][i]['section_name'] == "Sales/Receipts" &&
                            response['data'][i]['section_exist'] == "no") {

                            $('#receipts').hide();
                            // $('#user_page').hide();
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

function display_filter() {

    $('#filter_display').toggle();
    $('#item_text').val("");
    $('#vendor_text').val("");
    $('#item_code').val("");
    $('#date_range').val("");
}
</script>

<?php

include_once("../gen/_common/footer.php"); // header contents

?>
