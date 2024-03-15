<form action="{{route('profile.moreAddress')}}" method="POST">
    @csrf
    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
    <div class="row mb-3">
      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Tên người nhận</label>
      <div class="col-md-8 col-lg-9">
        <input name="name" type="text" class="form-control" id="fullName">
      </div>
    </div>
    <div class="row mb-3">
      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Địa chỉ</label>
      <div class="col-md-8 col-lg-9">
        <input name="address" type="text" class="form-control" id="Address">
      </div>
    </div>

    <div class="row mb-3">
      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
      <div class="col-md-8 col-lg-9">
        <input name="phone" type="text" class="form-control" id="Phone">
      </div>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary">Thêm người nhận</button>
    </div>
  </form>