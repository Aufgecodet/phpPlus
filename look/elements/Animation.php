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

class Animation{
    /**
     * @var Look
     */
    public Look $look;

    /**
     * @param Look $look
     */
    public function __construct(Look $look){
        $this->look =$look;
    }

    /**
     * @param int $seconds
     * @return void
     */
    public function duration(int $seconds){
        $this->look->setValue("animation-duration",$seconds."s");
    }

    /**
     * @param string $name
     * @return void
     */
    public function setName(string $name){
        $this->look->setValue("animation-name",$name);
    }






}