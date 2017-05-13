<?php
require __DIR__."/api.php";

$imga = new ImageApi();
echo $imga->get_student_img(580610688);

?>