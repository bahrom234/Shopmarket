<?
include '../bd.php';

$id = $_GET['id'];
$delete = mysqli_query($bd, "DELETE FROM `indexproduct` WHERE `id` = '$id'");
header("location:../index_product.php");
?>