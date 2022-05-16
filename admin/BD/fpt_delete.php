<?
include '../bd.php';

$id = $_GET['id'];
$delete = mysqli_query($bd, "DELETE FROM `footerpartthree` WHERE `id` = '$id'");
header("location:../footer_part_three.php");
?>