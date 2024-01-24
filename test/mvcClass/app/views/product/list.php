<a href="index.php?url=add">ADD</a>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th></th>
    </tr>
    <?php foreach($product as $key => $value) {
            $sua = "sua&id=".$value['id'];
            $xoa = "xoa&id=".$value['id'];
        ?>
        <tr>
            <td><?php echo $value['id'] ?></td>
            <td><?php echo $value['name'] ?></td>
            <td><?php echo $value['price'] ?></td>
            <td><?php echo $value['quantity'] ?></td>
            <td>
                <a href="<?=$sua?>"><button>Sua</button></a>
                <a href="<?=$xoa?>"><button>Xoa</button></a>
            </td>
        </tr>
    <?php } ?>
</table>