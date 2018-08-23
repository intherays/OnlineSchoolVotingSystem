
<?php
$user = $_POST['uname'];
$psw = $_POST['psw'];
if($user =="admin" && $psw == "admin"){
    header("Location: adminhome.php"); /* Redirect browser */
exit();
}
else{
include("header.html");
?>
<div style="margin-top: 10%">
<div class="w3-panel w3-red" >
  <center> <p>Invalid Admin.</p> </center>
</div> 
</div>
<?php
}
?>