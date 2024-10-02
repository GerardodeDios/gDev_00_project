<?php
include("header.php");
?>

    <div class="text-center mb-4">
        <h3 class="title">Add New Concept</h3>
        <p class="text-muted">Complete the form below to add a new concept</p>
    </div>

    <div class="container d-flex justify-content-center">
        <form action="" method="post" class="forms">
            <div class="row">
                <div class="col">
                    <label class="form-label">Concept</label>
                    <input type="text" class="form-control" id="debt_concept" name="debt_concept">
                </div>
            </div>
            <button type="submit" class="btn btn-outline-dark mt-3" id="save_concept">Save</button>
        </form>
    </div>


<?php
include("footer.php");
