<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Website;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends Controller
{
    /**
     * @Route("/profile", name="profile")
     */
    public function profileAction(Request $request) {
        // get entity manager
        $em = $this->getDoctrine()->getEntityManager();

        $user_repository = $this->getDoctrine()->getRepository('AppBundle:User');

        $user = $user_repository->findOneBy(array('id' => '1'));

        $wb = $user->getWebsites();
        $em->flush();

        return $this->render('user/profile.html.twig',
            [
                'user' => $user,
                'websites' =>$wb
            ]);
    }

    /**
     * @Route("/my-sites", name="my_sites")
     */
    public function mySistesList(Request $request) {
        return $this->render('default/pricing.html.twig');
    }
}
