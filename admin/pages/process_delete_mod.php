<?php
session_start();
include('../../config.php');

$mid=$_GET['mid'];
mysqli_query($con,"delete  from tbl_theatre where id='$mid'");
 $_SESSION['success']="Moderator deleted  successfully";
header("location:add_th");
?>