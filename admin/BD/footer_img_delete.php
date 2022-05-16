<?
include '../bd.php';

$id = $_GET['id'];
$delete = mysqli_query($bd, "DELETE FROM `footerimges` WHERE `id` = '$id'");
header("location:../footer_img.php");
?>