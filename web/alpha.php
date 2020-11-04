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
                <a class="navbar-brand" href="#">Lawrence Family Video</a>
            </div>
            <button class="btn navbar-btn" onclick="location.href='insert.php'">Add New Movie</button>
            <button class="btn navbar-btn" onclick="location.href='alpha.php'">Search Alphabetically</button>
        </nav>
        <div class="row">
            <h3>Alphabetical Index of Movies</h3>
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
        </div>
    </body>
</html>