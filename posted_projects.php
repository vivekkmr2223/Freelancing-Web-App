<?php
session_start();
    if(isset($_SESSION["Uid"]))
{
  include 'db_freelance.php';
  
  if(isset($_REQUEST["see_more_project_submit_notification"])){
    $qry_job_completed_notification = "UPDATE upload_completed_job SET job_completed_notification=1 WHERE ucj_freelancer_uid='".$_REQUEST["ucj_freelancer_uid"]."' AND ucj_pjid='".$_REQUEST["ucj_pjid"]."'";
    $result_job_completed_notification = mysqli_query($con,$qry_job_completed_notification);
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posted Projects | Freelance.com</title>
    <script src="https://kit.fontawesome.com/467d4a99f6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  
    <?php
        include 'dashboard_header.php';
    ?>
    <div class="container-fluid" style="background-color: #007fed;">
      <div class="row pt-3 pb-3">
        <div class="col-1 d-none d-md-block"></div>
        <div class="col text-light"><h1>My Posted Jobs</h1></div>
        <div class="col-4 d-none d-md-block"></div>
        <div class="col-1 d-none d-md-block"></div>
      </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-2 d-none d-md-block"></div>
            <div class='col-md bg-white ms-2 mt-4 shadow'>
        <?php
          
          $qry3="SELECT pjid FROM postjob_details";
          $result3=mysqli_query($con,$qry3);

          $len=0;
          while($row3=mysqli_fetch_array($result3))
          {
            $len++;
          }
          $total_page=ceil($len/10);

          $qry4="SELECT * FROM postjob_details WHERE pjid_uid='".$_SESSION["Uid"]."' ORDER BY pjid DESC";
          $result4=mysqli_query($con,$qry4);
          if(mysqli_num_rows($result4)!=0){
          while($row4=mysqli_fetch_array($result4))
          {
            echo "
            <div class='row'>
              <div class='row mt-4 ms-2 '>
                <div class='col-8'>
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
                    $qry_no_bids="SELECT * FROM apply_for_job WHERE afjid_pjid='".$row4["pjid"]."'";
                    $result_no_bids=mysqli_query($con,$qry_no_bids);
                    $no_of_bids=mysqli_num_rows($result_no_bids);
                    echo $no_of_bids ."&nbsp;Bids";
               
                if ($no_of_bids!=0){
                    $total_amount= 0;
                    while($row_avg_bids=mysqli_fetch_array($result_no_bids)){
                        $total_amount+=$row_avg_bids["bid_amount"];
                    }
                    echo "&nbsp;&nbsp;</span> <span class='fw-bold fs-5'>$". ceil($total_amount/$no_of_bids)."</span><sub> average bid</sub>";  
                }
                else{
                    echo"";
                }
                ?>
                </div>
                <div class='col-1'></div>
              </div>
              <div class='row ms-2 pt-3 mb-4'>
                <div class='col-8' style='font-size:15px;'>Rating</div>
                <div class='col-4' style='font-size:15px;'> <span>Posted on:</span> 
                
                <?php
                  $days=$row4["p_days"];
                  $date=$row4["p_date"];
                  $date = strtotime($date);
                  $date = strtotime("-".$days." days", $date);
                  echo date('M d, Y',$date);
                
                ?>
                
              </div>
              </div>
              
              <div class='row pb-3'>
              <div class='col-sm text-center zoom'>
                <?php 
                  $qry_status_sum="SELECT SUM(status) FROM apply_for_job WHERE afjid_pjid='".$row4["pjid"]."'";
                  $result_status_sum=mysqli_query($con,$qry_status_sum);
                  $row_status_sum=mysqli_fetch_array($result_status_sum);
                  if($row_status_sum['SUM(status)']==0){
                  echo"
                    <a href='see_proposals.php?pjid=".$row4["pjid"]."' class='text-white fw-bold btn pe-3 ps-3' style='background-color: #007fed; border-radius: 0px;'>See proposals</a></div>
                  ";
                  }
                  else{
                    echo"
                    <a class='text-white fw-bold btn pe-3 ps-3' style='border-radius: 0px; background-color:#03c04a;'>Freelancer Already Selected !!!</a></div>
                  ";
                  $qry_download_zip = "SELECT * from upload_completed_job where ucj_pjid='".$row4["pjid"]."'";
                  $result_download_zip = mysqli_query($con,$qry_download_zip);
                  $row_download_zip = mysqli_fetch_array($result_download_zip);

                  if($row_download_zip){

                    echo "
                    <div class='col-sm text-center zoom'>
                        <a href='freelance_uploads/".$row_download_zip["ucj_zip_file"]."' class='btn btn-primary mb-2' style='border-radius: 0px;'><i class='fa-solid fa-download'></i> &nbsp;Download Completed Project</a>
                      </div>
                       ";

                  }

                  
                  }
                ?>
                
              
              </div>
              <div class='row'>
                
                <div class='col' style='border-bottom:2px solid #dcdcdc'></div>
              </div>
              </div>
              <?php
          }
        
        ?>
        <?php
      }
        else{
          echo "<div class=' bg-white '>
            <div class='row '>
              <div class='col d-none d-md-block'></div>
              <div class='col pb-3 text-center'>
                <img src='videos\worried.gif' class='img-fluid' alt='' >
              </div>
              <div class='col d-none d-md-block'></div>
            </div>
            <div class='row'>
            <div class='col text-center'>
              <h1 class='text-center '>You have not posted any project...</h1>
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
  <?php include 'footer.php';
  }
  else{
    header("Location:login.php");
  }
  ?>
</body>
</html>