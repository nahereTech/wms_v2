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
                <h3>Upward Adjustment</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group" style="float: right">
                        <!-- <a href="incoming"><button type="button" class="btn btn-primary">Back</button></a> -->
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



                        <span id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">



                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="item_name">Adjustment Type
                                    <span>*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <select class="form-control col-md-7 col-xs-12 required" id="adjustment_type"
                                        disabled="disabled">
                                        <option value="">-- Select --</option>
                                        <option value="add" selected="selected">Add to Qty</option>
                                        <option value="remove">Remove from Qty</option>

                                    </select>
                                </div>

                            </div>



                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="item_name">Item Name
                                    <span>*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                   <span id="selct_itn"></span><input type="hidden" value="" id="sltd_item_id">
                                    <!-- <input type="text" name="item_name" id="item_name"
                                        class="form-control col-md-7 col-xs-12"> -->
                                        <datalist id="options_items"></datalist><input list="options_items" class="form-control hold_id select_item_items" id="select_item_items_1" required>
                                </div>

                            </div>

                            



                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="quantity">Quantity
                                    <span>*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" id="quantity" required="required"
                                        class="form-control col-md-7 col-xs-12 required">
                                </div>
                            </div>

                            <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date_recieved">Date Recieved <span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-prepend input-group">
                              <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                             <input type="text" id="date_recieved" required="required" class="form-control col-md-7 col-xs-12 required">
                          </div>
                        </div>
                      </div> -->


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="warehouse">Warehouse
                                    <span>*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control col-md-7 col-xs-12 required" id="warehouse">


                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="warehouse_section">Warehouse Section <span>*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <span id="clear_selection">
                                        <input type="text" class="form-control" id="holds_item_name"
                                            style="display: none;" disabled="disabled">
                                    </span>
                                    <div id="holds_itms_id" class="holds_itms_id" style="float: left; display: none">
                                    </div>
                                    <input type="text" id="section_autocomplete" required="required"
                                        class="form-control col-md-7 col-xs-12 section_autocomplete">


                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="reason_type">Reason
                                    <span>*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control col-md-7 col-xs-12 required" id="reason_type">
                                        <option value="">-- Select --</option>
                                    </select>
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="comment">Description of
                                    Reason
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea cols="3" class="form-control col-md-7 col-xs-12" id="comment"></textarea>
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
                                    <button type="submit" class="btn btn-success" id="top_or_down">Add Item</button>
                                    <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="loader"></i>
                                    <!-- <div id="add_user_loading" style="display:  none">Loading...</div> -->
                                </div>
                            </div>

                        </span>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<!-- modal -->
<div class="modal fade" id="modal_incoming" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
    load_warehouse();
    fetch_reason_type();
    load_sections_for_items();


    function load_sections_for_items() {

var company_id = localStorage.getItem('company_id');


var list_whs = "";
$.ajax({

    type: "GET",
    dataType: "json",
    cache: false,
                headers: {'Authorization':localStorage.getItem('token') },

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
                `<option name='${v.item_name}' data='${v.barcode}' value='${v.item_name}' data-value=${v.id}>${v.barcode ? `SKU:${v.barcode}`: ''}</option>`;

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
$('#select_item_items_1').on('input', function() {
    onInput(1)
});

    // init_autocomplete1(); 

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
    if(fa.getAttribute("data")){
    var sku = fa.getAttribute("data");
    console.log(sku)
    
    // $(`#holds_itms_id_${id}`).html(`SKU: ${sku}`);
    $(`#selct_itn`).html(`SKU: ${sku}`);

    $(`#selct_itn`).show()
    }else{
    $(`#selct_itn`).hide()
    }
    // console.log(fa.html());

    var selected = fa.getAttribute('data-value');
    console.log(selected)

    // console.log($(`#select_item_items_${listid}`).val());
    // $("#myInput").val($('option[value='+this.value+']').data("text"))
    $(`#des_${id}`).val($("#select_item"));


}

    $('input#date_recieved').datepicker({
        dateFormat: "yy-mm-dd"
    });
    $('input#expiry_date').datepicker({
        dateFormat: "yy-mm-dd"
    });

    $('#top_or_down').on('click', top_or_down);

    // Single Select
    $("#vendor_name").autocomplete({

        source: function(request, response) {
            // Fetch data
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
                }

            });
        },
        minLength: 2,
        select: function(event, ui) {

            console.log(ui.item.id);
            // Set selection
            $('#vendor_name').val(''); // display the selected text
            $('#seltd_id').val(ui.item.id); // save selected id to input
            $('#selected_text').html(ui.item.label); // save selected id to input
            return false;

        }

    });





    $("#item_name").autocomplete({

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

            console.log(ui.item.id);
            // Set selection
            $('#item_name').val(''); // display the selected text
            $('#sltd_item_id').val(ui.item.id); // save selected id to input
            $('#selct_itn_text').html(ui.item.label); // save selected id to input
            $("#unit_type").val(ui.item.unit).trigger("change");

            $('#sltd_item_id').attr("dir", ui.item.unit);

            return false;

        }

    });



    //add the autocomplete function to power the form field
    $("#section_autocomplete").autocomplete({

        source: function(request, response) {
            // Fetch data
            $.ajax({

                url: api_path + "wms/section_autocomplete",
                type: 'post',
                headers: {'Authorization':localStorage.getItem('token') },

                dataType: "json",
                data: {
                    term: request.term,
                    company_id: localStorage.getItem('company_id'),
                    warehouse_id: localStorage.getItem('warehouse_id')
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
            $("#holds_item_name").val(ui.item.label);
            $("#holds_item_name").show();
            $("#holds_itms_id").html(ui.item.id);
            $("#section_autocomplete").hide();
            // $("#i_name_pencil_" + v.item_id).show();
            // $('#holds_item_name_'+id).val(ui.item.label+' '+ui.item.id);

            return false;

        }

    });


    $(document).on('click', '#clear_selection', function() {

        $("#holds_item_name").val('');
        $("#holds_item_name").hide();
        $("#holds_itms_id").html('');
        $("#section_autocomplete").show();
        $("#section_autocomplete").val('');

    });


});


function fetch_reason_type() {


    $.ajax({
        url: api_path + "wms/item_correction_reasons",
        type: "POST",
                headers: {'Authorization':localStorage.getItem('token') },

        data: {
            "settings_group": "topup"
        },
        dataType: "json",


        success: function(response) {

            // $('#page_loader').hide();
            // $('#employee_details_display').show();

            console.log(response);
            var options = '';

            $.each(response['data'], function(i, v) {
                options += '<option value="' + response['data'][i]['row_id'] + '">' + response[
                    'data'][i]['reason'] + '</option>';

                // emp_type = response['data'][i]['type_id'];
            });
            $('#reason_type').append(options);
        },
        // jqXHR, textStatus, errorThrown
        error: function(response) {


            console.log(response);
            // $('#page_loader').hide();
            // $('#employee_details_display').hide();
            // $('#employee_error_display').show();
        }
    });

}


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

function top_or_down() {

    var adjustment_type = $('#adjustment_type').val();
    var item_name = $('#sltd_item_id').val();
    var quantity = $("#quantity").val();
    var warehouse_id = $("#warehouse").val();
    var company_id = localStorage.getItem('company_id');
    var user_id = localStorage.getItem('user_id');
    var reason = $("#reason_type").val();
    var description = $("#comment").val();
    var store_type = "correction_incoming";
    var unit_id = $('#sltd_item_id').attr("dir");
    var grn_id = "";
    var transaction_date = get_current_date();
    var warehouse_section = $("#holds_itms_id").html();

    var blank;

 


    $("#error").html('');



    $(".required").each(function() {

        var the_val = $.trim($(this).val());

        if (the_val == "" || the_val == "0") {

            $(this).addClass('has-error');

            blank = "yes";

        } else {

            $(this).removeClass("has-error");

        }

    });

    if (warehouse_section == "") {
        $("#section_autocomplete").addClass('has-error');
        blank = "yes";
    }

    if (blank == "yes") {

        $("#error").html("You have a blank field");

        // return;

    }

    if (warehouse_section == "") {
        $("#error").html("You need to select a warehouse section the item is going to");
        return;
    }

    if (item_name == "") {
        $("#item_name").addClass("has-error");
        // return;
    } else {
        $("#item_name").removeClass("has-error");
    }

    var listObj = document.getElementById(`select_item_items_1`);
        console.log(listObj);
        var datalist = document.getElementById(listObj.getAttribute("list"));
        // var item_id = $("#holds_itms_id_" + id).html();
        var fa = datalist.options.namedItem(listObj.value);
        var for_item = fa.getAttribute('data-value');
        console.log(for_item)


    $("#top_or_down").hide();
    $("#loader").show();

    $.ajax({

        url: api_path + "wms/update_delivery_supply_history",
        type: "POST",
                headers: {'Authorization':localStorage.getItem('token') },

        data: {
            "item_id": for_item,
            "qty": quantity,
            "warehouse_id": warehouse_id,
            "company_id": company_id,
            "user_id": user_id,
            "reason": reason,
            "description": description,
            "store_type": store_type,
            "adjustment_type": adjustment_type,
            "unit_id": unit_id,
            "grn_id": grn_id,
            "transaction_date": transaction_date,
            "warehouse_section": warehouse_section
        },
        dataType: "json",


        success: function(response) {

            $("#top_or_down").show();
            $("#loader").hide();

            console.log(response);
            if (response.status == 200) {

                $('#modal_incoming').modal('show');

                $('#modal_incoming').on('hidden.bs.modal', function() {

                    // window.location.reload();
                    window.location.href = "./qty_adj_history";
                })

            } else if (response.status == '400') { // coder error message


                $("#error").html('Technical Error. Please try again later.');

            } else if (response.status == '401') { //user error message


                $("#error").html(response.msg);

            }
        },

        error(response) {

            $("#top_or_down").show();
            $("#loader").hide();
            $("#error").html('Connection error');
        }

    });

    //item_top_up


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


                        } else if (response['data'][i]['section_name'] == "Incoming" && response[
                                'data'][i]['section_exist'] == "no") {

                            $('#incoming').hide();
                            $('#main_display').hide();
                            $('#error_display').show();


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

            alert('Connection error!');


        }

    });
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

            // $('#page_loader').hide();
            // $('#employee_details_display').show();

            // console.log(response);
            var options = '';

            $.each(response['data'], function(i, v) {

                if (localStorage.getItem('warehouse_id') == response['data'][i]['warehouse_id']) {

                    options += '<option value="' + response['data'][i]['warehouse_id'] + '">' +
                        response['data'][i]['warehouse_name'] + '</option>';

                }

            });
            $('#warehouse').append(options);
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
</script>



<?php

include_once("../gen/_common/footer.php"); // header contents

?>
