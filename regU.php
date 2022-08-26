<?php 
include "conn.php";
$name= $_POST["name"];
$date= $_POST["date"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$phone = $_POST["phone"];
$null=0;
$insert = "INSERT INTO user(ID, Name, DateOfBirth, Gender, Age, Phone) VALUES (NULL, '$name','$date','$gender','$age','$phone')";
if (isset($name)&&$date!=''&&isset($gender)&&isset($age)&&isset($phone))
{
	$ins = mysqli_query($conn, $insert);
	$null="hi";
}
else {echo "<H1 > Some values submitted you were not Recieved by Us</H1> ";}
?>



<html>
<head>
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container">
	<div class="screen">
		<div class="screen__content">
			
<form class="login" methord="post">

<a  href="index.php"> <img src="images/home.png" height=50px width=50px></a>
		
				<button name="button" class="button login__submit">
					<span class="button__text">
<?php	
		if(isset($ins)&&$ins!=FALSE)
        			echo "<h1>Registered successfully</h1>";
			else echo "<h1>Error</h1>(Problem)"; 
	
	
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