<html>
<form method="GET">
<input type="name" name="username" placeholder="UserName" class="inp1">
<input type="password" name="passwd" placeholder="Password" class="inp2">
<input type="submit" class="inp3">
</form>



</html>
<?php 
$user = $_GET["username"];
$pass = $_GET["passwd"];

echo "Hello " . $user;

?>