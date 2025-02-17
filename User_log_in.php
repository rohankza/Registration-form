</php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="UserDb.php" method="POST">
<table>
    <tr>
        <td>
        User_name
        </td>
        <td>
            <input type="Username" name="Username" required>
        </td>

    </tr>
    <tr>
        <td>
        Password
        </td>
        <td>
            <input type='password' name='password' required>
        </td>
        
    </tr>  
    <tr>
       
        <td>
            <input type="submit" name="submit" value="submit">
        </td>
        
    </tr>
</table>


    </form>
</body>
</html>
<?php?>