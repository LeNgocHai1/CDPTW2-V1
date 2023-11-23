@extends('layout.admin.main')

@section('content')
<h5 style="font-weight: bold">Chỉnh sửa Banner quảng cáo</h5>

<div class="container">
    @if(isset($banner))
    <div class="row">
        <div class="col-sm-10">
            <form action="{{ route('banner.update', $banner->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            
            <div class="form-group">
                <label for="categoryID" style="font-weight: bold">Hình ảnh:</label>
            </div>
            <div class="form-group">
                <label for="slide1" style="font-weight: bold">Chọn hình ảnh cho slide:</label>
                <input type="file" name="slide1" id="slide1" class="form-control-file">
  
                <img src="{{ asset('upload/' . $banner->slide) }}" alt="Current Image" style="width: 300px;>
            </div>
            <div class="form-group">
                <label for="slide1" style="font-weight: bold">Chọn hình ảnh cho slide:</label>
                <input type="file" name="slide1" id="slide1" class="form-control-file">
  
                <img src="{{ asset('upload/' . $banner->slide1) }}" alt="Current Image" style="width: 300px;>
            </div>
            <div class="form-group">
                <label for="ads" style="font-weight: bold">Chọn hình ảnh cho slide:</label>
                <input type="file" name="ads" id="ads" class="form-control-file">

                <img src="{{ asset('upload/' . $banner->ads) }}" alt="Current Image" style="width: 300px;>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-info btn-sm" value="Cập nhật banner">
            </div>
            </form>
        </div>
    </div>
    @else
    <p>Banner không tồn tại.</p>
@endif
</div>

@endsection
