<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    
            

            

            <div id="main">
				<div id="news">
				<h2 class="heading">Редактирование заказа</h2>
				<div style="clear: both"><br></div>
                    <form action="#" method="post">
						<h4>Редактировать заказ #<?php echo $id; ?></h4>
						<div style="clear: both"><br></div>
                        <p>Имя клиента</p>
                        <div><input type="text" name="userName" placeholder="" value="<?php echo $order['user_name']; ?>"></div>

                        <p>Телефон клиента</p>
                        <div><input type="text" name="userPhone" placeholder="" value="<?php echo $order['user_phone']; ?>"></div>

                        <p>Комментарий клиента</p>
                        <div><input type="text" name="userComment" placeholder="" value="<?php echo $order['user_comment']; ?>"></div>

                        <p>Дата оформления заказа</p>
                        <div><input type="text" name="date" placeholder="" value="<?php echo $order['date']; ?>"></div>

                        <p>Статус</p>
                        <select name="status">
                            <option value="1" <?php if ($order['status'] == 1) echo ' selected="selected"'; ?>>Новый заказ</option>
                            <option value="2" <?php if ($order['status'] == 2) echo ' selected="selected"'; ?>>В обработке</option>
                            <option value="3" <?php if ($order['status'] == 3) echo ' selected="selected"'; ?>>Доставляется</option>
                            <option value="4" <?php if ($order['status'] == 4) echo ' selected="selected"'; ?>>Закрыт</option>
                        </select>
                        <br>
                        <br>
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                    </form>
                </div>
            </div>

        
</section>
</div>
<div style="clear: both"><br></div>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>
</div>
	
</body>
</html>

