<?php
include_once("_common/menu.php"); // menu list
include_once("../gen/_common/header.php"); // header contents
include_once("assets/wms.php"); // header contents
?>
<style type="text/css">
.overlay {
    height: 0%;
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #fff;
    overflow-y: hidden;
    transition: 1.0s;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
}

.overlay a {
    padding: 10px;
    text-decoration: none;
    font-size: 40px;
    color: black;
    display: block;
    transition: 0.3s;
}

.overlay a:hover,
.overlay a:focus {
    color: black;
}

.overlay .closebtn {
    position: absolute;
    top: 10px;
    right: 35px;
    font-size: 70px;
}



.row>.column {
    padding: 0 8px;
}

.row:after {
    content: "";
    display: table;
    clear: both;
}

.column {
    float: left;
    width: 25%;
}

/* The Modal (background) */
.modal_ {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.8);
}

/* Modal Content */
.modal-content_ {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    width: 90%;
    max-width: 1200px;
}

/* The Close Button */
.close_ {
    color: white;
    position: absolute;
    top: 10px;
    right: 25px;
    font-size: 35px;
    font-weight: bold;
}

.close_:hover,
.close_:focus {
    color: #999;
    text-decoration: none;
    cursor: pointer;
}

.mySlides {
    display: none;
}

.cursor {
    cursor: pointer;
}

/* Next & previous buttons */
/* .prev,
.next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -50px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
    background-color: rgba(0, 0, 0, 0.8);
} */

/* Position the "next button" to the right */
.next {
    right: 0;
    border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
    background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    bottom: 0;
}

img {
    margin-bottom: -4px;
}

.caption-container {
    text-align: center;
    background-color: black;
    padding: 2px 16px;
    color: white;
}

.demo {
    opacity: 0.6;
}

.active,
.demo:hover {
    opacity: 1;
}

img.hover-shadow {
    transition: 0.3s;
}

.hover-shadow:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
                <h3>Items (<span id="total_of_itms"></span>)</h3>
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
                    <div class="input-group" style="float: right; display: flex;">
                        <!--span class="input-group-btn"-->
                        <button type="button" class="btn btn-default" id="item_filter">Filter</button>
                        <a href="add_item" class="btn btn-success add_item" style="display: none;">Create Item</a>


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

                            <div class="row">

                                <div class="col-sm-3 col-xs-12 form-group">
                                    <label>Item Name</label>
                                    <input type="text" name="item_name" id="item_name" class="form-control required">
                                    <input type="hidden" id="item_id" class="form-control required">
                                </div>

                                <div class="col-sm-3 col-xs-12 form-group">
                                    <label>Custom ID</label>
                                    <input type="text" class="form-control" id="custom_id">
                                </div>

                                <div class="col-sm-3 col-xs-12 form-group">
                                    <label>Unit Type</label>
                                    <select class="form-control col-sm-3 col-xs-4 required" id="unit_type1">
                                        <option value="">-- Select --</option>

                                    </select>
                                </div>

                                <!-- </div>

                      <br><br>
                      <div class="form-row"> -->

                                <div class="col-sm-3 col-xs-12 form-group">
                                    <label>Code</label>
                                    <input type="text" class="form-control" id="item_code">
                                </div>

                                <!-- <div class="col-sm-3 col-xs-12 form-group">
                                    <label>Section</label>
                                    <input type="text" class="form-control" id="item_code">
                                </div> -->

                                <div class="col-sm-3 col-xs-12 form-group">
                                    <!-- <div class="col-sm-3 col-xs-3"></div> -->
                                    <button type="button" class="btn btn-success" id="filter">Go</button>
                                    <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;"
                                        id="filter_loader"></i>
                                </div>

                            </div>

                            <!-- <div class="form-row"></div> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="item_display" style="display: none;">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">

                        <div class="x_content">
                            <br />
                            <span id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_item_name">Item
                                        Name<span>*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="add_item_name"
                                            class="form-control col-md-7 col-xs-12 add_item_required">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_custom_id">Custom
                                        ID<span>*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="add_custom_id"
                                            class="form-control col-md-7 col-xs-12 add_item_required">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                        for="add_description">Description<span>*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea cols="3" class="form-control col-md-7 col-xs-12" id="add_description">

                                    </textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Unit
                                        Type<span>*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control col-sm-2 col-xs-2 add_item_required"
                                            id="add_unit_type">
                                            <option value="">----</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_min_alert">Low Qty
                                        Alert<span>*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="number" id="add_min_alert" class="form-control col-md-7 col-xs-12">
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
                                        <button type="button" class="btn btn-success" id="add">Add</button>
                                        <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;"
                                            id="item_loader"></i>
                                    </div>
                                </div>

                            </span>
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

                                        <th class="column-title" style="width: 10%">Code </th>
                                        <th class="column-title">&nbsp; </th>
                                        <th class="column-title" style="width: 7%">Custom ID </th>
                                        <th class="column-title" style="width: 10%">Item Name </th>
                                        <th class="column-title" style="width: 15%">SKU / Barcode</th>
                                        <th class="column-title" style="width: 5%">Unit </th>
                                        <th class="column-title" style="width: 8%">Selling Cost </th>
                                        <th class="column-title" style="width: 8%">Available Qty </th>
                                        <th class="column-title" style="width: 5%">Weight </th>
                                        <th class="column-title" style="width: 8%">Low Item </th>
                                        <th class="column-title" style="width: 8%">High Item </th>


                                        <th class="column-title no-link last" style="width: 24%"><span
                                                class="nobr">Action</span>
                                        </th>
                                        <th class="bulk-actions" colspan="9">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span
                                                    class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tr id="loading">
                                    <td colspan="12"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i>
                                    </td>
                                </tr>
                                <tbody id="itemsData">

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


<!-- <div class="row">
          <div class="column">
            <p style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">test <p>
          </div>
          <div class="column">
            <img src="img_snow.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
          </div>
          <div class="column">
            <img src="img_mountains.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
          </div>
          <div class="column">
            <img src="img_lights.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
          </div>
        </div> -->


<div id="myModal" class="modal_">
    <span class="close_ cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content_" style="width: 40%;">
        <span class="tp">
            <div id="add_user_loading" style="display:  none">Loading...</div>


        </span>

        <!--  <div class="mySlides">
              <div class="numbertext">1 / 4</div>
              <img src="img_nature__wide.jpg" style="width:100%">
            </div> -->

        <!-- <div class="mySlides">
              <div class="numbertext">2 / 4</div>
              <img src="img_snow_wide.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">3 / 4</div>
              <img src="img_mountains_wide.jpg" style="width:100%">
            </div>
            
            <div class="mySlides">
              <div class="numbertext">4 / 4</div>
              <img src="img_lights_wide.jpg" style="width:100%">
            </div> -->



        <span class="btm">
            <div class="caption-container">

            </div>
            <div class="column">
                <img class="demo cursor" src="" style="width:100%" onclick="currentSlide(1)" alt="">
            </div>
            <div class="column">
                <img class="demo cursor" src="" style="width:100%" onclick="currentSlide(1)" alt="">
            </div>
            <div class="column">
                <img class="demo cursor" src="" style="width:100%" onclick="currentSlide(1)" alt="">
            </div>
            <div class="column">
                <img class="demo cursor" src="" style="width:100%" onclick="currentSlide(1)" alt="">
            </div>
        </span>




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
                <h4>Item Added Successfully!</h4>
            </div>
            <!-- <div class="modal-footer"> -->
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            <!-- </div> -->
        </div>
    </div>
</div>

<div class="modal fade" id="modal_edit_unit_cost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;">Edit Item Selling Cost
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">

                The selling cost set here applies to only the current warehouse.
                <br>
                <br>

                <div id="edit_form">
                    <span id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="low_item">Selling
                                Cost<span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" id="selling_cost" required="required"
                                    class="form-control col-md-7 col-xs-12 required4 allownumericwithdecimal">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12 text-danger" id="error_low">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" id="form_footer">
                                <button type="submit" class="btn btn-success" id="upd_item_unit_cost">Update</button>
                                <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;"
                                    id="edit_item_selling_cost_loader"></i>
                                <!-- <div id="add_user_loading" style="display:  none">Loading...</div> -->
                            </div>
                        </div>
                    </span>
                </div>

                <div id="edit_msg" style="display: none;">
                    <h4>Low Item Updated Successfully!</h4>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer"> -->
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            <!-- </div> -->
        </div>
    </div>
</div>

<div class="modal fade" id="modal_edit_low_item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;">Edit Low Item
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">
                <div id="edit_form">
                    <span id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="low_item">Low
                                Item<span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" id="low_item" required="required"
                                    class="form-control col-md-7 col-xs-12 required498">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12 text-danger" id="error_low">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" id="form_footer">
                                <button type="submit" class="btn btn-success" id="upd_low_item">Update</button>
                                <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;"
                                    id="edit_low_item_loader"></i>
                                <!-- <div id="add_user_loading" style="display:  none">Loading...</div> -->
                            </div>
                        </div>
                    </span>
                </div>

                <div id="edit_msg" style="display: none;">
                    <h4>Low Item Updated Successfully!</h4>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer"> -->
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            <!-- </div> -->
        </div>
    </div>
</div>

<div class="modal fade" id="modal_edit_high_item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;">Edit High Item
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">
                <div id="edit_form">
                    <span id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="high_item">High
                                Item<span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" id="high_item" required="required"
                                    class="form-control col-md-7 col-xs-12 required49">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12 text-danger" id="error_high">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" id="form_footer">
                                <button type="submit" class="btn btn-success" id="upd_high_item">Update</button>
                                <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;"
                                    id="edit_high_item_loader"></i>
                                <!-- <div id="add_user_loading" style="display:  none">Loading...</div> -->
                            </div>
                        </div>
                    </span>
                </div>

                <div id="edit_msg" style="display: none;">
                    <h4>High Item Updated Successfully!</h4>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer"> -->
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            <!-- </div> -->
        </div>
    </div>
</div>

<div class="modal fade" id="modal_edit_item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;">Edit Product
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">
                <div id="edit_form">
                    <span id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="item_name">Name<span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="item_name" required="required"
                                    class="form-control col-md-7 col-xs-12 required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="custom_id">Custom
                                ID<span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="custom_id" required="required"
                                    class="form-control col-md-7 col-xs-12 required">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Description<span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea cols="3" class="form-control col-md-7 col-xs-12" id="description">

                            </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Unit Type<span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control col-sm-2 col-xs-2" id="unit_type">
                                    <!-- <option value="">----</option> -->

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="low_qty">Low Qty
                                Alert<span>*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="low_qty" required="required"
                                    class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12 text-danger" id="error">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" id="form_footer">
                                <button type="submit" class="btn btn-success" id="upd_item">Update</button>
                                <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;"
                                    id="edit_item_loader"></i>
                                <!-- <div id="add_user_loading" style="display:  none">Loading...</div> -->
                            </div>
                        </div>
                    </span>
                </div>

                <div id="edit_msg" style="display: none;">
                    <h4>Item Updated Successfully!</h4>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer"> -->
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            <!-- </div> -->
        </div>
    </div>
</div>

<div class="modal fade" id="modal_unit_info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title " id="exampleModalLabel" style="color: #fff;"><span
                        class="item_unit_cost_name">Item Unit Cost</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="headings">

                                <!-- <th class="column-title">S/N </th>
                        <th class="column-title">Item Name </th> -->
                                <th class="column-title">Warehouse </th>
                                <th class="column-title">Unit Cost </th>

                            </tr>
                        </thead>

                        <tr id="loading_unit">
                            <td colspan="2"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i></td>
                        </tr>
                        <tbody id="unitData">

                        </tbody>
                    </table>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_expiry" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;"><span class="item_qty_per_wh">Set
                        Expiry</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="headings">


                            </tr>
                        </thead>

                        <tbody>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_warehouse_name">Set
                                    Expiry<span>*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="date" class="form-control col-md-7 col-xs-12 not_empty dat required1"
                                        name="fullname" required="" value="" autocomplete="off">
                                </div>
                            </div>
                        </tbody>
                    </table>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary set_expiry" data-dismiss="modal">Go</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_qty_info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;"><span class="item_qty_per_wh">Item
                        Quantity</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h3>

            </div>
            <div class="modal-body">

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="headings">

                                <!-- <th class="column-title">S/N </th>
                        <th class="column-title">Item Name </th> -->
                                <th class="column-title">Warehouse </th>
                                <th class="column-title">Qty </th>

                            </tr>
                        </thead>

                        <tr id="loading_qty">
                            <td colspan="2"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i></td>
                        </tr>
                        <tbody id="qtyData">

                        </tbody>
                    </table>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
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
    // page_warehouse_access();
    // populate_images()
    // var base_url = window.location.origin + '/' + window.location.pathname.split( '/' )[1]
    function check_for_access() {
        var arr2 = [2, 4, 26];
        var roles = localStorage.getItem('user_role');

        console.log(roles);
        console.log(arr2.includes(4));

        console.log('here')

        // Array.from(roles).map((a, i) => {
        //     if (arr2.includes(a)) {
        //         console.log(a)
        //         $('add_item').show();
        //     }

        // })

        $('input#date_received').datepicker({
            dateFormat: "yy-mm-dd"
        });

        if(roles){
            roles.split(',').some((a, i) => {
            if (arr2[i] == parseInt(a)) {
                console.log(a)
                $('.add_item').show();
            }
            // return;

        })
        }


        

    }


    check_for_access();



    list_of_comapany_items("")


    var item_id;
    // does_user_have_access_to_page();
    load_unit_type();
    load_modal_unit_type();



    $("#item_name").autocomplete({

        source: function(request, response) {
            // Fetch data
            $.ajax({

                url: api_path + "wms/items_autocomplete",
                type: 'post',
                dataType: "json",
            headers: {'Authorization':localStorage.getItem('token') },

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
            // +' '+ui.item.id
            $('#item_name').val(ui.item.label); // display the selected text
            // $('#item_id').val(ui.item.id); // save selected id to input
            return false;

        }

    });

    $(document).on('click', '.edit_pencil', function() {

        var id = $(this).attr("id").replace(/thepencil_/, '');

        $("#theinput_" + id).show(); //show input box
        $("#thefig_" + id).hide(); //hide figure text
        $("#the_send_" + id).show();
        $("#thepencil_" + id).hide();
        $("#thecancel_" + id).show();

    });

    $(document).on('click', '.set_expiry', function() {
        alert($("#dat").val())
    });

    $(document).on('click', '.cancel_icc', function() {

        var id = $(this).attr("id").replace(/thecancel_/, '');
        $("#theinput_" + id).hide(); //hide input box
        $("#thefig_" + id).show(); //hide figure text
        $("#thepencil_" + id).show();
        $("#thecancel_" + id).hide();
        $("#the_send_" + id).hide();

    });

    $(document).on('click', '.the_send_b', function() {

        var id = $(this).attr("id").replace(/the_send_/, '');
        var item_id = $(this).attr("dir");
        var wh_id = $(this).attr("title");
        $("#thecancel_" + id).hide();
        $("#the_send_" + id).hide();
        $("#the_cst_loading_" + id).show();
        var unit_cost = $("#forinput_txt_" + id).val(); //hide input box
        $("#theinput_" + id).hide(); //hide input box

        var new_id;
        if (id.indexOf("new_") != -1) {
            new_id = 0;
        } else {
            new_id = id;
        }

        if (unit_cost == "") {

        } else {

            var company_id = localStorage.getItem('company_id');

            $.ajax({

                url: api_path + "wms/update_item_unit",
                type: "POST",
            headers: {'Authorization':localStorage.getItem('token') },

                data: {
                    "company_id": company_id,
                    "row_id": new_id,
                    "unit_cost": unit_cost,
                    "item_id": item_id,
                    "warehouse_id": wh_id
                },
                dataType: "json",

                success: function(response) {

                    if (response.status == "200") {

                        // $('#page_loader').hide();
                        // $('#employee_details_display').show();
                        $("#thefig_" + id).html(unit_cost);
                        $("#thefig_" + id).show();
                        $("#thepencil_" + id).show();
                        $("#the_cst_loading_" + id).hide(unit_cost);

                    } else {
                        alert("error");
                    }

                    console.log(response);

                },
                // jqXHR, textStatus, errorThrown
                error(response) {
                    alert('Connection error');
                }

            });

        }

    });

    $(document).on('click', '#filter', function() {
        $('#pagination').twbsPagination('destroy');
        list_of_comapany_items('');
    });

    // $('#add_item').on('click', item);
    // $('#add').on('click', add_company_item);
    $('#item_filter').on('click', display_filter);

    $(document).on('click', '.delete_item', function() {
        var item_id = $(this).attr('id').replace(/itm_/, '');
        delete_item(item_id);
    });

    // $(document).on('click', '.edit_item_icon', function(){
    //     item_id = $(this).attr('id').replace(/item_/,''); 
    //     fetch_item_details(item_id);

    //   });

    $(document).on('click', '.unit_info', function() {
        item_id = $(this).attr('id').replace(/unit_/, '');
        fetch_cost_details(item_id);

    });

    $(document).on('click', '.qty_info', function() {
        item_id = $(this).attr('id').replace(/qty_/, '');
        fetch_qty_details(item_id);

    });

    $(document).on('click', '.low_info', function() {
        item_id = $(this).attr('id').replace(/low_/, '');
        $('#modal_edit_low_item').modal('show');
    });

    $(document).on('click', '.high_info', function() {
        item_id = $(this).attr('id').replace(/high_/, '');
        localStorage.setItem('id_item', item_id);
        $('#modal_edit_high_item').modal('show');
    });

    //unit_cst_info
    $(document).on('click', '.unit_cst_info', function() {
        item_id = $(this).attr('id').replace(/unctd_/, '');
        $('#modal_edit_unit_cost').modal('show');
    });

    $(document).on('click', '#upd_low_item', function() {

        edit_low_item(item_id);
    });

    $(document).on('click', '#upd_high_item', function() {
    console.log('here')
    localStorage.getItem('id_item');
    edit_high_item(item_id);

    });

    $(document).on('click', "#upd_item_unit_cost", function() {

        update_item_unit_cost(item_id);

    });

})

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
        cache: false,
            headers: {'Authorization':localStorage.getItem('token') },

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
                list_of_comapany_items('');

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

function display_filter() {

    $('#filter_display').toggle();
    $('#item_display').hide();
    $('#item_name').val("");
    $('#unit_type').val("");
    $('#item_code').val("");
}

function load_unit_type() {

    var company_id = localStorage.getItem('company_id');

    $.ajax({
        url: api_path + "wms/list_unit",
        type: "POST",
            headers: {'Authorization':localStorage.getItem('token') },

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
                    i
                ]['unit_name'] + '</option>';

                // emp_type = response['data'][i]['type_id'];
            });
            $('#add_unit_type').append(options);
            $('#unit_type1').append(options);
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

function load_modal_unit_type() {

    var company_id = localStorage.getItem('company_id');

    $.ajax({
        url: api_path + "wms/list_unit",
        type: "POST",
            headers: {'Authorization':localStorage.getItem('token') },

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
                    i
                ]['unit_name'] + '</option>';
            });

            $('#modal_edit_item #unit_type').append(options);
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

        }

    });
}

function item() {
    $('#item_display').toggle();
    $('#filter_display').hide();
    $('#add_item_name').val('');
    $('#add_description').val('');
    $('#add_unit_type').val('');

    $('#error').html('');

    $(".required").each(function() {

        var the_val = $.trim($(this).val());

        $(this).removeClass("has-error");

    });
}

function update_item_unit_cost(item_id) {
    // var pathArray = window.location.pathname.split( '/' );
    // var warehouse_id = $.urlParam('id');  

    var company_id = localStorage.getItem('company_id');
    var warehouse_id = localStorage.getItem('warehouse_id');
    var selling_cost = $.trim($('#selling_cost').val());

    if (selling_cost == "" || selling_cost == "0") {

        $('#selling_cost').addClass('has-error');
        return;

    } else {

        $('#selling_cost').removeClass("has-error");

    }

    $("#edit_item_selling_cost_loader").show();
    $("#upd_item_unit_cost").hide();

    // return;


    $.ajax({

        type: "POST",
        dataType: "json",
        cache: false,
            headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/add_item_selling_cost",
        data: {
            "item_id": item_id,
            "company_id": company_id,
            "warehouse_id": warehouse_id,
            "selling_cost": selling_cost
        },

        success: function(response) {

            console.log(response);
            if (response.status == '200') {

                $('#modal_edit_unit_cost').modal('hide');
                $("#updk_" + item_id).html(selling_cost);

                // $('#modal_edit_unit_cost').on('hidden.bs.modal', function() {

                // window.location.reload();
                // });

            } else if (response.status == '400') { // coder error message

                $("#error_div").html('Error');

            } else if (response.status == '401') { //user error message

                $("#error_div").html('Error');

            }

            $("#edit_item_selling_cost_loader").hide();
            $("#upd_item_unit_cost").show();
            $("#selling_cost").val('');

        },

        error: function(response) {
            console.log(response);
            $("#edit_item_selling_cost_loader").hide();
            $("#upd_item_unit_cost").show();
            $("#selling_cost").val('');

        }

    });
}

function edit_low_item(item_id) {
    // var pathArray = window.location.pathname.split( '/' );
    // var warehouse_id = $.urlParam('id');  

    var company_id = localStorage.getItem('company_id');
    var warehouse_id = localStorage.getItem('warehouse_id');
    var low_alert = $('#low_item').val();

    var blank;


    $(".required49").each(function() {

        var the_val = $.trim($(this).val());

        if (the_val == "" || the_val == "0") {

            $(this).addClass('has-error');

            blank = "yes";

        } else {

            $(this).removeClass("has-error");

        }

    });

    if (blank == "yes") {

        $('#error_low').html("field can't be empty");

        return;

    }


    $("#modal_edit_low_item #upd_low_item").hide();
    $("#modal_edit_low_item #edit_low_item_loader").show();

    $.ajax({

        type: "POST",
        dataType: "json",
            headers: {'Authorization':localStorage.getItem('token') },

        cache: false,
        url: api_path + "wms/add_item_low_alert",
        data: {
            "item_id": item_id,
            "company_id": company_id,
            "warehouse_id": warehouse_id,
            "low_alert": low_alert
        },

        success: function(response) {

            var str = "";
            console.log(response);
            if (response.status == '200') {
                $("#modal_edit_low_item #error_low").html("");
                $("#modal_edit_low_item #edit_low_item_loader").hide();
                $("#modal_edit_low_item #upd_low_item").show();

                $('#modal_edit_low_item #edit_form').hide();

                $('#modal_edit_low_item #edit_msg').show();

                $('#modal_edit_low_item').on('hidden.bs.modal', function() {

                    window.location.reload();
                })

            } else if (response.status == '400') { // coder error message

                $("#modal_edit_low_item #edit_low_item_loader").hide();
                $("#modal_edit_low_item #upd_low_item").show();
                $("#modal_edit_low_item #error_low").html('Technical Error. Please try again later.');

            } else if (response.status == '401') { //user error message

                $("#modal_edit_low_item #edit_low_item_loader").hide();
                $("#modal_edit_low_item #upd_low_item").show();
                $("#modal_edit_low_item #error_low").html(response.msg);

            }

        },

        error: function(response) {
            console.log(response);
            $("#modal_edit_low_item #edit_low_item_loader").hide();
            $("#modal_edit_low_item #upd_low_item").show();
            $("#modal_edit_low_item #error_low").html("Connection Error.");

        }

    });
}

function edit_high_item(item_id) {
    // var pathArray = window.location.pathname.split( '/' );
    // var warehouse_id = $.urlParam('id');  

    var company_id = localStorage.getItem('company_id');
    var warehouse_id = localStorage.getItem('warehouse_id');
    var high_alert = $('#high_item').val();

    var blank;


    // $(".required498").each(function() {

    //     var the_val = $.trim($(this).val());

    //     if (the_val == "" || the_val == "0") {

    //         $(this).addClass('has-error');

    //         blank = "yes";

    //     } else {

    //         $(this).removeClass("has-error");

    //     }

    // });

    if ($('#high_item').val() == "" || $('#high_item').val() == "0") {
        alert()
        $('#error_low').html("field can't be empty");

        return;

    }



    $("#modal_edit_low_item #upd_high_item").hide();
    $("#modal_edit_low_item #edit_high_item_loader").show();

    $.ajax({

        type: "POST",
        dataType: "json",
        cache: false,
            headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/add_item_high_alert",
        data: {
            "item_id": item_id,
            "company_id": company_id,
            "warehouse_id": warehouse_id,
            "high_alert": high_alert
        },

        success: function(response) {

            var str = "";
            console.log(response);
            if (response.status == '200') {
                $("#modal_edit_high_item #error_high").html("");
                $("#modal_edit_high_item #edit_high_item_loader").hide();
                $("#modal_edit_high_item #upd_high_item").show();

                $('#modal_edit_high_item #edit_form').hide();

                $('#modal_edit_high_item #edit_msg').show();

                $('#modal_edit_high_item').on('hidden.bs.modal', function() {

                    window.location.reload();
                })

            } else if (response.status == '400') { // coder error message

                $("#modal_edit_high_item #edit_high_item_loader").hide();
                $("#modal_edit_high_item #upd_high_item").show();
                $("#modal_edit_high_item #error_low").html('Technical Error. Please try again later.');

            } else if (response.status == '401') { //user error message

                $("#modal_edit_high_item #edit_high_item_loader").hide();
                $("#modal_edit_high_item #upd_high_item").show();
                $("#modal_edit_high_item #error_high").html(response.msg);

            }

        },

        error: function(response) {
            console.log(response);
            $("#modal_edit_high_item #edit_high_item_loader").hide();
            $("#modal_edit_high_item #upd_high_item").show();
            $("#modal_edit_high_item #error_high").html("Connection Error.");

        }

    });
}

function fetch_expiry_date(item_id) {

    $.ajax({

        type: "GET",
        dataType: "json",
        cache: false,
            headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/itemBatchDetails",
        data: {
            "item_id": item_id,
            // "batch_id": company_id
        },

        success: function(response) {
            if (response.status == '200') {
                $(`#set_expiry_${item_id}`).val(response.data.date);
                $("#modal_expiry").modal("show");
            } else {
                $(`#set_expiry_${item_id}`).val('');
                $("#modal_expiry").modal("show");

            }

        },

        error: function(response) {

            alert("Connection Error.");

        }

    });
}

function fetch_item_details(item_id) {
    // var pathArray = window.location.pathname.split( '/' );
    // var warehouse_id = $.urlParam('id');  
    var item_id = localStorage.getItem('edit_item');
    if (!item_id) {
        alert('Access Denied')
        return
    }

    $('#item_' + item_id).hide();
    $('#loader_' + item_id).show();

    $.ajax({

        type: "GET",
        dataType: "json",
            headers: {'Authorization':localStorage.getItem('token') },

        cache: false,
        url: api_path + "wms/get_item_details",
        data: {
            "item_id": item_id,
            "company_id": company_id
        },

        success: function(response) {

            var str = "";
            console.log(response);
            $("#modal_edit_item #error").html("");

            $("#modal_edit_item .required").each(function() {

                var the_val = $.trim($(this).val());

                $(this).removeClass("has-error");

            });
            $('#loader_' + item_id).hide();
            $('#item_' + item_id).show();
            if (response.status == '200') {

                $("#modal_edit_item #item_name").val(response.data.item_name);
                $("#modal_edit_item #description").val(response.data.item_description);
                $("#modal_edit_item #low_qty").val(response.data.item_lowQty);
                $("#modal_edit_item #unit_type").val(response.data.unit_id);
                $("#modal_edit_item #custom_id").val(response.data.custom_id);

                // str += '<button type="submit" class="btn btn-success" id="edt_'+response.data.warehouse_id+'" class="update_ware">Update</button>';
                // str += '<i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="edit_ware_loader"></i>';   

                // $("#modal_edit_warehouse #form_footer").html(str);
                $('#modal_edit_item').modal('show');
            }

        },

        error: function(response) {
            $('#loader_' + item_id).hide();
            $('#item_' + item_id).show();
            alert("Connection Error.");

        }

    });
}

function fetch_cost_details(item_id) {

    var item_name = $("#idmz_name_" + item_id).html();
    $(".item_unit_cost_name").html(item_name);

    $.ajax({

        type: "POST",
        dataType: "json",
            headers: {'Authorization':localStorage.getItem('token') },

        cache: false,
        url: api_path + "wms/item_unitcost_each_warehouse",
        data: {
            "item_id": item_id,
            "company_id": localStorage.getItem('company_id')
        },

        success: function(response) {

            var strTable = "";
            console.log(response);

            $('#modal_unit_info #loading_unit').hide();

            if (response.status == '200') {

                if (response.data.length > 0) {

                    var k = 1;
                    $.each(response['data'], function(i, v) {

                        if (response['data'][i]['row_id'] == 0) {
                            response['data'][i]['row_id'] = 'new_' + Math.floor((Math.random() *
                                100000) + 1);
                        }

                        strTable += '<tr>';
                        strTable += '<td valign="top">' + response['data'][i]['warehouse_name'] +
                            '</td>';
                        strTable += '<td valign="top"><span id="thefig_' + response['data'][i][
                                'row_id'
                            ] + '" style="display: ">' + response['data'][i]['unit_cost'] +
                            '</span> <span style="display: none" id="theinput_' + response['data'][
                                i
                            ]['row_id'] + '"><input type="text" id="forinput_txt_' + response[
                                'data'][i]['row_id'] + '" value="' + response['data'][i][
                                'unit_cost'
                            ] +
                            '" class="form-control" style="width: 100px"></span> &nbsp; &nbsp; <i id="thepencil_' +
                            response['data'][i]['row_id'] +
                            '"  class="fa fa-pencil fa-1x edit_pencil"  style="font-style: italic; color: #add8e6; font-size: 20px; cursor: pointer;" title="Edit Cost"></i>  <i id="the_send_' +
                            response['data'][i]['row_id'] +
                            '"  class="fa fa-check-square fa-2x the_send_b"  style="color: green; cursor: pointer; display: none" title="' +
                            response['data'][i]['warehouse_id'] + '" dir="' + item_id +
                            '"></i>  <i id="thecancel_' + response['data'][i]['row_id'] +
                            '"  class="fa fa-times-circle fa-2x cancel_icc"  style="color: red; cursor: pointer; display: none"></i> <i id="the_cst_loading_' +
                            response['data'][i]['row_id'] +
                            '"  class="fa fa-spinner fa-spin fa-fw fa-1x the_cst_loading"  style="color: black; cursor: pointer; display: none"></i>  </td>';

                        strTable += '</tr>';

                        k++;

                    });

                } else {

                    strTable = '<tr><td colspan="2">No record.</td></tr>';

                }
                $('#modal_unit_info #unitData').html(strTable);
                $('#modal_unit_info').modal('show');

            } else if (response.status == '400') {

                strTable += '<tr>';

                strTable += '<td valign="top">' + response.msg + '</td>';

                strTable += '</tr>';

                $('#modal_unit_info #unitData').html(strTable);
                $('#modal_unit_info').modal('show');

            }

        },

        error: function(response) {

            alert("Connection Error.");

        }

    });
}

function fetch_qty_details(item_id) {

    var item_name = $("#idmz_name_" + item_id).html();
    $(".item_qty_per_wh").html(item_name);

    $.ajax({

        type: "POST",
        dataType: "json",
            headers: {'Authorization':localStorage.getItem('token') },

        cache: false,
        url: api_path + "wms/item_qty_each_warehouse",
        data: {
            "item_id": item_id,
            "company_id": localStorage.getItem('company_id')
        },

        success: function(response) {

            var strTable = "";
            console.log(response);

            $('#modal_qty_info #loading_qty').hide();

            if (response.status == '200') {

                if (response.data.length > 0) {

                    var k = 1;
                    $.each(response['data'], function(i, v) {

                        strTable += '<tr>';

                        // strTable += '<td valign="top">'+k+'</td>';

                        // strTable += '<td valign="top">'+response['data'][i]['item_name']+'</td>';
                        strTable += '<td valign="top">' + response['data'][i]['warehouse_name'] +
                            '</td>';
                        strTable += '<td valign="top">' + response['data'][i]['item_qty'] + '</td>';

                        strTable += '</tr>';

                        k++;

                    });

                } else {

                    strTable = '<tr><td colspan="2">No record.</td></tr>';

                }

                $('#modal_qty_info #qtyData').html(strTable);
                $('#modal_qty_info').modal('show');

            } else if (response.status == '400') {

                strTable += '<tr>';

                strTable += '<td valign="top">' + response.msg + '</td>';

                strTable += '</tr>';

                $('#modal_qty_info #qtyData').html(strTable);
                $('#modal_qty_info').modal('show');
            }

        },

        error: function(response) {

            alert("Connection Error.");

        }

    });

}

function add_company_item() {
    var company_id = localStorage.getItem('company_id');
    var user_id = localStorage.getItem('user_id');
    var item_name = $('#add_item_name').val();
    var description = $('#add_description').val();
    var unit_type = $('#add_unit_type').val();
    var custom_id = $('#add_custom_id').val();
    var barcode = "1234";
    var min_alert = $('#add_min_alert').val();
    // alert(employee_id);
    var blank;

    $(".add_item_required").each(function() {

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

    $('#add').hide();
    $('#item_loader').show();

    $.ajax({

        type: "POST",
        dataType: "json",
        cache: false,
            headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/create_item",
        data: {
            "company_id": company_id,
            "custom_id": custom_id,
            "user_id": user_id,
            "item_name": item_name,
            "description": description,
            "barcode": barcode,
            "min_alert": min_alert,
            "unit_type": unit_type
        },

        success: function(response) {

            // console.log(response);

            if (response.status == '200') {

                $('#error').html('');
                $('#modal_item').modal('show');

                //clear fields

                $('#modal_item').on('hidden.bs.modal', function() {
                    // do something…
                    $('#item_display').hide();
                    window.location.reload();
                    //window.location.href = base_url+"/erp/hrm/employees";
                })

            } else if (response.status == '400') { // coder error message

                $('#error').html('Technical Error. Please try again later.');

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

function delete_item(item_id) {

    var company_id = localStorage.getItem('company_id');

    var ans = confirm("Are you sure you want to delete this item?");
    if (!ans) {
        return;
    }

    $('#row_' + item_id).hide();
    $('#loader_row_' + item_id).show();
    $.ajax({
        type: "POST",
        dataType: "json",
            headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/delete_item",
        data: {
            "company_id": company_id,
            "item_id": item_id
        },
        timeout: 60000, // sets timeout to one minute
        // objAJAXRequest, strError

        error: function(response) {
            $('#loader_row_' + item_id).hide();
            $('#row_' + item_id).show();

            alert('connection error');
        },

        success: function(response) {
            // console.log(response);
            if (response.status == '200') {
                // $('#row_'+user_id).hide();

            } else if (response.status == '401') {

            }

            $('#loader_row_' + item_id).hide();
        }
    });
}

function edit_company_item(item_id) {
    var item_name = $("#modal_edit_item #item_name").val();
    var description = $("#modal_edit_item #description").val();
    var custom_id = $("#modal_edit_item #custom_id").val();
    var unit_type = $("#modal_edit_item #unit_type").val();
    var min_alert = $("#modal_edit_item #low_qty").val();;
    var company_id = localStorage.getItem('company_id');

    var blank;

    // alert(warehouse_id);

    $("#modal_edit_item .required").each(function() {

        var the_val = $.trim($(this).val());

        if (the_val == "" || the_val == "0") {

            $(this).addClass('has-error');

            blank = "yes";

        } else {

            $(this).removeClass("has-error");

        }

    });

    if (blank == "yes") {

        $("#modal_edit_item #error").html("You have a blank field");

        return;

    }

    // $("#modal_edit_warehouse #error").html("");

    $("#modal_edit_item #upd_item").hide();
    $("#modal_edit_item #edit_item_loader").show();

    $.ajax({

        type: "POST",
        dataType: "json",
        cache: false,
            headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/edit_item",
        data: {
            "item_name": item_name,
            "custom_id": custom_id,
            "description": description,
            "company_id": company_id,
            "item_id": item_id,
            "min_alert": min_alert,
            "unit_type": unit_type
        },

        success: function(response) {

            console.log(response);

            if (response.status == '200') {
                $("#modal_edit_item #error").html("");
                $("#modal_edit_item #edit_item_loader").hide();
                $("#modal_edit_item #upd_item").show();

                $('#modal_edit_item #edit_form').hide();

                $('#modal_edit_item #edit_msg').show();
                window.location.reload();


                // $('#modal_department_edit').on('hidden.bs.modal', function () {
                //     $('#department_name').val();
                //     $('#department_description').val();
                //     // window.location.reload();
                //     window.location.href = base_url+"/erp/hrm/departments";
                // })

            } else if (response.status == '400') { // coder error message

                $("#modal_edit_item #edit_item_loader").hide();
                $("#modal_edit_item #upd_item").show();
                $("#modal_edit_item #error").html('Technical Error. Please try again later.');

            } else if (response.status == '401') { //user error message

                $("#modal_edit_item #edit_item_loader").hide();
                $("#modal_edit_item #upd_item").show();
                $("#modal_edit_item #error").html(response.msg);

            }

        },

        error: function(response) {

            console.log(response);
            $("#modal_edit_item #edit_item_loader").hide();
            $("#modal_edit_item #upd_item").show();
            $("#modal_edit_item #error").html("Connection Error.");

        }

    });

}

function populate_images(item_id) {
    $('add_user_loading').show();

    $.ajax({
        type: "GET",
        dataType: "json",
            headers: {'Authorization':localStorage.getItem('token') },

        url: api_path + "wms/get_item_details",
        data: {
            "company_id": localStorage.getItem('company_id'),
            "item_id": item_id,

        },
        timeout: 60000,

        success: function(response) {
            $(".tp").empty();
            console.log(response);
            // console.log(response['data']['item_images'])

            // var options = "";
            // var btm = "";

            if (response.status == '200') {

                // page_warehouse_access();
                var len = response['data']['item_images'];
                // console.log(len.length())
                $.each(response['data']['item_images'], function(i, v) {

                    var spli = `${v.image_name.split("/warehouse_images")}`;
                    console.log(spli.length)

                    // if(spli.length > 2){

                    // }

                    if (spli.length < 110) {



                        $(".tp").append(`<div class="mySlides">
                        <div class="numbertext" style="color:black">${i}
                        <div>
                        <h4></h4>
                        </div>
                        </div>
                        <img src=${v.image_name} style="width:100%">
                        </div>`)

                        $(".btm").append(`<div class="column">
                        <img class="demo cursor" src="" style="width:100%" onclick="currentSlide(${i})" alt=""></div>`)

                    } else if (spli.length > 110) {
                        var splited = `${v.image_name.split("/warehouse_images/")}`
                        var arr = splited.split(',');
                        console.log(arr);
                        var arr_len = arr.length - 1;

                        // console.log(`${v.image_name.split("/warehouse_images/")[1]}/warehouse_images${v.image_name.split("/warehouse_images")[2]}`);
                        // console.log(`${v.image_name.split("/warehouse_images/")[1]}`);
                        // console.log(`${v.image_name.split("/warehouse_images/")[arr_len]}`)
                        // console.log(`${v.image_name.split("/warehouse_images/")[1]}/warehouse_images/${v.image_name.split("/warehouse_images/")[arr_len]}`)



                        $(".tp").append(`<div class="mySlides">
                        <div class="numbertext" style="color:black">${i}
                        <div>
                        <h4></h4>
                        </div>
                        </div>
                        <img src=${v.image_name.split("/warehouse_images/")[1]}/warehouse_images/${v.image_name.split("/warehouse_images/")[arr_len]} style="width:100%">
                        </div>`)

                        $(".btm").append(`<div class="column">
                        <img class="demo cursor" src="" style="width:100%" onclick="currentSlide(${i})" alt=""></div>`)

                    }


                })



                $(".numbertext").append(
                    `<div style="color:black"><h4 style="background-color: white; color:black">${response.data.item_description}</h4></div>`
                );


                $(".tp").append(`<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                      <a class="next" onclick="plusSlides(1)">&#10095;</a>`);
                currentSlide(1);

            } else {
                $('add_user_loading').hide();
                $('.tp').show();
                $("#page_div").show();
                $("#main_display").hide();

            }

        },

        error: function(response) {
            $("#page_div").show();
            $("#main_display").hide();
        }

    });

}

function list_of_comapany_items(page) {


    localStorage.removeItem('edit_item');
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
    var limit = 15;

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

                        strTable += '<td valign="top">' + response['data'][i]['item_code'] +
                            '</td>';

                        if (response['data'][i]['item_image'] == "" || response['data'][i][
                                'item_image'
                            ] == null) {

                            strTable += '<td valign="top">&nbsp;</td>';

                        } else {

                            strTable +=
                                '<td width="8%" valign="top"><div class="profile_pic"><img src="' +
                                window.location.origin + '/files/images/warehouse_images/' +
                                response['data'][i]['item_image'] +
                                '" alt="..." width="50"></div></td>';
                        }

                        strTable += '<td valign="top">' + response['data'][i]['custom_id'] +
                            '</td>';

                        strTable += '<td valign="top" id="idmz_name_' + response['data'][i][
                            'item_id'
                        ] + '">' + response['data'][i]['item_name'] + '</td>';
                        // strTable += '<td valign="top" id="idmz_name_' + response['data'][i][
                        //         'item_id'
                        //     ] +
                        //     '"><a  class="edit_item_icon btn btn-info btn-xs" style="cursor: pointer;"><i  class="fa fa-cog" onclick="expiry(' +
                        //     response['data'][i]['item_id'] +
                        //     ')"  data-toggle="tooltip" data-placement="top" title="Set Expiry"></i></a></td>';
                        strTable += `<td valign="top">${ response['data'][i]['barcode'] != "" ? `SKU: ${response['data'][i]['barcode']}` : "Not Available"}</td>`;
                        strTable += '<td valign="top">' + response['data'][i]['item_unit'] +
                            '</td>';
                        strTable += '<td valign="top"><span id="updk_' + response['data'][i][
                                'item_id'
                            ] + '">' + response['data'][i]['selling_unit_cost'] +
                            '</span> &nbsp; <a class="unit_cst_info" id="unctd_' + response['data'][
                                i
                            ]['item_id'] +
                            '"><i  class="fa fa-info-circle"  data-toggle="tooltip" data-placement="top" style="font-style: italic; color: #add8e6; font-size: 20px; cursor : pointer;" title="View/Set Selling Cost"></i></a></td>';
                        strTable += '<td valign="top">' + qty_left + '</td>';
                        strTable += '<td valign="top">' + response['data'][i]['item_weight']  + 'kg</td>';

                        strTable += '<td valign="top">' + response['data'][i]['item_low_alert'] +
                            '<a class="low_info" id="low_' + response['data'][i]['item_id'] +
                            '"><i  class="fa fa-info-circle"  data-toggle="tooltip" data-placement="top" style="font-style: italic; color: #add8e6; font-size: 20px; cursor : pointer;" title="View Low Item Info"></i></a></td>'
                        strTable += '<td valign="top">' + response['data'][i]['item_high_alert'] +
                        '<a class="high_info" id="high_' + response['data'][i]['item_id'] +
                        '"><i  class="fa fa-info-circle"  data-toggle="tooltip" data-placement="top" style="font-style: italic; color: #add8e6; font-size: 20px; cursor : pointer;" title="View High Item Info"></i></a></td>'

                        // if(response['data'][i]['unit_cost'] == null){

                        //   strTable += '<td valign="top">0.00<a class="unit_info" id="unit_'+response['data'][i]['item_id']+'"><i  class="fa fa-info-circle"  data-toggle="tooltip" data-placement="top" style="font-style: italic; color: #add8e6; font-size: 20px; cursor : pointer;" title="View Cost info"></i></a>';

                        // }else{

                        //   strTable += '<td valign="top">'+response['data'][i]['unit_cost']+' <a class="unit_info" id="unit_'+response['data'][i]['item_id']+'"><i  class="fa fa-info-circle"  data-toggle="tooltip" data-placement="top" style="font-style: italic; color: #add8e6; font-size: 20px; cursor : pointer;" title="View Cost info"></i></a></td>';

                        // }

                        // strTable += '<td valign="top">'+response['data'][i]['qty_left']+' <a class="qty_info" id="qty_'+response['data'][i]['item_id']+'"><i  class="fa fa-info-circle"  data-toggle="tooltip" data-placement="top" style="font-style: italic; color: #add8e6; font-size: 20px; cursor : pointer;" title="View Quantity info"></i></a></td>';

                        var arr2 = [2, 4, 26];
                        var roles = localStorage.getItem('user_role');

                        console.log(roles);
                        console.log(arr2.includes(4));

                        strTable += '<td valign="top">'


                        // roles.split(',').some((a, i) => {
                            // if (arr2[i] == parseInt(a)) {
                            //     console.log(a)
                                strTable +=
                                    `<a  class="edit_item_icon btn btn-info btn-xs edt_itm"  style="cursor: pointer; display:none;"><i  class="fa fa-pencil" onclick="save(${response['data'][i]['item_id']})"  data-toggle="tooltip" data-placement="top" title="Edit Item"></i></a>&nbsp;`;
                                strTable +=
                                    `<a  class="edit_item_icon btn btn-info btn-xs itm_info" style="cursor: pointer; display:none;"><i  class="fa fa-info-circle" onclick="details(${response['data'][i]['item_id']})"  data-toggle="tooltip" data-placement="top" title="Item Info"></i></a>&nbsp;&nbsp;`;
                                strTable +=
                                    '<a class="delete_item btn btn-danger btn-xs itm_del" style="cursor: pointer; display:none" id="itm_' +
                                    response['data'][i]['item_id'] +
                                    '"><i  class="fa fa-trash-o"  data-toggle="tooltip" data-placement="top" title="Delete Item"></i></a>&nbsp;&nbsp;';

                            // }

                        // })

                        // roles.split(',').map((a, i) => {
                        //     if (arr2.includes(parseInt(a))){
                        //         console.log(a)
                        //         strTable +=
                        //             `<a  class="edit_item_icon btn btn-info btn-xs" style="cursor: pointer;"><i  class="fa fa-pencil" onclick="save(${response['data'][i]['item_id']})"  data-toggle="tooltip" data-placement="top" title="Edit Item"></i></a>&nbsp;`;
                        //         }
                        //         return;

                        // })

                        // strTable += `<td valign="top"><a  class="edit_item_icon btn btn-info btn-xs" style="cursor: pointer;"><i  class="fa fa-pencil" onclick="save(${response['data'][i]['item_id']})"  data-toggle="tooltip" data-placement="top" title="Edit Item"></i></a>&nbsp;`;

                        // strTable +=
                        //     `<a  class="edit_item_icon btn btn-info btn-xs" style="cursor: pointer;"><i  class="fa fa-info-circle" onclick="details(${response['data'][i]['item_id']})"  data-toggle="tooltip" data-placement="top" title="Item Info"></i></a>&nbsp;&nbsp;`;

                        // href="${base_url}edit_item"
                        // strTable += '<td valign="top"><a href="' + base_url + 'edit_item?id=' + response['data'][i]['item_id'] + '" class="edit_item_icon btn btn-info btn-xs" style="cursor: pointer;"><i  class="fa fa-pencil"  data-toggle="tooltip" data-placement="top" title="Edit Item"></i></a>&nbsp;';

                        // strTable += '<i  class="fa fa-spinner fa-spin fa-1x fa-fw" aria-hidden="true" style="display: none;" id="loader_'+response['data'][i]['item_id']+'"></i>&nbsp;&nbsp;';  

                        // strTable +=
                        //     '<a class="delete_item btn btn-danger btn-xs" style="cursor: pointer;" id="itm_' +
                        //     response['data'][i]['item_id'] +
                        //     '"><i  class="fa fa-trash-o"  data-toggle="tooltip" data-placement="top" title="Delete Item"></i></a>&nbsp;&nbsp;';

                        strTable += '<a class="btn btn-success btn-xs items_activities" style="display: none;" href="' + base_url +
                            'items_activities?id=' + response['data'][i]['item_id'] +
                            '"><i  class="fa fa-clock-o"  data-toggle="tooltip" data-placement="top" title="View Item info"></i></a></td>';

                        // strTable += '<a class="btn btn-success btn-xs" href="#" onclick="populate_images(' + response['data'][i]['item_id'] + ');openModal();"><i  class="fa fa-info-circle"  data-toggle="tooltip" data-placement="top" title="View Item info"></i></a></td>';

                        strTable += '</tr>';

                        strTable += '<tr style="display: none;" id="loader_row_' + response['data'][
                            i
                        ]['item_id'] + '">';
                        strTable +=
                            '<td colspan="12"><i class="fa fa-spinner fa-spin fa-fw fa-2x"  id="loading"></i>';
                        strTable += '</td>';
                        strTable += '</tr>';

                        k++;

                    });


                } else {

                    strTable = '<tr><td colspan="12">No record.</td></tr>';

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
                user_page_access();


            } else if (response.status == '400') {

                $('#loading').hide();
                strTable += '<tr>';
                strTable += '<td colspan="12">' + response.msg + '</td>';
                strTable += '</tr>';

                $("#itemsData").html(strTable);
                $("#itemsData").show();

            } else if (response.status == "401") {
                //missing parameters
                var strTable = "";
                $('#loading').hide();
                strTable += '<tr>';
                strTable += '<td colspan="12">' + response.msg + '</td>';
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
            strTable += '<td colspan="12"><strong class="text-danger">Connection error!</strong></td>';
            strTable += '</tr>';

            $("#itemsData").html(strTable);
            $("#itemsData").show();
            $("#loading").hide();

        }

    });
}

function openModal() {
    document.getElementById("myModal").style.display = "block";
}

function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {

    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += "active";
    // captionText.innerHTML = dots[slideIndex-1].alt;
}

function save(id) {
    localStorage.setItem("edit_item", id)
    window.location.href = "edit_item";
    fetch_item_details(id)
}

function expiry(id) {
    $(".dat").attr('id', `set_expiry_${id}`);
    fetch_expiry_date(id);
}

function details(id) {
    localStorage.setItem("edit_item", id)
    window.location.href = "item_details";
    fetch_item_details(id)
}

function openNav() {
    document.getElementById(
        "myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById(
        "myNav").style.width = "0%";
}

function openNav() {
    document.getElementById(
        "myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById(
        "myNav").style.height = "0%";
}
</script>

<?php
include("_common/footer.php");
?>