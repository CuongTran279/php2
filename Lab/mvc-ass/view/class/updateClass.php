<div class="container">
  <form method="post">
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">ID</label>
      <input type="text" class="form-control " disabled id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Tên lớp</label>
      <input type="text" class="form-control" name="name"  id="exampleInputPassword1" value="<?=$ClassId['name']?>">
    </div>
    <input type="submit" name="submit" value="Sửa" class="btn btn-dark">
    <a href="index.php?act=addClass"><button type="button" class="btn btn-success">Thêm mới</button></a>
    <a href="index.php?act=listClass"><button type="button" class="btn btn-primary">Danh sách lớp</button></a>
  </form>
</div>
