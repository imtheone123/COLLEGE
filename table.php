<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <?php 
        print("helllo");
        for($i=0;$i<=10;$i++)
        {
            print("<tr><td>$i</td></tr>");
        }
        ?>
    </table>
</body>
</html>