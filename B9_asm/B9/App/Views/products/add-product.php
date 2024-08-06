<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
</head>

<body>
    <form action="<?= BASE_URL . '?controller=product&action=store' ?>" method="post" enctype="multipart/form-data">
        Tên:
        <input type="text" name="name">
        Danh mục:
        <select name="category_id">
            <?php foreach($categories as $category): ?>
            <option value="<?= $category->id ?>"><?= $category->name ?></option>
            <?php endforeach; ?>
        </select>
        Giá:
        <input type="text" name="price">
        Hình ảnh:
        <input type="file" name="image">

        <button type="submit">Thêm sản phẩm</button>
    </form>
</body>

</html>
