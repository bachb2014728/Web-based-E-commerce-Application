<div class="card">
    <div class="card-header">
        <div class="text-center font-weight-bold">Đổi mật khẩu</div>
    </div>
    <div class="card-body">
        <form method="post" action="{{route('password.update')}}" class="mt-6 space-y-6">
            @csrf
            @method('put')
            <div class="form-group">
                <label class="col-form-label" for="password">Mật khẩu cũ</label>
                <input type="password" id="password" name="password"  class="form-control"  placeholder="Nhập mật khẩu cũ">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="password"> Nhập mật khẩu mới</label>
                <input type="password" id="password-new" name="password_new"  class="form-control"  placeholder="Nhập mật khẩu mới" required>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="password">Nhập lại mật khẩu mới</label>
                <input type="password" id="password-confirm" name="password_confirm"  class="form-control"  placeholder="Nhập lại mật khẩu mới" required>
            </div>
            <div class="col mt-2 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-rounded btn-block">Cập nhật</button>
            </div>
        </form>
    </div>
</div>
