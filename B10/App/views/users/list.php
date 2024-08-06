<div class="container mt-5">
    <h2 class="mt-5">Danh sách</h2>
    <a href="<?= BASE_URL , '?act=listProduct' ?>" class="btn btn-warning">Sản phẩm</a>
   
<table class="table mt-5">
    <thead>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Hình ảnh</th>
            
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <?php  foreach ($listUser as $key=>$value) :
        
          ?>
        <tr>
            <td><?= $key +1?></td>
            <td><?= $value->username?></td>
            <td><?= $value->age?></td>
            <td><?=$value->ad?></td>
            <td><img src="<?=$value->img?>" alt="" width="100px"></td>
            <td>
                <a href="<?=BASE_URL."?act=detailUser&id=$value->id"?>" class="btn btn-success">Sửa</a>
                <a href="<?=BASE_URL."?act=deleteUser&id=$value->id"?>" class="btn btn-warning" onclick="return confirm('Bạn có muốn xóa')">Xóa</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<a href="<?= BASE_URL ?>?act=addUser" class="btn btn-primary mt-3">Thêm mới</a>
</div>
