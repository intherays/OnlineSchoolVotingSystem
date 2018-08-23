<?php
$cid = array($_GET['captainBoy'],$_GET['captainGirl'],
             $_GET['vcBoy'],$_GET['vcGirl']);

$scid = array($_GET['hsBoy'],$_GET['hsGirl'],
             $_GET['csBoy'],$_GET['csGirl'],
             $_GET['ssBoy'],$_GET['ssGirl']);
include("conn.php");

for($i=0;$i<count($cid);$i++){
    echo "<br> Candidate ID : ".$cid[$i];
    $sql = "UPDATE green SET votes = votes+1 Where cid='".$cid[$i]."'";
    $result = mysqli_query($con,$sql);
    echo "<br>Result is : ".$result."<br>Sql : ".$sql; 
    echo "<br>-------------<br>";
}

for($i=0;$i<count($scid);$i++){
    echo "<br> Candidate ID : ".$scid[$i];
    $sql = "UPDATE secretary SET votes = votes+1 Where cid='".$scid[$i]."'";
    $result = mysqli_query($con,$sql);
    echo "<br>Result is : ".$result."<br>Sql : ".$sql; 
    echo "<br>-------------<br>";
}
?>
  <script type="text/javascript">
        alert("Thanks for your Valiable Vote");
         window.location.href = "index.php";
  </script>