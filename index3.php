<!DOCTYPE html>
<html lang="en">

<head>
    <title>NaHere! :: Warehouse Management System</title>
    <!-- META SECTION -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="google-site-verification" content="BIIKgKZES1Ml8BbcFCtMGdFNdhf7k-ABg4miOD4Wre8" />
    <meta name="google-signin-client_id" content="341582025304-09693s1st8481k09g6qj5omt6h9tgoie.apps.googleusercontent.com">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- END META SECTION -->
    <!-- CSS INCLUDE -->
    <link rel="icon" href="../favicon.png">
    <link rel="stylesheet" href="/world/assets/admin_template_2/css/styles2c70.css?v=1.0.4">

    <!-- <script src="https://cdn.rawgit.com/oauth-io/oauth-js/c5af4519/dist/oauth.js"></script> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.12.0/bootstrap-social.min.css"> -->


    <!-- <link rel="stylesheet" href="http://bootswatch.com/darkly/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.12.0/bootstrap-social.min.css"> -->
    <!-- EOF CSS INCLUDE -->
    <style type="text/css">
        .button{
            /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#bfd255+0,8eb92a+28,72aa00+100,9ecb2d+100,72aa00+101 */
            background: #bfd255; /* Old browsers */
            background: -moz-linear-gradient(top, #bfd255 0%, #8eb92a 28%, #72aa00 100%, #9ecb2d 100%, #72aa00 101%); /* FF3.6-15 */
            background: -webkit-linear-gradient(top, #bfd255 0%,#8eb92a 28%,#72aa00 100%,#9ecb2d 100%,#72aa00 101%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to bottom, #bfd255 0%,#8eb92a 28%,#72aa00 100%,#9ecb2d 100%,#72aa00 101%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#bfd255', endColorstr='#72aa00',GradientType=0 ); /* IE6-9 */
            }

            #gSignIn{
              width: 100%;
            }

            #gSignIn > div{
              margin: 0 auto;
            }

    </style>

    <!-- IMPORTANT SCRIPTS -->
 
    <script type="text/javascript" src="/world/assets/admin_template_2/js/vendors/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/world/assets/admin_template_2/js/vendors/jquery/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="/world/assets/admin_template_2/js/vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/world/assets/admin_template_2/js/vendors/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>
    <!-- <script src="https://cdn.rawgit.com/oauth-io/oauth-js/c5af4519/dist/oauth.js"></script> -->
    <!-- <script type="text/javascript" src="world/assets/js/jquerysession.js"></script> -->
    <!-- END IMPORTANT SCRIPTS -->
    <!-- TEMPLATE SCRIPTS -->
    <!-- <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/demo.js"></script>
    <script type="text/javascript" src="js/settings.js"></script> -->
     <script type="text/javascript" src="/world/assets/js/login.js?v=1.2"></script>
    <script type="text/javascript" src="/world/assets/js/register.js?v=1"></script>
    <script type="text/javascript" src="/world/assets/js/action.js?v=1"></script>
    <!-- END TEMPLATE SCRIPTS -->


    <script>
      
    </script>

    <script type="text/javascript">
        
        $(document).ready(function(){
            
            is_this_a_company();
            // check_if_session_is_available();
        
        });

        function fetch_company_colors(){

            var company_id = localStorage.getItem('company_id');

            $.ajax({
                
                type: "POST",
                dataType: "json",
                url: api_path+"company/get_company_colours",
                data: {"company_id": company_id},
                timeout: 60000,

                success: function(response) {
                    
                  

                  if (response.status == '200'){

                      var color = '#2A3F54';
                      if(response.data.login_btn_color == '' || response.data.login_btn_color == null){
                        response.data.login_btn_color = color;
                      }

                   
                      $('.login_btn').css('background', response.data.login_btn_color);
                     
                   
                  }   
                    
                },
                // objAJAXRequest, strError
                error: function(response){
                  
                  alert('Connection error!');
                  
                }        

            });
        }

        function is_this_a_company(){

            var pathArray = window.location.href.split('.');
            var username = pathArray[0].replace(/http:\/\//,'');
            var username = username.replace(/https:\/\//,'');

            $.ajax({

                type: "POST",
                dataType: "json",
                cache: false,
                url: api_path+"company/get_company_details",
                data: { "comp_username" : username },
                success: function(response) {
                    
                    console.log(response);

                    if (response.status == '200') {
                        
                        if(response.data.bg_image == ""){
                            response.data.bg_image = "no_backg.png";
                        }

                        if(response.data.company_logo == ""){
                            response.data.company_logo = "default_comp_logo.png";
                        }
                        
                        // $("#content").css("background", "url(assets/images/warehouseimg.jpg)");
                        $("#logo_imgg").attr("src", "../files/images/company_images/sml_"+response.data.company_logo);

                        $("#company_username").val(username);

                        check_if_session_is_available();
                        fetch_company_colors();

                    }else{ 

                        // $("#content").css("background", "url(/world/assets/images/kweue.jpeg)");
                        // $("#logo_imgg").attr("src", "/world/assets/images/darklogo.png" );

                        alert("Company Page Does not exist");

                    }

                },
                error: function(response){
                    alert("Technical Error. Please try again.");
                }

            });

        }


        


        function check_if_session_is_available(){

            var token = localStorage.getItem('token');

            if(token == null){

                localStorage.clear();
                $('body').show();

            }else if(user_id !== undefined || user_id !== null){
                
                window.location = base_url+"/feeds";

            }

            // var user_id = localStorage.getItem('user_id');

            // if(user_id == null){

            //  localStorage.clear();
            //  $('body').show();

            // }else if(user_id !== undefined || user_id !== null){
                
            //  window.location = base_url+"/feeds";

            // }

        }
    </script>
     
    
</head>



<body style="display: ;">
    

    <script>
            
        
        
    </script>

    <!-- PAGE WRAPPER -->
    <div class="page">
        <!-- PAGE CONTENT WRAPPER -->
        <div class="page__content" id="page-content">
            <!-- PAGE LOGIN CONTAINER -->
            <div class="important-container login-container"  style="background-color: ">
                <!-- <div class="login-container__buttons login-container__buttons--right"><a href="/pages-registration.html" class="btn btn-outline-primary btn--icon btn--icon-right">Create account <span class="fa fa-angle-right"></span></a></div> -->
                <div class="content">

                    
                    <a class="logo-holder logo-holder--lg logo-holder--wide" >
                        <div class="logo-text"  style="color: #04003D; height: auto; margin-top: 15px">
                            <!-- <img src="world/assets/images/darklogo.png" id="logo_imgg"><br> -->
                            <img src="" id="logo_imgg" style="height: 90px; max-width: 230px"><br>

                            <!-- <strong>Employee.ng</strong> -->
                            <!-- <p class="caption text-center margin-bottom-30">Employee-focused ERP</p> -->
                        </div>
                    </a>
                    
                    


                    <br><br><br><br><br><br>

                    
                        <div id="login_dv" style="display: ">
                    
                        
                            <div class="form-group">
                                <!-- <label>Email</label> -->
                                <input type="text" class="form-control required login_fms" placeholder="Your Email" id="email" autocomplete="off">
                                
                            </div>
                            <div class="form-group margin-bottom-20">
                                <!-- <label>Password</label> -->
                                <input type="password" class="form-control required login_fms" placeholder="Your Password" autocomplete="new-password" id="password">
                                <input type="hidden" class="" placeholder="" id="company_username" value="">
                            </div>
                            <div class="form-group margin-bottom-30">

                                <a href="#" id="forgot_password" style="color: #04003D"><u>Forgot Password?</u></a>&nbsp;&nbsp; <!-- | &nbsp;&nbsp;<a href="#" id="go_to_register" style="color: #04003D"><u>Register</u></a> -->
                                <div class="form-row">
                                    <!-- <div class="col-6">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" checked=""> <span class="custom-control-label">Remember me</span>
                                        </label>
                                    </div> -->
                                    <!-- <div class="col-6 text-right">
                                        
                                    </div> -->
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-2"></div>
                                    <div class="col-8" style="text-align: center">
                                        <div id="error-msg" style="text-align: center; color: red"></div>
                                        <button class="btn btn-success btn-block login_btn" style=" border: 0px" id="login">Login to Account</button>
                                        <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none; color: grey; text-align: center" id="loader_lgn"></i>
                                    </div>
                                </div>
                            </div>

                            

                            <div class="form-group">
                                <div class="form-row">
                                    <!-- <div class="col-2"></div> -->
                                    

                                    <!-- <div class="hidden-sm">
                                        <br>
                                    </div> -->
                                    
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <div class="form-row">
                                    <div class="col-2"></div>
                                    <div class="col-8" style="text-align: center">
                                    
                                            OR
                                       
                                    </div>
                                </div>
                            </div> -->

                    <!-- <div class="text-center">
                        
                        <div id="gSignIn"></div>
                        
                        <br>
                        <div style="margin-top: 0px;" class="fb-login-button" data-max-rows="1" data-size="medium" login_text="Continue With Facebook" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false" data-onlogin="checkLoginState();" data-scope="public_profile,email"></div>
                        
                    </div> -->

                           
                        


            </div>








                        <div id="forgot_dv" style="display: none">
                    
                        
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control required_fp login_fms" placeholder="Email" id="f_email">
                                
                            </div>
                            
                            <div class="form-group margin-bottom-30">

                                <a href="#" id="back_to_login">Back to Login</a>
                                <div class="form-row">
                                    
                                </div>
                            </div>
                            <div class="form-group margin-bottom-30">
                                <div class="form-row">
                                    <div class="col-2"></div>
                                    <div class="col-8" style="text-align: center">
                                        <div id="error-msg" class="error-msg" style="text-align: center; color: red"></div>
                                        <button class="btn btn-success btn-block login_btn" id="retrieve_password" >Retrieve Password</button>
                                        <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none; color: grey; text-align: center" id="loader_fp"></i>
                                    </div>
                                </div>
                            </div>


                        </div>














                        <div id="insert_recovery_code_dv" style="display: none">
                    
                            We sent a password recovery code to your email. Please insert the code in the field below.<br><br>
                            <div class="form-group">
                                <label>Recovery Code</label>
                                <input type="text" class="form-control login_fms required_codcod" placeholder="Code" id="f_code">
                                <input type="hidden" class="form-control login_fms" id="hemail">
                                
                            </div>
                            
                            <div class="form-group margin-bottom-30">

                                <a href="#" id="recovery_code"> or Back to Login</a>
                                <div class="form-row">
                                    
                                </div>
                            </div>
                            <div class="form-group margin-bottom-30">
                                <div class="form-row">
                                    <div class="col-2"></div>
                                    <div class="col-8" style="text-align: center">
                                        <div id="error-msg" class="error-msg" style="text-align: center; color: red"></div>
                                        <button class="btn btn-success btn-block" id="validate_recov_code" style="background-color: #04003D">Proceed</button>
                                        <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none; color: grey; text-align: center" id="loader_valcode"></i>
                                    </div>
                                </div>

                            </div>

                        </div>









                        <div id="change_password_forms_dv" style="display: none">
                    
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" class="form-control login_fms required_upnw" placeholder="New Password" id="up_new_pass">
                            </div>


                            <div class="form-group">
                                <label>Repeat Password</label>
                                <input type="password" class="form-control login_fms required_upnw" placeholder="Repeat Password" id="r_up_new_pass">
                                <input type="text" class="form-control login_fms " value="" id="hehemail" style="display: none" >
                                <input type="text" class="form-control login_fms " value="" id="rccvvv_code" style="display: none" >
                            </div>
                            
                            
                            <div class="form-group margin-bottom-30">
                                <div class="form-row">
                                    <div class="col-2"></div>
                                    <div class="col-8" style="text-align: center">
                                        <div id="error-msg" class="error-msg" style="text-align: center; color: red"></div>
                                        <button class="btn btn-success btn-block" id="update_passwordnw" style="background-color: #04003D">Update Password</button>
                                        <i class="fa fa-spinner fa-spin fa-fw fa-3x " style="display: none; color: grey; text-align: center" id="loader_cpsw"></i>
                                    </div>
                                </div>

                            </div>

                        </div>











                        <div id="done_forgot" style="display: none">
                    
                            Password has been successfully reset. You may now go to login.<br><br>
                            
                            <div class="form-group margin-bottom-30">
                                <div class="form-row">
                                    <div class="col-2"></div>
                                    <div class="col-8" style="text-align: center">
                                        
                                        <button class="btn btn-success btn-block" id="forgot_done_back_to_login" style="background-color: #04003D">Back to Login</button>
                                        
                                    </div>
                                </div>

                            </div>

                        </div>












                        <div id="reg_done_dv" style="display: none">
                            <h2>Registration is Successful</h2>
                            Please check your email to confirm your registration and proceed back to login<br><br>
                            <div class="form-group margin-bottom-30">
                                <div class="form-row">
                                    <div class="col-2"></div>
                                    <div class="col-8" style="text-align: center">
                                        <div id="error-msg2" style="text-align: center; color: red"></div>
                                        <button class="btn btn-success btn-block" id="back_tlf_succ" style="background-color: #04003D">Back to Login</button>
                                        
                                    </div>
                                </div>
                            </div>


                        </div>























                        <div id="register_dv" style="display: none">

                            <div class="form-group">
                                <!-- <label>Firstname</label> -->
                                <input type="text" class="form-control required3 login_fms" placeholder="Firstname" id="firstname" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <!-- <label>Firstname</label> -->
                                <input type="text" class="form-control required3 login_fms" placeholder="Lastname" id="lastname" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <!-- <label>Your Email</label> -->
                                <input type="text" class="form-control required3 login_fms" placeholder="Email" id="r_email" autocomplete="off">
                            </div>
                            <!-- <div class="form-group margin-bottom-20">
                                <label>Repeat Password</label>
                                <input type="phone" class="form-control login_fms" placeholder="Phone" id="phone" autocomplete="off">
                            </div> -->

                            <div class="form-group margin-bottom-20">
                                
                                <input type="username" class="form-control login_fms required3" placeholder="Company or Personal Sub-domain" id="username" autocomplete="off">
                                &nbsp;https://nahere.employee.ng &nbsp; <a href="" style="font-size: 11px">What is this?</a>
                            </div>

                            <div class="form-group margin-bottom-20">
                                <!-- <label>Choose Password</label> -->
                                <input type="password" class="form-control required3 login_fms" placeholder="Choose Your password" autocomplete="off" id="r_password">
                            </div>
                            
                            <div class="form-group margin-bottom-30">

                                <a href="#" id="back_to_login2">Back to Login</a>
                                <div class="form-row">
                                    <!-- <div class="col-6">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" checked=""> <span class="custom-control-label">Remember me</span>
                                        </label>
                                    </div> -->
                                    <!-- <div class="col-6 text-right">
                                        
                                    </div> -->
                                </div>
                            </div>
                            <div class="form-group margin-bottom-30">
                                <div class="form-row">
                                    <div class="col-2"></div>
                                    <div class="col-8" style="text-align: center">
                                        <div id="error-msg3" style="text-align: center; color: red"></div>
                                        <button class="btn btn-success btn-block" id="register" style="background-color: #04003D">Register</button>
                                        <i class="fa fa-spinner fa-spin fa-fw fa-3x" style="display: none; color: grey; text-align: center" id="loader_lgn_r"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    <div class="divider"></div>
                    <div class="form-group text-center">
                        <div class="form-row">
                            
                            <!-- <div class="col-4"><a href="products" class="text-muted">Products</a></div>
                            <div class="col-4"><a href="contact" class="text-muted">Contact</a></div>
                            <div class="col-4"><a href="terms" class="text-muted">Terms</a></div> -->

                            <div class="col-2"><a href="products" class="text-muted"></a></div>
                            <div class="col-8"><a href="http://employee.ng" class="text-muted">&copy <?php echo date("Y"); ?> NaHere</a></div>
                            <div class="col-2"><a href="terms" class="text-muted"></a></div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- PAGE LOGIN CONTAINER -->
            <!-- PAGE CONTENT CONTAINER -->
            <div class="content d-none d-lg-block" id="content" style="background-color: #04003D; background: url(../world/assets/images/asdggsdfgf.jpg) no-repeat; background-size: cover;" >

                <!-- <div style="margin: 60px;  color: #e8edf4">
                    <div style="font-size: 40px;">Are You CV-Ready?</div><br>
                    <div style="font-size: 20px;">- Computer-guided CV Creation<br>- Bit-by-bit CV Updating<br>- Keep Your CV 100% Ready At All Times<br>- Improve Your CV on Regular Basis<br>- One-click CV Mailing<br>- Export Your CV</div>
                </div> -->

                <!-- style="margin: 0px; background: url(../employeeng_logo.png) no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;" -->
    
            </div>

            <!-- //END PAGE CONTENT CONTAINER -->
        </div>
        <!-- //END PAGE CONTENT -->
    </div>
    <!-- //END PAGE WRAPPER -->
    

</body>



<!-- modal -->
<div id="registerModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Registration Successful</h4>
      </div>
      <div class="modal-body">
        <h4 text-center>Please check your E-mail Address for your login details</h4>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>

    </div>
  </div>
</div>

</html>