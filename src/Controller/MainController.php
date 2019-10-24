<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * Main redirect function
     * Checks if user is authenticated and then redirect him to app
     * or if he is not redirect him to login page
     *
     * @Route("/", name="homepage")
     */
    public function start()
    {
        if ($this->getUser()) {
            die('Zalogowany');
        } else {
            die('Niezalogowany');
        }
    }
}
