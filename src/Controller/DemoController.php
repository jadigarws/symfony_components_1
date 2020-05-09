<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends AbstractController
{
    /**
     * @Route("/demo", name="demo")
     */
    public function index()
    {
        $script = '<script> alert("Hola, soy un excitante cuadro de alerta")</script>';
        return $this->render('demo/index.html.twig', [
            'controller_name' => 'DemoController',
            'script'=> $script
        ]);
    }
}
