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
        <header>Lawrence Family Video Library</header>
        <main>
            <form class="form-group" id="searchForm" action="search.php" method="POST">
                <fieldset>
                    <legend>Search</legend>
                    <label for="searchMovieName"> Search Movie By Name</label>
                    <input type="text" id="searchMovieName"></input>
                    <button type="submit" id="searchBtn">Search Movies</button>
                </fieldset>
            </form>   <br><br>
            <form class="form-group" id="genreForm" action="genre.php" method="POST" >
                <fieldset>
                    <legend>Genre</legend>
                    <select id="genreSelect">
                        <option>Horror</option>
                        <option>Fantasy</option>
                        <option>Action</option>
                        <option>Adventure</option>
                        <option>Comedy</option>
                        <option>Drama</option>
                        <option>Historical</option>
                        <option>Mystery</option>
                        <option>Documentary</option>
                        <option>Romance</option>
                        <option>Science Fiction</option>
                        <option>Thriller</option>
                        <option>Western</option>
                        <option>Animation</option>
                        <option>Kids</option>
                        <option>Television</option>
                    </select>
                    <button id="genreBtn" type="submit">Sort By Genre</button>
                </fieldset>
            </form> <br><br>
            <!--button to show add new movie form-->
            <input id="showNewBtn" type="button" id="showNewForm" value="Add New Movie"></input>
            Alphabetical Index of Movies
            <ul id="alpha0" class="alphaIndex">
                <li><a href="./alpha.php" id="aIndex">A</a></li>
                <li><a href="./alpha.php" id="bIndex">B</a></li>
                <li><a href="./alpha.php" id="cIndex">C</a></li>
                <li><a href="./alpha.php" id="dIndex">D</a></li>
                <li><a href="./alpha.php" id="eIndex">E</a></li>
                <li><a href="./alpha.php" id="fIndex">F</a></li>
                <li><a href="./alpha.php" id="gIndex">G</a></li>
                <li><a href="./alpha.php" id="hIndex">H</a></li>
                <li><a href="./alpha.php" id="iIndex">I</a></li>
                <li><a href="./alpha.php" id="jIndex">J</a></li>
            </ul> <br>
            <ul id="alpha1" class="alphaIndex">
                <li><a href="./alpha.php" id="kIndex">K</a></li>
                <li><a href="./alpha.php" id="lIndex">L</a></li>
                <li><a href="./alpha.php" id="mIndex">M</a></li>
                <li><a href="./alpha.php" id="nIndex">N</a></li>
                <li><a href="./alpha.php" id="oIndex">O</a></li>
                <li><a href="./alpha.php" id="pIndex">P</a></li>
                <li><a href="./alpha.php" id="qIndex">Q</a></li>
                <li><a href="./alpha.php" id="rIndex">R</a></li>
                <li><a href="./alpha.php" id="sIndex">S</a></li>
                <li><a href="./alpha.php" id="tIndex">T</a></li>
            </ul> <br>
            <ul id="alpha2" class="alphaIndex">
                <li><a href="./alpha.php" id="uIndex">U</a></li>
                <li><a href="./alpha.php" id="vIndex">V</a></li>
                <li><a href="./alpha.php" id="wIndex">W</a></li>
                <li><a href="./alpha.php" id="xIndex">X</a></li>
                <li><a href="./alpha.php" id="yIndex">Y</a></li>
                <li><a href="./alpha.php" id="zIndex">Z</a></li>
            </ul> <br>
            <!--ul ready for populating from database based on letter chosen from index, hidden until filled-->
            <ul id="alphaList">
            <!--need to put 'edit' buttons next to each populated titles-->
            <?php

            ?>
            </ul> <br><br>
            <!--form for inserting new movie information
            hidden until needed-->
            <form class="form-group" id="newMovieForm" action="insert.php" method="POST">
                <fieldset>
                    <legend>New Movie</legend>
                    <label for="titleName0">Movie Title: </label>
                    <input type="" id="titleName0">
                    </input>
                    <label for="titleInfo0">Movie Description: </label>
                    <textarea rows="5" cols="20" id="titleInfo0">
                    </textarea>
                    <label for="genreName0">Movie Genre: </label>
                    <select id="genreName0">
                        <option>Horror</option>
                        <option>Fantasy</option>
                        <option>Action</option>
                        <option>Adventure</option>
                        <option>Comedy</option>
                        <option>Drama</option>
                        <option>Historical</option>
                        <option>Mystery</option>
                        <option>Documentary</option>
                        <option>Romance</option>
                        <option>Science Fiction</option>
                        <option>Thriller</option>
                        <option>Western</option>
                        <option>Animation</option>
                        <option>Kids</option>
                        <option>Television</option>
                    </select>
                    <button type="submit" id="addBtn">Add New Movie</button>
                </fieldset> 
            </form> <br><br>
            <!--form for updating current movie information
            hidden until needed when edit clicked next to movie title-->
            <form class="form-group" id="editMovieForm" action="edit.php" method="POST">
                <fieldset>
                    <legend>Edit Movie Info</legend>
                    <label for="titleName1">Movie Title: </label>
                    <input type="" id="titleName1">
                    </input>
                    <label for="titleInfo1">Movie Description: </label>
                    <textarea rows="5" cols="20" id="titleInfo1">
                    </textarea>
                    <label for="genreName1">Movie Genre: </label>
                    <select id="genreName1">
                        <option>Horror</option>
                        <option>Fantasy</option>
                        <option>Action</option>
                        <option>Adventure</option>
                        <option>Comedy</option>
                        <option>Drama</option>
                        <option>Historical</option>
                        <option>Mystery</option>
                        <option>Documentary</option>
                        <option>Romance</option>
                        <option>Science Fiction</option>
                        <option>Thriller</option>
                        <option>Western</option>
                        <option>Animation</option>
                        <option>Kids</option>
                        <option>Television</option>
                    </select>
                    <button type="submit" id="editBtn">Update Movie Info</button>
                </fieldset>
            </form> <br><br>
            <!-- bootstrap suppts form controls: input, textarea, checkbox, radio, select -->
            <!--bootstrap suppts all html5 input types: text, password, datetime, datetime-local, date, month, time, week, number, email, url, search, tel, and color-->
            <!--labels required for screen readers to process correctly, use .sr-only to hide otherwise-->
        </main>
    </body>
</html>