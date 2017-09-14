<!DOCTYPE html>
<html>
<?php
include ROOT . '/views/layouts/head.php'
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
				<p>Вы зарегестрированы!</p>
				<?php else: ?>
				<?php if (isset($errors) && is_array($errors)): ?>
					<ul>
						<?php foreach ($errors as $error):?>
							<li> - <?php echo $error; ?></li>
							<?php endforeach; ?>
					</ul>
				<?php endif; ?>
				
					<h2 class="heading">Регистрация</h2>
					<div style="clear: both"><br></div>
					<!-- Тут мог быть див -->
					<div class="block">
					
					<form action="#" method="POST">
					<p>
						<p>Ваше Имя:</p>
						<input type="text" name="name" value="<?php echo $name; ?>">
					</p>
					<div style="clear: both"><br></div>
					<p>
						<p>Ваш Email:</p>
						<input type="email" name="email" value="<?php echo $email; ?>">
					</p>
					<div style="clear: both"><br></div>
					<p>
						<p>Ваш пароль:</p>
						<input type="password" name="password" value="<?php echo $password; ?>">
					</p>
					<div style="clear: both"><br></div>
					
					<button type="submit" name="submit">Зарегестрироватся</button>
					
					
					</form>
					
					</div><!-- Тут конец дива -->
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
		require_once ROOT . '/views/layouts/JS_scripts.php'
	?>
</body>
</html>