     		<?php
				include ROOT . '/views/layouts/header_admin.php'
			?>
			
			<div id="main">
				<div id="news">
					<h2 class="heading">Управление новостями</h2>
					<div style="clear: both"><br></div>
					
					<a href="/admin/news/create/"><div class="btn"><i class="fa fa-plus"></i> Добавить новость</div></a>
            <div style="clear: both"><br></div>
            <h2>Список новостей</h2>

            <br/>

            <table>
                <tr>
                    <th>ID новости</th>
                    <th>Название</th>
                    <th>Кратское сожержание</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
                <?php foreach ($newsList as $news): ?>
                    <tr>
                        <td><?php echo $news['id']; ?></td>
                        <td><?php echo $news['title']; ?></td>
                        <td><?php echo $news['intro_text']; ?></td>
                        <td><a href="/admin/news/update/<?php echo $news['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/news/delete/<?php echo $news['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
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