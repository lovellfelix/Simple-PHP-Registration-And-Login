<?php
include("mysqli_connect.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$username=mysql_real_escape_string($_POST['username']); 
$password=mysql_real_escape_string($_POST['password']); 
$password=md5($password); // Encrypted Password
$sql="Insert into users(username,passcode) values('$username','$password');";
$result=mysql_query($sql);
echo "Registration Successfully";
}
?>
<html>
<body>
<form action="registration.php" method="post">
<label>UserName :</label>
<input type="text" name="username"/><br />


<label>Password :</label>
<input type="password" name="password"/><br/>
<input type="submit" value=" Registration "/><br />
</form>
</body>
</html>