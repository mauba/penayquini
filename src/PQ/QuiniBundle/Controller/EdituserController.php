<?php

namespace PQ\QuiniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;

class EdituserController extends Controller {

    public function edituserAction(Request $request) {

        $session = $request->getSession();

        return $this->render('PQQuiniBundle:Edituser:Edituser.html.twig',
            array ('last_username' => $session->get(SecurityContext::LAST_USERNAME))
        );
    }

}
