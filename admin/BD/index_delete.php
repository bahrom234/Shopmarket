<?
include '../bd.php';

$id = $_GET['id'];
$delete = mysqli_query($bd, "DELETE FROM `abouttextone` WHERE `id` = '$id'");
header("location:../index.php");
?>