@extends('layout.admin.main')
@section('content')
<h5 style="font-weight: bold">Thêm ảnh cho Banner quảng cáo</h5>
<div class="card-body">
    @include('error')
 </div>
<div class="container">
    @if(isset($banner))
    <div class="row">
        <div class="col-sm-10">
            <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data" id="productForm">
            {{ csrf_field() }}  
            <div class="form-group">
                <label for="categoryID" style="font-weight: bold">Hình ảnh:</label>
            </div>
            <div class="form-group">
                <label for="slide1" style="font-weight: bold">Chọn hình ảnh cho slide:</label>
                <input type="file" name="slide1" id="slide1" class="form-control-file"> 
            </div>
            <div class="form-group">
                <label for="ads" style="font-weight: bold">Chọn hình ảnh cho slide:</label>
                <input type="file" name="ads" id="ads" class="form-control-file"> 
            </div>
            <div class="form-group">
                <input type="submit" id="submitButton" class="btn btn-info btn-sm" value="Tạo sản phẩm">
            </div>
            </form>
        </div>
    </div>
    @else
    <p>Sản phẩm không tồn tại.</p>
@endif
</div>
<script>
     $(document).ready(function() {
            $('#productForm').submit(function() {
                $('#submitButton').prop('disabled', true);
            });
        });
     </script>
@endsection