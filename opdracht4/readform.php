<?php
 $voornaam = $_POST['voornaam'];
 $achternaam = $_POST['achternaam'];
 $leeftijd = $_POST['leeftijd'];
 $woonplaats = $_POST['woonplaats'];
 $favoritecolors = $_POST['favoritecolors'];
 echo 'Hallo ' . $voornaam . ' ' . $achternaam .', leuk dat je er bent.' . "<br>";
 echo 'Ik zie dat je ' . $leeftijd . ' jaar oud bent.' . "<br>";
 if ($woonplaats == 'Amsterdam') {
     echo 'Ik zie dat je in ' . $woonplaats . ' woont. Ik woon daar ook.' . "<br>";
}
else {
    echo 'Wat leuk dat je in ' . $woonplaats . ' woont!' . "<br>";
}

switch ($favoritecolors) {
    case "red":
        echo "Your favorite color is red! the color of blood!";
        break;
    case "blue":
        echo "Your favorite color is blue! i like blue too!";
        break;
    case "green":
        echo "Your favorite color is green! i hate green!";
        break;
    case "yellow":
        echo "Your favorite color is yellow! like the sun";
        break;
    case "brown":
        echo "Your favorite color is brown! mmmmmm chocolate has the same color!";
        break;
    default:
        echo "Your favorite color is " . $favoritecolors . '! but i dont like it!';
}