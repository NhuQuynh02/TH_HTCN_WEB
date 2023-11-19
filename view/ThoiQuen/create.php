<div class="habit">
<h4>Bạn muốn tập thói quen gì</h4> <br>
<form class ="formhabit" action="" method="post">
    <input type="text" class="txtThoiQuen" name ="taoThoiQuen" placeholder = "Hãy nhập thói quen muốn có"><br>
    <input type="text" class="txtThoiQuen" name ="taoThoiQuen" placeholder = "Mô tả"> <br>
    <input class="btn" type="submit" value="Submit" name = "btnSubmit">
    <input class="btn" type="reset" value="Reset" name = "reset">
    <?php
        if(isset($_REQUEST['btnSubmit'])){
            echo " hello submit";
        }
    ?>
</form>
</div>
