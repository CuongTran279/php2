<form action="http://localhost/php2/test/test3/editSach/{{$sach['idSach']}}" method="post">
    <label for="">ID</label><br>
    <input type="text" name="id" id="" value="{{$sach['idSach']}}" disabled><br>
    <label for="">Name</label><br>
    <input type="text" name="name" id="" value="{{$sach['tenSach']}}"><br>
    <label for="">Author</label><br>
    <input type="text" name="author" id="" value="{{$sach['tacGia']}}"><br>
    <label for="">Quantity</label><br>
    <input type="text" name="quantity" id="" value="{{$sach['soLuong']}}"><br>
    <label for="">Price</label><br>
    <input type="text" name="price" id="" value="{{$sach['gia']}}"><br>
    <input type="submit" value="Edit" name="submit">
    <a href="../list">List</a>
</form>