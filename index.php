<?php


if(isset($_GET['p'])){
    $page = $_GET['page'];

    switch ($page) {
        case 'main': require 'main.php'; break;
        case 'about': require 'about.php'; break;
    }
}
else{
    require "main.php";
}