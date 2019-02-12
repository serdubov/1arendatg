<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="<?$_SERVER['DOCUMENT_ROOT']?>/css/header.css">
        <title>Аренда-ТГ</title>
	</head>
	<body>
		<section class="main_wrapper">
		<header>
			<div class="menu_container">
				<div class="menu_container-wrapper">
                    <div class="logo-img">
                        <img src="<?$_SERVER['DOCUMENT_ROOT']?>/img/logos/logow.png" alt="">
                    </div>
                    <div class="menu-button">
                        МЕНЮ
                    </div>
                    <div class="city-toggle">
                        <div class="tack-city-correct">
                            Выбрать город
                            <div class="task-city-container">
                                <ul class="city-list">
                                    <li id="city-first" class="city-item">СЫКТЫВКАР</li>
                                    <li id="city-second" class="city-item">УХТА</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="menu-section">
                <div class="menu-section-inside">
                    <div class="section-line">
                        <div class="menu-button">ЗАКРЫТЬ</div>
                    </div> 
                    <div class="menu-wrapper-section">
                        <div class="logo-img-menu">
                            <img src="<?$_SERVER['DOCUMENT_ROOT']?>/img/logos/logow.png" alt="">
                        </div> 
                        <div class="menu-item">
                            <nav>
                                <ul class="menu-list">
                                    <li><a href="/index.php" class="">Главная</a></li>
                                    <li><a href="#" class="">Квартиры</a></li> 
                                    <li><a href="#" class="">Услуги</a></li> 
                                    <li><a href="#" class="">Акции</a></li> 
                                    <li><a href="#" >Контакты</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
        </header>