<?php
session_start();

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'ka';
}

if (isset($_GET['lang']) && in_array($_GET['lang'], ['ka', 'en'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

require_once 'lang.' . $_SESSION['lang'] . '.php';