<table border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>NAME</th>
            <th>IMG</th>
            <th>PRICE</th>
            <th>QUANTITY</th>
            <th>CREAT</th>
            <th>UPDATE</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['name']}}</td>
                <td><img style="width: 50px;height: 50px;" src="upload/{{$item['img']}}" alt=""></td>
                <td>{{$item['price']}}</td>
                <td>{{$item['quantity']}}</td>
                <td>{{$item['created_at']}}</td>
                <td>{{$item['update_at']}}</td>
                <td>
                    <a href="edit/{{$item['id']}}">Sua</a>
                    <a href="delete/{{$item['id']}}">Xoa</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="add">Add</a>