<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="view/image/logo.png">
      <title>Welcome to G9Shop</title>
      <link href="view/css/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' 
      rel='stylesheet' type='text/css'>
      <link href="view/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="view/css/flexslider.css" type="text/css" media="screen"/>
      <link href="view/css/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link href="view/css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="view/css/comment.css">
      <link rel="stylesheet" href="view/css/billconfirm.css">
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>
   <body id="home">
      <div class="wrapper">
<?php
error_reporting(E_ERROR | E_PARSE);
    // session_destroy();
    session_start();
    include "model/pdo.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "model/taikhoan.php";
    include "model/cart.php";
    include "global.php";
    $dsdm = loadall_danhmuc();
    include "view/header.php";
    // if (!isset($_SESSION['mycart_item'])) $_SESSION['mycart_item']=[];
        

    // $spnew = loadall_sanpham_home();
    $dst3 = loadall_sanpham_top3();
    $dst10 = loadall_sanpham_top8();

    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act = $_GET['act'];
        switch ($act) {
            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            case 'lienhe':
                include "view/lienhe.php";
                break;
            case 'dangxuat':
                include "view/taikhoan/logout.php";
                break;
            case 'viewcart':
                include "view/cart/viewcart.php";
                break;
            case 'bill':
                include "view/cart/bill.php";
                break;
            case 'mybill':
                $listbill = loadall_bill($_SESSION['user']['id']);
                include "view/cart/mybill.php";
                break;
            case 'billconfirm':
                    $code_oder = rand(0,9999);
                    if(isset($_SESSION['user'])) $iduser = $_SESSION['user']['id'];
                    else $id=0;
                    $fulllname = $_SESSION['user']['fullname'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    $pttt = $_POST['pttt'];
                    $ngaydathang = date('d/m/Y');
                    $tongdonhang = tongdonhang();
                    if(isset($_SESSION['user'])){
                        $id_kh=$_SESSION['user']['id'];
                    }
                    $idbill = insert_bill($code_oder, $iduser, $fulllname, $email, $address, $phone, $pttt, $ngaydathang, $tongdonhang);
                    foreach ($_SESSION['mycart'] as $cart) {
                        $soluongmua = $cart['soluong'];
                        $idsp=$cart['id'];
                        $sql="INSERT INTO bill_detail (id_bill,id_sp,id_kh,code_bill,soluongmua) value ('".$idbill."','".$idsp."','".$id_kh."','".$code_oder."','".$soluongmua."')";
                        pdo_execute($sql,$idbill,$idsp,$id_kh,$code_oder,$soluongmua);
                    }
                include "view/cart/billconfirm.php";
                break;
            case 'dangky':
                if((isset($_POST['dangky']))&&($_POST['dangky']!="")){
                    $fulllname = $_POST['fullname'];
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $rpass = $_POST['rpass'];
                    $address = $_POST['address'];
                    $city = $_POST['city'];
                    $phone = $_POST['phone'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                        //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    }else{
                       // echo "Sorry, there was an error uploading your file.";
                    }
                    if($pass != $rpass){
                        $thongbao = "Xác nhận mật khẩu không đúng. Vui lòng nhập lại!";
                    }else{
                        insert_taikhoan($fulllname, $email, $user, $pass, $address, $city, $phone, $hinh);
                        $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập!";
                        $_SESSION['user'] = $user;
                        $_SESSION['email'] = $email;
                    }
                    
                    
                }
                include "view/taikhoan/dangky.php";
                break;
            case 'login':
                include "view/taikhoan/login.php";
                break;
            // case 'dangnhap':
               
            //     if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
            //         $email = $_POST['email'];
            //         $pass = $_POST['pass'];
            //         $tk = check_user($email, $pass);
            //         if (is_array($tk)) {
            //             $_SESSION['user'] = $tk;
            //             header('location: index.php');
            //             $thongbao = "Đăng nhập thành công !";
            //         }else {
            //             $thongbao = "Tài khoản không tồn tại, vui lòng kiểm tra hoặc đăng ký!";
            //         }
            //       }
                  
            //     break;
                
            case 'edit_taikhoan':
                if((isset($_POST['capnhat']))&&($_POST['capnhat']!="")){
                    $fulllname = $_POST['fullname'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $rpass = $_POST['rpass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $city = $_POST['city'];
                    $phone = $_POST['phone'];
                    $id = $_POST['id'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                        } else {
                        // echo "Sorry, there was an error uploading your file.";
                        }
                        if($pass != $rpass){
                            $thongbao = "Xác nhận mật khẩu không đúng. Vui lòng nhập lại!";
                        }else{
                            update_taikhoan($fullname, $email, $user, $pass, $address ,$city ,$phone ,$hinh, $id);
                            $_SESSION['user'] = check_user($user, $pass);
                            header('Location: index.php?act=edit_taikhoan'); 
                        }
                }
                include "view/taikhoan/edit_taikhoan.php";
                break;
            case 'quenmk':
                $error = "";
                if(isset($_POST['quenmk'])&&($_POST['quenmk'])){
                    $email = $_POST['email'];
                    $conn = new PDO("mysql:host=localhost;dbname=duan1_2021;charset=utf8","root","");
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $sql ="SELECT * FROM taikhoan where email=?";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute([$email]);
                    $count = $stmt->rowCount();
                    if($count == 0){
                        $error = "Email nhập chưa đăng ký tài khoản";
                    }else{
                        $mkm = substr(md5(rand(0,999999)),0,8);
                        $sql = "UPDATE taikhoan SET pass=? WHERE email=?";
                        $stmt = $conn->prepare($sql);
                        $stmt-> execute([$mkm,$email]);
                        quenmk($email,$mkm);
                    }
                }else{

                }
                include "view/taikhoan/quenmk.php";
                break;
            case 'sanpham':
                if (isset($_POST['kyw'])&&($_POST['kyw']!="")) {
                    $kyw = $_POST['kyw'];
                }else {
                    $kyw = "";
                }
                if (isset($_GET['iddm'])&&($_GET['iddm']>0)) {
                    $iddm = $_GET['iddm'];
                    
                }else {
                    $iddm = 0;
                }
                $dssp = loadall_sanpham($kyw,$iddm);
                $tendm = load_tendm($iddm);
                include "view/sanpham.php";
                break;

            case 'sanphamct':
                if (isset($_GET['idsp'])&&($_GET['idsp']>0)) {
                    $id = $_GET['idsp'];
                    $onesp = loadone_sanpham($id);
                    extract($onesp);
                    $sp_cungloai = load_sanpham_cungloai($id, $id_danhmuc);
                    include "view/sanphamct.php";
                }else {
                    include "view/home.php";
                }
                
                break;  
            default:
                include "view/home.php";
                break;
        }
    }else {
        include "view/home.php";
    }
    include "view/footer.php";
?>
</div>
<!-- Bootstrap core JavaScript==================================================-->
<script type="text/javascript" src="view/js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="view/js/jquery.easing.1.3.js"></script>
	  <script type="text/javascript" src="view/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="view/js/jquery.sequence-min.js"></script>
	  <script type="text/javascript" src="view/js/jquery.carouFredSel-6.2.1-packed.js"></script>
	  <script defer src="view/js/jquery.flexslider.js"></script>
      <script type="text/javascript" src='view/js/jquery.elevatezoom.js'></script>
	  <script type="text/javascript" src="view/js/script.min.js" ></script>
      <script type="text/javascript" src="view/js/resgist.js" ></script>
</body>
</html>