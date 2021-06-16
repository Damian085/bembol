<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Restauracja</title>
    <link rel="stylesheet" href="restauracja.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
    <h1>Bembol restauration</h1>   
        <?php
            echo "<h2>Witaj ".$_SESSION['user'].'! [ <a href="logout.php" class="wyloguj">Wyloguj się </a>]</h2> ';
        ?>
    </div>
    <div class="all"><div class="container">
    
    
    <h1>Rezerwacja stolika</h1>
    <form action="checkrezerwacja.php" method="post">
    <div class="dane">
        
        <input type="text" name="imie" placeholder="Imię">
        <br>
        <br>
        <input type="text" name="nazwisko" placeholder="Nazwisko">
        <br>
        <br>
        <input type="date" name="data" >
        <br>
        <br>
        <input type="time" name="godzina" >
        <br>
        <br>
        <input type="number" name="numer" placeholder="Numer stolika">
    </div>
    <br><br>
    <div class="potwierdzenie">
    <input type="submit" value="Wyślij rezerwację">
    </div>
    </form>
    
    </div>
    </div>
    <div class="footer">
    <p>Copyright © 2021 Bembol.eu</p>
    </div>    
    
    
    
</body>
</html>



