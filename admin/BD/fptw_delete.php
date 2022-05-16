<?
include '../bd.php';

$id = $_GET['id'];
$delete = mysqli_query($bd, "DELETE FROM `footerparttwo` WHERE `id` = '$id'");
header("location:../footer_part_two.php");
?>