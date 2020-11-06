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
                	<a class="navbar-brand nav-justified" href="index.php">Lawrence Family Video</a>
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
                            echo "<input type='checkbox' id='$name' value='$name' name='namelist'> <ul id='movielist' name='movielist' class='list-group'><li class='list-group-item'>";
                            echo ucwords($name); 
                            echo "</li><li class='list-group-item'>";
                            echo ucfirst($info) . ".";
                            echo "</li> <li class='list-group-item'>";
                            echo ucfirst($genre);
                            echo "</li></ul>";
                        }    
                    }
                    catch(PDOException $ex) {
                        echo "Error connecting to DB. Details: $ex";
                        die();
                    }
                ?>
                <input type="submit" id="sendToEdit" name="sendToEdit"></input>
                </form>
            </div>
        </div>
    </body>
</html>