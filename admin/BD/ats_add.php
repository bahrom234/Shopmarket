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
    <form action="add.php" method="post" class="form" >
        <table>
            <tr class="tr">
                <td class="head_left">Title</td>
                <td class="head_right">Text</td>
            </tr>
            <tr class="tr">
                <td class="td">
                    <input type="text" name="title" class="input">
                </td>
                <td class="td">                    
                    <input type="text" name="text" class="input">
                </td>
            </tr>
            <tr>
                <td class="foot_left"></td>
                <td class="foot_right"> 
                    <input type="submit" name="ats" value="ADD" class="button" >
                </td>
            </tr>
        </table>
    </form>
</body>
</html>