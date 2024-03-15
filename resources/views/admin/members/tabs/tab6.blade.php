<div class="tab-body">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Danh sách đánh giá</h5>
        <p class="label">Đánh giá của {{$users->name}}</p>
        <table class="table table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Số sao</th>
              <th scope="col">Sản phẩm</th>
              <th scope="col">Ngày tạo</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($users->review as $item)
              <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <td>{{$item->rating}}</td>
                  <td>{{$item->product->name}}</td>
                  <td>{{convertTime($item->created_at)}}</td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="tab-foot">
    @if ($users->review->count() > 0)
        <p class="text-end m-2"><strong>Tổng số đánh giá : <span class="badge bg-secondary">{{$users->review->count()}}</span></strong></p> 
        @endif
  </div>