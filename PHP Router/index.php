<?php

require 'functions.php';

$uri= $_SERVER['REQUEST_URI'];

if ($uri=='/') {

require 'controllers/index.php';

}