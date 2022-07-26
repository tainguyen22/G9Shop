<h1>Thêm tài khoản</h1>
    <div class="main-content">
        <div class="content-box">
            <form id="product-form" method="POST" action="index.php?act=addtk" enctype="multipart/form-data">    
                <div class="wrap-field">
                    <label>Mã tài khoản</label>
                    <input type="text" name="id" disabled placeholder="auto number">
                    <div class="clear-both"></div>
                </div>
                <div class="wrap-field" style="width:500px;">
                    <label>Tên đăng nhập</label>
                    <input type="text" name="user">
                    <div class="clear-both"></div>
                </div>
                <div class="wrap-field">
                    <label>Họ tên</label>
                    <input type="text" name="fullname">
                    <div class="clear-both"></div>
                </div>
                <div class="wrap-field">
                    <label>Mật khẩu</label>
                    <input type="password" name="pass">
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
                    <label>Email</label>
                    <input type="text" name="email">
                    <div class="clear-both"></div>
                </div>
                <div class="wrap-field">
                    <label>Địa chỉ</label>
                    <input type="text" name="address">
                    <div class="clear-both"></div>
                </div>
                <div class="wrap-field">
                    <label>Điện thoại</label>
                    <input type="text" name="phone">
                    <div class="clear-both"></div>
                </div>
                <div class="wrap-field">
                    <label>Vai trò</label>
                    <select name="role">
                    <option value="0" selected>Khách hàng</option>
                    <option value="1">Admin</option>
                    </select>
                    <div class="clear-both"></div>
                </div>
                <div class="wrap-field">
                    <label>Tình trạng</label>
                    <select name="kichhoat">
                    <option value="0" selected>Kích hoạt</option>
                    <option value="1">Chưa kích hoạt</option>
                    </select>
                    <div class="clear-both"></div>
                </div>
                    <input type="submit" name="themmoi" value="THÊM TÀI KHOẢN">
            </form>
        </div>   
    </div>
