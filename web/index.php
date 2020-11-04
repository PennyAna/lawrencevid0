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
</head>
    <body>
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Lawrence Family Video</a>
            </div>
            <button class="btn navbar-btn" onclick="location.href='insert.php'">Add New Movie</button>
            <button class="btn navbar-btn" onclick="location.href='alpha.php'">Search Alphabetically</button>
        </nav>
        <div class="container-fluid">
        <div class="row">
            <!--holds search by movie name field/button-->
            <form class="form-group col-9" id="searchForm" action="search.php" method="POST">
                <fieldset>
                    <legend>Search</legend>
                    <label for="searchMovieName" class="sr-only"> Search Movie By Name</label>
                    <h5>Search Movie By Name</h5>
                    <input type="text" id="searchMovieName" placeholder='Search Movie Name' onblur="checkTitleSearch()"></input>
                    <div id="searchTitleError" class="errorMsg"></div>
                    <button type="submit" id="searchBtn">Search Movies</button>
                </fieldset>
            </form>   
        </div>
        <div class="row">
            <form class="form-group col-9" id="genreForm" action="genre.php" method="POST" >
                    <fieldset>
                        <legend>Genre</legend>
                        <h5>Search By Genre</h5>
                        <select id="genreSelect">
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
                        <button id="genreBtn" type="submit">Sort By Genre</button>
                    </fieldset>
            </form> 
        </div>
    </div>
    <!-- <script src="./lawVid.js"></script> -->
    </body>
</html>