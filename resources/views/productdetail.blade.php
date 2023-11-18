@extends('layout.user.main')
@section('content')
    <div class="container-fluid " style="height:90px"></div>
    <!-- end -->

    <div class="container jumbotron bg-white">
        <div class="row ">
            <div class="col-sm-4">
                <div class="pic p-0 img_sp">
                    <img src="../public/upload/case2.webp" alt="" style="" class="xzoom"
                        xoriginal="../public/upload/case2.webp">
                </div>
                <div class="img_sp_chitiet xzoom-thums">
                    <a href="../public/upload/case2.webp" class="card">
                        <img src="../public/upload/case2.webp" xpreview="../public/upload/case2.webp" class="xzoom-gallery">
                    </a>
                    <a href="../public/upload/case1.webp" class="card">
                        <img src="../public/upload/case1.webp" class="xzoom-gallery">
                    </a>
                    <a href="../public/upload/case2.webp" class="card">
                        <img src="../public/upload/case2.webp" class="xzoom-gallery">
                    </a>
                    <a href="../public/upload/case2.webp" class="card">
                        <img src="../public/upload/case2.webp" class="xzoom-gallery">
                    </a>
                </div>

            </div>
            <div class="col-sm-8">
                <h4 style="color: #4A235A;" class="font-weight-bold">Vỏ case Xigmatek X Battleship ( No fan)</h4>
                <div class="no-review font-weight-bold mt-3">Chưa có đánh giá</div>
                <div class="d-flex flex-column p-2" style="background-color: rgba(219, 219, 219, 0.26);">
                    <div class="d-flex justify-content-around ">
                        <div class="p-2 text-secondary">Giá niêm yết</div>
                        <div class="p-2 old-price">
                            <h5>2.799.000 VNĐ</h5>
                        </div>

                    </div>
                    <div class="d-flex justify-content-around ">
                        <div class="p-2 text-secondary">Giá khuyến mãi</div>
                        <div class="p-2 new-price">
                            <h5>2.599.000 VNĐ</h5>

                        </div>

                    </div>

                </div>
                <div class=" d-flex ml-5 pb-4" style="border-bottom: solid 1px rgba(145, 145, 145, 0.404);">
                    <div class="p-2 text-secondary">
                        Vận chuyển
                    </div>
                    <div class="p-2 ml-5">
                        <img src="../public/frontend/a.png" alt="" class="mb-2" style="height: 25px;">
                        Miễn phí vận chuyển <a class="text-secondary">(với đơn hàng trên 500.000đ)</a>
                    </div>

                </div>
                <div class="d-flex pt-2" style="margin-left: 100px;">
                    <div class="p-2 text-secondary">
                        Chọn số lượng
                    </div>
                    <input type="number" style="width: 15%;" name="soluong" min="1" max="9" value="1"
                        class="form-control" required>


                </div>
                <div class="f-lex mt-4" style="margin-left: 100px;">
                    <a style="width:170px;" href="" class="btn btn-danger mr-4">MUA NGAY</a>
                    <a style="width:220px; border: 2px solid;" onclick="" href="javascript:"
                        class="btn btn-outline-danger font-weight-bold"><i class="fas fa-cart-arrow-down"></i> THÊM VÀO
                        GIỎ HÀNG</a>

                </div>
                <div class="like-share mt-4 ml-5">
                    <iframe
                        src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fvku.udn.vn&width=600&layout=standard&action=like&size=large&share=true&height=35&appId"
                        width="600" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

                </div>



            </div>
        </div>




        <div class="row">
            <div class="col-4">
                <div class=" font-weight-bold">Mô Tả</div>
                <h6>Vỏ case Xigmatek X Battleship ( No fan)</h6>
                <div> {!! $product->description !!}</div>


                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"
                    style="margin-left: 100px;">
                    Xem cấu hình chi tiết
                </button>

                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h5 class="modal-title" style="margin-left: 150px;">Thông số kỹ thuật</h5>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="d-flex justify-content-around  mb-2 p-2"
                                style="border-bottom: solid 1px rgba(145, 145, 145, 0.404);">
                                <div class=" text-secondary">Thương hiệu</div>
                                <div class="">Xigmatek</div>
                            </div>

                            <div class="d-flex justify-content-around mb-2 p-2"
                                style="border-bottom: solid 1px rgba(145, 145, 145, 0.404);">
                                <div class=" text-secondary">Thời gian bảo hành (tháng)</div>
                                <div class="">12 tháng</div>
                            </div>
                            <div class="d-flex justify-content-around mb-2 p-2"
                                style="border-bottom: solid 1px rgba(145, 145, 145, 0.404);">
                                <div class=" text-secondary">Nhà cung cấp</div>
                                <div class=""> CÔNG TY CỔ PHẦN TIN HỌC MAI HOÀNG</div>
                            </div>
                            <div class="d-flex justify-content-around mb-2 p-2"
                                style="border-bottom: solid 1px rgba(145, 145, 145, 0.404);">
                                <div class=" p-2 font-weight-bold">Thiết kế & Trọng lượng</div>
                            </div>

                            <div class="d-flex justify-content-around mb-2 p-2"
                                style="border-bottom: solid 1px rgba(145, 145, 145, 0.404);">
                                <div class=" text-secondary">Màu sắc</div>
                                <div class="">Trắng</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="container text-secondary">
        <h4>Các Sản phẩm liên quan</h4>
    </div>
    <div class="container">
        <!--slider 1 bags------------------------------------------>
        <div class="heading">
        </div>
        <!--swiper slider-->
        <div class="swiper-container" style="z-index: 1px;">
            <div class="swiper-wrapper">
                <!--slide 1-------------------------------------->
                <div class="swiper-slide">
                    <div class="slider-box">
                        <p class="time">New</p>
                        <div class="img-box">
                            <img src="../public/upload/case1.webp">
                        </div>

                        <p class="detail product-title" data-toggle="tooltip" data-placement="bottom"
                            title="Vỏ Case Xigmatek Aquarius S Queen (Pink, No Fan)">
                            Vỏ Case Xigmatek Aquarius S Queen (Pink, No Fan)
                        </p>

                        <a href="#" class="text-danger">1.299.000 VNĐ</></a>
                        <div class="cart">
                            <a onclick="" href="javascript:">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                </div>
                <!--slide 2-------------------------------------->
                <div class="swiper-slide">
                  <div class="slider-box">
                      <p class="time">New</p>
                      <div class="img-box">
                          <img src="../public/upload/case1.webp">
                      </div>

                      <p class="detail product-title" data-toggle="tooltip" data-placement="bottom"
                          title="Vỏ Case Xigmatek Aquarius S Queen (Pink, No Fan)">
                          Vỏ Case Xigmatek Aquarius S Queen (Pink, No Fan)
                      </p>

                      <a href="#" class="text-danger">1.299.000 VNĐ</></a>
                      <div class="cart">
                          <a onclick="" href="javascript:">Thêm vào giỏ hàng</a>
                      </div>
                  </div>
              </div>
              <!--slide 3-------------------------------------->
              <div class="swiper-slide">
                <div class="slider-box">
                    <p class="time">New</p>
                    <div class="img-box">
                        <img src="../public/upload/case1.webp">
                    </div>

                    <p class="detail product-title" data-toggle="tooltip" data-placement="bottom"
                        title="Vỏ Case Xigmatek Aquarius S Queen (Pink, No Fan)">
                        Vỏ Case Xigmatek Aquarius S Queen (Pink, No Fan)
                    </p>

                    <a href="#" class="text-danger">1.299.000 VNĐ</></a>
                    <div class="cart">
                        <a onclick="" href="javascript:">Thêm vào giỏ hàng</a>
                    </div>
                </div>
            </div>
            <!--slide 4-------------------------------------->
            <div class="swiper-slide">
              <div class="slider-box">
                  <p class="time">New</p>
                  <div class="img-box">
                      <img src="../public/upload/case1.webp">
                  </div>

                  <p class="detail product-title" data-toggle="tooltip" data-placement="bottom"
                      title="Vỏ Case Xigmatek Aquarius S Queen (Pink, No Fan)">
                      Vỏ Case Xigmatek Aquarius S Queen (Pink, No Fan)
                  </p>

                  <a href="#" class="text-danger">1.299.000 VNĐ</></a>
                  <div class="cart">
                      <a onclick="" href="javascript:">Thêm vào giỏ hàng</a>
                  </div>
              </div>
          </div>
            </div>
        </div>
    </div>


    <div class="container text-secondary">
        <h4>Về Sản Phẩm</h4>

    </div>
    <div class="font-weight-bold text-dark p-2"
        style="background: rgba(155, 155, 155, 0.438); margin-left: 105px; margin-right: 105px;">THÔNG TIN CHI TIẾT</div>

    <div class="container jumbotron bg-white">
        <div>
            Đánh giá chi tiết Vỏ case Xigmatek X Battleship ( No fan)
            Với kiểu dáng siêu độc lạ, vỏ case Xigmatek X Battleship sẽ mang tới cho bạn một lựa chọn hoàn hảo để xây dựng
            các dàn PC hầm hố khiến mọi người đắm chìm ngay từ cái nhìn đầu tiên.
            Hầm hố và phá cách
            Vỏ case Xigmatek X Battleship (Ảnh 1)

            Xigmatek X Battleship là một vỏ case cao cấp hàng đầu. Thiết kế của sản phẩm này được lấy cảm hứng từ mô hình
            Gundam với các chi tiết góc cạnh sắc xảo, mang đếm cảm giác hầm hố. Màu sắc bên ngoài của case là sự đan xen
            giữa các màu chủ đạo của Gundam là trắng, đỏ, xanh và tô điểm nhấn bằng màu vàng nổi bật. Cho dù bạn là ai đi
            nữa, X Battleship chắc chắn sẽ gây ấn tượng mạnh cho bạn ngay từ cái nhìn đầu tiên. Sản phẩm còn có tới 2 vách
            kính cường lực ở hai bên, cho phép việc khoe các linh kiện bên trong trở nên dễ dàng hơn. Ngoài ra, các chi tiết
            của vỏ case được lắp ghép một cách độc lạ khiến nó trông giống một robot biến hình hơn là các thùng máy thông
            thường. Do đó, việc tạo ra một hệ thống máy tính ấn tượng sẽ trở nên đơn giản hơn bao giờ hết với sản phẩm này.
            Xigmatek X Battleship tương thích với hầu hết các dòng bo mạch chủ phổ biến nhất như Mini-ITX, Micro-ATX và ATX.
            Do vậy, bạn sẽ có thể thoải mái xây dựng một dàn PC theo sở thích cá nhân.

            Hỗ trợ 7 vị trí lắp quạt 120mm
            Vỏ case Xigmatek X Battleship (Ảnh 2)

            Không chỉ có kiểu dáng độc lạ, Xigmatek X Battleship còn sở hữu thiết kế thông minh, cho phép người dùng lắp đặt
            cùng lúc 7 quạt 120mm hoặc các hệ thống tản nhiệt khủng để làm mát hiệu quả nhất cho các linh kiện bên trong.
            Nhờ đó, người dùng có thể thoải mái tuỳ chỉnh chiếc case của mình để phù hợp nhất với phong cách cá nhân.
        </div>
        <button type="button" class="btn btn-dark btn-block">XEM ĐẦY ĐỦ</button>

    </div>
    <!-- Phần comment -->

    <script>
        function AddCart(productID) {
            $.ajax({
                type: 'GET',
                url: '../Add-Cart/' + productID,
            }).done(function(response) {
                RenderCart(response);
                alertify.success('Đã thêm vào giỏ hàng');
            });

        }
        $("#change-item-cart").on("click", ".si-close a", function() {
            $.ajax({
                type: 'GET',
                url: '../Delete-Item-Cart/' + $(this).data("id"),
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

        //js của comment
        $(document).ready(function() {


            $(".comment-container").delegate(".reply", "click", function() {

                var well = $(this).parent().parent();
                var pid = $(this).attr("pid");
                var cid = $(this).attr("cid");
                var name = $(this).attr('name_a');
                var token = $(this).attr('token');
                var form =
                    '<form method="post" action="../replies"><input type="hidden" name="_token" value="' +
                    token + '"><input type="hidden" name="productID" value="' + pid +
                    '"><input type="hidden" name="comment_id" value="' + cid +
                    '"><input type="hidden" name="name" value="' + name +
                    '"><div class="form-group"><textarea class="form-control" name="reply" placeholder="Enter your reply" > </textarea> </div> <div class="form-group"> <input class="btn btn-primary" type="submit"> </div></form>';

                well.find(".reply-form").append(form);



            });

            $(".comment-container").delegate(".delete-comment", "click", function() {

                var cdid = $(this).attr("comment-did");
                var token = $(this).attr("token");
                var well = $(this).parent().parent();
                $.ajax({
                    url: "../comments/" + cdid,
                    method: "POST",
                    data: {
                        _method: "delete",
                        _token: token
                    },
                    success: function(response) {
                        if (response == 1 || response == 2) {
                            well.hide();
                        } else {
                            alertify.success(
                                'bạn chỉ có thể xóa được bình luận của bạn của bạn'
                            );
                            console.log(response);
                        }
                    }
                });

            });

            $(".comment-container").delegate(".reply-to-reply", "click", function() {
                var well = $(this).parent().parent();
                var cid = $(this).attr("rid");
                var rname = $(this).attr("rname");
                var token = $(this).attr("token")
                var form =
                    '<form method="post" action="../replies"><input type="hidden" name="_token" value="' +
                    token + '"><input type="hidden" name="comment_id" value="' + cid +
                    '"><input type="hidden" name="name" value="' + rname +
                    '"><div class="form-group"><textarea class="form-control" name="reply" placeholder="Enter your reply" > </textarea> </div> <div class="form-group"> <input class="btn btn-primary" type="submit"> </div></form>';

                well.find(".reply-to-reply-form").append(form);

            });

            $(".comment-container").delegate(".delete-reply", "click", function() {

                var well = $(this).parent().parent();

                if (confirm("Bạn có muốn xóa bình luật này..!")) {
                    var did = $(this).attr("did");
                    var token = $(this).attr("token");
                    $.ajax({
                        url: "../replies/" + did,
                        method: "POST",
                        data: {
                            _method: "delete",
                            _token: token
                        },
                        success: function(response) {
                            if (response == 1) {
                                well.hide();
                                //alert("Your reply is deleted");
                            } else if (response == 2) {
                                alertify.warning(
                                    'Bạn không thể xóa bình luận của người khác');
                            } else {
                                alert('Something wrong in project setup');
                            }
                        }
                    })
                }



            });

        });
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 4.2,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
@endsection
