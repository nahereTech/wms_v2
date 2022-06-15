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
                <h3>Debts</h3>
              </div>

              <div class="title_right" style="text-align: right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group" style="float: right">

                    <!-- button type="button" class="btn btn-primary" id="filter_attendence">Filter</button>
                    
                    <button type="button" class="btn btn-success" id="add_attendence">Add</button>
                    
                    <button type="button" class="btn btn-success" id="upload_attendence">Upload</button>
 -->
                    
                  </div>
                </div>
              </div>

            </div>


            


            <div id="add_attendence_display" style="display: none;">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <br />
                    <span id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="employee_id">Employee <span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control col-md-7 col-xs-12 required" id="employee_id" name="employee_id">
                            <option value="">-- Select --</option>
                            
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Date <span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="date" required="required" class="form-control col-md-7 col-xs-12 required">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="clock_in">Clock In Time <span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="clock_in" required="required" class="form-control col-md-7 col-xs-12 required">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="clock_out">Clock Out Time
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="clock_out" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12 text-danger" id="error_att">
                          
                        </div>
                      </div>
                          
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <!-- <button class="btn btn-primary" type="button">Cancel</button>
                          <button class="btn btn-primary" type="reset">Reset</button> -->
                          <button type="button" class="btn btn-success" id="add">Add</button>
                          <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" id="attendance_loader"></i>
                        </div>
                      </div>

                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

            <div id="filter_attendence_display" style="display: none;">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <br />
                    

                    <div class="form-row">
                      
                      <div class="col-sm-4 col-xs-4">
                        <select class="form-control col-md-7 col-xs-12 required" id="employee_name">
                            <option value="">-- Select Employee--</option>
                            
                          </select>
                      </div>
                    

                      <div class="col-sm-4 col-xs-4">
                        <input type="text" class="form-control" placeholder="Date Range" id="date_range">
                      </div>

                      

                      <button type="button" class="btn btn-success" id="filter">Search</button>
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
                            
                            <th class="column-title">S/N</th>
                            <th class="column-title">Client</th>
                            <th class="column-title">Amount</th>
                            
                            
                            <th class="column-title no-link last"><span class="nobr">Actions</span>
                            </th>
                            <th class="bulk-actions" colspan="5">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>
                        
                        <tr id="loading">
                            <td colspan="4"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;"></i></td>
                          </tr>
                        <tbody id="debtData">
                          

                          <!-- <tr>
                            <td colspan="7">No record.</td>
                          </tr> -->   
                        </tbody>
                      </table>
                    </div>
                            
                        
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <!-- modal -->
        <div class="modal fade" id="modal_attendance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <h4>Employee Attendance Added Successfully!</h4>
              </div>
              <!-- <div class="modal-footer"> -->
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
              <!-- </div> -->
            </div>
          </div>
        </div>

         <div class="modal fade" id="modal_debt_info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header ">
                <h3 class="modal-title" id="exampleModalLabel" style="color: #fff;"><i class="fa fa-globe"></i> Debts
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </h3>
                
              </div>
              <div class="modal-body">
                <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                          <b>From</b>
                          <address id="inv_from">
                              
                          </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          <b>To</b>
                          <address id="inv_too">
                              
                          </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col" id="inv_date">
                          
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                <div class="row">
                <div class="table-responsive">
                 <table class="table">
                        <thead>
                          <tr class="headings">

                            <th class="column-title">Item</th>
                            <th class="column-title">Quantity</th>
                            <th class="column-title">Unit Cost(₦)</th>
                            <th class="column-title" style="text-align: right">Total(₦)</th>
                          
                          </tr>
                        </thead>
                        
                          <tr id="loading">
                            <td colspan="6"><i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none;" ></i></td>
                          </tr> 
                        <tbody id="debtInfo">
                            
                        </tbody>
                      </table>
                    </div>        

                  </div>

               
              </div>
              <div class="modal-footer">
                <!-- <button class="btn btn-primary">Generate</button> -->
                <!-- <button type="button" class="btn btn-primary">Print</button>
                <button type="button" class="btn btn-primary">Email</button> -->
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->

              </div>
            </div>
          </div>
        </div>

        <script type="text/javascript">
          $(document).ready(function(){
            // load_employee();

            list_warehouse_debts();
            // attendance();
            // // list_of_positions();
            // $('#add_attendence').on('click', show_add);
            // $('#filter_attendence').on('click', show_filter);
            // $('#upload_attendence').on('click', show_upload);

            // $('#clock_in').datetimepicker({
            //   format: 'HH:mm:ss'
            // });

            // $('#clock_out').datetimepicker({
                
            //     format: 'HH:mm:ss'
            // });

            // $('input#date').datepicker({
            //   dateFormat: "yy-mm-dd"
            // });

            // $('input#date_range').daterangepicker({
            //   autoUpdateInput: false
            // });

            // $('input#date_range').on('apply.daterangepicker', function(ev, picker) {
            //    $(this).val(picker.startDate.format('YYYY/MM/DD') + ' - ' + picker.endDate.format('YYYY/MM/DD'));

            // });

            // // $('input#date_end').datepicker({
            // //   dateFormat: "yy-mm-dd"
            // // });

            // $('#add').on('click', add_company_attendance);
            // $('#filter').on('click', attendance);

            //  $(document).on('click', '.delete_attendance', function(){
            //     var attendance_id = $(this).attr('id').replace(/att_/,''); // table row ID 
            //     delete_attendance(attendance_id);
            // });


          })

          function add_company_attendance(){
            var employee_id = $('#employee_id').val();
            var company_id = localStorage.getItem('company_id');
            var user_id = localStorage.getItem('user_id');
            var date = $('#date').val();
            var clock_in = $('#clock_in').val();
            var clock_out = $('#clock_out').val();

            
            var blank;


            if(employee_id == "" && date == "" && clock_in == ""){
                $('#error_att').html("You have a blank field"); 

                return;        
            }
            // $(".required").each(function(){

            //   var the_val = $.trim($(this).val());

            //   if(the_val == "" || the_val == "0"){

            //     $(this).addClass('has-error');

            //     blank = "yes";

            //   }else{

            //     $(this).removeClass("has-error");

            //   }

            // });

            // if(blank == "yes"){
    
            //   $('#error_att').html("You have a blank field");

            //   return; 

            // }
         
          $('#error_att').html("");
          $('#add').hide();
          $('#attendance_loader').show();



          $.ajax({

            type: "POST",
            dataType: "json",
            cache: false,
            url: api_path+"hrm/add_employee_attendance",
                 headers: {
                'Authorization':localStorage.getItem('token'),
               },
            data: { "employee_id" : employee_id, "company_id" : company_id, "user_id" : user_id, "date" : date, "clock_in" : clock_in, "clock_out" : clock_out},

            success: function(response) {

              console.log(response);

              if (response.status == '200') {


                $('#modal_attendance').modal('show');

                $('#modal_attendance').on('hidden.bs.modal', function () {
                    // do something…
                    $('#add_attendance_display').hide();
                    window.location.reload();
                    //window.location.href = base_url+"/erp/hrm/employees";
                })
                
                
              }else if(response.status == '400'){ // coder error message

                
                $('#error_att').html(response.msg);

              }else if(response.status == '401'){ //user error message

                
                $('#error_att').html(response.msg);

              }

               
              $('#add').show();
              $('#attendance_loader').hide();

            },

            error: function(response){

              $('#add').show();
              $('#attendance_loader').hide();
              $('#error_att').html("Connection Error.");

            }

          });

          }

          

           function list_warehouse_debts(){
            var company_id = localStorage.getItem('company_id');
             
             
            

            $('#loading').show();
            $('#debtData').html('');

            $.ajax({
                
                type: "POST",
                dataType: "json",
                     headers: {
                'Authorization':localStorage.getItem('token'),
               },
                url: api_path+"wms/debt_history",
                data: { "company_id": company_id},
                timeout: 60000,

                success: function(response) {
                    console.log(response);

                    var strTable = "";
                    
                    if (response.status == '200'){
                        $('#loading').hide();
                        if(response.data.length > 0){

                            var k = 1;
                            $.each(response['data'], function (i, v) {

                              strTable += '<tr>';
                              
                              strTable += '<td>'+k+'</td>';
                              strTable += '<td>'+response['data'][i]['inv_to']+'</td>';
                              strTable += '<td>'+response['data'][i]['inv_grand_total']+'</td>';

                              strTable += '<td valign="top"><a class="view_pay btn btn-primary btn-xs" id="in_'+response['data'][i]['inv_id']+'" style="cursor: pointer;"><i  class="fa fa-folder"  data-toggle="tooltip" data-placement="top" title="Edit Item"></i> View</a>&nbsp;';

                              strTable += '<i  class="fa fa-spinner fa-spin fa-1x fa-fw" aria-hidden="true" style="display: none;" id="loader_'+response['data'][i]['inv_id']+'"></i>&nbsp;&nbsp;';  

                              strTable += '<a class="edit_pay btn btn-info btn-xs" style="cursor: pointer;" id="inv_'+response['data'][i]['inv_id']+'"><i  class="fa fa-pencil"  data-toggle="tooltip" data-placement="top" title="Edit Payment"></i> Update</a>&nbsp;&nbsp;'; 

                              strTable += '<i  class="fa fa-spinner fa-spin fa-1x fa-fw" aria-hidden="true" style="display: none;" id="loader11_'+response['data'][i]['inv_id']+'"></i></td>';
                              
                              strTable += '</tr>';  

                                
                              k++;
                                 
                            });

                        }else{

                            strTable = '<tr><td colspan="4">'+response.msg+'</td></tr>';

                        }
                        
                                   
                        $("#debtData").html(strTable);
                        $("#debtData").show();

                    }else if(response.status == '400'){
                        var strTable = "";
                        $('#loading').hide();
                        // alert(response.msg);
                        strTable += '<tr>';
                        strTable += '<td colspan="4">'+response.msg+'</td>';
                        strTable += '</tr>';

                        
                        $("#debtData").html(strTable);
                        $("#debtData").show();
                        

                    }    
                
                },

                error: function(response){
                    // alert('Connection error');
                    var strTable = "";
                        $('#loading').hide();
                        // alert(response.msg);
                        strTable += '<tr>';
                        strTable += '<td colspan="4"><strong class="text-danger">Connection error!</strong></td>';
                        strTable += '</tr>';

                        
                        $("#debtData").html(strTable);
                        $("#debtData").show();
                        
                }        

            });
          }

          function delete_attendance(attendance_id) {
             // alert('user deleted');
            // var email = $.session.get('email'); 
            var company_id = localStorage.getItem('company_id');
            // alert(employee_id);
            

            var ans = confirm("Are you sure you want to delete?");
            if(!ans){
                return;
            }
            

            $('#row_'+attendance_id).hide();
            $('#loader_row_'+attendance_id).show();
            $.ajax({ 
                type: "POST",
                dataType: "json",
                     headers: {
                'Authorization':localStorage.getItem('token'),
               },
                url: api_path+"hrm/delete_employee_attendance",
                data: {"company_id": company_id, "attendance_id" : attendance_id},
                timeout: 60000, // sets timeout to one minute
                // objAJAXRequest, strError

                error: function(response){
                    $('#loader_row_'+attendance_id).hide();
                    $('#row_'+attendance_id).show();

                    // alert('connection error');
                },

                success: function(response) {  
                    // console.log(response);
                    if(response.status == '200'){
                        // $('#row_'+user_id).hide();

         
                    }else if(response.status == '401'){
                            
                                
                    }

                    $('#loader_row_'+attendance_id).hide();
                }
            });
          }


          function show_add(){
            $('#add_attendence_display').toggle();
            $('#upload_display').hide();
            $('#filter_attendence_display').hide();
            $('#date').val('');
            $('#employee_id').val('');
            $('#clock_out').val('');
            $('#clock_in').val('');
            $('#error_att').html('');

            $(".required").each(function(){

              var the_val = $.trim($(this).val());

              $(this).removeClass("has-error");

            });
          }


          function show_filter(){
            $('#filter_attendence_display').toggle();
            $('#add_attendence_display').hide();
            $('#upload_display').hide();
            $('#date').val('');
            $('#employee_id').val('');
            $('#clock_out').val('');
            $('#clock_in').val('');
            $('#error_att').html('');

            $(".required").each(function(){

              var the_val = $.trim($(this).val());

              $(this).removeClass("has-error");

            });
          }


          function show_upload(){
            $('#upload_display').toggle();
            $('#add_attendence_display').hide();
            $('#filter_attendence_display').hide();
            $('#date').val('');
            $('#employee_id').val('');
            $('#clock_out').val('');
            $('#clock_in').val('');
            $('#error_att').html('');

            $(".required").each(function(){

              var the_val = $.trim($(this).val());

              $(this).removeClass("has-error");

            });
          }
        </script>

<?php
include_once("../gen/_common/footer.php"); // header contents
?>