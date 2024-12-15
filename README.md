# Тестовое задание (защита от повторного запуска)

**Описание задачи:**
Написать любой скрипт, который будет выполняться 5 секунд.
Вшить в этот скрипт защиту от повторного запуска, если он еще не отработал.
Использовать Redis. Не использовать фреймворки, написать на чистом php.

### Реализация

#### main.php:

Выполняю скрипт ``docker exec -t we_rent_first_php php main.php``.  
В нем устанавливаю максимальное время выполнения скрипта.
Устанавливаю TTL с помощью параметра [‘ex’] для ключа, чтобы он удалился спустя 5 секунд и можно было запустить программу в случае ошибки.

### Комментарии и оценка задачи:

Сложность оцениваю как 1-2.  
Временные затраты около часа.