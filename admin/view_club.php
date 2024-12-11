<?php include('../constant/layout/head.php');?>
<?php include('../constant/layout/header.php');?>
<?php include('../constant/layout/sidebar.php');
?>
 

  <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">View Club</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">View Club</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                
                <!-- /# row -->
                 <div class="card">
                            <div class="card-body">
                              
                            <a href="add_club.php"><button class="btn btn-primary">Add Club
                            </button></a> 
                         
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table">
                                        <thead>
        <tr>
          <th>Sr.No</th>
          <th>Name</th>
          <th>Status</th>
          <th>Action</th>

        </tr>
      </thead>    
        <tbody>
          <?php
          $query  = "select * from club";
          //echo $query;
          $result = mysqli_query($con, $query);
          $sno    = 1;

          if (mysqli_affected_rows($con) != 0) 
          {
              while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
            {

                ?>  
                  
                  <tr>
                    <td><?php echo $sno ?></td>
                     <td><?php echo $row['cname']; ?></td>
                     <td><?php echo $row['status']; ?></td>
                  
                  
                  
                 <td>
                  <a href="edit_club.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-success rounded" value="View Routine"><i class="fa fa-pencil"></i></button></a>

                   <a href="../app/crud_deleteclub.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-danger rounded" value="View Routine"><i class="fa fa-trash"></i></button></a></td>
                 
                </tr>
                  
              <?php 
              $sno++; 
               $uid = 0;
                      
                  
              }
          }

          ?>  

        </tbody>
                                      
                                    </table>
                                </div>
                            </div>
                        </div>
               
                <!-- /# row -->

                <!-- End PAge Content -->
           

<?php include('../constant/layout/footer.php');?>

