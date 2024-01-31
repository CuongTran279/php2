<a href="add">Add</a>
<table border="1">
    <tr>
        <th>STT</th>
        <th>ID</th>
        <th>Name</th>
        <th>Pass</th>
        <th>Address</th>
        <th>Email</th>
        <th>Created_at</th>
        <th>Update_at</th>
        <th>Thao tac</th>
    </tr>
    @foreach($khachHang as $item)
    <tr>
        <td>{{$i++}}</td>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['pass']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['address']}}</td>
        <td>{{$item['created_at']}}</td>
        <td>{{$item['update_at']}}</td>
        <td>
            <a href="edit/{{$item['id']}}">Sua</a>
            <a href="delete/{{$item['id']}}">Xoa</a>
        </td>
    </tr>
    @endforeach
</table>