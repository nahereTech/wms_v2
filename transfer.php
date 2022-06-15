<?php
include_once("_common/menu.php"); // menu list
include_once("../gen/_common/header.php"); // header contents
include_once("assets/wms.php"); // header contents
?>


<style type="text/css">
.column-title {
    text-align: center;
}

tbody {
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
                <h3>Transfer</h3>
            </div>

        </div>

        <div id="filter_display" style="display: ;">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">

                        <div class="x_content">
                            <br />

                            <div class="form-row">

                                <div class="col-sm-3 col-xs-12" id="transfer">
                                    <label>Transfer By</label>
                                    <select class="form-control col-md-7 col-xs-12 required" id="transfer_options">
                                        <option value="">-- Select --</option>
                                        <option id="warehouse">External transfer</option>
                                        <option id="section">Internal transfer</option>
                                    </select>
                                </div>

                                <div class="col-sm-3 col-xs-12" id="t_w" style="display: none;">
                                    <label>Warehouses</label>

                                    <datalist id="options">

                                    </datalist>

                                    <input list="options" class="form-control col-md-7 col-xs-12 required"
                                        id="transfer_warehouse" placeholder="--Select Warehouse--" autocomplete="off">
                                    <!-- <button onclick="getIdOfDatalist('transfer_warehouse');">check</button> -->


                                    <!-- <select class="form-control col-md-7 col-xs-12 required" id="transfer_warehouse">
                                          <option value="">-- Select --</option>

                                          </select> -->
                                </div>


                                <!-- <div class="col-sm-3 col-xs-12 t_s" style="display: none; ">
                                        <label>Warehouses</label>
                                        <select class="form-control col-md-7 col-xs-12 required transfer_ware" id="transfer_ware">
                                          <option value="">-- Select --</option>

                                           <option>Warehouse</option>
                                          <option>Section</option> 
                                          </select>

                                      </div> -->

                                <div class="col-sm-3 col-xs-12 t_s" style="display: none;">

                                    <label>Sections</label>
                                    <i class="fa fa-spinner fa-spin fa-fw fa-1x" style="display: none;"
                                        id="filter_"></i>
                                    <datalist id="options_sections">

                                    </datalist>

                                    <input list="options_sections"
                                        class="form-control col-md-7 col-xs-12 required transfer_section"
                                        id="transfer_section" placeholder="--Select Section--" autocomplete="off">

                                </div>

                                <div class="col-sm-2 col-md-3 col-xs-12" id="item_">

                                    <label>Item Name</label>

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

                                <div class="col-sm-3 col-xs-4">
                                    <label>.</label>
                                    <br>
                                    <button type="button" class="btn btn-success" id="filter_ware">Go</button>
                                    <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;"
                                        id="filter_loader"></i>

                                    <button type="button" class="btn btn-success" id="filter_sec">Go</button>
                                    <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;"
                                        id="filter_sec_loader"></i>

                                </div>





                            </div>


                            <br>
                            <br>


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

                    <div class="x_content">

                        <div class="table-responsive">


                            <div>

                            </div>

                            <table class="table table-striped jambo_table bulk_action" id="ware_items"
                                style="display: none;">
                                <thead>
                                    <tr class="headings">

                                        <th class="column-title" width="15%">ID</th>
                                        <th class="column-title" width="15%">Item</th>
                                        <th class="column-title" width="15%">Warehouse</th>
                                        <th class="column-title" width="15%">Section</th>
                                        <th class="column-title" width="15%">Qty</th>
                                        <th class="column-title" width="15%">Transfer item</th>

                                        </th>
                                        <th class="bulk-actions" colspan="6">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span
                                                    class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tr id="loading">
                                    <td colspan="6"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i>
                                    </td>
                                </tr>
                                <tbody id="incomingData">

                                </tbody>
                            </table>


                            <table class="table table-striped jambo_table bulk_action" id="sec_items"
                                style="display: none;">
                                <thead>
                                    <tr class="headings">

                                        <th class="column-title" width="15%">ID</th>
                                        <th class="column-title" width="15%">Item</th>
                                        <th class="column-title" width="15%">Section</th>
                                        <th class="column-title" width="15%">Qty</th>
                                        <th class="column-title" width="15%">Transfer item</th>
                                        <!-- <th class="bulk-actions" colspan="3">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th> -->
                                    </tr>
                                </thead>

                                <tr id="loading_stock_summary_incoming">
                                    <td colspan="5"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i>
                                    </td>
                                </tr>
                                <tbody id="incomingData_stock_summary_incoming">

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


<div class="modal fade" id="modal_transfer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;"><i class="fa info-circle"></i>
                    Transfer Item <span id=""></span> <span id="" style="display: none"></span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">

                <div class="row" style="text-align: center;">

                    <h2>Transfer Item</h2>
                    <h2 id="item_nam" class="ins" style="display: none;"></h2>
                    <h2 id="item_sec" class="ins_sec" style="display: none;"></h2>
                    <h2>to</h2>
                    <!-- Move Item from warehouse<br><br> -->
                    <div id="move_warehouse" style="width: 200px; margin-left: auto; margin-right: auto;">
                        <datalist id="select_options">

                        </datalist>
                        <input list="select_options" class="form-control col-md-7 col-xs-12 required" id="move_w"
                            placeholder="--Select Warehouse--" autocomplete="off">
                        <br>

                        <!-- <select class="form-control col-md-7 col-xs-12 required" id="move_w" style="text-align: center; margin-bottom: 10px;">
                                          <option value="">-- Select warehouse--</option>
                                          </select> -->
                        <datalist id="options_sec">

                        </datalist>

                        <input list="options_sec" class="form-control col-md-7 col-xs-12 required" id="move_s"
                            placeholder="--Select Section--" autocomplete="off">

                        <!-- <select class="form-control col-md-7 col-xs-12 required" id="move_s" style="text-align: center;">
                                          <option value="">-- Select section --</option>
                                          </select> -->

                        <!--  <select class="form-control col-md-3 col-xs-12 required" id="move" style="text-align: center; margin-top: 10px">
                                          </select> -->
                        <br>
                        <br>


                        <datalist id="options_qty">

                        </datalist>

                        <input list="options_qty" class="form-control col-md-3 col-xs-12 required" id="move"
                            placeholder="--Select Qty--" autocomplete="off">

                    </div>


                    <!-- <div id="">
                    <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;" id="dwlaooda_loader"></i>
                </div> -->

                </div>

            </div>
            <div class="modal-footer">
                <div style="width: 100px; margin-right: auto;margin-left: auto;">
                    <button type="button" class="btn btn-success" id="filter_transfer_ware"
                        style="display: none;">Transfer</button>
                    <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display:none ;" id="filter_ware_loader"></i>
                    <button type="button" class="btn btn-success" id="filter_transfer_sec"
                        style="display: none;">Transfer</button>
                    <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display:none ;" id="filter_sec_loader_"></i>
                    <h1 id="filter_ware_success" style="display: none;">Item Transferred</h1>

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
                <h4>Item Transferred Successfully!</h4>
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
function getIdOfDatalist(listid) {
    var listObj = document.getElementById(listid);
    var datalist = document.getElementById(listObj.getAttribute("list"));
    var fa = datalist.options.namedItem(listObj.value);
    localStorage.setItem('value', fa.getAttribute('data-value'))
}

function getWarehouses(listid) {
    var listObj = document.getElementById(listid);
    console.log(listObj);
    var datalist = document.getElementById(listObj.getAttribute("list"));
    console.log(datalist);
    var fa = datalist.options.namedItem(listObj.value);
    console.log(fa)
    localStorage.setItem('value_w', fa.getAttribute('data-value'))
}

function getSections_(listid) {
    var listObj = document.getElementById(listid);
    console.log(listObj);
    var datalist = document.getElementById(listObj.getAttribute("list"));
    console.log(datalist);
    var fa = datalist.options.namedItem(listObj.value);
    console.log(fa)
    console.log(fa.getAttribute('data-value'))
    localStorage.setItem('value_sec', fa.getAttribute('data-value'))
}

function getSections(listid) {
    var listObj = document.getElementById(listid);
    console.log(listObj);
    var datalist = document.getElementById(listObj.getAttribute("list"));
    console.log(datalist);
    var fa = datalist.options.namedItem(listObj.value);
    console.log(fa)
    console.log(fa.getAttribute('data-value'))
    localStorage.setItem('value_s', fa.getAttribute('data-value'))
}
</script>
<script type="text/javascript">
$(document).ready(function() {
    // $("#modal_doing_dwnld").modal('show');
    populate_warehouse_section();
    $("#filter_sec").hide();
    $("#filter_ware").hide();
    $('#filter_transfer_ware').hide();
    $('#filter_transfer_sec').hide();




    pop_warehouse_modal();
    $(".t_s").hide();
    $("#t_w").hide();
    $("#item_").hide();
    // $("#tab_ware").hide();
    // $("#tab_sec").hide();
    $(document).on('click', '.item_info', function() {

        var item_id = $(this).attr('id').replace(/show_ware_/, '');


        localStorage.setItem('item_id', item_id)
        var item_na = $(this).attr('dir')
        var qty = $(this).attr('data')
        var ware_section = $(this).attr('alt')
        localStorage.setItem('ware_sec', ware_section);


        localStorage.setItem('item_name', item_na)
        localStorage.setItem('ware_qty', qty)

        var select = '<option value="">-- Specify qty --</option>';
        for (i = 1; i <= qty; i++) {
            select += '<option value=' + i + '></option>';
        }
        $('#options_qty').append(select);


        var item = localStorage.getItem("item_id")
        var item_na = localStorage.getItem("item_name")
        $('#item_nam').html(`<span>${item_na.toUpperCase()}<span>`)
        $('#item_sec').hide();
        $('#item_nam').show();
        $('#move_s').hide();
        $('#move_w').show();
        $('#filter_transfer_sec').hide();
        $('#filter_transfer_ware').show();
        $('#modal_transfer').modal('show')
        // transfer_ware(item,qty)
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

            console.log(ui.item.id);
            // Set selection
            localStorage.setItem('data', ui.item.id);
            $('#item_text').val(ui.item.label);
            $("#holds_item_id").html(ui.item.id); // display the selected text
            document.getElementById("item_text").disabled = true;
            // save selected id to input
            // $('#selct_itn_text').html(ui.item.label); // save selected id to input
            // $("#unit_type").val(ui.item.unit).trigger("change");
            return false;

        }

    });

    $(document).on('click', '#filter_transfer_ware', function() {
        getWarehouses('move_w');
        var item = localStorage.getItem("item_id");
        var item_qty = $('#move').val();
        var from_warehouse = localStorage.getItem('value');
        var to_warehouse = localStorage.getItem('value_w');
        var ware_section = $(this).attr('alt');
        localStorage.setItem('ware_section', ware_section);
        $('#filter_transfer_ware').hide();
        $('#filter_ware_loader').show();
        transfer_ware(item, to_warehouse, from_warehouse, item_qty)
    })

    $(document).on('click', '#filter_transfer_sec', function() {
        getSections('move_s');
        pop_sec_modal()


        var item = localStorage.getItem("sec_id");
        var item_qty = $('#move').val();
        var warehouse = $('#transfer_warehouse').val();
        var from_section = $('#transfer_section').val();
        var to_section = localStorage.getItem("value_s");
        var ware_section = $(this).attr('alt');
        // alert(ware_section);
        localStorage.setItem('ware_sec', ware_section);
        $('#filter_transfer_ware').hide();
        $('#filter_transfer_sec').hide();
        $('#filter_sec_loader_').show();

        transfer_sec(item, warehouse, to_section, from_section, item_qty, ware_section)
    })


    $(document).on('click', '.item_sec', function() {

        var sec_id = $(this).attr('id').replace(/show_sec_/, '');



        localStorage.setItem('sec_id', sec_id)
        var sec_na = $(this).attr('dir')
        var qty = $(this).attr('data')
        var ware_section = $(this).attr('alt');
        // alert(ware_section);
        localStorage.setItem('ware_sec', ware_section);


        localStorage.setItem('sec_name', sec_na)
        localStorage.setItem('sec_qty', qty)
        localStorage.setItem('sec_id', sec_id)

        var select = '<option value="">-- Specify qty --</option>';
        for (i = 1; i <= qty; i++) {
            select += '<option val=' + i + '>' + i + '</option>';
        }
        $('#options_qty').html(select);

        $('#item_sec').html(`<span>${sec_na.toUpperCase()}<span>`)
        $('#item_nam').hide();
        $('#item_sec').show();
        $('#move_w').hide();
        $('#move_s').show();
        $('#filter_transfer_ware').hide();
        $('#filter_transfer_sec').show();
        $('#modal_transfer').modal('show')

    });



    $('#transfer_options').on('change', function() {
        if ($(this).find('option:selected').prop('id') == "warehouse") {
            $("#filter_sec").hide();
            $("#filter_ware").show();
            $(".t_s").hide();
            $("#t_w").show();
            $("#item_").show();
            $("#transfer_warehouse").val("");
            $("#transfer_section").val("");
            $("#item_text").val("");

            $(document).on('click', '#filter_ware', function() {
                getIdOfDatalist('transfer_warehouse');

                // alert($("#transfer_warehouse").attr('data-value'))

                if (!($("#transfer_warehouse").val())) {
                    alert('Select a warehouse to continue')
                    return;
                }
                $("#sec_items").hide();
                $("#ware_items").show();
                $('#pagination').twbsPagination('destroy');
                warehouse_items("")
            });


        } else if ($(this).find('option:selected').prop('id') == "section") {
            pop_sec_modal()
            pop_sec()
            $("#t_w").hide();
            $(".t_s").show();
            $("#filter_ware").hide();
            $("#filter_sec").show();
            $("#item_").show();
            $("#transfer_warehouse").val("");
            $("#transfer_section").val("");
            $("#item_text").val("");





            $(document).on('click', '#filter_sec', function() {

                // if(!($("#transfer_ware").val())){
                //   alert('Select a warehouse to continue')
                //   return;
                // }
                getSections_("transfer_section")

                if (!($("#transfer_section").val())) {
                    alert('Select a section to continue')
                    return;
                }
                $("#ware_items").hide();
                $("#sec_items").show();

                $('#pagination').twbsPagination('destroy');
                section_items("")
            });

        } else {
            $(".t_s").hide();
            $("#t_w").hide();
        }

    })

    $("#transfer_ware").change(function() {
        var selected = $(this).children("option:selected").val();
        localStorage.setItem('selected_warehouse', selected)
        $("#filter_").show();
        $('#transfer_section').html('<span>loading section</span>')


        pop_sec()
        // alert("You have selected the country - " + selectedCountry);

    });


    $("#move_w").change(function() {
        var selected = $(this).children("option:selected").val();
        localStorage.setItem('selected_warehouse', selected)
        $("#filter_").show();
        $('#move_s').html('<span>loading section</span>')


        pop_sec_modal()
        // alert("You have selected the country - " + selectedCountry);

    });

    function pop_sec_modal() {

        // var user_id = localStorage.getItem('user_id');

        $.ajax({

            type: "POST",
            dataType: "json",
            cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

            url: api_path + "wms/my_sections",
            data: {
                "warehouse_id": localStorage.getItem('warehouse_id'),
                "company_id": localStorage.getItem('company_id'),

            },

            success: function(response) {

                console.log(response);


                if (response.status == '200') {



                    var strg = '<option value="">-- Select section --</option>';
                    $(response.data).each(function(i, v) {
                        if (v.id !== localStorage.getItem('value_sec')) {
                            strg +=
                                `<option name=${v.section_name} value=${v.section_name} data-value=${v.id}></option>`;
                        }
                    })
                    $("#options_sec").html(strg);
                    // $("#move_s").html(strg);

                } else {


                }
            },


            error: function(response) {
                // $("#main_display").hide();
                // $("#page_div").show();
            }

        })

    }

    function pop_warehouse_modal() {

        var user_id = localStorage.getItem('user_id');
        var warehouse = localStorage.getItem('warehouse_id');


        $.ajax({

            type: "POST",
            dataType: "json",
            cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

            url: api_path + "wms/list_warehouse",
            data: {
                "user_id": user_id,
                "company_id": localStorage.getItem('company_id'),

            },

            success: function(response) {

                console.log(response);


                if (response.status == '200') {

                    var strg = "";
                    $(response.data).each(function(i, v) {

                        if (v.warehouse_id !== warehouse) {
                            strg +=
                                `<option name=${v.warehouse_name} value=${v.warehouse_name} data-value=${v.warehouse_id}></option>`;
                        }
                    })

                    // $('#transfer_warehouse').append(strg)  
                    // $('#transfer_ware').append(strg)
                    $('#select_options').html(strg)



                } else {


                }
            },


            error: function(response) {
                // $("#main_display").hide();
                // $("#page_div").show();
            }

        })
    }

    function pop_sec() {

        // var user_id = localStorage.getItem('user_id');

        $.ajax({

            type: "POST",
            dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

            cache: false,
            url: api_path + "wms/my_sections",
            data: {
                "warehouse_id": localStorage.getItem('warehouse_id'),
                "company_id": localStorage.getItem('company_id'),

            },

            success: function(response) {

                console.log(response);


                if (response.status == '200') {



                    var strg = '<option value="">-- Select section --</option>';
                    $(response.data).each(function(i, v) {
                        strg +=
                            `<option name=${v.section_name} value=${v.section_name} data-value=${v.id}></option>`;

                        // strg += `<option value=${v.id}>${v.section_name}</option>`;
                        // strg += `<option name=${v.section_name} value=${v.section_name} data-value=${v.id}></option>`;

                    })

                    $('#options_sections').html(strg)
                    // $("#move_s").html(strg);
                    $("#filter_").hide();

                } else {


                }
            },


            error: function(response) {
                // $("#main_display").hide();
                // $("#page_div").show();
            }

        })

    }


    function transfer_ware(item, to_warehouse, from_warehouse, item_qty) {

        $('#filter_transfer_ware').hide();
        $.ajax({
            type: "POST",
            dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

            url: api_path + "wms/item_transfer",
            data: {
                "company_id": localStorage.getItem('company_id'),
                "from_warehouse": from_warehouse,
                "item_id": item,
                "transfer_type": "external",
                "user_id": localStorage.getItem('user_id'),
                "to_warehouse": to_warehouse,
                "item_qty": item_qty,
                "from_section": localStorage.getItem('ware_sec'),
                "to_section": 0
            },

            success: function(response) {

                console.log(response);


                if (response.status == '200') {

                    $('#filter_ware_loader').hide();
                    // $('#filter_ware_success').show();
                    $('#modal_transfer').modal('hide');
                    $('#modal_item').modal('show');
                    setTimeout(function() {
                        location.reload();
                    }, 2000);

                } else {
                    $('#modal_transfer').modal('hide');
                    alert(response.msg);
                    location.reload();

                }
            },
            error: function(response) {
                // $("#main_display").hide();
                // $("#page_div").show();
            }

        })

    }


    function transfer_sec(item, warehouse, to_section, from_section, item_qty, ware_section) {
        $.ajax({

            type: "POST",
            dataType: "json",
            cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

            url: api_path + "wms/item_transfer",
            data: {
                "item_id": localStorage.getItem('sec_id'),
                "company_id": localStorage.getItem('company_id'),
                "from_warehouse": localStorage.getItem('warehouse_id'),
                "to_warehouse": localStorage.getItem('warehouse_id'),
                "transfer_type": "internal",
                "user_id": localStorage.getItem('user_id'),
                "item_qty": item_qty,
                "from_section": localStorage.getItem('value_sec'),
                "to_section": to_section,
            },

            success: function(response) {

                console.log(response);


                if (response.status == '200') {

                    $('#filter_ware_loader').hide();
                    $('#modal_transfer').modal('hide');
                    $('#modal_item').modal('show');
                    setTimeout(function() {
                        location.reload();
                    }, 2000);


                } else {
                    $('#modal_transfer').modal('hide');
                    alert(response.msg);
                    location.reload();
                }
            },


            error: function(response) {
                // $("#main_display").hide();
                // $("#page_div").show();
            }

        })

    }


    function warehouse_items(page) {
        document.getElementById("item_text").disabled = false;


        var user_id = localStorage.getItem('user_id');
        if (page == "") {
            var page = 1;
        }
        var limit = 10;
        $("#loading").show();
        $("#incomingData").hide();
        var ware_id = $("#transfer_warehouse").val();
        localStorage.setItem('ware_id', ware_id)


        $.ajax({

            type: "GET",
            dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

            url: api_path + "wms/list_warehouse_items",
            data: {
                "user_id": user_id,
                "company_id": localStorage.getItem('company_id'),
                "warehouse_id": localStorage.getItem('value'),
                // "warehouse_section": $("#transfer_section").val(),
                "item_id": localStorage.getItem('data'),
                "page": page,
                "limit": limit

            },

            success: function(response) {

                console.log(response);



                if (response.status == '200') {
                    // <tr id="loading">
                    //                                     <td colspan="3"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i></td>
                    //                                 </tr>
                    //                                 <tbody id="incomingData">

                    //                                 </tbody>
                    $('#loading').hide();

                    var add_tab = ""

                    $(response.data).each(function(i, v) {
                        console.log(v.item_name)
                        if (v.qty != 0) {


                            add_tab += `<tr>
                            <td>${v.item_id}</td>
                            <td>${v.item_name}</td>
                            <td>${v.warehouse_name}</td>
                            <td>${v.section_name}</td>
                            <td>${v.qty}</td>
                            <td><i class="fa fa-edit fa-edit fa-fw fa-1x item_info" id="show_ware_${v.item_id}" dir="${v.item_name}" data="${v.qty}" alt="${v.section_id}" style="cursor:pointer"></i></td>
                            </tr>`
                        }

                        // $('#const_sec').attr('placeholder', `${v.section_name}`)
                        // $('#const_sec').attr('value', `${v.section_name}`)

                        $('#incomingData').html(add_tab);
                        $('#pagination').twbsPagination({
                            totalPages: Math.ceil(response.total_rows / limit),
                            visiblePages: 10,
                            onPageClick: function(event, page) {
                                warehouse_items(page);
                            }
                        });
                        $('#loading').hide();
                        $("#incomingData").show();
                        $("#transfer_section").val("")



                    })


                } else {
                    var no_rec = ""
                    no_rec += `<tr>
                        <td colspan="5">${response.msg}</td>
                        </tr>`
                    $('#incomingData').html(no_rec);
                    $('#loading').hide();
                    $("#incomingData").show();


                }
            },


            error: function(response) {
                // $("#main_display").hide();
                // $("#page_div").show();
            }

        })
        localStorage.removeItem('data')

    }


    function section_items(page) {
        document.getElementById("item_text").disabled = false;


        var user_id = localStorage.getItem('user_id');
        if (page == "") {
            var page = 1;
        }
        var limit = 10;
        $("#loading_stock_summary_incoming").show();
        $("#incomingData_stock_summary_incoming").hide();
        var ware_id = $("#transfer_ware").val()
        // localStorage.setItem('wareeeeeeeeeeeee_id', ware_id)


        $.ajax({

            type: "GET",
            dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

            url: api_path + "wms/list_warehouse_items",
            data: {
                "user_id": user_id,
                "company_id": localStorage.getItem('company_id'),
                "warehouse_id": localStorage.getItem('warehouse_id'),
                "warehouse_section": localStorage.getItem('value_sec'),
                "item_id": localStorage.getItem('data'),
                "page": page,
                "limit": limit

            },

            success: function(response) {

                console.log(response);


                if (response.status == '200') {


                    var add_tab = ""

                    $(response.data).each(function(i, v) {
                        console.log(v.item_name)
                        if (v.qty != 0) {
                            add_tab += `<tr>
                            <td>${v.item_id}</td>
                            <td>${v.item_name}</td>
                            <td>${v.section_name}</td>
                            <td>${v.qty}</td>
                            <td><i class="fa fa-edit fa-edit fa-fw fa-1x item_sec" id="show_sec_${v.item_id}" dir="${v.item_name}" data="${v.qty}" alt="${v.section_id}" style="cursor:pointer"></i></td>
                            </tr>`
                        } else {
                            add_tab += `<tr>
                            <td>${v.item_id}</td>
                            <td>${v.item_name}</td>
                            <td>${v.section_name}</td>
                            <td>${v.qty}</td>
                            <td></td>
                            </tr>`

                        }
                        $('#incomingData_stock_summary_incoming').html(add_tab);
                        $('#pagination').twbsPagination({
                            totalPages: Math.ceil(response.total_rows / limit),
                            visiblePages: 10,
                            onPageClick: function(event, page) {
                                section_items(page);
                            }
                        });
                        $('#loading_stock_summary_incoming').hide();
                        $("#incomingData_stock_summary_incoming").show();
                        // $("#loading_issue_order_history").hide();



                    })


                } else {
                    var no_rec = ""
                    no_rec += `<tr>
                        <td colspan="5">${response.msg}</td>
                        </tr>`
                    $('#incomingData_stock_summary_incoming').html(no_rec);
                    $('#loading_stock_summary_incoming').hide();
                    $("#incomingData_stock_summary_incoming").show();


                }
            },


            error: function(response) {
                // $("#main_display").hide();
                // $("#page_div").show();
            }

        })
        localStorage.removeItem('data')

    }

    function table_items() {

        var user_id = localStorage.getItem('user_id');
        var warehouse_id = localStorage.getItem('warehouse_id');


        $.ajax({

            type: "POST",
            dataType: "json",
                headers: {'Authorization':localStorage.getItem('token') },

            cache: false,
            url: api_path + "wms/list_warehouse",
            data: {
                "user_id": user_id,
                "company_id": localStorage.getItem('company_id'),

            },

            success: function(response) {

                console.log(response);


                if (response.status == '200') {

                    var strg = "";
                    $(response.data).each(function(i, v) {

                        strg +=
                            `<option value=${v.warehouse_id}>${v.warehouse_name}</option>`;

                    })
                    $('#transfer_warehouse').append(strg)
                    // $('#move_w').append(strg)
                    $('#transfer_ware').append(strg)
                } else {


                }
            },


            error: function(response) {
                // $("#main_display").hide();
                // $("#page_div").show();
            }

        })

    }


    function populate_warehouse_section() {
        $('#options').val("")

        var user_id = localStorage.getItem('user_id');
        var warehouse = localStorage.getItem('warehouse_id');


        $.ajax({

            type: "POST",
            dataType: "json",
            cache: false,
                headers: {'Authorization':localStorage.getItem('token') },
            
            url: api_path + "wms/list_warehouse",
            data: {
                "user_id": user_id,
                "company_id": localStorage.getItem('company_id'),

            },

            success: function(response) {

                console.log(response);


                if (response.status == '200') {

                    var strg = "";
                    $(response.data).each(function(i, v) {

                        if (v.warehouse_id == warehouse) {

                            strg +=
                                `<option name=${v.warehouse_name} value=${v.warehouse_name} data-value=${v.warehouse_id}></option>`;
                        }
                    })

                    $('#options').html(strg)
                    $('#transfer_ware').html(strg)
                    // $('#move_w').append(strg)           

                } else {


                }
            },


            error: function(response) {
                // $("#main_display").hide();
                // $("#page_div").show();
            }

        })

    }

    function display_filter() {

        $('#item_text').val("");
        $('#options').html("")

    }

})
</script>


<?php
// include_once("_common/menu.php"); // menu list
include_once("../gen/_common/footer.php"); // header contents
// include_once("assets/wms.php"); // header contents
?>
