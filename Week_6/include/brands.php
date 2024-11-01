<?php
/* @var mysqli $conn */

include 'dbconnection.php';

$query = "SELECT * FROM `brands`";

$result = mysqli_query($conn, $query);

echo '<div class="panel-group category-products" id="accordian"><!--category-productsr-->';

while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="panel panel-default">';
    echo '<div class="panel-heading">';
    echo '<h4 class="panel-title"><a href="#">' . $row['name'] . '</a></h4>';
    echo ' </div>';
    echo '</div>';
}


echo '</div><!--/category-products-->';
