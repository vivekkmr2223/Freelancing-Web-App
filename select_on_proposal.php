<?php
session_start();
include 'db_freelance.php';
date_default_timezone_set('Asia/Kolkata');
include 'style.php';
if(isset($_SESSION["Uid"]))
{
 
  include 'db_freelance.php';
  $uid_select=$_REQUEST["uid_select"];
  $qry_profile="SELECT * FROM user_profile_details WHERE uid_upid=$uid_select";
  $result3=mysqli_query($con,$qry_profile);
  $record=mysqli_fetch_array($result3);

  $qry_signup="SELECT * FROM signup_details WHERE uid='$uid_select'";
  $result4=mysqli_query($con,$qry_signup);
  $record2=mysqli_fetch_array($result4);

  $qry_experience="SELECT * FROM experience_details WHERE experience_id='$uid_select'";
  $result5=mysqli_query($con,$qry_experience);
  $record3=mysqli_fetch_array($result5);

  $qry_record_education="SELECT * FROM user_education_details WHERE uid_education_id='$uid_select'";
  $result_education=mysqli_query($con,$qry_record_education);
  $record_education=mysqli_fetch_array($result_education);

  $qry_qualification="SELECT * FROM user_qualification_details WHERE uid_qualification_id='$uid_select'";
  $result6=mysqli_query($con,$qry_qualification);
  $record4=mysqli_fetch_array($result6);

  $qry_project_details="SELECT title from postjob_details where pjid='".$_REQUEST["pjid"]."'";
  $result_project_details=mysqli_query($con,$qry_project_details);
  $record_project_details=mysqli_fetch_array($result_project_details);
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://kit.fontawesome.com/467d4a99f6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php include 'dashboard_header.php';?>
    <div class="profile">
  <div class="container-fluid d-block d-sm-none mt-3">
    
      <div class="row small_profile_none">
          <div class="col"><img src='freelance_uploads/<?php echo$record["user_profile_photo"];?>' alt="" class="mt-3 img-fluid"></div>
          <div class="col"></div>
      </div>
      <div class="row mt-3">
          <div class="col"><h4><?php  echo"".$record["user_first_name"]." ".$record["user_last_name"]." "; echo"@".$record2["username"].""; ?></h4></div>
          <div class="col"></div>
      </div>
      <div class="row mt-3">
          <div class="col">Rating</div>
          <div class="col"></div>
      </div>
      <div class="row mt-3">
          <div class="col"><i class="fa-solid fa-location-dot text-danger mt-2 fs-5"></i><span class="ps-3 fw-bold"><?php echo "".$record["user_city"].",".$record["user_country"].""?></span></div>
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
          <div class="col" style="font-size:15px ;"><?php  echo "".$record["user_summary"]."" ?></div>
      </div>
  </div>
</div>

            <div class="container-fluid d-block d-sm-none mt-5 bg-dark shadow-lg pb-3">
                    <div class="row">
                        <div class="col pt-3"><span class="fw-bold text-white fs-5">Contact Username about your job</span></div>
                    </div>
                    <hr class='text-white'>
                    <div class="row">
                        <div class="col">
                            <label for="" class='text-white pb-2 fw-bold mt-2'>Project Name</label>
                            <textarea name="" id="" rows="1" class='form-control' disabled><?php echo "".$record_project_details["title"]."";?></textarea>
                            <label for="" class='text-white pb-2 fw-bold mt-4'>Send a private message</label>
                            <textarea name="" id="" rows="6" class='form-control'>Hi <?php echo "".$record["user_first_name"]." ".$record["user_last_name"]."" ?>, I noticed your profile and would like to offer you my project. We can discuss any details over chat.</textarea>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                        <form action='select_on_proposal.php' method='get'>
                            <?php echo "
                            <input type='text' name='uid_select' value='".$_REQUEST["uid_select"]."' class='d-none'>
                            <input type='text' name='pjid' value='".$_REQUEST["pjid"]."' class='d-none'>";
                            ?>
                            <input type="submit" name='hire_confirmation'  class='btn btn-primary form-control fw-bold' value="Hire <?php echo "".$record["user_first_name"]." ".$record["user_last_name"]."" ?>"></input>
                            </form>
                            
                        </div>
                    </div>


                    <div class="row mt-4">
                        <div class="col text-center">
                            <span class='text-white'>By clicking Hire <?php echo "".$record["user_first_name"]." ".$record["user_last_name"]."" ?>, you have read and agreed to our <a href="" class='text-white fw-bold select'>Terms & Conditions</a> and <a href="" class='text-white fw-bold select'>Privacy Policy</a>.</span>
                        </div>
                    </div>
            </div>
<!-- Small ends -->


    <div class="profile">
        <div class="container-fluid profile-background d-none d-sm-block profile">
            <div class="row pt-5">
                <div class="col-1"></div>
                <div class="col rounded shadow" style="background-color: white;">
                    <div class="row ">
                        <div class="col-4 pt-3">
                            <img src='freelance_uploads/<?php echo $record["user_profile_photo"];?>' alt="kjgkjb"
                                class="img-fluid">
                            <div class="row mt-3">
                                <div class="col">
                                    <i class="fa-solid fa-circle fw-bold text-success fs-5"></i><span
                                        class="ps-3 text-success">I'm Online</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class="fa-solid fa-sack-dollar fw-bold text-success mt-2 fs-5"></i><span
                                        class="ps-3 fw-bold">
                                        <?php echo "$".$record["user_hourly_rates"]." / hour";?>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class="fa-solid fa-clock mt-2 fs-5"></i><span class="ps-3">It's currently
                                        <?php date_default_timezone_set('Asia/Kolkata'); echo "".date("h:i:sa").""; ?>
                                        here
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class="fa-solid fa-location-dot text-danger mt-2 fs-5"></i><span
                                        class="ps-3 fw-bold">
                                        <?php echo "".$record["user_city"].",".$record["user_country"].""?>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class="fa-solid fa-calendar-days mt-2 fs-5"></i><span class="ps-3">
                                        <?php echo"".$record2["join_date"].""; ?>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class="fa-solid fa-thumbs-up mt-2 fs-5 mb-3"></i><span
                                        class="ps-3">Recommendations</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="row">
                                <div class="col pt-3 fs-3"> <strong>
                                        <?php echo"".$record["user_first_name"]." ".$record["user_last_name"]."" ?>
                                    </strong>
                    
                                    <?php
                                    
                            echo"@".$record2["username"]."";
                            ?>

                                </div>
                            </div>
                            <div class="row pt-3">
                                <h5>
                                    <?php  echo "".$record["user_professional_headline"]."" ?>
                                </h5>
                            </div>
                            <div class="row">
                                <p>stars</p>
                            </div>
                            <div class="row">
                                <p><span class="text-success fw-bold">N/A</span> <span class="ms-3">Jobs completed</span></p>
                            </div>
                            <div class="row">
                                <p>
                                    <?php  echo "".$record["user_summary"]."" ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 ms-5 bg-dark rounded shadow pb-3">
                    <div class="row">
                        <div class="col pt-3"><span class="fw-bold text-white fs-5">Contact Username about your job</span>
                        </div>
                    </div>
                    <hr class='text-white'>
                    <div class="row">
                        <div class="col">
                            <label for="" class='text-white pb-2 fw-bold mt-2'>Project Name</label>
                            <textarea name="" id="" rows="1" class='form-control' disabled><?php echo "".$record_project_details["title"]."";?></textarea>
                            <label for="" class='text-white pb-2 fw-bold mt-4'>Send a private message</label>
                            <textarea name="" id="" rows="6" class='form-control'>Hi <?php echo "".$record["user_first_name"]." ".$record["user_last_name"]."" ?>, I noticed your profile and would like to offer you my project. We can discuss any details over chat.</textarea>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                        <form action='select_on_proposal.php' method='get'>
                            <?php echo "
                            <input type='text' name='uid_select' value='".$_REQUEST["uid_select"]."' class='d-none'>
                            <input type='text' name='pjid' value='".$_REQUEST["pjid"]."' class='d-none'>";
                            ?>
                            <input type="submit" name='hire_confirmation'  class='btn btn-primary form-control fw-bold' value="Hire <?php echo "".$record["user_first_name"]." ".$record["user_last_name"]."" ?>"></input>
                            </form>
                            <?php
                            if(isset($_REQUEST["hire_confirmation"])){

                                // echo "<script>
                                //     var confirmation=0;
                                   
                                        
                                //         var i = confirm('Are you sure, you want to hire ".$record["user_first_name"]." ".$record["user_last_name"]." for ".$record_project_details["title"]." ?');
                                        
                                //         if(i==true){
                                //             var confirmation=1;
                                //         }
    
                                // </script>"; 
                                     
                                // $confirmation="<script>document.writeln(confirmation);</script>";
                                //     if($confirmation==1){
                                        $qry_update_status="UPDATE apply_for_job SET status=1 WHERE afjid_pjid='".$_REQUEST["pjid"]."' AND afjid_uid='".$_REQUEST["uid_select"]."'";
                                        $result_update_status=mysqli_query($con,$qry_update_status);

                                        $qry_insert_hiring_notification="INSERT INTO hire_notification() VALUES (null,'".$_SESSION["Uid"]."','".$_REQUEST["pjid"]."','".$_REQUEST["uid_select"]."',1)";
                                        $result_insert_hiring_notification=mysqli_query($con,$qry_insert_hiring_notification);

                                        echo "<script>window.location.href='myhires.php'</script>";
                                    // }
                            }
                            ?>
                        </div>
                    </div>


                    <div class="row mt-4">
                        <div class="col text-center">
                            <span class='text-white'>By clicking Hire <?php echo "".$record["user_first_name"]." ".$record["user_last_name"]."" ?>, you have read and agreed to our <a href="" class='text-white fw-bold select'>Terms & Conditions</a> and <a href="" class='text-white fw-bold select'>Privacy Policy</a>.</span>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div>




    <div class="container-fluid mt-4">
        <!-- Review starts -->

        <div class="row">
            <div class="col-1 d-none d-md-block"></div>
            <div class="col">
                <div class="row">

                    <div class="col rounded shadow" style="background-color: white;">
                        <div class="row pt-3">
                            <h3>Reviews</h3>
                        </div>
                        
                        <hr>
                        <div class="row mt-5">
                            <p>No reviews to see here!!</p>
                        </div>
                    </div>
                </div>


                <!-- Review ends -->


                <!-- Experience starts -->
                <div class="row mt-4">
                    <div class="col rounded shadow" style="background-color: white;">
                        <div class="row pt-3">
                            <div class="col">
                                <h3>Experience</h3>
                            </div>
                            <div class="col"></div>
                            <div class="col"></div>
                        </div>
                        <hr>
                        <div class="row mt-4">
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
                </div>
                <!-- Experience ends -->

                <!-- Education starts -->
                <div class="row mt-4">
                    <div class="col rounded shadow" style="background-color: white;">
                        <div class="row pt-3">
                            <div class="col">
                                <h3>Education</h3>
                            </div>
                            <div class="col"></div>
                            <div class="col"></div>
                        </div>
                        <hr>
                        <?php
                        
                            $uid_upid=$_REQUEST["uid_select"];
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
                                      </div>
                                          </div><hr>";           
                              
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
                </div>

                <!-- Education ends -->
                <!-- qualification starts -->
                <div class="row mt-4">
                    <div class="col rounded shadow" style="background-color: white;">
                        <div class="row pt-3">
                            <div class="col">
                                <h3>Qualification</h3>
                            </div>
                            <div class="col"></div>
                            <div class="col"></div>
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <p>
                                <?php
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
                </div>
                <!-- qualification ends -->
            </div>
                <div class="col-md-3 ms-5 ">
                <div class="ps-3 pb-3 pe-3 shadow rounded">
                <div class="row">
                    <div class="col pt-3"><span class="fw-bold"><?php echo "".$record["user_first_name"]."'s" ?> Top Skills</span></div>
                </div><hr>
                    <?php

                    $qry_print_skills="SELECT user_sub_skills_id FROM user_skills where user_id='".$_REQUEST["uid_select"]."'";
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
            <div class="col-1 d-none d-md-block"></div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>
<?php
include 'footer.php';
}
else{
  header("Location:login.php");
}
?>