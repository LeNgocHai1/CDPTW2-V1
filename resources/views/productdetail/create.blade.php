@extends('layout.admin.main')
@section('content')
<h5 style="font-weight: bold">Thêm chi tiết sản phẩm</h5>
<div class="card-body">
    @include('error')
 </div>
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <form action="{{ route('prodetail.store') }}" method="post"  onsubmit="return validateForm()" enctype="multipart/form-data">
            {{ csrf_field() }}  
            <div class="form-group">
                <label for="categoryID" style="font-weight: bold">Sản phẩm:</label>
                <select name="productID" id="productID" class="form-control">
                    @foreach ($products as $product)
                    <option value="{{ $product->productID }}">
                    {{ $product->productName }}
                    </option>
                        
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                <label for="productName" style="font-weight: bold">Tên thương hiệu</label>
                <input type="text" name="brand" id="brand" class="form-control">
                <span id="charCount" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="productName" style="font-weight: bold">Thời gian bảo hành</label>
                <input type="text" name="guarantee" id="guarantee" class="form-control" pattern="[0-9]+>
            </div>
            <div class="form-group">
                <label for="productImage1" style="font-weight: bold">Chọn hình ảnh thứ nhất :</label>
                <input type="file" name="productImage1" id="productImage1" class="form-control-file"> 
            </div>
            <div class="form-group">
                <label for="productImage1" style="font-weight: bold">Chọn hình ảnh thứ hai :</label>
                <input type="file" name="productImage2" id="productImage2" class="form-control-file"> 
            </div>
            <div class="form-group">
                <label for="productImage1" style="font-weight: bold">Chọn hình ảnh thứ ba :</label>
                <input type="file" name="productImage3" id="productImage3" class="form-control-file"> 
            </div>
            <div class="form-group">
                <label for="description" style="font-weight: bold">Mô tả sản phẩm</label>
                <textarea name="description" class="form-control summernote" id="summernote"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" id="submitButton" class="btn btn-info btn-sm" value="Thêm chi tiết sản phẩm">
            </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 240,
            minHeight: null,
            maxHeight: null,
            focus: false
        });


        $('#brand').on('input', function() {
            var maxLength = 255; 
            var currentLength = $(this).val().length;

            if (currentLength > maxLength) {
                $('#charCount').text('Vui lòng không nhập quá ' + maxLength + ' ký tự.');
            } else {
                $('#charCount').text('');
            }
        });
    });

    function validateForm() {
        var maxLength = 255; 
        var currentLength = $('#brand').val().length;

        if (currentLength > maxLength) {
            alert('Vui lòng không nhập quá ' + maxLength + ' ký tự.');
            return false; 
        }

        $('#submitButton').prop('disabled', true);
    }
</script>
@endsection