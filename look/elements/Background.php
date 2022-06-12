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
class Background{
    /**
     * @var Look
     */
    public Look $look;
    public function __construct(Look $look){
        $this->look = $look;
    }

    public function  setColor(string $color){
        $this->look->setValue("background-color",$color);
    }

    /**
     * @param string $src
     * @return void
     */
    public function  setImage(string $src){
        $this->look->setValue("background-image","url('$src')");
    }

    /**
     * @param string $xory
     * @return void
     */
    public function setRepeat(string $type){
        $this->look->setValue("background-repeat",$type);
    }

    /**
     * @param string $type
     * @return void
     */
    public function setPosition(string $type){
        $this->look->setValue("background-position",$type);
    } /**
 * @param string $type
 * @return void
 */
    public function setAttachment(string $type){
        $this->look->setValue("background-attachment",$type);
    }

    /**
     * @param int $amount
     * @return void
     */
    public function opacity(int $amount){
        $this->look->setValue("opacity",$amount);
    }
}