
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/page.css">
</head>
<body>

    <h1>Liệt kê danh mục sản phẩm</h1>
    <div class="recent-flex">
    <div class="project">
    <div class="card">
        <div class="product-items">
            <ul>
                <li class="product-item-heading">
                    <div class="product-prop product-img">Mã</div>
                    <div class="product-prop product-dm">Khách hàng</div>
                    <div class="product-prop product-img">Số lượng</div>
                    <div class="product-prop product-img">Giá trị</div>
                    <div class="product-prop product-img">Tình trạng</div>
                    <div class="product-prop product-img">Ngày đặt</div>
                    <div class="product-prop product-img">Thao tác</div>
                    <div class="clear-both"></div>
                </li>
            </ul>
        <?php
        $i = 0;
        foreach ($listbill as $bill) {
            extract($bill);
            $kh=$bill['bill_name'].'
            <br> '.$bill['bill_email'].'
            <br> '.$bill['bill_address'].'
            <br> '.$bill['bill_phone'];
            $countsp = loadall_cart_count($bill['id']);
        ?>
                <li>
                    <div class="product-prop product-img">G9-<?php echo $bill['id'] ?></div>
                    <div class="product-prop product-dm"><?php echo $kh?></div>
                    <div class="product-prop product-img"><?php echo $countsp?></div>
                    <div class="product-prop product-img"><?php echo $bill['total']?></div>
                    <div class="product-prop product-img">
                        <?php
                            if($bill_status==0){
                                echo '<a href="bill/xuly.php?code='.$code_bill.'">Đơn hàng mới</a>';
                            }elseif($bill_status==1){
                                echo '<a href="bill/xuly.php?code='.$code_bill.'">Đã xác nhận</a>';
                            }elseif($bill_status==2){
                                echo '<a href="bill/xuly.php?code='.$code_bill.'">Đang giao hàng</a>';
                            }else{
                                echo '<a href="bill/xuly.php?code='.$code_bill.'">Đã giao hàng</a>'; 
                            }
                        ?>
                    </div>
                    <div class="product-prop product-img"><?php echo $bill['ngaydathang']?></div>
                    <div class="product-prop product-img">
                        <a href=""><i class="fas fa-trash-alt"></i></a>
                    </div>
                    
                    <div class="clear-both"></div>
                </li>
                <hr>
        <?php
        }
        ?>
    </div>
    </div>
    </div>