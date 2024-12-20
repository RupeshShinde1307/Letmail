<?php

    $con = mysqli_connect("localhost","root","","letmail") or die (mysqli_error($con));
    
if($con){
    echo "Connection is successful";
    }else{
        echo"connection failed";
}
