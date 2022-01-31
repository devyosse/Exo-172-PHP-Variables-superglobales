<?php

session_start();

foreach ($_COOKIE as $cookieName => $value) {
    if ($cookieName === "login" || $cookieName === "password") {
    }
    echo $cookieName . ": " . $value . "<br>";
}