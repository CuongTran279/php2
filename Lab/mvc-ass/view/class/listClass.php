<div class="container-sm pd-3 ">
    <table class="table mt-3 text-center">
        <thead>
            <tr>
            <th scope="col">STT</th>
            <th scope="col">ID</th>
            <th scope="col">Tên lớp</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
                foreach($viewClass as $key => $value){
                $sua = "index.php?act=updtClass&id=".$value['id'];
                $xoa = "index.php?act=dltClass&id=".$value['id'];
            ?>
            <tr>
                <th scope="row"><?=$i++?></th>
                <td><?=$value['id']?></td>
                <td><?=$value['name']?></td>
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
        <a href="index.php?act=addClass"><button type="button" class="btn btn-success">Thêm lớp mới</button></a>
    </div>
</div>
