<?php
include '../assets/includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="de-ch">

<head>
    <?php include 'static/head.php' ?>
    <title>Rolling Bakery</title>
</head>

<body>
    <div class="header">
        <?php include 'static/navbar.php' ?>

        <div class="heroContainer">
            <h1 class="heroText">
                <?php

                $dbTest = new Test();
                $dbTest->setOrdersStatement("Der Grosse");
                $dbTest->getOrders();
                ?>
            </h1>
        </div>
    </div>
    <div class="footer">

    </div>
</body>

</html>