<?php 
include "conn.php";
$aname=$_GET["name"];
$QnoOfUsers="SELECT userno FROM admin WHERE Name='$aname'";//Q -> Query ,R ->result,D->data
$QUsers="SELECT * FROM user";
$DnoOfUsers = mysqli_query($conn,$QnoOfUsers);
$inoOfusers=mysqli_fetch_assoc($DnoOfUsers);
$RUsers	=mysqli_query($conn,$QUsers);
$n=mysqli_num_rows($RUsers);
if(mysqli_num_rows($RUsers)>(int)$inoOfusers["userno"])
            {
                $a=0;$b=0;$c=0;$e=0;//random variables used
                while($r=mysqli_fetch_assoc($RUsers))
                    {
                        if($a<(int)$inoOfusers["userno"])//to print only new not older ones
	                    {
	                    $a=$a+1;
	                    continue;
	                    }	//creating notification 
			$b=$b+1;
			if($b!=1)	$c=$c+80;
			else $c=15;
			if($c>450)	{$c=20;}
                    echo "<script>
parent.document.getElementById('snackbar".$b."').textContent='Hi ".strtoupper($r['Name'])." Logged-In';
parent.document.getElementById('snackbar".$b."').style.margin='".$c."px 0px 0px 0px';
setTimeout(function(){ parent.myFunction('snackbar".$b."'); },'". 500*$b."');
</script>";
                    }
$d=$inoOfusers["userno"]+$b;
                //now here we set current no of users to admins userno column in table
                $QUdata="UPDATE admin SET userno='$d'WHERE Name='$aname'";
                $o=mysqli_query($conn,$QUdata);

            }
                             
?>
