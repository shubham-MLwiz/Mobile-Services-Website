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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/user_master.dwt.php" codeOutsideHTMLIsLocked="false" -->
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
   <li><a href="userhome.php">HOME</a></li>
   <li><a href="user_profile.php">Profile</a></li>
   <li><a href="show_plans.php" >Plans</a></li>
   <li><a href="recharge.php">Recharge</a></li>
   <li><a href="myaccount.php">My Account</a></li>
   <li><a href="../logout.php">Logout</a></li>
</ul>
            </div>
            <div id="left">
               <ul id="menu2">
                    <li><a href="userhome.php">HOME</a></li>
                    <li><a href="user_profile.php">Profile</a></li>
                    <li><a href="user_plans.php">Plans</a></li>
                    <li><a href="myaccount.php">My Account</a></li>
                    <li><a href="recharge.php">Recharge</a></li>
                    <li><a href="change_password.php">Change Password</a></li>
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
            	<h1 id="home">Welcome to User's Home</h1>
                <h2>Hi! [<?php echo GetName("userdata","$username"); ?>]</h2>
            	<p>&nbsp;</p>
            
            <?php
				$photo=GetPhoto($username,"userdata");
				//echo "<br>".$photo."<br>";
				if($photo=="nothing")
				{
      		?>
                    <form action="user_upload_photo.php" method="POST" enctype="multipart/form-data">
                        File<input type="file" name="F1" value="" width="80" /><br></br>
                        <input type="submit" value="Upload Photo" />
                    </form>
    		<?php
    			}
				else
				{
					echo "<img src='photos/$photo' width=100 height=100 />";
					echo "<br><a href='change_photo.php'>Change Photo</a>";
				}
			?>
			<hr />
			<p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        
            </div>
            <!-- InstanceEndEditable -->

            <div id="bottom">
            <a href="userhome.php">Home</a> | 
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
