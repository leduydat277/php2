
<div class="container">
  
    <h2 class="mt-3">Sửa</h2>
<form action="<?= BASE_URL ?>?act=editUser" method="post" enctype="multipart/form-data" class="mt-5">

<div class="row mt-3">
    <label for="">Name</label>
    <input type="text" name="username" class="form-control" value="<?=$detailUser->username?>">

</div>

<div class="row mt-3">
    <label for="">Age</label>
    <input type="text" name="age" class="form-control" value="<?=$detailUser->age?>">
          
</div>

<div class="row mt-3">
    <label for="">Address</label>
    <input type="text" name="address" class="form-control" value="<?=$detailUser->ad?>">

</div>
<label for="" class="mt-5">Ảnh</label><br>
<img src="<?=$detailUser->img?>" alt="" width="10%" class="mt-3">
<div class="row mt-3">
    
    
    <input type="file" name="img" class="form-control" >

</div>

<div class="row mt-5">
    <input type="hidden" name="id" value="<?=$detailUser->id?>" >
    <input type="submit" name="btnSubmit" value="Sửa" class="btn btn-primary">

</div>

</form>
</div>