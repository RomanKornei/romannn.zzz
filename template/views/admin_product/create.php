			<?php
				include ROOT . '/views/layouts/header_admin.php'
			?>
			
				
                       

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            
			    <div id="main">
				<div id="news">
				<h2 class="heading">Добавить товар</h2>
				<div style="clear: both"><br></div>
                    <form action="#" method="post" enctype="multipart/form-data">
						
                        <p>Название товара</p>
                        <div><input type="text" name="name" placeholder="" value=""></div>

                        <p>Артикул</p>
                        <div><input type="text" name="code" placeholder="" value=""></div>

                        <p>Стоимость, $</p>
                        <div><input type="text" name="price" placeholder="" value=""></div>

                        <p>Категория</p>
                        <select name="category_id">
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id']; ?>">
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        <br/><br/>

                        <p>Производитель</p>
                        <div><input type="text" name="brand" placeholder="" value=""></div>
						
                        <p>Изображение товара</p>
                        <input type="file" name="image" placeholder="" value="">
						<div style="clear: both"><br></div>
                        <p>Детальное описание</p>
                        <div><textarea name="description"></textarea></div>

                        <br/><br/>

                        <p>Наличие на складе</p>
                        <select name="availability">
                            <option value="1" selected="selected">Да</option>
                            <option value="0">Нет</option>
                        </select>

                        <br/><br/>

                        <p>Рекомендуемые</p>
                        <select name="is_recomended">
                            <option value="1" selected="selected">Да</option>
                            <option value="0">Нет</option>
                        </select>

                        <br/><br/>

                        <p>Статус</p>
                        <select name="status">
                            <option value="1" selected="selected">Отображается</option>
                            <option value="0">Скрыт</option>
                        </select>

                        <br/><br/>

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