<!DOCTYPE html>
<html>
<head>
    <title>Schulsani</title>
    <link rel="stylesheet" href="home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>
    <?php
    if($_POST['pw'] == "Geheim") {
    } else {
       echo '<p>Passwort ist falsch. Sie werden in 2 Sekunden zurück geleitet.</p>';
       header("Refresh: 2; url=index.html");
       exit();
    }

    session_start();
    
    // Generate a random verification code and store it in the session
    $verificationCode = md5(uniqid(rand(), true));
    $_SESSION['verification_code'] = $verificationCode;
    ?>

    <form action="validate.php" method="post">
        Raum (max.Zeichen 20)<br>
        <input type="text" maxlength="20" name="raum"><br>
        Unfall (max.Zeichen 18)<br>
        <input type="text" maxlength="18" name="unfall"><br>

        <input type="hidden" name="verification_code" value="<?php echo $verificationCode; ?>">
        <input type="hidden" name="alarm" value="1">

        <input type="submit" value="Submit">
    </form>
</body>
</html>
