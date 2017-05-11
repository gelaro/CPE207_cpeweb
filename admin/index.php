<?php
require "inc_dbcon.inc.php";

function empty_text_filter($text){
    return ($text != '' && !is_null($text) && urlencode($text) != '%0D');
}

function insert_to_table($datas){
    global $conn;
    $keys = get_table_header("std_listname");
    $arr = array();
    foreach ($datas as $d){
        array_push($arr, $d);
    }
    $i=0;
    $cols ="";
    $vals ="";
    foreach ($keys as $k){
        $cols .= "`".$k."` ,";
        $vals .= "'".$arr[$i] . "' ,";
        $i++;
    }
    $cols = rtrim($cols,",");
    $vals = rtrim($vals,",");

    $sql = "INSERT INTO std_listname  (".$cols . ") VALUES(".$vals .")";
    $conn->query($sql);
}


if(isset($_POST['q'])){
    // Config
    $detect_mark = "\t";
    $db_table_num = 5;
    // Set Error variable
    $error = array();
    $notti = array();
    // Getting form method
    $data = $_POST['q'];
    // sub-seq new line
    $data = explode("\n", $data);
    // fillter Empty Array
    if(sizeof($data) > 0 && isset($data)) {
        // Counter
        $error_nothing_elements = 0;
        $error_count_element_num = 0;
        // filter empty array
        $data = array_filter($data, 'empty_text_filter');

        // save first counter
        $error_data_num_first = sizeof($data);
        if(!$data){
            $error_nothing_elements += 1;
            $error_count_element_num += 1;
        }
        // read all data
        foreach ($data as $d) {
            //  filter non-string
            if (empty_text_filter($d)) {
                // sub-seq by delimeter
                $seqs = explode($detect_mark, $d);
                // read personal data
                if(sizeof($seqs) == $db_table_num ){
                    $error_count_element_num += 1;
                    insert_to_table($seqs);
                    /*foreach ($seqs as $seq) {
                       // echo $seq."<br>";
                    }*/
                }else{
                    array_push($error,"จำนวน Elements หรือ ตัวคั่น (line: ".($error_count_element_num+1).") ที่รับมาไม่ตรงกับที่กำหนดไว้ โปรดแก้ไข<small>" .
                        " >ตั้งค่า</a></small>");
                    break;
                }
            } else {
                // counter
                $error_nothing_elements += 1;
                $error_count_element_num += 2;
            }
        }
        if ($error_count_element_num == $error_data_num_first){
            array_push($notti, "เย่ ส่งเสร็จหมดแล้ว");
        }
    }else{
        array_push($error, "ดูเหมือนว่าระหว่างทางเราจะได้ข้อมูลไม่ครบ ลองส่งใหม่");
    }

    if($error_nothing_elements){
        array_push($error, "ดูเหมือนว่าคุณจะลืมใส่เนื้อหาลงไป");
    }

    // Error Show
    if(sizeof($error) > 0){
        foreach ($error as $value){
            echo $value;
        }
    }
    if(sizeof($notti) > 0){
        foreach ($notti as $value){
            echo $value;
        }
    }

}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="../jquery-3.2.1.min.js"></script>
    <script>
        var str_t = "590610627	ธีรยุทธ	ปัญโญเหียงยุทธ	TEERAYUT\naaaaaaaaa\n\nddddddddd\teeeeeeeed";
        var str_n = "590610627	ธีรยุทธ	ปัญโญเหียงยุทธ	TEERAYUT\tssssssss\n";
        var str_s = "ss";
        $(document).ready(function (e) {
            $('#data').val(str_n);
        });
    </script>
</head>
<body>
<form action="multi_file_upload.php" enctype="multipart/form-data">
    Select images: <input type="file" name="img[]" multiple>
    <input type="submit">
</form>
<form action="index.php" method="post">
    <textarea name="q" id="data" cols="30" rows="10" style="width: 65%; height: 240px;">sdfd</textarea>
    <input type="submit" name="" id="">
</form>
</body>
</html>
