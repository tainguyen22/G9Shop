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
    <h1>Danh sách sản phẩm</h1>

    <div class="product-items">
        <ul>
            <li class="product-item-heading">
                <div class="product-prop product-button">Id</div>
                <div class="product-prop product-img">Tên</div>
                <div class="product-prop product-img">Hình ảnh</div>
                <div class="product-prop product-dm">Email</div>
                <div class="product-prop product-img">Địa chỉ</div>
                <div class="product-prop product-img">Điện thoại</div>
                <div class="product-prop product-img">Vai trò</div>
                <div class="product-prop product-vt">Xóa</div>
                <div class="clear-both"></div>
            </li>
        </ul>
    <?php
    $i = 0;
    foreach ($listkhachhang as $taikhoan) {
        extract($taikhoan);
        $suatk = "index.php?act=suatk&id=".$id;
        $xoatk = "index.php?act=xoatk&id=".$id;
        $hinhpath = "../upload/".$hinh;
        if(is_file($hinhpath)){
            $hinh = "<img src='".$hinhpath."' width='100'>";
        }else{
            $hinh = "no photo";
        }
    ?>
            <li>
                <div class="product-prop product-button"><?php echo $id ?></div>
                <div class="product-prop product-img"><?php echo $user ?></div>
                <div class="product-prop product-img"><?php echo $hinh ?></div>
                <div class="product-prop product-dm"><?php echo $email ?></div>
                <div class="product-prop product-img"><?php echo $address ?></div>
                <div class="product-prop product-img"><?php echo $phone ?></div>
                <div class="product-prop product-img"><?php if($role==1){
                    echo 'Admin';
                }else{
                    echo 'User';
                } 
                ?>
                </div>
                <div class="product-prop product-vt">
                    <a href="<?php echo $suatk ?>"><i class="fas fa-pencil-alt"></i></a> |
                    <a href="<?php echo $xoatk ?>"><i class="fas fa-trash-alt"></i></a>
                </div>
                <div class="clear-both"></div>
            </li>
            <hr>
            <?php
    }
    ?>
    <div class="buttons">
        <a href="index.php?act=addtk">Thêm tài khoản mới</a>
        <div class="clear-both"></div>
    </div>