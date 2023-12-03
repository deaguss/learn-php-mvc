<?php

$file = "../src/config/config.properties";

if (!file_exists($file)) {
    echo "Config file not found";
    exit();
}

$properties = parse_ini_file($file);

define('BASE_URL', $properties['base_url']);

define('DB_HOST', $properties['db_host']);
define('DB_USER', $properties['db_user']);
define('DB_PASS', $properties['db_pass']);
define('DB_NAME', $properties['db_name']);
define('DB_PORT', $properties['db_port']);
