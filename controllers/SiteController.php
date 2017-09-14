<?php
class SiteController {
	//Action для главной страницы
	public function actionIndex()
	{   // Список последних новостей
		$latestNews = array();
		$latestNews = News::getLatestNews(6);
		// Список товаров для слайдера
		$sliderProducts = Product::getRecommendedProducts();
		// Подключаем вид
		require_once(ROOT . '/views/site/index.php');
		return true;		
		
		
	}
	//Action для страницы "Контакты"
	public function actionContact() {
		// Список товаров для слайдера
		$sliderProducts = Product::getRecommendedProducts();
		// Переменные для формы
		$userEmail = '';
		$userText = '';
		$result = false;
		// Обработка формы
		if (isset($_POST['submit'])) {
			// Если форма отправлена 
            // Получаем данные из формы
			$userEmail = $_POST['userEmail'];
			$userText = $_POST['userText'];
			// Флаг ошибок
			$errors = false;
			// Валидация полей
			if (!User::checkEmail($userEmail)) {
				$errors[] = 'Неправильный email';
			}
			// Если ошибок нет
           // Отправляем письмо администратору
			if ($errors == false) {
				$adminEmail = 'korneevroman94@gmail.com';
				$message = "Текст: {$userText}. От {$userEmail}";
				$subject = 'Тема письма';
				$result = mail($adminEmail, $subject, $message);
				$result = true;
			}
		}
		// Подключаем вид
		require_once(ROOT . '/views/site/contact.php');
		return true;
	
	}
	//Action для страницы "Реклама"
	public function actionAd() {
		// Список товаров для слайдера
		$sliderProducts = Product::getRecommendedProducts();
		// Подключаем вид
	require_once(ROOT . '/views/site/ad.php');
	return true;	
	}
	
}
