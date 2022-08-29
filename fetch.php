<?php 
include "conn.php";
$aname=$_GET["name"];
$QnoOfUsers="SELECT userno FROM admin WHERE Name='$aname'";//Q -> Query ,R ->result,D->data
$QUsers="SELECT * FROM user";
$DnoOfUsers = mysqli_query($conn,$QnoOfUsers);
$inoOfusers=mysqli_fetch_assoc($DnoOfUsers);// i->
$RUsers	=mysqli_query($conn,$QUsers);
$n=mysqli_num_rows($RUsers);
if(mysqli_num_rows($RUsers)>(int)$inoOfusers["userno"])
            {
                $a=0;//variable to check if only new ones are notified	
		$b=0;//
		$c=0;//to add margins between to notification so as they don't overlap
		$e=0;//random variables used
                while($r=mysqli_fetch_assoc($RUsers))
                    {
                        if($a<(int)$inoOfusers["userno"])//to notify only new not older ones
	                    {
	                    $a=$a+1;
	                    continue;
	                    }	//creating notification 
			$b=$b+1;
			if($b!=1)	$c=$c+80;
			else $c=15;
			if($c>450){$c=20;}
			/*
			to add new notifications to top of screen if 6 notfications
			are notified and new notifications are to be placed at top right of screen 
			*/
                       /*Actions taken in the echo below 
		        adding the text to notification 
			add margins after each notification
			printing notifications after set intervals */
			
			echo "<script>
parent.document.getElementById('snackbar".$b."').textContent='Hi ".strtoupper($r['Name'])." Logged-In';
parent.document.getElementById('snackbar".$b."').style.margin='".$c."px 0px 0px 0px';
setTimeout(function(){ parent.myFunction('snackbar".$b."'); },'". 500*$b."');
</script>";
                    }
$d=$inoOfusers["userno"]+$b;/*b for the no of notified users */
                /*now here we set current no of users in the users table to admin's userno column in table
		admin for later use*/ 
                $QUdata="UPDATE admin SET userno='$d'WHERE Name='$aname'";
                $o=mysqli_query($conn,$QUdata);

            }
                             
?>
