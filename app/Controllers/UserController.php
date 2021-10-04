<?php


namespace App\Controllers;


use App\Models\User;

class UserController
{
  public function index():void
  {
      $input = new User('Mārtiņš');

      require_once 'app/View/user.template.php';
  }


}