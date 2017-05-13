<?php

require __DIR__."/../admin/inc_dbcon.inc.php";

class StudentProcess{
    private function connect($sql){
        return db_connect()->query($sql);
    }
    public function get_list_from_db(){
        $sql = "SELECT * FROM std_listname";
        $result = $this->connect($sql);
        $arr_data = [];
        while ($row = $result->fetch_assoc()){
            array_push($arr_data, $row);
        }
        return $arr_data;
    }
    public function find_data_by_sid($sid){
        $sql = "SELECT * FROM std_listname WHERE sid='".$sid."'";
        $result = $this->connect($sql);
        $arr_data = [];
        while ($row = $result->fetch_assoc()){
            array_push($arr_data, $row);
        }
        return $arr_data;
    }
    public function find_data_by_year($year){
        $f = strval($year)[0];
        $l = strval($year)[1];
        $sql = "SELECT * FROM std_listname WHERE (sid REGEXP '^[".$f."][".$l."]')";
        $result = $this->connect($sql);
        $arr_data = [];
        while ($row = $result->fetch_assoc()){
            array_push($arr_data, $row);
        }
        return $arr_data;
    }
}

?>