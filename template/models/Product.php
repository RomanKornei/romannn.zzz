<?php
//Класс Product - модель для работы с товарами
class Product
{   
     // Количество отображаемых товаров по умолчанию
	const SHOW_BY_DEFAULT = 6;
	//Возвращает массив последних товаров
	public static function getLatestProducts($count = self::SHOW_BY_DEFAULT)
	{
		
		// Соединение с БД
		$db = Db::getConnection();
		$productsList = array();
		// Текст запроса к БД
		$result = $db->query('SELECT id, name, price FROM shop '
		. 'WHERE status = "1"'
		. 'ORDER BY id DESC LIMIT ' . $count);
		
		// Получение и возврат результатов
		$i = 0;
		while ($row = $result->fetch()){
			$productsList[$i]['id'] = $row['id'];
			$productsList[$i]['name'] = $row['name'];
			$productsList[$i]['price'] = $row['price'];
			$i++;
		}
		return $productsList;
	}
	//Возвращает продукт с указанным id
	public static function getProductById($id)
	{
		
		if ($id) {
			// Соединение с БД
			$db = Db::getConnection();
			// Получение и возврат результатов
			$result = $db->query('SELECT * FROM shop WHERE id=' . $id);
			$result->setFetchMode(PDO::FETCH_ASSOC);
		
		
			return $result->fetch();
		}
	
	}
	
	public static function getTotalProductsInCategory($categoryId)
	{
		
		$db = Db::getConnection();
		$result = $db->query('SELECT count(id) AS count FROM shop '
			. 'WHERE status="1" AND category_id ="'.$categoryId.'"');
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$row = $result->fetch();
		
		return $row['count'];
	}
	public static function getProductsByIds($idsArray)
	{
		$products = array();
		$db = Db::getConnection();
		$idsString = implode(',', $idsArray);
		$sql = "SELECT * FROM shop WHERE status='1' AND id IN ($idsString)";
		$result = $db->query($sql);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$i=0;
		while ($row = $result->fetch()) {
			$products[$i]['id'] = $row['id'];
			$products[$i]['code'] = $row['code'];
			$products[$i]['name'] = $row['name'];
			$products[$i]['price'] = $row['price'];
			$i++;
		}
		return $products;
	}
	public static function getRecommendedProducts()
	{
		$db = Db::getConnection();
		
		$result = $db->query('SELECT id, name, price FROM shop '
				. 'WHERE status = "1" AND is_recomended = "1" '
				. 'ORDER BY id DESC');
		$i = 0;
		$productsList = array();
		while ($row = $result->fetch()) {
			$productsList[$i]['id'] = $row['id'];
			$productsList[$i]['name'] = $row['name'];
			$productsList[$i]['price'] = $row['price'];
			$i++;
	}
	return $productsList;
	
	}
	// Возвращает список товаров в указанной категории
	public static function getProductsListByCategory($categoryId = false, $page = 1)
	{
		if ($categoryId) {
			
			
			// Смещение (для запроса)
			$offset = ($page - 1) * self::SHOW_BY_DEFAULT;
			// Соединение с БД
			$db = Db::getConnection();
			$products = array();
			// Текст запроса к БД
			$result = $db->query("SELECT id, name, price FROM shop "
			. "WHERE status = '1' AND category_id = '$categoryId' "
			. "ORDER BY id DESC "
			. "LIMIT ".self::SHOW_BY_DEFAULT
			. ' OFFSET '. $offset);
			// Получение и возврат результатов
			$i = 0;
			while ($row = $result->fetch()) {
				$products[$i]['id'] = $row['id'];
				$products[$i]['name'] = $row['name'];
				$products[$i]['price'] = $row['price'];
				$i++;
			}
			return $products;
		}
	}
	// Возвращает список товаров
    public static function getProductsList()
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Получение и возврат результатов
        $result = $db->query('SELECT id, name, price, code FROM shop ORDER BY id ASC');
        $productsList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['code'] = $row['code'];
            $productsList[$i]['price'] = $row['price'];
            $i++;
        }
        return $productsList;
    }
	//Удаляет товар с указанным id
	public static function deleteProductById($id)
	{   // Соединение с БД
		$db = Db::getConnection();
		// Текст запроса к БД
		$sql = 'DELETE FROM shop WHERE id = :id';
		// Получение и возврат результатов. Используется подготовленный запрос
		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		return $result->execute();
	}
	//Редактирует товар с заданным id
	 public static function updateProductById($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = "UPDATE shop
            SET 
                name = :name, 
                code = :code, 
                price = :price, 
                category_id = :category_id, 
                brand = :brand, 
                availability = :availability, 
                description = :description, 
                is_recomended = :is_recomended, 
                status = :status
            WHERE id = :id";
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
        $result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':is_recomended', $options['is_recomended'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        return $result->execute();
    }
	//Добавляет новый товар
	public static function createProduct($options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'INSERT INTO shop '
                . '(name, code, price, category_id, brand, availability,'
                . 'description, is_recomended, status)'
                . 'VALUES '
                . '(:name, :code, :price, :category_id, :brand, :availability,'
                . ':description, :is_recomended, :status)';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
        $result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':is_recomended', $options['is_recomended'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }
	//Возвращает путь к изображению
    public static function getImage($id)
    {
        // Название изображения-пустышки
        $noImage = 'no-image.jpg';
        // Путь к папке с товарами
        $path = '/upload/images/products/';
        // Путь к изображению товара
        $pathToProductImage = $path . $id . '.jpg';
        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
            // Если изображение для товара существует
            // Возвращаем путь изображения товара
            return $pathToProductImage;
        }
        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
    }	
}
?>