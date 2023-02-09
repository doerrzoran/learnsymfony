<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;


class TestLink{
    public function link(){
        return new Response($post['exemple'] = 4);
        // Récupération des valeurs accessibles dans les super variables
        $request = Request::createFromGlobals();
            
            
        // récupérer des attributs en GET ou POST
        $request->query->post('exemple');
    }
}