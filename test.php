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
