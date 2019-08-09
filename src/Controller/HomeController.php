<?php

namespace App\Controller;

// Permet d'instancier la class Response;
use Symfony\Component\HttpFoundation\Response;

// Permet d'utiliser la méthod Route qui se trouve dans l'annotation;
use Symfony\Component\Routing\Annotation\Route;

// Permet D'étendre Controller a la class HomeController afin d'utiliser la méthode render();
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    /**
    * @Route("/hello/{prenom}", name="hello")
    */

    public function hello($prenom = "anonyme") {
        
        return new Response("bonjour " . $prenom);
    }

    /**
     * @Route("/", name="homepage")
     */

    public function home() {

        //return new Response("hello");

        $prenoms = [
            "Liors" => 52, "Maxime" => 24, "thomas" => 24, "Véronique" => 53
        ];

        return $this->render('home.html.twig', [
            'title' => 'Mon titre',
            'age' => 17,
            'prenoms' => $prenoms,
        ]);
    }

}