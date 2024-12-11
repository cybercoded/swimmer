
<?php include('../constant/layout/head.php');?>
<?php include('../constant/layout/header.php');?>

<?php include('../constant/layout/sidebar.php');?> 
<link rel="stylesheet" href="popup_style.css">
 <?php
//session_start();
//error_reporting(0);
include('../constant/connect.php');

?>
  <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Add Swimmer</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Add Swimmer</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="input-states">
                                    <form class="row" method="POST"  name="userform" enctype="multipart/form-data" action="new_submit.php" id="form1" name="form1">
                                    <div class="form-group col-md-6">
                                                <label class="control-label">Swimmer ID</label>
                                                  
                                                 <input type="text" id="boxx" name="m_id" value="<?php echo time(); ?>" readonly required class="form-control">
                                        </div>

                                  

                                        <div class="form-group col-md-6">
                                                <label class="control-label">NAME</label>
                                                 <input name="u_name" id="boxx"  required  class="form-control"/>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                                <label class="control-label">STREET NAME</label>
                                                <input  name="street_name" id="boxx" class="form-control" required/>
                                        </div>

                                       <div class="form-group col-md-6">
                                                <label class="control-label">CITY:</label>
                                                 <input type="text" name="city" id="boxx" class="form-control" required/>
                                        </div>

                                      <div class="form-group col-md-6">
                                                <label class="control-label">ZIPCODE:</label>
                                                <input type="number" name="zipcode" id="boxx" maxlength="6" class="form-control" required pattern="^[0-9]+$" />
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">STATE</label>
                                                <input type="text"  name="state" id="boxx" class="form-control" required/>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">GENDER</label>
                                               <select name="gender" id="boxx" required class="form-control">

                    <option value="">--Please Select--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">DATE OF BIRTH</label>
                                                <input type="date"  name="dob" id="boxx"  class="form-control" required/>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">PHONE NO</label>
                                                <input type="number" name="mobile" id="boxx" maxlength="10" class="form-control" required pattern="^[0][1-9]\d{9}$|^[1-9]\d{9}$">
                                        </div><div class="form-group col-md-6">
                                                <label class="control-label">EMAIL ID</label>
                                                <input type="email" name="email" id="boxx" class="form-control" required  />
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">JOINING DATE</label>
                                                <input type="date" name="jdate" id="boxx" class="form-control" required/>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">PLAN</label>
                                               <select name="plan" id="boxx" required onchange="myplandetail(this.value)" class="form-control">
                    <option value="">--Please Select--</option>
                    <?php
                        $query="select * from plan where active='yes'";
                        $result=mysqli_query($con,$query);
                        if(mysqli_affected_rows($con)!=0){
                            while($row=mysqli_fetch_row($result)){
                                echo "<option value=".$row[0].">".$row[1]."</option>";
                            }
                        }

                    ?>
                    
                </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <div id="plandetls"></div>
                                        </div>
                                         <div class="col-md-12">
                                        <button type="submit" name="submit" id="submit" value="CREATE PLAN" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                                         <button type="reset" name="reset" id="reset" value="Reset" class="btn btn-primary btn-flat m-b-30 m-t-30">Reset</button>

                                            </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                  
                </div>
                
               
                <!-- /# row -->

                <!-- End PAge Content -->
    <script>
            function myplandetail(str){
                 
                if(str==""){
                    document.getElementById("plandetls").innerHTML = "";
                    return;
                }else{
                    if (window.XMLHttpRequest) {
                 // code for IE7+, Firefox, Chrome, Opera, Safari
                     xmlhttp = new XMLHttpRequest();
                     }
                    xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                     document.getElementById("plandetls").innerHTML=this.responseText;
                
                        }
                    };
                    
                     xmlhttp.open("GET","plandetail.php?q="+str,true);
                     xmlhttp.send();    
                }
                
            }
        </script>

<?php include('../constant/layout/footer.php');?>

 