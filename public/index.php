<?php require "../bootstrap.php" ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PAGINA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $titulo  ?></title>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/site/estilo.css">
    <link rel="stylesheet" href="assets/css/site/fonts.css">
    <link rel="stylesheet" href="assets/css/site/paralax.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" media="(max-width: 767px)" href="assets/css/site/smart.css" />
</head>

<body class="font-Montserrat">

    <?php require 'pages/header.php' ?>






    <?php  require load();
    ?>
    <?php require "pages/modal.php" ?>
    <?php  require 'pages/footer.php' ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script> -->
<script src="assets/js/bootstrap/bootstrap.js"></script>
<script src="assets/js/site/Validation.js"></script>
<script src="assets/js/site/Events.js"></script>
<script src="assets/js/site/modal.js"></script>



</html>