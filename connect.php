<?php
$con=new mysqli('localhost','root','','formation');

if($con){
    // header('location:display.php');
    // echo 'connection is working';
    
}
else{
    die(mysqli_error($con));
}

?>