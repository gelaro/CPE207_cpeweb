<?php
require __DIR__."/../inc_dbcon.inc.php";

$error_file = array();
if(isset($_FILES['img']['type'])){
    echo "<pre>";
    var_dump($_FILES['img']['type']);
    echo "</pre>";

    foreach ($_FILES['img']['name'] as $index=>$v){
        global $img;
        $basename =  basename($v);
        $infopath = pathinfo($basename,PATHINFO_EXTENSION);
        if (in_array($infopath, $img['support'])){
            // Upload
        }else {
            array_push($error_file, $_FILES['img']['name'][$index]);
        }
    }
}

if($error_file){
    $str = "เดี๋ยวนะ! เราไม่อนุญาติไฟล์ ";
    foreach ($error_file as $name){
        $str .= $name." ";
    }
    echo $str;
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
</head>
<body>
</body>
</html>
