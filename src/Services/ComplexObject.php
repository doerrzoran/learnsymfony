<?php
// src/Services/ComplexObject.php
namespace App\Services;

class ComplexObject
{
    public string $foo;
    
    public function __construct(string $foo){
        $this->foo = $foo;
    }

    public function doSomething($foo) {
        return $foo;
    }
}