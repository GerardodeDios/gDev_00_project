<?php
    include("../includes/header.php");
    require("functions.php");

    $array = new ArrayObject(debtors_list());
    $longArray = count($array);

    echo $longArray;
?>

    <div class="text-center mb-4 mt-5">
        <h3 class="title">Add New Debt</h3>
        <p class="text-muted">Complete the form below to add a new debt</p>
    </div>

    <div class="container d-flex justify-content-center mt-5">
        <form action="" method="post" class="forms">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Name</label>
                    <select class="form-select">

                        <?php
                            require "functions.php";
                            $array = new ArrayObject(debtors_list());
                            $longArray = count($array);
                            for ($i=0; $i<$longArray; $i++) {
                                echo "<option>'$array[$i]'</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="col">
                    <label class="form-label">Date</label>
                    <input type="date" id="debt_date" name="debt_date" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Concept</label>
                    <input type="text" id="debt_concept" name="debt_concept" class="form-control">
                </div>
                <div class="col">
                    <label class="form-label">Amount</label>
                    <input type="number" id="debt_amount" name="debt_amount" class="form-control">
                </div>
            </div>
        </form>
    </div>


<?php
    include("../includes/footer.php");


