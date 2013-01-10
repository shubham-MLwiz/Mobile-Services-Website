<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/master.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Account Activation</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="styles/cm-style.css"/>
<link rel="stylesheet" type="text/css" href="styles/style.css"/>
</head>

<body>
<div id="main">

	<div id="wrapper">
			<div id="header"></div>
            <div id="menu">
          <ul id="cm-nav">
   <li><a href="index.php">HOME</a></li>
   <li><a href="aboutus.php">About Us</a></li>
   <li><a href="plans.php" >Plans</a></li>
   <li><a href="services.php">Services</a></li>
   <li><a href="downloads.php">Downlaods</a></li>
   <li><a href="contact.php">Contact Us</a></li>
</ul>
            </div>
            <div id="left">
               <ul id="menu2">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="login.php">SIGN IN</a></li>
                    <li><a href="signup.php">SIGN UP</a></li>
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
            <img src="images/111.jpg"  width="195" height="187"/>
            <br/>
            <img src="images/index.jpg" width="195" height="150" />
            </div>
            <!-- InstanceBeginEditable name="m1" -->
            <div id="content">
            	<h1 id="home">Welcome to Mobile Hub</h1>
            <p>&nbsp;</p>
            
            <?php
require_once("admin/datafunctions.php");
$name=$_POST["T1"];
$dob=$_POST["T2"];
$address=$_POST["T3"];
$city=$_POST["T4"];
$state=$_POST["T5"];
$email=$_POST["T6"];
$mobile=$_POST["T7"];
$username=$_POST["T8"];
$password=$_POST["T9"];
$query="select * from userdata where name='$name' and dob='$dob' and mobile_no='$mobile'";
$result=FetchData($query);
$n=mysql_num_rows($result);
$acode=rand(10001,99999);
if($n>0)
{
	$msg="User Name : $email \n\n Your Password : $password \n\n Activation Code: $acode";
	//mail($email,"Account Activation","msg");
	$query="insert into logindata values('$username','$password','user',$acode)";
	mysql_query($query);
	$query="update userdata set username='$username' where mobile_no='$mobile'";
	mysql_query($query);
	echo "<h1>Your Account has been activated. Your activation code has sent to your email.</h1>".$acode;
}
else
{
	echo "<h1>Invalid data, contact to customer care</h1>";
	echo "<a href='contact.php'>Contact</a>";
}
?>
            
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        
            </div>
            <!-- InstanceEndEditable -->

            <div id="bottom">
            <a href="index.php">Home</a> | 
            <a href="aboutus.php">About Us</a> | 
            <a href="contact.php">Contact</a> | 
            <a href="services.php">Services</a> 
            </div>
            <div  id="footer">
            <h4>Copyright&copy; 2012, Next Mobile Services India</h4>
            <h4>Powered By - </h4>
            </div>
</div>
</div>

</body>
<!-- InstanceEnd --></html>
