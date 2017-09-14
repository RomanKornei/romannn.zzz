<?php

return array(
    // Магазин:
    'shop/([0-9]+)' => 'shop/view/$1', // actionView в ShopController
    'shop' => 'shop/index', // actionIndex в ShopController
    // Категория товаров:
    'category/([0-9]+)/page-([0-9]+)' => 'shop/category/$1/$2', // actionCategory в ShopController   
    'category/([0-9]+)' => 'shop/category/$1', // actionCategory в ShopController
    // Корзина:
    'cart/checkout' => 'cart/checkout', // actionAdd в CartController    
    'cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete в CartController    
    'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController    
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // actionAddAjax в CartController
    'cart' => 'cart/index', // actionIndex в CartController
    // Пользователь:
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
    // Управление товарами:    
    'admin/product/create' => 'adminProduct/create',
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'admin/product' => 'adminProduct/index',
    // Управление категориями:    
    'admin/category/create' => 'adminCategory/create',
    'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
    'admin/category' => 'adminCategory/index',
    // Управление заказами:    
    'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
    'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
    'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
    'admin/order' => 'adminOrder/index',
	//Управление новостями:
	'admin/news/create' => 'adminNews/create',
	'admin/news/update/([0-9]+)' => 'adminNews/update/$1',
	'admin/news/delete/([0-9]+)' => 'adminNews/delete/$1',
	'admin/news' => 'adminNews/index',
    // Админпанель:
    'admin' => 'admin/index',
    // Новости:
	'news/page-([0-9]+)' => 'news/index/$1',
	'news/([0-9]+)' => 'news/view/$1',
	'news' => 'news/index',
	//Прочее:
    'contacts' => 'site/contact',
    'ad' => 'site/ad',
	'about' => 'site/about',
    // Главная страница
    'index.php' => 'site/index', // actionIndex в SiteController
    '' => 'site/index', // actionIndex в SiteController
);