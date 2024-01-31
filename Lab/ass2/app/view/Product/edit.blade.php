<div class="container">
<form method="post" enctype="multipart/form-data" action="http://localhost/php2/Lab/ass2/editProduct/{{$item['id']}}">
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">ID</label>
      <input type="text" class="form-control " disabled id="exampleInputPassword1" value="{{$item['id']}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Tên học sinh</label>
      <input type="text" class="form-control " name="name" id="exampleInputPassword1" value="{{$item['name']}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Ảnh</label>
      <div class="mb-3" >
        <img style="width:50px;height:50px" src="uploads/{{$item['img']}}" alt="">
      </div>
      <input type="file" class="form-control " name="img"  id="formFile">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Giá</label>
      <input type="number" class="form-control " name="price" id="exampleInputPassword1" value="{{$item['price']}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Số lượng</label>
      <input type="text" class="form-control " name="quantity" id="exampleInputPassword1" value="{{$item['quantity']}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Danh mục</label>
        <select class="form-select" name="id_categories" aria-label="Default select example">
          <option value="0" selected>Chọn danh mục</option>
            @foreach($itemsC as  $value)
              <?php if($item['id_categories'] == $value['id']){
                echo '<option value="'.$value['id'].'" selected>'.$value['name'].'</option>';
              }
              else{
                echo '<option value="'.$value['id'].'">'.$value['name'].'</option>';
              }
              ?>
            @endforeach
        </select>
    </div>
    <input type="submit" name="submit" value="Sửa" class="btn btn-dark">
    <a href="http://localhost/php2/Lab/ass2/addP"><button type="button" class="btn btn-success">Thêm mới</button></a>
    <a href="http://localhost/php2/Lab/ass2/ListProduct"><button type="button" class="btn btn-primary">Danh sách sản phẩm</button></a>
  </form>
</div>
