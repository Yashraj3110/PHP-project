<?php
include '../connection.php';
if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `c2` where id=$id";
    $result=mysqli_query($conn,$sql);
    if ($result){
        header('location:c2.php?mess=Successfully Deleted');

    }else{
        die(mysqli_error($conn));
    }

}
?>