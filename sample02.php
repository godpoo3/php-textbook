<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    

    <?php
        print('name:[ ' . htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES) . ' ]');
    ?>
</body>
</html>