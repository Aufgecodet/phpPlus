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
namespace phpplus\writer;



use phpplus\console\Error;
use phpplus\Main;


class Writer
{
    /**
     * @var array
     */
    public function __construct()
    {
        $this->body = "";
        $this->header = "";
        $this->style = "";


    }

    /**
     * @return void
     */
    public function run(string $path): void
    {


        $this->generateNewFile();

        $countarr = [];
        /**
         * @var  $item
         * @var  $value
         */
        /**
         Generate the functions into HTML
         */
        foreach (Main::$functions as $item => $value) {
            if (isset($countarr[$item])) {
                unset(Main::$functions[$item]);
            }
            $countarr[$item] = $value;

            $this->body = $this->body . "§div class = %$item%?" . $value . "§/div?";
            if (isset($countarr[$item])) {
                unset(Main::$functions[$item]);
            }
        }
        /**
         *   Generate the Header Function
         */
        foreach (Main::$header as $item) {
            $this->header = $this->header . $item;
        }
         /**
          * @var  $item
          * @var  $value
          */
          /**
            Generate the CSS Funktions
           */
        foreach (Main::$look  as $item => $value ){
            list($name,$one,$two) = explode("!",$value);
            $this->style = $this->style.".".$name."{";
                $this->style = $this->style.$one." : $two;";

            $this->style = $this->style."}";
        }








              /** Write the code into the file */
              $d = $this->header;
              $e = $this->body;

                    $replaceheader = str_replace("op",$this->header,$this->content);
              $this->content = $replaceheader;
                  $replacebody = str_replace("realbody",$this->body,$this->content);



               $this->content = $replacebody;
               $replacestyle = str_replace("basicstyle",$this->style,$this->content);

               $this->content   = $replacestyle;
              $a = str_replace("§","<",$this->content);
              $b = str_replace("?",">",$a);
              $c = str_replace("%","'",$b);

          /** Put all into file */

          file_put_contents(Main::$path,$d);


      }

    /**
     * @var string
     */
      public string $style;


    /**
     * @var string
     */
      public string $content ;

    /**
     * @param string $type
     * @return array|string|string[]
     */
      public function replace(string $type){



              $a = str_replace("<", "§", $type);
              $b = str_replace(">", "?", $a);
              $c = str_replace("''", "%", $b);

              return $c;

      }
      public function  writeHeader(string $type){



          $a = $this->header;
          $this->header = $a.$type;

      }

    /**
     * @param string $type
     * @return void
     */
      public function writeBody(string $type){
          $a = $this->body;
          $this->body = $a.$type;
      }

    /**
     * @var null
     */
      public $header = null;
    /**
     * @var null
     */
      public $body = null;

    /**
     * @return void
     */
      public function generateNewFile(){
          /** Generate the basic code of a HTML File*/
          $this->content = "§!DOCTYPE html?§html lang=%en%?§head? <.2php use phpplus".DIRECTORY_SEPARATOR."event".DIRECTORY_SEPARATOR."basic".DIRECTORY_SEPARATOR."SiteLoadEvent; ²ev = new SiteLoadEvent(); ²ev->run();<.2 §style?basicstyle§/style?§meta charset=%UTF-8%? op §/head?§body?realbody§/body?§/html?";
      }

    /**
     * @var int
     */
     public int $line;



}