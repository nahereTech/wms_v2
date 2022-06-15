<?php
include_once("_common/menu.php"); // menu list
include_once("../gen/_common/header.php"); // header contents
include_once("assets/wms.php"); // header contents
?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Overdue PO</h3>
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
                    <a href="./" class="btn btn-primary">Back</a>
                    
                    
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

                                        <th class="column-title" width="10%">Code</th>
                                        <th class="column-title" width="10%">Date</th>
                                        <th class="column-title" width="10%">Vendor</th>
                                        <th class="column-title" width="10%">Batch Total (₦)</th>
                                        <th class="column-title" width="15%">Payment Status</th>
                                        <th class="column-title" width="15%">PO Status</th>
                                        <th class="column-title" width="10%">Priority</th>
                                        <th class="column-title" width="10%">Expected Received Date</th>
                                        <th class="column-title" width="10%">Received</th>
                                        <th class="column-title no-link last sel_action" id="sel_action" width="10%">
                                            <span class="nobr">Actions</span>
                                        </th>
                                        <th class="bulk-actions" colspan="4">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span
                                                    class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tr id="loading">
                                    <td colspan="9"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i>
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

          

        <script type="text/javascript">
          $(document).ready(function(){
              // var warehouse_id; 

              total_overdue_po('');
              
              // $('#add_warehouse').on('click', warehouse);
              // $('#add_ware').on('click', add_company_warehouse);

              // $(document).on('click', '.delete_warehouse', function(){
              //   var warehouse_id = $(this).attr('id').replace(/war_/,''); 
              //   delete_warehouse(warehouse_id);
              // });

              // $(document).on('click', '.warehouse_info', function(){
              //   warehouse_id = $(this).attr('id').replace(/wareIn_/,''); 
              //   fetch_warehouse_info(warehouse_id);
                
              // });

              // $(document).on('click', '.edit_warehouse_icon', function(){
              //   warehouse_id = $(this).attr('id').replace(/warh_/,''); 
              //   fetch_warehouse_details(warehouse_id);
                
              // });

              // $(document).on('click', '#edit_ware', function(){
              //   // var warehouse_id = $(this).attr('id').replace(/edt_/,''); 
              //   edit_company_warehouse(warehouse_id);
              //   // alert(warehouse_id);
              // });

              

          })



          

          function warehouse(){
            $('#warehouse_display').toggle();
            $('#add_warehouse_name').val('');
            $('#add_warehouse_address').val('');

            $('#error').html('');

            $(".required").each(function(){

              var the_val = $.trim($(this).val());

              $(this).removeClass("has-error");

            });
          }

          function total_overdue_po(page){

            var company_id = localStorage.getItem('company_id');
            var warehouse_id = localStorage.getItem('warehouse_id');

             if(page == ""){
                var page = 1;
              }
              var limit = 10;

            
            $("#loading").show();
            $("#lowData").html('');

            $.ajax({
                
                type: "GET",
                dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },
                
                url: api_path+"wms/list_overdue_PO",
                data: { "company_id": company_id, "warehouse_id": warehouse_id, "page": page, "limit": limit },
                timeout: 60000,

                success: function(response) {
                            console.log(response);

                            var strTable = "";

                            if (response.status == '200') {

                                // $('#item_id').val('')
                                if (response.data.length > 0) {

                                    var k = 1;
                                    $.each(response['data'], function(i, v) {

                                        if (response['data'][i]['payment_status'] ==
                                            "completed" ||
                                            response['data'][i]['payment_status'] ==
                                            "uncompleted_and_closed") {
                                            var ps_cl =
                                                '<a><span class="label label-success">Completed</span></a>';
                                        } else if (response['data'][i]['payment_status'] ==
                                            "uncompleted") {
                                            var ps_cl =
                                                '<a><span class="label label-warning">Uncompleted</span></a>';
                                        }


                                        if (response['data'][i]['PO_status'] ==
                                            "Fulfilled") {
                                            var ps_status =
                                                '<a><span class="label label-success">Fulfilled</span></a>';
                                        } else if (response['data'][i]['PO_status'] ==
                                            "Inprogress") {
                                            var ps_status =
                                                '<a><span class="label label-warning">Inprogress</span></a>';
                                        } else if (response['data'][i]['PO_status'] ==
                                            "Pending") {
                                            var ps_status =
                                                '<a><span class="label label-info">Pending</span></a>';
                                        } else if (response['data'][i]['PO_status'] ==
                                            "overdue") {
                                            var ps_status =
                                                '<a><span class="label label-danger">Overdue</span></a>';
                                        }





                                        var delete_btn = "";
                                        var del_forv = "";
                                        var undo_del_btn = '';

                                        if (response['data'][i]['del_status'] == "no" &&
                                            response[
                                                'data'][i]['is_recieved'] == "no") {

                                            delete_btn =
                                                '<li class="del_this_grn"  id="del_this_grn_' +
                                                response['data'][i]['batch_id'] +
                                                '"><a>Delete</a></li>';

                                        }
                                        // else if (response['data'][i]['del_status'] == "yes") {

                                        //     undo_del_btn = '<li class="undo_del"  id="undo_del_grn_' +
                                        //         response['data'][i]['batch_id'] +
                                        //         '"><a>Undo Delete</a></li>';
                                        //     del_forv = '<li class="del_flva"  id="del_flva_' + response[
                                        //             'data'][i]['batch_id'] +
                                        //         '"><a>Delete Forever</a></li>';

                                        // }





                                        strTable += '<tr id="row_' + response['data'][i][
                                                'batch_id'
                                            ] +
                                            '">';
                                        strTable += '<td id="batch_cod_tx_' + response[
                                                'data'][i][
                                                'batch_id'
                                            ] + '">' + response['data'][i]['batch_code'] +
                                            '</td>';

                                        // +response['data'][i]['Vendor']+
                                        strTable += '<td>' + format_a_date(response['data'][
                                            i
                                        ][
                                            'date_recieved'
                                        ]) + '</td>';
                                        strTable += '<td>' + response['data'][i]['vendor'] +
                                            '</td>';
                                        strTable += '<td >' + format_to_money(
                                                response['data'][i]['batch_total']) +
                                            '</td>';
                                        strTable += '<td>' + ps_cl + '</td>';
                                        strTable +=
                                            '<td>' + ps_status + '</td>';
                                        // <a><span class="label label-danger">Overdue</span></a>

                                        strTable +=
                                            `<td>${response['data'][i]['is_critical'] == 'yes' ? 
                                        '<a><span class="label label-danger">Critical</span></a>' : '<a><span class="label label-success">Not critical</span></a>'}</td>`;

                                        strTable += '<td>' + format_a_date(response['data'][
                                            i
                                        ][
                                            'expected_recieved_date'
                                        ]) + '</td>';

                                        strTable +=
                                            `<td>
                                    <div class="progress" style="width:80%"><div class="progress-bar" role="progressbar" style="width: ${response['data'][i]['percentage']}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div></td>`;



                                        // strTable += '<td valign="top"><a class="incoming_info btn btn-primary btn-xs"  id="in_' + response['data'][i]['batch_id'] + '"><i  class="fa fa-folder"  data-toggle="tooltip" data-placement="top" title="View Incoming info"></i> View</a>';

                                        strTable += '<td valign="top">';
                                        strTable +=
                                            '<div class="x_content" style="margin: 0px; padding: 0px"><button data-toggle="dropdown" class="btn btn-default dropdown-toggle btn-xs select_batch" id="sel_' +
                                            response['data'][i]['batch_id'] +
                                            '"  type="button" aria-expanded="true">Action <span class="caret"></span></button>';

                                        strTable +=
                                            '<ul role="menu" class="dropdown-menu  pull-right">    <li class="incoming_info"  id="in_' +
                                            response['data'][i]['batch_id'] +
                                            '"><a>PO Details</a></li> <!-- <li class="inc_payment_history"  id="in_p_' +
                                            response['data'][i]['batch_id'] +
                                            '"><a>PO Payments</a></li> -->   <!-- <li class="dlv"  id="dlv_' +
                                            response['data'][i]['batch_id'] +
                                            '"><a>Items Deliveries</a></li>-->  <li class="email_report"  id="email_report' +
                                            response['data'][i]['batch_id'] +
                                            '"><a>Email</a></li>     <li class="dwnld_grn"  id="dwnld_grn_' +
                                            response['data'][i]['batch_id'] + '" dir="' +
                                            response[
                                                'data'][i]['batch_code'] +
                                            '"><a>Download PO</a></li>   <!-- <li class="sdf"  id="sdf' +
                                            response['data'][i]['batch_id'] +
                                            '"><a>Email PO</a></li> -->  ' + delete_btn +
                                            undo_del_btn +
                                            del_forv + ' </ul></div>';

                                        strTable +=
                                            '<i  class="fa fa-spinner fa-spin fa-1x fa-fw" aria-hidden="true" style="display: none;" id="loader11_' +
                                            response['data'][i]['batch_id'] +
                                            '"></i> &nbsp;&nbsp; <!-- <a class="delete_receipt btn btn-danger btn-xs" style="cursor: pointer;" id="inc_' +
                                            response['data'][i]['batch_id'] +
                                            '"><i  class="fa fa-trash-o" data-toggle="tooltip" data-placement="top" title="Delete Receipt"></i> Delete</a> -->';

                                        strTable += '</tr>';

                                        strTable +=
                                            '<tr style="display: none;" id="loader_row_' +
                                            response['data'][i]['batch_id'] + '">';
                                        strTable +=
                                            '<td colspan="8"><i class="fa fa-spinner fa-spin fa-fw fa-2x"  id="loading"></i>';
                                        strTable += '</td>';
                                        strTable += '</tr>';



                                        strTable += '<tr id="tr_act_loader_' + response[
                                                'data'][i][
                                                'batch_id'
                                            ] +
                                            '" style="display: none"><td colspan="8"><i class="fa fa-spinner fa-spin fa-fw fa-1x" style="display: ;" id="filter_loader"></i>';
                                        strTable += '<td></tr>';

                                        k++;

                                    });

                                } else {

                                    strTable = '<tr><td colspan="8">' + response.msg + '</td></tr>';

                                }

                                $('#pagination').twbsPagination({
                                    totalPages: Math.ceil(response.total_rows / limit),
                                    visiblePages: 10,
                                    onPageClick: function(event, page) {
                                        total_overdue_po(page);
                                    }
                                });

                                $("#incomingData").html(strTable);
                                $("#incomingData").show();
                                $('#loading').hide();

                            } else if (response.data <= 0) {
                                $('#loading').hide();

                                strTable = '<tr><td colspan="9">' + response.msg + '</td></tr>';

                                $("#incomingData").html(strTable);
                                $("#incomingData").show();

                            } else if (response.status == '400') {
                                var strTable = "";
                                $('#loading').hide();
                                // alert(response.msg);
                                strTable += '<tr>';
                                strTable += '<td colspan="9">' + response.msg + '</td>';
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
                                '<td colspan="9"><strong class="text-danger">Connection error</strong></td>';
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
