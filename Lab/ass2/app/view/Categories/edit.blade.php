<div class="container">
  <form method="post" action="http://localhost/php2/Lab/ass2/editCategories/{{$item['id']}}">
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">ID</label>
      <input type="text" class="form-control " disabled id="exampleInputPassword1" value="{{$item['id']}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Tên lớp</label>
      <input type="text" class="form-control" name="name"  id="exampleInputPassword1" value="{{$item['name']}}">
    </div>
    <input type="submit" name="submit" value="Sửa" class="btn btn-dark">
    <a href="http://localhost/php2/Lab/ass2/addC"><button type="button" class="btn btn-success">Thêm mới</button></a>
    <a href="http://localhost/php2/Lab/ass2/ListCategories"><button type="button" class="btn btn-primary">Danh sách danh mục</button></a>
  </form>
</div>
