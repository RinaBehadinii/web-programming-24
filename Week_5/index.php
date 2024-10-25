<?php
/* @var mysqli $conn */
include "includes/dbconnection.php";

$query = "SELECT * FROM `brands`";

$result = mysqli_query($conn, $query);

$editBrand = null;
if (isset($_GET['edit'])) {
    $editId = $_GET['edit'];

    $editResult = $conn->query("SELECT * FROM `brands` WHERE `brands`.`bid` = $editId");

    if ($editResult->num_rows > 0) {
        $editBrand = $editResult->fetch_assoc();
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Brands</title>
</head>
<body>

<h2>Brand Management</h2>

<h3>Add New Brand</h3>
<form method="post" action="insert_brand.php">
    <label>Brand Name:</label>
    <input type="text" name="name" required>
    <button type="submit">Add</button>
</form>

<?php if ($editBrand): ?>
    <h3>Edit Brand</h3>
    <form method="post" action="edit_brand.php">
        <label>Brand Name:</label>
        <input type="hidden" name="id" value="<?php echo $editBrand['bid'] ?>">
        <input type="text" name="name" value="<?php echo $editBrand['name'] ?>" required>
        <button type="submit">Edit</button>
    </form>
<?php endif; ?>

<h3>Brand List</h3>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Actions</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['bid'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td>
                <a href="index.php?edit=<?php echo $row['bid']; ?>">Edit</a>
                <a href="delete_brand.php?id=<?php echo $row['bid'] ?>"
                   onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>

</body>
</html>

<?php
mysqli_close($conn);
?>
