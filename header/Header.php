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

namespace phpplus\header;


use phpplus\elements\HeaderElements;
use phpplus\Main;

class Header
{
    /**
     * @param string $title
     * @return void
     */

    public Header $header;
    public function index():void{

    }
    public function __construct()
    {

        $this->index();
    }

    /**
     * @return HeaderElements
     */
    public function elements(): HeaderElements
    {
        return new HeaderElements();
    }


}