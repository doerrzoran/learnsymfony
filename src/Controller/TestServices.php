<?php
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Services\ComplexObject;

class TestServices{

    public function testServices(){
        $test = new ComplexObject('test');
        return new Response($test->doSomething('test'));
    }
}

