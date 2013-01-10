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
				require_once("datafunctions.php");
				$query="select * from plan_master";
				$result=FetchData($query);
			?>
            
            
        <table border="1">
        <tr>
            <th>Plan ID</th>
            <th>Plan Name</th>
            <th>Amount</th>
            <th>Balance</th>
            <th>Validity</th>
            <th>Free SMS</th>
            <th>Free Data</th>
            <th>Free Calls</th>
        </tr>
<?php
	while($rw=mysql_fetch_array($result))
	{
		?>
		<tr>
        	<td><?php echo $rw["planid"]; ?></td>
            <td><?php echo $rw["name"]; ?></td>
            <td><?php echo $rw["amt"]; ?></td>
            <td><?php echo $rw["balance"]; ?></td>
            <td><?php echo $rw["validity"]; ?></td>
            <td><?php echo $rw["free_sms"]; ?></td>
            <td><?php echo $rw["free_data"]; ?></td>
            <td><?php echo $rw["free_calls"]; ?></td>
            <td>
            	<a href="change_plan.php?planid=<?php echo $rw["planid"]; ?>">Change</a> | 
                <a href="delete_plan.php?planid=<?php echo $rw["planid"]; ?>">Delete</a>
            </td>
        </tr>
		<?php
	}
?>
</table>
            
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
