<?php

var_dump($_FILES);
    $k =  basename($_FILES['img'][0]['name']);
        echo get_extension_funcs($_FILES['img'][0]['name']);

?>