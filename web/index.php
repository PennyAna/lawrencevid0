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
            <form class="form-group" action="search.php" method="POST">
                <label for="searchMovieName">Search Movie By Name</label>
                <input type="text" id="searchMovieName">
                </input>
                <button type="submit" id="searchBtn">Search Movies</button>
            </form>
            <form class="form-group" action="genre.php" method="POST" >
                <select id="genreSelect">

                </select>
                <button type="submit">Sort By Genre</button>
            </form>
            <!--button to show add new movie form-->
            <input type="button" id="showNewForm"></input>
            <ul id="alphaIndex">
                Alphabetical Index of Movies
                <li><input? id="aIndex">A</a></li>
                <li><a href="./alpha.php" id="bIndex">B</a></li>
                <li><a href="./alpha.php" id="cIndex">C</a></li>
                <li><a href="./alpha.php" id="dIndex">D</a></li>
                <li><a href="./alpha.php" id="eIndex">E</a></li>
                <li><a href="./alpha.php" id="fIndex">F</a></li>
                <li><a href="./alpha.php" id="gIndex">G</a></li>
                <li><a href="./alpha.php" id="hIndex">H</a></li>
                <li><a href="./alpha.php" id="iIndex">I</a></li>
                <li><a href="./alpha.php" id="jIndex">J</a></li>
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
                <li><a href="./alpha.php" id="uIndex">U</a></li>
                <li><a href="./alpha.php" id="vIndex">V</a></li>
                <li><a href="./alpha.php" id="wIndex">W</a></li>
                <li><a href="./alpha.php" id="xIndex">X</a></li>
                <li><a href="./alpha.php" id="yIndex">Y</a></li>
                <li><a href="./alpha.php" id="zIndex">Z</a></li>
            </ul>
            <!--ul ready for populating from database based on letter chosen from index, hidden until filled-->
            <ul id="alphaList">
            <!--need to put 'edit' buttons next to each populated titles-->
            <?php

            ?>
            </ul>
            <!--form for inserting new movie information
            hidden until needed-->
            <form class="form-group" id="newMovieForm" action="insert.php" method="POST">
                <label for="titleName">Movie Title: </label>
                <input type="" id="titleName">
                </input>
                <label for="titleInfo">Movie Description: </label>
                <textarea rows="10" id="titleInfo">
                </textarea>
                <label for="genreName">Movie Genre: </label>
                <select id="genreName">
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
            </form>
            <!--form for updating current movie information
            hidden until needed when edit clicked next to movie title-->
            <form class="form-group" id="editMovieForm" action="edit.php" method="POST">
                <label for="titleName">Movie Title: </label>
                <input type="" id="titleName">
                </input>
                <label for="titleInfo">Movie Description: </label>
                <textarea rows="10" id="titleInfo">
                </textarea>
                <label for="genreName">Movie Genre: </label>
                <select id="genreName">

                </select>
                <button type="submit" id="editBtn">Update Movie Info</button>
            </form>
            <!-- bootstrap suppts form controls: input, textarea, checkbox, radio, select -->
            <!--bootstrap suppts all html5 input types: text, password, datetime, datetime-local, date, month, time, week, number, email, url, search, tel, and color-->
            <!--labels required for screen readers to process correctly, use .sr-only to hide otherwise-->
        </main>
    </body>
</html>