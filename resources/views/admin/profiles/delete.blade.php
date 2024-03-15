<div class="card">
    <div class="card-header">
        <div class="text-center font-weight-bold">Xóa tài khoản</div>
    </div>
    <div class="card-body">
        <form  class="p-6">
            @csrf
            @method('delete')
            <h2 class="text-lg font-medium text-gray-900">Bạn có chắc chắn muốn xóa tài khoản của mình không?</h2>
            <p class="mt-1 text-sm text-gray-600">Khi tài khoản của bạn bị xóa,
                tất cả các tài nguyên và dữ liệu của nó sẽ bị xóa vĩnh viễn.
                Vui lòng nhập mật khẩu của bạn để xác nhận rằng bạn muốn xóa tài khoản của mình vĩnh viễn.
            </p>
            <div class="mt-6 flex justify-end">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Xóa tài khoản</button>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Xác thực người quản trị</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <form  method="post" action="{{ route('profile.destroy') }}">
                @csrf
                @method('delete')
            </form>
            <div class="modal-body">
                <div class="form-group">
                    <label for="pwd">Mật khẩu:</label>
                    <input type="password" name="password" class="form-control" id="pwd">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning btn-sm">Xác thực</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
