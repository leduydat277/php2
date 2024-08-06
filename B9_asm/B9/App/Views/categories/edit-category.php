<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Category</title>
</head>
<body>
    <h1>Edit Category</h1>
    <form action="index.php?controller=category&act=update&id=<?php echo $category['id']; ?>" method="POST">
        <input type="text" name="name" value="<?php echo $category['name']; ?>" required>
        <button type="submit">Update Category</button>
    </form>
</body>
</html>
