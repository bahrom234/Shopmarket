<?
    include '../bd.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet" href="csss.css">
</head>
<body>
    <table>   
        <form action="update.php" method="post" class="form" enctype="multipart/form-data">
            <tr class="tr">
                <td class="img_td_left">ID</td>
                <td class="td">Href</td>
                <td class="td">Img</td>
            </tr>
            <?
            $id = $_GET['id'];
            $select = mysqli_query($bd, "SELECT * FROM `footerimges` WHERE `id`='$id'");
            $lang = mysqli_fetch_assoc($select);
            ?>
            <tr class="tr">
                <td class="td">
                    <input type="text" name="id" class="input" value="<?= $lang['id'] ?>">
                </td> 
                <td class="td">
                    <input type="text" name="href" class="input" value="<?= $lang['href'] ?>">
                </td>
                <td class="img_td">
                    <input type="file" name="img" value="<?= $lang['img'] ?>">
                </td>
            </tr>
            <tr>
                <td class="foot_left"></td>
                <td class="td"> <input type="submit" name="footer_img" value="Update" class="button" ></td>
                <td class="foot_right"></td>
            </tr>
        </form>
    </table>
</body>
</html>