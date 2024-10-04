<!DOCTYPE html>

<html>
<head>
    <title></title>

    <style type="text/css">
        body
        {
            font-family:sans-serif;
            size:14px;
            color:#336699;
            margin-left:100px;
        }

        h1
        {
            color:#FF0000;
        }


    </style>
</head>
<body>

<h1>The order details: </h1>
<br>
<?php

define("TIRES", 50);
define("OIL", 100);
define("SPARKPLUGS", 40);

    if($_POST['tireqty'] && $_POST['oilqty'] && $_POST['sparkqty']) {
        $tireQuantity = $_POST['tireqty'];
        $oilQuantity = $_POST['oilqty'];
        $sparkQuantity = $_POST['sparkqty'];

        $totalTirePrice =$tireQuantity * TIRES;
        $totalOilPrice =$oilQuantity * OIL;
        $totalSparkPrice =$sparkQuantity * SPARKPLUGS;

        echo "The total amount of tires is: $totalTirePrice";
        echo "<br>";
        echo "The total amount of oil is: $totalOilPrice";
        echo "<br>";
        echo "The total amount of spark plugs is: $totalSparkPrice";
        echo "<br>";
        echo "<br>";

        $overallPrice = $totalTirePrice + $totalOilPrice + $totalSparkPrice;
        $taxedPrice = $overallPrice * 1.19;

        echo "The overall price is: $overallPrice";
        echo "<br>";
        echo "The taxed overall price is: $taxedPrice";
    }

?>
</body>
</html>
