<?php
session_start();
include 'style.php';
include 'db_freelance.php';
date_default_timezone_set('Asia/Kolkata');
if(isset($_SESSION["Uid"]))
{
    if(isset($_REQUEST["see_more_transaction_notification"])){
        $qry_update_transaction_notification = "UPDATE money_transaction SET notification=0 WHERE mid_pjid = '".$_REQUEST["mid_pjid"]."'";
        mysqli_query($con,$qry_update_transaction_notification);
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Transactions | Freelance.com</title>
    <script src="https://kit.fontawesome.com/467d4a99f6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <?php include 'dashboard_header.php'; ?>

    <div class="container-fluid mt-3">
      <div class="row">
        <div class="col d-none d-md-block"></div>
        <div class="col pt-2 pb-2 text-center text-light" style="background-color:#0c99dc; border-radius:8px;" ><h1 class='ps-3'>Transaction &nbsp;&nbsp;History</h1></div>
        <div class="col d-none d-md-block"></div>
      </div>
    </div>

    <?php
        $qry_transaction_detail = "SELECT * FROM money_transaction WHERE mid_freelancer_id = '".$_SESSION["Uid"]."' OR mid_uid = '".$_SESSION["Uid"]."' ORDER BY mid DESC";
        $result_transaction_detail = mysqli_query($con,$qry_transaction_detail);
    ?>

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col d-none d-md-block"></div>
            <div class="col">
                <?php
                    while($row_transaction_detail = mysqli_fetch_array($result_transaction_detail)){
                        if($row_transaction_detail["mid_freelancer_id"] == $_SESSION["Uid"]){
                            $qry_get_employer_details = "SELECT * FROM user_profile_details WHERE uid_upid='".$row_transaction_detail["mid_uid"]."'";
                            $result_get_employer_details = mysqli_query($con,$qry_get_employer_details);
                            $row_get_employer_details = mysqli_fetch_array($result_get_employer_details);

                            $qry_payment_project_title = "SELECT title FROM postjob_details WHERE pjid = '".$row_transaction_detail["mid_pjid"]."'";
                            $result_payment_project_title = mysqli_query($con,$qry_payment_project_title);
                            $row_payment_project_title = mysqli_fetch_array($result_payment_project_title);

                            echo "
                                <div class='row shadow rounded-pill ps-3 mt-4'>
                                    <div class='col-2 p-3'>
                                        <img src='freelance_uploads/".$row_get_employer_details["user_profile_photo"]."' class='img-fluid' style='height:50px;width:50px; border-radius:50%'>
                                    </div>
                                    <div class='col pt-3'>
                                        <span class='fw-bold'><span class='text-success'>From:</span> ".$row_get_employer_details["user_first_name"]." ".$row_get_employer_details["user_last_name"]."</span><br>
                                        <span class='text-secondary'>".$row_payment_project_title["title"]."</span>
                
                                    </div>
                                    <div class='col pt-4 fw-bold text-end fs-5 pe-5'>
                                        <span class='text-success'>+ $ ".$row_transaction_detail["net_amount"]."</span>
                                    </div>
                                </div>
                            ";
                        }
                        else if($row_transaction_detail["mid_uid"] == $_SESSION["Uid"]){
                            $qry_get_freelancer_details = "SELECT * FROM user_profile_details WHERE uid_upid='".$row_transaction_detail["mid_freelancer_id"]."'";
                            $result_get_freelancer_details = mysqli_query($con,$qry_get_freelancer_details);
                            $row_get_freelancer_details = mysqli_fetch_array($result_get_freelancer_details);

                            $qry_payment_project_title = "SELECT title FROM postjob_details WHERE pjid = '".$row_transaction_detail["mid_pjid"]."'";
                            $result_payment_project_title = mysqli_query($con,$qry_payment_project_title);
                            $row_payment_project_title = mysqli_fetch_array($result_payment_project_title);

                            echo "
                                <div class='row shadow rounded-pill ps-3 mt-4'>
                                    <div class='col-2 p-3'>
                                        <img src='freelance_uploads/".$row_get_freelancer_details["user_profile_photo"]."' class='img-fluid' style='height:50px;width:50px; border-radius:50%'>
                                    </div>
                                    <div class='col pt-3'>
                                        <span class='fw-bold'><span class='text-danger'>To:</span> ".$row_get_freelancer_details["user_first_name"]." ".$row_get_freelancer_details["user_last_name"]."</span><br>
                                        <span class='text-secondary'>".$row_payment_project_title["title"]."</span>
                
                                    </div>
                                    <div class='col pt-4 fw-bold text-end fs-5 pe-5'>
                                        <span class='text-danger'>- $ ".$row_transaction_detail["owner_amount"]."</span>
                                    </div>
                                </div>
                            ";
                        }
                    }
                ?>
                
            </div>
            <div class="col d-none d-md-block"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <?php
    include 'footer.php';
    }
    else{
        header("Location:login.php");
    }
    ?>
</body>
</html>


