@extends('admin.layouts.app')
@section('title')
Sản phẩm - Tạo
@endsection
@section('home')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Sản phẩm </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item fw-bold"><a class="text-decoration-none" href="">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sản phẩm </li>
            </ol>
        </nav>
    </div>
    <section class="content">
        <div class="container-fluid">
            <caption>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
                    <span>Thêm sản phẩm</span>
                    <a class="link-secondary text-decoration-none" href="{{route('product.index')}}">
                        <span class="d-block d-sm-none" data-feather="corner-down-left"></span>
                        <span class="d-none d-sm-block">Trở lại</span>
                    </a>
                </h6>
            </caption>
            <div class="card">
                <div class="card-header text-center">
                    <span class="text-muted h6">Form thêm sản phẩm</span>
                </div>
                <div class="card-body">
                    <form action="{{route('product.save')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-5">
                            <div class="col-md-5 col-lg-4 order-md-last">
                                <ul class="list-group mb-3">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <h6 class="my-0 mb-2">Danh sách danh mục</h6>
                                            <div class="table-responsive" style="height: 400px; width: 22em">
                                                <table class="table">
                                                    <tbody>
                                                    @foreach ($category as $value)
                                                    <input class="form-check-input" type="checkbox" name="cate[]" id="cate_{{$value->id}}" value="{{$value->id}} ">
                                                    <label class="form-check-label text-muted" for="cate_{{$value->id}}">
                                                        @php
                                                        $string='';
                                                        for ($i=0; $i < $value->level; $i++) {
                                                        echo $string;
                                                        $string .= '--';
                                                        }
                                                        @endphp
                                                        {{$value->name}}
                                                    </label>
                                                    <br>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-7 col-lg-8">
                                <div class="pb-2 mb-3 border-bottom">
                                    <div class="row">
                                        <div class="col-sm-6 form-group @error('name') has-error @enderror">
                                            <label class="col-form-label" for="name">Tên sản phẩm</label>
                                            <input type="text" id="name" name="name"  class="form-control  @error('name') is-invalid @enderror" placeholder="Nhập tên sản phẩm tại đây" onkeyup="ChangeToSlug()">
                                            @error('name')
                                            <div class="invalid-feedback  font-weight-bold "><i class="fa fa-times-circle"></i>{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label class="col-form-label" for="slug">Đường dẫn</label>
                                            <input type="text" id="slug" name="slug"  class="form-control  @error('slug') is-invalid @enderror" placeholder="Nhập đường dẫn sản phẩm tại đây" >
                                            @error('slug')
                                            <div class="invalid-feedback  font-weight-bold "><i class="fa fa-times-circle"></i>{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5 form-group">
                                            <label class="col-form-label" for="price">Giá sản phẩm</label>
                                            <input type="text" id="price" name="price"  class="form-control" placeholder="Nhập giá sản phẩm tại đây">
                                        </div>
                                        <div class="col-sm-5 form-group">
                                            <label class="col-form-label" for="sale">Sale</label>
                                            <input type="text" id="price" name="sale"  class="form-control" value="0" placeholder="Nhập giá sale tại đây">
                                        </div>
                                        <div class="col-sm-2 form-group">
                                            <label class="col-form-label" for="quantity">Số lượng</label>
                                            <input type="number" id="quantity" name="quantity"  class="form-control" placeholder="Nhập giá sản phẩm tại đây" value="1">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <span>Bạn muốn hiện thị không ?</span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="status1" value="1" checked="checked">
                                                <label class="form-check-label" for="status1">Có</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="status2" value="0">
                                                <label class="form-check-label" for="status2">Ẩn</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <span>Bạn muốn ưu tiên không ?</span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="prior" id="prior1" value="1" checked="checked">
                                                <label class="form-check-label" for="prior1">Có</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="prior" id="prior2" value="0">
                                                <label class="form-check-label" for="prior2">Không</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 mb-3">
                                            <label for="image" class="form-label">Thêm ảnh chính</label>
                                            <input class="form-control" name="image" type="file" id="image" onchange="previewImage(event)">
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <label for="images" class="form-label">Thêm ảnh mô tả</label>
                                            <input class="form-control" name="images[]" type="file" id="images" multiple onchange="previewImages(event)">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <img id="preview" src="" class="img-thumbnail" style="width: 200px;">
                                        </div>
                                    </div>
                                    <div id="preview2" class="row"></div>
                                    <div class="mb-3">
                                        <label for="editor1" class="col-form-label">Thông tin mô tả</label>
                                        <textarea class="form-control" name="description" id="editor1" rows="10" cols="100">.</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-primary btn-rounded btn-block">Xác nhận</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
</main>
@endsection
@section('custom_js')
<script>
    CKEDITOR.replace('editor1');
</script>
<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('preview');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }

</script>
<script>
    document.getElementById('images').addEventListener('change', function(e) {
        var preview = document.getElementById('preview2');
        preview.innerHTML = ''; // Xóa hình ảnh hiện tại

        for (var i = 0; i < e.target.files.length; i++) {
            var reader = new FileReader();
            reader.onload = function(e) {
                var div = document.createElement('div');
                div.className = ('col mb-3')
                div.innerHTML =`
          <img id="`+i+`" src="`+e.target.result+`" alt="Ảnh xem trước" class="img-thumbnail" style="width: 200px;">
          `
                preview.appendChild(div);
            }
            reader.readAsDataURL(e.target.files[i]);
        }
    });
</script>
@endsection
