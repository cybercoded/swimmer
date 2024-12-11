
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
                    <h3 class="text-primary">Practice Routine Management</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Add Practice Routine</li>
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
                            <div class="card-title">
                               
                            </div>
                            <div class="card-body">
                                <div class="input-states">
                                    <form class="row" method="POST"  name="userform" enctype="multipart/form-data" action="saveroutine.php" id="form1" name="form1">
                                    <div class="form-group col-md-6">
                                                <label class="control-label">ROUTINE NAME</label>
                                                 <input name="rname" required class="form-control">
                                        </div>

                                        <div class="form-group col-md-6">
                                                <label class="control-label">DAY 1</label>
                                                  <textarea name="day1" id="textarea" class="form-control" ></textarea>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                                <label class="control-label">DAY 2</label>
                                               <textarea name="day2" id="textarea" class="form-control" ></textarea>
                                        </div>

                                       <div class="form-group col-md-6">
                                                <label class="control-label">DAY 3</label>
                                                <textarea name="day3" id="textarea" class="form-control" ></textarea>
                                        </div>

                                      <div class="form-group col-md-6">
                                                <label class="control-label">DAY 4</label>
                                                <textarea name="day4" id="textarea" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">DAY 5</label>
                                                <textarea name="day5" id="textarea" class="form-control" ></textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label class="control-label">DAY 6</label>
                                                    <textarea name="day6" id="textarea" class="form-control"></textarea>
                                        </div>

                                         <div class="col-md-12">
                                        <button type="submit" name="submit" id="submit" value="Add Routine" class="btn btn-primary btn-flat m-b-30 m-t-30">Add Routine</button>
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
   

<?php include('../constant/layout/footer.php');?>

 