<?php
require("dbConnect.php");
$db = get_db();
echo "Bubbles Start";
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
            <!--holds search by movie name field/button-->
            <form class="form-group col-xs-12" id="searchForm"  method="POST" action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"]);?>">
                <fieldset>
                    <legend>Search</legend>
                    <label for="searchMovieName" class="sr-only"> Search Movie By Name</label>
                    <h5>Search Movie By Name</h5>
                    <input type="text" id="searchMovieName" name="searchMovieName" placeholder='Search Movie Name' onblur="checkTitleSearch()"></input>
                    <div id="searchTitleError" class="errorMsg" name="searchTitleError"></div>
                    <input type="submit" id="searchBtn" name="searchBtn" value="Search Movies"></input>
                </fieldset>
            </form>   
        </div>
        <div class="row">
            <form class="form-group col-xs-12" id="genreForm"  method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                    <fieldset>
                        <legend>Genre</legend>
                        <h5>Search By Genre</h5>
                        <select id="genreSelect" name="genreSelect">
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
                        <input id="genreBtn" type="submit" name="genreBtn" value="Sort By Genre"></input>
                    </fieldset>
            </form> 
        </div>
        <div class="row">
            <h3>Results of Title Search</h3>
            <div id="searchResults" class="col-xs-12">
            <?php
            	try {
                    $searchName = "";
                    $name = $info = $genre = "";
                    $searchName = $_POST['searchMovieName'];
                    $query1 = "SELECT titlename, titleinfo, genre FROM title WHERE '$searchName' = titlename";
                    $statement = $db->prepare($query1);
                    $statement->execute();
					while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
						 $name = $row['titlename'];
						 $info = $row['titleinfo'];
                         $genre = $row['genre'];
                         echo $name . "\n"; 
                         echo $info . "\n"; 
                         echo $genre . "\n";
                    }       
				}
				catch(PDOException $ex) {
					echo "Error connecting to DB. Details: $ex";
					die();
				}
			?>
            </div>
        </div>
        <div class="row">
            <h3>Results of Genre Search</h3>
            <ul id="genreList" class="col-xs-12 list-group">
            <!--<need to put 'edit' buttons next to each populated titles-->
            <?php
            	try {
                    $name = $info = "";
                    $genre = $_POST['genreSelect'];
                    $query2 = "SELECT * FROM title WHERE '$genre' = genre";
                    $statement = $db->prepare($query2);
                    $statement->execute();
					while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
						 $name = $row['titlename'];
						 $info = $row['titleinfo'];
                         echo $name . "\n"; 
                         echo $info . "\n"; 
                    }       
				}
				catch(PDOException $ex) {
					echo "Error connecting to DB. Details: $ex";
					die();
				}
			?>
            </ul> <br><br>
		</div>
    </div>
    <!-- <script src="./lawVid.js"></script> -->
    </body>
</html>