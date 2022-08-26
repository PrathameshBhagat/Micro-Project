<?php
 include "conn.php";
$aname=$_GET["name"];
$QUsers="SELECT * FROM user";
?>
<html>
<head>
<link rel="stylesheet" href="css/main.css">

</head>
<body onload="reload()">

<div id="snackbar1" ></div>
<div id="snackbar2" ></div>
<div id="snackbar3" ></div>
<div id="snackbar4" ></div>
<div id="snackbar5" ></div>
<div id="snackbar6" ></div>
<div id="snackbar7"  align="left" ></div>
<div id="snackbar8" align="left" ></div>
<div id="snackbar9"  align="left" ></div>
<div id="snackbar10"  align="left" ></div>
<div id="snackbar11" align="left" ></div>
<div id="snackbar12" align="left" ></div>
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login">

<!-- The actual snackbar -->



<a  href="index.php"> <img src="images/home.png" height=50px width=50px></a>
			<div class="button login__submit">
					<span class="button__text">
					<?php
					echo "hello!<H1 style=color:#ff0000;>".$_GET["name"]."</H1>"
					?>
</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</div>




<!-- *********************************************************-->
<!-- *********************************************************-->
<!-- *********************************************************-->
<!-- *********************************************************-->
<!-- *********************************************************-->
<!-- *********************************************************-->
<!-- *********************************************************-->
		
<!-- *********************************************************-->
<!-- *********************************************************-->
<!-- *********************************************************-->
<!-- *********************************************************-->
<!-- *********************************************************-->



<button class="button login__ret">
			<span class="button__text">
				List of users: 
				<div style="font-size:6.5px;align:left;display:inline;"><br>(Doesn't include newly added) <div>

			</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>
		<?php	
			$RmUsers	=mysqli_query($conn,$QUsers);
			while($row=mysqli_fetch_assoc($RmUsers))
			{
			?>	
				<button class="button login__submit">
					<span class="button__text">
			            <?php 
			                echo $row['Name']." : ".$row['Gender']." , ".$row['Age'];?>

                    </span>
					    <i class="button__icon fas fa-chevron-right"></i>
				</button>
        <?php
            }
        ?>


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

</div><iframe id="l" style="display:none" src=""></iframe>
<script>
function reload(){
setInterval(function(){document.getElementById("l").src="fetch.php?name=<?php echo $_GET["name"];?>";},10000);
}
function myFunction(data) {
  // Get the snackbar DIV
  var x = document.getElementById(data);

  // Add the "show" class to DIV
  x.className = "show";

  // After 3 seconds, remove the show class from DIV
  setTimeout(function(){ x.className = x.className.replace("show", "");x.textContent="";x.padding="0px;"; }, 10000);
}
</script>

</body></html>
