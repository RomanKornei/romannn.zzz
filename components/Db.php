<?php
//Компонент для работы с базой данных
class Db
{
	//Устанавливает соединение с базой данных
	public static function getConnection()
	{
			// Получаем параметры подключения из файла
			$paramsPath = ROOT . '/config/db_params.php';
			$params = include($paramsPath);
			
			// Устанавливаем соединение
			
			$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
			$db = new PDO($dsn, $params['user'], $params['password']);
			
			return $db;
		
		
		
		
	}
	
	
	
	
	
	
}