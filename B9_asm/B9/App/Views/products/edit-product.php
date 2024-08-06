<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa sản phẩm</title>
</head>

<body>
    <form action="<?= BASE_URL . '?controller=product&action=update&id=' . $product->id ?>" method="post" enctype="multipart/form-data">
        Tên:
        <input type="text" name="name" value="<?= $product->name ?>">
        Danh mục:
        <select name="category_id">
            <?php foreach($categories as $category): ?>
            <option value="<?= $category->id ?>" <?= $category->id == $product->category_id ? 'selected' : '' ?>><?= $category->name ?></option>
            <?php endforeach; ?>
        </select>
        Giá:
        <input type="text" name="price" value="<?= $product->price ?>">
        Hình ảnh:
        <img src="<?= $product->image ?>" width="100" alt="">
        <input type="file" name="image">
        <input type="hidden" name="current_image" value="<?= $product->image ?>">

        <button type="submit">Cập nhật sản phẩm</button>
    </form>
</body>

</html>
