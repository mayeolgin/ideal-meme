$dir = "/var/www/html";
$files = scandir($dir);
foreach ($files as $file) {
  if ($file !== "." && $file !== "..") {
    echo $file . "\n";
  }
}
