
<html>
<?php
if($_POST['pw'] == "Geheim") {
} else {
   die("Falsches Passwort!");
   header("Location: index.html"); die;
}
?>
</html>
<html>
   <head>
    <title>Schulsani</title>
    <link rel="stylesheet" href="home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
   </head>
   <body>
      <form action="action.php" method="post">
        Raum(max.Zeichen 15)<br>
        <input type="text" maxlength="15" name="field1"><br>
        Unfall(max.Zeichen 13)<br>
        <input type="text" maxlength="13" name="field2"><br>
         <input type="submit" value="Submit">
      </form>
   </body>
  </html>
