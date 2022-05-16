<?
include '../bd.php';

$id = $_GET['id'];
$delete = mysqli_query($bd, "DELETE FROM `footerpartone` WHERE `id` = '$id'");
header("location:../footer_part_one.php");
?>