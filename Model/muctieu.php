<?php
include_once('ketnoi.php');
    function addMucTieu($Chude,$MT1,$MT2,$MT3){
        $object = new conDB();
        $connection = $object->connectDB($conn);
            $p = new conDB();
            if ($connection) {
                $string1 = "insert into muctieuthang(ThangNam,ChuDeThang, username)";
                $string1 .= "values(N'".$year = getdate()-$month = getdate()."',".$Chude.")";
                $string2 = "insert into chitietmuctieu(MaMT,ThangNam,TenMucTieu)";
                $string2 .= "values('',N'".$year = getdate()-$month = getdate()."',".$MT1.")";
                $string2 .= "values('',N'".$year = getdate()-$month = getdate()."',".$MT2.")";
                $string2 .= "values('',N'".$year = getdate()-$month = getdate()."',".$MT3.")";
                $MucTieu = mysqli_query($connection,$string1.$string2);
                $p->disconnectDB($conn);
                return $MucTieu;
            } else {
                return false;
            }

        }