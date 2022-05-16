<?
include '../bd.php';

$id = $_GET['id'];
$delete = mysqli_query($bd, "DELETE FROM `header` WHERE `id` = '$id'");
header("location:../header.php");
?>