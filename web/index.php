<?php
session_start();
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
        <header>Lawrence Family Video Library</header>
        <div class="row">
            <input type="text" style="display:none" autofocus="true"></input>
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
            <div id="searchFormResults">

            </div>
            <br><br>
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
            </form> <br><br>
            <div id="genreSearchForm">

            </div>
        </div>
        <div class="row">
            <!--button to show add new movie form-->
            <input id="showNewBtn" type="button" id="showNewForm" value="Add New Movie" class="col-9"></input>
            <br><br><br>
        </div>
        <div class="row">
            Alphabetical Index of Movies
            <ul id="alpha0" class="alphaIndex col-3">
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
            <ul id="alpha1" class="alphaIndex col-3">
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
            <ul id="alpha2" class="alphaIndex col-3">
                <li><a href="./alpha.php" id="uIndex">U</a></li>
                <li><a href="./alpha.php" id="vIndex">V</a></li>
                <li><a href="./alpha.php" id="wIndex">W</a></li>
                <li><a href="./alpha.php" id="xIndex">X</a></li>
                <li><a href="./alpha.php" id="yIndex">Y</a></li>
                <li><a href="./alpha.php" id="zIndex">Z</a></li>
            </ul> <br>
            <!--ul ready for populating from database based on letter chosen from index, until filled-->
            <ul id="alphaList" class="col-3">
            <!--need to put 'edit' buttons next to each populated titles-->
            <?php

            ?>
            </ul> <br><br>
            <!--form for inserting new movie information
         until needed-->
    </div>
            <div class="row">
            <form class="form-group col-9 changeMovieForm" id="newMovieForm" action="insert.php" method="POST">
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
                    <select id="genreName0" required>
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
                    <button type="submit" id="addBtn0">Add New Movie</button>
                    <button type="reset" id="resetBtn0">Reset Movie Info</button>
                </fieldset> 
            </form> <br><br>
        </div>
            <!--form for updating current movie information
         until needed when edit clicked next to movie title-->
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
            <!-- bootstrap suppts form controls: input, textarea, checkbox, radio, select -->
            <!--bootstrap suppts all html5 input types: text, password, datetime, datetime-local, date, month, time, week, number, email, url, search, tel, and color-->
            <!--labels required for screen readers to process correctly, use .sr-only to hide otherwise-->
    
<script src="./lawVid.js"></script>
</body>
</html>