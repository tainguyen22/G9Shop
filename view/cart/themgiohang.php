<?php
    session_start();
    include('../../model/pdo.php');
    include('../../model/sanpham.php');
    include('../../model/cart.php');
    //them so luong
    if(isset($_GET['cong'])){
        $id=$_GET['cong'];
    
        foreach($_SESSION['mycart'] as $cart){
            if($cart['id']!=$id){
                $product[] = array('tensp'=>$cart['tensp'], 'id'=>$cart['id'], 'soluong'=>$cart['soluong'],
                'giasp'=>$cart['giasp'], 'image'=>$cart['image'], 'name'=>$cart['name'], 'luotxem'=>$cart['luotxem'],'so_luong'=>$cart['so_luong']);
                $_SESSION['mycart'] = $product;
            }else{
                $tangsoluong = $cart['soluong'] + 1;
                if($cart['soluong']< $cart['so_luong']){  
                    $product[] = array('tensp'=>$cart['tensp'], 'id'=>$cart['id'], 'soluong'=>$tangsoluong,
                    'giasp'=>$cart['giasp'], 'image'=>$cart['image'], 'name'=>$cart['name'], 'luotxem'=>$cart['luotxem'],'so_luong'=>$cart['so_luong']);
                }else{
                    $product[] = array('tensp'=>$cart['tensp'], 'id'=>$cart['id'], 'soluong'=>$cart['soluong'],
                    'giasp'=>$cart['giasp'], 'image'=>$cart['image'], 'name'=>$cart['name'], 'luotxem'=>$cart['luotxem'],'so_luong'=>$cart['so_luong']);
                }
                $_SESSION['mycart'] = $product;
            }
        }
        header('Location:../../index.php?act=viewcart');
    }
    //tru so luong
    if(isset($_GET['tru'])){
        $id=$_GET['tru'];
        foreach($_SESSION['mycart'] as $cart){
            if($cart['id']!=$id){
                $product[] = array('tensp'=>$cart['tensp'], 'id'=>$cart['id'], 'soluong'=>$cart['soluong'],
                        'giasp'=>$cart['giasp'], 'image'=>$cart['image'], 'name'=>$cart['name'], 'luotxem'=>$cart['luotxem'],'so_luong'=>$cart['so_luong']);
                $_SESSION['mycart'] = $product;
            }else{
                $giamsoluong = $cart['soluong'] - 1;
                if($cart['soluong']>1){
                    $product[] = array('tensp'=>$cart['tensp'], 'id'=>$cart['id'], 'soluong'=>$giamsoluong,
                        'giasp'=>$cart['giasp'], 'image'=>$cart['image'], 'name'=>$cart['name'], 'luotxem'=>$cart['luotxem'],'so_luong'=>$cart['so_luong']);
                }else{
                    $product[] = array('tensp'=>$cart['tensp'], 'id'=>$cart['id'], 'soluong'=>$cart['soluong'],
                    'giasp'=>$cart['giasp'], 'image'=>$cart['image'], 'name'=>$cart['name'], 'luotxem'=>$cart['luotxem'],'so_luong'=>$cart['so_luong']);
                }
                $_SESSION['mycart'] = $product;
            }
        }
        header('Location:../../index.php?act=viewcart');
    }
    //xoa san pham
    if(isset($_SESSION['mycart'])&&isset($_GET['xoa'])){
        $id=$_GET['xoa'];
        foreach($_SESSION['mycart'] as $cart){
            if($cart['id']!=$id){
                $product[] = array('tensp'=>$cart['tensp'], 'id'=>$cart, 'soluong'=>$cart['soluong'],
                'giasp'=>$cart['giasp'], 'image'=>$cart['image'], 'name'=>$cart['name'], 'luotxem'=>$cart['luotxem'],'so_luong'=>$cart['so_luong']);
            }
            $_SESSION['mycart'] = $product;
            header('Location:../../index.php?act=viewcart');
        }
    }
    //xoa tat ca
    if(isset($_GET['xoatatca'])&&$_GET['xoatatca']==1){
        unset($_SESSION['mycart']);
        header('Location:../../index.php?act=viewcart');
    }
    //them san pham vao gio hang
    if(isset($_POST['addtocart'])){
        // session_destroy();
        $id=$_GET['idsp'];
        $soluong = 1;
        if (isset($_GET['idsp'])&&($_GET['idsp']>0)) {
            $id=$_GET['idsp'];
            $row = loadone_sanpham($id);
            extract($row);
        }
        if($row){
            $new_product = array(array('tensp'=>$row['tensp'], 'id'=>$id, 'soluong'=>$soluong,
            'giasp'=>$row['giasp'], 'image'=>$row['image'], 'name'=>$row['name'], 'luotxem'=>$row['luotxem'],'so_luong'=>$row['so_luong']));
            //kiem tra session gio hang ton tai
            if(isset($_SESSION['mycart'])){
                $found = false;
                foreach($_SESSION['mycart'] as $cart){
                    //neu du lieu trung
                    if($cart['id']==$id){
                        $product[] = array('tensp'=>$cart['tensp'], 'id'=>$cart['id'], 'soluong'=>$soluong+1,
                        'giasp'=>$cart['giasp'], 'image'=>$cart['image'], 'name'=>$cart['name'], 'luotxem'=>$cart['luotxem'],'so_luong'=>$cart['so_luong']);
                        $found = true;
                    }else{
                        //neu du lieu k trung
                        $product[] = array('tensp'=>$cart['tensp'], 'id'=>$cart['id'], 'soluong'=>$cart['soluong'],
                        'giasp'=>$cart['giasp'], 'image'=>$cart['image'], 'name'=>$cart['name'], 'luotxem'=>$cart['luotxem'],'so_luong'=>$cart['so_luong']);
                    }
                }
                if($found == false){
                    //lien ket new_product voi product
                    $_SESSION['mycart']=array_merge($product,$new_product);
                }else{
                    $_SESSION['mycart']=$product;
                }
            }else{
                $_SESSION['mycart'] = $new_product;
            }
        }
        header('Location:../../index.php?act=viewcart');
     }
?>