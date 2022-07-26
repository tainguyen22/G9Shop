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
    <h1>Chi tiết bình luận</h1>

    <div class="product-items">
        <ul>
            <li class="product-item-heading">
                <div class="product-prop product-thieu">Nội dung</div>
                <div class="product-prop product-name">Người bình luận</div>
                <div class="product-prop product-name">Ngày bình luận</div>
                <div class="product-prop product-name">Xóa bình luận</div>
                <div class="clear-both"></div>
            </li>
        </ul>
    <?php
    foreach($loadblct as $bl){
        extract($bl);
          $xoabl="index.php?act=xoabl&id=".$id_bl;
    ?>
            <li>
                <div class="product-prop product-thieu"><?php echo $noidung ?></div>
                <div class="product-prop product-name"><?php echo $user ?></div>
                <div class="product-prop product-name"><?php echo $ngaybinhluan ?></div>
                <div class="product-prop product-name">
                    <a href="<?php echo $xoabl ?>"><i class="fas fa-trash-alt"></i></a>
                </div>
                <div class="clear-both"></div>
            </li>
            <hr>
    <?php
    }
    ?>