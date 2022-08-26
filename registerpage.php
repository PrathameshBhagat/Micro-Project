<html>
<head>
<link rel="stylesheet" href="css/register.css">
<script>
function checkU(){
if(document.getElementsByName("name").length>0
&&document.getElementsByName("date").length>0
&&document.getElementsByName("gender").length>0
&&document.getElementsByName("age").length>0
&&document.getElementsByName("phone").length>0)

document.getElementsByName("ru").submit();
}
function checkA(){
if(document.getElementsByName("aname").length>0
&&document.getElementsByName("adate").length>0
&&document.getElementsByName("agender").length>0
&&document.getElementsByName("aage").length>0
&&document.getElementsByName("aphone").length>0)

document.getElementsByName("ra").submit();
}

</script>
</head>
<body>
<div id="login-box">
  <div class="left">
    <h1>Sign up(User)</h1>
<form method="post" name="ru" action="regU.php">    
    <input type="text" name="name" required placeholder="Name" />
    <input type="text" name="date" required placeholder="date of birth(ddmmyyyy)" />
    <input type="text" name="gender" required placeholder="Male or female" />
    <input type="text" name="age" required placeholder="Age(18 or 25....) " />
     <input type="text" name="phone" required placeholder="Phone No(9..9)" />
    <input type="submit" onclick="checkU()" name="signup_submit" value="Sign up" />
</form>
  </div>
  
  <div class="right">
<form method="post" name="ra" action="regA.php">  
  <h1>Sign up(Admin)</h1>   
 <input type="text" name="namea" required placeholder="Name" />
    <input type="text" name="datea" required placeholder="date of birth" />
    <input type="text" name="gendera" required placeholder="Male or female" />
    <input type="text" name="agea" required placeholder="Age(18 or 25....)" />
     <input type="text" name="phonea" required placeholder="Phone No(9..9)" />
    <input type="submit" onclick="checkA()" name="signup_submit" value="Sign up" />
</form> 
 </div>
  <div class="or">OR</div>
</div>
</body>
</html>