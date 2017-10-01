<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Сеть пользователь сообщения</title>
	<? include('inc/head.php'); ?>
</head>
<body class="gray">
	<div class="mess_screen"></div>
	<div class="wrapper">
		<header>
			<div class="container clearfix">
				<div class="logo"><a href="#"><img src="templates/img/logo.jpg" alt=""/></a></div>
				<button class="menu-btn" type="button">
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
				</button>
				<div class="auth-user more-info">
					<div class="visible-info">
						<img src="templates/img/user_small1.jpg" height="34" width="34" alt=""/>
						<span>IgorIv81</span>
					</div>
					<ul class="hidden-info">
						<li><a class="user-info-link" href="#"><i class="panton c">u</i> Редактировать профиль</a></li>
						<li><a class="user-info-link" href="#"><i class="panton c">i</i> Настройки</a></li>
						<li><a class="user-info-link" href="#"><i class="panton c">Y</i> Выход</a></li>
					</ul>
				</div>
				<ul class="nav">
					<li><a href="#">Заявки</a></li>
					<li class="active"><a href="#">Сообщения</a>
						<div class="counter">+12</div>
					</li>
					<li><a href="#">Контакты</a></li>
					<li><a href="#">Новости</a></li>
				</ul>
				<div class="search-panel">
					<div class="form">
						<form action="" target="post_form">
							<div class="element">
								<input type="text" name="search" placeholder="Поиск контактов, проектов" />
								<button type="submit"></button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<? include('inc/mobile_menu.php'); ?>
		</header>
		<div class="user-template">
			<div class="container">
				<div class="sides clearfix">
					<div class="centerside">
						<div class="side-block">
							<div class="title-block">
								<div class="flex jcsb align">
									<h1>Мои диалоги</h1>	
									<div class="_right">
										<div class="checkbox">
											<label>
												<input type="checkbox"><i></i>
												<span>Показать только заявки</span>
											</label>
										</div>
										<button type="button" class="gray-btn s-btn cogs"><i class="panton c">i</i></button>
										<button type="button" class="gray-btn s-btn"><i class="panton d">G</i>Сообщение</button>
									</div>
								</div>
							</div>
						</div>
						<div class="search-form-dialogs form">
							<form action="" target="post_form">
								<div class="element">
									<input type="text" name="search" placeholder="Поиск зявки по названию и номеру" />
									<button type="submit">Найти</button>
								</div>
							</form>
						</div>

						<div class="side-block">
							<div class="s-messages">
								<div class="day"><span>Сегодня</span></div>
								<ul class="mes-list">
									<li>
										<div class="hover"></div>
										<a href="#"></a>
										<img src="templates/img/user_pic2.jpg" alt=""/>
										<div class="s-contact-info">
											<div class="contact-name"><i class="online"></i>Фамилия Имя</div>
											<div class="contact-status coinvestor">Соинвестор</div>
											<div class="contact-message">Привет! Как дела?</div>

											<div class="right-mes-desc">
												<em>Диалог по заявке №1561,</em> <span class="time">10:02</span>
											</div>
											<span class="counter"><a href="#">+12</a></span>
										</div>
									</li>
									<li>
										<div class="hover"></div>
										<a href="#"></a>
										<img src="templates/img/user_pic1.jpg" alt=""/>
										<div class="s-contact-info">
											<div class="contact-name"><i class="online"></i>Фамилия Имя</div>
											<div class="contact-status investor">Инвестор</div>
											<div class="contact-message">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.</div>

											<div class="right-mes-desc">
												<span class="time">11:22</span>
											</div>
											<span class="counter"><a href="#">+1</a></span>
										</div>
									</li>
								</ul>
								<div class="day"><span>Вчера</span></div>
								<ul class="mes-list">
									<li>
										<div class="hover"></div>
										<a href="#"></a>
										<img src="templates/img/user_default_add.jpg" alt=""/>
										<div class="s-contact-info">
											<div class="contact-name"><i class="online"></i>Фамилия Имя</div>
											<div class="contact-status coinvestor">Соинвестор</div>
											<div class="contact-message">Привет! Есть новости? Я жду договор!</div>

											<div class="right-mes-desc">
												<em>Диалог по заявке №1561,</em> <span class="time">10:02</span>
											</div>
										</div>
									</li>
									<li>
										<div class="hover"></div>
										<a href="#"></a>
										<img src="templates/img/user_pic1.jpg" alt=""/>
										<div class="s-contact-info">
											<div class="contact-name"><i class="online"></i>Фамилия Имя</div>
											<div class="contact-status investor">Инвестор</div>
											<div class="contact-message">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.</div>

											<div class="right-mes-desc">
												<span class="time">22:42</span>
											</div>
										</div>
									</li>
									<li>
										<div class="hover"></div>
										<a href="#"></a>
										<img src="templates/img/user_pic1.jpg" alt=""/>
										<div class="s-contact-info">
											<div class="contact-name"><i class="online"></i>Фамилия Имя</div>
											<div class="contact-status investor">Инвестор</div>
											<div class="contact-message">Приветик! Как делишки))?</div>

											<div class="right-mes-desc">
												<a href="#">Диалог по заявке №1001,</a> <span class="time">18:51</span>
											</div>
										</div>
									</li>
								</ul>
								<div class="day"><span>21 Января </span></div>
								<ul class="mes-list">
									<li>
										<div class="hover"></div>
										<a href="#"></a>
										<img src="templates/img/user_default_add.jpg" alt=""/>
										<div class="s-contact-info">
											<div class="contact-name">Фамилия Имя</div>
											<div class="contact-status coinvestor">Соинвестор</div>
											<div class="contact-message">Привет! Есть новости? Я жду договор!</div>

											<div class="right-mes-desc">
												<em>Диалог по заявке №1561,</em> <span class="time">10:02</span>
											</div>
										</div>
									</li>
									<li>
										<div class="hover"></div>
										<a href="#"></a>
										<img src="templates/img/user_pic1.jpg" alt=""/>
										<div class="s-contact-info">
											<div class="contact-name">Фамилия Имя</div>
											<div class="contact-status investor">Инвестор</div>
											<div class="contact-message">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.</div>

											<div class="right-mes-desc">
												<span class="time">22:42</span>
											</div>
										</div>
									</li>
									<li>
										<div class="hover"></div>
										<a href="#"></a>
										<img src="templates/img/user_pic1.jpg" alt=""/>
										<div class="s-contact-info">
											<div class="contact-name"><i class="online"></i>Фамилия Имя</div>
											<div class="contact-status investor">Инвестор</div>
											<div class="contact-message">Приветик! Как делишки))?</div>

											<div class="right-mes-desc">
												<a href="#">Диалог по заявке №1001,</a> <span class="time">18:51</span>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>

					</div>

					<div class="rightside">
						<div class="side-block">
							<div class="sb-title">
								<form action="" target="post_form">
									<div class="element clearfix">
										<em>Заявки</em>
										<div class="select sm-select">
											<select name="select_participant" class="select-req select-single required" data-placeholder="Входящие" data-msg-required="Заполните поле">
												<option></option>
												<option>Новатор</option>
												<option>Соинвестор</option>
												<option>Проектор</option>
											</select>
										</div>
									</div>
								</form>
							</div>
							<ul class="blue-links">
								<li><a href="#">№1561 от 12 июля</a><span class="close"><a href="#"><img src="templates/img/close2.png" alt=""></a></span></li>
								<li class="padr"><a href="#">№1560 от 11 июля</a><span class="counter"><a href="#">+12</a></span></li>
								<li><a href="#">№1559 от 9 июля</a><span class="close"><a href="#"><img src="templates/img/close2.png" alt=""></a></span></li>
								<li><a href="#">№1558 от 8 июля</a><span class="close"><a href="#"><img src="templates/img/close2.png" alt=""></a></span></li>
								<li><a href="#">№1557 от 7 июля</a><span class="close"><a href="#"><img src="templates/img/close2.png" alt=""></a></span></li>
								<li><a href="#">Еще <em>37</em> заявок</a></li>
							</ul>
							<div class="sb-title mt10">
								<em>Архив</em>
							</div>
							<div class="archive">
								<p>В архиве пока нет заявок</p>
							</div>
							<div class="empty-block-separator"></div>
						</div>

						<div class="side-block">
							<div class="sb-title">
								<em class="featured-title">Избранные</em>
							</div>
							<div class="t-contacts featured">
								<div class="t-contact online">
									<a href="#"></a>
									<div class="flex">
										<img src="templates/img/user_pic2.jpg" alt=""/>
										<div class="t-contact-info">
											<span class="close"><a href="#"><img src="templates/img/close2.png" alt=""></a></span>
											<div class="contact-name">Фамилия Имя</div>
											<div class="contact-status proektant">Проектант</div>
											<div class="time">Сегодня, 11:30</div>
										</div>
									</div>
								</div>
								<div class="t-contact online">
									<a href="#"></a>
									<div class="flex">
										<img src="templates/img/user_pic3.jpg" alt=""/>
										<div class="t-contact-info">
											<span class="close"><a href="#"><img src="templates/img/close2.png" alt=""></a></span>
											<div class="contact-name">Владислав Кужугетовичer</div>
											<div class="contact-status coinvestor">Соинвестор</div>
											<div class="time">Вчера, 18:10</div>
										</div>
									</div>
								</div>
								<div class="t-contact">
									<a href="#"></a>
									<div class="flex">
										<img src="templates/img/user_pic1.jpg" alt=""/>
										<div class="t-contact-info">
											<span class="close"><a href="#"><img src="templates/img/close2.png" alt=""></a></span>
											<div class="contact-name">Владислав Кужугетовичer</div>
											<div class="contact-status proektant">Проектант</div>
											<div class="time">Вчера, 14:10</div>
										</div>
									</div>
								</div>
								<div class="t-contact">
									<a href="#"></a>
									<div class="flex">
										<img src="templates/img/user_default.jpg" alt=""/>
										<div class="t-contact-info">
											<span class="close"><a href="#"><img src="templates/img/close2.png" alt=""></a></span>
											<div class="contact-name">Владислав Кужугетовичer</div>
											<div class="contact-status proektant">Проектант</div>
											<div class="time">21 june, 18:10</div>
										</div>
									</div>
								</div>
								<div class="t-contact">
									<a href="#"></a>
									<div class="flex">
										<img src="templates/img/user_pic3.jpg" alt=""/>
										<div class="t-contact-info">
											<span class="close"><a href="#"><img src="templates/img/close2.png" alt=""></a></span>
											<div class="contact-name">Владислав Кужугетовичer</div>
											<div class="contact-status proektant">Проектант</div>
											<div class="time">31 august, 03:10</div>
										</div>
									</div>
								</div>
								<div class="view-all">
									<a href="#">Еще 26 контактов</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="foo-bt">
				<div class="copyright">© New Next 2017</div>
				<div class="middle-nav-wrap">
					<ul class="middle-nav flex clearfix">
						<li><a href="#">О проекте</a></li>
						<li><a href="#">Правила</a></li>
						<li><a href="#">Реклама</a></li>
						<li><a href="#">Техподдержка 24/7</a></li>
					</ul>
				</div>
				<div class="lang">
					<span>Язык:</span>
					<div class="lang-select">
						<select name="lang-select" class="select-single">
							<option>Русский</option>
							<option>Английский</option>
						</select>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	<? include('inc/modal.php'); ?>
	<? include('inc/scripts.php'); ?>
</body>
</html>