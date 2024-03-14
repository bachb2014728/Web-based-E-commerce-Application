@extends('admin.layouts.app')
@section('title')
Danh mục - Chỉnh sửa
@endsection
@section('home')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Danh mục</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item fw-bold"><a class="text-decoration-none" href="">Home</a></li>
                <li class="breadcrumb-item fw-bold"><a class="text-decoration-none" href="{{route('category.index')}}">Danh mục</a></li>
                <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa : {{$category->name}}</li>
            </ol>
        </nav>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center text-muted">
                        <span>Cập nhật : {{$category->name}}</span>
                        <a class="link-secondary text-decoration-none" href="{{route('category.index')}}" aria-label="Add a new report">
                            <span class="d-block d-sm-none" data-feather="corner-down-left"></span>
                            <span class="d-none d-sm-block">Trở lại</span>
                        </a>
                    </h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{$category->id}}">
                        <div class="row">
                            <div class="col-sm-6 form-group @error('name') has-error @enderror">
                                <label class="col-form-label" for="name">Tên danh mục</label>
                                <input type="text" id="name" name="name"
                                       class="form-control  @error('name') is-invalid @enderror"
                                       value="{{$category->name}}"
                                       placeholder="Nhập tên sản phẩm tại đây" onkeyup="ChangeToSlug()">
                                @error('name')
                                <div class="invalid-feedback  font-weight-bold "><i class="fa fa-times-circle"></i>{{$message}}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6 form-group">
                                <label class="col-form-label" for="slug">Đường dẫn</label>
                                <input type="text" id="slug" name="slug"
                                       class="form-control  @error('slug') is-invalid @enderror"
                                       value="{{$category->slug}}"
                                       placeholder="Nhập slug tại đây" >
                                @error('slug')
                                <div class="invalid-feedback  font-weight-bold "><i class="fa fa-times-circle"></i>{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col form-group">
                            <label for="desciption" class="col-form-label">Danh mục chung</label>
                            <select class="form-select" name="parent_cate" id="parent_cate">
                                <option value="">Chọn danh mục</option>

                                @foreach ($categories as $key =>$val)
                                <option {{$category->parent_cate == $val->id ? 'selected' : ''}} value="{{$val->id}}">
                                    @php
                                    $string='';
                                    for ($i=0; $i < $val->level; $i++) {
                                    echo $string;
                                    $string .= '--';
                                    }
                                    @endphp
                                    {{$val->name}}
                                </option>
                                @endforeach

                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        <div class="col form-group ">
                            <label class="col-form-label" for="desciption">Mô tả (ngắn gọn)</label>
                            <input type="text" id="desciption" name="desciption"  class="form-control  "placeholder="Nhập mô tả tại đây" value="{{$category->desciption}}">
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <span>Bạn muốn hiện thị không ?</span>
                                {!!$category->status
                                ? ' <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="status1" value="1" checked="checked">
                                    <label class="form-check-label" for="status1">Có</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="status2" value="0">
                                    <label class="form-check-label" for="status2">Ẩn</label>
                                </div>'
                                : ' <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="status1" value="1">
                                    <label class="form-check-label" for="status1">Có</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="status2" value="0" checked="checked">
                                    <label class="form-check-label" for="status2">Ẩn</label>
                                </div>'!!}
                            </div>
                            <div class="col-sm-6 form-group">
                                <span>Bạn muốn ưu tiên không ?</span>
                                {!!$category->prior
                                ? ' <div class="form-check">
                                    <input class="form-check-input" type="radio" name="prior" id="prior1" value="1" checked="checked">
                                    <label class="form-check-label" for="prior1">Có</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="prior" id="prior2" value="0">
                                    <label class="form-check-label" for="prior2">Ẩn</label>
                                </div>'
                                : ' <div class="form-check">
                                    <input class="form-check-input" type="radio" name="prior" id="prior1" value="1">
                                    <label class="form-check-label" for="prior1">Có</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="prior" id="prior2" value="0" checked="checked">
                                    <label class="form-check-label" for="prior2">Không</label>
                                </div>'!!}
                            </div>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-primary btn-rounded btn-block">Xác nhận</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@section('custom_js')
<script>
    //tu ten sang url
    function ChangeToSlug(){
        var title, slug;

        //Lấy text từ thẻ input title
        title = document.getElementById("name").value;

        //Đổi chữ hoa thành chữ thường
        slug = title.toLowerCase();

        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, " - ");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        document.getElementById('slug').value = slug;
    }
</script>
@endsection
