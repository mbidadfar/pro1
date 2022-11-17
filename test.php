<<<<<<< HEAD
<?php

if($_POST['my-input']){
    $myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");

    $myinput = $_POST['my-input']; 
    $exist = false;
    while(!feof($myfile)){
        $line = fgets($myfile); 
        
        if( $myinput == trim($line)){
            echo "exist";
            $exist=true;
            break;

        }
    }
    
    if(!$exist){
        if (fwrite($myfile, $myinput.PHP_EOL))
        {
            echo "saved";
        }
        
        else
        {
            echo "no";
        }
        
    }
 
    fclose($myfile);
}
?>
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e18af5f7d4b17ccbf923d176f8cb3b97ed9155e0
<?php

if ( isset($_FILES['input-1'])){

    $name = $_FILES['input-1']['name'];
    $tmp = $_FILES['input_1']['tmp-name'];

    if(move_uploaded_file($tmp, "upload/$name")){
        echo "ok";
    }else{
<<<<<<< HEAD
        echo "error";
=======
        echo "error"
>>>>>>> e18af5f7d4b17ccbf923d176f8cb3b97ed9155e0
    }

}


<<<<<<< HEAD
=======
=======
<?
$name = $_GET['input-1'];

echo "you message is : $name";
>>>>>>> 3323fceb0220542cddab9cd3b53ed702ae65618e
>>>>>>> e18af5f7d4b17ccbf923d176f8cb3b97ed9155e0
?>
>>>>>>> 8caffe7939b02a2fc269c3d178640b101e5684d9
