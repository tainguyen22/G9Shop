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
    <h1>Thông kê sản phẩm</h1>

    <div class="product-items">
        <ul>
            <li class="product-item-heading">
                <div class="product-prop product-button">ID</div>
                <div class="product-prop product-name">Tên DM</div>
                <div class="product-prop product-img">SỐ LƯỢNG</div>
                <div class="product-prop product-name">GIÁ CAO NHẤT</div>
                <div class="product-prop product-name">GIÁ THẤP NHẤT</div>
                <div class="product-prop product-img">GIÁ TRUNG BÌNH</div>
                <div class="clear-both"></div>
            </li>
        </ul>
    <?php
    foreach ($listthongke as $thongke) {
        extract($thongke);
    ?>
            <li>
                <div class="product-prop product-button"><?php echo $madm ?></div>
                <div class="product-prop product-name"><?php echo $tendm ?></div>
                <div class="product-prop product-img"><?php echo $countsp ?></div>
                <div class="product-prop product-name"><?php echo $maxgiasp ?></div>
                <div class="product-prop product-name"><?php echo $mingiasp ?></div>
                <div class="product-prop product-img"><?php echo $avggiasp ?></div>
                <div class="clear-both"></div>
            </li>
            <hr>
    <?php
    }
    ?>
    <div class="buttons">
        <a href="index.php?act=bieudo">Xem biểu đồ</a>
        <div class="clear-both"></div>
    </div>