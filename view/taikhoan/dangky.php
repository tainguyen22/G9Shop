


<div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <?php
              include "boxtrai.php";
            ?>
            <div class="col-md-9">
              <div class="checkout-page">
                <ol class="checkout-steps">
                  <li class="steps">
                    <div class="step-title">
                      <a href="index.php?act=login">
                      01. Đăng nhập tài khoản
                      </a>
                    </div>
                  </li>
                  <li class="steps active">
                    <a href="index.php?act=dangky" class="step-title">
                      02. Đăng ký tài khoản
                    </a>
                    <div class="step-description">
                      <form action="index.php?act=dangky" method="POST" onsubmit="return Kiemtra()" enctype="multipart/form-data">
                        <div class="row">
                          <div class="col-md-6 col-sm-6">
                            <div class="your-details">
                              <h5>
                                Thông tin đăng ký
                              </h5>
                              <div class="form-row">
                                <label class="lebel-abs" for="fullname">
                                  Họ và tên 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" id="fullname" name="fullname">
                                <div id="error1" class="error"></div>
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs" for="user">
                                  Tên đăng nhập
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" id="user" name="user">
                                <div id="error2" class="error"></div>
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs"> 
                                </label>
                                <input type="file" class="input namefild" name="hinh">
                              </div> 
                                <div class="form-row">
                                  <label class="lebel-abs" for="pass">
                                    Mật khẩu
                                    <strong class="red">
                                      *
                                    </strong>
                                  </label>
                                  <input type="password" class="input namefild" id="pass" name="pass">
                                  <div id="error3" class="error"></div>
                                </div>
                                <div class="form-row">
                                  <label class="lebel-abs">
                                    Nhập lại mật khẩu 
                                    <strong class="red">
                                      *
                                    </strong>
                                  </label>
                                  <input type="password" class="input cpass" name="rpass">
                                </div>
                             
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6">
                            <div class="your-details">
                              <h5>
                                Địa chỉ nhận hàng
                              </h5>
                              <div class="form-row">
                                <label class="lebel-abs" for="email">
                                  Email 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" id="email" name="email">
                                <div id="error4" class="error"></div>
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs" for="phone">
                                  Telephone 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" id="phone" name="phone">
                                <div id="error5" class="error"></div>
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs" for="address">
                                  Địa chỉ 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" id="address" name="address">
                                <div id="error6" class="error"></div>
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs" for="city">
                                  Thành phố 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" id="city" name="city">
                                <div id="error7" class="error"></div>
                              </div>
                              <p class="privacy">
                                <span class="input-radio">
                                  <input type="radio" name="user">
                                </span>
                                <span class="text">
                                Tôi đã đọc và đồng ý với 
                                  <a href="#" class="red">
                                  Chính sách bảo mật
                                  </a>
                                </span>
                              </p>
                              <input class="button" type="submit" name="dangky" value="Đăng ký">
                              <?php
                                if(isset($thongbao)&&($thongbao)!=""){
                                echo"$thongbao";
                                }
                                ?>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
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
      <div class="clearfix">
   