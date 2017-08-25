<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Travel agency</title>
    <meta charset="iso-8859-1">
    <link rel="stylesheet" href="/assets/css/layout.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/curs2.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../images/demo/icon.png">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="/assets/css/jquery.bxslider.css" type="text/css">
    <script src="/assets/js/jquery.bxslider.js"></script>

    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!--[if lt IE 9]><script src="/assets/js/html5shiv.js"></script><![endif]-->
</head>
<body>
<?php
    include "views/partials/head.php";
?>
<!-- content -->
<div class="wrapper row2">

    <?php include 'views/'.$content_view; ?>
</div>

    <!-- footer -->
    <?php include "views/partials/footer.php"; ?>

</body>
</html>
