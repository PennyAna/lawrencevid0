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
                <form class="form-group col-9 changeMovieForm" id="newMovieForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <fieldset>
                        <legend>New Movie</legend>
                        <label for="titleName0" class="sr-only">Movie Title: </label>
                        <h5>Add New Movie Name</h5>
                        <input type="" id="titleName0" required placeholder="Movie Title" onblur="checkNewForm()">
                        </input>
                        <div id="titleNameError0" class="errorMsg"></div>
                        <label for="titleInfo0" class="sr-only">Movie Description: </label>
                        <h5>Add New Movie Description</h5>
                        <textarea rows="5" cols="20" id="titleInfo0" optional placeholder="Brief Movie Description" onblur="checkNewForm()">
                        </textarea>
                        <div id="titleInfoError0" class="errorMsg"></div>
                        <label for="genreName0" class="sr-only">Movie Genre: </label>
                        <h5>Add New Movie Genre</h5>
                        <select id="genreName0" required>                                       <option value='0' selected>Choose Genre</option>
                            <option value='1'>Horror</option>
                            <option value='2'>Fantasy</option>
                            <option value='3'>Action</option>
                            <option value='4'>Adventure</option>
                            <option value='5'>Comedy</option>
                            <option value='6'>Drama</option>
                            <option value='7'>Historical</option>
                            <option value='8'>Mystery</option>
                            <option value='9'>Documentary</option>
                            <option value='10'>Romance</option>
                            <option value='11'>Science Fiction</option>
                            <option value='12'>Thriller</option>
                            <option value='13'>Western</option>
                            <option value='14'>Animation</option>
                            <option value='15'>Kids</option>
                            <option value='16'>Television</option>
                        </select>
                        <button type="submit" id="addBtn0">Add New Movie</button>
                        <button type="reset" id="resetBtn0">Reset Movie Info</button>
                    </fieldset> 
                </form> 
                <br><br>
                <div id="newMovieResults" name="newMovieResults">
                    <?php 
                        try {
                            $name = $info = $genre = "";
                            
                            $name = $_POST['titleName0'];
                            $info = $_POST['titleInfo0'];
                            $genre = $_POST['genreName0'];
                            $query4 = "INSERT INTO title SET titlename = LOWER('$name'), titleinfo = LOWER('$info'), genre = LOWER('$genre');
                            $statement = $db->prepare($query4);
                            $statement->exec();
                            echo "<p> '$name' was updated successfully! </p> <ul class='list-group'> <li class='list-group-item'>";
                            echo ucwords($name); 
                            echo "</li><li
                            class='list-group-item'>";
                            echo ucfirst($info);
                            echo ". </li><li class='list-group-item'>";
                            echo ucwords($genre);
                            echo "</li></ul>";
                            }       
                        catch(PDOException $ex) {
                            echo "Error connecting to DB. Details: $ex";
                            die();
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
