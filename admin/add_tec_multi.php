<?php
require __DIR__ . "/api/add_multi.php";

$std_add_multi = new AddMultiApi("tech_listname");
$std_add_multi->text_process();
$std_add_multi->show_error();
$std_add_multi->show_notification();

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
<form action="add_tec_multi.php" method="post">
    <textarea name="q" id="data" cols="30" rows="10" style="width: 65%; height: 240px;">sdfd</textarea>
    <input type="submit" name="" id="">
</form>
</body>
</html>