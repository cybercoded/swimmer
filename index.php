<link rel="stylesheet" href="popup_style.css"> 
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
   <?php
   session_start();
//error_reporting(0);
include('head.php');
  include('./constant/connect.php');

  if(isset($_POST['btn_login']))
{
$unm = $_POST['email'];
//echo $_POST['passwd'];
//$p="admin";
//echo $unm;exit;
$passw = hash('sha256', $_POST['password']);
//$passw = hash('sha256',$p);
//echo $passw;exit;
function createSalt()
{
    return '2123293dsj2hu2nikhiljdsd';
}
$salt = createSalt();
$pass = hash('sha256', $salt . $passw);
//echo $pass;
 $sql = "SELECT * FROM admin WHERE email='" .$unm . "' and password = '". $pass."'";
    $result = mysqli_query($con,$sql);
    $row  = mysqli_fetch_array($result);
    //print_r($row);
     $_SESSION["id"] = $row['id'];
     $_SESSION["username"] = $row['username'];
     $_SESSION["password"] = $row['password'];
     $_SESSION["email"] = $row['email'];
     //echo $_SESSION["email"];exit;
     $_SESSION["fname"] = $row['fname'];
     $_SESSION["lname"] = $row['lname'];
     $_SESSION["image"] = $row['image'];
     $count=mysqli_num_rows($result);
     
     if(count($result)==1 && isset($_SESSION["email"]) && isset($_SESSION["password"])) {
    {       
        ?>
         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Success 
    </h1>
    <p>Login Successfully</p>
    <p>
     <!--  <a href="index.php"><button class="button button--success" data-for="js_success-popup"></button></a> -->
     <?php echo "<script>setTimeout(\"location.href = './admin/dashboard.php';\",1500);</script>"; ?>
    </p>
  </div>
</div>
   <!--   <script>
     window.location="index.php";
     </script> -->
     <?php
    }
}
else {?>
     <div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error 
    </h1>
    <p>Invalid Email or Password</p>
    <p>
      <a href="index.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div>
       <!--  <script> 
       // alert("Invalid email or Password!");
        window.location="login.php";
        </script> -->
        <?php
        //// $message = "Invalid email or Password!";
         }
    
    }
?>


         


    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <div class="unix-login">
<?php
             $sql_login = "select * from manage_website"; 
             $result_login = $con->query($sql_login);
             $row_login = mysqli_fetch_array($result_login);
             ?>
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5">
                        <div class="login-content card">
                            <div class="login-form">
                                <center><img src="./assets/uploadImage/Logo/<?php echo $row_login['login_logo'];?>" style="width:200px;"></center><br><!-- <h4>Login</h4> -->
                                <form method="POST">
                                    <div class="form-group">
                                        <label><b>Email address</b></label>
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <label><b>Password</b></label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" required="">
                                    </div>
                                     <div class="g-recaptcha mt-2" data-sitekey="6LdJC4AeAAAAAE638ShRfVSMBDSDjbQmkxD-lh_p"></div>
                                    <button type="submit" name="btn_login" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                    
                                  <!--   <div class="register-link m-t-15 text-center">
                                        <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                                    </div> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <!-- All Jquery -->
    <script src="./assets/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="./assets/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="./assets/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="./assets/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="./assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="./assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="./assets/js/custom.min.js"></script>
</body>

</html>
