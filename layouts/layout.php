<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/aos.css?ver=1.1.0" rel="stylesheet">
    <link href="../css/bootstrap.min.css?ver=1.1.0" rel="stylesheet">
    <link href="../css/main.css?ver=1.1.0" rel="stylesheet">
    <noscript>
        <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }
        </style>
    </noscript>

    <title>
        <?php
        if (!$pageTitle) {
            echo 'Mon site';
        } else {
            echo $pageTitle;
        }
        ?>
    </title>

    <!-- <link rel="stylesheet" href="../css/phone-book.css" type="text/css">
    <link rel="stylesheet" href="../css/header.css" type="text/css" />
    <link rel="stylesheet" href="../css/footer.css" type="text/css" /> -->

    <script src="../js/phone-book.js" type="module"></script>
</head>

<body>

    <?= $pageContent; ?>

</body>

</html>