 <?php
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];



$router = [
    "/" => 'controllers/home.php',
    "/about" => 'controllers/about.php',
    "/job-portal" => 'controllers/job-portal.php',
    "/job-details" => "controllers/job-details.php",
    "/gallery" => "controllers/gallery.php",
];

if(array_key_exists($uri, $router)) {
    require $router[$uri];
}else {
    http_response_code(404);
    require 'controllers/404.php';
}
?>