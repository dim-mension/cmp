<?php include 'calendar.php'?>
<!DOCTYPE html>
<html>
	<head>
		<title>Lab 1</title>
		<meta charset = "win1251"/>
		<link rel="stylesheet" type="text/css" href="style.css">
	<body>
<div>
	<?php if(!empty($_POST['info'])){
		echo "You've entered: \"{$_POST['info']}\".";
	} ?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<input type = "text" autofocus name = "info"/>
		<input class = "btn" type = "submit" name="submit" value = "Ok"/>
	</form>
	<?php if(!empty($_POST['year']) && !empty($_POST['month']))
		makeCalendar($_POST['year'], $_POST['month']);
	?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST"> 
		<label>Год: </label><br>
		<input type = "text" name = "year"><br>
		<label>Месяц: </label><br>
		<input type = "text" name = "month">
		<input  class = "btn" type = "submit" name="submit" value = "Календарь"/>
</div>
	</body>
</html>
