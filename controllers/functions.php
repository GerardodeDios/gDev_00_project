<?php
    function debtors_list () {
        $query = mysqli_query("SELECT user_name FROM users");
        $debtors = mysqli_fetch_array($query);
        $rows = count($debtors);
        return $rows;
    }
