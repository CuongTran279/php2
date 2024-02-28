<form action="http://localhost/php2/test/test/editSach/{{$sach['idSach']}}" method="post">
    Id <br>
    <input type="text" name="id" id="" value="{{$sach['idSach']}}" disabled><br>
    Name <br>
    <input type="text" name="name" id="" value="{{$sach['tenSach']}}"><br>
    Author <br>
    <input type="text" name="author" id="" value="{{$sach['tacGia']}}"><br>
    Price <br>
    <input type="text" name="price" id="" value="{{$sach['gia']}}"><br>
    Quantity <br>
    <input type="text" name="quantity" id="" value="{{$sach['soLuong']}}"><br><br>
    <input type="submit" value="Edit" name="submit">
</form>
<a href="http://localhost/php2/test/test/list">List Sach</a>