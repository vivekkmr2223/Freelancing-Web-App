<?php
    include 'db_freelance.php';
    include 'style.php';
  $uid=$_SESSION["Uid"];
  $qry_signup="SELECT * FROM signup_details WHERE uid=$uid";
  $result4=mysqli_query($con,$qry_signup);
  $record2=mysqli_fetch_array($result4);

  $qry_profile="SELECT * FROM user_profile_details WHERE uid_upid=$uid";
  $result3=mysqli_query($con,$qry_profile);
  $record=mysqli_fetch_array($result3);

?>
    <!--Logo section starts -->
    <div class="container-fluid text-center pt-3">
        <div class="row">
          <div class="col-2 mt-1 zoom"> <a href="index.php"><img src="images/logo-removebg-preview.png" alt="" class="logo"></a> </div>
          <div class="col d-none d-md-block mt-3 zoom"><a href="How-it-works.php" class="text-dark"><span class="select" >How it Works</span></a></div>
          <div class="col d-none d-md-block mt-3 zoom"><a href="browsejobs.php" class="text-dark"><span class="select">Browse Jobs</span></a></div>
          <div class="col-2"></div>
          <div class="col-3 mt-1">
          <img src='freelance_uploads/<?php echo"".$record["user_profile_photo"]."";?>' class='img-fluid' style='height:40px;width:40px;'>
            <?php
              $qry_money_earned = "SELECT SUM(net_amount) FROM money_transaction WHERE mid_freelancer_id = '".$uid."'";
              $result_money_earned = mysqli_query($con,$qry_money_earned);
              $row_money_earned = mysqli_fetch_array($result_money_earned);
              $money_earned = 0.00;
              if($row_money_earned["SUM(net_amount)"]!=0){
                $money_earned = $row_money_earned["SUM(net_amount)"];
              }
              
            ?>
            <div class="dropdown d-inline ">
                <a class="btn select dropdown-toggle lh-sm" href="dashboard.php" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="text-align:left;"><?php echo"@".$record2["username"].""; ?> <br> $ <?php echo number_format((float)$money_earned, 2, '.', '');;?> USD</a>
                <ul class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="dashboard.php">View Profile</a></li>
                    <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                 </ul>
            </div>
          </div>
          <div class="col mt-2 zoom"><a href="post-a-project.php" class="btn btn-danger br-0">Post a Project</a></div>
        </div>
      </div>
      
<!--Logo section ends-->

<!--Nav bar starts-->
<div class="nav overflow-auto mt-1 ">
    <div class="container-fluid bg-dark ">
        
        <div class="row pt-2 ">
            <div class="col-1 d-none d-sm-block d-sm-none d-md-block"></div>
            <div class="col pt-1 p-3 selectnav text-center zoom"><a href="browsejobs.php" class="text-light"><span class="">Find Jobs</span></a></div>
            <div class="col pt-1 selectnav text-center zoom"><a href="hire_freelancer.php" class="text-light"><span class="selectnav">Find Freelancers</span></a></div>
            <div class="col pt-1 selectnav text-center zoom"><a href="#" class="text-light"><span class="selectnav">Get ideas</span></a></div>
            <div class="col pt-1 selectnav text-center zoom"><a href="#" class="text-light"><span class="selectnav">About</span></a></div>
            <div class="col-5 d-none d-sm-block d-sm-none d-md-block"></div>
        </div>
    </div>
  </div>
<!--Nav bar ends-->

          