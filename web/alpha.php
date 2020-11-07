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
            	<div class="navbar-header row">
                	<a href="index.php" class="navbar-brand nav-justified">Lawrence Family Video</a>
				</div>
				<div class="row">
            		<button class="btn navbar-btn" onclick="location.href='insert.php'">Add New Movie</button>
					<button class="btn navbar-btn" onclick="location.href='alpha.php'">Search Alphabetically</button>
				</div>
			</div>
    	</nav>
        <div class="container-fluid">
            <div class="row">
                <h3>Alphabetical List of Movies</h3>
                <form class="form-group" id="alphalist" name="alphalist" action="edit.php" method="POST">
                <?php
                    try {
                        $name = $info = $genre = "";
                        $query3 = "SELECT * FROM title ORDER BY titlename ASC";
                        $statement = $db->prepare($query3);
                        $statement->execute();
                        while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                            $name = $row['titlename'];
                            $info = $row['titleinfo'];
                            $genre = $row['genre'];
                            echo "<div class='table-responsive'> <table class='table'>";
                            echo "<thead><tr><th>Movie Title</th><th>Movie Description</th><th>Movie Genre</th></tr></thead>";
                            echo "<tbody><tr><td>";
                            echo "<input type='radio' id='$name' value='$name' name='namelist'></td><td>" 
                            echo ucwords($name); 
                            echo "</td><td>";
                            echo ucfirst($info);
                            echo "</td><td>";
                            echo ucwords($genre);
                            echo "</td></tr></tbody></table></div>";
                        }    
                    }
                    catch(PDOException $ex) {
                        echo "Error connecting to DB. Details: $ex";
                        die();
                    }
                ?>
                <input type="submit" class="btn" id="sendToEdit" name="sendToEdit"></input>
                </form>
            </div>
        </div>
    </body>
</html>