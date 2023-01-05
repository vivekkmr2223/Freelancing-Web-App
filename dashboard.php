<?php
session_start();
include 'db_freelance.php';
date_default_timezone_set('Asia/Kolkata');
if(isset($_SESSION["Uid"]))
{

    if(isset($_REQUEST["skill_save"])){
      
      $qry_skills_delete= "DELETE FROM user_skills WHERE user_id='".$_SESSION["Uid"]."'";
      mysqli_query($con,$qry_skills_delete);
      
      foreach($_REQUEST["skills"] as $key=>$val){
        $qry_skill_name="SELECT sub_skill_name FROM sub_skills_category WHERE sub_skills_id='$val'";
        $result_skill_name=mysqli_query($con,$qry_skill_name);
        $row_skill_name=mysqli_fetch_array($result_skill_name);
        $qry_skill_insert="INSERT INTO user_skills() VALUES(NULL,'".$_SESSION["Uid"]."','$val','".$row_skill_name["sub_skill_name"]."')";
        mysqli_query($con,$qry_skill_insert);
    }
    header("Location:dashboard.php");
  }
    
  if(isset($_REQUEST["btnpsave"])){
    include 'db_freelance.php';
    $userimage=$_FILES['imgupload']['name'];
    
    $sourcefile=$_FILES['imgupload']['tmp_name'];
    
    $targetfile="freelance_uploads/".$userimage;
    if(move_uploaded_file($sourcefile,$targetfile)){
      include 'db_freelance.php';
      $uid_upid=$_SESSION["Uid"];
      $qry_image="UPDATE user_profile_details 
      SET user_profile_photo='$userimage'
      WHERE uid_upid='$uid_upid'";
      mysqli_query($con,$qry_image);
    }
    
      $first_name=$_REQUEST["first_name"];
      $last_name=$_REQUEST["last_name"];
      $city=$_REQUEST["city"];
      $pincode=$_REQUEST["pin_code"];
      $state=$_REQUEST["state"];
      $country=$_REQUEST["country"];
      $professional_headline=$_REQUEST["professional_headline"];
      $summary=$_REQUEST["summary"];
      $hourly_rate=$_REQUEST["hourly_rate"];
      $uid_upid=$_SESSION["Uid"];
      $qry2="UPDATE user_profile_details 
      SET user_first_name='$first_name',user_last_name='$last_name',user_city='$city',user_pin_code='$pincode',user_state= '$state',user_country='$country',user_professional_headline= '$professional_headline',user_summary='$summary',user_hourly_rates='$hourly_rate'
      WHERE uid_upid='$uid_upid'";
      mysqli_query($con,$qry2);
     // header("Location: dashboard.php");
    
}

  if(isset($_REQUEST["btnsave"])){
    include 'db_freelance.php';
    $user_experience_title=$_REQUEST["txttitle"];
    $user_experience_company	=$_REQUEST["txtcompany"];
    $user_experience_start	=$_REQUEST["smonth"];
    $user_experience_end=$_REQUEST["emonth"];
    $user_experience_summary=$_REQUEST["txtsummary"];
    // $user_checkbox_work=$_REQUEST["country"];
    $experience_id=$_SESSION["Uid"];

    $qry6="UPDATE experience_details 
    SET user_experience_title='$user_experience_title',user_experience_company='$user_experience_company',user_experience_start='$user_experience_start',user_experience_end='$user_experience_end',user_experience_summary= '$user_experience_summary' 
    WHERE experience_id='$experience_id'";
    mysqli_query($con,$qry6);
    header("Location: dashboard.php");
  }

  if(isset($_REQUEST["btnesave"])){
    include 'db_freelance.php';
          $user_education_country=$_REQUEST["txtcountry"];
          $user_education_college=$_REQUEST["txtcollege"];
          $user_education_degree=$_REQUEST["txtdegree"];
          $user_education_start_year=$_REQUEST["semonth"];
          $user_education_end_year=$_REQUEST["eemonth"];
      
          $uid_education_id=$_SESSION["Uid"];
          $qry2="INSERT INTO user_education_details () VALUES (null,'$uid_education_id','$user_education_country','$user_education_college','$user_education_degree','$user_education_start_year','$user_education_end_year')";
          mysqli_query($con,$qry2);

    // $uid_education_id=$_SESSION["Uid"];
    // $qry_update_education="UPDATE user_education_details 
    // SET user_education_country='$user_education_country', user_education_college='$user_education_college', user_education_degree='$user_education_degree', user_education_start_year='$user_education_start_year', user_education_end_year='$user_education_end_year'
    // WHERE uid_education_id='$uid_education_id'";
    // mysqli_query($con,$qry_update_education);
    // header("Location: dashboard.php");
  }

  if(isset($_REQUEST["btnqsave"])){
    include 'db_freelance.php';
    $Professional_Certificate_or_Award=$_REQUEST["txtcertification"];
    $Conferring_Organization=$_REQUEST["txtorganization"];
    $Summary=$_REQUEST["txtqualificationsummary"];
    $Start_year=$_REQUEST["sqmonth"];
    $uid_qualification_id=$_SESSION["Uid"];

    $qry_update_qualification="UPDATE user_qualification_details
    SET Professional_Certificate_or_Award='$Professional_Certificate_or_Award',Conferring_Organization='$Conferring_Organization',Summary='$Summary',Start_year='$Start_year'
    WHERE uid_qualification_id='$uid_qualification_id'";
    mysqli_query($con,$qry_update_qualification);
    header("Location: dashboard.php");
  }
  
  include 'db_freelance.php';
  $uid=$_SESSION["Uid"];
  $qry_profile="SELECT * FROM user_profile_details WHERE uid_upid=$uid";
  $result3=mysqli_query($con,$qry_profile);
  $record=mysqli_fetch_array($result3);

  $qry_signup="SELECT * FROM signup_details WHERE uid=$uid";
  $result4=mysqli_query($con,$qry_signup);
  $record2=mysqli_fetch_array($result4);

  $qry_experience="SELECT * FROM experience_details WHERE experience_id=$uid";
  $result5=mysqli_query($con,$qry_experience);
  $record3=mysqli_fetch_array($result5);

  $qry_record_education="SELECT * FROM user_education_details WHERE uid_education_id='$uid'";
  $result_education=mysqli_query($con,$qry_record_education);
  $record_education=mysqli_fetch_array($result_education);

  $qry_qualification="SELECT * FROM user_qualification_details WHERE uid_qualification_id=$uid";
  $result6=mysqli_query($con,$qry_qualification);
  $record4=mysqli_fetch_array($result6);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Freeelance | Dashboard</title>
    <script src="https://kit.fontawesome.com/467d4a99f6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>
      *{
    margin: 0;
    padding: 0;
    }
    .profile-background{
      background-image: url('images/profile-background.jpeg');
      background-repeat: repeat-x;
    }

    .profile-background-small{
      background-image: url('images/profile-background-small.jpeg');
      background-repeat: repeat-x;
    }
    .container-small-profile{
      width: 100%;
    }
    .container-edit{
      position: fixed;
      bottom: 0;
      width: 100%;
      height: 55px;
      background-color: white;
      padding-top:8px ;
    }

      .profile-background{
    background-image: url('images/profile-background.jpg');
    background-repeat: repeat-x;
}

    .main-skill-dropdown{
        background-color:white !important;
    }

    .main-skill-dropdown:hover{
        background-color:#e9e9ea !important;
    }
    .zoom {
        transition: transform 0.2s; 
        margin: 0 auto;
        }
        .zoom:hover {
            transform: scale(1.12);
        }
    </style>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body style="background-color : #f7f7f7;" >
    
    <!--Logo section starts -->
    <?php include 'dashboard_header.php'; ?>
<!--Logo section ends-->



<form action="dashboard.php" method="POST" name="profile_form" enctype="multipart/form-data">
  <!-- small screen -->
<div class="profile  shadow">
  <div class="container-fluid d-block d-sm-none bg-white pb-3 mb-3">
    
      <div class="row small_profile_none">

          <div class="col"><img src='freelance_uploads/<?php echo$record["user_profile_photo"];?>' alt="" class="mt-3 img-fluid"></div>
          <div class="col"></div>
      </div>
      <div class="row mt-3">

          <div class="col"><h4><?php echo"".$record["user_first_name"]." ".$record["user_last_name"]." "; echo"@".$record2["username"].""; ?></h4></div>
      </div>
      <div class="row mt-3">

          <div class="col"></div>
          <div class="col"></div>
      </div>
      <div class="row mt-3">

          <div class="col"><i class="fa-solid fa-location-dot text-danger mt-2 fs-5"></i><span class="ps-3 fw-bold"><?php echo "".$record["user_city"].", ".$record["user_country"].""?></span></div>
          <div class="col"></div>
      </div>
      <div class="row mt-3">

          <div class="col"><i class="fa-solid fa-sack-dollar fw-bold text-success mt-2 fs-5"></i><span class="ps-3 fw-bold"><?php echo "$".$record["user_hourly_rates"]." / hour";?></span></div>
          <div class="col"></div>
      </div>
      <div class="row mt-3">
          <div class="col"><strong class="text-success">N/A</strong> Jobs Completed</div>
          <div class="col"></div>
      </div>
      <div class="row mt-3">
          <div class="col"><h5><?php  echo "".$record["user_professional_headline"]."" ?></h5></div>
      </div>
      <div class="row mt-3">
          <div class="col" style="font-size:15px ;"><?php  
          
          $summary_str=$record["user_summary"];
          $token_summary=strtok($summary_str,"/\n/");
          while($token_summary!==false){
            echo "".$token_summary."<br>";
            
            $token_summary=strtok("/\n/");
          }
          
          ?></div>
      </div>
  </div>
</div>

 <!-- small end -->

<div class="profile">
<div class="container-fluid profile-background d-none d-sm-block profile">


  <div class="row pt-5">
    <div class="col-1"></div>
    <div class="col rounded shadow" style="background-color: white;">
    <div class="row ">
      <div class="col-4 pt-3">
      <img src='freelance_uploads/<?php echo$record["user_profile_photo"];?>' alt="kjgkjb" class="img-fluid">
      <div class="row mt-3">
      <div class="col">
      <i class="fa-solid fa-circle fw-bold text-success fs-5"></i><span class="ps-3 text-success">I'm Online</span>
      </div>  
      </div>
      <div class="row">
        <div class="col">
        <i class="fa-solid fa-sack-dollar fw-bold text-success mt-2 fs-5"></i><span class="ps-3 fw-bold"><?php echo "$".$record["user_hourly_rates"]." / hour";?></span>
        </div>
      </div>
      <div class="row">
        <div class="col">
        <i class="fa-solid fa-clock mt-2 fs-5"></i><span class="ps-3">It's currently  <?php date_default_timezone_set('Asia/Kolkata'); echo "".date("h:i:sa").""; ?> here</span>
        </div>
      </div>
      <div class="row">
        <div class="col">
        <i class="fa-solid fa-location-dot text-danger mt-2 fs-5"></i><span class="ps-3 fw-bold"><?php echo "".$record["user_city"].", ".$record["user_country"].""?></span>
        </div>
      </div>
      <div class="row">
        <div class="col">
        <i class="fa-solid fa-calendar-days mt-2 fs-5"></i><span class="ps-3"><?php echo"".$record2["join_date"].""; ?></span>
        </div>
      </div>
      <div class="row">
        <div class="col">
        <i class="fa-solid fa-thumbs-up mt-2 fs-5 mb-3"></i><span class="ps-3">Recommendations</span>
        </div>
      </div>
      </div>
      <div class="col-8">
        <div class="row">
          <div class="col-8 pt-3 fs-3"> <strong><?php echo"".$record["user_first_name"]." ".$record["user_last_name"]."" ?></strong>
        
          <?php
           echo"@".$record2["username"]."";
          ?>

          </div>
          <div class="col-4">
            <input type="submit" class="btn btn-primary form-control mt-3 fw-bold" name="edit_profile" value="Edit" style="border-radius:0px;">
          </div>
        </div>
        <div class="row pt-3"><h5 ><?php  echo "".$record["user_professional_headline"]."" ?></h5></div>
        
        <div class="row"><p><span class="text-success fw-bold">N/A</span> <span class="ms-3" >Jobs completed</span ></p></div>
        <div class="row lh-sm"><p><?php
            $summary_str=$record["user_summary"];
            $token_summary=strtok($summary_str,"/\n/");
            while($token_summary!==false){
              echo "".$token_summary."<br>";
              
              $token_summary=strtok("/\n/");
            }
            ?>
        </p></div>
      </div>
    </div> 
     
  </div>
  </form>
    

    <div class="col-2 d-none d-md-block ms-3 mt-5  ">
      <div class='shadow p-3 rounded' style="background-color: white;">
      <div class="row" >
        <div class="col pt-3"><span class="fw-bold">Top Skills</span> </div>
        <div class="col pt-2"><button type="button" class="btn btn-primary ps-4 pe-4 fw-bold" data-bs-toggle="modal" data-bs-target="#skillsModal" style="border-radius:0px; ">
          Edit</button></div>
      </div>
      <hr>
        <!-- modal starts -->
  <form action="dashboard.php" method="post">
  <div class="modal fade" id="skillsModal" tabindex="-1" aria-labelledby="skillsModalLabel" aria-hidden="true" >
    <div class="modal-dialog  modal-dialog-scrollable modal-xl"   >
      <div class="modal-content" style=" height:800px !important; " >
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="skillsModalLabel">Select your skills and expertise</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style=" height:800px !important; " >
          
        <?php
          
          include 'db_freelance.php';
          $main_skills_qry = "SELECT * FROM main_skills";
          $main_skills_result=mysqli_query($con,$main_skills_qry);

          while($main_skills_record=mysqli_fetch_array($main_skills_result)){
            $main_skill_id=$main_skills_record['main_skill_id'];
            $skills_category_qry="SELECT * FROM sub_skills_category WHERE msid_ssid=$main_skill_id";
            
            $skills_category_result=mysqli_query($con,$skills_category_qry);
            echo"<div style='width:300px;'>";
            echo"<div class='btn-group dropend'>
           
             <button type='button' class='btn pt-3 dropdown-toggle pb-3 main-skill-dropdown' data-bs-toggle='dropdown' aria-expanded='false' style='border-radius:0px; border:0px; width:300px; text-align:left; box-shadow: 12px 0 15px -3px #EDEFF2, -12px 0 15px -3px #EDEFF2;' >
              ".$main_skills_record["skills_category"]."  
            </button><br>
            
            <ul class='dropdown-menu ms-5 mt-3 shadow-lg ' style='border:0px; border-radius:0px;'>";
                  while($skills_category_record=mysqli_fetch_array($skills_category_result)){
                    echo "
                    <div class='form-control dropdown-item main-skill-dropdown pt-2 pb-2' style='width:350px; border-radius:0px; border:0px;'>";?>
                    <input type='checkbox'  name='skills[]' id=<?php echo $skills_category_record["sub_skill_name"];?> value=<?php echo $skills_category_record["sub_skills_id"];?>
                    <?php 
                      $qry_checked= "SELECT user_sub_skills_id FROM user_skills WHERE user_id='".$_SESSION["Uid"]."'";
                        $result_skill=mysqli_query($con,$qry_checked);
                        while($row_skill=mysqli_fetch_array($result_skill)){
                          if($skills_category_record["sub_skills_id"]==$row_skill["user_sub_skills_id"]){
                            echo "checked";
                          }
                        }
                      ?>>
                    <label for=<?php echo $skills_category_record["sub_skill_name"];?> class='ps-3 pe-5 '><?php echo $skills_category_record["sub_skill_name"];?></label>
                    </div>
                    
                 <?php }
                
           echo"</ul>
                </div>
                </div>"; 
          }
          ?>
          
         
          
        </div>
        
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" name="skill_save" value="Save" style="border-radius: 0;">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius: 0;">Close</button>
        </div>
      </div>
    </div>
  </div>
        </form>
<!-- modal ends --> 
    

      
      <?php

      $qry_print_skills="SELECT user_sub_skills_id FROM user_skills where user_id='".$_SESSION["Uid"]."'";
      $result_print_skills=mysqli_query($con,$qry_print_skills);

      while($row_print_skills=mysqli_fetch_array($result_print_skills)){

        $qry_skill="SELECT sub_skill_name FROM sub_skills_category WHERE sub_skills_id='".$row_print_skills["user_sub_skills_id"]."'";
        $result_skill=mysqli_query($con,$qry_skill);
        while($row_skill=mysqli_fetch_array($result_skill)){
            echo "
            <div class='row mt-1'>
            <div class='col'><i class='fa-solid fa-circle' style='font-size:5px;vertical-align:middle;'></i>&nbsp;&nbsp; ".$row_skill["sub_skill_name"]."</div>
          </div>
            ";
        }
      }
      
      ?>
    </div>
    </div>
    <div class="col-1"></div>
  </div>
  
</div>

</div>


<!-- Edit profile starts -->

<?php
if(isset($_REQUEST["edit_profile"])){
  echo"
  <style>
  .profile{
    display:none;
  }
  </style>
  ";
  
  
  $record_img=$record["user_profile_photo"];
  echo"
  <form action='dashboard.php' name='profile_form' method='POST' enctype='multipart/form-data'>
  <div class='container-fluid profile-background  editprofile'>
  <div class='row pt-5'>
  <div class='col-1'></div>
    <div class='col'><input type='submit' name='client_profile' value='View Client Profile' class='ps-2 pe-2'></div>
  </div>
  <div class='row pt-5'>
    <div class='col-1 d-none d-md-block'></div>
    <div class='col rounded' style='background-color: white;'>
      <div class='row'>
        <div class='col-4 pt-3'>
          <div class='row'>
            <div class='col'><img src='freelance_uploads/".$record_img."' alt='jhchg' class='img-fluid'></div>
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
              <strong>Alert!</strong> After selecting file <strong>Press Save</strong> to upload your your file
              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>
          </div>
          <div class='row mt-2'>
        
            <div class='col'>
              <label for='coverphoto' class='' style='border:2px dotted black; padding:15px;'><i class='fa-solid fa-camera-retro fs-2'></i></label>
              <input type='file' id='coverphoto' name='imgupload' accept='image/*' style='display:none; visibility:none;' >
            </div>
            <div class='col'></div>
            
          </div>
          <div class='row'>
            <div class='col-9'>
              <label for='hourly_rate' class='fw-bold mt-4'>Hourly Rates</label>
              <input type='number' class='form-control' placeholder='$' name='hourly_rate' value= '".$record["user_hourly_rates"]."' ><p>USD per hour</p>
            </div>
          </div>
        </div>
        <div class='col-8'>

        <div class='row mt-5'>
          <div class='col'>
            <label for='' class='fw-bold'>First Name</label>
            <input type='text' class='form-control' placeholder='Enter First Name' name='first_name' id=''  value='".$record["user_first_name"]."'>
          </div>
          <div class='col'>
            <label for='' class='fw-bold'>Last Name</label>
            <input type='text' class='form-control' placeholder='Enter Last Name' name='last_name' id='' value='".$record["user_last_name"]."'>
          </div>
        </div>
        <div class='row'>
                    <div class='col'>
                      <label for='city' class='fw-bold mt-4'>City</label>
                      <input type='text' name='city' class='form-control' placeholder='Enter City Name' value='".$record["user_city"]."'>
                    </div>
                    <div class='col'>
                      <label for='pin_code' class='fw-bold mt-4'>Pin Code</label>
                      <input type='text' name='pin_code' class='form-control' placeholder='Enter Your Area Pincode' value='".$record["user_pin_code"]."'>
                    </div>
                  </div>

                  <div class='row'>
                    <div class='col'>
                      <label for='State' class='fw-bold mt-4'>State</label>
                      <input type='text' name='state' class='form-control' placeholder='Enter Your State Name' value='".$record["user_state"]."'>
                    </div>
                    <div class='col'>
                      <label for='country' class='fw-bold mt-4'>Country</label>
                      <input type='text' name='country' class='form-control' placeholder='Enter Your Country Name' value='".$record["user_country"]."'>
                    </div>
                  </div>
          <div class='row mt-5'>
            <div class='col'>
              <label for='' class='fw-bold'>Professional Headline</label>
              <input type='text' class='form-control' maxlength='200' placeholder='Eg. Web Design , Engineering etc.' name='professional_headline' id='' value='".$record["user_professional_headline"]."'>
            </div>
          </div>
          
          <div class='row mt-5'>
            <div class='col'>
              <label for='' class='fw-bold'>Summary</label>
              <textarea name='summary' id='' rows='5' class='form-control' maxlength='2000' placeholder='Enter summary about yourself...'>".$record["user_summary"]."</textarea>
            </div>
          </div>
          <div class='row mt-4'>
          <div class='col'></div>
          <div class='col-4'>
              <input type='submit' class='btn btn-secondary me-4' name='btnpcancel' value='Cancel' style='border-radius:0px;'>
              <input type='submit' class='btn btn-primary ps-3 pe-3' name='btnpsave' value='Save' style='border-radius:0px;'>
          </div>
      </div>
        </div>
      </div>
    </div>
    <div class='col-3 d-none d-md-block'></div>
  </div>
</div>
</form>
  ";


  if(isset($_REQUEST["btnpcancel"])){
    echo "
      <style>
        .profile{
          display:block;
        }
        .editprofile{
          display:none;
        }
      </style>
    ";
  }
}

?> 

<!-- Edit profile ends -->





<!-- Experience starts -->


<form action="dashboard.php" method="POST" name="experience_form">
<div class="container-fluid mt-3 experience" >
  <div class="row">
    <div class="col-1 d-none d-md-block"></div>
    <div class="col rounded shadow" style="background-color: white;">
      <div class="row pt-3">
        <div class="col"><h3>Experience</h3></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"><input type="submit" name="add_experience" class="btn btn-primary fw-bold" value="Add Experience" style='border-radius:0px;'></div>
      
      </div><hr>
      <div class="row mt-5">
        <?php
          if($record3["user_experience_title"]==null && $record3["user_experience_company"]==null &&  $record3["user_experience_start"]==null &&
            $record3["user_experience_end"]==null &&  $record3["user_experience_summary"]==null){
              echo "<p>No experiences have been added!!</p>";
          }
          else{
            echo "<p class='fw-bold'>".$record3["user_experience_title"]."</p>
              <p class='fw-bold'>".$record3["user_experience_company"]."</p>
              <p class='fw-bold'>". $record3["user_experience_start"]." <strong> TO </strong> ".$record3["user_experience_end"]."</p>
              <p class='fw-bold'>".$record3["user_experience_summary"]."</p>";
            
          }
        ?>  
        
      </div>
    </div>
    <div class="col-3 d-none d-md-block"></div>
  </div>
</div>
</form>
<?php
if(isset($_REQUEST["add_experience"])){
  echo "
    <style>
      .experience{
        display: none;
      }
    </style>
  ";

  echo"
  <form action='dashboard.php' method='POST' name='edit_experience_form'>
  <div class='container-fluid mt-3 add-experience' id='add-experience'>
  <div class='row'>
    <div class='col-1 d-none d-md-block'></div>
    <div class='col rounded shadow' style='background-color: white;'>
      <div class='row pt-3'>
        <div class='col'><h3>Experience</h3></div><hr>
      </div>

      <div class='row mt-2'>
          <div class='col'>
              <label for='txttitle' class='fw-bold'>Title</label>
              <input type='text' class='form-control' name='txttitle' placeholder='Enter your position or title' value='".$record3["user_experience_title"]."';
              >
          </div>
          <div class='col'>
              <label for='txtcompany' class='fw-bold'>Company</label>
              <input type='text' class='form-control' name='txtcompany' placeholder='Enter company name' value='".$record3["user_experience_company"]."'>
          </div>
      </div>

      <div class='row mt-4'>
          <div class='col'>
              <label for='smonth' class='fw-bold'>Start</label>
              <input type='date' name='smonth' class='form-control me-3' value='".$record3["user_experience_start"]."'>
          </div>
          <div class='col'>
              <label for='emonth' class='fw-bold'>End</label>
              <input type='date' name='emonth' class='form-control' value='".$record3["user_experience_end"]."'>
          </div>
      </div>

      <div class='row mt-4'>
          <div class='col'>
              <input type='checkbox' name='work_check' id='work_check' class='from-control-input me-1'>
              <label for='work_check' class='form-control-label'>I'm currently working here</label>
          </div>
      </div>

      <div class='row mt-4'>
          <div class='col'>
              <label for='summary' class='fw-bold'>Summary</label>
              <textarea name='txtsummary' id='summary' rows='5' class='form-control'
          placeholder='Describe your work experience'>".$record3["user_experience_summary"]."</textarea>
          </div>
      </div>

      <div class='row mt-4 mb-5'>
          <div class='col-9'></div>
          <div class='col'>
              <input type='submit' class='btn btn-secondary me-4' name='btncancel' value='Cancel' style='border-radius:0px;'>
              <input type='submit' class='btn btn-primary ps-3 pe-3' name='btnsave' value='Save' style='border-radius:0px;'>
          </div>
      </div>
      
    </div>
    <div class='col-3 d-none d-md-block'></div>
  </div>
</div>
</form>
  ";

  if(isset($_REQUEST["btncancel"])){
    echo "
      <style>
        .add-experience{
          display:none;
        }
        .experience{
          display:block;
        }
      </style>
    ";
  }
}
?>

<!-- Experience ends -->

<!-- Education starts -->

<form action="dashboard.php" method="POST" name="education_form">
<div class="container-fluid mt-3 add_education" >
  <div class="row">
    <div class="col-1 d-none d-md-block"></div>
    <div class="col rounded shadow" style="background-color: white;">
      <div class="row pt-3">
        <div class="col"><h3>Education</h3></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"><input type="submit" class="btn btn-primary fw-bold" value="Add Education" name="add-education" style='border-radius:0px;'></div>
       </div><hr>
      <?php
      $uid_upid=$_SESSION["Uid"];
      $qry_record_education="SELECT * FROM user_education_details WHERE uid_education_id='$uid_upid'";
      $result_education=mysqli_query($con,$qry_record_education);
      $education_flag=0;
      while($record_education=mysqli_fetch_array($result_education)){
        $education_flag=1;
        $uid_education2=$record_education["uedid"];
        $edu_delete_name="delete_education".$uid_education2;
    echo "<div class='row mt-4'>
            <div class='col-11'>";
        
        
        
            echo "<p class='fw-bold fs-5'>".$record_education["user_education_degree"]."</p>
            <p class='lh-base'>".$record_education["user_education_college"].",".$record_education["user_education_country"]."<br><span class='text-secondary'>(". $record_education["user_education_start_year"].")  To  (".$record_education["user_education_end_year"].")</span></p>
            <p class='text-secondary '></p> 
                </div>";

                echo "
                <div class='col-1'>
                <label for='delete_education' class='fs-3 text-secondary'><i class='fa-regular fa-rectangle-xmark'></i></i></label>
                <input type='submit' class='btn btn-danger' style='border-radius:0px; display:none; visibility:none;' name='".$edu_delete_name."' id='delete_education' value='Delete'></div></div><hr>";
                if(isset($_REQUEST["".$edu_delete_name.""])){
                 $qry_education_delete="DELETE FROM user_education_details WHERE uedid='$uid_education2'";  
                 mysqli_query($con,$qry_education_delete);
                echo "<script>window.location.href='dashboard.php';</script>
                </div>
                </div><hr> ";
                }
                          
        
    }
    if($education_flag==0){
        echo "
            <div class='row mt-4'>
                <div class='col-11'>
                    <p>No education have been added!!</p>
                </div>
            </div>";
    }
    
        ?>
      
    </div>
    <div class="col-3 d-none d-md-block"></div>
  </div>
</div>
</form>

<?php
if(isset($_REQUEST["add-education"])){
     
  echo"
    <style>
      .add_education{
        display:none;
      }
    </style>
  ";

  echo "
  <form action='dashboard.php' method='POST' name='edit_education_form'>
  <div class='container-fluid mt-3 add-education' >
  <div class='row'>
    <div class='col-1 d-none d-md-block'></div>
    <div class='col rounded shadow' style='background-color: white;'>
      <div class='row pt-3'>
        <div class='col'><h3>Education</h3></div><hr>
      </div>

      <div class='row mt-2'>
          <div class='col'>
              <label for='txtcountry' class='fw-bold'>Country</label>
              <input type='text' class='form-control' name='txtcountry' placeholder='Enter country name' value='' >
          </div>
          <div class='col'>
              <label for='txtcollege' class='fw-bold'>University/College</label>
              <input type='text' class='form-control' name='txtcollege' placeholder='Enter university/college name' value='' >
          </div>
      </div>

      <div class='row mt-4'>
        <div class='col'>
          <label for='txtdegree' class='fw-bold'>Degree</label>
          <input type='text' class='form-control' name='txtdegree' placeholder='Enter your degree' value=''>
        </div>
      </div>

      <div class='row mt-4'>
          <div class='col'>
              <label for='semonth' class='fw-bold'>Start</label>
              <input type='date' name='semonth' class='form-control me-3' value='' >
          </div>
          <div class='col'>
              <label for='eemonth' class='fw-bold'>End</label>
              <input type='date' name='eemonth' class='form-control' value=''>
          </div>
      </div>

      <div class='row mt-4 mb-5'>
          <div class='col-9'></div>
          <div class='col'>
              <input type='submit' class='btn btn-secondary me-4' name='btnecancel' value='Cancel' style='border-radius:0px;'>
              <input type='submit' class='btn btn-primary ps-3 pe-3' name='btnesave' value='Save' style='border-radius:0px;'>
          </div>
      </div>
      
    </div>
    <div class='col-3 d-none d-md-block'></div>
  </div>
</div>
</form>
  ";

  if(isset($_REQUEST["btnecancel"])){
    echo "
    <style>
    .add_education{
      display:block;
    }
    .add-education{
      display:none;
    }
    </style>
    ";
  }
}
?>

<!-- Education ends -->

<form action="dashboard.php" method="POST" name="qualification_form">
<div class="container-fluid mt-3 mb-5 qualification" >
  <div class="row">
    <div class="col-1 d-none d-md-block"></div>
    <div class="col rounded shadow" style="background-color: white;">
      <div class="row pt-3">
        <div class="col"><h3>Qualification</h3></div>
        <div class="col"></div>
        <div class="col d-none d-md-block"></div>
        <div class="col"><input type="submit" class="btn btn-primary fw-bold" name="add-qualification" value="Add Qualification" style='border-radius:0px;'></div>
      
      </div><hr>
      <div class="row mt-5">
        <p><?php
          if($record4["Professional_Certificate_or_Award"]==null && $record4["Conferring_Organization"]==null &&  $record4["Summary"]==null &&
          $record4["Start_year"]==null){
            echo "<p>No qualifications have been added!!</p>";
        }
        else{
          echo "<p class='fw-bold'>".$record4["Professional_Certificate_or_Award"]."</p>
            <p class='fw-bold'>".$record4["Conferring_Organization"]."</p>
            <p class='fw-bold'>". $record4["Summary"]."</p>
            <p class='fw-bold'>".$record4["Start_year"]."</p>";
          
        }
        ?>
      </div>
    </div>
    <div class="col-3 d-none d-md-block"></div>
  </div>
</div>
</form>
<?php
  if(isset($_REQUEST["add-qualification"])){
    echo "
      <style>
        .qualification{
          display:none;
        }
      </style>
    ";

    echo "
    <form action='dashboard.php' method='POST' name='edit_qualification_form'>
    <div class='container-fluid mt-3 add_qualification' >
    <div class='row'>
      <div class='col-1 d-none d-md-block'></div>
      <div class='col rounded shadow' style='background-color: white;'>
        <div class='row pt-3'>
          <div class='col'><h3>Qualification</h3></div><hr>
        </div>

        <div class='row mt-2'>
            <div class='col'>
                <label for='txtcertification' class='fw-bold'>Professional Certificate or Award</label>
                <input type='text' class='form-control' name='txtcertification' placeholder='Enter Professional Certificate or Award' value='".$record4["Professional_Certificate_or_Award"]."'>
            </div>
            <div class='col'>
                <label for='txtorganization' class='fw-bold'>Conferring Organization</label>
                <input type='text' class='form-control' name='txtorganization' placeholder='Enter Conferring organization' value='".$record4["Conferring_Organization"]."'>
            </div>
        </div>

        <div class='row mt-4'>
          <div class='col'>
              <label for='qualificationsummary' class='fw-bold'>Summary</label>
              <textarea name='txtqualificationsummary' id='qualificationsummary' rows='5' class='form-control'
          placeholder='Describe your Qualification'> ".$record4["Summary"]."</textarea>
          </div>
      </div>

      <div class='row mt-4'>
        <div class='col'>
            <label for='sqmonth' class='fw-bold'>Start year</label>
            <input type='date' name='sqmonth' class='form-control me-3' value='".$record4["Start_year"]."'>
        </div>
        
    </div>

      <div class='row mt-4 mb-5'>
        <div class='col-9'></div>
        <div class='col'>
            <input type='submit' class='btn btn-secondary me-4' name='btnqcancel' value='Cancel' style='border-radius:0px;'>
            <input type='submit' class='btn btn-primary ps-3 pe-3' name='btnqsave' value='Save' style='border-radius:0px;'>
        </div>
    </div>
        
      </div>
      <div class='col-3 d-none d-md-block'></div>
    </div>
  </div>
  </form>
    ";

    if(isset($_REQUEST["btnqcancel"])){
      echo "
      <style>
        .qualification{
          display:block;
        }
        .add_qualification{
          display:none;
        }
        </style>
      ";
    }
  }
?>


<?php
include 'footer.php';
?>
<form action="dashboard.php" method="POST" name='sticky_edit_form'>
<div class="d-block d-sm-none">
  <br><br>
</div>
  <div class="container-edit d-block d-sm-none edit_button">
    <input type="submit" name="edit_profile" value="Edit Profile" class="btn btn-primary fw-bold form-control" style='border-radius:0px;'>
  </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>

<?php
}
else{
  header("Location :login.php");
}
?>

<?php

?>