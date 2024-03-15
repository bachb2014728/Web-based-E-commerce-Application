<div class="tab-body">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Danh sách bình luận</h5>
        <p class="label">Bình luận của {{$users->name}}</p>
        <table class="table table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nội dụng</th>
              <th scope="col">Sản phẩm</th>
              <th>Trạng thái</th>
              <th scope="col">Ngày tạo</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($users->comment as $item)
              <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <td>{{$item->comment}}</td>
                  <td>{{$item->comment_product->name}}</td>
                  <td>
                    @if ($item->status == 1)
                        <span class="badge bg-success">Hiện</span>
                    @else
                        <span class="badge bg-danger">Ẩn</span>
                    @endif
                  </td>
                  <td>{{convertTime($item->created_at)}}</td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="tab-foot">
    @if ($users->comment->count() > 0)
        <p class="text-end m-2"><strong>Tổng số bình luận : <span class="badge bg-secondary">{{$users->comment->count()}}</span></strong></p> 
        @endif
  </div>