			<?php
				include ROOT . '/views/layouts/header_admin.php'
			?>
			
			<div id="main">
				<div id="news">
					<h2 class="heading">Просмотр заказа</h2>
					<div style="clear: both"><br></div>
					
				


            <h4>Просмотр заказа #<?php echo $order['id']; ?></h4>
            <br/>




            
            <table>
                <tr>
                    <td>Номер заказа</td>
                    <td><?php echo $order['id']; ?></td>
                </tr>
                <tr>
                    <td>Имя клиента</td>
                    <td><?php echo $order['user_name']; ?></td>
                </tr>
                <tr>
                    <td>Телефон клиента</td>
                    <td><?php echo $order['user_phone']; ?></td>
                </tr>
                <tr>
                    <td>Комментарий клиента</td>
                    <td><?php echo $order['user_comment']; ?></td>
                </tr>
                <?php if ($order['user_id'] != 0): ?>
                    <tr>
                        <td>ID клиента</td>
                        <td><?php echo $order['user_id']; ?></td>
                    </tr>
                <?php endif; ?>
                <tr>
                    <td><b>Статус заказа</b></td>
                    <td><?php echo Order::getStatusText($order['status']); ?></td>
                </tr>
                <tr>
                    <td><b>Дата заказа</b></td>
                    <td><?php echo $order['date']; ?></td>
                </tr>
            </table>

            

            <a href="/admin/order/"><div class="btn"><i class="fa fa-arrow-left"></i> Назад</div></a>
				</div>
			</div>
			
					
			
		</div>
		<?php
		require_once ROOT . '/views/layouts/footer_admin.php'
		?>
	</div>
	
</body>
</html>