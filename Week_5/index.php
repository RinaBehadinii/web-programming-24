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

<h3>Edit Brand</h3>
<form method="post" action="edit_brand.php">
    <label>Brand Name:</label>
    <input type="hidden" name="id" value="[EDIT_BRAND_ID]">
    <input type="text" name="name" value="[EDIT_BRAND_NAME]" required>
    <button type="submit">Edit</button>
</form>

<h3>Brand List</h3>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Actions</th>
    </tr>
    <tr>
        <td>[BRAND_ID]</td>
        <td>[BRAND_NAME]</td>
        <td>
            <a href="index.php?edit=[BRAND_ID]">Edit</a>
            <a href="delete_brand.php?id=[BRAND_ID]" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
</table>

</body>
</html>
