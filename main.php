<?php
	require_once("connection.php");
?>
<html>
	<head>
		<title>QuotingDojo</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="container1">
			<h2>Here are the awesome quotes!</h2>
			<?php
				$query = "SELECT name, quote, created_at
						  FROM quotes
						  ORDER BY created_at DESC";

				$results = fetch_all($query);

				foreach($results as $row)
				{
					$str_to_time = strtotime($row["created_at"]);
					$date = date("g:ia F d Y", $str_to_time);
			?>
				<p><?= "\"" . $row["quote"] . "\"" ?></p>
				<p class="indent"><?= "- " . $row["name"] . " at " . $date ?></p><hr>
			<?php
				}
			?>
		</div>
	</body>
</html>