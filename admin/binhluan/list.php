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
<div class="main-content"></div>
    <h1>Danh sách bình luận</h1>

    <div class="product-items">
        <ul>
            <li class="product-item-heading">
                <div class="product-prop product-vt">Mã hàng hóa</div>
                <div class="product-prop product-dm">Tên hàng hóa</div>
                <div class="product-prop product-img">Số lượng</div>
                <div class="product-prop product-name">Cũ nhất</div>
                <div class="product-prop product-name">Mới nhất</div>
                <div class="product-prop product-quanly">Quản lý</div>
                <div class="clear-both"></div>
            </li>
        </ul>
    <?php
    $i = 0;
    foreach($listbinhluan as $binhluan){
        extract($binhluan);
        $ct="index.php?act=ctbl&id=".$id_sp;
    ?>
            <li>
                <div class="product-prop product-vt"><?php echo $id_sp ?></div>
                <div class="product-prop product-dm"><?php echo $tensp ?></div>
                <div class="product-prop product-img"><?php echo $soLuong ?></div>
                <div class="product-prop product-name"><?php echo $cuNhat ?></div>
                <div class="product-prop product-name"><?php echo $moiNhat ?></div>
                <div class="product-prop product-quanly">
                    <a href="<?php echo $ct?>"><input type="button" value="Chi tiết"></a>    
                </div>
                <div class="clear-both"></div>
            </li>
            <hr>
    <?php
    }
    ?>