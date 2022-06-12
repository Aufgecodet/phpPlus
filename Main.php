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
namespace phpplus;


use phpplus\event\EventListener;
use phpplus\look\elements\Background;
use phpplus\functions\BaseFunction;
use phpplus\writer\Writer;
use phpplus\elements\HeaderElements;
use phpplus\header\Header;
use phpplus\autoload\DynamicAutoloader;
  abstract class Main
  {
      /** @var BaseFunction */
      public static $functions = [];

      /**
       * @var array
       */
      public static  $header = [];


      /** @var array */
      public static  $look = [];
      

      private function switchFunction()
      {

      }
    public function __construct(string $path){
            self::$path = $path;
          $this->index();
           $cmp = new Writer();
           $cmp->run(self::$path);
    }
      /**
       * @var DynamicAutoloader
       */
      public DynamicAutoloader $autoloader;


   public function makeFunction(string $name){

     $function = new  BaseFunction($name);
       return $function;

}

    public function index(){

     /** Content */





   }

      /**
       * @param Header $header
       * @return Header
       */
   public function registerHeader(Header $header){
      return $header;
   }
   /*+

   public function  registerFunction(BaseFunction $function){
       echo "\033[92m" . "Loading ".$function->name."...". "\033[39m" . PHP_EOL;

   }

      /**
       * @param EventListener $eventListener
       * @return EventListener
       */
   public function registerListener(EventListener $eventListener){
       return $eventListener;
   }



    /**
     * @param string $path
     * @return void
     */
    public static $path;
   public function setFinishPath(string $path){
    self::$path = $path;
   }

    public static $eventqueue = null;


}