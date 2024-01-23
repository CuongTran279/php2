<table border="1" style="text-align: center;">
    <tr>
        <th>Stt</th>
        <th>Mã phòng ban</th>
        <th>Tên phòng ban</th>
        <th>Địa chỉ</th>
        <th>Email</th>
        <th>Thao tác</th>
    </tr>
    <?php
        $i=1;
        foreach($view as $pb){
            $sua = "index.php?act=edit&maPb=".$pb['maPb'];
            $xoa = "index.php?act=delete&maPb=".$pb['maPb'];
    ?>
    <tr>
        <td><?=$i++?></td>
        <td><?=$pb['maPb']?></td>
        <td><?=$pb['tenPb']?></td>
        <td><?=$pb['diaChi']?></td>
        <td><?=$pb['email']?></td>
        <td>
            <a href="<?=$sua?>"><button>Sửa</button></a>
            <a href="<?=$xoa?>"><button>Xóa</button></a>
        </td>
    </tr>
    <?php
        }
    ?>
</table>
<br>
<a href="index.php?act=add"><button>Thêm phòng ban mới</button></a>