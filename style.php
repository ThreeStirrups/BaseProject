<?php

$directory = "scss";

require "vendors/php/scss.inc.php";
scss_server::serveFrom($directory);