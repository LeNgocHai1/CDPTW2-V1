@extends('layout.admin.main')
@section('content')

<div class="main-contentProduct">
    <h3>{{ $product->productName }}</h3>
    <h6>{{ $product->productImage }}</h6>
    <h6>{{ $product->listPrice }}</h6>
    <h6>{{ $product->price_sale }}</h6>
    <h6>{{ $product->discountPercent}}</h6>
    
    <p></p>
</div>

@endsection
