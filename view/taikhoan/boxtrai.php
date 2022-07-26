<div class="col-md-3">
              <div class="special-deal leftbar" style="margin-top:0;">
                <h4 class="title">
                  Sản phẩm 
                  <strong>
                    đặc biệt
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
                    <a href="<?php echo $linksp?>">
                     <?php echo $tensp ?>
                    </a>
                  </p>
                  <h5 class="price">
                    <?php echo number_format($giasp,0,',','.').'đ'?>
                  </h5>
                </div>
              </div>
              <?php }?>
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
              
            </div>