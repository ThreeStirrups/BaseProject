<?php

/*
 * This is the sets up the scss compiler for the three stirrups theme
 */

$directory = "scss";

require "vendor/php/scss.inc.php";
scss_server::serveFrom($directory);
