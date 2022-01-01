<?php
require("html/header.html");

echo "<a class='btn btn-secondary mt-5 m-lg-4' href='ProductController.php?action=addProd'>".'Add'.'</a>';

echo '<table class="table table-light container mt-5">';
foreach ($products as $prod) {

    $type = '';
    $photo = $prod[6].'.jpeg';

    if ($prod[4] == 'u') {
        $type = 'a unité';
    }
    else {
        $type = 'a poids';
    }
    echo '<tr>';
    echo '<td>'.$prod[0].'</td>';
    echo '<td>'.$prod[1].'</td>';
    echo '<td>'.$prod[2].'</td>';
    echo '<td>'.$prod[3].'</td>';
    echo '<td>'.$type.'</td>';
    echo '<td>'.$prod[5].'</td>';
    echo '<td>'."<a class='btn btn-danger' href='ProductController.php?action=delProd&numProd=$prod[0]'>".'Delete'.'</a>'.'</td>';
    echo '<td>'."<a class='btn btn-warning' href='ProductController.php?action=upDateProd&numProd=$prod[0]'>".'UpDate'.'</a>'.'</td>';
    echo '<td>'."<a class='btn btn-warning' href='ProductController.php?action=findOne&numProd=$prod[0]'>".'Details'.'</a>'.'</td>';
    echo '</tr>';
}
echo '</table>';





