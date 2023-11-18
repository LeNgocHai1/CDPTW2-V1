@if (Session::has("Cart") != null)
<table class="table table-hover">
    <thead>
        <tr style="color: #4A235A;">
          <th></th>
          <th>Sản Phẩm</th>
          <th>Đơn Giá</th>
          <th>Số Lượng</th>
          <th>Giá Tiền</th>
          <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td> <img src="public/upload/mn1.webp" style="vertical-align: middle;  width:80px;margin-right: 30px">
            </td>

            <td>
                <p><b>Màn hình LG 24GQ50F-B/23.8inch/FHD (1920x1080)/165Hz</b></p>
            </td>
            <td>
                <p class="font-italic">2.850.000 VNĐ</p>
            </td>
            <td class="d-flex">
                <input data-id="" type="number" id="quanty-item-" style="width: 70%;" name="soluong" min="1" max="9" value="{{ $item['quanty'] }}" class="form-control" required>
               <!--  <h2> <a href="#" onclick="SaveListItemCart({{ $item['productInfo']->productID }});"  role="button"><i class="fad fa-save"></i></a></h2> -->
            </td>
            <td>
                <p><b>2.850.000 VNĐ</b>
                    <p>
            </td>
            <td>

                <button type="button" class="btn btn-danger" onclick="">Xóa</button>

            </td>
        </tr>



    </tbody>
</table>
<a href="#" class="btn btn-info btn-sm edit-all" role="button" style="float: right;">
    <b>Lưu thay đổi</b> 
</a>
<br>
{{-- <div style="color: #4A235A;">
    <p>
        <h5>Giỏ hàng hiện tại của bạn đang có Sản phẩm</h5>
    </p>
    <p class="font-weight-bold">TỔNG TIỀN CỦA BẠN LÀ:
        <h4>2.850.000₫</h4>
    </p>

</div> --}}
{{-- <a href="{{ url('checkout') }}">
    <b><input type="submit" value="ĐẶT HÀNG NGAY" style=" background: linear-gradient(to right, #DC143C,#7D3C98);  color: #ffffff; font-size: 15px;  font-weight: bold;" class="button btn btn-light"></b></a>
    
    <h2 style="color: #4A235A;">Bạn Chưa có sản phẩm trong giỏ hàng vui lòng thêm sản phẩm !</h2>
         <script>
             $(".edit-all").on("click", function(){
            var lists = [];
            $("table tbody tr td").each(function(){
              $(this).find("input").each(function(){
                 var element = { key: $(this).data("id"), value: $(this).val()};
                 lists.push(element);
              });
            });
            $.ajax({
         url: 'All-Save',
         type: 'POST',
         data: {
            "_token" : "{{ csrf_token() }}",
            "data" : lists
         }
         }).done(function (response) {
           RenderListCart(response);
           alertify.success('Đã cập nhật sản phẩm');
         });
   });
         </script> --}}