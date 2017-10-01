<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Восстановление пароля</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="pass-rec-screen"></div>
	<div class="wrapper pb0">
		<div class="registration-body rec-pass">
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
			</header>
			<div class="flex center">
				<div class="recovery-windows flex">
					<div class="r-window active">
						<div class="flex">
							<div>
								<article>Пожалуйста, укажите телефон, который вы использовали 
								для входа на сайт.</article>
								<p>Мы пришлём бесплатное
								SMS с кодом подтверждения.</p>
							</div>
							<div>
								<div class="recovery-title">Забыли пароль?</div>
								<div class="form-pass-recovery">
									<form action="" target="post_form">
										<div class="element">
											<strong>Ваш телефон</strong>
											<input type="text" class="phone required" name="phone" data-msg-required="Заполните поле" />
										</div>
										<input type="hidden" name="hidden" value="Форма Забыли пароль?">
										<button type="submit" class="orange-btn">Выслать новый пароль</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="r-window">
						<div class="flex">
							<div>
								<article>Введите полученый код
								из SMS сообщениия. </article>
								<p>Если код не пришел
								в течение 2 минут, проверьте правильность введеного номера телефона.</p>
								<p>Не получилось восстановить пароль? <a href="#">Свяжитесь с нами</a></p>
							</div>
							<div>
								<div class="recovery-title">Подтверждение<br> телефона</div>
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
					<div class="r-window">
						<div class="flex">
							<div>
								<article>Придумайте и введите новый пароль длиной
								не менее 6 символов.</article>
								<p>В безопасном пароле должны присутствовать буквы, цифры
								и символы.</p>
							</div>
							<div>
								<div class="recovery-title">Восстановление пароля</div>
								<div class="form-pass-recovery">
									<form action="" target="post_form">
										<div class="element">
											<strong>Ваш логин: <span class="user-login">79879686554</span></strong>
										</div>
										<div class="element">
											<strong>Новый пароль</strong>
											<input type="password" class="required tooltip-new-pass" title="Запишите пароль, если вы
											не уверены что запомните его" name="password" id="password" />
										</div>
										<div id="meter"></div>
										<div class="element">
											<strong>Подтверждение пароля</strong>
											<input type="password" class="required" name="confirm_password" data-msg-required="Заполните поле" />
										</div>
										<input type="hidden" name="hidden" value="Форма Восстановление пароля">
										<button type="submit" class="orange-btn">Сохранить</button>
									</form>
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