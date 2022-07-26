<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="../css/bootstrap.css" rel="stylesheet">
   <title>Document</title>
   <link rel="stylesheet" href="view/css/comment.css">
</head>
<style>  
.container_fullwidth{background-color:#e6e8ea;}.row {margin-left: -10px;margin-right: -10px;}.col--primary {width: 60%}.section--icon-heading {text-align: inherit;
display: flex;align-items: center;padding-left: 0;padding-right: 0;}.section__icon { margin-right: 1rem;}.section:first-child {padding-top: 0;}section {display: block;}
.col {padding-left: 1em;padding-right: 1em;}.col{float: left;box-sizing: border-box;}.section__content--bordered{border: 1px solid #dadada;padding: 1em; margin: 1em;}
.section__content.section__content--bordered p{display: block;  margin-block-start: 1em;margin-block-end: 1em;margin-inline-start: 0px;margin-inline-end: 0px;font-size: 14px;font-weight: 300;
}.row:first-child>.col:first-child{padding-top: 0;}.col--md-two {padding-top: 0; width: 50%;}h2{color: #333;}h1,h2,h3,h4,h5,h6{margin: 0;font-weight: normal;}h2{display: block;font-size: 1.5em;
margin-block-start: 0.83em; margin-block-end: 0.83em;margin-inline-start: 0px;margin-inline-end: 0px;}.col--secondary {width: 40%;}.col{padding-left: 1em;padding-right: 1em;padding-top: 0;
}.col--secondary {float: right;}.thankyou-page .order-summary{background-color: #fafafa;}.order-summary--bordered { border: 1px solid #e1e1e1;background: #fff;}.order-summary--bordered .order-summary__header {
padding: 7px 15px;display: flex; justify-content: space-between;}.order-summary__title {font-weight: 600;}p.section__text{display: block; margin-block-start: 1em;margin-block-end: 1em;
margin-inline-start: 0px; margin-inline-end: 0px;font-size: 14px;}aside { display: block;}.order-summary__sections { display: flex;flex-direction: column;}a, .icon-print {
color: #2a9dcc;text-decoration: none;cursor: pointer;}.order-summary--bordered .order-summary__section--product-list { border-top: 1px solid #e1e1e1;padding-top: 0; padding-bottom: 0;
}.order-summary--bordered .order-summary__section {padding: 7px 15px;}.order-summary__section--is-scrollable {overflow-y: auto;max-height: calc(100vh - 480px);}
.order-summary__section { padding-top: 1em; padding-bottom: 1em;}.section__title{font-size: 22px;font-weight: 400;}table {border-collapse: collapse;
border-spacing: 0; font-size: 1em;width: 100%; margin: 0;}table {display: table;border-collapse: separate;box-sizing: border-box; text-indent: initial;border-spacing: 2px;border-color: grey;
}tbody {display: table-row-group;vertical-align: middle;border-color: inherit;}tr {display: table-row;vertical-align: inherit; border-color: inherit;}
.order-summary--bordered .order-summary__section--product-list tbody tr:last-child td, .order-summary--bordered .order-summary__section--product-list tbody tr:last-child th {
border-bottom: none;}.order-summary--bordered .order-summary__section--product-list tbody td, .order-summary--bordered .order-summary__section--product-list tbody th {
border-bottom: 1px solid #e6e6e6;padding-top: 1em;padding-bottom: 1em;}.product td {padding-top: 1em;}.product-thumbnail__quantity {font-size: .78em;white-space: nowrap;padding: 0 0.62em;
border-radius: 2em;background-color: #2a9dcc;color: #fff;position: absolute;right: -0.9em;top: -0.55em;z-index: 3;box-sizing: border-box;min-width: 1.75em;height: 1.75em;text-align: center;line-height: 1.75em;
}.product-table td, .stock-table td {padding-left: 1em;}td:first-child, th:first-child { padding-left: 0;text-align: left;}td, th {font-weight: normal;}td {display: table-cell;vertical-align: inherit;}
.product-thumbnail { width: 50px;height: 50px;border-radius: 8px;background: #fff;position: relative;}
.order-summary--bordered .order-summary__section--product-list tbody tr:last-child td, .order-summary--bordered .order-summary__section--product-list tbody tr:last-child th {border-bottom: none;}
.order-summary--bordered .order-summary__section--product-list tbody td, .order-summary--bordered .order-summary__section--product-list tbody th {
border-bottom: 1px solid #e6e6e6;padding-top: 1em;padding-bottom: 1em;}.order-summary__section~.order-summary__section { border-top: 1px solid rgba(175,175,175,.34);}.order-summary--bordered .order-summary__section {padding: 7px 15px;
}table .total-line-table{border-collapse: collapse;border-spacing: 0;font-size: 1em;width: 100%;margin: 0;}tr.total-line.total-line--subtotal {display: table-row; vertical-align: inherit;border-color: inherit;font-size: 15px;}
tr.total-line.total-line--shipping-fee { display: table-row;vertical-align: inherit; border-color: inherit;font-size: 15px;}tr.total-line.payment-due {display: table-row;vertical-align: inherit;border-color: inherit;font-size: 19px;}
span.payment-due__price { font-size: 1.3em;font-weight: 400;letter-spacing: -.04em;line-height: 1em;color: #2a9dcc;}.total-line th, .total-line td {padding-top: 0.75em;}.payment-due__label-total {font-size: 1.2em;}
td:first-child, th:first-child {padding-left: 0;text-align: left;}td, th {font-weight: normal;}th.total-line__name {display: table-cell;vertical-align: inherit;font-weight: 500;text-align: -internal-center;}
.total-line__price { padding-left: 1.5em;text-align: right;white-space: nowrap;}tbody .total-line-table__tbody{display: table-row-group;vertical-align: middle;border-color: inherit;
}.product-table tbody th, .stock-table tbody th { padding-left: 1em; font-weight: 400;color: #333;padding-top: 0;padding-bottom: 0;font-size: 15px;}.product__description {text-align: left;width: 100%;}
.product__price, .product__quantity {white-space: nowrap;}td, th {font-weight: normal;}.product__description__name, .product__description__property {display: block;font-size: 13px;}th {display: table-cell;
vertical-align: inherit;font-weight: bold;text-align: -internal-center;}div {display: block;}.section.unprintable {padding-top: 2em;}section.unprintable {display: block;}.field__input-btn-wrapper--floating {justify-content: flex-end;
}.field__input-btn-wrapper {display: flex;align-items: center;}.btn--large {font-size: 1.1rem;}.btn {cursor: pointer;display: inline-block; background-color: #357ebd;
 border-color: #2f71a9;background-clip: border-box; box-sizing: border-box;border: 1px transparent solid; border-radius: 5px;color: #fff;font-weight: 500; padding: 0.98em 1.7em;text-align: center;
position: relative;}a, .icon-print {  text-decoration: none;}.text-icon-group--large {font-size: 1.5rem;}.text-icon-group {cursor: pointer;display: inline-block; margin-left: 2rem;margin-right: 2rem;
}.text-icon-group--large .fa {font-size: 1.8rem;}.fa {display: inline-block;font: normal normal normal 14px/1 FontAwesome;text-rendering: auto;-webkit-font-smoothing: antialiased;transform: translate(0,0);}

</style>
<body>
   

<div class="container_fullwidth">
    <div class="container shopping-cart">
                <article class="row">
							<div class="col col--primary">
								<section class="section section--icon-heading">
									<div class="section__icon unprintable">
										<svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
											<g fill="none" stroke="#8EC343" stroke-width="2">
												<circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
												<path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
											</g>
										</svg>
									</div>
									
									<?php
									require "model/bill_mail.php";
										if (isset($bill)&&(is_array($bill))) {
											extract($bill);}
										if(isset($_POST['dongydathang'])){
										// var_dump($_POST);exit();
											$fullname = $_SESSION['user']['fullname'];
											$email = $_SESSION['user']['email'];
											$address = $_POST['address'];
											$phone = $_POST['phone'];
											$pttt = $_POST['pttt'];
											$ngaydathang = date('d/m/Y');
											$tongdonhang = tongdonhang();
											
										$tong = 0;
										$i = 0;
										if(isset($_SESSION['mycart'])){
											$tieude = 'Đơn hàng của bạn tại G9-SHOP';
											$noidungthu = '<p>Thông tin đơn hàng bạn đã đặt tại G9-SHOP</p></br>';
											foreach ($_SESSION['mycart'] as $cart) {
												$hinh = $img_path.$cart['image'];
												$thanhtien = $cart['giasp'] * $cart['soluong'];
												$tong+=$thanhtien;
												$noidungthu.='<div class="order-summary__sections">
														<div class="order-summary__section order-summary__section--product-list order-summary__section--is-scrollable order-summary--collapse-element">
															<table class="product-table">
																<tbody>	
																	<tr class="product">
																		<td class="product__image">
																			<div class="product-thumbnail">
																				<div class="product-thumbnail__wrapper">
																					<img src="'.$hinh.'" alt="" class="product-thumbnail__image">
																				</div>
																				
																			</div>
																		</td>
																		<th class="product__description">
																			<span class="product__description__name">'.$cart['tensp'].'</span>
																		</th>
																		<th class="product__price">
																			'.number_format($cart['giasp'],0,',','.').'đ'.'
																		</th>
																	</tr>
																</tbody>
															</table>
														</div>
														<div class="order-summary__section">
															<table class="total-line-table">
																<tbody class="total-line-table__tbody">
																	<tr class="total-line total-line--subtotal">
																		<th class="total-line__name">Số lượng</th>
																		<td class="total-line__price">'.$cart['soluong'].'</td>
																	</tr>
																	<tr class="total-line total-line--subtotal">
																		<th class="total-line__name">Tạm tính</th>
																		<td class="total-line__price">'.number_format($thanhtien,0,',','.').'đ'.'</td>
																	</tr>
																	<tr class="total-line total-line--shipping-fee">
																		<th class="total-line__name">Tổng phụ</th>
																		<td class="total-line__price">
																			0₫
																		</td>
																	</tr>
																	
																</tbody>
															</table>
														</div>
													
														<div class="order-summary__section">
															<table class="total-line-table">
																<tbody class="total-line-table__tbody">
																	<tr class="total-line payment-due">
																		<th class="total-line__name">
																			<span class="payment-due__label-total">Tổng cộng</span>
																		</th>
																		<td class="total-line__price">
																			<span class="payment-due__price">'.number_format($tong,0,',','.').'đ'.'</span>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>';
												}
												$mail = new Mailer;
												$mail -> bill_mail($email,$tieude,$noidungthu);
										
										}
											
									}

									?>
									<div class="thankyou-message-container">
										<h2 class="section__title">Cảm ơn bạn đã đặt hàng</h2>
										
										<p class="section__text">
											Một email xác nhận đã được gửi tới <strong><?php echo $email ?></strong>. <br>
											Xin vui lòng kiểm tra email của bạn
										</p>
										
										
									</div>
								</section>
							</div>
							<div class="col col--secondary">
								<aside class="order-summary order-summary--bordered order-summary--is-collapsed" id="order-summary">
									<div class="order-summary__header">
										<div class="order-summary__title">
											Đơn hàng: G9-<?php echo $idbill;?>
										</div>
										<div class="order-summary__action hide-on-desktop unprintable">
											<a data-toggle="#order-summary" data-toggle-class="order-summary--is-collapsed" class="expandable">
												Xem chi tiết
											</a>
										</div>
									</div>
									<?php
												// bill_chi_tiet($billct);
												// viewcart(0);
												global $img_path;
								$tong = 0;
									$i = 0;
									if(isset($_SESSION['mycart'])){
										foreach ($_SESSION['mycart'] as $cart) {
											$hinh = $img_path.$cart['image'];
											 $thanhtien = $cart['giasp'] * $cart['soluong'];
											$tong+=$thanhtien;
											$i+=1;
											?>
									<div class="order-summary__sections">
										<div class="order-summary__section order-summary__section--product-list order-summary__section--is-scrollable order-summary--collapse-element">
											<table class="product-table">
												<tbody>
													<tr class="product">
														<td class="product__image">
															<div class="product-thumbnail">
																<div class="product-thumbnail__wrapper">
																	<img src="<?php echo $hinh ?>" alt="Laptop Apple Macbook Air MD711ZP/B Default Title" class="product-thumbnail__image">
																</div>
																<span class="product-thumbnail__quantity unprintable"><?php echo $cart['soluong']?></span>
															</div>
														</td>
														<th class="product__description">
															<span class="product__description__name"><?php echo $cart['tensp']?></span>
														</th>
														<th class="product__price">
															<?php echo number_format($cart['giasp'],0,',','.').'đ'?>
														</th>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="order-summary__section">
											<table class="total-line-table">
												<tbody class="total-line-table__tbody">
													<tr class="total-line total-line--subtotal">
														<th class="total-line__name">Tạm tính</th>
														<td class="total-line__price"><?php echo number_format($thanhtien,0,',','.').'đ'?></td>
													</tr>
													<tr class="total-line total-line--shipping-fee">
														<th class="total-line__name">Tổng phụ</th>
														<td class="total-line__price">
															0₫
														</td>
													</tr>
													
												</tbody>
											</table>
										</div>
										<?php }?>
										<div class="order-summary__section">
											<table class="total-line-table">
												<tbody class="total-line-table__tbody">
													<tr class="total-line payment-due">
														<th class="total-line__name">
															<span class="payment-due__label-total">Tổng cộng</span>
														</th>
														<td class="total-line__price">
															<span class="payment-due__price"><?php echo number_format($tong,0,',','.').'đ'?></span>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<?php }?>
									
								</aside>
							</div>
							<div class="col col--primary">
								<section class="section">
									<div class="section__content section__content--bordered">
										
										<div class="row">
											
											<div class="col col--md-two">
												<h2>Thông tin mua hàng</h2>
												<p><?php echo $fullname ?></p>
												
												<p><?php echo $email ?></p>
												
												
												<p><?php echo $phone?></p>
												
											</div>
											
											<div class="col col--md-two">
												<h2>Địa chỉ nhận hàng</h2>
												<p><?php echo $fullname ?></p>
												
												<p><?php echo $address ?></p>
												
												
												<p><?php echo $city ?></p>
												
												
												<p><?php echo $phone ?></p>
												
											</div>
										</div>
										<div class="row">
											<div class="col col--md-two">
												<h2>Phương thức thanh toán</h2>
												<p><?php echo $pttt ?>(COD)</p>
											</div>
											<div class="col col--md-two">
												<h2>Phương thức vận chuyển</h2>
												<p>Giao hàng tận nơi</p>
											</div>
										</div>
										
									</div>
								</section>
								<section class="section unprintable">
									<div class="field__input-btn-wrapper field__input-btn-wrapper--floating">
										<a href="index.php" class="btn btn--large">Tiếp tục mua hàng</a>
										<span class="text-icon-group text-icon-group--large icon-print" onclick="window.print()">
											<i class="fa fa-print"></i>
											<span>In </span>
										</span>
									</div>
								</section>
							</div>
						</article>
   
        </div>
    </div>
</div>
</body>
</html>