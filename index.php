<?php
define('LATEST_VER', '1.0.5');
define('BASE_VER', '1.0.0');

if (file_exists(LATEST_VER . ".php")) {
    if (is_dir(dirname(__FILE__) . "/" . LATEST_VER)) {
        define('LOADED_VER', LATEST_VER);
        require dirname(__FILE__) . "/" . LATEST_VER . ".php";
        
    } else {
        define('LOADED_VER', BASE_VER);
        require dirname(__FILE__) . "/" . BASE_VER . ".php";
    }
} else {
    define('LOADED_VER', BASE_VER);
    require dirname(__FILE__) . "/" . BASE_VER . ".php";
}
