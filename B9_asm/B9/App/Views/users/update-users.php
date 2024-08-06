<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa</title>
</head>

<body>
    <form action="<?= BASE_URL . '?act=updatepostuser'?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="iduser" value="<?=$user->id ?>">
        Name:
        <input type="text" name="nameUser" value="<?=$user->name ?>">
        giá:
        <input type="text" name="ageUser" value="<?=$user->age ?>">
        lượt xem:
        <input type="text" name="addressUser" value="<?=$user->address?>">
        Image:
        <img src="<?=$user->image?>" alt="" width="100">
        <input type="file" name="imageUser">

        <button type="submit" name="btnSubmit">Chỉnh sửa</button>
    </form>
</body>

</html>