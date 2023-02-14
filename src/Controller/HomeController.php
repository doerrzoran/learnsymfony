<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Services\MyName;

class HomeController extends AbstractController
{
    
    #[Route('/home', name: 'accueil')]
    public function home()
    {
        return new Response(" Bienvenue sur la page d'accueil ! ");
    }

    
    #[Route('/article/{articleId<\d+>}', name: 'show-article')]
    public function show($articleId = 1)
    {
        // Nous retrouvons la valeur de la variable $articleId à partir de l'URI
        // Par exemple /article/1234 => $articleId = '1234'

        return new Response(" Voici le contenu de l'article avec l'ID $articleId ");
    }

    #[Route('/my/name', name: 'my-name')]
    public function myName(MyName $myName)
    {
        return new Response($myName->myName());
    }

    #[Route('/link', name: 'link')]
    public function link()
    {
        return new Response('<a href="/page">cliquer ici</a>');
    }

    #[Route('/page', name: 'page')]
    public function page()
    {
        return new Response('hello');
    }

    #[Route('/form', name: 'form')]
    public function form()
    {
        return new Response('<form action="/message" method="POST"><input type="text" name="message"><button type="submit">cliquer ici</button></form>');
    }
    #[Route('/message', name: 'message')]
    public function message()
    {
        return new Response($_POST["message"]);
    }
}
