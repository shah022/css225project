<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Мой профиль</title>
	<link href="css/index.css" rel="stylesheet" type="text/css"/>
	<link href="css/MyProfile.css" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,500,900&amp;subset=cyrillic" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Modak&display=swap&subset=devanagari,latin-ext" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet"> 
</head>
<body>
	<div class="top-part"> 
		
		<img id="logo" src="img/logo.jpg">
		<h1 id="logo_name">Health Care</h1>
		<div class="log">
			<?php
				if(!isset($_COOKIE['user'])):
			?>
				<a href="SignIn.html" id="login">Войти<a>
				<a href="SignUp.html" id="register">Зарегистрироваться<a>
			<?php else: ?>
				<div style="display: flex;">
					<p style="font-family: 'Montserrat', sans-serif;
						margin-right: 5px;
						color: #fff;
						border: 1px solid #fff;
						padding: 10px;
						border-radius: 5px;" 
					><?=$_COOKIE['user']?></p>
					<a href="php/exit.php"
						style="font-family: 'Montserrat', sans-serif;
						margin-right: 5px;
						color: #fff;
						border: 1px solid #fff;
						padding: 10px;
						border-radius: 5px;
						}" 
					>Выйти</a>
				</div>
			<?php endif;?>
		</div>
		
	</div>
	<div class="center-part">
		<div class="left">
			<div class="menu">
					
					<a id="menu" href="Main.html">Главная страница</a>
				
					<a id="menu" href="MyProfile.html">Мой профиль</a>
				
					<a id="menu" href="Search.html">Поиск</a>
				
					<a id="menu" href="Help.html">Онлайн помощь</a>
				
					<a id="menu" href="Basket.html">Корзина</a>
				
			</div>
		</div>
		
		<div class="center">
			<h3>Профиль</h3>
			<div class="info">
				
				<span class="infoName">Имя:</span> <span class="infoDate">
					<?php
					if(isset($_COOKIE['user']))
						echo $_COOKIE['user'];
					?>
						
				</span></br>
				<span class="infoName">Фамилия:</span> <span class="infoDate">
					<?php
					if(isset($_COOKIE['surname']))
						echo $_COOKIE['surname'];
					
					?>
						
				</span></br>
				<span class="infoName">Email:</span> <span class="infoDate">
					<?php
					if(isset($_COOKIE['email']))
						echo $_COOKIE['email'];
					
					?>
						
				</span></br>
			</div>
		</div>
		
		<div class="right">
			<img id="advt1" src="img/advt.jfif">
			<img id="advt2" src="img/advt.jfif">
		</div>
	
	</div>
	<div class="bottom-part">
		<div class="contacts"><p>Контакты:</p><p>+7 705 833 93 02</p></div>
		<div class="contacts"><p>Почта:</p><p>shah.022@bk.ru</p></div>
		<div class="contacts"><p>Адрес компании:</p><p>Кызылординская область, поселок Жалагаш</p></div>
	<div>
</body>

</html>