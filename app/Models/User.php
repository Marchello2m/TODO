<?php
namespace App\Models;
class User
{
    private $input;

    public function __construct($input)
  {
      $this->input = $input;
  }

    public function getInput()
    {
        return $this->input;
    }

    public function setInput($input): void
    {
        $this->input = $input;
    }


}
