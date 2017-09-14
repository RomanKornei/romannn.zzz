<!DOCTYPE html>
<html>
<?php include ROOT . '/views/layouts/head.php'; ?>
<body>

	<div id="wrapper">
		<div id="content">
			<?php
				include ROOT . '/views/layouts/header.php'
			?>
			
			<div id="main">
				<div id="news">
					<h2 class="heading">Магазин</h2>
					<div style="clear: both"><br></div>
					
					<!-- Статья -->
					
					<?php foreach ($categories as $categoryItem): ?>
						<a href="/category/<?php echo$categoryItem['id']; ?>">	
							<?php echo $categoryItem['name'];?>
							</a>
					<?php endforeach;?>
					<div style="clear: both"><br></div>
					<?php foreach ($categoryProducts as $product): ?>
											
						<a href="/shop/<?php echo $product['id'];?>"><div class="article"><div>
							<img src="<?php echo Product::getImage($product['id']); ?>" alt="">
							<h2 style="text-align: center;"><?php echo $product['name'];?></h2>
							<span><?php echo $product['price'];?> рублей</span>
							</div></a>
							<div style="clear: both"><br></div>
							<div id="cart" ><a  href="#" data-id="<?php echo $product['id'];?>" class="button7 add-to-cart" >В корзину</a></div></div>
					<?php endforeach;?>
										
					
				</div>
			</div>
			
			<?php
				include ROOT . '/views/layouts/aside.php'
			?>
				</div>
<?php echo $pagination->get(); ?>				
			<?php
				include ROOT . '/views/layouts/web.php'
			?>
		
		
		<?php
		require_once ROOT . '/views/layouts/footer.php'
		?>
	</div>
	<?php
		require_once ROOT . '/views/layouts/JS_scripts.php'
	?>
</body>
</html>