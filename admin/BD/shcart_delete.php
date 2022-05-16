<?
include '../bd.php';

$id = $_GET['id'];
$delete = mysqli_query($bd, "DELETE FROM `shopcart` WHERE `id` = '$id'");
header("location:../shop_cart.php");
?>