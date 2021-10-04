<?php


namespace App\Controllers;


use App\Models\ToDoReader;

class ToDoController
{
    public function index2():void
    {
        $input = new ToDoReader('todo.csv', 'a+');

        require_once 'app/View/output_user.template.php';
    }


}