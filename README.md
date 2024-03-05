## bitrix1c_start

### Перед установкой битрикс проверить и установить значения при необходимости в php.ini:
* временой зоны: [Date]
  ; Defines the default timezone used by the date functions
  ; https://php.net/date.timezone
  date.timezone = "Europe/Moscow"
* short_open_tag = On
*  short_open_tag
   Default Value: On
   Development Value: On
 ; Production Value: Off
* opcache.revalidate_freq=0
* ; How many GET/POST/COOKIE input variables may be accepted
  max_input_vars = 10000
* session.use_strict_mode = 0
* В моем случае это конфиг файл ini находится по пути--->/etc/php/8.2/apache2/php.ini

### Установка демоверсии
* https://www.1c-bitrix.ru/download/cms.php#tab-subsection-3

##### Материалы и помощь:
* https://dev.1c-bitrix.ru/learning/course/index.php?COURSE_ID=95&INDEX=Y
* При возникновении различных проблем и ошибок может помочь обращение в форумы:
  https://dev.1c-bitrix.ru/community/forums/forum32/topic149070/?PAGEN_1=9
### Описание курса-проекта
1. Введение 
2. Легкое начало 
3. Установка системы 
4. Интеграция верстки 
5. Редактируемые области 
6. Базовая настройка системы 
7. Компоненты и структура сайта 
8. Страница 404 
9. Информационные блоки 
10. Слайдер 
11. Форма обратной связи 
12. Комплексный компонент 
13. Новости 
14. Каталог 
15. Поиск 
16. Кеширование 
17. Продвинутый уровень. Работа с API. 
18. .parameters.php, result_modifier.php 
19. component_epilog.php 
20. События 
21. Собственный компонент 
22. Финальные штрихи - оптимизируем загрузку сайта
23. Современные технологии 
24. Инструменты

### Установка LAMP ---> на Linux (Ubuntu 22.04), вебсервер Apache2, MySQL и PHP. Предварительные условия
* LAMP на Ubuntu можно установить на версии 22.04. Рекомендуется иметь зарегистрированное доменное имя для настройки виртуального хоста, связанного с публичным IP-адресом или эластичным IP-адресом вашего экземпляра.

### Шаг 1. Установка HTTP-сервера Apache

* Установка LAMP предусмотрена репозиториями Ubuntu 22.04 по умолчанию.
1. sudo apt update 
2. sudo apt install apache2 -y 
3. sudo systemctl status apache2 
4. sudo systemctl enable --now apache2

* Ubuntu 22.04 поставляется с установленным брандмауэром. Разрешите трафик Apache вручную:
1. sudo ufw allow 80 
2. sudo ufw allow 443 
3. sudo ufw status

### Шаг 2. Настройка базы данных MySQL
* Установка MariaDB аналогична установке MySQL на Ubuntu 22.04.
1. sudo apt install mariadb-server -y
2. sudo mysql_secure_installation

* Следуйте инструкциям скрипта для обеспечения безопасности MariaDB.
### Шаг 3. Установка PHP и расширений PHP
* Установка PHP и необходимых расширений:
1. sudo apt install php php-mysql libapache2-mod-php -y
2. sudo systemctl restart apache2

### Шаг 4. Настройка виртуального хоста
* Настройка файла виртуального хоста для вашего домена (не забудьте заменить "linuxtechgeek.info" на ваше собственное доменное имя):
  sudo mkdir /var/www/html/linuxtechgeek.info
1. sudo chown www-data:www-data -R /var/www/html/linuxtechgeek.info
2. sudo chmod 775 -R /var/www/html/linuxtechgeek.info
* Создайте тестовую HTML-страницу и файл конфигурации виртуального хоста:
sudo nano /etc/apache2/sites-available/linuxtechgeek.info.conf
* Добавьте следующий конфигурационный блок, заменив "linuxtechgeek.info" на ваше собственное доменное имя:
* <VirtualHost *:80>
  ServerAdmin webmaster@linuxtechgeek.info
  ServerName linuxtechgeek.info
  DocumentRoot /var/www/html/linuxtechgeek.info

  ErrorLog ${APACHE_LOG_DIR}/error.log
  CustomLog ${APACHE_LOG_DIR}/access.log combined
  </VirtualHost>
* Сохраните и закройте файл. Затем включите виртуальный хост и перезапустите Apache:
1. sudo a2ensite linuxtechgeek.info.conf
2. sudo systemctl restart apache2
* Теперь ваш виртуальный хост настроен. Убедитесь, что ваше доменное имя зарегистрировано и указывает на IP-адрес вашего сервера. Вы сможете увидеть тестовую HTML-страницу, введя ваш домен в браузере.

### DOCKER- Install Linux, Nginx, MySQL, PHP (LEMP stack)
1. https://github.com/07Rinat07/lemp-docker
2. https://github.com/07Rinat07/Docker-PHP-MYSQL-NGINX-PHPMYADMIN
* скачать с моего репозитория на гитхаб сборку lemp и развернуть вебокружение

### Запуск с использованием встроенного в php веб-сервера IDE PhpStorm
* Для запуска в PhpStorm укажите следующие параметры в конфигурации запускаемого приложения:
* для пользователей Линукс Убунту этот вариант самый удобный.
  -d
  short_open_tag=on
  -d
  display_errors=on
  -d
  mbstring.internal_encoding=utf-8
  -d
  opcache.revalidate_freq=0
  -d
  memory_limit=128M
  -d
  max_input_vars=10000
  -d
  date.timezone="Europe/Moscow"
  -d
  sendmail_path="/usr/sbin/sendmail -t -i -f noreply@noserver.ru"
  Если вы не используете PhpStorm, то выполните подобную такую команду просто из консоли

/bin/php8.0 -c /bin/php8.0 -S bitrix.local:8081 -t /home/dev/Documents/mydomains/bitrix -d short_open_tag=on -d display_errors=on -d mbstring.internal_encoding=utf-8 -d opcache.revalidate_freq=0 -d memory_limit=128M -d max_input_vars=10000 -d date.timezone=Europe/Moscow -d "sendmail_path=/usr/sbin/sendmail -t -i -f noreply@noserver.ru"
* Я использую в уроках доменное имя  bitrix и порт 8081 вы можете выбрать другие значение. Но в любом случае их нужно указать в файле hosts

* Добавьте туда подобную строку, тем самым вы подскажете вашему компьютеру, что все запросы к этому доменному имени нужно перебрасывать на адрес локального компьютера, а не искать где-то в вебе:

* 127.0.0.1    bitrix

### Дополнительная информация по установки битрикса удаленно
#### Установка «1С-Битрикс: Управление сайтом» на удаленный сервер возможна посредством загрузки дистрибутива по протоколу FTP или с помощью скрипта BitrixSetup.
* https://dev.1c-bitrix.ru/learning/course/index.php?COURSE_ID=32&LESSON_ID=4891

### Решение проблем с ошибками после установки битрикс и проверки на ошибки:
* Ошибка! innodb_strict_mode=ON, требуется OFF
* Частая ошибка в режиме работы MySQL на сайтах под управлением 1С-Битрикс. В модуле main версии 19.0.400 добавилась новая проверка innodb_strict_mode. Параметр innodb_strict_mode задаёт режим работы MySQL.
* Решение проблемы с innodb_strict_mode
* Открываем в левом меню админа битрикса (или в редакторе PhpStorm откр этот файлик) "Контент" => "Структура сайта" => "Файлы и папки".
  Переходим в директорию: /bitrix/php_interface/
  Открываем файл: after_connect_d7.php в режиме редактирования PHP кода.
  Вставляем строку: $connection->queryExecute("SET innodb_strict_mode=0");
  Сохраняем

0. Полный конфиг файла after_connect_d7.php --->
1. $this->queryExecute("SET NAMES 'utf8'");
2. $this->queryExecute("SET sql_mode=''");
3. $this->queryExecute('SET collation_connection = "utf8_unicode_ci"');
4. $this->queryExecute("SET innodb_strict_mode=0"); // пофиксил
5. $this->Query("SET LOCAL time_zone='".date('P')."'");   // пофиксил

* Второй вариант
  Если первый вариант не помог, значит необходимо внести правку в настройках MySQL. Для 1С-Bitrix окружения в файле /etc/mysql/conf.d/z_bx_custom.cnf добавить innodb_strict_mode = OFF
1. [mysqld]
   innodb_strict_mode = OFF
2. service mysqld restart  (в терминале набрать команду для перезапуска Mysql)
