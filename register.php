<html>
<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="main.css">
 </head>    
<body>
    <form method="post">
        <table>
            <tr><td>Username:</td><td><input type="text" name="reg_uname" value="UserName" /></td></tr>
            <tr><td>Password:</td><td><input type="password" name="reg_password" value="Password" /></td></tr>
            <tr><td>
                <input type="submit" name="my_form_submit_button" value="Just Register"/>
            </td><td>

            </td></tr>
        </table>
    </form>

    <form method ="get" action="index.php">
        <input type="submit" value="Try to login" />
    </form>

    <?php
        include 'db_connection.php';
        if (isset($_POST['reg_uname'])) { //если запись в форме существует
            include 'db.php'; //подключаем файл
            createUser($_POST['reg_uname'],$_POST['reg_password']);
        }
        $query = "select * from users"; //выбираем все из пользователей
        $res = mysql_query($query); //переменная с запросом к БД
        while($dsatz = mysql_fetch_assoc($res)) //выводит ассоциативный массив
        {
            echo "<table>";
            echo "<tr>";
            echo "<td>" . $dsatz["id"] . "</td>" .
            "<td>" . $dsatz["username"] . "</td>" .
            "<td>" . $dsatz["passwordHash"] . "</td>";
            echo "</tr>";
            echo "</table>";
        }
    ?>


</body>
</html>
