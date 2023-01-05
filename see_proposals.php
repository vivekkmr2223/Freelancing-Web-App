<?php
session_start();
include 'style.php';
include 'db_freelance.php';
if(isset($_REQUEST["see_more_bid_notification"])){
  $qry_update_bid_notification="UPDATE apply_for_job SET bid_notification_status=1 WHERE afjid_uid='".$_REQUEST["freelancer_uid"]."' AND afjid_pjid='".$_REQUEST["pjid"]."'";
  $result_update_bid_notification=mysqli_query($con,$qry_update_bid_notification);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Proposals | Freelance.com</title>
    
    <script src="https://kit.fontawesome.com/467d4a99f6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body  style="background-color : #f7f7f7;">
    <?php
        include 'dashboard_header.php';
    ?>
    
    <div class="container-fluid "  >
      <div class="row" style="background-color: #007fed;">
        <div class="col-1 d-none d-md-block"></div>
        <?php 
          $qry_job_title="SELECT title from postjob_details where pjid='".$_REQUEST["pjid"]."'";
          $result_job_title=mysqli_query($con,$qry_job_title);
          $row_job_title=mysqli_fetch_array($result_job_title);
        ?>
        <div class="col text-light pt-3 pb-3" ><h1>All Proposals On <?php echo "".$row_job_title["title"].""; ?></h1></div>
        <div class="col-1 d-none d-md-block"></div>
      </div>
      <div class="row">
        <div class="col-2 d-none d-md-block"></div>
        <div class="col pt-3">
            
        <?php
            $qry_collect_uid="SELECT * FROM apply_for_job WHERE afjid_pjid='".$_REQUEST["pjid"]."' ORDER by afjid DESC";
            $result_collect_uid=mysqli_query($con,$qry_collect_uid);
            if(mysqli_num_rows($result_collect_uid)==0){
              echo "
                
              <div class=' bg-white shadow'>
                <div class='row '>
                  <div class='col'></div>
                  <div class='col-4 pb-3'>
                    <img src='videos\worried.gif' class='img-fluid' alt='' >
                  </div>
                  <div class='col'></div>
                </div>
                <div class='row'>
                <div class='col'><h1 class='text-center mt-3'>No Proposals Yet!!!</h1></div>
                </div>
              </div>
              ";
            }
            while($row_collect_uid=mysqli_fetch_array($result_collect_uid)){
                $qry_profile_details="SELECT * FROM user_profile_details WHERE uid_upid='".$row_collect_uid["afjid_uid"]."' ";
                $result_profile_details=mysqli_query($con,$qry_profile_details);
                $row_profile_details=mysqli_fetch_array($result_profile_details);

                $qry_username="SELECT username,uid FROM signup_details WHERE uid='".$row_profile_details["uid_upid"]."'";
                $result_username=mysqli_query($con,$qry_username);
                $row_username=mysqli_fetch_array($result_username);

                echo"
                <div class='row pb-3 pt-3 mb-4 shadow-lg'>
                    <div class='col-3'>
                        <img src='freelance_uploads/".$row_profile_details["user_profile_photo"]."' class='img-fluid' style='border:1px solid #efefef'>
                    </div>
                        <div class='col-9 lh-1'>
                            <p class='fs-4 fw-bold'  style='color: #007fed;'>".$row_profile_details["user_first_name"]." ".$row_profile_details["user_last_name"]." @".$row_username["username"]."<span class='float-end text-dark fs-5 pe-3'><span style='font-weight:600;'>Bid Amount:&nbsp;&nbsp;</span>$".$row_collect_uid["bid_amount"]."</span></p>
                            <p style='font-size:15px;'>Rating | ".$row_profile_details["user_city"].", ".$row_profile_details["user_country"]." <span class='float-end text-dark  pe-3'><span style='font-weight:600;'>Completion Days:&nbsp;&nbsp;</span>".$row_collect_uid["completion_days"]."</span></p>
                            <p style=' font-weight:600;'>".$row_profile_details["user_professional_headline"]."</p>
                            <p style=' text-align:justify;' class='lh-sm'>".$row_collect_uid["proposal_summary"]."</p>";
                            ?>
                              <p>
                                <?php
                                  $qry_skills="SELECT user_skills_name FROM user_skills WHERE user_id='".$row_username["uid"]."'";
                                  $result_skills=mysqli_query($con,$qry_skills);
                                  $t=0;
                                  while($row_skills=mysqli_fetch_array($result_skills)){
                                    echo "<i class='fa-solid fa-circle' style='font-size:5px;vertical-align:middle;'></i>&nbsp;" .$row_skills["user_skills_name"]."&nbsp &nbsp  ";
                                    $t++;
                                    if($t>2){
                                      break;
                                    }
                                  }

                                    echo "
                                      <a href='select_on_proposal.php?uid_select=".$row_username["uid"]."&pjid=".$_REQUEST["pjid"]."' class='float-end text-dark  pe-3 text-white fw-bold btn  pe-4 ps-4' style='background-color: #007fed; border-radius: 0px;'>Select</a>
                                      ";
                                  
                                  ?>
                                
                                
                              </p>
                        </div>
                    </div>
             <?php  
            }
        ?>

        </div>
        <div class="col-2 d-none d-md-block"></div>
        </div>
      </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <?php include 'footer.php'; ?>
  </body>
</html>