<?
include '../bd.php';

$id = $_GET['id'];
$delete = mysqli_query($bd, "DELETE FROM `abouttextsecond` WHERE `id` = '$id'");
header("location:../about_text_second.php");
?>