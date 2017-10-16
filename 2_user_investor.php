<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Пользователь - инвестор</title>
	<? include('inc/head.php'); ?>
</head>
<body class="gray">
	<div class="user-screen1"></div>
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
			<div class="after-header-panel investor">
				<div class="container">
					<div class="user-category">
						<!-- <i class="fa fa-check-circle fa-2x" aria-hidden="true"></i> -->
						<img class="check" src="templates/img/tick-4.svg" alt="">
						<div class="flex align">
							<div>
								<span>Инвестор</span>
								<div class="status">В сети</div>
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
									<button type="button" class="remove"></button>
									<img src="templates/img/user_big_ico1.jpg" alt="" />
									<div class="refresh">
										<a href="#">Обновить фотографию</a>
									</div>
								</div>
								<div class="user-desc">
									<div class="user-desc-name">Иванов Игорь Иванович</div>
									<div class="user-more-info">31 год, Россия, г. Москва</div>
									<table class="sb-table">
										<tr>
											<td><span>Место работы:</span></td>
											<td>Российские Железные Дороги (РЖД)</td>
										</tr>
										<tr>
											<td><span>Образование:</span></td>
											<td>Высшее, ТГУ, Экономист</td>
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
									<div class="clickable-el-row">
										<a href="#" class="gray-btn send">Написать сообщение</a>
										<a href="#" class="gray-btn add">В контакты</a>
									</div>
								</div>
							</div>
						</div>

						<div class="side-block">
							<div class="sb-title">
								<span>Контакты</span><i>274</i>
							</div>
							<div class="sb-contacts">
								<div class="flex">
									<div class="sb-contact clearfix">
										<img src="templates/img/user_pic1.jpg" alt=""/>
										<div class="sb-contact-info">
											<div class="contact-name"><a href="#">Фамилия Имя</a></div>
											<div class="contact-more-info">30 лет, г. Москва</div>
											<div class="contact-status investor">Инвестор</div>
										</div>
									</div>
									<div class="sb-contact clearfix">
										<div class="cap flex"><div class="user flex"><i class="panton a">n</i></div></div>
										<div class="sb-contact-info">
											<div class="contact-name"><a href="#">Владислав Кужугетович</a></div>
											<div class="contact-more-info">30 лет, г. Москва</div>
											<div class="contact-status investor">Инвестор</div>
										</div>
									</div>
									<div class="sb-contact clearfix">
										<img src="templates/img/user_pic1.jpg" alt=""/>
										<div class="sb-contact-info">
											<div class="contact-name"><a href="#">Фамилия Имя</a></div>
											<div class="contact-more-info">30 лет, г. Москва</div>
											<div class="contact-status investor">Инвестор</div>
										</div>
									</div>
									<div class="sb-contact clearfix">
										<img src="templates/img/user_pic1.jpg" alt=""/>
										<div class="sb-contact-info">
											<div class="contact-name"><a href="#">Фамилия Имя</a></div>
											<div class="contact-more-info">30 лет, г. Москва</div>
											<div class="contact-status investor">Инвестор</div>
										</div>
									</div>
									<div class="sb-contact clearfix">
										<img src="templates/img/user_pic2.jpg" alt=""/>
										<div class="sb-contact-info">
											<div class="contact-name"><a href="#">Фамилия Имя</a></div>
											<div class="contact-more-info">30 лет, г. Москва</div>
											<div class="contact-status coinvestor">Сoинвестор</div>
										</div>
									</div>
									<div class="sb-contact clearfix">
										<img src="templates/img/user_default.jpg" alt=""/>
										<div class="sb-contact-info">
											<div class="contact-name"><a href="#">Владислав Кужугетович</a></div>
											<div class="contact-more-info">30 лет, г. Москва</div>
											<div class="contact-status investor">Инвестор</div>
										</div>
									</div>
								</div>
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

						<div class="side-block">
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
											<li><a class="user-info-link share" href="#"><i class="panton c">o</i> Поделиться</a></li>
											<li><a class="user-info-link save" href="#"><i class="panton d">G</i> Сохранить</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="enter-mes clearfix">
							<div class="form">
								<img src="templates/img/user_pic1.jpg"  alt=""/>
								<form action="" target="post_form">
									<div class="element">
										<input type="text" placeholder="Напишите ваше сообщение " class="mes-input required" name="user-mes" />
									</div>
									<button type="submit">Отправить</button>
								</form>
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
							exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
							dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
							Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit 
							anim id est laborum."</p>
							<div class="reg-soc-btns small">
								<p>Ищите меня</p>
								<a href="#" class="vk">ВК</a>
								<a href="#" class="fb">Facebook</a>
							</div>
						</div>
						<div class="side-block">
							<div class="sb-title">
								<span>Похожие инвесторы</span><i class="sbt-couter">1654</i>
							</div>
							<div class="t-contacts">
								<div class="t-contact">
									<div class="flex">
										<img src="templates/img/user_pic2.jpg" alt=""/>
										<div class="t-contact-info">
											<div class="contact-name"><a href="#">Владислав Кужугетовичer</a></div>
											<div class="contact-more-info">30 лет, г. Москва</div>
										</div>
									</div>
								</div>
								<div class="t-contact">
									<div class="flex">
										<img src="templates/img/user_pic3.jpg" alt=""/>
										<div class="t-contact-info">
											<div class="contact-name"><a href="#">Владислав Кужугетовичer</a></div>
											<div class="contact-more-info">30 лет, г. Москва</div>
										</div>
									</div>
								</div>
								<div class="t-contact">
									<div class="flex">
										<img src="templates/img/user_pic1.jpg" alt=""/>
										<div class="t-contact-info">
											<div class="contact-name"><a href="#">Владислав Кужугетовичer</a></div>
											<div class="contact-more-info">30 лет, г. Москва</div>
										</div>
									</div>
								</div>
								<div class="t-contact">
									<div class="flex">
										<img src="templates/img/user_pic2.jpg" alt=""/>
										<div class="t-contact-info">
											<div class="contact-name"><a href="#">Владислав Кужугетовичer</a></div>
											<div class="contact-more-info">30 лет, г. Москва</div>
										</div>
									</div>
								</div>
								<div class="t-contact">
									<div class="flex">
										<img src="templates/img/user_pic3.jpg" alt=""/>
										<div class="t-contact-info">
											<div class="contact-name"><a href="#">Владислав Кужугетовичer</a></div>
											<div class="contact-more-info">30 лет, г. Москва</div>
										</div>
									</div>
								</div>
								<div class="view-all">
									<a href="#">Показать всех</a>
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