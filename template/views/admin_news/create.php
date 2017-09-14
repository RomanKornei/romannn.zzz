<?php require_once ROOT . '/views/layouts/header_admin.php'?>
			
			
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            
				<div id="main">
				<div id="news">
				<h2 class="heading">Добавить новость</h2>
				<div style="clear: both"><br></div>
                    <form action="#" method="post" enctype="multipart/form-data">
											
                        <p>Название новости</p>
                        <div><input type="text" name="title" placeholder="" value=""></div>

                        <p>Краткое описние</p>
                         <div><textarea name="intro_text"></textarea></div>

                        <p>Изображение</p>
                        <input type="file" name="image" placeholder="" value="">
						<div style="clear: both"><br></div>
                        <p>Текст новости</p>
                        <div><textarea name="text"></textarea></div>

                        <br/><br/>

                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">

                        <br/><br/>

                    </form>
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