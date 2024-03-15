<div class="tab-body">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Danh sách hóa đơn</h5>
        @foreach ($users_1 as $items)
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
                <th scope="col">Số lượng X Giá</th>
                <th scope="col">Giá</th>
                <th scope="col" colspan="2">Trạng thái : <span class="badge rounded-pill bg-success">Đã đặt hàng</span></th>
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
                <td>{{$item->quantity}} X <span id="price">{{$item->price}}</span></td>
                <td id="price">{{tich($item->quantity,$item->price)}}</td>
                <td>              
                  <a type="submit" class="btn btn-sm label" data-toggle="modal" data-target="#exampleModal_{{$item->id}}">Đánh giá</a>
                  <div class="modal fade" id="exampleModal_{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Đánh giá sản phẩm : {{$item->product['name']}}</h5>
                                <button type="button" class="close btn " data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true"> <span data-feather="x"></span></span>
                                </button>
                              </div>
                              <form action="{{ route('sanpham.rating', $item->product_id) }}" method="POST">
                                @csrf
                                
                                <div class="modal-body">
                                  <label for="rating">Đánh giá sản phẩm:</label>
                                  <select name="rating" id="rating" >
                                      <option value="1">1 sao</option>
                                      <option value="2">2 sao</option>
                                      <option value="3">3 sao</option>
                                      <option value="4">4 sao</option>
                                      <option value="5">5 sao</option>
                                  </select>
                                </div>
                                <div class="modal-footer">
                                  <button type="submit" class="btn btn-sm btn-warning">Gửi đánh giá</button>
                                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                </div>
                              </form>
                            </div>
                          </div>
                  </div>
                </td>
                <th>
                  <a type="submit" class="btn btn-sm label" data-toggle="modal" data-target="#exampleModal_{{$item->id}}_2">Bình luận</a>
                  <div class="modal fade" id="exampleModal_{{$item->id}}_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Bình luận sản phẩm : {{$item->product['name']}}</h5>
                                <button type="button" class="close btn " data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true"> <span data-feather="x"></span></span>
                                </button>
                              </div>
                              <form action="{{ route('sanpham.comment', $item->product_id) }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                  <label for="comment">Bình luận về sản phẩm:</label>
                                  <input type="text" class="form-control" name="comment" id="comment" spellcheck="false" data-ms-editor="true">
                                </div>
                                <div class="modal-footer">
                                  <button type="submit" class="btn btn-sm btn-warning">Gửi đánh giá</button>
                                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                </div>
                              </form>
                            </div>
                          </div>
                  </div>

                </th>
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
    @if ($users_1->count() > 0)
    <p class="text-end m-2"><strong>Tổng số hóa đơn : <span class="badge bg-secondary">{{$users_1->count()}}</span></strong> | Tổng tiền các hóa đơn : <strong id="price">{{$prices_1}}</strong></p> 
    @endif
</div>