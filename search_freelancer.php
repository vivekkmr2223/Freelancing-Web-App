<?php
session_start();
include 'db_freelance.php';
date_default_timezone_set('Asia/Kolkata');
if(isset($_SESSION["Uid"]))
{
  $uid=$_SESSION["Uid"];


  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Freelancers</title>
    <link rel="stylesheet" href="style.css">
    <style>
      .zoom {
        transition: transform 0.2s; 
        margin: 0 auto;
        }
        .zoom:hover {
            transform: scale(1.12);
        }
    </style>
    <script src="https://kit.fontawesome.com/467d4a99f6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body style="background-color:#f2f2f2;">

  
<!--Logo section starts -->
<?php
  include 'dashboard_header.php';
?>
<!--Logo section ends-->


  <div class="container-fluid" style="background-color: #007fed;">
      <div class="row pt-3 pb-3">
        <div class="col-1 d-none d-md-block"></div>
        <div class="col-3 text-light"><h1>Search Freelancer</h1></div>
        <div class="col-4 d-none d-md-block"></div>
        <div class="col-1 d-none d-md-block"></div>
      </div>
    </div>
    <form action="search_freelancer.php" method="POST" name="search_jobs_form">
    <div class="container-fluid mt-3">
      <div class="row">
        <div class="col-1 d-none d-md-block"></div>
        <div class="col-1 d-none d-md-block"></div>
        <div class="col">
        <div class="input-group mb-3">
          <span class="input-group-text bg-white" style="border-radius: 0px; border-right: 0px;"><i class="fa-solid fa-magnifying-glass"></i></span>
          <input type="text" class="form-control" placeholder="Search for Freelancer" name="browse_freelancer_search_keyword" id="" value="" style="border-left: 0px;">
          <input type="submit" class="btn fw-bold text-light pe-4 ps-4" name="browse_freelancer_search_keyword_submit" id="search_btn" style="background-color: #007fed; border-radius: 0px;" value="Search">
        </div>
      </div>
        <div class="col-1 d-none d-md-block"></div>
        <div class="col-1 d-none d-md-block"></div>
      </div>
    </div>
  </form>

  <form action="search_freelancer.php" id="" method="post">
  <div class="container-fluid mt-3">
    <div class="row mb-4">
      <div class="col-1 d-none d-md-block"></div>
      <div class="col-3 d-none d-md-block">
        <div class="bg-white p-4 shadow">
        <p class="fw-bold fs-2 ">Filters</p>
        <hr>
        <p class="fw-bold fs-4">Hourly Rates</p>
        <label for="">min</label>
        <div class="input-group">
          <span class="input-group-text bg-white" style="border-radius: 0px; border-right: 0px;">$</span>
        <input type="number" class="form-control" placeholder="0" name="" id="" value="" style="border-left: 0px; border-right: 0px;">
        <span class="input-group-text bg-white" style="border-radius: 0px; border-left: 0px;">USD</span>
        </div>
        <label for="" class="mt-3">max</label>
        <div class="input-group">
        <span class="input-group-text bg-white" style="border-radius: 0px; border-right: 0px;">$</span>
        <input type="number" class="form-control" placeholder="1500+" name="" id="" value="" style="border-left: 0px; border-right: 0px;">
        <span class="input-group-text bg-white" style="border-radius: 0px; border-left: 0px;">USD</span>
        </div>
        <label for="" class="mt-4 fw-bold fs-5">Skills</label>
        <div class="input-group mb-2">
          <span class="input-group-text bg-white" style="border-radius: 0px; border-right: 0px;"><i class="fa-solid fa-magnifying-glass"></i></span>
          <input type="text" class="form-control" placeholder="Search Skills" name="browse_freelancer_search_keyword" id="" value="" style="border-left: 0px; border-right: 0px;">
          <input type="submit" class="btn fw-bold text-light" name="browse_freelancer_search_keyword_submit" id="" style="background-color: #007fed; border-radius: 0px;" value="Search">
          </div>
          <p>
          <input type="checkbox">
          <label for="">PHP</label>
          </p>
          <p>
          <input type="checkbox">
          <label for="">Python</label>
          </p>
          <p>
          <input type="checkbox">
          <label for="">Java Script</label>
          </p>
          <p>
          <input type="checkbox">
          <label for="">HTML</label>
          </p>
          <p>
          <input type="checkbox">
          <label for="">C</label>
          </p>
          
          <label for="" class="mt-3 fw-bold fs-5">Country</label>
          <div class="input-group mb-2 mb-3">
              <span class="input-group-text bg-white" style="border-radius: 0px; border-right: 0px;"><i class="fa-solid fa-magnifying-glass"></i></span>
              <input type="text" class="form-control" placeholder="Enter a location" name="" id="" value="" style="border-left: 0px; border-radius: 0px;">.
           </div>  
        <label for="" class="mt-3 fw-bold fs-5">Reviews</label>
        </div>
      </div>
</form>
<div class='col  ms-3  me-3'>
        <div class='bg-white shadow pt-3 ps-4 pe-4'>      
<?php

if(isset($_REQUEST["browse_freelancer_search_keyword_submit"])){
     include 'db_freelance.php';
     $search_keyword=$_REQUEST["browse_freelancer_search_keyword"];
     $token=strtok($search_keyword," ");
     $a=array();
     while($token!==false){
       // echo $token;
       $qry="SELECT * FROM user_profile_details WHERE user_professional_headline LIKE '%".$token."%' OR user_summary LIKE '%".$token."%' OR user_first_name LIKE  '%".$token."%' OR user_last_name LIKE '%".$token."%'";
       $result=mysqli_query($con,$qry);
       if(mysqli_affected_rows($con)>0){
            while($row=mysqli_fetch_array($result)){
                 array_push($a,$row["uid_upid"]);
               }
          }
          $qry_skills2="SELECT * FROM user_skills WHERE user_skills_name LIKE '%".$token."%'";
          $result_skills2=mysqli_query($con,$qry_skills2);
          if(mysqli_affected_rows($con)>0){
          while($row_skills2=mysqli_fetch_array($result_skills2)){
                 array_push($a,$row_skills2["user_id"]);
               }
          }
          $qry_username2="SELECT * FROM signup_details WHERE username LIKE '%".$token."%'";
          $result_username2=mysqli_query($con,$qry_username2);
          if(mysqli_affected_rows($con)>0){
          while($row_username2=mysqli_fetch_array($result_username2)){
                 array_push($a,$row_username2["uid"]);
               }
          }
       $token=strtok(" ");
     }
          $b=array();
          $count=0;
          $start=false;
          for ($i = 0; $i < sizeof($a); $i++) {
              for ($j = 0; $j < sizeof($b); $j++) {
                    if ( $a[$i] == $b[$j] ) {
                        $start = true;
                    }
              }
              $count++;
          if ($count == 1 && $start == false) {
                  array_push($b,$a[$i]);
            }
            $start = false;
            $count = 0;
          }
         $i=0;
         while($i<sizeof($b)){
             
           $qry2="SELECT * FROM user_profile_details WHERE uid_upid='$b[$i]'";
           $result2=mysqli_query($con,$qry2);
           $row2=mysqli_fetch_array($result2);

          $qry_username="SELECT username,uid FROM signup_details WHERE uid='".$row2["uid_upid"]."'";
          $result_username=mysqli_query($con,$qry_username);
          $row_username=mysqli_fetch_array($result_username);
          echo "
                    <div class='row mt-4 ms-2'>
                    <div class='col-3'>
                    <img src='freelance_uploads/".$row2["user_profile_photo"]."' class='img-fluid' style='border:1px solid #efefef'>
                    </div>
                         <div class='col-9 lh-1'>
                              <p class='fs-4 fw-bold'  style='color: #007fed;'>".$row2["user_first_name"]." ".$row2["user_last_name"]." @".$row_username["username"]."</p>
                              <p style='font-size:15px;'>Rating | ".$row2["user_city"].", ".$row2["user_country"]."</p>
                              <p><span class='fw-bold fs-5'>$".$row2["user_hourly_rates"]."</span> <sub>per hour</sub> </p>
                              <p style='font-size:15px; font-weight:600;'>".$row2["user_professional_headline"]."</p>
                              <p style='font-size:15px; text-align:justify;' class='lh-sm'>".$row2["user_summary"]."</p>";?>

                              <p>
                                <?php
                                  $qry_skills="SELECT user_skills_name FROM user_skills WHERE user_id='".$row_username["uid"]."'";
                                  $result_skills=mysqli_query($con,$qry_skills);
                                  $t=0;
                                  while($row_skills=mysqli_fetch_array($result_skills)){
                                    echo "<i class='fa-solid fa-circle' style='font-size:5px;vertical-align:middle;'></i>&nbsp;" .$row_skills["user_skills_name"]."&nbsp &nbsp ";
                                    $t++;
                                    if($t>2){
                                      break;
                                    }
                                  }
                                  
                                ?>
                              </p>
                         </div>
                    </div>
                    <div class='row'>
                         <div class='col-2 d-none d-sm-block'></div>
                         <div class='col-2 d-none d-md-block'></div>
                         <div class='col'><a href='personal_hiring.php?uid_select=<?php echo "".$row2["uid_upid"]."" ?>' class='text-white fw-bold btn form-control pe-3 ps-3' style='background-color: #007fed; border-radius: 0px;'>Hire</a></div>
                         <div class='col-2 d-none d-md-block'></div>
                         <div class='col-2 d-none d-sm-block'></div>
                    </div>
                    <div class='row pt-3'>
                        <div class='col ' style='border-bottom:2px solid #dcdcdc'></div>
                    </div>
                  <?php
                    $i++;
               }
         }
                  ?>  
               </div>
          </div>
        <div class='col-1 d-none d-md-block'></div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

<?php
include 'footer.php';
}
else{
  header("Location:login.php");
}
?>