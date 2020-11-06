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
                        <input type="text" id="titleName0"  name="titlename0" placeholder="Movie Title"required>
                        </input>
                        <label for="titleInfo0" class="sr-only">Movie Description: </label>
                        <h5>Add New Movie Description</h5>
                        <textarea rows="5" cols="20" id="titleInfo0" name="titleinfo0"  placeholder="Brief Movie Description">
                        </textarea>
                        <label for="genreName0" class="sr-only">Movie Genre: </label>
                        <h5>Add New Movie Genre</h5>
                        <select id="genreName0" name="genreName0">                           <option value="" selected>Choose Genre</option>
                            <option name="genre0" value='genre0' selected>Choose Genre</option>
                            <option name="horror" value='horror'>Horror</option>
                            <option name="fantasy" value='fantasy'>Fantasy</option>
                            <option name="action"
                            value='action'>Action</option>
                            <option name="adventure" value='adventure'>Adventure</option>
                            <option name="comedy" value='comedy'>Comedy</option>
                            <option name="drama" value='drama'>Drama</option>
                            <option name="historical" value='historical'>Historical</option>
                            <option name="mystery" value='mystery'>Mystery</option>
                            <option name="documentary" value='documentary'>Documentary</option>
                            <option name="romance" value='romance'>Romance</option>
                            <option name="science fiction" value='science fiction'>Science Fiction</option>
                            <option name="thriller" value='thriller'>Thriller</option>
                            <option name="western" value='western'>Western</option>
                            <option name="animation" value='animation'>Animation</option>
                            <option name="kids" value='kids'>Kids</option>
                            <option name="television" value='television'>Television</option>
                        </select>
                        <button type="submit" id="addBtn0" name="addBtn0">Add New Movie</button>
                        <button type="reset" id="resetBtn0">Reset Movie Info</button>
                    </fieldset> 
                </form> 
                <br><br>
                <div id="newMovieResults" name="newMovieResults">
                    <?php 
                        try {
                            echo 'Bubblesstart';
                            echo 'alpha' . $_POST['titlename0'];
                            echo 'beta' . $_POST['titleinfo0'];
                            echo 'zed' . $_POST['genreName0'];
                            $name = strtolower($_POST['titleName0']);
                            $info = strtolower($_POST['titleInfo0']);
                            $genre = strtolower($_POST['genreName0']);
                            echo 'alpha' . $title;
                            echo 'beta' . $info;
                            echo 'zed' . $genre;
                            $query5 = "INSERT INTO title (titlename, titleinfo, genre) VALUES ('$name', '$info', '$genre')";
                            $db->exec($query5);
                                echo "<p> '$name' was updated successfully! </p> <ul class='list-group'> <li class='list-group-item'>";
                                echo ucwords($name); 
                                echo "</li><li class='list-group-item'>";
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
