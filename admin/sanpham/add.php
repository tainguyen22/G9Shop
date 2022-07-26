<h1>Thêm sản phẩm</h1>
    <div class="main-content">
        <div class="content-box">
            <form id="product-form" method="POST" action="index.php?act=addsp" enctype="multipart/form-data">    
                <div class="wrap-field">
                    <label>Mã sản phẩm</label>
                    <input type="text" name="masp" disabled placeholder="auto number">
                    <div class="clear-both"></div>
                </div>
                <div class="wrap-field">
                    <label>Tên sản phẩm</label>
                    <input type="text" name="tensp">
                    <div class="clear-both"></div>
                </div>
                <div class="wrap-field">
                    <label>Hình ảnh</label>
                    <div class="right-wrap-field">
                    <input type="file" name="hinh">
                    </div>
                    <div class="clear-both"></div>
                </div>
                <div class="wrap-field">
                    <label>Giá sản phẩm</label>
                    <input type="text" name="giasp">
                    <div class="clear-both"></div>
                </div>
                <div class="wrap-field">
                    <label>Số lượng</label>
                    <input type="text" name="soluong">
                    <div class="clear-both"></div>
                </div>
                <div class="wrap-field">
                    <label>Mô tả</label>
                    <textarea rows="10" name="mota" id="product-content" style="resize: none"></textarea>
                    <div class="clear-both"></div>
                    </div>
                <div class="wrap-field">
                    <label>Thương hiệu</label>
                        <select name="iddm">
                            <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                            ?>
                            <option value="<?php echo $danhmuc['id'] ?>"><?php echo $danhmuc['name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <div class="clear-both"></div>
                </div>
                <div class="wrap-field">
                    <label>Tình trạng</label>
                        <select name="tinhtrang">
                            <option value="0">Kích hoạt</option>
                            <option value="1">Ẩn</option>
                        </select>
                        <div class="clear-both"></div>
                </div>
                    <input type="submit" name="themmoi" value="THÊM SẢN PHẨM">
            </form>
        </div>   
    </div>
