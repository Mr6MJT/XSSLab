<?php
// Coded by Mahdi jaber [Mr MJT,in digital world] 
?>
<html>
<h1 class="s">This Lab coded by Mr MJT [Mahdi Jaber], Not finished yet! </h1>
<a href="https://github.com/Mr6MJT"> FOLLOW ME </a>
<form method="GET">
<!--- Note: if you are reading the source code: bati5 == watermelon :) --->
<input type="name" name="userbati5" placeholder="UserName" class="inp1">
<input type="password" name="passbati5" placeholder="Password" class="inp2">
<input type="submit" value="send" class="inp3">
</form>
<style>
body {
   background-color: green;
}
a {
   margin-top: 0px;
   margin-right: 70px;
   margin-down: 0px;
   margin-left: 45%;
   color: white;
   font-size: 20px;
}
.s {
   padding: 10px 10px 10px 10px;
   margin-top: 0px;
   margin-right: 70px;
   margin-down: 0px;
   margin-left: 210px;
   text-shadow: 5px 1px 4px white; 
}
.inp1, .inp2, .inp3 {
   padding: 10px 10px 10px 10px;
   margin-top: 30px;
   margin-right: -230px;
   margin-left: 290px;
}
</style>
</html>


<?php
$namebati5 = $_GET["userbati5"];
$paswrdbati5 = $_GET["passbati5"];
echo " " . $namebati5;
?>
