<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    

            


            
				<div id="main">
				<div id="news">
				<h2 class="heading">Удаление заказа</h2>
					<div style="clear: both"><br></div>
            <form method="post">
			<h4>Удалить заказ #<?php echo $id; ?></h4>
			
            <p>Вы действительно хотите удалить этот заказ?</p>
                <input type="submit" class="btn" name="submit" value="Удалить" />
            </form>

        </div>
    </div>
</section>
</div>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>
</div>
	
</body>
</html>
