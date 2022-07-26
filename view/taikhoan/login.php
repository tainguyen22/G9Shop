<?php
session_start();
if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $tk = check_user($email, $pass);
  if (is_array($tk)) {
      $_SESSION['user'] = $tk;
      $_SESSION['email'] = $tk;
      header("Location: index.php");
      $thongbao = "Đăng nhập thành công !";
  }else {
      $thongbao = "Tài khoản không tồn tại, vui lòng kiểm tra hoặc đăng ký!";
  }
}

?>
<div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <?php
              include "boxtrai.php";
            ?>
            <div class="col-md-9">
              <div class="checkout-page">
                <ol class="checkout-steps">
                  <li class="steps active">
                    <a href="checkout.html" class="step-title">
                      01. Đăng nhập tài khoản 
                    </a>
                    <div class="step-description">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <div class="new-customer">
                            <h5>
                              Khách hàng mới
                            </h5>
                            <label>
                              <span class="input-radio">
                                <input type="radio" name="user">
                              </span>
                              <span class="text">
                              Tôi muốn đăng ký nhận bản tin của Cửa hàng thảo dược
                              </span>
                            </label>
                            <label>
                              <span class="input-radio">
                                <input type="radio" name="user">
                              </span>
                              <span class="text">
                              Địa chỉ giao hàng và địa chỉ thanh toán của tôi giống nhau.
                              </span>
                            </label>
                            <p class="requir">
                            Bằng cách tạo một tài khoản, bạn sẽ có thể mua sắm nhanh chóng được cập nhật về trạng thái của đơn đặt hàng và theo dõi các đơn đặt hàng bạn đã thực hiện trước đó.
                            </p>
                            <button>
                              Continue
                            </button>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                          <div class="run-customer">
                            <h5>
                              Đăng nhập khách hàng
                            </h5>
                            <form action="" method="post">
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Email 
                                  <strong class="red"> *</strong>
                                </label>
                                <input type="text" class="input namefild" name="email">
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Password 
                                  <strong class="red">*</strong>
                                </label>
                                <input type="password" class="input namefild" name="pass">
                              </div>
                              <p class="forgoten">
                                <a href="index.php?act=quenmk">Forgoten your password?</a>
                              </p>
                              <input type="submit" value="Đăng nhập" name="dangnhap" style="width:100px;height:35px;background-color:#fff;font-size:14px;
                              border:solid 1px #ccc;border-radius:8px">
                              <?php
                                if(isset($thongbao)&&($thongbao)!=""){
                                echo"$thongbao";
                                }
                                ?> 
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="steps">
                    <a href="index.php?act=dangky" class="step-title">
                      02. Đăng ký tài khoản
                    </a>
                  </li>
                  <li class="steps">
                    <a href="checkout2.html" class="step-title">
                      03. Shipping information
                    </a>
                  </li>
                  <li class="steps">
                    <a href="#" class="step-title">
                      04. shipping method 
                    </a>
                  </li>
                  <li class="steps">
                    <a href="#" class="step-title">
                      05. payment information 
                    </a>
                  </li>
                  <li class="steps">
                    <a href="#" class="step-title">
                      06. oder review
                    </a>
                  </li>
                </ol>
              </div>
            </div>
          </div>
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