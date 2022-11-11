<<<<<<< HEAD
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


=======
<?
$name = $_GET['input-1'];

echo "you message is : $name";
>>>>>>> 3323fceb0220542cddab9cd3b53ed702ae65618e
?>