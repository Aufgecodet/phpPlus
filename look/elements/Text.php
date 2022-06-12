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

class Text{
    /**
     * @var Look
     */
    public Look $look;

    public function __construct(Look $look)
    {
        $this->look = $look;
    }

    /**
     * @param string $type
     * @return void
     */
    public function align(string $type){
        $this->look->setValue("text-align",$type);

    } public function  setColor(string $color){
    $this->look->setValue("color",$color);
}

    /**
     * @param string $type
     * @return void
     */
    public function decoration(string $type){
        $this->look->setValue("text-decoration",$type);

    }

    /**
     * @param int $px
     * @return void
     */
    public function indent(int $px){
        $this->look->setValue("text-indent","{$px}px");
    }

    /**
     * @param string $type
     * @return void
     */
    public function transform(string $type){
        $this->look->setValue("text-transform",$type);
    }

    /**
     * @param int $px
     * @return void
     */
    public function lspace(int $px){
        $this->look->setValue("letter-spacing",$px."px");
    }

    /**
     * @param int $px
     * @return void
     */
    public function lheight(int $px){
        $this->look->setValue("line-height",$px."px");
    }

    public function direction(string $type){
        $this->look->setValue("directtion",$type);
    }

    /**
     * @param string $font
     * @return void
     */
    public function font(string $font){
        $this->look->setValue("font-family","'$font'");
    }

    /**
     * @param int $px
     * @return void
     */
    public function fsize(int $px){
        $this->look->setValue("font-size","{$px}px");
    }

    /**
     * @param string $type
     * @return void
     */
    public function fstyle(string $type){
        $this->look->setValue("font-style",$type);
    }

    /**
     * @param string $type
     * @return void
     */
    public function fvariant(string $type){
        $this->look->setValue("font-variant",$type);
    }

    /**
     * @param $item
     * @return void
     */
   public function tshadow($item){
        $this->look->setValue("text-shadow",$item);
   }




}