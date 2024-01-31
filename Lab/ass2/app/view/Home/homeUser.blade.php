<div class="container product pt-5">
    @foreach($items as $item)
        <div class="card" style="width: 18rem;">
            <img src="uploads/{{$item['img']}}" class="card-img-top" alt="..." style="width:100%;height:100px">
            <div class="card-body">
                <h5 class="card-title">Tên:{{$item['name']}}</h5>
                <p class="card-text">Giá:{{$item['price']}} đ</p>
                <p class="card-text">Số lượng:{{$item['quantity']}}</p>
                <a href="detail/{{$item['id']}}" class="btn btn-primary">Tìm hiểu</a>
            </div>
        </div>
    @endforeach
</div>