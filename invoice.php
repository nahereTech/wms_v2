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
        #item_display{
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);

        }


       
</style>
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
                    <h3>Invoice</h3>
                </div>




                <div class="title_right" style="text-align: right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group" style="float: right">
                            <!--span class="input-group-btn"-->
                            

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

                                    <div class="col-sm-3 col-xs-12 form-group">
                                        <!-- <div class="col-sm-3 col-xs-3"></div> -->
                                        <button type="button" class="btn btn-success" id="filter">Go</button>
                                        <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="filter_loader"></i>
                                    </div>

                                </div>

                                <!-- <div class="form-row"></div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" id="item_display" style="width: 80%; margin-left: auto; margin-right: auto; background-color: white;  border-radius: 10px; position: relative; top: 50px;font-family: 'Montserrat', sans-serif; height: 1000px"  >
                <!-- <div class="root">
                <div class="slash" align="right"  >
                    <h4 style="background-color: red; color: white">UNPAID</h4>
                </div>
                </div> -->
                <div class="row">
                    <div class="col-md-8 col-sm-8 " style="margin-left: 3%;">
                     <!--    <div class="x_panel">

                            <div class="x_content">
                                <br />
                                <span id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> -->
                       <div>
                       <!-- <page size="A4"> -->
                         <a href="javascript:void(0)"
                        class="logo" onclick="closeNav()" style="font-size: 24px"> 
                        <img src="../nahere_logo_blue.png" alt="alternative" style="width: 48px">
                        <span>NaHere!</span>  
                        </a>
                       <!-- </page> -->
                       </div>

                          <!--   </span>
                        </div>
                    </div> -->

                </div>
                    <div class="col-md-3 col-sm-3 ">
                  <h3>NaHere Limited</h3>
                  <p>Account Name: <span>NaHere Limited</span></p>
                  <p>Account Number: <span>00000000</span></p>
                </div>
            </div>
           <div class="row" style="background-image: linear-gradient(to right bottom, #466380, #467191, #447fa1, #3f8db1, #379cc0); color: white; margin-top: 50px; width: 90%; margin-left: auto; margin-right: auto; border-radius: 3px;">
                    <div class="col-md-12 col-sm-12 inv_info" style="padding: 10px;">
                        <br>
              
            </div>
            </div>
            <div class="row" style="color: black; margin-top: 50px; width: 90%; margin-left: auto; margin-right: auto;">
                    <div class="col-md-12 col-sm-12 inv_to">
                   
            </div>
            </div>
<div class="row" style="color: black; margin-top: 50px; width: 90%; margin-left: auto; margin-right: auto;">
            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings" style="background-image: linear-gradient(to right bottom, #466380, #467191, #447fa1, #3f8db1, #379cc0);">

                                        <th class="column-title" style="width: 80%">Description</th>
                                        <th class="column-title" style="width: 20%">Total</th>
                                        

                                       
                                    </tr>
                                </thead>

                                
                                <tbody id="itemsData" style="padding: 30px;">
                                  


                                </tbody>
                            </table>
                          </div>

                          <div class="row" style="color: black; margin-top: 50px; width: 90%; margin-left: auto; margin-right: auto;">
            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings" style="background-image: linear-gradient(to right bottom, #466380, #467191, #447fa1, #3f8db1, #379cc0);">

                                        <th class="column-title" style="width: 30%">Transaction Date</th>
                                        <th class="column-title" style="width: 30%">Gateway</th>
                                        <th class="column-title" style="width: 20%">Transaction ID</th>
                                        <th class="column-title" style="width: 20%">Amount</th>
                                       
                                    </tr>
                                </thead>

                                <tbody id="itemsData" style="">
                                    <tr>
                                    <td colspan="4" align="center">No Related transfer</td>
                                    
                                   </tr>
                                   <tr class="bal">
                                
                                   </tr>

                                </tbody>

                            </table>
                            <br>
                            <br>
                            <input type="hidden" id="paystack_ref">
                            <div class="form-group" style="display: none;" id="total_amt_div">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="module_duration">Total Amount
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                            <h4 id="total_amt"></h4>
                            <h4 id="hemail"></h4>


                            </div>
                            </div>
                            <div style="" align="center">
                           <!--      <button style="background-color: #00A2DD; padding: 10px; border: none; border-radius: 3px; box-shadow: 0 4px 8px rgba(0,0,0,0.19);color: white">Pay Invoice</button> -->
                                <button type="button" class="btn btn-success pay" id="pay" style="padding: 10px; border: none; border-radius: 3px; box-shadow: 0 4px 8px rgba(0,0,0,0.19);color: white"> Pay Invoice</button>
                            </div>

                            <div class="inv_gen">
                            </div>
                          </div>

        </div>
        
        </div>
        <script type="text/javascript">
    $(document).ready(function() {
    $(".pay").hide();
    populate_invoice();
         $(document).on('click', '#pay', function(){ 
         payWithPaystack() 
})

     function populate_invoice(){

        const urlParams = new URLSearchParams(window.location.search);
        const myParam = urlParams.get('ref_id');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    cache: false,
                            headers: {'Authorization':localStorage.getItem('token') },
                    
                    url: api_path + "invoice/view",
                    data: {
                        "ref_id" : myParam
                    },

                    success: function(response) {

                        if (response.status == '200') {
                               if(`${response.data.invoice_status}` == "unpaid"){
                            $("#pay").show();
                        }      
                        
                        console.log(response);

                        var add_tab = ""
                        var inv_to = ""
                        var desc = ""
                        var bal = ""
                        var inv_gen = ""

                        add_tab+=`<p>Invoice Number: ${response.data.invoice_code}</p>
                                  <p>Invoice Date: <span>${response.data.invoice_date.split(" ")[0]}</span></p>
                                  `
                        inv_to+=`<p><strong>Invoiced To</strong></p>
                                  <p>${response.data.invoice_to_name}</p>
                                  <p><span>${response.data.module_name}</span></p>
                                  `
                        desc+=  `<td style="padding: 10px;">${response.data.invoice_description}</td>
                                 <td>&#8358;${parseFloat(response.data.invoice_amount).toLocaleString()}</td>
                                  `

                        bal+=  `<td></td>
                                <td></td>
                                <td><strong>Balance</strong></td>
                                 <td><strong>&#8358;${parseFloat(response.data.invoice_amount).toLocaleString()}</strong></td>
                                `
                        inv_gen+=`<h5 align="center">Invoice Generated on <span>${response.data.invoice_date.split(" ")[0]}</span></h5>`

                         


                        } else {
                          alert(response.msg)
                    }

                        $('.inv_info').html(add_tab);
                        $('.inv_to').html(inv_to);
                        $('#itemsData').html(desc);
                        $('.bal').html(bal);
                        $('.inv_gen').html(inv_gen);
                        $('#total_amt').val(`${parseFloat(response.data.invoice_amount)}`);
                        $('#hemail').val(`${response.data.company_email}`);

                  },

                    error: function(response) {
                
                    }

})


}

function payWithPaystack(){
              
               var ref_num = Math.floor((Math.random() * 1000000000) + 1);
                $('#paystack_ref').val('T'+ref_num);
               alert(ref_num)


                // var amount = parseInt($("#modal_purchase_module #module_duration").find(':selected').data('amount')) * 100;
               // var email = localStorage.getItem('email');
                var amount = $('#total_amt').val();
                var ref = $('#paystack_ref').val();
                console.log(amount);

                var handler = PaystackPop.setup({
                  key: 'pk_test_d39018124cb7a12a366efed42aaebdec611c917c',
                  email: $('#hemail').val(),
                  amount: $('#total_amt').val() * 100,
                  currency: "NGN",
                  ref: ref,  //generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                  metadata: {
                     custom_fields: [
                        {
                            display_name: "Mobile Number",
                            variable_name: "mobile_number",
                            value: "+2348012345678"
                        }
                     ]
                  },
                  callback: function(response){
                      invoice_successfull();
                      // alert('success. transaction ref is ' + response.reference);
                      console.log(response);
                  },
                  onClose: function(){
                    $('#modal_purchase_module').modal('toggle');
                      // alert('window closed');
                  }
                });

              $("#pay").click(function(){
                $("#edit_msg").hide();
               });

                handler.openIframe();
                  
              }

    })
</script>

<?php

include_once("../gen/_common/header.php"); // header contents

?>
