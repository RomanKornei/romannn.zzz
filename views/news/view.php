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
					<h2 class="heading">ИИ новости</h2>
					<div style="clear: both"><br></div>
					
					<!-- Статья -->
					
					
					
						
						
							<img src="<?php echo News::getImage($news['id']); ?>" alt="">
							<h2><?php echo $news['title'];?></h2>
							<span><?php echo $news['text'];?></span>
							<div style="clear: both"><br></div>
					
					
					<a href="" onclick="javascript:history.back(); return false;" title="Назад">
						<div class="btn">
							Назад
						</div>
					</a>
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