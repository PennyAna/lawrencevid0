<?php
require("dbConnect.php");
$db = get_db();
echo "Bubbles0";
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
            <form class="form-group col-xs-12" id="searchForm"  method="POST" action="<?php $_SERVER["PHP_SELF"]?>">
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
            <form class="form-group col-xs-12" id="genreForm"  method="POST" action="<?php $_SERVER["PHP_SELF"]?>">
                    <fieldset>
                        <legend>Genre</legend>
                        <h5>Search By Genre</h5>
                        <select id="genreSelect" name="genreSelect">
                            <option name="genre0" value='0' selected>Choose Genre</option>
                            <option name="genre1" value='1'>Horror</option>
                            <option name="genre2" value='2'>Fantasy</option>
                            <option name="genre3"
                            value='3'>Action</option>
                            <option name="genre4" value='4'>Adventure</option>
                            <option name="genre5" value='5'>Comedy</option>
                            <option name="genre6" value='6'>Drama</option>
                            <option name="genre7" value='7'>Historical</option>
                            <option name="genre8" value='8'>Mystery</option>
                            <option name="genre9" value='9'>Documentary</option>
                            <option name="genre10" value='10'>Romance</option>
                            <option name="genre11" value='11'>Science Fiction</option>
                            <option name="genre12" value='12'>Thriller</option>
                            <option name="genre13" value='13'>Western</option>
                            <option name="genre14" value='14'>Animation</option>
                            <option name="genre15" value='15'>Kids</option>
                            <option name="genre16" value='16'>Television</option>
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
                    function test_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }
                    echo $_POST['searchMovieName'];
                    $searchName = "";
                    $name = $info = $genre = "";
                    $genreid = $genrename = "";
                    $searchName = test_input($_POST['searchMovieName']);
                    $query = "SELECT titlename, titleinfo, genreid FROM title WHERE '$searchName' = titlename";
                    $statement = $db->prepare($query);
                    $statement->execute();
					while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
						 $name = $row['titlename'];
						 $info = $row['titleinfo'];
                         $genre = $row['genreid'];
                         echo $name . "\n"; 
					    echo $info . "\n"; 
                        echo $genre . "\n";
                    }                    
                }
                  /*   try {
                        $query = "SELECT genreid, genrename FROM genre WHERE genreid = '$genre'";
                        $statement = $db->prepare($query);
						$statement->execute();
						while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
						    $genreid = $row['genreid'];
							$genrename = $row['genrename'];
                        }
                        $statement->closeCursor();
						echo $genreid . "\n";
                        echo $genrename . "\n";
					}
					catch(PDOException $ex) {
						echo "Error connecting to DB. Details: $ex";
						die();
					} */
				catch(PDOException $ex) {
					echo "Error connecting to DB. Details: $ex";
					die();
				}
			?>
        </div>
     <!--    <div class="row">
            <h3>Results of Genre Search</h3>
            <ul id="genreList" class="col-xs-12 list-group">
            <need to put 'edit' buttons next to each populated titles-->
           <!-- <?php

            ?>
            </ul> <br><br>
		</div> -->
    </div>
    <!-- <script src="./lawVid.js"></script> -->
    </body>
</html>