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
        <form action="add.php" method="post" class="form" enctype="multipart/form-data">
            <tr class="tr">
                <td class="td">Img</td>
            </tr>
            <tr class="tr">
                <td class="td" >
                    <input type="file" name="img">
                </td>
            </tr>
            <tr>
                <td class="td"><input type="submit" name="isi" value="ADD" class="button" ></td> 
            </tr>
        </form>
    </table>
</body>
</html>