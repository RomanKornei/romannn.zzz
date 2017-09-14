<!DOCTYPE html>
<html>
<?php
require_once ROOT . '/views/layouts/head.php'
?>
<body>
	<div id="wrapper">
		<div id="content">
			<?php
				require_once ROOT . '/views/layouts/header.php'
			?>
			
			<div id="main">
				<div id="news">
				<?php if ($result): ?>
				<p>Сообщение отправлено. Мы ответим вам на указанный email</p>
				<?php else: ?>
				<?php if (isset($errors) && is_array($errors)): ?>
					<ul>
						<?php foreach ($errors as $error):?>
							<li> - <?php echo $error; ?></li>
							<?php endforeach; ?>
					</ul>
				<?php endif; ?>
					<h2 class="heading">Реклама</h2>
					<div style="clear: both"><br></div>
					<div class="block">
						Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.


					</div>
					<?php endif; ?>
				</div>
			</div>
			<?php
				require_once ROOT . '/views/layouts/aside.php'
			?>
			
			
		</div>
		<?php
		require_once ROOT . '/views/layouts/footer.php'
		?>
	</div>
	<?php
		//require_once ROOT . '/views/layouts/JS_scripts.php'
	?>