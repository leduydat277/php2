<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới</title>
</head>

<body>
    <form action="<?= BASE_URL . '?act=addpostuser' ?>" method="post" enctype="multipart/form-data">
        Name:
        <input type="text" name="nameUser">
        giá:
        <input type="text" name="ageUser">
        lượt xem:
        <input type="text" name="addressUser">
        Image:
        <input type="file" name="imageUser">

        <button type="submit" name="btnSubmit">Thêm mới</button>
    </form>
</body>

</html>