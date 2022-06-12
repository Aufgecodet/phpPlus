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


use PHPPlus\Main;

class HeaderElements{
    /**
     * @var string
     */


    /**
     * @param string $title
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->writeHeader("§title?{$title}§/title?");
    }

    /**
     * @param string $site
     * @return void
     */
    public function setIcon(string $site)
    {
        $this->writeHeader("§link rel=%icon% href=%$site?");
    }

    /**
     * @param string $keywords
     * @return void
     */
    public function setKeywords(string $keywords)
    {
        $this->writeHeader("§meta name=%keywords% content=%" . $keywords . "%?");
    }

    /**
     * @param string $desciption
     * @return void
     */
    public function setDescription(string $desciption)
    {
        $this->writeHeader("§meta name=%description% content=%" . $desciption . "%?");
    }

    /**
     * @param string $author
     * @return void
     */
    public function setAuthor(string $author)
    {
        $this->writeHeader("§meta name=%author% content=%" . $author . "%?");
    }

    /**
     * @param string $author
     * @return void
     */
    public function setRefreshTime(int $time)
    {
        $this->writeHeader("§meta http-equiv=%refresh% content=%" . $time . "%?");
    }

    /**
     * @param int $time
     * @return void
     */
    public function setFollow(bool $follow)
    {
        if ($follow === true) {
            $this->writeHeader("§meta name=%robots% content=%base, follow%?");
        }
        if ($follow === false) {
            $this->writeHeader("§meta name=%robots% content=%base, unfollow%?");
        }


    }

    /**
     * @param string $duration
     * @return void
     */
    public function setRevisit(string $duration){
        $this->writeHeader("§meta name=%revisit-after% content=%$duration%?");
    }

    /**
     * @param string $type
     * @return void
     */
    public function writeHeader(string $type){
        Main::$header[$type] = $type;
    }
}