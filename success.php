<?php
require_once './config.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $lang['success_page_title']; ?></title>
        <link rel="stylesheet" href="./styles.css">
        <link rel="shortcut icon" href="./icon/favicon.ico">
        <meta http-equiv="refresh" content="4; URL=/">
    </head>
    <body class="success-page">
        <h2 class="text"><?php echo $lang['success_page_text']; ?></h2>
    </body>
</html>