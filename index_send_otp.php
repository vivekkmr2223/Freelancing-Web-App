<!doctype html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Sign Up</title>
    <script src='https://kit.fontawesome.com/467d4a99f6.js' crossorigin='anonymous'></script>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx' crossorigin='anonymous'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style>
        body{
            background-color: #f2f2f2;
        }
    </style>
  </head>
  <body>
    <form action='index_send_otp.php' method="GET">
    <div class='container-fluid mt-5'>
      <div class='row mt-5'>
        <div class='col d-none d-md-block'></div>
        <div class='col pt-4 bg-light text-center shadow-sm pb-3'>
          <img src='images/logo-removebg-preview.png' alt='' class='logo'style="height: 50px; width: 200px;">
          <h1 class='pt-4 pb-4 '>Welcome</h1>
          <input type='email' name='otp_email' id='otp_email' class='form-control mt-4' placeholder='Enter Email' required>
          <input type='submit' class='btn btn-lg form-control btn-primary mb-3 mt-5 fw-bold' name='send_otp' value='Send OTP'><hr>
          <span>Already have an account?<a href='login.php'>Log in</a></span>
        </div>
        <div class='col d-none d-md-block'></div>
      </div>
    </div>
    <!-- <script>
            function send_otp(){
                var email = jQuery('#otp_email').val();
                jQuery.ajax({
                    url:'send_otp.php',
                    type: 'get',
                    data: 'email='+email,
                    success:function(result){

                    }
                })
            }
        </script> -->
    </form>
    
        <?php
          if(isset($_REQUEST["send_otp"])){
            $signup_email=$_REQUEST["otp_email"];
            $flag=0;
            include 'db_freelance.php';
            $qry1="SELECT uemail FROM signup_details";
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
                break;
              }
            }

            if($flag==0){
              
                $otp = rand(11111,99999);
                mysqli_query($con,"INSERT INTO otp() VALUES(null,'$signup_email','$otp')");
                $html="Your OTp verification code is: ".$otp;
                

                function smtp_mailer($to,$subject, $msg){
                  require("smtp/class.phpmailer.php");
                  $mail = new PHPMailer(); 
                  $mail->IsSMTP(); 
                  $mail->SMTPDebug = 1; 
                  $mail->SMTPAuth = true; 
                  $mail->SMTPSecure = 'TLS'; 
                  $mail->Host = "smtp.sendgrid.net";
                  $mail->Port = 587; 
                  $mail->IsHTML(true);
                  $mail->CharSet = 'UTF-8';
                  $mail->Username = "vishalphpyt@gmail.com";
                  $mail->Password = "php@12345";
                  $mail->SetFrom("vishalphpyt@gmail.com");
                  $mail->Subject = $subject;
                  $mail->Body =$msg;
                  $mail->AddAddress($to);
                  if(!$mail->Send()){
                    return 0;
                  }else{
                    return 1;
                  }
                }
                smtp_mailer($signup_email,'OTP Verification',$html);
            }
          }
        ?>

        <?php
          
          include 'style.php';
          ?>
          
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa' crossorigin='anonymous'></script>
  </body>
</html>