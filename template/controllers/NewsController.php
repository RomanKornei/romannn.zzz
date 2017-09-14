<?php
include_once ROOT . '/models/News.php';
class NewsController {
	    //Action для ИИ новости
		public function actionIndex($page=1)
	{   // Список последних новостей
		$latestNews = array();
		$latestNews = News::getLatestNews(News::SHOW_BY_DEFAULT, $page);
		
		// Список товаров для слайдера
		$sliderProducts = Product::getRecommendedProducts();
		// Общее количетсво новостей (необходимо для постраничной навигации)
		$total = News::getTotalNews();
		// Создаем объект Pagination - постраничная навигация
		$pagination = new Pagination($total, $page, News::SHOW_BY_DEFAULT, 'page-');
		// Подключаем вид
		require_once(ROOT . '/views/news/index.php');
		return true;		
		
		
	}
	 //Action для страницы просмотра новости
	public function actionView($newsId)
	{
		// Получаем инфомрацию о новости
		$news = News::getNewsById($newsId);
		// Список товаров для слайдера
		$sliderProducts = Product::getRecommendedProducts();
		// Подключаем вид
		require_once(ROOT . '/views/news/view.php');
		return true;		
		
		
	}
	
	
	
	
}
?>
