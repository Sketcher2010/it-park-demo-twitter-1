! Установка

1) Необходимые программы:
    1) PHP
    2) Composer
    3) Gitbash
2) Запустить gitbash  в папке где будет находиться проект
3) `composer create-project symfony/skeleton my-project`, где `my-project` - название проекта
    1) При необходимости: Изменить файл `php.ini` (Узнать где находится с помощью команды в консоли `php --ini`)
    2) Найти в файле `curl` и убрать в начале строки `;`
4) В консоли перейти в папку проекта с помощью команды `cd my-project`
5) Запуск проекта с помощью команды `php bin/console server:run`

Работа со страницами проекта:
1) Необходимо определить список глобальных блоков сайта (логика)
    1) Работа с пользователями
    2) работа с новостями
2) Создать необходимый контроллер: `php bin/console make:controller`
    1) Написать имя класса контроллера в формате `MyNewController`
        1) Каждое новое слово с большой буквы
        2) В конце слово `Controller`
3) В классе контроллера создать функции (action) для разных страниц
    ```
    /**
     * @Route("/hello", name="hello")
     */
    public function index()
    {
        return $this->render('hello/index.html.twig', [
            'controller_name' => 'HelloController',
        ]);
    }
    ```
    Где 
    1) `@Route("/hello", name="hello")` - настройки адреса страницы сайта
    2) `public function index()` - функция обработчик страницы
    

Методы передачи данных:
1) `GET` - Передает данные в отрытом виде в адресной строке в формате: `?name=value&name2=value2`
2) `POST` - Передает данные в закрытом виде (в теле запроса)

Как получить данные:
1) `$_GET["name"]` - Получить информацию о переменной с именем `name`
2) `$_POST["name"]`

Как отправить данные:
``` 
    <form action="" method="POST">
        <input type="text" name="title"><br>
        <textarea name="text" id="text" cols="30" rows="10"></textarea><br>
        <input type="submit">
    </form>
```

Работа с постиками - PostController
Работа с комментариями - CommentController
Работа с пользователями - UserController
Безопасноть - SecurityController -- Бдует сгенерирован автоматически!

/posts - страница всех постов
/post/create - создание
/post/{ID}

/comment/create

/
/login
/logout
/registr
/profile
/settings