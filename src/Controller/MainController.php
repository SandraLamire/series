<?php

namespace App\Controller;

use JetBrains\PhpStorm\NoReturn;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    // Attribut symfony en php8 :
    // /home (nom du controller) pointe vers
    // url à partir de public, ici : http://localhost/bucket-list/public/home
    // et appelle la fonction main_home
    #[Route('/home', name: 'main_home')]
    public function home(): Response
    {
        //arrêt de l'exécution du programme et affichage du message
        // ex : die("Hello World !"); affiche hello world sur la page
        // http://localhost/series/public/home

        return $this->render('main/home.html.twig');
    }

    // Annotations : commentaires interprétés avant php8
    /**
     * @Route("/test", name="main_test")
     */
    public function test(): Response
    {
        return $this->render('main/test.html.twig');
    }
}