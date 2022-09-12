<?php
include_once("Config.php");
$id = $_GET['id'];
$result = mysqli_query($link,"delete from employee where id ='$id'");
header("Location:index.php");
?>