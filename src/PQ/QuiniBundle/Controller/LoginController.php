<?php

namespace PQ\QuiniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use PQ\QuiniBundle\Form\Type\LoginType;

class LoginController extends Controller {
	
	public function loginAction(Request $request) {
		 
		$session = $request->getSession();
		$login = new LoginType();
		$form = $this->createForm(new LoginType(), $login);
		
		if($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)){
			$error = $request->attributes->get(
				SecurityContext::AUTHENTICATION_ERROR
			);
		}else {
			$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
			$session->remove(SecurityContext::AUTHENTICATION_ERROR);
		}
		
		return $this->render('PQQuiniBundle:Login:login.html.twig',
			array ('last_username' => $session->get(SecurityContext::LAST_USERNAME),
					'error' => $error,
					'form' => $form->createView ())	
		);
	}
	
}
