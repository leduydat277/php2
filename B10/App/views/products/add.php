
<div class="container">
    <h2 class="mt-3">Thêm mới</h2>
<form action="<?= BASE_URL ?>?act=addPostProduct" method="post" enctype="multipart/form-data" class="mt-5">

<div class="row mt-3">
    <label for="">Name</label>
    <input type="text" name="name" class="form-control">

</div>

<div class="row mt-3">
    <label for="">Price</label>
    <input type="text" name="price" class="form-control">

</div>

<div class="row mt-3">
    <label for="">View</label>
    <input type="text" name="view" class="form-control">

</div>
<div class="row mt-3">
    <label for="">Ảnh</label>
    <input type="file" name="img" class="form-control">

</div>
<div class="row mt-3">
    <label for="">Loại sản phẩm</label>
    <select name="category_id" id="" class="form-control">
        <?php
        foreach ($listCategory as $key => $value) :
        ?>
        <option value="<?=$value->id?>"><?=$value->name?></option>
        <?php endforeach ?>
    </select>
</div>

<div class="row mt-5">
    
    <input type="submit" name="btnSubmit" value="Thêm mới" class="btn btn-primary">

</div>

</form>
</div>