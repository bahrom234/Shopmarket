<?
include '../bd.php';

$id = $_GET['id'];
$delete = mysqli_query($bd, "DELETE FROM `indexslider` WHERE `id` = '$id'");
header("location:../index_slider.php");
?>