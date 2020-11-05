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
        <!--form for updating current movie information
         until needed when edit clicked next to movie title-->
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
            <form class="form-group col-9 changeMovieForm" id="editMovieForm" action="edit.php" method="POST">
                <fieldset>
                    <legend>Edit Movie Info</legend>
                    <label for="titleName1" class="sr-only">Movie Title: </label>
                    <h5>Add New Movie Name</h5>
                    <input type="" id="titleName1" required placeholder="Movie Title" onblur="checkEditForm()">
                    </input>
                    <div id="titleNameError1" class="errorMsg"></div>
                    <label for="titleInfo1" class="sr-only" optional>Movie Description: </label>
                    <h5>Add New Movie Description</h5>
                    <textarea rows="5" cols="20" id="titleInfo1" placeholder="Brief Movie Description" onblur="checkEditForm()">
                    </textarea>
                    <div id="titleInfoError1" class="errorMsg"></div>
                    <label for="genreName1" class="sr-only">Movie Genre: </label>
                    <h5>Add New Movie Genre</h5>
                    <select id="genreName1" required>
                        <option value='0' selected>Choose Genre</option>
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
                    <button type="submit" id="editBtn1">Update Movie Info</button>
                    <button type="reset" id="resetBtn1">Reset Movie Info</button>
                </fieldset>
            </form> <br><br>
        </div>
</div>
    </body>
</html>