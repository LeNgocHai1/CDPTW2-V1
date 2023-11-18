@extends('layout.user.main')
@section('content')
@if(Session::has('message'))
  <script type="text/javascript">
     swal({
         title:'',
         text:"{{Session::get('message')}}",
         button: "Đồng ý!",
         icon: "success"
     }).then((value) => {
       //location.reload();
     }).catch(swal.noop);
 </script>
 @endif
<div class="container-fluid" style="height:80px"></div>
<!-- kết thúc slide -->
<!-- list sản phẩm -->
<div class="container bg-white jumbotron border border-info">
   <h3 style="font-weight: bold; color: #4A235A;">Thông tin khách hàng</h3>
   <div class="row">
      <form action="{{ url('Check-Out') }}" method="post" enctype="multipart/form-data">
         {{ csrf_field() }}
         <div class="col-sm-12 mt-3">
            <div class="row">
               <div class="col-sm-8">
                  <div class="form-group">
                     <input type="hidden" name="id" id="id" class="form-control" value="{{ Auth::user()->id }}">
                  </div>
                  <div class="form-group">
                     <label for="name" style="font-weight: bold">Họ tên</label>
                     <input type="text" name="name" id="name" class="form-control" value="{{ Auth::user()->name }}">
                  </div>
                  <div class="form-group">
                     <label for="email" style="font-weight: bold">Email</label>
                     <input type="text" name="email" id="email" class="form-control" value="{{ Auth::user()->email }}">
                  </div>
                  <div class="form-group">
                     <label for="phonenumber" style="font-weight: bold">Số điện thoại</label>
                     <input type="text" name="phonenumber" id="phonenumber" class="form-control" value="{{ Auth::user()->phonenumber }}">
                  </div>
                  <div class="form-group">
                     <label for="address" style="font-weight: bold">Địa chỉ</label>
                     <input type="text" name="address" id="address" class="form-control" value="{{ Auth::user()->address}}">
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="form-group">
                     <label for="note" style="font-weight: bold;">Ghi chú</label>
                     <textarea style="height: 300px; " name="note" id="note" class="form-control" value="Ghi chú"></textarea>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12">
            <table class="table table-hover">
               <thead class="bg-info text-white">
                  <tr>
                     <th></th>
                     <th>Sản phẩm</th>
                     <th>Đơn giá</th>
                     <th></th>
                     <th>Thành tiền</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td> <img src="public/upload/cpu1.jpg" style="vertical-align: middle;  width:80px;margin-right: 30px">
                     </td>
                     <td>
                        <p style="color: #4A235A;"><b>CPU Intel Core i3-10105F + Quạt</b></p>
                     </td>
                     <td>
                        <p class="font-italic">1.790.000 VNĐ</p>
                     </td>
                     <td>
                        <p><b>{{ $item['quanty'] }}</b></p>
                     </td>
                     <td>
                        <p style="color: #4A235A;"><b>1.790.000 VNĐ</b>
                        <p>
                     </td>
                  </tr>
                  <tr>
                     <td colspan="4">&nbsp;
                        <span>
                        <a class="btn btn-success update" href="{{ url('/List-Carts')}}">Quay về giỏ
                        hàng</a>
                        </span>
                     </td>
                     <td colspan="2">
                        <table class="table table-condensed total-result">
                           <tbody>
                              <tr>
                                 <td class="font-weight-bold text-info">Tổng tiền :</td>
                                 <td class="font-italic text-danger"><h5>1.790.000 VNĐ</h5></td>
                              </tr>
                              <tr>
                                 <td>
                                 </td>
                                 <td>
                                    <div class="form-check">
                                       <label class="form-check-label" for="radio1">
                                         <input type="radio" class="form-check-input" id="radio1" name="thanhtoan" value="tienmat" checked><b>Thanh toán tại nhà</b>
                                       </label>
                                     </div>
                                     <div class="form-check">
                                       <label class="form-check-label" for="radio2">
                                         <input type="radio" class="form-check-input" id="radio2" name="thanhtoan" value="tructuyen"><b>Thanh toán trực tuyến</b>
                                       </label>
                                     </div>
                                    <div class="form-group">
                                       <input type="submit" class="btn btn-info btn-xl mt-3" value="Gửi đơn hàng">
                                    </div>
                                 </td>
                                 <td>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </td>
                  </tr>
                  <tr style="color: #4A235A;">
                     <td>Bạn chưa có sản phẩm trong giỏ hàng</td>
                  </tr>
                  <tr>
                     <td colspan="4">&nbsp;
                        <a class="btn btn-default update" href="{{ url('/')}}">Mua hàng</a>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </form>
   </div>
</div>
@endsection