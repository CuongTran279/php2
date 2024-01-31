        <div class="container-sm pd-3 ">
            <table class="table mt-3 text-center">
                <thead>
                    <tr>
                    <th scope="col">STT</th>
                    <th scope="col">ID</th>
                    <th scope="col">Tên danh mục</th>
                    <th scope="col">Ngày tạo</th>
                    <th scope="col">Ngày được cập nhật</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($items as $key => $value)
                        
                    <tr>
                        <th scope="row">{{$stt++}}</th>
                        <td>{{$value['id']}}</td>
                        <td>{{$value['name']}}</td>
                        <td>{{$value['created_at']}}</td>
                        <td>{{$value['update_at']}}</td>
                        <td>
                            <a href="editC/{{$value['id']}}"><button type="button" class="btn btn-primary">Sửa</button></a>
                            <a href="deleteCategories/{{$value['id']}}"><button type="button" class="btn btn-danger">Xóa</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="div">
                <a href="addC"><button type="button" class="btn btn-success">Thêm danh mục mới</button></a>
            </div>
        </div>
        