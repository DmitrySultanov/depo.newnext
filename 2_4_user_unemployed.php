<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Пользователь - нетрудоустроенный</title>
	<? include('inc/head.php'); ?>
</head>
<body class="gray">
	<div class="user-screen1"></div>
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
						<img src="templates/img/user_big_ico2.jpg" height="34" width="34" alt=""/>
						<span>Masha81</span>
					</div>
					<ul class="hidden-info">
						<li><a class="user-info-link" href="#"><i class="fa fa-pencil" aria-hidden="true"></i> Редактировать профиль</a></li>
						<li><a class="user-info-link" href="#"><i class="fa fa-cog" aria-hidden="true"></i> Настройки</a></li>
						<li><a class="user-info-link" href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i> Выход</a></li>
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
			<div class="after-header-panel unemployed">
				<div class="container">
					<div class="user-category">
						<img class="check" src="templates/img/tick-4.svg" alt="">
						<div class="flex align">
							<div>
								<span>Нетрудоустроенный</span>
							</div>
						</div>
					</div>
					<ul class="dop-user-info">
						<li>
							<span>Рекомендуют</span>
							<i class="count">1581</i>
						</li>
						<li>
							<span>Заявки</span>
							<i class="count">18</i>
						</li>
						<li>
							<span>Рейтинг в сети</span>
							<i class="count">6+</i>
						</li>
					</ul>
				</div>
			</div>
			<div class="container">
				<div class="sides clearfix">
					<div class="centerside">
						<div class="side-block">
							<div class="user-main-info clearfix">
								<div class="img">
									<img src="templates/img/user_big_ico2.jpg" alt="" />
								</div>
								<div class="user-desc">
									<div class="posa">
										<div class="dots-btn-wrap more-info">
											<button type="button" class="dots-btn visible-info"><span>...</span></button>
											<ul class="hidden-info">
												<li><a class="user-info-link share" href="#"><i class="fa fa-code-fork" aria-hidden="true"></i> Поделиться</a></li>
												<li><a class="user-info-link save" href="#"><i class="fa fa-plus" aria-hidden="true"></i> Сохранить</a></li>
											</ul>
										</div>
									</div>
									<div class="user-desc-name">Ионова Мария Олеговна</div>
									<div class="user-more-info">34 года, Россия, <i>г. Самара</i></div>
									<table class="sb-table">
										<tr>
											<td><span>Место работы:</span></td>
											<td>Российские Железные Дороги (РЖД)</td>
										</tr>
										<tr>
											<td><span>Образование:</span></td>
											<td>Высшее, ТГУ, Экономист
											Второе высшее, ТГУ, Юрист</td>
										</tr>
										<tr>
											<td><span>Телефон:</span></td>
											<td><a href="tel:+79277684419">+7 9277 68 44 19</a></td>
										</tr>
										<tr>
											<td><span>E-mail:</span></td>
											<td><a href="mailto:info@mail.ru">info@mail.ru</a></td>
										</tr>
									</table>
								</div>
							</div>
						</div>

						<div class="side-block recommended">
							<button type="button" class="remove-btn"></button>
							<div class="tabs-wrapper">
								<div class="sb-title">
									<ul class="tabs">
										<li class="active">Инвесторы</li>
										<li>Соинвесторы</li>
									</ul>
								</div>
								<ul class="tab_content">
									<li>
										<div class="sb-contacts">
											<div class="flex">
												<div class="sb-contact clearfix">
													<button type="button" class="remove-btn"></button>
													<img src="templates/img/user_pic1.jpg" alt=""/>
													<div class="sb-contact-info">
														<div class="contact-name">Фамилия ИмИмяИмяИмяИмяя</div>
														<div class="contact-more-info">Сельское хозяйство хозяйство</div>
														<button class="gray-btn s-btn mt10 add"><span>Контакт</span></button>
													</div>
												</div>
												<div class="sb-contact clearfix">
													<button type="button" class="remove-btn"></button>
													<img src="templates/img/user_default.jpg" alt=""/>
													<div class="sb-contact-info">
														<div class="contact-name">Владислав Кужугетович</div>
														<div class="contact-more-info">30 лет, г. Москва</div>
														<button class="gray-btn s-btn mt10 add"><span>Контакт</span></button>
													</div>
												</div>
												<div class="sb-contact clearfix">
													<button type="button" class="remove-btn"></button>
													<img src="templates/img/user_default_add.jpg" alt=""/>
													<div class="sb-contact-info">
														<div class="contact-name">Фамилия Имя</div>
														<div class="contact-more-info">30 лет, г. Москва</div>
														<button class="gray-btn s-btn mt10 add"><span>Контакт</span></button>
													</div>
												</div>
												<div class="sb-contact clearfix">
													<button type="button" class="remove-btn"></button>
													<img src="templates/img/user_default.jpg" alt=""/>
													<div class="sb-contact-info">
														<div class="contact-name">Фамилия Имя</div>
														<div class="contact-more-info">30 лет, г. Москва</div>
														<button class="gray-btn s-btn mt10 added"><span>В контактах</span></button>
													</div>
												</div>
												<div class="sb-contact clearfix">
													<button type="button" class="remove-btn"></button>
													<img src="templates/img/user_pic2.jpg" alt=""/>
													<div class="sb-contact-info">
														<div class="contact-name">Фамилия Имя</div>
														<div class="contact-more-info">30 лет, г. Москва</div>
														<button class="gray-btn s-btn mt10 add"><span>Контакт</span></button>
													</div>
												</div>
												<div class="sb-contact clearfix">
													<button type="button" class="remove-btn"></button>
													<img src="templates/img/user_default.jpg" alt=""/>
													<div class="sb-contact-info">
														<div class="contact-name">Владислав Кужугетович</div>
														<div class="contact-more-info">30 лет, г. Москва</div>
														<button class="gray-btn s-btn mt10 add"><span>Контакт</span></button>
													</div>
												</div>
											</div>
										</div>
										<div class="_hidden pt0">
											<div class="sb-contacts mt0">
												<div class="flex">
													<div class="sb-contact clearfix">
														<button type="button" class="remove-btn"></button>
														<img src="templates/img/user_pic1.jpg" alt=""/>
														<div class="sb-contact-info">
															<div class="contact-name">Фамилия ИмИмяИмяИмяИмяя</div>
															<div class="contact-more-info">Сельское хозяйство хозяйство</div>
															<button class="gray-btn s-btn mt10 add"><span>Контакт</span></button>
														</div>
													</div>
													<div class="sb-contact clearfix">
														<button type="button" class="remove-btn"></button>
														<img src="templates/img/user_default.jpg" alt=""/>
														<div class="sb-contact-info">
															<div class="contact-name">Владислав Кужугетович</div>
															<div class="contact-more-info">30 лет, г. Москва</div>
															<button class="gray-btn s-btn mt10 add"><span>Контакт</span></button>
														</div>
													</div>
													<div class="sb-contact clearfix">
														<button type="button" class="remove-btn"></button>
														<img src="templates/img/user_default_add.jpg" alt=""/>
														<div class="sb-contact-info">
															<div class="contact-name">Фамилия Имя</div>
															<div class="contact-more-info">30 лет, г. Москва</div>
															<button class="gray-btn s-btn mt10 add"><span>Контакт</span></button>
														</div>
													</div>
													<div class="sb-contact clearfix">
														<button type="button" class="remove-btn"></button>
														<img src="templates/img/user_default.jpg" alt=""/>
														<div class="sb-contact-info">
															<div class="contact-name">Фамилия Имя</div>
															<div class="contact-more-info">30 лет, г. Москва</div>
															<button class="gray-btn s-btn mt10 added"><span>В контактах</span></button>
														</div>
													</div>
													<div class="sb-contact clearfix">
														<button type="button" class="remove-btn"></button>
														<img src="templates/img/user_pic2.jpg" alt=""/>
														<div class="sb-contact-info">
															<div class="contact-name">Фамилия Имя</div>
															<div class="contact-more-info">30 лет, г. Москва</div>
															<button class="gray-btn s-btn mt10 add"><span>Контакт</span></button>
														</div>
													</div>
													<div class="sb-contact clearfix">
														<button type="button" class="remove-btn"></button>
														<img src="templates/img/user_default.jpg" alt=""/>
														<div class="sb-contact-info">
															<div class="contact-name">Владислав Кужугетович</div>
															<div class="contact-more-info">30 лет, г. Москва</div>
															<button class="gray-btn s-btn mt10 add"><span>Контакт</span></button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<button type="button" class="see_more">Показать еще</button>
									</li>
									<li>
										<div class="sb-contacts">
											<div class="flex">
												<div class="sb-contact clearfix">
													<img src="templates/img/user_pic1.jpg" alt=""/>
													<div class="sb-contact-info">
														<div class="contact-name">Фамилия ИмИмяИмяИмяИмяя</div>
														<div class="contact-more-info">Сельское хозяйство хозяйство</div>
														<button class="gray-btn s-btn mt10 add"><span>Контакт</span></button>
													</div>
												</div>
												<div class="sb-contact clearfix">
													<img src="templates/img/user_default.jpg" alt=""/>
													<div class="sb-contact-info">
														<div class="contact-name">Владислав Кужугетович</div>
														<div class="contact-more-info">30 лет, г. Москва</div>
														<button class="gray-btn s-btn mt10 add"><span>Контакт</span></button>
													</div>
												</div>
												<div class="sb-contact clearfix">
													<img src="templates/img/user_default_add.jpg" alt=""/>
													<div class="sb-contact-info">
														<div class="contact-name">Фамилия Имя</div>
														<div class="contact-more-info">30 лет, г. Москва</div>
														<button class="gray-btn s-btn mt10 add"><span>Контакт</span></button>
													</div>
												</div>
												<div class="sb-contact clearfix">
													<img src="templates/img/user_default.jpg" alt=""/>
													<div class="sb-contact-info">
														<div class="contact-name">Фамилия Имя</div>
														<div class="contact-more-info">30 лет, г. Москва</div>
														<button class="gray-btn s-btn mt10 added"><span>В контактах</span></button>
													</div>
												</div>
											</div>
										</div>
										<div class="_hidden">
											<div class="sb-contacts mt0">
												<div class="flex">
													<div class="sb-contact clearfix">
														<button type="button" class="remove-btn"></button>
														<img src="templates/img/user_pic1.jpg" alt=""/>
														<div class="sb-contact-info">
															<div class="contact-name">Фамилия ИмИмяИмяИмяИмяя</div>
															<div class="contact-more-info">Сельское хозяйство хозяйство</div>
															<button class="gray-btn s-btn mt10 add"><span>Контакт</span></button>
														</div>
													</div>
													<div class="sb-contact clearfix">
														<button type="button" class="remove-btn"></button>
														<img src="templates/img/user_default.jpg" alt=""/>
														<div class="sb-contact-info">
															<div class="contact-name">Владислав Кужугетович</div>
															<div class="contact-more-info">30 лет, г. Москва</div>
															<button class="gray-btn s-btn mt10 add"><span>Контакт</span></button>
														</div>
													</div>
													<div class="sb-contact clearfix">
														<button type="button" class="remove-btn"></button>
														<img src="templates/img/user_default_add.jpg" alt=""/>
														<div class="sb-contact-info">
															<div class="contact-name">Фамилия Имя</div>
															<div class="contact-more-info">30 лет, г. Москва</div>
															<button class="gray-btn s-btn mt10 add"><span>Контакт</span></button>
														</div>
													</div>
													<div class="sb-contact clearfix">
														<button type="button" class="remove-btn"></button>
														<img src="templates/img/user_default.jpg" alt=""/>
														<div class="sb-contact-info">
															<div class="contact-name">Фамилия Имя</div>
															<div class="contact-more-info">30 лет, г. Москва</div>
															<button class="gray-btn s-btn mt10 added"><span>В контактах</span></button>
														</div>
													</div>
													<div class="sb-contact clearfix">
														<button type="button" class="remove-btn"></button>
														<img src="templates/img/user_pic2.jpg" alt=""/>
														<div class="sb-contact-info">
															<div class="contact-name">Фамилия Имя</div>
															<div class="contact-more-info">30 лет, г. Москва</div>
															<button class="gray-btn s-btn mt10 add"><span>Контакт</span></button>
														</div>
													</div>
													<div class="sb-contact clearfix">
														<button type="button" class="remove-btn"></button>
														<img src="templates/img/user_default.jpg" alt=""/>
														<div class="sb-contact-info">
															<div class="contact-name">Владислав Кужугетович</div>
															<div class="contact-more-info">30 лет, г. Москва</div>
															<button class="gray-btn s-btn mt10 add"><span>Контакт</span></button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<button type="button" class="see_more">Показать еще</button>
									</li>
								</ul>
							</div>
						</div>

						<div class="side-block">
							<button type="button" class="remove-btn"></button>
							<div class="sb-title">
								<span>Могут заинтересовать</span><i>461</i>
							</div>
							<div class="sb-contacts">
								<div class="flex">
									<div class="sb-contact clearfix">
										<button type="button" class="remove-btn"></button>
										<img src="templates/img/user_pic1.jpg" alt=""/>
										<div class="sb-contact-info">
											<div class="contact-name">Фамилия ИмИмяИмяИмяИмяя</div>
											<div class="contact-more-info">Сельское хозяйство хозяйство</div>
											<button class="gray-btn s-btn mt10 add"><span>Контакт</span></button>
										</div>
									</div>
									<div class="sb-contact clearfix">
										<button type="button" class="remove-btn"></button>
										<img src="templates/img/user_default.jpg" alt=""/>
										<div class="sb-contact-info">
											<div class="contact-name">Владислав Кужугетович</div>
											<div class="contact-more-info">30 лет, г. Москва</div>
											<button class="gray-btn s-btn mt10 add"><span>Контакт</span></button>
										</div>
									</div>
									<div class="sb-contact clearfix">
										<button type="button" class="remove-btn"></button>
										<img src="templates/img/user_default_add.jpg" alt=""/>
										<div class="sb-contact-info">
											<div class="contact-name">Фамилия Имя</div>
											<div class="contact-more-info">30 лет, г. Москва</div>
											<button class="gray-btn s-btn mt10 add"><span>Контакт</span></button>
										</div>
									</div>
									<div class="sb-contact clearfix">
										<button type="button" class="remove-btn"></button>
										<img src="templates/img/user_default.jpg" alt=""/>
										<div class="sb-contact-info">
											<div class="contact-name">Фамилия Имя</div>
											<div class="contact-more-info">30 лет, г. Москва</div>
											<button class="gray-btn s-btn mt10 added"><span>В контактах</span></button>
										</div>
									</div>
									<div class="sb-contact clearfix">
										<button type="button" class="remove-btn"></button>
										<img src="templates/img/user_pic2.jpg" alt=""/>
										<div class="sb-contact-info">
											<div class="contact-name">Фамилия Имя</div>
											<div class="contact-more-info">30 лет, г. Москва</div>
											<button class="gray-btn s-btn mt10 add"><span>Контакт</span></button>
										</div>
									</div>
									<div class="sb-contact clearfix">
										<button type="button" class="remove-btn"></button>
										<img src="templates/img/user_default.jpg" alt=""/>
										<div class="sb-contact-info">
											<div class="contact-name">Владислав Кужугетович</div>
											<div class="contact-more-info">30 лет, г. Москва</div>
											<button class="gray-btn s-btn mt10 add"><span>Контакт</span></button>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="side-block">
							<button type="button" class="remove-btn"></button>
							<div class="tabs-wrapper">
								<div class="sb-title">
									<ul class="tabs">
										<li class="active">Новости контактов</li>
										<li>Новости сети</li>
									</ul>
								</div>
								<ul class="tab_content">
									<li>
										<div class="news-contacts">
											<div class="news-contacts__title">Сегодня</div>
											<ul class="contacts-list">
												<li>
													<div class="contact-name">Фамилия Имя</div>
													<div class="contact-status coinvestor">
														Соинвестор
													</div>
													<div class="new-report">
														<span>Новая заявка</span>
														Инвестирование, сельское хозяйство 2 000 000$
													</div>
												</li>
												<li>
													<div class="contact-name">Фамилия Имя</div>
													<div class="contact-status coinvestor proektant">
														Проектант
													</div>
													<div class="new-report">
														<span>Новая заявка</span>
														Инвестирование, сельское хозяйство 2 000 000$
													</div>
												</li>
												<li>
													<div class="contact-name">Фамилия Имя</div>
													<div class="contact-status coinvestor proektant">
														Проектант
													</div>
													<div class="new-report">
														<span>Обновление</span>
														Сменил аватар
													</div>
												</li>
												<li>
													<div class="contact-name">Фамилия Имя</div>
													<div class="contact-status coinvestor proektant">
														Проектант
													</div>
													<div class="new-report">
														<span>Новая заявка</span>
														Инвестирование, сельское хозяйство 2 000 000$
													</div>
												</li>
											</ul>
										</div>
										<div class="_hidden pt0">
											<div class="news-contacts">
												<ul class="contacts-list">
													<li>
														<div class="contact-name">Фамилия Имя</div>
														<div class="contact-status coinvestor">
															Соинвестор
														</div>
														<div class="new-report">
															<span>Новая заявка</span>
															Инвестирование, сельское хозяйство 2 000 000$
														</div>
													</li>
													<li>
														<div class="contact-name">Фамилия Имя</div>
														<div class="contact-status coinvestor proektant">
															Проектант
														</div>
														<div class="new-report">
															<span>Новая заявка</span>
															Инвестирование, сельское хозяйство 2 000 000$
														</div>
													</li>
													<li>
														<div class="contact-name">Фамилия Имя</div>
														<div class="contact-status coinvestor proektant">
															Проектант
														</div>
														<div class="new-report">
															<span>Обновление</span>
															Сменил аватар
														</div>
													</li>
													<li>
														<div class="contact-name">Фамилия Имя</div>
														<div class="contact-status coinvestor proektant">
															Проектант
														</div>
														<div class="new-report">
															<span>Новая заявка</span>
															Инвестирование, сельское хозяйство 2 000 000$
														</div>
													</li>
												</ul>
											</div>
										</div>
										<button type="button" class="see_more">Показать еще</button>
									</li>
									<li>
										<div class="news-contacts">
											<div class="news-contacts__title">Сегодня</div>
											<ul class="contacts-list">
												<li>
													<div class="contact-name">Фамилия Имя</div>
													<div class="contact-status coinvestor">
														Соинвестор
													</div>
													<div class="new-report">
														<span>Новая заявка</span>
														Инвестирование, сельское хозяйство 2 000 000$
													</div>
												</li>
												<li>
													<div class="contact-name">Фамилия Имя</div>
													<div class="contact-status coinvestor proektant">
														Проектант
													</div>
													<div class="new-report">
														<span>Новая заявка</span>
														Инвестирование, сельское хозяйство 2 000 000$
													</div>
												</li>
												<li>
													<div class="contact-name">Фамилия Имя</div>
													<div class="contact-status coinvestor proektant">
														Проектант
													</div>
													<div class="new-report">
														<span>Обновление</span>
														Сменил аватар
													</div>
												</li>
												<li>
													<div class="contact-name">Фамилия Имя</div>
													<div class="contact-status coinvestor proektant">
														Проектант
													</div>
													<div class="new-report">
														<span>Новая заявка</span>
														Инвестирование, сельское хозяйство 2 000 000$
													</div>
												</li>
											</ul>
										</div>
										<div class="_hidden pt0">
											<div class="news-contacts">
												<ul class="contacts-list">
													<li>
														<div class="contact-name">Фамилия Имя</div>
														<div class="contact-status coinvestor">
															Соинвестор
														</div>
														<div class="new-report">
															<span>Новая заявка</span>
															Инвестирование, сельское хозяйство 2 000 000$
														</div>
													</li>
													<li>
														<div class="contact-name">Фамилия Имя</div>
														<div class="contact-status coinvestor proektant">
															Проектант
														</div>
														<div class="new-report">
															<span>Новая заявка</span>
															Инвестирование, сельское хозяйство 2 000 000$
														</div>
													</li>
													<li>
														<div class="contact-name">Фамилия Имя</div>
														<div class="contact-status coinvestor proektant">
															Проектант
														</div>
														<div class="new-report">
															<span>Обновление</span>
															Сменил аватар
														</div>
													</li>
													<li>
														<div class="contact-name">Фамилия Имя</div>
														<div class="contact-status coinvestor proektant">
															Проектант
														</div>
														<div class="new-report">
															<span>Новая заявка</span>
															Инвестирование, сельское хозяйство 2 000 000$
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

						<div class="side-block">
							<div class="_visible">
								<div class="sb-title">
									<span>Об инвестировании</span>
								</div>
								<table class="sb-table">
									<tr>
										<td><span>Объем инвестирования:</span></td>
										<td>100 000$</td>
									</tr>
									<tr>
										<td><span>Отраслевая принадлежность:</span></td>
										<td><a href="#">Сельское хозяйство, информационные технологии</a></td>
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

						<div class="side-block mb0">
							<div class="sb-title clearfix">
								<p>Заявка на инвестирование (информационные технологии)</p>
								<div class="add-info clearfix">
									<div class="ai-num">№103770,</div>
									<div class="ai-date">8 июня</div>
								</div>
							</div>
							<div class="posr">
								<table class="sb-table">
									<tr>
										<td><span>Объем инвестирования:</span></td>
										<td>100 000$</td>
									</tr>
									<tr>
										<td><span>Отраслевая принадлежность:</span></td>
										<td><a href="#">Информационные технологии</a></td>
									</tr>
									<tr>
										<td><span>Регион инвестирования:</span></td>
										<td>Самарская область</td>
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
										<td>80 000 000$</td>
									</tr>
									<tr>
										<td><span>Опыт на рынке инвестирования:</span></td>
										<td>2 года</td>
									</tr>
								</table>
								<div class="posa">
									<div class="view-counter">
										<span>13</span>
									</div>
									<div class="dots-btn-wrap more-info">
										<button type="button" class="dots-btn visible-info"><span>...</span></button>
										<ul class="hidden-info">
											<li><a class="user-info-link share" href="#"><i class="fa fa-code-fork" aria-hidden="true"></i> Поделиться</a></li>
											<li><a class="user-info-link save" href="#"><i class="fa fa-plus" aria-hidden="true"></i> Сохранить</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="message-blocks">
							<div class="message-block">
								<img src="templates/img/user_pic2.jpg" alt=""/>
								<div class="message-block__body">
									<div class="contact-name">Фамилия Имя</div>
									<div class="contact-more-info">
										30 лет, г. Казань
									</div>
									<p>Добрый день! Что там по условиям?</p>
									<p>Мне интересно предложение, давайте встретимся и все обсудим!
									Я в Казани живу, вы в данный момент где находитесь? </p>
									<a href="#" class="white-btn">Начать диалог</a>
								</div>
							</div>
							<div class="message-block">
								<img src="templates/img/user_pic2.jpg" alt=""/>
								<div class="message-block__body">
									<div class="contact-name">Фамилия Имя</div>
									<div class="contact-more-info">
										30 лет, г. Казань
									</div>
									<p>Здравствуйте! Инересно ваше предложение, готов обсудить</p>
									<a href="#" class="white-btn">Начать диалог</a>
								</div>
							</div>
						</div>
					</div>
					<div class="rightside">
						<div class="side-block pb90">
							<div class="sb-title">
								<span>Обо мне</span>
							</div>
							<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
							incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
							exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute"</p>
							<div class="reg-soc-btns">
								<p>Ищите меня</p>
								<a href="#" class="vk">ВК</a>
								<a href="#" class="fb">Facebook</a>
							</div>
						</div>
						<div class="side-block">
							<div class="pickup">
								<div class="sb-title">
									<span class="pointer">Поиск</span>
									<span class="extend">Расширенный</span>
								</div>
								<div class="form">
									<form action="" target="post_form">
										<div class="element">
											<p>Тип участника</p>
											<select name="type_user" data-placeholder="Выберите тип" class="select-single required" data-msg-required="Заполните поле">
												<option></option>
												<option>Новатор</option>
												<option>Соинвестор</option>
												<option>Проектор</option>
											</select>
										</div>
										<div class="element">
											<p>Страна, город</p>
											<select name="location_user" data-placeholder="Выберите из списка" class="select-single required" data-msg-required="Заполните поле">
												<option></option>
												<option>Новатор</option>
												<option>Соинвестор</option>
												<option>Проектор</option>
											</select>
										</div>
										<div class="element">
											<p>Объем инвестиций</p>
											<select name="investment_size" data-placeholder="Выберите объем" class="select-single required" data-msg-required="Заполните поле">
												<option></option>
												<option>1-5 млн.</option>
												<option>5-50 млн.</option>
												<option>>100 млн.</option>
												<option>>1 млрд.</option>
											</select>
										</div>
										<div class="hidden">
											<div class="element">
												<p>Отрасль</p>
												<select name="industry" data-placeholder="Выберите отрасль" class="select-single required" data-msg-required="Заполните поле">
													<option></option>
													<option>1-5 млн.</option>
													<option>5-50 млн.</option>
													<option>>100 млн.</option>
													<option>>1 млрд.</option>
												</select>
											</div>
											<div class="element">
												<p>Регион</p>
												<select name="region" data-placeholder="Выберите из списка" class="select-single required" data-msg-required="Заполните поле">
													<option></option>
													<option>1-5 млн.</option>
													<option>5-50 млн.</option>
													<option>>100 млн.</option>
													<option>>1 млрд.</option>
												</select>
											</div>
											<div class="element">
												<p>Срок окупаемости</p>
												<select name="payback_period" data-placeholder="Выберите отрасль" class="select-single required" data-msg-required="Заполните поле">
													<option></option>
													<option>1-5 млн.</option>
													<option>5-50 млн.</option>
													<option>>100 млн.</option>
													<option>>1 млрд.</option>
												</select>
											</div>
											<div class="element">
												<p>Срок инвестирования</p>
												<select name="invest_period" data-placeholder="Выберите срок" class="select-single required" data-msg-required="Заполните поле">
													<option></option>
													<option>1-5 млн.</option>
													<option>5-50 млн.</option>
													<option>>100 млн.</option>
													<option>>1 млрд.</option>
												</select>
											</div>
											<div class="element">
												<p>Доходность</p>
												<select name="profitability" data-placeholder="Выберите доходность" class="select-single required" data-msg-required="Заполните поле">
													<option></option>
													<option>1-5 млн.</option>
													<option>5-50 млн.</option>
													<option>>100 млн.</option>
													<option>>1 млрд.</option>
												</select>
											</div>
										</div>

										<button type="submit" class="orange-btn">Найти</button>
										<button type="button" class="reset">Сбросить</button>
									</form>
								</div>
							</div>
						</div>
						<div class="side-block">
							<div class="sb-title">
								<span>Мои контакты</span><i class="sbt-couter">1654</i>
							</div>
							<div class="t-contacts">
								<div class="t-contact online">
									<div class="flex">
										<img src="templates/img/user_pic2.jpg" alt=""/>
										<div class="t-contact-info">
											<div class="contact-name">Фамилия Имя</div>
											<div class="contact-status proektant">Проектант</div>
										</div>
									</div>
								</div>
								<div class="t-contact online">
									<div class="flex">
										<img src="templates/img/user_pic3.jpg" alt=""/>
										<div class="t-contact-info">
											<div class="contact-name">Владислав Кужугетовичer</div>
											<div class="contact-status coinvestor">Соинвестор</div>
										</div>
									</div>
								</div>
								<div class="t-contact">
									<div class="flex">
										<img src="templates/img/user_pic1.jpg" alt=""/>
										<div class="t-contact-info">
											<div class="contact-name">Владислав Кужугетовичer</div>
											<div class="contact-more-info">30 лет, г. Москва</div>
										</div>
									</div>
								</div>
								<div class="t-contact">
									<div class="flex">
										<img src="templates/img/user_default.jpg" alt=""/>
										<div class="t-contact-info">
											<div class="contact-name">Владислав Кужугетовичer</div>
											<div class="contact-more-info">30 лет, г. Москва</div>
										</div>
									</div>
								</div>
								<div class="t-contact">
									<div class="flex">
										<img src="templates/img/user_pic3.jpg" alt=""/>
										<div class="t-contact-info">
											<div class="contact-name">Владислав Кужугетовичer</div>
											<div class="contact-more-info">30 лет, г. Москва</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="side-block">
							<div class="sb-title">
								<span>Гости</span><i class="sbt-couter">154</i>
							</div>
							<div class="t-contacts">
								<div class="t-contact online">
									<div class="flex">
										<img src="templates/img/user_pic2.jpg" alt=""/>
										<div class="t-contact-info">
											<div class="contact-name">Фамилия Имя</div>
											<div class="contact-status proektant">Проектант</div>
										</div>
									</div>
								</div>
								<div class="t-contact online">
									<div class="flex">
										<img src="templates/img/user_pic3.jpg" alt=""/>
										<div class="t-contact-info">
											<div class="contact-name">Владислав Кужугетовичer</div>
											<div class="contact-status coinvestor">Соинвестор</div>
										</div>
									</div>
								</div>
								<div class="t-contact">
									<div class="flex">
										<img src="templates/img/user_pic1.jpg" alt=""/>
										<div class="t-contact-info">
											<div class="contact-name">Владислав Кужугетовичer</div>
											<div class="contact-status coinvestor">Соинвестор</div>
										</div>
									</div>
								</div>
								<div class="t-contact">
									<div class="flex">
										<img src="templates/img/user_default.jpg" alt=""/>
										<div class="t-contact-info">
											<div class="contact-name">Владислав Кужугетовичer</div>
											<div class="contact-status coinvestor">Соинвестор</div>
										</div>
									</div>
								</div>
								<div class="t-contact online">
									<div class="flex">
										<img src="templates/img/user_pic3.jpg" alt=""/>
										<div class="t-contact-info">
											<div class="contact-name">Владислав Кужугетовичer</div>
											<div class="contact-status coinvestor">Соинвестор</div>
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