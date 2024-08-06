<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Category</title>
</head>
<body>
    <h1>Add Category</h1>
    <form action="index.php?controller=category&act=store" method="POST">
        <input type="text" name="name" placeholder="Category Name" required>
        <button type="submit">Add Category</button>
    </form>
</body>
</html>
