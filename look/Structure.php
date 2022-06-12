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


use phpplus\functions\BaseFunction;

class Structure{
    /**
     * @var BaseFunction
     */
    public BaseFunction $function;

    /**
     * @param BaseFunction $function
     */
    public function __construct(BaseFunction $function){
        $this->function = $function;
    }



    /**
     * @param string $id
     * @param string $type
     * @return void
     */
    public function addInputTextInput(string $id, string $type)
    {
        $this->function->setValue("§form?");
        if ($type == "text") {
            $this->function->setValue("§input type=%{$type} name=%$id%?");
        }
        if ($type == "submit") {
            $this->function->setValue("§input type=%{$type} value=%$id%?");
        } else {
            $this->function->setValue("§input type=%{$type} name=%$id%?");
        }
        $this->function->setValue("§/form?");
    }

    /**
     * @param string $type
     * @param int $type
     * @return void
     */
    public function addThickText(string $type)
    {
        $this->function->setValue("§h" . $type . "? " . $type . "§/h$type?");
    }

    /**
     * @return void
     */
    public function addPlaceholder()
    {
        $this->function->setValue("§p?");
    }

    /**
     * @param string $text
     * @param string $description
     * @return void
     */
    public function setDescription(string $text, string $description)
    {
        $this->function->setValue("§p title=%" . $description . "%" . "?" . $description . "§/p?");
    }

    /**
     * @param $target
     * @return void
     */
    public function addLink($text,$src)
    {
        $this->function->setValue("§a href=%$src%? $text §/a?");
    }

    /***
     * @param string $source
     * @param $width
     * @param $high
     * @param $alt
     * @return void
     */
    public function addImage(string $source, $width, $high, $alt)
    {
        $this->function->setValue("§img src=%$source%" . " alt=%$alt% width=%$width% high=%$high%");
    }

    /**
     * @return void
     */

    public function addLine()
    {
        $this->function->setValue("§hr?");
    }

    /**
     * @param string $text
     * @return void
     */
    public function writeStrong(string $text)
    {
        $this->function->setValue("§strong?" . $text . "§/strong?");
    }

    /**
     * @param string $text
     * @return void
     */
    public function writeCusive(string $text)
    {
        $this->function->setValue("§i?" . $text . "§/i?");
    }

    /**
     * @param string $text
     * @return void
     */
    public function writeSmall(string $text)
    {
        $this->function->setValue("§small?" . $text . "§/small?");
    }

    /**3
     * @param string $text
     * @return void
     */
    public function mark(string $text)
    {
        $this->function->setValue("§mark?" . $text . "§/mark?");
    }

    /**
     * @param string $text
     * @return void
     */
    public function crossOut(string $text)
    {
        $this->function->setValue("§del?" . $text . "§/del?");
    }


    /**
     * @param string $text
     * @return void
     */
    public function underline(string $text)
    {
        $this->function->setValue("§ins?" . $text . "§/ins?");
    }

    /**
     * @param string $text
     * @return void
     */
    public function sub(string $text)
    {
        $this->function->setValue("§sub?" . $text . "§/sub?");
    }

    /**
     * @param string $text
     * @return void
     */
    public function sup(string $text)
    {
        $this->function->setValue("§sup?" . $text . "§/sup?");
    }

    /**
     * @param string $text
     * @return void
     */
    public function quote(string $text, string $from)
    {
        $this->function->setValue("§blockquote site=%" . $from . "% ?" . $text . "§/blockquote?");
    }

    /**
     * @param string $code
     * @return void
     */
    public function code(string $code)
    {
        $this->function->setValue("§code? " . $code . "§/code?");
    }

    /**
     * @param int $boder
     * @param array $arr
     * @return void
     */
    public function createTable(int $boder, array $arr)
    {
        $this->function->setValue("§table border= %{$boder}%?");

        foreach ($arr as $item) {
            $this->function->setValue("§tr?");
            foreach ($arr as $value) {
                $this->function->setValue("§td?" . $value . "§/td?");
            }
            $this->function->setValue("§/tr?");
        }
        $this->function->setValue("§/table?");
    }

    /**
     * @param array $content
     * @return void
     */
    public function createList(array $content)
    {
        $this->function->setValue("§ul?");
        foreach ($content as $item) {
            $this->function->setValue("§li?" . $item . "§/li?");
        }
        $this->function->setValue("§/ul?");
    }

    /**
     * @param array $content
     * @return void
     */
    public function createOrderList(array $content)
    {
        $this->function->setValue("§ol?");
        foreach ($content as $item) {
            $this->function->setValue("§li?" . $item . "§/li?");
        }
        $this->function->setValue("§/ol?");
    }

    /**
     * @param string $source
     * @param string $type
     * @param int $width
     * @param string $contols
     * @param string $autoplay
     * @return void
     */
    public function playVideo(string $source,string $type,int $width,string $contols = "on",string $autoplay = "on"){
        $this->function->setValue("§video width?%$width% controls=%$contols% autoplay= %$autoplay%?");
        $this->function->setValue("§source src=%$source% type= %$type%");
        $this->function->setValue("§/video?");

    }

    /**
     * @param string $source
     * @param string $type
     * @param string $autoplay
     * @param string $controls
     * @return void
     */
    public function playAudio(string $source,string $type,string $autoplay = "on",string $controls = "on"){
        $this->function->setValue("§audio autoplay=%$autoplay% controls= %$controls%?");
        $this->function->setValue("§source src=%$source% type=%$type%?");
        $this->function->setValue("§/audio?");
    }
    /**
     * @param string $source
     * @return void
     */
    public function createIframe(string $source)
    {
        $this->function->setValue("§iframe src=%" . $source . "?");
        $this->function->setValue("§/iframe?");
    }

    /**
     * @param string $object
     * @param string $description
     * @return void
     */
    public function createDescriptionList(string $object, string $description)
    {
        $this->function->setValue("§dl?");
        $this->function->setValue("§dt?" . $object . "§/dt?");
        $this->function->setValue("§dd?" . $description . "§/dd?");
        $this->function->setValue("§/dl?");

    }

    /**
     * @param string $content
     * @return void
     */
    public function writeOther(string $content)
    {
        $this->function->setValue($content);
    }
}