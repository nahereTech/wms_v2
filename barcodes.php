<?php
include("_common/header_test.php");
include("assets/deBarcode/vendor/autoload.php");

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
<div class="right_col" role="main" id="main_display" style="display: ;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Product Barcode Generator</h3>
            </div>

            <div class="title_right">
                <div class="col-md-6 col-sm-6 col-xs-12 form-group pull-right top_search">
                    <div class="input-group" style="float: right">

                        <button type="button" class="btn btn-default" id="barcode_display">Generate Product Barcode</button>
                     </div>
                </div>
            </div>
        </div>

        <div id="barcode_form_display" style="display: none;">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">

                        <div class="x_content">
                            <br />

                            <div class="form-row">

                                <div class="col-sm-2 col-xs-12">
                                    <label>Product Name</label>
                                    <input type="text" id="product_name" class="form-control">
                                </div>

                                <div class="col-sm-3 col-xs-12">

                                    <label>Product Serial</label>

                                     <input type="text" class="form-control" id="product_serial">
  
                                </div>


                            </div>
                            <br>
                            <br>

                            <div class="form-row">

                                <div class="col-sm-3 col-xs-4">
                                    <br>
                                    <button type="button" class="btn btn-success" id="generate">Generate</button>
                                    <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="filter_loader"></i>
                                </div>

                            </div>

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

                                        <th class="column-title" width="15%">S/N</th>
                                        <th class="column-title" width="15%">Product Name</th>
                                        <th class="column-title">Product Serial</th>
                                        <th class="column-title">Barcode Image</th>
                                        
                                     
                                    </tr>
                                </thead>

                                <!-- <tr id="loading">
                                    <td colspan="6"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: ;"></i></td>
                                </tr> -->
                                <tbody id="incomingData">
                                    <tr>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td>
                                        <?php 
                                            // echo "Okay";
                                            $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
                                            // print_r($generator);
                                            echo $generator->getBarcode('081231723897', $generator::TYPE_CODE_128);
                                        ?>
                                      </td>
                                    </tr>

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

//   $(document).ready(()=>{
//      $('#barcode_display').on('click', displayBarcodeForm);
//   });

//   const displayBarcodeForm=()=>{
//       $('#barcode_form_display').toggle();
//   }
//   JsBarcode('.barcodeImage').init()
  // JsBarcode("#barcodeImage", "12345670", {format: "ean8"});



</script>
<?php
 include("_common/footer_test.php");
?>