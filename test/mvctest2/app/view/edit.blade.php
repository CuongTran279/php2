<form action="http://localhost/php2/test/mvcTest2/editPost/{{$item1['id']}}" method="post">
    ID <br>
    <input type="text" name="" id="" value="{{$item1['id']}}" disabled><br>
    TITLE <br>
    <input type="text" name="title" id="" value="{{$item1['title']}}"><br>
    CONTENT <br>
    <input type="text" name="content" id="" value="{{$item1['content']}}"><br>
    CREATE_AT <br>
    <input type="text" name="" id="" disabled value="{{$item1['create_at']}}"><br>
    UPDATE_AT <br>
    <input type="text" name="" id="" disabled value="{{$item1['update_at']}}"><br><br>
    <input type="submit" value="sua" name="update">
</form>