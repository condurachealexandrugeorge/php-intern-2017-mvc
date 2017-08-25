<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
<div class="containerr">
<div class="obiectiv">
<h5>Search Hotel</h5>
</div>
<form class="completare" method="POST" action="../core/search.php">
	<select name="stele" form="carform">
 		<option value="3">⚝ ⚝ ⚝</option>
  		<option value="4">⚝ ⚝ ⚝ ⚝</option>
	</select><br>
	<select name="locatie" form="carform">
 		<option value="Mamaia">Mamaia</option>
  		<option value="Costinesti">Costinesti</option>
  		<option value="Mangalia">Mangalia</option>
	</select><br>
	<input type="text" name="hotele" placeholder="Name hotel" required><br>
	<button>Search</button>
</form>
</div>
</body>
<script type="text/javascript">
	$('input').keydown(function() {
    str = $(this).val();
    str = str.replace(/\s/g,'');
    $(this).val(str);
});
</script>
</html>
