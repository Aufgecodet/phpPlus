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

namespace phpplus\autoload;

/**
 * @internal
 */
interface Autoloadable
{

   /**
     * @param string $namespace
     * @param string $path
     *
     * @return void
     */
    public function load(string $namespace, string $path): void;

}