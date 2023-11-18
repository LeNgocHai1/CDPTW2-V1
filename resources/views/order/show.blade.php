@extends('layout.admin.main')
@section('content')

<div class="container jumbotron border border-success">
  @if(Session::has('message'))
  <script type="text/javascript">
     swal({
         title:'OK!',
         text:"{{Session::get('message')}}",
         timer:5000,
         icon: "success"
     }).then((value) => {
       //location.reload();
     }).catch(swal.noop);
 </script>
 @endif
    <h2>Chi tiết đơn hàng</h2>
    <div class="row">
        <div class="col-sm-12">
            <div class="container"   style="">
                <h4></h4>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th colspan="2" class="bg-success text-white">Thông tin khách hàng</th>
                        <th class=""></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><b>Thông tin người đặt hàng</b></td>
                        <td>Lê Ngọc Hải</td>
                    </tr>
                    <tr>
                        <td><b>Ngày đặt hàng</b></td>
                        <td>17-11-2023</td>
                    </tr>
                    <tr>
                        <td><b>Số điện thoại</b></td>
                        <td>0332369993</td>
                    </tr>
                    <tr>
                        <td><b>Địa chỉ</b></td>
                        <td>TP.HCM</td>
                    </tr>
                    <tr>
                        <td><b>Email</b></td>
                        <td>lengochai.fit2019@gmail.com</td>
                    </tr>
                    <tr>
                        <td><b>Ghi chú</b></td>
                        <td>Giao hàng nhanh tầm 1 2 ngày</td>
                    </tr>
                    <tr>
                        <td><b>Hình thức thanh toán</b></td>
                        <td>Thanh toán khi nhận hàng</td>
                    </tr>
                    <tr>
                        <td><b>Mã giao dịch VNPAY</b></td>
                        <td>24435</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <table class="table table-hover dataTable" >
                <thead>
                <tr role="row" class="bg-success text-white">
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá tiền</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>cpu sadasdasd</td>
                        <td>1</td>
                        <td>2.333.000 VNĐ</td>
                    </tr>
                <tr>
                    <td colspan="3"><b>Tổng tiền</b></td>
                    <td colspan="1"><b class="text-red">2.333.000 VNĐ</b></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
           

    <div class="col-md-12">
        <form action="" method="POST">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <div class="form-inline">
                    <label>Trạng thái giao hàng: </label>
                    <select name="status" class="form-control input-inline" style="width: 200px">
                        <option value="Chưa giao">Chưa giao</option>
                        <option value="Đang Giao">Đang giao</option>
                        <option value="Đã giao">Đã giao</option>
                    </select>

                    <input type="submit" value="Xử lý" class="btn btn-primary">
                </div>
            </div>
            </form>
        </div>
 
   

  </div>
    
@endsection