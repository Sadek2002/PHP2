<?php

if ($_POST['email'] == "piet@worldonline.nl") {

    if ($_POST['wachtwoord'] == "doetje123") {
        echo "Welkom";
    }
}

if ($_POST['email'] == "klaas@carpets.nl") {

    if ($_POST['wachtwoord'] == "snoepje777") {
        echo "Welkom";
    }
}

if ($_POST['email'] == "truushendriks@wegweg.nl") {

    if ($_POST['wachtwoord'] == "arkiearkie201") {
        echo "Welkom";
    }
}
else {
    echo "Sorry, geen toegang!";
}




