<?php
$group = $_POST['group'];
$cat = $_POST['cat'];
$b1=$_POST['b1'];
$b2=$_POST['b2'];
$b3=$_POST['b3'];
$g1=$_POST['g1'];
$g2=$_POST['g2'];
$g3=$_POST['g3'];
echo $cat;
echo $_POST["group"]."<br>".$cat."<br>".$b1."<br>".$b2."<br>".$b3."<br>".$g1."<br>".$g2."<br>".$g3;
$boyname=array($b1,$b2,$b3);
$girlname=array($g1,$g2,$g3);
 $cid = $group."-Boy-".$cat."-";
echo "CID OUTSIDE LOOP : ".$cid;
// SQL DB Connection
include("conn.php");
// Group Condition
/* Red Group */
if($group=="Red"){
    echo "<br>----------------------- if loop---------------------------- <br>";
    for($i=0;$i<3;$i++){
    echo "<br>---------Start Boyzzz --------------<br>";
    $cid = $group."-Boy-".$cat."-".($i+1);
    echo "<br>cid :  ". $cid;
    $sql="insert into red values ('".$cat."','boy','". $cid."','". $boyname[$i]."',0)";
    echo "<br><br>" .$sql." <br><br>";
    $result = mysqli_query($con, $sql);
    echo "<br> The resut : ".$result;
    echo "<br>---------End loop Boyzzz --------------<br>";
    }

 for($i=0;$i<3;$i++){
    echo "<br>---------Start Girls --------------<br>";
    $cid = $group."-Girl-".$cat."-".($i+1);
    echo "<br>cid : ". $cid;
    $sql="insert into red values ('".$cat."','girl','". $cid. "','". $girlname[$i]."',0)";
    echo "<br><br>" .$sql." <br><br>";
    $result =  mysqli_query($con, $sql);
    echo "<br> The resut : " . $result;echo "<br>---------End loop Girls --------------<br>";
    }

}

else if($group=="Green"){
    echo "<br>----------------------- if loop---------------------------- <br>";
    for($i=0;$i<3;$i++){
    echo "<br>---------Start Boyzzz --------------<br>";
    $cid = $group."-Boy-".$cat."-".($i+1);
    echo "<br>cid :  ". $cid;
    $sql="insert into green values ('".$cat."','boy','". $cid."','". $boyname[$i]."',0)";
    echo "<br><br>" .$sql." <br><br>";
    $result = mysqli_query($con, $sql);
    echo "<br> The resut : ".$result;
    echo "<br>---------End loop Boyzzz --------------<br>";
    }

 for($i=0;$i<3;$i++){
    echo "<br>---------Start Girls --------------<br>";
    $cid = $group."-Girl-".$cat."-".($i+1);
    echo "<br>cid : ". $cid;
    $sql="insert into green values ('".$cat."','girl','". $cid. "','". $girlname[$i]."',0)";
    echo "<br><br>" .$sql." <br><br>";
    $result =  mysqli_query($con, $sql);
    echo "<br> The resut : " . $result;echo "<br>---------End loop Girls --------------<br>";
    }

}

else if($group=="Blue"){
    echo "<br>----------------------- if loop---------------------------- <br>";
    for($i=0;$i<3;$i++){
    echo "<br>---------Start Boyzzz --------------<br>";
    $cid = $group."-Boy-".$cat."-".($i+1);
    echo "<br>cid :  ". $cid;
    $sql="insert into blue values ('".$cat."','boy','". $cid."','". $boyname[$i]."',0)";
    echo "<br><br>" .$sql." <br><br>";
    $result = mysqli_query($con, $sql);
    echo "<br> The resut : ".$result;
    echo "<br>---------End loop Boyzzz --------------<br>";
    }

 for($i=0;$i<3;$i++){
    echo "<br>---------Start Girls --------------<br>";
    $cid = $group."-Girl-".$cat."-".($i+1);
    echo "<br>cid : ". $cid;
    $sql="insert into blue values ('".$cat."','girl','". $cid. "','". $girlname[$i]."',0)";
    echo "<br><br>" .$sql." <br><br>";
    $result =  mysqli_query($con, $sql);
    echo "<br> The resut : " . $result;echo "<br>---------End loop Girls --------------<br>";
    }

}

else if($group=="Yellow"){
    echo "<br>----------------------- if loop---------------------------- <br>";
    for($i=0;$i<3;$i++){
    echo "<br>---------Start Boyzzz --------------<br>";
    $cid = $group."-Boy-".$cat."-".($i+1);
    echo "<br>cid :  ". $cid;
    $sql="insert into yellow values ('".$cat."','boy','". $cid."','". $boyname[$i]."',0)";
    echo "<br><br>" .$sql." <br><br>";
    $result = mysqli_query($con, $sql);
    echo "<br> The resut : ".$result;
    echo "<br>---------End loop Boyzzz --------------<br>";
    }

 for($i=0;$i<3;$i++){
    echo "<br>---------Start Girls --------------<br>";
    $cid = $group."-Girl-".$cat."-".($i+1);
    echo "<br>cid : ". $cid;
    $sql="insert into yellow values ('".$cat."','girl','". $cid. "','". $girlname[$i]."',0)";
    echo "<br><br>" .$sql." <br><br>";
    $result =  mysqli_query($con, $sql);
    echo "<br> The resut : " . $result;echo "<br>---------End loop Girls --------------<br>";
    }

}

  


?>
  <script type="text/javascript">
        alert("Updated Successfully");
         window.location.href = "adminhome.php";
        
    </script>
