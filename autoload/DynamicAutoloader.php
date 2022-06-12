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


use PHPPlus\autload\Autoloadable;
use function file_exists;
use function serialize;
use function spl_autoload_register;
use function str_replace;
use const DIRECTORY_SEPARATOR;

final class DynamicAutoloader implements Autoloadable
{
    /** Autloader by Himmelkreis */
    /**
     * @var array $loadElements
     * @phpstan-var    array<string>
     */
    private array $loadElements = [];
    /**
     * @var string
     */
    public string $main;

    public function __construct()
    {

        $this->autoload();
    }

    public function load(string $namespace, string $path): void
    {

        $this->loadElements[$namespace] = rtrim($path, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
    }

    public function autoload(): void
    {
        spl_autoload_register(function (string $class): void {
            foreach ($this->loadElements as $namespace => $path)


                        if (file_exists(($target = str_replace('\\', '/', $path . str_replace($namespace, '', $class) . '.php'))))
                            require $target;



        });
    }
}