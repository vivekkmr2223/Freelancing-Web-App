<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
if(isset($_SESSION["Uid"]))
{
  
  if(isset($_REQUEST["btnpsave"])){
    include 'db_freelance.php';
    $userimage=$_FILES['imgupload']['name'];
    
    $sourcefile=$_FILES['imgupload']['tmp_name'];
    $random=rand('111111','99999');
    $file=$random.$userimage;
    $targetfile="freelance_uploads/".$file;
     
    if(move_uploaded_file($sourcefile,$targetfile)){
      include 'db_freelance.php';
      $uid_upid=$_SESSION["Uid"];
      $qry_image="UPDATE user_profile_details 
      SET user_profile_photo='$file'
      WHERE uid_upid='$uid_upid'";
      mysqli_query($con,$qry_image);
      //header("Location: dashboard.php");
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
    $qry_update_education="UPDATE user_education_details 
    SET user_education_country='$user_education_country', user_education_college='$user_education_college', user_education_degree='$user_education_degree', user_education_start_year='$user_education_start_year', user_education_end_year='$user_education_end_year'
    WHERE uid_education_id='$uid_education_id'";
    mysqli_query($con,$qry_update_education);
    header("Location: dashboard.php");
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

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body style="background-color : #f7f7f7;" >
    
    <!--Logo section starts -->
    <div class="container-fluid d-none d-md-block pt-3">
        <div class="row">
            <div class="col-1 d-none d-md-block"></div>
          <div class="col mt-1"> <a href="dashboard.php"><img src="images/logo-removebg-preview.png" alt="" class="logo" style="height: 40px; width: 150px;"></a> </div>
          <div class="col d-none d-md-block mt-3"><a href="#" class="text-dark td-none"><i class="fa-regular fa-compass fs-5 pe-2 ps-3"></i><span >Browse</span></a></div>
          <div class="col d-none d-md-block mt-3"><a href="#" class="text-dark td-none"><i class="fa-solid fa-briefcase fs-5 pe-2"></i><span >Manage</span></a></div>
          <div class="col d-none d-md-block mt-3"><a href="#" class="text-dark td-none"><i class="fa-solid fa-user-group fs-5 pe-2"></i><span >Groups</span></a></div>
          <div class="col mt-3"><a href="#" class="text-dark td-none"><i class="fa-regular fa-bell fs-4 me-4"></i></a><a href="#" class="text-dark td-none"><i class="fa-regular fa-message fs-4"></i></a></div>
          <div class="col  mt-2"><a href="post-a-project.php" class="btn btn-danger">Post a Project</a></div>
          <div class="col mt-1"><p><?php echo"@".$record2["username"].""; ?><br>&#8377; 0.00 INR</p></div>
          <div class="col mt-2"><a href="logout.php" class="btn btn-danger ms-3" style="border-radius: 0;">Log Out</a></div>
          <div class="col-1 d-none d-md-block"></div>
        </div>
      </div>
<!--Logo section ends-->

<!--Nav bar starts-->
<div class="nav d-none d-md-block">
    <div class="container-fluid bg-dark d-none d-md-block">
      
        <div class="row pt-2 ">
            <div class="col-1 d-none d-sm-block d-sm-none d-md-block"></div>
            <div class="col pt-1 p-3 selectnav text-center"><a href="#" class="text-light td-none"><span class="">Profile</span></a></div>
            <div class="col pt-1 selectnav text-center"><a href="#" class="text-light"><span class="selectnav">Lists</span></a></div>
            <div class="col pt-1 selectnav text-center"><a href="#" class="text-light"><span class="selectnav">Tasklists</span></a></div>
            <div class="col pt-1 selectnav text-center"><a href="#" class="text-light"><span class="selectnav">My Projects</span></a></div>
            <div class="col pt-1 selectnav text-center"><a href="#" class="text-light"><span class="selectnav">Inbox</span></a></div>
            <div class="col pt-1 selectnav text-center"><a href="#" class="text-light"><span class="selectnav">Feedback</span></a></div>
            <div class="col pt-1 selectnav text-center"><a href="#" class="text-light"><span class="selectnav">Free Credit</span></a></div>
            <div class="col-5 d-none d-sm-block d-sm-none d-md-block"></div>
        </div>
    </div>
  </div>
<!--Nav bar ends-->

<form action="dashboard.php" method="POST" name="profile_form" enctype="multipart/form-data">
  <!-- small screen -->
<div class="profile">
  <div class="d-block d-sm-none">
    <img src="images/profile-background.jpg" alt="" class="img-fluid">
  </div>
  <div class="container-fluid d-block d-sm-none">
     <div class="row mt-3 mb-3">
        <div class="col-1"></div>
        <div class="col"><input type="submit" name="" value="View Client Profile" class=" ps-1 pe-1"></div>
        <div class="col"></div>
     </div>
      <div class="row small_profile_none">
          <div class="col-1"></div>
          <div class="col"><img src='freelance_uploads/<?php echo$record["user_profile_photo"];?>' alt="" class="mt-3 img-fluid"></div>
          <div class="col"></div>
      </div>
      <div class="row mt-3">
          <div class="col-1"></div>
          <div class="col"><h4><?php echo"".$record["user_first_name"]." ".$record["user_last_name"]." "; echo"@".$record2["username"].""; ?></h4></div>
          <div class="col"></div>
      </div>
      <div class="row mt-3">
          <div class="col-1"></div>
          <div class="col">Rating</div>
          <div class="col"></div>
      </div>
      <div class="row mt-3">
          <div class="col-1"></div>
          <div class="col"><i class="fa-solid fa-location-dot text-danger mt-2 fs-5"></i><span class="ps-3 fw-bold"><?php echo "".$record["user_city"].",".$record["user_country"].""?></span></div>
          <div class="col"></div>
      </div>
      <div class="row mt-3">
          <div class="col-1"></div>
          <div class="col"><i class="fa-solid fa-sack-dollar fw-bold text-success mt-2 fs-5"></i><span class="ps-3 fw-bold"><?php echo "$".$record["user_hourly_rates"]." / hour";?></span></div>
          <div class="col"></div>
      </div>
      <div class="row mt-3">
        <div class="col-1"></div>
          <div class="col"><strong class="text-success">N/A</strong> Jobs Completed</div>
          <div class="col"></div>
      </div>
      <div class="row mt-3">
        <div class="col-1"></div>
          <div class="col"><h5><?php  echo "".$record["user_professional_headline"]."" ?></h5></div>
      </div>
      <div class="row mt-3">
        <div class="col-1"></div>
          <div class="col" style="font-size:15px ;"><?php  echo "".$record["user_summary"]."" ?></div>
      </div>
  </div>
</div>

 <!-- small end -->

<div class="profile">
<div class="container-fluid profile-background d-none d-sm-block profile">
  <div class="row pt-5">
    <div class="col-1"></div>
    <div class="col"><input type="submit" name="client_profile" value="View Client Profile" class="ps-2 pe-2"></div>
  </div>

  <div class="row pt-4">
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
        <i class="fa-solid fa-location-dot text-danger mt-2 fs-5"></i><span class="ps-3 fw-bold"><?php echo "".$record["user_city"].",".$record["user_country"].""?></span>
        </div>
      </div>
      <div class="row">
        <div class="col">
        <i class="fa-solid fa-calendar-days mt-2 fs-5"></i><span class="ps-3"><?php echo"".$record2["utimestamp"].""; ?></span>
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
        <div class="row"><p>stars</p></div>
        <div class="row"><p><span class="text-success fw-bold">N/A</span> <span class="ms-3" >Jobs completed</span ></p></div>
        <div class="row"><p><?php  echo "".$record["user_summary"]."" ?></p></div>
      </div>
    </div> 
     
  </div>
  </form>
    
    <div id="skills_section">
    <div class="col-2 shadow d-none d-md-block ms-3 mt-5 rounded "  style="background-color: white;">
      <div class="row">
        <div class="col pt-3"><span class="fw-bold">Top Skills</span> </div>
        <div class="col-2"></div>
        <div class="col pt-2"><input type="button" class="btn btn-primary form-control fw-bold" value="Edit" data-bs-toggle="modal" data-bs-target="#skillsModal" style="border-radius:0px;"></div>
      </div>

    

      <hr>
      <div class="row mt-1">
        <div class="col">HTML</div>
      </div>
      <div class="row mt-1">
        <div class="col">CSS</div>
      </div>
      <div class="row mt-1">
        <div class="col">Javascript</div>
      </div>
      <div class="row mt-1">
        <div class="col">MySQL</div>
      </div>
      <div class="row mt-1">
        <div class="col">PHP</div>
      </div>
    </div>
    </div>
    <div class="col-1"></div>
  </div>
  </div>

</div>
<script>

function myFunction() {
    var x = document.getElementById("skills_section");
    if (x.style.display === "none") {
      x.style.display = "block";
    } 
    else {
      x.style.display = "none";
    }
  }
</script>

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


<!-- Review starts -->


<div class="container-fluid mt-3" >
  <div class="row">
    <div class="col-1 d-none d-md-block"></div>
    <div class="col rounded shadow" style="background-color: white;">
      <div class="row pt-3">
      <h3>Reviews</h3>
      </div><hr>
      <div class="row mt-5">
        <p>No reviews to see here!!</p>
      </div>
    </div>
    <div class="col-2 d-none d-md-block"></div>
    <div class="col-1 d-none d-md-block"></div>
  </div>
</div>

<!-- Review ends -->


<!-- Experience starts -->


<form action="dashboard.php" method="GET" name="experience_form">
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
  <form action='dashboard.php' method='GET' name='edit_experience_form'>
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

<form action="dashboard.php" method="GET" name="education_form">
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
      <div class="row mt-5">
      <?php
          if($record_education["user_education_country"]==null && $record_education["user_education_college"]==null &&  $record_education["user_education_degree"]==null && $record_education["user_education_start_year"]==null &&  $record_education["user_education_end_year"]==null){
              echo "<p>No experiences have been added!!</p>";
          }
          else{
            echo "<p class='fw-bold'>".$record_education["user_education_country"]."</p>
              <p class='fw-bold'>".$record_education["user_education_college"]."</p>
              <p class='fw-bold'>".$record_education["user_education_degree"]."</p>
              <p class='fw-bold'>". $record_education["user_education_start_year"]." <strong> TO </strong> ".$record_education["user_education_end_year"]."</p>";           
          }
        ?>
      </div>
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
  <form action='dashboard.php' method='GET' name='edit_education_form'>
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
              <input type='text' class='form-control' name='txtcountry' placeholder='Enter country name' value='".$record_education["user_education_country"]."' >
          </div>
          <div class='col'>
              <label for='txtcollege' class='fw-bold'>University/College</label>
              <input type='text' class='form-control' name='txtcollege' placeholder='Enter university/college name' value='".$record_education["user_education_college"]."' >
          </div>
      </div>

      <div class='row mt-4'>
        <div class='col'>
          <label for='txtdegree' class='fw-bold'>Degree</label>
          <input type='text' class='form-control' name='txtdegree' placeholder='Enter your degree' value='".$record_education["user_education_degree"]."'>
        </div>
      </div>

      <div class='row mt-4'>
          <div class='col'>
              <label for='semonth' class='fw-bold'>Start</label>
              <input type='date' name='semonth' class='form-control me-3' value='". $record_education["user_education_start_year"]."' >
          </div>
          <div class='col'>
              <label for='eemonth' class='fw-bold'>End</label>
              <input type='date' name='eemonth' class='form-control' value='".$record_education["user_education_end_year"]."'>
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


<form action="dashboard.php" method="GET" name="qualification_form">
<div class="container-fluid mt-3 mb-5 qualification" >
  <div class="row">
    <div class="col-1 d-none d-md-block"></div>
    <div class="col rounded shadow" style="background-color: white;">
      <div class="row pt-3">
        <div class="col"><h3>Qualification</h3></div>
        <div class="col"></div>
        <div class="col"></div>
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
    <form action='dashboard.php' method='GET' name='edit_qualification_form'>
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
<form action="dashboard.php" method="GET" name='sticky_edit_form'>
<div class="d-block d-sm-none">
  <br><br>
</div>
  <div class="container-edit d-block d-sm-none edit_button">
    <input type="submit" name="edit_profile" value="Edit Profile" class="btn btn-primary fw-bold form-control" style='border-radius:0px;'>
  </div>
  <script src="index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
</form>
<?php
}
else{
  header("Location :login.php");
}
?>

<?php

?>