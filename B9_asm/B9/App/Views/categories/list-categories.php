<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List Categories</title>
</head>
<body>
    <h1>Categories</h1>
    <a href="index.php?controller=category&act=create">Add Category</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($categories)) {
                foreach ($categories as $category) {
                    echo "<tr>";
                    echo "<td>" . $category['id'] . "</td>";
                    echo "<td>" . $category['name'] . "</td>";
                    echo "<td>
                            <a href='index.php?controller=category&act=edit&id=" . $category['id'] . "'>Edit</a>
                            <a href='index.php?controller=category&act=delete&id=" . $category['id'] . "'>Delete</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No categories found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
