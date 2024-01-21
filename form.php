
<html>
<?php
if($_POST['pw'] == "Geheim") {
} else {
   echo '<p>Passwort ist falsch. Sie werden in 2 Sekunden zurück geleitet.</p>';
   header("Refresh: 2; url=index.html");
   exit();
   
   
}
$cookie_name = "password";
$cookie_value = $_POST['pw'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
</html>
<html>
   <head>
    <title>Schulsani</title>
    <link rel="stylesheet" href="home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
   </head>
   <body>
      <form action="insert.php?alarm=on"  method="post">
        Raum(max.Zeichen 15)<br>
        <input type="text" maxlength="15" name="field1"><br>
        Unfall(max.Zeichen 13)<br>
        <input type="text" maxlength="13" name="field2"><br>
        <input type="hidden" name="alarm" value="on">
         <input type="submit" value="Submit">
      </form>
   </body>
  </html>
