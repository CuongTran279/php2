<div class="container-sm pd-3 ">
            <table class="table mt-3 text-center">
                <thead>
                    <tr>
                    <th scope="col">STT</th>
                    <th scope="col">ID</th>
                    <th scope="col">Tên người dùng</th>
                    <th scope="col">Email</th>
                    <th scope="col">vai trò</th>
                    <th scope="col">Ngày tạo</th>
                    <th scope="col">Ngày được cập nhật</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 1;
                        $vt= "";
                        foreach($items as $key => $value){
                            $sua = "editU&id=".$value['id'];
                            $xoa = "deleteUser&id=".$value['id'];
                            if($value['role'] == 0){
                                $vt= "Người dùng";
                            }elseif($value["role"] == 1){
                                $vt= "Admin";
                            }
                    ?>
                    <tr>
                        <th scope="row"><?=$i++?></th>
                        <td><?=$value['id']?></td>
                        <td><?=$value['name']?></td>
                        <td><?=$value['email']?></td>
                        <td><?=$vt?></td>
                        <td><?=$value['created_at']?></td>
                        <td><?=$value['update_at']?></td>
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
        </div>
        