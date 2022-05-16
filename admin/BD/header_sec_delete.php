<?
include '../bd.php';

$id = $_GET['id'];
$delete = mysqli_query($bd, "DELETE FROM `headersec` WHERE `id` = '$id'");
header("location:../header_second.php");
?>