<form action="http://localhost/php2/test/mvcTest3/editProduct/{{$item['id']}}" method="post" enctype="multipart/form-data">
    id <br>
    <input type="text" name="id" value="{{$item['id']}}" disabled><br>
    name <br>
    <input type="text" name="name" value="{{$item['name']}}"><br>
    img <br>
    <input type="file" name="img" ><br>
    <img style="width: 50px;height: 50px;" src="../upload/{{$item['img']}}" alt=""><br>
    price <br>
    <input type="text" name="price" value="{{$item['price']}}"><br>
    quantity <br>
    <input type="text" name="quantity" value="{{$item['quantity']}}"><br>
    creat <br>
    <input type="text" name="name" value="{{$item['created_at']}}" disabled><br>
    update <br>
    <input type="text" name="name" value="{{$item['update_at']}}" disabled><br>
    <input type="submit" value="submit" name="submit">
</form>
<a href="http://localhost/php2/test/mvcTest3/">List</a>