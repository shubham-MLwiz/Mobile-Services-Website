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
if($role!="admin")
{
   header("Location:../AuthError.php");
   die();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/admin_master.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../styles/cm-style.css"/>
<link rel="stylesheet" type="text/css" href="../styles/style.css"/>
</head>

<body>
<div id="main">

	<div id="wrapper">
			<div id="header"></div>
            <div id="menu">
          <ul id="cm-nav">
   <li><a href="adminhome.php">HOME</a></li>
   <li><a href="admin_profile1.php">Profile</a></li>
   <li><a href="upload_plan_form.php" >Add Plan</a></li>
   <li><a href="show_plans.php">Show Plans</a></li>
   <li><a href="user_reg_form.php">New User</a></li>
   <li><a href="../logout.php">Logout</a></li>
</ul>
            </div>
            <div id="left">
               <ul id="menu2">
                    <li><a href="adminhome.php">HOME</a></li>
                    <li><a href="admin_profile1.php">Profile</a></li>
                    <li><a href="upload_plan_form.php">Add Plan</a></li>
                    <li><a href="show_plans.php">Show Plans</a></li>
                    <li><a href="user_reg_form.php">New User</a></li>
                    <li><a href="admin_reg_form.php">New Admin</a></li>
                    <li><a href="../logout.php">Logout</a></li>
            </ul>
            <h3>Updates here</h3>
            <ul id="news">
           <marquee  direction="up" scrollamount="2"  onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 3, 0);">
            	<li>Recharge Rs 100 and get Balance of Rs 150</li>
                <li>5GB Internet Data in just Rs 50</li>
                <li>2000 SMS in just Rs 30</li>
                <li>STD only 2Minutes/R 1</li>
                
            </marquee>
            </ul>
            <img src="../images/111.jpg"  width="195" height="187"/>
            <br/>
            <img src="../images/index.jpg" width="195" height="150" />
            </div>
            <!-- InstanceBeginEditable name="m1" -->
            <div id="content">
            	<h1 id="home">Welcome to Mobile Hub</h1>
            <p>&nbsp;</p>
            
            <?php
require_once ("datafunctions.php");
$fname= $_REQUEST["T1"];
$mname= $_REQUEST["T2"];
$lname= $_REQUEST["T3"];
$gender= $_POST["radio"];
$address= $_REQUEST["T4"];
$city= $_REQUEST["T5"];
$state=$_REQUEST["T6"];
$email= $_REQUEST["T7"];
$contact= $_REQUEST["T8"];
$username= $_REQUEST["T9"];
$password= $_REQUEST["T10"];
$query1="insert into admindata values('$fname','$mname','$lname','$gender','$address','$city','$state','$email','$contact','$username')";
$query2="insert into logindata values('$username','$password','admin')";
mysql_query($query1);
$n=mysql_affected_rows();
mysql_query($query2);
$m=mysql_affected_rows();
echo $query1;
echo "<br>".$n;
echo "<br> $m";
die();
if($n!=1 || !$m!=1)
{
	echo "Unable to create the login";
	die();
}
?>
<h1 style="text-align:left;">Registered Successfully</h1>
<h3 style="background:none; text-align:left;"><a href="admin_reg_form.php">Continue...</a></h3>
            
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        
            </div>
            <!-- InstanceEndEditable -->

            <div id="bottom">
            <a href="../user/userhome.php">Home</a> | 
            <a href="../aboutus.php">About Us</a> | 
            <a href="../contact.php">Contact</a> | 
            <a href="../services.php">Services</a> 
            </div>
            <div  id="footer">
            <h4>Copyright&copy; 2012, Next Mobile Services India</h4>
            <h4>Powered By - </h4>
            </div>
</div>
</div>

</body>
<!-- InstanceEnd --></html>
