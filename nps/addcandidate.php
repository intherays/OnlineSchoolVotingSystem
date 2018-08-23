<?php
include("admin-header.html");
?>
<html>
<body>
<section>
    <div class="container">
        <div class="row">
            <form class="w3-container w3-card-4" action="updategroup.php" method="post">
                <div class="col-md-6">
                    <h1>Select School Group</h1>
                    <select class="w3-select w3-border" name="group" required>
                        <option value="" disabled selected>Choose Group</option>
                        <option value="Red" class="w3-text-red">Red</option>
                        <option value="Green" class="w3-text-green">Green </option>
                        <option value="Blue" class="w3-text-blue">Blue </option>
                        <option value="Yellow" class="w3-text-yellow">Yellow </option>
                    </select>
                    <h1>Boys</h1>
                    <label>Candidate 1</label>
                    <input class="w3-input" type="text" name="b1" required>
                    <label>Candidate 2</label>
                    <input class="w3-input" type="text" name="b2" required>
                    <label>Candidate 3</label>
                    <input class="w3-input" type="text" name="b3" required>
                </div>
                <div class="col-md-6">
                    <h1>Select Candidate Category</h1>
                    <select class="w3-select w3-border" name="cat" required>
                        <option value="" disabled selected>Choose Category</option>
                        <option value="Captain">Captain</option>
                        <option value="Vice-Captain">Vice-Captain</option>
                    </select>
                    <h1>Girls</h1>
                    <label>Candidate 1</label>
                    <input class="w3-input" type="text" name="g1" required>
                    <label>Candidate 2</label>
                    <input class="w3-input" type="text" name="g2" required>
                    <label>Candidate 3</label>
                    <input class="w3-input" type="text" name="g3" required>
                    <br>
                    <p><input type="submit" class="w3-btn w3-teal pull-right" value="Add ❯" /> <br> </p> <br>
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>
