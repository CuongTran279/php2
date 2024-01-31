<div class="container">
    <div class="row p-5">
        <div class="col">
            <img src="uploads/{{$item['img']}}" class="card-img-top" alt="..." style="width:100%;height:100px">
        </div>
        <div class="col">
            <p>Tên:{{$item['name']}}</p>
            <p>Giá:{{$item['price']}}</p>
            <p>Số lượng:{{$item['quantity']}}</p>
            <p>Mô tả:</p>
            <p>Danh mục:{{$classView}}</p>
        </div>
    </div>
    <div class="row py-5">
        <h1>Sản phẩm cùng danh mục</h1>
    </div>
</div>