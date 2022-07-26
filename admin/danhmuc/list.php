
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

    <h1>Liệt kê danh mục sản phẩm</h1>
    <div class="recent-flex">
    <div class="project">
    <div class="card">
        <div class="product-items">
            <ul>
                <li class="product-item-heading">
                    <div class="product-prop product-thieu">Id</div>
                    <div class="product-prop product-thieu">Tên danh mục</div>
                    <div class="product-prop product-thieu">Quản lý</div>
                    <div class="clear-both"></div>
                </li>
            </ul>
        <?php
        $i = 0;
        foreach ($listdanhmuc as $danhmuc) {
            extract($danhmuc);
            $suadm = "index.php?act=suadm&id=".$id;
            $xoadm = "index.php?act=xoadm&id=".$id;
        ?>
                <li>
                    <div class="product-prop product-thieu"><?php echo $id ?></div>
                    <div class="product-prop product-thieu"><?php echo $name ?></div>
                    <div class="product-prop product-thieu">
                        <a href="<?php echo $xoadm ?>"><i class="fas fa-trash-alt"></i></a> | 
                        <a href="<?php echo $suadm ?>"><i class="fas fa-pencil-alt"></i></a>
                    </div>
                    <div class="clear-both"></div>
                </li>
                <hr>
        <?php
        }
        ?>
        <div class="buttons">
            <a href="index.php?act=adddm">Thêm danh mục mới</a>
            <div class="clear-both"></div>
        </div>
    </div>
    </div>
    </div>