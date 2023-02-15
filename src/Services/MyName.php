<?php
namespace App\Services;

class MyName{
    private string $myName;

    public function __construct(string $myName){
        $this->myName = $myName;
    }
    public function myName(): string{
        return "<h1>".$this->myName."</h1>";
    }
}

