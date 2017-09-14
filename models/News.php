<?php

class News
{   // Количество отображаемых новостей по умолчанию
	const SHOW_BY_DEFAULT = 6;
	 //Возвращает массив последних новостей
	public static function getLatestNews($count = self::SHOW_BY_DEFAULT, $page = 1)
	{	// Смещение (для запроса)
		$offset = ($page - 1) * self::SHOW_BY_DEFAULT;
		// Соединение с БД
		$db = Db::getConnection();
		$newsList = array();
		// Текст запроса к БД
		$result = $db->query('SELECT id, title, intro_text FROM satii '
		. 'ORDER BY id DESC LIMIT ' . $count
		. ' OFFSET '. $offset);
		
       // Получение и возврат результатов
		$i = 0;
		while ($row = $result->fetch()){
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['title'] = $row['title'];
			$newsList[$i]['intro_text'] = $row['intro_text'];
			$i++;
		}
		return $newsList;
	}
	 //Возвращаем количество новостей
		public static function getTotalNews()
	{
		// Соединение с БД
		$db = Db::getConnection();
		// Текст запроса к БД
		$result = $db->query('SELECT count(id) AS count FROM satii');
		// Получение и возврат результатов
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$row = $result->fetch();
		
		return $row['count'];
	}
	public static function getNewsById($id)
	{
		
		if ($id) {
			 // Соединение с БД
			$db = Db::getConnection();
			// Текст запроса к БД
			$result = $db->query('SELECT * FROM satii WHERE id=' . $id);
			// Указываем, что хотим получить данные в виде массива
			$result->setFetchMode(PDO::FETCH_ASSOC);
		
		    // Получение и возврат результатов
			return $result->fetch();
		}
	
	}
	public static function getImage($id)
    {
        // Название изображения-пустышки
        $noImage = 'no-image.jpg';
        // Путь к папке с новостями
        $path = '/upload/images/news/';
        // Путь к изображению новости
        $pathToNewsImage = $path . $id . '.jpg';
        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToNewsImage)) {
            // Если изображение для новости существует
            // Возвращаем путь изображения новости
            return $pathToNewsImage;
        }
        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
    }
	public static function getNewsList()
	{
		 // Соединение с БД
        $db = Db::getConnection();
        // Получение и возврат результатов
        $result = $db->query('SELECT id, title, intro_text FROM satii ORDER BY id ASC');
        $newsList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['intro_text'] = $row['intro_text'];
            $i++;
        }
        return $newsList;
	}
		//Удаляет новость с указанным id
		public static function deleteNewsById($id)
	{
		 // Соединение с БД
		$db = Db::getConnection();
		 // Получение и возврат результатов. Используется подготовленный запрос
		$sql = 'DELETE FROM satii WHERE id = :id';
		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		return $result->execute();
	}
	public static function createNews($options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'INSERT INTO satii '
                . '(title, intro_text, text)'
                . 'VALUES '
                . '(:title, :intro_text, :text)';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':intro_text', $options['intro_text'], PDO::PARAM_STR);
        $result->bindParam(':text', $options['text'], PDO::PARAM_STR);
        
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
	
	}
	public static function updateNewsById($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = "UPDATE satii "
            . "SET 
                title = :title, 
                intro_text = :intro_text, 
                text = :text
                WHERE id = :id";
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':intro_text', $options['intro_text'], PDO::PARAM_STR);
        $result->bindParam(':text', $options['text'], PDO::PARAM_STR);
        return $result->execute();
    }
}