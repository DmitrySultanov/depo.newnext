<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Сеть пользователь сообщения пользователю</title>
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
									<div class="_left flex align"><i class="online"></i><h1>Фамилия Имя</h1><div class="contact-status coinvestor mt0">Соинвестор</div></div>
									<div class="_right">
										
										<button type="button" class="tooltip-featured gray-btn s-btn feabtn" title="Добавить контакт в избранные"><i class="panton d">K</i></button>
										<button type="button" class="gray-btn s-btn cogs"><i class="panton c">i</i></button>
									</div>
								</div>
							</div>
						</div>
						<div class="search-form-dialogs form">
							<form action="" target="post_form">
								<div class="element">
									<input type="text" name="search" placeholder="Поиск диалога" />
									<button type="submit">Найти</button>
								</div>
							</form>
						</div>

						<div class="side-block">
							<div class="s-messages">
								<div class="day"><span>Сегодня</span>
									<div class="right-mes-desc">
										<em>Диалог по заявке №1561,</em>
									</div>
								</div>
								<ul class="mes-list user">
									<li>
										<img src="templates/img/user_pic2.jpg" alt=""/>
										<div class="s-contact-info">
											<div class="contact-name">Фамилия Имя</div>
											<div class="contact-message">Привет! Как дела?</div>
											<div class="contact-message">Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский 
											набор слов, но это не совсем. Его корни уходят в один фрагмент классической латыни 45 года н.э., 
											то есть более двух назад.</div>
											<div class="contact-message">Как думаешь?</div>

											<div class="right-mes-desc">
												<div class="tar mb10"><button type="button" class="tooltip-featured featured-btn" title="Отметить как важное"></button></div>
												<span class="time">10:02</span>
											</div>
										</div>
									</li>
									<li>
										<!-- <div class="hover"></div> -->
										<!-- <a href="#"></a> -->
										<img src="templates/img/user_pic1.jpg" alt=""/>
										<div class="s-contact-info">
											<div class="contact-name">Фамилия Имя</div>
											<div class="contact-message">Привет! Отлично! Как у тебя?</div>
											<div class="contact-message">Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, 
											уходят в один фрагмент классической латыни 45 года н.э., то есть более двух назад.</div>

											<div class="right-mes-desc">
												<div class="tar mb10"><button type="button" class="tooltip-featured featured-btn" title="Отметить как важное"></button></div>
												<span class="time">11:22</span>
											</div>
										</div>
									</li>
									<li>
										<!-- <div class="hover"></div> -->
										<!-- <a href="#"></a> -->
										<img src="templates/img/user_pic1.jpg" alt=""/>
										<div class="s-contact-info">
											<div class="contact-name">Фамилия Имя</div>
											<div class="contact-message">Обзор услуги: Проводится методом фоловинга. С помощью специального ПО мы подписываем ваш Instagram аккаунт 
											в день на 500-1000 людей и ставим такое же количество лайков. Те же, кто вами заинтересуется - подписываются взаимно (обычно 10-20%).</div>
											<div class="contact-message">Затем отменяем все подписки от вашего имени. Таким образом в день вы получаете от 50 до 150 по настоящему активных 
											людей, которые будут ставить лайки, писать комментарии в большом количестве. Это будет ваша целевая аудитория, которая заинтересована в 
											вашем аккаунте или товаре.</div>

											<div class="right-mes-desc">
												<div class="tar mb10"><button type="button" class="tooltip-featured featured-btn" title="Отметить как важное"></button></div>
												<span class="time">11:22</span>
											</div>
										</div>
									</li>
									<li>
										<!-- <div class="hover"></div> -->
										<!-- <a href="#"></a> -->
										<img src="templates/img/user_default_add.jpg" alt=""/>
										<div class="s-contact-info">
											<div class="contact-name">Фамилия Имя</div>
											<div class="contact-message">Привет! Есть новости? Я жду договор!</div>

											<div class="right-mes-desc">
												<div class="tar mb10"><button type="button" class="tooltip-featured featured-btn" title="Отметить как важное"></button></div>
												<span class="time">10:02</span>
											</div>
										</div>
									</li>
									<li>
										<!-- <div class="hover"></div> -->
										<!-- <a href="#"></a> -->
										<img src="templates/img/user_pic1.jpg" alt=""/>
										<div class="s-contact-info">
											<div class="contact-name">Фамилия Имя</div>
											<div class="contact-message">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.</div>

											<div class="right-mes-desc">
												<span class="time">22:42</span>
											</div>
										</div>
									</li>
								</ul>
								<div class="day"><span>Вчера</span>
									<div class="right-mes-desc">
										<em>Диалог по заявке №1560,</em>
									</div>
								</div>
								<ul class="mes-list user">
									<li>
										<!-- <div class="hover"></div> -->
										<!-- <a href="#"></a> -->
										<img src="templates/img/user_default_add.jpg" alt=""/>
										<div class="s-contact-info">
											<div class="contact-name">Фамилия Имя</div>
											<div class="contact-message">У нас поверьте самый гуманный ценник) 3 500р месяц</div>

											<div class="right-mes-desc">
												<span class="time">10:02</span>
											</div>
										</div>
									</li>
									<li>
										<!-- <div class="hover"></div> -->
										<!-- <a href="#"></a> -->
										<img src="templates/img/user_pic1.jpg" alt=""/>
										<div class="s-contact-info">
											<div class="contact-name">Фамилия Имя</div>
											<div class="contact-message">Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.</div>

											<div class="right-mes-desc">
												<span class="time">22:42</span>
											</div>
										</div>
									</li>
									<li>
										<!-- <div class="hover"></div> -->
										<!-- <a href="#"></a> -->
										<img src="templates/img/user_pic1.jpg" alt=""/>
										<div class="s-contact-info">
											<div class="contact-name">Фамилия Имя</div>
											<div class="contact-message">Приветик! Как делишки))?</div>

											<div class="right-mes-desc">
												<span class="time">18:51</span>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="enter-mes mes-mes clearfix">
							<div class="form">
								<form action="" target="post_form">
									<div class="element">
										<input type="text" placeholder="Напишите сообщение..." class="mes-input required" name="user-mes" />
									</div>
									<button type="submit">Отправить</button>
								</form>
							</div>
							<i class="clipster panton a">h</i>
						</div>
					</div>

					<div class="rightside">
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