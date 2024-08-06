<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="<?= BASE_URL . '?act=adduser'?>">Thêm mới</a>
    <table border="1">
        <thead>
            <tr>
            <th>ID</th>
                <th>Tên</th>
             
                <th>Giá</th>
                <th>Lượt xem</th>
                <th>Hình ảnh</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listUser as $key => $value): ?>
            <tr>
                <td><?= $key + 1; ?></td>
                <td><?= $value->name; ?></td>
                <td><?= $value->age; ?></td>
                <td><?= $value->address; ?></td>
                <td>
                    <img src="<?=$value->image; ?>" width="100" alt="">
                </td>
                <td>
                    <a href="<?= BASE_URL . "?act=updateuser&iduser=" . $value->id ?>">Sửa</a>

                    <a href="<?= BASE_URL . '?act=deleteuser&iduser=' . $value->id ?>"
                        onclick="return confirm('Bạn có muốn xóa không')">Xóa</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>