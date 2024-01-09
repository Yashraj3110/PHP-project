<?php
include '../connection.php';
if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `admin` where id=$id";
    $result=mysqli_query($conn,$sql);
    if ($result){
        header('location:admin_record.php');

    }else{
        die(mysqli_error($conn));
    }

}
?>