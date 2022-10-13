<?php 
include "conn.php";
$name= $_POST["name"];
$date= $_POST["date"]; 
$insert = "SELECT * FROM user where  Phone='$name' AND DateOfBirth='$date'";
$insert1 = "SELECT * FROM admin where  Phone='$name' AND DateOfBirth='$date'";
$insert2="SELECT * FROM user"; // to know the no of current users to provide to admin for notification
$ins = mysqli_query($conn, $insert);/* to check if user exist*/
$admin=0;
$ins1 = mysqli_query($conn, $insert1);/* to check if admin exist*/
$s="SELECT Name FROM user";
$sel=mysqli_query($conn, $s);/* to collect all users to show to admin*/
$user=mysqli_query($conn,$insert2);
 
/*header("Location: index.php ",True,301);echo "hi" ;*/
?>
<html>
<head>
<link rel="stylesheet" href="css/main.css">

</head>
<body>
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login">

<a  href="index.php"> <img src="images/home.png" height=50px width=50px></a>


				<button class="button login__submit">
					<span class="button__text">
<?php
	if(mysqli_num_rows($ins)>0&&mysqli_num_rows($ins1)>0)
		{echo "<H1>ERROR</H1>(same data more than 1
 entry found)";}
	else if((mysqli_num_rows($ins)<=0)&&(mysqli_num_rows($ins1)<=0))
		{echo "<H1 style=color:red;>Error</H1>(Check username and password)";}
	else {	
		if(mysqli_num_rows($ins)>0)
		{
		echo "Hi User<H1> ";
		$row=mysqli_fetch_assoc($ins);
		echo $row["Name"];
		echo "</H1>";
		echo "(Logged in sucesfully)";
		}

		if(mysqli_num_rows($ins1)>0)
		{
		$row=mysqli_fetch_assoc($ins1);/* check for admin and redirect */ 
		try{/*
		    header('Location:logA.php?name='.$row['Name']);		
		*/
		    echo "<script>window.location.href='logA.php?name=".$row['Name']."';</script>";
		}
		catch(Exception $e){echo "<script>window.location.href='logA.php?name=".$row['Name']."';</script>";}
		}
		
	}
	?>
	
	



</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>





			</form>
			<div class="social-login">
				
			
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div></body></html>
