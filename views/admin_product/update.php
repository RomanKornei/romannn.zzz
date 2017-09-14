			<?php
				include ROOT . '/views/layouts/header_admin.php'
			?>
				  
				<div id="main">
				<div id="news">
				<h2 class="heading">Редактирование товара</h2>


            <div style="clear: both"><br></div>

            
                    <form action="#" method="post" enctype="multipart/form-data">
						<h4>Редактировать товар #<?php echo $id; ?></h4>
						<div style="clear: both"><br></div>
                        <p>Название товара</p>
                        <div><input type="text" name="name" placeholder="" value="<?php echo $product['name']; ?>"></div>

                        <p>Артикул</p>
                        <div><input type="text" name="code" placeholder="" value="<?php echo $product['code']; ?>"></div>

                        <p>Стоимость, $</p>
                        <div><input type="text" name="price" placeholder="" value="<?php echo $product['price']; ?>"></div>

                        <p>Категория</p>
                        <select name="category_id">
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id']; ?>" 
                                        <?php if ($product['category_id'] == $category['id']) echo ' selected="selected"'; ?>>
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                        
                        <br/><br/>

                        <p>Производитель</p>
                        <div><input type="text" name="brand" placeholder="" value="<?php echo $product['brand']; ?>"></div>

                        <p>Изображение товара</p>
                        <img src="<?php echo Product::getImage($product['id']); ?>" width="200" alt="">
                        <input type="file" name="image" placeholder="" value="<?php echo $product['image']; ?>">

                        <p>Детальное описание</p>
                        <div><textarea name="description"><?php echo $product['description']; ?></textarea></div>
                        
                        <br/><br/>

                        <p>Наличие на складе</p>
                        <select name="availability">
                            <option value="1" <?php if ($product['availability'] == 1) echo ' selected="selected"'; ?>>Да</option>
                            <option value="0" <?php if ($product['availability'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                        </select>
                        
                        <br/><br/>
                        
                        <p>Рекомендуемые</p>
                        <select name="is_recomended">
                            <option value="1" <?php if ($product['is_recomended'] == 1) echo ' selected="selected"'; ?>>Да</option>
                            <option value="0" <?php if ($product['is_recomended'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                        </select>
                        
                        <br/><br/>

                        <p>Статус</p>
                        <select name="status">
                            <option value="1" <?php if ($product['status'] == 1) echo ' selected="selected"'; ?>>Отображается</option>
                            <option value="0" <?php if ($product['status'] == 0) echo ' selected="selected"'; ?>>Скрыт</option>
                        </select>
                        
                        <div style="clear: both"><br></div>
                        
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                        
                        <div style="clear: both"><br></div>
                        
                    </form>
					</div>
					</div>
                
			
			
					
			
		</div>
		<?php
		require_once ROOT . '/views/layouts/footer_admin.php'
		?>
	</div>
	
</body>
</html>