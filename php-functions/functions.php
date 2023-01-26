<?php

session_start();

if (isset($_SESSION['username'])){
    echo 'Benvenuto ' . $_SESSION['username'];
} else {
    header('Location: ./index.php');
}


function getRandomInt($min, $max){
    return random_int($min, $max);
}

?>