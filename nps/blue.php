<?php
    include("header.html");
    include("conn.php");
?>
    <section class="container">
        <form method="" action="voteBlue.php">
            <div class="row">
                <!-- Captain -->
                <div class="col-md-6 ">
                    <div class="panel panel-info">
                        <div class="panel-heading">Captain</div>
                        <!-- Captain Boys -->
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li><label>Boys</label></li>
                                <?php 
                        $sqlCaptain = "SELECT * FROM blue WHERE cat='Captain' AND gender='boy'";
                        $result = mysqli_query($con,$sqlCaptain);
                        //echo "Query Result is : ".mysqli_num_rows($result);
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)) { ?>
                                <li class="list-group-item">
                            <input type="radio"  name="captainBoy" value="<?php echo $row['cid'];?>" required>
                                    <?php 
                                echo $row['Name'];  ?>
                                </li>
                                <?php  } }?>
                            </ul>
                        </div>
                        <!-- /Captain Boys -->
                        <!-- Captain Girls -->
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li><label>Girls</label></li>
                                <?php 
                        $sqlCaptain = "SELECT * FROM blue WHERE cat='Captain' AND gender='girl'";
                        $result = mysqli_query($con,$sqlCaptain);
                        //echo "Query Result is : ".mysqli_num_rows($result);
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)) { ?>


                                <li class="list-group-item">
                                    <input type="radio" name="captainGirl" value="<?php echo $row['cid'];?>">
                                    <?php 
                                echo $row['Name'];  ?>
                                </li>
                                <?php  } }?>
                            </ul>
                        </div>
                        <!-- /Captain Girls -->

                    </div>
                </div>
                <!------------------------------------------------------------------->
                <!-- Vice-Captain -->


                <div class="col-md-6 ">
                    <div class="panel panel-info">
                        <div class="panel-heading">Vice-Captain</div>
                        <!-- Vice-Captain Boys -->
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li><label>Boys</label></li>
                                <?php 
                        $sqlCaptain = "SELECT * FROM blue WHERE cat='Vice-Captain' AND gender='boy'";
                        $result = mysqli_query($con,$sqlCaptain);
                        //echo "Query Result is : ".mysqli_num_rows($result);
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)) { ?>
                                <li class="list-group-item">
                                    <input type="radio" name="vcBoy" value="<?php echo $row['cid'];?>">
                                    <?php 
                                echo $row['Name'];  ?>
                                </li>
                                <?php  } }?>
                            </ul>
                        </div>
                        <!-- /Vice-Captain Boys -->
                        <!-- Vice-Captain Girls -->
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li><label>Girls</label></li>
                                <?php 
                        $sqlCaptain = "SELECT * FROM blue WHERE cat='Vice-Captain' AND gender='girl'";
                        $result = mysqli_query($con,$sqlCaptain);
                        //echo "Query Result is : ".mysqli_num_rows($result);
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)) { ?>


                                <li class="list-group-item">
                                    <input type="radio" name="vcGirl" value="<?php echo $row['cid'];?>">
                                    <?php 
                                echo $row['Name'];  ?>
                                </li>
                                <?php  } }?>
                            </ul>
                        </div>
                        <!-- /Vice-Captain Girls -->

                    </div>

                </div>


            </div>
            <!-- End of Row 1 -->


            <!--------------------- Head Secretary ----------------------->
            <div class="row">
                <div class="col-md-4 ">
                    <div class="panel panel-info">
                        <div class="panel-heading">Head-Secretary</div>
                        <!-- Head-secretary Boys -->
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li><label>Boys</label></li>
                                <?php 
                        $sqlCaptain = "SELECT * FROM secretary WHERE cat='Head-secretary' AND gender='boy'";
                        $result = mysqli_query($con,$sqlCaptain);
                        //echo "Query Result is : ".mysqli_num_rows($result);
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)) { ?>
                                <li class="list-group-item">
                                    <input type="radio" name="hsBoy" value="<?php echo $row['cid'];?>">
                                    <?php 
                                echo $row['Name'];  ?>
                                </li>
                                <?php  } }?>
                            </ul>
                        </div>
                        <!-- /Head-secretary Boys -->
                        <!-- Head-secretary Girls -->
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li><label>Girls</label></li>
                                <?php 
                        $sqlCaptain = "SELECT * FROM secretary WHERE cat='Head-secretary' AND gender='girl'";
                        $result = mysqli_query($con,$sqlCaptain);
                        //echo "Query Result is : ".mysqli_num_rows($result);
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)) { ?>
                                <li class="list-group-item">
                                    <input type="radio" name="hsGirl" value="<?php echo $row['cid'];?>">
                                    <?php 
                                echo $row['Name'];  ?>
                                </li>
                                <?php  } }?>
                            </ul>
                        </div>
                        <!-- /Head-secretary Girls -->

                    </div>
                </div>



                
             


             <!--------------------------------- Cultural Secretary ------------------------>
                <div class="col-md-4 ">
                       <div class="panel panel-info">
                        <div class="panel-heading">Cultural-secretary</div>
                        <!-- Cultural-secretary Boys -->
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li><label>Boys</label></li>
                                <?php 
                        $sqlCaptain = "SELECT * FROM secretary WHERE cat='Cultural-secretary' AND gender='boy'";
                        $result = mysqli_query($con,$sqlCaptain);
                        //echo "Query Result is : ".mysqli_num_rows($result);
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)) { ?>
                                <li class="list-group-item">
                                    <input type="radio" name="csBoy" value="<?php echo $row['cid'];?>">
                                    <?php 
                                echo $row['Name'];  ?>
                                </li>
                                <?php  } }?>
                            </ul>
                        </div>
                        <!-- /Cultural-secretary Boys -->
                        <!-- Cultural-secretary Girls -->
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li><label>Girls</label></li>
                                <?php 
                        $sqlCaptain = "SELECT * FROM secretary WHERE cat='Cultural-secretary' AND gender='girl'";
                        $result = mysqli_query($con,$sqlCaptain);
                        //echo "Query Result is : ".mysqli_num_rows($result);
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)) { ?>


                                <li class="list-group-item">
                                    <input type="radio" name="csGirl" value="<?php echo $row['cid'];?>">
                                    <?php 
                                echo $row['Name'];  ?>
                                </li>
                                <?php  } }?>
                            </ul>
                        </div>
                        <!-- /Cultural-secretary Girls -->

                    </div>
                </div>
<!-- Sports-secretary ------------------->
                   <div class="col-md-4 ">
                    <div class="panel panel-info">
                        <div class="panel-heading">Sport-secretary</div>
                        <!-- Sports-secretary Boys -->
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li><label>Boys</label></li>
                                <?php 
                        $sqlCaptain = "SELECT * FROM secretary WHERE cat='Sports-secretary' AND gender='boy'";
                        $result = mysqli_query($con,$sqlCaptain);
                        //echo "Query Result is : ".mysqli_num_rows($result);
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)) { ?>
                                <li class="list-group-item">
                                    <input type="radio" name="ssBoy" value="<?php echo $row['cid'];?>" required>
                                    <?php 
                                echo $row['Name'];  ?>
                                </li>
                                <?php  } }?>
                            </ul>
                        </div>
                        <!-- /Sport-secretary Boys -->
                        <!-- Sport-secretary Girls -->
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li><label>Girls</label></li>
                                <?php 
                        $sqlCaptain = "SELECT * FROM secretary WHERE cat='Sports-secretary' AND gender='girl'";
                        $result = mysqli_query($con,$sqlCaptain);
                        //echo "Query Result is : ".mysqli_num_rows($result);
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)) { ?>


                                <li class="list-group-item">
                                    <input type="radio" name="ssGirl" value="<?php echo $row['cid'];?>" required>
                                    <?php 
                                echo $row['Name'];  ?>
                                </li>
                                <?php  } }?>
                            </ul>
                        </div>
                        <!-- /Sport-secretary Girls -->

                    </div>
                </div>
                
            </div>
            <!----------------------- End Row2------------------Button -->
            <div class="row">
                <input type="submit" class="btn btn-primary btn-block" value="Vote">
            </div>
        </form>
    </section>
