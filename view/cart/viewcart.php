<div class="container_fullwidth">
        <div class="container shopping-cart">
          <div class="row">
            <div class="col-md-12">
              <h3 class="title">
                Shopping Cart
              </h3>
              <div class="clearfix">
              </div>
              <table class="shop-table">
                
                <?php
                  viewcart(1);
                ?>
                </table>
                <tfoot>
                  <tr>
                    <td colspan="6">
                      <button class="pull-left">
                        <a href="index.php">
                        Tiếp tục mua hàng
                        </a>
                      </button>
                      <?php
                      if(isset($_SESSION['user'])){
                         extract($_SESSION['user']);
                      ?>
                      <button class="pull-left">
                        <a href="index.php?act=bill">
                        Tiếp tục đặt hàng
                        </a>
                      </button>
                      <?php
                      }else{
                     ?>
                        <button class="pull-left">
                        <a href="index.php?act=dangky">
                        Đăng ký đặt hàng
                        </a>
                      </button>
                      <?php }?>
                      <button class=" pull-right">
                        <a href="view/cart/themgiohang.php?xoatatca=1">
                        Xóa giỏ hàng
                        </a>
                      </button>
                    </td>
                  </tr>
                </tfoot>
              
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
        </div>
</div>
        