<?php
    require "inc_dbcon.inc.php";

    $sql = "SELECT * FROM `config_parse`";
    $result = $conn->query($sql);

    while ($res = $result->fetch_assoc()){
        var_dump($res) ;
    }


 ?>