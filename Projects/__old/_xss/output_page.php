<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>
<body>
    <?php
        if(!isset($_POST['input'])){
            
        } else {
            echo $_POST['input'];
            #echo htmlentities($_POST['input']);
            
            echo '<br>';
        }
    ?>
<a href="input_page.php">back</a>
</body>
</html>