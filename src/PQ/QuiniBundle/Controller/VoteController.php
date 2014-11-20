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
        $session->set('temporada', '2013');
        $session->set('jornadaActual', '33');
        $votacio = new Votacio();
        $form = $this->createForm(new VotacioType(), $votacio, array(
        		'action' => $this->generateUrl('vote'),
        ));
        
                        
//         $form->handleRequest($request);
        
//         if ($form->isValid()) {
//         	// perform some action...
        
// //         	return $this->redirect($this->generateUrl('task_success'));
        
//         }
        
        $partits = $this->getDoctrine()
            ->getRepository('PQQuiniBundle:PtqPartitQuiniela')
            ->findBy(
                array('ptqAny' => $session->get('temporada'), 'ptqJornada' => $session->get('jornadaActual')),
                array('ptqCasella' => 'ASC')
            );

        if (!$partits) {
            throw $this->createNotFoundException(
                'No product found for id  bla asdfs'
            );
        }
        
        $this->get('session')->getFlashBag()->add(
        		'notice',
        		'Your changes were saved!'
        );

        return $this->render(
            'PQQuiniBundle:Home:home.html.twig',
            array(
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'partits' => $partits,
				'form' => $form->createView()
            )
        );
    }

}
