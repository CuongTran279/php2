<form action="" method="post">
    Mã phòng ban <br>
    <input type="text" name="maPb" id="" disabled value="<?=$viewId['maPb']?>"><br>
    Tên phòng ban <br>
    <input type="text" name="name" id="" value="<?=$viewId['tenPb']?>"><br>
    Dịa chỉ <br>
    <input type="text" name="diaChi" id="" value="<?=$viewId['diaChi']?>"><br>
    Email <br>
    <input type="text" name="email" id="" value="<?=$viewId['email']?>"><br><br>
    <input type="submit" value="Sửa" name="submit">
</form>
<a href="index.php?act=list"><button>Danh sách phòng ban</button></a>
<a href="index.php?act=add"><button>Thêm phòng ban mới</button> </a>