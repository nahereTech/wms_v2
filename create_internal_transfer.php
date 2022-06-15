<?php
include("_common/header.php");
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
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group" style="float: right">
                        <a href="transfer_history">
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

                        <!-- <div><label for="fullname">Destination Warehouse * :</label></div> -->

                        <!-- <div id="holds_vendor_name" style="float: left"></div> -->

                        <div id="v_name_pencil" style="float: left; display: none">
                            &nbsp;<i id="" class="fa fa-pencil fa-1x edit_pencil"
                                style="font-style: italic; color: #add8e6; cursor: pointer;"></i>
                        </div>

                        <div id="holds_vendor_id" style="float: left; display: none"></div>
                        <datalist id="options">

                        </datalist>

                        <!-- <input list="options" class="form-control col-md-7 col-xs-12 required ware_input"
                            id="select_item" autocomplete="off"> -->

                        <!-- <input type="text" id="vendor_text" class="form-control" name="fullname" required=""
                            autocomplete="off" placeholder="Search Vendor (by name, phone or id)"> -->
                        <!-- <u id="create_new_client_link" style="cursor: pointer">or Create New Vendor</u> -->
                        <span class="edit_destination" style="display: none;"> Edit destination warehouse <i id=""
                                class="fa fa-pencil fa-1x item_edit_pencil"
                                style="font-style: italic; color: #add8e6; cursor: pointer;"></i></span>

                    </div>


                    <div class="x_content">
                        <label for="fullname">Date Created * :</label>
                        <input type="text" id="date_received" class="form-control not_empty" name="fullname" required=""
                            autocomplete="off">
                    </div>


                    <div class="x_content">
                        <label for="fullname">Source Warehouse * :</label>
                        <select class="form-control col-md-7 col-xs-12 required not_empty" id="warehouse">
                            <!-- <option value="">-- Select --</option> -->
                        </select>
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










        <div class="row to_table" >

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
                                        <th class="column-title" id="it_n_1" style="width: 18%">Item Name</th>
                                        <th class="column-title" id="th_1" style="width: 18%;">Section</th>
                                        <th class="column-title " id="th_2" style="width: 18%;">Batch</th>
                                        <th class="column-title " id="th_3" style="width: 5%;">Source Section(Qty)
                                        </th>
                                        <th class="column-title " id="th_4" style="width: 5%">Destination
                                            Section(Qty)</th>
                                        <!-- <th class="column-title">Description</th> -->
                                        <th class="column-title " id="it_n_2" style="width: 5%">Qty</th>
                                        <th class="column-title " id="it_n_2" style="width: 15%">Destination Secion</th>
                                        <!-- <th class="column-title no-link last"><span class="nobr">Actions</span> 
                            </th>-->
                                        <th class="bulk-actions" colspan="9">
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

                                <tr id="">
                                    <td colspan="9"><i class="fa fa-plus-square fa-2x add_new_row"
                                            style="cursor: pointer"></i> Add Item
                                        &nbsp;&nbsp;| &nbsp;&nbsp; <span class="create_item"><i
                                                class="fa fa-plus-square fa-2x" style="cursor: pointer"></i> Create Item
                                            <span></td>
                                </tr>

                                <tr id="total_total_total" class="">
                                    <td colspan="8" style="text-align: right">
                                        <!-- <h1 id="sub_total">0.00</h1> -->
                                    </td>
                                </tr>

                                <!-- <tr id="">
                          <td colspan="5" style="text-align: right">
                            Amount Paid to Vendor
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
                                <button type="submit" class="btn btn-success" id="receive_grn">Create</button>
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


<div class="modal fade" id="create_item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;">Create New Item
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">


                <!-- <div id="container4" > -->

                <span id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <span id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <!-- item line should have item name, section, batch, (a disabled qty in present warehouse and qty in destination warehouse) and qty to send out -->

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_item_name">Item Name
                                <span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="add_item_name"
                                    class="form-control col-md-7 col-xs-12 add_item_required">
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_custom_id">Custom ID
                                <span></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="add_custom_id" class="form-control col-md-7 col-xs-12">
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_custom_id">Item
                                Barcode <span></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="item_barcode" class="form-control col-md-7 col-xs-12">
                                <span>
                                    <button class="btn btn-info" id="populate_barcode">Generate Barcode</button>
                                </span>
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_description">Description
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea cols="3" class="form-control col-md-7 col-xs-12"
                                    id="add_description"></textarea>
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_unit_type">Unit Type
                                <span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control col-sm-2 col-xs-2 add_item_required" id="add_unit_type">
                                    <option value="">----</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="starting_quantity">Starting
                                Quantity <span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control add_item_required allownumericwithdecimal"
                                    id="starting_quantity">
                            </div>
                        </div>



                        <div class="form-group" id="warehouse_sec">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                for="add_unit_type">Sections<span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <!-- <datalist id="options">

                                </datalist>

                                <input list="options" class="form-control col-md-7 col-xs-12 required1" id="select_item"
                                    autocomplete="off"> -->
                            </div>
                            <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control warehouse_section_auto" id="warehouse_section">
                                <div id="holds_section_id" class="holds_section_id" style="float: left; display: none">
                                </div>
                                <div id="clear_selection">
                                    <input type="text" class="form-control" placeholder="Last Name" id="holds_item_name"
                                        style="display: none;" disabled="disabled">
                                </div>
                            </div> -->
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Add Item Pictures<span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <form action="/api/wms/upload_images" class="dropzone" id="itempictureform">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple="multiple" />
                                    </div>
                                </form>
                                <br />

                            </div>

                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12 text-danger" id="error">

                            </div>
                        </div>

                        <div class="ln_solid"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-success" id="add">Create Item</button>
                                <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;"
                                    id="item_loader"></i>
                                <!-- <div id="add_user_loading" style="display:  none">Loading...</div> -->
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






<div class="modal fade" id="show_box_to_create_client" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;">Create New Vendor
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



<div class="modal fade" id="modal_item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                <h4>Item Added Successfully!</h4>
            </div>
            <!-- <div class="modal-footer"> -->
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            <!-- </div> -->
        </div>
    </div>
</div>


<div class="modal fade" id="create_transfer_success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                <h4><span></span> Items Successfully Transferred!</h4>
                <h4><span></span> Items Transfer Failed!</h4>

            </div>
            <!-- <div class="modal-footer"> -->
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            <!-- </div> -->
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
            <div class="modal-body succ_create">
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
    // load_items_for_pop();

    // $(".costing_cnc").hide();
    load_sections_for_items()
    load_sections_for_item();
    // load_warehouse();
    $("#warehouse_sec").hide();

    load_unit_type();
    var image_name = "";

    var images = [];


    Dropzone.options.itempictureform = {

        maxFiles: 4,
        maxFilesize: 1, //1 MB
        accept: function(file, done) {
            if (file.type != "image/jpeg" && file.type != "image/png" && file.type != "image/gif") {
                alert("You are allowed to drag only images");
            } else {
                done();
            }

        },
        init: function() {

            this.on("maxfilesexceeded", function(file) {
                alert("No more files please!");
            });


            this.on("sending", function(file, xhr, formData) {

                formData.append("company_id", localStorage.getItem('company_id'));

            });
        },
        success: function(file, response) {
            if (images.length < 4) {
                images.push(`${response.data.image_name}`)
            }

            console.log(images);



            // image_name = response.data.image_name;
            // console.log(response.data.image_name);



        }

    };

    // $(document).on('click', '#add', function() {

    //     add_company_item(images);

    // });

    $(document).on('click', '#add', function() {
        create_transfer();
        // getItem('select_item', images)
        // add_company_item(images);

    });

    function getItem(listid, images) {
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
        console.log(selected)
        // add_company_item(images, selected);
        // submit_add_batch(selected);
        localStorage.setItem('destination', fa.getAttribute('data-value'))
    }


    // $(document).on('click', '#add', function() {
    //     getItem('select_item', images)
    //     // add_company_item(images);
    // });




    $(".warehouse_section_auto").autocomplete({

        source: function(request, response) {
            // Fetch data
            console.log(response);
            $.ajax({

                url: api_path + "wms/section_autocomplete",
                type: 'post',
                dataType: "json",
                data: {
                    term: request.term,
                    company_id: localStorage.getItem('company_id'),
                    warehouse_id: localStorage.getItem('warehouse_id')
                },
                success: function(data) {
                    response(data);
                    console.log(data);
                    console.log(request.term);
                }

            });
        },
        minLength: 2,
        select: function(event, ui) {

            console.log(ui.item.id);
            // Set selection
            $("#holds_item_name").val(ui.item.label);
            $("#holds_section_id").html(ui.item.id);
            $(".warehouse_section_auto").hide();
            $("#holds_item_name").show();

            // $('#vendor_text').val(ui.item.label+' '+ui.item.id);
            return false;

        }

    });



    $(document).on('click', '#clear_selection', function() {

        $("#holds_item_name").val('');
        $("#holds_item_name").hide();
        $("#holds_section_id").html('');
        $(".warehouse_section_auto").show();
        $(".warehouse_section_auto").val('');

    });




    does_user_have_access_to_page();

    // page_warehouse_access();
    var list_id;
    var company_id = localStorage.getItem('company_id');
    // $('.untcst').keyup(function(event) {


    // });

    // $(document).on('keyup', '.untcst', function() {
    //   var n = parseInt($(this).val().replace(/\D/g,''),10);
    //    $(this).val(n.toLocaleString());
    // })

    $(document).on('keyup', '.fig', function(event) {

        if (event.which >= 37 && event.which <= 40) {
            event.preventDefault();
        }

        // $(this).val(function(index, value) {
        //   return accounting.formatNumber(value)
        // });

        $(this).val(function(index, value) {
            return value
                .replace(/\D/g, "")
                .replace(/([0-9])([0-9]{2})$/, '$1.$2')
                .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
        });
    });


    function load_unit_type() {

        var company_id = localStorage.getItem('company_id');

        $.ajax({
            url: api_path + "wms/list_unit",
            type: "POST",
            data: {
                "company_id": company_id
            },
            dataType: "json",


            success: function(response) {

                // $('#page_loader').hide();
                // $('#employee_details_display').show();

                console.log(response);
                var options = '';

                $.each(response['data'], function(i, v) {
                    options += '<option value="' + response['data'][i]['id'] + '">' +
                        response['data'][
                            i
                        ]['unit_name'] + '</option>';

                    // emp_type = response['data'][i]['type_id'];
                });
                $('#add_unit_type').append(options);
            },
            // jqXHR, textStatus, errorThrown
            error(response) {
                alert('Connection error');
                // $('#page_loader').hide();
                // $('#employee_details_display').hide();
                // $('#employee_error_display').show();
            }
        });

    }

    if ($('#item_barcode').val() != "") {
        $('#populate_barcode').hide();
    } else {
        $('#populate_barcode').show();
        $('#populate_barcode').on('click', function() {
            var code = getRandomArbitrary();
            var Input = $('#item_barcode');
            console.log(code);
            Input.val(Input.val() + code);
            $(this).hide();

        });
    }

    function getRandomArbitrary() {
        return Math.floor(10000000 + Math.random() * 90000000)
    }

    $("#starting_quantity").keyup(function() {
        //   alert( $(this).val() );
        if ($(this).val() > 0) {
            $("#warehouse_sec").show();
        } else {
            $("#warehouse_sec").hide();
        }
    });



    function load_sections_for_items() {

        var company_id = localStorage.getItem('company_id');


        var list_whs = "";
        $.ajax({

            type: "GET",
            dataType: "json",
            cache: false,
            url: api_path + "wms/list_warehouse_items",
            data: {
                "company_id": company_id,
                "warehouse_id": localStorage.getItem("warehouse_id"),
                "limit": 1000,
                "page": 1
            },

            success: function(response) {

                var k = 1;
                console.log(response.data)
                $(response.data).each(function(i, v) {
                    console.log(v.item_name)
                    list_whs +=`<option name="${v.item_name}" value="${v.item_name}" data-value=${v.item_id}></option>`;
                    // strg += `<option value=${v.id}>${v.section_name}</option>`;
                    // strg += `<option name=${v.section_name} value=${v.section_name} data-value=${v.id}></option>`;

                })
                console.log(list_whs)
                $(`#options_items`).append(list_whs);
            },
            error: function() {
                console.log(response);
            }

        });

    }




    function load_sections_for_item() {

        var company_id = localStorage.getItem('company_id');


        var list_whs = "";
        $.ajax({

            type: "POST",
            dataType: "json",
            cache: false,
            url: api_path + "wms/list_warehouse",
            data: {
                // "warehouse_id": localStorage.getItem('warehouse_id'),
                "company_id": company_id,
                // "parent_id": 0
                // "item_id": item_id,
            },

            success: function(response) {

                var k = 1;
                console.log(response.data)
                var warehouse = localStorage.getItem("warehouse_id")
                $(response.data).each(function(i, v) {
                    if(v.warehouse_id !== warehouse){
                    list_whs +=
                        `<option name=${v.warehouse_name} value=${v.warehouse_name} data-value=${v.warehouse_id}></option>`;
                    }
                    // strg += `<option value=${v.id}>${v.section_name}</option>`;
                    // strg += `<option name=${v.section_name} value=${v.section_name} data-value=${v.id}></option>`;

                })

                $(`#options`).append(list_whs);
            },
            error: function() {
                console.log(response);
            }

        });

    }





    function add_company_item(image_name, warehouse_section) {
        var company_id = localStorage.getItem('company_id');
        var user_id = localStorage.getItem('user_id');
        var warehouse_id = localStorage.getItem('warehouse_id');
        var item_name = $('#add_item_name').val();
        var description = $('#add_description').val();
        var unit_type = $('#add_unit_type').val();
        var custom_id = $('#add_custom_id').val();
        var starting_quantity = $('#starting_quantity').val();
        // var warehouse_section = $('#holds_section_id').html();
        var barcode = $('#item_barcode').val();
        // var min_alert = $('#add_min_alert').val();
        // alert(employee_id);
        console.log(image_name.join(","))
        var blank;



        $(".add_item_required").each(function() {

            var the_val = $.trim($(this).val());

            if (the_val == "") {

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

        if (starting_quantity != 0 && warehouse_section == "") {
            $("#warehouse_section").addClass('has-error');
            $('#error').html("Warehouse Section cannot be blank if quantity is more than 0");
            return;
        } else {

        }

        // alert(starting_quantity);
        // alert(warehouse_section);

        // return;




        $('#add').hide();
        $('#item_loader').show();


        $.ajax({

            type: "POST",
            dataType: "json",
            cache: false,
            url: api_path + "wms/create_item",
            data: {
                "company_id": company_id,
                "warehouse_id": warehouse_id,
                "custom_id": custom_id,
                "user_id": user_id,
                "item_name": item_name,
                "description": description,
                "barcode": barcode,
                "unit_type": unit_type,
                "item_images": image_name,
                "quantity": starting_quantity,
                "section": warehouse_section
            },

            success: function(response) {

                // console.log(response);

                if (response.status == '200') {

                    $('#error').html('');
                    $('#create_item').modal('hide');
                    $('#modal_item').modal('show');


                    $('#modal_item').on('hidden.bs.modal', function() {
                        // do something…

                        window.location.reload();
                        // window.location.href = base_url+"items";
                    })


                } else if (response.status == '400') { // coder error message


                    $('#error').html(response.msg);

                } else if (response.status == '401') { //user error message


                    $('#error').html("No result");

                }


                $('#add').show();
                $('#item_loader').hide();

            },

            error: function(response) {

                $('#add').show();
                $('#item_loader').hide();
                $('#error').html("Connection Error.");

            }

        });

    }


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


    // $(".vat_figures").keypress(function(e){
    //   if (e.which != 46 && e.which != 45 && e.which != 46 &&
    //       !(e.which >= 48 && e.which <= 57)) {
    //     return false;
    //   }
    // });


    //add a row if there is none
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

    // $(".edit_destination").on('click', function() {
    //     $('#select_item').removeAttr("disabled");
    //     $(".to_table").hide();
    // });




    // $('#select_item').keyup(function() {
    //     if ($('.ware_input').length == 0) {
    //         $(".to_table").hide()
    //     }
    // });

    $('#select_item').on('input', function() {

        var options = $('datalist')[0].options;
        for (var i = 0; i < options.length; i++) {
            if (options[i].value == $(this).val()) {
                // alert('here')
                // $(".to_table").css('display', $(this).val()  !== '' ? 'block' : 'none')
                $(".to_table").show();
                $('#select_item').attr("disabled", "disabled");
                $('.edit_destination').show();
                getItem("select_item");

                $("#th_1").fadeIn('slow');
                $("#it_n_1").css("width", "18%");
                $("#it_n_2").css("width", "10%");
                $("#item_1").fadeIn('slow');
                $("#th_2").fadeIn('slow');
                $("#item_2").fadeIn('slow');
                $("#th_3").fadeIn('slow');
                $("#item_3").fadeIn('slow');
                $("#it_1").fadeIn('slow');
                $("#th_4").fadeIn('slow');
                $("#item_4").fadeIn('slow');
                break;
            }
        }
    });




    // $('.select_item_items').on('input', function() {

    //             console.log($(this).val());
    //             var id = localStorage.getItem("item_");
    //             var item_id = $(this).attr("id")
    //             alert(item_id);

    //             get_Item(`select_item_items_${id}`);

    //     // var options = $('datalist')[0].options;
    //     // for (var i = 0; i < options.length; i++) {

    //     //     if (options[i].value == $(this).val()) {



    //     //         break;
    //     //     }
    //     // }
    // });




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
    // load_warehouse();


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


    $("#receive_grn").on('click', receive_grn);

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

    // $(document).on('keyup', '#amount_paid', function(){

    //   var amount_paid_txt = $(this).val();
    //   var amount_paid = parseFloat($(this).val());
    //   var sub_total = parseFloat($("#sub_total").html());
    //   var balance = sub_total - amount_paid;
    //   if(balance < 0){

    //     var newStr = amount_paid_txt.slice(0, -1);
    //     $("#amount_paid").val(newStr);
    //     alert("Amount Paid cannot be more than total cost of items");

    //   }else{

    //     $("#balance_to_pay").val(balance);

    //   }



    // });

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

    // $(document).on('click', '.delete_outgoing', function(){
    //     var list_id = $(this).attr('id').replace(/out_/,''); 
    //     delete_outgoing_item(list_id);
    // });

    $(document).on('click', '.create_item', function() {
        $("#create_item").modal('show')
    });


    $(document).on('click', '#create_new_client_link', function() {

        create_new_client_link();

    });

    $(document).on('click', '.remove_item', function() {

        var list_id = $(this).attr('id').replace(/remove_item_/, '');
        var to_be_minused = $("#cal_lin_total_" + list_id).html();
        $("#itm_tr_" + list_id).remove();
        $(".srl").each(function() {
            var current_sr = $(this).html();
            if (current_sr > list_id) {
                var new_sr = current_sr - 1;
                $(this).html(new_sr);
            }
        });



        var sub_total = $("#sub_total").html();
        var new_sub_total = parseFloat(sub_total) - parseFloat(to_be_minused);

        $("#sub_total").html(new_sub_total);

    });





    $(document).on('click', '.remove_vat_item', function() {

        var list_id = $(this).attr('id').replace(/vat_line_fig_/, '');
        var to_be_minused = $("#vat_amount_" + list_id).val();

        $("#vat_line_tr_" + list_id).remove();


        var sub_total = $("#sub_total").html();
        if (sub_total == 0) {

        } else {
            if (to_be_minused == "") {
                to_be_minused = 0;
            }
            var new_sub_total = parseFloat(sub_total) - parseFloat(to_be_minused);
            $("#sub_total").html(new_sub_total);

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

    $(document).on('keyup', '.fig', function() {


        var id = $(this).attr("id").replace(/unit_cost_entrd_/, '');
        var id = id.replace(/qtyy_entrd_/, '');


        var unit_cost = parseFloat($("#unit_cost_entrd_" + id).val());
        var qty = parseFloat($("#qtyy_entrd_" + id).val());

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
        console.log(res.toFixed(2))

        var total = res.toFixed(2) * qty.toFixed(2);

        $("#cal_lin_total_" + id).html(accounting.formatNumber(total)); //.toLocaleString()

        //summ up all line totals
        //a_line_total

        var sum_line_totals = 0;
        $(".a_line_total").each(function() {
            var res = parseFloat($("#unit_cost_entrd_" + id).val().split(',').join(''));
            console.log(res.toFixed(2))

            var total = res.toFixed(2) * qty.toFixed(2);
            // sum_line_totals = sum_line_totals + parseFloat($(this).html());
            var res = parseFloat(Array.from($(this).html()).join('').split(',').join(''))
            sum_line_totals = sum_line_totals + res;

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


        $("#sub_total").html(sum_line_totals + add_sub_total);

    });


    $('#add_ven').on('click', add_contact);


    $(document).on('keyup', '.vat_figures', function() {

        var sum_line_totals = 0;
        $(".a_line_total").each(function() {
            sum_line_totals = sum_line_totals + parseFloat($(this).html());
        });

        var add_sub_total = 0;
        $(".vat_figures").each(function() {

            if ($(this).val() == "") {
                var the_vat_fg = 0;
            } else {
                var the_vat_fg = $(this).val();
            }
            // alert("hell -> "+ $(this).val())
            add_sub_total = parseFloat(the_vat_fg) + add_sub_total;

        });

        $("#sub_total").html(sum_line_totals + add_sub_total);

    });



    $(document).on('keyup', '.to_get_grand', function() {

        var add_sub_total = 0;
        $(".to_get_grand").each(function() {
            add_sub_total = parseFloat($(this).val()) + add_sub_total;

        });
        $("#grand_total").html(parseFloat($("#sub_total").html()) + add_sub_total);

    });

});



function does_user_have_access_to_page() {

    var user_id = localStorage.getItem('user_id');
    var module_id = 6;
    var profile_id = 2;

    $.ajax({

        type: "POST",
        dataType: "json",
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


function add_new_row() {



    if ($(".itm_tr").length == 0) {
        var last_id = 0;
    } else {
        var last_id = $(".itm_tr:last").attr("id").replace(/itm_tr_/, '');
    }

    var id = parseInt(last_id) + 1;

    localStorage.setItem("item_", id)

    $("#outgoingData").append('<tr class="itm_tr" id="itm_tr_' + id +
        '"> <td><i class="fa fa-times-circle fa-2x remove_item" style="display: ; color: #f4909a; cursor: pointer" id="remove_item_' +
        id + '"></i></td> <td class="srl" id="srl_' + id + '">' + id + '</td> <td> <div id="holds_item_name_' + id +
        '" class="holds_item_name" style="float: left"></div>                              <div id="i_name_pencil_' +
        id + '" style="float: left; display: none">                                &nbsp;<i id="item_edit_pencil_' +
        id +
        '" class="fa fa-pencil fa-1x item_edit_pencil" style="font-style: italic; color: #add8e6; cursor: pointer;" ></i>                              </div>                              <div id="holds_itms_id_' +
        id + '" class="holds_itms_id" style="float: left; display: none"></div>  <div id="holds_itms_unit_' + id +
        '" class="holds_itms_unit" style="float: left; display: none"></div> <datalist id="options_items"></datalist><input list="options_items" class="form-control hold_id select_item_items required" id="select_item_items_' +
        id + '" oninput="onInput(' + id +
        ')" autocomplete="off"> </td> <td class=""  id="it_1"><select class="form-control col-md-7 col-xs-12 required hold_id hold_sec" id="select_' +
        id + '" onchange="getval(this);"><option id="load_' + id +
        '" class="load" style="display:none">----</option></select></td><td id="item_1" class="" ><input type="text" class="untcst fig form-control not_empty allownumericwithdecimal hold_id required" id="bat_' +
        id +
        '"  placeholder="" value="" disabled="disabled" style="background-color: white"></td><td id="item_2" class="" ><input type="text" class="untcst fig form-control not_empty allownumericwithdecimal required hold_id" id="sou_' +
        id +
        '"  placeholder="" value=""  disabled="disabled" style="background-color: white"></td><td class="" id="item_3" ><input type="text" class="untcst fig form-control not_empty allownumericwithdecimal required hold_id" id="des_' +
        id +
        '"  value="" disabled="disabled" style="background-color: white"></td><td class=""><input type="text" class="untcst fig form-control not_empty required hold_id chk_qty" id="qty_' +
        id + '" ></td><td class="" id="item_4" ><select class="form-control col-md-7 col-xs-12 required hold_id hold_destination" id="select_destination' +
        id + '" onchange="getval_des(this);"></select></td></tr>');
        fetch_list_of_sections(id);




    $('input#expiry_d_' + id).datepicker({
        dateFormat: "yy-mm-dd"
    });

    $("#item_srch_box_" + id).autocomplete({

        source: function(request, response) {
            // Fetch data
            $.ajax({

                url: api_path + "wms/items_autocomplete",
                type: 'post',
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


$(`.load`).hide();


    $('.hold_sec').on('change', function() {
        alert($(this).find(":selected").val());
        var send = $(this).find(":selected").val();
    });


     $('.select_destination1').on('click', function() {
        console.log('here');
        alert($(this).find(":selected").val());
        var send = $(this).find(":selected").val();
    });

         function getval(sel){
            var company_id = localStorage.getItem('company_id');
            var id = localStorage.getItem('items_id')
            // var page = -1;
            // var limit = 0;

            $.ajax({
                url: api_path + "wms/itemDetails",
                type: "GET",
                data: {
                    "company_id": company_id,
                    "source_warehouse": localStorage.getItem('warehouse_id'),
                    "destination_warehouse": localStorage.getItem('warehouse_id'),
                    "item_id": localStorage.getItem('for_item'),
                    "source_section": sel.value,
                    "destination_section": $(".hold_destination").val()

                },
                dataType: "json",


        success: function(response) {

            console.log(response.data);



            if (response.status == "200") {
                var secs = ""
                console.log(response['data']['section'][0])
                $.each(response['data']['section'], function(i, v) {
                    // console.log(v[i].sectionName)
                    secs += `<option value=${v.sectionID}>${v.sectionName}</option>`
                })
                console.log(`${secs}`);
                localStorage.setItem('for_des', `${secs}`);
                fetch_list_of_sections()
                
                // $(`#load_${id}`).hide();
                // $(`#select_${id}`).html(secs);
                // $(`#bat_${id}`).val(`${response.data.batchName}`);
                // $(`#bat_${id}`).attr('data-value',`${response.data.batchID}`);
                $(`#sou_${id}`).val(`${response.data.sourceQty}`);
                // $(`#des_${id}`).val(`${response.data.destinationQty}`);
                $(`#select_${id}`).removeAttr("disabled")

            } else {
                $(`#load_${id}`).hide();
                var secs = `<option>${response.msg}</option>`;
                // $(`#select_${id}`).html(secs);
                // $(`#bat_${id}`).val(`${response.msg}`);
                $(`#sou_${id}`).val(`${response.msg}`);
                // $(`#des_${id}`).val(`${response.msg}`);
                $(`#select_${id}`).removeAttr("disabled")

            }




        },
        // jqXHR, textStatus, errorThrown
        error(response) {
            alert('Connection error');
        }
    });

}

        function getval_des(sel){
        var company_id = localStorage.getItem('company_id');
        var id = localStorage.getItem('items_id')

        $.ajax({
            url: api_path + "wms/itemDetails",
            type: "GET",
            data: {
                "company_id": company_id,
                "source_warehouse": localStorage.getItem('warehouse_id'),
                "destination_warehouse": localStorage.getItem('warehouse_id'),
                "item_id": localStorage.getItem('for_item'),
                "source_section": $(".hold_sec").val(),
                "destination_section": sel.value

            },
            dataType: "json",


        success: function(response) {

            console.log(response.data);


            if (response.status == "200") {
                var secs = ""
                console.log(response['data']['section'][0])
                $.each(response['data']['section'], function(i, v) {
                    // console.log(v[i].sectionName)
                    secs += `<option value=${v.sectionID}>${v.sectionName}</option>`
                })
                console.log(`${secs}`);
                
                // $(`#load_${id}`).hide();
                // $(`#select_${id}`).html(secs);
                // $(`#bat_${id}`).val(`${response.data.batchName}`);
                // $(`#bat_${id}`).attr('data-value',`${response.data.batchID}`);
                // $(`#sou_${id}`).val(`${response.data.sourceQty}`);
                $(`#des_${id}`).val(`${response.data.destinationQty}`);
                $(`#select_${id}`).removeAttr("disabled")

            } else {
                $(`#load_${id}`).hide();
                var secs = `<option>${response.msg}</option>`;
                // $(`#select_${id}`).html(secs);
                // $(`#bat_${id}`).val(`${response.msg}`);
                // $(`#sou_${id}`).val(`${response.msg}`);
                $(`#des_${id}`).val(`${response.msg}`);
                $(`#select_${id}`).removeAttr("disabled")

            }




        },
        // jqXHR, textStatus, errorThrown
        error(response) {
            alert('Connection error');
        }
    });

}


// fetch_list_of_sections()


function fetch_list_of_sections() {

    var company_id = localStorage.getItem('company_id');
    // var warehouse_id = localStorage.getItem('warehouse_id');
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const id = urlParams.get('i');
    let rowId = localStorage.getItem('item_');

    // var module_id = 6;

    $.ajax({
        type: "POST",
        dataType: "json",
        url: api_path + "wms/my_sections", //list_warehouse_sections_2
        data: {
            "company_id": localStorage.getItem("company_id"),
            "warehouse_id": localStorage.getItem("warehouse_id"),
            "parent_id": 0
        },
        timeout: 60000,

        success: function(response) {

            console.log(response);

            var the_list = "";

            if (response.status == '200') {

               
                var k = 1;

                // response.data.map(a => )

                $(response.data).each(function(i, v) {
                    the_list += `<option value=${v.id}>${v.section_name}</option>|`
                    k++;
                });

                // console.log(`#select_destination${rowId ? rowId : 1}`)
                

                // $(`#select_destination${rowId ? rowId : 1}`).append(the_list);

                var val = localStorage.getItem('for_des');
                console.log(val);
                // console.log(data);
                console.log(the_list)
                var gg = the_list.split('|');
                console.log(gg[0])
                var ak = gg.filter(a => a !== val);



                console.log(`#select_destination${rowId ? rowId : 1}`)
                

                $(`#select_destination${rowId ? rowId : 1}`).html(ak);
            } else {

                $(`#select_destination${rowId ? rowId : 1}`).html(response.msg);

            }

        },

        error: function(response) {
            console.log(response);

            // $("#whsec_loader").hide();
        }

    });

}



function onInput(id) {
    localStorage.setItem('items_id', id);
    get_Item(`select_item_items_${id}`);
}

function onInput_sec(id) {
    localStorage.setItem('items_id', id);
    get_sec_Item(`select_${id}`);
}

$(document).on('keyup', '.chk_qty', function() {
    var items_list = [];
    var vat_items = [];


   

//for each invoice line item
var arr = []

$('.itm_tr').each(function() {
    
    var id = $(this).attr("id").replace(/itm_tr_/, '');
    console.log(id);

    var listObj = document.getElementById(`select_item_items_${id}`);
    console.log(listObj);
    var datalist = document.getElementById(listObj.getAttribute("list"));
    console.log(datalist);
    var fa = datalist.options.namedItem(listObj.value);
    console.log( $(`#bat_${id}`).attr('data-value'));

    var item_name = fa.getAttribute('data-value');
    $(`select_item_items_${id}`).attr('data-value', `${item_name}`);
    var section = $(`#select_${id}`).val();
    var batch = $(`#bat_${id}`).attr('data-value');
    var source_warehouse = $(`#sou_${id}`).val();
    var destination_warehouse = $(`#des_${id}`).val();
    var qty = $(`#qty_${id}`).val();


    if( Number(qty) > Number(source_warehouse)){
        arr.push($(`#qty_${id}`))  
        console.log(arr)
    }

    if(arr.length){
        arr.map((a,i) => {
            a.css('background-color', '#F7CDCD');
    })
   }else{
    arr.map((a,i) => {
            a.css('background-color', '#FFF');
    })
   }

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

    console.log(arr)



if(arr.length > 0){
    alert("Number of quantities to be transferred cannot be greater than the number of items in the source warehouse");
    return;
}else{

}
   
})


function get_sec_Item(listid) {
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
    console.log(fa)
    var selected = fa.getAttribute('data-value');
    console.log(selected)
    fetch_sec_details(selected);

    $(`#select_${id}`).val(`loading...`);
    $(`#load_${id}`).show();
    $(`#bat_${id}`).val(`loading...`);
    $(`#sou_${id}`).val(`loading...`);
    console.log($("#select_item").val());
    $(`#des_${id}`).val($("#select_item").val());



    // add_company_item(images, selected);
    // submit_add_batch(selected);
    // localStorage.setItem('value_w', fa.getAttribute('data-value'))
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
    console.log(fa)
    var selected = fa.getAttribute('data-value');
    console.log(selected)
    localStorage.setItem('for_item', selected);
    fetch_item_details(selected);

    $(`#select_${id}`).val(`loading...`);
    $(`#load_${id}`).show();
    $(`#bat_${id}`).val(`loading...`);
    $(`#sou_${id}`).val(`loading...`);
    console.log($("#select_item").val());
    $(`#des_${id}`).val($("#select_item").val());

}


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

if($("#date_received").val() == ""){
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
var items_list2 = [];
var item3 = [];
var vat_items = [];


   

//for each invoice line item
var arr = []

$('.itm_tr').each(function() {
    
    var id = $(this).attr("id").replace(/itm_tr_/, '');
    console.log(id);

    var listObj = document.getElementById(`select_item_items_${id}`);
    console.log(listObj);
    var datalist = document.getElementById(listObj.getAttribute("list"));
    console.log(datalist);
    var fa = datalist.options.namedItem(listObj.value);
    console.log( $(`#bat_${id}`).attr('data-value'));

    var item_name = fa.getAttribute('data-value');
    var section = $(`#select_${id}`).val();
    var batch = $(`#bat_${id}`).attr('data-value');
    var source_warehouse = $(`#sou_${id}`).val();
    var destination_warehouse = $(`#des_${id}`).val();
    var qty = $(`#qty_${id}`).val();

    console.log(qty);
    console.log(source_warehouse);


    if(Number(qty) > Number(source_warehouse)){
        arr.push($(`#qty_${id}`))  
        console.log(arr)
    }

    if(arr.length){
        arr.map((a,i) => {
            a.css('background-color', '#F7CDCD');
    })

}

    items_list.push({
        
        item_id: item_name,
        from_section: $(".hold_sec").val(),
        to_section: $(".hold_destination").val(),
        batch: batch,
        sourceQty: source_warehouse,
        destinationQty: destination_warehouse,
        transferQty: qty,

    });

    items_list2.push([
        item_name,
        section,
        0,
        batch,
        source_warehouse,
        destination_warehouse,
    ]);

    item3.push([
        item_name,
        section,
        0,
        batch,
        source_warehouse,
        destination_warehouse,
    ]);
});

console.log(items_list);
console.log(item3);

var arry = [];
var arry2 = [];
var arry4 = [];


for (var i = 0; i < item3.length; i++) {
  item3.splice(0,1);
  var sl = items_list2.splice(0,1);
   item3.map((a,i) => {
    var sd = sl.join('').split(',');
    var k = a.join(',').split(',');
    console.log(sd);
    console.log(k);
    if(k.every((d,i) => d === sd[i])){
        console.log(true)
        console.log(sd[0])
        console.log(i)
        arry4.push(sd[0])

        console.log($(`#select_item_items_${i}`).val())

        $(`#select_item_items_${i}`).css('background-color', '#F7CDCD');
        $(`#select_item_items_${i}`).attr('lang', 'eng');

        // arr.map((a,i) => {
        //     a.css('background-color', '#F7CDCD');
        // })
        var t = k.concat(sd)
        console.log(t)
    }
})
}

console.log(arry4)

if(arry4.length > 0){
    alert('duplicate fields');
    return;
}


// var listOb = document.getElementById(`select_item`);
//     console.log(listOb);
//     var datalist = document.getElementById(listOb.getAttribute("list"));
//     console.log(datalist);
//     var final = datalist.options.namedItem(listOb.value);
//     var destination = final.getAttribute('data-value');
//     console.log(final);



if(arr.length){
    alert("Number of quantities to be transferred cannot be greater than the number of items in the source warehouse");
    return;
}
$("#rcv_grn_loader").show();
$("#receive_grn").hide();

console.log(items_list);
// return;

$.ajax({

    type: "POST",
    dataType: "json",
    url: api_path + "wms/item_transfer",
    data: {

        
        
        "user_id": localStorage.getItem('user_id'),
        "company_id": localStorage.getItem('company_id'),
        "from_warehouse": localStorage.getItem('warehouse_id'),
        "to_warehouse": localStorage.getItem('warehouse_id'),
        "created_at": $("#date_received").val(),
        "transfer_type": "internal",
        "item_array": items_list,


     
    },
    timeout: 60000,

    success: function(response) {

        console.log(response);

        if (response.status == '200' || response.status == '400') {
            var plural;
            if(response.total_success_counts > 1){
                plural = 's';
            }else{
                plural = '';
            }

            // $('.succ_create').html(`<h4>${response.total_success_counts} Item${plural} transferred succesfully<h4><h4 style="color:red">${response.total_fail_counts} failed<h4>`);


            $('.succ_create').html(`<h4>items${plural} succesfully transferred<h4>`);

            $('#modal_succ_create').modal('show');
            $('#modal_succ_create').on('hidden.bs.modal', function() {
                // window.location.href = base_url+"po_test";
                
                window.location.href = base_url + "transfer_history";

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

$("#vendor_text").autocomplete({

    source: function(request, response) {
        // Fetch data
        console.log(response);
        $.ajax({

            url: api_path + "wms/vendors_autocomplete",
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

        $('#vendor_text').val(ui.item.label + ' ' + ui.item.id);
        return false;

    }

});







// function add_new_vat_row(){

//   if ( $( ".itm_vat_tr" ).length == 0 ) {
//     var last_id = 0;
//   }else{
//     var last_id = $(".itm_vat_tr:last").attr("id").replace(/itm_vat_tr_/,'');
//   }

//   var id = parseInt(last_id) + 1;

//   $("#outgoingData").append('<tr class="itm_vat_tr" id="itm_vat_tr_'+id+'"> <td><i class="fa fa-times-circle fa-2x remove_item" style="display: ; color: #f4909a; cursor: pointer" id="remove_item_'+id+'"></i></td> <td class="srl" id="srl_'+id+'">'+id+'</td> <td> <div id="holds_item_name_'+id+'" class="holds_item_name" style="float: left"></div>                              <div id="i_name_pencil_'+id+'" style="float: left; display: none">                                &nbsp;<i id="item_edit_pencil_'+id+'" class="fa fa-pencil fa-1x item_edit_pencil" style="font-style: italic; color: #add8e6; cursor: pointer;" ></i>                              </div>                              <div id="holds_itms_id_'+id+'" class="holds_itms_id" style="float: left; display: none"></div>  <div id="holds_itms_unit_'+id+'" class="holds_itms_unit" style="float: left; display: none"></div> <input type="text" class="untcst form-control item_srch_box" id="item_srch_box_'+id+'" placeholder="Product Name" ><br><input type="text" class="untcst form-control" id="product_descrr_'+id+'"  placeholder="Product Description"  ><br> </td> <td><input type="text" class="untcst form-control not_empty allownumericwithdecimal" id="qtyy_entrd_'+id+'"  placeholder="Quantity" ><!-- <br><input type="text" class="untcst form-control not_empty" onkeypress="return isNumber(event)" id="expiry_d_'+id+'"  placeholder="Product Expiry" >--></td> <td><input type="text" class="untcst form-control not_empty allownumericwithdecimal" id="unit_cost_entrd_'+id+'" placeholder="Unit Cost"  ></td>  <td id="cal_lin_total_'+id+'" class="a_line_total" style="text-align: right; padding-right: 20px">0.00</td> </tr>');


// }


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

function fetch_item_details(item) {

    var company_id = localStorage.getItem('company_id');
    var id = localStorage.getItem('items_id')
    // var page = -1;
    // var limit = 0;

    $.ajax({
        url: api_path + "wms/itemDetails",
        type: "GET",
        data: {
            "company_id": company_id,
            "source_warehouse": localStorage.getItem('warehouse_id'),
            "destination_warehouse": localStorage.getItem('warehouse_id'),
            "item_id": item,
            "source_section": 0,
            "destination_section": 0
        },
        dataType: "json",


        success: function(response) {

            console.log(response.data);



            if (response.status == "200") {
                var secs = ""
                var ref = ""
                console.log(response['data']['section'].length)
                $.each(response['data']['section'], function(i, v) {
                    // console.log(v[i].sectionName)
                    secs += `<option value=${v.sectionID}>${v.sectionName}</option>`
                })
                console.log(`${secs}`);
                if(response['data']['section'].length == 1){
                    $.each(response['data']['section'], function(i, v) {
                    // console.log(v[i].sectionName)
                    ref = `<option value=${v.sectionID}>${v.sectionName}</option>`
                })
                    localStorage.setItem('for_des', `${ref}`);

                }
                fetch_list_of_sections();


                $(`#load_${id}`).hide();
                $(`#select_${id}`).html(secs);
                $(`#bat_${id}`).val(`${response.data.batchName}`);
                $(`#bat_${id}`).attr('data-value',`${response.data.batchID}`);
                $(`#sou_${id}`).val(`${response.data.sourceQty}`);
                $(`#des_${id}`).val(`${response.data.destinationQty}`);
                $(`#select_${id}`).removeAttr("disabled");

            } else {
                $(`#load_${id}`).hide();
                var secs = `<option>${response.msg}</option>`;
                $(`#select_${id}`).html(secs);
                $(`#bat_${id}`).val(`${response.msg}`);
                $(`#sou_${id}`).val(`${response.msg}`);
                $(`#des_${id}`).val(`${response.msg}`);
                $(`#select_${id}`).removeAttr("disabled")

            }




        },
        // jqXHR, textStatus, errorThrown
        error(response) {
            alert('Connection error');
        }
    });

}



function fetch_sec_details(sec) {

    var company_id = localStorage.getItem('company_id');
    var id = localStorage.getItem('items_id')

    $.ajax({
        url: api_path + "wms/itemDetails",
        type: "GET",
        data: {
            "company_id": company_id,
            "source_warehouse": $("#warehouse").val(),
            "destination_warehouse": localStorage.getItem('destination'),
            "item_id": localStorage.getItem('for_item'),
            "section": sec
        },
        dataType: "json",


        success: function(response) {

            console.log(response.data);



            if (response.status == "200") {
                var secs = ""
                console.log(response['data']['section'][0])
                $.each(response['data']['section'], function(i, v) {
                    // console.log(v[i].sectionName)
                    secs += `<option value=${v.sectionID}>${v.sectionName}</option>`
                })
                // console.log(`${secs}`.split('</option>'));

                $(`#load_${id}`).hide();
                $(`#select_${id}`).html(secs);
                $(`#bat_${id}`).val(`${response.data.batchName}`);
                $(`#bat_${id}`).attr('data-value',`${response.data.batchID}`);
                $(`#sou_${id}`).val(`${response.data.sourceQty}`);
                $(`#des_${id}`).val(`${response.data.destinationQty}`);
                $(`#select_${id}`).removeAttr("disabled")

            } else {
                $(`#load_${id}`).hide();
                var secs = `<option>${response.msg}</option>`;
                $(`#select_${id}`).html(secs);
                $(`#bat_${id}`).val(`${response.msg}`);
                $(`#sou_${id}`).val(`${response.msg}`);
                $(`#des_${id}`).val(`${response.msg}`);
                $(`#select_${id}`).removeAttr("disabled")

            }




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

}



function isNumber(evt) {

    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if ((charCode > 31 && charCode < 48) || charCode > 57) {
        return false;
    }
    return true;

}



// function page_warehouse_access(){

//   var company_id = localStorage.getItem('company_id');

//   var user_id = localStorage.getItem('user_id');
//   var module_id = 6;


//   $.ajax({

//     type: "POST",
//     dataType: "json",
//     url: api_path+"wms/list_user_wms_sections",
//     data: { "company_id": company_id,  "user_id": user_id, "module_id": module_id},
//     timeout: 60000,

//     success: function(response) {

//         console.log(response);

//         var strTable = "";

//         if (response.status == '200'){

//           if (response.is_admin == 'no'){

//             var k = 1;
//             $.each(response['data'], function (i, v) {


//                 if(response['data'][i]['section_name'] == "Outgoing" && response['data'][i]['section_exist'] == "yes"){

//                     $('#outgoing').show();
//                     $('#main_display').show();
//                     $('#error_display').hide();

//                 }else if(response['data'][i]['section_name'] == "Outgoing" && response['data'][i]['section_exist'] == "no"){

//                     $('#main_display').hide();
//                     $('#error_display').show();

//                 }else if(response['data'][i]['section_name'] == "Incoming" && response['data'][i]['section_exist'] == "yes"){

//                     $('#incoming').show();

//                   }else if(response['data'][i]['section_name'] == "Incoming" && response['data'][i]['section_exist'] == "no"){

//                     $('#incoming').hide();
//                     // $('#user_page').hide();
//                   }else if(response['data'][i]['section_name'] == "Sales/Receipts" && response['data'][i]['section_exist'] == "yes"){

//                     $('#receipts').show();
//                     // $('#user_page').hide();

//                   }else if(response['data'][i]['section_name'] == "Sales/Receipts" && response['data'][i]['section_exist'] == "no"){

//                     $('#receipts').hide();
//                     // $('#user_page').hide();
//                   }



//                 k++;

//             });

//           }else if (response.is_admin == 'yes'){

//                 $('#incoming').show();
//                 $('#outgoing').show();
//                 $('#receipts').show(); 
//                 $('#user_page').show(); 
//             }                


//         }else if(response.status == '400'){



//         }else if(response.status == "401"){
//             //missing parameters


//         }


//     },

//     error: function(response){




//     }        

// });
// }








//   function delete_outgoing_item(list_id){

//     var company_id = localStorage.getItem('company_id');


//     var ans = confirm("Are you sure you want to delete this item?");
//     if(!ans){
//         return;
//     }


//     $('#row_'+list_id).hide();
//     $('#loader_row_'+list_id).show();
//     $.ajax({ 
//         type: "POST",
//         dataType: "json",
//         url: api_path+"wms/del_outgoing_item",
//         data: {"company_id": company_id, "list_id" : list_id},
//         timeout: 60000, // sets timeout to one minute
//         // objAJAXRequest, strError

//         error: function(response){
//             $('#loader_row_'+list_id).hide();
//             $('#row_'+list_id).show();

//             alert('connection error');
//         },

//         success: function(response) {  
//             // console.log(response);
//             if(response.status == '200'){
//                 // $('#row_'+user_id).hide();


//             }else if(response.status == '401'){


//             }

//             $('#loader_row_'+list_id).hide();
//         }
//     });
// }

function display_filter() {

    $('#filter_display').toggle();
    $('#item_name').val("");
    $('#vendor_name').val("");
    $('#item_code').val("");
    $('#date_range').val("");

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

                // alert(holds_vendor_id);

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

function create_transfer() {

    //holds_itms_id
    $(".required").each(function() {

        var id = $(this).attr("id")
        var the_val = $.trim($(this).html());

        if (the_val == "" || the_val == 0 || the_val == "0") {

            //color associated box
            $(`#${id}`).addClass('has-error');
            $(`#${id}`).css('background-color', 'red !important');

            var blank = "yes";
            return;

        } else {

            $(`#${id}`).removeClass("has-error");

        }


    });

    //not empty shouldn't be empty
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

    if ($("#holds_vendor_id").html() == "") {
        $("#vendor_text").addClass('has-error');
        blank = "yes";
        return;
    }


    if (blank == "yes") {
        alert("You have a blank field");
        return;
    }

    var items_list = [];
    var vat_items = [];

    //for each invoice line item
    $('.itm_tr').each(function() {

        var section = $(`#select_${id}`).val();
        var batch = $(`#bat_${id}`).val();
        var source_warehouse = $(`#sou_${id}`).val();
        var destination_warehouse = $(`#des_${id}`).val();

        items_list.push({

            section: section,
            batch: batch,
            source_warehouse: source_warehouse,
            destination_warehouse: destination_warehouse,

        });

    });

    console.log(items_list);
    return;



    //vat_lines
    // $('.vat_line_tr').each(function() {

    //     var id = $(this).attr("id").replace(/vat_line_tr_/, '');
    //     var vat_name = $("#vat_name_" + id).val();
    //     var vat_cost = $("#vat_amount_" + id).val();

    //     vat_items.push({
    //         name: vat_name,
    //         amount: vat_cost
    //     });

    // });




    $("#rcv_grn_loader").show();
    $("#receive_grn").hide();

    $.ajax({

        type: "POST",
        dataType: "json",
        url: api_path + "wms/add_inc_itm_list",
        data: {
            "user_id": localStorage.getItem('user_id'),
            "company_id": localStorage.getItem('company_id'),
            "items_list": items_list,
            "vendor": vendor,
            "warehouse": receiving_warehouse,
            "date_received": date_received,
            "batch_total": sub_total,
            "grn_conv": vat_items
        },
        timeout: 60000,

        success: function(response) {

            console.log(response);

            if (response.status == '200') {

                $('#create_transfer_success').modal('show');
                $('#create_transfer_success').on('hidden.bs.modal', function() {
                    // window.location.href = base_url+"po_test";
                    window.location.href = base_url + "purchaseorders";

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
</script>



<?php
include("_common/footer.php");
?>