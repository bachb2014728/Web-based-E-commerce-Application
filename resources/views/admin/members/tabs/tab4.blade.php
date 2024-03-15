<div class="tab-body">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Danh sách địa chỉ</h5>
      <p class="label">Địa chỉ nhận của {{$users->name}}</p>
      <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tên người nhận</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Ngày tạo</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users->diachi->reverse() as $item)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->address}}</td>
                <td>{{convertTime($item->created_at)}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="tab-foot">
  @if ($users->hoadon->count() > 0)
      <p class="text-end m-2"><strong>Tổng số địa chỉ : <span class="badge bg-secondary">{{$users->diachi->count()}}</span></strong></p> 
      @endif
</div>