<?php

if (session_status() == PHP_SESSION_NONE){
    session_start();
}

var_dump(session_status());

// $_SESSION['foo'] = 'bar';

session_write_close();

// $_SESSION['foo'] = 'bar';

// var_dump($_SESSION);