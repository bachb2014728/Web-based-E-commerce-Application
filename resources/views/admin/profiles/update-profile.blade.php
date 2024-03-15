<div class="card">
    <div class="card-header">
        <div class="text-center font-weight-bold">Cập nhật thông tin</div>
    </div>
    <div class="card-body">
        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('patch')
            <input type="hidden" name="id" value="{{$user->id}}">
            <div class="col form-group">
                <label class="col-form-label" for="name">Họ tên</label>
                <input type="text" id="name" name="name"  class="form-control" value="{{$user->name}}" placeholder="Nhập tên tại đây">
            </div>
            <div class="col form-group ">
                <label class="col-form-label @error('email') has-error @enderror" for="email">Email</label>
                <input type="text" id="email" name="email"  class="form-control @error('email') is-invalid @enderror" value="{{$user->email}}" placeholder="Nhập email tại đây">
                @error('email')
                <div class="invalid-feedback  font-weight-bold ">
                    <i class="far fa-times-circle"></i> {{$message}}
                </div>
                @enderror
            </div>
            <div class="col form-group ">
                <label class="col-form-label @error('phone') has-error @enderror" for="phone">Số điện thoại</label>
                <input type="text" id="phone" name="phone"  class="form-control @error('phone') is-invalid @enderror" value="{{$user->phone}}" placeholder="Nhập số điện thoại tại đây">
                @error('phone')
                <div class="invalid-feedback  font-weight-bold ">
                    <i class="far fa-times-circle"></i> {{$message}}
                </div>
                @enderror
            </div>
            <div class="col form-group ">
                <label class="col-form-label" for="address">Địa chỉ</label>
                <input type="text" id="address" name="address"  class="form-control " value="{{$user->address}}" placeholder="Nhập địa chỉ tại đây">
            </div>
            <div class="col mt-2 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-rounded btn-block">Cập nhật</button>
            </div>

        </form>
    </div>
</div>
