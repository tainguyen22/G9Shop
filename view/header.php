
<div class="header">
<?php
                  if (isset($_SESSION['user'])) {
                     extract($_SESSION['user']);
               ?>
               <?php
                    if ($role == 1) {
                ?>
                     <div class="logo"><a href="admin/index.php"><img src="view/image/admin_icon.png" alt="" style="height: 80px;"></a></div>
               <?php }?>
               <?php }?>
            <div class="container">
               
               <div class="row">
               
                  <div class="col-md-2 col-sm-2">
                     <div class="logo"><a href="index.html"><img src="view/image/logo.png" alt="G9shop"></a></div>
                  </div>
                  <div class="col-md-10 col-sm-10">
                     <div class="header_top">
                        <div class="row">
                           <div class="col-md-3">
                              <ul class="option_nav">
                                
                              </ul>
                           </div>
                           <div class="col-md-6">
                              <ul class="topmenu">
                                 <li><a href="index.php">Trang chủ</a></li>
                                 <li><a href="#">Giới thiệu</a></li>
                                 <li><a href="#">Sản phẩm</a></li>
                                 <li><a href="#">Hỗ trợ</a></li>
                                 <li><a href="#">Truyền thông</a></li>
                                 <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                              </ul>
                           </div>
                           <?php
                              if (isset($_SESSION['user'])) {
                                 extract($_SESSION['user']);
                                 $img = "upload/".$hinh;
                           ?>
                              <div class="col-md-3">
                              <ul class="usermenu">
                                
                                 <li><a class="log">
                                    <?php echo $_SESSION['user']['user'] ?></a>
                                    
                                 </li>
                                 <li><a href="index.php?act=dangxuat" class="reg">Logout</a></li>
                              </ul>
                              
                           </div>
                           <?php 
                              }else{
                           ?>
                           
                              <div class="col-md-3">
                                 <ul class="usermenu">
                                    <li><a href="index.php?act=login" class="log">Login</a>
                                    <li><a href="index.php?act=dangky" class="reg">Register</a></li>
                                 </ul>
                              </div>
                    
                              <?php }?>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="header_bottom">
                        <ul class="option">
                           <li id="search" class="search">
                              <form action="index.php?act=sanpham" method="POST">
                                 <input class="search-submit" name="timkiem" type="submit" value="">
                                 <input class="search-input" type="text" value="" name="kyw" placeholder="Enter your search term...">
                              </form>
                           </li>
                           <li id="search" class="option-cart">
                              <?php
                                 if(isset($_SESSION['mycart'])){
                                    extract($_SESSION['mycart']);
                                 ?>
                                 <a href="index.php?act=mybill" class="cart-icon"><span class="cart_no"></span></a>
                                 <?php
                                 }else{
                              ?>
                                    <a href="" class="cart-icon">cart <span class="cart_no"></span></a>
                              <?php }?>
                              
                              
                           </li>
                        </ul>
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                        <div class="navbar-collapse collapse">
                           <ul class="nav navbar-nav">
                           <?php
                           foreach ($dsdm as $dm) {
                              extract($dm);
                              $linkdm = "index.php?act=sanpham&iddm=".$id;
                           ?>
                           
                              <li>
                                 <a href="<?php echo $linkdm?>" ><?php echo $name?></a>
                              </li>
                           <?php
                           }
                           ?>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>