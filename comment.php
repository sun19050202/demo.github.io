<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Enteer your comment</h1>
    <?php
        //require_once("data.php");
        //echo $data;
    ?>
    
    <form action="comment.php" method="post">
        <input type="text" name="value">
        <input type="submit" value="Send data">
    </form>
    <?php
        if(isset($_POST["value"])){
            echo $_POST["value"];   
        }
    ?>
</body>
</html>