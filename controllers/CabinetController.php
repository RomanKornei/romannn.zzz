<?php
//Кабинет пользователя
class CabinetController {
	//Action для страницы "Кабинет"
	public function actionIndex()
	{	// Получаем идентификатор пользователя из сессии
		$userId = User::checkLogged();
		// Получаем информацию о пользователе из БД
		$user = User::getUserById($userId);
		// Список товаров для слайдера
		$sliderProducts = Product::getRecommendedProducts();
		// Подключаем вид
		require_once (ROOT . '/views/cabinet/index.php');
		return true;
	}
//Action для страницы "Редактирование данных пользователя"
public function actionEdit()
	{  
	    // Список товаров для слайдера
		$sliderProducts = Product::getRecommendedProducts();
	     // Получаем идентификатор пользователя из сессии
		$userId = User::checkLogged();
		// Получаем информацию о пользователе из БД
		$user = User::getUserById($userId);
		// Заполняем переменные для полей формы
		$name = $user['name'];
		$password = $user['password'];
		// Флаг результата
		$result = false;
			// Обработка формы
			if (isset($_POST['submit'])) {
			// Если форма отправлена
            // Получаем данные из формы редактирования
				$name = $_POST['name'];
				$password = $_POST['password'];
			// Флаг ошибок
				$errors = false;
				// Валидируем значения
				if(!User::checkName($name)) {
					$errors[] = 'Имя не должно быть короче 2-х символов';
				}
				
								
				if(!User::checkPassword($password)) {
					$errors[] = 'Пароль не должен быть короче 6-ти символов';
				}
				
			    // Если ошибок нет, сохраняет изменения профиля		
				if ($errors == false) {
					$result = User::edit($userId, $name, $password);
				}
			
			
			}
			
		
		
		// Подключаем вид
		require_once(ROOT . '/views/cabinet/edit.php');
		return true;
		
			
	}	
	
	
	
	
	
	
	
	
}
?>