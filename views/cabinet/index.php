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
				
				
					<h2 class="heading">Кабинет Пользователя</h2>
					<div style="clear: both"><br></div>
					<h3>Привет, <?php echo $user['name'];?>!</h3>
					<div style="clear: both"><br></div>
					
					<div class="block">
					<ul>
						<li><a href="/cabinet/edit">Редактировать данные</a></li>
					</ul>
					
					
					</div>
					
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