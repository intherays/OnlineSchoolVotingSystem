<?php
include("admin-header.html");
?>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class=well>
                <ul class="w3-ul">
                    <a href="result.php" class="">
                        <li class="w3-red">RED</li>
                    </a> <br>
                    <a href="resultGreen.php" class="">
                        <li class="w3-green">GREEN</li>
                    </a> <br>
                    <a href="resultBlue.php" class="">
                        <li class="w3-blue">BLUE</li>
                    </a> <br>
                    <a href="resultYellow.php" class="">
                        <li class="w3-yellow">YELLOW</li>
                    </a> <br>
                    <a href="resultSecret.php" class="">
                        <li class="w3-teal">SECRETARY</li>
                    </a>
                </ul>
            </div>
        </div>

        <!--  End of List -->

        <div class="col-md-9">
            <div class="well">
                <!-- captain -->
                <h5>Head-secretary</h5>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="w3-ul w3-border">
                            <?php
                        include("conn.php");
                        $sql = "SELECT * FROM secretary WHERE cat='Head-secretary' AND GENDER='boy' ORDER BY votes DESC";
                        $res = mysqli_query($con,$sql);
                        
                        if (mysqli_num_rows($res) > 0) {
                            while($row = mysqli_fetch_array($res)) { 
                        ?>
                                <li>
                                    <?php
                                    echo $row["Name"];?>
                                        <span class="w3-badge w3-right w3-margin-right w3-teal "><?php echo $row["votes"]; ?></span>
                                </li>
                                <?php }} ?>

                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="w3-ul w3-border">

                            <?php
                        include("conn.php");
                        $sql = "SELECT * FROM secretary WHERE cat='Head-secretary' AND GENDER='girl' ORDER BY votes DESC";
                        $res = mysqli_query($con,$sql);
                      
                        if (mysqli_num_rows($res) > 0) {
                            while($row = mysqli_fetch_array($res)) { 
                        ?>
                                <li>
                                    <?php
                                    echo $row["Name"];?>
                                        <span class="w3-badge w3-right w3-margin-right w3-teal "><?php echo $row["votes"]; ?></span>
                                </li>
                                <?php }} ?>
                        </ul>

                    </div>
                </div>
                <!-- Cultural-secretary -->
                <h5>Cultural-secretary</h5>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="w3-ul w3-border">
                            <?php
                        include("conn.php");
                        $sql = "SELECT * FROM secretary WHERE cat='Cultural-secretary' AND GENDER='boy' ORDER BY votes DESC";
                        $res = mysqli_query($con,$sql);
                        
                        if (mysqli_num_rows($res) > 0) {
                            while($row = mysqli_fetch_array($res)) { 
                        ?>
                                <li>
                                    <?php
                                    echo $row["Name"];?>
                                        <span class="w3-badge w3-right w3-margin-right w3-teal "><?php echo $row["votes"]; ?></span>
                                </li>
                                <?php }} ?>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="w3-ul w3-border">
                            <?php
                        include("conn.php");
                        $sql = "SELECT * FROM secretary WHERE cat='Cultural-secretary' AND GENDER='girl' ORDER BY votes DESC";
                        $res = mysqli_query($con,$sql);
                        
                        if (mysqli_num_rows($res) > 0) {
                            while($row = mysqli_fetch_array($res)) { 
                        ?>
                                <li>
                                    <?php
                                    echo $row["Name"];?>
                                        <span class="w3-badge w3-right w3-margin-right w3-teal "><?php echo $row["votes"]; ?></span>
                                </li>
                                <?php }} ?>
                        </ul>

                    </div>
                </div>
                <!-- Sports-secretary -->
                <h5>Sports-secretary</h5>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="w3-ul w3-border">
                            <?php
                        include("conn.php");
                        $sql = "SELECT * FROM secretary WHERE cat='Sports-secretary' AND GENDER='boy' ORDER BY votes DESC";
                        $res = mysqli_query($con,$sql);
                        
                        if (mysqli_num_rows($res) > 0) {
                            while($row = mysqli_fetch_array($res)) { 
                        ?>
                                <li>
                                    <?php
                                    echo $row["Name"];?>
                                        <span class="w3-badge w3-right w3-margin-right w3-teal "><?php echo $row["votes"]; ?></span>
                                </li>
                                <?php }} ?>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="w3-ul w3-border">
                            <?php
                        include("conn.php");
                        $sql = "SELECT * FROM secretary WHERE cat='Sports-secretary' AND GENDER='girl' ORDER BY votes DESC";
                        $res = mysqli_query($con,$sql);
                        
                        if (mysqli_num_rows($res) > 0) {
                            while($row = mysqli_fetch_array($res)) { 
                        ?>
                                <li>
                                    <?php
                                    echo $row["Name"];?>
                                        <span class="w3-badge w3-right w3-margin-right w3-teal "><?php echo $row["votes"]; ?></span>
                                </li>
                                <?php }} ?>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
