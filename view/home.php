<?php
	$conn = mysqli_connect('localhost','root','','duan1_2021');
	if(isset($_GET['trang'])){
		$page = $_GET['trang'];
	}else{
		$page = '';
	}
	if($page == '' || $page == 1){
		$begin = 0;
	}else{
		$begin = ($page*4)-4;
	}
	$sql_pro = "SELECT * FROM sanpham, danhmuc
	WHERE sanpham.id_danhmuc=danhmuc.id ORDER BY sanpham.id_sp ASC LIMIT $begin,4";
    $query_pro = mysqli_query($conn, $sql_pro);
?>



		<div class="hom-slider">
            <div class="container">
               <div id="sequence">
                  <div class="sequence-prev"><i class="fa fa-angle-left"></i></div>
                  <div class="sequence-next"><i class="fa fa-angle-right"></i></div>
                  <ul class="sequence-canvas">
                     <li class="animate-in">
                        <div class="flat-caption caption1 formLeft delay300 text-center"><span class="suphead">Đại sứ thương hiệu</span></div>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>JENNIE - BLACKPINK</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>Là thành viên của nhóm nhạc hot nhất K-biz.<br>Đại sứ thương hiệu cho nhãn hàng Samsung</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-duration="5" data-bottom="true"><img src="view/image/slide_jennie.png" alt=""></div>
                     </li>
                     <li class="animate-in">
                        <div class="flat-caption caption1 formLeft delay300 text-center"><span class="suphead">Đại sứ thương hiệu</span></div>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>Sơn Tùng M-TP</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <P>Là một trong những nghệ có sức ảnh hưởng lớn nhất Việt Nam<br>Đại sứ thương hiệu cho nhãn hàng OPPO.</P>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="view/image/slide_sontung.png" alt=""></div>
                     </li>
                     <li class="animate-in">
                        <div class="flat-caption caption1 formLeft delay300 text-center"><span class="suphead">Đại sứ thương hiệu</span></div>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>Noo Phước Thịnh</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>Là ca sĩ Việt Nam đầu tiên đảm nhiệm vai trò Đại sứ Thiện chí Du lịch Nhật Bản.<br>Vừa qua cũng là gương mặt đại diện cho nhãn hàng Vivo</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="view/image/slide_noo.png" alt=""></div>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="promotion-banner">
               <div class="container">
                  
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="view/image/bannertop1.jpg" alt="" style="border-radius: 9px;height: 120px;width:320px; margin-left:30px;"></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="view/image/bannertop2.jpg" alt="" style="height: 120px;"></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="view/image/promotion-03.png" alt=""></div>
                     </div>
                  
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
		 <div class="container_fullwidth">
            <div class="container">
               <div class="hot-products">
                  <h3 class="title">SẢN PHẨM <strong>MỚI</strong></h3>
                  <ul id="hot">
                     <li> 
						<?php
						while($row = mysqli_fetch_array($query_pro)){
						?>
                     
							<div class="col-md-3 col-sm-6">
                     
                              <div class="products">
                                 <div class="offer">- %20</div>
                                 <div class="thumbnail"><a href="index.php?act=sanphamct&idsp=<?php echo $row['id_sp'] ?>"><img src="upload/<?php echo $row['image']?>" alt="Product Name" style="height: 220px; margin-top: 10px;"></a></div>
                                 <div class="productname"><?php echo $row['tensp']?></div>
                                 <h4 class="price"><?php echo number_format($row['giasp'],0,',','.').'đ'?></h4>
                                 <div class="button_group"><a href="index.php?act=sanphamct&idsp=<?php echo $row['id_sp'] ?>"><button class="button add-cart" type="button">Add To Cart</button></a><button class="button compare" type="button"><i class="fa fa-eye" style="font-size: 15px;"> <?php echo $row['luotxem']?></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div> 
                           </div>
               
						<?php }?>
						<?php
						$conn = mysqli_connect('localhost','root','','duan1_2021');
						$sql_trang = mysqli_query($conn,"SELECT * FROM sanpham");
						$row_count = mysqli_num_rows($sql_trang);
						$trang = ceil($row_count/4);
					?>
					<?php
						for($i=1;$i<=$trang;$i++){
					?>
					 <ul class="pagination">
						<li><a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
					</ul>
				  <?php }?>
                     </li>
                  </ul>
				 
               </div>
			   
               <div class="clearfix"></div>
               <div class="featured-products">
                  <h3 class="title">SẢN PHẨM<strong> NỔI BẬT</strong></h3>
                  <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
                  <ul id="featured">
                     <li>
                     <?php
                     foreach ($dst10 as $sp) {
                        extract($sp);
                        $linksp = "index.php?act=sanphamct&idsp=".$id_sp;
                        $img = $img_path.$image; 
                     ?>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="<?php echo $linksp ?>"><img src="<?php echo $img ?>" alt="Product Name"></a></div>
                                 <div class="productname"><?php echo $tensp ?></div>
                                 <h4 class="price"><?php echo number_format($giasp,0,',','.').'đ'?></h4>
                                 <div class="button_group"><a href="<?php echo $linksp?>"><button class="button add-cart" type="button">Add To Cart</button></a><button class="button compare" type="button"><i class="fa fa-eye" style="font-size: 15px;"> <?php echo $luotxem?></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <?php }?>
                  
                     </li>
                     
            
                  </ul>
               </div>
               <div class="clearfix"></div>
            
               <div class="our-brand">
                  <h3 class="title"><strong>Thương hiệu</strong></h3>
                  <div class="control"><a id="prev_brand" class="prev" href="#">&lt;</a><a id="next_brand" class="next" href="#">&gt;</a></div>
                  <ul id="braldLogo">
                     <li>
                        <ul class="brand_item">
                           <li>
                              <a href="index.php?act=sanpham&iddm=10">
                                 <div class="brand-logo"><img src="view/image/logo/logoiphone.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="index.php?act=sanpham&iddm=11">
                                 <div class="brand-logo"><img src="view/image/logo/logosamsung.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="index.php?act=sanpham&iddm=14">
                                 <div class="brand-logo"><img src="view/image/logo/logovivo.jpg" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="index.php?act=sanpham&iddm=13">
                                 <div class="brand-logo"><img src="view/image/logo/logoxiaomi.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="index.php?act=sanpham&iddm=12">
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
         <div class="clearfix"></div>
         