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
	<nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand nav-justified" href="index.php">Lawrence Family Video</a>
            </div>
            <button class="btn navbar-btn" onclick="location.href='insert.php'">Add New Movie</button>
            <button class="btn navbar-btn" onclick="location.href='alpha.php'">Search Alphabetically</button>
        </nav>
		<div class="container-fluid">
        <div class="row">
            <h3>Results of Title Search</h3>
            <div id="searchResults">
			<?php
				if (isset($_POST['searchMovieName'])) {
					$searchName = $_POST['searchMovieName'];
					echo $_POST['searchMovieName'].value;
				}
				else { echo "post did not work";}
				try {
					$query = $db->prepare('SELECT titlename, titleinfo, genreid FROM title WHERE $searchName = titlename');
					$query->execute();
					while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
						$name = $row['titlename'];
						$info = $row['titleinfo'];
						$genre = $row['genreid'];
					}
					echo $name . "\n"; 
					echo $info . "\n"; 
					echo $genre . "\n"; 
					try {
						$query = $db->prepare('SELECT genreid, genrename FROM genre WHERE genreid = $genre');
						$query->execute();
						while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
							$genreid = $row['genreid'];
							$genrename = $row['genrename'];
						}
						echo $genreid . "\n";
						echo $genrename . "\n";
					}
					catch(PDOException $ex) {
						echo "Error connecting to DB. Details: $ex";
						die();
					}
				}
				catch(PDOException $ex) {
					echo "Error connecting to DB. Details: $ex";
					die();
				}
			?>
			</div>
</div>
    </body>
</html>