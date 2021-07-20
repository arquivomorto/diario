<?php
//Criado por @hackergaucho
//v0.1.0 30mai2021 com suporte a ERROR
//v0.2.0 20jul2021 funcional

return function ($show_bool=true) {
    if ($show_bool) {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    } else {
        ini_set('display_errors', 0);
        ini_set('display_startup_errors', 0);
        error_reporting(0);
    }
};
