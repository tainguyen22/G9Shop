<?php
    if (is_array($dm)) {
        extract($dm);
    }
?>
<h4>CẬP NHẬT LOẠI HÀNG HÓA</h4>
<table border="1" width="50%" style="border-collapse:collapse;">
    <form method="POST" action="index.php?act=updatedm">   
        <tr>
            <td>Mã danh mục</td>
            <td><input type="text" name="maloai" disabled></td>
        </tr>
        <tr>
            <td>Tên danh mục</td>
            <td><input type="text" value="<?php if(isset($name)&&($name!="")) echo $name; ?>" name="tendanhmuc"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
        </tr>
    </form>
</table>