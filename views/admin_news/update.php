			<?php require_once ROOT . '/views/layouts/header_admin.php'?>


            

            <div id="main">
				<div id="news">
				<h2 class="heading">Редактирование новости</h2>
				<div style="clear: both"><br></div>
                    <form action="#" method="post" enctype="multipart/form-data">
						<h4>Редактировать новость #<?php echo $id; ?></h4>
						<div style="clear: both"><br></div>
                        <p>Название новости</p>
                        <div><input type="text" name="title" placeholder="" value="<?php echo $news['title']; ?>"></div>

                        <p>Краткое описание</p>
                        <div><input type="text" name="intro_text" placeholder="" value="<?php echo $news['intro_text']; ?>"></div>

						<p>Изображение товара</p>
                        <img src="<?php echo News::getImage($news['id']); ?>" width="200" alt="">
                        <input type="file" name="image" placeholder="" value="<?php echo $news['image']; ?>">
                        <div style="clear: both"><br></div>
						<p>Текс новости</p>
                        <div><textarea name="text"><?php echo $news['text']; ?></textarea></div>

                                    
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