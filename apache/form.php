<!DOCTYPE html>
<html lang="de">
<head>
    <title>Schulsani</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 20px; /* Added margin for separation from logos */
        }

    header {
      background-color: #ffffff;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header img#logo2 {
      max-width: 200px;
      height: auto;
      margin-right: 20px;
      margin-left: 10px;
    }

    header img#logo1 {
      max-width: 50px;
      height: auto;
      margin-left: 20px;
      margin-right: 10px;

    }

        label {
            display: block;
            margin-top: 10px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            border: none;
            padding: 15px;
            font-size: 16px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
  <header>
    <img id="logo1" src="jf_logo.png" alt="Logo 1">
    <img id="logo2" src="ohg_logo.png" alt="Logo 2">
  </header>

    <?php
    if ($_POST['pw'] == "Geheim") {
    } else {
        echo '<p>Passwort ist falsch. Sie werden in 2 Sekunden zur&uuml;ck geleitet.</p>';
        header("Refresh: 2; url=index.html");
        exit();
    }

    session_start();

    // Generate a random verification code and store it in the session
    $verificationCode = md5(uniqid(rand(), true));
    $_SESSION['verification_code'] = $verificationCode;
    ?>

    <form action="http://schulsani.local:1880/data" method="post">
        <label for="type">Art der Helfer:</label>
        <select id="type" name="type">
            <option>Schulsanit&auml;ter</option>
            <option>Ersthelfer</option>
        </select>

        <label for="raum">Raum (max.Zeichen 20):</label>
        <input type="text" id="raum" maxlength="20" name="raum">

        <label for="unfall">Unfall (max.Zeichen 18):</label>
        <input type="text" id="unfall" maxlength="18" name="unfall">

        <input type="hidden" name="verification_code" value="<?php echo $verificationCode; ?>">
        <input type="hidden" name="alarm" value="1">

        <input type="submit" value="Submit">
    </form>
</body>
</html>
