<?php
namespace App\Models;

class Delete
{

    function deleteLineInFile($file,$string)
    {
        $i=0;$array=array();

        $read = fopen('todo.csv', "r") or die("can't open the file");
        while(!feof($read)) {
            $array[$i] = fgets($read);
            ++$i;
        }
        fclose($read);

        $write = fopen('todo.csv', "w") or die("can't open the file");
        foreach($array as $a) {
            if(!strstr($a,$string)) fwrite($write,$a);
        }
        fclose($write);
    }


}



