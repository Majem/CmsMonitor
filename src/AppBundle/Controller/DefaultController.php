<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/home.html.twig');
    }

    /**
     * @Route("/about-us", name="about_us")
     */
    public function aboutAction(Request $request) {
        return $this->render('default/about_us.html.twig');
    }

    /**
     * @Route("/pricing", name="pricing")
     */
    public function pricingAction(Request $request) {
        return $this->render('default/pricing.html.twig');
    }
}
