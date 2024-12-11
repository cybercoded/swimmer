<?php include('../constant/layout/head.php');?>
<?php include('../constant/layout/header.php');?>
<?php include('../constant/layout/sidebar.php');?>   
<!-- Page wrapper  -->
<div class="page-wrapper">
<!-- Bread crumb -->
<div class="row page-titles">
   <div class="col-md-5 align-self-center">
      <h3 class="text-primary">Dashboard</h3>
   </div>
   <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
         <li class="breadcrumb-item active">Dashboard</li>
      </ol>
   </div>
</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container-fluid">
<!-- Start Page Content -->
<div class="row dashboard">
   <div class="col-md-4">
      <div class="row">
<div class="col-md-6">
   <div class="card bg-white p-10">
      <div class=" widget-ten">
         <div class="media-left meida media-middle">
            <span class="bg-primary"><i class="ti-money f-s-50"></i></span>
         </div>
         <div class="media-body pt-4">
            <?php
               date_default_timezone_set("Asia/Calcutta"); 
               $date  = date('Y-m');
               $query = "select * from enrolls_to WHERE  paid_date LIKE '$date%'";
               
               //echo $query;
               $result  = mysqli_query($con, $query);
               $revenue = 0;
               if (mysqli_affected_rows($con) != 0) {
                   while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                       $query1="select * from plan where pid='".$row['pid']."'";
                       $result1=mysqli_query($con,$query1);
                       if($result1){
                           $value=mysqli_fetch_row($result1);
                       $revenue = $value[4] + $revenue;
                       }
                   }
               }
               
               ?>
            <h2 class=""><?php echo "Rs.".$revenue; ?></h2>
            <a href="revenue_month.php">
               <p class="">Current Income</p>
            </a>
         </div>
      </div>
   </div>
</div>
<div class="col-md-6">
   <div class="card p-10">
      <div class="widget-ten">
         <div class="media-left meida media-middle">
            <span class="bg-danger"><i class="ti-id-badge f-s-50"></i></span>
         </div>
         <div class="media-body pt-4">
            <h2 class=""><?php
               $query = "select COUNT(*) from users";
               
               $result = mysqli_query($con, $query);
               $i      = 1;
               if (mysqli_affected_rows($con) != 0) {
                   while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                       echo $row['COUNT(*)'];
                   }
               }
               $i = 1;
               ?></h2>
            <a href="table_view.php">
               <p class="">Total Members</p>
            </a>
         </div>
      </div>
   </div>
</div>
<div class="col-md-6">
   <div class="card p-10">
      <div class="widget-ten">
         <div class="media-left meida media-middle">
            <span class="bg-warning"><i class="ti-crown f-s-50"></i></span>
         </div>
         <div class="media-body pt-4">
            <h2 class=""><?php
               date_default_timezone_set("Asia/Calcutta"); 
               $date  = date('Y-m');
               $query = "select COUNT(*) from users WHERE joining_date LIKE '$date%'";
               
               //echo $query;
               $result = mysqli_query($con, $query);
               $i      = 1;
               if (mysqli_affected_rows($con) != 0) {
                   while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                       echo $row['COUNT(*)'];
                   }
               }
               $i = 1;
               ?></h2>
            <a href="over_members_month.php">
               <p class="">Joined This Month</p>
            </a>
         </div>
      </div>
   </div>
</div>
<div class="col-md-6">
   <div class="card p-10">
      <div class="widget-ten">
         <div class="media-left meida media-middle">
            <span class="bg-info"><i class="ti-notepad f-s-50"></i></span>
         </div>
         <div class="media-body pt-4">
            <h2 class=""><?php
               $query = "select COUNT(*) from plan where active='yes'";
               
               //echo $query;
               $result  = mysqli_query($con, $query);
               $i = 1;
               if (mysqli_affected_rows($con) != 0) {
                   while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                       echo $row['COUNT(*)'];
                   }
               }
               $i = 1;
               ?></h2>
            <a href="view_plan.php">
               <p class="text-dark"> Plan Available</p>
            </a>
         </div>
      </div>
   </div>
</div>
</div>
</div>
<div class="col-md-8">
   <div class="card">
      <div class="card-body">
         <div id="barchart_material" style="width: 100%; height: 380px"></div>
      </div>
   </div>
</div>
<div class="col-md-12">
   <div class="card">
      <div class="card-body">
         <div class="table-responsive m-t-40">
            <table id="myTable" class="table">
               <thead>
                  <tr>
                     <th>Sl.No</th>
                     <th>Membership Expiry</th>
                     <th>Member ID</th>
                     <th>Name</th>
                     <th>Contact</th>
                     <th>E-Mail</th>
                     <th>Gender</th>
                     <th>Joining Date</th>
                     
                  </tr>
               </thead>
               <tbody>
                  <?php
                     $query  = "select * from users ORDER BY joining_date";
                          //echo $query;
                          $result = mysqli_query($con, $query);
                          $sno    = 1;
                     
                          if (mysqli_affected_rows($con) != 0) {
                              while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                  $uid   = $row['userid'];
                                  $query1  = "select * from enrolls_to WHERE uid='$uid' AND renewal='yes'";
                                  $result1 = mysqli_query($con, $query1);
                                  if (mysqli_affected_rows($con) == 1) {
                                      while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
                            ?>  
                  <tr>
                     <td><?php echo $sno ?></td>
                     <td><?php echo $row1['expire']; ?></td>
                     <td><?php echo $row['userid']; ?></td>
                     <td><?php echo $row['username']; ?></td>
                     <td><?php echo $row['mobile']; ?></td>
                     <td><?php echo $row['email'];?> </td>
                     <td><?php echo $row['gender'];?> </td>
                     <td><?php echo $row['joining_date']; ?> </td>
                   
                  </tr>
                  <?php 
                     $sno++; 
                     $msgid = 0;
                      }
                             }
                         }
                     }
                     ?>  
               </tbody>
            </table>
         </div>
      </div>
      <!-- End PAge Content -->
   </div>
</div>
</div></div></div>
<!-- End Container fluid  -->
<?php include('../constant/layout/footer.php');?>