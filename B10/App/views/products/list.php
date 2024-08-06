<div class="container mt-5">
    <h1 class="mt-5">Danh sách sản phẩm</h1>
    
    <a href="<?= BASE_URL ?>?act=addProduct" class="btn btn-primary mt-3">Thêm mới</a>

<table class="table mt-5">
    <thead>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Price</th>
            <th>View</th>
            <th>Image</th>
            <th>ID_Category</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <?php  foreach ($listProducts as $key=>$value) :
              
          ?>
        <tr>
            <td><?= $key +1?></td>
            <td><?= $value->name?></td>
            <td><?= $value->price?></td>
            <td><?=$value->view?></td>

            <td><img src="<?=$value->img?>" alt="" width="100px"></td>
            <td><?=$value->category_id?></td>
            
            <td>
                <a href="<?="?act=detailProduct&id=$value->id"?>" class="btn btn-success">Sửa</a>
                <a href="<?="?act=deleteProduct&id=$value->id"?>" class="btn btn-warning" onclick="return confirm('Bạn có chắc chắn xóa không?')">Xóa</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
</div>
