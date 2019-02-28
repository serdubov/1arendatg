<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://unpkg.com/ionicons@4.4.4/dist/ionicons.js"></script>
        <link href="<?$_SERVER['DOCUMENT_ROOT']?>/css/datepicker.min.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="<?$_SERVER['DOCUMENT_ROOT']?>/css/swiper.min.css">
        <link rel="stylesheet" href="<?$_SERVER['DOCUMENT_ROOT']?>/css/header.css">
        <link rel="stylesheet" href="<?$_SERVER['DOCUMENT_ROOT']?>/css/style.css">
        <link rel="stylesheet" href="<?$_SERVER['DOCUMENT_ROOT']?>/css/style_services.css">
        <link rel="stylesheet" href="<?$_SERVER['DOCUMENT_ROOT']?>/css/adaptive.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="<?$_SERVER['DOCUMENT_ROOT']?>/js/script.js"></script>
        <script src="<?$_SERVER['DOCUMENT_ROOT']?>/js/datepicker.min.js"></script>
        <title>Аренда-ТГ</title>
	</head>
	<body>
		<section class="main_wrapper">
		<header>
			<div class="menu_container">
				<div class="menu_container-wrapper">
                    <div class="logo-img">
                        <a href="/">
                            <img src="<?$_SERVER['DOCUMENT_ROOT']?>/img/logos/logow.png" alt="">
                        </a>
                    </div>
                    <div class="menu-button " id="open_menu">
                        <span class="d-none d-md-block">МЕНЮ</span>
                        <i class="material-icons d-md-none d-block">drag_handle</i>
                    </div>
                    <div class="city-toggle d-none d-md-flex">
                        <div class="tack-city-correct">
                            <span class="correct-city">Выбрать город</span> 
                            <div class="task-city-container">
                                <ul class="city-list">
                                    <li class="city-item" id="city-first" >СЫКТЫВКАР</li>
                                    <li class="city-item" id="city-second">УХТА</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="menu-section transition-5s">
                <div class="menu-section-inside">
                    <div class="section-line">
                        <div class="menu-button" id='close_menu'>
                            <span class="d-none d-md-block">ЗАКРЫТЬ</span>
                            <i class="material-icons d-md-none d-block">close</i>
                        </div>
                    </div> 
                    <div class="menu-wrapper-section">
                        <div class="logo-img-menu d-md-none d-none d-lg-block">
                            <img src="<?$_SERVER['DOCUMENT_ROOT']?>/img/logos/logow.png" alt="">
                        </div> 
                        <div class="menu-item">
                            <nav>
                                <ul class="menu-list">
                                    <li><a href="/">Главная</a></li>
                                    <li><a href="/houses/">Квартиры</a></li> 
                                    <li><a href="/services/">Услуги</a></li> 
                                    <li><a href="/actions/">Акции</a></li> 
                                    <li><a href="#contacts" id='close_menu_b'>Контакты</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
        </header>