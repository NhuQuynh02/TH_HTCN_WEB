<?php
include_once('ketnoi.php'); 
//Hiển thị thông tin cá nhân
    function sTT($username,$TenND,$Pass,$SDT,$Email, $DiaChi, $NgaySinh){
        $object = new conDB();
        $connection = $object->connectDB($conn);
        $p = new conDB();
        if ($connection) {
            $string = "SELECT tenNguoiDung, matKhau, soDT, email, diaChi, ngaySinh FROM nguoidung where username = '$username'";                
            $table = mysqli_query($connection,$string);
            $p->disconnectDB($conn);
            return $table;
        } else {
            return false;
        }
    }
    //Cập nhật thông tin cá nhân
    function uTT($username,$TenND,$Pass,$SDT,$Email, $DiaChi, $NgaySinh){
        $object = new conDB();
        $connection = $object->connectDB($conn);
            $p = new conDB();
            if ($connection) {
                $string = "update nguoidung(tenNguoiDung, matKhau, soDT, email, diaChi, ngaySinh)";
                $string .= "values(N'".$TenND.", ".$Pass.", ".$SDT.", ".$Email.", ".$DiaChi.", ".$NgaySinh."')";
                $ThongTin = mysqli_query($connection,$string);
                $p->disconnectDB($conn);
                return $ThongTin;
            } else {
                return false;
            }

        }
        //Hiểm thị thời gian nhắc nhở
        function sTG($username,$ThoiGian,$GhiChu){
            $object = new conDB();
            $connection = $object->connectDB($conn);
            $p = new conDB();
            if ($connection) {
                $string = "SELECT thoiGian, ghiChu FROM thoigiannhacnho where username = '$username'";                
                $XemTG = mysqli_query($connection,$string);
                $p->disconnectDB($conn);
                return $XemTG;
            } else {
                return false;
            }
        }
        //Cập nhật thời gian nhắc nhở
        function uTG($ThoiGian,$GhiChu){
            $object = new conDB();
            $connection = $object->connectDB($conn);
                $p = new conDB();
                if ($connection) {
                    $string = "update thoigiannhacnho(thoiGian, ghiChu)";
                    $string .= "values(N'".$ThoiGian.", ".$GhiChu."')";
                    $ThoiGian = mysqli_query($connection,$string);
                    $p->disconnectDB($conn);
                    return $ThoiGian;
                } else {
                    return false;
                }
    
            }
