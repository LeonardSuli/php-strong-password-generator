<?php

// Descrizione
// Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. 
// L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

// Milestone 1
// Creare un form che invii in GET la lunghezza della password. 
// Una nostra funzione utilizzerà questo dato per generare una password casuale 
// (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. 
// Scriviamo tutto (logica e layout) in un unico file index.php

// Milestone 2
// Verificato il corretto funzionamento del nostro codice, 
// spostiamo la logica in un file functions.php che includeremo poi nella pagina principale


// var_dump($_GET['password']);

$lunghezza = ($_GET['lunghezza']);
$caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*';

$password = '';

while (strlen($password) < $lunghezza) {
    $numero = rand(0, strlen($caratteri) - 1);
    $c = $caratteri[$numero];
    $password .= $c;
}

var_dump($password);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
</head>

<body>

    <form action="" method="get">

        <label for="lunghezza">Lunghezza password</label>
        <input type="text" name="lunghezza">

        <button type="submit">Genera password</button>

    </form>

</body>

</html>