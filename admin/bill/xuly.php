<?php
    $conn = mysqli_connect('localhost','root','','duan1_2021'); 
    require('../../carbon/autoload.php');
    use Carbon\Carbon;
    use Carbon\CarbonInterval;
    $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

    if(isset($_GET['code'])){
        $code_bill = $_GET['code'];
        $sql_update = "UPDATE bill SET bill_status=1 WHERE code_bill='".$code_bill."'";
        $sql = mysqli_query($conn,$sql_update);
        // thông kê doanh thu
        $sql_lietke_dh = "SELECT * FROM bill_detail,sanpham WHERE bill_detail.id_sp=sanpham.id_sp 
        AND bill_detail.code_bill='$code_bill' ORDER BY bill_detail.id DESC";
        $query_lietke_dh = mysqli_query($conn,$sql_lietke_dh);

        $sql_thongke = "SELECT * FROM thongke WHERE ngaydat='$now'";
        $query_thongke = mysqli_query($conn,$sql_thongke);
        $soluongmua = 0;
        $doanhthu = 0;

        while($row = mysqli_fetch_array($query_lietke_dh)){
            $soluongmua+=$row['soluongmua'];
            $doanhthu+=$row['giasp']; 
        }

        if(mysqli_num_rows($query_thongke)==0){
            $soluongban = $soluongmua;
            $doanhthu = $doanhthu;
            $donhang = 1;
            $sql_update_thongke = mysqli_query($conn,"INSERT INTO thongke (ngaydat,soluongban,doanhthu,donhang) 
            VALUE ('$now', '$soluongban','$doanhthu','$donhang')");
        }elseif(mysqli_num_rows($query_thongke)!=0){
            while($row_tk = mysqli_fetch_array($query_thongke)){
                $soluongban = $row_tk['soluongban']+$soluongban;
                $doanhthu = $row_tk['doanhthu']+$doanhthu;
                $donhang = $row_tk['donhang']+1;
                $sql_update_thongke = mysqli_query($conn,"UPDATE thongke SET 
                soluongban='$soluongban',doanhthu='$doanhthu',donhang='$donhang' WHERE ngaydat='$now'");
            }
        }

        header('Location:../../admin/index.php?act=listbill');
    } 
    
?>