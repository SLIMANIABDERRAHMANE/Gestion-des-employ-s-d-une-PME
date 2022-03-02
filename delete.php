<?php
include 'connect.php';


if(isset($_GET['indexID'])){

    $matricule=$_GET['indexID'];
    $sql="DELETE FROM `employe` where matricule='$matricule'";
    $result=mysqli_query($con,$sql);

    

if(isset($result)){
        header("location:display.php");
        // echo ' the delete is working';
        
    }
    else{
        echo'error in delete';
    }
}
?>