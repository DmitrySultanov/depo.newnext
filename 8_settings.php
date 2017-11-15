<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Настройки</title>
	<? include('inc/head.php'); ?>
</head>
<body class="gray">
	<div class="anketa_screen"></div>
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
			<div class="after-header-panel investor clearfix">
				<div class="container">
					<div class="user-category">
						<img class="check" src="templates/img/tick-4.svg" alt="">
						<div class="flex align">
							<div>
								<span>Инвестор</span>
								<div class="status">В сети</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="anketa settings-page">
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
										<h1 class="sm">Настройки</h1>
									</div>
									<div class="elements-group">
										<div class="form fullWidth">
											<form action="" target="post_form">
												<div class="element edit-field">
													<p>Телефон</p>
													<input type="text" class="phone required" name="phone" data-msg-required="Заполните поле" />
													<div class="posa">
														<div class="dots-btn-wrap more-info">
															<button type="button" class="dots-btn visible-info"><span>...</span></button>
															<ul class="hidden-info">
																<li><a class="user-info-link edit settings-phone-btn" href="#"><!-- <i class="panton c">o</i> --> Изменить</a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="_hidden change">
													<div class="recovery-windows">
														<div class="r-window">
															<div class="form-pass-recovery">
																<input type="hidden" name="hidden" value="Форма Забыли пароль?">
																<button type="submit" class="orange-btn">Получить sms код</button>
															</div>
														</div>
														<div class="r-window">
															<div class="form-pass-recovery">
																<form action="" target="post_form">
																	<div class="element">
																		<strong>Ваш телефон</strong>
																		<div class="input">
																			<input type="text" class="addclear phone required" name="phone" value="+7 (987) 968-65-54" data-msg-required="Заполните поле" />
																		</div>
																	</div>
																	<div class="element">
																		<strong>Код из SMS</strong>
																		<div class="sms-code">
																			<input type="text" class="required" name="smscode" data-msg-required="Заполните поле" />
																			<div class="counter-down"><span class="dynamicNumber" data-from="120" data-to="0">120</span> сек</div>
																		</div>
																	</div>
																	<div class="link-wrap"><a href="#" class="disabled">Отправить код повторно</a></div>
																	<input type="hidden" name="hidden" value="Форма Подтверждение телефона">
																	<button type="submit" class="orange-btn">Отправить</button>
																</form>
															</div>
														</div>
													</div>
												</div>
												<div class="element edit-field">
													<p>Пароль</p>
													<input type="password" class="required" name="password" />
													<div class="posa">
														<div class="dots-btn-wrap more-info">
															<button type="button" class="dots-btn visible-info"><span>...</span></button>
															<ul class="hidden-info">
																<li><a class="user-info-link edit" href="#"><!-- <i class="panton c">o</i> --> Изменить</a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="element edit-field">
													<p>Секретный пароль <span class="tooltip-question" data-tooltip-content="#secret-pass"></span></p>
													<input type="text" class="required" name="lastname" data-msg-required="Заполните поле" />
													<div class="posa">
														<div class="dots-btn-wrap more-info">
															<button type="button" class="dots-btn visible-info"><span>...</span></button>
															<ul class="hidden-info">
																<li><a class="user-info-link edit" href="#"><!-- <i class="panton c">o</i> --> Изменить</a></li>
															</ul>
														</div>
													</div>
													<div class="tooltip_templates">
														<span id="secret-pass">
															<em>Секретный пароль создан для..</em><br>
													       	тут полное описание для чего он
													    </span>
													</div>
												</div>
												<div class="element">
													<p>Профиль</p>
													<div class="radiobuttons">
														<label>
															<input type="radio" name="profile"><i></i>
															<span>Открытый</span>
														</label>
														<label>
															<input type="radio" name="profile" checked><i></i>
															<span>Закрытый</span>
														</label>
													</div>
												</div>
												<div class="element">
													<p>Режим невидимки <span class="tooltip-question" data-tooltip-content="#stealth-mode"></span></p>
													<div class="checkbox orange">
														<label>
															<input type="checkbox" checked><i></i>
															<span>Включить режим невидимки</span>
														</label>
													</div>
													<div class="tooltip_templates">
														<span id="stealth-mode">
															<em>режим невидимки</em><br>
													       	тут полное описание для чего он
													    </span>
													</div>
												</div>
												<button type="submit" class="orange-btn">Сохранить</button>
											</form>
										</div>
									</div>
								</div>

								<div class="stage">
									<div class="types-member-table">
										<div class="sb-title">
											<h2>Зарегистрированные типы участников</h2>
										</div>
										<div class="registered-member-types">
											<div class="row flex head">
												<div class="col">
													<span>Тип участника</span>
												</div>
												<div class="col">
													<span>Дата регистрации</span>
												</div>
											</div>
											<div class="row">
												<div class="flex">
													<div class="col">
														<span>Инвестор</span>
													</div>
													<div class="col">
														<span>21.01.16</span>
													</div>
													<div class="col">
														<a href="#" class="rmt-edit-btn">Редактировать</a>
														<a href="#" class="rmt-remove-btn">Удалить</a>
													</div>
												</div>
											</div>
											<div class="row nobrd">
												<div class="flex">
													<div class="col">
														<span>Инвестор</span>
													</div>
													<div class="col">
														<span>21.01.16</span>
													</div>
													<div class="col">
														<a href="#" class="rmt-edit-btn">Редактировать</a>
														<a href="#" class="rmt-remove-btn">Удалить</a>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="_hidden add">
													<div class="form fullWidth">
														<form action="" target="post_form">
															<div class="element selectReq--b edit-field">
																<p>Тип участника</p>
																<select name="type_user" data-placeholder="Выберите из списка" class="select-req select-single required" data-msg-required="Заполните поле">
																	<option></option>
																	<option>Новатор</option>
																	<option>Соинвестор</option>
																	<option>Проектор</option>
																</select>
															</div>
															<button type="submit" class="orange-btn">Далее</button>
														</form>
													</div>
												</div>
												<button type="button" class="orange-btn add-member">Добавить</button>
											</div>
										</div>	
									</div>
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