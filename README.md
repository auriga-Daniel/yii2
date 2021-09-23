## Как запустить проект 

1. В файле `../config/db.php` прописать логин и пароль для подключения к локальной БД
2. Создать БД `yii2basic`
3. В консоле прописать
   1. `php yii serve`
   2. `php yii migrate`
   
Будет запущен сервер по адресу http://localhost:8080/

Роуты  
**GET** - /tasks - показать все задачи  

**POST** - /tasks - создать новую задачу  
```yaml
{
  "title" - название - строка до 255 символов
  "description" - описание - текст
  "active" - boolean - true - если задача активная, false - если нет (по умолчанию true)
}
```

**GET** - /tasks/ID - показать конкретную задачу 

**PUT**, **PATCH**  - /tasks/ID - обновить данные задачи  

**DELETE**  - /tasks/ID - удалить задачу

