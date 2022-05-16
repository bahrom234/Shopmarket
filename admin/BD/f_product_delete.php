<?
include '../bd.php';

$id = $_GET['id'];
$delete = mysqli_query($bd, "DELETE FROM `faqsproduct` WHERE `id` = '$id'");
header("location:../faq_product.php");
?>