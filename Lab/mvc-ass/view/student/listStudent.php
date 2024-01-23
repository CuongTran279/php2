<div class="container-sm pd-3 ">
    <table class="table mt-3 text-center">
        <thead>
            <tr>
            <th scope="col">STT</th>
            <th scope="col">ID</th>
            <th scope="col">Tên Học sinh</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Năm sinh</th>
            <th scope="col">Ngành học</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Email</th>
            <th scope="col">Lớp</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i=1;
                $classView = "";
                foreach($viewStudent as $student) {
                    $sua = "index.php?act=updtStudent&id=".$student['id'];
                    $xoa = "index.php?act=dltStudent&id=".$student['id'];
                    foreach($viewClass as $class) {
                        if($class['id'] == $student['class']){
                            $classView = $class['name'];
                        }
                    }
            ?>
            <tr>
                
                <th scope="row"><?=$i++?></th>
                <td><?=$student['id']?></td>
                <td><?=$student['name']?></td>
                <td><img style="width:50px;height:50px" src="uploads/<?=$student['img']?>" alt=""></td>
                <td><?=$student['age']?></td>
                <td><?=$student['majors']?></td>
                <td><?=$student['address']?></td>
                <td><?=$student['email']?></td>
                <td><?=$classView?></td>
                <td>
                    <a href="<?=$sua?>"><button type="button" class="btn btn-primary">Sửa</button></a>
                    <a href="<?=$xoa?>"><button type="button" class="btn btn-danger">Xóa</button></a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <div class="div">
        <a href="index.php?act=addStudent"><button type="button" class="btn btn-success">Thêm học sinh mới</button></a>
    </div>
</div>
