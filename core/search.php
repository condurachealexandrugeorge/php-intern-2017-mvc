<?php

$stele = $_POST['stele'];
$locatie = $_POST['locatie'];
$hotele = $_POST['hotele'];

$conectare = mysqli_connect('localhost', 'root', '', 'turism');
$sql = "SELECT * FROM hotel WHERE hotele='$hotele' AND locatie='$locatie' AND stele='$stele'";
$result = mysqli_query($conectare, $sql);
$row = $result->fetch_assoc();
if($row == 0){
	header("Location: ../");
	die();
} else{
	$hotele = strtolower($_POST['hotele']);
	header("Location: ../views/details_view.php?info=".$hotele);
}

?>