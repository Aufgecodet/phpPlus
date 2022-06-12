<?php

/**The phpPlus project is a PHP library originally designed to allow you to
 * to design static websites with PHP. But it also has many other functions
 * and is constantly being developed
 *
 * This libary is currently in BETA, so please feel free to report bugs,
 * to report under our Discord (discord.phpplus.net).
 *
 * 2022 - Upcoded
 *
 */
namespace phpplus\look\elements;


use phpplus\look\Look;

class Border{
    /**
     * @var Look
     */
    public Look $look;

    /**
     * @param Look $look
     */
    public function __construct(Look $look){
      $this->look = $look;
    }

    /**
     * @param int $px
     * @return void
     */
    public function radius(int $px){
        $this->look->setValue("border-radius","{$px}px");
    }

    /**
     * @param string $style
     * @return void
     */
    public function style(string $style){
        $this->look->setValue("border-style",$style);
    }
}