    <a href="index.php?url=addProduct">add</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>
        <?php
            foreach($product as $key=>$value) {
        ?>
        <tr>
            <td><?=$value['id']?></td>
            <td><?=$value['name']?></td>
            <td><?=$value['price']?></td>
            <td><?=$value['quantity']?></td>
        </tr>
        <?php } ?>
    </table>
