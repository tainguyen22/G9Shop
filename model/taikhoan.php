<?php
    function insert_taikhoan($fullname, $email, $user, $pass, $address, $city, $phone, $hinh){
        $sql = "INSERT INTO taikhoan(fullname,email,user,pass,address,city,phone,hinh) VALUES ('$fullname','$email', '$user', '$pass', '$address', '$city', '$phone', '$hinh')";
        pdo_execute($sql);
    }

    function check_user($email, $pass){
        $sql = "SELECT * FROM taikhoan where email='".$email."' AND pass='".$pass."'";
        $tk = pdo_query_one($sql);
        return $tk;
    }

    function update_taikhoan($fullname, $email, $user, $pass, $address ,$city ,$phone ,$hinh, $id){
        $sql = "UPDATE taikhoan SET fullname='".$fullname."' ,email='".$email."',user='".$user."', pass='".$pass."', address='".$address."', city='".$city."' ,phone='".$phone."' , hinh='".$hinh."' where id=".$id;
        pdo_execute($sql);
    }

    function loadall_taikhoan(){
        $sql = "SELECT * FROM taikhoan order by id asc";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }

    function delete_taikhoan($id){
        $sql = "DELETE FROM taikhoan WHERE id=".$id;
        pdo_execute($sql);
    }

    function quenmk($email,$mkm){
        require "PHPMailer-master/src/PHPMailer.php"; 
        require "PHPMailer-master/src/SMTP.php"; 
        require 'PHPMailer-master/src/Exception.php'; 
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        try {
            $mail->SMTPDebug = 0; //0,1,2: chế độ debug
            $mail->isSMTP();  
            $mail->CharSet  = "utf-8";
            $mail->Host = 'smtp.gmail.com';  //SMTP servers
            $mail->SMTPAuth = true; // Enable authentication
            $mail->Username = 'group9.yshop111@gmail.com'; // SMTP username
            $mail->Password = 'tai22072000';   // SMTP password
            $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
            $mail->Port = 465;  // port to connect to                
            $mail->setFrom('group9.yshop111@gmail.com', 'Y-SHOP' ); 
            $mail->addAddress($email); 
            $mail->isHTML(true);  // Set email format to HTML
            $mail->Subject = 'Mật khẩu của bạn';
            $noidungthu = " <p>Bạn nhận được thư này do yêu cầu lấy lại mật khẩu</p></br>
               Mật khẩu của bạn là:
            ".$mkm; 
            $mail->Body = $noidungthu;
            $mail->smtpConnect( array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            ));
            $mail->send();
            echo 'Đã gửi mail xong';
        } catch (Exception $e) {
            echo 'Error: ', $mail->ErrorInfo;   
        }
    }
?> 