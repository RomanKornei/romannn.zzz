			<?php
				include ROOT . '/views/layouts/header_admin.php'
			?>
			
			<div id="main">
				<div id="news">
					<h2 class="heading">Управление товрами</h2>
					<div style="clear: both"><br></div>
					
			<a href="/admin/product/create"><div class="btn"><i class="fa fa-plus"></i> Добавить товар</div></a>
            <div style="clear: both"><br></div>
            <h2>Список товаров</h2>

            <br/>

            <table>
                <tr>
                    <th>ID товара</th>
                    <th>Артикул</th>
                    <th>Название товара</th>
                    <th>Цена</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
                <?php foreach ($productsList as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['code']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['price']; ?></td>  
                        <td><a href="/admin/product/update/<?php echo $product['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/product/delete/<?php echo $product['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
				
			</div>
			
			</div>		
			
		</div>
		<div style="clear: both"><br></div>
		<?php
		require_once ROOT . '/views/layouts/footer_admin.php'
		?>
	</div>
	
</body>
</html>