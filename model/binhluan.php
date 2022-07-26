<?php
function insert_binhluan($id_bl,$iduser,$idpro,$noidung,$ngaybinhluan){
    $sql="INSERT INTO binhluan(id_bl,iduser,idpro,noidung,ngaybinhluan) values('$id_bl','$iduser','$idpro','$noidung','$ngaybinhluan')";
    pdo_execute($sql);
}
// function load_all_binhluan($idpro){
//    $sql = "SELECT * FROM binhluan where 1";
//     if($idpro > 0)$sql.=" AND idpro='".$idpro."' ";
//     $sql.=" order by id_bl desc";
//     $listbinhluan=pdo_query($sql);
//     return $listbinhluan;
// }
function load_all_binhluan($idpro){
    $sql = "SELECT binhluan.noidung,binhluan.ngaybinhluan,taikhoan.user,taikhoan.hinh FROM binhluan 
    JOIN taikhoan ON binhluan.iduser=taikhoan.id JOIN sanpham ON binhluan.idpro=sanpham.id_sp WHERE sanpham.id_sp=".$idpro;
     if($idpro > 0)$sql.=" AND idpro='".$idpro."' ";
     $sql.=" order by id_bl desc";
     $listbinhluan=pdo_query($sql);
     return $listbinhluan;
 }
function load_bl(){
    $sql = "SELECT sanpham.id_sp,sanpham.tensp, COUNT(binhluan.noidung) as 'soLuong', MIN(binhluan.ngaybinhluan) as 'cuNhat', MAX(binhluan.ngaybinhluan) as 'moiNhat' FROM binhluan JOIN sanpham ON binhluan.idpro = sanpham.id_sp GROUP BY sanpham.id_sp,sanpham.tensp HAVING soLuong > 0 ORDER BY soLuong desc";
    $listbinhluan=pdo_query($sql);
    return $listbinhluan;
}
function delete_bl($id_bl){
    $sql="DELETE FROM binhluan where id_bl=".$id_bl;
    pdo_execute($sql);
}
function load_blct($id_sp){
    $sql="SELECT binhluan.noidung,binhluan.ngaybinhluan,binhluan.id_bl,taikhoan.user,sanpham.id_sp FROM binhluan 
    JOIN taikhoan ON binhluan.iduser=taikhoan.id JOIN sanpham ON binhluan.idpro=sanpham.id_sp WHERE sanpham.id_sp=".$id_sp;
    $loadblct=pdo_query($sql);
    return $loadblct;
}

?>