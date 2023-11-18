@extends('layout.user.main')
@section('content')
<div class="container-fluid" style="height:110px"></div>
<div class="container bg-white jumbotron " >
  <div class="row p-2" style="border:1px solid rgba(105, 105, 105, 0.26);">
   <div class="list-product-subtitle text-secondary ">
     <h5> CPU</h5></div>
     <div class="spinner-grow text-danger"></div>
   <div class="product-group mt-2">
     <div class="row ">
       <!-- dat foreach -->
       <div class="col-md-3 col-sm-6 col-12">
           <div class="card card-product">
             <img class="card-img-top" src="../public/upload/mn1.webp" alt="Card image cap">
             <div class="card-body">
               <h6 class="card-title product-title mb-3">
                 <a  data-toggle="tooltip" data-placement="bottom" title="Màn hình LG 24GQ50F-B/23.8inch/FHD (1920x1080)/165Hz"> 
                  Màn hình LG 24GQ50F-B/23.8inch/FHD (1920x1080)/165Hz
               </a>
                
               </h6>
               <div class="card-text">
                 <span class="new-price"> 2.850.000 VNĐ </span>
                 <span class="old-price text-secondary"> 3.690.000 VNĐ </span>
                 <br>
                 <a class="btn btn-success btn-add-to-cart mt-2" onclick="" href="javascript:"><i class="fas fa-cart-arrow-down"></i></a>
                 <a class="btn btn-outline-success btn-detail mt-2 font-weight-bold" href="{{ route('detail.show')}}"> Xem chi tiết</a>
                 <span class="badge badge-danger text-white"><h6>10%</h6></span>
            
               </div>
               
             </div>
           </div>
            
          </div>
   </div>
   </div>
  
    <div class="d-flex justify-content-center  mt-5 mb-5">{{ $products->links() }}</div>
</div>
  <div class="row p-3 gt">
    <div> {!!$category->cate_description!!}</div>
    <button type="button" class="btn btn-dark btn-block" >XEM ĐẦY ĐỦ</button>

  </div>
</div>
  


@endsection