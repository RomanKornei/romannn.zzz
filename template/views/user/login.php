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
					<h2 class="heading">Авторизация</h2>
					<div style="clear: both"><br></div>
					<!-- Тут мог быть див -->
					<div class="block">
					<?php if (isset($errors) && is_array($errors)): ?>
					<ul>
						<?php foreach ($errors as $error):?>
							<li> - <?php echo $error; ?></li>
							<?php endforeach; ?>
					</ul>
				<?php endif; ?>
					
					<form action="#" method="POST">
					<p>
						<p>Email:</p>
						<input type="email" name="email" value="<?php echo $email; ?>">
					</p>
					<div style="clear: both"><br></div>
					<p>
						<p>Пароль:</p>
						<input type="password" name="password" value="<?php echo $password; ?>">
					</p>
					<div style="clear: both"><br></div>
					<button type="submit" name="submit">Войти</button>
					
					
					</form>
					</div><!-- Тут конец дива -->
				</div>
			</div>
			<?php
				require_once ROOT . '/views/layouts/aside.php'
			?>
			<div style="clear: both"><br></div>
			
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