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
					<?php foreach ($categories as $categoryItem): ?>
						<a href="/category/<?php echo$categoryItem['id']; ?>">	
							<?php echo $categoryItem['name'];?>
							</a>
					<?php endforeach;?>
					<div style="clear: both"><br></div>
					
					
						
						
							<img src="<?php echo Product::getImage($product['id']); ?>" alt="">
							<h2><?php echo $product['name'];?></h2>
							<span><?php echo $product['description'];?></span>
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