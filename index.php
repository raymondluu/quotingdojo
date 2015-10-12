<?php
	session_start();
	//$_SESSION = array();
	//var_dump($_SESSION);
	if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"]))
	{
		foreach($_SESSION["error_messages"] as $error)
		{
			echo "<p>" . $error . "</p>";
		}
		$_SESSION["error_messages"] = array();
	}
	else if(isset($_SESSION["success"]))
	{
		echo $_SESSION["success"];
		$_SESSION["success"] = "";
	}
?>
<html>
	<head>
		<title>QuotingDojo</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="container">
			<h1 class="centered">Welcome to QuotingDojo</h1>
			<form id="form" action="process.php" method="post">
				<h2 class="inline">Your name:</h2>
				<input class="name" type="text" name="full_name">
				<h2 class="inline">Your quote:</h2>
				<textarea form="form" name="quote"></textarea>
				<input class="button" type="submit" name="add_quote" value="Add my quote!">
				<input class="button" type="submit" name="go_to_quotes" value="Skip to quotes!">
			</form>
		</div>
	</body>
</html>