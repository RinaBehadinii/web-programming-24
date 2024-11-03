<?php
/* @var mysqli $conn */
include 'dbconnection.php';

if (isset($_GET["bid"])) {
    $bid = $_GET["bid"];

    $query = "SELECT * FROM phones WHERE bid='$bid'";
} else {
    $query = "SELECT * FROM phones";
}

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="col-sm-4">';
    echo ' <div class="product-image-wrapper">';
    echo '<div class="single-products">';
    echo ' <div class="productinfo text-center">';
    echo '<img src="images/' . $row['photo1'] . '" alt=""/>';
    echo '<h2>$' . $row['price'] . '</h2>';
    echo '<p>' . $row['name'] . '</p>';
    echo '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                        to cart</a>';
    echo ' </div>';
    echo '<div class="product-overlay">';
    echo '<div class="overlay-content">';
    echo '<h2>$' . $row['price'] . '</h2>';
    echo '<p>' . $row['name'] . '</p>';
    echo '<a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>';
    echo '</div >';
    echo '</div >';
    echo '</div >';

    echo '</div >';
    echo '</div >';

}

