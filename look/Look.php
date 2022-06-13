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
namespace phpplus\look;


use phpplus\look\elements\Text;
use phpplus\functions\BaseFunction;
use phpplus\elements\BaseElements;
use phpplus\look\elements\Animation;
use phpplus\look\elements\Border;
use phpplus\look\elements\Box;
use phpplus\Main;
use phpplus\look\elements\Position;
use phpplus\look\elements\Background;
class Look{
    /**
     * @param BaseFunction $baseFunction
     */
    public function __construct(BaseFunction $baseFunction){
        $this->function = $baseFunction;

    }

    /**
     * @var BaseFunction
     */
     public BaseFunction $function;

    /**
     * @param string $item
     * @param string $value
     * @return void
     */
      public function setValue(string $item,string $value){
          Main::$look[$this->function->name."!".$item."!".$value] =$this->function->name."!".$item."!".$value ;
      }



    public function background():Background{
          return new Background($this);
    }

    /**
     * @return Box
     */
    public function box():Box{
          return new Box($this);
    }

    /**
     * @return Text
     */
    public function text():Text{
        return  new Text($this);
    }

    /**
     * @return Position
     */
    public function position():Position{
        return new Position($this);
    }

    /**
     * @return Border
     */
    public function border():Border{
        return new Border($this);
    }

    /**
     * @return Animation
     *
     */
    public function animation():Animation{
        return  new Animation($this);

    }








}