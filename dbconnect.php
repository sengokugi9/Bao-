<?php 

    $connect = mysqli_connect("localhost","root","","project") ;

    if($connect){
        echo "111";
    }
    else{
        die ("eror");
    }
?>