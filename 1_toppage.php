<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Регистрация</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<!-- <div class="reg-screen"></div> -->
	<div class="wrapper pb0">
		<div class="registration-body">
			<header>
				<div class="container">
					<div class="logo"><a href="#"><img src="templates/img/logo.jpg" alt=""/></a></div>
					<div class="entrance-panel">
						<div class="form">
							<form action="" target="post_form">
								<div class="element">
									<input type="text" name="login" class="phone required" placeholder="Логин" data-msg-required="Заполните поле" />
								</div>
								<div class="element">
									<input type="password" name="password" placeholder="Пароль" data-msg-required="Заполните поле" />
									<span class="tooltip-recovery-pass" data-tooltip-content="#tooltip_content"></span>
									<div class="tooltip_templates">
										<span id="tooltip_content">
											<em>Забыли пароль?</em><br>
									       	Его можно быстро
											<a href="#">Восстановить</a>
									    </span>
									</div>
								</div>
								<button type="submit" class="orange-btn">Войти</button>
							</form>
						</div>
					</div>
					<button class="menu-btn" type="button">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</button>
				</div>
				<!-- Левое меню -->
				<div class="pushy pushy-left">
				    <div class="entrance-panel">
						<div class="form">
							<form action="" target="post_form">
								<div class="element">
									<input type="text" name="login" class="required" placeholder="Логин" data-msg-required="Заполните поле" />
								</div>
								<div class="element">
									<input type="password" name="password" placeholder="Пароль" data-msg-required="Заполните поле" />
								</div>
								<button type="submit" class="orange-btn">Войти</button>
							</form>
						</div>
					</div>
				</div>
				<div class="notification error">
					<!-- <div class="container"> -->
						<div class="flex align">
							<i class="panton b">e</i><strong>Ошибка!</strong> Отправка данных не завершена и причина почему.
							<a href="#" class="close-notify"><img src="templates/img/w-arrow.png" alt=""/></a>
						</div>
					<!-- </div> -->
				</div>
				<!-- <div class="notification warnings">
					<div class="container">
						<div class="flex align">
							<i class="panton d">i</i><strong>Предупреждение!</strong> Обнаружены проблемы с сетевым соединением.
							<a href="#" class="close-notify"><img src="templates/img/w-arrow.png" alt=""/></a>
						</div>
					</div>
				</div>
				<div class="notification success">
					<div class="container">
						<div class="flex align">
							<i class="panton c">G</i><strong>Отправлено успешно!</strong> Ваша заявка отправлена на модерацию.
							<a href="#" class="close-notify"><img src="templates/img/w-arrow.png" alt=""/></a>
						</div>
					</div>
				</div>
				<div class="notification info">
					<div class="container">
						<div class="flex align">
							<i class="panton d">B</i><strong>Уведомление!</strong> Добро пожаловать на сайт New Next.
							<a href="#" class="close-notify"><img src="templates/img/w-arrow.png" alt=""/></a>
						</div>
					</div>
				</div> -->
			</header>
			<div class="flex center">
				<div class="reg-panel clearfix">
					<div class="leftcolumn">
						<article>Описание сети - это текст-"рыба", часто 
						используемый в печати  вэб-дизайне. </article>
						<p>В то время некий безымянный печатник создал 
						большую коллекцию размеров</p>
						<!-- <div class="reg-soc-btns">
							<p>Регистрация через соцсети</p>
							<a href="#" class="vk">Вконтакте</a>
							<a href="#" class="fb">Facebook</a>
						</div> -->
					</div>
					<div class="rightcolumn">
						<h1>Регистрация</h1>
						<div class="form">
							<form action="" target="post_form">
								<div class="element selectReq">
									<strong>Тип участника</strong>
									<div class="select">
										<select name="type_user" data-placeholder="Входящие" class="select-req select-single required" data-msg-required="Заполните поле">
											<option></option>
											<option>Новатор</option>
											<option>Соинвестор</option>
											<option>Проектор</option>
										</select>
									</div>
								</div>
								<div class="element">
									<strong>Имя</strong>
									<input type="text" class="required" name="name" data-msg-required="Заполните поле" />
								</div>
								<div class="element">
									<strong>Фамилия</strong>
									<input type="text" class="required" name="surname" data-msg-required="Заполните поле" />
								</div>
								<div class="element selectReq">
									<strong>Язык на котором вам удобнее общаться</strong>
									<div class="select">
										<select name="select_lang" multiple="multiple" class="select-req select-lang required" data-msg-required="Заполните поле">
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
								<div class="element">
									<strong>Телефон</strong>
									<input type="text" class="phone required" name="phone" data-msg-required="Заполните поле" />
								</div>
								<input type="hidden" name="hidden" value="Форма регистрации на главной">
								<button type="submit" class="orange-btn">Зарегистрироваться</button>
							</form>
							<div class="confident">
								Нажимая «Зарегистрироваться», вы принимаете условия <a href="#">Пользовательского соглашения</a>, 
								Политики конфиденциальности и Политики использования файлов cookie New Next.
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
		</div>
	</div>

	<div class="pushy pushy-left">
	    <div class="entrance-panel">
			<div class="form">
				<form action="" target="post_form">
					<div class="element">
						<input type="text" name="login" class="required" placeholder="Логин" data-msg-required="Заполните поле" />
					</div>
					<div class="element">
						<input type="password" name="password" placeholder="Пароль" data-msg-required="Заполните поле" />
					</div>
					<button type="submit" class="orange-btn">Войти</button>
				</form>
			</div>
		</div>
	</div>

	<? include('inc/modal.php'); ?>
	<? include('inc/scripts.php'); ?>
</body>
</html>