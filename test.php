<?php

if ( isset($_FILES['input-1'])){

    $name = $_FILES['input-1']['name'];
    $tmp = $_FILES['input_1']['tmp-name'];

    if(move_uploaded_file($tmp, "upload/$name")){
        echo "ok";
    }else{
        echo "error"
    }

}


?>