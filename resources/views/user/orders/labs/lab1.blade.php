<div class="tab-body">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Danh sách hóa đơn</h5>
        @foreach ($users as $items)
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
                <th scope="col">Trạng thái :
                  @if ($items->status == 0)
                  <span class="badge rounded-pill bg-info text-dark">Chờ xác nhận</span>
                  @elseif($items->status ==1)
                  <span class="badge rounded-pill bg-success">Đặt thành công</span>
                  @else
                  <span class="badge rounded-pill bg-danger text-light">Hủy đơn hàng</span>
                  @endif
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($items->order_detail as $item)
              <tr class="text-center">
                <th scope="row">{{$loop->iteration}}</th>
                <td>
                  <img src="{{asset('storage')}}/images/{{$item->product['image']}}" alt="" class="" style="width: 40px;">
                </td>
                <td>{{$item->product['tensanpham']}}</td>
                <td>{{$item->quantity}}</td>
                <td><span id="price">{{$item->price}}</span></td>
                <td><span  id="price">{{tich($item->quantity,$item->price)}}</span></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="d-flex flex-row-reverse bd-highlight">
            <div class="p-2">| Tổng tiền: <strong id="price">{{$items->totalPrice}}</strong></div>
            <div class="p-2 "><span class="badge bg-secondary">Ghi chú</span> :{{$items->note}}</div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
</div>
<div class="tab-foot">
    @if ($users->count() > 0)
    <p class="text-end m-2"><strong>Tổng số hóa đơn : <span class="badge bg-secondary">{{$users->count()}}</span></strong></p> 
    @endif
</div>