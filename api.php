<?php

require __DIR__."/api/image.php";
require __DIR__."/api/student.php";

/**
 * Created by PhpStorm.
 * User: Kanda
 * Date: 14/5/2560
 * Time: 1:17
 */
class ImageApi{
    public function get_student_img($sid){
        return get_student_image($sid);
    }
}
class StudentApi{
    private $n;
    public function __construct(){
        $this->n = new StudentProcess();
    }
    public function get_students_list(){
        /**Getting all student data form database
         * @retrun mysql_Object
         * @use  function()['data'];
         */
        return $this->n->get_list_from_db();
    }
    public function find_data_by_sid($sid){
        return $this->n->find_data_by_sid($sid);
    }

    public function find_data_by_uear($year){
        return $this->n->find_data_by_year($year);
    }
}
?>