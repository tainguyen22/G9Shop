<?php
    function loadall_thongke(){
        $sql = "SELECT danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id_sp) as countsp, min(sanpham.giasp) as mingiasp, max(sanpham.giasp) as maxgiasp, avg(sanpham.giasp) as avggiasp";
        $sql.=" FROM sanpham left join danhmuc on danhmuc.id=sanpham.id_danhmuc";
        $sql.=" group by danhmuc.id order by danhmuc.id desc";
        $listthongke= pdo_query($sql);
        return $listthongke;
    }
    function viewcart($xoa){
        global $img_path;
        $tong = 0;
            $i = 0;
            if(isset($_SESSION['mycart'])){
                if ($xoa==1) {
                    $xoasp_th = '<th>Xóa</th>';
                }else {
                    $xoasp_th='';
                }
                echo '
                    <thead>
                        <tr>
                        <th>
                            Hình ảnh
                        </th>
                        <th>
                            Thông tin
                        </th>
                        <th>
                            Giá
                        </th>
                        <th>
                            Số lượng
                        </th>
                        <th>
                            Thành tiền
                        </th>
                            '.$xoasp_th.'
                        </tr>
                    </thead>';
                    foreach ($_SESSION['mycart'] as $cart) {
                        $hinh = $img_path.$cart['image'];
                         $thanhtien = $cart['giasp'] * $cart['soluong'];
                        $tong+=$thanhtien;
                        $i+=1;
                        if ($xoa==1) {
                            $xoasp_td = '<td><a href="view/cart/themgiohang.php?xoa='.$cart['id'].'"><img src="view/image/remove.png" alt=""></a></td>';
                            $cong_sp = '<a href="view/cart/themgiohang.php?cong='.$cart['id'].'"><i class="fa fa-plus" aria-hidden="true"></i></a>';
                            $tru_sp = '<a href="view/cart/themgiohang.php?tru='.$cart['id'].'"><i class="fa fa-minus" aria-hidden="true"></i></a>';
                            $td = '<td></td>';
                            $total = '<tbody>
                                        <tr>
                                            <td>
                                                Tổng cộng: 
                                            <td>
                                            '.number_format($tong,0,',','.').'đ'.'
                                           
                                        </tr>
                                    </tbody>';
                        }else {
                            $xoasp_td='';
                            $cong_sp='';
                            $tru_sp='';
                            $td='';
                        }
                        echo '
                        <tbody>
                            <tr>
                                <td>
                                <img src="'.$hinh.'" alt="">
                                </td>
                                <td>
                                <div class="shop-details">
                                    <div class="productname">
                                    '.$cart['tensp'].'
                                    </div>
                                    <p>
                                    <a class="review_num" href="">
                                        '.$cart['luotxem'].' Review(s)
                                    </a>
                                    </p>
                                    <div class="color-choser">
                                    <span class="text">
                                        Số lượng còn : 
                                    </span>
                                    <ul>
                                      '.$cart['so_luong'].'  
                                    </ul>
                                    </div>
                                    <p>
                                    Thương hiệu : 
                                    <strong class="pcode">
                                        '.$cart['name'].'
                                    </strong>
                                    </p>
                                </div>
                                </td>
                                <td>
                                <h5>
                                    '.number_format($cart['giasp'],0,',','.').'đ'.'
                                </h5>
                                </td>
                                <td>
                                <h6>
                                    '.$cong_sp.'
                                    '.$cart['soluong'].'
                                    '.$tru_sp.'
                                </h6>
                                </td>
                                <td>
                                <h5>
                                    <strong class="red">
                                    '.number_format($thanhtien,0,',',',').'đ'.'
                                    </strong>
                                </h5>
                                </td>
                                '.$xoasp_td.'
                                </tr>
                            </tbody>';
                        }
                            echo ''.$total.'';
                    
            }
    }

    function bill_chi_tiet($listbill){
        global $img_path;
        $tong = 0;
            $i = 0;
             
            echo
                '<tr>
                    <th>Hình</th>
                    <th>Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    
                </tr>';
            foreach ($listbill as $cart) {
                $hinh = $img_path.$cart['image'];
                $tong+=$cart['thanhtien'];
                $i+=1;
                
            echo
                '<tr>
                    <td><img src ="'.$hinh.'" alt="" height="80px"></td>
                    <td>'.$cart['tensp'].'</td>
                    <td>'.$cart['giasp'].'</td>
                    
                    <td>'.$cart['soluong'].'</td>
                    
                    <td>'.$cart['thanhtien'].'</td>
                    
                </tr>
                    
                <tr>
                    <td colspan="4">Tổng đơn hàng</td>
                    <td>'.$tong.'</td>
                </tr>';
            
                }
            }
            // $tong=0;
            // foreach ($_SESSION['mycart'] as $cart) {
            //      $thanhtien = $cart['giasp'] * $cart['soluong'];
            //      $tong+=$thanhtien;
            //     }
               
    function tongdonhang(){
        $tong = 0;
            foreach ($_SESSION['mycart'] as $cart) {
                $thanhtien = $cart['giasp'] * $cart['soluong'];
                $tong+=$thanhtien;
            } 
            return $tong;
    }

    function insert_bill($code_oder, $iduser, $fulllname, $email, $address, $phone, $pttt, $ngaydathang, $tongdonhang){
        $sql = "INSERT INTO bill (code_bill, iduser, bill_name, bill_email, bill_address, bill_phone, bill_pttt, ngaydathang, total) 
                VALUES ('$code_oder', '$iduser', '$fulllname', '$email','$address', '$phone', '$pttt', '$ngaydathang', '$tongdonhang')";
        return pdo_execute_return_lastInsertId($sql);
    } 

    function insert_cart($iduser, $idpro, $image, $tensp, $giasp, $soluong, $thanhtien, $idbill){
        $sql = "INSERT INTO bill (iduser, idpro, image, tensp, giasp, soluong, thanhtien, idbill) 
                VALUES ('$iduser', '$idpro','$image', '$tensp', '$giasp', '$soluong', '$thanhtien', '$idbill')";
        return pdo_execute($sql);
    }

    function loadone_bill($id){
        $sql = "SELECT * FROM bill where id=".$id;
        $bill = pdo_query_one($sql);
        return $bill;
    }

    function loadall_cart($idbill){
        $sql = "SELECT * FROM bill where idbill=".$idbill;
        $listbill = pdo_query($sql);
        return $listbill;
    }

    function loadall_cart_count($idbill){
        $sql = "SELECT * FROM bill_detail where id_bill=".$idbill;
        $bill = pdo_query($sql);
        return sizeof($bill);
    }


    function loadall_bill($kyw="",$iduser=0){
        $sql = "SELECT * FROM bill where 1";
        if($iduser>0) $sql.=" AND iduser=".$iduser;
        if($kyw!="") $sql.=" AND id like '%".$kyw."%'";
        $sql.=" order by id desc";
        $listbill = pdo_query($sql);
        return $listbill;
    }

    function get_ttdh($n){
        switch ($n) {
            case '0':
                $tt = "Đơn hàng mới";
                break;
            case '1':
                $tt = "Đã xác nhận";
                break;
            case '2':
                $tt = "Đang giao hàng";
                break;
            case '3':
                $tt = "Đã giao hàng";
                break;
            
            default:
                $tt = "Đơn hàng mới";
                break;
        }
        return $tt;
    }
