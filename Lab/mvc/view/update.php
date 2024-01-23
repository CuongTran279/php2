<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php?url=add">Thêm người dùng mới</a>||
    <a href="index.php">Danh sách</a>
    <form action="" method="post" enctype="multipart/form-data">
        Name <br>
        <input type="text" name="name" value="<?=$userId['name']?>"><br>
        image <br>
        <input type="file" name="image"><br><br>
        <img style="width:50px;height:50px" src="uploads/<?=$userId['img']?>" alt=""><br>
        Tel <br>
        <input type="number" name="tel" value="<?=$userId['tel']?>"><br>
        Address <br>
        <input type="text" name="address" value="<?=$userId['address']?>"><br>
        Email <br>
        <input type="text" name="email" value="<?=$userId['email']?>"><br><br>
        <input type="submit" value="Sửa" name="submit">
    </form>
</body>
</html>