<?php
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Freelance-How-it-works | Freelance</title>
     <!--Apna css -->
     <link rel="stylesheet" href="style.css">
     <title>Hire Freelancers & Find Freelance Online Jobs | Freelance</title>
     
    <script src="https://kit.fontawesome.com/467d4a99f6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
    <!-- Header starts -->

    <?php

if(isset($_SESSION["Uid"]))
{
  include 'header_loggedin.php';
}
else{
  include 'header.php';
}
?>  
  

  <!-- Header ends -->

<!--Background image  section starts-->
<div class="container-fluid how-it-works-bg">
    <div class="row pt-5">
        <div class="col-1 d-none d-md-block"></div>
        <div class="col pt-5"><h1 class="text-light fw-bold">How can Freelancers<br>help your Bussiness?</h1></div>
        <div class="col-2"></div>
        <div class="col-2 d-none d-md-block"></div>
    </div>
    <div class="row pt-5 ">
        <div class="col-1 d-none d-sm-block d-sm-none d-md-block"></div>
        <div class="col"><p class="text-light fs-4">The possibilities are endless. We have expert freelancers who work in every technical, professional, and creative field imaginable.</p></div>
        <div class="col-2"></div>
        <div class="col-4 d-none d-md-block"></div>
    </div>
    <div class="row pt-5 pb-5">
        <div class="col-1"></div>
        <div class="col p-2 zoom"><a class="btn btn-danger btn-lg pe-5 ps-5" href="post-a-project.php" role="button" style="border-radius:0px;">Post a Project</a></div>
        <div class="col-4"></div>
    </div>
    <div class="row pt-5">
        <div class="col-1"></div>
        <div class="col text-center"><input type="submit" class="btn btn-light btn-lg pe-5 ps-5 pt-3 pb-3" name="btnhire" value="How to hire a Freelancer" style="border-radius: 0;"><input type="submit" class="btn btn-primary btn-lg pe-5 ps-5 pt-3 pb-3" value="How to earn money Freelancing" style="border-radius: 0;"></div>
        <div class="col-1"></div>
    </div>
    </div>
  </div>
<!--Background image section ends-->



  <div class="container-fluid">
    <div class="row mt-5">
        <div class="col-1 d-none d-md-block"></div>
        <div class="col"><h1 class="fw-bold
            ">Choose from endless possibilities
        </h1><p class="mt-3 fs-5">Get anything done, exactly how you want it. Turn that spark of an idea into reality.</p></div>
        <div class="col-1 d-none d-md-block"></div>
    </div>
    <div class="row mt-5">
        <div class="col-1 d-none d-md-block"></div>
        <div class="col-sm"><i class="fa-solid fa-laptop-file fs-1 text-primary"></i><br><h5 class="mt-4 fw-bold">Any sized project</h5><p class="mt-3">Get any job done. From small one-off tasks to large, multi-stage projects.</p></div>
        <div class="col-sm"><i class="fa-solid fa-sack-dollar fs-1 text-primary"></i><br><h5 class="mt-4 fw-bold">Flexible payment terms</h5><p class="mt-3">Pay your freelancers a fixed price or by the hour. All secured by the Milestone Payments system.</p></div>
        <div class="col-sm"><i class="fa-solid fa-file-invoice fs-1 text-primary"></i><br><h5 class="mt-4 fw-bold">Diverse talent</h5><p class="mt-3">Choose from expert freelancers in over 1800 skill sets, from all around the globe.</p></div>
        <div class="col-1 d-none d-md-block"></div>
    </div>
    <div class="row mt-5">
        <div class="col-1"></div>
        <div class="col border-bottom"></div>
        <div class="col-1"></div>
    </div>
  </div>
  

  <div class="container-fluid mt-5">
    <div class="row">
        <div class="col-1 d-none d-md-block"></div>
        <div class="col-sm-5"><img src="images/how-it-works-mobile.webp" alt="" class="img-fluid"></div>
        <div class="col-sm-5">
            <h1 class="fw-bold">How does it work?</h1>
            <h4 class="mt-5">1. Post a project or contest</h4><p class="mt-3">Simply post a project or contest for what you need done and receive competitive bids from freelancers within minutes.</p>
            <h4 class="mt-5">2. Choose the perfect freelancer</h4><p class="mt-3">Browse freelancer profiles. Chat in real-time. Compare proposals and select the best one. Award your project and your freelancer starts work.</p>
            <h4 class="mt-5">3. Pay when you're satisfied</h4><p class="mt-3">Pay securely using our Milestone Payment system. Release payments when it has been completed and you're 100% satisfied.</p>
            <a href="post-a-project.php" class="btn btn-danger text-center mt-4 ps-5 pe-5 zoom" style="border-radius: 0px;">Post a Project</a>
        </div>
        <div class="col-1 d-none d-md-block"></div>
    </div>
    <div class="row mt-5">
        <div class="col-1"></div>
        <div class="col border-bottom"></div>
        <div class="col-1"></div>
    </div>
  </div>

  <div class="container-fluid mt-4 d-none d-md-block">
    <div class="row">
      <div class="col-1 d-none d-md-block"></div>
      <div class="col-5">
        <h1 class="mt-4 fw-bold">Be in control. Keep in contact.</h1><p class="mt-3">Use our collaboration tools to work efficiently with your freelancer. Share files, chat in real-time, monitor progress, and so much more.</p>
        <div class="row mt-5">
          <div class="col"><i class="fa-solid fa-comments fs-1"></i><h4 class="mt-4 fw-bold">Live chat</h4><p class="mt-3">You can live chat with your freelancers to ask questions, share feedback and get constant updates on the progress of your work.</p></div>
          <div class="col"><i class="fa-solid fa-mobile-screen fs-1"></i><h4 class="mt-4 fw-bold">Mobile App</h4><p class="mt-3">Manage your project at the touch of your fingertips. The mobile app makes on-the-go collaboration a breeze.</p></div>
        </div>
      </div>
      <div class="col-5"><img src="images/how-it-works-mobile2.webp" alt="" class="img-fluid"></div>
      <div class="col-1 d-none d-md-block"></div>
    </div>
    <div class="row mt-5">
        <div class="col-1"></div>
        <div class="col border-bottom"></div>
        <div class="col-1"></div>
    </div>
</div>

<div class="container-fluid mt-4 d-block d-md-none">
    <div class="row">
      <div class="col-1 d-none d-md-block"></div>
      <div class="col-sm-5"><img src="images/how-it-works-mobile2.webp" alt="" class="img-fluid"></div>
      <div class="col-sm-5">
        <h1 class="mt-4 fw-bold">Be in control. Keep in contact.</h1><p class="mt-3">Use our collaboration tools to work efficiently with your freelancer. Share files, chat in real-time, monitor progress, and so much more.</p>
        <div class="row mt-5">
          <div class="col"><i class="fa-solid fa-comments fs-1"></i><h4 class="mt-4 fw-bold">Live chat</h4><p class="mt-3">You can live chat with your freelancers to ask questions, share feedback and get constant updates on the progress of your work.</p></div>
          <div class="col"><i class="fa-solid fa-mobile-screen fs-1"></i><h4 class="mt-4 fw-bold">Mobile App</h4><p class="mt-3">Manage your project at the touch of your fingertips. The mobile app makes on-the-go collaboration a breeze.</p></div>
        </div>
      </div>
      <div class="col-1 d-none d-md-block"></div>
    </div>
    <div class="row mt-5">
        <div class="col-1"></div>
        <div class="col border-bottom"></div>
        <div class="col-1"></div>
    </div>
</div>



<div class="container-fluid mt-4">
    <div class="row">
      <div class="col-1 d-none d-md-block"></div>
      <div class="col-sm-5"><img src="images/how-it-works-mobile3.webp" alt="" class="img-fluid"></div>
      <div class="col-sm-5">
        <h1 class="mt-4 fw-bold">Safe and secure</h1><p class="mt-3">Freelance.com is a community that values your trust and safety as our number one priority. Our representatives are available 24/7 to assist you with any issues.</p>
        <div class="row mt-5">
          <div class="col"><i class="fa-brands fa-paypal fs-1"></i><h4 class="mt-4 fw-bold">Pay with confidence</h4><p class="mt-3">Pay safely and securely in over 39 currencies through the Milestone Payments system. Only release payments when you are satisfied with the work.</p></div>
          <div class="col"><i class="fa-regular fa-life-ring fs-1"></i><h4 class="mt-4 fw-bold">24/7 support</h4><p class="mt-3">We're always here to help. Our representatives are available 24/7 to assist you with any issues.</p></div>
        </div>
      <div class="col-1 d-none d-md-block"></div>
    </div>
    <div class="row mt-5">
        <div class="col-1"></div>
        <div class="col border-bottom"></div>
        <div class="col-1"></div>
    </div>
</div>

    <div class="container-fluid mt-5 bg-dark">
        <div class="row pt-5">
            <div class="col-1 d-none d-md-block"></div>
            <div class="col"><h1 class="text-light fw-bold">So what are you waiting for?</h1><br><p class="text-light fs-4">Post a project today and get bids from talented freelancers.
            </p></div>
        </div>
        <div class="row mt-5 pb-5">
            <div class="col-1 d-none d-md-block"></div>
            <div class="col zoom"><a href="post-a-project.php" class="btn btn-lg btn-danger ps-5 pe-5" style="border-radius:0px;">Post a Project</a></div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-1 d-none d-md-block"></div>
            <div class="col"><h1>Still not convinced? Check out the results!</h1><br><p class="fs-4">Here are just some of the things you could get done on Freelancer.com. For more completed projects, visit our Project Showcase.
            </p></div>
            <div class="col-1 d-none d-md-block"></div>
        </div>
        <div class="row mt-5">
            <div class="col-1 d-none d-md-block"></div>
            <div class="col-sm zoom"><img src="images/logo-design1.png" alt="" class="img-fluid select"><br><h4 class="mt-3">Logo Design.<br>
            $30 USD in 1 day.</h4></div>
            <div class="col-sm zoom"><img src="images/package-design1.jpg" alt="" class="img-fluid select"><br><h4 class="mt-3">Package Design.<br>
                $280 USD in 4 days.</h4></div>
            <div class="col-sm zoom"><img src="images/mobile-design1.jpg" alt="" class="img-fluid select"><br><h4 class="mt-3">Mobile Design.<br>
                $600 USD in 4 days.</h4></div>
            
            <div class="col-1 d-none d-md-block"></div>    
        </div>
        <div class="row mt-5">
            <div class="col-1 d-none d-md-block"></div>
            <div class="col-sm zoom "><img src="images/wordpress1.png" alt="" class="img-fluid select"><br><h4 class="mt-3">Wordpress.<br>
                $45 USD in 1 day.</h4></div>
            <div class="col-sm zoom "><img src="images/interior-design1.png" alt="" class="img-fluid select"><br><h4 class="mt-3">Interior Design.<br>
            $100 USD in 3 day.</h4></div>
            <div class="col-sm zoom "><img src="images/website1.png" alt="" class="img-fluid select"><br><h4 class="mt-3">Website.<br>
            $150 USD in 1 day.</h4></div>
            <div class="col-1 d-none d-md-block"></div>
        </div>    
        <div class="row mt-5 d-none d-md-block">
            <div class="col-1 "></div>
            <div class="col-6 text-center mx-auto zoom"><a class="btn btn-danger btn-lg" href="#" role="button">View More Projects</a></div>
            <div class="col-1 "></div>
        </div>
        <div class="row mt-5 d-block d-md-none">
            <div class="col-12 text-center d-grid mx-auto zoom"><a class="btn btn-danger btn-lg" href="#" role="button">View More Projects</a></div>
        </div>
    </div>

    <div class="container-fluid mt-5" style="background-color: #1f2836;">
        <div class="row pt-4">
            <div class="col-1 d-none d-md-block"></div>
            <div class="col"><h1 class="text-light">Additional Help</h1><br><p class="fs-4 text-light">Not sure where to start? Check out the links below:</p></div>
            <div class="col-1 d-none d-md-block"></div>
        </div>
        <div class="row pt-3">
            <div class="col-1 d-none d-md-block"></div>
            <div class="col zoom"><a href="#" class="text-light" style="text-decoration: underline;"><p class="fs-4">How to Hire with Freelancer.com</p></a></div>
            <div class="col zoom"><a href="#" class="text-light" style="text-decoration: underline;"><p class="fs-4">Tips for posting projects</p></a></div>
            <div class="col-1 d-none d-md-block"></div>
        </div>
        <div class="row pt-3 pb-5">
            <div class="col-1 d-none d-md-block"></div>
            <div class="col zoom"><a href="#" class="text-light" style="text-decoration: underline;"><p class="fs-4">How to Select the Right Bidder</p></a></div>
            <div class="col zoom"><a href="#" class="text-light" style="text-decoration: underline;"><p class="fs-4">Milestone Payments</p></a></div>
            <div class="col-1 d-none d-md-block"></div>
        </div>
    </div>
<!-- Footer starts -->
    <?php include 'footer.php';?>
    <!-- Footer ends -->

<!-- sign up pop up window starts -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="signupModalLabel">Sign Up</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <form>
        <div class="form-group p-1">
            <label for="txtname" class="form-label">Full Name</label>
            <input type="text" class="form-control m-1" id="txtname" placeholder="Enter your name" required>
        </div>
        <div class="form-group p-1">
            <label for="txtmail" class="form-label">Email</label>
            <input type="email" class="form-control m-1" id="txtmail-" placeholder="Enter your e-maail address" required>
        </div>
        <div class="form-group p-1">
            <label for="set-password" class="form-label">Set Password</label>
            <input type="password" class="form-control m-1" id="set-password" placeholder="Enter password" required>
        </div>
        <div class="form-group p-1">
            <label for="confirm-password" class="form-label">Confirm Password</label>
            <input type="password" class="form-control m-1" id="confirm-password" placeholder="Re-enter password" required>
        </div>
        <div class="mb-3 form-check mt-3">
          <input type="checkbox" class="form-check-input" id="signupCheck1" required>
          <label class="form-check-label" for="signupCheck1">
            I agree to Freelance's <a href="#" class="text-danger select">Terms of Service</a>, <a href="#" class="text-danger select">Privacy Policy</a> and <a href="#" class="text-danger select">Content Policies</a> </label>
        </div>
        
        <div class="form-group p-1">
          <input type="button" class="btn btn-lg form-control m-1 btn-danger" id="txtsubmit" value="Join Freelance">
      </div>
      </form>
    </div>
    <div class="modal-footer">
      <p class="mx-auto">Already a Member? <span class="text-danger select"><a data-bs-toggle="modal" data-bs-target="#loginModal">Log in</a></span> </p>
    </div>
  </div>
</div>
</div>
<!--Sign up pop up window ends-->

<!--Login pop up starts-->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title " id="loginModalLabel">Welcome back !</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <form>
        <div class="form-group p-1">
            <label for="txtmail" class="form-label">Email</label>
            <input type="email" class="form-control m-1" id="txtmail" placeholder="Enter your e-mail address" required>
        </div>
        <div class="form-group p-1">
            <label for="txtpass" class="form-label">Password</label>
            <input type="password" class="form-control m-1" id="txpass" placeholder="Enter password" required>
        </div>
        
        <div class="form-group p-1">
          <input type="button" class="btn btn-lg btn-danger form-control m-1" id="txtlogin" value="Log in">
      </div>
      </form>
    </div>
    <div class="modal-footer">
      <p class="mx-auto">New to Freelance?<span class="text-danger select"> <a data-bs-toggle="modal" data-bs-target="#signupModal">Create account</a> </span> </p>
    </div>
  </div>
</div>
</div>
<!--Login pop up ends-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>