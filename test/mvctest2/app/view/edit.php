<form action="editPost&id=<?=$item['id']?>" method="post">
    ID <br>
    <input type="text" name="" id="" value="<?=$item['id']?>" disabled><br>
    TITLE <br>
    <input type="text" name="title" id="" value="<?=$item['title']?>"><br>
    CONTENT <br>
    <input type="text" name="content" id="" value="<?=$item['content']?>"><br>
    CREATE_AT <br>
    <input type="text" name="" id="" disabled value="<?=$item['create_at']?>"><br>
    UPDATE_AT <br>
    <input type="text" name="" id="" disabled value="<?=$item['update_at']?>"><br><br>
    <input type="submit" value="sua" name="update">
</form>