<?
    include "../bd.php";
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
        <form action="update.php" method="post" class="form">
           <tr class="tr">
                <td class="head_left">ID</td>
                <td class="td">Href</td>
                <td class="head_right">Text</td>
            </tr>
            <?
            $id = $_GET['id'];
            $select = mysqli_query($bd, "SELECT * FROM `footerpartthree` WHERE `id`='$id'");
            $lang = mysqli_fetch_assoc($select);
            ?>
            <tr class="tr">
                <td class="td">
                    <input type="text" name="id" class="input" value="<?= $lang['id'] ?>">
                </td>
                <td class="td">
                    <input type="text" name="href" class="input" value="<?= $lang['href'] ?>">
                </td>
                <td class="td">
                    <input type="text" name="text" class="input" value="<?= $lang['text'] ?>">
                </td>
            </tr>
            <tr>
                <td class="foot_left"></td>
                <td class="td"></td>
                <td class="foot_right"><input type="submit" class="button_big" name="fpt"></td>
            </tr>
           
        </form>
    </table>
</body>

</html>