
			<?php
				include ROOT . '/views/layouts/header_admin.php'
			?>
			
			<div id="main">
				<div id="news">
					<h2 class="heading">Удаление новости</h2>
					<div style="clear: both"><br></div>
					
				

            <h4>Удалить новость #<?php echo $id; ?></h4>


            <p>Вы действительно хотите удалить эту новость?</p>

            <form method="post">
                <input type="submit" class="btn" name="submit" value="Удалить" />
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