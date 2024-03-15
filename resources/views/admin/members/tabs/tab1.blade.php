<div class="tab-body p-3">
    <div class="mt-4">
        <div class="row mb-3">
            <div class="col-lg-3 col-md-4 label "> Tên người dùng</div>
            <div class="col-lg-9 col-md-8"><input type="text" class="input-group-text form-control" value="{{$users->name}}" readonly></div>
        </div>
        <div class="mb-3 row">
            <div class="col-lg-3 col-md-4 label">Nghề nghiệp</div>
            <div class="col-lg-9 col-md-8"><input type="text" class="input-group-text form-control" value="{{$users->job}}" readonly></div>
        </div>
        <div class="mb-3 row">
            <div class="col-lg-3 col-md-4 label">Số điện thoại</div>
            <div class="col-lg-9 col-md-8"><input type="text"class="input-group-text form-control" value="{{$users->phone}}" readonly></div>
        </div>
        <div class="mb-3 row">
            <div class="col-lg-3 col-md-4 label">Email</div>
            <div class="col-lg-9 col-md-8"><input type="text" class="input-group-text form-control" value="{{$users->email}}" readonly></div>
        </div>
        <div class="mb-3 row">
            <div class="col-lg-3 col-md-4 label">Giới tính</div>
            @if ($users->gender == 0 )
            <div class="col-lg-9 col-md-8"><input type="text" class="input-group-text form-control" value="Nam" readonly></div>
            @else
            <div class="col-lg-9 col-md-8"> <input type="text" class="input-group-text form-control" value="Nữ" readonly></div>
            @endif
        </div>
        <div class="mb-3 row">
            <div class="col-lg-3 col-md-4 label">Ngày sinh</div>
            <div class="col-lg-9 col-md-8"><input type="text" class="input-group-text form-control" value="{{convertDate($users->birthday)}}" readonly></div>
        </div>
        <div class="mb-3 row">
            <div class="col-lg-3 col-md-4 label">Địa chỉ</div>
            <div class="col-lg-9 col-md-8"><input type="text"class="input-group-text form-control" value="{{$users->address}}" readonly></div>
        </div>
        <div class="mb-3 row">
            <div class="col-lg-3 col-md-4 label">Lần truy cập gần nhất</div>
            <div class="col-lg-9 col-md-8"><input type="text" class="input-group-text form-control" value="{{truycaplancuoi($users->updated_at)}}" readonly></div>
        </div>
        <div class="mb-3 row">
          <div class="col-lg-3 col-md-4 label">Liên kêt facebook</div>
          <div class="col-lg-9 col-md-8"><input type="text"class="input-group-text form-control" value="{{$users->facebook}}" readonly></div>
        </div>
        <div class="mb-3 row">
          <div class="col-lg-3 col-md-4 label">Liên kết instagram</div>
          <div class="col-lg-9 col-md-8"> <input type="text"class="input-group-text form-control" value="{{$users->instagram}}" readonly></div>
        </div>
        <div class="mb-3 row">
          <div class="col-lg-3 col-md-4 label">Liên kết twitter</div>
          <div class="col-lg-9 col-md-8"><input type="text"class="input-group-text form-control" value="{{$users->twitter}}" readonly></div>
        </div>
    </div>
</div>
<div class="tab-foot">
    
</div>
