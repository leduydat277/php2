<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="<?= BASE_URL.'?act=adduser'?>">thêm mới</a>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Tuổi</th>
                <th>Địa Chỉ</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listUser as $key => $value): ?>
                <tr>
                    <td><?= $key +1; ?></td>
                    <td><?=$value->name;?></td>
                    <td><?=$value->age;?></td>
                    <td><?=$value->address;?></td>
                    <td>
                        <a href="<?= BASE_URL .'?act=deleteuser&iduser'.$value->$id  
                        ?>" onclick="return confirm('bạn có muốn xóa')">xóa</a>
                    </td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>