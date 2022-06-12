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

class Box {
    /**
     * @var Look
     */
    public Look $look;

    public function __construct(Look $look){
        $this->look = $look;
    }

    /**
     * @param string $style
     * @return void
     */
    public function style(string $style):void{
        $this->look->setValue("border-style",$style);
    }

    /**
     * @param string $width
     * @return void
     */
    public function width(string $width){
        $this->look->setValue("border-width",$width);
    }

    /**
     * @param string $color
     * @return void
     */
    public function color(string $color){
        $this->look->setValue("border-color",$color);
    }

    /**
     * @param int $px
     * @return void
     */
    public function marginButtom(int $px){
        $this->look->setValue("margin-buttom","{$px}px");
    }

    /**
     * @param int $px
     * @return void
     */
    public function marginLeft(int $px){
        $this->look->setValue("margin-left",$px."px");
    }

    /**
     * @param int $px
     * @return void
     */
    public function paddingtop(int $px){
        $this->look->setValue("padding-top",$px."px");
    }

    /**
     * @param int $amount
     * @return void
     */
    public function margin(string $amount){
        $this->look->setValue("margin",$amount);
    }

    /**
     * @param int $amount
     * @return void
     */
    public function padding(string $amount){
        $this->look->setValue("padding",$amount);
    }

    public function bshadow($item){
        $this->look->setValue("bshadow",$item);
    }


}