<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class HelloController extends AbstractController
{

    private ComplexObject $complexObject;

    public function __construct (ComplexObject $complexObject)
    {
        $this->complexObject = $complexObject;
    }

    public function home()
    {
        return new Response($this->complexObject->doSomething());
    }

}
