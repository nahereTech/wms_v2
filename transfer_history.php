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
                <h3>Create Internal Transfer</h3>
            </div>

            <div class="title_right">
                <div class="col-md-6 col-sm-6 col-xs-12 form-group pull-right top_search">
                    <div class="input-group" style="float: right">

                        <a href="create_internal_transfer"><button type="button" class="btn btn-default" id="">Create
                                TRF</button></a>



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

                                <div class="col-sm-2 col-xs-12">
                                    <label>TO Code</label>
                                    <input type="text" id="code" class="form-control">
                                </div>

                                <div class="col-sm-3 col-xs-12">

                                    <label>Vendor</label>

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

                                <div class="col-sm-3 col-xs-12">
                                    <label>Date Range</label>
                                    <input type="text" class="form-control" id="date_range" autocomplete="off">
                                </div>

                                <div class="col-sm-2 col-xs-12">
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

                                <div class="col-sm-3 col-xs-4">
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

                                        <th class="column-title" width="15%">Transfer Code</th>
                                        <th class="column-title" width="15%">Date</th>
                                        <th class="column-title">Source Warehouse</th>
                                        <th class="column-title">Destination Warehouse</th>
                                        <th class="column-title no-link last sel_action" id="sel_action" width="15%">
                                            <span class="nobr">Actions</span>
                                        </th>
                                        <th class="bulk-actions" colspan="4">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span
                                                    class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tr id="loading">
                                    <td colspan="5"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i>
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
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;"><i class="fa info-circle"></i> TRF
                    Details <span id="btch_cddd" style="font-size: 14px"></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">

                <div class="row invoice-info" style="display: none">
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
                        <b>Ship To</b>
                        <address id="ivvv_shpppt">

                        </address>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row" style="margin-top: 50px">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="headings">

                                    <th class="column-title" width="5%">S/N</th>
                                    <th class="column-title" width="30%">Item</th>
                                    <th class="column-title" width="15%" style="text-align: right">Section</th>
                                    <th class="column-title" width="15%" style="text-align: right">Batch</th>
                                    <th class="column-title" width="15%" style="text-align: right">Source Warehouse(Qty)</th>
                                    <th class="column-title" width="15%" style="text-align: right">Destination Warehouse(Qty)</th>
                                    <th class="column-title" width="15%" style="text-align: right">Qty</th>
                                    <!-- <th class="column-title" width="10%" style="text-align: right">Transfer Status</th> -->



                                </tr>
                            </thead>

                            <tr id="loading_po_info">
                                <td colspan="6" style="text-align: center; padding-top: 15px"><i
                                        class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i></td>
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
                <button type="button" class="btn" id="retry_transfers" style="background-color: #528000; color: white; display:none">Retry Failed Transfer</button>
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
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;"><i class="fa info-circle"></i>
                    Payments <span id="btch_cddd_ph" style="font-size: 14px"></span> <span id="btch_id_ph"
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
                    Delivery History <span id="btch_cddd_dlv" style="font-size: 14px"></span> <span id="btch_id_dlv"
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
                                    <!-- <th class="column-title" width="20%" style="text-align: right">Warehouse</th> -->
                                    <!-- <th class="column-title" width="20%" style="text-align: right">Action</th> -->

                                </tr>
                            </thead>

                            <tr id="loading_data" style="display: ;">
                                <td colspan="4" style="text-align: center; padding-top: 15px"><i
                                        class="fa fa-spinner fa-spin fa-fw fa-3x"></i></td>
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

                    <h2>This PO will now be moved to trash. </h2>
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





<div class="modal fade" id="modal_delete_frv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;"><i class="fa info-circle"></i> <span
                        id="">Delete Forever</span> <span id="hold_grnid_to_del_frv" style="display: none"></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">



                <div class="row" style="text-align: center;">

                    <h2>This PO will be deleted forever. </h2>
                    Are you sure you want to proceed?<br><br>

                    <div id="pck_btns_frv">
                        <button type="button" class="btn btn-success" id="yes_del_grn_frv" style="display: ">Yes,
                            Delete</button>
                        <button type="button" class="btn btn-danger" id="" style="display: " data-dismiss="modal">No,
                            Cancel</button>
                    </div>

                    <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;"
                        id="deleting_grn_in_progress_frv"></i>

                    <h2 id="show_good_deleted" style="display: none; color: red; font-weight: bold">Deleted</h2>

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





<div class="modal fade" id="modal_transfer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;"><i class="fa info-circle"></i> Send
                    purchase order to email address <span id=""></span> <span id="" style="display: none"></span>
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
                            <input type="email" class="form-control" id="mail_add"
                                style="margin-bottom: 10px; border-radius: 20px; padding: 20px;"
                                placeholder="Email Address" required /> <br />
                            <input type="email" class="form-control" id="mail_cc"
                                style="margin-bottom: 10px; border-radius: 20px; padding: 20px;" placeholder="Cc"
                                required /> <br />
                            <input type="email" class="form-control" id="mail_bcc"
                                style="margin-bottom: 10px; border-radius: 20px; padding: 20px;" placeholder="Bcc"
                                required /> <br />
                            <input type="text" class="form-control cc" id="mail_sub"
                                style="margin-bottom: 10px; border-radius: 20px; padding: 20px;" placeholder="Subject"
                                required /> <br />
                            <!-- <embed src="file_name.pdf" width="800px" height="2100px" /> -->
                            <textarea type="textarea" class="form-control"
                                style="margin-bottom: 10px; border-radius: 20px; padding: 20px; text-align: left; align-content:center; overflow:auto;"
                                placeholder="Message" id="mail_body" required="required" contenteditable>
                    </textarea>
                            <!-- <input type="file" class="form-control col-md-7 col-xs-12 required" id="mail" style="border:none;" placeholder="Subject" required disabled="disabled" value="abc.pdf" /> <br /><br /> -->
                            <div align="left">
                                <img align="left" src="assets/pdf.png" style="width: 10%"><span
                                    style="position: relative;top: 10px">
                                    <p style="color: grey">Purchase order attachment</p>
                                </span>
                            </div>

                            <button type="submit" id="email_repo" class="btn btn-primary"
                                style="margin-bottom: 10px; border-radius: 20px; padding: 10px; width: 100%; margin-top: 10px;">Send
                                Purchase Order</button>
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
                $('#code').on('keydown', function(e) {
                    console.log(e.which)
                    console.log(this.value.length)
                    if (e.which == 13) {
                        $('#pagination').twbsPagination('destroy');
                        list_grns('');
                    }
                })

                $('#vendor_text').on('keydown', function(e) {
                    console.log(e.which)
                    console.log(this.value.length)
                    if (e.which == 13) {
                        $('#pagination').twbsPagination('destroy');
                        list_grns('');
                    }
                })

                $('#date_range').on('keydown', function(e) {
                    console.log(e.which)
                    console.log(this.value.length)
                    if (e.which == 13) {
                        $('#pagination').twbsPagination('destroy');
                        list_grns('');
                    }
                })

                $('#pay_status').on('keydown', function(e) {
                    console.log(e.which)
                    console.log(this.value.length)
                    if (e.which == 13) {
                        $('#pagination').twbsPagination('destroy');
                        list_grns('');
                    }
                })

                $('#deleted_itms').on('keydown', function(e) {
                    console.log(e.which)
                    console.log(this.value.length)
                    if (e.which == 13) {
                        $('#pagination').twbsPagination('destroy');
                        list_grns('');
                    }
                })



                $(document).on('click', '#filter', function() {
                    $('#pagination').twbsPagination('destroy');
                    list_grns('');
                });


                $('#incoming_filter').on('click', display_filter);

                $('input#date_range').daterangepicker({
                    autoUpdateInput: false
                });

                $('input#date_range').on('apply.daterangepicker', function(ev, picker) {
                    $(this).val(picker.startDate.format('YYYY/MM/DD') + ' - ' + picker.endDate.format(
                        'YYYY/MM/DD'));

                });

                $(document).on('click', '.incoming_info', function() {
                    list_id = $(this).attr('id').replace(/in_/, '');
                    fetch_incoming_info(list_id);

                });

                $(document).on('click', '.incoming_info', function() {
                    list_id = $(this).attr('id').replace(/in_/, '');
                    fetch_incoming_info(list_id);

                });

                $(document).on('click', '.email_report', function() {
                    $('#modal_transfer').modal('show');
                    list_id = $(this).attr('id').replace(/email_report/, '');
                    // email_report(list_id)

                });

                $(document).on('click', '#email_repo', function(e) {
                    e.preventDefault();
                    var id = $(this).attr("id").replace(/dwnld_grn_/, '');
                    var code = $(this).attr("dir");
                    if ($('#mail_add').val()) {
                        email_report();
                    } else {
                        alert('Email address field cannot be empty');
                        return;
                    }
                    // supply_history("");
                });



                //inc_payment_history
                $(document).on('click', '.inc_payment_history', function() {
                    list_id = $(this).attr('id').replace(/in_p_/, '');
                    fetch_payment_history(list_id);

                });

                //inc_payment_history
                $(document).on('click', '.dlv', function() {
                    list_id = $(this).attr('id').replace(/dlv_/, '');
                    view_delivery_history(list_id);

                });



                //add_payment_ph
                $(document).on('click', '.add_payment_ph', function() {
                    // list_id = $(this).attr('id').replace(/in_p_/, '');
                    // alert("1");
                    add_payment_history_line();

                });

                //add_dlv_ph
                $(document).on('click', '.add_dlv_ph', function() {
                    // list_id = $(this).attr('id').replace(/in_p_/, '');
                    // alert("2");
                    add_delivery_history_line();

                });

                $(document).on('click', '.delete_incoming', function() {
                    var list_id = $(this).attr('id').replace(/inc_/, '');
                    delete_incoming_item(list_id);
                });

                //cancladd_pm
                $(document).on('click', '#cancladd_pm', function() {
                    //do_add_pm - hide
                    $("#do_add_pm_dlv").show();

                    //adding_new_pm - show
                    $("#adding_new_pm_dlv").hide();
                });


                //send_in_new_payment
                $(document).on('click', '#send_in_new_payment', function() {
                    send_in_new_payment();
                });

                //send_in_new_delivery
                $(document).on('click', '#send_in_new_delivery', function() {
                    var po_id = $(this).attr("dir");
                    send_in_new_delivery(po_id);
                });

                

                $(document).on('click', '#retry_transfers', function() {
                    $("#retry_transfers").hide();
                    retry_transfers();
                });

                //send_in_new_payment
                $(document).on('click', '#cancel_debt', function() {
                    cancel_debt();
                });


                $(document).on('click', '.undo_del', function() {
                    var id = $(this).attr("id").replace(/undo_del_grn_/, '');
                    $("#hold_grnid_to_del2").html(id);
                    $("#modal_delete_mdl_restore").modal('show');
                });


                $(document).on('click', '.select_batch', function() {
                    var id = $(this).attr("id").replace(/sel_/, '');
                    localStorage.setItem('batch_id', id);
                });

                $(document).on('click', '.dwnld_grn', function() {
                    var id = $(this).attr("id").replace(/dwnld_grn_/, '');
                    var code = $(this).attr("dir");
                    $("#modal_doing_dwnld").modal('show');
                    localStorage.setItem('batch_id', id);
                    create_download(id, code);
                });

                $(document).on('click', '#yes_undo_del_grn', function() {

                    var id = $("#hold_grnid_to_del2").html();
                    $("#tr_act_loader_" + id).show();
                    $("#row_" + id).hide();
                    $("#modal_delete_mdl_restore").modal('hide');

                    yes_undo_delete_grn_now(id);

                });


                //delete forever
                $(document).on('click', '.del_flva', function() {

                    var id = $(this).attr("id").replace(/del_flva_/, '');
                    $("#pck_btns_frv").show();
                    $("#deleting_grn_in_progress_frv").hide();
                    $("#hold_grnid_to_del_frv").html(id);
                    $("#modal_delete_frv").modal('show');

                });







                $(document).on('click', '.del_this_grn', function() {
                    var id = $(this).attr("id").replace(/del_this_grn_/, '');
                    $("#pck_btns").show();
                    $("#deleting_grn_in_progress").hide();
                    $("#hold_grnid_to_del").html(id);
                    $("#modal_delete_mdl").modal('show');
                });

                $(document).on('click', '#yes_del_grn', function() {

                    var id = $("#hold_grnid_to_del").html();
                    $("#tr_act_loader_" + id).show();
                    $("#row_" + id).hide();
                    $("#modal_delete_mdl").modal('hide');

                    yes_delete_grn_now(id);

                });


                $(document).on('click', '#yes_del_grn_frv', function() {

                    var id = $("#hold_grnid_to_del_frv").html();
                    $("#tr_act_loader_" + id).show();
                    $("#row_" + id).hide();
                    $("#modal_delete_frv").modal('hide');

                    yes_delete_grn_frv_now(id);

                });



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


                //del_hdlv



                $(document).on('click', '.del_hpay', function() {

                    var grn_id = $(this).attr('id').replace(/del_hp_/, '');
                    $("#row_lodda_" + grn_id).show();
                    $("#row_pmh_" + grn_id).hide();
                    $.ajax({

                        type: "POST",
                        dataType: "json",
                        cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

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
                                var amount_deleting = remove_commas_from_number($(
                                    "#pho_ln_" + grn_id).html());
                                var new_total_paid = parseFloat(remove_commas_from_number($(
                                    "#ttlltt").html())) - parseFloat(
                                    amount_deleting); //get new total paid
                                $("#ttlltt").html(format_to_money(
                                    new_total_paid)); // insert new total paid

                                //bbllance
                                var new_balance_to_pay = parseFloat(
                                        remove_commas_from_number($("#bbllance").html())) +
                                    parseFloat(amount_deleting);
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
                        $('#item_text').val(ui.item.label + ' ' + ui.item
                            .id); // display the selected text
                        // save selected id to input
                        // $('#selct_itn_text').html(ui.item.label); // save selected id to input
                        // $("#unit_type").val(ui.item.unit).trigger("change");
                        return false;

                    }

                });

            });

            function receive_grn() {

                var blank = "";

                $(".not_empty").each(function() {

                    var the_val = $.trim($(this).val());

                    if (the_val == "" || the_val == "0") {

                        $(this).addClass('has-error');

                        blank = "yes";
                        return;

                    } else {

                        $(this).removeClass("has-error");

                    }

                });

                if ($("#date_received").val() == "") {
                    return;
                }

                // if ($("#holds_vendor_id").html() == "") {
                //     $("#vendor_text").addClass('has-error');
                //     blank = "yes";
                //     return;
                // }


                // if (blank == "yes") {
                //     alert("You have a blank field");
                //     return;
                // }




                var items_list = [];
                var vat_items = [];




                //for each invoice line item
                $('.itm_tr').each(function() {

                    var id = $(this).attr("id").replace(/itm_tr_/, '');
                    console.log(id);

                    var listObj = document.getElementById(`select_item_items_${id}`);
                    console.log(listObj);
                    var datalist = document.getElementById(listObj.getAttribute("list"));
                    console.log(datalist);
                    var fa = datalist.options.namedItem(listObj.value);
                    console.log($(`#bat_${id}`).attr('data-value'));

                    var item_name = fa.getAttribute('data-value');
                    var section = $(`#select_${id}`).val();
                    var batch = $(`#bat_${id}`).attr('data-value');
                    var source_warehouse = $(`#sou_${id}`).val();
                    var destination_warehouse = $(`#des_${id}`).val();
                    var qty = $(`#qty_${id}`).val();



                    items_list.push({

                        item_id: item_name,
                        from_section: section,
                        to_section: 0,
                        batch: batch,
                        sourceQty: source_warehouse,
                        destinationQty: destination_warehouse,
                        transferQty: qty,


                    });

                });

                console.log(items_list);


                var listOb = document.getElementById(`select_item`);
                console.log(listOb);
                var datalist = document.getElementById(listOb.getAttribute("list"));
                console.log(datalist);
                var final = datalist.options.namedItem(listOb.value);
                var destination = final.getAttribute('data-value');
                console.log(final);

                $("#rcv_grn_loader").show();
                $("#receive_grn").hide();

                $.ajax({

                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/item_transfer",
                    data: {



                        "user_id": localStorage.getItem('user_id'),
                        "company_id": localStorage.getItem('company_id'),
                        "from_warehouse": localStorage.getItem('warehouse_id'),
                        "to_warehouse": destination,
                        "created_at": $("#date_received").val(),
                        "transfer_type": "external",
                        "item_array": items_list,



                    },
                    timeout: 60000,

                    success: function(response) {

                        console.log(response);

                        if (response.status == '200' || response.status == '400') {
                            var plural;
                            if (response.total_success_counts > 1) {
                                plural = 's';
                            } else {
                                plural = '';
                            }


                            $('.succ_create').html(
                                `<h4>${response.total_success_counts} Item${plural} transferred succesfully<h4><h4 style="color:red">${response.total_fail_counts} failed<h4>`
                                );

                            $('#modal_succ_create').modal('show');
                            $('#modal_succ_create').on('hidden.bs.modal', function() {
                                // window.location.href = base_url+"po_test";

                                window.location.href = base_url + "external_transfer";

                            })


                        } else if (response.status == '400') {

                            $("#msg_r").html(response.msg);
                            $("#rcv_grn_loader").hide();
                            $("#receive_grn").show();

                        } else {

                            $("#msg_r").html(response.msg);
                            $("#rcv_grn_loader").hide();
                            $("#receive_grn").show();

                        }

                    },

                    error: function(objAJAXRequest, strError) {

                        console.log(strError);
                        console.log(objAJAXRequest);

                        $("#rcv_grn_loader").hide();
                        $("#receive_grn").show();

                    }

                });

            }






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
                            $("#modal_transfer").modal("hide");
                            $("#modal_item").modal("show");
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

                var user_id = localStorage.getItem('user_id');
                var module_id = 6;
                var profile_id = 2;

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


                            var list_id;
                            list_grns('');

                            $("#main_display").show();

                        } else {

                            // $("#main_display").html('<br><br><br><br><h2>Access Denied</h2>You do not have permission to access this page<br><br<br>');
                            $("#page_div").show();
                            $("#main_display").hide();

                        }

                    },

                    error: function(response) {
                        // $("#main_display").html('<br><br><br><br><h2>Access Denied</h2>You do not have permission to access this page<br><br<br>');
                        $("#page_div").show();
                        $("#main_display").hide();
                    }

                });

            }



            function yes_undo_delete_grn_now(id) {


                $.ajax({

                    type: "POST",
                    dataType: "json",
                    cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/undo_deleted_grn",
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



            function create_download(id, code) {
                $.ajax({

                    type: "POST",
                    dataType: "json",
                    cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/grn_batch_download",
                    data: {
                        "batch_id": id,
                        "company_id": localStorage.getItem('company_id'),
                        "warehouse_id": localStorage.getItem('warehouse_id')
                    },

                    success: function(response) {
                        console.log(response);
                        if (response.status == '200') {
                            download_file(response.data.d_file, code + '.pdf');
                            $("#modal_doing_dwnld").modal("hide");
                        } else if (response.status == '400') {

                        }

                    },

                    error: function(response) {
                        console.log(response);
                    }

                });
            }


            function yes_delete_grn_now(id) {

                $.ajax({

                    type: "POST",
                    dataType: "json",
                    cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/grn_delete",
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


            function yes_delete_grn_frv_now(id) {

                $.ajax({

                    type: "POST",
                    dataType: "json",
                    cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/grn_delete_forever",
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


            function cancel_debt() {

                $("#cancel_debt").hide();
                $("#cancel_debt_loader").show();

                $.ajax({

                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    cache: false,
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


            function add_delivery_history_line() {
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
                        "warehouse_id": localStorage.getItem('warehouse_id'),
                        "qty": qty,
                        "warehouse_id": warehouse_id,
                        "transaction_date": insert_date,
                        "unit_id": unit_id,
                        "store_type": "incoming"

                    },

                    success: function(response) {

                        console.log(response);

                        if (response.status == '200') {

                            var list_trs;
                            list_trs += '<tr id="row_pmh_' + response.data.dlv_id +
                                '" class="pmt_lst"><td>' + format_a_date(insert_date) + '</td><td>' +
                                item_name + '</td>  <td style="text-align: right">' + format_to_money(qty) +
                                '</td>  <td style="text-align: right">' + warehouse_name +
                                '</td> <td style="text-align: right"><!--<i class="fa fa-times-circle fa-2x del_dlvh" style="color: #fc9e99; cursor: pointer" id="del_dlvh_' +
                                response.data.dlv_id + '"> </i>--></td></tr>';

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
                        $("#do_add_pm_loader").show();

                    }

                });
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

                    url: api_path + "wms/add_grn_payment_bal",
                    data: {
                        "amt_paid": amount_paid,
                        "company_id": company_id,
                        "payment_date": payment_date,
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
                            list_trs += '<tr id="row_pmh_' + response.last_inserted_id +
                                '" class="pmt_lst"><td>' + format_a_date(payment_date) + '</td><td>' +
                                format_to_money(amount_paid) +
                                '</td><td style="text-align: right"><i class="fa fa-times-circle fa-2x del_hpay" style="color: #fc9e99; cursor: pointer" id="del_hp_' +
                                response.last_inserted_id + '"> </i></td></tr>';

                            list_trs += '<tr id="row_lodda_' + response.last_inserted_id +
                                '" style="display: none"><td colspan="100%"><i class="fa fa-spinner fa-spin fa-fw fa-1x"></td></tr>';

                            $(".pmt_lst:last").after(list_trs);

                            //update amount paid
                            var new_amount_paid = parseFloat(remove_commas_from_number($("#ttlltt")
                                .html())) + parseFloat(amount_paid); //calculate new amount paid
                            $("#ttlltt").html(format_to_money(new_amount_paid)); //insert new amount

                            //update balance
                            var new_balance = parseFloat(remove_commas_from_number($("#bbllance").html())) -
                                parseFloat(amount_paid);
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



            function display_filter() {

                $('#filter_display').toggle();
                $('#item_text').val("");
                $('#vendor_text').val("");
                $('#item_code').val("");
                $('#date_range').val("");
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


            function retry_transfers() {
                var ans = confirm("Are you sure you want to transfer this items again?");
                if (!ans) {
                    return;
                }

                var company_id = localStorage.getItem('company_id');
                var warehouse_id = localStorage.getItem('warehouse_id');

                $.ajax({

                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    cache: false,
                    url: api_path + "wms/resubmit_failed_transfers",
                    data: {
                        "transfer_id": list_id,
                        "company_id": company_id,
                        "user_id": localStorage.getItem('user_id')
                    },

                    success: function(response) {

                        var k = 1;
                        var list_grn_items = "";
                        // $.each(response.data, function(i, v) {

                        //     list_grn_items += '<option value="' + v.item_id + '" dir="' + v
                        //         .unit_id + '">' + v.item_name + '</option>';

                        //     k++;

                        // });

                        $("#itm_zz_lzt").append(list_grn_items);

                    },
                    error: function() {
                        alert("connection error");
                        console.log(response);
                    }

                });
                localStorage.removeItem('list_id')
            };



            function view_delivery_history(list_id) {

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
                    cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/po_delivery_history",
                    data: {
                        "grn_id": list_id,
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
                                        '" class="pmt_lst"><td>' + format_a_date(v.delivery_date) +
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


                            }


                            // list_trs += '<tr id="do_add_pm_dlv" style="display: "><td colspan="100%"><span class="label label-default add_dlv_ph" style="cursor: pointer">Add New Delivery</span></td></tr>';



                            list_trs += '<tr id="adding_new_pm_dlv" style="display: none">';
                            list_trs +=
                                '<td><input type="text" class="form-control add_req" placeholder="Date" id="payment_date_addn_dlv"></td>';
                            list_trs +=
                                '<td><div class="input-group col-md-12 col-sm-12 col-xs-12"><select class="form-control required add_req" style="width: 99%" id="itm_zz_lzt"> <option value="">-- Select Item --</option></select></div></td>';
                            list_trs +=
                                '<td style="text-align: right"><input type="text" class="form-control add_req allownumericwithdecimal" placeholder="Qty" id="qty_zz_dlv"></td>';
                            list_trs +=
                                '<td style="text-align: right"><div class="input-group col-md-12 col-sm-12 col-xs-12"><select class="form-control required add_req" id="wzh_zz_lzt"> <option value="">-- Warehouse --</option></select></div></td>';
                            list_trs +=
                                '<td style="text-align: right"><button type="button" class="btn btn-default" id="send_in_new_delivery" dir="' +
                                list_id +
                                '">Add</button><i  class="fa fa-times-circle fa-2x"  data-toggle="tooltip" data-placement="top" id="cancladd_pm" style="color: #f79e94; cursor: pointer"></i></td>';
                            list_trs += '</tr>';



                            list_trs +=
                                '<tr id="do_add_pm_loader"  style="display: none;"><td colspan="100%"><i class="fa fa-spinner fa-spin fa-fw fa-3x"></td></tr>';

                            $("#generateData_dlv").html(list_trs);
                            load_warehouses_for_pop();
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

            function fetch_incoming_info(list_id) {
                $("#retry_transfers").hide();

                $("#modal_view_incoming").modal('show');
                $("#loading_po_info").show();
                $("#generateData").html('');

                var clicked_grn = $("#batch_cod_tx_" + list_id).html();
                $("#btch_cddd").html("(" + clicked_grn + ")");

                $(".invoice-info").hide();

                var company_id = localStorage.getItem('company_id');
                var warehouse_id = localStorage.getItem('warehouse_id');
                localStorage.setItem('list_id', list_id)

                // $('#in_' + list_id).hide();
                // $('#loader11_' + list_id).show();

                $.ajax({

                    type: "GET",
                    dataType: "json",
                    cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/transfer_details",
                    data: {
                        "transfer_id": list_id,
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

                                list_trs += `<tr id="row_${v.row_id}"><td>${k}</td><td >${v.item_name}</td><td style="text-align: right">${v.section}</td><td style="text-align: right">${v.batch}</td><td style="text-align: right">${v.sourceQty}</td><td style="text-align: right">${v.destinationQty}</td><td style="text-align: right">${v.transferQty}</td></tr>`;
                                    if(v.status == "failed"){
                                        failed.push("failed")
                                    }
                                    else if(v.status == "sent"){
                                        success.push("success")

                                    }

                                k++;

                            });

                           

                            if (response.data.vat_line != "") {

                                $.each(response.data.vat_lines, function(i, v) {

                                    list_trs += '<tr id="row_' + v +
                                        '"><td style="text-align: right; color: " colspan="5">' + v
                                        .vl_name + '</td><td style="text-align: right">' +
                                        format_to_money(v.amount) + '</td></tr>';

                                    k++;

                                });
                            }

                            if(response.data.length > 3){
                                localStorage.setItem('trf_id', list_id);
                                list_trs +=
                                `<tr id="row_${list_id}" class="view_more"><td style="text-align: left; color: " colspan="6"><b><a href="transfer_details">View More</a></b></td><td style="text-align: right"><b></b></td></tr>`;
                            }

                            // list_trs +=
                            //     `<tr id="row_"><td style="text-align: right; color: green" colspan="6"><b>Sucessful Items Transfered:</b></td><td style="text-align: right"><b>${success.length}</b></td></tr>`;

                            // if(failed.length){
                            //     list_trs +=
                            //     `<tr id="row_"><td style="text-align: right; color: red" colspan="6"><b>Number of Failed Items:</b></td><td style="text-align: right"><b>${failed.length}</b></td></tr>`;
                            //     $("#retry_transfers").show()
                            // }

                            $("#loading_po_info").hide();
                            $("#generateData").html(list_trs);
                            console.log(`${"#generateData"}`.children().lenth);

                            $(".invoice-info").show();

                        }

                    },

                    error: function(response) {
                        alert("Connection Error.");

                    }

                });
            }


            function fetch_payment_history(list_id) {

                //hide these buttons
                $("#open_debt").hide();
                $("#cancel_debt").hide();

                $("#modal_view_payment_history").modal('show');
                $("#loading_ph").show();
                $("#generateData_ph").html('');
                var clicked_grn = $("#batch_cod_tx_" + list_id).html();
                $("#btch_cddd_ph").html("(" + clicked_grn + ")");
                $("#btch_id_ph").html(list_id);

                var company_id = localStorage.getItem('company_id');
                var warehouse_id = localStorage.getItem('warehouse_id');

                $.ajax({

                    type: "POST",
                    dataType: "json",
                    cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/get_grn_payment_details",
                    data: {
                        "grn_id": list_id,
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

                                    list_trs += '<tr id="row_pmh_' + v.id +
                                        '" class="pmt_lst"><td>' + format_a_date(v.payment_date) +
                                        '</td><td id="pho_ln_' + v.id + '">' + format_to_money(v
                                            .amount_paid) + '</td><td style="text-align: right">' +
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
                                '<tr id="row_"><td style="text-align: right"></td><td style="text-align: right"><b>TOTAL COST</b></td><td style="text-align: right"><b><span id="bttcst">' +
                                format_to_money(response.batch_total) + '</span></b></td></tr>';

                            list_trs +=
                                '<tr id="row_"><td style="text-align: right"></td><td style="text-align: right"><b>STATUS</b></td><td style="text-align: right" id="pmt_stuts">' +
                                pmstus + '</td></tr>';

                            $("#generateData_ph").html(list_trs);

                        } else {
                            $("#generateData_ph").html('<tr><td colspan="100%">' + response.msg +
                                '</td></tr>');
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


            // $.ajax({
            //         type: "GET",
            //         dataType: "json",
            //         url: api_path + "wms/transfer_histories",
            //         data: {
            //             "company_id" : localStorage.getItem('company_id'),
            //             "warehouse_id": localStorage.getItem('warehouse_id'),
            //             "transfer_period": $("#date_filter").val(),
            //             "transfer_type": $("#transfer_type").val(),
            //             "transfer_by":$("#transfer_by").val(),
            //             "limit": limit,
            //             "page": 1,

            //         },

            //         success: function(response) {

            //             console.log(response);


            //             if (response.status == '200') {


            //             var add_tab = ""
            //             console.log(response)

            //             $.each(response.data, function (i, v) {
            //                 console.log(v.item_name)
            //                  if(v.transfer_type == "external" && v.transfer_status == "moved"){
            //                       add_tab+=`<tr>
            //                 <td><i class="fa fa fa-arrow-left" style="color:green"></i></td>
            //                 <td>${v.item_name}</td>
            //                 <td>${v.transfer_person}</td>
            //                 <td>${v.item_qty}</td>
            //                 <td>${v.transfer_type}</td>
            //                 <td>${v.transfer_mode}</td>
            //                 <td>
            //                 </td>
            //                 </tr>`

            //                 }

            function list_grns(page) {

                var company_id = localStorage.getItem('company_id');
                var warehouse_id = localStorage.getItem('warehouse_id');
                if (page == "") {
                    var page = 1;
                }
                var limit = 30;

                // alert(code+vendor_id+date_range+pay_status);

                $("#loading").show();
                $("#incomingData").html('');

                $("html, body").animate({
                    scrollTop: 0
                }, "slow");

                $.ajax({
                    type: "GET",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },
                    
                    url: api_path + "wms/list_transfers",
                    data: {
                        "company_id": localStorage.getItem('company_id'),
                        "warehouse_id": localStorage.getItem('warehouse_id'),
                        // "transfer_period": $("#date_filter").val(),
                        "transfer_type":'internal',
                        // "transfer_by":$("#transfer_by").val(),
                        "limit": limit,
                        "page": 1,

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

                                 



                                    // var delete_btn = "";
                                    // var del_forv = "";
                                    // var undo_del_btn = '';

                                    // if (response['data'][i]['del_status'] == "no" && response[
                                    //         'data'][i]['is_recieved'] == "no") {

                                    //     delete_btn = '<li class="del_this_grn"  id="del_this_grn_' +
                                    //         response['data'][i]['batch_id'] +
                                    //         '"><a>Delete</a></li>';

                                    // }
                                    // else if (response['data'][i]['del_status'] == "yes") {

                                    //     undo_del_btn = '<li class="undo_del"  id="undo_del_grn_' +
                                    //         response['data'][i]['batch_id'] +
                                    //         '"><a>Undo Delete</a></li>';
                                    //     del_forv = '<li class="del_flva"  id="del_flva_' + response[
                                    //             'data'][i]['batch_id'] +
                                    //         '"><a>Delete Forever</a></li>';

                                    // }





                                    strTable += '<tr id="row_' + response['data'][i][
                                        'row_id'] +
                                        '">';
                                    strTable += '<td id="batch_cod_tx_' + response['data'][i][
                                        'row_id'
                                    ] + '">' + response['data'][i]['transfer_code'] + '</td>';

                                    // +response['data'][i]['Vendor']+
                                    strTable += '<td>' + format_a_date(response['data'][i][
                                        'created_at'
                                    ]) + '</td>';
                                    strTable += '<td>' + response['data'][i]['from_warehouse'] +
                                        '</td>';
                                    strTable += '<td>' +
                                        response['data'][i]['to_warehouse'] + '</td>';
                                    // strTable += '<td>' +  response['data'][i]['to_warehouse'] +'</td>';



                                    // strTable += '<td valign="top"><a class="incoming_info btn btn-primary btn-xs"  id="in_' + response['data'][i]['batch_id'] + '"><i  class="fa fa-folder"  data-toggle="tooltip" data-placement="top" title="View Incoming info"></i> View</a>';

                                    strTable += '<td valign="top">';
                                    strTable +=
                                        '<div class="x_content" style="margin: 0px; padding: 0px"><button data-toggle="dropdown" class="btn btn-default dropdown-toggle btn-xs select_batch" id="sel_' +
                                        response['data'][i]['transfer_code'] +
                                        '"  type="button" aria-expanded="true">Action <span class="caret"></span></button>';

                                    strTable +=
                                        '<ul role="menu" class="dropdown-menu  pull-right">    <li class="incoming_info"  id="in_' +
                                        response['data'][i]['row_id'] +
                                        '"><a>TRF Details</a></li> </ul></div>';

                                    // strTable +=
                                    //     '<i  class="fa fa-spinner fa-spin fa-1x fa-fw" aria-hidden="true" style="display: none;" id="loader11_' +
                                    //     response['data'][i]['batch_id'] +
                                    //     '"></i> &nbsp;&nbsp; <!-- <a class="delete_receipt btn btn-danger btn-xs" style="cursor: pointer;" id="inc_' +
                                    //     response['data'][i]['batch_id'] +
                                    //     '"><i  class="fa fa-trash-o" data-toggle="tooltip" data-placement="top" title="Delete Receipt"></i> Delete</a> -->';

                                    strTable += '</tr>';

                                    strTable += '<tr style="display: none;" id="loader_row_' +
                                        response['data'][i]['batch_id'] + '">';
                                    strTable +=
                                        '<td colspan="6"><i class="fa fa-spinner fa-spin fa-fw fa-2x"  id="loading"></i>';
                                    strTable += '</td>';
                                    strTable += '</tr>';



                                    strTable += '<tr id="tr_act_loader_' + response['data'][i][
                                            'batch_id'
                                        ] +
                                        '" style="display: none"><td colspan="5"><i class="fa fa-spinner fa-spin fa-fw fa-1x" style="display: ;" id="filter_loader"></i>';
                                    strTable += '<td></tr>';

                                    k++;

                                });

                            } else {

                                strTable = '<tr><td colspan="6">' + response.msg + '</td></tr>';

                            }

                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    list_grns(page);
                                }
                            });

                            $("#incomingData").html(strTable);
                            $("#incomingData").show();
                            $('#loading').hide();

                        } else if (response.data <= 0) {
                            $('#loading').hide();

                            strTable = '<tr><td colspan="6">' + response.msg + '</td></tr>';

                            $("#incomingData").html(strTable);
                            $("#incomingData").show();

                        } else if (response.status == '400') {
                            var strTable = "";
                            $('#loading').hide();
                            // alert(response.msg);
                            strTable += '<tr>';
                            strTable += '<td colspan="6">' + response.msg + '</td>';
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
                        strTable +=
                            '<td colspan="6"><strong class="text-danger">Connection error</strong></td>';
                        strTable += '</tr>';

                        $("#incomingData").html(strTable);
                        $("#incomingData").show();

                    }

                });
            }
            </script>

<?php

include_once("../gen/_common/footer.php"); // header contents

?>
