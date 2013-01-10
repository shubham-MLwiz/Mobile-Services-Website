<?php
require_once "../admin/datafunctions.php";
session_start();
if(!isset($_SESSION["role"]))
{
    header("Location:../AuthError.php");
    die();	
}
$role=$_SESSION["role"];
$username=$_SESSION["username"];
if($role!="user")
{
   header("Location:../AuthError.php");
   die();
}
$sql="update userdata set photo='nothing' where username='$username'";
mysql_query($sql);
header("Location:userhome.php");
die();
?>