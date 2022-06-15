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
                    <h3>Outgoing</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group pull-right top_search">
                        <div class="input-group" style="float: right">

                            <a href="invoice_type_outgoing"><button type="button" class="btn btn-default" id="">Add</button></a>

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

                                    <div class="col-sm-3 col-xs-4">
                                        <label>Code</label>
                                        <input type="text" id="code" class="form-control">
                                    </div>

                                    <div class="col-sm-3 col-xs-4">

                                        <label>Contact</label>

                                        <span id="canccl_vdn">
                                        <input type="text" class="form-control" placeholder="Last Name" id="holds_vendor_name" style="display: none;" disabled="disabled" >
                                        </span>
                                        

                                        <!-- <div id="holds_vendor_name" style="float: left"></div> -->

                                        <div id="holds_vendor_id" style="float: left; display: none"></div>

                                        <input type="text" id="vendor_text" class="form-control" name="fullname" required="" autocomplete="off">


                                        <!-- <input type="text" id="vendor_text" class="form-control"> -->

                                    </div>

                                    <div class="col-sm-3 col-xs-4">
                                        <label>Date Range</label>
                                        <input type="text" class="form-control" id="date_range">
                                    </div>

                                    <div class="col-sm-3 col-xs-4">
                                        <label>Payment Status</label>
                                        <select class="form-control col-md-7 col-xs-12 required" id="pay_status">
                                          <option value="">-- Select --</option>
                                          
                                          <option value="completed">Completed</option>
                                          <option value="uncompleted">Uncompleted</option>

                                        </select>
                                    </div>

                                </div>
                                <br>
                                <br>

                                <div class="form-row">

                                    <div class="col-sm-3 col-xs-4">
                                        <br>
                                        <button type="button" class="btn btn-success" id="filter">Go</button>
                                        <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="filter_loader"></i>
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

                                            <th class="column-title" width="15%">Code</th>
                                            <th class="column-title" width="15%">Date</th>
                                            <th class="column-title">Client</th>
                                            <th class="column-title" style="text-align: right">Batch Total</th>
                                            <th class="column-title">Payment Status</th>
                                            <th class="column-title no-link last" width="15%"><span class="nobr">Actions</span>
                                            </th>
                                            <th class="bulk-actions" colspan="4">
                                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tr id="loading">
                                        <td colspan="6"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i></td>
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

    <div class="modal fade" id="modal_view_incoming" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;"><i class="fa info-circle"></i> <span id="btch_cddd"></span>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </h3>

                </div>
                <div class="modal-body">
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            <b>Client</b>
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
                                    <td colspan="6"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;"></i></td>
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
                    <button type="button" class="btn" style="background-color: #f9aba9; color: white" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->

                </div>
            </div>
        </div>
    </div>







    <div class="modal fade" id="modal_view_payment_history" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;"><i class="fa info-circle"></i> <span id="btch_cddd_ph"></span>
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
                                    <td colspan="3" style="text-align: center; padding-top: 15px"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i></td>
                                </tr>
                                <tbody id="generateData_ph">

                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <!-- <button class="btn btn-primary">Generate</button> -->
                    <!-- <button type="button" class="btn btn-primary">Print</button>
                <button type="button" class="btn btn-primary">Email</button> -->
                    <button type="button" class="btn btn-default" id="">Add Payment</button>
                    <button type="button" class="btn btn-default" id="">Cancel Debt</button>
                    <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;" id="cancel_debt"></i>
                    <!-- <button type="button" class="btn" style="background-color: #f9aba9; color: white" data-dismiss="modal">Close</button> -->
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->

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
            page_warehouse_access();
            var list_id;
            var company_id = localStorage.getItem('company_id')
            list_inv_batch('');

            $(document).on('click', '#filter', function() {
                $('#pagination').twbsPagination('destroy');
                list_inv_batch('');
            });

            $('#incoming_filter').on('click', display_filter);

            $('input#date_range').daterangepicker({
                autoUpdateInput: false
            });

            $('input#date_range').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('YYYY/MM/DD') + ' - ' + picker.endDate.format('YYYY/MM/DD'));

            });

            $(document).on('click', '.outgoing_info_d', function() {
                list_id = $(this).attr('id').replace(/in_/, '');
                fetch_outgoing_info(list_id);

            });

            $(document).on('click', '.delete_incoming', function() {
                var list_id = $(this).attr('id').replace(/inc_/, '');
                delete_incoming_item(list_id);
            });

            $( "#vendor_text" ).autocomplete({

              source: function( request, response ) {
               // Fetch data
               console.log(response);
               $.ajax({

                  url: api_path+"wms/vendors_autocomplete",
                  type: 'post',
                  dataType: "json",
                  data: {
                   term: request.term,
                   company_id:company_id
                  },
                  success: function( data ) {
                   response( data );
                   console.log(data);
                   console.log(company_id);
                   console.log(request.term);
                  }

               });
              },
              minLength: 2,
              select: function (event, ui) {

                console.log(ui.item.id);
                // Set selection
                $("#holds_vendor_name").val(ui.item.label);
                $("#holds_vendor_name").show(ui.item.label);
                $("#holds_vendor_id").html(ui.item.id);
                $("#vendor_text").hide();
                $("#v_name_pencil").show();

                $('#vendor_text').val(ui.item.label+' '+ui.item.id);
                return false;

              }

            });

            $(document).on('click', '#canccl_vdn', function(){
                
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

        })

        function page_warehouse_access() {

            var company_id = localStorage.getItem('company_id');

            var user_id = localStorage.getItem('user_id');
            var module_id = 6;

            $.ajax({

                type: "POST",
                dataType: "json",
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

                                if (response['data'][i]['section_name'] == "Incoming" && response['data'][i]['section_exist'] == "yes") {

                                    $('#incoming').show();
                                    $('#main_display').show();
                                    $('#error_display').hide();

                                } else if (response['data'][i]['section_name'] == "Incoming" && response['data'][i]['section_exist'] == "no") {

                                    $('#main_display').hide();
                                    $('#error_display').show();

                                } else if (response['data'][i]['section_name'] == "Outgoing" && response['data'][i]['section_exist'] == "yes") {

                                    $('#outgoing').show();

                                } else if (response['data'][i]['section_name'] == "Outgoing" && response['data'][i]['section_exist'] == "no") {

                                    $('#outgoing').hide();
                                    // $('#user_page').hide();
                                } else if (response['data'][i]['section_name'] == "Sales/Receipts" && response['data'][i]['section_exist'] == "yes") {

                                    $('#receipts').show();
                                    // $('#user_page').hide();

                                } else if (response['data'][i]['section_name'] == "Sales/Receipts" && response['data'][i]['section_exist'] == "no") {

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

        function fetch_outgoing_info(list_id) {

            var company_id = localStorage.getItem('company_id');

            $('#in_' + list_id).hide();
            $('#loader11_' + list_id).show();

            $.ajax({

                type: "POST",
                dataType: "json",
                cache: false,
                url: api_path + "wms/inv_batch_details",
                data: {
                    "batch_id": list_id,
                    "company_id": company_id
                },

                success: function(response) {

                    console.log(response);

                    $('#loader11_' + list_id).hide();
                    $('#in_' + list_id).show();

                    if (response.status == '200') {

                        $("#modal_view_incoming #ivvv_fff").html(response.data.vendor);
                        $("#modal_view_incoming #ivvv_dtt").html(format_a_date(response.data.outgoing_date));
                        $("#modal_view_incoming #btch_cddd").html(response.data.batch_code);

                        var list_trs = "";
                        var k = 1;
                        $.each(response.data.items, function (i, v) {

                          list_trs += '<tr id="row_'+v+'"><td>'+k+'</td><td>'+v.item_name+'</td><td style="text-align: right">'+format_to_money(v.qty)+'</td><td style="text-align: right">'+format_to_money(v.unit_cost)+'</td><td style="text-align: right">'+format_to_money(v.total_line_cost)+'</td></tr>';

                          k++;

                        });

                        list_trs += '<tr id="row_"><td></td><td></td><td style="text-align: right"></td><td style="text-align: right"><b>TOTAL</b></td><td style="text-align: right"><b>'+format_to_money(response.data.batch_total)+'</b></td></tr>';

                        $("#generateData").html(list_trs);

                        $('#modal_view_incoming').modal('show');
                    }

                },

                error: function(response) {
                    $('#loader11_' + list_id).hide();
                    $('#in_' + list_id).show();
                    alert("Connection Error.");

                }

            });
        }

        function delete_incoming_item(list_id) {

            var company_id = localStorage.getItem('company_id');

            var ans = confirm("Are you sure you want to delete this item?");
            if (!ans) {
                return;
            }

            $('#row_' + list_id).hide();
            $('#loader_row_' + list_id).show();
            $.ajax({
                type: "POST",
                dataType: "json",
                url: api_path + "wms/del_incoming_item",
                data: {
                    "company_id": company_id,
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

        function list_inv_batch(page) {

            var company_id = localStorage.getItem('company_id');
            if (page == "") {
                var page = 1;
            }
            var limit = 25;

            var code = $('#code').val();
            var vendor_id = $('#holds_vendor_id').html();
            var date_range = $('#date_range').val();
            var pay_status = $('#pay_status').val();

            // alert(code+vendor_id+date_range+pay_status);

            $("#loading").show();
            $("#incomingData").html('');

            $.ajax({

                type: "POST",
                dataType: "json",
                url: api_path + "wms/list_inv_batch",
                data: {
                    "company_id": company_id,
                    "page": page,
                    "limit": limit,
                    "code" : code,
                    "date_range" : date_range,
                    "payment_status" : pay_status,
                    "vendor" : vendor_id
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

                                if(response['data'][i]['payment_status'] == "completed"){
                                    var ps_cl = '<span class="label label-success">Completed</span>';
                                }else if(response['data'][i]['payment_status'] == "uncompleted"){
                                    var ps_cl = '<span class="label label-warning">Uncompleted</span>';
                                }

                                strTable += '<tr id="row_' + response['data'][i]['batch_id'] + '">';
                                strTable += '<td>' + response['data'][i]['batch_code'] + '</td>';

                                // +response['data'][i]['Vendor']+
                                strTable += '<td>' + format_a_date(response['data'][i]['outgoing_date']) + '</td>';
                                strTable += '<td>' + response['data'][i]['contact'] + '</td>';
                                strTable += '<td style="text-align: right">' + format_to_money(response['data'][i]['batch_total']) + '</td>';
                                strTable += '<td>' + ps_cl + '</td>';

                                // strTable += '<td>Pending</td>';

                                strTable += '<td valign="top"><a class="outgoing_info_d btn btn-primary btn-xs"  id="in_' + response['data'][i]['batch_id'] + '"><i  class="fa fa-folder"  data-toggle="tooltip" data-placement="top" title="View Incoming info"></i> View</a>';

                                strTable += '<!-- <i  class="fa fa-spinner fa-spin fa-1x fa-fw" aria-hidden="true" style="display: none;" id="loader11_' + response['data'][i]['batch_id'] + '"></i> &nbsp;&nbsp; <a class="delete_receipt btn btn-danger btn-xs" style="cursor: pointer;" id="inc_' + response['data'][i]['batch_id'] + '"><i  class="fa fa-trash-o" data-toggle="tooltip" data-placement="top" title="Delete Receipt"></i> Delete</a> -->';

                                strTable += '</tr>';

                                strTable += '<tr style="display: none;" id="loader_row_' + response['data'][i]['batch_id'] + '">';
                                strTable += '<td colspan="6"><i class="fa fa-spinner fa-spin fa-fw fa-2x"  id="loading"></i>';
                                strTable += '</td>';
                                strTable += '</tr>';

                                k++;

                            });

                        } else {

                            strTable = '<tr><td colspan="6">' + response.msg + '</td></tr>';

                        }

                        $('#pagination').twbsPagination({
                            totalPages: Math.ceil(response.total_rows / limit),
                            visiblePages: 10,
                            onPageClick: function(event, page) {
                                list_inv_batch(page);
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
                    strTable += '<td colspan="6"><strong class="text-danger">Connection error</strong></td>';
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
