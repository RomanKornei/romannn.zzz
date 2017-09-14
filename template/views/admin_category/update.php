<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    
           
            
				<div id="main">
				<div id="news">
				<h2 class="heading">Редактирование категории</h2>
				<div style="clear: both"><br></div>
                    <form action="#" method="post">
						<h4>Редактировать категорию "<?php echo $category['name']; ?>"</h4>
						<div style="clear: both"><br></div>
                        <p>Название</p>
                        <div><input type="text" name="name" placeholder="" value="<?php echo $category['name']; ?>"></div>

                        <p>Порядковый номер</p>
                        <div><input type="text" name="sort_order" placeholder="" value="<?php echo $category['sort_order']; ?>"></div>
                        
                        <p>Статус</p>
                        <select name="status">
                            <option value="1" <?php if ($category['status'] == 1) echo ' selected="selected"'; ?>>Отображается</option>
                            <option value="0" <?php if ($category['status'] == 0) echo ' selected="selected"'; ?>>Скрыта</option>
                        </select>

                        <br><br>
                        
                        <input type="submit" name="submit" class="btn" value="Сохранить">
                    </form>
					</div>
					</div>
                    
</section>
</div>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>
</div>
</body>
</html>
