<?
include '../bd.php';

$id = $_GET['id'];
$delete = mysqli_query($bd, "DELETE FROM `contact` WHERE `id` = '$id'");
header("location:../contact.php");
?>