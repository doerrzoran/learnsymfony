<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;


class TestLink{
    public function link(){
        return new Response($post['exemple'] = 3);
        // Récupération des valeurs accessibles dans les super variables
        $request = Request::createFromGlobals();
            
        // Récupérer l'url
        $request->getPathInfo();
            
        // récupérer des attributs en GET ou POST
        $request->query->post('exemple');
    }
}