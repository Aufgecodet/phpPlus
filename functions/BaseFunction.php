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
namespace phpplus\functions;


use phpplus\writer\Writer;
use phpplus\look\Look;
use phpplus\look\Structure;
use phpplus\Main;
use phpplus\elements\BaseElements;
class BaseFunction{
	
	/**
	 * @var string
	 */
	public string $name;
	 public function index():void{

     }

     public function getLook():Look{
         return  new Look($this);
     }/**
 * @param $item
 * @param $value
 * @return void
 */
    public function setValue(string $tpye)
    {
        $a = Main::$functions[$this->name];
        $b = $a." ".$tpye." ";
        Main::$functions[$this->name] = $b;


    }
   public $value = [];
    /**
     * @return mixed|void
     */

	public function __construct($name){
		  $this->name = $name;
		 $name = $this->name;
         $this->function = $this;
	     if(empty(Main::$functions[$name])){
			 
			Main::$functions[$name] = null;
			 
			 
			 
	     }

         $this->index();

	
		 
	}

    /**
     * @var BaseFunction
     */
    public BaseFunction $function;
	
	/**
	 * @var int|bool
	 */
	public int $id  = 0;
	
	/**
	 * @return bool|int|mixed
	 *
	 */
	private function getId(){
		return $this->id;
	}

    /**
     * @param string $name
     * @return void
     */
    public function importFunction(string $name)
    {
       Main::$functions[$this->name] = Main::$functions[$this->name] .Main::$functions[$name];
       Main::$look[$this->name] = Main::$look[$this->name].Main::$look[$name];
     }



    /**
     * @return Structure
     */
    public function getStructure():Structure{
        return  new Structure($this);
    }
	/**
	 * @return int
	 */


    /**
     * @return Look
     */


	/**
	 * @return array
	 */

	
}