<?php
    include 'db_connection.php';
    include 'db.php';

    $my_username=$_POST['reg_uname'];
    $my_password=$_POST['reg_password'];
    isUserValid($my_username,$my_password);

?>