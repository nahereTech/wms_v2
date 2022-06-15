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
                <h3>Create Invoice</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group" style="float: right">
                        <a href="invoicesandreceipts">
                            <button type="button" class="btn btn-default" id="">Back</button>
                        </a>
                        <!-- <a href="add_outgoing_items"><button type="button" class="btn btn-success">Add</button></a> -->

                        <!-- <a href="downward_adjustment?a=remove"><button type="button" class="btn btn-primary">Adjustment</button></a> -->


                    </div>
                </div>
            </div>
        </div>

        <!-- <div id="filter_display" style="display: none;">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <br />
                    

                    <div class="form-row">
                      
                      <div class="col-sm-3 col-xs-4">
                        <label>Item Name</label>
                        <input type="text" id="item_text" class="form-control">
                      </div>


                      <div class="col-sm-3 col-xs-4">
                        <label>Recipient</label>
                         <input type="text" id="vendor_text" class="form-control">
                         <input type="hidden" id="vendor_id" class="form-control">
                      </div>

                      <div class="col-sm-3 col-xs-4">
                        <label>Date Range</label>
                        <input type="text" class="form-control" id="date_range">
                      </div>

                      <div class="col-sm-3 col-xs-4">
                        <label>Item Code</label>
                        <input type="text" class="form-control" id="item_code">
                      </div>

                    </div>
                    <br><br>

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
          </div> -->

        <div class="clearfix"></div>







        <div class="row">

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <div><label for="fullname">Client * :</label></div>

                        <div id="holds_vendor_name" style="float: left"></div>

                        <div id="v_name_pencil" style="float: left; display: none">
                            &nbsp;<i id="" class="fa fa-pencil fa-1x edit_pencil"
                                style="font-style: italic; color: #add8e6; cursor: pointer;"></i>
                        </div>

                        <div id="holds_vendor_id" style="float: left; display: none"></div>

                        <!-- <input type="text" id="vendor_text" class="form-control" name="fullname" required=""
                            autocomplete="nope" placeholder="Search Client (by name, phone or id)"> -->


                         <datalist id="vendor_text"></datalist>

                            <input list="vendor_text" class="form-control required1" id="select_item_status" autocomplete="off">
                        <u id="create_new_client_link" style="cursor: pointer">or Create New Client</u>

                    </div>


                    <div class="x_content">
                        <label for="fullname">Date * :</label>
                        <input type="date" id="date_receive" class="form-control not_empty" name="fullname" required=""
                            autocomplete="nope">
                    </div>

                    <div class="x_content">
                        <label for="fullname">Expected Delivery Date * :</label>
                        <input type="date" id="expected_delivery" class="form-control not_empty" name="fullname"
                            required="" autocomplete="off">
                    </div>


                    <div class="x_content">
                        <label for="warehouse">Warehouse * :</label>
                        <select class="form-control col-md-7 col-xs-12 required not_empty" id="warehouse">
                            <option value="">-- Select --</option>

                        </select>
                    </div>

                    <div class="x_content">
                        <label for="fullname">Invoice comment* :</label>
                        <textarea name="comments" rows="5" cols="10" id="comments" class="form-control not_empty"
                            name="fullname" required="" autocomplete="off"></textarea>
                    </div>

                </div>
            </div>

            <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Stripped table <small>Stripped table subtitle</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> -->
        </div>










        <div class="row">

            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <br>

                    <div class="x_content">



                        <div class="table-responsive">

                            <div class="title_right">
                                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                    <div class="input-group" style="float: right">

                                        <!-- <button type="button" class="btn btn-primary" id="gen_invoice" data-toggle="modal" data-target="#modal_invoice" disabled>Generate Receipt</button> -->


                                    </div>
                                </div>
                            </div>

                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <!-- <th class="column-title"><input type="checkbox" name="checkbox"></th> -->
                                        <th class="column-title" style="width: 2%"></th>
                                        <th class="column-title" style="width: 2%">#</th>
                                        <th class="column-title" style="width: 38%">Item</th>
                                        <th class="column-title" style="width: 20%">Qty</th>
                                        <th class="column-title " style="width: 20%">Unit Cost</th>
                                        <!-- <th class="column-title">Description</th> -->
                                        <th class="column-title " style="width: 20%">Total</th>
                                        <!-- <th class="column-title no-link last"><span class="nobr">Actions</span> 
                            </th>-->
                                        <th class="bulk-actions" colspan="8">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span
                                                    class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <!-- <tr id="loading">
                            <td colspan="5"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;" ></i></td>
                          </tr> -->

                                <tbody id="outgoingData">

                                    <!-- <tr class="itm_tr" id="itm_tr_1">

                            <td>1</td> 
                            <td>

                              <div id="holds_item_name_1" style="float: left"></div>

                              <div id="i_name_pencil_1" style="float: left; display: none">
                                &nbsp;<i id="" class="fa fa-pencil fa-1x item_edit_pencil"  style="font-style: italic; color: #add8e6; cursor: pointer;"></i>
                              </div>

                              <div id="holds_itms_id_1" style="float: left; display: none"></div>

                              <input type="text" class="untcst form-control not_empty item_srch_box" id="item_srch_box_1" placeholder="Product Name" ><br><input type="text" class="untcst form-control not_empty" placeholder="Product Description" >
                              <br>

                            </td> 
                            <td><input type="text" class="untcst form-control not_empty" onkeypress="return isNumber(event)" id="unit_cost_entrd_1"  placeholder="Quantity" > <br> <input type="text" class="untcst form-control not_empty expiry_dd" onkeypress="return isNumber(event)" id="expiry_d_1"  placeholder="Product Expiry" ></td> 
                            <td><input type="text" class="untcst form-control not_empty" onkeypress="return isNumber(event)" id="unit_cost_entrd_1"  placeholder="Unit Cost"></td>  
                            <td id="cal_lin_total_1" class="a_line_total" style="text-align: right; padding-right: 20px">0.00</td> 
                          </tr> -->

                                </tbody>

                                <!-- <tr id="">
                          <td colspan="6"><i class="fa fa-plus-square fa-2x add_new_row" style="cursor: pointer" ></i></td>
                        </tr> -->

                                <tr id="">
                                    <td colspan="6"><i class="fa fa-plus-square fa-2x add_new_row"
                                            style="cursor: pointer"></i> Add Item &nbsp;&nbsp;or &nbsp;&nbsp; <i
                                            class="fa fa-plus-square fa-2x" id="add_new_vat_row"
                                            style="cursor: pointer"></i> <span class="">Add VAT Line</span>&nbsp;&nbsp;|
                                        &nbsp;&nbsp; <i class="fa fa-plus-square fa-2x " id="add_new_dis_row"
                                            style="cursor: pointer"></i> <span class=" ">Add Discount</span>
                                        &nbsp;&nbsp;| &nbsp;&nbsp;
                                        <span class="mark PO">
                                            <input type="checkbox" style="transform: scale(5);transform: scale(1.7);margin: 10px;position: relative;
                                            top: -3px;">Mark as Critical
                                            <span>
                                    </td>
                                </tr>

                                <tr id="total_total_total" class="">
                                    <td colspan="6" style="text-align: right">
                                        <h1 id="sub_total">0.00</h1>
                                    </td>
                                </tr>

                                <!-- <tr id="">
                          <td colspan="5" style="text-align: right">
                            Amount Received
                          </td>
                          <td colspan="1" style="text-align: right">
                            <input type="text" class="form-control not_empty allownumericwithdecimal" id="amount_paid" placeholder="Amount" style="text-align: right" >
                          </td>
                        </tr>

                        <tr id="">
                          <td colspan="5" style="text-align: right">
                            Balance to Pay
                          </td>
                          <td colspan="1" style="text-align: right">
                            <input type="text" class="form-control allownumericwithdecimal" id="balance_to_pay" placeholder="Balance" style="text-align: right" disabled="disabled" >
                          </td>
                        </tr> -->





                            </table>


                            <!-- <div class="container" style="text-align: right">
                        <h2 id="sub_total">0.00</h2>
                      </div> -->

                            <div class="container">
                                <button type="submit" class="btn btn-success" id="create_invoice">Create</button>
                                <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;"
                                    id="rcv_grn_loader"></i>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->









<div class="modal fade" id="show_box_to_create_client" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;">Create New Client
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">


                <!-- <div id="container4" > -->

                <span id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"
                            for="add_vendor_name">Name<span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="add_vendor_name"
                                class="form-control col-md-7 col-xs-12 add_vendor_required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"
                            for="add_vendor_email">Email<span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="add_vendor_email"
                                class="form-control col-md-7 col-xs-12 add_vendor_required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"
                            for="add_vendor_phone">Phone<span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="number" id="add_vendor_phone"
                                class="form-control col-md-7 col-xs-12 add_vendor_required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"
                            for="add_vendor_address">Address<span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea cols="3" class="form-control col-md-7 col-xs-12 add_vendor_required"
                                id="add_vendor_address">

                          </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_vendor_comment">Comment
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea cols="3" class="form-control col-md-7 col-xs-12" id="add_vendor_comment">

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
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <!-- <button class="btn btn-primary" type="button">Cancel</button>
                          <button class="btn btn-primary" type="reset">Reset</button> -->
                            <button type="button" class="btn btn-success" id="add_ven">Add</button>
                            <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="ven_loader"></i>
                        </div>
                    </div>


                </span>



                <!-- </div> -->

            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                 <button type="button" class="btn btn-primary">Save changes</button> 
              </div> -->
        </div>
    </div>
</div>











<div class="modal fade" id="modal_view_outgoing" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;">Item Info
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">


                <div id="container4">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p><strong>Item Name:</strong></p>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p id="item_name"></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p><strong>Vendor Name:</strong></p>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p id="vendor_name"></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p><strong>Date Recieved:</strong></p>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p id="date_recieved"></p>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p><strong>Quantity:</strong></p>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p id="quantity"></p>
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
<div class="modal fade" id="modal_succ_create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                <h4>Created Successfully!</h4>
            </div>
            <!-- <div class="modal-footer"> -->
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            <!-- </div> -->
        </div>
    </div>
</div>




<!-- modal -->
<div class="modal fade" id="modal_error_msg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;">Error
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">
                <h4 id="ther_msg"></h4>
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

    // does_user_have_access_to_page();
    load_sections_for_items();

    // page_warehouse_access();
    fetch_vendors()

     function fetch_vendors(){

    $.ajax({

      type: "POST",
      dataType: "json",
      cache: false,
       headers: {
                    'Authorization':localStorage.getItem('token'),
                },
      url: api_path+"wms/list_vendors",
      data: {

        "company_id" : localStorage.getItem('company_id'), 
        "user_id" : localStorage.getItem('user_id'),
        "limit" : 1000000,
        "page" : 1

      },

      success: function(response) {
        console.log("vvenlo", response.data);
        strTable = '<option value="">-- Select --</option>';
        if (response.status == '200') {

            if (response.data.length > 0) {
        console.log({response});


                $.each(response.data, function(i, v) {
                    console.log('venlo', v)
                    strTable +=  `<option name='${v.vendor_name}' value='${v.vendor_name}' data-value=${v.vendor_id}></option>`;;
                });

                $("#vendor_text").html(strTable);

            } else {

            }

        }else{

        }

      },

      error: function(response){

        $('#add').show();
        $('#item_loader').hide();
        $('#error').html("Connection Error.");
           }

    });
}


    function load_sections_for_items() {

        var company_id = localStorage.getItem('company_id');


        var list_whs = "";
        $.ajax({

            type: "GET",
                headers: {'Authorization':localStorage.getItem('token') },

            dataType: "json",
            cache: false,
            url: api_path + "wms/item_list",
            data: {
                "company_id": company_id,
                // "warehouse_id": localStorage.getItem("warehouse_id"),
                // "limit": 1000,
                // "page": 1
            },

            success: function(response) {

                var k = 1;
                console.log(response.data)
                $(response.data).each(function(i, v) {
                    list_whs +=
                        // `<option name='${v.item_name}' data='${v.barcode}' value='${v.item_name}' data-value=${v.id}>${v.barcode ? `SKU:${v.barcode}`: ''}</option>`;
                        `<option name='${v.item_name}  -  (${v.barcode ? `SKU:${v.barcode}`: ''})' data='${v.barcode}' value='${v.item_name}  -  (${v.barcode ? `SKU:${v.barcode}`: ''})' data-value=${v.id}></option>`;

                    // strg += `<option value=${v.id}>${v.section_name}</option>`;
                    // strg += `<option name=${v.section_name} value=${v.section_name} data-value=${v.id}></option>`;

                })


                $(`#options_items`).append(list_whs);

            },
            error: function() {
                console.log(response);
            }

        });

    }

    var list_id;
    var company_id = localStorage.getItem('company_id');
    localStorage.setItem('checkbox', 'no');

    var wordLen = 10,
        len; // Maximum word length
    $('#comments').keydown(function(event) {
        len = $('#comments').val().split(/[\s]+/);
        if (len.length > wordLen) {
            if (event.keyCode == 46 || event.keyCode == 8) { // Allow backspace and delete buttons
            } else if (event.keyCode < 48 || event.keyCode > 57) { //all other buttons
                event.preventDefault();
            }
        }
        console.log(len.length + " words are typed out of an available " + wordLen);
        wordsLeft = (wordLen) - len.length;
        // $('.words-left').html(wordsLeft+ ' words left');
        // if(wordsLeft == 0) {
        // 	$('.words-left').css({
        // 		'background':'red'
        // 	}).prepend('<i class="fa fa-exclamation-triangle"></i>');
        // }
    });


    $('input[type="checkbox"]').click(function() {
        if ($(this).prop("checked") == true) {
            console.log("Checkbox is checked.");
            localStorage.setItem('checkbox', 'yes');
        } else if ($(this).prop("checked") == false) {
            console.log("Checkbox is unchecked.");
            localStorage.setItem('checkbox', 'no');
        }
    });


    // $('input#invoice_date').datepicker({
    //   dateFormat: "yy-mm-dd"
    // });

    // $(document).on('click', '#invoice_date', function(){
    //     alert("ddd");
    //     $('#invoice_date').datepicker({
    //       dateFormat: "yy-mm-dd"
    //     });
    // });

    // $("#invoice_date").datepicker({
    //     beforeShow: function(input, inst) {
    //       $(document).off("focusin.bs.modal");
    //     },
    //     onClose:function(){
    //       $(document).on("focusin.bs.modal");
    //     },
    //     changeMonth: true,
    //     changeYear: true
    // });

    // $(document).on('click', '.item_edit_pencil', function(){

    // });

    $(document).on("keypress keyup blur", ".allownumericwithdecimal", function(event) {

        //this.value = this.value.replace(/[^0-9\.]/g,'');
        $(this).val($(this).val().replace(/[^0-9\.]/g, ''));
        if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event
                .which > 57)) {
            event.preventDefault();
        }

    });

    $(document).on('keyup', '.fig', function(event) {
        if (event.which >= 37 && event.which <= 40) {
            event.preventDefault();
        }

        $(this).val(function(index, value) {
            return value
                .replace(/\D/g, "")
                .replace(/([0-9])([0-9]{2})$/, '$1.$2')
                .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
        });
    });



    // $(".allownumericwithoutdecimal").on("keypress keyup blur", function(event) {
    //     $(this).val($(this).val().replace(/[^\d].+/, ""));
    //     if ((event.which < 48 || event.which > 57)) {
    //         event.preventDefault();
    //     }
    // });


    if ($(".itm_tr").length == 0) {
        // var last_id = 0;
        add_new_row();
    }

    $("#v_name_pencil").on('click', present_vtxt_for_edit);
    $(".add_new_row").on('click', add_new_row);

    $('input#date_received').datepicker({
        dateFormat: "yy-mm-dd"
    });

    //expiry_dd
    // $('input.expiry_dd').datepicker({
    //   dateFormat: "yy-mm-dd"
    // });

    $("#vendor_text").autocomplete({

        source: function(request, response) {
            // Fetch data
            alert('hee')
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
            $("#holds_vendor_name").html(ui.item.label);
            $("#holds_vendor_id").html(ui.item.id);
            $("#vendor_text").hide();
            $("#v_name_pencil").show();
            $("#create_new_client_link").hide();

            $('#vendor_text').val(ui.item.label + ' ' + ui.item.id);
            return false;

        }

    });



    // $( ".item_srch_box" ).autocomplete({

    //   source: function( request, response ) {
    //    // Fetch data
    //    $.ajax({

    //       url: api_path+"wms/items_autocomplete",
    //       type: 'post',
    //       dataType: "json",
    //       data: {
    //        term: request.term,
    //        company_id:localStorage.getItem('company_id')
    //       },
    //       success: function( data ) {
    //        response( data );
    //        console.log(data);
    //       }

    //    });
    //   },
    //   minLength: 2,
    //   select: function (event, ui) {

    //     console.log(ui.item.id);
    //     // Set selection
    //     $("#holds_item_name_1").html(ui.item.label);
    //     $("#holds_itms_id_1").html(ui.item.id);
    //     $("#item_srch_box_1").hide();
    //     $("#i_name_pencil_1").show();
    //     // $('#holds_item_name_1').val(ui.item.label+' '+ui.item.id);

    //     return false;

    //   }

    // });

    get_warehouse();
    //load_warehouse();


    $('#invoice_date').daterangepicker({
        drops: 'up',
        singleDatePicker: true,
        singleClasses: "picker_4",
        locale: {
            format: 'YYYY-MM-DD'
        }
    }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
    });



    $(document).on('click', '#create_invoice', function() {
        create_invoice();
    });

    $(document).on('click', '#filter', function() {
        $('#pagination').twbsPagination('destroy');
        list_of_outgoing_items('');
    });

    $('#outgoing_filter').on('click', display_filter);

    $('input#date_range').daterangepicker({
        autoUpdateInput: false
    });

    $('input#date_range').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('YYYY/MM/DD') + ' - ' + picker.endDate.format(
            'YYYY/MM/DD'));

    });

    $(document).on('click', '.outgoing_info', function() {
        list_id = $(this).attr('id').replace(/ou_/, '');
        fetch_outgoing_info(list_id);

    });

    $(document).on('keyup', '#amount_paid', function() {

        var amount_paid_txt = $(this).val();
        var amount_paid = parseFloat($(this).val());
        var sub_total = parseFloat($("#sub_total").html());
        var balance = sub_total - amount_paid;
        if (balance < 0) {

            var newStr = amount_paid_txt.slice(0, -1);
            $("#amount_paid").val(newStr);
            alert("Amount Paid cannot be more than total cost of items");

        } else {

            $("#balance_to_pay").val(balance);

        }



    });

    //item_edit_pencil
    $(document).on('click', '.item_edit_pencil', function() {

        var id = $(this).attr('id').replace(/item_edit_pencil_/, '');

        $("#holds_item_name_" + id).html('');
        $("#holds_itms_id_" + id).html('');
        $("#holds_itms_unit_" + id).html('');
        $("#item_srch_box_" + id).show();
        $("#item_srch_box_" + id).val('');
        $("#i_name_pencil_" + id).hide();

    });


    $(document).on('keyup', '.vat_figures', function() {

        var sum_line_totals = 0;
        $(".a_line_total").each(function() {
            sum_line_totals = sum_line_totals + parseFloat($(this).html());
        });

        console.log(Number($("#sub_total").html()).toFixed(2) + 0.00)

        var add_sub_total = 0.00;
        var total_discount = 0.00;

        var total = Number(parseFloat($("#sub_total").html()).toFixed(2));
        if ($("#for_discount").html()) {
            var dis = $("#for_discount").html().split(':')[1];
            var dis_final = Number(parseFloat(dis).toFixed(2));
        }





        // if($("#for_discount").length == 0) {
        //    total = Number(parseFloat($("#for_discount").html()).toFixed(2))
        // }else{
        //    total = Number(parseFloat($("#sub_total").html()).toFixed(2))
        // }

        $(".vat_figures").each(function() {

            if ($(this).val() == "") {
                var the_vat_fg = 0.00;
            } else {
                var the_vat_fg = Number(parseFloat($(this).val()).toFixed(2));
                // console.log(typeof(Number.parseFloat($(this).val()).toFixed(2)))
                console.log(Number(parseFloat($("#sub_total").html()).toFixed(2)));
                // console.log(parseFloat($("#sub_total").html().toFixed(2)));

                add_sub_total = Number(parseFloat(the_vat_fg)) + add_sub_total

                console.log(Number(parseFloat(the_vat_fg)));
                console.log(add_sub_total);

                console.log(add_sub_total + Number(parseFloat(the_vat_fg)))
            }

            console.log(add_sub_total + Number(parseFloat(the_vat_fg)))

            console.log(add_sub_total)
            console.log(Number(parseFloat($("#sub_total").html()).toFixed(2)));
            console.log(total + add_sub_total)
            if (dis_final) {
                total_discount = dis_final + add_sub_total
            } else {
                total_discount = total + add_sub_total
            }

        });

        if (dis_final) {
            if ($("#for_vat").length == 0) {
                $(`<h1 id='for_vat'>Total After VAT: ${total_discount}</h1>`).insertAfter(
                    "#for_discount");
            } else {
                $("#for_vat").html(`Total After VAT: ${total_discount}`)
            }

        } else {
            if ($("#for_vat").length == 0) {
                $(`<h1 id='for_vat'>Total After VAT: ${total_discount}</h1>`).insertAfter("#sub_total");
            } else {
                $("#for_vat").html(`Total After VAT: ${total_discount}`)
            }

        }



        // if($("#for_discount").length > 0 && $("#for_vat").length > 0) {
        //     // console.log(total_discount);
        //     // var dis = $("#for_vat").html().split(':')[1];
        //     // console.log(dis)

        //     // // var chk = dis.replace(/-/, '')
        //     // var final_dis = (Number(parseFloat((dis)).toFixed(2)))
        //     // if($("#for_total").length == 0) {
        //     //     $( `<h1 id='for_total'>Grand Total: ${(total_discount) + (-final_dis)}</h1>` ).insertAfter( "#for_discount" );
        //     // }else{
        //     //     $("#for_total").html(`Grand Total: ${(total_discount) + (-final_dis)}`)
        //     // }

        //     var dis = $("#for_discount").html().split(':')[1];
        //     var vat = $("#for_vat").html().split(':')[1];

        //     console.log(dis)

        //     var chk = dis.replace(/-/, '')
        //     var final_dis = (Number(parseFloat((chk)).toFixed(2)))
        //     var final_vat = (Number(parseFloat((vat)).toFixed(2)))
        //     console.log(final_vat)
        //     console.log(final_dis)
        //     console.log(`${(final_vat) - (-final_dis)}`)

        //     if($("#for_total").length == 0) {
        //         $( `<h1 id='for_total'>Grand Total: ${(final_vat) + (-final_dis)}</h1>` ).insertAfter( "#for_discount" );
        //     }else{
        //         $("#for_total").html(`Grand Total: ${(final_vat) + (-final_dis)}`)
        //     }

        // }

    });

    $(document).on('keyup', '.dis_figures', function() {

        var sum_line_totals = 0;
        $(".a_line_total").each(function() {
            sum_line_totals = sum_line_totals + parseFloat($(this).html());
        });

        console.log(Number($("#sub_total").html()).toFixed(2) + 0.00)

        var add_sub_total = 0.00;
        var total_discount = 0.00;

        if ($("#for_vat").html()) {
            var dis = $("#for_vat").html().split(':')[1];
            var dis_final = Number(parseFloat(dis).toFixed(2));
        }
        $(".dis_figures").each(function() {

            if ($(this).val() == "") {
                var the_vat_fg = 0.00;
            } else {
                var the_vat_fg = Number(parseFloat($(this).val()).toFixed(2));
                // console.log(typeof(Number.parseFloat($(this).val()).toFixed(2)))
                console.log(Number(parseFloat($("#sub_total").html()).toFixed(2)));
                // console.log(parseFloat($("#sub_total").html().toFixed(2)));

                add_sub_total = Number(parseFloat(the_vat_fg)) + add_sub_total

                console.log(Number(parseFloat(the_vat_fg)));
                console.log(add_sub_total);

                console.log(add_sub_total + Number(parseFloat(the_vat_fg)))
            }

            console.log(add_sub_total + Number(parseFloat(the_vat_fg)))

            console.log(add_sub_total)
            console.log(Number(parseFloat($("#sub_total").html()).toFixed(2)));
            console.log(Number(parseFloat($("#sub_total").html()).toFixed(2)) - add_sub_total)
            if (dis_final) {
                total_discount = dis_final - add_sub_total
            } else {
                // total_discount = total + add_sub_total
                total_discount = Number(parseFloat($("#sub_total").html()).toFixed(2)) -
                    add_sub_total

            }

        });

        if (dis_final) {
            if ($("#for_discount").length == 0) {
                $(`<h1 id='for_discount'>Total After Discount: ${total_discount}</h1>`).insertAfter(
                    "#for_vat");
            } else {
                $("#for_discount").html(`Total After Discount: ${total_discount}`)
            }

        } else {
            if ($("#for_discount").length == 0) {
                $(`<h1 id='for_discount'>Total After Discount: ${total_discount}</h1>`).insertAfter(
                    "#sub_total");
            } else {
                $("#for_discount").html(`Total After Discount: ${total_discount}`)
            }

        }





        // if($("#for_discount").length > 0 && $("#for_vat").length > 0) {
        //             console.log(total_discount);
        //             var dis = $("#for_discount").html().split(':')[1];
        //             var vat = $("#for_vat").html().split(':')[1];

        //             console.log(dis)

        //             var minus;

        //             if(dis.includes('-')){
        //                 minus= '-'
        //             }

        //             var chk = dis.replace(/-/, '')
        //             var final_dis = (Number(parseFloat((chk)).toFixed(2)))
        //             var final_vat = (Number(parseFloat((vat)).toFixed(2)))
        //             console.log(final_vat)
        //             console.log(final_dis)
        //             console.log(`${(final_vat) - (-final_dis)}`)

        //             console.log(minus ? -final_dis :final_dis)

        //             if($("#for_total").length == 0) {
        //                 $( `<h1 id='for_total'>Grand Total: ${(final_vat) + (minus ? -final_dis :final_dis)}</h1>` ).insertAfter( "#for_vat" );
        //             }else{
        //                 $("#for_total").html(`Grand Total: ${(final_vat) + (minus ? -final_dis :final_dis)}`)
        //             }

        // }

    });

    $(document).on('keyup', '.vat_figures', function() {

        var sum_line_totals = 0;
        $(".a_line_total").each(function() {
            sum_line_totals = sum_line_totals + parseFloat($(this).html());
        });

        var add_sub_total = 0.00;
        var total_discount = 0.00;

        var total = Number(parseFloat($("#sub_total").html()).toFixed(2));
        if ($("#for_discount").html()) {
            var dis = $("#for_discount").html().split(':')[1];
            var dis_final = Number(parseFloat(dis).toFixed(2));
        }


        $(".vat_figures").each(function() {

            if ($(this).val() == "") {
                var the_vat_fg = 0.00;
            } else {
                var the_vat_fg = Number(parseFloat($(this).val()).toFixed(2));
                // console.log(typeof(Number.parseFloat($(this).val()).toFixed(2)))
                console.log(Number(parseFloat($("#sub_total").html()).toFixed(2)));
                // console.log(parseFloat($("#sub_total").html().toFixed(2)));

                add_sub_total = Number(parseFloat(the_vat_fg)) + add_sub_total

                console.log(Number(parseFloat(the_vat_fg)));
                console.log(add_sub_total);

                console.log(add_sub_total + Number(parseFloat(the_vat_fg)))
            }

            console.log(add_sub_total + Number(parseFloat(the_vat_fg)))

            console.log(add_sub_total)
            console.log(Number(parseFloat($("#sub_total").html()).toFixed(2)));
            console.log(total + add_sub_total)
            if (dis_final) {
                total_discount = dis_final + add_sub_total
            } else {
                total_discount = total + add_sub_total
            }

        });

        if (dis_final) {
            if ($("#for_vat").length == 0) {
                $(`<h1 id='for_vat'>Total After VAT: ${total_discount}</h1>`).insertAfter(
                    "#for_discount");
            } else {
                $("#for_vat").html(`Total After VAT: ${total_discount}`)
            }

        } else {
            if ($("#for_vat").length == 0) {
                $(`<h1 id='for_vat'>Total After VAT: ${total_discount}</h1>`).insertAfter("#sub_total");
            } else {
                $("#for_vat").html(`Total After VAT: ${total_discount}`)
            }

        }


    });

    // $(document).on('keyup', '.dis_figures', function() {

    // var sum_line_totals = 0;
    // $(".a_line_total").each(function() {
    // sum_line_totals = sum_line_totals + parseFloat($(this).html());
    // });

    // console.log(Number($("#sub_total").html()).toFixed(2) + 0.00)

    // var add_sub_total = 0.00;
    // var total_discount = 0.00;

    // if($("#for_vat").html()){
    //     var dis =  $("#for_vat").html().split(':')[1];
    //     var dis_final = Number(parseFloat(dis).toFixed(2)) ;
    // }
    // $(".dis_figures").each(function() {

    // if ($(this).val() == "") {
    // var the_vat_fg = 0.00;
    // } else {
    // var the_vat_fg = Number(parseFloat($(this).val()).toFixed(2));
    // // console.log(typeof(Number.parseFloat($(this).val()).toFixed(2)))
    // console.log(Number(parseFloat($("#sub_total").html()).toFixed(2)));
    // // console.log(parseFloat($("#sub_total").html().toFixed(2)));

    // add_sub_total = Number(parseFloat(the_vat_fg)) + add_sub_total

    // console.log(Number(parseFloat(the_vat_fg)));
    // console.log(add_sub_total);

    // console.log(add_sub_total + Number(parseFloat(the_vat_fg)))
    // }

    // console.log(add_sub_total + Number(parseFloat(the_vat_fg)))

    // console.log(add_sub_total)
    // console.log(Number(parseFloat($("#sub_total").html()).toFixed(2)));
    // console.log(Number(parseFloat($("#sub_total").html()).toFixed(2)) - add_sub_total)
    // if(dis_final){
    //     total_discount = dis_final - add_sub_total
    //     }else{
    //         // total_discount = total + add_sub_total
    // total_discount = Number(parseFloat($("#sub_total").html()).toFixed(2)) - add_sub_total

    //     }

    // });

    // if(dis_final){
    // if($("#for_discount").length == 0) {
    // $( `<h1 id='for_discount'>Total After Discount: ${total_discount}</h1>` ).insertAfter( "#for_vat" );
    // }else{
    // $("#for_discount").html(`Total After Discount: ${total_discount}`)
    // }

    // }else{
    // if($("#for_discount").length == 0) {
    // $( `<h1 id='for_discount'>Total After Discount: ${total_discount}</h1>` ).insertAfter( "#sub_total" );
    // }else{
    // $("#for_discount").html(`Total After Discount: ${total_discount}`)
    // }

    // }





    // if($("#for_discount").length > 0 && $("#for_vat").length > 0) {
    //             console.log(total_discount);
    //             var dis = $("#for_discount").html().split(':')[1];
    //             var vat = $("#for_vat").html().split(':')[1];

    //             console.log(dis)

    //             var minus;

    //             if(dis.includes('-')){
    //                 minus= '-'
    //             }

    //             var chk = dis.replace(/-/, '')
    //             var final_dis = (Number(parseFloat((chk)).toFixed(2)))
    //             var final_vat = (Number(parseFloat((vat)).toFixed(2)))
    //             console.log(final_vat)
    //             console.log(final_dis)
    //             console.log(`${(final_vat) - (-final_dis)}`)

    //             console.log(minus ? -final_dis :final_dis)

    //             if($("#for_total").length == 0) {
    //                 $( `<h1 id='for_total'>Grand Total: ${(final_vat) + (minus ? -final_dis :final_dis)}</h1>` ).insertAfter( "#for_vat" );
    //             }else{
    //                 $("#for_total").html(`Grand Total: ${(final_vat) + (minus ? -final_dis :final_dis)}`)
    //             }

    // }

});




$(document).on('click', '#add_new_vat_row', function() {
    var rnd_id = Math.floor(Math.random() * 14564300451);
    // alert(rnd_id);
    $("#total_total_total").before('<tr id="vat_line_tr_' + rnd_id +
        '" class="vat_line_tr"><td colspan="1" style="text-align: right">      <i class="fa fa-times-circle fa-2x remove_vat_item" style="display: ; color: #f4909a; cursor: pointer" id="vat_line_fig_' +
        rnd_id +
        '"></i>       </td>    <td colspan="3" style="text-align: right"></td>            <td colspan="1" style="text-align: right"><input type="text" class="form-control not_empty" id="vat_name_' +
        rnd_id +
        '" placeholder="Line Name" style="text-align: right" ></td>              <td colspan="1" style="text-align: right"><input type="text" class="form-control not_empty  vat_figures" id="vat_amount_' +
        rnd_id + '" placeholder="Amount" style="text-align: right" ></td>      </tr>');

});

$(document).on('click', '#add_new_dis_row', function() {
    var rnd_id = Math.floor(Math.random() * 14564300451);
    // alert(rnd_id);
    $("#total_total_total").before('<tr id="dis_line_tr_' + rnd_id +
        '" class="dis_line_tr"><td colspan="1" style="text-align: right">      <i class="fa fa-times-circle fa-2x remove_dis_item" style="display: ; color: #f4909a; cursor: pointer" id="dis_line_fig_' +
        rnd_id +
        '"></i>       </td>    <td colspan="3" style="text-align: right"></td>            <td colspan="1" style="text-align: right"><input type="text" class="form-control not_empty" id="dis_name_' +
        rnd_id +
        '" placeholder="Line Name" style="text-align: right" ></td>              <td colspan="1" style="text-align: right"><input type="text" class="form-control not_empty  dis_figures" id="dis_amount_' +
        rnd_id + '" placeholder="Amount to be discounted" style="text-align: right" ></td>      </tr>');

});



$(document).on('click', '.delete_outgoing', function() {
    var list_id = $(this).attr('id').replace(/out_/, '');
    delete_outgoing_item(list_id);
});

$(document).on('click', '.remove_item', function() {

    var list_id = $(this).attr('id').replace(/remove_item_/, '');
    var to_be_minused = parseFloat($("#cal_lin_total_" + list_id).html().split(',').join(''));
    $("#itm_tr_" + list_id).remove();
    $(".srl").each(function() {
        var current_sr = $(this).html();
        if (current_sr > list_id) {
            var new_sr = current_sr - 1;
            $(this).html(new_sr);
        }
    });

    var sub_total = $("#sub_total").html();
    var new_sub_total = parseFloat(sub_total) - to_be_minused;

    $("#sub_total").html(new_sub_total);

});

// $(document).on('click', '.remove_vat_item', function() {

//     var list_id = $(this).attr('id').replace(/vat_line_fig_/, '');
//     var to_be_minused = $("#vat_amount_" + list_id).val();

//     $("#vat_line_tr_" + list_id).remove();


//     var sub_total = $("#sub_total").html();
//     if (sub_total == 0) {

//     } else {
//         if (to_be_minused == "") {
//             to_be_minused = 0;
//         }
//         var new_sub_total = parseFloat(sub_total) - parseFloat(to_be_minused);
//         $("#sub_total").html(new_sub_total);

//     }


// });
$(document).on('click', '.remove_vat_item', function() {

    var list_id = $(this).attr('id').replace(/vat_line_fig_/, '');
    var to_be_added = $("#vat_amount_" + list_id).val();

    $("#vat_line_tr_" + list_id).remove();


    var sub_total = $("#sub_total").html();


    if (($(".remove_dis_item").length < 1) && ($(".remove_vat_item").length < 1)) {
        alert('empty')
        $("#for_vat").remove();
        $("#for_discount").remove();
        // $("#sub_total").html(0.00);
        var sum_line_totals = 0;
        $(".a_line_total").each(function() {
            var id = $(this).attr('id').replace(/cal_lin_total_/, '');
            console.log(id);
            console.log($("#cal_lin_total_" + id).html());
            var res = parseFloat($("#cal_lin_total_" + id).html().split(',').join(''));
            console.log(res.toFixed(2))

            // var total = res.toFixed(2) * qty.toFixed(2);
            // var res = parseFloat(Array.from($(this).html()).join('').split(',').join(''))
            sum_line_totals = sum_line_totals + res;
            console.log(sum_line_totals)

        });


        $("#sub_total").html(sum_line_totals);
    }
    // if (sub_total == 0) {

    // } else {
    //     if (to_be_minused == "") {
    //         to_be_minused = 0;
    //     }
    //     var new_sub_total = parseFloat(sub_total) - parseFloat(to_be_minused);
    //     $("#sub_total").html(new_sub_total);

    // }

    var sub_total = $("#sub_total").html();
    var dis_total = $("#for_vat").html().split(':')[1];


    if (sub_total == 0) {

    } else {
        if (to_be_added == "") {
            to_be_added = 0;
        }
        var new_sub_total = parseFloat(sub_total) + parseFloat(to_be_added);
        $("#sub_total").html(new_sub_total);
    }

    if (dis_total == 0) {

    } else {
        if (to_be_added == "") {
            to_be_added = 0;
        }
        var new_dis_total = parseFloat(dis_total) - parseFloat(to_be_added);
        console.log(new_dis_total)
        var new_dis_total_ = parseFloat(dis_total) - parseFloat(to_be_added);

        $("#for_total").html(`<h1>Grand Total: ${new_dis_total}</h1>`);
        $("#for_vat").html(`<h1>Total After VAT: ${new_dis_total}</h1>`);


    }


});



$(document).on('click', '.remove_dis_item', function() {


    var list_id = $(this).attr('id').replace(/dis_line_fig_/, '');
    var to_be_added = $("#dis_amount_" + list_id).val();

    $("#dis_line_tr_" + list_id).remove();

    if (($(".remove_dis_item").length < 1) && ($(".remove_vat_item").length < 1)) {
        alert('empty')
        $("#for_vat").remove();
        $("#for_discount").remove();
        // $("#sub_total").html(0.00);
        var sum_line_totals = 0;
        $(".a_line_total").each(function() {
            var id = $(this).attr('id').replace(/cal_lin_total_/, '');
            console.log(id);
            console.log($("#cal_lin_total_" + id).html());
            var res = parseFloat($("#cal_lin_total_" + id).html().split(',').join(''));
            console.log(res.toFixed(2))

            // var total = res.toFixed(2) * qty.toFixed(2);
            // var res = parseFloat(Array.from($(this).html()).join('').split(',').join(''))
            sum_line_totals = sum_line_totals + res;
            console.log(sum_line_totals)

        });


        $("#sub_total").html(sum_line_totals);
    }


    var sub_total = $("#sub_total").html();
    var dis_total = $("#for_discount").html().split(':')[1];


    if (sub_total == 0) {

    } else {
        if (to_be_added == "") {
            to_be_added = 0;
        }
        var new_sub_total = parseFloat(sub_total) + parseFloat(to_be_added);
        $("#sub_total").html(new_sub_total);
    }

    if (dis_total == 0) {

    } else {
        if (to_be_added == "") {
            to_be_added = 0;
        }
        var new_dis_total = parseFloat(dis_total) + parseFloat(to_be_added);
        console.log(new_dis_total)
        var new_dis_total_ = parseFloat(dis_total) + parseFloat(to_be_added);

        $("#for_total").html(`<h1>Grand Total: ${new_dis_total}</h1>`);
        $("#for_discount").html(`<h1>Total After Discount: ${new_dis_total}</h1>`);


    }

});










$(document).on('click', '.sel_invoice', function() {

    if (this.checked) {
        $("#gen_invoice").removeAttr("disabled");
    } else {
        // $("#gen_invoice").attr("disabled");
        $("#gen_invoice").attr("disabled", !this.checked);
    }
});


$(document).on('click', '#create_new_client_link', function() {

    create_new_client_link();

});



$(document).on('click', '#add_to_sub_total', function() {
    var rnd_id = Math.floor(Math.random() * 14564300451);
    // alert(rnd_id);
    $("#plus_tr").before('<tr id="rm_tr_' + rnd_id +
        '" class="vat_line"> <td></td> <td colspan="4" style="text-align: right"><i class="fa fa-minus fa-fw fa-1x remv_from_sub_total"  id="rmv_id_' +
        rnd_id +
        '"></i><div class="col-xs-3"  style="text-align: right; float: right"><input type="text" class="form-control not_empty" id="vat_name_' +
        rnd_id +
        '"></div></td> <td id="sub_total" style="text-align: right; background-color: #f4f5f7"><div class="col-xs-4" style="text-align: right; float: right; margin-right: 0px"><input type="text" onkeypress="return isNumber(event)" class="form-control to_get_grand not_empty" id="to_b_minus_fig_' +
        rnd_id + '"></div></td> </tr>');

});


$(document).on('click', '.remv_from_sub_total', function() {

    var id = $(this).attr("id").replace(/rmv_id_/, '');
    var sub_fig = $("#to_b_minus_fig_" + id).val();
    if (sub_fig != "" && sub_fig != 0) {
        var grand_total = $("#grand_total").html();
        var new_grand_total = parseFloat(grand_total) - parseFloat(sub_fig);
    }

    $("#rm_tr_" + id).remove();
    $("#grand_total").html(new_grand_total);

});


// $(document).on('keyup', '.untcst', function() {


//     var id = $(this).attr("id").replace(/unit_cost_entrd_/, '');
//     var id = id.replace(/qtyy_entrd_/, '');


//     var unit_cost = parseFloat($("#unit_cost_entrd_" + id).val());
//     var qty = parseFloat($("#qtyy_entrd_" + id).val());

//     if (isNaN(unit_cost)) {
//         unit_cost = 0.00;
//     }
//     if (isNaN(qty)) {
//         qty = 0.00;
//     }

//     // alert(unit_cost)
//     console.log(($("#unit_cost_entrd_" + id).val()).split(',').join(''))
//     //   $(this).val(function(index, value) {
//     //   var val = accounting.formatNumber(value)
//     // });

//     var res = parseFloat($("#unit_cost_entrd_" + id).val().split(',').join(''));
//     console.log(res.toFixed(2))

//     var total = res.toFixed(2) * qty.toFixed(2);

//     $("#cal_lin_total_" + id).html(accounting.formatNumber(total)); //.toLocaleString()

//     //summ up all line totals
//     //a_line_total

//     var sum_line_totals = 0;
//     $(".a_line_total").each(function() {
//         var res = parseFloat($("#unit_cost_entrd_" + id).val().split(',').join(''));
//         console.log(res.toFixed(2))

//         var total = res.toFixed(2) * qty.toFixed(2);
//         // sum_line_totals = sum_line_totals + parseFloat($(this).html());
//         var res = parseFloat(Array.from($(this).html()).join('').split(',').join(''))
//         sum_line_totals = sum_line_totals + res;

//         // sum_line_totals = accounting.formatNumber(sum_line_totals)
//     });





//     //Do a calculation for the grand total
//     // var add_sub_total = 0;
//     // $(".to_get_grand").each(function(){
//     //     add_sub_total = parseFloat($(this).val()) + add_sub_total;

//     // });
//     // $("#grand_total").html(parseFloat($("#sub_total").html()) + add_sub_total);


//     var add_sub_total = 0;
//     $(".vat_figures").each(function() {
//         add_sub_total = parseFloat($(this).val()) + add_sub_total;

//     });


//     $("#sub_total").html(sum_line_totals + add_sub_total);

// });


// $(document).on('keyup', '.fig', function() {


//     var id = $(this).attr("id").replace(/unit_cost_entrd_/, '');
//     var id = id.replace(/qtyy_entrd_/, '');


//     var unit_cost = parseFloat($("#unit_cost_entrd_" + id).val());
//     var qty = parseFloat($("#qtyy_entrd_" + id).val());

//     console.log($("#unit_cost_entrd_" + id).val().toString());

//     if (isNaN(unit_cost)) {
//         unit_cost = 0.00;
//     }
//     if (isNaN(qty)) {
//         qty = 0.00;
//     }

//     // alert(unit_cost)
//     // console.log(($("#unit_cost_entrd_" + id).val()).split(',').join(''))
//     //   $(this).val(function(index, value) {
//     //   var val = accounting.formatNumber(value)
//     // });

//     var res = parseFloat($("#unit_cost_entrd_" + id).val().split(',').join(''));
//     console.log(res.toFixed(2))

//     var total = res.toFixed(2) * qty.toFixed(2);

//     $("#cal_lin_total_" + id).html(accounting.formatNumber(total)); //.toLocaleString()

//     //summ up all line totals
//     //a_line_total

//     var sum_line_totals = 0;
//     $(".a_line_total").each(function() {
//         console.log(accounting.formatNumber($("#unit_cost_entrd_" + id).val()))
//         var res = parseFloat($("#unit_cost_entrd_" + id).val().split(',').join(''));
//         console.log(res)
//         console.log(res.toFixed(2))

//         var total = res.toFixed(2) * qty.toFixed(2);
//         // sum_line_totals = sum_line_totals + parseFloat($(this).html());
//         var res = parseFloat(Array.from($(this).html()).join('').split(',').join(''))
//         sum_line_totals = sum_line_totals + res;
//         console.log(sum_line_totals)

//         // sum_line_totals = accounting.formatNumber(sum_line_totals)
//     });





//     //Do a calculation for the grand total
//     // var add_sub_total = 0;
//     // $(".to_get_grand").each(function(){
//     //     add_sub_total = parseFloat($(this).val()) + add_sub_total;

//     // });
//     // $("#grand_total").html(parseFloat($("#sub_total").html()) + add_sub_total);


//     var add_sub_total = 0;
//     $(".vat_figures").each(function() {
//         add_sub_total = parseFloat($(this).val()) + add_sub_total;

//     });

//     // $(".dis_figures").each(function() {
//     //     discount_sub_total = parseFloat($(this).val()) - discount_sub_total;

//     // });


//     $("#sub_total").html(sum_line_totals + add_sub_total);
//     // $("#sub_total").html(sum_line_totals - discount_sub_total);


// });


$(document).on('keyup', '.fig', function() {
    if (event.which >= 37 && event.which <= 40) {
        event.preventDefault();
    }

    $(this).val(function(index, value) {
        return value
            .replace(/\D/g, "")
            .replace(/([0-9])([0-9]{2})$/, '$1.$2')
            .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
    });

    var id = $(this).attr("id").replace(/unit_cost_entrd_/, '');
    var id = id.replace(/qtyy_entrd_/, '');


    var unit_cost = parseFloat($("#unit_cost_entrd_" + id).val());
    var qty = parseFloat($("#qtyy_entrd_" + id).val());

    // alert($(this).val().split(',').join('') * qty.toFixed(2))


    if (isNaN(unit_cost)) {
        unit_cost = 0.00;
    }
    if (isNaN(qty)) {
        qty = 0.00;
    }

    // alert(unit_cost)
    // console.log(($("#unit_cost_entrd_" + id).val()).split(',').join(''))
    //   $(this).val(function(index, value) {
    //   var val = accounting.formatNumber(value)
    // });

    var res = parseFloat($("#unit_cost_entrd_" + id).val().split(',').join(''));
    console.log(res)
    console.log(res.toFixed(2))


    var total = res.toFixed(2) * qty.toFixed(2);
    console.log(total)

    $("#cal_lin_total_" + id).html(accounting.formatNumber(total)); //.toLocaleString()

    //summ up all line totals
    //a_line_total

    var sum_line_totals = 0;
    $(".a_line_total").each(function() {
        var res = parseFloat($("#unit_cost_entrd_" + id).val().split(',').join(''));
        // console.log($("#unit_cost_entrd_" + id).val().split(',').join(''));
        // var inp = Number($("#unit_cost_entrd_" + id).val().replace(/[',']/gi,'').replace(/['.']/gi,''));

        // console.log(inp * qty)

        console.log(res)

        // var ans = inp.toFixed(2) * qty.toFixed(2)
        // console.log(ans.substring(0,ans.length - 2));


        var total = res.toFixed(2) * qty.toFixed(2);
        // alert(total)
        // sum_line_totals = sum_line_totals + parseFloat($(this).html());
        var res = parseFloat(Array.from($(this).html()).join('').split(',').join(''))
        sum_line_totals = sum_line_totals + res;
        console.log(sum_line_totals)

        // sum_line_totals = accounting.formatNumber(sum_line_totals)
    });





    //Do a calculation for the grand total
    // var add_sub_total = 0;
    // $(".to_get_grand").each(function(){
    //     add_sub_total = parseFloat($(this).val()) + add_sub_total;

    // });
    // $("#grand_total").html(parseFloat($("#sub_total").html()) + add_sub_total);


    var add_sub_total = 0;
    $(".vat_figures").each(function() {
        add_sub_total = parseFloat($(this).val()) + add_sub_total;

    });

    // $(".dis_figures").each(function() {
    //     discount_sub_total = parseFloat($(this).val()) - discount_sub_total;

    // });


    $("#sub_total").html(sum_line_totals + add_sub_total);
    // $("#sub_total").html(sum_line_totals - discount_sub_total);


});


$('#add_ven').on('click', add_contact);


// $(document).on('keyup', '.vat_figures', function() {

//     var sum_line_totals = 0;
//     $(".a_line_total").each(function() {
//         sum_line_totals = sum_line_totals + parseFloat($(this).html());
//     });

//     var add_sub_total = 0;
//     $(".vat_figures").each(function() {

//         if ($(this).val() == "") {
//             var the_vat_fg = 0;
//         } else {
//             var the_vat_fg = $(this).val();
//         }
//         // alert("hell -> "+ $(this).val())
//         add_sub_total = parseFloat(the_vat_fg) + add_sub_total;

//     });

//     $("#sub_total").html(sum_line_totals + add_sub_total);

// });



// $(document).on('keyup', '.untcst', function(){


//     var id = $(this).attr("id").replace(/unit_cost_entrd_/,'');
//     var id = id.replace(/qtyy_entrd_/,'');

//     var unit_cost = parseFloat($("#unit_cost_entrd_"+id).val());
//     var qty = parseFloat($("#qtyy_entrd_"+id).val());

//     if(isNaN(unit_cost)){ unit_cost = 0.00; }
//     if(isNaN(qty)){ qty = 0.00; }

//     var total = unit_cost * qty;

//     $("#cal_lin_total_"+id).html(total); //.toLocaleString()

//     //summ up all line totals
//     //a_line_total

//     var sum_line_totals = 0;
//     $(".a_line_total").each(function(){
//         sum_line_totals = sum_line_totals + parseFloat($(this).html());
//     });
//     // $("#sub_total").html(sum_line_totals); //.toLocaleString()


//     //Do a calculation for the grand total
//     // var add_sub_total = 0;
//     // $(".to_get_grand").each(function(){
//     //     add_sub_total = parseFloat($(this).val()) + add_sub_total;

//     // });
//     // $("#grand_total").html(parseFloat($("#sub_total").html()) + add_sub_total);

//     var add_sub_total = 0;
//     $(".vat_figures").each(function(){
//         add_sub_total = parseFloat($(this).val()) + add_sub_total;

//     });

//     $("#sub_total").html(sum_line_totals + add_sub_total);

// });



$(document).on('keyup', '.to_get_grand', function() {

    var add_sub_total = 0;
    $(".to_get_grand").each(function() {
        add_sub_total = parseFloat($(this).val()) + add_sub_total;

    });
    $("#grand_total").html(parseFloat($("#sub_total").html()) + add_sub_total);

});


$('#add_ven').on('click', add_contact);

$(document).on('click', '#create_invoice_old', function() {

    $("#msg_r").html('');

    //not empty shouldn't be empty
    var blank = "";
    $(".not_empty").each(function() {

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


    var from = $("#invoice_from").val();
    var to = $("#invoice_to").val();
    var invoice_date = $("#invoice_date").val();
    var grand_total = $("#grand_total").html();
    var inv_items = [];
    var con_fees = [];
    var vat_items = [];

    //for each invoice line item
    $('.itm_tr').each(function() {

        var id = $(this).attr("id").replace(/itm_tr_/, '');
        var qty = $("#qty_only_id_" + id).html();
        var unit_cost = $("#unit_cost_entrd_" + id).val();
        var description = $("#descr_" + id).val();

        inv_items.push({
            trans_id: id,
            item_qty: qty,
            item_desc: description,
            unit_cost: unit_cost
        });

    });


    //vat_lines
    $('.vat_line').each(function() {

        var id = $(this).attr("id").replace(/rm_tr_/, '');
        var vat_name = $("#vat_name_" + id).val();
        var vat_cost = $("#to_b_minus_fig_" + id).val();

        vat_items.push({
            name: vat_name,
            amount: vat_cost
        });

    });




    var arr2 = new Array();
    arr2['added_by'] = localStorage.getItem('user_id');
    arr2['company_id'] = localStorage.getItem('company_id');
    arr2['inv_items'] = inv_items;
    arr2['grand_total'] = grand_total;
    arr2['inv_date'] = invoice_date;
    arr2['inv_to'] = to;
    arr2['inv_from'] = from;
    arr2['con_fees'] = vat_items;
    console.log(arr2);

    // return;

    $("#invd_loader").show();
    $("#create_invoice").hide();

    $.ajax({

        type: "POST",
        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/generate_invoice",
        data: {
            "added_by": localStorage.getItem('user_id'),
            "company_id": localStorage.getItem('company_id'),
            "inv_items": inv_items,
            "grand_total": grand_total,
            "inv_date": invoice_date,
            "inv_to": to,
            "inv_frm": from,
            "con_fees": vat_items
        },
        timeout: 60000,

        success: function(response) {

            console.log(response);

            if (response.status == '200') {
                $("#invd_loader").hide();
                $("#create_invoice").show();

                $('#modal_succ_create').modal('show');
                $('#modal_invoice').modal('hide');

            } else if (response.status == '400' || response.status == '401') {

                $("#msg_r").html(response.msg);

            }




        },

        error: function(objAJAXRequest, strError) {

            $("#invd_loader").hide();
            $("#create_invoice").show();
            console.log(strError);
        }

    });

});



// });



function does_user_have_access_to_page() {

    var profile;
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


function add_contact() {

    var company_id = localStorage.getItem('company_id');
    var user_id = localStorage.getItem('user_id');
    var vendor_name = $('#add_vendor_name').val();
    var vendor_address = $('#add_vendor_address').val();
    var vendor_phone = $('#add_vendor_phone').val();
    var vendor_email = $('#add_vendor_email').val();
    var comment = $('#add_vendor_comment').val();
    var blank;

    $('#error').html('');

    $(".add_vendor_required").each(function() {

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

    if (!validateEmail(vendor_email)) {

        $('#error').show();
        $('#error').html('invalid Email');

        return;
    }

    if (vendor_phone.length < 11) {

        $('#error').show();
        $('#error').html('invalid phone number');

        return;
    }

    $('#add_ven').hide();
    $('#ven_loader').show();



    $.ajax({

        type: "POST",
        dataType: "json",
        headers: {'Authorization':localStorage.getItem('token') },

        cache: false,
        url: api_path + "wms/create_vendor",
        data: {
            "company_id": company_id,
            "user_id": user_id,
            "vendor_name": vendor_name,
            "vendor_address": vendor_address,
            "vendor_phone": vendor_phone,
            "vendor_email": vendor_email,
            "comment": comment
        },

        success: function(response) {

            console.log(response);

            if (response.status == '200') {

                $('.modal').modal('hide');

                $("#holds_vendor_name").html(vendor_name);
                $("#holds_vendor_id").html(response.data.vendorID);
                $("#vendor_text").hide();
                $("#v_name_pencil").show();
                $("#create_new_client_link").hide();

                $('#vendor_text').val(vendor_name + ' ' + response.data.vendorID);

                return false;

            } else if (response.status == '400') { // coder error message

                $('#error').html(response.msg);

            } else if (response.status == '401') { //user error message

                $('#error').html(response.msg);

            }

            $('#add_ven').show();
            $('#ven_loader').hide();

        },

        error: function(response) {

            $('#add_ven').show();
            $('#ven_loader').hide();
            $('#error').html("Connection Error.");

        }

    });


}



function add_new_row() {

    if ($(".itm_tr").length == 0) {
        var last_id = 0;
    } else {
        var last_id = $(".itm_tr:last").attr("id").replace(/itm_tr_/, '');
    }

    var id = parseInt(last_id) + 1;
    // <input type="text" class="untcst form-control item_srch_box" id="item_srch_box_' +
    //     id +
    //     '" placeholder="Product Name" >

    $("#outgoingData").append('<tr class="itm_tr" id="itm_tr_' + id +
        '"> <td><i class="fa fa-times-circle fa-2x remove_item" style="display: ; color: #f4909a; cursor: pointer" id="remove_item_' +
        id + '"></i></td> <td class="srl" id="srl_' + id + '">' + id + '</td> <td> <div id="holds_item_name_' + id +
        '" class="holds_item_name" style="float: left"></div>                              <div id="i_name_pencil_' +
        id + '" style="float: left; display: none">                                &nbsp;<i id="item_edit_pencil_' +
        id +
        '" class="fa fa-pencil fa-1x item_edit_pencil" style="font-style: italic; color: #add8e6; cursor: pointer;" ></i>                              </div>                              <div id="holds_itms_id_' +
        id +
        '" class="holds_itms_id" style="float: right; display: none"></div> <datalist id="options_items"></datalist><input list="options_items" class="form-control hold_id select_item_items required" id="select_item_items_' +
        id + '" oninput="onInput(' + id +')" autocomplete="off" placeholder="Product Name"> <div id="holds_itms_unit_' + id +
        '" class="holds_itms_unit" style="float: left; display: none"></div> <br><input type="text" class="untcst form-control" id="product_descrr_' +
        id +
        '"  placeholder="Product Description"  ><br> </td> <td><input type="text" class="untcst fig form-control not_empty allownumericwithdecimal" id="qtyy_entrd_' +
        id +
        '"  placeholder="Quantity" ><br><input type="text" class="untcst form-control" id="weight' +
        id +
        '"  placeholder="Weight/Volume"  ><br><!-- <br><input type="text" class="untcst form-control not_empty" onkeypress="return isNumber(event)" id="expiry_d_' +
        id +
        '"  placeholder="Product Expiry" >--></td> <td class=""><input type="text" class="untcst fig form-control not_empty" id="unit_cost_entrd_' +
        id +
        '" placeholder="0.00"><br><select class="form-control col-md-7 col-xs-12 required not_empty" id="measurement_' +
        id +
        '"><option value="Kg"> Kg </option> <option value="Volume"> Volume </option></select><br></td>  <td id="cal_lin_total_' +
        id +
        '" class="a_line_total" style="text-align: right; padding-right: 20px">0.00</td> </tr>');

    $('input#expiry_d_' + id).datepicker({
        dateFormat: "yy-mm-dd"
    });

    $("#item_srch_box_" + id).autocomplete({

        source: function(request, response) {
            // Fetch data
            $.ajax({

                url: api_path + "wms/items_autocomplete",
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
                }

            });
        },
        minLength: 2,
        select: function(event, ui) {

            var exists;
            $(".holds_itms_id").each(function() {
                var itid = $(this).html();
                if (itid == ui.item.id) {
                    exists = "yes";
                    return;
                }
            });

            if (exists == "yes") {
                alert("Item has already been added to this GRN");

                return;
            }

            console.log(ui.item.id);
            // Set selection
            $("#holds_item_name_" + id).html(ui.item.label);
            $("#holds_itms_id_" + id).html(ui.item.id);
            $("#holds_itms_unit_" + id).html(ui.item.unit);
            $("#item_srch_box_" + id).hide();
            $("#i_name_pencil_" + id).show();
            // $('#holds_item_name_'+id).val(ui.item.label+' '+ui.item.id);

            return false;

        }

    });

}


$(document).on('keydown', '.select_item_items', function() {
        var id = $(this).attr('id').replace(/select_item_items_/, '');
        var key = event.keyCode || event.charCode;
        if( key == 8 || $(this).val() == ''){
        $(`#holds_itms_id_${id}`).hide()
    }
})


function create_new_client_link() {
    $(".add_vendor_required").val('');
    $('#add_ven').show();
    $('#ven_loader').hide();
    $('#show_box_to_create_client').modal('show');
}

function get_warehouse() {
    var options = '';
    options += '<option value="' + localStorage.getItem('warehouse_id') + '">' + localStorage.getItem(
        'warehouse_name') + '</option>';
    $('#warehouse').html(options);
}


function load_warehouse() {

    var company_id = localStorage.getItem('company_id');
    var page = -1;
    var limit = 0;

    $.ajax({
        url: api_path + "wms/list_warehouse",
        type: "POST",
        headers: {'Authorization':localStorage.getItem('token') },

        data: {
            "company_id": company_id,

            "page": page,
            "limit": limit
        },
        dataType: "json",


        success: function(response) {

            console.log(response);
            var options = '';

            $.each(response['data'], function(i, v) {
                options += '<option value="' + response['data'][i]['warehouse_id'] + '">' +
                    response['data'][i]['warehouse_name'] + '</option>';
            });
            $('#warehouse').append(options);

        },
        // jqXHR, textStatus, errorThrown
        error(response) {
            alert('Connection error');
        }
    });

}

function present_vtxt_for_edit() {

    $("#vendor_text").show();
    $("#vendor_text").val('');
    $("#holds_vendor_name").html('');
    $("#holds_vendor_id").html('');
    $("#v_name_pencil").hide();
    $("#create_new_client_link").show();

}

function create_invoice() {


      var listObj = document.getElementById(`select_item_status`);
            console.log(listObj);
            console.log($("#select_item_status").val())

            if ($("#select_item_status").val()) {
                var datalist = document.getElementById(listObj.getAttribute("list"));
                var fa = datalist.options.namedItem(listObj.value);
                console.log(fa)

                var status_name_ = fa.getAttribute('data-value');
                var status_val =  status_name_ ?  status_name_ : ""
            }


    //holds_itms_id
    $(".holds_itms_id").each(function() {

        var id = $(this).attr("id").replace(/holds_itms_id_/, '');
        var the_val = $.trim($(this).html());



        if (the_val == "" || the_val == 0 || the_val == "0") {

            //color associated box
            $("#item_srch_box_" + id).addClass('has-error');

            blank = "yes";

        } else {

            $("#item_srch_box_" + id).removeClass("has-error");

        }

    });

    //not empty shouldn't be empty
    var blank = "";
    $(".not_empty").each(function() {

        var the_val = $.trim($(this).val());

        if (the_val == "" || the_val == "0") {

            $(this).addClass('has-error');

            blank = "yes";

        } else {

            $(this).removeClass("has-error");

        }

    });

    // if ($("#holds_vendor_id").html() == "") {
    //     $("#vendor_text").addClass('has-error');
    //     blank = "yes";
    // }


    if (blank == "yes") {
        return;
    }
    // alert('jj3')


    var vendor = $("#holds_vendor_id").html();
    var date_received = $("#date_receive").val();
    var receiving_warehouse = $("#warehouse").val();
    var sub_total = $("#sub_total").html();
    var amount_paid = $("#amount_paid").val();
    var balance_to_pay = $("#balance_to_pay").val();
    var items_list = [];

    // //for each invoice line item
    // $('.itm_tr').each(function() {

    //     var id = $(this).attr("id").replace(/itm_tr_/, '');
    //     var item_id = $("#holds_itms_id_" + id).html();
    //     var item_unit = $("#holds_itms_unit_" + id).html();
    //     var qty = $("#qtyy_entrd_" + id).val();
    //     var unit_cost = $("#unit_cost_entrd_" + id).val();
    //     var description = $("#product_descrr_" + id).val();
    //     var line_total = parseFloat(unit_cost) * parseFloat(qty);

    //     items_list.push({
    //         item_id: item_id,
    //         item_qty: qty,
    //         item_desc: description,
    //         unit_cost: unit_cost,
    //         line_total: line_total,
    //         item_unit: item_unit
    //     });

    // });

    // if (parseFloat(sub_total) < parseFloat($("#amount_paid").val())) {

    //     // alert(sub_total); alert($("#amount_paid").val());
    //     $('#modal_error_msg').modal('show');
    //     $("#ther_msg").html('Amount Paid cannot be more than Total');
    //     return;

    // }


    // //vat_lines
    // var vat_items = [];

    // $('.vat_line_tr').each(function() {

    //     var id = $(this).attr("id").replace(/vat_line_tr_/, '');
    //     // alert(id);
    //     var vat_name = $("#vat_name_" + id).val();
    //     var vat_cost = $("#vat_amount_" + id).val();

    //     vat_items.push({
    //         name: vat_name,
    //         amount: vat_cost
    //     });

    // });
    var vat_items = [];
    var dis_items = [];


    //for each invoice line item
    $('.itm_tr').each(function() {

        var id = $(this).attr("id").replace(/itm_tr_/, '');
        var listObj = document.getElementById(`select_item_items_${id}`);
        console.log(listObj);
        var datalist = document.getElementById(listObj.getAttribute("list"));
        // var item_id = $("#holds_itms_id_" + id).html();
        var fa = datalist.options.namedItem(listObj.value);
        console.log(fa)

        var item_id = fa.getAttribute('data-value');
        // var item_id = $("#holds_itms_id_" + id).html();
        // var item_unit = $("#holds_itms_unit_" + id).html();
        var description = $("#product_descrr_" + id).val();
        var qty = $("#qtyy_entrd_" + id).val();
        var unit_cost = $("#unit_cost_entrd_" + id).val();
        var description = $("#product_descrr_" + id).val();
        var weight = `${$("#weight" + id).val() == "" ? "" : $("#weight" + id).val() }`;
        var unit = $("#measurement_" + id).val();
        var line_total = parseFloat(unit_cost) * parseFloat(qty);

        items_list.push({

            item_id: item_id,
            item_qty: qty,
            unit_cost: unit_cost,
            item_desc: description,
            line_total: line_total,
            item_weight: weight,
            item_unit: unit
            // inv_discount,
            // inv_vat,

        });

    });






    //vat_lines
    $('.vat_line_tr').each(function() {

        var id = $(this).attr("id").replace(/vat_line_tr_/, '');
        var vat_name = $("#vat_name_" + id).val();
        var vat_cost = $("#vat_amount_" + id).val();

        vat_items.push({
            name: vat_name,
            amount: vat_cost
        });

    });



    $('.dis_line_tr').each(function() {

        var id = $(this).attr("id").replace(/dis_line_tr_/, '');
        var dis_name = $("#dis_name_" + id).val();
        var dis_cost = $("#dis_amount_" + id).val();

        dis_items.push({
            name: dis_name,
            amount: dis_cost
        });

    });

    console.log(dis_items);
    console.log(vat_items);

    console.log(dis_items);
    console.log(vat_items);

    var total_discounts = [];
    var total_vat = [];


    for (let i = 0; i < dis_items.length; i++) {
        total_discounts.push(Number(dis_items[i].amount));
    }

    for (let i = 0; i < vat_items.length; i++) {
        total_vat.push(Number(vat_items[i].amount));
    }
    console.log(total_discounts)
    console.log(total_vat)

    var all_discounts = total_discounts.reduce((prev, next) => prev + next, 0);
    var all_vats = total_vat.reduce((prev, next) => prev + next, 0);

    console.log(all_discounts)
    console.log(all_vats)

    //vat_figures" id="vat_amount_

    // alert(vat_items);
    // return;

    console.log(items_list);
    console.log(vat_items);

    $("#rcv_grn_loader").show();
    $("#create_invoice").hide();
    

    $.ajax({

        type: "POST",
        dataType: "json",
        headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/add_out_itm_list",
        data: {
            "user_id": localStorage.getItem('user_id'),
            "company_id": localStorage.getItem('company_id'),
            "item_list": items_list,
            "issued_to": status_val,
            "warehouse": receiving_warehouse,
            "outgoing_date": date_received,
            "amount_paid": amount_paid,
            "balance": balance_to_pay,
            "batch_total": sub_total,
            "inv_vat": vat_items,
            "inv_discount": dis_items,
            "expected_delivery_date": $("#expected_delivery").val(),
            "comment": $("#comments").val(),
            "is_critical": localStorage.getItem('checkbox')
        },
        timeout: 60000,

        success: function(response) {

            console.log(response);

            if (response.status == '200') {

                $('#modal_succ_create').modal('show');
                $('#modal_succ_create').on('hidden.bs.modal', function() {

                    // window.location.reload();
                    window.location.href = "/warehouse/invoicesandreceipts";
                    localStorage.removeItem('checkbox')

                })


            } else if (response.status == '400' || response.status == '401') {

                $('#modal_error_msg').modal('show');
                $("#ther_msg").html(response.msg);
                $("#rcv_grn_loader").hide();
                $("#create_invoice").show();

            } else {

                $('#modal_error_msg').modal('show');
                $("#ther_msg").html(response.msg);
                $("#rcv_grn_loader").hide();
                $("#create_invoice").show();

            }

        },

        error: function(objAJAXRequest, strError) {

            $('#modal_error_msg').modal('show');
            $("#ther_msg").html('Connection Error!');
            $("#rcv_grn_loader").hide();
            $("#create_invoice").show();

        }

    });


}


function isNumber(evt) {

    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if ((charCode > 31 && charCode < 48) || charCode > 57) {
        return false;
    }
    return true;

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


                        if (response['data'][i]['section_name'] == "Outgoing" && response['data'][i]
                            ['section_exist'] == "yes") {

                            $('#outgoing').show();
                            $('#main_display').show();
                            $('#error_display').hide();

                        } else if (response['data'][i]['section_name'] == "Outgoing" && response[
                                'data'][i]['section_exist'] == "no") {

                            $('#main_display').hide();
                            $('#error_display').show();

                        } else if (response['data'][i]['section_name'] == "Incoming" && response[
                                'data'][i]['section_exist'] == "yes") {

                            $('#incoming').show();

                        } else if (response['data'][i]['section_name'] == "Incoming" && response[
                                'data'][i]['section_exist'] == "no") {

                            $('#incoming').hide();
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


function onInput(id) {
        localStorage.setItem('items_id', id);
        get_Item(`select_item_items_${id}`);
    }

    function get_Item(listid) {
        var id = localStorage.getItem('items_id')
        if ($('.select_item_items').val() == "") {
            $('.select_item_items').addClass('has-error');
        } else {
            $('.select_item_items').removeClass('has-error');
        }
        var listObj = document.getElementById(listid);
        console.log(listObj);
        var datalist = document.getElementById(listObj.getAttribute("list"));
        console.log(datalist);

        var fa = datalist.options.namedItem(listObj.value);
        console.log(datalist.options.namedItem(listObj.getAttribute("data-value")))

        console.log(fa)
        console.log(fa.getAttribute("data"))
        if (fa.getAttribute("data")) {
            var sku = fa.getAttribute("data");
            $(`#holds_itms_id_${id}`).html(`SKU: ${sku}`);
            $(`#holds_itms_id_${id}`).show()
        } else {
            $(`#holds_itms_id_${id}`).hide()
        }
        // console.log(fa.html());

        var selected = fa.getAttribute('data-value');
        console.log(selected)

        // console.log($(`#select_item_items_${listid}`).val());
        // $("#myInput").val($('option[value='+this.value+']').data("text"))
        $(`#des_${id}`).val($("#select_item"));


    }





function fetch_outgoing_info(list_id) {

    var company_id = localStorage.getItem('company_id');

    $('#ou_' + list_id).hide();
    $('#loader11_' + list_id).show();

    $.ajax({

        type: "POST",
        headers: {'Authorization':localStorage.getItem('token') },

        dataType: "json",
        cache: false,
        url: api_path + "wms/fetch_outgoing_item",
        data: {
            "list_id": list_id,
            "company_id": company_id
        },

        success: function(response) {

            var str = "";
            console.log(response);


            $('#loader11_' + list_id).hide();
            $('#ou_' + list_id).show();

            if (response.status == '200') {

                var monthNames = [
                    "Jan", "Feb", "Mar",
                    "Apr", "May", "Jun", "Jul",
                    "August", "Sep", "Oct",
                    "Nov", "Dec"
                ];

                var d = new Date(response.data.date_recieved);
                var monthIndex = d.getMonth();
                var datestring11 = d.getDate() + "/" + monthNames[monthIndex] + "/" + d.getFullYear();

                $("#modal_view_outgoing #item_name").html(response.data.item_name);
                $("#modal_view_outgoing #vendor_name").html(response.data.vendor_name);
                $("#modal_view_outgoing #date_recieved").html(datestring11);
                $("#modal_view_outgoing #quantity").html(response.data.qty);
                // $("#modal_view_vendor #comment").val( response.data.comment);



                $('#modal_view_outgoing').modal('show');
            }


        },

        error: function(response) {
            $('#loader11_' + list_id).hide();
            $('#ou_' + list_id).show();
            alert("Connection Error.");

        }

    });
}

function delete_outgoing_item(list_id) {

    var company_id = localStorage.getItem('company_id');


    var ans = confirm("Are you sure you want to delete this item?");
    if (!ans) {
        return;
    }


    $('#row_' + list_id).hide();
    $('#loader_row_' + list_id).show();
    $.ajax({
        type: "POST",
        headers: {'Authorization':localStorage.getItem('token') },
        
        dataType: "json",
        url: api_path + "wms/del_outgoing_item",
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

function display_filter() {

    $('#filter_display').toggle();
    $('#item_name').val("");
    $('#vendor_name').val("");
    $('#item_code').val("");
    $('#date_range').val("");
}
</script>


<?php
include_once("../gen/_common/footer.php"); // header contents
// include_once("_common/footer.php");
?>
