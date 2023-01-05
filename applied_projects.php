<?php
session_start();
include 'db_freelance.php';
if(isset($_SESSION["Uid"])){
     

     if(isset($_REQUEST["see_more_hire_notification"])){
          $qry_update_hire_notification="UPDATE hire_notification SET hiring_notification=0 WHERE hnid_freelancer_uid='".$_REQUEST["hnid_freelancer_uid"]."' AND hnid_pjid='".$_REQUEST["hnid_pjid"]."'";
          $result_update_hire_notification=mysqli_query($con,$qry_update_hire_notification);
        }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Applied Projects | Freelance.com</title>
    <script src="https://kit.fontawesome.com/467d4a99f6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <?php include 'dashboard_header.php' ?>
  <?php
  if(isset($_REQUEST["upload_completed_job_submit"])){
          $postfile=$_FILES['upload_completed_job']['name'];
          $sourcefile=$_FILES['upload_completed_job']['tmp_name'];
          $rand=rand('1111111','9999999');
          $file=$rand.'_'.$postfile;
          $targetfile="freelance_uploads/".$file;
          if(move_uploaded_file($sourcefile,$targetfile)){
               $qry_insert_complete_project = "INSERT INTO upload_completed_job() VALUES(null,'".$_SESSION["Uid"]."','".$_REQUEST["submit_project_pjid"]."','$file',0) ";
               mysqli_query($con,$qry_insert_complete_project);
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
  <div class="container-fluid " style="background-color: #007fed;">
      <div class="row ">
        <div class="col-1 d-none d-md-block"></div>
        <div class="col pt-3 pb-3 text-light" ><h1 class='ps-3'>My Applied Projects</h1></div>
        <div class="col-1 d-none d-md-block"></div>
      </div>
    </div>
<div class="container-fluid ">
     <div class="row">
          <div class="col-2 d-none d-md-block"></div>
          <div class='col-md bg-white ms-2 mt-4 shadow'>

               <?php
                    $qry_apply_for_job="SELECT afjid_pjid, afjid_uid FROM apply_for_job WHERE afjid_uid='".$_SESSION["Uid"]."'";
                    $result_apply_for_job=mysqli_query($con,$qry_apply_for_job);
                    if(mysqli_num_rows($result_apply_for_job)!=0){
                    while($row_apply_for_job=mysqli_fetch_array($result_apply_for_job)){
                         $qry4="SELECT * FROM postjob_details WHERE pjid='".$row_apply_for_job["afjid_pjid"]."'";
                         $result4=mysqli_query($con,$qry4);
                         $row4=mysqli_fetch_array($result4);
                         
                         $qry_selected="SELECT status FROM apply_for_job WHERE afjid_uid='".$_SESSION["Uid"]."' AND status=1 AND afjid_pjid='".$row_apply_for_job["afjid_pjid"]."'";
                         $result_selected=mysqli_query($con,$qry_selected);
                         $row_selected = mysqli_fetch_array($result_selected) ;
                         echo "
                         <div class='row'>
                         
                         <div class='row mt-4 ms-2 position-relative'>
                              <div class='col-8'>";
                              
                              if($row_selected){
                                   $qry_complete_job= "SELECT ucj_pjid from upload_completed_job where ucj_freelancer_uid = '".$_SESSION["Uid"]."' AND ucj_pjid='".$row_apply_for_job["afjid_pjid"]."'";
                                   $result_complete_job = mysqli_query($con,$qry_complete_job);
                                   if(mysqli_affected_rows($con)){
                                        echo "<span class='position-absolute top-0 start-100 p-2 translate-middle badge' style='background-color:#00b7eb; font-size : 18px;'>
                                             Job Completed
                                        </span>";
                                   }
                                   else{
                                        echo "<span class='position-absolute top-0 start-100 p-2 translate-middle badge' style=' background-color:#03c04a; font-size : 18px;'>
                                             Selected
                                        </span>";
                                   }
                              }
                         
                              echo"
                              <p class='fs-4 fw-bold'  style='color: #007fed;'>".$row4["title"]."</p>
                              <p class='fw-bold' style='font-size:15px;'>Budget &nbsp;&nbsp;$".$row4["min_amount"]." - ".$row4["max_amount"]." USD</p>
                              <p style='font-size:15px;'>".$row4["summary"]."</p>";?>

                              <p style='font-size:15px;'>
                              <?php 

                              $skills=$row4["p_skills"];
                              $token=strtok($skills,",");
                              // $b=array_unique($a);
                              $i=0;
                              while($token!==false){
                                   echo "<i class='fa-solid fa-circle' style='font-size:5px;vertical-align:middle;'></i>&nbsp;".$token."&nbsp &nbsp ";
                                   $token = strtok(",");
                                   
                              }
                              
                              
                              ?>
                              </p>

                              </div>
                              <div class='col-md-3'><span class='fs-5'>
                                   
                              <?php
                                   $qry_no_bids="SELECT * FROM apply_for_job WHERE afjid_pjid='".$row4["pjid"]."' and afjid_uid='".$_SESSION["Uid"]."'";
                                   $result_no_bids=mysqli_query($con,$qry_no_bids);
                                  $bid_amount= mysqli_fetch_array($result_no_bids);
                                   echo "Your Bid: $".$bid_amount["bid_amount"]." USD";
                              
                              ?>
                              </div>
                              <div class='col-1'></div>
                         </div>
                         </div>
                         <div class='row ms-2 pt-3 mb-4'>
                              <div class='col-8' style='font-size:15px;'></div>
                              <div class='col-4' style='font-size:15px;'>
                                   <a href="submit_a_project.php?pjid=<?php echo "".$row4["pjid"].""?>" class="btn text-white" style='background-color: #007fed; font-weight:500;'>View more details</a>
                              </div>
                         </div>
                         <div class='row'>
                              <div class='col' style='border-bottom:2px solid #dcdcdc'></div>
                         </div>
                                                  
               <?php     
                    }
               }
               else{
                    echo "<div class='bg-white '>
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





