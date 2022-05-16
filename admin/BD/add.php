<?
session_start();
include '../bd.php';
include 'images/';

if(isset($_POST['index'])){
    $title=$_POST['title'];
    $text=$_POST['text'];
    $textSecond=$_POST['textSecond'];
    $insert = mysqli_query($bd, "INSERT INTO `abouttextone`(`title`, `text`, `textSecond`) VALUES ('$title','$text','$textSecond')");   
    header("location:../index.php");
}

if(isset($_POST['ats'])){
    $title=$_POST['title'];
    $text=$_POST['text'];
    $select = mysqli_query($bd, "INSERT INTO `abouttextsecond`(`title`, `text`) VALUES ('$title','$text')");   
    header("location:../about_text_second.php");
}

if(isset($_POST['att'])){
    $title=$_POST['title'];
    $text=$_POST['text'];
    $select = mysqli_query($bd, "INSERT INTO `abouttextthree`(`title`, `text`) VALUES ('$title','$text')");   
    header("location:../about_text_three.php");
}

if(isset($_POST['contact'])){
    $title=$_POST['title'];
    $text=$_POST['text'];
    $select = mysqli_query($bd, "INSERT INTO `contact`(`title`, `text`) VALUES ('$title','$text')");   
    header("location:../contact.php");
}

if(isset($_POST['fproduct'])){
    $img=$_POST['img'];
    $href=$_POST['href'];
    $title=$_POST['title'];
    $price=$_POST['price'];
    $img = $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], "./images/" .$img);
    $select= mysqli_query($bd, "INSERT INTO `faqsproduct`(`img`, `href`, `title`, `price`) VALUES ('$img','$href','$title','$price')");   
    header("location:../faq_product.php");
}

if(isset($_POST['faqstext'])){
    $title=$_POST['title'];
    $text=$_POST['text'];
    $href=$_POST['href'];
    $hreftext=$_POST['hreftext'];
    $select = mysqli_query($bd, "INSERT INTO `faqstext`(`title`, `text`, `href`, `hreftext`) VALUES ('$title','$text', '$href', '$hreftext')");   
    header("location:../faq_text.php");
}

if(isset($_POST['footer_img'])){
    $href=$_POST['href'];
    $img=$_POST['img'];
    $img = $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], "./images/" .$img);
    $select= mysqli_query($bd, "INSERT INTO `footerimges`(`href`, `img`) VALUES ('$href','$img')");   
    header("location:../footer_img.php");
}

if(isset($_POST['fpo'])){
    $href=$_POST['href'];
    $text=$_POST['text'];
    $select = mysqli_query($bd, "INSERT INTO `footerpartone`(`href`, `text`) VALUES ('$href', '$text')");   
    header("location:../footer_part_one.php");
}

if(isset($_POST['fpt'])){
    $href=$_POST['href'];
    $text=$_POST['text'];
    $select = mysqli_query($bd, "INSERT INTO `footerpartthree`(`href`, `text`) VALUES ('$href', '$text')");   
    header("location:../footer_part_three.php");
}

if(isset($_POST['fptw'])){
    $href=$_POST['href'];
    $text=$_POST['text'];
    $select = mysqli_query($bd, "INSERT INTO `footerparttwo`(`href`, `text`) VALUES ('$href', '$text')");   
    header("location:../footer_part_two.php");
}

if(isset($_POST['header'])){
    $href=$_POST['href'];
    $text=$_POST['text'];
    $select = mysqli_query($bd, "INSERT INTO `header`(`href`, `text`) VALUES ('$href', '$text')");   
    header("location:../header.php");
}

if(isset($_POST['headersec'])){
    $href=$_POST['href'];
    $text=$_POST['text'];
    $select = mysqli_query($bd, "INSERT INTO `headersec`(`href`, `text`) VALUES ('$href', '$text')");   
    header("location:../header_second.php");
}

if(isset($_POST['ip'])){
    $href=$_POST['href'];
    $img=$_POST['img'];
    $hrefsecond=$_POST['hrefsecond'];
    $title=$_POST['title'];
    $price=$_POST['price'];
    $img = $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], "./images/" .$img);
    $select= mysqli_query($bd, "INSERT INTO `indexproduct`(`href`,`img`, `hrefsecond`, `title`, `price`) VALUES ('$href', '$img', '$hrefsecond', '$title','$price')");   
    header("location:../index_product.php");
}

if(isset($_POST['indexs'])){
    $title=$_POST['title'];
    $text=$_POST['text'];
    $href=$_POST['href'];
    $hreftext=$_POST['hreftext'];
    $select = mysqli_query($bd, "INSERT INTO `indexslider`(`title`, `text`,`href`, `hreftext`) VALUES ('$title','$text','$href', '$hreftext')");   
    header("location:../index_slider.php");
}

if(isset($_POST['isi'])){
    $img=$_POST['img'];
    $img = $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], "./images/" .$img);
    $select= mysqli_query($bd, "INSERT INTO `indexsliderimg`(`img`) VALUES ('$img')");   
    header("location:../index_slider_img.php");
}

if(isset($_POST['pp'])){
    $href=$_POST['href'];
    $text=$_POST['text'];
    $select = mysqli_query($bd, "INSERT INTO `productpage`(`href`, `text`) VALUES ('$href', '$text')");   
    header("location:../product_page.php");
}

if(isset($_POST['shcart'])){
    $img=$_POST['img'];
    $title=$_POST['title'];
    $price=$_POST['price'];
    $priced=$_POST['priced']; 
    $removeimg=$_POST['removeimg'];
    $remove=$_POST['remove'];
    $img = $_FILES['img']['name'];
    $removeimg = $_FILES['removeimg']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], "./images/" .$img .$removeimg);
    $select= mysqli_query($bd, "INSERT INTO `shopcart`(`img`,`title`, `price`, `priced`, `removeimg`, `remove`) VALUES ('$img', '$title', '$price', '$priced','$removeimg', '$remove')");   
    header("location:../shop_cart.php");
}

if(isset($_POST['shheader'])){
    $title=$_POST['title'];
    $select = mysqli_query($bd, "INSERT INTO `shopheader`(`title`) VALUES ('$title')");   
    header("location:../shop_header.php");
}
?>

