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
              <form id="form1" name="form1" method="post" action="user_reg.php">
                  <p>Name
                    <input type="text" name="T1" id="T1" />
                  </p>
                  <p>Father'Name
                    <input type="text" name="T2" id="T2" />
                  </p>
                  <p>Mother's Name
                    <input type="text" name="T3" id="T3" />
                  </p>
                  <p>Address
                    <textarea name="T4" id="T4"></textarea>
                  </p>
                  <p>City
                    <input type="text" name="T5" id="T5" />
                  </p>
                  <p>State
                    <input type="text" name="T6" id="T6" />
                  </p>
                  <p>Pin
                    <input type="text" name="T7" id="T7" />
                  </p>
                  <p>Email
                    <input type="text" name="T8" id="T8" />
                  </p>
                  <p>Mobile Number
                    <input type="text" name="T9" id="T9" />
                  </p>
                  <p>Alternate Number
                    <input type="text" name="T10" id="T10" />
                  </p>
                  <p>Address Proof
                    <input checked="checked" type="radio" name="R1" id="R1" value="Aadhar" />
                    Aadhar
                    <input type="radio" name="R1" id="R1" value="DL" />
                    DL
                    <input type="radio" name="R1" id="R1" value="VID" />
                    VID
                    <input type="radio" name="R1" id="R1" value="Rashan Card" />
                    Rashan Card
                    <input type="radio" name="R1" id="R1" value="Passport" />
                    Passport </p>
                  <p>Dealer Name
                    <input type="text" name="T11" id="T11" />
                  </p>
                  <p>Description
                    <textarea name="T12" id="T12"></textarea>
                  </p>
                  <p>DOB(yyyy-mm-dd)
                    <input type="text" name="T13" id="T13" />
                  </p>
                  <p>
                    <input type="submit" name="B1" id="B1" value="Register User" />
                  </p>
                  <p>&nbsp;</p>
              </form>
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
