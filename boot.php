<?php
/**The phpPlus project is a PHP library originally designed to allow you to
 * to design static websites with PHP. But it also has many other functions
 * and is constantly being developed
 *
 * This libary is currently in BETA, so please feel free to report bugs,
 * to report under our Discord (https://discord.gg/zjFpVGzXxM).
 *
 * 2022 - Aufgecodet
 *
 */
namespace phpplus;
use phpplus\autoload\DynamicAutoloader;
use phpplus\console\Error;
use phpplus\Main;
   /** Check if this file is already loaded */
  if(defined("LOADED") === false) {
      echo "
 *   _____    _    _   _____    _____    _        _    _    _____
|  __ \  | |  | | |  __ \  |  __ \  | |      | |  | |  / ____|
| |__) | | |__| | | |__) | | |__) | | |      | |  | | | (___
|  ___/  |  __  | |  ___/  |  ___/  | |      | |  | |  \___ \
| |      | |  | | | |      | |      | |____  | |__| |  ____) |
|_|      |_|  |_| |_|      |_|      |______|  \____/  |_____/

VERSION 0.1 by Aufgecodet
 ";

      echo "\033[93m" . "This libary is currently in BETA,feel free to report bugs at our Discord => https://discord.gg/zjFpVGzXxM" . "\033[39m" . PHP_EOL;
      define('SRC_PATH', __DIR__ . DIRECTORY_SEPARATOR);
      define('DATA_PATH', realpath(getcwd()) . DIRECTORY_SEPARATOR);
      define("LOADED", "TRUE");
      /** Autoloader */

      echo "\033[92m" . "Activate Autloader..." . "\033[39m" . PHP_EOL;
      require SRC_PATH . 'autoload\Autoloadable.php';
      require SRC_PATH . 'autoload\DynamicAutoloader.php';
      $autoloader = new DynamicAutoloader();
      $autoloader->load('phpplus\\', SRC_PATH);
      $autoloader->load('', DATA_PATH);
      $autoloader->autoload();

      $main = new base(__DIR__.DIRECTORY_SEPARATOR."index.html");



      echo "\033[92m" . "Loading Files..." . "\033[39m" . PHP_EOL;




      echo "\033[92m" . "Finished" . "\033[39m" . PHP_EOL;


  }