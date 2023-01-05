<?php
  include 'style.php';
    include 'db_freelance.php';
    $uid=$_SESSION["Uid"];
    $qry_signup="SELECT * FROM signup_details WHERE uid=$uid";
    $result4=mysqli_query($con,$qry_signup);
    $record_profile_signup=mysqli_fetch_array($result4);
  
    $qry_profile="SELECT * FROM user_profile_details WHERE uid_upid=$uid";
    $result3=mysqli_query($con,$qry_profile);
    $record_profile=mysqli_fetch_array($result3);
  ?>
  
  <!--Logo section starts -->
  <div class="container-fluid d-none d-md-block pt-3" style="background-color: #ffffff;">
        <div class="row">
            <div class="col-1 d-none d-md-block"></div>
          <div class="col mt-1 zoom"> <a href="index.php"><img src="images/logo-removebg-preview.png" alt="" class="logo" style="height: 40px; width: 150px;"></a> </div>
          <div class="col d-none d-md-block mt-3 zoom"><a href="browsejobs.php" class="text-dark td-none"><i class="fa-regular fa-compass fs-5 pe-2 ps-3"></i><span >Browse Jobs</span></a></div>
          <div class="col-2 d-none d-md-block mt-3 zoom"><a href="hire_freelancer.php" class="text-dark td-none"><i class="fa-solid fa-briefcase fs-5 pe-2"></i><span >Hire Freelancers</span></a></div>
          <div class="col mt-3">
            <span class='zoom d-inline-block position-relative' data-bs-toggle="modal" data-bs-target="#exampleModal" style='width:25px'>
              <i class="fa-regular fa-bell fs-4 me-4 select"></i>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                <?php
                  $qry_notification_pjid="SELECT * from postjob_details where pjid_uid='".$_SESSION["Uid"]."'";
                  $result_notification_pjid=mysqli_query($con,$qry_notification_pjid);
                  $bid_notification_total=0;
                  $count_project_response_notification_total = 0;
                  while($row_notification_pjid=mysqli_fetch_array($result_notification_pjid)){
                    $qry_notification_check="SELECT * FROM apply_for_job WHERE afjid_pjid='".$row_notification_pjid["pjid"]."' AND bid_notification_status=0";
                    $result_notification_check=mysqli_query($con,$qry_notification_check);
                    $bid_notification=mysqli_num_rows($result_notification_check);
                    $bid_notification_total = $bid_notification + $bid_notification_total;

                    $qry_count_project_response = "SELECT * FROM upload_completed_job WHERE ucj_pjid='".$row_notification_pjid["pjid"]."' AND job_completed_notification=0";
                    $result_count_project_response = mysqli_query($con,$qry_count_project_response);
                    $count_project_response_notification = mysqli_num_rows($result_count_project_response);
                    $count_project_response_notification_total = $count_project_response_notification + $count_project_response_notification_total;
                  }
                  $qry_hire_notification_count="SELECT * FROM hire_notification WHERE hnid_freelancer_uid='".$_SESSION["Uid"]."' AND hiring_notification=1";
                  $result_hire_notification_count=mysqli_query($con,$qry_hire_notification_count);
                  $hire_notification_count=mysqli_num_rows($result_hire_notification_count);

                  $qry_payment_notification = "SELECT * FROM money_transaction WHERE mid_freelancer_id='".$_SESSION["Uid"]."' AND notification=1";
                  $result_payment_notification = mysqli_query($con,$qry_payment_notification);
                  $payment_notification_count = mysqli_num_rows($result_payment_notification);

                  
                  echo $bid_notification_total + $hire_notification_count + $count_project_response_notification_total + $payment_notification_count;
                ?>
              </span>
            
            </span>
            
            <span class=' ms-5 zoom d-inline-block'>
              <a href="#" class="text-dark td-none">
                <i class="fa-regular fa-message fs-4"></i>
              </a>
            </span>
          </div>
          <div class="col  mt-2 zoom"><a href="post-a-project.php" class="btn btn-danger" style="border-radius: 0px;">Post a Project</a></div>
          <div class="col-3 mt-1">
          <img src='freelance_uploads/<?php echo"".$record_profile["user_profile_photo"]."";?>' class='img-fluid' style='height:40px;width:40px;'>
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
                <a class="btn select dropdown-toggle lh-sm" href="dashboard.php" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="text-align:left;"><?php echo"@".$record_profile_signup["username"].""; ?> <br> $ <?php echo number_format((float)$money_earned, 2, '.', '');?> USD</a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="dashboard.php">View Profile</a></li>
                    <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                 </ul>
            </div>
          </div>
        </div>
      </div>
<!--Logo section ends-->


<!-- Modal Starts-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-2 fw-bold " id="exampleModalLabel">Notifications</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <?php
        while($row_hire_notification_count=mysqli_fetch_array($result_hire_notification_count)){
          $qry_hire_notification_projectname = "SELECT title,pjid from postjob_details where pjid='".$row_hire_notification_count["hnid_pjid"]."'";
          $result_hire_notification_projectname= mysqli_query($con,$qry_hire_notification_projectname);
          $row_hire_notification_projectname= mysqli_fetch_array($result_hire_notification_projectname);

          echo"
          <div class='container-fluid'>
          <div class='row'>
            <div class='col-1 pt-2'><i class='fa-solid fa-user-check fs-3 pe-3 text-primary'></i></div>
            <div class='ps-5  col' > 
            <span style='font-weight:500'> You have been hired for ".$row_hire_notification_projectname["title"]." project. </span>
            <form action='applied_projects.php' method='get'>
            <label class='text-primary select' for='see_more_hire_notification'>...See more</label>
            <input type='submit' name='see_more_hire_notification' id='see_more_hire_notification' value='see_more' class='d-none'>
            <input type='text' value='".$_SESSION["Uid"]."' name='hnid_freelancer_uid' class='d-none'>
            <input type='text' value='".$row_hire_notification_projectname["pjid"]."' name='hnid_pjid' class='d-none'>
            </form>
            </div>
            <hr  style='border:none; height: 2px; background-color: #999da0;' class='mt-3'>
          </div>
        </div>
          ";
          
        }

          $qry_notification_pjid="SELECT * from postjob_details where pjid_uid='".$_SESSION["Uid"]."'";
          $result_notification_pjid=mysqli_query($con,$qry_notification_pjid);

        while($row_notification_pjid=mysqli_fetch_array($result_notification_pjid)){
          $qry_notification_check="SELECT * FROM apply_for_job WHERE afjid_pjid='".$row_notification_pjid["pjid"]."' AND bid_notification_status=0";
          $result_notification_check=mysqli_query($con,$qry_notification_check);
          
          
          while($row_notification_check=mysqli_fetch_array($result_notification_check)){
            
            $qry_notification_username = "SELECT user_first_name,user_last_name from user_profile_details where uid_upid = '".$row_notification_check["afjid_uid"]."'";
            $result_notification_username = mysqli_query($con,$qry_notification_username);
            $row_notification_username = mysqli_fetch_array($result_notification_username);

            $qry_notification_projectname = "SELECT title from postjob_details where pjid='".$row_notification_check["afjid_pjid"]."'";
            $result_notification_projectname= mysqli_query($con,$qry_notification_projectname);
            $row_notification_projectname= mysqli_fetch_array($result_notification_projectname);

            echo"
            <div class='container-fluid'>
            <div class='row'>
              <div class='col-1 pt-2'><i class='fa-regular fa-envelope fs-3 pe-3 text-primary'></i></div>
              <div class='ps-5  col' > 
              <span style='font-weight:500'>".$row_notification_username["user_first_name"]." ".$row_notification_username["user_last_name"]." has made a bid on your ".$row_notification_projectname["title"]." project. </span>
              <form action='see_proposals.php' method='get'>
              <label class='text-primary select' for='see_more_bid_notification'>...See more</label>
              <input type='submit' name='see_more_bid_notification' id='see_more_bid_notification' value='see_more' class='d-none'>
              <input type='text' name='pjid' value='".$row_notification_check["afjid_pjid"]."' class='d-none'>
              <input type='text' name='freelancer_uid' value='".$row_notification_check["afjid_uid"]."' class='d-none'>
              </form>
              </div>
              <hr  style='border:none; height: 2px; background-color: #999da0;' class='mt-3'>
            </div>
          </div>
            ";
        }

        $qry_project_submit_uid = "SELECT * FROM upload_completed_job WHERE  ucj_pjid='".$row_notification_pjid["pjid"]."' AND job_completed_notification=0";
        $result_project_submit_uid = mysqli_query($con,$qry_project_submit_uid);
        $row_project_submit_uid = mysqli_fetch_array($result_project_submit_uid);

        if($row_project_submit_uid){

          $qry_project_submit_username = "SELECT user_first_name,user_last_name from user_profile_details where uid_upid = '".$row_project_submit_uid["ucj_freelancer_uid"]."'";
          $result_project_submit_username = mysqli_query($con,$qry_project_submit_username);
          $row_project_submit_username  = mysqli_fetch_array($result_project_submit_username);
  
          $qry_project_submit_projectname = "SELECT title from postjob_details where pjid='".$row_project_submit_uid["ucj_pjid"]."'";
          $result_project_submit_projectname= mysqli_query($con,$qry_project_submit_projectname);
          $row_project_submit_projectname= mysqli_fetch_array($result_project_submit_projectname);
  
          echo"
          <div class='container-fluid'>
          <div class='row'>
            <div class='col-1 pt-2'><i class='fa-solid fa-list-check fs-3 pe-3 text-primary'></i></div>
            <div class='ps-5  col' > 
            <span style='font-weight:500'>".$row_project_submit_username["user_first_name"]." ".$row_project_submit_username["user_last_name"]." has completed your ".$row_project_submit_projectname["title"]." project. </span>
            <form action='posted_projects.php' method='get'>
            <label class='text-primary select' for='see_more_project_submit_notification'>Click to download</label>
            <input type='submit' name='see_more_project_submit_notification' id='see_more_project_submit_notification' value='see_more' class='d-none'>
            <input type='text' name='ucj_pjid' value='".$row_project_submit_uid["ucj_pjid"]."' class='d-none'>
            <input type='text' name='ucj_freelancer_uid' value='".$row_project_submit_uid["ucj_freelancer_uid"]."' class='d-none'>
            </form>
            </div>
            <hr  style='border:none; height: 2px; background-color: #999da0;' class='mt-3'>
          </div>
        </div>
          ";
        }
        }
        ?>
        <?php
          while($row_payment_notification =mysqli_fetch_array($result_payment_notification)){

            $qry_get_projectname_of_payment = "SELECT title FROM postjob_details WHERE pjid = '".$row_payment_notification["mid_pjid"]."'";
            $result_get_projectname_of_payment = mysqli_query($con,$qry_get_projectname_of_payment);
            $row_get_projectname_of_payment = mysqli_fetch_array($result_get_projectname_of_payment);

            echo"
            <div class='container-fluid'>
            <div class='row'>
              <div class='col-1 pt-2'><i class='fa-solid fa-comments-dollar fs-3 pe-3 text-primary'></i></div>
              <div class='ps-5  col' > 
              <span style='font-weight:500'> You have been received $ ".$row_payment_notification["net_amount"]." for completing ".$row_get_projectname_of_payment["title"]." project. </span>
              <form action='mytransactions.php' method = 'post'>  
                <input type='number' value='".$row_payment_notification["mid_pjid"]."' class='d-none' name='mid_pjid'/>
                <label class='text-primary select' for='see_more_transaction_notification'>...See more</label>
                <input type='submit' name='see_more_transaction_notification' id='see_more_transaction_notification' value='see_more' class='d-none'>
              </form>
              </div>
              <hr  style='border:none; height: 2px; background-color: #999da0;' class='mt-3'>
            </div>
          </div>
            ";
          }
        ?>
      </div>
      
    </div>
  </div>
</div>

<!-- Modal Ends-->

<nav class="navbar navbar-expand-lg bg-light d-sm-block d-md-none">
<div class="container-fluid">
        <a href="index.php"><img src="images/logo-removebg-preview.png" alt="" class="logo" style="height: 40px; width: 150px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item mt-3">
              <a class="text-dark nav-link" aria-current="page" href="index.php"><i class="fa-solid fa-house fs-5 pe-2"></i>Home</a>
            </li>
            <li class="nav-item">
              <a class="text-dark nav-link" href="dashboard.php"><i class="fa-solid fa-user fs-5 pe-2"></i>Profile</a>
            </li>
            <li class="nav-item">
            <a href="browsejobs.php" class="text-dark td-none nav-link"><i class="fa-regular fa-compass fs-5 pe-2"></i><span >Browse Jobs</span></a>
            </li>
            <li class="nav-item">
            <a href="hire_freelancer.php" class="text-dark nav-link td-none"><i class="fa-solid fa-briefcase fs-5 pe-2"></i><span >Browse Freelancers</span></a>
            </li>
            <li class="nav-item">
              <a class="text-dark nav-link td-none" href="post-a-project.php"><i class="fa-regular fa-clipboard fs-5 pe-2"></i>Post a project</a>
            </li>
            <li class="nav-item">
              <a class="text-dark nav-link td-none" href="logout.php"><i class="fa-solid fa-power-off fs-5 pe-2"></i>Log Out</a>
            </li>
            
          </ul>
        </div>
  </div>
</nav>

<!--Nav bar starts-->
<div class="nav d-none d-md-block">
    <div class="container-fluid bg-dark">
        <div class="row pt-2 ">
            <div class="col-1 d-none  d-md-block"></div>
            <div class="col pt-1 p-3 selectnav text-center zoom"><a href="posted_projects.php" class="text-light td-none"><span class="">Posted Projects</span></a></div>
            <div class="col pt-1 selectnav text-center zoom"><a href="applied_projects.php" class="text-light"><span class="selectnav">Applied Projects</span></a></div>
            <div class="col pt-1 selectnav text-center zoom"><a href="myhires.php" class="text-light"><span class="selectnav">My Hires</span></a></div>
            <div class="col pt-1 selectnav text-center zoom"><a href="personal_hiring_page.php" class="text-light"><span class="selectnav">Personal Hiring</span></a></div>
            <div class="col pt-1 selectnav text-center zoom"><a href="approve_a_project.php" class="text-light"><span class="selectnav">Approve Project</span></a></div>
            <div class="col pt-1 selectnav text-center zoom"><a href="mytransactions.php" class="text-light"><span class="selectnav">My Transactions</span></a></div>

            <div class="col-3 d-none  d-md-block"></div>
        </div>
    </div>
  </div>

  <div class="nav mb-3 d-sm-block d-md-none">
    <div class="container-fluid bg-dark">
        <div class="row pt-2 ">
            <div class="col-1 d-none d-sm-block d-sm-none d-md-block"></div>
            <div class="col pt-1 p-3 selectnav text-center zoom"><a href="posted_projects.php" class="text-light td-none"><span class="">Posted Projects</span></a></div>
            <div class="col pt-1 selectnav text-center zoom"><a href="applied_projects.php" class="text-light"><span class="selectnav">Applied Projects</span></a></div>
            <div class="col pt-1 selectnav text-center zoom"><a href="myhires.php" class="text-light"><span class="selectnav">My Hires</span></a></div>
            <div class="col pt-1 selectnav text-center zoom"><a href="personal_hiring_page.php" class="text-light"><span class="selectnav">Personal Hiring</span></a></div>
            <div class="col pt-1 selectnav text-center zoom"><a href="approve_a_project.php" class="text-light"><span class="selectnav">Approve Project</span></a></div>
            <div class="col pt-1 selectnav text-center zoom"><a href="mytransactions.php" class="text-light"><span class="selectnav">My Transactions</span></a></div>
            <div class="col-5 d-none d-sm-block d-sm-none d-md-block"></div>
        </div>
    </div>
  </div>
<!--Nav bar ends-->