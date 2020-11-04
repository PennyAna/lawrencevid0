<?php
require("dbConnect.php");
$db = get_db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lawrence Video</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css" type="text/css">
	<script src="./lawVid.js"></script>
</head>
    <body>
	<nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Lawrence Family Video</a>
            </div>
            <button class="btn navbar-btn" onclick="location.href='insert.php'">Add New Movie</button>
            <button class="btn navbar-btn" onclick="location.href='alpha.php'">Search Alphabetically</button>
        </nav>
        <div class="row">
            <h3>Results of Genre Search</h3>
            <ul id="genreList" class="col-9 list-group">
            <!--need to put 'edit' buttons next to each populated titles-->
            <?php

            ?>
            </ul> <br><br>
		</div>
    </body>
</html>