<?php
class ShopController {
	//Action для страницы Магазин
	public function actionIndex($page=1)
		{   // Список категорий
			$categories = array();
			$categories = Category::getCategoriesList();
			// Список товаров для слайдера
			$sliderProducts = Product::getRecommendedProducts();
			// Список последних товаров
			$latestProducts = array();
			$latestProducts = Product::getLatestProducts(6);
			// Подключаем вид
			require_once (ROOT . '/views/shop/index.php');
			return true;		
		}
    //Action для страницы просмотра товара	
	public function actionView($productId)
	{   // Список категорий
		$categories = array();
		$categories = Category::getCategoriesList();
		// Список товаров для слайдера
		$sliderProducts = Product::getRecommendedProducts();
		// Получаем инфомрацию о товаре
		$product = Product::getProductById($productId);
		// Подключаем вид
		require_once(ROOT . '/views/shop/view.php');
		return true;		
		
		
	}
	//Action для страницы Категорий
	public function actionCategory($categoryId, $page = 1)
	{
		// Список категорий
		$categories = array();
		$categories = Category::getCategoriesList();
		// Список товаров для слайдера
		$sliderProducts = Product::getRecommendedProducts();
		// Список товаров в категории
		$categoryProducts = array();
		$categoryProducts = Product::getProductsListByCategory($categoryId, $page);
		// Общее количетсво товаров (необходимо для постраничной навигации)
		$total = Product::getTotalProductsInCategory($categoryId);
		// Создаем объект Pagination - постраничная навигация
		$pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
		// Подключаем вид
		require_once(ROOT . '/views/shop/category.php');
		return true;
	}

}
	
	
?>