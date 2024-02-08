<div class="container-sm pd-3 ">
    <table class="table mt-3 text-center">
        <thead>
            <tr>
            <th scope="col">STT</th>
            <th scope="col">ID</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Giá</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Danh mục</th>
            <th scope="col">Ngày tạo</th>
            <th scope="col">Ngày cập nhật</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
                @foreach($items as $product)
                <?php
                        foreach($itemsC as $categories) {
                            if($categories['id'] == $product['id_categories']){
                                $classView = $categories['name'];
                            }
                        }
                ?>
            <tr>
                
                <th scope="row">{{$i++}}</th>
                <td>{{$product['id']}}</td>
                <td>{{$product['name']}}</td>
                <td><img style="width:50px;height:50px" src="uploads/{{$product['img']}}" alt=""></td>
                <td>{{$product['price']}}</td>
                <td>{{$product['quantity']}}</td>
                <td>{{$classView}}</td>
                <td>{{$product['created_at']}}</td>
                <td>{{$product['update_at']}}</td>
                <td>
                    <a href="editP/{{$product['id']}}"><button type="button" class="btn btn-primary">Sửa</button></a>
                    <a href="deleteProduct/{{$product['id']}}"><button type="button" class="btn btn-danger">Xóa</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="div">
        <a href="addP"><button type="button" class="btn btn-success">Thêm sản phẩm mới</button></a>
    </div>
</div>
