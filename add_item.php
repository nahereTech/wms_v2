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
                <h3>Create Item</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group" style="float: right">
                        <a href="items"><button type="button" class="btn btn-primary">Back</button></a>
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_custom_id">SKU / Item
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="add_description">Description
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="starting_quantity">Starting Quantity <span>*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" class="form-control add_item_required allownumericwithdecimal"
                                        id="starting_quantity">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="starting_quantity">Weight/Volume<span></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12" style="display: flex;">
                                    <input type="text" class="form-control allownumericwithdecimal"
                                        id="weight" >
                                        <!-- <select class="form-control required" id="measurement"><option value="">-- Measurement --</option>
                                        
                                        </select> -->
                                    
                                </div>
                            </div>



                            <div class="form-group" id="warehouse_sec">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="add_unit_type">Sections<span>*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <datalist id="options">

                                    </datalist>

                                    <input list="options" class="form-control col-md-7 col-xs-12"
                                        id="select_item" autocomplete="off">
                                </div>
                                <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text"  class="form-control warehouse_section_auto"
                                        id="warehouse_section">
                                    <div id="holds_section_id" class="holds_section_id"
                                        style="float: left; display: none"></div>
                                    <div id="clear_selection">
                                        <input type="text" class="form-control" placeholder="Last Name"
                                            id="holds_item_name" style="display: none;" disabled="disabled">
                                    </div>
                                </div> -->
                            </div>




                            <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_min_alert">Low Qty Alert<span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="add_min_alert"  class="form-control col-md-7 col-xs-12">
                        </div>

                      </div> -->


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Add Item Pictures<span>*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input name="file" type="file" multiple="multiple" id="file_input"/>
                                    <!-- <form action="/api/wms/upload_images" class="dropzone" id="itempictureform">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple="multiple" />
                                        </div>
                                    </form> -->
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


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

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
    $("#warehouse_sec").hide();
    load_sections_for_item();

    var image_name = "";
    // page_warehouse_access();
    // does_user_have_access_to_page();
    load_unit_type();
    measurement()

    // Dropzone.options.itempictureform = {
    //                paramName: "file",
    //                uploadMultiple: true,
    //                parallelUploads: 1,
    //                maxFiles: 5,
    //                maxFilesize: 1, //1 MB
    //                accept: function(file, done) {
    //                  if (file.type != "image/jpeg" && file.type != "image/png" && file.type != "image/gif"){
    //                    alert("You are allowed to drag only images");
    //                  }else{
    //                    done();
    //                  }

    //                },
    //                init: function() {

    //                  this.on("maxfilesexceeded", function(file){
    //                      alert("No more files please!");
    //                  });


    //                  this.on("sending", function(file, xhr, formData) {
    //                    var name = "item_name";
    //                    formData.append(name, file, "company_id", localStorage.getItem('company_id'));

    //                  });
    //                },
    //                success: function(file, response){
    //                  alert(response,name)
    //                  var obj = jQuery.parseJSON(response);
 

    var images = [];


    Dropzone.options.itempictureform = {

        maxFiles: 4,
        maxFilesize: 1, //1 MB
        headers: {'Authorization':localStorage.getItem('token')},
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

    $(document).on('click', '#add', function() {
        console.log($('#select_item').val())
        if($('#starting_quantity').val() < 1){
         add_company_item(images, 0);
        }else{
         getItem('select_item', images)
        }
        // add_company_item(images);

    });



    $(".warehouse_section_auto").autocomplete({

        source: function(request, response) {
            // Fetch data
            console.log(response);
            $.ajax({

                url: api_path + "wms/section_autocomplete",
                type: 'post',
                headers: {
                                'Authorization':localStorage.getItem('token'),
                             },
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


});



function measurement() {


$.ajax({

    type: "POST",
    dataType: "json",
    headers: {
                'Authorization':localStorage.getItem('token'),
    },
    cache: false,
    url: api_path + "wms/list_unit",
    data: {
        "company_id": localStorage.getItem('company_id'),
       
    },

    success: function(response) {

        console.log(response);
        var measure =''

        if (response.status == '200') {
            $.each(response['data'], function(i, v) {
            measure += `<option>${v}</option>`
            })

            $("#measurement").append(measure);


        } else {
            // $("#main_display").hide();

        }

    },

    error: function(response) {
        $("#main_display").hide();
        // $(".page_div").html('<br><br><br><br><h2>Access Denied</h2>You do not have permission to access this page<br><br<br>');
        $("#page_div").show();
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
        }
    })

    var user_id = localStorage.getItem('user_id');
    var module_id = 6;
    // var profile_id = 26;

    $.ajax({

        type: "POST",
        dataType: "json",
         headers: {
                'Authorization':localStorage.getItem('token'),
        },
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
                // list_of_warehouse_users('');

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


function page_warehouse_access() {

    var company_id = localStorage.getItem('company_id');

    var user_id = localStorage.getItem('user_id');
    var module_id = 6;


    $.ajax({

        type: "POST",
        dataType: "json",
         headers: {
                'Authorization':localStorage.getItem('token'),
         },
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
                    $('#main_display').hide();
                    $('#error_display').show();
                    var k = 1;
                    $.each(response['data'], function(i, v) {


                        if (response['data'][i]['section_name'] == "Incoming" && response['data'][i]
                            ['section_exist'] == "yes") {

                            $('#incoming').show();


                        } else if (response['data'][i]['section_name'] == "Incoming" && response[
                                'data'][i]['section_exist'] == "no") {

                            $('#incoming').hide();


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
        add_company_item(images, selected);
        // submit_add_batch(selected);
        // localStorage.setItem('value_w', fa.getAttribute('data-value'))
    }
    $('#code').on('keydown', function(e) {
        console.log(e.which)
        console.log(this.value.length)
        if (e.which == 13) {
            $('#pagination').twbsPagination('destroy');
            list_grns('');
        }
    })

function load_unit_type() {

    var company_id = localStorage.getItem('company_id');

    $.ajax({
        url: api_path + "wms/list_unit",
        type: "POST",
         headers: {
                'Authorization':localStorage.getItem('token'),
    },
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
                options += '<option value="' + response['data'][i]['id'] + '">' + response['data'][
                    i]['unit_name'] + '</option>';

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

$( "#starting_quantity" ).keyup(function() {
//   alert( $(this).val() );
  if( $(this).val() > 0){
    $("#warehouse_sec").show();
  }else{
    $("#warehouse_sec").hide();
  }
});  

function load_sections_for_item() {

var company_id = localStorage.getItem('company_id');


var list_whs = "";
$.ajax({

    type: "POST",
    dataType: "json",
     headers: {
                'Authorization':localStorage.getItem('token'),
    },
    cache: false,
    url: api_path + "wms/list_warehouse_section2",
    
    data: {
        "warehouse_id": localStorage.getItem('warehouse_id'),
        "company_id": company_id,
    },

    success: function(response) {

        var k = 1;
        console.log(response.data)
        $(response.data).each(function(i, v) {
            list_whs +=
                `<option name=${v.section_name} value=${v.section_name} data-value=${v.section_id}></option>`;
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

         function import_file() {
            var company_id = localStorage.getItem('company_id');
            var overwrite_existing = $("input[name='overwrite']:checked").val();

            var fd = new FormData();
            var data_file = $('#import_excel_file').prop("files")[0];
            fd.append("company_id", company_id);
            fd.append("overwrite_existing", overwrite_existing ? overwrite_existing : 'no');
            fd.append("file", data_file);
            console.log(data_file)
            $.ajax({

                type: "POST",
                dataType: 'json',
                headers: {
                        'Authorization':localStorage.getItem('token'),
                        // 'Content-Type':'application/json'
                },
                processData: false,
                contentType: false,
                // enctype: "multipart/form-data",
                cache: false,
                url: base_url + "/api/pos/importProducts",
                data: fd,
                success: function(response) {

                    var k = 1;
                    console.log(response.data)
                    console.log(response.d_link);
                    var url = response.d_link;
                    $(".for_edit").show();

                    setTimeout(() => {
                        $(".for_edit").hide();
                    }, 2000);
                    $('#export_trigger').attr("href", url);
                    $('#export_trigger').trigger("click");
                    document.getElementById('export_trigger').click();
                    setTimeout(() => {
                        $(".contact_show").hide()
                        location.reload()
                    }, 2000);
                },
                error: function() {

                    $("#for_err").html(`${response.msg}`);
                    $("#err_contact").remove();
                    $(`<h4 id="err_contact" style="padding:10px; margin:0px">Enter a valid email address</h4>`)
                        .insertAfter(".swal2-error");
                    $(".edit_error").show();

                    setTimeout(() => {
                        $(".edit_error").hide();
                        $("#err_contact").remove();
                    }, 5000);
                    console.log(response);
                }

            });

        }


function add_company_item(image_name, warehouse_section) {
    console.log(warehouse_section)
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

            var fd = new FormData();
            // var data_file = $('#import_excel_file').prop("files")[0];

            var filesLength=document.getElementById('file_input').files.length;
            for(var i=0;i<filesLength;i++){
                fd.append(`item_images[${i}]`, document.getElementById('file_input').files[i]);
            }

            fd.append("company_id", company_id);
            fd.append("warehouse_id", warehouse_id);
            fd.append("custom_id", custom_id);
            fd.append("user_id", user_id);
            fd.append("item_name", item_name);
            fd.append("description", description);
            fd.append("barcode", barcode);
            fd.append("item_weight", $('#weight').val());
            fd.append("unit_type", unit_type);
            // fd.append("item_images", item_images);
            fd.append("batch_id", 0);
            fd.append("quantity", starting_quantity);
            fd.append("section", warehouse_section);


           

            $('#add').hide();
            $('#item_loader').show();
    


    $.ajax({

        type: "POST",
        dataType: "json",
        cache: false,
         headers: {
                'Authorization':localStorage.getItem('token'),
    },
        url: api_path + "wms/create_item",
        processData: false,
                contentType: false,
                // enctype: "multipart/form-data",
                cache: false,
                data: fd,
        // data: {
        //     "company_id": company_id,
        //     "warehouse_id": warehouse_id,
        //     "custom_id": custom_id,
        //     "user_id": user_id,
        //     "item_name": item_name,
        //     "description": description,
        //     "barcode": barcode,
        //     "item_weight": $('#weight').val(),
        //     "unit_type": unit_type,
        //     "item_images": image_name,
        //     "batch_id": 0,
        //     "quantity": starting_quantity,
        //     "section": warehouse_section
        // },

        success: function(response) {

            // console.log(response);

            if (response.status == '200') {

                $('#error').html('');
                $('#modal_item').modal('show');

                // $('#modal_item').on('hidden.bs.modal', function() {
                //     // do something…

                //     window.location.reload();
                    window.location.href = base_url+"items";
                // })


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
</script>



<?php
include_once("../gen/_common/footer.php"); // header contents

?>