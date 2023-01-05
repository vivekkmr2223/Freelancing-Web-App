<?php

session_start();
if(isset($_SESSION["Uid"])){
include 'db_freelance.php';


if(isset($_REQUEST["accept"])){
    $qry_update_status_accept= "UPDATE personal_hiring set ph_status=1,ph_notification_employer=1 where phid='".$_REQUEST["phid"]."'";
    $result_update_status_accept = mysqli_query($con,$qry_update_status_accept);
}
else if(isset($_REQUEST["reject"])){
    $qry_update_status_accept= "UPDATE personal_hiring set ph_status=2,ph_notification_employer=1 where phid='".$_REQUEST["phid"]."'";
    $result_update_status_accept = mysqli_query($con,$qry_update_status_accept);
}



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/467d4a99f6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Approve a Project | Freelance.com</title>
</head>
<body>
    <?php include 'dashboard_header.php';?>

    <div class="container-fluid" style="background-color: #007fed;">
      <div class="row ">
        <div class="col-1 d-none d-md-block"></div>
        <div class="col pt-3 pb-3 text-light" ><h1 class='ps-3'>Approve Project</h1></div>
        <div class="col-1 d-none d-md-block"></div>
      </div>
    </div>

    <?php
        if(isset($_REQUEST["upload_completed_job_submit"])){
            $postfile=$_FILES['upload_completed_job']['name'];
            $sourcefile=$_FILES['upload_completed_job']['tmp_name'];
            $rand=rand('1111111','9999999');
            $file=$rand.'_'.$postfile;
            $targetfile="freelance_uploads/".$file;
            if(move_uploaded_file($sourcefile,$targetfile)){
                 $qry_upload_complete_project = "UPDATE personal_hiring set upload_completed_job='$file' where phid='".$_REQUEST["phid"]."'";
                 mysqli_query($con,$qry_upload_complete_project);
                 echo "
                 <div class='container-fluid mb-3'>
                 <div class='row'>
                     <div class='col shadow-lg pt-3 pb-5 mt-4'>
                         <div class='row '>
                         <div class='col-2'></div>
                             <div class='col-1 pt-4'><img src='videos/congratulations-unscreen.gif' alt='' class='img-fluid'></div>
                             <div class='col pt-5'><h2 class='d-inline'>You have successfully submitted a project. Congratulation!!!</h2></div>
                         </div>
                     </div>
                 </div>
             </div>
                 ";
            }
        }
    ?>
    <div class="comtainer-fluid">
        <div class="row">
            <div class="col-2 d-none d-md-block"></div>
            
            <div class="col shadow bg-white pt-3 pb-3">
                <?php
                    $qry_approval_project = "SELECT * from personal_hiring where phid_freelancer_id = '".$_SESSION["Uid"]."'";
                    $result_approval_project = mysqli_query($con,$qry_approval_project);
                    
                    while($row_approval_project =mysqli_fetch_array($result_approval_project)){
                            echo "
                            
                                <div class='row mt-3 position-relative'>
                                    <div class='col'>
                                         <p class='fs-4 fw-bold'  style='color: #007fed;'>".$row_approval_project["ph_title"]."</p>
                                         <p class='fw-bold' style='font-size:15px;'>Budget &nbsp;&nbsp;$".$row_approval_project["ph_amount"]." USD</p>
                                         <p style='font-size:15px;'>".$row_approval_project["ph_description"]."</p>";

                                         if($row_approval_project["ph_status"]==0){
                                                echo "
                                                <div class='row'>
                                                    <div class='col-8'></div>
                                                    <div class='col-4'>
                                                        <form action='approve_a_project.php' method='post'>
                                                        <input type='submit' name='accept' class='me-3 btn btn-success fw-bold' value='Accept'>
                                                        <input type='submit' name='reject' class='btn btn-danger fw-bold' value='Reject'>
                                                        <input type='text' name='phid' class='d-none' value='".$row_approval_project["phid"]."'>
                                                        </form>
                                                    </div>
                                                </div>
                                                ";
                                         }
                                         else if($row_approval_project["ph_status"]==1){
                                            if($row_approval_project["upload_completed_job"]!=null){
                                                echo"
                                                <span class='position-absolute top-0 start-100 p-2 translate-middle badge' style='background-color:#00b7eb; font-size : 18px;'>
                                                    Job completed
                                                </span>
                                                ";
                                            }
                                            else{
                                                echo"
                                                <span class='position-absolute top-0 start-100 p-2 translate-middle badge' style=' background-color:#03c04a; font-size : 18px;'>
                                                Accepted
                                                </span>
                                                ";
                                            }
                                            echo "
                                                
                                                <div class='row'>
                                                    <div class='col-8'>
                                                    <form action='approve_a_project.php' method='post' enctype='multipart/form-data'>
                                                    <input type='file' name='upload_completed_job' id='upload_completed_job' class='btn border-secondary border mb-2 input-group-text' accept='.zip'>
                                                    <label for='upload_completed_job_submit' class='btn btn-primary mb-2 input-group-text'><i class='fa-solid fa-cloud-arrow-up'></i> &nbsp;Upload complete project</label>
                                                    <input type='submit' value='upload' id='upload_completed_job_submit' name='upload_completed_job_submit' class='d-none'>
                                                    <input type='text' name='phid' class='d-none' value='".$row_approval_project["phid"]."'>
                                                    </form>
                                                    </div>
                                                </div>
                                                ";
                                         }
                                         else if($row_approval_project["ph_status"]==2){
                                            echo "
                                            <span class='position-absolute top-0 start-100 p-2 translate-middle badge' style='background-color:#FF5733; font-size : 18px;'>
                                                Rejected
                                            </span>";
                                         }
                                echo"
                                    </div>
                                </div>
                            ";
                    }
                ?>
            </div>
            <div class="col-2 d-none d-md-block"></div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

<?php
}
else{
    header("Location:login.php");
}