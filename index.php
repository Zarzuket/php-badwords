<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php

    $testo = "I have a problem that I cannot explain I have no reason why it should have been so plain Have no questions but I sure have excuse I lack the reason why I should be so confused I know, how I feel when I'm around you I don't know, how I feel when I'm around you Around you";
    $censured_word = $_GET["word"];
    $replaced_word = "xxx";
    $new_testo = str_replace($censured_word, $replaced_word, $testo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Questo è il testo: <br> <?php echo $testo?></è>
    <p>Il testo è lungo: <?php echo strlen($testo) ?> parole</p>
    <h5 style="font-size: 20px;">La parola censurata è: <span style="color: red;"> <?php echo $censured_word ?></span></h5>
    <p>Il testo modificato è: <br> <?php echo str_replace($censured_word,$replaced_word,$testo) ?></p>
    <p>Il testo ora è lungo: <?php echo strlen($new_testo) ?></p>
</body>
</html>