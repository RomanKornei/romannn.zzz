			<?php
				include ROOT . '/views/layouts/header_admin.php'
			?>
			
			<div id="main">
				<div id="news">
					<h2 class="heading">Админ панель</h2>
					<div style="clear: both"><br></div>
					
					<ul>
					<li><a href="/admin/product">Управление товарами</a></li>
					<li><a href="/admin/category">Управление категориями</a></li>
					<li><a href="/admin/order">Управление заказами</a></li>
					<li><a href="/admin/news">Управление новостями</a></li>
					</ul>
					
					
					
				</div>
			</div>
			
					
			
		</div>
		<?php
		require_once ROOT . '/views/layouts/footer_admin.php'
		?>
	</div>
	
</body>
</html>