<!doctype html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Bootstrap demo</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
        <form action='skill_form.php' name='skill_form' method='GET'>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Sub skill Category name</label>
    <input type="text" class="form-control" name='sub_skill_name' id="exampleInputPassword1">
  </div>
  <input type="submit" class="btn btn-primary" value="submit" name='btnsubmit'>
</form>
        </div>
      </div>
    </div>
 

<?php
if(isset($_REQUEST["btnsubmit"]))
{
     include 'db_freelance.php';
     
     $sub_skill_name=$_REQUEST["sub_skill_name"];

     $qry="INSERT INTO sub_skills_category VALUES(null,7,'$sub_skill_name')";
     mysqli_query($con,$qry);
}
?>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8' crossorigin='anonymous'></script>
  </body>
</html>