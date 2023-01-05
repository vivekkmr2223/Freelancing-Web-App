<?php
    include 'db_freelance.php';
    $uid_upid=$_REQUEST["row_middle"];
    $img_path="unknown.jpg";
    $qry4="INSERT INTO user_profile_details(uid_upid,user_profile_photo,user_hourly_rates) VALUES('$uid_upid','$img_path','0')";
    mysqli_query($con,$qry4);
    $qry5="INSERT INTO experience_details(experience_id) VALUES('$uid_upid')";
    mysqli_query($con,$qry5);
    $qry6="INSERT INTO user_qualification_details(uid_qualification_id) VALUES('$uid_upid')";
    mysqli_query($con,$qry6);
    header("Location:Login.php");
?>