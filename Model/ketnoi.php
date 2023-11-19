 
<?php
    class conDB{
        function connectDB(& $conn){
            $conn = mysqli_connect("localhost","root","","mydayhandbook");
            mysqli_set_charset($conn, "utf8");
            // if (!$conn){
            //     die("connect failed:" . mysqli_connect_error());
            //     return false;
            // }
            // else{
            //     return true;
            // }
            if ($conn){
                return mysqli_select_db($conn, "mydayhandbook");
            } else {
                return false;
            }
        }

        function disconnectDB($conn){
            mysqli_close($conn);
        }
        
    }
?>