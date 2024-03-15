<h5 class="card-title">Thông tin chi tiết</h5>
<div class="row">
    <div class="col-lg-3 col-md-4 label ">Tên đầy đủ</div>
    <div class="col-lg-9 col-md-8">{{Auth::user()->name}}</div>
</div>
<div class="row">
    <div class="col-lg-3 col-md-4 label">Giới tính</div>
    @if (Auth::user()->gender==0)
    <div class="col-lg-9 col-md-8">Nam</div>
    @else
    <div class="col-lg-9 col-md-8">Nữ</div>
    @endif
</div>
<div class="row">
    <div class="col-lg-3 col-md-4 label">Nghề nghiệp</div>
    <div class="col-lg-9 col-md-8">{{Auth::user()->job}}</div>
</div>
<div class="row">
    <div class="col-lg-3 col-md-4 label">Ngày sinh</div>
    <div class="col-lg-9 col-md-8">{{convertDate(Auth::user()->birthday)}}</div>
</div>
<div class="row">
    <div class="col-lg-3 col-md-4 label">Địa chỉ</div>
    <div class="col-lg-9 col-md-8">{{Auth::user()->address}}</div>
</div>
<div class="row">
    <div class="col-lg-3 col-md-4 label">Phone</div>
    <div class="col-lg-9 col-md-8">(+84) {{Auth::user()->phone}}</div>
</div>
<div class="row">
    <div class="col-lg-3 col-md-4 label">Email</div>
    <div class="col-lg-9 col-md-8">{{Auth::user()->email}}</div>
</div>