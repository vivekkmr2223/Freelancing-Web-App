<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
if(isset($_SESSION["Uid"]))
{
  
  ?>
<!doctype html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/467d4a99f6.js" crossorigin="anonymous"></script>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>
  
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
  <body style="background-color:#f2f2f2;">

  <!--Logo section starts -->
  <?php
  include 'dashboard_header.php';
  ?>
<!--Logo section ends-->

    <div class="container-fluid" style="background-color: #007fed;">
      <div class="row pt-3 pb-3">
        <div class="col-1 d-none d-md-block"></div>
        <div class="col-3 text-light"><h1>Top Jobs</h1></div>
        <div class="col-4 d-none d-md-block"></div>
        <div class="col-1 d-none d-md-block"></div>
      </div>
    </div>
    <form action="job_search.php" method="POST" name="search_jobs_form">
    <div class="container-fluid pt-4">
      <div class="row">
        <div class="col-1"></div>
        <div class="col-1 d-none d-md-block"></div>
        <div class="col">
          <form action="browsejobs.php" method="post" name="" id="search_jobs_form">
        <div class="input-group mb-3">
          <span class="input-group-text bg-white" style="border-radius: 0px; border-right: 0px;"><i class="fa-solid fa-magnifying-glass"></i></span>
          <input type="text" class="form-control" placeholder="Search Keyword" name="browse_jobs_search_keyword" id="" value="" style="border-left: 0px;">
          <input type="submit" class="btn fw-bold text-light pe-4 ps-4" name="browse_jobs_search_keyword_submit" id="search_btn" style="background-color: #007fed; border-radius: 0px;" value="Search">
        </div>
      </form>

        </div>
        <div class="col-1 d-none d-md-block"></div>
        <div class="col-1"></div>
      </div>
    </div>
  </form>

  <form action="browsejobs.php" id="" method="GET">
  <div class="container-fluid mt-3">
    <div class="row mb-4">
      <div class="col-1 d-none d-md-block"></div>
      <div class="col-md-3">
        <div class="bg-white p-4 shadow mt-4">
        <p class="fw-bold fs-2 ">Filters</p>
        <hr>
        <p class="fw-bold fs-4">Fixed Price</p>
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
          <input type="text" class="form-control" placeholder="Search Skills" name="" id="" value="" style="border-left: 0px; border-right: 0px;">
          <input type="submit" class="btn fw-bold text-light" name="browse_jobs_search_keyword_submit" id="" style="background-color: #007fed; border-radius: 0px;" value="Search">
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
          <label for="" class="mt-3 fw-bold fs-5">Project Location</label>
          <div class="input-group mb-2">
          <input type="text" class="form-control" placeholder="Enter a location" name="" id="" value="" style=" border-right: 0px; border-radius: 0px;">
          <span class="input-group-text bg-white" style="border-radius: 0px; border-left: 0px;"><i class="fa-solid fa-location-dot"></i></span>
          </div>
          <label for="" class="mt-3 fw-bold fs-5">Client's Country</label>
          <div class="input-group mb-2 mb-3">
            <span class="input-group-text bg-white" style="border-radius: 0px; border-right: 0px;"><i class="fa-solid fa-magnifying-glass"></i></span>
          <input type="text" class="form-control" placeholder="Enter a location" name="" id="" value="" style="border-left: 0px; border-radius: 0px;">.
          </div>  
        </div>
      </div>
</form>
        <div class='col-md bg-white ms-2 mt-4 shadow'>
        <?php
          include 'db_freelance.php';
          $qry3="SELECT pjid FROM postjob_details";
          $result3=mysqli_query($con,$qry3);

          $len=0;
          while($row3=mysqli_fetch_array($result3))
          {
            $len++;
          }
          $total_page=ceil($len/10);

          $qry4="SELECT * FROM postjob_details ORDER BY pjid DESC";
          $result4=mysqli_query($con,$qry4);
          while($row4=mysqli_fetch_array($result4))
          {
            echo "
            <div class='row'>
              <div class='row mt-4 ms-2 '>
                <div class='col-7'>
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
                <div class='col-md-4'><span class='fs-5'><?php
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
              <div class='col-2 d-none d-sm-block'></div>
              <div class='col-2 d-none d-md-block'></div>
              <div class='col zoom'><a href='bid.php?pjid=<?php echo $row4["pjid"];?>' class='text-white fw-bold btn form-control pe-3 ps-3' style='background-color: #007fed; border-radius: 0px;'>Bid</a></div>
              <div class='col-2 d-none d-md-block'></div>
              <div class='col-2 d-none d-sm-block'></div>
              </div>
              <div class='row'>
                
                <div class='col' style='border-bottom:2px solid #dcdcdc'></div>
                
              </div>
              </div>
              
              
              
        <?php
          }
          
        ?>
        </div>
        
      <div class="col-1"></div>
    </div>
  </div>
  <?php
  
    include 'footer.php';
  ?>
<?php
}
else{
  header("Location:login.php");
  
}
  ?>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8' crossorigin='anonymous'></script>
  </body>
</html>