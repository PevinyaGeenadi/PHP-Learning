<?php
// Load the routes
$routes = require 'routes.php';

// Get the current URI
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Match the URI to a route
if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    // Handle 404
    echo "404 - Page Not Found";
}
