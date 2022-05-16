<?
    include '../bd.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="csss.css">
</head>
<body>
    <table>   
        <form action="update.php" method="post" class="form" enctype="multipart/form-data">
            <tr class="tr">
                <td class="img_td_left">ID</td>
                <td class="td">Img</td>
                <td class="td">Title</td>
                <td class="td">Price</td>
                <td class="td">Priced</td>
                <td class="td">Remove Img</td>
                <td class="head_right">Remove</td>
            </tr>
            <?
            $id = $_GET['id'];
            $select = mysqli_query($bd, "SELECT * FROM `shopcart` WHERE `id`='$id'");
            $lang = mysqli_fetch_assoc($select);
            ?>
            <tr class="tr" enctype="multipart/form-data">
                <td class="td">
                    <input type="text" name="id" class="input" value="<?= $lang['id'] ?>">
                </td>
                <td class="img_td">
                    <input type="file" name="img" value="<?= $lang['img'] ?>">
                </td>
                <td class="td">
                    <input type="text" name="title" class="input" value="<?= $lang['title'] ?>">
                </td>
                <td class="td">
                    <input type="text" name="price" class="input" value="<?= $lang['price'] ?>">
                </td>
                <td class="td">                    
                    <input type="text" name="priced" class="input" value="<?= $lang['priced'] ?>">
                </td>
                <td class="td">                    
                    <input type="file" name="removeimg" value="<?= $lang['removeimg'] ?>">
                </td>
                <td class="td">                    
                    <input type="text" name="remove" class="input" value="<?= $lang['remove'] ?>">
                </td>
            </tr>
            <tr>
                <td class="foot_left"></td>
                <td class="td"></td>
                <td class="td"></td>
                <td class="td"><input type="submit" name="shopcart" value="Update" class="button" ></td>
                <td class="td"></td>
                <td class="td"></td>
                <td class="foot_right"></td>
            </tr>
        </form>
    </table>
</body>
</html>