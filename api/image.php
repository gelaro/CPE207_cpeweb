<?php
    require __DIR__ . "/../config.inc.php";
    require __DIR__ . "/../admin/inc_dbcon.inc.php";

    function get_student_image($sid){
        global $img,$conn;
        $sql = "SELECT * FROM std_img_list WHERE sid='".$sid."'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if(isset($row['url'])){
            $pic_img = $img['student_dir'].'/'.$row['url'];
        }else{
            $pic_img = "http://www.blingyourband.com/skin/frontend/blingyourband/blingyourbands/images/no-available-image.png";
        }
        return "<img src=\"".$pic_img."\" alt=\"\" width=\"".$img['student_pro_w']."\">";
    }

    function image_encyption($name){
        return md5($name);
    }

?>


