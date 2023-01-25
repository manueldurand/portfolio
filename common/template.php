<?php
include '<common/head.php';
include 'common/header-nav.php';

switch($page){
    case $page == 'accueil':
        include 'content/accueil_content.php';
        break;
    case $page == 'realisations':
        include 'content/realisations_content.php';
        break;
    case $page == 'cv':
        include 'content/cv_content.php';
        break;
    case $page == 'veilles':
        include 'content/veilles_content.php';
        break;
    default:
        header('Location:content/404.html');
        die();
        break;

}
include 'common/footer.php' ;
