<?php
    include_once("./controller/cNguoiDung.php");
    if(isset($_REQUEST["luuTG"])){
        $ThoiGian = $_REQUEST['thoiGian'];
        $GhiChu = $_REQUEST['ghiChu'];
        $Luu = uTG($ThoiGian, $GhiChu);
        if($Luu){
            echo "<script>arlert('Cập nhật thành công!');</script>";
        } else{
            echo "<script>arlert('Không thể cập nhật!');</script>";
        }
    }
    
    if(isset($_REQUEST["luuTT"])){
        $TenND = $_REQUEST['fullname'];
        $Pass = $_REQUEST['password'];
        $SDT = $_REQUEST['phone'];
        $Email = $_REQUEST['email'];
        $DiaChi = $_REQUEST['diachi'];
        $NgaySinh = $_REQUEST['ngaysinh'];
        $ThoiGian = $_REQUEST['thoiGian'];
        $Luu = uTT($TenND, $Pass, $SDT, $Email, $DiaChi, $NgaySinh, $ThoiGian);
        if($Luu){
            echo "<script>arlert('Cập nhật thành công!');</script>";
        } else{
            echo "<script>arlert('Không thể cập nhật!');</script>";
        }
    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cá nhân</title>
    <link rel="stylesheet" href="../assets/style.css">
    <style>
        input{
            width: 200px;
        }
        #luu{
            width: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thông tin người dùng</h1>
        <form method="post">
            <table>
                <tr>
                    <td>
                        <label for="fullname">Họ và tên:</label>
                    </td>
                    <td colspan = "3">
                        <input type="text" id="fullname" name="fullname" value="
                        <?php
                            // $username = $_POST["username"];
                            // $Ten = $_POST["fullname"];
                            if(isset($_SESSION['username'])){
                                echo "select tenNguoiDung from nguoidung where username = '$username'";
                            }
                        ?>
                        ">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Mật khẩu:</label>
                    </td>
                    <td colspan="3">
                        <input type="password" id="password" name="password" value="
                        <?php
                            if(isset($_SESSION['username'])){
                                echo "select matKhau from nguoidung where username = '$username'";
                            }
                        ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email:</label>
                    </td>
                    <td colspan="3">
                        <input type="email" id="email" name="email" value="
                        <?php
                            if(isset($_SESSION['username'])){
                                echo "select email from nguoidung where username = '$username'";
                            }
                        ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="phone">Số điện thoại:</label>
                    </td>
                    <td colspan="3">
                        <input type="text" id="phone" name="phone" value="
                        <?php
                            if(isset($_SESSION['username'])){
                                echo "select soDT from nguoidung where username = '$username'";
                            }
                        ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="ngaysinh">Ngày sinh:</label>
                    </td>
                    <td colspan="3">
                        <input type="text" id="ngaysinh" name="ngaysinh" value="
                        <?php
                            if(isset($_SESSION['username'])){
                                echo "select ngaySinh from nguoidung where username = '$username'";
                            }
                        ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="diachi">Địa chỉ:</label>
                    </td>
                    <td colspan="3">
                        <input type="text" id="diachi" name="diachi" value="
                        <?php
                            if(isset($_SESSION['username'])){
                                echo "select diaChi from nguoidung where username = '$username'";
                            }
                        ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="submit" name="luuTT" value="Lưu" id="luuTT">
                    </td>
                </tr>
            </table>
        </form>
        <br>
        <h1>Thiết lập nhắc nhở</h1>
        <form method="post">
            <table>
                <tr>
                    <td>
                        <label for="thoiGian">Thời gian nhắc nhở:</label>
                    </td>
                    <td>
                        <input type="time" id="thoiGian" name="thoiGian" value="
                        <?php
                            if(isset($_SESSION['username'])){
                                echo "select thoiGian from thoigiannhacnho where username = '$username'";
                            }
                        ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="reminder_message">Nội dung nhắc nhở:</label>
                    </td>
                    <td>
                        <input type="text" id="ghiChu" name="ghiChu" value="
                        <?php
                            if(isset($_SESSION['username'])){
                                echo "select ghiChu from thoigiannhacnho where username = '$username'";
                            }
                        ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="luuTG" value="Lưu" id="luuTG">
                    </td>
                </tr>
            </table>
            <br>
    <br>
            
            <br>
    <br>
            
        </form>
    </div>
</body>
</html>
