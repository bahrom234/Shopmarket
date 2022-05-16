<?
session_start();
include '../bd.php';

$id - $_GET['id'];

if(isset($_POST['index'])){
    $id=$_POST['id'];
    $title=$_POST['title'];
    $text=$_POST['text'];
    $textSecond=$_POST['textSecond'];
    $selects = mysqli_query($bd, "UPDATE `abouttextone` SET `title`='$title', `text`='$text', `textSecond`='$textSecond' WHERE `id`='$id'");
    header('location:../index.php');
}

if(isset($_POST['ats'])){
    $id=$_POST['id'];
    $title=$_POST['title'];
    $text=$_POST['text'];
    $selects = mysqli_query($bd, "UPDATE `abouttextsecond` SET `title`='$title', `text`='$text' WHERE `id`='$id'");
    header('location:../about_text_second.php');
}

if(isset($_POST['att'])){
    $id=$_POST['id'];
    $title=$_POST['title'];
    $text=$_POST['text'];
    $selects = mysqli_query($bd, "UPDATE `abouttextthree` SET `title`='$title', `text`='$text' WHERE `id`='$id'");
    header('location:../about_text_three.php');
}

if(isset($_POST['contact'])){
    $id=$_POST['id'];
    $title=$_POST['title'];
    $text=$_POST['text'];
    $selects = mysqli_query($bd, "UPDATE `contact` SET `title`='$title', `text`='$text' WHERE `id`='$id'");
    header('location:../contact.php');
}

if(isset($_POST['f_product'])){
    $id=$_POST['id'];
    $img=$_POST['img'];
    $href=$_POST['href'];
    $title=$_POST['title'];
    $price=$_POST['price'];
    $img = $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], "./images/" .$img);
    $selec = mysqli_query($bd, "UPDATE `faqsproduct` SET `img`='$img',`href`='$href',`title`='$title',`price`='$price' WHERE `id`='$id'");
    header("location:../faq_product.php");
}

if(isset($_POST['faqstext'])){
    $id=$_POST['id'];
    $title=$_POST['title'];
    $text=$_POST['text'];
    $href=$_POST['href'];
    $hreftext=$_POST['hreftext'];
    $selects = mysqli_query($bd, "UPDATE `faqstext` SET `title`='$title', `text`='$text', `href`='$href', `hreftext`='$hreftext' WHERE `id`='$id'");
    header('location:../faq_text.php');
}

if(isset($_POST['footer_img'])){
    $id=$_POST['id']; 
    $href=$_POST['href'];
    $img=$_POST['img'];
    $img = $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], "./images/" .$img);
    $selec = mysqli_query($bd, "UPDATE `footerimges` SET `href`='$href', `img`='$img' WHERE `id`='$id'");
    header("location:../footer_img.php");
}

if(isset($_POST['fpo'])){
    $id=$_POST['id'];
    $href=$_POST['href'];
    $text=$_POST['text'];
    $selects = mysqli_query($bd, "UPDATE `footerpartone` SET `href`='$href', `text`='$text' WHERE `id`='$id'");
    header('location:../footer_part_one.php');
}

if(isset($_POST['fpt'])){
    $id=$_POST['id'];
    $href=$_POST['href'];
    $text=$_POST['text'];
    $selects = mysqli_query($bd, "UPDATE `footerpartthree` SET `href`='$href', `text`='$text' WHERE `id`='$id'");
    header('location:../footer_part_three.php');
}

if(isset($_POST['fptw'])){
    $id=$_POST['id'];
    $href=$_POST['href'];
    $text=$_POST['text'];
    $selects = mysqli_query($bd, "UPDATE `footerparttwo` SET `href`='$href', `text`='$text' WHERE `id`='$id'");
    header('location:../footer_part_two.php');
}

if(isset($_POST['header'])){
    $id=$_POST['id'];
    $href=$_POST['href'];
    $text=$_POST['text'];
    $selects = mysqli_query($bd, "UPDATE `header` SET `href`='$href', `text`='$text' WHERE `id`='$id'");
    header('location:../header.php');
}

if(isset($_POST['headersec'])){
    $id=$_POST['id'];
    $href=$_POST['href'];
    $text=$_POST['text'];
    $selects = mysqli_query($bd, "UPDATE `headersec` SET `href`='$href', `text`='$text' WHERE `id`='$id'");
    header('location:../header_second.php');
}

if(isset($_POST['indexp'])){
    $id=$_POST['id'];
    $href=$_POST['href'];
    $img=$_POST['img'];
    $hrefsecond=$_POST['hrefsecond'];
    $title=$_POST['title'];
    $price=$_POST['price'];
    $img = $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], "./images/" .$img);
    $selec = mysqli_query($bd, "UPDATE `indexproduct` SET `href`='$href',`img`='$img', `hrefsecond`='$hrefsecond',`title`='$title',`price`='$price' WHERE `id`='$id'");
    header("location:../index_product.php");
}

if(isset($_POST['isi'])){
    $id=$_POST['id'];
    $img=$_POST['img'];
    $img = $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], "./images/" .$img);
    $selec = mysqli_query($bd, "UPDATE `indexsliderimg` SET  `img`='$img' WHERE `id`='$id'");
    header("location:../index_slider_img.php");
}

if(isset($_POST['indexs'])){
    $id=$_POST['id'];
    $title=$_POST['title'];
    $text=$_POST['text'];
    $href=$_POST['href'];
    $hreftext=$_POST['hreftext'];   
    $selects = mysqli_query($bd, "UPDATE `indexslider` SET `title`='$title', `text`='$text', `href`='$href', `hreftext`='$hreftext' WHERE `id`='$id'");
    header('location:../index_slider.php');
}

if(isset($_POST['pp'])){
    $id=$_POST['id'];
    $href=$_POST['href'];
    $text=$_POST['text'];
    $selects = mysqli_query($bd, "UPDATE `productpage` SET `href`='$href', `text`='$text' WHERE `id`='$id'");
    header('location:../product_page.php');
}

if(isset($_POST['shopcart'])){
    $id=$_POST['id'];
    $img=$_POST['img'];
    $title=$_POST['title']; 
    $price=$_POST['price'];
    $priced=$_POST['priced'];
    $removeimg=$_POST['removeimg'];
    $remove=$_POST['remove'];
    $img = $_FILES['img']['name'];
    $removeimg = $_FILES['removeimg']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], "./images/" .$img .$removeimg);
    $selec = mysqli_query($bd, "UPDATE `shopcart` SET `img`='$img',`title`='$title', `price`='$price',`priced`='$priced',`removeimg`='$removeimg', `remove`='$remove' WHERE `id`='$id'");
    header("location:../shop_cart.php");
}

if(isset($_POST['shheader'])){
    $id=$_POST['id'];
    $title=$_POST['title'];
    $selects = mysqli_query($bd, "UPDATE `shopheader` SET `title`='$title' WHERE `id`='$id'");
    header('location:../shop_header.php');
}
?>