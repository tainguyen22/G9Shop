<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath = "../upload/".$image;
    if(is_file($hinhpath)){
        $hinh = "<img src='".$hinhpath."' height='80'>";
    }else{
        $hinh = "no photo";
    }
?>
<h1>Sửa sản phẩm</h1>
<div class="main-content">
    <div class="content-box">
    <form id="product-form" method="POST" action="index.php?act=updatesp" enctype="multipart/form-data">    
        <div class="wrap-field">
            <label>Tên sản phẩm</label>
            <input type="text" value="<?=$tensp?>" name="tensp">
            <div class="clear-both"></div>
        </div>
        <div class="wrap-field">
            <label>Hình ảnh</label>
            <input type="file" name="hinh">
            <div class="clear-both"></div>
        </div>
        <div class="wrap-field">
            <label>Giá sản phẩm</label>
            <input type="text" value="<?=$giasp?>" name="giasp">
            <div class="clear-both"></div>
        </div>
        <div class="wrap-field">
            <label>Số lượng</label>
            <input type="text" value="<?=$so_luong?>" name="so_luong">
            <div class="clear-both"></div>
        </div>
        <div class="wrap-field">
            <label>Mô tả</label>
            <textarea rows="10" name="mota" style="resize: none"><?=$mota?></textarea>
            <div class="clear-both"></div>
        </div>
        <div class="wrap-field">
            <label>Thương hiệu</label>
                <select name="iddm">
                <option value="0" selected>Tất cả</option>
                    <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            if($iddm == $id)
                            $s = "selected"; else $s = "";
                            echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';
                        }
                    ?>
                </select>
                <div class="clear-both"></div>
        </div>
        <div class="wrap-field">
            <label>Tình trạng</label>
                <select name="tinhtrang">
                    <?php
                    if($row['tinhtrang']==0){
                    ?>
                        <option value="0" selected>Kích hoạt</option>
                        <option value="1">Ẩn</option>
                    <?php
                    }else{
                    ?>    
                        <option value="0">Kích hoạt</option>
                        <option value="1" selected>Ẩn</option>
                    <?php
                    }
                    ?>
                </select>
                <div class="clear-both"></div>
        </div>
        <div class="wrap-field">
            <input type="hidden" name="id" value="<?=$id_sp?>">
            <input type="submit" name="capnhat" value="CẬP NHẬT">
        </div>
    </form>
    </div>
</div>

