<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    /**
     * Function for authentication users
     *
     * @Route("/login", name="login")
     */
    public function login()
    {
        die('login');
    }
}
