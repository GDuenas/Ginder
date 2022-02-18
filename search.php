<?php

session_start();

$con = mysqli_connect(localhost, 'root', 'placeholder');

mysqli_select_db($can, 'users');

$user = $_POST['user'];
$game = $_POST['game'];
$console = $_POST['console'];
$rank = $_POST['rank'];

if (empty(user)) {
	$user = "*";
}

if (empty(game)) {
	$game = "*";
}

if (empty(console)) {
	$console = "*";
}

if (empty(rank)) {
	$rank = "*";
}

$search = "SELECT * FROM usertable WHERE user='$user' AND game='$game' AND console='$console' AND rank='$rank'";

$result = mysqli_query($con, $search);