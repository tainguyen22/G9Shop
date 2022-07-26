<?php
  
  
  
?>
<div class="container_fullwidth">
        <div class="container shopping-cart">
        <form method="POST" action="index.php?act=billconfirm">
          <div class="row">
            <div class="col-md-12">
              <h3 class="title">
                Shopping Cart
              </h3>
              <div class="clearfix">
              </div>
              <table class="shop-table">
              <thead>
                        <tr>
                        <th>
                            MÃ ĐƠN HÀNG
                        </th>
                        <th>
                            TÌNH TRẠNG
                        </th>
                        <th>
                            SỐ LƯỢNG
                        </th>
                        <th>
                            TỔNG GIÁ TRỊ
                        </th>
                        <th>
                        NGÀY ĐẶT
                        </th>
                        </tr>
                    </thead>
                    <?php
                        if (is_array($listbill)) {
                            foreach ($listbill as $bill) {
                                extract($bill);
                                $countsp = loadall_cart_count($bill['id']);
                                ?>
                    <tbody>
                            <tr>
                                <td>
                                <h5>
                                    <strong class="red">
                                        G9-<?php echo $bill['id']?>
                                    </strong>
                                </h5>
                                </td>
                                <td>
                                <h5>
                                    <strong class="red">
                                    <?php if($bill['bill_status']==1){
                                        echo 'Đã xác nhận';
                                        }else{
                                            echo 'Chờ xác nhận';
                                        }
                                    ?>
                                    </strong>
                                </h5>
                                </td>
                                <td>
                                <h5>
                                    <?php echo $countsp?>
                                </h5>
                                </td>
                                <td>
                                <h6>
                                    <?php echo $bill['total']?>
                                </h6>
                                </td>
                                <td>
                                <div class="shop-details">
                                    <h6>
                                    <strong class="red">
                                    <?php echo $bill['ngaydathang']?>
                                    </strong>
                                    </h6>
                                </div>
                                </td>
                                
                                
                                </tr>
                            </tbody>
                            <?php }?>
                            <?php }?>
              </table>
              <div class="clearfix">
              </div>
              <div class="row">
                <div class="col-md-4 col-sm-6">
                  <div class="shippingbox">
                    <h5>
                      Thông tin người đặt hàng
                    </h5>
                    <?php
                        if (isset($_SESSION['user'])) {
                            $fullname = $_SESSION['user']['fullname'];
                            $email = $_SESSION['user']['email'];
                            $address = $_SESSION['user']['address'];
                            $phone = $_SESSION['user']['phone'];
                        }else {
                            $fullname = "";
                            $email = "";
                            $address = "";
                            $phone = "";
                        }
                    ?>
                    <form>
                      <label>
                        Họ và tên *
                      </label>
                      <input type="text" name="fullname" value="<?php echo $fullname?>">
                      <label>
                        Email *
                      </label>
                      <input type="text" name="email" value="<?php echo $email?>">
                      <label>
                        Điện thoại *
                      </label>
                      <input type="text" name="phone" value="<?php echo $phone?>">
                      <label>
                        Đia chỉ *
                      </label>
                      <input type="text" name="address" value="<?php echo $address?>"> 
                    </form>
                    <div class="clearfix">
                      </div> 
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="shippingbox-fee">
                    <h5>
                      Hình thức thanh toán
                    </h5>
                    <label>
                      <span class="input-radio">
                      <input type="radio" name="pttt" value="Trả tiền khi nhận hàng" checked>
                      </span>
                      <span class="text">
                      Trả tiền khi nhận hàng
                      </span>
                    </label>
                    <label>
                      <span class="input-radio">
                      <input type="radio" name="pttt" value="Chuyển khoản ngân hàng">
                      </span>
                      <span class="text">
                      Chuyển khoản ngân hàng
                      </span>
                    </label>
                    <label>
                      <span class="input-radio">
                      <input type="radio" name="pttt" value="Thanh toán online">
                      </span>
                      <span class="text">
                      Thanh toán online
                      </span>
                    </label>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="shippingbox">
                    <div class="subtotal">
                      <h5>
                        Tổng phụ
                      </h5>
                      <span>
                        0đ
                      </span>
                    </div>
                    <?php
                    foreach ($_SESSION['mycart'] as $cart) {
                        $hinh = $img_path.$cart['image'];
                         $thanhtien = $cart['giasp'] * $cart['soluong'];
                        $tong+=$thanhtien;
                        $i+=1;}
                        ?>
                    <div class="grandtotal">
                      <h5>
                        GRAND TOTAL 
                      </h5>
                      <span>
                        <?php echo number_format($tong,0,',','.').'đ'?>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
          <div class="clearfix">
          </div>
          <div class="our-brand">
            <h3 class="title">
              <strong>
                Our 
              </strong>
              Brands
            </h3>
            <div class="control">
              <a id="prev_brand" class="prev" href="#">
                &lt;
              </a>
              <a id="next_brand" class="next" href="#">
                &gt;
              </a>
            </div>
            <ul id="braldLogo">
              <li>
                 <ul class="brand_item">
                    <li>
                       <a href="#">
                          <div class="brand-logo"><img src="view/image/logo/logoiphone.png" alt=""></div>
                       </a>
                    </li>
                    <li>
                       <a href="#">
                          <div class="brand-logo"><img src="view/image/logo/logosamsung.png" alt=""></div>
                       </a>
                    </li>
                    <li>
                       <a href="#">
                          <div class="brand-logo"><img src="view/image/logo/logovivo.jpg" alt=""></div>
                       </a>
                    </li>
                    <li>
                       <a href="#">
                          <div class="brand-logo"><img src="view/image/logo/logoxiaomi.png" alt=""></div>
                       </a>
                    </li>
                    <li>
                       <a href="#">
                          <div class="brand-logo"><img src="view/image/logo/logooppo.png" alt=""></div>
                       </a>
                    </li>
                 </ul>
              </li>
              <li>
                 <ul class="brand_item">
                    <li>
                       <a href="#">
                          <div class="brand-logo"><img src="view/image/logo/logoiphone.png" alt=""></div>
                       </a>
                    </li>
                    <li>
                       <a href="#">
                          <div class="brand-logo"><img src="view/image/logo/logosamsung.png" alt=""></div>
                       </a>
                    </li>
                    <li>
                       <a href="#">
                          <div class="brand-logo"><img src="view/image/logo/logovivo.jpg" alt=""></div>
                       </a>
                    </li>
                    <li>
                       <a href="#">
                          <div class="brand-logo"><img src="view/image/logo/logoxiaomi.png" alt=""></div>
                       </a>
                    </li>
                    <li>
                       <a href="#">
                          <div class="brand-logo"><img src="view/image/logo/logooppo.png" alt=""></div>
                       </a>
                    </li>
                 </ul>
              </li>
           </ul>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>