Реализованная функциональность
Авторизация;
Заполнение анкеты студента;

Особенность проекта в следующем:
Киллерфича-1;
Киллерфича-2;
Киллерфича-3;

Основной стек технологий:
HTML, CSS, 
PHP 7, MySQL.
Демо
Демо сервиса доступно по адресу: http://demo.test

Реквизиты тестового пользователя: login: ivan123, пароль: test-password

СРЕДА ЗАПУСКА
развертывание сервиса производится на debian-like linux (debian 9+);
требуется установленный web-сервер с поддержкой PHP(версия 7.4+) интерпретации (apache, nginx);
требуется установленная СУБД MySQL (версия 5.7+);
требуется установленный пакет name1 для работы с...;
УСТАНОВКА
Установка пакета name
Выполните

sudo apt-get update
sudo apt-get upgrade
sudo apt-get install name1
sudo apt-get install mariadb-client mariadb-server
git clone https://github.com/Sinclear/default_readme
cd default_readme
...
База данных
Необходимо создать пустую базу данных, а подключение к базе прописать в конфигурационный файл сервиса по адресу: папка_сервиса/...

sudo systemctl restart mariadb
sudo mysql_secure_installation
mysql -u root -p
mypassword
CREATE DATABASE mynewdb;
quit
Выполнение миграций
Для заполнения базы данных системной информацией выполните в корневой папке сервиса:

mysql -u root -p -f mynewdb < папка_сервиса/...
mypassword
и согласитесь с запросом

Установка зависимостей проекта
Установка зависимостей осуществляется с помощью Composer. Если у вас его нет вы можете установить его по инструкции на getcomposer.org.

После этого выполнить команду в директории проекта:

composer install
РАЗРАБОТЧИКИ

Филонова Марьяна fullstack 
Пятницын Станислав fullstack
