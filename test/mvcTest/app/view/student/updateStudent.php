<div class="container">
<form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">ID</label>
      <input type="text" class="form-control " disabled id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Tên học sinh</label>
      <input type="text" class="form-control " name="name" id="exampleInputPassword1" value="<?=$StudentId['name']?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Ảnh</label>
      <input type="file" class="form-control " name="img"  id="formFile">
    </div>
    <div class="mb-3" >
      <img style="width:60px;height:60px" src="uploads/<?=$StudentId['img']?>" alt="">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Năm sinh</label>
      <input type="number" class="form-control " name="age" id="exampleInputPassword1" value="<?=$StudentId['age']?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Địa chỉ</label>
      <input type="text" class="form-control " name="address" id="exampleInputPassword1" value="<?=$StudentId['address']?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Email</label>
      <input type="text" class="form-control " name="email" id="exampleInputPassword1" value="<?=$StudentId['email']?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Ngành học</label>
      <input type="text" class="form-control " name="majors" id="exampleInputPassword1" value="<?=$StudentId['majors']?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Lớp học</label>
        <select class="form-select" name="class" aria-label="Default select example">
          <option value="0" selected>Chọn lớp</option>
          <?php
            foreach($viewClass as  $value) {
              if($StudentId['class'] == $value['id']){
                echo '<option value="' . $value['id'] . '" selected>' . $value['name'] . '</option>';
              }else{
                echo '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
              }
              
            }
          ?>
        </select>
    </div>
    <input type="submit" name="submit" value="Sửa" class="btn btn-dark">
    <a href="index.php?act=addStudent"><button type="button" class="btn btn-success">Thêm mới</button></a>
    <a href="index.php?act=listStudent"><button type="button" class="btn btn-primary">Danh sách học sinh</button></a>
  </form>
</div>
