<?php
function insert_kh($fullname,$user,$pass,$email,$address,$phone,$hinh,$kichhoat,$role){
    $sql="INSERT INTO taikhoan(fullname,user,pass,email,address,phone,hinh,kich_hoat,role) values('$fullname','$user' ,'$pass','$email','$address','$phone','$hinh','$kichhoat','$role') ";
    pdo_execute($sql);
}
function delete_kh($id){
    $sql="DELETE FROM taikhoan where id=".$id;
    pdo_execute($sql);
}
function load_all_kh(){
    $sql = "SELECT * FROM taikhoan order by id desc";
    $listkhachhang=pdo_query($sql);
    return $listkhachhang;
}
function load_one_kh($id){
    $sql="SELECT * FROM taikhoan where id=".$id;
    $khachhang=pdo_query_one($sql);
    return $khachhang;
}
function  update_kh($id,$fullname,$user,$pass,$email,$address,$phone,$hinh,$kichhoat,$role){
    if($hinh!="")
    $sql="UPDATE taikhoan set fullname ='".$fullname."' , user='".$user."' , pass='".$pass."' , email='".$email."' , address='".$address."' , phone='".$phone."' , hinh='".$hinh."' , kich_hoat='".$kichhoat."' , role='".$role."'  where id=".$id;
    else
    $sql="UPDATE taikhoan set fullname ='".$fullname."' , user='".$user."' , pass='".$pass."' , email='".$email."' , address='".$address."' , phone='".$phone."' , kich_hoat='".$kichhoat."' , role='".$role."'  where id=".$id;
   pdo_execute($sql);
}

?> 