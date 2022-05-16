<?
include '../bd.php';

$id = $_GET['id'];
$delete = mysqli_query($bd, "DELETE FROM `abouttextthree` WHERE `id` = '$id'");
header("location:../about_text_three.php");
?>