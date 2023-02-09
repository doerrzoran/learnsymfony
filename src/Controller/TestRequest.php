<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestRequest{

    public function testRequest(){
        $request = Request::createFromGlobals();
        $url = $request->getPathInfo();
        if($url === '/request'){
            return new Response('<h1>accueil</h1>');
        }
    }
}
    



