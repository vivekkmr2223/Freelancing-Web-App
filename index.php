<?php
session_start();
if(isset($_SESSION["Uid"]))
{
?>  
<!doctype html>
<html lang='en'>
  <head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- Bootstrap CSS -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx' crossorigin='anonymous'>

    <script src='https://kit.fontawesome.com/467d4a99f6.js' crossorigin='anonymous'></script>
    <!--Apna css -->
    <link rel='stylesheet' href='style.css'>
    <script src="index.js"></script>
    <style>
       .zoom {
        transition: transform 0.2s; 
        margin: 0 auto;
        }
        .zoom:hover {
            transform: scale(1.12);
        }
  </style>
    <title>Hire Freelancers & Find Freelance Online Jobs | Freelance</title>
    
  </head>
  
  <body title='Hire Freelancers and Find Freelance Jobs Online'>

<!-- Header starts -->
    
<?php include 'header_loggedin.php';?>

<!-- Header ends -->


<!--Background image  section starts-->
      <div class='container-fluid bi'>
      
        <div class='row pt-5'>
            <div class='col-1 d-none d-sm-block d-sm-none d-md-block'></div>
            <div class='col pt-5'><h1>Hire the best <br>freelancers for any job, <br>online.</h1></div>
        </div>
        <div class='row pt-5 '>
            <div class='col-1 d-none d-sm-block d-sm-none d-md-block'></div>
            <div class='col'><p class='fs-3'>Millions of people use freelance.com to turn their ideas into reality</p></div>
            <div class='col-5'></div>
        </div>
        <div class='row pt-5 pb-5'>
            <div class='col-1 d-none d-sm-block d-sm-none d-md-block'></div>
            <div class='col p-2 d-none d-md-block zoom'><a class='btn btn-danger btn-lg' href='hire_freelancer.php' role='button' style="border-radius:0px;">Hire a Freelancer</a></div>
            <div class='col-4 pb-5 p-2 d-none d-md-block zoom'><a class='btn btn-dark btn-lg transparent' href='browsejobs.php' role='button' style="border-radius:0px;">Earn Money Freelancing</a></div>
            <div class='col-4 d-none d-sm-block d-sm-none d-md-block'></div>
        </div>
        <div class='row pt-2 pb-5 '>
            <div class='d-grid gap-2 col-12 mx-auto'>
                <a class='btn btn-danger d-block d-md-none zoom' href='hire_freelancer.php' role='button' style="border-radius:0px;">Hire a Freelancer</a>
                <a class='btn btn-dark d-block d-md-none zoom' href='browsejobs.php' role='button' style="border-radius:0px;">Earn Money Freelancing</a>
            </div>
        </div>
      </div>
<!--Background image section ends-->

<!--Sponsor section starts-->
      <div class='container-fluid  text-center overflow-auto mt-4'>
        <div class='row' >
            <div class='col-1 d-none d-md-block'></div>
            <div class='col'><img src='images/sponsors2.png' alt=''></div>
        </div>
        <div class='row mt-4'>
            <div class='col-1 '></div>
            <div class='col border-bottom border-secondary pt-4'></div>
            <div class='col-1 '></div>
        </div>
    </div>
<!--Sponsor section ends-->

<!--Summary section starts-->
      
      <div class='container-fluid mt-4'>
        <div class='row'>
            <div class='col-1 d-none d-md-block'></div>
            <div class='col'><h1>Need something done?</h1></div>
        </div>
        <div class='row mt-5'>
            <div class='col-1 d-none d-md-block'></div>

            <div class='col-sm'><i class='fa-solid fa-laptop-file fs-1'></i><h3 class='d-inline p-4'>Post a job</h3><p class='fs-5 mt-3'>It's free and easy to post a job. Simply fill in a title, description and budget and competitive bids come within minutes.</p></div>

            <div class='col-sm'><i class='fa-solid fa-desktop fs-1 '></i><h3 class='d-inline p-4'>Choose freelancers</h3><p class='mt-3'>No job is too big or too small. We've got freelancers for jobs of any size or budget, across 1800+ skills. No job is too complex. We can get it done!</p></div>
            <div class='col-1 d-none d-md-block'></div>
        </div>
        <div class='row mt-2'>
            <div class='col-1 d-none d-md-block'></div>
            <div class='col-sm'><i class='fa-solid fa-user-lock fs-1'></i><h3 class='d-inline p-4'>Pay safely</h3><p class='fs-5 mt-3'>Only pay for work when it has been completed and you're 100% satisfied with the quality using our milestone payment system.</p></div>

            <div class='col-sm'><i class='fa-solid fa-circle-question fs-1'></i><h3 class='d-inline p-4 '>
                We're here to help</h3><p class='fs-5 mt-3'>Our talented team of recruiters can help you find the best freelancer for the job and our technical co-pilots can even manage the project for you.</p></div>
                <div class='col-1 d-none d-md-block'></div>
        </div>
        </div>

        <div class='container-fluid mt-5'>
            <div class='row'>
                <div class='col-1 d-none d-md-block'></div>
                <div class='col'><h1>What's great about it?</h1></div>
            </div>
            <div class='row mt-5'>
                <div class='col-1 d-none d-md-block'></div>
    
                <div class='col-sm'><i class='fa-solid fa-globe fs-1'></i><h3 class='d-inline p-4'>Browse portfolios</h3><p class='fs-5 mt-3'>Find professionals you can trust by browsing their samples of previous work and reading their profile reviews.</p></div>
    
                <div class='col-sm'><i class='fa-solid fa-hand-holding-dollar fs-1'></i><h3 class='d-inline p-4'>
                    Fast bids</h3><p class='fs-5 mt-3'>Receive obligation free quotes from our talented freelancers fast. 80% of projects get bid on within 60 seconds.</p></div>
                <div class='col-1 d-none d-md-block'></div>
            </div>
            <div class='row mt-2'>
                <div class='col-1 d-none d-md-block'></div>
                <div class='col-sm'><i class='fa-solid fa-medal fs-1'></i><h3 class='d-inline p-4'>Quality work</h3><p class='fs-5 mt-3'>Freelancer.com has by far the largest pool of quality freelancers globally- over 50 million to choose from.
                </p></div>
    
                <div class='col-sm'><i class='fa-solid fa-chart-line fs-1'></i><h3 class='d-inline p-4 '>
                    Track progress</h3><p class='fs-5 mt-3'>Keep up-to-date and on-the-go with our time tracker, and mobile app. Always know what freelancers are up to.</p></div>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='row mt-4'>
                        <div class='col-1 '></div>
                        <div class='col border-bottom border-secondary pt-4'></div>
                        <div class='col-1 '></div>
                    </div>
            </div>
            </div>

<!--Summary section ends-->            

<!--Discover more section starts-->

            <div class='container-fluid mt-5'>
                <div class='row'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col'><h1>Make it Real with Freelance.</h1></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col'><p class='fs-4'>Get some Inspirations from 1800+ skills</p></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-5'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col-sm zoom'><img src='images/logo-design1.png' alt='' class='img-fluid select'><br><h4 class='mt-3'>Logo Design.<br>
                    $30 USD in 1 day.</h4></div>
                    <div class='col-sm zoom'><img src='images/package-design1.jpg' alt='' class='img-fluid select'><br><h4 class='mt-3'>Package Design.<br>
                        $280 USD in 4 days.</h4></div>
                    <div class='col-sm zoom'><img src='images/mobile-design1.jpg' alt='' class='img-fluid select'><br><h4 class='mt-3'>Mobile Design.<br>
                        $600 USD in 4 days.</h4></div>
                    <div class='col-sm d-none d-md-block zoom'><img src='images/wordpress1.png' alt='' class='img-fluid select'><br><h4 class='mt-3'>Wordpress.<br>
                    $45 USD in 1 day.</h4></div>
                    <div class='col-1 d-none d-md-block'></div>    
                </div>
                <div class='row mt-5'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col-sm d-none d-md-block zoom'><img src='images/logo-design2.png' alt='' class='img-fluid select'><br><h4 class='mt-3'>Logo Design.<br>
                    $30 USD in 1 day.</h4></div>
                    <div class='col-sm d-none d-md-block zoom'><img src='images/website1.png' alt='' class='img-fluid select'><br><h4 class='mt-3'>Website.<br>
                    $150 USD in 1 day.</h4></div>
                    <div class='col-sm d-none d-md-block zoom'><img src='images/website2.png' alt='' class='img-fluid select'><br><h4 class='mt-3'>Website Design.<br>
                    $140 USD in 13 day.</h4></div>
                    <div class='col-sm d-none d-md-block zoom'><img src='images/illustration.jpg' alt='' class='img-fluid select'><br><h4 class='mt-3'>Illustration.<br>
                    $10 USD in 3 day.</h4></div>
                    <div class='col-1 d-none d-md-block'></div>    
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col-sm d-none d-md-block zoom'><img src='images/wordpress2.jpg' class='img-fluid select' alt='this is a responsive image'><h4 class='mt-3 bolder'>WordPress.<br>
                        $150 USD in 18 days.</h4></div>
                    <div class='col-sm d-none d-md-block zoom'><img src='images/package-design2.png' class='img-fluid select' alt='this is a responsive image'><h4 class='mt-3 bolder'>Package Design.<br>
                        $100 USD in 6 days.</h4></div>
                    <div class='col-sm d-none d-md-block zoom'><img src='images/mobile-design2.jpg' class='img-fluid select' alt='this is a responsive image'><h4 class='mt-3 bolder'>Mobile Design.<br>
                        $100 USD in 1 day.</h4></div>
                    <div class='col-sm d-none d-md-block zoom'><img src='images/package-design3.jpg' class='img-fluid select' alt='this is a responsive image'><h4 class='mt-3 bolder'>Package Design.<br>
                        $155 USD in 2 days.</h4></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
    
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col-sm d-none d-md-block zoom'><img src='images/website3.png' class='img-fluid select' alt='this is a responsive image'><h4 class='mt-3 bolder'>Website.<br>
                        $200 USD in 9 days.</h4></div>
                    <div class='col-sm zoom'><img src='images/3d-modeling.png' class='img-fluid select' alt='this is a responsive image'><h4 class='mt-3 bolder'>3D Modeling.<br>
                        $110 USD in 28 days.</h4></div>
                    <div class='col-sm zoom'><img src='images/logo-design3.jpg' class='img-fluid select' alt='this is a responsive image'><h4 class='mt-3 bolder'>Logo Design.<br>
                        $20 USD in 3 days.</h4></div>
                    <div class='col-sm zoom'><img src='images/graphic-design.png' class='img-fluid select' alt='this is a responsive image'><h4 class='mt-3 bolder'>Graphic Design.<br>
                        $60 USD in 10 days.</h4></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-5 d-none d-md-block'>
                    <div class='col-1 '></div>
                    <div class='col-6 text-center mx-auto zoom'><a class='btn btn-danger btn-lg' href='#' role='button' style="border-radius:0px;">View More Projects</a></div>
                    <div class='col-1 '></div>
                </div>
                <div class='row mt-5 d-block d-md-none'>
                    <div class='col-12 text-center d-grid mx-auto zoom'><a class='btn btn-danger btn-lg' href='#' role='button' style="border-radius:0px;">View More Projects</a></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1'></div>
                    <div class='col border-bottom border-secondary pt-4'></div>
                    <div class='col-1'></div>
                </div>
            </div>

<!--Discover more section ends-->

<!--Icon section starts-->

            <div class='container-fluid mt-5'>
                <div class='row'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col'><h1>Get work done in over 1800 different categories</h1></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-5'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col zoom'><a href=''><i class='fa-solid fa-desktop fs-4'></i><span class='p-2 text-dark'> Website Design</span></a></div>
                    <div class='col d-none d-md-block zoom'><a href='#'><i class='fa-solid fa-book-open fs-4'></i><span class='p-2 text-dark'> Research Writing</span></a></div>
                    <div class='col d-none d-md-block zoom'><a href='#'><i class='fa-solid fa-shield-halved fs-4'></i><span class='p-2 text-dark'> Legal</span></a></div>
                    <div class='col zoom'><a href='#'><i class='fa-solid fa-pencil fs-4'></i><span class='p-2 text-dark'> Illustration</span></a></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col zoom'><a href='#'><i class='fa-solid fa-mobile-screen-button fs-3'></i><span class='p-2 text-dark'> Mobile Apps</span></a></div>
                    <div class='col d-none d-md-block zoom'><a href='#'><i class='fa-solid fa-clipboard fs-3'></i><span class='p-2 text-dark'> Article Writing</span></a></div>
                    <div class='col d-none d-md-block zoom'><a href='#'><i class='fa-brands fa-linux fs-3'></i><span class='p-2 text-dark'> Linux</span></a></div>
                    <div class='col zoom'><a href='#'><i class='fa-solid fa-file-code fs-3'></i><span class='p-2 text-dark'> Software Dev.</span></a></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col zoom'><a href='#'><i class='fa-brands fa-android fs-3'></i><span class='text-dark p-2'> Android Apps</span></a></div>
                    <div class='col d-none d-md-block zoom'><a href='#'><i class='fa-solid fa-laptop-medical fs-4'></i><span class='text-dark p-2'> Web Scraping</span></a></div>
                    <div class='col d-none d-md-block zoom'><a href='#'><i class='fa-solid fa-house fs-4'></i><span class='text-dark p-2'> Manufacturing</span></a></div>
                    <div class='col zoom'><a href='#'><i class='fa-brands fa-php fs-3'></i><span class='text-dark p-2'> PHP</span></a></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col zoom'><a href='#'><i class='fa-brands fa-apple fs-3'></i><span class='text-dark p-2'> iPhone Apps</span></a></div>
                    <div class='col d-none d-md-block zoom'><a href='#'><i class='fa-solid fa-code fs-4'></i><span class='text-dark p-2'> HTML</span></a></div>
                    <div class='col d-none d-md-block zoom'><a href='#'><i class='fa-brands fa-aws fs-4'></i><span class='text-dark p-2'> AWS</span></a></div>
                    <div class='col zoom'><a href='#'><i class='fa-solid fa-cube fs-4'></i><span class='text-dark p-2'> 3D Modeling</span></a></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col zoom'><a href='#'><i class='fa-solid fa-laptop fs-4'></i><span class='text-dark p-2'> Software Arch.</span></a></div>
                    <div class='col d-none d-md-block zoom'><a href='#'><i class='fa-brands fa-css3-alt fs-3'></i><span class='text-dark p-2'> CSS</span></a></div>
                    <div class='col d-none d-md-block zoom'><a href='#'><i class='fa-solid fa-pen-nib fs-4'></i><span class='text-dark p-2'> Content Writing</span></a></div>
                    <div class='col zoom'><a href='#'><i class='fa-solid fa-images fs-4'></i><span class='text-dark p-2'> Photoshop</span></a></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col zoom'><a href='#'><i class='fa-solid fa-pen fs-4'></i><span class='text-dark p-2'> Graphic Design</span></a></div>
                    <div class='col d-none d-md-block zoom'><a href='#'><i class='fa-brands fa-html5 fs-3'></i><span class='text-dark p-2'> HTML 5</span></a></div>
                    <div class='col d-none d-md-block zoom'><a href='#'><i class='fa-regular fa-lightbulb fs-4'></i><span class='text-dark p-2'> Marketing</span></a></div>
                    <div class='col zoom'><a href='#'><i class='fa-solid fa-compass-drafting fs-4'></i><span class='text-dark p-2'> Technical Writing</span></a></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col zoom'><a href='#'><i class='fa-solid fa-ranking-star fs-4'></i><span class='p-2 text-dark'> Logo Design</span></a></div>
                    <div class='col d-none d-md-block zoom'><a href='#'><i class='fa-brands fa-js fs-3'></i><span class='p-2 text-dark'> Javascript</span></a></div>
                    <div class='col d-none d-md-block zoom'><a href='#'><i class='fa-solid fa-chart-simple fs-4'></i><span class='p-2 text-dark'> Excel</span></a></div>
                    <div class='col zoom'><a href='#'><i class='fa-solid fa-blog fs-4'></i><span class='p-2 text-dark'> Blogging</span></a></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col zoom'><a href='#'><i class='fa-solid fa-arrow-right-arrow-left fs-4'></i><span class='p-2 text-dark'> Public Relations</span></a></div>
                    <div class='col d-none d-md-block zoom'><a href='#'><i class='fa-solid fa-cubes-stacked fs-4'></i><span class='p-2 text-dark'> Data Processing</span></a></div>
                    <div class='col d-none d-md-block zoom'><a href='#'><i class='fa-regular fa-file-lines fs-4'></i><span class='p-2 text-dark'> Ghostwriting</span></a></div>
                    <div class='col zoom'><a href='#'><i class='fa-solid fa-globe fs-4'></i><span class='p-2 text-dark'> Internet Marketing</span></a></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col zoom'><a href='#'><i class='fa-solid fa-truck fs-4'></i><span class='p-2 text-dark'> Logistics</span></a></div>
                    <div class='col d-none d-md-block zoom'><a href='#'><i class='fa-brands fa-python fs-4'></i><span class='p-2 text-dark'> Python</span></a></div>
                    <div class='col d-none d-md-block zoom'><a href='#'><i class='fa-solid fa-book-bookmark fs-4'></i><span class='p-2 text-dark'> Copywriting</span></a></div>
                    <div class='col zoom'><a href='#'><i class='fa-solid fa-cart-shopping fs-4'></i><span class='p-2 text-dark'> eCommerce</span></a></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col zoom'><a href='#'><i class='fa-solid fa-check-double fs-4'></i><span class='p-2 text-dark'> Proofreading</span></a></div>
                    <div class='col d-none d-md-block zoom'><a href='#'><i class='fa-brands fa-wordpress fs-4'></i><span class='p-2 text-dark'> Wordpress</span></a></div>
                    <div class='col d-none d-md-block zoom'><a href='#'><i class='fa-solid fa-calculator fs-4'></i><span class='p-2 text-dark'> Accounting</span></a></div>
                    <div class='col zoom'><a href='#'><i class='fa-regular fa-keyboard fs-4'></i><span class='p-2 text-dark'> Data Entry</span></a></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col zoom'><a href='#'><i class='fa-solid fa-language fs-4'></i><span class='p-2 text-dark'> Translation</span></a></div>
                    <div class='col d-none d-md-block zoom'><a href='#'><i class='fa-solid fa-magnifying-glass fs-4'></i><span class='p-2 text-dark'> Web Search</span></a></div>
                    <div class='col d-none d-md-block zoom'><a href='#'><i class='fa-solid fa-file-code fs-4'></i><span class='p-2 text-dark'> MySQL</span></a></div>
                    <div class='col zoom'><a href='#'><i class='fa-solid fa-paperclip fs-4'></i><span class='p-2 text-dark'> link Building</span></a></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col zoom'><a href='#'><i class='fa-solid fa-glasses fs-4'></i><span class='p-2 text-dark'> Research</span></a></div>
                    <div class='col d-none d-md-block zoom'><a href='#'><i class='fa-solid fa-arrow-trend-up fs-4'></i><span class='p-2 text-dark'> Finance</span></a></div>
                    <div class='col d-none d-md-block zoom'><a href='#'><i class='fa-solid fa-flag-checkered fs-4'></i><span class='p-2 text-dark'> Banner Design</span></a></div>
                    <div class='col zoom'><a href='#viewmore'><i class='fa-solid fa-caret-right fs-4'></i><span class='p-2 text-dark'> See All</span></a></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
            </div>

<!--Icon section ends-->

<!--2nd last footer starts-->
            <div class='container-fluid mt-5'>
                <div class='row'>
                    <div class='col-sm footerbg1'>
                        <div class='mt-5 p-3 text-light'><h3 >Freelance API.</h3><h1>50 Million<br>Professional on Demand</h1><p class='fs-4 mt-3'>Why hire people when you can simply integrate our  talented cloud workforce instead?</p></div>
                        <div class='p-5 zoom'><a href='#' class='btn btn-danger btn-lg' style="border-radius:0px;">View Documentation</a></div>
                        
                    </div>
                    <div class='col-sm footerbg2 '>
                        
                        <div class='p-3 mt-5 text-light'><h3 >Freelance Enterprise.</h3><h1>Company budget?<br>Get more done for less</h1><p class='fs-4 mt-3'>Use our workforce of 50 million to help your business achieve more in less time and money.</p></div>
                        <div class='p-5 zoom' ><a href='#' class='btn btn-danger btn-lg pe-5 ps-5' style="border-radius:0px;">Contact Us</a></div>
                    </div>
                    
                </div>
            </div>

<!--2nd last footer ends-->

<!-- Footer starts -->
    
  <?php include 'footer.php';?>

  <!-- Footer ends -->
   
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa' crossorigin='anonymous'></script>

    
  </body>
  
</html>
<?php
}
else{
    
?>

<!doctype html>
<html lang='en'>
  <head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- Bootstrap CSS -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx' crossorigin='anonymous'>

    <script src='https://kit.fontawesome.com/467d4a99f6.js' crossorigin='anonymous'></script>
    <!--Apna css -->
    <link rel='stylesheet' href='style.css'>
    <title>Hire Freelancers & Find Freelance Online Jobs | Freelance</title>
    
  </head>
  
  <body title='Hire Freelancers and Find Freelance Jobs Online'>

<!-- Header starts -->
    
<?php include 'header.php';?>

<!-- Header ends -->

<!--Background image  section starts-->
      <div class='container-fluid bi'>
        <div class='row pt-5'>
            <div class='col-1 d-none d-sm-block d-sm-none d-md-block'></div>
            <div class='col pt-5'><h1>Hire the best <br>freelancers for any job, <br>online.</h1></div>
        </div>
        <div class='row pt-5 '>
            <div class='col-1 d-none d-sm-block d-sm-none d-md-block'></div>
            <div class='col'><p class='fs-3'>Millions of people use freelance.com to turn their ideas into reality</p></div>
            <div class='col-5'></div>
        </div>
        <div class='row pt-5 pb-5'>
            <div class='col-1 d-none d-sm-block d-sm-none d-md-block'></div>
            <div class='col p-2 d-none d-md-block zoom'><a class='btn btn-danger btn-lg' href='hire_freelancer.php' role='button' style='border-radius:0px;'>Hire a Freelancer</a></div>
            <div class='col-4 pb-5 p-2 d-none d-md-block zoom'><a class='btn btn-dark btn-lg transparent' href='browsejobs.php' role='button' style='border-radius:0px;'>Earn Money Freelancing</a></div>
            <div class='col-4 d-none d-sm-block d-sm-none d-md-block'></div>
        </div>
        <div class='row pt-2 pb-5 '>
            <div class='d-grid gap-2 col-12 mx-auto'>
                <a class='btn btn-danger d-block d-md-none zoom' href='hire_freelancer.php' role='button' style='border-radius:0px;'>Hire a Freelancer</a>
                <a class='btn btn-dark d-block d-md-none zoom' href='browsejobs.php' role='button' style='border-radius:0px;'>Earn Money Freelancing</a>
            </div>
        </div>
      </div>
<!--Background image section ends-->

<!--Sponsor section starts-->
      <div class='container-fluid  text-center overflow-auto mt-4'>
        <div class='row' >
            <div class='col-1 d-none d-md-block'></div>
            <div class='col'><img src='images/sponsors2.png' alt=''></div>
        </div>
        <div class='row mt-4'>
            <div class='col-1 '></div>
            <div class='col border-bottom border-secondary pt-4'></div>
            <div class='col-1 '></div>
        </div>
    </div>
<!--Sponsor section ends-->

<!--Summary section starts-->
      
      <div class='container-fluid mt-4'>
        <div class='row'>
            <div class='col-1 d-none d-md-block'></div>
            <div class='col'><h1>Need something done?</h1></div>
        </div>
        <div class='row mt-5'>
            <div class='col-1 d-none d-md-block'></div>

            <div class='col-sm'><i class='fa-solid fa-laptop-file fs-1'></i><h3 class='d-inline p-4'>Post a job</h3><p class='fs-5 mt-3'>It's free and easy to post a job. Simply fill in a title, description and budget and competitive bids come within minutes.</p></div>

            <div class='col-sm'><i class='fa-solid fa-desktop fs-1 '></i><h3 class='d-inline p-4'>Choose freelancers</h3><p class='mt-3'>No job is too big or too small. We've got freelancers for jobs of any size or budget, across 1800+ skills. No job is too complex. We can get it done!</p></div>
            <div class='col-1 d-none d-md-block'></div>
        </div>
        <div class='row mt-2'>
            <div class='col-1 d-none d-md-block'></div>
            <div class='col-sm'><i class='fa-solid fa-user-lock fs-1'></i><h3 class='d-inline p-4'>Pay safely</h3><p class='fs-5 mt-3'>Only pay for work when it has been completed and you're 100% satisfied with the quality using our milestone payment system.</p></div>

            <div class='col-sm'><i class='fa-solid fa-circle-question fs-1'></i><h3 class='d-inline p-4 '>
                We're here to help</h3><p class='fs-5 mt-3'>Our talented team of recruiters can help you find the best freelancer for the job and our technical co-pilots can even manage the project for you.</p></div>
                <div class='col-1 d-none d-md-block'></div>
        </div>
        </div>

        <div class='container-fluid mt-5'>
            <div class='row'>
                <div class='col-1 d-none d-md-block'></div>
                <div class='col'><h1>What's great about it?</h1></div>
            </div>
            <div class='row mt-5'>
                <div class='col-1 d-none d-md-block'></div>
    
                <div class='col-sm'><i class='fa-solid fa-globe fs-1'></i><h3 class='d-inline p-4'>Browse portfolios</h3><p class='fs-5 mt-3'>Find professionals you can trust by browsing their samples of previous work and reading their profile reviews.</p></div>
    
                <div class='col-sm'><i class='fa-solid fa-hand-holding-dollar fs-1'></i><h3 class='d-inline p-4'>
                    Fast bids</h3><p class='fs-5 mt-3'>Receive obligation free quotes from our talented freelancers fast. 80% of projects get bid on within 60 seconds.</p></div>
                <div class='col-1 d-none d-md-block'></div>
            </div>
            <div class='row mt-2'>
                <div class='col-1 d-none d-md-block'></div>
                <div class='col-sm'><i class='fa-solid fa-medal fs-1'></i><h3 class='d-inline p-4'>Quality work</h3><p class='fs-5 mt-3'>Freelancer.com has by far the largest pool of quality freelancers globally- over 50 million to choose from.
                </p></div>
    
                <div class='col-sm'><i class='fa-solid fa-chart-line fs-1'></i><h3 class='d-inline p-4 '>
                    Track progress</h3><p class='fs-5 mt-3'>Keep up-to-date and on-the-go with our time tracker, and mobile app. Always know what freelancers are up to.</p></div>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='row mt-4'>
                        <div class='col-1 '></div>
                        <div class='col border-bottom border-secondary pt-4'></div>
                        <div class='col-1 '></div>
                    </div>
            </div>
            </div>

<!--Summary section ends-->            

<!--Discover more section starts-->

            <div class='container-fluid mt-5'>
                <div class='row'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col'><h1>Make it Real with Freelance.</h1></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col'><p class='fs-4'>Get some Inspirations from 1800+ skills</p></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-5'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col-sm'><img src='images/logo-design1.png' alt='' class='img-fluid select'><br><h4 class='mt-3'>Logo Design.<br>
                    $30 USD in 1 day.</h4></div>
                    <div class='col-sm'><img src='images/package-design1.jpg' alt='' class='img-fluid select'><br><h4 class='mt-3'>Package Design.<br>
                        $280 USD in 4 days.</h4></div>
                    <div class='col-sm'><img src='images/mobile-design1.jpg' alt='' class='img-fluid select'><br><h4 class='mt-3'>Mobile Design.<br>
                        $600 USD in 4 days.</h4></div>
                    <div class='col-sm d-none d-md-block'><img src='images/wordpress1.png' alt='' class='img-fluid select'><br><h4 class='mt-3'>Wordpress.<br>
                    $45 USD in 1 day.</h4></div>
                    <div class='col-1 d-none d-md-block'></div>    
                </div>
                <div class='row mt-5'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col-sm d-none d-md-block'><img src='images/logo-design2.png' alt='' class='img-fluid select'><br><h4 class='mt-3'>Logo Design.<br>
                    $30 USD in 1 day.</h4></div>
                    <div class='col-sm d-none d-md-block'><img src='images/website1.png' alt='' class='img-fluid select'><br><h4 class='mt-3'>Website.<br>
                    $150 USD in 1 day.</h4></div>
                    <div class='col-sm d-none d-md-block'><img src='images/website2.png' alt='' class='img-fluid select'><br><h4 class='mt-3'>Website Design.<br>
                    $140 USD in 13 day.</h4></div>
                    <div class='col-sm d-none d-md-block'><img src='images/illustration.jpg' alt='' class='img-fluid select'><br><h4 class='mt-3'>Illustration.<br>
                    $10 USD in 3 day.</h4></div>
                    <div class='col-1 d-none d-md-block'></div>    
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col-sm d-none d-md-block'><img src='images/wordpress2.jpg' class='img-fluid select' alt='this is a responsive image'><h4 class='mt-3 bolder'>WordPress.<br>
                        $150 USD in 18 days.</h4></div>
                    <div class='col-sm d-none d-md-block'><img src='images/package-design2.png' class='img-fluid select' alt='this is a responsive image'><h4 class='mt-3 bolder'>Package Design.<br>
                        $100 USD in 6 days.</h4></div>
                    <div class='col-sm d-none d-md-block'><img src='images/mobile-design2.jpg' class='img-fluid select' alt='this is a responsive image'><h4 class='mt-3 bolder'>Mobile Design.<br>
                        $100 USD in 1 day.</h4></div>
                    <div class='col-sm d-none d-md-block'><img src='images/package-design3.jpg' class='img-fluid select' alt='this is a responsive image'><h4 class='mt-3 bolder'>Package Design.<br>
                        $155 USD in 2 days.</h4></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
    
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col-sm d-none d-md-block'><img src='images/website3.png' class='img-fluid select' alt='this is a responsive image'><h4 class='mt-3 bolder'>Website.<br>
                        $200 USD in 9 days.</h4></div>
                    <div class='col-sm'><img src='images/3d-modeling.png' class='img-fluid select' alt='this is a responsive image'><h4 class='mt-3 bolder'>3D Modeling.<br>
                        $110 USD in 28 days.</h4></div>
                    <div class='col-sm'><img src='images/logo-design3.jpg' class='img-fluid select' alt='this is a responsive image'><h4 class='mt-3 bolder'>Logo Design.<br>
                        $20 USD in 3 days.</h4></div>
                    <div class='col-sm'><img src='images/graphic-design.png' class='img-fluid select' alt='this is a responsive image'><h4 class='mt-3 bolder'>Graphic Design.<br>
                        $60 USD in 10 days.</h4></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-5 d-none d-md-block' id='viewmore'>
                    <div class='col-1 '></div>
                    <div class='col-6 text-center mx-auto'><a class='btn btn-danger btn-lg'  href='#' role='button' style="border-radius:0px;">View More Projects</a></div>
                    <div class='col-1 '></div>
                </div>
                <div class='row mt-5 d-block d-md-none'>
                    <div class='col-12 text-center d-grid mx-auto'><a class='btn btn-danger btn-lg' href='#' role='button' style="border-radius:0px;">View More Projects</a></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1'></div>
                    <div class='col border-bottom border-secondary pt-4'></div>
                    <div class='col-1'></div>
                </div>
            </div>

<!--Discover more section ends-->

<!--Icon section starts-->

            <div class='container-fluid mt-5'>
                <div class='row'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col'><h1>Get work done in over 1800 different categories</h1></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-5'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col'><a href='><i class='fa-solid fa-desktop fs-4'></i><span class='p-2 text-dark'> Website Design</span></a></div>
                    <div class='col d-none d-md-block'><a href='#'><i class='fa-solid fa-book-open fs-4'></i><span class='p-2 text-dark'> Research Writing</span></a></div>
                    <div class='col d-none d-md-block'><a href='#'><i class='fa-solid fa-shield-halved fs-4'></i><span class='p-2 text-dark'> Legal</span></a></div>
                    <div class='col'><a href='#'><i class='fa-solid fa-pencil fs-4'></i><span class='p-2 text-dark'> Illustration</span></a></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col'><a href='#'><i class='fa-solid fa-mobile-screen-button fs-3'></i><span class='p-2 text-dark'> Mobile Apps</span></a></div>
                    <div class='col d-none d-md-block'><a href='#'><i class='fa-solid fa-clipboard fs-3'></i><span class='p-2 text-dark'> Article Writing</span></a></div>
                    <div class='col d-none d-md-block'><a href='#'><i class='fa-brands fa-linux fs-3'></i><span class='p-2 text-dark'> Linux</span></a></div>
                    <div class='col'><a href='#'><i class='fa-solid fa-file-code fs-3'></i><span class='p-2 text-dark'> Software Dev.</span></a></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col'><a href='#'><i class='fa-brands fa-android fs-3'></i><span class='text-dark p-2'> Android Apps</span></a></div>
                    <div class='col d-none d-md-block'><a href='#'><i class='fa-solid fa-laptop-medical fs-4'></i><span class='text-dark p-2'> Web Scraping</span></a></div>
                    <div class='col d-none d-md-block'><a href='#'><i class='fa-solid fa-house fs-4'></i><span class='text-dark p-2'> Manufacturing</span></a></div>
                    <div class='col'><a href='#'><i class='fa-brands fa-php fs-3'></i><span class='text-dark p-2'> PHP</span></a></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col'><a href='#'><i class='fa-brands fa-apple fs-3'></i><span class='text-dark p-2'> iPhone Apps</span></a></div>
                    <div class='col d-none d-md-block'><a href='#'><i class='fa-solid fa-code fs-4'></i><span class='text-dark p-2'> HTML</span></a></div>
                    <div class='col d-none d-md-block'><a href='#'><i class='fa-brands fa-aws fs-4'></i><span class='text-dark p-2'> AWS</span></a></div>
                    <div class='col'><a href='#'><i class='fa-solid fa-cube fs-4'></i><span class='text-dark p-2'> 3D Modeling</span></a></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col'><a href='#'><i class='fa-solid fa-laptop fs-4'></i><span class='text-dark p-2'> Software Arch.</span></a></div>
                    <div class='col d-none d-md-block'><a href='#'><i class='fa-brands fa-css3-alt fs-3'></i><span class='text-dark p-2'> CSS</span></a></div>
                    <div class='col d-none d-md-block'><a href='#'><i class='fa-solid fa-pen-nib fs-4'></i><span class='text-dark p-2'> Content Writing</span></a></div>
                    <div class='col'><a href='#'><i class='fa-solid fa-images fs-4'></i><span class='text-dark p-2'> Photoshop</span></a></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col'><a href='#'><i class='fa-solid fa-pen fs-4'></i><span class='text-dark p-2'> Graphic Design</span></a></div>
                    <div class='col d-none d-md-block'><a href='#'><i class='fa-brands fa-html5 fs-3'></i><span class='text-dark p-2'> HTML 5</span></a></div>
                    <div class='col d-none d-md-block'><a href='#'><i class='fa-regular fa-lightbulb fs-4'></i><span class='text-dark p-2'> Marketing</span></a></div>
                    <div class='col'><a href='#'><i class='fa-solid fa-compass-drafting fs-4'></i><span class='text-dark p-2'> Technical Writing</span></a></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col'><a href='#'><i class='fa-solid fa-ranking-star fs-4'></i><span class='p-2 text-dark'> Logo Design</span></a></div>
                    <div class='col d-none d-md-block'><a href='#'><i class='fa-brands fa-js fs-3'></i><span class='p-2 text-dark'> Javascript</span></a></div>
                    <div class='col d-none d-md-block'><a href='#'><i class='fa-solid fa-chart-simple fs-4'></i><span class='p-2 text-dark'> Excel</span></a></div>
                    <div class='col'><a href='#'><i class='fa-solid fa-blog fs-4'></i><span class='p-2 text-dark'> Blogging</span></a></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col'><a href='#'><i class='fa-solid fa-arrow-right-arrow-left fs-4'></i><span class='p-2 text-dark'> Public Relations</span></a></div>
                    <div class='col d-none d-md-block'><a href='#'><i class='fa-solid fa-cubes-stacked fs-4'></i><span class='p-2 text-dark'> Data Processing</span></a></div>
                    <div class='col d-none d-md-block'><a href='#'><i class='fa-regular fa-file-lines fs-4'></i><span class='p-2 text-dark'> Ghostwriting</span></a></div>
                    <div class='col'><a href='#'><i class='fa-solid fa-globe fs-4'></i><span class='p-2 text-dark'> Internet Marketing</span></a></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col'><a href='#'><i class='fa-solid fa-truck fs-4'></i><span class='p-2 text-dark'> Logistics</span></a></div>
                    <div class='col d-none d-md-block'><a href='#'><i class='fa-brands fa-python fs-4'></i><span class='p-2 text-dark'> Python</span></a></div>
                    <div class='col d-none d-md-block'><a href='#'><i class='fa-solid fa-book-bookmark fs-4'></i><span class='p-2 text-dark'> Copywriting</span></a></div>
                    <div class='col'><a href='#'><i class='fa-solid fa-cart-shopping fs-4'></i><span class='p-2 text-dark'> eCommerce</span></a></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col'><a href='#'><i class='fa-solid fa-check-double fs-4'></i><span class='p-2 text-dark'> Proofreading</span></a></div>
                    <div class='col d-none d-md-block'><a href='#'><i class='fa-brands fa-wordpress fs-4'></i><span class='p-2 text-dark'> Wordpress</span></a></div>
                    <div class='col d-none d-md-block'><a href='#'><i class='fa-solid fa-calculator fs-4'></i><span class='p-2 text-dark'> Accounting</span></a></div>
                    <div class='col'><a href='#'><i class='fa-regular fa-keyboard fs-4'></i><span class='p-2 text-dark'> Data Entry</span></a></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col'><a href='#'><i class='fa-solid fa-language fs-4'></i><span class='p-2 text-dark'> Translation</span></a></div>
                    <div class='col d-none d-md-block'><a href='#'><i class='fa-solid fa-magnifying-glass fs-4'></i><span class='p-2 text-dark'> Web Search</span></a></div>
                    <div class='col d-none d-md-block'><a href='#'><i class='fa-solid fa-file-code fs-4'></i><span class='p-2 text-dark'> MySQL</span></a></div>
                    <div class='col'><a href='#'><i class='fa-solid fa-paperclip fs-4'></i><span class='p-2 text-dark'> link Building</span></a></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
                <div class='row mt-4'>
                    <div class='col-1 d-none d-md-block'></div>
                    <div class='col'><a href='#'><i class='fa-solid fa-glasses fs-4'></i><span class='p-2 text-dark'> Research</span></a></div>
                    <div class='col d-none d-md-block'><a href='#'><i class='fa-solid fa-arrow-trend-up fs-4'></i><span class='p-2 text-dark'> Finance</span></a></div>
                    <div class='col d-none d-md-block'><a href='#'><i class='fa-solid fa-flag-checkered fs-4'></i><span class='p-2 text-dark'> Banner Design</span></a></div>
                    <div class='col'><a href='#'><i class='fa-solid fa-caret-right fs-4'></i><span class='p-2 text-dark'> See All</span></a></div>
                    <div class='col-1 d-none d-md-block'></div>
                </div>
            </div>

<!--Icon section ends-->

<!--2nd last footer starts-->
            <div class='container-fluid mt-5'>
                <div class='row'>
                    <div class='col-sm footerbg1'>
                        <div class='mt-5 p-3 text-light'><h3 >Freelance API.</h3><h1>50 Million<br>Professional on Demand</h1><p class='fs-4 mt-3'>Why hire people when you can simply integrate our  talented cloud workforce instead?</p></div>
                        <div class='p-5'><a href='#' class='btn btn-danger btn-lg' style="border-radius:0px;">View Documentation</a></div>
                        
                    </div>
                    <div class='col-sm footerbg2 '>
                        
                        <div class='p-3 mt-5 text-light'><h3 >Freelance Enterprise.</h3><h1>Company budget?<br>Get more done for less</h1><p class='fs-4 mt-3'>Use our workforce of 50 million to help your business achieve more in less time and money.</p></div>
                        <div class='p-5' ><a href='#viewmore' class='btn btn-danger btn-lg pe-5 ps-5' style="border-radius:0px;">Contact Us</a></div>
                    </div>
                    
                </div>
            </div>

<!--2nd last footer ends-->

<!-- Footer starts -->
    
  <?php include 'footer.php';?>

  <!-- Footer ends -->
   
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa' crossorigin='anonymous'></script>

    
  </body>
  
</html>
<?php
}
?>