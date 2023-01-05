<?php
session_start();
include 'style.php';
include 'db_freelance.php';
if(isset($_SESSION["Uid"])){


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Other Proposals | Freelance.com</title>
    <script src="https://kit.fontawesome.com/467d4a99f6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body  style="background-color : #f7f7f7;">
    <?php
        include 'dashboard_header.php';
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-1 d-none d-md-block"></div>
            <div class="col shadow-lg pt-3  pb-5 mt-4">
                <div class="row">
                    <div class="col-1 pt-4"><img src="videos/congratulations-unscreen.gif" alt="" class='img-fluid text-center'></div>
                    <div class="col pt-5"><h2 class="d-inline">You have successfully made a bid for this project. Congratulation!!!</h2></div>
                </div>
            </div>
            <div class="col-1 d-none d-md-block"></div>
        </div>
    </div>
    <div class="container-fluid mt-4" >
      <div class="row">
        <div class="col-1 d-none d-md-block"></div>
        <div class="col text-light pt-3 pb-3" style="background-color: #007fed;"><h1>Other Proposals On This Project</h1></div>
        <div class="col-1 d-none d-md-block"></div>
      </div>
      <div class="row">
        <div class="col-1 d-none d-md-block"></div>
        <div class="col pt-3">
            
        <?php
            $qry_collect_uid="SELECT * FROM apply_for_job WHERE afjid_pjid='".$_REQUEST["pjid"]."' ORDER by afjid DESC";
            $result_collect_uid=mysqli_query($con,$qry_collect_uid);

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
                            <p class='fs-4 fw-bold'  style='color: #007fed;'>".$row_profile_details["user_first_name"]." ".$row_profile_details["user_last_name"]." @".$row_username["username"]."</p>
                            
                            <p style=' font-weight:600;'>".$row_profile_details["user_professional_headline"]."</p>
                            <p style=' text-align:justify;' class='lh-sm'>".$row_collect_uid["proposal_summary"]."</p>
                            <p ><span style='font-weight:700;'>Bid Amount:&nbsp;&nbsp;</span>$".$row_collect_uid["bid_amount"]."</p>
                        </div>
                    </div>
               
                ";
            }
        ?>

        </div>
        <div class="col-1 d-none d-md-block"></div>
        </div>
      </div>
    </div>
    
    <?php
    include "footer.php";
    }
    else{
      header("Location:login.php");
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>