@if (Session::has("Cart") != null)
<div class="select-items">
  <table>
      <tbody>
          <tr>
              <td class="si-pic"><img src="public/upload/mn1.webp" style="vertical-align: middle;  width:80px;margin-right: 30px" alt=""></td>
              <td class="si-text">
                  <div class="product-selected">
                      <b>2.850.000 VNĐ x 1</b>
                      <h6>Màn hình LG 24GQ50F-B/23.8inch/FHD (1920x1080)/165Hz</h6>
                  </div>
              </td>
              <td class="si-close">
            
                
                <h4><a class="" data-id="Màn hình" role="button"><i class="far fa-times"></i></a></h4>
         
              </td>
          </tr>
      </tbody>
  </table>
</div>
<div class="select-total">
  <h6>TỔNG TIỀN:</h6>
  <h5>2.850.000 VNĐ</h5>
  <input hidden id="total-quanty-cart" type="number" value="">
</div>  
<div class="select-button">
  <a href="{{ url('List-Carts') }}" class="primary-btn view-card"> <b>XEM GIỎ HÀNG</b> </a>
  <a href="#" class="primary-btn checkout-btn"><b>THANH TOÁN</b></a>
</div>
@else 
                               <h4 style="color: #4A235A;">Vui lòng thêm sản phẩm</h4>

@endif