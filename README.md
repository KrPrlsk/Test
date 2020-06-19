# Test
1. Клонируем репозиторий: git clone https://github.com/KrPrlsk/Test.git

2. Подключение к серверу по ключу: ssh root@95.217.14.90 -i ~/.ssh/приват_ключ

3. Установка Стек LAMP: (https://www.digitalocean.com/community/tutorials/linux-apache-mysql-php-lamp-ubuntu-18-04-ru)

3.1 Установка Apache и настройка файрвола (используя менеджер пакетов Ubuntu apt):
$ sudo apt update
$ sudo apt install apache2
$ sudo ufw app list (настройка файрвола для разрешения веб-трафика)
$ sudo ufw app info "Apache Full" (проверим настройку профиля)
$ sudo ufw allow in "Apache Full" (разрешим входящий HTTP и HTTPS трафик для профиля)
http://95.217.14.90 (проверяем результат установки).

3.2 Установка MySQL: 
$ sudo apt update
$ sudo apt install mysql-server
$ sudo mysql_secure_installation + (выбрать сложность пароля)
mysql> GRANT ALL PRIVILEGES ON *.* TO 'kera'@'localhost' WITH GRANT OPTION; (задаtv для пользователя подходящий набор привилегий)
Создаем БД:
mysql -u root -p -h localhost
CREATE USER 'somename'@'localhost' IDENTIFIED BY 'some_pass';
CREATE DATABASE someBD;
GRANT ALL PRIVILEGES ON someBD.* TO 'somename'@'localhost';
quit;
mysql -u somename -p -h localhost
USE someBD;
CREATE TABLE [IF NOT EXISTS] name_of_table (list_of_table_columns) [engine=database_engine]

3.3 Установка PHP: 
$ sudo apt install php libapache2-mod-php php-mysql
$ sudo nano /etc/apache2/mods-enabled/dir.conf (открываем файл чтобы поставить index.php на первое место)
$ sudo systemctl restart apache2 (перезапускаем apache)
$ sudo nano /var/www/html/info.php (проверка: открываем файл чтобы добавить php код <?php phpinfo(); ?>)
http://95.217.14.90/info.php (проверка)

Дополнение: nano/etc/apache2/sites-available/000-default.conf (изменяем /var/www -> /var/www/Test)
$ sudo systemctl restart apache2 (перезапускаем apache)


