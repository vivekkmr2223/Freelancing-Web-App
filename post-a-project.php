<?php
session_start();
if(isset($_SESSION["Uid"]))
{
  include 'db_freelance.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Post a project</title>
    <script src="https://kit.fontawesome.com/467d4a99f6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
    .bg-container {
        background: url('images/Post-a-project-background.jpg');
        background-repeat: repeat-x;
        padding-top: 50px;

    }

    .pap-form-container {
        border: 1px solid black;
    }
    </style>

</head>

<body>
    <?php include 'dashboard_header.php'; ?>
    <div class="container-fluid bg-container">
        <div class="row">
            <div class="col-3 d-none d-md-block"></div>
            <div class="col">
                <h2 class="mt-4 text-white fw-bold">Tell us what you need done</h2>
                <p class="mt-4 text-white">Contact skilled freelancers within minutes. View profiles, ratings,
                    portfolios and
                    chat with them. Pay the freelancer only when you are 100% satisfied with their work.</p>
            </div>
            <div class="col-3 d-none d-md-block"></div>
        </div>

        <form action="post-a-project.php" method="post" enctype="multipart/form-data">
            <div class="row mt-3 mb-5">
                <div class="col-3 d-none d-md-block"></div>
                <div class="col pt-3 shadow-lg" style="background-color: white;">

                    <div class="pb-3">
                        <label for="txtproject" class="form-label fs-4 fw-bold">Choose a name for your project</label>
                        <input type="text" class="form-control" name='title' id="txtproject"
                            placeholder="e.g. Build me a website" required>
                        <div class="pt-5">
                            <label for="txtaboutproject" class="form-label fs-4 fw-bold">Tell us more about your
                                project</label>
                            <textarea name="summary" id="txtaboutproject" cols="10" rows="4" class="form-control"
                                placeholder="Describe your Project Here..." required></textarea>
                        </div>
                        <div class="mt-5 p-3" style="border: 1px dashed rgb(172, 169, 169)">
                            <div class="row">
                                <div class="col-4 pt-2">
                                    <label for="Uploadfile" class="border border-dark ps-4 pe-4 pt-2 pb-2 select"><i
                                            class="fa-solid fa-plus"></i> Upload File</label>
                                    <input type="file" name="p_file" id="Uploadfile" value="uploadfile" class="pt-2"
                                        style="display:none;"
                                        accept=".zip" />
                                </div>
                                <div class="col-sm">
                                    <span> Upload documents that might be helpful in explaining your project in
                                        brief here </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-3 d-none d-md-block"></div>
            </div>
    </div>

    <div class="container-fluid ">

        <div class="row">
            <div class="col-3 d-none d-md-block"></div>
            <div class="col shadow-lg pt-4">
                <h4>What is your Budget ?</h4>
                <div class="row pb-3">
                    <div class="col">
                        <label for="customRange1" class="mt-2 fw-bold">Min</label>
                        <input type="range" class="form-range " min="10" max="1500" id="customRange1" value="" required>
                        <div class="row">
                            <div class="col"><span>$10.00</span></div>
                            <div class="col-9"></div>
                        </div>
                        <div class="input-group mt-3">
                            <span class="input-group-text bg-white"
                                style="border-radius: 0px; border-right: 0px;">$</span>
                            <input type="number" class="form-control" name='min_amount' id="mindemo" value=""
                                placeholder="0" value="" style="border-left: 0px; border-right: 0px;">
                            <span class="input-group-text bg-white"
                                style="border-radius: 0px; border-left: 0px;">USD</span>
                        </div>

                    </div>


                    <div class="col">
                        <label for="customRange2" class="mt-2 fw-bold">Max</label>
                        <input type="range" class="form-range" max="1500" id="customRange2" value="" required>
                        <div class="row">
                            <div class="col-9"></div>
                            <div class="col"><span>$1500.00</span></div>
                        </div>
                        <div class="input-group mt-3">
                            <span class="input-group-text bg-white"
                                style="border-radius: 0px; border-right: 0px;">$</span>
                            <input type="number" class="form-control" value="" placeholder="0"
                                name="max_amount" id="maxdemo" value="" style="border-left: 0px; border-right: 0px;">
                            <span class="input-group-text bg-white"
                                style="border-radius: 0px; border-left: 0px;">USD</span>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-3 d-none d-md-block"></div>
        </div>
    </div>

    <div class="container-fluid mb-5">
        <div class="row mt-5">
            <div class="col-3 d-none d-md-block"></div>
            <div class="col shadow-lg">
                <h4 class="pt-4">How long would you like to run your bidding?</h4>
                <div class="input-group mb-3 pt-3">
                    <span class="input-group-text bg-white border border-dark" id="basic-addon1"
                        style="border-radius:0px; border-right:0px !important;">Days</span>
                    <input type="number" class="border border-dark" aria-describedby="basic-addon1" name='p_days'
                        value="" style="width:250px; border-left:0px !important;" required>
                </div>
            </div>
            <div class="col-3 d-none d-md-block"></div>
        </div>
    </div>

    <script>
    var slider1 = document.getElementById("customRange1");

    var output1 = document.getElementById("mindemo");


    slider1.oninput = function() {
        output1.value = this.value;
        document.getElementById("customRange2").setAttribute("min", output1.value);
    }
    output1.oninput = function() {
        slider1.value = this.value;
    }
    var slider2 = document.getElementById("customRange2");
    var output2 = document.getElementById("maxdemo");

    slider2.oninput = function() {
        output2.value = this.value;
    }
    output2.oninput = function() {
        slider2.value = this.value;
    }
    </script>

    <div class="container-fluid">
        <div class="row">
            <div class="col-3 d-none d-md-block"></div>
            <div class="col shadow-lg bg-white pt-3 pb-3">
                <h3>What skills are required?</h3>
                <p>Enter up to 5 skills that best describe your contest. Freelancers will use these skills to find
                    contests they are most interested and experienced in.</p>
                <input type="text" class="form-control" name='p_skills' placeholder='Example: php, html, laravel,etc.'  style="border-radius:0px; "/>
            </div>
            <div class="col-3 d-none d-md-block"></div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-3 d-none d-md-block"></div>
            <div class="col"></div>
            <div class="col-3 text-end">
                <input type="submit" class="btn btn-danger fw-bold" name="job_save" value="Post Job"
                    style="border-radius: 0;">
            </div>
            <div class="col-3 d-none d-md-block"></div>
        </div>
    </div>

    </form>

    <?php

        if(isset($_REQUEST["job_save"])){
        if($_REQUEST["max_amount"]>$_REQUEST["min_amount"]){
            $postfile=$_FILES['p_file']['name'];
    
            $sourcefile=$_FILES['p_file']['tmp_name'];
            $rand=rand('1111111','9999999');
            $file=$rand.'_'.$postfile;
            $targetfile="freelance_uploads/".$file;
            move_uploaded_file($sourcefile,$targetfile);
            
            $days=$_REQUEST["p_days"];
            $date = date('20y-m-d');
            $date = strtotime($date);
            $date = strtotime("+".$days." days", $date);
            $date = date('20y-m-d',$date);
            $qry_post="INSERT INTO postjob_details() VALUES(NULL,'".$_SESSION["Uid"]."','".$_REQUEST["title"]."','".$_REQUEST["summary"]."','".$_REQUEST["min_amount"]."','".$_REQUEST["max_amount"]."','$date','$days','$file','".$_REQUEST["p_skills"]."')";
            mysqli_query($con,$qry_post);
            echo "<script>window.location.href='posted_projects.php'</script>";
        }
        else{
            echo "<script>alert('Maximum budget must be greater tha minimum budget');</script>";
        }
            
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>


</body>

</html>
<?php
include 'style.php';
include 'footer.php';

  }
  else{
    header("Location: login.php");
  }
  ?>