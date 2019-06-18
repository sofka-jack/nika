<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ways to help</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/progress-bar.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/circle.css">
	<link rel="shortcut icon" href="img/logo.png">
	<link rel="stylesheet" id="fonts-css" href="//fonts.googleapis.com/css?family=Roboto%3A300%2C300i%2C400%2C400i%2C500%2C500i%2C700%2C700i&amp;subset=cyrillic&amp;ver=106" type="text/css" media="all">
</head>
<body>
	<header class="ways-to-help__header">
		<div  class="ways-to-help__logo">
			<a href="index.php"><img src="img/logo.png" alt="ways to help logo" class="logo"></a>
			<h1>A simple ways to help</h1>
		</div>
		<div class="ways-to-help__nav-right">
			<?php 
            if($_SESSION['authUser'] == 1){
            echo '
            <a href="personal-area.php" class="ways-to-help__sign-in btn">Личный кабинет</a>
			<a href="?logout" class="ways-to-help__sign-up btn">Выйти</a>';
            }       
            else{
            echo '
            <a href="sign-in.php" class="ways-to-help__sign-in btn">Вход</a>
			<a href="sign-up.php" class="ways-to-help__sign-up btn">Регистрация</a>';
            } 
            ?> 
		</div>
	</header>