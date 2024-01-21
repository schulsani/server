
<html>
<?php
if($_POST['pw'] == "Geheim") {
} else {
   echo '<p>Passwort ist falsch. Sie werden in 2 Sekunden zurÃ¼ck geleitet.</p>';
   header("Refresh: 2; url=index.html");
   exit();
   
   
}
$verificationCode = "your ultimate Code"
?>
</html>
<html>
   <head>
    <title>Schulsani</title>
    <link rel="stylesheet" href="home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
   </head>
   <body>
      <form action="http://schulsani.local:1880/data"  method="post">
        Raum(max.Zeichen 20)<br>
        <input type="text" maxlength="20" name="raum"><br>
        Unfall(max.Zeichen 18)<br>
        <input type="text" maxlength="18" name="unfall"><br>
        <input type="hidden" name="alarm" value="on">
        <input type="hidden" name="code" value="<?php echo $verificationCode; ?>">
         <input type="submit" value="Submit">
      </form>
   </body>
  </html>

