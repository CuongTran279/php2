<div class="container">
  <form method="post" action="editUser&id=<?=$item['id']?>">
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">ID</label>
      <input type="text" class="form-control " disabled id="exampleInputPassword1" value="<?=$item['id']?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Tên người dùng</label>
      <input type="text" class="form-control" name="name" disabled  id="exampleInputPassword1" value="<?=$item['name']?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Email</label>
      <input type="text" class="form-control" name="name" disabled id="exampleInputPassword1" value="<?=$item['email']?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Ngày tạo tài khoản</label>
      <input type="text" class="form-control" name="name" disabled id="exampleInputPassword1" value="<?=$item['created_at']?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Ngày cập nhật</label>
      <input type="text" class="form-control" name="name" disabled id="exampleInputPassword1" value="<?=$item['update_at']?>">
    </div>
    <div class="mb-3">
        <?php
          $vt ="";
          foreach($items as $value){
            if($value['role'] == 0){
            $vt= "Người dùng";
            }elseif($value["role"] == 1){
                $vt= "Admin";
            }
          }
        ?>
      <label for="exampleInputPassword1" class="form-label">Vai trò hiện tại: <?=$vt?></label>
      <select class="form-select" name="role" aria-label="Default select example">
        <option selected>Chọn vai trò</option>
        <option value="0">User</option>
        <option value="1">Admin</option>
      </select>
    </div>
    <input type="submit" name="submit" value="Sửa" class="btn btn-dark">
    <a href="ListUser"><button type="button" class="btn btn-primary">Danh sách người dùng</button></a>
  </form>
</div>
