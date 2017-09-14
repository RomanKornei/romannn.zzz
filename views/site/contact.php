<!DOCTYPE html>
<html>
<?php
require_once ROOT . '/views/layouts/head.php'
?>
<body>
	<div id="wrapper">
		<div id="content">
			<?php
				require_once ROOT . '/views/layouts/header.php'
			?>
			
			<div id="main">
				<div id="news">
				<?php if ($result): ?>
				<p>Сообщение отправлено. Мы ответим вам на указанный email</p>
				<?php else: ?>
				<?php if (isset($errors) && is_array($errors)): ?>
					<ul>
						<?php foreach ($errors as $error):?>
							<li> - <?php echo $error; ?></li>
							<?php endforeach; ?>
					</ul>
				<?php endif; ?>
					<h2 class="heading">Обратная связь</h2>
					<div style="clear: both"><br></div>
					<div class="block">
						Чтобы отправить нам ваше сообщение, просто заполните форму ниже и отправьте нам
						<form action="#" method="post">
							<div>
								<input type="email" name="userEmail" id="email" placeholder="Email.." value="<?php echo $userEmail; ?>">
							</div>
							<div>
								<textarea id="message" name="userText" placeholder="Введите само сообщение" value="<?php echo $userText; ?>"></textarea>
							</div>
							<input type="submit" name="submit" id="send" class="btn" value="Отправить">
						</form>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<?php
				require_once ROOT . '/views/layouts/aside.php'
			?>
			
			
		</div>
		<?php
		require_once ROOT . '/views/layouts/footer.php'
		?>
	</div>
	<?php
	//	require_once ROOT . '/views/layouts/JS_scripts.php'
	?>
	</body>
	</html>