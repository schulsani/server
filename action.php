
<?php
$alarmfile = fopen("/var/www/html/data/alarm.txt", "w") or die("Unable to open file 1!");
fwrite($alarmfile, "on");
fclose($alarmfile);
 $path = 'data.txt';
 if (isset($_POST['field2'])) {
    $fh = fopen("/var/www/html/data/unfall.txt", "w") or die("Unable to open file! 2");
    $string = $_POST['field2'];
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
 }
   if (isset($_POST['field1'])) {
    $fh = fopen("/var/www/html/data/raum.txt", "w") or die("Unable to open file! 3");
    $string = $_POST['field1'];
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
 }
?>

<html>
   <head>
    <link rel="stylesheet" href="home.css">
    </text>Daten wurden gesendet </text>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
   </head>
<html>
