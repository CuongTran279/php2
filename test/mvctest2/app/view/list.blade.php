<table border="1">
    <tr>
        <th>ID</th>
        <th>TITLE</th>
        <th>CONTENT</th>
        <th>CREATE_AT</th>
        <th>UPDATE_AT</th>
        <th></th>
    </tr>
        @foreach($item1 as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['title']}}</td>
        <td>{{$item['content']}}</td>
        <td>{{$item['create_at']}}</td>
        <td>{{$item['update_at']}}</td>
        <td>
            <a href="sua/{{$item['id']}}"><button>Sua</button></a>
            <a href="xoa/{{$item['id']}}"><button>Xoa</button></a>
        </td>
    </tr>
    @endforeach
</table>
<a href="add"><button>Them post moi</button></a>