<?php
$conn=new mysqli('localhost','root','','crudproject');

if(!$conn){
    die(mysqli_error($conn));
}
?>