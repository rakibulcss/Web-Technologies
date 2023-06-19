<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Output</title>
</head>
<body>
    <?php
    if(isset($_POST["submit"]))
    {
        $name=$_POST["name"];
        echo "$name";
    }
    ?>
</body>
</html>