<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php?url=add">Thêm người dùng mới</a>
    <table border="1">
        <tr>
            <th>STT</th>
            <th>ID</th>
            <th>Name</th>
            <th>Img</th>
            <th>Tel</th>
            <th>Address</th>
            <th>Email</th>
            <th></th>
        </tr>
        <?php
            $i=1;
            foreach($user as $item){
                $sua = "index.php?url=updt&id=".$item['id'];
                $xoa = "index.php?url=delete&id=".$item['id']; 
        ?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$item['id']?></td>
            <td><?=$item['name']?></td>
            <td ><img style="width:50px;height:50px" src="uploads/<?=$item['img']?>" alt=""></td>
            <td><?=$item['tel']?></td>
            <td><?=$item['address']?></td>
            <td><?=$item['email']?></td>
            <td><a href="<?=$sua?>">Sửa</a>||<a href="<?=$xoa?>">Xóa</a></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>