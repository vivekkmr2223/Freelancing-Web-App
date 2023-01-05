<!doctype html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Sign Up</title>
    <script src='https://kit.fontawesome.com/467d4a99f6.js' crossorigin='anonymous'></script>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx' crossorigin='anonymous'>
    <style>
        body{
            background-color: #f2f2f2;
        }
    </style>
  </head>
  <body>
    <form action="signup.php" name="signupform" method="GET">
    <div class='container-fluid '>
      <div class='row mt-3 '>
        <div class='col d-none d-md-block'></div>
        <div class='col pt-4 bg-light text-center shadow-sm'>
          <img src='images/logo-removebg-preview.png' alt='' class='logo'style="height: 50px; width: 200px;">
          <h1 class='pt-4 pb-4 '>Welcome</h1>
          <input type="text" name='txtusername' class='form-control mt-4' placeholder='Enter Username'>
          <input type='email' name='signupmail' class='form-control mt-4' placeholder='Enter Email'>
          <input type='password' name='signuppass' class='form-control mt-3'  placeholder='Password'>
          <div class='mt-3 mb-3'>
          <input type='checkbox' class='form-check-input' id='Check1' required>
                <label class='form-check-label ' for='Check1'>I agree to the Freelancer <a href="#">User Agreement</a> and <a href="#">Privacy Policy</a>.</label>
          </div>
               
             
          <input type='submit' class='btn btn-lg form-control btn-primary mb-3 fw-bold' name='btnsignup' value='Join Freelance'><hr>
          <span class='mb-5'>Already have an account?<a href='login.php'>Log in</a></span>
        </div>
        <div class='col d-none d-md-block'></div>
      </div>
    </div>
    </form>
    
    <?php
          
          if(isset($_REQUEST["btnsignup"])){
              $signup_email=$_REQUEST["signupmail"];
              $signup_pass=$_REQUEST["signuppass"];
              $signup_pass_hash = password_hash($signup_pass,PASSWORD_DEFAULT);
              $signup_user=$_REQUEST["txtusername"];
              $flag=0;
              include 'db_freelance.php';
              $qry1="SELECT uemail,username FROM signup_details";
              $result=mysqli_query($con,$qry1);
              while($row=mysqli_fetch_array($result)){
                if($row["uemail"]==$signup_email){
                  echo "
                  <div class='container-fluid'>
                    <div class='row'>
                    <div class='col'></div>
                    <div class='col'>
                    <p class='text-danger mt-3 text-center'>Email Already exists , please log in</p>
                    </div>
                    <div class='col'></div>
                    </div>
                  </div>
                  
                  ";
                  $flag=1;
                  exit();
                }
                if($row["username"]==$signup_user){
                  echo "
                  <div class='container-fluid'>
                    <div class='row'>
                    <div class='col'></div>
                    <div class='col'>
                    <p class='text-danger mt-3 text-center'>Username Already exists , please enter another name</p>
                    </div>
                    <div class='col'></div>
                    </div>
                  </div>
                  
                  ";
                  $flag=1;
                  exit();
                }

              }
              if($flag==0){
                include 'db_freelance.php';
                  $join_date = date("M d, Y");
                  $qry2="INSERT INTO signup_details() VALUES(null,'$signup_user','$signup_email','$signup_pass_hash','$join_date')";
                  mysqli_query($con,$qry2);
                  $qry3="SELECT uid FROM signup_details WHERE uemail='$signup_email'";
                  $result_middle=mysqli_query($con,$qry3);
                  $row_middle=mysqli_fetch_array($result_middle);
                  $row_middle_uid=$row_middle["uid"];
                  header("Location:middle.php?row_middle=$row_middle_uid");

              }
              
              
          }
          include 'style.php';
          ?>
          
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa' crossorigin='anonymous'></script>
  </body>
</html>