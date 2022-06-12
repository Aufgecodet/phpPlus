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

namespace phpplus\elements;


use phpplus\functions\BaseFunction;
use phpplus\console\Error;
use phpplus\Main;

class BaseElements{
    /**
     * @var BaseFunction
     */
	public BaseFunction $baseFunction;

    /**
     * @param BaseFunction $baseFunction
     */
    /**
     * @var  string
     */

    /**
     * @param BaseFunction $baseFunction
     * @param $type
     */
    public function __construct(BaseFunction  $baseFunction)
    {
        $this->baseFunction = $baseFunction;


    }

    /**
     * @param $value
     * @return array
     */
    public function setValue($item, $value)
    {



            $this->value = array($item => $value);

            Main::$functions[$this->baseFunction->name.":".$value] = $item;

    }

    /**
     * @return BaseFunction
     */
   public function getFunction():BaseFunction{
        return $this->baseFunction;
   }

   public  $value;
    public function getValue(){

      return $this->value;
    }

}