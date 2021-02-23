<?php
include_once("conection.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM studenti WHERE id=$id");

header("Location:index.php");
?>

