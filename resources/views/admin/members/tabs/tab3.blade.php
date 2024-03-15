<div class="tab-body">
  <div class="card">
    <div class="card-body ">
      <h5 class="card-title">Lịch sử hoạt động</h5>
      <p class="label">10 hoạt động gần nhất của {{$users->name}}</p>
      <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Key</th>
            <th scope="col">Value</th>
            <th scope="col">Tên hoạt động</th>
            <th scope="col">Thời gian</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users->activity->slice(-10)->values()->reverse() as $item)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$item->key_active}}</td>
              <td>{{$item->value_active}}</td>
              <td>
                @if ($item->key_active == 1)
                <span class="badge bg-info text-dark">{{$item->name_active}}</span>
                @elseif($item->key_active == 2)
                <span class="badge bg-warning text-dark">{{$item->name_active}}</span>
                @else
                <span class="badge bg-secondary">{{$item->name_active}}</span>
                @endif
              </td>
              <td>{{convertTime($item->created_at)}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="card-body">
      <h5 class="card-title">Lịch sử hoạt động về đơn hàng</h5>
      <p class="label">10 hoạt động gần nhất của {{$users->name}} về đặt , hủy đơn hàng</p>
      <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tên hoạt động</th>
            <th scope="col">Thời gian</th>
          </tr>
        </thead>
        <tbody>
          @php $count = 0;@endphp
          @foreach ($users->activity->reverse() as $item)
            @if ($item->key_active == 2 && $count < 10)
              @php
                  $count++;
              @endphp
              <tr>
                <th scope="row">{{$count}}</th>
                <td><span class="badge bg-warning text-dark">{{$item->name_active}}</span></td>
                <td>{{convertTime($item->created_at)}}</td>
              </tr>
            @endif
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="card-body">
      <h5 class="card-title">Lịch sử hoạt động về thông tin cá nhân</h5>
      <p class="label">10 hoạt động gần nhất của {{$users->name}} về chỉnh sửa , xóa , cập nhật thông tin cá nhân</p>
      <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tên hoạt động</th>
            <th scope="col">Thời gian</th>
          </tr>
        </thead>
        <tbody>
          @php $count = 0;@endphp
          @foreach ($users->activity->reverse() as $item)
            @if ($item->key_active == 1 && $count<10)
              @php
                  $count++;
              @endphp
              <tr>
                <th scope="row">{{$count}}</th>
                <td><span class="badge bg-info text-dark">{{$item->name_active}}</span></td>
                <td>{{convertTime($item->created_at)}}</td>
              </tr>
            @endif
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="card-body">
      <h5 class="card-title">Lịch sử hoạt động về đăng nhập / đăng xuất</h5>
      <p class="label">10 hoạt động gần nhất của {{$users->name}} về ra vào trang web</p>
      <table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tên hoạt động</th>
            <th scope="col">Thời gian</th>
          </tr>
        </thead>
        <tbody>
          @php $count = 0;@endphp
          @foreach ($users->activity->reverse() as $item)
            @if ($item->key_active == 0 && $count <10)
              @php
                  $count++;
              @endphp
              <tr>
                <th scope="row">{{$count}}</th>
                <td><span class="badge bg-secondary">{{$item->name_active}}</span></td>
                <td>{{convertTime($item->created_at)}}</td>
              </tr>
            @endif
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="tab-foot"></div>