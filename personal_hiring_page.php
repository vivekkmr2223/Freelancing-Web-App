<?php
    session_start();
    include 'db_freelance.php';
    if(isset($_SESSION["Uid"])){
        if(isset($_REQUEST["personal_hiring"])){
            $qry_personal_hiring="INSERT INTO personal_hiring() VALUES(null,'".$_SESSION["Uid"]."','".$_REQUEST["phid_freelancer_id"]."','".$_REQUEST["ph_title"]."','".$_REQUEST["ph_description"]."','".$_REQUEST["ph_amount"]."',0,1,0,null)";
            mysqli_query($con,$qry_personal_hiring);
        }
    
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal Hires</title>
    <script src="https://kit.fontawesome.com/467d4a99f6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    
  <?php include 'dashboard_header.php' ?>
    <div class="container-fluid" style="background-color: #007fed;">
      <div class="row ">
        <div class="col-1 d-none d-md-block"></div>
        <div class="col pt-3 pb-3 text-light" ><h1 class='ps-3'>Personal Hiring</h1></div>
        <div class="col-1 d-none d-md-block"></div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row mt-3">
        <div class="col-2 d-none d-md-block"></div>
        <div class="col">
          <?php
            $qry_personal_hiring="SELECT * FROM personal_hiring WHERE phid_employer_id='".$_SESSION["Uid"]."' ORDER BY phid DESC";
            $result_personal_hiring=mysqli_query($con,$qry_personal_hiring);
            if(mysqli_num_rows($result_personal_hiring)!=0){
            while($row_personal_hiring=mysqli_fetch_array($result_personal_hiring)){

                $qry_profile_details="SELECT * FROM user_profile_details WHERE uid_upid='".$row_personal_hiring["phid_freelancer_id"]."'";
                $result_profile_details=mysqli_query($con,$qry_profile_details);
                $row_profile_details=mysqli_fetch_array($result_profile_details);
  
                $qry_username="SELECT username,uid FROM signup_details WHERE uid='".$row_personal_hiring["phid_freelancer_id"]."'";
                $result_username=mysqli_query($con,$qry_username);
                $row_username=mysqli_fetch_array($result_username);

                
                  echo"
                  <div class='row pb-3 pt-3 mb-4 shadow-lg '>
                  <div class='col'>
                  <div class='row position-relative'>";
                  
                  
                    
                     echo" <div class='col-3'>
                          <img src='freelance_uploads/".$row_profile_details["user_profile_photo"]."' class='img-fluid' style='border:1px solid #efefef'>
                      </div>
                          <div class='col-9 lh-1'>";
                          if($row_personal_hiring["ph_status"]==0){
                            echo "<span class='position-absolute top-0 start-100 p-2 translate-middle badge' style='background-color:#00b7eb; font-size : 18px;'>
                                 Response Awaited
                            </span>";
                       }
                       else if($row_personal_hiring["ph_status"]==1){
                            echo "<span class='position-absolute top-0 start-100 p-2 translate-middle badge' style=' background-color:#03c04a; font-size : 18px;'>
                            Accepted
                        </span>";
                       }
                       else{
                            echo "<span class='position-absolute top-0 start-100 p-2 translate-middle badge' style=' background-color:#FF5733; font-size : 18px;'>
                                 Rejected
                            </span>";
                       }
                       echo"
                              <h2 style='color:#007fed;' class='fw-bold pb-3'>".$row_personal_hiring["ph_title"]." </h2>
                              <p class='fs-4 fw-bold'  >".$row_profile_details["user_first_name"]." ".$row_profile_details["user_last_name"]." @".$row_username["username"]."<span class='float-end text-dark fs-5 pe-3'><span style='font-weight:600;'>Budget:&nbsp;&nbsp;</span>$".$row_personal_hiring["ph_amount"]."</span></p>
                              <p style='font-size:15px;'>".$row_profile_details["user_city"].", ".$row_profile_details["user_country"]."</p>
                              <p style=' font-weight:600;'>".$row_profile_details["user_professional_headline"]."</p>
                              <p style=' text-align:justify;' class='lh-sm'>".$row_personal_hiring["ph_description"]."</p>";
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
                                    if($row_personal_hiring["upload_completed_job"]!=null){
                                      echo"<a href='freelance_uploads/".$row_personal_hiring["upload_completed_job"]."' class='btn btn-primary d-block text-center form-control mt-3'>Download Complete Project</a>";
                                    }
                                    ?> 
                                </p>
                          </div>
                      </div>
                    </div>
                    </div>
              <?php
                
              
            } 
          }
          else{
            echo "<div class=' bg-white shadow-lg'>
            <div class='row '>
              <div class='col d-none d-md-block'></div>
              <div class='col pb-3 text-center'>
                <img src='videos\worried.gif' class='img-fluid' alt='' >
              </div>
              <div class='col d-none d-md-block'></div>
            </div>
            <div class='row'>
            <div class='col text-center'>
              <h1 class='text-center '>You have not hired anyone....</h1>
            </div>
          </div>
          </div>";
          }
          ?>
          
        </div>
        <div class="col-2 d-none d-md-block"></div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <?php include 'footer.php'?>
  </body>
</html>
    
<?php
    }
else{
    header("Location:login.php");
}
?>