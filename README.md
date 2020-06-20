# Test
--------------------------------------------------РУКОВОДСТВО ПО УСТАНОВКЕ------------------------------------------------------

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

-----------------------------------------------РУКОВОДСТВО ПО ИСПОЛЬЗОВАНИЮ-----------------------------------------------------

О сайте: todo list + регистрация\авторизация

1. Index.php: Оказавшись на начальной странице index.php вы можете авторизоваться на сайте заполнив поля с вашим логином (Username) и паролем (Password), а также нажав кнопку "Login". Если вы успешно авторизовались, то вас перенесет на страницу list.php. Есл вы еще не зарегистрированный пользователь, то на странице index.php есть кнопка "Register", нажав на которую вас перенесет на страницу register.php для регистрации. Если вы ввели неправильный логин и пароль или попытались зайти не имея аккаунта, то вам выведет ошибку "Неправильный логин или пароль".

2. Register.php: Страница для регистрации. Для того чтобы зарегистрироваться вам следует заполнить поля Username и Password, а также нажать кнопку "Just Register". После регистрации вам высветится сообщение "Регистрация прошла успешно" вас перенесет на страницу index.php для авторизации. Если у вас уже есть аккаунт и вы хотите в него войте, вам нужно нажать кнопку "Try to login", и тогда вас перенесет а страницу index.php для авторизации.

3. List.php: На этой странице вы окажетесь только после успешной авторизации. На ней находится сам todo list. Вы можете добавлять задачи в ваш список, написав их в поле Discription и нажав на кнопку "Add". Также вы можете удалять выполненные задачи, выделив нужную задачу и нажав кнопку "Delete".




