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
					<?php foreach ($categories as $categoryItem): ?>
						<a href="/category/<?php echo$categoryItem['id']; ?>">	
							<?php echo $categoryItem['name'];?>
							</a>
					<?php endforeach;?>
					<div style="clear: both"><br></div>
						<?php if ($productsInCart): ?>
							<p>Вы выбрали такие товары:</p>
							<table>
								<tr>
									<th>Код товара</th>
									<th>Название</th>
									<th>Стоимость, руб</th>
									<th>Количество, шт</th>
									<th>Удалить</th>
								</tr>
								<?php foreach ($products as $product): ?>
									<tr>
										<td><?php echo $product['code'];?></td>
										<td>
											<a href="/shop/<?php echo $product['id'];?>">
												<?php echo $product['name'];?>
											</a>
										</td>
										<td><?php echo $product['price'];?></td>
										<td><?php echo $productsInCart[$product['id']];?></td>
										 <td>
                                        <a href="/cart/delete/<?php echo $product['id'];?>">
                                            <i class="fa fa-times"></i>
                                        </a>
										</td>
										</tr>
								<?php endforeach; ?>
								<tr>
									<td colspan="3">Общая стоимость:</td>
									<td><?php echo $totalPrice;?></td>
								</tr>
								</table>
								<div style="clear: both"><br></div>
                        <a href="/cart/checkout"><div class="btn"><i class="fa fa-shopping-cart"></i> Оформить заказ</div></a>
								<?php else: ?>
									<p>Корзина пуста</p>
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