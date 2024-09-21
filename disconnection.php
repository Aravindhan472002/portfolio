<?php
 
 $con = mysqli_connect("localhost", "root", "", "student");
 if($con == false)
 {
    die("connection error ".mysqli_connect_error());
 }
?>