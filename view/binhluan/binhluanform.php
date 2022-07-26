<?php 
include '../../model/pdo.php';
include '../../model/binhluan.php';
include '../../global.php';
    session_start();
    $idpro=$_REQUEST['idpro'];
    $dsbl=load_all_binhluan($idpro);
?>
<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="images/favicon.png">
      <title>Welcome to FlatShop</title>
      <link href="../css/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' 
      rel='stylesheet' type='text/css'>
      <link href="../css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen"/>
      <link href="../css/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link href="../css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="../css/comment.css">
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>

<body>


            <div class="chat-messages" id="chat-messages">
                <?php
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                foreach ($dsbl as $bl) {
                    extract($bl);
                    $img = "$img_path".$hinh;
                   
                
                ?>  
                    <div id="chat-messages-inner">
                        <p id="msg-1" class="user-laukik" style="display: block;"><span class="msg-block"><img
                              src="<?php echo $img?>" alt=""><strong><?php echo $user?></strong> <span class="time">-
                              <?php echo $ngaybinhluan?></span><span class="msg"><?php echo $noidung?></span></span></p>
                      
                    </div>
                    <?php }?>
              
              </div>
        <div class="chat-message well">
        <?php if(isset($_SESSION['user'])){ extract($_SESSION['user'])?>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="POST"> 
                <span class="input-box">
                <input type="hidden" name="id_bl" >
                <input type="hidden" name="idpro" value="<?=$idpro?>">
                <input type="text" name="noidung" id="msg-box">
                <input type="submit" name="guibinhluan" class="btn btn-success" value="Gửi bình luận">
                </span>
            </form>
            <?php }else{?>
                   <p style="text-align: center;color: red;">!!! Đăng nhập để bình luận !!!</p> 
             <?php }?>
        </div>
        <?php
       
        if (isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])) {
            $id_bl = $_POST['id_bl'];
            $noidung = $_POST['noidung'];
            $iduser = $_SESSION['user']['id'];
            $idpro = $_POST['idpro'];
            $ngaybinhluan = date('h:i:sa d/m/Y');
            insert_binhluan($id_bl,$iduser,$idpro,$noidung,$ngaybinhluan);
            header("Location: ".$_SERVER['HTTP_REFERER']);
        };
        ?>

    </div>
</body>

</html>