<?php
require("html/header.html");
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php
        $photo = $products[6].'.jpeg';

        if ($products[4] == 'u') {
            $type = 'a unité';
        }
        else {
            $type = 'a poids';
        }
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col-4">
                <div class="card border-primary mb-3" style="max-width: 20rem;">
                    <div class="card-header"><?php echo $products[1] ?></div>
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $products[2] ?></h4>
                        <h4 class="card-title"><?php echo $products[3] ?></h4>
                        <p class="card-text"><?php echo $type ?></p>
                        <p class="card-text"><?php echo $products[5] ?></p>
                        <a href="ProductController.php?action=allProds" class="card-link"> <<< </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>