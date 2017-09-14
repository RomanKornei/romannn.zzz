<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            
				<div id="main">
				<div id="news">
				<h2 class="heading">Добавить категорию</h2>
				<div style="clear: both"><br></div>
                    <form action="#" method="post">
						<p>Название</p>
                        <div><input type="text" name="name" placeholder="" value=""></div>

                        <p>Порядковый номер</p>
                        <div><input type="text" name="sort_order" placeholder="" value=""></div>

                        <p>Статус</p>
                        <select name="status">
                            <option value="1" selected="selected">Отображается</option>
                            <option value="0">Скрыта</option>
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