<?php
    //start page
    $display = 0;
    if (array_key_exists('menuNgayCuaToi', $_GET)) {
        $display = 1;
    }elseif(array_key_exists('dieuToiBietOn', $_GET)){
        $display = 2;
    }elseif(array_key_exists('index.php', $_GET)) {
        $display = 0;
    }elseif(array_key_exists('motThangNhinLai', $_GET)){
        $display = 3;
    }elseif(array_key_exists('ThoiQuen', $_GET)){
        $display = 4 ;
    }else if(array_key_exists('Canhan', $_GET)){
        $display = 5;
    }elseif(array_key_exists('Muctieu', $_GET)){
        $display = 6;
    }elseif(array_key_exists('Sukien', $_GET)){
        $display = 7;
    }

    switch ($display) {
        case 0:
            include_once("Sukien/index.php");
            break;
        case 1:
            include_once("NgayCuaToi/content-ngaycuatoi.php");
            break;
        case 2:
            echo "ahaha";
            break;
        case 3:
            include_once("BieuDoCamXuc/index.php");
            break;
        case 4:
            include_once("ThoiQuen/index.php");
            break;
        case 5:
            include_once("taiKhoanNguoiDung/canhan.php");
            break;
        case 6:
            include_once("mucTieuThang/MTT.php");
            break;
        case 7:
            include_once("SuKien/index.php");
            break;
        default:
            echo "page not found 404!";
            break;
            
        
    }
    //end page

//     include_once("Controller/cBook.php");
//     $v = new controlBook();

//     if(isset($_REQUEST["Category"])){
//         $Cate = $_REQUEST["Category"];
//         $tblBook = $v ->getAllBookByCategory($Cate);
//     }
//     elseif(isset($_REQUEST["txtSearch"])){
//         $find = $_REQUEST["txtSearch"];
//         $tblBook = $v ->SearchAllBookByCategory($find);
//     }else{
//         // $page = $_REQUEST["page"];
//         // $count = $v ->countBook();
//         // $Bookperpage = 8;
//         // $tblBook = $v ->getAllBookPage($page,$Bookperpage);
//         $tblBook = $v ->getAllBook();
//     }


//     if($tblBook){
//         if(mysqli_num_rows($tblBook) > 0){
//             $dem = 0;
//             // create table
            
//             echo "<table style='width: 100%;'>";

//             while ($row = mysqli_fetch_assoc($tblBook)){
//                 if($dem == 0){
//                     echo "<tr>";
//                 }
//                 $image = $row['BookImage'];

//                 // echo "<img src='image/$image' alt='$image' />";
//                 echo "<td style='width: 25%; height: 100px'>";
//                 echo "<img width='200px' height='200px'  src='image/$image'  />";
//                 echo "<br>".$row['BookName']."<br>".$row['BookPrice']."<br>"."</td>";
//                 $dem ++;
//                 if ($dem % 4 == 0){
//                     echo "</tr>";
//                     $dem = 0;
//                 }
//             }
//             echo "</table>";
            
//         }else{
//             echo " 0 result";
//         }
//     }else{
//         echo "error";
//     }
// 
?>