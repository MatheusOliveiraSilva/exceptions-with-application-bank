<?php
class FileReading
{
    private $file;
    public function __construct($file) 
    {
        $this->file = $file;
    }

    public function openFile()
    {
        echo "Opening file";
    }

    public function readFile() {
        echo "Reading file";
    }

    public function writeFile() {
        echo "Writing file";
    }

    public function closeFile() {
        echo "Closing file";
    }

}