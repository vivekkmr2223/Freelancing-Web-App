<?php
session_start();
include 'db_freelance.php';
if(isset($_SESSION["Uid"])){

  if(isset($_REQUEST["payment"])){
    $qry_money_transfer = "INSERT INTO money_transaction() VALUES(null,".$_REQUEST["mid_pjid"].",".$_REQUEST["mid_uid"].",".$_REQUEST["mid_freelancer_id"].",".$_REQUEST["owner_amount"].",".$_REQUEST["net_amount"].",1)";
    $result_money_transfer = mysqli_query($con,$qry_money_transfer);
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Hires | Freelance.com</title>
    <script src="https://kit.fontawesome.com/467d4a99f6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <?php include 'dashboard_header.php' ?>
    <div class="container-fluid" style="background-color: #007fed;">
      <div class="row ">
        <div class="col-1 d-none d-md-block"></div>
        <div class="col pt-3 pb-3 text-light" ><h1 class='ps-3'>My Hires</h1></div>
        <div class="col-1 d-none d-md-block"></div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row mt-3">
        <div class="col-2 d-none d-md-block"></div>
        <div class="col">
          <?php
            $qry_project_id="SELECT pjid FROM postjob_details WHERE pjid_uid='".$_SESSION["Uid"]."' ORDER BY pjid DESC";
            $result_project_id=mysqli_query($con,$qry_project_id);
            if(mysqli_num_rows($result_project_id)!=0){
            while($row_project_id=mysqli_fetch_array($result_project_id)){

              $qry_status_check="SELECT * FROM apply_for_job WHERE afjid_pjid='".$row_project_id["pjid"]."' AND status=1";
              $result_status_check=mysqli_query($con,$qry_status_check);
              
              while($row_status_check=mysqli_fetch_array($result_status_check)){
                  if(mysqli_num_rows($result_status_check)!=null){
                $qry_profile_details="SELECT * FROM user_profile_details WHERE uid_upid='".$row_status_check["afjid_uid"]."'";
                $result_profile_details=mysqli_query($con,$qry_profile_details);
                $row_profile_details=mysqli_fetch_array($result_profile_details);
  
                $qry_username="SELECT username,uid FROM signup_details WHERE uid='".$row_status_check["afjid_uid"]."'";
                  $result_username=mysqli_query($con,$qry_username);
                  $row_username=mysqli_fetch_array($result_username);

                  $qry_project_name="SELECT title FROM postjob_details WHERE pjid='".$row_status_check["afjid_pjid"]."'";
                  $result_project_name=mysqli_query($con,$qry_project_name);
                  $row_project_name=mysqli_fetch_array($result_project_name);
                  echo"
                  <div class='row pb-3 pt-3 mb-4 shadow-lg'>
                      <div class='col-3'>
                          <img src='freelance_uploads/".$row_profile_details["user_profile_photo"]."' class='img-fluid' style='border:1px solid #efefef'>
                      </div>
                          <div class='col-9 lh-1'>
                              <h2 style='color:#007fed;' class='fw-bold pb-3'>".$row_project_name["title"]." </h2>
                              <p class='fs-4 fw-bold'  >".$row_profile_details["user_first_name"]." ".$row_profile_details["user_last_name"]." @".$row_username["username"]."<span class='float-end text-dark fs-5 pe-3'><span style='font-weight:600;'>Bid Amount:&nbsp;&nbsp;</span>$".$row_status_check["bid_amount"]."</span></p>
                              <p style='font-size:15px;'>Rating | ".$row_profile_details["user_city"].", ".$row_profile_details["user_country"]." <span class='float-end text-dark pe-3'><span style='font-weight:600;'>Completion Days:&nbsp;&nbsp;</span>".$row_status_check["completion_days"]."</span></p>
                              <p style=' font-weight:600;'>".$row_profile_details["user_professional_headline"]."</p>
                              <p style=' text-align:justify;' class='lh-sm'>".$row_status_check["proposal_summary"]."</p>";
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
                                    ?> 
                                </p>
                                <?php
                                  $qry_download_zip = "SELECT * from upload_completed_job where ucj_pjid='".$row_status_check["afjid_pjid"]."'";
                                  $result_download_zip = mysqli_query($con,$qry_download_zip);
                                  $row_download_zip = mysqli_fetch_array($result_download_zip);
                                  $net_amount = $row_status_check["bid_amount"] - ($row_status_check["bid_amount"]/10);

                                  $qry_check_paid = "SELECT * FROM money_transaction WHERE mid_pjid = '".$row_status_check["afjid_pjid"]."'";
                                  $result_check_paid = mysqli_query($con,$qry_check_paid);
                                  $row = mysqli_num_rows($result_check_paid);
                                  if($row_download_zip){
                                    echo "
                                    <div class='row'>
                                      <div class='col'></div>
                                      <div class='col'></div>
                                      <div class='col text-end'>";
                                      
                                      if(mysqli_num_rows($result_check_paid)==null){

                                      echo"
                                          <button type='button' class='btn btn-primary fw-bold ps-5 pe-5 zoom me-3' data-bs-toggle='modal' data-bs-target='#paymodal' style='border-radius: 0px;'>
                                            <i class='fa-brands fa-paypal'></i> &nbsp; Pay
                                          </button>

                                          <div class='modal fade' id='paymodal' tabindex='-1' aria-labelledby='payModalLabel' aria-hidden='true'>
                                          <div class='modal-dialog'>
                                            <div class='modal-content'>
                                            <div class='text-end ms-3 me-3 mt-3'>
                                              <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                            </div>
                                              
                                              <div class='modal-body text-center'>
                                                <p class='fs-1 fw-bold'><i class='fa-solid fa-building-columns me-3'></i></p>
                                                <p class='fs-2 fw-bold'>Freelance Payment Bank</p>
                                                
                                                
                                                <p class='fs-5 mt-5 fw-semibold '>To : <i class=' ms-3 me-2 fa-solid fa-user'></i> ".$row_profile_details["user_first_name"]." ".$row_profile_details["user_last_name"]." @".$row_username["username"]."</p>
                                                
                                                <p class='fs-5 fw-semibold'>Bill Amount</p>
                                                <p class='fs-3 fw-bold mt-4'>$ ".$row_status_check["bid_amount"]."</p>
                                                
                                                <form action='myhires.php' method='get'>
                                                    <input type='text' class='d-none' name='mid_pjid' value='".$row_project_id["pjid"]."'/>
                                                    <input type='text' class='d-none' name='mid_uid' value='".$_SESSION["Uid"]."'/>
                                                    <input type='text' class='d-none' name='mid_freelancer_id' value='".$row_status_check["afjid_uid"]."'/>
                                                    <input type='text' class='d-none' name='owner_amount' value='".$row_status_check["bid_amount"]."'/>
                                                    <input type='text' class='d-none' name='net_amount' value='".$net_amount."'/>
                                                    <input type='submit' name='payment' class='btn mt-5 mb-3 text-white fw-semibold fs-4 pt-2 pb-2 ps-5 pe-5' value='Proceed' style='background-color:#00bbf2; border-radius:0px;'></input>
                                                </form>
                                              </div>
                                              
                                            </div>
                                          </div>
                                        </div>
                                        </div>
                                </div>
                                    
                                    ";
                                      }
                                      else{
                                        echo"
                                        <button type='button' class='btn btn-success fw-bold ps-5 pe-5 zoom me-3' data-bs-toggle='modal' data-bs-target='#paymodal' style='border-radius: 0px;'>
                                        <i class='fa-solid fa-sack-dollar'></i> &nbsp; Paid
                                        </button>
                                        </div>
                                        </div>
                                        ";
                                      }
                                  }
                                ?>
                                
                          </div>
                      </div>
              <?php
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
              
              }
              
              
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