<?php
class AdminNewsController extends AdminBase
{      // Action для страницы "Управление новостями"
		public function actionIndex()
	{   // Проверка доступа
		self::checkAdmin();
		// Получаем список новостей
		$newsList = News::getNewsList();
		// Подключаем вид
		require_once(ROOT . '/views/admin_news/index.php');
		return true;
	}
	//Action для страницы "Удалить новость"
	public function actionDelete($id)
	{    // Проверка доступа
		self::checkAdmin();
		// Обработка формы
		if (isset($_POST['submit'])) {
			// Если форма отправлена
            // Удаляем новость
			News::deleteNewsById($id);
			// Перенаправляем пользователя на страницу управления новостями
			header("Location: /admin/news");
		}
		// Подключаем вид
		require_once(ROOT . '/views/admin_news/delete.php');
		return true;
	}
	    public function actionCreate()
    {
        // Проверка доступа
        self::checkAdmin();
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['title'] = $_POST['title'];
            $options['intro_text'] = $_POST['intro_text'];
            $options['text'] = $_POST['text'];
            // Флаг ошибок в форме
            $errors = false;
            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['title']) || empty($options['title'])) {
                $errors[] = 'Заполните поля';
            }
            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новость
                $id = News::createNews($options);
                // Если запись добавлена
                if ($id) {
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/news/{$id}.jpg");
                    }
                };
                // Перенаправляем пользователя на страницу управления новостями
                header("Location: /admin/news");
            }
        }
        // Подключаем вид
        require_once(ROOT . '/views/admin_news/create.php');
        return true;
    }
	 public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();
        
        // Получаем данные о конкретной новости
        $news = News::getNewsById($id);
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $options['title'] = $_POST['title'];
            $options['intro_text'] = $_POST['intro_text'];
            $options['text'] = $_POST['text'];
            // Сохраняем изменения
            if (News::updateNewsById($id, $options)) {
                // Если запись сохранена
                // Проверим, загружалось ли через форму изображение
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                    // Если загружалось, переместим его в нужную папке, дадим новое имя
                   move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/news/{$id}.jpg");
                }
            }
            // Перенаправляем пользователя на страницу управления новостями
            header("Location: /admin/news");
        }
        // Подключаем вид
        require_once(ROOT . '/views/admin_news/update.php');
        return true;
	}
}