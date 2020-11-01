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
            <!--form for inserting new movie information
            hidden until needed-->
            <form class="form-group" id="newMovieForm" action="insert.php" method="POST">
                <fieldset>
                    <legend>New Movie</legend>
                    <label for="titleName0">Movie Title: </label>
                    <input type="" id="titleName0">
                    </input>
                    <label for="titleInfo0">Movie Description: </label>
                    <textarea rows="10" id="titleInfo0">
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
            </form>
        </main>
    </body>
</html>