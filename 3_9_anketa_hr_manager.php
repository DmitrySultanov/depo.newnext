<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Анкета кадровик</title>
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
			<div class="after-header-panel hr_manager">
				<div class="container">
					<div class="user-category">
						<img class="check" src="templates/img/tick-4.svg" alt="">
						<div class="flex align">
							<div>
								<span>Kадровик</span>
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
										<h1 class="sm">Анкета кадровика</h1>
									</div>
									<div class="elements-group">
										<div class="form fullWidth">
											<form action="" target="post_form">
												<div class="element">
													<p>Фамилия</p>
													<input type="text" class="required" name="surname" data-msg-required="Заполните поле" />
												</div>
												<div class="element">
													<p>Имя</p>
													<input type="text" class="required" name="name" data-msg-required="Заполните поле" />
												</div>
												<div class="element">
													<p>Отчество</p>
													<input type="text" class="required" name="lastname" data-msg-required="Заполните поле" />
												</div>
												<div class="element selectReq--b">
													<div class="row clearfix">
														<div class="col-3">
															<p>Дата рождения </p>
															<div class="input calendar">
																<input type="text" autocomplete="off" name="datepicker" placeholder="дд-мм-гггг" class="required datepick" id="createDatepick" data-msg-required="Заполните поле">
															</div>
														</div>
														<div class="col-3">
															<p>Тип участника</p>
															<select name="type_user" data-placeholder="Не выбрано" class="select-req select-single required" data-msg-required="Заполните поле">
																<option></option>
																<option>Новатор</option>
																<option>Соинвестор</option>
																<option>Проектор</option>
															</select>
														</div>
														<div class="col-3">
															<p>Семейное положение</p>
															<select name="marstatus" data-placeholder="Не выбрано" class="select-req select-single required" data-msg-required="Заполните поле">
																<option></option>
																<option>Новатор</option>
																<option>Соинвестор</option>
																<option>Проектор</option>
															</select>
														</div>
													</div>
												</div>
												<div class="element">
													<p>Страна</p>
													<input type="text" class="required" name="country" data-msg-required="Заполните поле" />
												</div>
												<div class="element">
													<p>Город</p>
													<input type="text" class="required" name="city" data-msg-required="Заполните поле" />
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
									<!-- Образование -->
									<div class="stage acc-item">
										<div class="sb-title acc-title">
											<span>Образование</span>
										</div>
										<div class="elements-group acc-hidden">
											<div class="form fullWidth">
												<form action="" target="post_form">
													<div class="element selectReq">
														<div class="row clearfix">
															<div class="col-9">
																<p>Учебное заведение</p>
																<input type="text" class="required" name="institution" data-msg-required="Заполните поле" />
															</div>
															<div class="col-3">
																<p>Год окончания</p>
																<div class="select-req">
																	<select name="year_ending" data-placeholder="Не выбрано" class="select-single self-select--error required" data-msg-required="Заполните поле">
																		<option></option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																		<option>2012</option>
																		<option>2011</option>
																		<option>2010</option>
																		<option>2009</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="element">
														<p>Специальность</p>
														<input type="text" class="required" name="specialty" data-msg-required="Заполните поле" />
													</div>
													<div><button type="button" class="s-btn gray-btn add mb10">Добавить</button></div>
													<button type="submit" class="orange-btn">Далее</button>
												</form>
											</div>
										</div>
									</div>
									<!-- Карьера -->
									<div class="stage acc-item">
										<div class="sb-title acc-title">
											<span>Карьера</span>
										</div>
										<div class="elements-group acc-hidden">
											<div class="form fullWidth">
												<form action="" target="post_form">
													<div class="element">
														<p>Профессиональная принадлежность</p>
														<input type="text" class="required" name="professional-accessories" data-msg-required="Заполните поле" />
													</div>
													<div class="element">
														<p>Специальность</p>
														<input type="text" class="required" name="specialty" data-msg-required="Заполните поле" />
													</div>
													<div class="element selectReq">
														<div class="row clearfix">
															<div class="col-10">
																<p>Занятость</p>
																<div class="select-req">
																	<select name="employment" data-placeholder="Не выбрано" class="select-single self-select--error required" data-msg-required="Заполните поле">
																		<option></option>
																		<option>Полная</option>
																		<option>Частичная</option>
																		<option>Удаленная</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="element selectReq">
														<div class="row clearfix">
															<div class="col-9">
																<p>Место работы</p>
																<div class="select-req">
																	<select name="work-place" data-placeholder="Выберите из списка" class="select-single self-select--error required" data-msg-required="Заполните поле">
																		<option></option>
																		<option>Ваше место работы</option>
																		<option>Ваше место работы</option>
																		<option>Ваше место работы</option>
																	</select>
																</div>
															</div>
															<div class="col-3">
																<p>Трудовой стаж</p>
																<div class="select-req">
																	<select name="seniority" data-placeholder="Не выбрано" class="select-single self-select--error required" data-msg-required="Заполните поле">
																		<option></option>
																		<option>Полная</option>
																		<option>Частичная</option>
																		<option>Удаленная</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div><button type="button" class="s-btn gray-btn add mb10">Добавить</button></div>
													<button type="submit" class="orange-btn">Далее</button>
												</form>
											</div>
										</div>
									</div>
									<!-- Об инвестировании -->
									<!-- <div class="stage acc-item">
										<div class="sb-title acc-title">
											<span>Об инвестировании</span>
										</div>
										<div class="elements-group acc-hidden">
											<div class="form fullWidth">
												<form action="" target="post_form">
													<div class="element">
														<div class="row clearfix">
															<div class="col-10">
																<p>Объем предполагаемых инвестиций</p>
																<input type="text" class="required" name="institution" data-msg-required="Заполните поле" />
															</div>
															<div class="col-2">
																<p></p>
																<select name="currency" class="select-single required" data-msg-required="Заполните поле">
																	<option>Рубль</option>
																	<option>Доллар США</option>
																	<option>Драхма</option>
																</select>
															</div>
														</div>
													</div>
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
																<p>Регион инвестирования</p>
																<div class="select">
																	<select name="sdsd2"  multiple="multiple" class="select-req select-participant required" data-msg-required="Заполните поле">
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
													<div class="element">
														<div class="row clearfix">
															<div class="col-10">
																<p>Срок инвестирования</p>
																<input type="text" class="required" name="institution" data-msg-required="Заполните поле" />
															</div>
															<div class="col-2">
																<p></p>
																<select name="time_invest" class="select-single required" data-msg-required="Заполните поле">
																	<option>Месяц</option>
																	<option>Лет/Год</option>
																</select>
															</div>
														</div>
													</div>
													<div class="element">
														<div class="row clearfix">
															<div class="col-10">
																<p>Срок окупаемости</p>
																<input type="text" class="required" name="payback_period" data-msg-required="Заполните поле" />
															</div>
															<div class="col-2">
																<p></p>
																<select name="time_payback" class="select-single required" data-msg-required="Заполните поле">
																	<option>Месяц</option>
																	<option>Лет/Год</option>
																</select>
															</div>
														</div>
													</div>
													<div class="element">
														<div class="row clearfix">
															<div class="col-10">
																<p>Ожидаемая доходность</p>
																<input type="text" class="required" name="expected_return" data-msg-required="Заполните поле" />
															</div>
															<div class="col-2">
																<p></p>
																<select name="expected_return_type_currency" class="select-single required" data-msg-required="Заполните поле">
																	<option>Рубль</option>
																	<option>Доллар США</option>
																	<option>Драхма</option>
																</select>
															</div>
														</div>
													</div>
													<div class="element">
														<div class="row clearfix">
															<div class="col-10">
																<p>Опыт на рынке инвестирования</p>
																<input type="text" class="required" name="experience_investment_market" data-msg-required="Заполните поле" />
															</div>
															<div class="col-2">
																<p></p>
																<select name="time_experience_investment_market" class="select-single required" data-msg-required="Заполните поле">
																	<option>Лет/Год</option>
																	<option>Месяц</option>
																</select>
															</div>
														</div>
													</div>
													<button type="submit" class="orange-btn">Далее</button>
												</form>
											</div>
										</div>
									</div> -->
									<!-- Партнеры -->
									<div class="stage acc-item">
										<div class="sb-title acc-title">
											<span>Партнеры</span>
										</div>
										<div class="elements-group acc-hidden">
											<div class="form fullWidth">
												<form action="" target="post_form">
													<div class="element">
														<p>Наименование партнера</p>
														<input type="text" class="required" name="partner-name" data-msg-required="Заполните поле" />
													</div>
													<div><button type="button" class="s-btn gray-btn add mb10">Добавить</button></div>
													<button type="submit" class="orange-btn">Далее</button>
												</form>
											</div>
										</div>
									</div>
									<!-- Клиенты -->
									<div class="stage acc-item">
										<div class="sb-title acc-title">
											<span>Клиенты</span>
										</div>
										<div class="elements-group acc-hidden">
											<div class="form fullWidth">
												<form action="" target="post_form">
													<div class="element">
														<p>Наименование клиента</p>
														<input type="text" class="required" name="customer-name" data-msg-required="Заполните поле" />
													</div>
													<div><button type="button" class="s-btn gray-btn add mb10">Добавить</button></div>
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
													<div class="element">
														<p>E-mail</p>
														<input type="text" placeholder="test@mail.ru" name="email" />
													</div>
													<div class="element">
														<div class="row clearfix">
															<div class="col-10">
																<p>Хобби</p>
																<div class="select">
																	<select name="hobby" multiple="multiple" class="select-nolimit">
																		<option></option>
																		<option>Танцы</option>
																		<option>Живопись</option>
																		<option>Турне</option>
																		<option>Катание на гидроциклах</option>
																		<option>Тир</option>
																		<option>Спортивное ориентирование</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="element">
														<p>Обо мне</p>
														<input type="text" name="about" />
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
								<strong>Кадровик -  юридическое лицо (организация), имеющая взаимоотношения с работодателями 
								на предмет подбора персонала в соответствии с установленными требованиями и  обладающего 
								требуемой квалификацией и опытом работы.</strong>
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