<?php

// Zdefiniuj dane odbiorcy
$adres = "info@beyondit.pl";
$tytul = "Wiadomość ze strony";

// Pobierz dane z formularza
$imie = $_POST['name'];
$email = $_POST['email'];
$wiadomosc = $_POST['message'];

// Utwórz treść wiadomości
$tresc = "Wiadomość od: $imie ($email)\n\n$wiadomosc";

// Wyślij wiadomość
mail($adres, $tytul, $tresc);

?>