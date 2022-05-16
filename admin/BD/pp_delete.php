<?
include '../bd.php';

$id = $_GET['id'];
$delete = mysqli_query($bd, "DELETE FROM `productpage` WHERE `id` = '$id'");
header("location:../product_page.php");
?>