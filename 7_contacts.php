<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Сеть контакты</title>
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
					<li><a href="#">Сообщения</a>
					</li>
					<li class="active"><a href="#">Контакты</a><div class="counter">+4</div></li>
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
					<div class="centerside tabs-wrapper contacts">
						<div class="side-block">
							<ul class="tabs">
								<li class="active"><span>Контакты</span> <i>2877</i></li>
								<li><span>Запросы</span> <i>+12</i></li>
							</ul>
						</div>
						<div class="search-form-dialogs form">
							<form action="" target="post_form">
								<div class="element">
									<input type="text" name="search" placeholder="Поиск по фио, типу участника" />
									<button type="submit">Найти</button>
								</div>
							</form>
						</div>
						<div class="side-block">
							<ul class="tab_content">
								<li>
									<div class="s-messages">
										<ul class="mes-list">
											<li>
												<div class="hover"></div>
												<a href="#"></a>
												<img src="templates/img/user_pic2.jpg" alt=""/>
												<div class="s-contact-info">
													<div class="contact-name"><i class="offline"></i>Фамилия Имя</div>
													<div class="contact-status coinvestor">Соинвестор</div>

													<div class="right-mes-desc">
														<span class="time">Был в 10:02</span>
													</div>
												</div>
											</li>
											<li>
												<div class="hover"></div>
												<a href="#"></a>
												<img src="templates/img/user_pic1.jpg" alt=""/>
												<div class="s-contact-info">
													<div class="contact-name"><i class="offline"></i>Фамилия Имя</div>
													<div class="contact-status investor">Инвестор</div>

													<div class="right-mes-desc">
														<span class="time">Был вчера</span>
													</div>
												</div>
											</li>
											<li>
												<div class="hover"></div>
												<a href="#"></a>
												<img src="templates/img/user_pic2.jpg" alt=""/>
												<div class="s-contact-info">
													<div class="contact-name"><i class="online"></i>Фамилия Имя</div>
													<div class="contact-status proektant">Проектант</div>

													<div class="right-mes-desc">
														<span class="time">В сети</span>
													</div>
												</div>
											</li>
											<li>
												<div class="hover"></div>
												<a href="#"></a>
												<img src="templates/img/user_pic1.jpg" alt=""/>
												<div class="s-contact-info">
													<div class="contact-name"><i class="offline"></i>Фамилия Имя</div>
													<div class="contact-status investor">Инвестор</div>

													<div class="right-mes-desc">
														<span class="time">Был вчера</span>
													</div>
												</div>
											</li>
											<li>
												<div class="hover"></div>
												<a href="#"></a>
												<img src="templates/img/user_pic2.jpg" alt=""/>
												<div class="s-contact-info">
													<div class="contact-name"><i class="offline"></i>Фамилия Имя</div>
													<div class="contact-status coinvestor">Соинвестор</div>

													<div class="right-mes-desc">
														<span class="time">Был в 10:02</span>
													</div>
												</div>
											</li>
											<li>
												<div class="hover"></div>
												<a href="#"></a>
												<img src="templates/img/user_pic1.jpg" alt=""/>
												<div class="s-contact-info">
													<div class="contact-name"><i class="offline"></i>Фамилия Имя</div>
													<div class="contact-status investor">Инвестор</div>

													<div class="right-mes-desc">
														<span class="time">Был вчера</span>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<div class="_hidden pt0">
										<div class="s-messages">
										<ul class="mes-list">
											<li>
												<div class="hover"></div>
												<a href="#"></a>
												<img src="templates/img/user_pic2.jpg" alt=""/>
												<div class="s-contact-info">
													<div class="contact-name"><i class="offline"></i>Фамилия Имя</div>
													<div class="contact-status coinvestor">Соинвестор</div>

													<div class="right-mes-desc">
														<span class="time">Был в 10:02</span>
													</div>
												</div>
											</li>
											<li>
												<div class="hover"></div>
												<a href="#"></a>
												<img src="templates/img/user_pic1.jpg" alt=""/>
												<div class="s-contact-info">
													<div class="contact-name"><i class="offline"></i>Фамилия Имя</div>
													<div class="contact-status investor">Инвестор</div>

													<div class="right-mes-desc">
														<span class="time">Был вчера</span>
													</div>
												</div>
											</li>
											<li>
												<div class="hover"></div>
												<a href="#"></a>
												<img src="templates/img/user_pic2.jpg" alt=""/>
												<div class="s-contact-info">
													<div class="contact-name"><i class="online"></i>Фамилия Имя</div>
													<div class="contact-status proektant">Проектант</div>

													<div class="right-mes-desc">
														<span class="time">В сети</span>
													</div>
												</div>
											</li>
										</ul>
									</div>
									</div>
									<button type="button" class="see_more">Показать еще</button>
								</li>
								<li>
									<div class="s-messages">
										<ul class="mes-list requests">
											<li class="peach-bgr">
												<div class="hover"></div>
												<a href="#"></a>
												<img src="templates/img/user_pic2.jpg" alt=""/>
												<div class="s-contact-info">
													<div class="contact-name"><i class="offline"></i>Фамилия Имя</div>
													<div class="contact-status coinvestor">Соинвестор</div>
													<div class="general-contacts">2 общих контакта</div>
													<div class="btns">
														<a href="#" class="gray-btn s-btn add">Добавить контакт</a>
														<a href="#" class="pink-btn s-btn">Отклонить</a>
													</div>
													<div class="right-mes-desc">
														<span class="time">Был в 10:02</span>
													</div>
												</div>
											</li>
											<li class="peach-bgr">
												<div class="hover"></div>
												<a href="#"></a>
												<img src="templates/img/user_pic1.jpg" alt=""/>
												<div class="s-contact-info">
													<div class="contact-name"><i class="offline"></i>Фамилия Имя</div>
													<div class="contact-status investor">Инвестор</div>
													<div class="general-contacts">12 общих контакта</div>
													<div class="btns">
														<a href="#" class="gray-btn s-btn add">Добавить контакт</a>
														<a href="#" class="pink-btn s-btn">Отклонить</a>
													</div>
													<div class="right-mes-desc">
														<span class="time">Был вчера</span>
													</div>
												</div>
											</li>
											<li class="peach-bgr">
												<div class="hover"></div>
												<a href="#"></a>
												<img src="templates/img/user_pic2.jpg" alt=""/>
												<div class="s-contact-info">
													<div class="contact-name"><i class="online"></i>Фамилия Имя</div>
													<div class="contact-status proektant">Проектант</div>
													<div class="general-contacts">2 общих контакта</div>
													<div class="btns">
														<a href="#" class="gray-btn s-btn add">Добавить контакт</a>
														<a href="#" class="pink-btn s-btn">Отклонить</a>
													</div>
													<div class="right-mes-desc">
														<span class="time">В сети</span>
													</div>
												</div>
											</li>
											<li>
												<div class="hover"></div>
												<a href="#"></a>
												<img src="templates/img/user_pic1.jpg" alt=""/>
												<div class="s-contact-info">
													<div class="contact-name"><i class="offline"></i>Фамилия Имя</div>
													<div class="contact-status investor">Инвестор</div>
													<div class="general-contacts">2 общих контакта</div>
													<div class="btns">
														<a href="#" class="gray-btn s-btn add">Добавить контакт</a>
														<a href="#" class="pink-btn s-btn">Отклонить</a>
													</div>
													<div class="right-mes-desc">
														<span class="time">Был вчера</span>
													</div>
												</div>
											</li>
											<li>
												<div class="hover"></div>
												<a href="#"></a>
												<img src="templates/img/user_pic2.jpg" alt=""/>
												<div class="s-contact-info">
													<div class="contact-name"><i class="offline"></i>Фамилия Имя</div>
													<div class="contact-status coinvestor">Соинвестор</div>
													<div class="general-contacts">2 общих контакта</div>
													<div class="btns">
														<a href="#" class="gray-btn s-btn add">Добавить контакт</a>
														<a href="#" class="pink-btn s-btn">Отклонить</a>
													</div>
													<div class="right-mes-desc">
														<span class="time">Был в 10:02</span>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<div class="_hidden pt0">
										<div class="s-messages">
											<ul class="mes-list requests">
												<li class="peach-bgr">
													<div class="hover"></div>
													<a href="#"></a>
													<img src="templates/img/user_pic2.jpg" alt=""/>
													<div class="s-contact-info">
														<div class="contact-name"><i class="offline"></i>Фамилия Имя</div>
														<div class="contact-status coinvestor">Соинвестор</div>
														<div class="general-contacts">2 общих контакта</div>
														<div class="btns">
															<a href="#" class="gray-btn s-btn add">Добавить контакт</a>
															<a href="#" class="pink-btn s-btn">Отклонить</a>
														</div>
														<div class="right-mes-desc">
															<span class="time">Был в 10:02</span>
														</div>
													</div>
												</li>
												<li class="peach-bgr">
													<div class="hover"></div>
													<a href="#"></a>
													<img src="templates/img/user_pic1.jpg" alt=""/>
													<div class="s-contact-info">
														<div class="contact-name"><i class="offline"></i>Фамилия Имя</div>
														<div class="contact-status investor">Инвестор</div>
														<div class="general-contacts">2 общих контакта</div>
														<div class="btns">
															<a href="#" class="gray-btn s-btn add">Добавить контакт</a>
															<a href="#" class="pink-btn s-btn">Отклонить</a>
														</div>
														<div class="right-mes-desc">
															<span class="time">Был вчера</span>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<button type="button" class="see_more">Показать еще</button>
								</li>
							</ul>
						</div>
					</div>

					<div class="rightside">
						<div class="side-block">
							<div class="sb-title">
								<em>Вас могут заинтересовать</em>
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