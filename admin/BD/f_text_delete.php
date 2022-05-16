<?
include '../bd.php';

$id = $_GET['id'];
$delete = mysqli_query($bd, "DELETE FROM `faqstext` WHERE `id` = '$id'");
header("location:../faq_text.php");
?>