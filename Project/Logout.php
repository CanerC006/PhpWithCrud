<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="refresh" content="60">
    <title>Document</title>
    <style>
        .hata {
            color: #FF0000;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        session_destroy();
        header("Refresh: 1; url=LoginPage.php");

    ?>
</body>
</html>