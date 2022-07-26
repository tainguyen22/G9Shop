
<div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="special-deal leftbar" style="margin-top:0;">
                <h4 class="title">
                  Special 
                  <strong>
                    Deals
                  </strong>
                </h4>
                <div class="special-item">
                  <div class="product-image">
                    <a href="details.html">
                      <img src="images/products/thum/products-01.png" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      <a href="details.html">
                        Licoln Corner Unit
                      </a>
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
                <div class="special-item">
                  <div class="product-image">
                    <a href="details.html">
                      <img src="images/products/thum/products-02.png" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      <a href="details.html">
                        Licoln Corner Unit
                      </a>
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
                <div class="special-item">
                  <div class="product-image">
                    <a href="details.html">
                      <img src="images/products/thum/products-03.png" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      <a href="details.html">
                        Licoln Corner Unit
                      </a>
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
              </div>
              <div class="product-tag leftbar">
                <h3 class="title">
                  Products 
                  <strong>
                    Tags
                  </strong>
                </h3>
                <ul>
                  <li>
                    <a href="#">
                      Lincoln us
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      SDress for Girl
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Corner
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Window
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      PG
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Oscar
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Bath room
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      PSD
                    </a>
                  </li>
                </ul>
              </div>
              <div class="get-newsletter leftbar">
                <h3 class="title">
                  Get 
                  <strong>
                    newsletter
                  </strong>
                </h3>
                <p>
                  Casio G Shock Digital Dial Black.
                </p>
                <form>
                  <input class="email" type="text" name="" placeholder="Your Email...">
                  <input class="submit" type="submit" value="Submit">
                </form>
              </div>
              <div class="fbl-box leftbar">
                <h3 class="title">
                  Facebook
                </h3>
                <span class="likebutton">
                  <a href="#">
                    <img src="images/fblike.png" alt="">
                  </a>
                </span>
                <p>
                  12k people like Flat Shop.
                </p>
                <ul>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                </ul>
                <div class="fbplug">
                  <a href="#">
                    <span>
                      <img src="images/fbicon.png" alt="">
                    </span>
                    Facebook social plugin
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="checkout-page">
                <ol class="checkout-steps">
                  <li class="steps active">
                    <a href="checkout.html" class="step-title">
                      01. Quên mật khẩu 
                    </a>
                    <div class="step-description">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <div class="new-customer">
                            <h5>
                              Khách hàng mới
                            </h5>
                            <p class="requir">
                            Hãy nhập EMAI và TÊN ĐĂNG NHẬP tài khoản của bạn để nhận lại mật khẩu
                            </p>
                            
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                          <div class="run-customer">
                            <h5>
                              Nhập Email và Tên đăng nhập
                            </h5>
                            <form action="index.php?act=quenmk" method="post">
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Email 
                                  <strong class="red"> *</strong>
                                </label>
                                <input type="text" class="input namefild" name="email">
                              </div>
                              <!-- <div class="form-row">
                                <label class="lebel-abs">
                                  Tên đăng nhập
                                  <strong class="red">*</strong>
                                </label>
                                <input type="password" class="input namefild" name="pass">
                              </div> -->
                              <input type="submit" value="Xác nhận" name="quenmk" style="width:100px;height:35px;background-color:#fff;font-size:14px;
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