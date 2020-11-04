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
    <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Lawrence Family Video</a>
            </div>
            <button class="btn navbar-btn" onclick="location.href='insert.php'">Add New Movie</button>
            <button class="btn navbar-btn" onclick="location.href='alpha.php'">Search Alphabetically</button>
        </nav>
        <div class="container-fluid">
        <div class="row">
            <h3>Alphabetical Index of Movies</h3>
            <ul id="alpha0" class="alphaIndex col-9 list-group">
                <a href="./alpha.php" id="aIndex" class="list-group-item">A</a>
                <a href="./alpha.php" id="bIndex" class="list-group-item">B</a>
                <a href="./alpha.php" id="cIndex" class="list-group-item">C</a>
                <a href="./alpha.php" id="dIndex" class="list-group-item">D</a>
                <a href="./alpha.php" id="eIndex" class="list-group-item">E</a>
                <a href="./alpha.php" id="fIndex" class="list-group-item">F</a>
                <a href="./alpha.php" id="gIndex" class="list-group-item">G</a>
                <a href="./alpha.php" id="hIndex" class="list-group-item">H</a>
                <a href="./alpha.php" id="iIndex" class="list-group-item">I</a>
                <a href="./alpha.php" id="jIndex" class="list-group-item">J</a>
            </ul> <br>
            <ul id="alpha1" class="alphaIndex col-9 list-group">
                <a href="./alpha.php" id="kIndex" class="list-group-item">K</a>
                <a href="./alpha.php" id="lIndex" class="list-group-item">L</a>
                <a href="./alpha.php" id="mIndex" class="list-group-item">M</a>
                <a href="./alpha.php" id="nIndex" class="list-group-item">N</a>
                <a href="./alpha.php" id="oIndex" class="list-group-item">O</a>
                <a href="./alpha.php" id="pIndex" class="list-group-item">P</a>
                <a href="./alpha.php" id="qIndex"class="list-group-item" class="list-group-item">Q</a>
                <a href="./alpha.php" id="rIndex" class="list-group-item">R</a>
                <a href="./alpha.php" id="sIndex" class="list-group-item">S</a>
                <a href="./alpha.php" id="tIndex" class="list-group-item">T</a>
            </ul> <br>
            <ul id="alpha2" class="alphaIndex col-9 list-group">
                <a href="./alpha.php" id="uIndex" class="list-group-item">U</a>
                <a href="./alpha.php" id="vIndex" class="list-group-item">V</a>
                <a href="./alpha.php" id="wIndex" class="list-group-item">W</a>
                <a href="./alpha.php" id="xIndex" class="list-group-item">X</a>
                <a href="./alpha.php" id="yIndex" class="list-group-item">Y</a>
                <a href="./alpha.php" id="zIndex" class="list-group-item">Z</a>
            </ul> <br>
            <!--ul ready for populating from database based on letter chosen from index, until filled-->
            <ul id="alphaList" class="col-9 list-group">
            <!--need to put 'edit' buttons next to each populated titles-->
            <?php

            ?>
            </ul> <br><br>
        </div>
</div>
    </body>
</html>