<!DOCTYPE html>
<html>
<?php
require_once ROOT . '/views/layouts/head.php'
?>
<body>

	<div id="wrapper">
		<div id="content">
			<?php
				include ROOT . '/views/layouts/header.php'
			?>
			
			<div id="main">
				<div id="news">
					<h2 class="heading">Корзина</h2>
					<div style="clear: both"><br></div>
					
					<!-- Статья -->
					 <?php if ($result): ?>
                        <p>Заказ оформлен. Мы Вам перезвоним.</p>
                    <?php else: ?>

                        <p>Выбрано товаров: <?php echo $totalQuantity; ?>, на сумму: <?php echo $totalPrice; ?>, руб</p><br>

                        <?php if (!$result): ?>                        

                            <div class="col-sm-4">
                                <?php if (isset($errors) && is_array($errors)): ?>
                                    <ul>
                                        <?php foreach ($errors as $error): ?>
                                            <li> - <?php echo $error; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <p>Для оформления заказа заполните форму. Наш менеджер свяжется с Вами.</p>

                                <div class="login-form">
                                    <form action="#" method="post">

                                        <p>Ваша имя</p>
                                        <input type="text" name="userName" placeholder="" value="<?php echo $userName; ?>">

                                        <p>Номер телефона</p>
                                        <input type="text" name="userPhone" placeholder="" value="<?php echo $userPhone; ?>">

                                        <p>Комментарий к заказу</p>
                                        <input type="text" name="userComment" placeholder="Сообщение" value="<?php echo $userComment; ?>">

                                        <br>
                                        <br>
                                        <input type="submit" name="submit" style="float: left;" class="btn" value="Оформить" >
                                    </form>
                                </div>
                            </div>

                        <?php endif; ?>

                    <?php endif; ?>
					
					
				</div>
			</div>
			<?php
				include ROOT . '/views/layouts/aside.php'
			?>
					
			<?php
				include ROOT . '/views/layouts/web.php'
			?>
		</div>
		<?php
		require_once ROOT . '/views/layouts/footer.php'
		?>
	</div>
	<?php
		require_once ROOT . '/views/layouts/JS_scripts.php'
	?>
</body>
</html>