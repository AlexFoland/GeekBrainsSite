<?php
$title = array(
    '/index.php' => 'Homepage',
    '/contacts.php' => 'Contact Us'
);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?PHP
    echo '<title>' . $title[$_SERVER["SCRIPT_NAME"]] . '</title>'
    ?>
    <link rel="stylesheet" href="style.css">
</head>