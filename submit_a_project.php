<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
include 'db_freelance.php';
$date=date('Y-m-d');
if($_SESSION["Uid"]){
     
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apply For Job | Freelance.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/467d4a99f6.js" crossorigin="anonymous"></script>
    <style>
        a{
          text-decoration:none;
        }
        .zoom {
        transition: transform 0.2s; 
        margin: 0 auto;
        }
        .zoom:hover {
            transform: scale(1.12);
        }
        
      </style>
  </head>
  <body>
     
     <!--Logo section starts -->
     <?php
     include 'dashboard_header.php';
     ?>
     <!--Logo section ends-->

<?php
     include 'db_freelance.php';
     $qry_jobs="SELECT * FROM postjob_details WHERE pjid='".$_REQUEST["pjid"]."'";
     $result_jobs=mysqli_query($con,$qry_jobs);
     $row_jobs=mysqli_fetch_array($result_jobs);
     ?>


<div class="container-fluid" style="background-color: #007fed;">
      <div class="row pt-3 pb-3">
        <div class="col-1 d-none d-md-block"></div>
        <div class="col text-light"><h3><?php
          echo $row_jobs["title"];
        ?>
        </h3>
     </div>
        <div class="col-1 d-none d-md-block"></div>
      </div>
    </div>

    <div class="container-fluid mt-4">
      <div class="row">
           <div class="col-1 d-none d-md-block"></div>
           <div class="col-md shadow-lg bg-white">
                <div class="row pb-2 pt-3 ps-2" style="border-bottom:1px solid #dcdcdc">
                     <div class="col-sm"><h4 class='fw-bold'>Project Details</h4></div>
                     <div class="col-2"></div>
                     <div class="col-3 d-none d-md-block"></div>
                     <div class="col-sm"><span class="fw-bold">$<?php  echo $row_jobs["min_amount"];  ?>-$<?php  echo $row_jobs["max_amount"];  ?> USD </span><br></div>
                </div>
                <div class="row pt-4 ps-2">
                     <div class="col">
                     <p class="lh-sm"><?php echo $row_jobs["summary"]; ?></p>
                     </div>
                </div>
                <div class="row ps-2 pt-3">
                     <div class="col lh-1">
                          <p class='fw-bold'>Skills Required</p>
                          <p class="">
                              
                          <?php 

                              $skills=$row_jobs["p_skills"];
                              $token=strtok($skills,",");
                              // $b=array_unique($a);
                              $i=0;
                              while($token!==false){
                                   echo "<i class='fa-solid fa-circle' style='font-size:5px;vertical-align:middle;'></i>&nbsp;".$token."&nbsp &nbsp ";
                                   $token = strtok(",");
                                   
                              }
                  
                  ?>
                          </p>
                          <?php
                          if($row_jobs["p_file"] != null){
                            echo "
                            <a href='freelance_uploads/".$row_jobs["p_file"]."' class='btn btn-primary mb-2'><i class='fa-solid fa-download'></i> &nbsp;Download project details</a>";
                          }
                          $qry_upload_job="SELECT status FROM apply_for_job WHERE afjid_uid='".$_SESSION["Uid"]."' AND status=1 AND afjid_pjid='".$_REQUEST["pjid"]."'";
                          $result_upload_job=mysqli_query($con,$qry_upload_job);
                          $row_upload_job = mysqli_num_rows($result_upload_job) ;
                          if($row_upload_job){
                              echo"
                              <form action='applied_projects.php' method='post'  enctype='multipart/form-data' name='upload_project_form'>
                                   
                                   <div class='input-group mb-3'>
                                        <input type='text' value='".$_REQUEST["pjid"]."' class='d-none' name='submit_project_pjid'>
                                        <input type='file' name='upload_completed_job' id='upload_completed_job' class='btn border-secondary border mb-2 input-group-text' accept='.zip'>
                                        <label for='upload_completed_job_submit' class='btn btn-primary mb-2 input-group-text'><i class='fa-solid fa-cloud-arrow-up'></i> &nbsp;Upload complete project</label>
                                        <input type='submit' value='upload' id='upload_completed_job_submit' name='upload_completed_job_submit' class='d-none'>
                                   </div>
                              </form>
                              ";
                          }
                          ?>

                     </div>
                </div>
           </div>
           <div class="col-md-2 shadow-lg pt-3 ms-5 ps-3">
            <h4>About the client</h4>
            <hr>
            <?php
               $qry_user="SELECT * FROM user_profile_details WHERE uid_upid='".$row_jobs["pjid_uid"]."'";
               $result_user=mysqli_query($con,$qry_user);
               $row_user=mysqli_fetch_array($result_user);
               
               $qry_user_timestamp="SELECT join_date FROM signup_details WHERE uid='".$row_jobs["pjid_uid"]."'";
               $result_user_timestamp=mysqli_query($con,$qry_user_timestamp);
               $row_user_timestamp=mysqli_fetch_array($result_user_timestamp);
            ?>
            <p><i class="fa-solid fa-location-dot"></i> &nbsp;&nbsp;<?php echo $row_user["user_city"] ?></p>
            <p><i class="fa-solid fa-earth-americas"></i> &nbsp;&nbsp;<?php echo $row_user["user_country"] ?></p>
            <p><i class="fa-solid fa-user"></i> &nbsp;&nbsp;Rating</p>
            <p><i class="fa-solid fa-clock"></i> &nbsp;&nbsp;Member Since, <?php echo $row_user_timestamp["join_date"] ?> </p>
        </div>
        <div class="col-1 d-none d-md-block"></div>
      </div>
    </div>
     <?php include 'footer.php'; 
}
else{
     header("Location:login.php");
}
     
     ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>