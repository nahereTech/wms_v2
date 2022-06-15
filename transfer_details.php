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
                <h3>Transfer Details</h3>
            </div>

            <div class="title_right">
                <div class="col-md-6 col-sm-6 col-xs-12 form-group pull-right top_search">
                    <div class="input-group" style="float: right">

                        <a href="external_transfer"><button type="button" class="btn btn-default" id="">Back to Transfer</button></a>

                        <!-- <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" aria-expanded="false"> Add <span class="caret"></span>
                            </button>
                            <ul role="menu" class="dropdown-menu pull-right">
                                <li><a href="add_incoming_items">From Vendor</a>
                                </li>
                                <li><a href="upward_adjustment">Quantity Adjustment</a>
                                </li>
                            </ul> -->

                        <button type="button" class="btn btn-default" id="retry_transfer">Retry Failed Transfers</button>
                        <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="retry_loader"></i>
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

                                <div class="col-sm-2 col-md-2 col-xs-12">
                                    <label>Code</label>
                                    <input type="text" id="code" class="form-control">
                                </div>

                                <div class="col-sm-2 col-md-3 col-xs-12">

                                    <label>Contact</label>

                                    <span id="canccl_vdn">
                                        <input type="text" class="form-control" placeholder="Last Name"
                                            id="holds_vendor_name" style="display: none;" disabled="disabled">
                                    </span>


                                    <!-- <div id="holds_vendor_name" style="float: left"></div> -->

                                    <div id="holds_vendor_id" style="float: left; display: none"></div>

                                    <input type="text" id="vendor_text" class="form-control" name="fullname" required=""
                                        autocomplete="off">


                                    <!-- <input type="text" id="vendor_text" class="form-control"> -->

                                </div>

                                <div class="col-sm-2 col-md-3 col-xs-12">
                                    <label>Date Range</label>
                                    <input type="text" class="form-control" id="date_range" autocomplete="off">
                                </div>

                                <div class="col-sm-2 col-md-2 col-xs-12">
                                    <label>Payment Status</label>
                                    <select class="form-control col-md-7 col-xs-12 required" id="pay_status">
                                        <option value="">-- Select --</option>

                                        <option value="completed">Completed</option>
                                        <option value="uncompleted">Uncompleted</option>

                                    </select>
                                </div>


                                <div class="col-sm-2 col-md-2 col-xs-12">
                                    <label>Trashed</label>
                                    <select class="form-control col-md-7 col-xs-12 required" id="deleted_itms">
                                        <option value="">-- Select --</option>
                                        <option value="yes">Trashed</option>

                                    </select>
                                </div>

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
                        <table class="table">
                            <thead>
                                <tr class="headings" style="background-color: #2A3F54; color:white">

                                    <th class="column-title" width="5%">S/N</th>
                                    <th class="column-title" width="30%">Item</th>
                                    <th class="column-title" width="15%" style="text-align: right">Section</th>
                                    <th class="column-title" width="15%" style="text-align: right">Batch</th>
                                    <th class="column-title" width="15%" style="text-align: right">Source Warehouse(Qty)</th>
                                    <th class="column-title" width="15%" style="text-align: right">Destination Warehouse(Qty)</th>
                                    <th class="column-title" width="15%" style="text-align: right">Qty</th>
                                    <th class="column-title" width="10%" style="text-align: right">Transfer Status</th>



                                </tr>
                            </thead>

                            <tr id="loading_po_info">
                                <td colspan="7" style="text-align: center; padding-top: 15px"><i
                                        class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i></td>
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


<div class="modal fade" id="modal_item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" style="display: none;">
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
                <h4>Email Sent!</h4>
            </div>
            <!-- <div class="modal-footer"> -->
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            <!-- </div> -->
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



<div class="modal fade" id="modal_doing_dwnld" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;"><i class="fa info-circle"></i> <span
                        id=""></span> <span id="" style="display: none"></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">

                <div class="row" style="text-align: center;">

                    <h2>Preparing Download</h2>
                    Please wait while we prepare the download<br><br>

                    <div id="">
                        <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;" id="dwlaooda_loader"></i>
                    </div>

                </div>

            </div>
            <div class="modal-footer">





                <span id="">

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
                                    <!-- <th class="column-title" width="20%" style="text-align: right">Action</th> -->

                                </tr>
                            </thead>

                            <tr id="loading_data">
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






<div class="modal fade" id="modal_transfer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;"><i class="fa info-circle"></i> Send
                    Invoice/Reciept to email address <span id=""></span> <span id="" style="display: none"></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">

                <div class="row" style="text-align: center;">

                    <!-- <h2>Recipient Email Address</h2> -->

                    <!-- Move Item from warehouse<br><br> -->
                    <div id="move_warehouse" style="width: 60%; margin-left: auto; margin-right: auto;">
                        <!-- <label>TO</label> -->
                        <!-- <i class="fa fa-spinner fa-spin fa-fw fa-1x" style="display: ;" id="dwlaooda_loader" style="font-size: 10px"></i> -->
                        <form>
                            <input type="email" class="form-control required" id="mail_add"
                                style="margin-bottom: 10px; border-radius: 20px; padding: 20px;"
                                placeholder="Email Address" required /> <br />
                            <input type="email" class="form-control required" id="mail_cc"
                                style="margin-bottom: 10px; border-radius: 20px; padding: 20px;" placeholder="Cc"
                                required /> <br />
                            <input type="email" class="form-control required" id="mail_bcc"
                                style="margin-bottom: 10px; border-radius: 20px; padding: 20px;" placeholder="Bcc"
                                required /> <br />
                            <input type="text" class="form-control required cc" id="mail_sub"
                                style="margin-bottom: 10px; border-radius: 20px; padding: 20px;" placeholder="Subject"
                                required /> <br />
                            <!-- <embed src="file_name.pdf" width="800px" height="2100px" /> -->
                            <textarea type="textarea" class="form-control required"
                                style="margin-bottom: 10px; border-radius: 20px; padding: 20px; text-align: left; align-content:center; overflow:auto;"
                                placeholder="Message" id="mail_body" contenteditable>

                    </textarea>
                            <!-- <input type="file" class="form-control col-md-7 col-xs-12 required" id="mail" style="border:none;" placeholder="Subject" required disabled="disabled" value="abc.pdf" /> <br /><br /> -->
                            <div align="left">
                                <img align="left" src="assets/pdf.png" style="width: 10%"><span
                                    style="position: relative;top: 10px">
                                    <p style="color: grey">Invoice/Receipt attachment</p>
                                </span>
                            </div>

                            <input type="submit" value="Send Invoice/Receipt" id="email_repo" class="btn btn-primary"
                                style="margin-bottom: 10px; border-radius: 20px; padding: 10px; width: 100%; margin-top: 10px;">
                            <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display:none;" id="report_loader"></i>
                        </form>
                    </div>


                    <!-- <div id="">
                    <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;" id="dwlaooda_loader"></i>
                </div> -->

                </div>

            </div>
            <div class="modal-footer">


            </div>

            <!-- 
            <span id="">

                <button type="button" class="btn btn-default" id="cancel_debt" style="display: none">Cancel Debt</button>
                <button type="button" class="btn btn-default" id="open_debt" style="display: none">Open Debt</button>

            </span> -->

            <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="cancel_debt_loader"></i>

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


    does_user_have_access_to_page();
    fetch_incoming_info()

    // page_warehouse_access();
    // var list_id;
    // var company_id = localStorage.getItem('company_id')
    // list_inv_batch('');

    $('#code').on('keydown', function(e) {
        console.log(e.which)
        console.log(this.value.length)
        if (e.which == 13) {
            $('#pagination').twbsPagination('destroy');
            // list_inv_batch('');
        }
    })

    $('#vendor_text').on('keydown', function(e) {
        console.log(e.which)
        console.log(this.value.length)
        if (e.which == 13) {
            $('#pagination').twbsPagination('destroy');
            list_inv_batch('');
        }
    })

    $('#date_range').on('keydown', function(e) {
        console.log(e.which)
        console.log(this.value.length)
        if (e.which == 13) {
            $('#pagination').twbsPagination('destroy');
            list_inv_batch('');
        }
    })

    $('#pay_status').on('keydown', function(e) {
        console.log(e.which)
        console.log(this.value.length)
        if (e.which == 13) {
            $('#pagination').twbsPagination('destroy');
            list_inv_batch('');
        }
    })

    $('#deleted_itms').on('keydown', function(e) {
        console.log(e.which)
        console.log(this.value.length)
        if (e.which == 13) {
            $('#pagination').twbsPagination('destroy');
            list_inv_batch('');
        }
    })

    $(document).on('click', '#filter', function() {
        $('#pagination').twbsPagination('destroy');
        list_inv_batch('');
    });

    $('#incoming_filter').on('click', display_filter);

    $('input#date_range').daterangepicker({
        autoUpdateInput: false
    });

    $('input#date_range').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('YYYY/MM/DD') + ' - ' + picker.endDate.format(
        'YYYY/MM/DD'));

    });

    ;




    $(document).on('click', '.del_dlvh', function() {


        var row_id = $(this).attr('id').replace(/del_dlvh_/, '');
        $("#row_lodda_" + row_id).show();
        $("#row_pmh_" + row_id).hide();
        $.ajax({

            type: "POST",
            dataType: "json",
            cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

            url: api_path + "wms/delete_po_delivery_history",
            data: {
                "row_id": row_id,
                "company_id": localStorage.getItem('company_id'),
                "warehouse_id": localStorage.getItem('warehouse_id')
            },

            success: function(response) {
                console.log(response);
                if (response.status == '200') {

                    $("#row_lodda_" + row_id).hide();

                } else {

                    $("#row_lodda_" + row_id).hide();
                    $("#row_pmh_" + row_id).show();

                }

            },

            error: function(response) {

                console.log(response);
                $("#row_lodda_" + row_id).hide();
                $("#row_pmh_" + row_id).show();
            }

        });

    });

    function email_report() {
        $('#email_repo').hide();
        $('#report_loader').show();

        var add = $('#mail_add').val();
        var cc = $('#mail_cc').val();
        var bcc = $('#mail_bcc').val();
        var sub = $('#mail_sub').val();
        var bod = $('#mail_body').val();
        var comma = ',';

        var report_to = add.concat(comma, cc, comma, bcc, comma, sub, comma, bod)

        // localStorage.setItem('report_to', $('#mail_add').val(),$('#mail_cc').val(),$('#mail_bcc').val(),$('#mail_sub').val(),$('#mail_body').val())

        $.ajax({
            type: "POST",
            dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

            url: api_path + "wms/grn_batch_download",
            data: {
                "batch_id": localStorage.getItem('batch_id'),
                "company_id": localStorage.getItem('company_id'),
                "warehouse_id": localStorage.getItem('warehouse_id'),
                "report_to": report_to
            },
            timeout: 60000, // sets timeout to one minute
            error: function(response) {

            },

            success: function(response) {
                console.log(response);
                if (response.status == '200') {
                    $("#modal_transfer").modal('hide');
                    $("#modal_item").modal('show');
                    setTimeout(function() {
                        location.reload()
                    }, 2000);
                    // $('#download_pdf').trigger('click');
                } else {
                    alert(response.msg)
                }
                // $('#export_file').show();
                // $('#download_pdf').trigger('click')

            }



        });


    }


    function does_user_have_access_to_page() {

        var roles = localStorage.getItem("user_role");
        var arr = ['4']
        var users = roles.split(',');
        var profile_id;


        users.map((a, i) => {
            if (a.includes(arr[i])) {
                profile_id = 4
                // $("#items").show();
                // $("#expenses_revenue").show();
                // $("#expenses_graph").hide();
                // $("#revenue_graph").hide();
            }
        })

        var user_id = localStorage.getItem('user_id');
        var module_id = 6;
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
                    // var company_id = localStorage.getItem('company_id')
                    // list_inv_batch('');

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


    function download_invoice(batch_id) {


        $.ajax({

            type: "POST",
            dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

            cache: false,
            url: api_path + "wms/inv_batch_download",
            data: {
                "company_id": localStorage.getItem('company_id'),
                "warehouse_id": localStorage.getItem('warehouse_id'),
                "batch_id": batch_id
            },

            success: function(response) {

                console.log(response);

                if (response.status == '200') {
                    download_file(response.data.d_file, 'INV-' + batch_id + '.pdf');
                    console.log(response.data.d_file)
                    $("#modal_doing_dwnld").modal("hide");

                } else {

                }

            },

            error: function(response) {

            }

        });

    }


    function add_supply_history_line() {
        //do_add_pm_dlv
        $("#do_add_pm_dlv").hide();

        //adding_new_pm - show
        $("#adding_new_pm_dlv").show();

        //date
        $('#payment_date_addn_dlv').datepicker({
            dateFormat: "yy-mm-dd"
        });

        var batch_id = $("#btch_id_dlv").html();
    }




    function send_in_new_delivery(po_id) {

        var company_id = localStorage.getItem('company_id');
        var insert_date = $("#payment_date_addn_dlv").val();
        var qty = $("#qty_zz_dlv").val();
        var item_id = $("#itm_zz_lzt").val();
        var item_name = $("#itm_zz_lzt option:selected").text();
        var warehouse_id = $("#wzh_zz_lzt").val();
        var warehouse_name = $("#wzh_zz_lzt option:selected").text();
        var unit_id = $("#itm_zz_lzt option:selected").attr("dir");




        var blank;
        $(".add_req").each(function() {

            var the_val = $.trim($(this).val());

            if (the_val == "" || the_val == "0") {

                $(this).addClass('has-error');

                blank = "yes";

            } else {

                $(this).removeClass("has-error");

            }

        });

        if (blank == "yes") {

            return;

        }


        $("#do_add_pm_loader").show();
        $("#adding_new_pm_dlv").hide();


        $.ajax({

            type: "POST",
            dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

            cache: false,
            url: api_path + "wms/update_delivery_supply_history",
            data: {

                "item_id": item_id,
                "company_id": company_id,
                "grn_id": po_id,
                "user_id": localStorage.getItem('user_id'),
                "qty": qty,
                "warehouse_id": warehouse_id,
                "transaction_date": insert_date,
                "unit_id": unit_id,
                "store_type": "outgoing"

            },

            success: function(response) {

                console.log(response);

                if (response.status == '200') {

                    var list_trs;
                    list_trs += '<tr id="row_pmh_' + response.data.dlv_id +
                        '" class="pmt_lst"><td>' + format_a_date(insert_date) + '</td><td>' +
                        item_name + '</td>  <td style="text-align: right">' + format_to_money(qty) +
                        '</td>  <td style="text-align: right">' + warehouse_name +
                        '</td> <td style="text-align: right"><i class="fa fa-times-circle fa-2x del_dlvh" style="color: #fc9e99; cursor: pointer" id="del_dlvh_' +
                        response.data.dlv_id + '"> </i></td></tr>';

                    list_trs += '<tr id="row_lodda_' + response.data.dlv_id +
                        '" style="display: none"><td colspan="100%"><i class="fa fa-spinner fa-spin fa-fw fa-1x"></td></tr>';

                    $(".pmt_lst:last").after(list_trs);


                    // if(response.payment_status == "completed"){

                    //     var pmstus = '<span class="label label-success">Completed</span>';
                    // }else{

                    //     var pmstus = '<span class="label label-warning">Uncompleted</span>';
                    // }

                    // alert(pmstus);

                    // $("#pmt_stuts").html(pmstus);


                } else if (response.status == '400') {

                    alert(response.msg);

                }

                $("#do_add_pm_loader").hide();

                //adding_new_pm - show
                $("#adding_new_pm_dlv").hide();

                //show add link
                $("#do_add_pm_dlv").show();

            },

            error: function(response) {

                console.log(response);
                alert("Connection error. Please try again.");
                $("#do_add_pm_loader").hide();
                //adding_new_pm - show
                $("#adding_new_pm_dlv").hide();

                //show add link
                $("#do_add_pm_dlv").show();

            }

        });
    }

    $(document).on('click', '#retry_transfers', function() {
                   $("#retry_transfer").hide();
                   $("#retry_loader").show();
                    retry_transfers();
                });


    function retry_transfers() {
                var ans = confirm("Are you sure you want to transfer this items again?");
                if (!ans) {
                    return;
                }

                var company_id = localStorage.getItem('company_id');
                var warehouse_id = localStorage.getItem('warehouse_id');
                $("#retry_loader").show();

                $.ajax({

                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    cache: false,
                    url: api_path + "wms/list_grn_items",
                    data: {
                        "transfer_id": list_id,
                        "company_id": company_id,
                        "warehouse_id": warehouse_id
                    },

                    success: function(response) {

                        var k = 1;
                        var list_grn_items = "";
                        $.each(response.data, function(i, v) {

                            list_grn_items += '<option value="' + v.item_id + '" dir="' + v
                                .unit_id + '">' + v.item_name + '</option>';

                            k++;

                        });

                        $("#itm_zz_lzt").append(list_grn_items);

                    },
                    error: function() {
                        alert("dd");
                        console.log(response);
                    }
                  

                });
                localStorage.removeItem('list_id')
                $("#retry_loader").hide();
                $("#retry_transfer").show();
            };




    function load_grn_items_for_pop(list_id) {

        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');

        $.ajax({

            type: "POST",
            dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

            cache: false,
            url: api_path + "wms/list_inv_items",
            data: {
                "batch_id": list_id,
                "company_id": company_id,
                "warehouse_id": warehouse_id
            },

            success: function(response) {

                var k = 1;
                var list_grn_items = "";
                $.each(response.data, function(i, v) {

                    list_grn_items += '<option value="' + v.item_id + '" dir="' + v
                        .unit_id + '">' + v.item_name + '</option>';

                    k++;

                });

                $("#itm_zz_lzt").append(list_grn_items);

            },
            error: function() {
                alert("dd");
                console.log(response);
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

                    list_whs += '<option value="' + v.warehouse_id + '">' + v
                        .warehouse_name + '</option>';

                    k++;

                });

                $("#wzh_zz_lzt").append(list_whs);

            },
            error: function() {
                console.log(response);
            }

        });

    }


    function view_supply_history(list_id) {

        $("#modal_view_dlv_history").modal('show');
        $("#loading_data").show();
        $("#generateData_dlv").html('');
        var clicked_grn = $("#batch_cod_tx_" + list_id).html();
        $("#btch_cddd_dlv").html("(" + clicked_grn + ")");

        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');
        var list_grn_items = "";



        $.ajax({

            type: "POST",
            dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

            cache: false,
            url: api_path + "wms/po_supply_history",
            data: {
                "batch_id": list_id,
                "company_id": company_id,
                "warehouse_id": warehouse_id
            },

            success: function(response) {

                console.log(response);

                $("#loading_data").hide();

                if (response.status == '200') {

                    var list_trs = "";
                    list_trs += '<tr id="ioi" class="pmt_lst" style="display: none"><td></td></tr>';

                    if (response.data != undefined) {

                        var k = 1;
                        $.each(response.data, function(i, v) {

                            // if(response.payment_status == "uncompleted"){
                            //     var del_btn = '<i class="fa fa-times-circle fa-2x del_hpay" style="color: #fc9e99; cursor: pointer" id="del_hp_'+v.id+'"> </i>';
                            // }else{
                            //     var del_btn = '';
                            // }
                            // <td style="text-align: right"> '+v.warehouse_name+' </td>
                            list_trs += '<tr id="row_pmh_' + v.id +
                                '" class="pmt_lst"><td>' + format_a_date(v.supply_date) +
                                '</td><td id="pho_ln_' + v.id + '">' + v.item_name +
                                '</td><td style="text-align: right">' + format_to_money(v
                                    .qty) +
                                '</td>   <!--<td style="text-align: right"> <i class="fa fa-times-circle fa-1x del_dlvh" style="color: #fc9e99; cursor: pointer" id="del_dlvh_' +
                                v.id + '"> </td>--> </tr>';

                            list_trs += '<tr id="row_lodda_' + v.id +
                                '" style="display: none"><td colspan="100%"><i class="fa fa-spinner fa-spin fa-fw fa-1x"></td></tr>';

                            k++;

                        });

                    } else {

                        list_trs += '<tr><td colspan="100%">No Record</td></tr>';

                    }


                    // list_trs += '<tr id="do_add_pm_dlv" style="display: "><td colspan="100%"><span class="label label-default add_dlv_ph" style="cursor: pointer">Add New Supply</span></td></tr>';



                    list_trs += '<tr id="adding_new_pm_dlv" style="display: none">';
                    list_trs +=
                        '<td><input type="text" class="form-control add_req" placeholder="Date" id="payment_date_addn_dlv"></td>';
                    list_trs +=
                        '<td><div class="input-group col-md-12 col-sm-12 col-xs-12"><select class="form-control required add_req" style="width: 99%" id="itm_zz_lzt"> <option value="">-- Select Item --</option></select></div></td>';
                    list_trs +=
                        '<td style="text-align: right"><input type="text" class="form-control add_req allownumericwithdecimal" placeholder="Qty" id="qty_zz_dlv"></td>';
                    // list_trs += '<td style="text-align: right"><div class="input-group col-md-12 col-sm-12 col-xs-12"><select class="form-control required add_req" id="wzh_zz_lzt"> <option value="">-- Warehouse --</option></select></div></td>';
                    list_trs +=
                        '<td style="text-align: right"><button type="button" class="btn btn-default" id="send_in_new_delivery" dir="' +
                        list_id +
                        '">Add</button><i  class="fa fa-times-circle fa-2x"  data-toggle="tooltip" data-placement="top" id="cancladd_pm" style="color: #f79e94; cursor: pointer"></i></td>';
                    list_trs += '</tr>';



                    list_trs +=
                        '<tr id="do_add_pm_loader"  style="display: none;"><td colspan="100%"><i class="fa fa-spinner fa-spin fa-fw fa-3x"></td></tr>';

                    $("#generateData_dlv").html(list_trs);
                    // load_warehouses_for_pop();
                    load_grn_items_for_pop(list_id);

                } else {
                    $("#generateData_dlv").html('<tr><td colspan="100%">' + response.msg +
                        '</td></tr>');
                }

            },

            error: function(response) {
                console.log(response);
                $("#loading_data").hide();
                $("#generateData_dlv").html(
                    '<tr><td colspan="100%">Connection Error. Please try again.</td></tr>');

            }

        });

    }

    function yes_undo_delete_grn_now(id) {



        $.ajax({

            type: "POST",
            dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

            cache: false,
            url: api_path + "wms/undo_deleted_inv",
            data: {
                "batch_id": id,
                "company_id": localStorage.getItem('company_id'),
                "warehouse_id": localStorage.getItem('warehouse_id')
            },

            success: function(response) {

                if (response.status == '200') {
                    $("#row_" + id).hide();
                    $("#tr_act_loader_" + id).hide();
                } else if (response.status == '400') {
                    alert("Error deleting. Try again");
                    $("#tr_act_loader_" + id).hide();
                    $("#row_" + id).show();
                }

            },

            error: function(response) {

                $("#tr_act_loader_" + id).hide();
                $("#row_" + id).show();
                alert("Connection Error");

            }

        });

    }

    $(document).on('click', '.del_this_grn', function() {
        var id = $(this).attr("id").replace(/del_this_grn_/, '');
        $("#hold_grnid_to_del").html(id);
        $("#modal_delete_mdl").modal('show');
    });

    $(document).on('click', '#yes_del_grn', function() {

        var id = $("#hold_grnid_to_del").html();
        $("#tr_act_loader_" + id).show();
        $("#row_" + id).hide();
        $("#modal_delete_mdl").modal('hide');

        yes_delete_grn_now(id);

    })

    $(document).on('click', '.del_hpay', function() {

        var grn_id = $(this).attr('id').replace(/del_hp_/, '');
        $("#row_lodda_" + grn_id).show();
        $("#row_pmh_" + grn_id).hide();
        $.ajax({

            type: "POST",
            dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

            cache: false,
            url: api_path + "wms/del_payment_details",
            data: {
                "row_id": grn_id,
                "company_id": localStorage.getItem('company_id'),
                "warehouse_id": localStorage.getItem('warehouse_id')
            },

            success: function(response) {
                console.log(response);
                if (response.status == '200') {

                    $("#row_lodda_" + grn_id).hide();
                    var amount_deleting = remove_commas_from_number($("#pho_ln_" + grn_id)
                        .html());
                    var new_total_paid = parseFloat(remove_commas_from_number($("#ttlltt")
                        .html())) - parseFloat(amount_deleting); //get new total paid
                    $("#ttlltt").html(format_to_money(
                    new_total_paid)); // insert new total paid

                    //bbllance
                    var new_balance_to_pay = parseFloat(remove_commas_from_number($(
                        "#bbllance").html())) + parseFloat(amount_deleting);
                    $("#bbllance").html(format_to_money(new_balance_to_pay));

                } else {

                    $("#row_lodda_" + grn_id).hide();
                    $("#row_pmh_" + grn_id).show();

                }

            },

            error: function(response) {

                console.log(response);
                $("#row_lodda_" + grn_id).hide();
                $("#row_pmh_" + grn_id).show();
            }

        });

    });

    $("#vendor_text").autocomplete({

        source: function(request, response) {
            // Fetch data
            console.log(response);
            $.ajax({

                url: api_path + "wms/vendors_autocomplete",
                type: 'post',
                headers: {'Authorization':localStorage.getItem('token') },

                dataType: "json",
                data: {
                    term: request.term,
                    company_id: localStorage.getItem('company_id')
                },
                success: function(data) {
                    response(data);
                    console.log(data);
                    // console.log(company_id);
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

    $(document).on('click', '#canccl_vdn', function() {

        $("#holds_vendor_name").val('');
        $("#holds_vendor_name").hide();
        $("#holds_vendor_id").html('');
        $("#vendor_text").show();
        $("#vendor_text").val('');

    });

    $("#item_text").autocomplete({

        source: function(request, response) {
            // Fetch data
            $.ajax({

                url: api_path + "wms/items_autocomplete",
                type: 'post',
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

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
            $('#item_text').val(ui.item.label + ' ' + ui.item.id); // display the selected text
            // save selected id to input
            // $('#selct_itn_text').html(ui.item.label); // save selected id to input
            // $("#unit_type").val(ui.item.unit).trigger("change");
            return false;

        }

    });

});

function yes_delete_grn_now(id) {

    $.ajax({

        type: "POST",
        dataType: "json",
        cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/inv_delete",
        data: {
            "batch_id": id,
            "company_id": localStorage.getItem('company_id'),
            "warehouse_id": localStorage.getItem('warehouse_id'),
            "user_id": localStorage.getItem('user_id')

        },

        success: function(response) {

            if (response.status == '200') {
                $("#row_" + id).hide();
                $("#tr_act_loader_" + id).hide();
            } else if (response.status == '400') {
                alert("Error deleting. Try again");
                $("#tr_act_loader_" + id).hide();
                $("#row_" + id).show();
            }

        },

        error: function(response) {

            $("#tr_act_loader_" + id).hide();
            $("#row_" + id).show();
            alert("Connection Error");

        }

    });

}


function cancel_debt() {

    $("#cancel_debt").hide();
    $("#cancel_debt_loader").show();

    $.ajax({

        type: "POST",
        dataType: "json",
        cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/grn_cancel_payment",
        data: {
            "batch_id": $("#btch_id_ph").html(),
            "company_id": localStorage.getItem('company_id'),
            "warehouse_id": localStorage.getItem('warehouse_id')
        },

        success: function(response) {

            console.log(response);

            if (response.status == '200') {

                $("#cancel_debt_loader").hide();
                //update to update

                $("#pmt_stuts").html('<span class="label label-success">Completed</span>');

            } else if (response.status == '400') {

                console.log(response);
                alert(response);
                $("#cancel_debt").show();
                $("#cancel_debt_loader").hide();

            }

        },

        error: function(response) {

            console.log(response);
            alert("Techincal Error");
            $("#cancel_debt").show();
            $("#cancel_debt_loader").hide();

        }

    });

}


function add_payment_history_line() {

    //do_add_pm - hide
    $("#do_add_pm").hide();

    //adding_new_pm - show
    $("#adding_new_pm").show();

    //date
    $('#payment_date_addn').datepicker({
        dateFormat: "yy-mm-dd"
    });

    var batch_id = $("#btch_id_ph").html();

}

function send_in_new_payment() {




    var blank;
    $(".add_req").each(function() {

        var the_val = $.trim($(this).val());

        if (the_val == "" || the_val == "0") {

            $(this).addClass('has-error');

            blank = "yes";

        } else {

            $(this).removeClass("has-error");

        }

    });

    if (blank == "yes") {

        // $("#error").html("You have a blank field");

        return;

    }


    $("#do_add_pm_loader").show();
    //adding_new_pm - show
    $("#adding_new_pm").hide();



    var batch_id = $("#btch_id_ph").html();
    var company_id = localStorage.getItem('company_id');
    var payment_date = $("#payment_date_addn").val();
    var amount_paid = $("#amount_paid_addn").val();

    $.ajax({

        type: "POST",
        dataType: "json",
        cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/add_inv_payment_bal",
        data: {
            "amt_paid": amount_paid,
            "company_id": company_id,
            "outgoing_date": payment_date,
            "user_id": localStorage.getItem('user_id'),
            "warehouse_id": localStorage.getItem('warehouse_id'),
            "batch_id": batch_id
        },

        success: function(response) {

            console.log(response);

            if (response.status == '200') {

                //$("#row_lodda_"+grn_id).show();
                //$("#row_pmh_"+grn_id).hide();

                var list_trs;
                list_trs += '<tr id="row_pmh_' + response.last_inserted_id + '" class="pmt_lst"><td>' +
                    format_a_date(payment_date) + '</td><td>' + format_to_money(amount_paid) +
                    '</td><td style="text-align: right"><i class="fa fa-times-circle fa-2x del_hpay" style="color: #fc9e99; cursor: pointer" id="del_hp_' +
                    response.last_inserted_id + '"> </i></td></tr>';

                list_trs += '<tr id="row_lodda_' + response.last_inserted_id +
                    '" style="display: none"><td colspan="100%"><i class="fa fa-spinner fa-spin fa-fw fa-1x"></td></tr>';

                $(".pmt_lst:last").after(list_trs);

                //update amount paid
                var new_amount_paid = parseFloat(remove_commas_from_number($("#ttlltt").html())) +
                    parseFloat(amount_paid); //calculate new amount paid
                $("#ttlltt").html(format_to_money(new_amount_paid)); //insert new amount

                //update balance
                var new_balance = parseFloat(remove_commas_from_number($("#bbllance").html())) - parseFloat(
                    amount_paid);
                $("#bbllance").html(format_to_money(new_balance));


                if (response.payment_status == "completed") {

                    var pmstus = '<span class="label label-success">Completed</span>';
                } else {

                    var pmstus = '<span class="label label-warning">Uncompleted</span>';
                }

                // alert(pmstus);

                $("#pmt_stuts").html(pmstus);


            } else if (response.status == '400') {

                alert(response.msg);

            }

            $("#do_add_pm_loader").hide();
            //adding_new_pm - show
            $("#adding_new_pm").hide();

            //show add link
            $("#do_add_pm").show();

        },

        error: function(response) {

            console.log(response);
            alert("Connection error. Please try again.");
            $("#do_add_pm_loader").hide();
            //adding_new_pm - show
            $("#adding_new_pm").hide();

            //show add link
            $("#do_add_pm").show();

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


function fetch_incoming_info() {

$("#modal_view_incoming").modal('show');
$("#loading_po_info").show();
$("#generateData").html('');



var company_id = localStorage.getItem('company_id');
var warehouse_id = localStorage.getItem('warehouse_id');

// $('#in_' + list_id).hide();
// $('#loader11_' + list_id).show();

$.ajax({

    type: "GET",
    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

    cache: false,
    url: api_path + "wms/transfer_details",
    data: {
        "transfer_id": localStorage.getItem('trf_id'),
        "company_id": company_id,
        "warehouse_id":warehouse_id,
        "page": 1,
        "limit": 10
    },

    success: function(response) {

        console.log(response);



        if (response.status == '200') {

            $("#modal_view_incoming #ivvv_fff").html(response.data.vendor);
            $("#modal_view_incoming #ivvv_dtt").html(format_a_date(response.data
                .date_recieved));
            $("#modal_view_incoming #ivvv_shpppt").html(response.data.shipped_to);
            // $("#modal_view_incoming #btch_cddd").html(response.data.batch_code);

            var list_trs = "";
            var k = 1;
            var failed = [];
            var success = [];
            $.each(response.data, function(i, v) {

                list_trs += `<tr id="row_${v.row_id}"><td>${k}</td><td >${v.item_name}</td><td style="text-align: right">${v.warehouse_section}</td><td style="text-align: right">${v.batch_name}</td><td style="text-align: right">${v.sourceQty}</td><td style="text-align: right">${v.destinationQty}</td><td style="text-align: right">${v.transferQty}</td><td style="text-align: right">${v.status == "failed" ? `<span style="color: red">${v.status}</span>` : `<span>${v.status}</span>`}</td></tr>`;
                    if(v.status == "failed"){
                        failed.push("failed")
                    }
                    else if(v.status == "sent"){
                        success.push("success")

                    }
                    


                k++;

            });

           

            list_trs +=
                `<tr id="row_"><td style="text-align: right; color: green" colspan="7"><b>Sucessful Items Transfered:</b></td><td style="text-align: right"><b>${success.length}</b></td></tr>`;

            list_trs +=
                `<tr id="row_"><td style="text-align: right; color: red" colspan="7"><b>Number of Failed Items:</b></td><td style="text-align: right"><b>${failed.length}</b></td></tr>`;





            $("#loading_po_info").hide();
            $("#incomingData").html(list_trs);

            $(".invoice-info").show();

        }

    },

    error: function(response) {
        alert("Connection Error.");

    }

});
}

// function fetch_incoming_info(list_id) {

//     var company_id = localStorage.getItem('company_id');
//     var warehouse_id = localStorage.getItem('warehouse_id');

//     // $('#in_' + list_id).hide();
//     // $('#loader11_' + list_id).show();

//     $('#loading_iuiu').show();
//     $("#generateData").html('');
//     $('#modal_view_incoming').modal('show');

//     $("#modal_view_incoming #ivvv_fff").html('');
//     $("#modal_view_incoming #ivvv_dtt").html('');
//     $("#modal_view_incoming #btch_cddd").html('');

//     $.ajax({

//         type: "POST",
//         dataType: "json",
//         cache: false,
//         url: api_path + "wms/inv_batch_details",
//         data: {
//             "batch_id": list_id,
//             "company_id": company_id,
//             "warehouse_id": warehouse_id
//         },

//         success: function(response) {

//             console.log(response);

//             $('#loading_iuiu').hide();
//             // $('#in_' + list_id).show();

//             if (response.status == '200') {

//                 $("#modal_view_incoming #ivvv_fff").html(response.data.vendor);
//                 $("#modal_view_incoming #ivvv_dtt").html(format_a_date(response.data.outgoing_date));
//                 $("#modal_view_incoming #btch_cddd").html(response.data.batch_code);

//                 var list_trs = "";
//                 var k = 1;
//                 $.each(response.data.items, function(i, v) {

//                    list_trs += '<tr id="row_' + v + '"><td>' + k + '</td><td>' + v.item_name +
                    // '</td><td style="text-align: right">' + format_to_money(v.qty) +
                    // '</td><td style="text-align: right">' + format_to_money(v.qty_supplied) +
                    // '</td><td style="text-align: right">' + format_to_money(v.unit_cost) +
                    // '</td><td style="text-align: right">' + format_to_money(v.total_line_cost) + 
                    // '</td></tr>';

//                     k++;

//                 });

//                 if (response.data.vat_lines != "") {

//                     $.each(response.data.vat_lines, function(i, v) {

//                         // list_trs += '<tr id="row_'+v+'"><td style="text-align: right; color: " colspan="5">'+v.vl_name+'</td><td style="text-align: right">'+format_to_money(v.amount)+'</td></tr>';

//                         k++;

//                     });
//                 }

//                 // list_trs += '<tr id="row_"><td style="text-align: right" colspan="5"><b>TOTAL</b></td><td style="text-align: right"><b>'+format_to_money(response.data.batch_total)+'</b></td></tr>';

//                 // list_trs += '<tr id="row_"><td style="text-align: right; color: green" colspan="5"><b>Amount Paid</b></td><td style="text-align: right"><b>'+format_to_money(response.data.amount_paid)+'</b></td></tr>';

//                 // list_trs += '<tr id="row_"><td style="text-align: right; color: red" colspan="5"><b>Balance to Pay</b></td><td style="text-align: right"><b>'+format_to_money(response.data.balance)+'</b></td></tr>';

//                 $("#generateData").html(list_trs);

//                 $('#modal_view_incoming').modal('show');
//             }

//         },

//         error: function(response) {
//             $('#loader11_' + list_id).hide();
//             $('#in_' + list_id).show();
//             console.log(response);
//             alert("Connection Error.");

//         }

//     });
// }


function fetch_payment_history(list_id) {

    //hide these buttons
    $("#open_debt").hide();
    $("#cancel_debt").hide();

    $("#modal_view_payment_history").modal('show');
    $("#loading_ph").show();
    $("#generateData_ph").html('');
    var clicked_grn = $("#batch_cod_tx_" + list_id).html();
    $("#btch_cddd_ph").html(clicked_grn);
    $("#btch_id_ph").html(list_id);

    var company_id = localStorage.getItem('company_id');
    var warehouse_id = localStorage.getItem('warehouse_id');

    $.ajax({

        type: "POST",
        dataType: "json",
        cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/get_inv_payment_details",
        data: {
            "inv_id": list_id,
            "company_id": company_id,
            "warehouse_id": warehouse_id

        },

        success: function(response) {

            console.log(response);

            $("#loading_ph").hide();

            if (response.status == '200') {

                var list_trs = "";
                list_trs += '<tr id="ioi" class="pmt_lst" style="display: none"><td></td></tr>';

                if (response.data != undefined) {

                    var k = 1;
                    $.each(response.data.payment, function(i, v) {

                        if (response.payment_status == "uncompleted") {
                            var del_btn =
                                '<i class="fa fa-times-circle fa-2x del_hpay" style="color: #fc9e99; cursor: pointer" id="del_hp_' +
                                v.id + '"> </i>';
                        } else {
                            var del_btn = '';
                        }

                        list_trs += '<tr id="row_pmh_' + v.id + '" class="pmt_lst"><td>' +
                            format_a_date(v.outgoing_date) + '</td><td id="pho_ln_' + v.id + '">' +
                            format_to_money(v.amount_paid) + '</td><td style="text-align: right">' +
                            del_btn + '</td></tr>';

                        list_trs += '<tr id="row_lodda_' + v.id +
                            '" style="display: none"><td colspan="100%"><i class="fa fa-spinner fa-spin fa-fw fa-1x"></td></tr>';

                        k++;

                    });

                } else {
                    response.total_paid = 0.00;
                }




                if (response.payment_status == "completed" || response.payment_status ==
                    "uncompleted_and_closed") {
                    var hide_add_new_pay = "none";
                    var pmstus = '<span class="label label-success">Completed</span>';
                    $("#open_debt").show();
                } else {
                    var hide_add_new_pay = "";
                    var pmstus = '<span class="label label-warning">Uncompleted</span>';
                    $("#cancel_debt").show();
                }

                list_trs += '<tr id="do_add_pm" style="display: ' + hide_add_new_pay +
                    '"><td colspan="100%"><span class="label label-default add_payment_ph" style="cursor: pointer">Add New Payment</span></td></tr>';
                list_trs +=
                    '<tr id="adding_new_pm" style="display: none"> <td><input type="text" class="form-control add_req" placeholder="Date" id="payment_date_addn"></td> <td><div class="input-group"><input type="text" class="form-control add_req allownumericwithdecimal" style="width: 55%" id="amount_paid_addn"><span class="input-group-btn" style="float: left"><button type="button" class="btn btn-primary" id="send_in_new_payment"> Add!</button></span></div></td> <td style="text-align: right"><i  class="fa fa-times-circle fa-2x"  data-toggle="tooltip" data-placement="top" id="cancladd_pm" style="color: #f79e94; cursor: pointer"></i></td></tr>';

                list_trs +=
                    '<tr id="do_add_pm_loader"  style="display: none;"><td colspan="100%"><i class="fa fa-spinner fa-spin fa-fw fa-3x"></td></tr>';

                list_trs +=
                    '<tr id="row_"><td style="text-align: right"></td><td style="text-align: right"><b>TOTAL PAID</b></td><td style="text-align: right"><b><span id="ttlltt">' +
                    format_to_money(response.total_paid) + '</span></b></td></tr>';

                list_trs +=
                    '<tr id="row_"><td style="text-align: right"></td><td style="text-align: right"><b>BALANCE</b></td><td style="text-align: right"><b><span id="bbllance">' +
                    format_to_money(response.balance) + '</span></b></td></tr>';

                list_trs +=
                    '<tr id="row_"><td style="text-align: right"></td><td style="text-align: right"><b>STATUS</b></td><td style="text-align: right" id="pmt_stuts">' +
                    pmstus + '</td></tr>';

                $("#generateData_ph").html(list_trs);

            } else {
                $("#generateData_ph").html('<tr><td colspan="100%">' + response.msg + '</td></tr>');
            }

        },

        error: function(response) {
            console.log(response);
            $("#loading_ph").hide();
            $("#generateData_ph").html(
                '<tr><td colspan="100%">Connection Error. Please try again.</td></tr>');

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
                headers: {'Authorization':localStorage.getItem('token') },
        
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


</script>

<?php

include_once("../gen/_common/footer.php"); // header contents

?>
