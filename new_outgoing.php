<?php
include_once("_common/menu.php"); // menu list
include_once("../gen/_common/header.php"); // header contents
include_once("assets/wms.php"); // header contents
?>



<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Outgoing</h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <!-- <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
						<button class="btn btn-default" type="button">Go!</button>
						</span>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>From</small></h2>
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
                        <br />
                        <form class="form-horizontal form-label-left input_mask">

                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Company Name">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
                                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Phone">
                                <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" placeholder="Address"></textarea>
                                <!-- <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span> -->
                            </div>
                        </form>
                    </div>
                </div>

            </div>


            <div class="col-md-4 col-xs-12">
            	<div class="x_panel">
                    <div class="x_title">
                        <h2>To</small></h2>
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
                        <br />
                        <form class="form-horizontal form-label-left input_mask">

                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Company Name">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
                                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Phone">
                                <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" placeholder="Address"></textarea>
                                <!-- <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span> -->
                            </div>
                        </form>
                    </div>
                </div>

            </div>





            <div class="col-md-4 col-xs-12">


            	<div class="x_panel">
                    <div class="x_title">
                        <h2>Invoice Details</small></h2>
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
                        <br />
                        <form class="form-horizontal form-label-left input_mask">

                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Invoice Number">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Invoice Date">
                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Due Date">
                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" placeholder="Terms"></textarea>
                                <!-- <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span> -->
                            </div>
                        </form>
                    </div>
                </div>

            </div>




        </div>

        <div class="x_panel">
            

        	<br>
        	<div class="table-responsive">
                  <table class="table table-striped jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        
                        <th class="column-title" style="width: 5%">S/N</th>
                        <th class="column-title">Item</th>
                        <th class="column-title" style="width: 20%">Unit Price</th>
                        <th class="column-title" style="width: 20%">Quantity</th>                            
                        <th class="column-title no-link last" style="width: 20%">Amount
                        </th>
                        
                      </tr>
                    </thead>
                    
                    <tr id="loading" style="display: none">
                        <td colspan="6"><i class="fa fa-spinner fa-spin fa-fw fa-3x" ></i></td>
                    </tr>
                    <tbody id="approvalData">
                      

                      <tr>
                        <td>1</td>
                        <td>
                        	<div><input type="text" id="fullname" class="form-control" placeholder="Item" style="margin-bottom: 5px"></div>
                        	<textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-validation-threshold="10" placeholder="Description"></textarea>
                        </td>
                        <td>
                        	<input type="text" id="fullname" class="form-control" placeholder="Unit Price" style="margin-bottom: 5px">
                        </td>
                        <td>
                        	<input type="text" id="fullname" class="form-control" placeholder="Item" style="margin-bottom: 5px">
                        	<select class="form-control">
								<option>-- Warehouse --</option>
								<option>Option one</option>
								<option>Option two</option>
								<option>Option three</option>
								<option>Option four</option>
							</select>
                        </td>
                        <td>₦2,900,800.00</td>
                      </tr>



                      <tr>
                        <td>2</td>
                        <td>
                        	<div><input type="text" id="fullname" class="form-control" placeholder="Item" style="margin-bottom: 5px"></div>
                        	<textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-validation-threshold="10" placeholder="Description"></textarea>
                        </td>
                        <td>
                        	<input type="text" id="fullname" class="form-control" placeholder="Unit Price" style="margin-bottom: 5px">
                        </td>
                        <td>
                        	<input type="text" id="fullname" class="form-control" placeholder="Item" style="margin-bottom: 5px">
                        	<select class="form-control">
								<option>-- Warehouse --</option>
								<option>Option one</option>
								<option>Option two</option>
								<option>Option three</option>
								<option>Option four</option>
							</select>
                        </td>
                        <td>₦2,900,800.00</td>
                      </tr>



                      <tr>
                        <td></td>
                        <td>
                        	
                        </td>
                        <td>
                        	
                        </td>
                        <td>
                        	Sub-total
                        </td>
                        <td>₦2,900,800.00</td>
                      </tr>


                      <tr>
                        <td></td>
                        <td>
                        	
                        </td>
                        <td>
                        	
                        </td>
                        <td>
                        	Tax
                        </td>
                        <td>₦2,900,800.00</td>
                      </tr>


                      <tr>
                        <td></td>
                        <td>
                        	
                        </td>
                        <td>
                        	
                        </td>
                        <td>
                        	Grand Total
                        </td>
                        <td>₦2,900,800.00</td>
                      </tr>



                    </tbody>
                  </table>
            </div>

                        
        </div>


    </div>
</div>

<?php

include_once("../gen/_common/footer.php"); // header contents

?>
