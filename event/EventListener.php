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
namespace phpplus\event;


use Couchbase\LookupInSpec;
use phpplus\Main;

 class EventListener {
    /**
     * @var Event
     */
   public Event $event;

    /**
     * @param Event $event
     */
    public function __construct(Event $event){
        $this->event = $event;
        $this->listen();
    }

     /**
      * @return void
      */
    public function listen():void{

        while (true){
            if(Main::$eventqueue !== $this->event){
                return;
            }
            Main::$eventqueue = null;
        }


    }
}