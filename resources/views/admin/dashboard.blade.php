@extends('admin.layouts.app')
@section('title')
Trang chủ
@endsection
@section('home')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Trang chủ</h2>
    </div>
    <section>
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                            <div class="align-self-center">
                                <i class="fa fa-bookmark text-info fa-3x"></i>
                            </div>
                            <div class="text-end">
                                <h3 class="text-info">{{$cate->count()}}</h3>
                                <p class="mb-0 label">Số lượng danh mục</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                            <div class="align-self-center">
                                <i class="fa fa-tags text-warning fa-3x"></i>
                            </div>
                            <div class="text-end">
                                <h3 class="text-warning">{{$product->count()}}</h3>
                                <p class="mb-0 label">Số lượng sản phẩm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                            <div>
                                <h3 class="text-warning">{{$cmt}}</h3>
                                <p class="mb-0 label">Số bình luận</p>
                            </div>
                            <div class="align-self-center">
                                <i class="fa fa-bar-chart text-warning fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                            <div class="align-self-center">
                                <i class="fa fa-globe text-danger fa-3x"></i>
                            </div>
                            <div class="text-end">
                                <h6 class="text-danger">Số lần được mua:
                                    @if ($mostPopular !== null)
                                    {{$mostPopular->total_orders}}
                                    @endif
                                </h6>
                                <small class="mb-0 label">Sản phẩm được phổ biến nhất :
                                    @if ($product_popular !== null)
                                    {{$product_popular->name}}
                                    @endif
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                            <div>
                                <h3 class="text-danger">{{$order_accept->count()}}</h3>
                                <p class="mb-0 label">Đơn hàng đã duyệt và chờ duyệt</p>
                            </div>
                            <div class="align-self-center">
                                <i class="fa fa-shopping-cart text-danger fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                            <div>
                                <h3 class="text-success">{{$user->count()}}</h3>
                                <p class="mb-0 label">Số lượng thành viên</p>
                            </div>
                            <div class="align-self-center">
                                <i class="fa fa-user-plus text-success fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                            <div>
                                <h3 class="text-warning">
                                    @if ($topBuyer !==null)
                                    {{$topBuyer->total_orders}}
                                    @endif
                                </h3>
                                <small class="mb-0 label">Người mua nhiều nhất:
                                    <strong>
                                        @if ($topBuyer !==null)
                                        {{$topBuyer->name}}
                                        @endif
                                    </strong>
                                </small>
                            </div>
                            <div class="align-self-center">
                                <i class="fa fa-thumb-tack text-warning fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                            <div>
                                <h3 class="text-info">
                                    @if ($mostActive !== null)
                                    {{$mostActive->total_comments}}
                                    @endif
                                </h3>
                                <small class="mb-0 label ">Người bình luận nhiều nhất :
                                    <strong>
                                        @if ($mostActive !== null)
                                        {{$mostActive->name}}
                                        @endif
                                    </strong>
                                </small>
                            </div>
                            <div class="align-self-center">
                                <i class="fa fa-commenting text-info fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                            <div>
                                <h3 class="text-info">{{$topCategories[0]->products_count}}</h3>
                                <span class="mb-0 label">Danh mục có số sản phẩm nhiều nhất : {{$topCategories[0]->name}}</span>
                            </div>
                            <div class="align-self-center">
                                <i class="fa fa-pie-chart text-info fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                            <div class="align-self-center">
                                <i class="fa fa-line-chart text-success fa-3x"></i>
                            </div>
                            <div class="text-end">
                                <h6 class="text-success">Số lượng đã bán:
                                    @if ($mostPurchased !==null)
                                    {{$mostPurchased->total_quantity}}
                                    @endif
                                </h6>
                                <p class="mb-0 label">Sản phẩm được mua nhiều nhất :
                                    @if ($mostPurchased !==null)
                                    {{$product_popular->name}}
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                            <div>
                                <h3 id="price" class="text-success">
                                    @if ($topValuer!== null)
                                    {{$topValuer->total_value}}
                                    @endif
                                </h3>
                                <p class="mb-0 label">Người có tổng giá trị các đơn hàng cao nhất:
                                    @if ($topValuer !== null)
                                    {{$topValuer->name}}
                                    @endif
                                </p>
                            </div>
                            <div class="align-self-center">
                                <i class="fa fa-rocket text-success fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between px-md-1">
                            <div>
                                <h3 class="text-danger">
                                    @if ($topRatedProduct!== null)
                                    {{number_format($topRatedProduct->average_rating)}}
                                    @endif
                                    <i class="fa fa-star"></i></h3>
                                <small class="mb-0 label">Sản phẩm đánh giá cao nhất :
                                    @if ($topRatedProduct!== null)
                                    {{$topRatedProduct->name}}
                                    @endif
                                </small>
                            </div>
                            <div class="align-self-center">
                                <i class="fa fa-map-signs text-danger fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-xl-6 col-md-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between p-md-1">
                            <div class="d-flex flex-row">
                                <div class="align-self-center">
                                    <i class="fa fa-pencil text-info fa-3x me-4"></i>
                                </div>
                                <div>
                                    <h4 class="">Tổng thu nhập</h4>
                                    <p class="mb-0 label">Ngày hôm nay: {{getCurrentDate()}} </p>
                                </div>
                            </div>
                            <div class="align-self-center">
                                <h2 class=" mb-0" id="price">{{$totalToday}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between p-md-1">
                            <div class="d-flex flex-row">
                                <div class="align-self-center">
                                    <i class="fa fa-paper-plane text-warning fa-3x me-4"></i>
                                </div>
                                <div>
                                    <h4>Thu nhập theo quý</h4>
                                    <p class="mb-0 label">{{$arr_total['keys']}}</p>
                                </div>
                            </div>
                            <div class="align-self-center">
                                <h2 class=" mb-0" id="price">{{$arr_total['values']}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@section('custom_js')
<script>
    const prices = document.querySelectorAll('#price');
    const VND = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' });
    prices.forEach(price => {
        const value = price.textContent;
        price.textContent = VND.format(value);
    });
</script>
@endsection
