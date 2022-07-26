<?php
    $conn = mysqli_connect('localhost','root','','duan1_2021');
    $sp_trang = 5;
	if(!isset($_GET['trang'])){
		$trang = 1;
	}else{
		$trang = $_GET['trang'];
	}
	$begin = ($trang - 1)*$sp_trang;
	$sql_pro = "SELECT * FROM sanpham, danhmuc
	WHERE sanpham.id_danhmuc=danhmuc.id ORDER BY sanpham.id_sp ASC LIMIT $begin,$sp_trang";
    $listsanpham = mysqli_query($conn, $sql_pro);

?>
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
                <div class="product-prop product-img">Id</div>
                <div class="product-prop product-dm">Tên SP</div>
                <div class="product-prop product-img">Hình ảnh</div>
                <div class="product-prop product-img">Giá SP</div>
                <div class="product-prop product-img">Số lượng</div>
                <div class="product-prop product-img">Tình trạng</div>
                <div class="product-prop product-img">Quản lý</div>
                <div class="clear-both"></div>
            </li>
        </ul>
    <?php
    $i = 0;
    foreach ($listsanpham as $sanpham){
        extract($sanpham);
        $suasp = "index.php?act=suasp&id=".$id_sp;
        $xoasp= "index.php?act=xoasp&id=".$id_sp;
        $hinhpath = "../upload/".$image;
        if(is_file($hinhpath)){
            $hinh = "<img src='".$hinhpath."' width='100'>";
        }else{
            $hinh = "no photo";
        }
    ?>
            <li>
                <div class="product-prop product-img"><?php echo $id_sp ?></div>
                <div class="product-prop product-dm"><?php echo $tensp ?></div>
                <div class="product-prop product-img"><?php echo $hinh ?></div>
                <div class="product-prop product-img"><?php echo $giasp ?></div>
                <div class="product-prop product-img"><?php echo $so_luong ?></div>
                <div class="product-prop product-img"><?php if($tinhtrang==1){
                    echo 'Ẩn';
                }else{
                    echo 'Kích hoạt';
                } 
                ?>
                </div>
                <div class="product-prop product-img">
                <a href="<?php echo $suasp ?>"><i class="fas fa-pencil-alt"></i></a> |
                <a href="<?php echo $xoasp ?>"><i class="fas fa-trash-alt"></i></a>  
                </div>
                <div class="clear-both"></div>
            </li>
            <hr>
    <?php
    }
    ?>
    <div class="buttons">
        <a href="index.php?act=addsp">Thêm sản phẩm mới</a>
        <div class="clear-both"></div>
    </div>
    <?php
        $conn = mysqli_connect('localhost','root','','duan1_2021');
        $sql_trang = mysqli_query($conn,"SELECT * FROM sanpham");
        $row_count = mysqli_num_rows($sql_trang);
        $trang = ceil($row_count/5);
    ?>
    <?php
        for($i=1;$i<=$trang;$i++){
    ?>
	<ul class="pagination home-product__pagination">

		<li class="pagination-item pagination-item--active">
			<a  href="index.php?act=listsp&trang=<?php echo $i ?>" class="pagination-item__link"><?php echo $i ?></a>
		</li>
		<?php
		}
		?>
	</ul>
</div>

</body>
</html>


