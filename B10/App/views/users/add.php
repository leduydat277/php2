
<div class="container">
    <h2 class="mt-3">Thêm mới</h2>
<form action="<?= BASE_URL ?>?act=addPostUser" method="post" enctype="multipart/form-data" class="mt-5">

<div class="row mt-3">
    <label for="">Name</label>
    <input type="text" name="username" class="form-control">

</div>

<div class="row mt-3">
    <label for="">Age</label>
    <input type="text" name="age" class="form-control">

</div>

<div class="row mt-3">
    <label for="">Address</label>
    <input type="text" name="address" class="form-control">

</div>
<div class="row mt-3">
    <label for="">Ảnh</label>
    <input type="file" name="img" class="form-control">

</div>

<div class="row mt-5">
    
    <input type="submit" name="btnSubmit" value="Thêm" class="btn btn-primary">

</div>

</form>
</div>