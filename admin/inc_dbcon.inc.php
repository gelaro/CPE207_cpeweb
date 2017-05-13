<?php
    include __DIR__ ."/../config.inc.php";
    $conn = new mysqli($db['host'], $db['username'], $db['password'], $db['name']);
    mysqli_set_charset($conn, "utf8");

    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    function db_connect(){
        global $db;
        $conn = new mysqli($db['host'], $db['username'], $db['password'], $db['name']);
        mysqli_set_charset($conn, "utf8");

        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }

    function get_table_header($parse_dbname){
        /**Search database header name
         * @input: name of database for search
         * @return: array(string) $database.title
         */
        global $db, $conn;
        $data = array();
        $sql = "SHOW COLUMNS FROM ".$db['name'].".".$parse_dbname.";";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            array_push($data, $row['Field']);
        }
        return $data;
    }

    function get_praser_coloum(){
        global $db, $conn;
        $data = array();
        $sql = "SELECT COUNT(*) AS `total` FROM `config_parse`";
        $result = $conn->query($sql);
        $data = mysqli_fetch_assoc($result);
        return $data['total'];
    }


    function get_praser_coloum_name(){
        global $db, $conn;
        $data = array();
        $sql = "SELECT * FROM `config_parse`";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            array_push($data, $row['name']);
        }
        return $data;
    }

?>