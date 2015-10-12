<?php
	session_start();
	require_once("connection.php");
	//var_dump($_POST);

	if(isset($_POST["add_quote"]) && $_POST["add_quote"] == "Add my quote!")
	{
		$errors = array();

		if(empty($_POST["full_name"]))
		{
			$errors[] = "Please provide a name!";
		}
		else if(preg_match("/[0-9]/", $_POST["full_name"]))
		{
			$errors[] = "Please provide a valid name!";
		}

		if(empty($_POST["quote"]))
		{
			$errors[] = "Please provide a quote!";
		}

		if(count($errors) > 0)
		{
			$_SESSION["error_messages"] = $errors;
		}
		else
		{
			$_SESSION["error_messages"] = array();
			$_SESSION["success"] = "Quote added!";

			$query = "INSERT INTO quotes (name, quote, created_at, updated_at)
					  VALUES ('{$_POST['full_name']}', '{$_POST['quote']}', NOW(), NOW())";

			if(run_mysql_query($query))
			{
				$_SESSION["success"] = "Quote added!";
			}
		}
		header("Location: index.php");
	}
	else if(isset($_POST["go_to_quotes"]) && $_POST["go_to_quotes"] == "Skip to quotes!")
	{
		header("Location: main.php");
	}
?>