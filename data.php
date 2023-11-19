<?php
    include_once('controller/cCamXuc.php');
    $data = getCamXucByMonth();
    $array = array();
    while ($row = mysqli_fetch_assoc($data)) {
        $array[] = $row;
    }
    echo json_encode($array);
?>