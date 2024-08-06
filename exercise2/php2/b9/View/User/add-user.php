<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thêm mới</title>
</head>
<body>
    <form action="<?=BASE_URL .'?act=addPostuser'?>" method="post">
        Name:
        <input type="text" name="nameUser">
        Age:
        <input type="text" age="ageUser">
        Address:
        <input type="text" address="addressUser">
        <button type="sumbit" name="btnSumbit">thêm mới</button>
    </form>
</body>
</html>