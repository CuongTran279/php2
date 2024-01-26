<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/action.js"></script>
</head>
<body>
    <div class="container">
        <div class="p-3 mb-2 bg-primary text-white">
            <h1>Quản lý sản phẩm</h1>
        </div>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="ListCategories">Danh sách danh mục</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ListProduct">Danh sách sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ListUser">Danh sách người dùng</a>
            </li>
        </ul>
        <div class="container-sm pd-3 ">
            <table class="table mt-3 text-center">
                <thead>
                    <tr>
                    <th scope="col">STT</th>
                    <th scope="col">ID</th>
                    <th scope="col">Tên danh mục</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 1;
                        foreach($items as $key => $value){
                        $sua = "index.php?act=updtClass&id=".$value['id'];
                        $xoa = "index.php?act=dltClass&id=".$value['id'];
                    ?>
                    <tr>
                        <th scope="row"><?=$i++?></th>
                        <td><?=$value['id']?></td>
                        <td><?=$value['name']?></td>
                        <td>
                            <a href="<?=$sua?>"><button type="button" class="btn btn-primary">Sửa</button></a>
                            <a href="<?=$xoa?>"><button type="button" class="btn btn-danger">Xóa</button></a>
                        </td>
                        
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            <div class="div">
                <a href=""><button type="button" class="btn btn-success">Thêm danh mục mới</button></a>
            </div>
        </div>
        <footer class="position-absolute top-100 start-50 translate-middle w-75 p-3">
            <div class="p-3 mb-2 bg-dark text-white text-center ">
                <h5 >Footer</h5>
            </div>
        </footer>
    </div>
    
    
</body>
</html>