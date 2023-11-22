@extends('layout.admin.main')

@section('content')
@if(isset($productdetail))
<h3>Tên sản phẩm: {{ $productdetail->productName }} </h3>
<h6>Hãng: {{ $productdetail->brand}}</h6>
<h6>Thời gian bảo hành: {{ $productdetail->guarantee}} tháng</h6>
<H5>Hình ảnh chi tiết</H5>
     <div class="product-image-thumb">
         <img src="{{ asset('public/upload/' . $productdetail->productImage1) }}" alt="Product Image">
     </div>
     @if ($productdetail->productImage2 != null)
         <div class="product-image-thumb">
             <img src="{{ asset('public/upload/' . $productdetail->productImage2) }}" alt="Product Image">
         </div>
     @endif
     @if ($productdetail->productImage3 != null)
         <div class="product-image-thumb">
             <img src="{{ asset('public/upload/' . $productdetail->productImage3) }}" alt="Product Image">
         </div>
     @endif
     @else
     <p>Sản phẩm không tồn tại.</p>
 @endif

@endsection
