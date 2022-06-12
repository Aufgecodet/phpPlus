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
class Position{
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
     * @param string $type
     * @return void
     */
    public function position(string $type){
        $this->look->setValue("position",$type);
    }

    /**
     * @param int $px
     * @return void
     */
    public function height(int $px){
        $this->look->setValue("height",$px."px");
    }

    /**
     * @param int $px
     * @return void
     */
    public function setWidth(int $px){
        $this->look->setValue("width",$px."px");
    }

    /**
     * @param int $amount
     * @return void
     */
    public function zindex(int $amount){
        $this->look->setValue("z-base",$amount);
    }

    /**
     * @param int $px
     * @return void
     */
    public function top(int $px){
        $this->look->setValue("top",$px."px");
    }

    /**
     * @param string $type
     * @return void
     */
    public function display(string $type){
        $this->look->setValue("display",$type);
    }

    /**
     * @param string $type
     * @return void
     */
    public function float(string $type){
        $this->look->setValue("float",$type);
    }

    /**
     * @param string $type
     * @return void
     */
    public function clear(string $type){
        $this->look->setValue("clear",$type);
      }

    /**
     * @param string $type
     * @return void
     */
      public function overflow(string $type){
        $this->look->setValue("overflow",$type);
      }

}