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
<?php include '../views/partials/head.php'; ?>




<?php
if(isset($_GET['info']) && $_GET['info']=='impact'){
echo '<h1>Hotel Impact ⚝ ⚝ ⚝'.'<h1>';
include '../views/content/impact.php';
$conectare = mysqli_connect('localhost', 'root', '', 'turism');
$sql = "SELECT * FROM hotel WHERE id=2";
$result = mysqli_query($conectare, $sql);
$row = $result->fetch_assoc();
echo '<h1> The Impact hotel have '.$row['stele'].' stars and is located in '.$row['locatie'].'</h1><br>';
echo '<h1>'.$row['detalii'].'</h1>';
}
elseif(isset($_GET['info']) && $_GET['info']=='dorna'){
echo '<h1>Hotel Dorna ⚝ ⚝ ⚝'.'<h1>';
include '../views/content/dorna.php';
$conectare = mysqli_connect('localhost', 'root', '', 'turism');
$sql = "SELECT * FROM hotel WHERE id=1";
$result = mysqli_query($conectare, $sql);
$row = $result->fetch_assoc();
echo '<h1> The Dorna hotel have '.$row['stele'].' stars and is located in '.$row['locatie'].'</h1><br>';
echo '<h1>'.$row['detalii'].'</h1>';
}
elseif(isset($_GET['info']) && $_GET['info']=='paradiso'){
echo '<h1>Hotel Paradiso ⚝ ⚝ ⚝'.'<h1>';
include '../views/content/paradiso.php';
$conectare = mysqli_connect('localhost', 'root', '', 'turism');
$sql = "SELECT * FROM hotel WHERE id=3";
$result = mysqli_query($conectare, $sql);
$row = $result->fetch_assoc();
echo '<h1> The Paradiso hotel have '.$row['stele'].' stars and is located in '.$row['locatie'].'</h1><br>';
echo '<h1>'.$row['detalii'].'</h1>';
}
elseif(isset($_GET['info']) && $_GET['info']=='malibu'){
echo '<h1>Hotel Malibu ⚝ ⚝ ⚝ ⚝'.'<h1>';
include '../views/content/malibu.php';
$conectare = mysqli_connect('localhost', 'root', '', 'turism');
$sql = "SELECT * FROM hotel WHERE id=4";
$result = mysqli_query($conectare, $sql);
$row = $result->fetch_assoc();
echo '<h1> The Malibu hotel have '.$row['stele'].' stars and is located in '.$row['locatie'].'</h1><br>';
echo '<h1>'.$row['detalii'].'</h1>';
}
elseif(isset($_GET['info']) && $_GET['info']=='vox'){
echo '<h1>Hotel Vox ⚝ ⚝ ⚝ ⚝'.'<h1>';
include '../views/content/vox.php';
$conectare = mysqli_connect('localhost', 'root', '', 'turism');
$sql = "SELECT * FROM hotel WHERE id=5";
$result = mysqli_query($conectare, $sql);
$row = $result->fetch_assoc();
echo '<h1> The Vox hotel have '.$row['stele'].' stars and is located in '.$row['locatie'].'</h1><br>';
echo '<h1>'.$row['detalii'].'</h1>';
}
elseif(isset($_GET['info']) && $_GET['info']=='mera'){
echo '<h1>Hotel Mera ⚝ ⚝ ⚝ ⚝'.'<h1>';
include '../views/content/mera.php';
$conectare = mysqli_connect('localhost', 'root', '', 'turism');
$sql = "SELECT * FROM hotel WHERE id=6";
$result = mysqli_query($conectare, $sql);
$row = $result->fetch_assoc();
echo '<h1> The Mera hotel have '.$row['stele'].' stars and is located in '.$row['locatie'].'</h1><br>';
echo '<h1>'.$row['detalii'].'</h1>';
}
?>




<?php include '../views/partials/footer.php'; ?>
</body>
</html>