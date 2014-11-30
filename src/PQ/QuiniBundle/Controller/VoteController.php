<?php

namespace PQ\QuiniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use PQ\QuiniBundle\Entity\PtqPartitQuiniela;
use PQ\QuiniBundle\Form\Type\VotacioType;
use PQ\QuiniBundle\Entity\Votacio;

class VoteController extends Controller
{

    public function voteAction(Request $request)
    {

        $session = $request->getSession();
		$votacio = new Votacio();
        $form = $this->createForm(new VotacioType(), $votacio, array(
			'action' => $this->generateUrl('vote'),
        ));
        
        $form->handleRequest($request);
        
        if ($form->isValid()) {
        	// perform some action...
        	$form->getData();
        	
        	$this->get('session')->getFlashBag()->add(
        			'notice',
        			'Votació guardada correctament.' //. $form->get('votacio')->get('resultat1')->getData()
        	);
        
        }else{
        	
        	$this->get('session')->getFlashBag()->add(
        			'notice',
        			'Formulari no valid'
        	);
        	
        }
       
        return $this->redirect($this->generateUrl('home'));
        
    }

}
