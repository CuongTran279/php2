<form action="http://localhost/php2/test/khachHang/editKhachHang/{{$item['id']}}" method="post">
    ID <br>
    <input type="text" name="id" id="" value="{{$item['id']}}" disabled><br>
    Name <br>
    <input type="text" name="name" id="" value="{{$item['name']}}"><br>
    Pass <br>
    <input type="text" name="pass" id="" value="{{$item['pass']}}"><br>
    Address <br>
    <input type="text" name="address" id="" value="{{$item['address']}}"><br>
    Email <br>
    <input type="text" name="email" id="" value="{{$item['email']}}"><br>
    Email <br>
    <input type="text" name="created_at" id="" value="{{$item['created_at']}}" disabled><br>
    Email <br>
    <input type="text" name="update_at" id="" value="{{$item['update_at']}}" disabled><br>
    <input type="submit" value="ADD" name="submit"><br>
</form>
<a href="http://localhost/php2/test/khachHang/list">List</a>