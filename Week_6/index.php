<!DOCTYPE html>
<html lang="en">
<?php
include 'include/head.php';
?>

<body>

<?php
include 'include/header.php';
?>


<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <?php include 'include/brands.php' ?>

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Featured Items</h2>
                    <?php include 'include/items.php' ?>

                </div><!--features_items-->


            </div>
        </div>
    </div>
</section>

<?php
include 'include/footer.php';

include 'include/scripts.php'
?>

</body>
</html>