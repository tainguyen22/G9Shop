<?php
    function loadall_sanpham_home(){
        $sql = "SELECT * FROM sanpham";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function loadall_sanpham_top8(){
        $sql = "SELECT * FROM sanpham where 1 order by luotxem desc limit 0,8";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function loadall_sanpham_top3(){
        $sql = "SELECT * FROM sanpham where 1 order by luotxem desc limit 0,3";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function loadall_sanpham($kyw="",$iddm=0){
        $sql = "SELECT * FROM sanpham where 1";
        if($kyw!=""){
            $sql.=" and tensp like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and id_danhmuc ='".$iddm."'";
        }
        $sql.=" group by id_sp";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function loadone_sanpham($idsp){
        $sql = "SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc=danhmuc.id and sanpham.id_sp=".$idsp;
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function load_tendm($iddm){
        if ($iddm>0) {
            $sql = "SELECT * FROM danhmuc where id=".$iddm;
            $dm = pdo_query_one($sql);
            extract($dm);
            return $name;
        }else {
            return "";
        }
        
    }

    function load_sanpham_cungloai($id,$id_danhmuc){
        $sql = "SELECT * FROM sanpham where id_danhmuc=".$id_danhmuc." AND id_sp <> ".$id;
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function insert_sanpham($tensp, $giasp, $so_luong, $hinh, $mota, $iddm){
        $sql = "INSERT INTO sanpham(tensp,giasp,so_luong,mota,image,id_danhmuc) VALUES ('$tensp', '$giasp','$so_luong', '$mota' , '$hinh' , '$iddm')";
        pdo_execute($sql);
    }


    function delete_sanpham($id){
        $sql = "DELETE FROM sanpham where id_sp=".$id;
        pdo_execute($sql);
    }

    function update_sanpham($id, $tensp, $giasp, $so_luong, $mota, $hinh, $iddm){
        if($hinh!=""){
            $sql = "UPDATE sanpham SET tensp='".$tensp."', giasp='".$giasp."', so_luong='".$so_luong."', mota='".$mota."', image='".$hinh."', id_danhmuc='".$iddm."' where id_sp=".$id;
        }else {
            $sql = "UPDATE sanpham SET tensp='".$tensp."', giasp='".$giasp."', so_luong='".$so_luong."', mota='".$mota."', id_danhmuc='".$iddm."' where id_sp=".$id;
        }
        
        pdo_execute($sql);
    }
?>