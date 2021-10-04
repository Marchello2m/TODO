<?php
namespace App\Models;

use League\Csv\Reader;
use League\Csv\Statement;
use League\Csv\TabularDataReader;

class ToDoReader
{


    public Reader $csvReader;

    private $file;

    public function __construct($filename, $mode)

    {
        $this->csvReader = Reader::createFromPath('todo.csv', 'a+');
        $this->csvReader->setHeaderOffset(0);
        $this->csvReader->setDelimiter(';');
        $this->file = fopen($filename, $mode);
        return $this->file;

    }

    public function getRecords(): TabularDataReader
    {
        return Statement::create()->process($this->csvReader);
    }

    public function endFile()
    {
        return feof($this->file);
    }

    public function getCSV($mode)
    {
        return fgetcsv($this->file, $mode);
    }

    public function close()
    {
        fclose($this->file);
    }


}


