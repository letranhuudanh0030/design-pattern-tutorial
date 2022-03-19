<?php
require_once "Base/Subject.php";

class VideoData extends Subject
{
    private string $_title;
    private string $_description;
    private string $_fileName;

    public function __construct()
    {
        $this->_title = "";
        $this->_description = "";
        $this->_fileName = "";
    }

    public function fire()
    {
        $this->notify($this);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->_title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->_title = $title;
//        $this->fire();
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->_description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->_description = $description;
//        $this->fire();
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->_fileName;
    }

    /**
     * @param string $fileName
     */
    public function setFileName(string $fileName): void
    {
        $this->_fileName = $fileName;
//        $this->fire();
    }
}