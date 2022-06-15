<?php
include_once("_common/menu.php"); // menu list
include_once("../gen/_common/header.php"); // header contents
include_once("assets/wms.php"); // header contents
?>

<style type="text/css">
    .column-title{
        text-align: center;
    }
    tbody{
        text-align: center;
    }
</style>

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
<div class="right_col" role="main" id="main_display" style="display: ;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Reports</h3>
            </div>

            <div class="title_right">
                <div class="col-md-6 col-sm-6 col-xs-12 form-group pull-right top_search">
                    <div class="input-group" style="float: right">
                        <div class="dropdown"  id="export_file">
                          <button class="btn btn-secondary dropdown-toggle exports" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Export As
                        </button>
                        <button class="btn btn-secondary dropdown-toggle email_report" type="button" id="email_report">
                            <i class="fa fa-envelope"></i> Email
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="min-width: 100px;">
                            <li><a class="dropdown-item" id="download_pdf" style="padding: 10px;" download >PDF</a><li>
                                <li><a class="dropdown-item" id="download_csv"  style="padding: 10px;" download>CSV</a></li>
                        </ul>
                        </div>
<!-- <ul class="dropdown-menu dropdown-usermenu pull-right" id="user_list">

    <a class="dropdown-item" href="#">PDF</a>
                                 

    <li> <a href="#">CSV</a></li> -->

                                    <!-- <img style="display:none;"
                    onload="show_login_status('Google', true)"
                    onerror="show_login_status('Google', false)"
                    src="https://accounts.google.com/CheckCookie?continue=https%3A%2F%2Fwww.google.com%2Fintl%2Fen%2Fimages%2Flogos%2Faccounts_logo.png&followup=https%3A%2F%2Fwww.google.com%2Fintl%2Fen%2Fimages%2Flogos%2Faccounts_logo.png&chtml=LoginDoneHtml&checkedDomains=youtube&checkConnection=youtube%3A291%3A1"
                    /> -->



                    <!-- <a href="invoice_type_incoming"><button type="button" class="btn btn-default" id="">Create PO</button></a> -->



                           <!--  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" aria-expanded="false"> Add <span class="caret"></span>
                            </button>
                            <ul role="menu" class="dropdown-menu pull-right">
                                <li><a href="add_incoming_items">From Vendor</a>
                                </li>
                                <li><a href="upward_adjustment">Quantity Adjustment</a>
                                </li>
                            </ul> -->

                            <!-- <button type="button" class="btn btn-default" id="incoming_filter">Filter</button> -->
                            <!-- <a href="add_incoming_items"><button type="button" class="btn btn-success">Receive</button></a> -->

                            <!-- <a href="upward_adjustment?a=add"><button type="button" class="btn btn-primary">Adjustment</button></a> -->

                        </div>
                    </div>
                </div>
            </div>

            <div id="filter_display" style="display: ;">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">

                            <div class="x_content">
                                <br />

                                <div class="form-row">

                                    <!-- <div class="col-sm-3 col-xs-12">
                                        <label>Role Type</label>
                                        <select class="form-control col-md-7 col-xs-12 required" id="list_of_apps">
                                          

                                          </select>
                                      </div>
 -->
                                      <div class="col-sm-3 col-xs-12">
                                        <label>Report Type</label>

                                        <!-- <select class="form-control col-md-7 col-xs-12 required report_type" id="procurement_sub" style="display: none">
                                          <option value="">-- Select --</option>
                                          <option value="">Expense by Vendor</option>
                                          <option value="">Expense by Item</option>
                                      </select> -->



                                      <select class="form-control col-md-7 col-xs-12 required report_type" id="warehouse_sub">
                                          <!-- <option value="">-- Select --</option>
                                              <option value="" class="hide_reset_dates">Stock Balance Summary</option> -->
                                          </select>


                                          <div style="display: none" id="selected_report_type"></div>

                                      </div>


                                      <div class="col-sm-3 col-xs-12" style="display: none;" id="client">
                                        <label>Client Name</label>
                                        <input type="text" class="form-control" id="client_text" name="fullname" required="" autocomplete="off"  style="display: none">

                                <!--   <div id="v_client_name" style="float: left;">
                                    

                                    <input type="text" class="form-control" id="client_text" name="fullname" required="" autocomplete="off"  style="display: none">
                                  </div> -->

                                  <input type="text" id="client_name" class="form-control" name="fullname" required="" autocomplete="off" placeholder="Search Vendor (by name)">
                                  </div>

                                      <!-- <select class="form-control col-md-7 col-xs-12 required report_type" id="warehouse_sub">
                                          <option value="">-- Select --</option>
                                              <option value="" class="hide_reset_dates">Stock Balance Summary</option>
                                          </select> -->
                                  <div class="col-sm-3 col-xs-12" style="display: none;" id="vendor">
                                        <label>Vendor Name</label>

                                  <!-- <div id="v_client_name" style="float: left;">
                                    

                                    <input type="text" class="form-control" name="fullname" required="" autocomplete="off"  style="display: none">
                                  </div> -->

                                 <input type="text" id="vendor_text" class="form-control" style="display:none;">
                                 <input type="text" id="payment_text" class="form-control" style="display:none;">


                                  <input type="text" id="vendor_name" class="form-control" name="fullname" required="" placeholder="Search Vendor (by name)">
                                  </div>

                                  <div class="col-sm-3 col-xs-12" style="display: none;" id="payment">
                                        <label>Vendor Name</label>

                                  <!-- <div id="v_client_name" style="float: left;">
                                    

                                    <input type="text" class="form-control" name="fullname" required="" autocomplete="off"  style="display: none">
                                  </div> -->

                                  <input type="text" id="payment_vendor" class="form-control" name="fullname" required="" autocomplete="off" placeholder="Search Vendor (by name)">
                                  </div>

                                  
                                  <div class="col-sm-3 col-xs-12" style="display: none;" id="payment_">
                                        <label>Vendor Name</label>

                                  <!-- <div id="v_client_name" style="float: left;">
                                    

                                    <input type="text" class="form-control" name="fullname" required="" autocomplete="off"  style="display: none">
                                  </div> -->

                                  <input type="text" id="payment_debt" class="form-control" name="fullname" required="" autocomplete="off" placeholder="Search Vendor (by name)">
                                  </div>

                                  <!-- <div class="col-sm-3 col-xs-12" style="display: none;" id="payment">
                                        <label>Vendor Name</label>

                                  <div id="v_client_name" style="float: left;">
                                    

                                    <input type="text" class="form-control" name="fullname" required="" autocomplete="off"  style="display: none">
                                  </div>

                                  <input type="text" id="payment_vendor" class="form-control" name="fullname" required="" autocomplete="off" placeholder="Search Vendor (by name)">
                                  </div> -->


                                      <!-- </div> -->


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
                                          <option value="yes" id="custom">Custom</option>

                                      </select>
                                  </div>


                                  <div class="col-sm-3 col-xs-12" id="show_custom" style="display: ">
                                    <label>Date Range</label>
                                    <input type="text" class="form-control" id="date_range" autocomplete="off" onkeydown="return false;">
                                </div>


                                <div class="col-sm-3 col-xs-4">
                                    <label>.</label>
                                    <br>
                                    <button type="button" class="btn btn-success" id="filter" >Go</button>
                                    <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="filter_loader"></i>
                                </div>




                            </div>
                            <br>
                            <br>

                                <!-- <div class="form-row">

                                    <div class="col-sm-3 col-xs-4">
                                        <br>
                                        <button type="button" class="btn btn-success" id="filter">Go</button>
                                        <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="filter_loader"></i>
                                    </div>

                                </div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

                <div class="clearfix"></div>

                <div class="col-md-12 col-sm-12 col-xs-12" style="display: ">
                    <div class="x_panel">

                        <br>

                        <div class="x_content" >

                            <div class="table-responsive">

                              <!-- <i class="fa fa-sggggfa-spin fa-fw fa-3x" style="display: ;"></i> -->

                              <div>

                              </div>

                              <table class="table table-striped jambo_table bulk_action" id="tab_stock" style="display: none;">
                                <thead>
                                    <tr class="headings">

                                        <th class="column-title" width="15%">Item</th>
                                        <th class="column-title" width="15%">Open Stock</th>
                                        <th class="column-title">Quantity In </th>
                                        <th class="column-title">Quantity Out </th>
                                        <th class="column-title">Closing Stock </th>
                                        <!-- <th class="column-title no-link last" width="15%"><span class="nobr">Actions</span> -->
                                        </th>
                                        <th class="bulk-actions" colspan="4">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tr id="loading">
                                    <td colspan="5"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i></td>
                                </tr>
                                <tbody id="incomingData">

                                </tbody>
                            </table>


                            <table class="table table-striped jambo_table bulk_action" id="stock_summary_incoming" style="display: none;">
                                <thead>
                                    <tr class="headings">

                                        <th class="column-title" width="15%">Item</th>
                                        <th class="column-title" width="15%">Open Stock</th>
                                        <th class="column-title">Quantity In </th>
                                        <!-- <th class="column-title">Quantity Out </th> -->
                                        <th class="column-title">Closing Stock </th>
                                        <!-- <th class="column-title no-link last" width="15%"><span class="nobr">Actions</span> -->
                                        </th>
                                        <th class="bulk-actions" colspan="4">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tr id="loading_stock_summary_incoming">
                                    <td colspan="4"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i></td>
                                </tr>
                                <tbody id="incomingData_stock_summary_incoming">

                                </tbody>
                            </table>


                            <table class="table table-striped jambo_table bulk_action" id="stock_summary_outgoing" style="display: none;">
                                <thead>
                                    <tr class="headings">

                                        <th class="column-title" width="15%">Item</th>
                                        <th class="column-title" width="15%">Open Stock</th>
                                        <th class="column-title">Quantity Out </th>
                                        <th class="column-title">Closing Stock </th>
                                        <!-- <th class="column-title no-link last" width="15%"><span class="nobr">Actions</span> -->
                                        </th>
                                        <th class="bulk-actions" colspan="4">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tr id="loading_stock_summary_outgoing">
                                    <td colspan="4"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i></td>
                                </tr>
                                <tbody id="incomingData_stock_summary_outgoing">

                                </tbody>
                            </table>



                            <table class="table table-striped jambo_table bulk_action" id="sup_history" style="display: none">
                                <thead>
                                    <tr class="headings">

                                        <th class="column-title" width="15%">Item </th>
                                        <th class="column-title" width="15%">Quantity </th>
                                        <th class="column-title">Client</th>
                                        <th class="column-title">Supply Date </th>
                                        <!-- <th class="column-title">Closing Stock </th> -->
                                        <!-- <th class="column-title no-link last" width="15%"><span class="nobr">Actions</span> -->
                                        </th>
                                        <th class="bulk-actions" colspan="4">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tr id="loading_sup_history">
                                    <td colspan="4"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i></td>
                                </tr>
                                <tbody id="incomingData_sup_history">

                                </tbody>
                            </table>


                            <table class="table table-striped jambo_table bulk_action" id="recieve_history" style="display: none">
                                <thead>
                                    <tr class="headings">

                                        <th class="column-title" width="15%">Item </th>
                                        <th class="column-title" width="15%">Quantity </th>
                                        <th class="column-title">Vendor</th>
                                        <th class="column-title">Supply Date </th>
                                        <!-- <th class="column-title no-link last" width="15%"><span class="nobr">Actions</span> -->
                                        </th>
                                        <th class="bulk-actions" colspan="4">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tr id="loading_recieve_history">
                                    <td colspan="4"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i></td>
                                </tr>
                                <tbody id="incomingData_recieve_history" colspan="4">

                                </tbody>
                            </table>

                            <table class="table table-striped jambo_table bulk_action" id="debt_vendor" style="display: none">
                                <thead>
                                    <tr class="headings">

                                        <th class="column-title" width="15%">Vendor</th>
                                        <th class="column-title" width="15%">Total</th>
                                        </th>
                                        <th class="bulk-actions" colspan="4">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tr id="loading_debt_vendor">
                                    <td colspan="2"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i></td>
                                </tr>
                                <tbody id="incomingData_debt_vendor">

                                </tbody>
                            </table>

                    
                            <table class="table table-striped jambo_table bulk_action" id="issue_order_history" style="display: none">
                                <thead>
                                    <tr class="headings">

                                        <th class="column-title" width="15%">Code</th>
                                        <th class="column-title" width="15%">Date</th>
                                        <th class="column-title">Client</th>
                        
                                        <!-- <th class="column-title no-link last" width="15%"><span class="nobr">Actions</span> -->
                                        </th>
                                        <th class="bulk-actions" colspan="4">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tr id="loading_issue_order_history">
                                    <td colspan="3"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i></td>
                                </tr>
                                <tbody id="incomingData_issue_order_history">

                                </tbody>
                            </table>




                            <table class="table table-striped jambo_table bulk_action" id="credit_vendor" style="display: none">
                                <thead>
                                    <tr class="headings">

                                        <th class="column-title" width="15%">Vendor</th>
                                        <th class="column-title" width="15%">Amount</th>
                                        
                                        <!-- <th class="column-title no-link last" width="15%"><span class="nobr">Actions</span> -->
                                        </th>
                                        <th class="bulk-actions" colspan="4">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tr id="loading_credit_vendor">
                                    <td colspan="2"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i></td>
                                </tr>
                                <tbody id="incomingData_credit_vendor">

                                </tbody>
                            </table>

                            <table class="table table-striped jambo_table bulk_action" id="client_balances" style="display: none">
                                <thead>
                                    <tr class="headings">

                                        <th class="column-title" width="15%">Vendor</th>
                                        <th class="column-title" width="15%">Amount</th>
                                        <!-- <th class="column-title no-link last" width="15%"><span class="nobr">Actions</span> -->
                                        </th>
                                        <th class="bulk-actions" colspan="3">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tr id="loading_client_balances">
                                    <td colspan="2"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i></td>
                                </tr>
                                <tbody id="incomingData_client_balances">

                                </tbody>
                            </table>




                             <table class="table table-striped jambo_table bulk_action" id="sales_by_client" style="display: none">
                                <thead>
                                    <tr class="headings">

                                        <th class="column-title" width="15%">Client </th>
                                        <th class="column-title" width="15%">Amount</th>

                                        <!-- <th class="column-title no-link last" width="15%"><span class="nobr">Actions</span> -->
                                        </th>
                                        <th class="bulk-actions" colspan="4">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tr id="loading_sales_by_client">
                                    <td colspan="2"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i></td>
                                </tr>
                                <tbody id="incomingData_sales_by_client">

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

<div class="modal fade" id="modal_doing_dwnld" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;"><i class="fa info-circle"></i> <span id=""></span> <span id="" style="display: none"></span>
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

                <button type="button" class="btn btn-default" id="cancel_debt" style="display: none">Cancel Debt</button>
                <button type="button" class="btn btn-default" id="open_debt" style="display: none">Open Debt</button>

            </span>

            <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="cancel_debt_loader"></i>

        </div>
    </div>
</div>
</div>

<div class="modal fade" id="modal_transfer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;"><i class="fa info-circle"></i> Send report to email address <span id=""></span> <span id="" style="display: none"></span>
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
                    <input type="email" class="form-control required" id="mail_add" style="margin-bottom: 10px; border-radius: 20px; padding: 20px;" placeholder="Email Address" required /> <br />
                    <input type="email" class="form-control required" id="mail_cc" style="margin-bottom: 10px; border-radius: 20px; padding: 20px;" placeholder="Cc" required /> <br />
                    <input type="email" class="form-control required cc" id="mail_bcc" style="margin-bottom: 10px; border-radius: 20px; padding: 20px;" placeholder="Bcc" required /> <br />
                    <input type="text" class="form-control required cc" id="mail_sub" style="margin-bottom: 10px; border-radius: 20px; padding: 20px;" placeholder="Subject" required /> <br />
                    <!-- <embed src="file_name.pdf" width="800px" height="2100px" /> -->
                    <textarea type="textarea" class="form-control required" style="margin-bottom: 10px; border-radius: 20px; padding: 20px; text-align: left; align-content:center; overflow:auto;" placeholder="Message" id="mail_body" contenteditable>
                      
                    </textarea>
                    <!-- <input type="file" class="form-control col-md-7 col-xs-12 required" id="mail" style="border:none;" placeholder="Subject" required disabled="disabled" value="abc.pdf" /> <br /><br /> -->
                    <div align="left">
                    <img align="left" src="assets/pdf.png" style="width: 10%"><span style="position: relative;top: 10px"><p style="color: grey">Report attachment</p></span>
                    </div>

                    <input type="submit" value="Send Report" id="email_repo" class="btn btn-primary" style="margin-bottom: 10px; border-radius: 20px; padding: 10px; width: 100%; margin-top: 10px;">
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
</div>


<!-- modal -->
        <div class="modal fade" id="modal_item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <h4>Report Sent!</h4>
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
        // location.reload();
        // report_table("")
        populate_item(6)

         $("#vendor_name").autocomplete({

              source: function( request, response ) {
               // Fetch data
               console.log(response);
               $.ajax({

                  url: api_path+"wms/vendors_autocomplete",
                  type: 'post',
                headers: {'Authorization':localStorage.getItem('token') },

                  dataType: "json",
                  data: {
                   term: request.term,
                   company_id: localStorage.getItem('company_id')
               },
               success: function( data ) {
                   response(data);
                   console.log(data);
               }

           });
           },
           minLength: 2,
           select: function (event, ui) {

            console.log(ui.item.id);
                // Set selection
                $("#vendor_name").val(ui.item.label);
                $("#vendor_name").show(ui.item.label);
                $("#vendor_name").val(ui.item.label);
                // $("#client_name").html(ui.item.label);

                // ajax_filter_vendor("",ui.item.id);

                // $("#vendor_text").hide();
                // $("#v_name_pencil").show();

                $('#vendor_text').val(ui.item.id);
                return false;

            }

        })
  //       $(".cc").hide();
  //       $(document).ready(function(){
  //        $("#flip").click(function(){
  //       $(".cc").toggle("slow");
  // });
            // console.log((localStorage.getItem('module_key')))
            $("#tab_stock").hide();
             // $("#sup_history").hide();
             $("#show_custom").hide();
             localStorage.removeItem('report_type');
             localStorage.removeItem('date');
             localStorage.removeItem('vendor');

             $('#export_file').hide();


            // does_user_have_access_to_page();

            $(document).on('change', '.report_type', function(){
              var selected_report_type = $(this).val();
              $("#selected_report_type").html(selected_report_type);
          });


            $(document).on('click', '.email_report', function() {
                // $('#pagination').twbsPagination('destroy');
                $('#modal_transfer').modal('show');
                
                // supply_history("");
            });

            $(document).on('click', '#email_repo', function(e) {
              e.preventDefault();
           if($('#mail_add').val()){
                     email_report();
                }else{
                     alert('Email address field cannot be empty');
                    return;
                }
                // supply_history("");
            });

                // $('#deleted_itms').on('keydown', function(e) {
                //     console.log(e.which)
                //     console.log(this.value.length)
                //     if (e.which == 13) {
                //         $('#pagination').twbsPagination('destroy');
                //          report_table("");
                //     }
                // })


            

            $(document).on('click', '#filter', function() {
                $('#pagination').twbsPagination('destroy');
                report_table("");
                // supply_history("");
            });
            
            $(document).on('click', '#filter', function() {
                if($("#vendor_name").val().length == 0){
                  localStorage.removeItem('vendor');
                  }
                // if($("#download_pdf").hasAttribute('href') && $("#download_csv").hasAttribute('href') == false){
                //   alert('ok');
                // download_pdf();
                // download_csv();
              // }
            });

            // $(document).on('click', '#filter', function() {
            //     $('#pagination').twbsPagination('destroy');
            // });


            $('input#date_range').daterangepicker({
                autoUpdateInput: false
            });

            $('input#date_range').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('YYYY/MM/DD') + ' - ' + picker.endDate.format('YYYY/MM/DD'));

            });         



            //del_hdlv

            $('select').on('change', function() {
              if($(this).find('option:selected').prop('id') == "custom"){
                $("#show_custom").show()
            }else{
                $("#show_custom").hide()
            }
        })

            $(document).on('click', '.del_hpay', function(){

                var grn_id = $(this).attr('id').replace(/del_hp_/, '');
                $("#row_lodda_"+grn_id).show();
                $("#row_pmh_"+grn_id).hide();
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
                       $('#export_file').show();


                            $("#row_lodda_"+grn_id).hide();
                            var amount_deleting = remove_commas_from_number( $("#pho_ln_"+grn_id).html() );
                            var new_total_paid = parseFloat(remove_commas_from_number($("#ttlltt").html())) - parseFloat(amount_deleting); //get new total paid
                            $("#ttlltt").html(format_to_money(new_total_paid)); // insert new total paid

                            //bbllance
                            var new_balance_to_pay = parseFloat(remove_commas_from_number($("#bbllance").html())) + parseFloat(amount_deleting);
                            $("#bbllance").html(format_to_money(new_balance_to_pay));

                        }else{

                            $("#row_lodda_"+grn_id).hide();
                            $("#row_pmh_"+grn_id).show();

                        }
                        
                    },

                    error: function(response) {

                        console.log(response);
                        $("#row_lodda_"+grn_id).hide();
                        $("#row_pmh_"+grn_id).show();
                    }

                });

            });

            function email_report(){
              $('#email_repo').hide();
                $('#report_loader').show();

            var filter_date = localStorage.getItem('date');
             var warehouse_val = $('#warehouse_sub').val();
             var company_id = localStorage.getItem('company_id');
             var warehouse_id = localStorage.getItem('warehouse_id');
             var report_type = localStorage.getItem('report_type');
             var vendor_id = localStorage.getItem('vendor');
             var user_id = localStorage.getItem('user_id');
             var add = $('#mail_add').val();
             var cc = $('#mail_cc').val();
             var bcc = $('#mail_bcc').val();
             var sub = $('#mail_sub').val();
             var bod = $('#mail_body').val();
             var comma = ',';

             var report_to = add.concat(comma, cc, comma, bcc, comma, sub, comma, bod)

             // localStorage.setItem('report_to', $('#mail_add').val(),$('#mail_cc').val(),$('#mail_bcc').val(),$('#mail_sub').val(),$('#mail_body').val())

             if(vendor_id){
              $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "report_to": localStorage.getItem('report_to'),
                        "warehouse_id": warehouse_id,
                        "vendor_id": vendor_id,
                        "report_type": report_type,
                        "report_period": filter_date, 
                        "report_format": "pdf"
                    },
                timeout: 60000, // sets timeout to one minute
                  error: function(response) {
        
     },

            success: function(response) {
            console.log(response);
            if (response.status == '200') {
             
                // $('#download_pdf').trigger('click');
                 $("#modal_transfer").modal('hide');
             $("#modal_item").modal('show');
                setTimeout(function(){
              location.reload() 
         }, 2000);
       }
       else{
        alert(response.msg)
       }
              // $('#export_file').show();
                // $('#download_pdf').trigger('click')
             
           } 
       

     
            });

             }else{
              $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "report_to": report_to,
                        "warehouse_id": warehouse_id,
                        "report_type": report_type,
                        "report_period": filter_date, 
                        "report_format": "pdf"
                    },
                timeout: 60000, // sets timeout to one minute
                  error: function(response) {
        
     },

            success: function(response) {
            console.log(response);
            if (response.status == '200') {
            
              $("#modal_transfer").modal('hide');
             $("#modal_item").modal('show');
                setTimeout(function(){
              location.reload() 
         }, 2000);
                // $('#download_pdf').trigger('click');
       }
       else{
        alert(response.msg)
       }
}
     
            });

             }

        }

function download_csv() {
             var filter_date = localStorage.getItem('date');
             var warehouse_val = $('#warehouse_sub').val();
             var company_id = localStorage.getItem('company_id');
             var warehouse_id = localStorage.getItem('warehouse_id');
             var report_type = localStorage.getItem('report_type');
             var vendor_id = localStorage.getItem('vendor');

             if(vendor_id){
            $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "vendor_id": vendor_id,
                        "report_type": report_type,
                        "report_period": filter_date, 
                        "report_format": "xlsx"
                    },
                timeout: 60000, // sets timeout to one minute
                  error: function(response) {

     },

            success: function(response) {
            console.log(response);
            if (response.status == '200') {

              console.log(response.d_link);
              var url = response.d_link;
              $('#download_csv').attr("href", url);
              // $('#export_file').show();

           }
               //  $('#download_csv').trigger('click');
               // return false;

       }
            });
          }else{
             $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "report_type": report_type,
                        "report_period": filter_date, 
                        "report_format": "xlsx"
                    },
                timeout: 60000, // sets timeout to one minute
                  error: function(response) {
        
     },

            success: function(response) {
            console.log(response);
            if (response.status == '200') {
              console.log(response.d_link);
              var url = response.d_link;
              $('#download_csv').attr("href", url);
              // $(document).on('click', '#download_csv')
              // document.getElementsById('download_csv').click();
             
              // $('#export_file').show();

           }
                // $('#download_csv').trigger('click');
                // return false;



       }
            });

            };
          }

function download_pdf() {

             // var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
             // var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
             var filter_date = localStorage.getItem('date');
             var warehouse_val = $('#warehouse_sub').val();
             var company_id = localStorage.getItem('company_id');
             var warehouse_id = localStorage.getItem('warehouse_id');
             var report_type = localStorage.getItem('report_type');
             var vendor_id = localStorage.getItem('vendor');
             var user_id = localStorage.getItem('user_id');


             if(vendor_id){
              $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        // "user_id": user_id,
                        "warehouse_id": warehouse_id,
                        "vendor_id": vendor_id,
                        "report_type": report_type,
                        "report_period": filter_date, 
                        "report_format": "pdf"
                    },
                timeout: 60000, // sets timeout to one minute
                  error: function(response) {
        
     },

            success: function(response) {
            console.log(response);
            if (response.status == '200') {
              console.log(response.d_link);
              var url = response.d_link;
              $('#download_pdf').attr("href", url);
              // $('#export_file').show();
                // $('#download_pdf').trigger('click')
             
           } 
       }

     
            });

             }else{
              $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        // "user_id": user_id,
                        "warehouse_id": warehouse_id,
                        "report_type": report_type,
                        "report_period": filter_date, 
                        "report_format": "pdf"
                    },
                timeout: 60000, // sets timeout to one minute
                  error: function(response) {
        
     },

            success: function(response) {
            console.log(response);
            if (response.status == '200') {
              console.log(response.d_link);
              var url = response.d_link;
              $('#download_pdf').attr("href", url);
                // $('#download_pdf').trigger('click');
             
       }
}
     
            });

             }

            
            };
// function download_pdf(){
            

// }

function does_user_have_access_to_page(){

    var user_id = localStorage.getItem('user_id');
    var module_id = 6;
    var role_id = 5;

    $.ajax({

        type: "POST",
        dataType: "json",
        cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/check_if_user_has_role",
        data: {
            "user_id": user_id,
            "company_id" : localStorage.getItem('company_id'),
            "warehouse_id" : localStorage.getItem('warehouse_id'),
            "module_id": module_id,
            "role_id": role_id
        },

        success: function(response) {

            console.log(response);

            if (response.status == '200') {

                        // page_warehouse_access();
                        var list_id;
                        // list_grns('');

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



function yes_undo_delete_grn_now(id){


    $.ajax({

        type: "POST",
        dataType: "json",
        cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/undo_deleted_grn",
        data: {
            "batch_id": id,
            "company_id" : localStorage.getItem('company_id'),
            "warehouse_id" : localStorage.getItem('warehouse_id')
        },

        success: function(response) {

            if (response.status == '200') {
                $("#row_"+id).hide();
                $("#tr_act_loader_"+id).hide();
            } else if(response.status == '400') {
                alert("Error deleting. Try again");
                $("#tr_act_loader_"+id).hide();
                $("#row_"+id).show();
            }

        },

        error: function(response) {

            $("#tr_act_loader_"+id).hide();
            $("#row_"+id).show();
            alert("Connection Error");

        }

    });

}



function create_download(id,code){
  var user_id = localStorage.getItem('user_id');
    $.ajax({

        type: "POST",
        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

        cache: false,
        url: api_path + "wms/grn_batch_download",
        data: {
            "batch_id": id,
            "user_id": user_id,
            "company_id" : localStorage.getItem('company_id'),
            "warehouse_id" : localStorage.getItem('warehouse_id')
        },

        success: function(response) {
            console.log(response);
            if (response.status == '200') {
               download_file(response.data.d_file, code+'.pdf');
               $("#modal_doing_dwnld").modal("hide");
           } else if(response.status == '400') {

           }

       },

       error: function(response) {
        console.log(response);
    }

});
}


function yes_delete_grn_now(id){

    $.ajax({

        type: "POST",
        dataType: "json",
        cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/grn_delete",
        data: {
            "batch_id": id,
            "company_id" : localStorage.getItem('company_id'),
            "warehouse_id" : localStorage.getItem('warehouse_id'),
            "user_id" : localStorage.getItem('user_id')

        },

        success: function(response) {

            if (response.status == '200') {
                $("#row_"+id).hide();
                $("#tr_act_loader_"+id).hide();
            } else if(response.status == '400') {
                alert("Error deleting. Try again");
                $("#tr_act_loader_"+id).hide();
                $("#row_"+id).show();
            }

        },

        error: function(response) {

            $("#tr_act_loader_"+id).hide();
            $("#row_"+id).show();
            alert("Connection Error");

        }

    });

}


function yes_delete_grn_frv_now(id){

    $.ajax({

        type: "POST",
        dataType: "json",
        cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/grn_delete_forever",
        data: {
            "batch_id": id,
            "company_id" : localStorage.getItem('company_id'),
            "warehouse_id" : localStorage.getItem('warehouse_id')
        },

        success: function(response) {

            if (response.status == '200') {
                $("#row_"+id).hide();
                $("#tr_act_loader_"+id).hide();
            } else if(response.status == '400') {
                alert("Error deleting. Try again");
                $("#tr_act_loader_"+id).hide();
                $("#row_"+id).show();
            }

        },

        error: function(response) {

            $("#tr_act_loader_"+id).hide();
            $("#row_"+id).show();
            alert("Connection Error");

        }

    });

}


function cancel_debt(){

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
            "company_id" : localStorage.getItem('company_id'),
            "warehouse_id" : localStorage.getItem('warehouse_id')
        },

        success: function(response) {

            console.log(response);

            if (response.status == '200') {

                $("#cancel_debt_loader").hide();
                        //update to update

                        $("#pmt_stuts").html('<span class="label label-success">Completed</span>');

                    } else if(response.status == '400') {

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


function add_payment_history_line(){

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


        function add_delivery_history_line(){
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






        function send_in_new_delivery(po_id){

          var company_id = localStorage.getItem('company_id');
          var insert_date = $("#payment_date_addn_dlv").val();
          var qty = $("#qty_zz_dlv").val();
          var item_id = $("#itm_zz_lzt").val();
          var item_name = $("#itm_zz_lzt option:selected").text();
          var warehouse_id = $("#wzh_zz_lzt").val();
          var warehouse_name = $("#wzh_zz_lzt option:selected").text();
          var unit_id = $("#itm_zz_lzt option:selected").attr("dir");


          

          var blank;
          $(".add_req").each(function(){

            var the_val = $.trim($(this).val());

            if(the_val == "" || the_val == "0"){

              $(this).addClass('has-error');

              blank = "yes";

          }else{

              $(this).removeClass("has-error");

          }

      });

          if(blank == "yes"){

            return; 

        }


        $("#do_add_pm_loader").show();
        $("#adding_new_pm_dlv").hide();


        $.ajax({

          type: "POST",
          dataType: "json",
          cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

          url: api_path + "wms/update_delivery_supply_history",
          data: {

              "item_id": item_id,
              "company_id": company_id,
              "grn_id" : po_id,
              "user_id" : localStorage.getItem('user_id'),
              "warehouse_id" : localStorage.getItem('warehouse_id'),
              "qty" : qty,
              "warehouse_id" : warehouse_id,
              "transaction_date" : insert_date,
              "unit_id" : unit_id,
              "store_type" : "incoming"

          },

          success: function(response) {

              console.log(response);

              if (response.status == '200') {

                  var list_trs;
                  list_trs += '<tr id="row_pmh_'+response.data.dlv_id+'" class="pmt_lst"><td>'+format_a_date(insert_date)+'</td><td>'+item_name+'</td>  <td style="text-align: right">'+format_to_money(qty)+'</td>  <td style="text-align: right">'+warehouse_name+'</td> <td style="text-align: right"><!--<i class="fa fa-times-circle fa-2x del_dlvh" style="color: #fc9e99; cursor: pointer" id="del_dlvh_'+response.data.dlv_id+'"> </i>--></td></tr>';

                  list_trs += '<tr id="row_lodda_'+response.data.dlv_id+'" style="display: none"><td colspan="100%"><i class="fa fa-spinner fa-spin fa-fw fa-1x"></td></tr>';

                  $(".pmt_lst:last").after(list_trs);


                      // if(response.payment_status == "completed"){

                      //     var pmstus = '<span class="label label-success">Completed</span>';
                      // }else{

                      //     var pmstus = '<span class="label label-warning">Uncompleted</span>';
                      // }

                      // alert(pmstus);

                      // $("#pmt_stuts").html(pmstus);


                  } else if(response.status == '400') {

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







    function send_in_new_payment(){




        var blank;
        $(".add_req").each(function(){

          var the_val = $.trim($(this).val());

          if(the_val == "" || the_val == "0"){

            $(this).addClass('has-error');

            blank = "yes";

        }else{

            $(this).removeClass("has-error");

        }

    });

        if(blank == "yes"){

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
                    "payment_date" : payment_date,
                    "user_id" : localStorage.getItem('user_id'),
                    "warehouse_id" : localStorage.getItem('warehouse_id'),
                    "batch_id" : batch_id
                },

                success: function(response) {

                    console.log(response);

                    if (response.status == '200') {

                        //$("#row_lodda_"+grn_id).show();
                        //$("#row_pmh_"+grn_id).hide();
                        
                        var list_trs;
                        list_trs += '<tr id="row_pmh_'+response.last_inserted_id+'" class="pmt_lst"><td>'+format_a_date(payment_date)+'</td><td>'+format_to_money(amount_paid)+'</td><td style="text-align: right"><i class="fa fa-times-circle fa-2x del_hpay" style="color: #fc9e99; cursor: pointer" id="del_hp_'+response.last_inserted_id+'"> </i></td></tr>';

                        list_trs += '<tr id="row_lodda_'+response.last_inserted_id+'" style="display: none"><td colspan="100%"><i class="fa fa-spinner fa-spin fa-fw fa-1x"></td></tr>';
                        
                        $(".pmt_lst:last").after(list_trs);

                        //update amount paid
                        var new_amount_paid = parseFloat(remove_commas_from_number($("#ttlltt").html())) + parseFloat(amount_paid); //calculate new amount paid
                        $("#ttlltt").html( format_to_money( new_amount_paid) ); //insert new amount

                        //update balance
                        var new_balance = parseFloat(remove_commas_from_number($("#bbllance").html())) - parseFloat(amount_paid);
                        $("#bbllance").html( format_to_money( new_balance) );


                        if(response.payment_status == "completed"){

                            var pmstus = '<span class="label label-success">Completed</span>';
                        }else{

                            var pmstus = '<span class="label label-warning">Uncompleted</span>';
                        }

                        // alert(pmstus);

                        $("#pmt_stuts").html(pmstus);


                    } else if(response.status == '400') {

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


        function load_warehouses_for_pop(){

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

              success: function(response){

                var k = 1;
                $.each(response.data, function (i, v) {

                    list_whs += '<option value="'+v.warehouse_id+'">'+v.warehouse_name+'</option>';

                    k++;

                });

                $("#wzh_zz_lzt").append(list_whs);

            },
            error: function(){
                console.log(response);
            }

        });

        }


        function load_grn_items_for_pop(list_id){

          var company_id = localStorage.getItem('company_id');
          var warehouse_id = localStorage.getItem('warehouse_id');

          $.ajax({

            type: "POST",
            dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

            cache: false,
            url: api_path + "wms/list_grn_items",
            data: {
                "grn_id": list_id,
                "company_id": company_id,
                "warehouse_id": warehouse_id
            },

            success: function(response){

              var k = 1;
              var list_grn_items = "";
              $.each(response.data, function (i, v) {

                  list_grn_items += '<option value="'+v.item_id+'" dir="'+v.unit_id+'">'+v.item_name+'</option>';

                  k++;

              });

              $("#itm_zz_lzt").append(list_grn_items);

          },
          error: function(){
              alert("dd");
              console.log(response);
          }

      });
      }



      function view_delivery_history(list_id){

          $("#modal_view_dlv_history").modal('show');
          $("#loading_data").show();
          $("#generateData_dlv").html('');
          var clicked_grn = $("#batch_cod_tx_"+list_id).html();
          $("#btch_cddd_dlv").html("("+clicked_grn+")");

          var company_id = localStorage.getItem('company_id');
          var warehouse_id = localStorage.getItem('warehouse_id');
          var list_grn_items = "";



          $.ajax({

              type: "POST",
              dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

              cache: false,
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

                      if(response.data != undefined){

                          var k = 1;
                          $.each(response.data , function (i, v) {

                              // if(response.payment_status == "uncompleted"){
                              //     var del_btn = '<i class="fa fa-times-circle fa-2x del_hpay" style="color: #fc9e99; cursor: pointer" id="del_hp_'+v.id+'"> </i>';
                              // }else{
                              //     var del_btn = '';
                              // }
                              // <td style="text-align: right"> '+v.warehouse_name+' </td>
                              list_trs += '<tr id="row_pmh_'+v.id+'" class="pmt_lst"><td>'+format_a_date(v.delivery_date)+'</td><td id="pho_ln_'+v.id+'">'+v.item_name+'</td><td style="text-align: right">'+format_to_money(v.qty)+'</td>   <!--<td style="text-align: right"> <i class="fa fa-times-circle fa-1x del_dlvh" style="color: #fc9e99; cursor: pointer" id="del_dlvh_'+v.id+'"> </td>--> </tr>';

                              list_trs += '<tr id="row_lodda_'+v.id+'" style="display: none"><td colspan="100%"><i class="fa fa-spinner fa-spin fa-fw fa-1x"></td></tr>';

                              k++;

                          });

                      }else{


                      }


                      // list_trs += '<tr id="do_add_pm_dlv" style="display: "><td colspan="100%"><span class="label label-default add_dlv_ph" style="cursor: pointer">Add New Delivery</span></td></tr>';



                      list_trs += '<tr id="adding_new_pm_dlv" style="display: none">';
                      list_trs += '<td><input type="text" class="form-control add_req" placeholder="Date" id="payment_date_addn_dlv"></td>';
                      list_trs += '<td><div class="input-group col-md-12 col-sm-12 col-xs-12"><select class="form-control required add_req" style="width: 99%" id="itm_zz_lzt"> <option value="">-- Select Item --</option></select></div></td>';
                      list_trs += '<td style="text-align: right"><input type="text" class="form-control add_req allownumericwithdecimal" placeholder="Qty" id="qty_zz_dlv"></td>';
                      list_trs += '<td style="text-align: right"><div class="input-group col-md-12 col-sm-12 col-xs-12"><select class="form-control required add_req" id="wzh_zz_lzt"> <option value="">-- Warehouse --</option></select></div></td>';
                      list_trs += '<td style="text-align: right"><button type="button" class="btn btn-default" id="send_in_new_delivery" dir="'+list_id+'">Add</button><i  class="fa fa-times-circle fa-2x"  data-toggle="tooltip" data-placement="top" id="cancladd_pm" style="color: #f79e94; cursor: pointer"></i></td>';
                      list_trs += '</tr>';



                      list_trs += '<tr id="do_add_pm_loader"  style="display: none;"><td colspan="100%"><i class="fa fa-spinner fa-spin fa-fw fa-3x"></td></tr>';

                      $("#generateData_dlv").html(list_trs);
                      load_warehouses_for_pop();
                      load_grn_items_for_pop(list_id);

                  }else{
                      $("#generateData_dlv").html('<tr><td colspan="100%">'+response.msg+'</td></tr>');
                  }

              },

              error: function(response) {
                  console.log(response);
                  $("#loading_data").hide();
                  $("#generateData_dlv").html('<tr><td colspan="100%">Connection Error. Please try again.</td></tr>');

              }

          });

}

function fetch_incoming_info(list_id) {

  $("#modal_view_incoming").modal('show');
  $("#loading_po_info").show();
  $("#generateData").html('');

  var clicked_grn = $("#batch_cod_tx_"+list_id).html();
  $("#btch_cddd").html("("+clicked_grn+")");

  $(".invoice-info").hide();

  var company_id = localStorage.getItem('company_id');
  var warehouse_id = localStorage.getItem('warehouse_id');

          // $('#in_' + list_id).hide();
          // $('#loader11_' + list_id).show();

          $.ajax({

              type: "POST",
              dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

              cache: false,
              url: api_path + "wms/grn_batch_details",
              data: {
                  "batch_id": list_id,
                  "company_id": company_id,
                  "warehouse_id": warehouse_id
              },

              success: function(response) {

                  console.log(response);

                  

                  if (response.status == '200') {

                      $("#modal_view_incoming #ivvv_fff").html(response.data.vendor);
                      $("#modal_view_incoming #ivvv_dtt").html(format_a_date(response.data.date_recieved));
                      $("#modal_view_incoming #ivvv_shpppt").html(response.data.shipped_to);
                      // $("#modal_view_incoming #btch_cddd").html(response.data.batch_code);

                      var list_trs = "";
                      var k = 1;
                      $.each(response.data.items, function (i, v) {

                        list_trs += '<tr id="row_'+v+'"><td>'+k+'</td><td>'+v.item_name+'</td><td style="text-align: right">'+format_to_money(v.qty)+'</td><td style="text-align: right">'+format_to_money(v.qty_supplied)+'</td><td style="text-align: right">'+format_to_money(v.unit_cost)+'</td><td style="text-align: right">'+format_to_money(v.total_line_cost)+'</td></tr>';

                        k++;

                    });

                      if(response.data.vat_line != ""){

                        $.each(response.data.vat_lines, function (i, v) {

                            list_trs += '<tr id="row_'+v+'"><td style="text-align: right; color: " colspan="5">'+v.vl_name+'</td><td style="text-align: right">'+format_to_money(v.amount)+'</td></tr>';

                            k++;

                        });
                    }


                    list_trs += '<tr id="row_"><td style="text-align: right; color: " colspan="5"><b>TOTAL</b></td><td style="text-align: right"><b>'+format_to_money(response.data.batch_total)+'</b></td></tr>';


                    list_trs += '<tr id="row_"><td style="text-align: right; color: green" colspan="5"><b>Amount Paid</b></td><td style="text-align: right"><b>'+format_to_money(response.data.batch_amount_paid)+'</b></td></tr>';

                    list_trs += '<tr id="row_"><td style="text-align: right; color: red" colspan="5"><b>Balance to Pay</b></td><td style="text-align: right"><b>'+format_to_money(response.data.balance)+'</b></td></tr>';



                    $("#loading_po_info").hide();
                    $("#generateData").html(list_trs);
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
            var clicked_grn = $("#batch_cod_tx_"+list_id).html();
            $("#btch_cddd_ph").html("("+clicked_grn+")");
            $("#btch_id_ph").html(list_id);

            var company_id = localStorage.getItem('company_id');
            var warehouse_id = localStorage.getItem('warehouse_id');
            
            $.ajax({

                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                cache: false,
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

                        if(response.data != undefined){

                            var k = 1;
                            $.each(response.data.payment, function (i, v) {

                                if(response.payment_status == "uncompleted"){
                                    var del_btn = '<i class="fa fa-times-circle fa-2x del_hpay" style="color: #fc9e99; cursor: pointer" id="del_hp_'+v.id+'"> </i>';
                                }else{
                                    var del_btn = '';
                                }

                                list_trs += '<tr id="row_pmh_'+v.id+'" class="pmt_lst"><td>'+format_a_date(v.payment_date)+'</td><td id="pho_ln_'+v.id+'">'+format_to_money(v.amount_paid)+'</td><td style="text-align: right">'+del_btn+'</td></tr>';

                                list_trs += '<tr id="row_lodda_'+v.id+'" style="display: none"><td colspan="100%"><i class="fa fa-spinner fa-spin fa-fw fa-1x"></td></tr>';

                                k++;

                            });

                        }else{
                            response.total_paid = 0.00;
                        }


                        

                        if(response.payment_status == "completed" || response.payment_status == "uncompleted_and_closed"){
                            var hide_add_new_pay = "none";
                            var pmstus = '<span class="label label-success">Completed</span>';
                            $("#open_debt").show();
                        }else{
                            var hide_add_new_pay = "";
                            var pmstus = '<span class="label label-warning">Uncompleted</span>';
                            $("#cancel_debt").show();
                        }

                        list_trs += '<tr id="do_add_pm" style="display: '+hide_add_new_pay+'"><td colspan="100%"><span class="label label-default add_payment_ph" style="cursor: pointer">Add New Payment</span></td></tr>';
                        list_trs += '<tr id="adding_new_pm" style="display: none"> <td><input type="text" class="form-control add_req" placeholder="Date" id="payment_date_addn"></td> <td><div class="input-group"><input type="text" class="form-control add_req allownumericwithdecimal" style="width: 55%" id="amount_paid_addn"><span class="input-group-btn" style="float: left"><button type="button" class="btn btn-primary" id="send_in_new_payment"> Add!</button></span></div></td> <td style="text-align: right"><i  class="fa fa-times-circle fa-2x"  data-toggle="tooltip" data-placement="top" id="cancladd_pm" style="color: #f79e94; cursor: pointer"></i></td></tr>';

                        list_trs += '<tr id="do_add_pm_loader"  style="display: none;"><td colspan="100%"><i class="fa fa-spinner fa-spin fa-fw fa-3x"></td></tr>';

                        list_trs += '<tr id="row_"><td style="text-align: right"></td><td style="text-align: right"><b>TOTAL PAID</b></td><td style="text-align: right"><b><span id="ttlltt">'+format_to_money(response.total_paid)+'</span></b></td></tr>';

                        list_trs += '<tr id="row_"><td style="text-align: right"></td><td style="text-align: right"><b>BALANCE</b></td><td style="text-align: right"><b><span id="bbllance">'+format_to_money(response.balance)+'</span></b></td></tr>';


                        list_trs += '<tr id="row_"><td style="text-align: right"></td><td style="text-align: right"><b>TOTAL COST</b></td><td style="text-align: right"><b><span id="bttcst">'+format_to_money(response.batch_total)+'</span></b></td></tr>';

                        list_trs += '<tr id="row_"><td style="text-align: right"></td><td style="text-align: right"><b>STATUS</b></td><td style="text-align: right" id="pmt_stuts">'+pmstus+'</td></tr>';

                        $("#generateData_ph").html(list_trs);                       

                    }else{
                        $("#generateData_ph").html('<tr><td colspan="100%">'+response.msg+'</td></tr>');
                    }

                },

                error: function(response) {
                    console.log(response);
                    $("#loading_ph").hide();
                    $("#generateData_ph").html('<tr><td colspan="100%">Connection Error. Please try again.</td></tr>');

                }

            });
}



function populate_item(module_id){

    $.ajax({

        type: "POST",
        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

        url: api_path+"modules/module_profiles",
        data: { "module_id": module_id },
        timeout: 60000,

        success: function(response) {
          console.log(response);
          if (response.status == '200'){
            console.log(response)
            // var role = localStorage.getItem("user_role")
            // var role_types= role.split(',').map(a => parseInt(a))
            // console.log(role_types)
            var role_list = $("#does_user_have_roles").html();


                            // console.log(Object.keys(response.data))
                            $("#warehouse_sub").change(function () {

                    var selected = $("#warehouse_sub option:selected").val();
                    if(selected == "supply history"){
                        console.log(selected);
                       $('#client').show();
                       $('#vendor').hide();
                       $('#payment').hide();
                       $('#payment_').hide();
                       $('#export_file').hide();
                       localStorage.removeItem('vendor');



                   }
                  else if(selected == "recieve history" ){
                       $('#vendor').show();
                       $('#payment').hide();
                       $('#client').hide();
                       $('#payment_').hide();
                       $('#export_file').hide();
                       localStorage.removeItem('vendor');



                   }
                   else if(selected == "credit by vendor"){
                       $('#payment').show();
                       $('#vendor').hide();
                       $('#client').hide();
                       $('#payment_').hide();
                       $('#export_file').hide();
                       localStorage.removeItem('vendor');


                   }
                   else if(selected == "debt by vendor"){
                       $('#payment_').show();
                       $('#client').hide();
                       $('#vendor').hide();
                       $('#payment').hide();
                       $('#export_file').hide();
                       localStorage.removeItem('vendor');


                   }

                   else{
                     $('#vendor').hide();
                     $('#client').hide();
                     $('#payment').hide();
                     $('#payment_').hide();
                     $('#export_file').hide();
                     localStorage.removeItem('vendor');


                   }
               })

                            var strg = "";
                            var report_typ = "";

                            // $(response.data).each(function(i,v){
                            //     if(role_types.includes(Number(v.profile_id))){
                            //         strg += `<option value=${v.profile_id}>${v.profile_name}</option>`;
                            //     }
                            // });

                   // if(role_types[0] === ){

                   // }

                        var typ = `<option value="stock balance summary">Stock Balance Summary</option>
                    <option value="supply history">Supply History (Client)</option>
                    <option value="recieve history">Receive History (Vendor)</option>
                    <option value="credit by vendor">Payment to Vendors</option>
                    <option value="debt by vendor">Vendor Balances</option>
                    <option value="recieve history">Issue Order History With Graph</option>
                    <option value="stock summary outgoing">Stock Summary(Issue Order by Items)</option>
                    <option value="stock summary incoming">Stock Summary(Receive Order by Items)</option>
                    <option value="credit by client">Sales by Client</option>

                    `
                    $("#warehouse_sub").html(typ);

                    
                //    if(role_types[0] == 1){

                //     var typ = `<option value="">Login Usage</option>
                //     `

                //     $("#warehouse_sub").html(typ);
                // }

                // else if(role_types[0] == 2){
                //   // onchange gide all the table

                //     var typ = `<option value="stock balance summary">Stock Balance Summary</option>
                //     <option value="recieve history">Receive History (Vendor)</option>
                //     <option value="credit by vendor">Payment to Vendors</option>
                //     <option value="debt by vendor">Vendor Balances</option>
                //     `

                //     $("#warehouse_sub").html(typ);

                // }
                // else if(role_types[0] == 26 || role_types == 26){






                //     var typ = `<option value="stock balance summary">Stock Balance Summary</option>
                //     <option value="supply history">Supply History (Client)</option>
                //     <option value="recieve history vendor">Receive History (Vendor)</option>
                //     <option value="recieve history client">Receive History (Client)</option>
                //     `
                //     $("#warehouse_sub").html(typ);
                //     var report_type = $("#list_of_apps option:selected").val();
                //     localStorage.setItem("report_type", report_type)
                //     console.log(report_type);
                // }
                // else if(role_types[0] == 3){

                //     var typ = `<option value="recieve history">Receive History With Graph</option>
                //     <option value="stock summary incoming">Stock Summary(Receive Order by Items)</option>
                //     `

                //     $("#warehouse_sub").html(typ);

                // }
                // else if(role_types[0] == 24){

                //     var typ = `<option value="recieve history">Issue Order History With Graph</option>
                //     <option value="stock summary outgoing">Stock Summary(Issue Order by Items)</option>
                //     `
                //     $("#warehouse_sub").html(typ);

                // }else if(role_types[0] == 4){

                //     var typ = `<option value="stock balance summary">Stock balance summary</option>
                //     <option value="supply history">Supply History (Client)</option>
                //     <option value="credit by client">Sales by client</option>
                //     <option value="debt by client">Client balances</option>
                //     `
                //     $("#warehouse_sub").html(typ);

                // }else if(role_types[0] == 25){

                //     var typ = `<option value="stock balance summary">Stock Balance Summary</option>
                //     <option value="supply history">Supply History (Client)</option>
                //     <option value="recieve history">Receive History (Vendor)</option>
                //     <option value="credit by vendor">Payment to Vendors</option>
                //     <option value="debt by vendor">Vendor Balances</option>
                //     <option value="recieve history">Issue Order History With Graph</option>
                //     <option value="stock summary outgoing">Stock Summary(Issue Order by Items)</option>
                //     <option value="stock summary incoming">Stock Summary(Receive Order by Items)</option>
                //     <option value="credit by client">Sales by Client</option>

                //     `
                //     $("#warehouse_sub").html(typ);

                // }

                $("#list_of_apps").change(function () {
                   $("#sup_history").hide();
            $("#recieve_history").hide();
            $("#debt_vendor").hide();
            $("#sales_by_client").hide();
            $("#client_balances").hide();
            $("#credit_vendor").hide();
            $("#stock_summary_incoming").hide();
            $("#stock_summary_outgoing").hide();
            $("#issue_order_history").hide();
            $('#client').hide();
            $('#vendor').hide();
            $("#tab_stock").hide();
            $("#pagination").hide();
            $('#export_file').hide();
            localStorage.removeItem('vendor');





                    var selectedVal = $("#list_of_apps option:selected").val();
                    localStorage.setItem("val_id", selectedVal)
                    if(selectedVal == 1){

                       console.log(selectedVal)
                       var typ = `<option value="">Login Usage</option>
                       `

                       $("#warehouse_sub").html(typ);
                   }

                   else if(selectedVal == 2){

                    var typ = `<option value="stock balance summary">Stock Balance Summary</option>
                    <option value="recieve history">Receive History (Vendor)</option>
                    <option value="credit by vendor">Payment to Vendors</option>
                    <option value="debt by vendor">Vendor Balances</option>
                    `

                    $("#warehouse_sub").html(typ);

                }
                else if(selectedVal == 26){


                    var typ = `<option value="stock balance summary">Stock Balance Summary</option>
                    <option value="supply history">Supply History (Client)</option>
                    <option value="recieve history">Receive History (Vendor)</option>

                    `

                    $("#warehouse_sub").html(typ);
                    var report_ty = $("#warehouse_sub option:selected").val();
                    localStorage.setItem("wh", report_ty)
                    console.log(report_ty)

                }
                else if(selectedVal == 3){

                    var typ = `<option value="recieve history">Receive Order History With Graph</option>
                    <option value="stock summary incoming">Stock Summary(Receive Order by Items)</option>
                    `

                    $("#warehouse_sub").html(typ);

                }
                else if(selectedVal == 24){

                    var typ = `<option value="supply history">Issue History With Graph</option>
                    <option value="stock summary outgoing">Stock Summary(Issue Order by Items)</option>
                    `
                    $("#warehouse_sub").html(typ);

                }else if(selectedVal == 4){

                     var typ = `<option value="stock balance summary">Stock balance summary</option>
                    <option value="supply history">Supply History (Client)</option>
                    <option value="credit by client">Sales by client</option>
                    <option value="debt by client">Client balances</option>
                    `
                    $("#warehouse_sub").html(typ);

                }else if(selectedVal == 25){

                    var typ = `<option value="stock balance summary">Stock Balance Summary</option>
                    <option value="supply history">Supply History (Client)</option>
                    <option value="recieve history">Receive History (Vendor)</option>
                    <option value="credit by vendor">Payment to Vendors</option>
                    <option value="debt by vendor">Vendor Balances</option>
                    <option value="recieve history">Issue History With Graph</option>
                    <option value="stock summary outgoing">Stock Summary(Issue Order by Items)</option>
                    <option value="stock summary incoming">Stock Summary(Receive Order by Items)</option>
                    <option value="credit by client">Sales by Client</option>

                    `
                    $("#warehouse_sub").html(typ);

                }

            });

                $("#list_of_apps").html(strg);


            }else{

            }

        },
                // objAJAXRequest, strError
                error: function(response){

                  alert('Connection error!');
                  
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

function list_grns(page) {

    var report_type = $("#selected_report_type").val();

    if(report_type == ""){

    }else if(report_type != "stock_balance"){
      fetch_stock_balance();
  }


}
        // $('#filter').on('click', report_table);

        function report_table(page){
            // console.log(new Date(new Date().setDate(new Date().getDate()-1)));

            if($('#deleted_itms option:selected').val() == ""){
                alert('Select a period to continue');
                return;

            }
            if($('#warehouse_sub option:selected').val() == "supply history"){
                supply_history("");
                return;
            }

            else if($('#warehouse_sub option:selected').val() == "recieve history"){
                recieve_history("");
                return;
            }

            else if($('#warehouse_sub option:selected').val() == "credit by vendor"){
                credit_vendor("");
                return;
            }

            else if($('#warehouse_sub option:selected').val() == "debt by vendor"){
                debt_vendor("");
                return;
            }
            else if($('#warehouse_sub option:selected').val() == "debt by client"){
                client_balances("");
                return;
            }
            else if($('#warehouse_sub option:selected').val() == "credit by client"){
                sales_by_client("");
                return;
            }
            else if($('#warehouse_sub option:selected').val() == "stock summary incoming"){
                stock_summary_incoming("");
                return;
            }
            else if($('#warehouse_sub option:selected').val() == "stock summary outgoing"){
                stock_summary_outgoing("");
                return;
            }
            else if($('#warehouse_sub option:selected').val() == "issue orders"){
                issue_order_history("");
                return;
            }
            // $("#recieve_history").hide();
            $("#sup_history").hide();
            $("#recieve_history").hide();
            $("#debt_vendor").hide();
            $("#sales_by_client").hide();
            $("#client_balances").hide();
            $("#credit_vendor").hide();
            $("#stock_summary_incoming").hide();
            $("#stock_summary_outgoing").hide();
            $("#issue_order_history").hide();
            $('#client').hide();
            $('#vendor').hide();
            $('#payment').hide();
            $('#payment_').hide();
            $("#tab_stock").show();
            $("#pagination").show();
            var warehouse_val = $('#warehouse_sub').val();
            var company_id = localStorage.getItem('company_id');
            var warehouse_id = localStorage.getItem('warehouse_id');
              // $('select').on('change', function() {
                if (page == "") {
                    var page = 1;
                }
                var limit = 10;
                    localStorage.setItem('report_type', warehouse_val);

                if($('#deleted_itms option:selected').val() == "today"){
                    $("#loading").show();
                    $("#incomingData").hide();
                    console.log($('select').val())

                    var startDate = new Date().format("%Y/%m/%d");
                    var endDate = new Date().format("%Y/%m/%d");
                    var filter_date = `${startDate} - ${endDate}`;
                    var warehouse_val = $('#warehouse_sub').val();
                    console.log($('#warehouse_sub').val());
                    localStorage.setItem('date', filter_date);

                    console.log(filter_date);
                    console.log($('#date_range').val().length > 1);


                    $.ajax({
                        type: "POST",
                        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                        url: api_path + "wms/reports",
                        data: {
                            "company_id": company_id, 
                            "warehouse_id": warehouse_id,
                            "limit": limit,
                            "page": page,
                            "report_type": warehouse_val,
                            "report_period": filter_date, 
                            "report_format": "json"

                        },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();
                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(response.total_rows)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${parseFloat(v.opening_stock).toLocaleString()}</td>
                            <td>${parseFloat(v.qty_in).toLocaleString()}</td>
                            <td>${v.qty_out.toLocaleString()}</td>
                            <td>${v.closing_stock.toLocaleString()}</td>
                            </tr>`

                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    report_table(page);
                                }
                            });
                            $('#incomingData').html(add_tab);
                         // $("#tab_stock").show();
                         $("#loading").hide();
                         $("#incomingData").show();

                     })

                    } else if (response.status == '400'){
                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="5">${response.msg}</td>
                        </tr>`
                        $('#incomingData').html(no_rec);
                        $("#tab_stock").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

                }


                if($('#deleted_itms option:selected').val() == "yesterday"){
                    $("#loading").show();
                    $("#incomingData").hide();
                      if (page == "") {
                    var page = 1;
                }
                var limit = 10;
                    console.log($('select').val())
                    var d = new Date();
                    var yester = `${d.getFullYear()}/${d.getMonth() + 1}/${d.getDate() - 1}`;

                    var startDate = yester;
                    var endDate = yester;
                    var filter_date = `${startDate} - ${endDate}`;
                    var warehouse_val = $('#warehouse_sub').val();
                    console.log($('#warehouse_sub').val());
                    localStorage.setItem('date', filter_date);
                    console.log(filter_date)

                    $.ajax({
                        type: "POST",
                        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                        url: api_path + "wms/reports",
                        data: {
                            "company_id": company_id, 
                            "warehouse_id": warehouse_id,
                            "limit": limit,
                            "page": page,
                            "report_type": warehouse_val,
                            "report_period": filter_date, 
                            "report_format": "json"

                        },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {

                    console.log(response);
                    var add_tab = ""
                    if (response.status == '200') {
                       $('#export_file').show();

                        $(response.data).each(function(i,v){
                            console.log(v)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${parseFloat(v.opening_stock).toLocaleString()}</td>
                            <td>${parseFloat(v.qty_in).toLocaleString()}</td>
                            <td>${v.qty_out.toLocaleString()}</td>
                            <td>${v.closing_stock.toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    report_table(page);
                                }
                            });
                            $('#incomingData').html(add_tab);
                         // $("#tab_stock").show();
                         $("#loading").hide();
                         $("#incomingData").show();

                     })

                    } else if (response.status == '400'){
                        // alert('error 401')
                       $('#export_file').hide();

                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="5">${response.msg}</td>
                        </tr>`
                        $('#incomingData').html(no_rec);
                        $("#tab_stock").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

                }



                if($('#deleted_itms option:selected').val() == "this_week"){
                  if (page == "") {
                    var page = 1;
                }
                var limit = 10;
                    $("#loading").show();
                    $("#incomingData").hide();
                    let curr = new Date 
                    let week = []

                    for (let i = 1; i <= 7; i++) {
                      let first = curr.getDate() - curr.getDay() + i 
                      let day = new Date(curr.setDate(first)).format("%Y/%m/%d").slice(0, 10)
                      week.push(day)
                  }


                  var startDate = week[0];
                  var endDate = week[week.length - 1];
                  var filter_date = `${startDate} - ${endDate}`;
                  var warehouse_val = $('#warehouse_sub').val();
                  console.log($('#warehouse_sub').val());
                  console.log(filter_date);
                  localStorage.setItem('date', filter_date);


                  $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": warehouse_val,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {

                    console.log(response);
                    var add_tab = ""

                    if (response.status == '200') {
                        $(response.data).each(function(i,v){
                       $('#export_file').show();

                            console.log(v)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${parseFloat(v.opening_stock).toLocaleString()}</td>
                            <td>${parseFloat(v.qty_in).toLocaleString()}</td>
                            <td>${v.qty_out.toLocaleString()}</td>
                            <td>${v.closing_stock.toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    report_table(page);
                                }
                            });
                            $('#incomingData').html(add_tab);
                         // $("#tab_stock").show();
                         $("#loading").hide();
                         $("#incomingData").show();
                         

                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="5">${response.msg}</td>
                        </tr>`
                        $('#incomingData').html(no_rec);
                        $("#tab_stock").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

              }

              if($('#deleted_itms option:selected').val() == "last_week"){
                $("#loading").show();
                $("#incomingData").hide();
                if (page == "") {
                    var page = 1;
                }
                var limit = 10;
                let curr = new Date 
                let week = []

                for (let i = 1; i <= 7; i++) {
                  var first = curr.getDate() - curr.getDay() + i
                  var day = new Date(curr.setDate(first - 7)).format("%Y/%m/%d").slice(0, 10);
                  var last = curr.getDate() - curr.getDay() + 7;

                  week.push(day)
              }
              console.log(last) 

              var last = week[0].split('/')
              var test = (Number(last[last.length - 1]) + 6)
              var chk = test.toString().length < 2 ? `0${test}`: `{test}`
              last.splice(2, 1, chk)

              var startDate = week[0];
              var endDate = last.join(',').replace(/[',']/g,'/');
              var filter_date = `${startDate} - ${endDate}`;
              var warehouse_val = $('#warehouse_sub').val();
              localStorage.setItem('date', filter_date);
              console.log($('#warehouse_sub').val());
              console.log(filter_date)

              $.ajax({
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path + "wms/reports",
                data: {
                    "company_id": company_id, 
                    "warehouse_id": warehouse_id,
                    "limit": limit,
                    "page": page,
                    "report_type": warehouse_val,
                    "report_period": filter_date, 
                    "report_format": "json"

                },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                       $('#export_file').show();

                    console.log(response);
                    var add_tab = ""
                    if (response.status == '200') {
                       $('#export_file').show();

                        $(response.data).each(function(i,v){

                            console.log(v)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${parseFloat(v.opening_stock).toLocaleString()}</td>
                            <td>${parseFloat(v.qty_in).toLocaleString()}</td>
                            <td>${v.qty_out.toLocaleString()}</td>
                            <td>${v.closing_stock.toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    report_table(page);
                                }
                            });
                            $('#incomingData').html(add_tab);
                         // $("#tab_stock").show();
                         $("#loading").hide();
                         $("#incomingData").show();
                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="5">${response.msg}</td>
                        </tr>`
                        $('#incomingData').html(no_rec);
                        $("#tab_stock").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

          }
          if($('#deleted_itms option:selected').val() == "this_month"){
              $("#loading").show();
              $("#incomingData").hide();
                if (page == "") {
                    var page = 1;
                }
                var limit = 10;
              var date = new Date();
              var firstDay = new Date(date.getFullYear(), date.getMonth(), 1).format("%Y/%m/%d").slice(0, 10);
              var lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).format("%Y/%m/%d").slice(0, 10);

              var startDate = firstDay;
              var endDate = lastDay;
              var filter_date = `${startDate} - ${endDate}`;
              var warehouse_val = $('#warehouse_sub').val();
              localStorage.setItem('date', filter_date);
              console.log($('#warehouse_sub').val());
              console.log(filter_date)

              $.ajax({
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path + "wms/reports",
                data: {
                    "company_id": company_id, 
                    "warehouse_id": warehouse_id,
                    "report_type": warehouse_val,
                    "limit": limit,
                    "page": page,
                    "report_period": filter_date, 
                    "report_format": "json"

                },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {

                    console.log(response);
                    var add_tab = ""
                    if (response.status == '200') {
                       $('#export_file').show();

                        $(response.data).each(function(i,v){
                            console.log(v)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${parseFloat(v.opening_stock).toLocaleString()}</td>
                            <td>${parseFloat(v.qty_in).toLocaleString()}</td>
                            <td>${v.qty_out.toLocaleString()}</td>
                            <td>${v.closing_stock.toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    report_table(page);
                                }
                            });
                            $('#incomingData').html(add_tab);
                         // $("#tab_stock").show();
                         $("#loading").hide();
                         $("#incomingData").show();

                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="5">${response.msg}</td>
                        </tr>`
                        $('#incomingData').html(no_rec);
                        $("#tab_stock").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

          }



function quarter_ajax(page, filter_date){
         $("#loading").show();
             $("#incomingData").hide();
             if (page == "") {
                    var page = 1;
                }
                var limit = 10;
    $.ajax({
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path + "wms/reports",
                data: {
                    "company_id": company_id, 
                    "warehouse_id": warehouse_id,
                    "limit": limit,
                    "page": page,
                    "report_type": warehouse_val,
                    "report_period": filter_date, 
                    "report_format": "json",

                },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {

                    console.log(response);
                    var add_tab = ""
                    if (response.status == '200') {
                       $('#export_file').show();

                        $(response.data).each(function(i,v){
                            console.log(v)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${parseFloat(v.opening_stock).toLocaleString()}</td>
                            <td>${v.qty_in.toLocaleString()}</td>
                            <td>${v.qty_out.toLocaleString()}</td>
                            <td>${v.closing_stock.toLocaleString()}</td>
                            </tr>`
                            $('#incomingData').html(add_tab);
                         // $("#tab_stock").show();
                         $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                  quarter_ajax(page, filter_date);
                                }
                            });
                         $("#loading").hide();
                         $('#incomingData').show();
                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="5">${response.msg}</td>
                        </tr>`
                        $('#incomingData').html(no_rec);
                        $("#tab_stock").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

}

if($('#deleted_itms option:selected').val() == "this_quarter"){
             $("#loading").show();
             $("#incomingData").hide();
             if (page == "") {
                    var page = 1;
                }
                var limit = 10;
          var today = new Date();
          var quarter = Math.floor((today.getMonth() + 3) / 3);

          if(quarter == 1){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 3, 0);
           var startDate = `${d.getFullYear()}/01/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);
           quarter_ajax("", filter_date);
          }
          if(quarter == 2){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 6, 0);
           var startDate = `${d.getFullYear()}/04/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);
           quarter_ajax("", filter_date);
          }
          if(quarter == 3){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 9, 0);
           var startDate = `${d.getFullYear()}/07/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);
           quarter_ajax("", filter_date);
          }
          if(quarter == 4){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 12, 0);
           var startDate = `${d.getFullYear()}/10/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);
           quarter_ajax("", filter_date);
           
          }
}

          if($('#deleted_itms option:selected').val() == "this_year"){
             $("#loading").show();
             $("#incomingData").hide();

             var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
             var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
             var filter_date = `${startDate} - ${endDate}`;
             localStorage.setItem('date', filter_date);
             var warehouse_val = $('#warehouse_sub').val();
             console.log($('#warehouse_sub').val());
             console.log(filter_date)

             $.ajax({
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path + "wms/reports",
                data: {
                    "company_id": company_id, 
                    "warehouse_id": warehouse_id,
                    "limit": limit,
                    "page": page,
                    "report_type": warehouse_val,
                    "report_period": filter_date, 
                    "report_format": "json",

                },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {

                    console.log(response);
                    var add_tab = ""
                    if (response.status == '200') {
                       $('#export_file').show();

                        $(response.data).each(function(i,v){
                            console.log(v)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${parseFloat(v.opening_stock).toLocaleString()}</td>
                            <td>${parseFloat(v.qty_in).toLocaleString()}</td>
                            <td>${v.qty_out.toLocaleString()}</td>
                            <td>${v.closing_stock.toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    report_table(page);
                                }
                            });
                            $('#incomingData').html(add_tab);
                         // $("#tab_stock").show();
                         $("#loading").hide();
                         $('#incomingData').show();
                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="5">${response.msg}</td>
                        </tr>`
                        $('#incomingData').html(no_rec);
                        $("#tab_stock").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

         }


        else if($('#date_range').val().length > 1){

            console.log($('#date_range').val())

            $("#loading").show();
            $("#incomingData").hide();
            if (page == "") {
                    var page = 1;
                }
                var limit = 10;

                // var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
                // var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
                // var filter_date = `${startDate}-${endDate}`;
                // var warehouse_val = $('#warehouse_sub').val();
                // console.log($('#warehouse_sub').val());
                var filter_date = $('#date_range').val();
                localStorage.setItem('date', filter_date);


                $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": warehouse_val,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {

                    console.log(response);
                    var add_tab = ""
                    if (response.status == '200') {
                       $('#export_file').show();

                        $(response.data).each(function(i,v){
                            console.log(v)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${parseFloat(v.opening_stock).toLocaleString()}</td>
                            <td>${parseFloat(v.qty_in).toLocaleString()}</td>
                            <td>${v.qty_out.toLocaleString()}</td>
                            <td>${v.closing_stock.toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    report_table(page);
                                }
                            });
                            $('#incomingData').html(add_tab);
                         // $("#tab_stock").show();
                         $("#loading").hide();
                         $('#incomingData').show();
                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="5">${response.msg}</td>
                        </tr>`
                        $('#incomingData').html(no_rec);
                        $("#tab_stock").show();
                        // $('#pagination').twbsPagination({
                        //         totalPages: Math.ceil(response.total_rows / limit),
                        //         visiblePages: 10,
                        //         onPageClick: function(event, page) {
                        //         quarter_ajax_debt_vendor(page, filter_date);
                        //         }

                        console.log(`${response.msg}`)

                    }
                    // $('#date_range').val('');
                    console.log($('#date_range').val())

                    // $('#loader_row_' + list_id).hide();
                }
            })
            }
            // });

            // }
        // })
    }

         function quarter_ajax_debt_vendor(page, filter_date){
          $("#loading_debt_vendor").show();
             $("#incomingData_debt_vendor").hide();
        var warehouse_val = $('#warehouse_sub').val();
        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');
        
             if (page == "") {
                    var page = 1;
                }
                var limit = 10;
          var today = new Date();
          var quarter = Math.floor((today.getMonth() + 3) / 3);
          $.ajax({
                        type: "POST",
                        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                        url: api_path + "wms/reports",
                        data: {
                            "company_id": company_id, 
                            "warehouse_id": warehouse_id,
                            "limit": limit,
                            "page": page,
                            "report_type": $('#warehouse_sub').val(),
                            "report_period": filter_date, 
                            "report_format": "json"

                        },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {

                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.vendor}</td>
                            <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#incomingData_debt_vendor').html(add_tab);
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                quarter_ajax_debt_vendor(page, filter_date);
                                }
                            });
                         // $("#tab_stock").show();
                         $("#incomingData_debt_vendor").show();
                         $("#loading_debt_vendor").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_debt_vendor').html(no_rec);
                        $("#incomingData_debt_vendor").show();
                        $("#loading_debt_vendor").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

         }
         function quarter_ajax_credit_vendor(page, filter_date){
          $("#loading_credit_vendor").show();
             $("#incomingData_credit_vendor").hide();
        var warehouse_val = $('#warehouse_sub').val();
        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');
        
             if (page == "") {
                    var page = 1;
                }
                var limit = 10;
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                        url: api_path + "wms/reports",
                        data: {
                            "company_id": company_id, 
                            "warehouse_id": warehouse_id,
                            "limit": limit,
                            "page": page,
                            "report_type": $('#warehouse_sub').val(),
                            "report_period": filter_date, 
                            "report_format": "json"

                        },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {

                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.vendor}</td>
                             <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#incomingData_credit_vendor').html(add_tab);
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                  quarter_ajax_credit_vendor(page, filter_date);
                                }
                            });
                         // $("#tab_stock").show();
                         $("#incomingData_credit_vendor").show();
                         $("#loading_credit_vendor").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_credit_vendor').html(no_rec);
                        $("#incomingData_credit_vendor").show();
                        $("#loading_credit_vendor").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });
          
         }
         function quarter_ajax_recieve_history(page, filter_date){
           $("#loading_recieve_history").show();
             $("#incomingData_recieve_history").hide();
      var warehouse_val = $('#warehouse_sub').val();
        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');

        alert('here')
       
             if (page == "") {
                    var page = 1;
                }
                var limit = 10;
          $.ajax({
                        type: "POST",
                        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                        url: api_path + "wms/reports",
                        data: {
                            "company_id": company_id, 
                            "warehouse_id": warehouse_id,
                            "limit": limit,
                            "page": page,
                            "report_type": $('#warehouse_sub').val(),
                            "report_period": filter_date, 
                            "report_format": "json"

                        },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {

                    console.log(response.total_rows);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${v.qty}</td>
                            <td>${v.vendor}</td>
                            <td>${format_a_date(v.date_recieved)}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                 quarter_ajax_recieve_history(page, filter_date);
                                }
                            });
                            $('#incomingData_recieve_history').html(add_tab);
                            $("#incomingData_recieve_history").show();
                            $("#loading_recieve_history").hide();



                        })

                    } else if (response.status == '400'){

                        // alert('error 401')
                        $('#export_file').hide();

                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_recieve_history').html(no_rec);
                        $("#incomingData_recieve_history").show();
                        $("#loading_recieve_history").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });
          
         }
         function quarter_ajax_supply_history(page, filter_date){
            $("#loading_sup_history").show();
             $("#incomingData_sup_history").hide();
        var warehouse_val = $('#warehouse_sub').val();
        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');
      
             if (page == "") {
                    var page = 1;
                }
                var limit = 10;
          $.ajax({
                        type: "POST",
                headers: {'Authorization':localStorage.getItem('token') },

                        dataType: "json",
                        url: api_path + "wms/reports",
                        data: {
                            "company_id": company_id, 
                            "warehouse_id": warehouse_id,
                            "limit": limit,
                            "page": page,
                            "report_type": $('#warehouse_sub').val(),
                            "report_period": filter_date, 
                            "report_format": "json"

                        },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {

                    console.log(response.total_rows);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${v.qty.toLocaleString()}</td>
                            <td>${v.client.toLocaleString()}</td>
                            <td>${v.supply_date.toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                  quarter_ajax_supply_history(page, filter_date);
                                }
                            });
                            $('#incomingData_sup_history').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_sup_history").show();
                         $("#loading_sup_history").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_sup_history').html(no_rec);
                         $("#loading_sup_history").hide();
                        $("#incomingData_sup_history").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });
          
         }
         function quarter_ajax_client_balances(page, filter_date){
          $("#loading_client_balances").show();
             $("#incomingData_client_balances").hide();
          var warehouse_val = $('#warehouse_sub').val();
        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');

        if (page == "") {
                    var page = 1;
                }
                var limit = 10;
          $.ajax({
                        type: "POST",
                        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                        url: api_path + "wms/reports",
                        data: {
                            "company_id": company_id, 
                            "warehouse_id": warehouse_id,
                            "limit": limit,
                            "page": page,
                            "report_type": $('#warehouse_sub').val(),
                            "report_period": filter_date, 
                            "report_format": "json"

                        },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {

                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.vendor_name)
                            add_tab+=`<tr>
                            <td>${v.client}</td>
                            <td>${v.total_amount.toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    quarter_ajax_client_balances(page, filter_date);
                                }
                            });
                            $('#incomingData_client_balances').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_client_balances").show();
                         $("#loading_client_balances").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        $('#export_file').hide();
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td>${response.msg}</td>
                        </tr>`
                        $('#incomingData_client_balances').html(no_rec);
                        $("#incomingData_client_balances").show();
                        $("#loading_client_balances").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });
          
         }
          function quarter_ajax_sales_by_client(page, filter_date){
            $("#loading_sales_by_client").show();
             $("#incomingData_sales_by_client").hide();
            var warehouse_val = $('#warehouse_sub').val();
        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');
        if (page == "") {
                    var page = 1;
                }
                var limit = 10;
            $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": warehouse_val,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {

                    console.log(response);
                    var add_tab = ""

                    if (response.status == '200') {
                       $('#export_file').show();

                        $(response.data).each(function(i,v){
                            console.log(v)
                            add_tab+=`<tr>
                            <td>${v.client}</td>
                            <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    quarter_ajax_sales_by_client(page, filter_date);
                                }
                            });
                            $('#incomingData_sales_by_client').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_sales_by_client").show();
                         $("#loading_sales_by_client").hide();
                         

                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan = "2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_sales_by_client').html(no_rec);
                        $("#incomingData_sales_by_client").show();
                        $("#loading_sales_by_client").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });
          
         }
         function quarter_ajax_issue_order_history(page, filter_date){
          $("#loading_issue_order_history").show();
             $("#incomingData_issue_order_history").hide();

          var warehouse_val = $('#warehouse_sub').val();
        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');
        if (page == "") {
                    var page = 1;
                }
                var limit = 10;
          $.ajax({
                    type: "POST",
                headers: {'Authorization':localStorage.getItem('token') },

                    dataType: "json",
                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": warehouse_val,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    alert('connection error');
                },

                success: function(response) {

                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.batch_id}</td>
                            <td>${format_a_date(v.outgoing_date)}</td>
                            <td>${v.contact}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    quarter_ajax_issue_order_history(page, filter_date);
                                }
                            });
                            $('#incomingData_issue_order_history').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_issue_order_history").show();
                         $("#loading_issue_order_history").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="3">${response.msg}</td>
                        </tr>`
                        $('#incomingData_issue_order_history').html(no_rec);
                         $("#loading_issue_order_history").hide();
                        $("#incomingData_issue_order_history").show();



                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });
          
         }

         function quarter_ajax_summary_incoming(page, filter_date){
           $("#loading_stock_summary_incoming").show();
             $("#incomingData_stock_summary_incoming").hide();
          var warehouse_val = $('#warehouse_sub').val();
        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');
        if (page == "") {
                    var page = 1;
                }
                var limit = 10;
          $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": "stock balance summary",
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    alert('connection error');
                },

                success: function(response) {

                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${parseFloat(v.opening_stock).toLocaleString()}</td>
                            <td>${parseFloat(v.qty_in).toLocaleString()}</td>
                            <td>${v.closing_stock.toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    quarter_ajax_summary_incoming(page, filter_date);
                                }
                            });
                            $('#incomingData_stock_summary_incoming').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_stock_summary_incoming").show();
                         $("#loading_stock_summary_incoming").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_stock_summary_incoming').html(no_rec);
                         $("#loading_stock_summary_incoming").hide();
                        $("#incomingData_stock_summary_incoming").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

         }
         function quarter_ajax_summary_outgoing(page, filter_date){
          $("#loading_stock_summary_outgoing").show();
             $("#incomingData_stock_summary_outgoing").hide();
          var warehouse_val = $('#warehouse_sub').val();
        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');
        if (page == "") {
                    var page = 1;
                }
                var limit = 10;
          $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": "stock balance summary",
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    alert('connection error');
                },

                success: function(response) {

                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${parseFloat(v.opening_stock).toLocaleString()}</td>
                            <td>${v.qty_out.toLocaleString()}</td>
                            <td>${v.closing_stock.toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    quarter_ajax_summary_outgoing(page, filter_date);
                                }
                            });
                            $('#incomingData_stock_summary_outgoing').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_stock_summary_outgoing").show();
                         $("#loading_stock_summary_outgoing").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_stock_summary_outgoing').html(no_rec);
                        $("#stock_summary_outgoing").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

         }






    function issue_order_history(){
        $("#tab_stock").hide();
        $("#debt_vendor").hide();
        $("#recieve_history").hide();
        $("#sales_by_client").hide();
        $("#client_balances").hide();
        $("#credit_vendor").hide();
        $("#stock_summary_incoming").hide();
        $("#stock_summary_outgoing").hide();
        $('#sup_history').hide();
        $('#client').hide();
        $('#vendor').hide();
        $("#pagination").show();
        $("#issue_order_history").show();
        $("#incomingData_issue_order_history").show();
        var warehouse_val = $('#warehouse_sub').val();
        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');
        console.log($('#warehouse_sub').val());
        localStorage.setItem('report_type', warehouse_val);

              // $('select').on('change', function() {
                if (page == "") {
                    var page = 1;
                }
                var limit = 30;
                if($('#deleted_itms option:selected').val() == "today"){
                    $("#loading_issue_order_history").show();
                    $("#incomingData_issue_order_history").hide();
                    console.log($('select').val())
                    var warehouse_val = $('#warehouse_sub').val();
                    var startDate = new Date().format("%Y/%m/%d");
                    var endDate = new Date().format("%Y/%m/%d");
                    var filter_date = `${startDate} - ${endDate}`;
                    localStorage.setItem('date', filter_date);

                    // var warehouse_val = $('#sup_history').val();
                // console.log($('#sup_history').val());
                // console.log(filter_date)

                // var report_type = "stock balance summary";

                $.ajax({
                    type: "POST",
                headers: {'Authorization':localStorage.getItem('token') },

                    dataType: "json",
                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": warehouse_val,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    alert('connection error');
                },

                success: function(response) {

                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.batch_id}</td>
                            <td>${format_a_date(v.outgoing_date)}</td>
                            <td>${v.contact}</td>
                            </tr>`
                            $('#incomingData_issue_order_history').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_issue_order_history").show();
                         $("#loading_issue_order_history").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="3">${response.msg}</td>
                        </tr>`
                        $('#incomingData_issue_order_history').html(no_rec);
                         $("#loading_issue_order_history").hide();
                        $("#incomingData_issue_order_history").show();



                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

            }


            if($('#deleted_itms option:selected').val() == "yesterday"){
                $("#loading_issue_order_history").show();
                $("#incomingData_issue_order_history").hide();
                console.log($('select').val())
                var d = new Date();
                var yester = `${d.getFullYear()}/${d.getMonth() + 1}/${d.getDate() - 1}`;

                var startDate = yester;
                var endDate = yester;
                var filter_date = `${startDate} - ${endDate}`;
                localStorage.setItem('date', filter_date);

                var warehouse_val = $('#warehouse_sub').val();
                console.log($('#warehouse_sub').val());
                console.log(filter_date)

                $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": warehouse_val,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);

                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)

                            add_tab+=`<tr>
                            <td>${v.batch_id}</td>
                            <td>${format_a_date(v.outgoing_date)}</td>
                            <td>${v.contact}</td>
                            </tr>`
                            $('#incomingData_issue_order_history').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_issue_order_history").show();
                         $("#loading_issue_order_history").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="3">${response.msg}</td>
                        </tr>`
                        $('#incomingData_issue_order_history').html(no_rec);
                        $("#loading_issue_order_history").hide();
                        $("#incomingData_issue_order_history").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

            }



            if($('#deleted_itms option:selected').val() == "this_week"){

                $("#loading_issue_order_history").show();
                $("#incomingData_issue_order_history").hide();
                let curr = new Date 
                let week = []

                for (let i = 1; i <= 7; i++) {
                  let first = curr.getDate() - curr.getDay() + i 
                  let day = new Date(curr.setDate(first)).format("%Y/%m/%d").slice(0, 10)
                  week.push(day)
              }


              var startDate = week[0];
              var endDate = week[week.length - 1];
              var filter_date = `${startDate} - ${endDate}`;
              var warehouse_val = $('#warehouse_sub').val();
              console.log($('#warehouse_sub').val());
              console.log(filter_date);
              localStorage.setItem('date', filter_date);


              $.ajax({
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path + "wms/reports",
                data: {
                    "company_id": company_id, 
                    "warehouse_id": warehouse_id,
                    "limit": limit,
                    "page": page,
                    "report_type": warehouse_val,
                    "report_period": filter_date, 
                    "report_format": "json"

                },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {

                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.batch_id}</td>
                            <td>${format_a_date(v.outgoing_date)}</td>
                            <td>${v.contact}</td>
                            </tr>`
                            $('#incomingData_issue_order_history').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_issue_order_history").show();
                         $("#loading_issue_order_history").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="3">${response.msg}</td>
                        </tr>`
                        $('#incomingData_issue_order_history').html(no_rec);
                         $("#loading_issue_order_history").hide();
                        $("#incomingData_issue_order_history").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

          }

          if($('#deleted_itms option:selected').val() == "last_week"){
            $("#loading_issue_order_history").show();
            $("#incomingData_issue_order_history").hide();
            let curr = new Date 
            let week = []

            for (let i = 1; i <= 7; i++) {
              var first = curr.getDate() - curr.getDay() + i
              var day = new Date(curr.setDate(first - 7)).format("%Y/%m/%d").slice(0, 10);
              var last = curr.getDate() - curr.getDay() + 7;

              week.push(day)
          }
          console.log(last) 

          var last = week[0].split('/')
          var test = (Number(last[last.length - 1]) + 6)
          var chk = test.toString().length < 2 ? `0${test}`: `${test}`
          last.splice(2, 1, chk)

          var startDate = week[0];
          var endDate = last.join(',').replace(/[',']/g,'/');
          var filter_date = `${startDate} - ${endDate}`;
          var warehouse_val = $('#warehouse_sub').val();
          console.log($('#warehouse_sub').val());
          localStorage.setItem('date', filter_date);
          

          $.ajax({
            type: "POST",
            dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

            url: api_path + "wms/reports",
            data: {
                "company_id": company_id, 
                "warehouse_id": warehouse_id,
                "limit": limit,
                "page": page,
                "report_type": warehouse_val,
                "report_period": filter_date, 
                "report_format": "json"

            },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {

                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)

                            add_tab+=`<tr>
                            <td>${v.batch_id}</td>
                            <td>${format_a_date(v.outgoing_date)}</td>
                            <td>${v.contact}</td>
                            </tr>`
                            $('#incomingData_issue_order_history').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_issue_order_history").show();
                         $("#loading_issue_order_history").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="3">${response.msg}</td>
                        </tr>`
                        $('#incomingData_issue_order_history').html(no_rec);
                        $("#loading_issue_order_history").hide();
                        $("#incomingData_issue_order_history").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

      }
      if($('#deleted_itms option:selected').val() == "this_month"){
          $("#loading_issue_order_history").show();
            $("#incomingData_issue_order_history").hide();

          var date = new Date();
          var firstDay = new Date(date.getFullYear(), date.getMonth(), 1).format("%Y/%m/%d").slice(0, 10);
          var lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).format("%Y/%m/%d").slice(0, 10);

          var startDate = firstDay;
          var endDate = lastDay;
          var filter_date = `${startDate} - ${endDate}`;
          var warehouse_val = $('#warehouse_sub').val();
          console.log($('#warehouse_sub').val());
          console.log(filter_date);
          localStorage.setItem('date', filter_date);


          $.ajax({
            type: "POST",
            dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

            url: api_path + "wms/reports",
            data: {
                "company_id": company_id, 
                "warehouse_id": warehouse_id,
                "report_type": warehouse_val,
                "limit": limit,
                "page": page,
                "report_period": filter_date, 
                "report_format": "json"

            },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {

                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.batch_id}</td>
                            <td>${format_a_date(v.outgoing_date)}</td>
                            <td>${v.contact}</td>
                            </tr>`
                            $('#incomingData_issue_order_history').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_issue_order_history").show();
                         $("#loading_issue_order_history").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="3">${response.msg}</td>
                        </tr>`
                        $('#incomingData_issue_order_history').html(no_rec);
                         $("#loading_issue_order_history").hide();
                        $("#incomingData_issue_order_history").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

      }

      if($('#deleted_itms option:selected').val() == "this_quarter"){
             $("#loading").show();
             $("#incomingData").hide();
             if (page == "") {
                    var page = 1;
                }
                var limit = 10;
          var today = new Date();
          var quarter = Math.floor((today.getMonth() + 3) / 3);

          if(quarter == 1){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 3, 0);
           var startDate = `${d.getFullYear()}/01/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);
           quarter_ajax_issue_order_history("", filter_date);
           
          }
          if(quarter == 2){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 6, 0);
           var startDate = `${d.getFullYear()}/04/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);
           quarter_ajax_issue_order_history();
          }
          if(quarter == 3){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 9, 0);
           var startDate = `${d.getFullYear()}/07/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);
           quarter_ajax_issue_order_history();
          }
          if(quarter == 4){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 12, 0);
           var startDate = `${d.getFullYear()}/10/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);
           quarter_ajax_issue_order_history();
          }
}

      if($('#deleted_itms option:selected').val() == "this_year"){
         $("#loading_issue_order_history").show();
         $("#incomingData_issue_order_history").hide();

         var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
         var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
         var filter_date = `${startDate} - ${endDate}`;
         localStorage.setItem('date', filter_date);

         var warehouse_val = $('#warehouse_sub').val();
         console.log($('#warehouse_sub').val());
         console.log(filter_date)

         $.ajax({
            type: "POST",
            dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

            url: api_path + "wms/reports",
            data: {
                "company_id": company_id, 
                "warehouse_id": warehouse_id,
                "limit": limit,
                "page": page,
                "report_type": warehouse_val,
                "report_period": filter_date, 
                "report_format": "json",
              

            },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {

                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.batch_id}</td>
                            <td>${format_a_date(v.outgoing_date)}</td>
                            <td>${v.contact}</td>
                            </tr>`
                            $('#incomingData_issue_order_history').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_issue_order_history").show();
                         $("#loading_issue_order_history").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="3">${response.msg}</td>
                        </tr>`
                        $('#incomingData_issue_order_history').html(no_rec);
                         $("#loading_issue_order_history").hide();
                        $("#incomingData_issue_order_history").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });
     }


     else if($('#date_range').val().length > 1){

        console.log($('#date_range').val())

        $("#loading_issue_order_history").show();
        $("#incomingData_issue_order_history").hide();

                // var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
                // var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
                // var filter_date = `${startDate}-${endDate}`;
                // var warehouse_val = $('#warehouse_sub').val();
                // console.log($('#warehouse_sub').val());
                var filter_date = $('#date_range').val();
                localStorage.setItem('date', filter_date);


                $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": warehouse_val,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {

                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.batch_id}</td>
                            <td>${format_a_date(v.outgoing_date)}</td>
                            <td>${v.contact}</td>
                            </tr>`
                            $('#incomingData_issue_order_history').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_issue_order_history").show();
                         $("#loading_issue_order_history").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="3">${response.msg}</td>
                        </tr>`
                        $('#incomingData_issue_order_history').html(no_rec);
                         $("#loading_issue_order_history").hide();
                        $("#incomingData_issue_order_history").show();

                        console.log(`${response.msg}`)

                    }
                    // $('#date_range').val('');

                    // $('#loader_row_' + list_id).hide();
                }
            })
            }
            // });

            // }




        // })
    }






    function stock_summary_incoming(page){
        $("#tab_stock").hide();
        $("#debt_vendor").hide();
        $("#recieve_history").hide();
        $("#sales_by_client").hide();
        $("#client_balances").hide();
        $("#supply_history").hide();
        $("#credit_vendor").hide();
        $("#stock_summary_outgoing").hide();
        $("#issue_order_history").hide();
        $('#client').hide();
        $('#vendor').hide();
        $("#pagination").show();
        $("#stock_summary_incoming").show();
        $("#incomingData_stock_summary_incoming").show();
        var warehouse_val = $('#warehouse_sub').val();
        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');
        console.log($('#warehouse_sub').val());
        localStorage.setItem('report_type', warehouse_val);

              // $('select').on('change', function() {
                if (page == "") {
                    var page = 1;
                }
                var limit = 10;
                var report_type = "stock balance summary";
                if($('#deleted_itms option:selected').val() == "today"){
                    $("#loading_sup_history").show();
                    $("#incomingData_sup_history").hide();
                    console.log($('select').val());
                    var warehouse_val = $('#warehouse_sub').val();
                    var startDate = new Date().format("%Y/%m/%d");
                    var endDate = new Date().format("%Y/%m/%d");
                    var filter_date = `${startDate} - ${endDate}`;
                    localStorage.setItem('date', filter_date);



                // var warehouse_val = $('#sup_history').val();
                // console.log($('#sup_history').val());
                // console.log(filter_date)


                $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": report_type,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    alert('connection error');
                },

                success: function(response) {

                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${parseFloat(v.opening_stock).toLocaleString()}</td>
                            <td>${parseFloat(v.qty_in).toLocaleString()}</td>
                            <td>${v.closing_stock.toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    stock_summary_incoming(page);
                                }
                            });
                            $('#incomingData_stock_summary_incoming').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_stock_summary_incoming").show();
                         $("#loading_stock_summary_incoming").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_stock_summary_incoming').html(no_rec);
                         $("#loading_stock_summary_incoming").hide();
                        $("#incomingData_stock_summary_incoming").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

            }


            if($('#deleted_itms option:selected').val() == "yesterday"){
                $("#loading_stock_summary_incoming").show();
                $("#incomingData_stock_summary_incoming").hide();
                console.log($('select').val())
                var d = new Date();
                var yester = `${d.getFullYear()}/${d.getMonth() + 1}/${d.getDate() - 1}`;

                var startDate = yester;
                var endDate = yester;
                var filter_date = `${startDate} - ${endDate}`;
                var warehouse_val = $('#warehouse_sub').val();
                console.log($('#warehouse_sub').val());
                console.log(filter_date);

                if (page == "") {
                    var page = 1;
                }
                var limit = 10;

                $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": report_type,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {


                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${parseFloat(v.opening_stock).toLocaleString()}</td>
                            <td>${parseFloat(v.qty_in).toLocaleString()}</td>
                            <td>${v.closing_stock.toLocaleString()}</td>
                            </tr>`
                            $('#incomingData_stock_summary_incoming').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_stock_summary_incoming").show();
                         $("#loading_stock_summary_incoming").hide();


                     })

                    } else if (response.status == '400'){
                        // alert('error 401')
                       $('#export_file').hide();

                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_stock_summary_incoming').html(no_rec);
                        $("#loading_stock_summary_incoming").hide();
                        $("#incomingData_stock_summary_incoming").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

            }



            if($('#deleted_itms option:selected').val() == "this_week"){

                $("#loading_stock_summary_incoming").show();
                $("#incomingData_stock_summary_incoming").hide();
                let curr = new Date 
                let week = []

                for (let i = 1; i <= 7; i++) {
                  let first = curr.getDate() - curr.getDay() + i 
                  let day = new Date(curr.setDate(first)).format("%Y/%m/%d").slice(0, 10)
                  week.push(day)
              }


              var startDate = week[0];
              var endDate = week[week.length - 1];
              var filter_date = `${startDate} - ${endDate}`;
              var warehouse_val = $('#warehouse_sub').val();
              console.log($('#warehouse_sub').val());
              console.log(filter_date);
              localStorage.setItem('date', filter_date);


              if (page == "") {
                    var page = 1;
                }
                var limit = 10;

              $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": report_type,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${parseFloat(v.opening_stock).toLocaleString()}</td>
                            <td>${parseFloat(v.qty_in).toLocaleString()}</td>
                            <td>${v.closing_stock.toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    stock_summary_incoming(page);
                                }
                            });
                            $('#incomingData_stock_summary_incoming').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_stock_summary_incoming").show();
                         $("#loading_stock_summary_incoming").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_stock_summary_incoming').html(no_rec);
                       $("#loading_stock_summary_incoming").hide();
                        $("#incomingData_stock_summary_incoming").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

          }

          if($('#deleted_itms option:selected').val() == "last_week"){
            $("#loading_stock_summary_incoming").show();
            $("#incomingData_stock_summary_incoming").hide();
            let curr = new Date 
            let week = []

            for (let i = 1; i <= 7; i++) {
              var first = curr.getDate() - curr.getDay() + i
              var day = new Date(curr.setDate(first - 7)).format("%Y/%m/%d").slice(0, 10);
              var last = curr.getDate() - curr.getDay() + 7;

              week.push(day)
          }
          console.log(last) 

          var last = week[0].split('/')
          var test = (Number(last[last.length - 1]) + 6)
          var chk = test.toString().length < 2 ? `0${test}`: `${test}`
          last.splice(2, 1, chk)

          var startDate = week[0];
          var endDate = last.join(',').replace(/[',']/g,'/');
          var filter_date = `${startDate} - ${endDate}`;
          localStorage.setItem('date', filter_date);
          var warehouse_val = $('#warehouse_sub').val();
          console.log($('#warehouse_sub').val());
          console.log(filter_date);

          if (page == "") {
                    var page = 1;
                }
                var limit = 10;

          $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": report_type,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${parseFloat(v.opening_stock).toLocaleString()}</td>
                            <td>${parseFloat(v.qty_in).toLocaleString()}</td>
                            <td>${v.closing_stock.toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    stock_summary_incoming(page);
                                }
                            });
                            $('#incomingData_stock_summary_incoming').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_stock_summary_incoming").show();
                         $("#loading_stock_summary_incoming").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_stock_summary_incoming').html(no_rec);
                        $("#stock_summary_incoming").show();
                        $("#loading_stock_summary_incoming").hide();
                        console.log(`${response.msg}`)
                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

      }
      if($('#deleted_itms option:selected').val() == "this_month"){
          $("#loading_stock_summary_incoming").show();
          $("#incomingData_stock_summary_incoming").hide();

          var date = new Date();
          var firstDay = new Date(date.getFullYear(), date.getMonth(), 1).format("%Y/%m/%d").slice(0, 10);
          var lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).format("%Y/%m/%d").slice(0, 10);

          var startDate = firstDay;
          var endDate = lastDay;
          var filter_date = `${startDate} - ${endDate}`;
          var warehouse_val = $('#warehouse_sub').val();
          console.log($('#warehouse_sub').val());
          console.log(filter_date);
          localStorage.setItem('date', filter_date);


          if (page == "") {
                    var page = 1;
                }
                var limit = 10;

          $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": report_type,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${parseFloat(v.opening_stock).toLocaleString()}</td>
                            <td>${parseFloat(v.qty_in).toLocaleString()}</td>
                            <td>${v.closing_stock.toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    stock_summary_incoming(page);
                                }
                            });
                            $('#incomingData_stock_summary_incoming').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_stock_summary_incoming").show();
                         $("#loading_stock_summary_incoming").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_stock_summary_incoming').html(no_rec);
                        $("#loading_stock_summary_incoming").hide();
                        $("#incomingData_stock_summary_incoming").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

      }

       if($('#deleted_itms option:selected').val() == "this_quarter"){
             $("#loading").show();
             $("#incomingData").hide();
             if (page == "") {
                    var page = 1;
                }
                var limit = 10;
          var today = new Date();
          var quarter = Math.floor((today.getMonth() + 3) / 3);

          if(quarter == 1){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 3, 0);
           var startDate = `${d.getFullYear()}/01/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);
           quarter_ajax_summary_incoming("", filter_date);
          }
          if(quarter == 2){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 6, 0);
           var startDate = `${d.getFullYear()}/04/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           
           localStorage.setItem('date', filter_date);
           quarter_ajax_summary_incoming("", filter_date);
          }
          if(quarter == 3){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 9, 0);
           var startDate = `${d.getFullYear()}/07/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_summary_incoming("", filter_date);

          }
          if(quarter == 4){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 12, 0);
           var startDate = `${d.getFullYear()}/10/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_summary_incoming("", filter_date);

          }
}

      if($('#deleted_itms option:selected').val() == "this_year"){
         $("#loading_stock_summary_incoming").show();
         $("#incomingData_stock_summary_incoming").hide();

         var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
         var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
         var filter_date = `${startDate} - ${endDate}`;
         var warehouse_val = $('#warehouse_sub').val();
         localStorage.setItem('date', filter_date);

         console.log($('#warehouse_sub').val());
         console.log(filter_date);

         if (page == "") {
                    var page = 1;
                }
                var limit = 10;

         $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": report_type,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${parseFloat(v.opening_stock).toLocaleString()}</td>
                            <td>${parseFloat(v.qty_in).toLocaleString()}</td>
                            <td>${v.closing_stock.toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    stock_summary_incoming(page);
                                }
                            });
                            $('#incomingData_stock_summary_incoming').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_stock_summary_incoming").show();
                         $("#loading_stock_summary_incoming").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_stock_summary_incoming').html(no_rec);
                        $("#stock_summary_incoming").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

     }


     if($('#date_range').val()){

        console.log($('#date_range').val())

        $("#loading_stock_summary_incoming").show();
        $("#incomingData_stock_summary_incoming").hide();

                // var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
                // var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
                // var filter_date = `${startDate}-${endDate}`;
                // var warehouse_val = $('#warehouse_sub').val();
                // console.log($('#warehouse_sub').val());
                var filter_date = $('#date_range').val();
                localStorage.setItem('date', filter_date);


                if (page == "") {
                    var page = 1;
                }
                var limit = 10;

                $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": report_type,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${parseFloat(v.opening_stock).toLocaleString()}</td>
                            <td>${parseFloat(v.qty_in).toLocaleString()}</td>
                            <td>${v.closing_stock.toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    stock_summary_incoming(page);
                                }
                            });
                            $('#incomingData_stock_summary_incoming').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_stock_summary_incoming").show();
                         $("#loading_stock_summary_incoming").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_stock_summary_incoming').html(no_rec);
                        $("#stock_summary_incoming").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                    // $('#date_range').val('');
                }
            })
            }
    }



    function stock_summary_outgoing(page){
        $("#tab_stock").hide();
        $("#debt_vendor").hide();
        $("#recieve_history").hide();
        $("#sales_by_client").hide();
        $("#client_balances").hide();
        $("#credit_vendor").hide();
        $("#issue_order_history").hide();
        $("#stock_summary_incoming").hide();
        $('#sup_history').hide();
        $('#client').hide();
        $('#vendor').hide();
        $("#pagination").show();
        $("#stock_summary_outgoing").show();
        $("#incomingData_stock_summary_outgoing").show();
        var warehouse_val = $('#warehouse_sub').val();
        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');
        console.log($('#warehouse_sub').val());
        localStorage.setItem('report_type', warehouse_val);

              // $('select').on('change', function() {
                if (page == "") {
                    var page = 1;
                }
                var report_type = "stock balance summary";
                var limit = 10;
                if($('#deleted_itms option:selected').val() == "today"){
                    $("#loading_stock_summary_outgoing").show();
                    $("#incomingData_stock_summary_outgoing").hide();
                    console.log($('select').val())
                    var warehouse_val = $('#warehouse_sub').val();
                    var startDate = new Date().format("%Y/%m/%d");
                    var endDate = new Date().format("%Y/%m/%d");
                    var filter_date = `${startDate} - ${endDate}`;
                    localStorage.setItem('date', filter_date);


                // var warehouse_val = $('#sup_history').val();
                // console.log($('#sup_history').val());
                // console.log(filter_date)


                $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": report_type,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${parseFloat(v.opening_stock).toLocaleString()}</td>
                            <td>${v.qty_out.toLocaleString()}</td>
                            <td>${v.closing_stock.toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    stock_summary_outgoing(page);
                                }
                            });
                            $('#incomingData_stock_summary_outgoing').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_stock_summary_outgoing").show();
                         $("#loading_stock_summary_outgoing").hide();
                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_stock_summary_outgoing').html(no_rec);
                        $("#stock_summary_outgoing").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

            }


            if($('#deleted_itms option:selected').val() == "yesterday"){
                $("#loading_stock_summary_outgoing").show();
                    $("#incomingData_stock_summary_outgoing").hide();
                console.log($('select').val())
                var d = new Date();
                var yester = `${d.getFullYear()}/${d.getMonth() + 1}/${d.getDate() - 1}`;

                var startDate = yester;
                var endDate = yester;
                var filter_date = `${startDate} - ${endDate}`;
                var warehouse_val = $('#warehouse_sub').val();
                console.log($('#warehouse_sub').val());
                console.log(filter_date);
                localStorage.setItem('date', filter_date);


                $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": report_type,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${parseFloat(v.opening_stock).toLocaleString()}</td>
                            <td>${v.qty_out.toLocaleString()}</td>
                            <td>${v.closing_stock.toLocaleString()}</td>
                            </tr>`
                             $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    stock_summary_outgoing(page);
                                }
                            });
                            $('#incomingData_stock_summary_outgoing').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_stock_summary_outgoing").show();
                         $("#loading_stock_summary_outgoing").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_stock_summary_outgoing').html(no_rec);
                        $("#stock_summary_outgoing").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

            }



            if($('#deleted_itms option:selected').val() == "this_week"){

                $("#loading_stock_summary_outgoing").show();
                    $("#incomingData_stock_summary_outgoing").hide();
                let curr = new Date 
                let week = []

                for (let i = 1; i <= 7; i++) {
                  let first = curr.getDate() - curr.getDay() + i 
                  let day = new Date(curr.setDate(first)).format("%Y/%m/%d").slice(0, 10)
                  week.push(day)
              }


              var startDate = week[0];
              var endDate = week[week.length - 1];
              var filter_date = `${startDate} - ${endDate}`;
              localStorage.setItem('date', filter_date);
              var warehouse_val = $('#warehouse_sub').val();
              console.log($('#warehouse_sub').val());
              console.log(filter_date)

              $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": report_type,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${parseFloat(v.opening_stock).toLocaleString()}</td>
                            <td>${v.qty_out.toLocaleString()}</td>
                            <td>${v.closing_stock.toLocaleString()}</td>
                            </tr>`
                             $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    stock_summary_outgoing(page);
                                }
                            });
                            $('#incomingData_stock_summary_outgoing').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_stock_summary_outgoing").show();
                         $("#loading_stock_summary_outgoing").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_stock_summary_outgoing').html(no_rec);
                        $("#stock_summary_outgoing").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

          }

          if($('#deleted_itms option:selected').val() == "last_week"){
            $("#loading_stock_summary_outgoing").show();
                    $("#incomingData_stock_summary_outgoing").hide();
            let curr = new Date 
            let week = []

            for (let i = 1; i <= 7; i++) {
              var first = curr.getDate() - curr.getDay() + i
              var day = new Date(curr.setDate(first - 7)).format("%Y/%m/%d").slice(0, 10);
              var last = curr.getDate() - curr.getDay() + 7;

              week.push(day)
          }
          console.log(last) 

          var last = week[0].split('/')
          var test = (Number(last[last.length - 1]) + 6)
          var chk = test.toString().length < 2 ? `0${test}`: `{test}`
          last.splice(2, 1, chk);

          var startDate = week[0];
          var endDate = last.join(',').replace(/[',']/g,'/');
          var filter_date = `${startDate} - ${endDate}`;
          localStorage.setItem('date', filter_date);
          var warehouse_val = $('#warehouse_sub').val();
          console.log($('#warehouse_sub').val());
          console.log(filter_date)

          $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": report_type,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${parseFloat(v.opening_stock).toLocaleString()}</td>
                            <td>${v.qty_out.toLocaleString()}</td>
                            <td>${v.closing_stock.toLocaleString()}</td>
                            </tr>`
                             $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    stock_summary_outgoing(page);
                                }
                            });
                            $('#incomingData_stock_summary_outgoing').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_stock_summary_outgoing").show();
                         $("#loading_stock_summary_outgoing").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_stock_summary_outgoing').html(no_rec);
                        $("#stock_summary_outgoing").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

      }
      if($('#deleted_itms option:selected').val() == "this_month"){
          $("#loading_stock_summary_outgoing").show();
                    $("#incomingData_stock_summary_outgoing").hide();

          var date = new Date();
          var firstDay = new Date(date.getFullYear(), date.getMonth(), 1).format("%Y/%m/%d").slice(0, 10);
          var lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).format("%Y/%m/%d").slice(0, 10);

          var startDate = firstDay;
          var endDate = lastDay;
          var filter_date = `${startDate} - ${endDate}`;
          var warehouse_val = $('#warehouse_sub').val();
          console.log($('#warehouse_sub').val());
          console.log(filter_date);
          localStorage.setItem('date', filter_date);


          $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": report_type,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
          
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${parseFloat(v.opening_stock).toLocaleString()}</td>
                            <td>${v.qty_out.toLocaleString()}</td>
                            <td>${v.closing_stock.toLocaleString()}</td>
                            </tr>`
                             $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    stock_summary_outgoing(page);
                                }
                            });
                            $('#incomingData_stock_summary_outgoing').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_stock_summary_outgoing").show();
                         $("#loading_stock_summary_outgoing").hide();


                     })

                    } else if (response.status == '400'){
                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_stock_summary_outgoing').html(no_rec);
                        $("#stock_summary_outgoing").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

      }

      if($('#deleted_itms option:selected').val() == "this_quarter"){
             $("#loading").show();
             $("#incomingData").hide();
             if (page == "") {
                    var page = 1;
                }
                var limit = 10;
          var today = new Date();
          var quarter = Math.floor((today.getMonth() + 3) / 3);

          if(quarter == 1){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 3, 0);
           var startDate = `${d.getFullYear()}/01/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);
           quarter_ajax_summary_outgoing("", filter_date);
          }
          if(quarter == 2){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 6, 0);
           var startDate = `${d.getFullYear()}/04/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_summary_outgoing("", filter_date);
          }
          if(quarter == 3){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 9, 0);
           var startDate = `${d.getFullYear()}/07/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_summary_outgoing("", filter_date);

          }
          if(quarter == 4){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 12, 0);
           var startDate = `${d.getFullYear()}/10/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_summary_outgoing("", filter_date);

          }
}

      if($('#deleted_itms option:selected').val() == "this_year"){
         $("#loading_stock_summary_outgoing").show();
                    $("#incomingData_stock_summary_outgoing").hide();

         var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
         var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
         var filter_date = `${startDate} - ${endDate}`;
         var warehouse_val = $('#warehouse_sub').val();
         console.log($('#warehouse_sub').val());
         console.log(filter_date);
         localStorage.setItem('date', filter_date);


         $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": report_type,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${parseFloat(v.opening_stock).toLocaleString()}</td>
                            <td>${v.qty_out.toLocaleString()}</td>
                            <td>${v.closing_stock.toLocaleString()}</td>
                            </tr>`
                             $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    stock_summary_outgoing(page);
                                }
                            });
                            $('#incomingData_stock_summary_outgoing').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_stock_summary_outgoing").show();
                         $("#loading_stock_summary_outgoing").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_stock_summary_outgoing').html(no_rec);
                        $("#stock_summary_outgoing").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

     }


     if($('#date_range').val()){

        console.log($('#date_range').val())

        $("#loading_stock_summary_outgoing").show();
                    $("#incomingData_stock_summary_outgoing").hide();

                // var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
                // var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
                // var filter_date = `${startDate}-${endDate}`;
                // var warehouse_val = $('#warehouse_sub').val();
                // console.log($('#warehouse_sub').val());
                var filter_date = $('#date_range').val();
                localStorage.setItem('date', filter_date);


                $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": report_type,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${parseFloat(v.opening_stock).toLocaleString()}</td>
                            <td>${v.qty_out.toLocaleString()}</td>
                            <td>${v.closing_stock.toLocaleString()}</td>
                            </tr>`
                             $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    stock_summary_outgoing(page);
                                }
                            });
                            $('#incomingData_stock_summary_outgoing').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_stock_summary_outgoing").show();
                         $("#loading_stock_summary_outgoing").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_stock_summary_outgoing').html(no_rec);
                        $("#stock_summary_outgoing").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                    // $('#date_range').val('');
                }
            })
            }
            // });

            // }




        // })
    }

function ajax_filt(item_id){
     var warehouse_val = $('#warehouse_sub').val();
        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');
        var warehouse_val = $('#warehouse_sub').val();
        var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
        var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
        var filter_date = `${startDate} - ${endDate}`;
        var warehouse_val = $('#sup_history').val();
        localStorage.setItem('vendor', item_id);

    if (page == "") {
        var page = 1;
                    }
                var limit = 30;
                $("#loading_sup_history").show();
                    $("#incomingData_sup_history").hide();
                $.ajax({
                        type: "POST",
                        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                        url: api_path + "wms/reports",
                        data: {
                            "company_id": company_id, 
                            "warehouse_id": warehouse_id,
                            "client_id": $("#client_text").val(),
                            "limit": limit,
                            "page": page,
                            "report_type": $('#warehouse_sub').val(),
                            "report_period": filter_date, 
                            "report_format": "json"
                        },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(`${format_a_date(v.supply_date)}`)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${v.qty}</td>
                            <td>${v.client}</td>
                            <td>${format_a_date(v.supply_date)}</td>
                            </tr>`
                            $('#incomingData_sup_history').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_sup_history").show();
                         $("#loading_sup_history").hide();
                          download_pdf();
                         download_csv();

                     })

            }
            else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_sup_history').html(no_rec);
                         $("#loading_sup_history").hide();
                        $("#incomingData_sup_history").show();

                        console.log(`${response.msg}`)

                    }
}
})
}


function ajax_filter_vendor(page,item_id){
     var warehouse_val = $('#warehouse_sub').val();
        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');
        var warehouse_val = $('#warehouse_sub').val();
        var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
        var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
        var filter_date = `${startDate} - ${endDate}`;
        var warehouse_val = $('#recieve_history').val();
        localStorage.setItem('vendor', item_id);
    if (page == "") {
        var page = 1;
                    }
                var limit = 10;
                $("#loading_recieve_history").show();
                    $("#incomingData_recieve_history").hide();
                $.ajax({
                        type: "POST",
                        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                        url: api_path + "wms/reports",
                        data: {
                            "company_id": company_id, 
                            "warehouse_id": warehouse_id,
                            "vendor_id": item_id,
                            "limit": limit,
                            "page": page,
                            "report_type": $('#warehouse_sub').val(),
                            "report_period": filter_date, 
                            "report_format": "json"

                        },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${v.qty}</td>
                            <td>${v.vendor}</td>
                            <td>${format_a_date(v.date_recieved)}</td>
                            </tr>`
                            $('#incomingData_recieve_history').html(add_tab);
                            console.log(response.total_rows);
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    recieve_history(page);
                                }
                            });
                         // $("#tab_stock").show();
                         $("#incomingData_recieve_history").show();
                         $("#loading_recieve_history").hide();
                         download_pdf();
                         download_csv();



                     })

            }
            else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_recieve_history').html(no_rec);
                         $("#loading_recieve_history").hide();
                        $("#incomingData_recieve_history").show();

                        console.log(`${response.msg}`)

                    }
}
})
}

function ajax_filter_payment_debt(page,item_id){
        var warehouse_val = $('#warehouse_sub').val();
        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');
        var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
        var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
        var filter_date = `${startDate} - ${endDate}`;
        localStorage.setItem('vendor', item_id);

    if (page == "") {
        var page = 1;
                    }
                var limit = 10;
                console.log(item_id);
                $("#loading_debt_vendor").show();
                    $("#incomingData_debt_vendor").hide();
                $.ajax({
                        type: "POST",
                        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                        url: api_path + "wms/reports",
                        data: {
                            "company_id": company_id, 
                            "warehouse_id": warehouse_id,
                            "vendor_id": item_id,
                            "limit": limit,
                            "page": page,
                            "report_type": $('#warehouse_sub').val(),
                            "report_period": filter_date, 
                            "report_format": "json"

                        },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.vendor}</td>
                            <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#incomingData_debt_vendor').html(add_tab);
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    debt_vendor(page);
                                }
                            });
                         // $("#tab_stock").show();
                         $("#incomingData_debt_vendor").show();
                         $("#loading_debt_vendor").hide();
                          download_pdf();
                         download_csv();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_debt_vendor').html(no_rec);
                        $("#incomingData_debt_vendor").show();
                        $("#loading_debt_vendor").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });
}



function ajax_filter_payment(page,item_id){
        // var warehouse_val = $('#warehouse_sub').val();
        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');
        console.log($('#warehouse_sub').val())
        if (page == "") {
                    var page = 1;
                }
                var limit = 10;
                console.log(item_id);
               $("#loading_credit_vendor").show();
                    $("#incomingData_credit_vendor").hide();
                    console.log($('select').val())
                    var warehouse_val = $('#warehouse_sub').val();
                    var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
                    var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
                    var filter_date = `${startDate} - ${endDate}`;
                    var warehouse_val = $('#sup_history').val();
                    localStorage.setItem('vendor', item_id);

                    console.log($('#sup_history').val());
                    console.log(filter_date)

                    $.ajax({
                        type: "POST",
                        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                        url: api_path + "wms/reports",
                        data: {
                            "company_id": company_id, 
                            "warehouse_id": warehouse_id,
                            "vendor_id": item_id,
                            "limit": limit,
                            "page": page,
                            "report_type": $('#warehouse_sub').val(),
                            "report_period": filter_date, 
                            "report_format": "json"

                        },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.vendor}</td>
                             <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#incomingData_credit_vendor').html(add_tab);
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                   credit_vendor(page);
                                }
                            });
                         // $("#tab_stock").show();
                         $("#incomingData_credit_vendor").show();
                         $("#loading_credit_vendor").hide();
                          download_pdf();
                          download_csv();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_credit_vendor').html(no_rec);
                        $("#incomingData_credit_vendor").show();
                        $("#loading_credit_vendor").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });


                }

  $("#client_name").autocomplete({

              source: function( request, response ) {
               // Fetch data
               console.log(response);
               $.ajax({

                  url: api_path+"wms/vendors_autocomplete",
                  type: 'post',
                headers: {'Authorization':localStorage.getItem('token') },

                  dataType: "json",
                  data: {
                   term: request.term,
                   company_id: localStorage.getItem('company_id')
               },
               success: function( data ) {
                   response( data );
                   console.log(data);
                   // console.log(company_id);
                   console.log(request.term);
               }

           });
           },
           minLength: 1,
           select: function (event, ui) {

            console.log(ui.item.id);
                // Set selection
                $("#client_name").val(ui.item.label);
                $("#v_client_name").show(ui.item.label);
                $("#v_client_name").val(ui.item.label);
                $("#client_name").html(ui.item.label);
                $("#client_text").val(ui.item.id);


                // ajax_filt(ui.item.id);

                // $("#vendor_text").hide();
                // $("#v_name_pencil").show();

                // $('#vendor_text').val(ui.item.label+' '+ui.item.id);
                return false;

            }
        })

    function supply_history(page){
        $("#tab_stock").hide();
        $("#debt_vendor").hide();
        $("#recieve_history").hide();
        $("#sales_by_client").hide();
        $("#client_balances").hide();
        $("#credit_vendor").hide();
        $("#issue_order_history").hide();
        $("#stock_summary_outgoing").hide();
        $("#stock_summary_incoming").hide();
        $('#vendor').hide();
        $('#payment_').hide();
        $("#pagination").show();
        // $('#client').show();
        $("#sup_history").show();


        $("#incomingData_sup_history").show();
        var warehouse_val = $('#warehouse_sub').val();
        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');
        localStorage.setItem('report_type', warehouse_val);

        console.log($('#warehouse_sub').val());

        
        //  $( "#client_name" ).autocomplete({

        //       source: function( request, response ) {
        //        // Fetch data
        //        console.log(response);
        //        $.ajax({

        //           url: api_path+"wms/vendors_autocomplete",
        //           type: 'post',
        //         headers: {'Authorization':localStorage.getItem('token') },

        //           dataType: "json",
        //           data: {
        //            term: request.term,
        //            company_id: localStorage.getItem('company_id')
        //        },
        //        success: function( data ) {
        //            response( data );
        //            console.log(data);
        //            console.log(company_id);
        //            console.log(request.term);
        //        }

        //    });
        //    },
        //    minLength: 1,
        //    select: function (event, ui) {

        //     console.log(ui.item.id);
        //         // Set selection
        //         $("#client_name").val(ui.item.label);
        //         $("#v_client_name").show(ui.item.label);
        //         $("#v_client_name").val(ui.item.label);
        //         $("#client_name").html(ui.item.label);


        //         ajax_filt(ui.item.id);

        //         // $("#vendor_text").hide();
        //         // $("#v_name_pencil").show();

        //         // $('#vendor_text').val(ui.item.label+' '+ui.item.id);
        //         return false;

        //     }

        // })

         if($("#client_name").val().length > -1){

              // $('select').on('change', function() {
                if (page == "") {
                    var page = 1;
                }
                var limit = 10;
                if($('#deleted_itms option:selected').val() == "today"){
                    $("#loading_sup_history").show();
                    $("#incomingData_sup_history").hide();
                    console.log($('select').val())
                    var warehouse_val = $('#warehouse_sub').val();
                    var startDate = new Date().format("%Y/%m/%d");
                    var endDate = new Date().format("%Y/%m/%d");
                    var filter_date = `${startDate} - ${endDate}`;
                    var warehouse_val = $('#sup_history').val();
                    console.log($('#sup_history').val());
                    console.log(filter_date);
                    localStorage.setItem('date', filter_date);



                    $.ajax({
                        type: "POST",
                        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                        url: api_path + "wms/reports",
                        data: {
                            "company_id": company_id, 
                            "warehouse_id": warehouse_id,
                            "limit": limit,
                            "client_id": $("#client_text").val(),
                            "page": page,
                            "report_type": $('#warehouse_sub').val(),
                            "report_period": filter_date, 
                            "report_format": "json"

                        },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response.total_rows);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${v.qty.toLocaleString()}</td>
                            <td>${v.client.toLocaleString()}</td>
                            <td>${v.supply_date.toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    supply_history(page);
                                }
                            });
                            $('#incomingData_sup_history').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_sup_history").show();
                         $("#loading_sup_history").hide();
                          $("#client_text").val('')
                         $("#client_name").val('')


                     })

                    } else if (response.status == '400'){

                        // alert('error 401')
                       $('#export_file').hide();

                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_sup_history').html(no_rec);
                         $("#loading_sup_history").hide();
                        $("#incomingData_sup_history").show();

                        console.log(`${response.msg}`)
                         $("#client_text").val('')
                         $("#client_name").val('')

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

                }


                if($('#deleted_itms option:selected').val() == "yesterday"){
                    $("#loading_sup_history").show();
                    $("#incomingData_sup_history").hide();
                    console.log($('select').val())
                    var d = new Date();
                    var yester = `${d.getFullYear()}/${d.getMonth() + 1}/${d.getDate() - 1}`;

                    var startDate = yester;
                    var endDate = yester;
                    var filter_date = `${startDate} - ${endDate}`;
                    var warehouse_val = $('#warehouse_sub').val();
                    console.log($('#warehouse_sub').val());
                    console.log(filter_date);
                    localStorage.setItem('date', filter_date);


                    $.ajax({
                        type: "POST",
                        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                        url: api_path + "wms/reports",
                        data: {
                            "company_id": company_id, 
                            "warehouse_id": warehouse_id,
                            "limit": limit,
                            "page": page,
                            "client_id": $("#client_text").val(),

                            "report_type": warehouse_val,
                            "report_period": filter_date, 
                            "report_format": "json"

                        },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${v.qty.toLocaleString()}</td>
                            <td>${v.client}</td>
                            <td>${format_a_date(v.supply_date)}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    supply_history(page);
                                }
                            });
                            $('#incomingData_sup_history').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_sup_history").show();
                         $("#loading_sup_history").hide();
                          $("#client_text").val('')
                         $("#client_name").val('')


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_sup_history').html(no_rec);
                        $("#loading_sup_history").hide();
                        $("#incomingData_sup_history").show();

                        console.log(`${response.msg}`)
                         $("#client_text").val('')
                         $("#client_name").val('')

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

                }



                if($('#deleted_itms option:selected').val() == "this_week"){

                     $("#loading_sup_history").show();
                    $("#incomingData_sup_history").hide();
                    let curr = new Date 
                    let week = []

                    for (let i = 1; i <= 7; i++) {
                      let first = curr.getDate() - curr.getDay() + i 
                      let day = new Date(curr.setDate(first)).format("%Y/%m/%d").slice(0, 10)
                      week.push(day)
                  }


                  var startDate = week[0];
                  var endDate = week[week.length - 1];
                  var filter_date = `${startDate} - ${endDate}`;
                  var warehouse_val = $('#warehouse_sub').val();
                  console.log($('#warehouse_sub').val());
                  console.log(filter_date);
                  localStorage.setItem('date', filter_date);


                  $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                            "client_id": $("#client_text").val(),

                        "limit": limit,
                        "page": page,
                        "report_type": warehouse_val,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${v.qty.toLocaleString()}</td>
                            <td>${v.client}</td>
                            <td>${format_a_date(v.supply_date)}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    supply_history(page);
                                }
                            });
                            $('#incomingData_sup_history').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_sup_history").show();
                         $("#loading_sup_history").hide();
                          $("#client_text").val('')
                         $("#client_name").val('')


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_sup_history').html(no_rec);
                         $("#loading_sup_history").hide();
                        $("#incomingData_sup_history").show();

                        console.log(`${response.msg}`)
                         $("#client_text").val('')
                         $("#client_name").val('')

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

              }

              if($('#deleted_itms option:selected').val() == "last_week"){
                 $("#loading_sup_history").show();
                    $("#incomingData_sup_history").hide();
                let curr = new Date 
                let week = []

                for (let i = 1; i <= 7; i++) {
                  var first = curr.getDate() - curr.getDay() + i
                  var day = new Date(curr.setDate(first - 7)).format("%Y/%m/%d").slice(0, 10);
                  var last = curr.getDate() - curr.getDay() + 7;

                  week.push(day)
              }
              console.log(last) 

              var last = week[0].split('/')
              var test = (Number(last[last.length - 1]) + 6)
              var chk = test.toString().length < 2 ? `0${test}`: `{test}`
              last.splice(2, 1, chk)

              var startDate = week[0];
              var endDate = last.join(',').replace(/[',']/g,'/');
              var filter_date = `${startDate} - ${endDate}`;
              var warehouse_val = $('#warehouse_sub').val();
              console.log($('#warehouse_sub').val());
              console.log(filter_date);
              localStorage.setItem('date', filter_date);


              $.ajax({
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path + "wms/reports",
                data: {
                    "company_id": company_id, 
                    "warehouse_id": warehouse_id,
                            "client_id": $("#client_text").val(),

                    "limit": limit,
                    "page": page,
                    "report_type": warehouse_val,
                    "report_period": filter_date, 
                    "report_format": "json"

                },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${v.qty.toLocaleString()}</td>
                            <td>${v.client}</td>
                            <td>${format_a_date(v.supply_date)}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    supply_history(page);
                                }
                            });
                            $('#incomingData_sup_history').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_sup_history").show();
                         $("#loading_sup_history").hide();
                          $("#client_text").val('')
                         $("#client_name").val('')


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_sup_history').html(no_rec);
                         $("#loading_sup_history").hide();
                        $("#incomingData_sup_history").show();

                        console.log(`${response.msg}`)
                         $("#client_text").val('')
                         $("#client_name").val('')

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

          }
          if($('#deleted_itms option:selected').val() == "this_month"){
               $("#loading_sup_history").show();
                    $("#incomingData_sup_history").hide();

              var date = new Date();
              var firstDay = new Date(date.getFullYear(), date.getMonth(), 1).format("%Y/%m/%d").slice(0, 10);
              var lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).format("%Y/%m/%d").slice(0, 10);

              var startDate = firstDay;
              var endDate = lastDay;
              var filter_date = `${startDate} - ${endDate}`;
              var warehouse_val = $('#warehouse_sub').val();
              console.log($('#warehouse_sub').val());
              console.log(filter_date);
              localStorage.setItem('date', filter_date);


              $.ajax({
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path + "wms/reports",
                data: {
                    "company_id": company_id, 
                    "warehouse_id": warehouse_id,
                    "report_type": warehouse_val,
                    "client_id": $("#client_text").val(),

                    "limit": limit,
                    "page": page,
                    "report_period": filter_date, 
                    "report_format": "json"

                },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${v.qty.toLocaleString()}</td>
                            <td>${v.client}</td>
                            <td>${format_a_date(v.supply_date)}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    supply_history(page);
                                }
                            });
                            $('#incomingData_sup_history').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_sup_history").show();
                          $("#loading_sup_history").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_sup_history').html(no_rec);
                            $("#loading_sup_history").hide();
                        $("#incomingData_sup_history").show();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

          }

            if($('#deleted_itms option:selected').val() == "this_quarter"){
             $("#loading").show();
             $("#incomingData").hide();
             if (page == "") {
                    var page = 1;
                }
                var limit = 10;
          var today = new Date();
          var quarter = Math.floor((today.getMonth() + 3) / 3);

          if(quarter == 1){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 3, 0);
           var startDate = `${d.getFullYear()}/01/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);
           quarter_ajax_supply_history("", filter_date);
          }
          if(quarter == 2){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 6, 0);
           var startDate = `${d.getFullYear()}/04/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_supply_history("", filter_date);
          }
          if(quarter == 3){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 9, 0);
           var startDate = `${d.getFullYear()}/07/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_supply_history("", filter_date);


          }
          if(quarter == 4){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 12, 0);
           var startDate = `${d.getFullYear()}/10/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_supply_history("", filter_date);


          }
}

          if($('#deleted_itms option:selected').val() == "this_year"){
              $("#loading_sup_history").show();
                    $("#incomingData_sup_history").hide();

                    if (page == "") {
                    var page = 1;
                }
                var limit = 10;

             var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
             var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
             var filter_date = `${startDate} - ${endDate}`;
             var warehouse_val = $('#warehouse_sub').val();
             console.log($('#warehouse_sub').val());
             console.log(filter_date);
             localStorage.setItem('date', filter_date);


             $.ajax({
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path + "wms/reports",
                data: {
                    "company_id": company_id, 
                    "warehouse_id": warehouse_id,
                    "limit": limit,
                    "client_id": $("#client_text").val(),

                    "page": page,
                    "report_type": warehouse_val,
                    "report_period": filter_date, 
                    "report_format": "json",
                    

                },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response.total_rows);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${v.qty}</td>
                            <td>${v.client}</td>
                            <td>${format_a_date(v.supply_date)}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    supply_history(page);
                                }
                            });
                            $('#incomingData_sup_history').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_sup_history").show();
                         $("#loading_sup_history").hide();

                          $("#client_text").val('')
                         $("#client_name").val('')



                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_sup_history').html(no_rec);
                         $("#loading_sup_history").hide();
                        $("#incomingData_sup_history").show();

                        console.log(`${response.msg}`)

                         $("#client_text").val('')
                         $("#client_name").val('')



                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

         }

         if($('#date_range').val()){

            console.log($('#date_range').val())

             $("#loading_sup_history").show();
                    $("#incomingData_sup_history").hide();

                    if (page == "") {
                    var page = 1;
                }
                var limit = 10;

                // var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
                // var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
                // var filter_date = `${startDate}-${endDate}`;
                // var warehouse_val = $('#warehouse_sub').val();
                // console.log($('#warehouse_sub').val());
                var filter_date = $('#date_range').val();
                localStorage.setItem('date', filter_date);


                $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "client_id": $("#client_text").val(),

                        "page": page,
                        "report_type": warehouse_val,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${v.qty.toLocaleString()}</td>
                            <td>${v.client}</td>
                            <td>${format_a_date(v.supply_date)}</td>
                            </tr>`
                            
                            $('#incomingData_sup_history').html(add_tab);
                         // $("#tab_stock").show();
                         $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    supply_history(page);
                                }
                            });
                         $("#incomingData_sup_history").show();
                         $("#loading_sup_history").hide();

                          $("#client_text").val('')
                         $("#client_name").val('')

                         


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_sup_history').html(no_rec);
                         $("#loading_sup_history").hide();
                        $("#incomingData_sup_history").show();


                        console.log(`${response.msg}`)

                    }
                    // $('#date_range').val('');

                    // $('#loader_row_' + list_id).hide();
                }

            })
            }
            }
        }




    function debt_vendor(page){
        $("#tab_stock").hide();
        $("#sup_history").hide();
        $("#recieve_history").hide();
        $("#sales_by_client").hide();
        $("#client_balances").hide();
        $("#credit_vendor").hide();
        $("#issue_order_history").hide();
        $("#stock_summary_outgoing").hide();
        $("#stock_summary_incoming").hide();
        $('#client').hide();
        $('#vendor').hide();
        $('#payment').hide();
        // $('#payment_').show();
        $("#debt_vendor").show();
        $("#pagination").show();
        $("#incomingData_debt_vendor").show();
        var warehouse_val = $('#warehouse_sub').val();
        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');
        console.log($('#warehouse_sub').val());
        localStorage.setItem('report_type', warehouse_val);

        $( "#payment_debt" ).autocomplete({

              source: function( request, response ) {
               // Fetch data
               console.log(response);
               $.ajax({

                  url: api_path+"wms/vendors_autocomplete",
                  type: 'post',
                headers: {'Authorization':localStorage.getItem('token') },

                  dataType: "json",
                  data: {
                   term: request.term,
                   company_id: localStorage.getItem('company_id')
               },
               success: function( data ) {
                   response(data);
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
                $("#payment_debt").val(ui.item.label);
                $("#payment_debt").show(ui.item.label);
                $("#payment_debt").val(ui.item.label);
                ajax_filter_payment_debt("",ui.item.id);
                return false;

            }

        })
if($("#payment_vendor").val().length == 0){
              // $('select').on('change', function() {
                if (page == "") {
                    var page = 1;
                }
                var limit = 10;
                if($('#deleted_itms option:selected').val() == "today"){
                    $("#loading_debt_vendor").show();
                    $("#incomingData_debt_vendor").hide();
                    console.log($('select').val())
                    var warehouse_val = $('#warehouse_sub').val();
                    var startDate = new Date().format("%Y/%m/%d");
                    var endDate = new Date().format("%Y/%m/%d");
                    var filter_date = `${startDate} - ${endDate}`;
                    var warehouse_val = $('#sup_history').val();
                    console.log($('#sup_history').val());
                    console.log(filter_date);
                    localStorage.setItem('date', filter_date);


                    $.ajax({
                        type: "POST",
                        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                        url: api_path + "wms/reports",
                        data: {
                            "company_id": company_id, 
                            "warehouse_id": warehouse_id,
                            "limit": limit,
                            "page": page,
                            "report_type": $('#warehouse_sub').val(),
                            "report_period": filter_date, 
                            "report_format": "json"

                        },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.vendor}</td>
                            <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#incomingData_debt_vendor').html(add_tab);
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    debt_vendor(page);
                                }
                            });
                         // $("#tab_stock").show();
                         $("#incomingData_debt_vendor").show();
                         $("#loading_debt_vendor").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_debt_vendor').html(no_rec);
                        $("#incomingData_debt_vendor").show();
                        $("#loading_debt_vendor").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

                }


                if($('#deleted_itms option:selected').val() == "yesterday"){
                  if (page == "") {
                    var page = 1;
                }
                var limit = 10;
                    $("#loading_debt_vendor").show();
                    $("#incomingData_debt_vendor").hide();
                    console.log($('select').val())
                    var d = new Date();
                    var yester = `${d.getFullYear()}/${d.getMonth() + 1}/${d.getDate() - 1}`;

                    var startDate = yester;
                    var endDate = yester;
                    var filter_date = `${startDate} - ${endDate}`;
                    var warehouse_val = $('#warehouse_sub').val();
                    console.log($('#warehouse_sub').val());
                    console.log(filter_date);
                    localStorage.setItem('date', filter_date);

                  
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                        url: api_path + "wms/reports",
                        data: {
                            "company_id": company_id, 
                            "warehouse_id": warehouse_id,
                            "limit": limit,
                            "page": page,
                            "report_type": warehouse_val,
                            "report_period": filter_date, 
                            "report_format": "json"

                        },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.vendor}</td>
                            <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#incomingData_debt_vendor').html(add_tab);
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    debt_vendor(page);
                                }
                            });
                         // $("#tab_stock").show();
                         $("#incomingData_debt_vendor").show();
                         $("#loading_debt_vendor").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_debt_vendor').html(no_rec);
                        $("#incomingData_debt_vendor").show();
                        $("#loading_debt_vendor").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

                }



                if($('#deleted_itms option:selected').val() == "this_week"){

                    $("#loading_debt_vendor").show();
                    $("#incomingData_debt_vendor").hide();
                    let curr = new Date 
                    let week = []

                    for (let i = 1; i <= 7; i++) {
                      let first = curr.getDate() - curr.getDay() + i 
                      let day = new Date(curr.setDate(first)).format("%Y/%m/%d").slice(0, 10)
                      week.push(day)
                  }


                  var startDate = week[0];
                  var endDate = week[week.length - 1];
                  var filter_date = `${startDate} - ${endDate}`;
                  var warehouse_val = $('#warehouse_sub').val();
                  console.log($('#warehouse_sub').val());
                  console.log(filter_date);
                  localStorage.setItem('date', filter_date);


                  if (page == "") {
                    var page = 1;
                }
                var limit = 10;

                  $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": warehouse_val,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.vendor}</td>
                            <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    debt_vendor(page);
                                }
                            });
                            $('#incomingData_debt_vendor').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_debt_vendor").show();
                         $("#loading_debt_vendor").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_debt_vendor').html(no_rec);
                        $("#incomingData_debt_vendor").show();
                        $("#loading_debt_vendor").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

              }

              if($('#deleted_itms option:selected').val() == "last_week"){
                $("#loading_debt_vendor").show();
                $("#incomingData_debt_vendor").hide();
                let curr = new Date 
                let week = []

                for (let i = 1; i <= 7; i++) {
                  var first = curr.getDate() - curr.getDay() + i
                  var day = new Date(curr.setDate(first - 7)).format("%Y/%m/%d").slice(0, 10);
                  var last = curr.getDate() - curr.getDay() + 7;

                  week.push(day)
              }
              console.log(last) 

              var last = week[0].split('/')
              var test = (Number(last[last.length - 1]) + 6)
              var chk = test.toString().length < 2 ? `0${test}`: `{test}`
              last.splice(2, 1, chk)

              var startDate = week[0];
              var endDate = last.join(',').replace(/[',']/g,'/');
              var filter_date = `${startDate} - ${endDate}`;
              var warehouse_val = $('#warehouse_sub').val();
              console.log($('#warehouse_sub').val());
              console.log(filter_date);
              localStorage.setItem('date', filter_date);


              if (page == "") {
                    var page = 1;
                }
                var limit = 10;

              $.ajax({
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path + "wms/reports",
                data: {
                    "company_id": company_id, 
                    "warehouse_id": warehouse_id,
                    "limit": limit,
                    "page": page,
                    "report_type": warehouse_val,
                    "report_period": filter_date, 
                    "report_format": "json"

                },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.vendor}</td>
                            <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    debt_vendor(page);
                                }
                            });
                            $('#incomingData_debt_vendor').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_debt_vendor").show();
                         $("#loading_debt_vendor").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_debt_vendor').html(no_rec);
                        $("#incomingData_debt_vendor").show();
                        $("#loading_debt_vendor").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

          }
          if($('#deleted_itms option:selected').val() == "this_month"){
              $("#loading_debt_vendor").show();
              $("#incomingData_debt_vendor").hide();

              var date = new Date();
              var firstDay = new Date(date.getFullYear(), date.getMonth(), 1).format("%Y/%m/%d").slice(0, 10);
              var lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).format("%Y/%m/%d").slice(0, 10);

              var startDate = firstDay;
              var endDate = lastDay;
              var filter_date = `${startDate} - ${endDate}`;
              var warehouse_val = $('#warehouse_sub').val();
              console.log($('#warehouse_sub').val());
              console.log(filter_date);
              localStorage.setItem('date', filter_date);


              if (page == "") {
                    var page = 1;
                }
                var limit = 10;

              $.ajax({
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path + "wms/reports",
                data: {
                    "company_id": company_id, 
                    "warehouse_id": warehouse_id,
                    "report_type": warehouse_val,
                    "limit": limit,
                    "page": page,
                    "report_period": filter_date, 
                    "report_format": "json"

                },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.vendor}</td>
                            <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    debt_vendor(page);
                                }
                            });
                            $('#incomingData_debt_vendor').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_debt_vendor").show();
                         $("#loading_debt_vendor").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_debt_vendor').html(no_rec);
                        $("#incomingData_debt_vendor").show();
                        $("#loading_debt_vendor").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

          }

                 if($('#deleted_itms option:selected').val() == "this_quarter"){
             $("#loading").show();
             $("#incomingData").hide();
             if (page == "") {
                    var page = 1;
                }
                var limit = 10;
          var today = new Date();
          var quarter = Math.floor((today.getMonth() + 3) / 3);

          if(quarter == 1){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 3, 0);
           var startDate = `${d.getFullYear()}/01/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_debt_vendor("", filter_date);
          }
          if(quarter == 2){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 6, 0);
           var startDate = `${d.getFullYear()}/04/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_debt_vendor("", filter_date);
          }
          if(quarter == 3){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 9, 0);
           var startDate = `${d.getFullYear()}/07/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_debt_vendor("", filter_date);


          }
          if(quarter == 4){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 12, 0);
           var startDate = `${d.getFullYear()}/10/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_debt_vendor("", filter_date);
           

          }
}


          if($('#deleted_itms option:selected').val() == "this_year"){
             $("#loading_debt_vendor").show();
             $("#incomingData_debt_vendor").hide();

             var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
             var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
             var filter_date = `${startDate} - ${endDate}`;
             var warehouse_val = $('#warehouse_sub').val();
             console.log($('#warehouse_sub').val());
             console.log(filter_date);

             if (page == "") {
                    var page = 1;
                }
                var limit = 10;

             $.ajax({
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path + "wms/reports",
                data: {
                    "company_id": company_id, 
                    "warehouse_id": warehouse_id,
                    "limit": limit,
                    "page": page,
                    "report_type": warehouse_val,
                    "report_period": filter_date, 
                    "report_format": "json",
                   

                },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""
                        $(response.data).each(function(i,v){

                            console.log(v)

                            add_tab+=`<tr>
                            <td>${v.vendor}</td>
                             <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`

                            $('#incomingData_debt_vendor').html(add_tab);
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                   credit_vendor(page);
                                }
                            });
                            $('#incomingData_debt_vendor').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_debt_vendor").show();
                         $("#loading_debt_vendor").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_debt_vendor').html(no_rec);
                        $("#incomingData_debt_vendor").show();
                        $("#loading_debt_vendor").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

         }


         if($('#date_range').val()){

            console.log($('#date_range').val())

            $("#loading_debt_vendor").show();
            $("#incomingData_debt_vendor").hide();

                // var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
                // var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
                // var filter_date = `${startDate}-${endDate}`;
                // var warehouse_val = $('#warehouse_sub').val();
                // console.log($('#warehouse_sub').val());
                var filter_date = $('#date_range').val();
                localStorage.setItem('date', filter_date);

                if (page == "") {
                    var page = 1;
                }
                var limit = 10;

                $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": warehouse_val,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    var add_tab = ""
                    if (response.status == '200') {
                       $('#export_file').show();

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.vendor}</td>
                            <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    debt_vendor(page);
                                }
                            });
                            $('#incomingData_debt_vendor').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_debt_vendor").show();
                         $("#loading_debt_vendor").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_debt_vendor').html(no_rec);
                        $("#incomingData_debt_vendor").show();
                        $("#loading_debt_vendor").hide();

                        console.log(`${response.msg}`)

                    }
                    // $('#date_range').val('');

                    // $('#loader_row_' + list_id).hide();
                }
            })
            }
            // });

            // }

}


        // })
    }





    function sales_by_client(page){
        $("#tab_stock").hide();
        $("#sup_history").hide();
        $("#recieve_history").hide();
        $("#debt_vendor").hide();
        $("#client_balances").hide();
        $("#credit_vendor").hide();
        $("#issue_order_history").hide();
        $("#stock_summary_outgoing").hide();
        $("#stock_summary_incoming").hide();
        $("#sales_by_client").show();
        $("#pagination").show();
        $('#client').hide();
        $('#vendor').hide();
        $('#payment_').hide();

        $("#incomingData_sales_by_client").show();
        var warehouse_val = $('#warehouse_sub').val();
        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');
        console.log($('#warehouse_sub').val());
        localStorage.setItem('report_type', warehouse_val);

              // $('select').on('change', function() {
                if (page == "") {
                    var page = 1;
                }
                var limit = 10;
                console.log(page)
                if($('#deleted_itms option:selected').val() == "today"){

                    $("#loading_sales_by_client").show();
                    $("#incomingData_sales_by_client").hide();
                    console.log($('select').val())
                    if (page == "") {
                    var page = 1;
                }
                var limit = 10;
                    var warehouse_val = $('#warehouse_sub').val();
                    var startDate = new Date().format("%Y/%m/%d");
                    var endDate = new Date().format("%Y/%m/%d");
                    var filter_date = `${startDate} - ${endDate}`;
                    // var warehouse_val = $('#sup_history').val();
                    // console.log($('#sup_history').val());
                    console.log(filter_date);
                    localStorage.setItem('date', filter_date);

                    $.ajax({
                        type: "POST",
                        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                        url: api_path + "wms/reports",
                        data: {
                            "company_id": company_id, 
                            "warehouse_id": warehouse_id,
                            "limit": limit,
                            "page": page,
                            "report_type": $('#warehouse_sub').val(),
                            "report_period": filter_date, 
                            "report_format": "json"

                        },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.client}</td>
                            <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#incomingData_sales_by_client').html(add_tab);
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    sales_by_client(page);
                                }
                            });
                         // $("#tab_stock").show();
                         $("#incomingData_sales_by_client").show();
                         $("#loading_sales_by_client").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_sales_by_client').html(no_rec);
                        $("#incomingData_sales_by_client").show();
                        $("#loading_sales_by_client").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

                }


                if($('#deleted_itms option:selected').val() == "yesterday"){
                    $("#loading_sales_by_client").show();
                    $("#incomingData_sales_by_client").hide();
                    console.log($('select').val())
                    var d = new Date();
                    var yester = `${d.getFullYear()}/${d.getMonth() + 1}/${d.getDate() - 1}`;

                    var startDate = yester;
                    var endDate = yester;
                    var filter_date = `${startDate} - ${endDate}`;
                    var warehouse_val = $('#warehouse_sub').val();
                    console.log($('#warehouse_sub').val());
                    console.log(filter_date);
                    localStorage.setItem('date', filter_date);


                    $.ajax({
                        type: "POST",
                        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                        url: api_path + "wms/reports",
                        data: {
                            "company_id": company_id, 
                            "warehouse_id": warehouse_id,
                            "limit": limit,
                            "page": page,
                            "report_type": warehouse_val,
                            "report_period": filter_date, 
                            "report_format": "json"

                        },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    var add_tab = ""
                    if (response.status == '200') {
                       $('#export_file').show();

                        $(response.data).each(function(i,v){
                            console.log(v)
                            add_tab+=`<tr>
                            <td>${v.client}</td>
                            <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#incomingData_sales_by_client').html(add_tab);
                         // $("#tab_stock").show();
                         $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    sales_by_client(page);
                                }
                            });
                         $("#incomingData_sales_by_client").show();
                         $("#loading_sales_by_client").hide();

                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_sales_by_client').html(no_rec);
                        $("#incomingData_sales_by_client").show();
                        $("#loading_sales_by_client").hide();
                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

                }



                if($('#deleted_itms option:selected').val() == "this_week"){

                    $("#loading_sales_by_client").show();
                    $("#incomingData_sales_by_client").hide();
                    let curr = new Date 
                    let week = []

                    for (let i = 1; i <= 7; i++) {
                      let first = curr.getDate() - curr.getDay() + i 
                      let day = new Date(curr.setDate(first)).format("%Y/%m/%d").slice(0, 10)
                      week.push(day)
                  }


                  var startDate = week[0];
                  var endDate = week[week.length - 1];
                  var filter_date = `${startDate} - ${endDate}`;
                  var warehouse_val = $('#warehouse_sub').val();
                  console.log($('#warehouse_sub').val());
                  console.log(filter_date);
                  localStorage.setItem('date', filter_date);


                  $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": warehouse_val,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    var add_tab = ""

                    if (response.status == '200') {
                        $(response.data).each(function(i,v){
                            console.log(v)
                            add_tab+=`<tr>
                            <td>${v.client}</td>
                            <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#incomingData_sales_by_client').html(add_tab);
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    sales_by_client(page);
                                }
                            });
                         // $("#tab_stock").show();
                         $("#incomingData_sales_by_client").show();
                         $("#loading_sales_by_client").hide();
                         

                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan = "2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_sales_by_client').html(no_rec);
                        $("#incomingData_sales_by_client").show();
                        $("#loading_sales_by_client").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

              }

              if($('#deleted_itms option:selected').val() == "last_week"){
                $("#loading_sales_by_client").show();
                $("#incomingData_sales_by_client").hide();
                let curr = new Date 
                let week = []

                for (let i = 1; i <= 7; i++) {
                  var first = curr.getDate() - curr.getDay() + i
                  var day = new Date(curr.setDate(first - 7)).format("%Y/%m/%d").slice(0, 10);
                  var last = curr.getDate() - curr.getDay() + 7;

                  week.push(day)
              }
              console.log(last) 

              var last = week[0].split('/')
              var test = (Number(last[last.length - 1]) + 6)
              var chk = test.toString().length < 2 ? `0${test}`: `{test}`
              last.splice(2, 1, chk)

              var startDate = week[0];
              var endDate = last.join(',').replace(/[',']/g,'/');
              var filter_date = `${startDate} - ${endDate}`;
              var warehouse_val = $('#warehouse_sub').val();
              console.log($('#warehouse_sub').val());
              console.log(filter_date);
              localStorage.setItem('date', filter_date);


              $.ajax({
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path + "wms/reports",
                data: {
                    "company_id": company_id, 
                    "warehouse_id": warehouse_id,
                    "limit": limit,
                    "page": page,
                    "report_type": warehouse_val,
                    "report_period": filter_date, 
                    "report_format": "json"

                },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    var add_tab = ""
                    if (response.status == '200') {
                       $('#export_file').show();

                        $(response.data).each(function(i,v){
                            console.log(v)
                            add_tab+=`<tr>
                            <td>${v.client}</td>
                            <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#incomingData_sales_by_client').html(add_tab);
                         // $("#tab_stock").show();
                         $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    sales_by_client(page);
                                }
                            });
                         $("#incomingData_sales_by_client").show();
                         $("#loading_sales_by_client").hide();
                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan ="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_sales_by_client').html(no_rec);
                        $("#incomingData_sales_by_client").show();
                        $("#loading_sales_by_client").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

          }
          if($('#deleted_itms option:selected').val() == "this_month"){
              $("#loading_sales_by_client").show();
              $("#incomingData_sales_by_client").hide();

              var date = new Date();
              var firstDay = new Date(date.getFullYear(), date.getMonth(), 1).format("%Y/%m/%d").slice(0, 10);
              var lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).format("%Y/%m/%d").slice(0, 10);

              var startDate = firstDay;
              var endDate = lastDay;
              var filter_date = `${startDate} - ${endDate}`;
              var warehouse_val = $('#warehouse_sub').val();
              console.log($('#warehouse_sub').val());
              console.log(filter_date);
              localStorage.setItem('date', filter_date);


              $.ajax({
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path + "wms/reports",
                data: {
                    "company_id": company_id, 
                    "warehouse_id": warehouse_id,
                    "report_type": warehouse_val,
                    "limit": limit,
                    "page": page,
                    "report_period": filter_date, 
                    "report_format": "json"

                },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    var add_tab = ""
                    if (response.status == '200') {
                       $('#export_file').show();

                        $(response.data).each(function(i,v){
                            console.log(v)
                            add_tab+=`<tr>
                           <td>${v.client}</td>
                            <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#incomingData_sales_by_client').html(add_tab);
                         // $("#tab_stock").show();
                         $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    sales_by_client(page);
                                }
                            });
                         $("#incomingData_sales_by_client").show();
                         $("#loading_sales_by_client").hide();

                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan ="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_sales_by_client').html(no_rec);
                        $("#incomingData_sales_by_client").show();
                        $("#loading_sales_by_client").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

          }


          function quarter_ajax_debt_sales_by_client(page, filter_date){
              $("#loading_sales_by_client").show();
             $("#incomingData_sales_by_client").hide();
               if (page == "") {
                    var page = 1;
                }
                var limit = 10;
         
          $.ajax({
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path + "wms/reports",
                data: {
                    "company_id": company_id, 
                    "warehouse_id": warehouse_id,
                    "limit": limit,
                    "page": page,
                    "report_type": warehouse_val,
                    "report_period": filter_date, 
                    "report_format": "json",

                },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    var add_tab = ""
                    if (response.status == '200') {
                        $(response.data).each(function(i,v){
                       $('#export_file').show();

                            console.log(v)
                            add_tab+=`<tr>
                            <td>${v.client}</td>
                            <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#incomingData_sales_by_client').html(add_tab);
                         // $("#tab_stock").show();
                         $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    quarter_ajax_debt_sales_by_client(page, filter_date);
                                }
                            });
                         $("#incomingData_sales_by_client").show();
                         $("#loading_sales_by_client").hide();
                     })

                    } else if (response.status == '400'){
                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan ="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_sales_by_client').html(no_rec);
                        $("#incomingData_sales_by_client").show();
                        $("#loading_sales_by_client").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

}

                  if($('#deleted_itms option:selected').val() == "this_quarter"){
             $("#loading").show();
             $("#incomingData").hide();
             if (page == "") {
                    var page = 1;
                }
                var limit = 10;
          var today = new Date();
          var quarter = Math.floor((today.getMonth() + 3) / 3);

          if(quarter == 1){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 3, 0);
           var startDate = `${d.getFullYear()}/01/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_sales_by_client("", filter_date);
          }
          if(quarter == 2){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 6, 0);
           var startDate = `${d.getFullYear()}/04/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_debt_sales_by_client("", filter_date);
          }
          if(quarter == 3){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 9, 0);
           var startDate = `${d.getFullYear()}/07/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_debt_sales_by_client("", filter_date);


          }
          if(quarter == 4){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 12, 0);
           var startDate = `${d.getFullYear()}/10/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_debt_sales_by_client("", filter_date);
           

          }
}

          if($('#deleted_itms option:selected').val() == "this_year"){
             $("#loading_sales_by_client").show();
             $("#incomingData_sales_by_client").hide();

             var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
             var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
             var filter_date = `${startDate} - ${endDate}`;
             var warehouse_val = $('#warehouse_sub').val();
             console.log($('#warehouse_sub').val());
             console.log(filter_date);
             localStorage.setItem('date', filter_date);


             $.ajax({
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path + "wms/reports",
                data: {
                    "company_id": company_id, 
                    "warehouse_id": warehouse_id,
                    "limit": limit,
                    "page": page,
                    "report_type": warehouse_val,
                    "report_period": filter_date, 
                    "report_format": "json",

                },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    var add_tab = ""
                    if (response.status == '200') {
                        $(response.data).each(function(i,v){
                       $('#export_file').show();

                            console.log(v)
                            add_tab+=`<tr>
                            <td>${v.client}</td>
                            <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#incomingData_sales_by_client').html(add_tab);
                         // $("#tab_stock").show();
                         $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    sales_by_client(page);
                                }
                            });
                         $("#incomingData_sales_by_client").show();
                         $("#loading_sales_by_client").hide();
                     })

                    } else if (response.status == '400'){
                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan ="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_sales_by_client').html(no_rec);
                        $("#incomingData_sales_by_client").show();
                        $("#loading_sales_by_client").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

         }


         if($('#date_range').val()){

            console.log($('#date_range').val())

            $("#loading_sales_by_client").show();
            $("#incomingData_sales_by_client").hide();

                // var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
                // var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
                // var filter_date = `${startDate}-${endDate}`;
                // var warehouse_val = $('#warehouse_sub').val();
                // console.log($('#warehouse_sub').val());
                var filter_date = $('#date_range').val();
                localStorage.setItem('date', filter_date);


                $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": warehouse_val,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    var add_tab = ""
                    if (response.status == '200') {
                        $(response.data).each(function(i,v){
                       $('#export_file').show();

                            console.log(v)
                            add_tab+=`<tr>
                           <td>${v.client}</td>
                            <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#incomingData_sup_history').html(add_tab);
                         // $("#tab_stock").show();
                         $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    sales_by_client(page);
                                }
                            });
                         $("#loading").hide();
                         $('#incomingData_sup_history').show();
                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan ="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_sales_by_client').html(no_rec);
                        $("#incomingData_sales_by_client").show();
                        $("#loading_sales_by_client").hide();

                        console.log(`${response.msg}`)

                    }
                    // $('#date_range').val('');

                    // $('#loader_row_' + list_id).hide();
                }
            })
            }
            // });

            // }




        // })
    }



    function client_balances(page){
        $("#tab_stock").hide();
        $("#sup_history").hide();
        $("#recieve_history").hide();
        $("#debt_vendor").hide();
        $("#sales_by_client").hide();
        $("#credit_vendor").hide();
        $("#issue_order_history").hide();
        $("#stock_summary_outgoing").hide();
        $("#stock_summary_incoming").hide();
        $('#client').hide();
        $('#vendor').hide();
        $('#payment_').hide();
        $("#pagination").show();
        // $("#payment").show();
        $("#client_balances").show();
        $("#incomingData_client_balances").show();
        var warehouse_val = $('#warehouse_sub').val();
        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');
        localStorage.setItem('report_type', warehouse_val);

        console.log($('#warehouse_sub').val())
              // $('select').on('change', function() {
                $( "#payment_vendor" ).autocomplete({

              source: function( request, response ) {
               // Fetch data
               console.log(response);
               $.ajax({

                  url: api_path+"wms/vendors_autocomplete",
                  type: 'post',
                headers: {'Authorization':localStorage.getItem('token') },

                  dataType: "json",
                  data: {
                   term: request.term,
                   company_id: localStorage.getItem('company_id')
               },
               success: function( data ) {
                   response(data);
                   console.log(data);
                   // console.log(company_id);
                   console.log(request.term);
               }

           });
           },
           minLength: 2,
           select: function (event, ui) {

            console.log(ui.item.id);
                // Set selection
                $("#payment_vendor").val(ui.item.label);
                $("#payment_vendor").show(ui.item.label);
                $("#payment_vendor").val(ui.item.label);
                // ajax_filter_payment("",ui.item_id);
                return false;

            }

        })
              if($("#vendor_name").val().length == 0){
                if (page == "") {
                    var page = 1;
                }
                var limit = 10;
                if($('#deleted_itms option:selected').val() == "today"){
                    $("#loading_client_balances").show();
                    $("#incomingData_client_balances").hide();
                    console.log($('select').val())
                    var warehouse_val = $('#warehouse_sub').val();
                    var startDate = new Date().format("%Y/%m/%d");
                    var endDate = new Date().format("%Y/%m/%d");
                    var filter_date = `${startDate} - ${endDate}`;
                    var warehouse_val = $('#sup_history').val();
                    console.log($('#sup_history').val());
                    console.log(filter_date);
                    localStorage.setItem('date', filter_date);
                    if (page == "") {
                    var page = 1;
                }
                var limit = 10;


                    $.ajax({
                        type: "POST",
                        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                        url: api_path + "wms/reports",
                        data: {
                            "company_id": company_id, 
                            "warehouse_id": warehouse_id,
                            "limit": limit,
                            "page": page,
                            "report_type": $('#warehouse_sub').val(),
                            "report_period": filter_date, 
                            "report_format": "json"

                        },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                        var add_tab = ""

                        $(response.data).each(function(i,v){
                       $('#export_file').show();

                            console.log(v.vendor_name)
                            add_tab+=`<tr>
                            <td>${v.client}</td>
                            <td>${v.total_amount.toLocaleString()}</td>
                            </tr>`
                            $('#incomingData_client_balances').html(add_tab);
                         // $("#tab_stock").show();
                         $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    client_balances(page);
                                }
                            });
                         $("#incomingData_client_balances").show();
                         $("#loading_client_balances").hide();


                     })

                    } else if (response.status == '400'){

                        // alert('error 401')
                        $('#export_file').hide();

                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_client_balances').html(no_rec);
                        $("#incomingData_client_balances").show();
                        $("#loading_client_balances").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

                }


                if($('#deleted_itms option:selected').val() == "yesterday"){
                    $("#loading_client_balances").show();
                    $("#incomingData_client_balances").hide();
                    console.log($('select').val())
                    var d = new Date();
                    var yester = `${d.getFullYear()}/${d.getMonth() + 1}/${d.getDate() - 1}`;


                    var startDate = yester;
                    var endDate = yester;
                    var filter_date = `${startDate} - ${endDate}`;
                    var warehouse_val = $('#warehouse_sub').val();
                    console.log($('#warehouse_sub').val());
                    console.log(filter_date);
                    localStorage.setItem('date', filter_date);
                    if (page == "") {
                    var page = 1;
                }
                var limit = 10;


                    $.ajax({
                        type: "POST",
                        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                        url: api_path + "wms/reports",
                        data: {
                            "company_id": company_id, 
                            "warehouse_id": warehouse_id,
                            "limit": limit,
                            "page": page,
                            "report_type": warehouse_val,
                            "report_period": filter_date, 
                            "report_format": "json"

                        },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    var add_tab = ""
                    if (response.status == '200') {
                        $(response.data).each(function(i,v){
                       $('#export_file').show();

                            console.log(v)
                            add_tab+=`<tr>
                            <td>${v.client}</td>
                            <td>${v.total_amount.toLocaleString()}</td>
                            </tr>`
                             $('#incomingData_client_balances').html(add_tab);
                         // $("#tab_stock").show();
                         $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    client_balances(page);
                                }
                            });
                         $("#incomingData_client_balances").show();
                         $("#loading_client_balances").hide();


                     })

                    } else if (response.status == '400'){
                        // alert('error 401')
                        $('#export_file').hide();

                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_client_balances').html(no_rec);
                        $("#incomingData_client_balances").show();
                        $("#loading_client_balances").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

                }



                if($('#deleted_itms option:selected').val() == "this_week"){

                    $("#loading_client_balances").show();
                    $("#incomingData_client_balances").hide();
                    let curr = new Date 
                    let week = []

                    for (let i = 1; i <= 7; i++) {
                      let first = curr.getDate() - curr.getDay() + i 
                      let day = new Date(curr.setDate(first)).format("%Y/%m/%d").slice(0, 10)
                      week.push(day)
                  }


                  var startDate = week[0];
                  var endDate = week[week.length - 1];
                  var filter_date = `${startDate} - ${endDate}`;
                  var warehouse_val = $('#warehouse_sub').val();
                  console.log($('#warehouse_sub').val());
                  console.log(filter_date);
                  localStorage.setItem('date', filter_date);
                  if (page == "") {
                    var page = 1;
                }
                var limit = 10;


                  $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": warehouse_val,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    var add_tab = ""

                    if (response.status == '200') {
                        $(response.data).each(function(i,v){
                       $('#export_file').show();

                            console.log(v)
                            add_tab+=`<tr>
                            <td>${v.client}</td>
                            <td>${v.total_amount.toLocaleString()}</td>
                            </tr>`
                            $('#incomingData_client_balances').html(add_tab);
                         // $("#tab_stock").show();
                         $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    client_balances(page);
                                }
                            });
                         $("#incomingData_client_balances").show();
                         $("#loading_client_balances").hide();


                     })

                    } else if (response.status == '400'){
                        // alert('error 401')
                        $('#export_file').hide();

                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_client_balances').html(no_rec);
                        $("#incomingData_client_balances").show();
                        $("#loading_client_balances").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

              }

              if($('#deleted_itms option:selected').val() == "last_week"){
                $("#loading_client_balances").show();
                    $("#incomingData_client_balances").hide();
                let curr = new Date 
                let week = []


                for (let i = 1; i <= 7; i++) {
                  var first = curr.getDate() - curr.getDay() + i
                  var day = new Date(curr.setDate(first - 7)).format("%Y/%m/%d").slice(0, 10);
                  var last = curr.getDate() - curr.getDay() + 7;

                  week.push(day)
              }
              console.log(last) 

              var last = week[0].split('/')
              var test = (Number(last[last.length - 1]) + 6)
              var chk = test.toString().length < 2 ? `0${test}`: `{test}`
              last.splice(2, 1, chk)

              var startDate = week[0];
              var endDate = last.join(',').replace(/[',']/g,'/');
              var filter_date = `${startDate} - ${endDate}`;
              var warehouse_val = $('#warehouse_sub').val();
              console.log($('#warehouse_sub').val());
              console.log(filter_date);
              localStorage.setItem('date', filter_date);
              if (page == "") {
                    var page = 1;
                }
                var limit = 10;


              $.ajax({
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path + "wms/reports",
                data: {
                    "company_id": company_id, 
                    "warehouse_id": warehouse_id,
                    "limit": limit,
                    "page": page,
                    "report_type": warehouse_val,
                    "report_period": filter_date, 
                    "report_format": "json"

                },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    var add_tab = ""
                    if (response.status == '200') {
                        $(response.data).each(function(i,v){
                       $('#export_file').show();

                            console.log(v)
                            add_tab+=`<tr>
                            <td>${v.client}</td>
                            <td>${v.total_amount.toLocaleString()}</td>
                            </tr>`
                         $('#incomingData_client_balances').html(add_tab);
                         // $("#tab_stock").show();
                         $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    client_balances(page);
                                }
                            });
                         $("#incomingData_client_balances").show();
                         $("#loading_client_balances").hide();


                     })

                    } else if (response.status == '400'){
                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_client_balances').html(no_rec);
                        $("#incomingData_client_balances").show();
                        $("#loading_client_balances").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

          }
          if($('#deleted_itms option:selected').val() == "this_month"){
              $("#loading_client_balances").show();
                    $("#incomingData_client_balances").hide();

              var date = new Date();
              var firstDay = new Date(date.getFullYear(), date.getMonth(), 1).format("%Y/%m/%d").slice(0, 10);
              var lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).format("%Y/%m/%d").slice(0, 10);

              var startDate = firstDay;
              var endDate = lastDay;
              var filter_date = `${startDate} - ${endDate}`;
              var warehouse_val = $('#warehouse_sub').val();
              console.log($('#warehouse_sub').val());
              console.log(filter_date);
              localStorage.setItem('date', filter_date);
              if (page == "") {
                    var page = 1;
                }
                var limit = 10;


              $.ajax({
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path + "wms/reports",
                data: {
                    "company_id": company_id, 
                    "warehouse_id": warehouse_id,
                    "report_type": warehouse_val,
                    "limit": limit,
                    "page": page,
                    "report_period": filter_date, 
                    "report_format": "json"

                },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    var add_tab = ""
                    if (response.status == '200') {
                        $(response.data).each(function(i,v){
                       $('#export_file').show();

                            console.log(v)
                            add_tab+=`<tr>
                            <td>${v.client}</td>
                            <td>${v.total_amount.toLocaleString()}</td>
                            </tr>`
                            $('#incomingData_client_balances').html(add_tab);
                         // $("#tab_stock").show();
                         $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    client_balances(page);
                                }
                            });
                         $("#incomingData_client_balances").show();
                         $("#loading_client_balances").hide();


                     })

                    } else if (response.status == '400'){
                        // alert('error 401')
                        $('#export_file').hide();

                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_client_balances').html(no_rec);
                        $("#incomingData_client_balances").show();
                        $("#loading_client_balances").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

          }
                      if($('#deleted_itms option:selected').val() == "this_quarter"){
             $("#loading_client_balances").show();
             $("#incomingData_client_balances").hide();
             if (page == "") {
                    var page = 1;
                }
                var limit = 10;
          var today = new Date();
          var quarter = Math.floor((today.getMonth() + 3) / 3);

          if(quarter == 1){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 3, 0);
           var startDate = `${d.getFullYear()}/01/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_client_balances("", filter_date);
          }
          if(quarter == 2){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 6, 0);
           var startDate = `${d.getFullYear()}/04/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_client_balances("", filter_date);
          }
          if(quarter == 3){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 9, 0);
           var startDate = `${d.getFullYear()}/07/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_client_balances("", filter_date);



          }
          if(quarter == 4){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 12, 0);
           var startDate = `${d.getFullYear()}/10/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_client_balances("", filter_date);

           

          }
}

          if($('#deleted_itms option:selected').val() == "this_year"){
            $("#loading_client_balances").show();
            $("#incomingData_client_balances").hide();

             var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
             var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
             var filter_date = `${startDate} - ${endDate}`;
             var warehouse_val = $('#warehouse_sub').val();
             console.log($('#warehouse_sub').val());
             console.log(filter_date);
             localStorage.setItem('date', filter_date);
             if (page == "") {
                    var page = 1;
                }
                var limit = 10;


             $.ajax({
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path + "wms/reports",
                data: {
                    "company_id": company_id, 
                    "warehouse_id": warehouse_id,
                    "limit": limit,
                    "page": page,
                    "report_type": warehouse_val,
                    "report_period": filter_date, 
                    "report_format": "json",

                },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    var add_tab = ""

                    if (response.status == '200') {
                       $('#export_file').show();


                      $(response.data).each(function(i,v){

                        // alert(v)

                        console.log(v)
                        add_tab+=`<tr>
                        <td>${v.client}</td>
                        <td>${v.total_amount.toLocaleString()}</td>
                        </tr>`
                        $('#incomingData_client_balances').html(add_tab);
                        $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    client_balances(page);
                                }
                            });
                        $("#incomingData_client_balances").show();
                        $("#loading_client_balances").hide();

                       });

                    } else if (response.status == '400'){
                        // alert('error 401')
                        $('#export_file').hide();

                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_client_balances').html(no_rec);
                        $("#incomingData_client_balances").show();
                        $("#loading_client_balances").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

         }


         if($('#date_range').val()){

            console.log($('#date_range').val())

            $("#loading_client_balances").show();
            $("#incomingData_client_balances").hide();

                // var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
                // var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
                // var filter_date = `${startDate}-${endDate}`;
                // var warehouse_val = $('#warehouse_sub').val();
                // console.log($('#warehouse_sub').val());
                var filter_date = $('#date_range').val();
                localStorage.setItem('date', filter_date);
                 if (page == "") {
                    var page = 1;
                }
                var limit = 10;


                $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "report_type": warehouse_val,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    var add_tab = ""
                    if (response.status == '200') {
                       $('#export_file').show();

                        $(response.data).each(function(i,v){
                            console.log(v)
                            add_tab+=`<tr>
                            <td>${v.client}</td>
                            <td>${v.total_amount.toLocaleString()}</td>
                            </tr>`
                            $('#incomingData_client_balances').html(add_tab);
                         // $("#tab_stock").show();
                         $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    client_balances(page);
                                }
                            });
                         $("#incomingData_client_balances").show();
                         $("#loading_client_balances").hide();


                     })

                    } else if (response.status == '400'){
                        // alert('error 401')
                        $('#export_file').hide();

                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_client_balances').html(no_rec);
                        $("#incomingData_client_balances").show();
                        $("#loading_client_balances").hide();

                        console.log(`${response.msg}`)

                    }
                    // $('#date_range').val('');

                    // $('#loader_row_' + list_id).hide();
                }
            })
            }
            // });

            // }


}

        // })
    }

         $( "#payment_vendor" ).autocomplete({

              source: function( request, response ) {
               // Fetch data
               console.log(response);
               $.ajax({

                  url: api_path+"wms/vendors_autocomplete",
                  type: 'post',
                headers: {'Authorization':localStorage.getItem('token') },

                  dataType: "json",
                  data: {
                   term: request.term,
                   company_id: localStorage.getItem('company_id')
               },
               success: function( data ) {
                   response(data);
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
                $("#payment_vendor").val(ui.item.label);
                $("#payment_vendor").show(ui.item.label);
                $("#payment_vendor").val(ui.item.label);
                $("#payment_text").val(ui.item.id);

                // ajax_filter_payment("",ui.item.id);
                // return false;

            }

        })
    function credit_vendor(page){
        $("#tab_stock").hide();
        $("#sup_history").hide();
        $("#recieve_history").hide();
        $("#debt_vendor").hide();
        $("#sales_by_client").hide();
        $("#client_balances").hide();
        $('#client').hide();
        $('#vendor').hide();
        $('#payment_').hide();
        $("#credit_vendor").show();
        $("#payment").show();
        $("#incomingData_credit_vendor").show();
        var warehouse_val = $('#warehouse_sub').val();
        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');
        console.log($('#warehouse_sub').val());
        localStorage.setItem('report_type', warehouse_val);

              // $('select').on('change', function() {

        //         $( "#payment_vendor" ).autocomplete({

        //       source: function( request, response ) {
        //        // Fetch data
        //        console.log(response);
        //        $.ajax({

        //           url: api_path+"wms/vendors_autocomplete",
        //           type: 'post',
        //         headers: {'Authorization':localStorage.getItem('token') },

        //           dataType: "json",
        //           data: {
        //            term: request.term,
        //            company_id: localStorage.getItem('company_id')
        //        },
        //        success: function( data ) {
        //            response(data);
        //            console.log(data);
        //            console.log(company_id);
        //            console.log(request.term);
        //        }

        //    });
        //    },
        //    minLength: 2,
        //    select: function (event, ui) {

        //     console.log(ui.item.id);
        //         // Set selection
        //         $("#payment_vendor").val(ui.item.label);
        //         $("#payment_vendor").show(ui.item.label);
        //         $("#payment_vendor").val(ui.item.label);
        //         ajax_filter_payment("",ui.item.id);
        //         return false;

        //     }

        // })
           if($("#payment_vendor").val().length > -1){
                if (page == "") {
                    var page = 1;
                }
                var limit = 10;

                if($('#deleted_itms option:selected').val() == "today"){
                    $("#loading_credit_vendor").show();
                    $("#incomingData_credit_vendor").hide();
                    console.log($('select').val())
                    var startDate = new Date().format("%Y/%m/%d");
                    var endDate = new Date().format("%Y/%m/%d");
                    var filter_date = `${startDate} - ${endDate}`;
                    var warehouse_val = $('#sup_history').val();
                    console.log($('#sup_history').val());
                    console.log(filter_date)
                    localStorage.setItem('date', filter_date);



                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        headers: {'Authorization':localStorage.getItem('token') },

                        url: api_path + "wms/reports",
                        data: {
                            "company_id": company_id, 
                            "warehouse_id": warehouse_id,
                            "limit": limit,
                            "vendor_id": $("#payment_text").val(),
                            "page": page,
                            "report_type": $('#warehouse_sub').val(),
                            "report_period": filter_date, 
                            "report_format": "json"

                        },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                        var add_tab = ""

                        $(response.data).each(function(i,v){
                       $('#export_file').show();

                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.vendor}</td>
                             <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#incomingData_credit_vendor').html(add_tab);
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                   credit_vendor(page);
                                }
                            });
                         // $("#tab_stock").show();
                         $("#incomingData_credit_vendor").show();
                         $("#loading_credit_vendor").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_credit_vendor').html(no_rec);
                        $("#incomingData_credit_vendor").show();
                        $("#loading_credit_vendor").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

                }


                if($('#deleted_itms option:selected').val() == "yesterday"){
                   $("#loading_credit_vendor").show();
                    $("#incomingData_credit_vendor").hide();
                    console.log($('select').val())
                    var d = new Date();
                    var yester = `${d.getFullYear()}/${d.getMonth() + 1}/${d.getDate() - 1}`;

                    var startDate = yester;
                    var endDate = yester;
                    var filter_date = `${startDate} - ${endDate}`;
                    var warehouse_val = $('#warehouse_sub').val();
                    localStorage.setItem('date', filter_date);

                    console.log($('#warehouse_sub').val());
                    console.log(filter_date);
                    if (page == "") {
                    var page = 1;
                }
                var limit = 10;

                    $.ajax({
                        type: "POST",
                        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                        url: api_path + "wms/reports",
                        data: {
                            "company_id": company_id, 
                            "warehouse_id": warehouse_id,
                            "limit": limit,
                            "vendor_id": $("#payment_text").val(),

                            "page": page,
                            "report_type": warehouse_val,
                            "report_period": filter_date, 
                            "report_format": "json"

                        },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    var add_tab = ""
                    if (response.status == '200') {
                        $(response.data).each(function(i,v){
                       $('#export_file').show();

                            console.log(v)
                            add_tab+=`<tr>
                            <td>${v.vendor}</td>
                             <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#incomingData_credit_vendor').html(add_tab);
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                   credit_vendor(page);
                                }
                            });
                         // $("#tab_stock").show();
                         $("#incomingData_credit_vendor").show();
                         $("#loading_credit_vendor").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                         <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_credit_vendor').html(no_rec);
                        $("#incomingData_credit_vendor").show();
                        $("#loading_credit_vendor").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

                }



                if($('#deleted_itms option:selected').val() == "this_week"){

                  $("#loading_credit_vendor").show();
                    $("#incomingData_credit_vendor").hide();
                    let curr = new Date 
                    let week = []

                    for (let i = 1; i <= 7; i++) {
                      let first = curr.getDate() - curr.getDay() + i 
                      let day = new Date(curr.setDate(first)).format("%Y/%m/%d").slice(0, 10)
                      week.push(day)
                  }

         
                  var startDate = week[0];
                  var endDate = week[week.length - 1];
                  var filter_date = `${startDate} - ${endDate}`;
                  var warehouse_val = $('#warehouse_sub').val();
                  console.log($('#warehouse_sub').val());
                  console.log(filter_date);
                    localStorage.setItem('date', filter_date);


                  if (page == "") {
                    var page = 1;
                }
                var limit = 10;

                  $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                            "vendor_id": $("#payment_text").val(),

                        "page": page,
                        "report_type": warehouse_val,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    var add_tab = ""

                    if (response.status == '200') {
                        $(response.data).each(function(i,v){
                       $('#export_file').show();

                            console.log(v)
                            add_tab+=`<tr>
                            <td>${v.vendor}</td>
                             <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                   credit_vendor(page);
                                }
                            });
                         // $("
                            $('#incomingData_credit_vendor').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_credit_vendor").show();
                         $("#loading_credit_vendor").hide();

                         

                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_credit_vendor').html(no_rec);
                        $("#incomingData_credit_vendor").show();
                        $("#loading_credit_vendor").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

              }

              if($('#deleted_itms option:selected').val() == "last_week"){
                $("#loading").show();
                $("#incomingData_sup_history").hide();
                let curr = new Date 
                let week = []

                for (let i = 1; i <= 7; i++) {
                  var first = curr.getDate() - curr.getDay() + i
                  var day = new Date(curr.setDate(first - 7)).format("%Y/%m/%d").slice(0, 10);
                  var last = curr.getDate() - curr.getDay() + 7;

                  week.push(day)
              }
              console.log(last) 

              var last = week[0].split('/')
              var test = (Number(last[last.length - 1]) + 6)
              var chk = test.toString().length < 2 ? `0${test}`: `{test}`
              last.splice(2, 1, chk)

              var startDate = week[0];
              var endDate = last.join(',').replace(/[',']/g,'/');
              var filter_date = `${startDate} - ${endDate}`;
              var warehouse_val = $('#warehouse_sub').val();
              console.log($('#warehouse_sub').val());
              console.log(filter_date);
                    localStorage.setItem('date', filter_date);


              if (page == "") {
                    var page = 1;
                }
                var limit = 10;

              $.ajax({
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path + "wms/reports",
                data: {
                    "company_id": company_id, 
                    "warehouse_id": warehouse_id,
                    "limit": limit,
                            "vendor_id": $("#payment_text").val(),

                    "page": page,
                    "report_type": warehouse_val,
                    "report_period": filter_date, 
                    "report_format": "json"

                },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    var add_tab = ""
                    if (response.status == '200') {
                        $(response.data).each(function(i,v){
                       $('#export_file').show();

                            console.log(v)
                            add_tab+=`<tr>
                            <td>${v.vendor}</td>
                             <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                   credit_vendor(page)
                                }
                            });
                         // $("
                            $('#incomingData_credit_vendor').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_credit_vendor").show();
                         $("#loading_credit_vendor").hide();

                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                         <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_credit_vendor').html(no_rec);
                        $("#incomingData_credit_vendor").show();
                        $("#loading_credit_vendor").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

          }
          if($('#deleted_itms option:selected').val() == "this_month"){
              $("#loading_credit_vendor").show();
                    $("#incomingData_credit_vendor").hide();

              var date = new Date();
              var firstDay = new Date(date.getFullYear(), date.getMonth(), 1).format("%Y/%m/%d").slice(0, 10);
              var lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).format("%Y/%m/%d").slice(0, 10);

              var startDate = firstDay;
              var endDate = lastDay;
              var filter_date = `${startDate} - ${endDate}`;
              var warehouse_val = $('#warehouse_sub').val();
              console.log($('#warehouse_sub').val());
              console.log(filter_date);
                    localStorage.setItem('date', filter_date);


              if (page == "") {
                    var page = 1;
                }
                var limit = 10;

              $.ajax({
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path + "wms/reports",
                data: {
                    "company_id": company_id, 
                    "warehouse_id": warehouse_id,
                    "report_type": warehouse_val,
                            "vendor_id": $("#payment_text").val(),

                    "limit": limit,
                    "page": page,
                    "report_period": filter_date, 
                    "report_format": "json"

                },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    var add_tab = ""
                    if (response.status == '200') {
                       $('#export_file').show();

                        $(response.data).each(function(i,v){
                            console.log(v)
                            add_tab+=`<tr>
                            <td>${v.vendor}</td>
                            <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                   credit_vendor(page)
                                }
                            });
                         // $("
                            $('#incomingData_credit_vendor').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_credit_vendor").show();
                         $("#loading_credit_vendor").hide();


                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_credit_vendor').html(no_rec);
                        $("#incomingData_credit_vendor").show();
                        $("#loading_credit_vendor").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

          }
                        if($('#deleted_itms option:selected').val() == "this_quarter"){
             $("#loading_credit_vendor").show();
             $("#incomingData_credit_vendor").hide();
             if (page == "") {
                    var page = 1;
                }
                var limit = 10;
          var today = new Date();
          var quarter = Math.floor((today.getMonth() + 3) / 3);


          if(quarter == 1){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 3, 0);
           var startDate = `${d.getFullYear()}/01/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_credit_vendor("", filter_date);
          }
          if(quarter == 2){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 6, 0);
           var startDate = `${d.getFullYear()}/04/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_credit_vendor("", filter_date);
          }
          if(quarter == 3){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 9, 0);
           var startDate = `${d.getFullYear()}/07/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_credit_vendor("", filter_date);
          }
          if(quarter == 4){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 12, 0);
           var startDate = `${d.getFullYear()}/10/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_credit_vendor();
           
           

          }
}

          if($('#deleted_itms option:selected').val() == "this_year"){
             $("#loading_credit_vendor").show();
             $("#incomingData_credit_vendor").hide();

             var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
             var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
             var filter_date = `${startDate} - ${endDate}`;
             var warehouse_val = $('#warehouse_sub').val();
             console.log($('#warehouse_sub').val());
             console.log(filter_date);
           localStorage.setItem('date', filter_date);


             if (page == "") {
                    var page = 1;
                }
                var limit = 10;

             $.ajax({
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path + "wms/reports",
                data: {
                    "company_id": company_id, 
                    "warehouse_id": warehouse_id,
                    "limit": limit,
                            "vendor_id": $("#payment_text").val(),

                    "page": page,
                    "report_type": warehouse_val,
                    "report_period": filter_date, 
                    "report_format": "json",
                   

                },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                       $('#export_file').hide();

                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    var add_tab = ""
                    if (response.status == '200') {
                       $('#export_file').show();

                        $(response.data).each(function(i,v){
                            console.log(v)
                            add_tab+=`<tr>
                           <td>${v.vendor}</td>
                             <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                   credit_vendor(page)
                                }
                            });
                         // $("
                            $('#incomingData_credit_vendor').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_credit_vendor").show();
                         $("#loading_credit_vendor").hide();

                     })

                    } else if (response.status == '400'){
                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                         <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_credit_vendor').html(no_rec);
                        $("#incomingData_credit_vendor").show();
                        $("#loading_credit_vendor").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

         }


         if($('#date_range').val()){

            console.log($('#date_range').val())

            $("#loading_credit_vendor").show();
            $("#incomingData_credit_vendor").hide();

                // var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
                // var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
                // var filter_date = `${startDate}-${endDate}`;
                // var warehouse_val = $('#warehouse_sub').val();
                // console.log($('#warehouse_sub').val());
                var filter_date = $('#date_range').val();
                localStorage.setItem('date', filter_date);


                if (page == "") {
                    var page = 1;
                }
                var limit = 10;

                $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                            "vendor_id": $("#payment_text").val(),

                        "page": page,
                        "report_type": warehouse_val,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    var add_tab = ""
                    if (response.status == '200') {
                       $('#export_file').show();

                        $(response.data).each(function(i,v){
                            console.log(v)
                            add_tab+=`<tr>
                            <td>${v.vendor}</td>
                             <td><span>&#8358;</span>${parseFloat(v.total_amount).toLocaleString()}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                   credit_vendor(page)
                                }
                            });
                         // $("
                            $('#incomingData_credit_vendor').html(add_tab);
                         // $("#tab_stock").show();
                         $("#incomingData_credit_vendor").show();
                         $("#loading_credit_vendor").hide();

                     })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        var no_rec = ""
                        no_rec+=`<tr>
                         <td colspan="2">${response.msg}</td>
                        </tr>`
                        $('#incomingData_credit_vendor').html(no_rec);
                        $("#incomingData_credit_vendor").show();
                        $("#loading_credit_vendor").hide();

                        console.log(`${response.msg}`)

                    }
                    // $('#date_range').val('');

                    // $('#loader_row_' + list_id).hide();
                }
            })
            }
            // });

            // }




        // })
    }
  }

    // $("#item_name").autocomplete({

    //     source: function(request, response) {
    //         // Fetch data
    //         $.ajax({

    //             url: api_path + "wms/items_autocomplete",
    //             type: 'post',
    //             dataType: "json",
    //         headers: {'Authorization':localStorage.getItem('token') },

    //             data: {
    //                 term: request.term,
    //                 company_id: localStorage.getItem('company_id')
    //             },
    //             success: function(data) {
    //                 response(data);
    //                 console.log(data);
    //             }

    //         });
    //     },
    //     minLength: 2,
    //     select: function(event, ui) {

    //         console.log(ui.item.id);
    //         // Set selection
    //         // +' '+ui.item.id
    //         $('#item_name').val(ui.item.label); // display the selected text
    //         // $('#item_id').val(ui.item.id); // save selected id to input
    //         return false;

    //     }

    // });
        




    function recieve_history(page){
        alert('here')
        $("#tab_stock").hide();
        $("#sup_history").hide();
        $("#debt_vendor").hide();
        $("#sales_by_client").hide();
        $("#client_balances").hide();
        $("#credit_vendor").hide();
        $("#issue_order_history").hide();
        $("#stock_summary_outgoing").hide();
        $("#stock_summary_incoming").hide();
        $('#client').hide();
        // $('#vendor').show();
        $("#recieve_history").show();
        $("#incomingData_recieve_history").show();
        var warehouse_val = $('#warehouse_sub').val();
        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');
        console.log($('#warehouse_sub').val());
        localStorage.setItem('report_type', warehouse_val);

              // $('select').on('change', function() {



        //  $( "#vendor_name" ).autocomplete({

        //       source: function( request, response ) {
        //        // Fetch data
        //        console.log(response);
        //        $.ajax({

        //           url: api_path+"wms/vendors_autocomplete",
        //           type: 'post',
        //         headers: {'Authorization':localStorage.getItem('token') },

        //           dataType: "json",
        //           data: {
        //            term: request.term,
        //            company_id: localStorage.getItem('company_id')
        //        },
        //        success: function( data ) {
        //            response( data );
        //            console.log(data);
        //            console.log(company_id);
        //            console.log(request.term);
        //        }

        //    });
        //    },
        //    minLength: 2,
        //    select: function (event, ui) {

        //     console.log(ui.item.id);
        //         // Set selection
        //         $("#vendor_name").val(ui.item.label);
        //         $("#vendor_name").show(ui.item.label);
        //         $("#vendor_name").val(ui.item.label);
        //         // $("#client_name").html(ui.item.label);

        //         ajax_filter_vendor("",ui.item.id);

        //         // $("#vendor_text").hide();
        //         // $("#v_name_pencil").show();

        //         // $('#vendor_text').val(ui.item.label+' '+ui.item.id);
        //         return false;

        //     }

        // })
if($("#vendor_name").val().length > -1){

                if (page == "") {
                    var page = 1;
                }
                var limit = 10;
                if($('#deleted_itms option:selected').val() == "today"){
                    $("#loading_recieve_history").show();
                    $("#incomingData_recieve_history").hide();
                    console.log($('select').val())
                    var warehouse_val = $('#warehouse_sub').val();
                    var startDate = new Date().format("%Y/%m/%d");
                    var endDate = new Date().format("%Y/%m/%d");
                    var filter_date = `${startDate} - ${endDate}`;
                    var warehouse_val = $('#sup_history').val();
                    console.log($('#sup_history').val());
                    console.log(filter_date);
                    localStorage.setItem('date', filter_date);


                    $.ajax({
                        type: "POST",
                        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                        url: api_path + "wms/reports",
                        data: {
                            "company_id": company_id, 
                            "warehouse_id": warehouse_id,
                            "limit": limit,
                            "page": page,
                            "vendor_id": $("#vendor_text").val(),

                            "report_type": $('#warehouse_sub').val(),
                            "report_period": filter_date, 
                            "report_format": "json"

                        },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${v.qty}</td>
                            <td>${v.vendor}</td>
                            <td>${format_a_date(v.date_recieved)}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    recieve_history(page);
                                }
                            });
                            $('#incomingData_recieve_history').html(add_tab);
                            $("#incomingData_recieve_history").show();
                            $("#loading_recieve_history").hide();
                            $("#vendor_text").val("")
                            $("#vendor_name").val("")




                        })

                    } else if (response.status == '400'){
                       $('#export_file').hide();

                        // alert('error 401')
                        $('#export_file').hide();
                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_recieve_history').html(no_rec);
                        $("#incomingData_recieve_history").show();
                        $("#loading_recieve_history").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

                }


                if($('#deleted_itms option:selected').val() == "yesterday"){
                    console.log($('select').val());
                    $("#loading_recieve_history").show();
                    $("#incomingData_recieve_history").hide();
                    var d = new Date();
                    var yester = `${d.getFullYear()}/${d.getMonth() + 1}/${d.getDate() - 1}`;

                    var startDate = yester;
                    var endDate = yester;
                    var filter_date = `${startDate} - ${endDate}`;
                    var warehouse_val = $('#warehouse_sub').val();
                    console.log($('#warehouse_sub').val());
                    console.log(filter_date);
                    localStorage.setItem('date', filter_date);

                    if (page == "") {
                    var page = 1;
                }
                var limit = 10;


                    $.ajax({
                        type: "POST",
                        dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                        url: api_path + "wms/reports",
                        data: {
                            "company_id": company_id, 
                            "warehouse_id": warehouse_id,
                            "limit": limit,
                            "page": page,
                            "vendor_id": $("#vendor_text").val(),
                            "report_type": warehouse_val,
                            "report_period": filter_date, 
                            "report_format": "json"

                        },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                        var add_tab = ""

                        $(response.data).each(function(i,v){
                       $('#export_file').show();

                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${v.qty}</td>
                            <td>${v.vendor}</td>
                            <td>${format_a_date(v.date_recieved)}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    recieve_history(page);
                                }
                            });
                            $('#incomingData_recieve_history').html(add_tab);
                            $("#incomingData_recieve_history").show();
                            $("#loading_recieve_history").hide();

                        })

                    } else if (response.status == '400'){
                      
                        // alert('error 401')
                        $('#export_file').hide();

                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_recieve_history').html(no_rec);
                        $("#incomingData_recieve_history").show();
                        $("#loading_recieve_history").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

                }



                if($('#deleted_itms option:selected').val() == "this_week"){

                    $("#loading_recieve_history").show();
                    $("#incomingData_recieve_history").hide();
                    let curr = new Date 
                    let week = [];


                    for (let i = 1; i <= 7; i++) {
                      let first = curr.getDate() - curr.getDay() + i 
                      let day = new Date(curr.setDate(first)).format("%Y/%m/%d").slice(0, 10)
                      week.push(day)
                  }


                  var startDate = week[0];
                  var endDate = week[week.length - 1];
                  var filter_date = `${startDate} - ${endDate}`;
                  var warehouse_val = $('#warehouse_sub').val();
                  console.log($('#warehouse_sub').val());
                  console.log(filter_date);
                  localStorage.setItem('date', filter_date);

                  if (page == "") {
                    var page = 1;
                }
                var limit = 10;


                  $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },


                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "vendor_id": $("#vendor_text").val(),

                        "report_type": warehouse_val,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                        var add_tab = ""

                        $(response.data).each(function(i,v){
                       $('#export_file').show();

                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${v.qty}</td>
                            <td>${v.vendor}</td>
                            <td>${format_a_date(v.date_recieved)}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    recieve_history(page);
                                }
                            });
                            $('#incomingData_recieve_history').html(add_tab);
                            $("#incomingData_recieve_history").show();
                            $("#loading_recieve_history").hide();


                        })

                    } else if (response.status == '400'){
                        // alert('error 401')
                        $('#export_file').hide();

                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_recieve_history').html(no_rec);
                        $("#incomingData_recieve_history").show();
                        $("#loading_recieve_history").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

              }

              if($('#deleted_itms option:selected').val() == "last_week"){
                $("#loading_recieve_history").show();
                $("#incomingData_recieve_history").hide();
                let curr = new Date 
                let week = []

                for (let i = 1; i <= 7; i++) {
                  var first = curr.getDate() - curr.getDay() + i
                  var day = new Date(curr.setDate(first - 7)).format("%Y/%m/%d").slice(0, 10);
                  var last = curr.getDate() - curr.getDay() + 7;

                  week.push(day)
              }
              console.log(last) 

              var last = week[0].split('/')
              var test = (Number(last[last.length - 1]) + 6)
              var chk = test.toString().length < 2 ? `0${test}`: `{test}`
              last.splice(2, 1, chk)

              var startDate = week[0];
              var endDate = last.join(',').replace(/[',']/g,'/');
              var filter_date = `${startDate} - ${endDate}`;
              var warehouse_val = $('#warehouse_sub').val();
              console.log($('#warehouse_sub').val());
              console.log(filter_date);
              localStorage.setItem('date', filter_date);

              if (page == "") {
                    var page = 1;
                }
                var limit = 10;


              $.ajax({
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path + "wms/reports",
                data: {
                    "company_id": company_id, 
                    "warehouse_id": warehouse_id,
                    "limit": limit,
                    "page": page,
                    "vendor_id": $("#vendor_text").val(),

                    "report_type": warehouse_val,
                    "report_period": filter_date, 
                    "report_format": "json"

                },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                        var add_tab = ""

                        $(response.data).each(function(i,v){
                       $('#export_file').show();

                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${v.qty}</td>
                            <td>${v.vendor}</td>
                            <td>${format_a_date(v.date_recieved)}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    recieve_history(page);
                                }
                            });
                            $('#incomingData_recieve_history').html(add_tab);
                            $("#incomingData_recieve_history").show();
                            $("#loading_recieve_history").hide();


                        })

                    } else if (response.status == '400'){
                        // alert('error 401')
                        $('#export_file').hide();

                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_recieve_history').html(no_rec);
                        $("#incomingData_recieve_history").show();
                        $("#loading_recieve_history").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

          }
          if($('#deleted_itms option:selected').val() == "this_month"){
              $("#loading_recieve_history").show();
                $("#incomingData_recieve_history").hide();

              var date = new Date();
              var firstDay = new Date(date.getFullYear(), date.getMonth(), 1).format("%Y/%m/%d").slice(0, 10);
              var lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).format("%Y/%m/%d").slice(0, 10);

              var startDate = firstDay;
              var endDate = lastDay;
              var filter_date = `${startDate} - ${endDate}`;
              var warehouse_val = $('#warehouse_sub').val();
              console.log($('#warehouse_sub').val());
              console.log(filter_date);
              localStorage.setItem('date', filter_date);

              if (page == "") {
                    var page = 1;
                }
                var limit = 10;


              $.ajax({
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path + "wms/reports",
                data: {
                    "company_id": company_id, 
                    "warehouse_id": warehouse_id,
                    "report_type": warehouse_val,
                    "limit": limit,
                    "vendor_id": $("#vendor_text").val(),

                    "page": page,
                    "report_period": filter_date, 
                    "report_format": "json"

                },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                        var add_tab = ""

                        $(response.data).each(function(i,v){
                       $('#export_file').show();

                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${v.qty}</td>
                            <td>${v.vendor}</td>
                            <td>${format_a_date(v.date_recieved)}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    recieve_history(page);
                                }
                            });
                            $('#incomingData_recieve_history').html(add_tab);
                            $("#incomingData_recieve_history").show();
                            $("#loading_recieve_history").hide();


                        })

                    } else if (response.status == '400'){
                        // alert('error 401')
                        $('#export_file').hide();

                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_recieve_history').html(no_rec);
                        $("#incomingData_recieve_history").show();
                        $("#loading_recieve_history").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

          }

           if($('#deleted_itms option:selected').val() == "this_quarter"){
             $("#loading_recieve_history").show();
             $("#incomingData_recieve_history").hide();
             if (page == "") {
                    var page = 1;
                }
                var limit = 10;
          var today = new Date();
          var quarter = Math.floor((today.getMonth() + 3) / 3);

          if(quarter == 1){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 3, 0);
           var startDate = `${d.getFullYear()}/01/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_recieve_history("", filter_date);
          }
          if(quarter == 2){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 6, 0);
           var startDate = `${d.getFullYear()}/04/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_recieve_history("", filter_date);
          }
          if(quarter == 3){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 9, 0);
           var startDate = `${d.getFullYear()}/07/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_recieve_history("", filter_date);



          }
          if(quarter == 4){
           var  d = new Date();
           d.setFullYear(d.getFullYear(), 12, 0);
           var startDate = `${d.getFullYear()}/10/01`;
           var endDate = d.format("%Y/%m/%d");
           var filter_date = `${startDate} - ${endDate}`;
           localStorage.setItem('date', filter_date);

           quarter_ajax_recieve_history();
           
           

          }
}

          if($('#deleted_itms option:selected').val() == "this_year"){
             $("#loading_recieve_history").show();
                $("#incomingData_recieve_history").hide();
                if (page == "") {
                    var page = 1;
                }
                var limit = 10;

             var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
             var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
             var filter_date = `${startDate} - ${endDate}`;
             var warehouse_val = $('#warehouse_sub').val();
             console.log($('#warehouse_sub').val());
             console.log(filter_date);
             localStorage.setItem('date', filter_date);


             $.ajax({
                type: "POST",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                url: api_path + "wms/reports",
                data: {
                    "company_id": company_id, 
                    "warehouse_id": warehouse_id,
                    "limit": limit,
                    "page": page,
                    "vendor_id": $("#vendor_text").val(),

                    "report_type": warehouse_val,
                    "report_period": filter_date, 
                    "report_format": "json",
                    

                },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                        var add_tab = ""

                        $(response.data).each(function(i,v){
                       $('#export_file').show();

                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${v.qty}</td>
                            <td>${v.vendor}</td>
                            <td>${format_a_date(v.date_recieved)}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    recieve_history(page);
                                }
                            });
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    recieve_history(page);
                                }
                            });
                            $('#incomingData_recieve_history').html(add_tab);
                            $("#incomingData_recieve_history").show();
                            $("#loading_recieve_history").hide();


                        })

                    } else if (response.status == '400'){
                        // alert('error 401')
                        $('#export_file').hide();

                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_recieve_history').html(no_rec);
                        $("#incomingData_recieve_history").show();
                        $("#loading_recieve_history").hide();

                        console.log(`${response.msg}`)

                    }

                    // $('#loader_row_' + list_id).hide();
                }
            });

         }


         if($('#date_range').val()){

            console.log($('#date_range').val())

            $("#loading_recieve_history").show();
                $("#incomingData_recieve_history").hide();

                // var startDate = new Date(new Date().getFullYear(), 0,1).format("%Y/%m/%d");
                // var endDate = new Date(new Date().getFullYear(), 11, 31).format("%Y/%m/%d");
                // var filter_date = `${startDate}-${endDate}`;
                // var warehouse_val = $('#warehouse_sub').val();
                // console.log($('#warehouse_sub').val());
                var filter_date = $('#date_range').val();
                localStorage.setItem('date', filter_date);

                if (page == "") {
                    var page = 1;
                }
                var limit = 10;


                $.ajax({
                    type: "POST",
                    dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

                    url: api_path + "wms/reports",
                    data: {
                        "company_id": company_id, 
                        "warehouse_id": warehouse_id,
                        "limit": limit,
                        "page": page,
                        "vendor_id": $("#vendor_text").val(),

                        "report_type": warehouse_val,
                        "report_period": filter_date, 
                        "report_format": "json"

                    },
                timeout: 60000, // sets timeout to one minute

                error: function(response) {
                    // $('#loader_row_' + list_id).hide();
                    // $('#row_' + list_id).show();
                    alert('connection error');
                },

                success: function(response) {
                    console.log(response);
                    if (response.status == '200') {
                       $('#export_file').show();

                        var add_tab = ""

                        $(response.data).each(function(i,v){
                            console.log(v.item_name)
                            add_tab+=`<tr>
                            <td>${v.item_name}</td>
                            <td>${v.qty}</td>
                            <td>${v.vendor}</td>
                            <td>${format_a_date(v.date_recieved)}</td>
                            </tr>`
                            $('#pagination').twbsPagination({
                                totalPages: Math.ceil(response.total_rows / limit),
                                visiblePages: 10,
                                onPageClick: function(event, page) {
                                    recieve_history(page);
                                }
                            });
                            $('#incomingData_recieve_history').html(add_tab);
                            $("#incomingData_recieve_history").show();
                            $("#loading_recieve_history").hide();


                        })

                    } else if (response.status == '400'){
                        // alert('error 401')
                        $('#export_file').hide();

                        var no_rec = ""
                        no_rec+=`<tr>
                        <td colspan="4">${response.msg}</td>
                        </tr>`
                        $('#incomingData_recieve_history').html(no_rec);
                        $("#incomingData_recieve_history").show();
                        $("#loading_recieve_history").hide();

                        console.log(`${response.msg}`)

                    }
                    // $('#date_range').val('');

                    // $('#loader_row_' + list_id).hide();
                }
            })
            }

            // });

            // }




        // })
    }
    }



    function fetch_stock_balance(){

        var company_id = localStorage.getItem('company_id');
        var warehouse_id = localStorage.getItem('warehouse_id');

        var item_name = $('#item_name').val();
        var item_code = $('#item_code').val();
        var unit_type = $('#unit_type1').val();
        var custom_id = $('#custom_id').val();

        var item_split = item_name.split(' ');

        var item_id = item_split[1];

        if (page == "") {
            var page = 1;
        }
        var limit = 50;

        $("#loading").show();
        $("#itemsData").html('');

        $.ajax({

            type: "POST",
            dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },
            
            url: api_path + "wms/list_store_items",
            data: {
                "company_id": company_id,
                "warehouse_id": warehouse_id,
                "custom_id": custom_id,
                "page": page,
                "limit": limit,

                "item_name": item_name,
                "item_code": item_code,
                "unit_type": unit_type
            },
            timeout: 60000,

            success: function(response) {

                console.log(response);
                $('#loading').hide();
                var strTable = "";

                if (response.status == '200') {
                       $('#export_file').show();


                    $("#total_of_itms").html(response.total_rows);

                    if (response.data.length > 0) {

                        var k = 1;
                        $.each(response['data'], function(i, v) {
                                // strTable += '<td width="8%" valign="top"><div class="profile_pic"><img src="'+base_url+'/erp/assets/admin_template/production/images/img.jpg" alt="..." width="50"></div></td>';

                                // function status(string) {
                                //     return string.charAt(0).toUpperCase() + string.slice(1);

                                if (response['data'][i]['unit_cost'] == null) {

                                    var unit_cost = "";

                                } else {

                                    var unit_cost = response['data'][i]['unit_cost'];
                                }

                                if (response['data'][i]['qty_left'] == null) {

                                    var qty_left = "";

                                } else {

                                    var qty_left = response['data'][i]['qty_left'];
                                }
                                // }
                                strTable += '<tr id="row_' + response['data'][i]['item_id'] + '">';

                                strTable += '<td valign="top">' + response['data'][i]['item_code'] + '</td>';

                                if (response['data'][i]['item_image'] == "" || response['data'][i]['item_image'] == null) {

                                    strTable += '<td valign="top">&nbsp;</td>';

                                } else {

                                    strTable += '<td width="8%" valign="top"><div class="profile_pic"><img src="' + window.location.origin + '/files/images/warehouse_images/' + response['data'][i]['item_image'] + '" alt="..." width="50"></div></td>';
                                }

                                strTable += '<td valign="top">' + response['data'][i]['custom_id'] + '</td>';

                                strTable += '<td valign="top" id="idmz_name_' + response['data'][i]['item_id'] + '">' + response['data'][i]['item_name'] + '</td>';
                                strTable += '<td valign="top">' + response['data'][i]['item_unit'] + '</td>';
                                strTable += '<td valign="top"><span id="updk_'+response['data'][i]['item_id']+'">' + response['data'][i]['selling_unit_cost'] + '</span> &nbsp; <a class="unit_cst_info" id="unctd_' + response['data'][i]['item_id'] + '"><i  class="fa fa-info-circle"  data-toggle="tooltip" data-placement="top" style="font-style: italic; color: #add8e6; font-size: 20px; cursor : pointer;" title="View Low Item Info"></i></a></td>';
                                strTable += '<td valign="top">' + qty_left + '</td>';
                                strTable += '<td valign="top">' + response['data'][i]['item_low_alert'] + '<a class="low_info" id="low_' + response['data'][i]['item_id'] + '"><i  class="fa fa-info-circle"  data-toggle="tooltip" data-placement="top" style="font-style: italic; color: #add8e6; font-size: 20px; cursor : pointer;" title="View Low Item Info"></i></a></td>'

                                // if(response['data'][i]['unit_cost'] == null){

                                //   strTable += '<td valign="top">0.00<a class="unit_info" id="unit_'+response['data'][i]['item_id']+'"><i  class="fa fa-info-circle"  data-toggle="tooltip" data-placement="top" style="font-style: italic; color: #add8e6; font-size: 20px; cursor : pointer;" title="View Cost info"></i></a>';

                                // }else{

                                //   strTable += '<td valign="top">'+response['data'][i]['unit_cost']+' <a class="unit_info" id="unit_'+response['data'][i]['item_id']+'"><i  class="fa fa-info-circle"  data-toggle="tooltip" data-placement="top" style="font-style: italic; color: #add8e6; font-size: 20px; cursor : pointer;" title="View Cost info"></i></a></td>';

                                // }

                                // strTable += '<td valign="top">'+response['data'][i]['qty_left']+' <a class="qty_info" id="qty_'+response['data'][i]['item_id']+'"><i  class="fa fa-info-circle"  data-toggle="tooltip" data-placement="top" style="font-style: italic; color: #add8e6; font-size: 20px; cursor : pointer;" title="View Quantity info"></i></a></td>';

                                strTable += '<td valign="top"><a href="' + base_url + 'edit_item?id=' + response['data'][i]['item_id'] + '" class="edit_item_icon btn btn-info btn-xs" style="cursor: pointer;"><i  class="fa fa-pencil"  data-toggle="tooltip" data-placement="top" title="Edit Item"></i> Edit</a>&nbsp;';

                                // strTable += '<i  class="fa fa-spinner fa-spin fa-1x fa-fw" aria-hidden="true" style="display: none;" id="loader_'+response['data'][i]['item_id']+'"></i>&nbsp;&nbsp;';  

                                strTable += '<a class="delete_item btn btn-danger btn-xs" style="cursor: pointer;" id="itm_' + response['data'][i]['item_id'] + '"><i  class="fa fa-trash-o"  data-toggle="tooltip" data-placement="top" title="Delete Item"></i> Delete</a>&nbsp;&nbsp;';

                                strTable += '<a href="' + base_url + 'items_activities?id=' + response['data'][i]['item_id'] + '"><i  class="fa fa-clock-o"  data-toggle="tooltip" data-placement="top" style="color: #000; font-size: 20px;" title="View Item info"></i></a></td>';

                                strTable += '</tr>';

                                strTable += '<tr style="display: none;" id="loader_row_' + response['data'][i]['item_id'] + '">';
                                strTable += '<td colspan="2"><i class="fa fa-spinner fa-spin fa-fw fa-2x"  id="loading"></i>';
                                strTable += '</td>';
                                strTable += '</tr>';

                                k++;

                            });

} else {

    strTable = '<tr><td colspan="9">No record.</td></tr>';

}

$('#pagination').twbsPagination({
    totalPages: Math.ceil(response.total_rows / limit),
    visiblePages: 10,
    onPageClick: function(event, page) {
        list_of_comapany_items(page);
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
    }
});

$("#itemsData").html(strTable);
$("#itemsData").show();

} else if (response.status == '400') {

    $('#loading').hide();
    strTable += '<tr>';
    strTable += '<td colspan="9">' + response.msg + '</td>';
    strTable += '</tr>';

    $("#itemsData").html(strTable);
    $("#itemsData").show();

} else if (response.status == "401") {
                        //missing parameters
                        var strTable = "";
                        $('#loading').hide();
                        strTable += '<tr>';
                        strTable += '<td colspan="9">' + response.msg + '</td>';
                        strTable += '</tr>';

                        $("#itemsData").html(strTable);
                        $("#itemsData").show();

                    }

                    $("#loading").hide();

                },

                error: function(response) {

                    var strTable = "";
                    $('#loading').hide();
                    // alert(response.msg);
                    strTable += '<tr>';
                    strTable += '<td colspan="9"><strong class="text-danger">Connection error!</strong></td>';
                    strTable += '</tr>';

                    $("#itemsData").html(strTable);
                    $("#itemsData").show();
                    $("#loading").hide();

                }

            });

}
})
</script>

<?php
include_once("../gen/_common/footer.php"); // header contents

?>
