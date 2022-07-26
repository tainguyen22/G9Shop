
    
<?php

    extract($onesp);
    $hinh = $img_path.$image;
?>
<div class="container_fullwidth">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <?php
              if($so_luong > 0){
            ?>
          <form action="view/cart/themgiohang.php?idsp=<?=$id_sp?>" method="POST">
            <div class="products-details">
              <div class="preview_image">
                <div class="preview-small">
                  <img id="zoom_03" src="<?php echo $hinh ?>"
                    data-zoom-image="<?php echo $hinh ?>" alt="">
                </div> 
              </div>
              <div class="products-description">
                <h5 class="name">
                    <?php echo $tensp ?>
                </h5>
                <p>
                  <img alt="" src="images/star.png">
                  <a class="review_num" href="#">
                    <?php echo $luotxem?> Review(s)
                  </a>
                </p>
                <p>
                  Thương hiệu:
                  <span class=" light-red">
                    <?php echo $name ?>
                  </span>
                </p>
                <p>
                  <?php echo $mota?>
                </p>
                <hr class="border">
                <div class="price">
                  Giá :
                  <span class="new_price">
                    <?php echo number_format($giasp,0,',','.')?>
                    <sup>
                      đ
                    </sup>
                  </span>
                  <span class="old_price">
                    450.00
                    <sup>
                      đ
                    </sup>
                  </span>
                </div>
                <hr class="border">
                <div class="wided">
                  <div class="qty">
                    Số lượng &nbsp;&nbsp;: <?php echo $so_luong?>
                  </div>
                  <div class="button_group">
                    <input class="button" name="addtocart" type="submit" value="Add To Cart">
                    <button class="button compare">
                      <i class="fa fa-exchange">
                      </i>
                    </button>
                    <button class="button favorite">
                      <i class="fa fa-heart-o">
                      </i>
                    </button>
                    <button class="button favorite">
                      <i class="fa fa-envelope-o">
                      </i>
                    </button>
                  </div>
                </div>
                <div class="clearfix">
                </div>
                <hr class="border">
                <img src="images/share.png" alt="" class="pull-right">
              </div>
            </div>
          </form>
          <?php }else{ ?>
            <form> ĐÃ HẾT HÀNG</form>
            <?php }?>
            <div class="clearfix">
            </div>
            <div class="tab-box">
              <div id="tabnav">
                <ul>
                  <li>
                    <a href="#Descraption">
                      BÌNH LUẬN
                    </a>
                  </li>
                </ul>
              </div>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script>
                $(document).ready(function() {
                    $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id_sp?>});
                });
                </script>
              <div class="tab-content-wrap">
                <div class="tab-content" id="binhluan">
                  <div class="chat-content panel-left2">
                   
                     
                  </div> 
                </div>
              </div>
            </div>
            <div class="clearfix">
            </div>
            <div id="productsDetails" class="hot-products">
              <h3 class="title">
                Sản phẩm
                <strong>
                  cùng loại
                </strong>
              </h3>
              <div class="control">
                <a id="prev_hot" class="prev" href="#">
                  &lt;
                </a>
                <a id="next_hot" class="next" href="#">
                  &gt;
                </a>
              </div>
              <ul id="hot">
                <li>
                  <?php
                      foreach ($sp_cungloai as $sp_cungloai) {
                        extract($sp_cungloai);
                        $linksp = "index.php?act=sanphamct&idsp".$id;
                        $hinh = $img_path.$image;
                        ?>
                        
                          <div class="col-md-4 col-sm-4">
                            <div class="products">
                              <div class="offer">
                                - %20
                              </div>
                              <div class="thumbnail">
                                <a href="<?php echo $linksp ?>">
                                <img src="<?php echo $hinh ?>" alt="Product Name">
                                </a>
                              </div>
                              <div class="productname">
                                <?php echo $tensp ?>
                              </div>
                              <h4 class="price">
                                <?php echo number_format($giasp,0,',','.').'đ'?>
                              </h4>
                              <div class="button_group">
                                <button class="button add-cart" type="button">
                                  <a href="<?php echo $linksp ?>">
                                  Add To Cart
                                  </a>
                                </button>
                                <button class="button compare" type="button">
                                  <i class="fa fa-exchange">
                                  </i>
                                </button>
                                <button class="button wishlist" type="button">
                                  <i class="fa fa-heart-o">
                                  </i>
                                </button>
                              </div>
                            </div>
                          </div> 
                      <?php }?>
                </li>
                
              </ul>
            </div>
            <div class="clearfix">
            </div>
          </div>
          <div class="col-md-3">
            <div class="special-deal leftbar">
              <h4 class="title">
                Sản phẩm
                <strong>
                  đặt biệt
                </strong>
              </h4>
              <?php
                foreach ($dst3 as $sp) {
                  extract($sp);
                  $linksp = "index.php?act=sanphamct&idsp=".$id_sp;
                  $img = $img_path.$image; 
                ?>
              <div class="special-item">
                <div class="product-image">
                  <a href="<?php echo $linksp ?>">
                    <img src="<?php echo $img?>" alt="">
                  </a>
                </div>
                <div class="product-info">
                  <p>
                    <?php echo $tensp ?>
                  </p>
                  <h5 class="price">
                    <?php echo number_format($giasp,0,',','.').'đ'?>
                  </h5>
                </div>
              </div>
              <?php }?>
              <div class="clearfix">
              </div>
              
            <div class="product-tag leftbar">
              <h3 class="title">
                Products
                <strong>
                  Tags
                </strong>
              </h3>
              <ul>
              <?php
                  foreach ($dsdm as $dm) {
                    extract($dm);
                    $linkdm = "index.php?act=sanpham&iddm=".$id;
                  ?>
                <li>
                  <a href="<?php echo $linkdm?>">
                    <?php echo $name?>
                  </a>
                </li>
                <?php }?>
              </ul>
            </div>
            <div class="clearfix">
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
            <div class="clearfix">
            </div>

            <div class="clearfix">
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
    </div>

