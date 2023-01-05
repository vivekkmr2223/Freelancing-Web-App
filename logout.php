<?php
session_start();
session_destroy();
$_SESSION["Email"]=null;
header("Location:index.php");
?>