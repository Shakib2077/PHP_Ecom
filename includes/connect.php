<?php


$con = mysqli_connect('localhost', 'root', '123456', 'mystore');
if(!$con){
    die(mysqli_error($con));
}

?>