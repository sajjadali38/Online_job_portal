<?php
include("connection.php");
$name=$_REQUEST["name"];
$login_id=$_REQUEST["login_id"];
$password=$_REQUEST["password"];
$city=$_REQUEST["city"]; 
$address=$_REQUEST["address"];
$phone=$_REQUEST["phone_no"];
$email=$_REQUEST["email"];
$Query="INSERT INTO form(name,login_id,password,city,address,phone,email) VALUES('".$name."','".$login_id."','".$password."','".$city."','".$address."','".$phone."','".$email."')";
$dbresult=mysql_query($Query);
if(mysql_num_rows($dbresult) > 0)
	{
		echo "<br><br>You sucessfully Registered.<br><br>";			
	}
else
	{
		echo "Some problem occured. Please try again <br><br>";
				
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>JOBS4U.com</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="back_all">
<div id="content">

<!-- header begins -->
<div id="header"> 
	<div id="logo">
		<h1><a href="#"><h1>JOBS4U.com</h1></a></h1>

	</div>
  <div id="menu">
		<ul>
			<li id="button1"><a href="index.php" title="">Home</a></li>
			<li id="button2"><a href="login.php" title="">Login</a></li>
			<li id="button3"><a href="registration_form.php" title="">Register Now</a></li>
			<li id="button4"><a href="About_us.html" title="">About</a></li>
			<li id="button5"><a href="Contact_us.html" title="">Contact</a></li>

		</ul>
  </div>
</div>

<!-- header ends -->
<!-- content begins -->

 <div id="main"></div>
 <div id="back">
	<div id="right">	
		  			
			<h3>New Jobs</h3>
			<div class="title_back">	
     		<ul>
					<li class="sub"><a href="#">Engineering</a></li>
					<li class="sub"><a href="#">Information Technology</a></li>
					<li class="sub"><a href="#">Teaching</a></li>
					<li class="sub"><a href="#">Labours Required</a></li>
					<li class="sub"><a href="#">Others</a></li>			
	        </ul>
		  </div>	
			<h3>Company News</h3>
			<div class="title_back">	
			<ul>
			  <li>
				  <h4>March 19, 2010</h4>
				  <p><a href="#">Software Engineer's requried for well reputed company</a></p></li>
				   <li>
				  <h4>March 10, 2010</h4>
				  <p><a href="#">Teachers Required for Arid Agriculture University Rawalpindi </a></p></li>
			  </ul>
   	    </div>
	</div>

	<div id="left" align="center">		
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<form name="form1" method="post" action="home.php">
			<table border="0" align="center">
				<tr>
					<th colspan="2">
     						<h1> <p>Regitration Form </p></h1>
  					</th>

				</tr>
				<tr>

					<td>
						Name    	
					</td>

    					<td>
      						<input type="text" name="name" value="" maxlength="40" onclick="validate" />
  					</td>
				</tr>

				<tr>
					<td>
						Login id
				  </td>

    					<td>
     
        					<input type="text" name="login_id" value="" maxlength="40" onclick="validate" />
     
  					</td>
				</tr>

				<tr>
					<td>
    						Password
				  </td>

    					<td>
      						<input type="password" name="pass" value="" maxlength="6" onclick="validate" />
    
  					</td>
				</tr>

				<tr>
					<td>
    						City
				  </td>

    					<td>
      
        					<input type="text" name="city" value="" maxlength="20" />
      
  					</td>
				</tr>

				<tr>
					<td>
    						Address
				  </td>

    					<td>
      
        					<input type="text" name="address" value="" maxlength="50" onclick="validate" />
     
  					</td>
				</tr>
				<tr>
					<td>
    						Phone No
				  </td>

    					<td>
      
        					<input type="text" name="phone_no" value="" maxlength="50" onclick="validate" />
     
  					</td>
				</tr>
				
				<tr>
					<td>
    						Email
				  </td>

    					<td>
      
        					<input type="text" name="email" value="" maxlength="50" onclick="validate" />
     
  					</td>
				</tr>

				<tr>

    					<td colspan="2" align="right">
     
      						<input type="submit" value="Submit" onclick="validate();" />
        					<input type="reset" value="Reset" />
  					</td>
				</tr>
			</table>
	  </form></div>
				
	<div style="clear: both;">&nbsp;</div>
	
<!--content ends -->
<!--footer begins -->
	</div>
	<div id="bottom"></div>

<div id="footer">
<a><p>&copy; 2010. All Rights Reserved Design by: Mati_Ur_Rehman</p></a>
</div>
</div>
</div>
<!-- footer ends-->
</body>
</html>