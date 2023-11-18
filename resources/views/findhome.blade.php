@extends('layout.user.main')
@section('content')
<div style="margin-top: 100px;">
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
        <td>CPU</td>
        <td>CPU Intel Core i3-10100F + Quạt</td>
      
        <td>
             <div class="product-image-thumb" ><img src="./public/upload/cpu1.jpg" style="width: 100px;" alt="Product Image"></div>
        </td>
        <td>
          1.990.000 VNĐ
        </td>
        
      </tr>
       


      </tbody>
    </table>
    
  </div>
</div>
@endsection