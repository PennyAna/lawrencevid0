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
            <!--form for updating current movie information
            hidden until needed when edit clicked next to movie title-->
            <form class="form-group" id="editMovieForm" action="edit.php" method="POST">
                <fieldset>
                    <legend>Edit Movie Info</legend>
                    <label for="titleName1">Movie Title: </label>
                    <input type="" id="titleName1">
                    </input>
                    <label for="titleInfo1">Movie Description: </label>
                    <textarea rows="10" id="titleInfo1">
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
            </form>
            <!-- bootstrap suppts form controls: input, textarea, checkbox, radio, select -->
            <!--bootstrap suppts all html5 input types: text, password, datetime, datetime-local, date, month, time, week, number, email, url, search, tel, and color-->
            <!--labels required for screen readers to process correctly, use .sr-only to hide otherwise-->
        </main>
    </body>
</html>