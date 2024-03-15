<div class="tab-body">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Danh sách hóa đơn</h5>
        @foreach ($users_2 as $items)
        <div class="border bg-light p-2 mb-2 rounded-3">
          <div class="d-flex justify-content-between">
            <p class="label">Hóa đơn : <span class="badge bg-primary">{{$loop->iteration}}</span></p>
            <p class="label">Thời gian đặt : {{convertTime($items->created_at)}}</p>
          </div>
          <p class="d-flex justify-content-between">
            <span class="label">Người nhận : <span class="text-muted">{{$items->name}}</span></span> | 
            <span class="label">Số điện thoại : <span class="text-muted">{{$items->phone}}</span></span> | 
            <span class="label">Địa chỉ nhận : <span class="text-muted">{{$items->address}}</span></span>
          </p>
          <table class="table table-sm">
            <thead>
              <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Giá</th>
                <th scope="col">Trạng thái :<span class="badge rounded-pill bg-danger text-light">Hủy đơn hàng</span></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($items->order_detail as $item)
              <tr class="text-center">
                <th scope="row">{{$loop->iteration}}</th>
                <td>
                  <img src="{{asset('storage')}}/images/{{$item->product['image']}}" alt="" class="" style="width: 40px;">
                </td>
                <td>{{$item->product['name']}}</td>
                <td>{{$item->quantity}}</td>
                <td id="price">{{$item->price}}</td>
                <td id="price">{{tich($item->quantity,$item->price)}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="d-flex flex-row-reverse bd-highlight">
            <div class="p-2">| Tổng tiền: <strong id="price">{{$items->totalPrice}}</strong></div>
            <div class="p-2 "><span class="badge bg-secondary">Ghi chú</span> : {{$items->note}}</div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
<div class="tab-foot">
    @if ($users_2->count() > 0)
    <p class="text-end m-2"><strong>Tổng số hóa đơn : <span class="badge bg-secondary">{{$users_2->count()}}</span></strong> | Tổng tiền các hóa đơn : <strong id="price">{{$prices_cancel}}</strong></p> 
    @endif
</div>