<?
include '../bd.php';

$id = $_GET['id'];
$delete = mysqli_query($bd, "DELETE FROM `shopheader` WHERE `id` = '$id'");
header("location:../shop_header.php");
?>