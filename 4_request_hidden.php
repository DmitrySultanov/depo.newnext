<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Сеть пользователь заявки скрыто</title>
	<? include('inc/head.php'); ?>
</head>
<body class="gray">
	<div class="screen4"></div>
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
					<li class="active"><a href="#">Заявки</a></li>
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
									<h1>Мои заявки</h1>	
									<div class="_right">
										<button type="button" class="gray-btn s-btn new-request-js">Создать новую заявку</button>
										<button type="button" class="search-js"></button>
									</div>
								</div>
							</div>
						</div>
						<div class="search-form-hidden form">
							<form action="" target="post_form">
								<div class="element">
									<input type="text" name="search" placeholder="Поиск зявки по названию и номеру" />
									<button type="submit">Найти</button>
								</div>
							</form>
						</div>
						<div class="new-request-hidden">
							<div class="form fullWidth">
								<div class="sb-title clearfix">
									<span>Новая заявка</span>
								</div>
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
												<input type="text" class="required" name="insvest_period" data-msg-required="Заполните поле" />
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
									<button type="submit" class="orange-btn">Сохранить</button>
								</form>
							</div>
						</div>

						<div class="side-block">
							<div class="_visible">
								<div class="sb-title clearfix">
									<span>Заявка на инвестирование, сельское хозяйство, промышленность</span>
									<div class="add-info clearfix">
										<div class="ai-num">№103770,</div>
										<div class="ai-date">8 июня</div>
									</div>
								</div>
								<div class="posr">
									<div class="posa">
										<div class="status published"><i class="panton d">s</i> Опубликовано</div>
										<div class="view-counter">
											<span>450</span>
										</div>
										<div class="dots-btn-wrap more-info">
											<button type="button" class="dots-btn visible-info"><span>...</span></button>
											<ul class="hidden-info" style="display: none;">
												<li><a class="user-info-link share" href="#"><i class="panton c">u</i> Редактировать</a></li>
												<li><a class="user-info-link save" href="#"><i class="panton a">b</i> Диалоги</a></li>
												<li><a class="user-info-link save" href="#"><i class="panton a">g</i> Рассылка</a></li>
												<li><a class="user-info-link save" href="#"><i class="panton c">v</i> Архивировать</a></li>
												<li><a class="user-info-link save" href="#"><i class="panton b">k</i> Удалить</a></li>
											</ul>
										</div>
									</div>
									<table class="sb-table">
										<tr>
											<td><span>Объем инвестирования:</span></td>
											<td>43 000 000$</td>
										</tr>
										<tr>
											<td><span>Отраслевая принадлежность:</span></td>
											<td>Сельское хозяйство, промышленность</td>
										</tr>
										<tr>
											<td><span>Регион инвестирования:</span></td>
											<td>Самарская область, Ульяновская область, Пензенская область</td>
										</tr>
										<tr>
											<td><span>Срок инвестирования:</span></td>
											<td>2–4 лет</td>
										</tr>
										<tr>
											<td><span>Срок окупаемости:</span></td>
											<td>3 года</td>
										</tr>
										<tr>
											<td><span>Ожидаемая доходность:</span></td>
											<td>250 000 000$</td>
										</tr>
										<tr>
											<td><span>Опыт на рынке инвестирования:</span></td>
											<td>3 года</td>
										</tr>
									</table>
								</div>
							</div>
							<div class="_hidden">
								<div class="sb-title-hidden">Дополнительная информация</div>
								<table class="sb-table">
									<tr>
										<td><span>Хобби:</span></td>
										<td>Автомобили, рыбалка</td>
									</tr>
									<tr>
										<td><span>О себе:</span></td>
										<td>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.
	                                      является стандартной "рыбой" для текстов на латинице с начала
	                                      XVI века. В то время некий безымянный печатник создал большую коллекцию
	                                      размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.</td>
									</tr>
								</table>
							</div>
							<a href="#" class="see_more">Смотреть подробнее</a>
						</div>

						<div class="side-block">
							<div class="_visible">
								<div class="sb-title clearfix">
									<span>Заявка на инвестирование (информационные технологии)</span>
									<div class="add-info clearfix">
										<div class="ai-num">№103770,</div>
										<div class="ai-date">8 июня</div>
									</div>
								</div>
								<div class="posr">
									<div class="posa">
										<div class="status moderation"><i class="panton c">H</i> На модерации</div>
										<div class="dots-btn-wrap more-info">
											<!-- <div class="status">Опубликовано</div> -->
											<button type="button" class="dots-btn visible-info"><span>...</span></button>
											<ul class="hidden-info" style="display: none;">
												<li><a class="user-info-link share" href="#"><i class="panton c">u</i> Редактировать</a></li>
												<li><a class="user-info-link save" href="#"><i class="panton a">b</i> Диалоги</a></li>
												<li><a class="user-info-link save" href="#"><i class="panton a">g</i> Рассылка</a></li>
												<li><a class="user-info-link save" href="#"><i class="panton c">v</i> Архивировать</a></li>
												<li><a class="user-info-link save" href="#"><i class="panton b">k</i> Удалить</a></li>
											</ul>
										</div>
									</div>
									<table class="sb-table">
										<tr>
											<td><span>Объем инвестирования:</span></td>
											<td>2 000 000$</td>
										</tr>
										<tr>
											<td><span>Отраслевая принадлежность:</span></td>
											<td>Информационные технологии</td>
										</tr>
										<tr>
											<td><span>Регион инвестирования:</span></td>
											<td>Самарская область</td>
										</tr>
										<tr>
											<td><span>Срок инвестирования:</span></td>
											<td>1–5 лет</td>
										</tr>
										<tr>
											<td><span>Срок окупаемости:</span></td>
											<td>5 лет</td>
										</tr>
										<tr>
											<td><span>Ожидаемая доходность:</span></td>
											<td>8 000 000$</td>
										</tr>
										<tr>
											<td><span>Опыт на рынке инвестирования:</span></td>
											<td>3 года</td>
										</tr>
									</table>
								</div>
							</div>
							<div class="_hidden">
								<div class="sb-title-hidden">Дополнительная информация</div>
								<table class="sb-table">
									<tr>
										<td><span>Хобби:</span></td>
										<td>Автомобили, рыбалка</td>
									</tr>
									<tr>
										<td><span>О себе:</span></td>
										<td>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.
	                                      является стандартной "рыбой" для текстов на латинице с начала
	                                      XVI века. В то время некий безымянный печатник создал большую коллекцию
	                                      размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.</td>
									</tr>
								</table>
							</div>
							<a href="#" class="see_more">Смотреть подробнее</a>
						</div>

						<div class="side-block">
							<div class="_visible">
								<div class="sb-title clearfix">
									<span>Заявка на инвестирование (информационные технологии)</span>
									<div class="add-info clearfix">
										<div class="ai-num">№103770,</div>
										<div class="ai-date">8 июня</div>
									</div>
								</div>
								<div class="posr">
									<div class="posa">
										<div class="status moderation"><i class="panton c">H</i> На модерации</div>
										<div class="dots-btn-wrap more-info">
											<!-- <div class="status">Опубликовано</div> -->
											<button type="button" class="dots-btn visible-info"><span>...</span></button>
											<ul class="hidden-info" style="display: none;">
												<li><a class="user-info-link share" href="#"><i class="panton c">u</i> Редактировать</a></li>
												<li><a class="user-info-link save" href="#"><i class="panton a">b</i> Диалоги</a></li>
												<li><a class="user-info-link save" href="#"><i class="panton a">g</i> Рассылка</a></li>
												<li><a class="user-info-link save" href="#"><i class="panton c">v</i> Архивировать</a></li>
												<li><a class="user-info-link save" href="#"><i class="panton b">k</i> Удалить</a></li>
											</ul>
										</div>
									</div>
									<table class="sb-table">
										<tr>
											<td><span>Объем инвестирования:</span></td>
											<td>2 000 000$</td>
										</tr>
										<tr>
											<td><span>Отраслевая принадлежность:</span></td>
											<td>Информационные технологии</td>
										</tr>
										<tr>
											<td><span>Регион инвестирования:</span></td>
											<td>Самарская область</td>
										</tr>
										<tr>
											<td><span>Срок инвестирования:</span></td>
											<td>1–5 лет</td>
										</tr>
										<tr>
											<td><span>Срок окупаемости:</span></td>
											<td>5 лет</td>
										</tr>
										<tr>
											<td><span>Ожидаемая доходность:</span></td>
											<td>8 000 000$</td>
										</tr>
										<tr>
											<td><span>Опыт на рынке инвестирования:</span></td>
											<td>3 года</td>
										</tr>
									</table>
								</div>
							</div>
							<div class="_hidden">
								<div class="sb-title-hidden">Дополнительная информация</div>
								<table class="sb-table">
									<tr>
										<td><span>Хобби:</span></td>
										<td>Автомобили, рыбалка</td>
									</tr>
									<tr>
										<td><span>О себе:</span></td>
										<td>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.
	                                      является стандартной "рыбой" для текстов на латинице с начала
	                                      XVI века. В то время некий безымянный печатник создал большую коллекцию
	                                      размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.</td>
									</tr>
								</table>
							</div>
							<a href="#" class="see_more">Смотреть подробнее</a>
						</div>

						<div class="warning error">
							<div class="flex align">
								<i class="panton d">h</i> <strong>Ошибка!</strong> <span>Ваша заявка не прошла модерацию по причине и описание причины</span>
							</div>
						</div>
					</div>
					<div class="rightside">
						<div class="side-block">
							<div class="sb-title">
								<span>Архив</span>
							</div>
							<ul class="blue-links">
								<li><a href="#">№1561 от 12 июля</a></li>
								<li><a href="#">№1560 от 11 июля</a></li>
								<li><a href="#">№1559 от 9 июля</a></li>
								<li><a href="#">№1558 от 8 июля</a></li>
								<li><a href="#">№1557 от 7 июля</a></li>
							</ul>
							<div class="view-all">
								<a href="#">Показать еще</a>
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