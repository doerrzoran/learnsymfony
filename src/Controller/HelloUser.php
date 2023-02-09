<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloUser{
    public function helloUser(){
        return new Response('<h1>Zoran</h1>');
    }
}