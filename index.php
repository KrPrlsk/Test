 <html>
  <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8"
     <link rel="stylesheet" href="main.css">
 </head>
 <body>
     <form method="post" action="checklogin.php">
         <table>
             <tr><td>Username:</td><td><input type="text" name="reg_uname" value="" /></td></tr>
             <tr><td>Password:</td><td><input type="password" name="reg_password" value="" /></td></tr>
         </table>
         <input type="submit" name="my_form_submit_button" value="Login"/>
     </form>

     <form method ="link" action="register.php">
         <input type="submit" value="Register"/>
     </form>

 </body>
 </html>
