<form action="{{route('profile.updateTo')}}" method="POST">
    @csrf
    <div class="row mb-3">
      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Tên đầy đủ</label>
      <div class="col-md-8 col-lg-9">
        <input name="name" type="text" class="form-control" id="fullName" value="{{Auth::user()->name}}" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="row mb-3">
      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Nghề nghiệp</label>
      <div class="col-md-8 col-lg-9">
        <input name="job" type="text" class="form-control" id="Job" value="{{Auth::user()->job}}" spellcheck="false" data-ms-editor="true">
      </div>
    </div>

    <div class="row mb-3">
      <label for="sex" class="col-md-4 col-lg-3 col-form-label">Giới tính</label>
      <div class="col-md-8 col-lg-9">
        @if (Auth::user()->gender == 0)
        <div class="col-sm-10 d-flex">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="0" checked>
            <label class="form-check-label" for="gridRadios1">Nam</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="1">
            <label class="form-check-label" for="gridRadios2">Nữ</label>
          </div>
        </div>
        @else
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="0">
            <label class="form-check-label" for="gridRadios1">Nam</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="1"checked>
            <label class="form-check-label" for="gridRadios2">Nữ</label>
          </div>
        </div>
        @endif
      </div>
    </div>
    <div class="row mb-3">
      <label for="date" class="col-md-4 col-lg-3 col-form-label">Ngày sinh</label>
      <div class="col-md-8 col-lg-9">
        <div class="input-group">
          <span class="input-group-text" id="basic-addon1">{{convertDate(Auth::user()->birthday)}}</span>
          <input name="birthday" type="date" class="form-control" id="date" value="{{convertDate(Auth::user()->birthday)}}">
        </div>
      </div>
    </div>

    <div class="row mb-3">
      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Địa chỉ</label>
      <div class="col-md-8 col-lg-9">
        <input name="address" type="text" class="form-control" id="Address" value="{{Auth::user()->address}}" spellcheck="false" data-ms-editor="true">
      </div>
    </div>

    <div class="row mb-3">
      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
      <div class="col-md-8 col-lg-9">
        <input name="phone" type="text" class="form-control" id="Phone" value="{{Auth::user()->phone}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
      <div class="col-md-8 col-lg-9">
        <input name="email" type="email" class="form-control" id="Email" value="{{Auth::user()->email}}">
      </div>
    </div>

    <div class="row mb-3">
      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter</label>
      <div class="col-md-8 col-lg-9">
        <input name="twitter" type="text" class="form-control" id="Twitter" value="{{Auth::user()->twitter}}" spellcheck="false" data-ms-editor="true">
      </div>
    </div>

    <div class="row mb-3">
      <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook</label>
      <div class="col-md-8 col-lg-9">
        <input name="facebook" type="text" class="form-control" id="Facebook" value="{{Auth::user()->facebook}}" spellcheck="false" data-ms-editor="true">
      </div>
    </div>

    <div class="row mb-3">
      <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram</label>
      <div class="col-md-8 col-lg-9">
        <input name="instagram" type="text" class="form-control" id="Instagram" value="{{Auth::user()->instagram}}" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary">Cập nhật</button>
    </div>
  </form>