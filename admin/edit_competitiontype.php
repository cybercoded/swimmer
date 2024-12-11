
<?php include('../constant/layout/head.php');?>
<?php include('../constant/layout/header.php');?>

<?php include('../constant/layout/sidebar.php');?> 
<link rel="stylesheet" href="popup_style.css">
 <?php
//session_start();
//error_reporting(0);
include('../constant/connect.php');
  $id=$_GET['id'];
        $sql="Select * from competitiontype  Where id=$id";
        $res=mysqli_query($con, $sql);
                     if($res){
                                $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
                
                              }
                        
   


?>
  <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">EDIT Competition Type</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">EDIT Competition Type</li>
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
                                    <form class="row" method="POST"  name="userform" enctype="multipart/form-data" action="../app/crud_editcomptype.php?id=<?php echo $_GET['id'];?>" id="form1" name="form1">
                                    

                                  <div class="form-group col-md-6">
                                             <label class="control-label">Name</label>
                                                 <input name="pname"  class="form-control" value="<?php echo $row['pname'] ?>" required>
                                       </div>

                                        <div class="form-group col-md-6">
                                            <label class="control-label">Status</label>

                                            <select class="form-control" name="status">
                                              <option value="">--Select--</option>

                                              <option <?php if($row['status']=="active")
      {echo "selected";}?> value="active">Active</option>
                                              <option <?php if($row['status']=="inactive")
      {echo "selected";}?>  value="inactive">Inactive</option>
                                            </select><br>
                                       </div>
                                    <div class="col-md-12">
          <button type="submit" name="submit" id="submit" value="Update" class="btn btn-primary btn-flat m-b-30 m-t-30">Update</button>
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

 