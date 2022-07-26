<?php
if(is_array($khachhang)){
    extract($khachhang);
}
$img = "../upload/".$hinh;
if(is_file($img)){
    $hinh = "<img src='".$img."' height='80px'";
}else{
    $hinh ="NO IMAGES";
}

?>
<h1>Thêm tài khoản</h1>
    <div class="main-content">
        <div class="content-box">
            <form id="product-form" method="POST" action="index.php?act=updatetk" enctype="multipart/form-data">    
                <div class="wrap-field">
                    <label>Mã tài khoản</label>
                    <input type="text" name="id" value="<?=$id?>">
                    <div class="clear-both"></div>
                </div>
                <div class="wrap-field">
                    <label>Tên đăng nhập</label>
                    <input type="text" name="user" value="<?=$user?>">
                    <div class="clear-both"></div>
                </div>
                <div class="wrap-field">
                    <label>Họ tên</label>
                    <input type="text" name="fullname" value="<?=$fullname?>">
                    <div class="clear-both"></div>
                </div>
                <div class="wrap-field">
                    <label>Hình ảnh</label>
                    <div class="right-wrap-field">
                    <input type="file" name="hinh" value="<?=$hinh?>">
                    </div>
                    <div class="clear-both"></div>
                </div>
                <div class="wrap-field">
                    <label>Email</label>
                    <input type="text" name="email" value="<?=$email?>">
                    <div class="clear-both"></div>
                </div>
                <div class="wrap-field">
                    <label>Địa chỉ</label>
                    <input type="text" name="address" value="<?=$address?>">
                    <div class="clear-both"></div>
                </div>
                <div class="wrap-field">
                    <label>Điện thoại</label>
                    <input type="text" name="phone" value="<?=$phone?>">
                    <div class="clear-both"></div>
                </div>
                <div class="wrap-field">
                    <label>Vai trò</label>
                    <?php if($role == 0){?>
                    <input type="radio" name="role" value="0" checked>Khách hàng
                    <input type="radio" name="role" value="1">Admin
                    <?php }elseif($role == 1){?>
                    <input type="radio" name="role" value="0">Khách hàng
                    <input type="radio" name="role" value="1" checked>Admin
                    <?php }?>
                    <div class="clear-both"></div>
                </div>
                <div class="wrap-field">
                    <label>Tình trạng</label>
                    <?php if($kich_hoat == 0){?>
                    <input type="radio" name="kichhoat" value="0" checked>Kích hoạt
                    <input type="radio" name="kichhoat" value="1">Chưa kích hoạt
                    <?php }elseif($kich_hoat == 1){?>
                    <input type="radio" name="kichhoat" value="0">Kích hoạt
                    <input type="radio" name="kichhoat" value="1" checked>Chưa kích hoạt
                    <?php }?>
                        <div class="clear-both"></div>
                </div>
                    <input type="hidden" name="id" value="<?=$_GET['id']?>">
                    <input type="submit" name="capnhat" value="CẬP NHẬT">
            </form>
        </div>   
    </div>
