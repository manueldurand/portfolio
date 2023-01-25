<?php
$page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_STRING);
if (!isset($page)) {
    $page = 'accueil';
}
include 'common/template.php';
