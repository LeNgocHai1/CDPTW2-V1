@extends('layout.user.main')

@section('content')
    @if (Session::has('message'))
        <script type="text/javascript">
            swal({
                title: 'Cảm ơn bạn đã mua hàng!',
                text: "{{ Session::get('message') }}",
                button: "Đồng ý!",
                icon: "success"
            }).then((value) => {
                //location.reload();
            }).catch(swal.noop);
        </script>
    @endif
    <!-- slide trình chiếu -->
    <div class="container-fluid" style="height:150px"></div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to=""></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="public/upload/banner1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="public/upload/banner1.jpg">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="public/upload/banner3.jpg">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="public/upload/banner4.jpg">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="public/upload/banner4.jpg">
          </div>

        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- kết thúc slide -->
    <!-- list sản phẩm -->
    <div class="container bg-white jumbotron">
        <div class="row mt-3 ">
            <h4 class="list-product-title col-sm-12 bg-danger text-white"> <i class="fas fa-bolt"></i> KHUYẾN MÃI ONLINE
            </h4>
            <div class="list-product-subtitle text-secondary">
                <h5>Các sản phẩm đang trong thời gian khuyến mãi </h5>
            </div>
            <div class="spinner-grow text-danger"></div>
            <!-- phần bảng sản phẩm 4x4 -->
            <div class="product-group mt-2">
                <div class="row ">
                    <!-- dat foreach -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product">
                            <img class="card-img-top" src="./public/upload/cpu3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h6 class="card-title product-title mb-3">
                                    <a data-toggle="tooltip" data-placement="bottom"
                                        title="
                CPU INTEL Core i7-9700">
                                        CPU INTEL Core i7-9700
                                    </a>

                                </h6>
                                <div class="card-text">
                                    <span class="new-price"> 8,990,000 VNĐ</span>
                                    <span class="old-price text-secondary"> 9,990,000 VNĐ </span>
                                    <br>
                                    <a class="btn btn-success btn-add-to-cart mt-2" onclick="" href="javascript:"><i
                                            class="fas fa-cart-arrow-down"></i></a>
                                    <a class="btn btn-outline-success btn-detail mt-2 font-weight-bold" href=""> Xem
                                        chi tiết</a>
                                    <span class="badge badge-danger text-white">
                                        <h6>10%</h6>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end-->
                    <!-- dat foreach -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product">
                            <img class="card-img-top" src="./public/upload/cpu1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h6 class="card-title product-title mb-3">
                                    <a data-toggle="tooltip" data-placement="bottom"
                                        title="
            CPU INTEL Core i7-9700">
                                        CPU INTEL Core i7-9700
                                    </a>

                                </h6>
                                <div class="card-text">
                                    <span class="new-price"> 8,990,000 VNĐ</span>
                                    <span class="old-price text-secondary"> 9,990,000 VNĐ </span>
                                    <br>
                                    <a class="btn btn-success btn-add-to-cart mt-2" onclick="" href="javascript:"><i
                                            class="fas fa-cart-arrow-down"></i></a>
                                    <a class="btn btn-outline-success btn-detail mt-2 font-weight-bold" href=""> Xem
                                        chi tiết</a>
                                    <span class="badge badge-danger text-white">
                                        <h6>10%</h6>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end-->
                    <!-- dat foreach -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product">
                            <img class="card-img-top" src="./public/upload/cpu2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h6 class="card-title product-title mb-3">
                                    <a data-toggle="tooltip" data-placement="bottom"
                                        title="
        CPU INTEL Core i7-9700">
                                        CPU INTEL Core i7-9700
                                    </a>

                                </h6>
                                <div class="card-text">
                                    <span class="new-price"> 8,990,000 VNĐ</span>
                                    <span class="old-price text-secondary"> 9,990,000 VNĐ </span>
                                    <br>
                                    <a class="btn btn-success btn-add-to-cart mt-2" onclick="" href="javascript:"><i
                                            class="fas fa-cart-arrow-down"></i></a>
                                    <a class="btn btn-outline-success btn-detail mt-2 font-weight-bold" href="">
                                        Xem chi tiết</a>
                                    <span class="badge badge-danger text-white">
                                        <h6>10%</h6>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end-->
                    <!-- dat foreach -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product">
                            <img class="card-img-top" src="./public/upload/cpu4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h6 class="card-title product-title mb-3">
                                    <a data-toggle="tooltip" data-placement="bottom"
                                        title="
        CPU INTEL Core i7-9700">
                                        CPU INTEL Core i7-9700
                                    </a>

                                </h6>
                                <div class="card-text">
                                    <span class="new-price"> 8,990,000 VNĐ</span>
                                    <span class="old-price text-secondary"> 9,990,000 VNĐ </span>
                                    <br>
                                    <a class="btn btn-success btn-add-to-cart mt-2" onclick="" href="javascript:"><i
                                            class="fas fa-cart-arrow-down"></i></a>
                                    <a class="btn btn-outline-success btn-detail mt-2 font-weight-bold" href="">
                                        Xem chi tiết</a>
                                    <span class="badge badge-danger text-white">
                                        <h6>10%</h6>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end-->
                    <!-- dat foreach -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product">
                            <img class="card-img-top" src="./public/upload/case3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h6 class="card-title product-title mb-3">
                                    <a data-toggle="tooltip" data-placement="bottom"
                                        title="
      CPU INTEL Core i7-9700">
                                        CPU INTEL Core i7-9700
                                    </a>

                                </h6>
                                <div class="card-text">
                                    <span class="new-price"> 8,990,000 VNĐ</span>
                                    <span class="old-price text-secondary"> 9,990,000 VNĐ </span>
                                    <br>
                                    <a class="btn btn-success btn-add-to-cart mt-2" onclick="" href="javascript:"><i
                                            class="fas fa-cart-arrow-down"></i></a>
                                    <a class="btn btn-outline-success btn-detail mt-2 font-weight-bold" href="">
                                        Xem chi tiết</a>
                                    <span class="badge badge-danger text-white">
                                        <h6>10%</h6>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end-->
                    <!-- dat foreach -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product">
                            <img class="card-img-top" src="./public/upload/case8.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h6 class="card-title product-title mb-3">
                                    <a data-toggle="tooltip" data-placement="bottom" title="
    CPU INTEL Core i7-9700">
                                        CPU INTEL Core i7-9700
                                    </a>

                                </h6>
                                <div class="card-text">
                                    <span class="new-price"> 8,990,000 VNĐ</span>
                                    <span class="old-price text-secondary"> 9,990,000 VNĐ </span>
                                    <br>
                                    <a class="btn btn-success btn-add-to-cart mt-2" onclick="" href="javascript:"><i
                                            class="fas fa-cart-arrow-down"></i></a>
                                    <a class="btn btn-outline-success btn-detail mt-2 font-weight-bold" href="">
                                        Xem chi tiết</a>
                                    <span class="badge badge-danger text-white">
                                        <h6>10%</h6>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end-->
                </div>

            </div>
            <div class="product-group mt-5">
                <div class="row ">

                </div>

            </div>
            <!-- Kết thúc phần bảng -->
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <button type="button" class="btn btn-outline-danger btn-block ">Xem tất cả</button>
            </div>
        </div>
    </div>
    <!-- Kết thúc list -->

    <!-- 3 banner quảng cáo - 2 list sản phẩm -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-4">

                <img src="./public/upload/ads1.jpg" alt="ads" class="rounded" width="390" height="190">
            </div>
            <div class="col-sm-4">
                <img src="./public/upload/ads2.jpg" alt="ads" class="rounded" width="390" height="190">
            </div>
        </div>
    </div>
    <div class="container">
        <div class=" mt-5 text-info">
            <img src="public/frontend/image/icon/Capture.PNG" alt="" class="mb-3">
            <h3 style="display: inline;">THÙNG CASE</h3>
        </div>
        <div class="container bg-white jumbotron">
            <div class="row bg-white">
                <div class="product-group">
                    <div class="row ">
                        <!-- dat foreach -->
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="card card-product">
                                <img class="card-img-top" src="./public/upload/case1.webp" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title product-title mb-3">
                                        <a data-toggle="tooltip" data-placement="bottom"
                                            title="Vỏ Case Xigmatek Aquarius S Queen (Pink, No Fan)">
                                            Vỏ Case Xigmatek Aquarius S Queen (Pink, No Fan)
                                        </a>

                                    </h6>
                                    <div class="card-text">
                                        <span class="new-price"> 1.299.000 VNĐ </span>
                                        <span class="old-price text-secondary"> 1.399.000 VNĐ
                                        </span>
                                        <br>
                                        <a class="btn btn-success btn-add-to-cart mt-2" onclick=""
                                            href="javascript:"><i class="fas fa-cart-arrow-down"></i></a>
                                        <a class="btn btn-outline-success btn-detail mt-2 font-weight-bold"
                                            href=""> Xem chi tiết</a>
                                        <span class="badge badge-danger text-white">
                                            <h6>5%</h6>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end-->
                        <!-- dat foreach -->
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="card card-product">
                                <img class="card-img-top" src="./public/upload/case2.webp" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title product-title mb-3">
                                        <a data-toggle="tooltip" data-placement="bottom"
                                            title="Vỏ Case Xigmatek Aquarius S Queen (Pink, No Fan)">
                                            Vỏ Case Xigmatek Aquarius S Queen (Pink, No Fan)
                                        </a>

                                    </h6>
                                    <div class="card-text">
                                        <span class="new-price"> 1.299.000 VNĐ </span>
                                        <span class="old-price text-secondary"> 1.399.000 VNĐ
                                        </span>
                                        <br>
                                        <a class="btn btn-success btn-add-to-cart mt-2" onclick=""
                                            href="javascript:"><i class="fas fa-cart-arrow-down"></i></a>
                                        <a class="btn btn-outline-success btn-detail mt-2 font-weight-bold"
                                            href="{{ url('showdetail/33') }}"> Xem chi tiết</a>
                                        <span class="badge badge-danger text-white">
                                            <h6>5%</h6>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end-->
                        <!-- dat foreach -->
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="card card-product">
                                <img class="card-img-top" src="./public/upload/case3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title product-title mb-3">
                                        <a data-toggle="tooltip" data-placement="bottom"
                                            title="Vỏ Case Xigmatek Aquarius S Queen (Pink, No Fan)">
                                            Vỏ Case Xigmatek Aquarius S Queen (Pink, No Fan)
                                        </a>

                                    </h6>
                                    <div class="card-text">
                                        <span class="new-price"> 1.299.000 VNĐ </span>
                                        <span class="old-price text-secondary"> 1.399.000 VNĐ
                                        </span>
                                        <br>
                                        <a class="btn btn-success btn-add-to-cart mt-2" onclick=""
                                            href="javascript:"><i class="fas fa-cart-arrow-down"></i></a>
                                        <a class="btn btn-outline-success btn-detail mt-2 font-weight-bold"
                                            href=""> Xem chi tiết</a>
                                        <span class="badge badge-danger text-white">
                                            <h6>5%</h6>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end-->
                        <!-- dat foreach -->
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="card card-product">
                                <img class="card-img-top" src="./public/upload/case4.png" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title product-title mb-3">
                                        <a data-toggle="tooltip" data-placement="bottom"
                                            title="Vỏ Case Xigmatek Aquarius S Queen (Pink, No Fan)">
                                            Vỏ Case Xigmatek Aquarius S Queen (Pink, No Fan)
                                        </a>

                                    </h6>
                                    <div class="card-text">
                                        <span class="new-price"> 1.299.000 VNĐ </span>
                                        <span class="old-price text-secondary"> 1.399.000 VNĐ
                                        </span>
                                        <br>
                                        <a class="btn btn-success btn-add-to-cart mt-2" onclick=""
                                            href="javascript:"><i class="fas fa-cart-arrow-down"></i></a>
                                        <a class="btn btn-outline-success btn-detail mt-2 font-weight-bold"
                                            href=""> Xem chi tiết</a>
                                        <span class="badge badge-danger text-white">
                                            <h6>5%</h6>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end-->
                        <!-- dat foreach -->
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="card card-product">
                                <img class="card-img-top" src="./public/upload/case7.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title product-title mb-3">
                                        <a data-toggle="tooltip" data-placement="bottom"
                                            title="Vỏ Case Xigmatek Aquarius S Queen (Pink, No Fan)">
                                            Vỏ Case Xigmatek Aquarius S Queen (Pink, No Fan)
                                        </a>

                                    </h6>
                                    <div class="card-text">
                                        <span class="new-price"> 1.299.000 VNĐ </span>
                                        <span class="old-price text-secondary"> 1.399.000 VNĐ
                                        </span>
                                        <br>
                                        <a class="btn btn-success btn-add-to-cart mt-2" onclick=""
                                            href="javascript:"><i class="fas fa-cart-arrow-down"></i></a>
                                        <a class="btn btn-outline-success btn-detail mt-2 font-weight-bold"
                                            href=""> Xem chi tiết</a>
                                        <span class="badge badge-danger text-white">
                                            <h6>5%</h6>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end-->
                        <!-- dat foreach -->
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="card card-product">
                                <img class="card-img-top" src="./public/upload/case8.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title product-title mb-3">
                                        <a data-toggle="tooltip" data-placement="bottom"
                                            title="Vỏ Case Xigmatek Aquarius S Queen (Pink, No Fan)">
                                            Vỏ Case Xigmatek Aquarius S Queen (Pink, No Fan)
                                        </a>

                                    </h6>
                                    <div class="card-text">
                                        <span class="new-price"> 1.299.000 VNĐ </span>
                                        <span class="old-price text-secondary"> 1.399.000 VNĐ
                                        </span>
                                        <br>
                                        <a class="btn btn-success btn-add-to-cart mt-2" onclick=""
                                            href="javascript:"><i class="fas fa-cart-arrow-down"></i></a>
                                        <a class="btn btn-outline-success btn-detail mt-2 font-weight-bold"
                                            href=""> Xem chi tiết</a>
                                        <span class="badge badge-danger text-white">
                                            <h6>5%</h6>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end-->
                        <!-- dat foreach -->
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="card card-product">
                                <img class="card-img-top" src="./public/upload/case1.webp" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title product-title mb-3">
                                        <a data-toggle="tooltip" data-placement="bottom"
                                            title="Vỏ Case Xigmatek Aquarius S Queen (Pink, No Fan)">
                                            Vỏ Case Xigmatek Aquarius S Queen (Pink, No Fan)
                                        </a>

                                    </h6>
                                    <div class="card-text">
                                        <span class="new-price"> 1.299.000 VNĐ </span>
                                        <span class="old-price text-secondary"> 1.399.000 VNĐ
                                        </span>
                                        <br>
                                        <a class="btn btn-success btn-add-to-cart mt-2" onclick=""
                                            href="javascript:"><i class="fas fa-cart-arrow-down"></i></a>
                                        <a class="btn btn-outline-success btn-detail mt-2 font-weight-bold"
                                            href=""> Xem chi tiết</a>
                                        <span class="badge badge-danger text-white">
                                            <h6>5%</h6>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end-->
                    </div>

                </div>
            </div>
            <div class="row mt-5">

                <a href="case.php" type="button" class="btn btn-outline-danger  " style="margin: auto; width: 30%;">Xem
                    tất cả</a>

            </div>
        </div>
    </div>
    <div class="container">
        <div class=" mt-5 text-info">
            <img src="public/frontend/image/icon/Capture.PNG" alt="" class="mb-3">
            <h3 style="display: inline;">MÀN HÌNH</h3>
        </div>
        <div class="container bg-white jumbotron">
            <div class="row bg-white">
                <div class="product-group">
                    <div class="row ">
                        <!-- dat foreach -->
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="card card-product">
                                    <img class="card-img-top" src="./public/upload/mn1.webp"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h6 class="card-title product-title mb-3">
                                            <a data-toggle="tooltip" data-placement="bottom"
                                                title="Màn hình Acer 21.5" HA220QA">
                                              Màn hình Acer 21.5" HA220QA
                                            </a>

                                        </h6>
                                        <div class="card-text">
                                            <span class="new-price"> 2,910,000 VNĐ </span>
                                            <span class="old-price text-secondary"> 3,110,000 VNĐ
                                            </span>
                                            <br>
                                            <a class="btn btn-success btn-add-to-cart mt-2"
                                                onclick="" href="javascript:"><i
                                                    class="fas fa-cart-arrow-down"></i></a>
                                            <a class="btn btn-outline-success btn-detail mt-2 font-weight-bold"
                                                href="{{ url('showdetail/33') }}"> Xem chi tiết</a>
                                            <span class="badge badge-danger text-white">
                                                <h6>5%</h6>
                                            </span>

                                        </div>

                                    </div>
                                </div>

                            </div>
                    </div>

                </div>
            </div>
            <div class="row mt-5">

                <a href="card.php" type="button" class="btn btn-outline-danger  " style="margin: auto; width: 30%;">Xem
                    tất cả</a>

            </div>
        </div>
    </div>


    <script>
        function AddCart(productID) {
            $.ajax({
                type: 'GET',
                url: 'Add-Cart/' + productID,
            }).done(function(response) {
                RenderCart(response);
                alertify.success('Đã thêm vào giỏ hàng');
            });

        }
        $("#change-item-cart").on("click", ".si-close a", function() {
            $.ajax({
                type: 'GET',
                url: 'Delete-Item-Cart/' + $(this).data("id"),
            }).done(function(response) {
                RenderCart(response);
                alertify.warning('Đã xóa sản phẩm');
            });

        });

        function RenderCart(response) {
            $("#change-item-cart").empty();
            $("#change-item-cart").html(response);
            $("#total-quanty-show").text($("#total-quanty-cart").val());
        }
    </script>
@endsection
