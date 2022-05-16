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
                <td class="img_td_left">Img</td>    
                <td class="td">Title</td>
                <td class="td">Price</td>
                <td class="td">Priced</td>
                <td class="td">Remove Img</td>
                <td class="head_right">Remove</td>
            </tr>
            <tr class="tr">
                <td class="img_td" >
                    <input type="file" name="img">
                </td>
                <td class="td">
                    <input type="text" name="title" class="input">
                </td>
                <td class="td">
                    <input type="text" name="price" class="input">
                </td>
                <td class="td">
                    <input type="text" name="priced" class="input">
                </td>
                <td class="img_td" >
                    <input type="file" name="removeimg">
                </td>
                <td class="td">                    
                    <input type="text" name="remove" class="input">
                </td>
            </tr>
            <tr>
                <td class="foot_left"></td>
                <td class="td"></td>
                <td class="td"></td>
                <td class="td"></td>
                <td class="td"></td>
                <td class="foot_right"> 
                    <input type="submit" name="shcart" value="ADD" class="button" >
                </td>
            </tr>
        </form>
    </table>
</body>
</html>