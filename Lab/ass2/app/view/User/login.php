<div class="container">
    <h1 class="h1">Đăng nhập</h1><br>
    <form method="post" action="login">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tên đăng nhập</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Đăng nhập</button>
    </form>
    <?php
        if(isset($thongbao)&&($thongbao != "")){
            echo $thongbao;
        }
    ?>
</div>
