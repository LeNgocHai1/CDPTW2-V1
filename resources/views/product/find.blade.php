@extends('layout.admin.main')
@section('content')
<div class="container jumbotron   border border-success">
    <h2>Tìm kiếm sản phẩm</h2>
           
    <table class="table">
      <thead> 
        <tr>
          <th>Tên danh mục</th>
            <th>Tên sản phẩm</th>
            <th>Ảnh sản phẩm</th>
         <th>Giá sản phẩm</th>
       
    
        </tr>
      </thead>
      <tbody>
       <tr>
        <td>Main</td>
        <td>Mainboard GIGABYTE B365M AORUS ELITE	
        </td>
      
        <td>
             <div class="product-image-thumb" ><img src="../public/upload/cpu3.jpg" alt="Product Image"></div>
        </td>
        <td>
          2.444.000 VNĐ 
        </td>
        
      </tr>
       


      </tbody>
    </table>
    
    <p class="d-flex justify-content-end">
        <a class="btn btn-info btn-sm fa fa-plus" href="{{ route('product.create') }}">Thêm Sản phẩm</a>
    </p>
  </div>
@endsection