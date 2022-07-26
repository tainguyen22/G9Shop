<?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['dangnhap']);
        header('Location:../login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

            <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                DashBoard
            </h2>
            <div class="search-wrapper">
                <span class="las la-search">

                </span>
                <input type="search" name="" id="" placeholder="Tìm kiếm">
            </div>
            <?php
                if(isset($_SESSION['user'])){
                    extract($_SESSION['user']);
                    $img = "../upload/".$hinh;
            ?>
            <div class="user-wrapper">
                <img src="<?php echo $img ?>" alt="" width="30px" height="30px">
                <div>
                    <h4><?php echo $_SESSION['user']['user']?></h4>
                    <small>Suppwe admin</small>
                </div>
            </div>
            <?php }?>
        </header>
            
</body>
