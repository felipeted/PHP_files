<?php

require_once("config.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Teste</title>
	<style type="text/css">
		.textarea{
			height: 50px;
			width: 200px;
		}
	</style>
</head>
<body>
<form action="action1.php" method="post">
	Nome:<br>
	<input type="text" name="nome">
	<br>
	Diga-me, o que você quer?
	<br>
	<textarea name="texto" class="textarea"></textarea>
	<br>
	<input type="submit" name="ok">
</form>
</body>
</html>