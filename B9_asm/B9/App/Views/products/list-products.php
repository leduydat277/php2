<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
</head>

<body>
    <a href="<?= BASE_URL . '?controller=product&action=create' ?>">Thêm sản phẩm mới</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Danh mục</th>
                <th>Giá</th>
                <th>Lượt xem</th>
                <th>Hình ảnh</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product): ?>
            <tr>
                <td><?= $product->id; ?></td>
                <td><?= $product->name; ?></td>
                <td><?= $product->category_name; ?></td>
                <td><?= $product->price; ?></td>
                <td><?= $product->view; ?></td>
                <td><img src="<?= $product->image; ?>" width="100" alt=""></td>
                <td>
                    <a href="<?= BASE_URL . "?controller=product&action=edit&id=" . $product->id ?>">Sửa</a>
                    <a href="<?= BASE_URL . "?controller=product&action=delete&id=" . $product->id ?>"
                        onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">Xóa</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>
