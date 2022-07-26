<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="shortcut icon" href="../view/image/logo.png">
    <link rel="stylesheet" href="css/styleadmin.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-9/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> -->
    
</head>
<?php
 session_start();
if (isset($_SESSION['user'])&&($_SESSION['user']['role']==1)) {
?>
<body>
    <?php
    include('menu.php');
    ?>
    <div class="main-content">
    <?php 
        include('header.php');
    ?>
    <main>
<?php
// if (isset($_SESSION['user'])&&($_SESSION['user']['role']==1)) {
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/khachhang.php";
    include "../model/binhluan.php";
    include "../model/cart.php";

    //controller danh mục
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'adddm':
                // kiểm tra người dùng có click vào nút add hay không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai = $_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao = "Thêm thành công";
                }
            case 'dashboard':
                include "home.php";
                break;
            case 'listdm':
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm = loadone_danhmuc($_GET['id']);
                }
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update_danhmuc($id, $tenloai);
                    $thongbao = "Cập nhật thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;

            // controller sản phẩm

            case 'addsp':
                // kiểm tra người dùng có click vào nút add hay không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $so_luong = $_POST['soluong'];
                    $mota = $_POST['mota'];
                    $iddm = $_POST['iddm'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    }else{
                       // echo "Sorry, there was an error uploading your file.";
                      }
                    insert_sanpham($tensp, $giasp, $so_luong, $hinh, $mota, $iddm);
                    $thongbao = "Thêm thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/add.php";
                break;
            case 'listsp':
                if(isset($_POST['listok'])&&($_POST['listok'])){
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                }else{
                    $kyw = '';
                    $iddm = 0;   
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($kyw,$iddm);
                include "sanpham/list.php";
                break;
            case 'xoasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                }
                $listsanpham = loadall_sanpham("",0);
                include "sanpham/list.php";
                break;
            case 'suasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sanpham = loadone_sanpham($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/update.php";
                break;
            case 'updatesp':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id_sp = $_POST['id'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $so_luong = $_POST['so_luong'];
                    $mota = $_POST['mota'];
                    $iddm = $_POST['iddm'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    }else{
                       // echo "Sorry, there was an error uploading your file.";
                      }
                    update_sanpham($id_sp, $tensp, $giasp, $so_luong, $mota, $hinh, $iddm);
                    $thongbao = "Cập nhật thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham("",0);
                include "sanpham/list.php";
                break;
            case 'addtk':
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $fullname =$_POST['fullname'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email =$_POST['email'];
                    $address=$_POST['address'];
                    $phone =$_POST['phone'];
                    $hinh =$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                    $kichhoat =$_POST['kichhoat'];
                    $role =$_POST['role'];
                    insert_kh($fullname,$user,$pass,$email,$address,$phone,$hinh,$kichhoat,$role);
                    $thongbao = "Thêm thành công";
                }
                $listkhachhang= load_all_kh();
                include 'taikhoan/add.php';
                break;
            case 'dskh':
                $listkhachhang= load_all_kh();
                include 'taikhoan/list.php';
                break;
            case 'xoatk':
                if(isset($_GET['id'])&&($_GET['id'] > 0)){
                    delete_kh($_GET['id']);
                  }
                 $listkhachhang= load_all_kh();
                    include 'taikhoan/list.php';
                break;
            case 'suatk':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $khachhang =load_one_kh($_GET['id']);
                }  
                include 'taikhoan/update.php';
                break; 
            case 'updatetk ':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $id=$_POST['id'];
                    $fullname = $_POST['fullname'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                        } else {
                        // echo "Sorry, there was an error uploading your file.";
                        }
                    $kichhoat =$_POST['kichhoat'];
                    $role =$_POST['role'];
                    update_kh($id,$fullname,$user,$pass,$email,$address,$phone,$hinh,$kichhoat,$role);
                    $thongbao = "Thêm thành công";
                }
                $listkhachhang= load_all_kh();
                include 'taikhoan/list.php';
                break;     
            case 'dsbl':
                $listbinhluan=load_bl(0);
                // $listbinhluan=load_all_binhluan(0);
                include 'binhluan/list.php';
                break; 
            case 'ctbl':
                if(isset($_GET['id'])&&($_GET['id'] > 0)){
                $loadblct=load_blct($_GET['id']);
                }
                include 'binhluan/chitiet.php';
                break;
            case 'xoabl': 
                if(isset($_GET['id'])&&($_GET['id'] > 0)){
                    delete_bl($_GET['id']);
                    $thongbao = "Xóa thành công";
                    }
                    $loadblct=load_blct(0);
                include 'binhluan/chitiet.php';
                break;
            case 'listbill':
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw = $_POST['kyw'];
                }else {
                    $kyw = "";
                }
                $listbill = loadall_bill($kyw,0);
                include "bill/listbill.php";
                break;
            case 'thongke':
                $listthongke = loadall_thongke();
                include "thongke/list.php";
                break;
            case 'bieudo':
                $listthongke = loadall_thongke();
                include "thongke/bieudo.php";
                break;
            default:
                include "home.php";
                break;
                
        }
    }else{
        include "home.php";
    }
    include "footer.php";
}else{
header('Location:../index.php');
}
?>

</main>
</div>

</body>
</html>
