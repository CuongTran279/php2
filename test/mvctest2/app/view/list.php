<table border="1">
    <tr>
        <th>ID</th>
        <th>TITLE</th>
        <th>CONTENT</th>
        <th>CREATE_AT</th>
        <th>UPDATE_AT</th>
        <th></th>
    </tr>
    <?php
        foreach($items as $item) {
            $sua = "sua&id=".$item['id'];
            $xoa = "xoa&id=".$item['id'];
    ?>
    <tr>
        <td><?=$item['id']?></td>
        <td><?=$item['title']?></td>
        <td><?=$item['content']?></td>
        <td><?=$item['create_at']?></td>
        <td><?=$item['update_at']?></td>
        <td>
            <a href="<?=$sua?>"><button>Sua</button></a>
            <a href="<?=$xoa?>"><button>Xoa</button></a>
        </td>
    </tr>
    <?php
        }
    ?>
</table>
<a href="add"><button>Them post moi</button></a>