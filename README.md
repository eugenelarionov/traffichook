## Разработчик

@elarinov - программист, Евгений. Собрал приложение, разработал веб-часть решения.

## Разработчик

Киллер фичи: 
- Распространение доступа к бесплатному вай-фай
- Формирование алгоритмами вспомогательной информации для регулирования движения

Реализованные функции: 1) вход в систему; 2) получение статистики; 3) вывод информации о пробках; 4) возможность просмотра прогнозов данных; 5) Просмотр информации о светофорах;

## Информация
 
Решение предлагает с помощью приложения раздающего вай-фай отслеживать местоположения масс людей и автолюбителей. В репозитории две папки: одна с мобильным WebView приложением, вторая с веб-частью платформы реализующей работу приложения на сервере.

Для деплоя часть серверного приложения, необходимо положить содержимое папки в корневую директорию. После выполнить команду:

`composer install && php artisan key:generate && php artisan migrate:fresh --seed`

Для компиляции и запуска приложения необходимо открыть его в Android Studio и скомпилировать.
