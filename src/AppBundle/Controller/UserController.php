<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends Controller
{
    /**
     * @Route("/profile", name="profile")
     */
    public function profileAction(Request $request) {
        return $this->render('default/pricing.html.twig');
    }

    /**
     * @Route("/my-sites", name="my_sites")
     */
    public function mySistesList(Request $request) {
        return $this->render('default/pricing.html.twig');
    }
}
