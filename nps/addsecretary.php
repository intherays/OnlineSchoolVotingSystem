<?php
    include("admin-header.html");
?>
<section>
    <div class="container">
        <form class="w3-container w3-card-4" action="updatesecretary.php" method="post">
            <div class="row">
                <div class="col-md-12">
                    <h1>Select Secretary</h1>
                     <select class="w3-select w3-border" name="cat" required>
                        <option value="" disabled selected>Choose Category</option>
                        <option value="Head-secretary">Head-secretary</option>
                        <option value="Cultural-secretary">Cultural-secretary</option>
                        <option value="Sports-secretary">Sports-secretary</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h1>Boys</h1>
                    <label>Candidate 1</label>
                    <input class="w3-input" type="text" name="b1" required>
                    <label>Candidate 2</label>
                    <input class="w3-input" type="text" name="b2" required>
                    <label>Candidate 3</label>
                    <input class="w3-input" type="text" name="b3" required>
                </div>
                <div class="col-md-6">
                    <h1>Girls</h1>
                    <label>Candidate 1</label>
                    <input class="w3-input" type="text" name="g1" required>
                    <label>Candidate 2</label>
                    <input class="w3-input" type="text" name="g2" required>
                    <label>Candidate 3</label>
                    <input class="w3-input" type="text" name="g3" required>
                    <br>
                    <p><input type="submit" class="w3-btn w3-teal pull-right" value="Add ❯"/> <br> </p> 
                    <br>
                </div>
            </div>
        </form>
    </div>
</section>