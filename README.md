## Занятие №2
Базы данных и работы с API

## План урока:

Пишем все в ООП стиле
- [x] Инициализируем подключение к базе данных
- [x] Предусматриваем закрытие подключения к БД на деструктор класса
- [x] CREATE TABLES
- [x] INSERT INTO
- [x] SELECT * FROM
- [x] WHERE / LIKE / COUNT
- [x] JOIN / RIGHT JOIN / LEFT JOIN
- [x] Смотрим инструмент в phpStorm database
- [ ] Делаем запросы на API
- [ ] Сохраняем картинки

## Д/З  

#### Изучаем работу с API
- Научиться обращаться к API, API для примера используем (https://jsonplaceholder.typicode.com/guide.html)
- Спарсить posts (https://jsonplaceholder.typicode.com/posts)
- Спарсить users (https://jsonplaceholder.typicode.com/users)
- Сделать листинг постов (должен вывдиться также и автор)
- Изменить класс так, чтобы можно было выбирать вместе с `join`


#### Требования:

- ООП - стиль, парсер должен быть универсальным или почти универсальным
- Система DRY (Don't Repeat Yourself)

## Подсказки

#### Сложный запрос:
```sql
SELECT posts.*,
       users.username,
       users.email,
       regions.name as regionName
FROM posts
         JOIN users
             on posts.user_id = users.id
         JOIN regions
             on posts.region_id = regions.id;
```

#### JSON
JSON в php декодится через `json_decode()` вторым аргументом он принимает true чтобы получился массив  
Для простых запросов используем `file_get_contents('url')`