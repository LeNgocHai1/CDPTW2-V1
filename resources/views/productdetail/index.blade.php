@extends('layout.admin.main')
@section('content')
<div class="container jumbotron   border border-success">
    <h2>Chi tiết sản phẩm</h2>
           
    <table class="table">
      <thead class="bg-danger text-white"> 
        <tr>
          <th>Tên sản phẩm</th>
            <th>hình ảnh chi tiết</th>
         <th>Tên thương hiệu</th>
        <th>Thời gian bảo hành</th>
       <th>Thao tác</th>
    
        </tr>
      </thead>
      <tbody>
       <tr>
        <td>
          CPU INTEL Core i7-9700 (8C/8T, 3.00 GHz up to 4.70 GHz, 12MB) - 1151-v2
        <td>
             <div class="product-image-thumb" ><img src="../public/upload/cpu1.jpg" alt="Product Image"></div>
             <div class="product-image-thumb" ><img src="../public/upload/cpu2.jpg" alt="Product Image"></div>
             
             <div class="product-image-thumb" ><img src="../public/upload/cpu3.jpg" alt="Product Image"></div>    
             
             
        </td>
        <td>
          INTEL 
        </td>
        <td>  12 Tháng</td>
        <td> 
            <a class="button btn btn-success" href=""><i class="fas fa-tools"></i>  Sửa</a>
            <form class="d-inline-block " action="" method="post" >
              {{ csrf_field() }}
              @method('DELETE')
              {{-- HTML không có các method PUT, PATCH, DELETE, nên cần dùng lệnh @method để có thể gán các method này --}}
              {{-- or --}}
              {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
              {{-- <input type="hidden" name="_method" value="delete"> --}}
              
              <input type="submit" value="Xóa" class="button btn btn-danger">
              </form>
          
          </td>
      </tr>
       


      </tbody>
    </table>
  
    <p class="d-flex justify-content-end">
        <a class="btn btn-info btn-sm fa fa-plus" href="{{ route('prodetail.create') }}">Thêm chi tiết cho Sản phẩm</a>
    </p>
  </div>
@endsection