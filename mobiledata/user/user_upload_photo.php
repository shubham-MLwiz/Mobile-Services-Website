<?php 
require_once '../admin/datafunctions.php';
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
if(count($_FILES))
{
    if(!$_FILES["F1"]["size"])
    {
        echo "Error:No file uploaded";
       	die();
    }
    else
    {
        $target=dirname(__FILE__)."/Photos/".basename($_FILES["F1"]["name"]);
        //Fetch file from temporary space the send to target //location
        if(!move_uploaded_file($_FILES["F1"]["tmp_name"], $target))
        {
            echo "Error during upload";
            die();
        }
        else
        {
            $addr=basename($_FILES["F1"]["name"]);
            $query="update userdata set photo='$addr' where username='$username'";
            mysql_query($query);
            header("Location:userhome.php");
			die();
        }
    }
}
?>