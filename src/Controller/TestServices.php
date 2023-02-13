<?php
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
// use App\Services\Test;

class TestServices{

    public function testServices(){
        $test = new Test('test');
        return new Response($test->doSomething('test'));
    }
}

