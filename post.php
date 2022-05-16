<?
include "bd.php";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check_user = mysqli_query($bd, "SELECT * FROM `admin` WHERE `email`='$email' AND `password`='$password'");
    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);
        header('location:admin/index.php');
    } else {
        header("location:index.php");
    }
};


if (isset($_POST['po'])) {
    $img = $_POST['img'];
    $title = $_POST['title'];
    $text = $_POST['text'];
    $price = $_POST['price'];
    $insert = mysqli_query($bd, "INSERT INTO `shopmarket`(`img`, `title`, `text`, `price`) VALUES ('$img','$title','$text','$price')");
    header("location:index.php");
};

if (isset($_POST['user'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $insert = mysqli_query($bd, "INSERT INTO `user`(`name`, `email`, `password`) VALUES ('$name','$email','$password')");
    header("location:index.php");
};


if (isset($_POST['confirm'])) {
    $back_green = "008000";
    $num_1 = '1';
} else {
    $back_green = "ffffff";
    $num_1 = 'confirm';
};

if (isset($_POST['holding'])) {
    $back_yellow = "f0ff1a";
    $num_2 = '2';
} else {
    $back_yellow = "ffffff";
    $num_2 = 'Holding';
};

if (isset($_POST['cancel'])) {
    $back_red = "FF0000";
    $num_0 = '0';
} else {
    $back_red = "ffffff";
    $num_0 = 'Cancel';
};


if (isset($_POST['confirm'])) {
    echo 'dfsdfsd';
  
 /*   $sql = "UPDATE shopmarket SET status='1' WHERE id=4";

    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }*/
    
    
} ?>


