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
				<p>Данные отредактированы!</p>
				<?php else: ?>
				<?php if (isset($errors) && is_array($errors)): ?>
					<ul>
						<?php foreach ($errors as $error):?>
							<li> - <?php echo $error; ?></li>
							<?php endforeach; ?>
					</ul>
				<?php endif; ?>
				
					<h2 class="heading">Редактирование данных</h2>
					<div style="clear: both"><br></div>
					<!-- Тут мог быть див -->
					<div class="block">
					
					<form action="#" method="POST">
					<p>
						<p>Имя:</p>
						<input type="text" name="name" value="<?php echo $name; ?>">
					</p>
					<div style="clear: both"><br></div>
					<p>
						
						<p>Пароль:</p>
						<input type="password" name="password" value="<?php echo $password; ?>">
					</p>
					<div style="clear: both"><br></div>
					
					<button type="submit" name="submit">Сохранить</button>
					
					
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