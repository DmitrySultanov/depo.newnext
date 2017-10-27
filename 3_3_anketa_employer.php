<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Анкета работодатель</title>
	<? include('inc/head.php'); ?>
</head>
<body class="gray">
	<div class="anketa_screen"></div>
	<div class="wrapper">
		<header>
			<div class="container">
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
						<li><a class="user-info-link redact" href="#">Редактировать профиль</a></li>
						<li><a class="user-info-link settings" href="#">Настройки</a></li>
						<li><a class="user-info-link wayout" href="#">Выход</a></li>
					</ul>
				</div>
				<!-- <ul class="nav">
					<li><a href="#">Заявки</a></li>
					<li><a href="#">Сообщения</a>
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
				</div> -->
			</div>

			<!-- Левое меню -->
			<div class="pushy pushy-left">
			    <ul>
			        <li class="pushy-link"><div><a href="#">Заявки</a></div></li>
			        <li class="pushy-link"><div><a href="#">Сообщения</a><div class="counter">+12</div></div></li>
			        <li class="pushy-link"><div><a href="#">Контакты</a></div></li>
			        <li class="pushy-link"><div><a href="#">Новости</a></div></li>
			    </ul>
			</div>
		</header>
		<div class="user-template">
			<div class="after-header-panel employer">
				<div class="container">
					<div class="user-category">
						<img class="check" src="templates/img/tick-4.svg" alt="">
						<div class="flex align">
							<div>
								<span>Работодатель</span>
								<!-- <div class="status">В сети</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="anketa">
				<div class="container">
					<div class="columns clearfix">
						<div class="leftcolumn">
							<div class="uploader">
								<img src="templates/img/uploader_default.jpg" alt=""/>
								<input type="file" class="hide inputfile" id="upload" data-multiple-caption="{count} files selected" multiple />
								<label for="upload">
									<span>Загрузить фотографию</span>
									<em>не более 200Мб</em>
								</label>
							</div>
						</div>

						<div class="centercolumn">
							<div class="side-block">
								<div class="stage">
									<div class="sb-title">
										<h1 class="sm">Анкета работодателя</h1>
									</div>
									<div class="elements-group">
										<div class="form fullWidth">
											<form action="" target="post_form">
												<div class="element">
													<p>Наименование компании</p>
													<input type="text" class="required" name="surname" data-msg-required="Заполните поле" />
												</div>
												<div class="element selectReq">
													<div class="row clearfix">
														<div class="col-9">
															<p>Отрасль</p>
															<div class="select">
																<select name="sdsd4" multiple="multiple" class="select-req select-participant required" data-msg-required="Заполните поле">
																	<option></option>
																	<option>Машиностроение</option>
																	<option>Деревообработка</option>
																	<option>Торговля</option>
																	<option>Сельское хозяйство</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="element">
													<p>Местонахождение</p>
													<input type="text" class="required" name="place-company" data-msg-required="Заполните поле" />
												</div>
												<div class="element">
													<p>Сайт компании</p>
													<input type="text" class="required" name="site-company" data-msg-required="Заполните поле" />
												</div>
												<div class="element">
													<p>Email компании</p>
													<input type="text" class="required" name="email-company" data-msg-required="Заполните поле" />
												</div>
												<div class="element">
													<p>Телефон компании</p>
													<input type="text" class="required" name="phone-company" data-msg-required="Заполните поле" />
												</div>
												<div class="element">
													<p>ФИО представителя</p>
													<input type="text" class="required" name="name-represent-company" data-msg-required="Заполните поле" />
												</div>
												<div class="element">
													<p>О компании</p>
													<input type="text" class="required" name="about-company" data-msg-required="Заполните поле" />
												</div>
												<button type="submit" class="orange-btn">Далее</button>
											</form>
										</div>
									</div>
								</div>

								<div class="accordion mb-15">
									<!-- Деятельность -->
									<div class="stage acc-item">
										<div class="sb-title acc-title">
											<span>Деятельность</span>
										</div>
										<div class="elements-group acc-hidden">
											<div class="form fullWidth">
												<form action="" target="post_form">
													<div class="element selectReq">
														<div class="row clearfix">
															<div class="col-10">
																<p>Отраслевая принадлежность</p>
																<div class="select">
																	<select name="sdsd1" multiple="multiple" class="select-req select-participant required" data-msg-required="Заполните поле">
																		<option></option>
																		<option>Русский язык</option>
																		<option>Английский язык</option>
																		<option>Французский язык</option>
																		<option>Испанский язык</option>
																		<option>Арабский язык</option>
																		<option>Немецкий язык</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="element selectReq">
														<div class="row clearfix">
															<div class="col-10">
																<p>Регион</p>
																<div class="select">
																	<select name="sdsd2"  multiple="multiple" class="select-req select-participant required" data-msg-required="Заполните поле">
																		<option></option>
																		<option>Самарская область</option>
																		<option>Приморский край</option>
																		<option>Ярославская область</option>
																		<option>Калужская область</option>
																		<option>Татарстан</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<button type="submit" class="orange-btn">Далее</button>
												</form>
											</div>
										</div>
									</div>
									<!-- Дополнительно -->
									<div class="stage acc-item">
										<div class="sb-title acc-title">
											<span>Дополнительно</span>
										</div>
										<div class="elements-group acc-hidden">
											<div class="form fullWidth">
												<form action="" target="post_form">
													<div class="element">
														<p>Страница вконтакте</p>
														<input type="text" name="vk_link" />
													</div>
													<div class="element">
														<p>Страница одноклассники</p>
														<input type="text" name="odnoclasniki_link" />
													</div>
													<div class="element">
														<p>Страница facebook</p>
														<input type="text" name="fb_link" />
													</div>
													<button type="submit" class="orange-btn">Далее</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-btn-wrap">
								<button type="submit" class="orange-btn">Сохранить анкету</button>
							</div>
						</div>

						<div class="rightcolumn">
							<div class="attention-block" id="sticky">
								<strong>Работодатель -  юридическое лицо (организация), имеющее намерением вступить в 
								трудовые отношения с работником, обладающим требуемой квалификацией и опытом работы.</strong>
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