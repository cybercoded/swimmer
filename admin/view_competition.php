<?php include('../constant/layout/head.php');?>
<?php include('../constant/layout/header.php');?>
<?php include('../constant/layout/sidebar.php');
?>
 

  <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">View Competition</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">View Competition</li>
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
                              
                            <a href="add_competition.php"><button class="btn btn-primary">Add Competition
                            </button></a> 
                         
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table">
                                        <thead>
        <tr>
          <th>Sr.No</th>
          <th>Name</th>
          <th>Type</th>

          <th>Status</th>
          <th>Action</th>

        </tr>
      </thead>    
        <tbody>
          <?php
          $query  = "select * from competition";
          //echo $query;
          $result = mysqli_query($con, $query);
          //print_r($result);exit;
          $sno    = 1;

          if (mysqli_affected_rows($con) != 0) 
          {
              while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
            {

//echo"select * from competitiontype Where id='".$row['ctype']."'";exit;
  $query1  = "select * from competitiontype Where id='".$row['ctype']."'";
   $result1 = mysqli_query($con, $query1);
   $row1=$result1->fetch_assoc();
          //print_r($row1);exit;

                // $stmt2 = $db->prepare("SELECT * FROM `roomcategory` WHERE id='".$value['roomtype']."' ");
    // $stmt2->execute();
                                                
    // $s2 = $stmt2->fetch(PDO::FETCH_ASSOC); 

                ?>  
                  
                  <tr>
                    <td><?php echo $sno ?></td>
                     <td><?php echo $row['cname']; ?></td>
                     <td><?php echo $row1['pname']; ?></td>

                     <td><?php echo $row['status']; ?></td>
                  
                  
                  
                 <td>
                  <a href="edit_competition.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-success rounded" value="View Routine"><i class="fa fa-pencil"></i></button></a>

                   <a href="../app/crud_delete_comp.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-danger rounded" value="View Routine"><i class="fa fa-trash"></i></button></a></td>
                 
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

