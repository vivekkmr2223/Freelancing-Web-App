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
     <?php
          if(isset($_REQUEST["apply_job_submit"])){
               $qry_check_profile = "SELECT * FROM user_profile_details WHERE uid_upid='".$_SESSION["Uid"]."'";
               $result_check_profile = mysqli_query($con,$qry_check_profile);
               $row_check_profile = mysqli_fetch_array($result_check_profile);

               if($row_check_profile["user_first_name"]==null || $row_check_profile["user_last_name"]==null || $row_check_profile["user_city"]==null || $row_check_profile["user_pin_code"]==null || $row_check_profile["user_state"]==null || $row_check_profile["user_country"]==null || $row_check_profile["user_professional_headline"]==null || $row_check_profile["user_summary"]==null || $row_check_profile["user_hourly_rates"]==null || $row_check_profile["user_profile_photo"]==null){
                    echo "
                    <div class='text-center alert alert-danger alert-dismissible fade show' role='alert'>
                         <h4 >Please complete your profile !!!</h4>
                         <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                    ";
               }
               
               else{
                    $qry_apply_jobs="INSERT INTO apply_for_job() VALUES(null,'".$_REQUEST["pjid"]."','".$_SESSION["Uid"]."','".$_REQUEST["bid_amount"]."','".$_REQUEST["completion_days"]."','".$_REQUEST["proposal_summary"]."',0,0,'$date')";
                    mysqli_query($con,$qry_apply_jobs);
                    $pjid=$_REQUEST["pjid"];
                    header("Location:other_proposals.php?pjid=$pjid");
               }
               
          }
     ?>
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
                <div class="row pb-3 pt-3 ps-2" style="border-bottom:1px solid #dcdcdc">
                     <div class="col-sm"><h4 class='fw-bold'>Project Details</h4></div>
                     <div class="col-2"></div>
                     <div class="col-3 d-none d-md-block"></div>
                     <div class="col-sm"><span class="fw-bold">$<?php  echo $row_jobs["min_amount"];  ?>-$<?php  echo $row_jobs["max_amount"];  ?> USD </span><br><sub class="fw-bold"><i class="fa-solid fa-clock fs-6"></i> BIDDING ENDS IN 
                    
                    <?php
                         $date_now=time();
                         $post_date=$row_jobs["p_date"];
                         $post_date=strtotime($post_date);
                         $left=$post_date-$date_now;
                         if($left>0){
                         echo ceil($left / (60*60*24)) ." days";}
                         else{
                              echo"0 days";
                         }
                    ?>
                    
                    </sub></div>
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
                            <a href='freelance_uploads/".$row_jobs["p_file"]."' class='btn btn-primary mb-3'><i class='fa-solid fa-download'></i> &nbsp;Download project details</a>";
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
    <?php
     if($left>0){
    ?>
    <form action="bid.php" method="get">
    <div class="container-fluid mt-5 bg-white">
          <div class="row">
               <div class="col-1 d-none d-md-block"></div>
               <div class="col-md shadow-lg me-5">
                    <div class="row pt-3 pb-2" style="border-bottom:1px solid #dcdcdc">
                         <div class="col-sm "><h4 class="fw-bold">Place a Bid on this Project</h4></div>
                    </div>
                    <div class="row mt-3">
                         <div class="col"><p><span class="text-danger">*</span>You will not be able to edit your bid so please be careful before bidding</p></div>
                    </div>
                    <div class='row'>                       
                         <div class='col-5'>
                              <input type="text" name='pjid' value="<?php echo $_REQUEST["pjid"];?>" class="d-none">
                              <label for="" class=" fw-bold">Bid Amount</label>
                              <div class="input-group">
                              <span class="input-group-text bg-white" style="border-radius: 0px; border-right: 0px;">$</span>
                              <input type="number" class="form-control shadow-none" name="bid_amount" id="bid_amount" value="" onchange="fee()" style="border-left: 0px; border-right: 0px;" required>
                              <span class="input-group-text bg-white" style="border-radius: 0px; border-left: 0px;">USD</span>
                              
                              </div>
                              <p id='feesInfo' class='mt-2'><span class='text-danger'>Please enter a value</span></p>
                              <script>
                                   function fee(){
                                        var amount = document.getElementById("bid_amount").value;
                                        var fees = amount/10;
                                        var getAmount = amount-fees;
                                        document.getElementById("feesInfo").innerHTML = "Paid to you : $"+amount+" - $"+fees+" fee = $"+getAmount;
                                        console.log(amount);
                                   }
                              </script>
                              
                         </div>
                         <div class='col-5'>
                              <label for='' class='fw-bold'>This project will be delivered in</label>
                              <div class="input-group">
                                   <span class="input-group-text bg-white border" id="basic-addon1" style="border-radius:0px; border-right:0px !important;">Days</span>
                                   <input type="number" class="border form-control" name="completion_days"  aria-label="Username" aria-describedby="basic-addon1" value="" style="width:250px; border-left:0px !important;" required>
                              </div>
                         </div>
                         <div class="col-2 d-none d-md-block"></div>
                    </div>
                    <div class="row">
                         <div class="col">
                              <label for="" class="fw-bold form-label mt-3">Describe your proposal</label>
                              <textarea id="" name="proposal_summary" class='form-control' rows="6" maxlenght="300" cols="" placeholder="What makes you the best candidate for this project?" required></textarea>
                         </div>
                    </div>
                    <div class="row pt-4 pb-3">
                         <div class="col"></div>
                         <div class="col"><input type="submit" name='apply_job_submit' class='text-white fw-bold btn form-control pe-3 ps-3' style='background-color: #007fed; border-radius: 0px;'  
                         
                         <?php
                              $qry_check_submit="SELECT afjid_pjid,afjid_uid FROM apply_for_job WHERE afjid_pjid='".$_REQUEST["pjid"]."' AND afjid_uid='".$_SESSION["Uid"]."'";

                              $result_check_submit=mysqli_query($con,$qry_check_submit);
                              if(mysqli_affected_rows($con)>0){
                                   echo "disabled value='*You have already applied'";
                              }
                              else{
                                   echo "value='Submit'";
                              }
                              ?>  >
                         
                         </div>
                         
                         <div class="col"></div>
                         
                    </div>
                    
                 
               </div>
               <div class="col-3 d-none d-md-block"></div>
          </div>
     </div>
     </form>

     

     <?php
     }
     else{

          echo"
          <div class='container-fluid mt-5'>
          <div class='row'>
          <div class='col-1 d-none d-sm-block '></div>
          <div class=' col me-5 bg-white shadow-lg'>
          <div class='row'>
          <div class='col-2 '><img src='images/end.gif' alt='' class='img-fluid' style=''></div>
          <div class='col  text-center text-danger pt-4'><h1>\"Bidding on this project has already ended\"</h1></div>
          </div>
          </div>
          <div class='col-3 d-none d-sm-block '></div>
          </div>
          </div>";

     }
     ?>

     

     <?php include 'footer.php'; 
}
else{
     header("Location:login.php");
}
     
     ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>