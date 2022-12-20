<?php

function connectToDB()
{
    return new PDO(
        'mysql:host=devkinsta_db;dbname=Simple_Store',
        'root',
        'r9wz9RSYYaTbjS7v'
    );
}

function isloggedIn()
{
    // if the user is logged in, it will return true
    // if the user is not logged in, it will return false
    return isset( $_SESSION['user'] );
}

function logout()
{
    unset( $_SESSION['user'] );
}

?>