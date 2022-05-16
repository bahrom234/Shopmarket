<?
include '../bd.php';

$id = $_GET['id'];
$delete = mysqli_query($bd, "DELETE FROM `indexsliderimg` WHERE `id` = '$id'");
header("location:../index_slider_img.php");
?>