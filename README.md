# SimpleLoginFormPHP7

## Prerequisites
You need to have installed and properly configured PHP7 and MySQL ver. 5 on your machine.

## Idea
This is simple snippet code of some generic Login form in PHP7 using latest MySQL API. Old way of using PHP and MySQL is not possible in PHP7. (mysql_real_escape_string is depricated). You can see old code in 'process.php.old'

See this video, that was inspiration for this code snippet: https://www.youtube.com/watch?v=arqv2YVp_3E

Also check this links, that helped me out using MySQLi API:
- https://www.php.net/manual/en/mysqli.real-escape-string.php 
- https://www.w3schools.com/php/php_mysql_select.asp 
- https://phpdelusions.net/mysqli_examples/prepared_select

## Usage
Just import 'login.sql' in your MySQL using CLI or phpMyAdmin or HeidiSQL, MySQL Workbench or something similar for SQL connectivity and editing. In 'process.php' set this line accordingly to your MySQL settings. (parameters are: server name, mysql user, mysql password, database name)
```php
// connect to the server and select database
$mysqli = new mysqli("localhost", "root", "", "login");
```
Default username is 'testuser' and password is 'testuserpass'. Change it accordingly.

Further steps, firstly immidietly upgrade php code to encode and use hashed passwords in mysql. And store succefuly checked user login into $_SESSION.
