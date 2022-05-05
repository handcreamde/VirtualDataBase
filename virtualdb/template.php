<?php
$id = "Test";
$password = "Test";

switch (true) {
    case !isset($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']):
    case $_SERVER['PHP_AUTH_USER'] !== $id:
    case $_SERVER['PHP_AUTH_PW']   !== $password:
        header('WWW-Authenticate: Basic realm="Enter username and password."');
        header('Content-Type: text/plain; charset=utf-8');
        die('このページを見るにはログインが必要です');
}

header('Content-Type: text/html; charset=utf-8');

## Thank https://qiita.com/mpyw/items/dc2cb3632370389d700e

?>