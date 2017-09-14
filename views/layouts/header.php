			<header>
				<div id="logo">
					<a href="/" title="На главную">
						<img src="/template/img/image.ico" title="Проект Роман" alt="Проект Роман">
						<span>Project</span>
					</a>
				</div>
				<div id="about">
					<a href="/ad/" title="Узнать детальнее о рекламе">Реклама</a>
					<a href="/contacts/" title="Написать нам письмо">Обратная связь</a>
				</div>
				
				<div id="reg_auth">
				<?php if (User::isGuest()): ?>
					<a href="/user/login" title="Войти в кабинет пользователя">
						<div class="btn">
							Войти
						</div>
					</a>
					<a href="/user/register" title="Зарегестрироваться на сайте">
						<div class="btn">
							Регистрация
						</div>
					</a>
					<?php else: ?>
					<a href="/cabinet/" title="Зарегестрироваться на сайте">
						<div class="btn">
							Кабинет
						</div>
					</a>
					<a href="/user/logout/" title="Выйти из кабинета пользователя">
						<div class="btn">
							Выйти
						</div>
					</a>
					<?php endif; ?>
				</div>
				
			</header>
			<nav>
			<div id="menuShow"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<div id="hideMenu">
				<a href="/news/">ИИ новости</a>
				<a href="/shop/">Магазин</a>
				<a href="/cart"style="float: right;">
				<i class="fa fa-shopping-cart"></i> Корзина
					(<span id="cart-count"><?php echo Cart::countItems();?></span>)
					</a>
			</div>
			
			<div id="mobileMenu">
				<a href="/news/">ИИ новости</a><br>
				<a href="/shop/">Магазин</a><br>
				<a href="/cart/">Корзина</a>
				<hr>
				<a href="/user/login">Регистрация</a>
				<a href="/user/register">Войти</a>
				
			</div>
			</nav>