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
        <form action="add.php" method="post" class="form">
            <tr class="tr">
                <td class="img_td_left">Title</td>
                <td class="td">Text</td>
                <td class="td">Href</td>
                <td class="head_right">Href Text</td>
            </tr>
            <tr class="tr">
                <td class="img_td" >
                    <input type="text" name="title" class="input">
                </td>
                <td class="td">
                    <input type="text" name="text" class="input">
                </td>
                <td class="td">
                    <input type="text" name="href" class="input">
                </td>
                <td class="td">                    
                    <input type="text" name="hreftext" class="input">
                </td>
            </tr>
            <tr>
                <td class="foot_left"></td>
                <td class="td"></td>
                <td class="td"></td>
                <td class="foot_right"> 
                    <input type="submit" name="faqstext" value="ADD" class="button" >
                </td>
            </tr>
        </form>
    </table>
</body>
</html>