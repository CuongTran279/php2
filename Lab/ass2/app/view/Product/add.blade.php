<div class="container">
  <form method="post" enctype="multipart/form-data" action="addProduct">
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">ID</label>
      <input type="text" class="form-control " disabled id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Tên sản phẩm</label>
      <input type="text" class="form-control " name="name" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Ảnh</label>
      <input type="file" class="form-control " name="img"  id="formFile">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Giá</label>
      <input type="number" class="form-control " name="price" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Số lượng sản phẩm</label>
      <input type="text" class="form-control " name="quantity" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Danh mục sản phẩm</label>
        <select class="form-select" name="id_categories" aria-label="Default select example">
          <option value="0" >Chọn danh mục sản phẩm</option>
            @foreach($itemsC as  $value)
              <option value="{{$value['id']}}">{{$value['name']}}</option>
            @endforeach
        </select>
    </div>
    <input type="submit" name="submit" value="Thêm mới" class="btn btn-success">
    <a href="ListProduct"><button type="button" class="btn btn-primary">Danh sách sản phẩm</button></a>
  </form>
</div>
