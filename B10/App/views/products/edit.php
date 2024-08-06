
<div class="container">
    <h2 class="mt-3">Sửa</h2>
<form action="<?= BASE_URL ?>?act=editProduct" method="post" enctype="multipart/form-data" class="mt-5">

<div class="row mt-3">
    <label for="">Name</label>
    <input type="text" name="name" class="form-control" value="<?=$detailProduct->name?>">

</div>

<div class="row mt-3">
    <label for="">Price</label>
    <input type="text" name="price" class="form-control" value="<?=$detailProduct->price?>">

</div>

<div class="row mt-3">
    <label for="">View</label>
    <input type="text" name="view" class="form-control" value="<?=$detailProduct->view?>">

</div>
<label for="" class="mt-5">Ảnh</label><br>
<img src="<?=$detailProduct->img?>" alt="" width="10%" class="mt-3">
<div class="row mt-3">
    
    
    <input type="file" name="img" class="form-control" >

</div>
<div class="row mt-3">
    <label for="">Loại sản phẩm</label>
    <select name="category_id" id="" class="form-control" value="<?=$detailProduct->category_id?>">
        <option value="<?=$detailProduct->category_id?>"><?=$detailProduct->category_id?></option>
        <?php
        foreach ($listCategory as $key => $value) :
        ?>
        <option value="<?=$value->id?>"><?=$value->name?></option>
        <?php endforeach ?>
    </select>
</div>

<div class="row mt-5">
    <input type="hidden" name="id" value="<?=$detailProduct->id?>">
    <input type="submit" name="btnSubmit" value="Sửa" class="btn btn-primary">

</div>

</form>
</div>