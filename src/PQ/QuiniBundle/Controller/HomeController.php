<?php

namespace PQ\QuiniBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use PQ\QuiniBundle\Entity\PtqPartitQuiniela;
use PQ\QuiniBundle\Form\Type\VotacioType;
use PQ\QuiniBundle\Entity\Votacio;

class HomeController extends Controller
{

    public function homeAction(Request $request)
    {

        $session = $request->getSession();
        $session->set('temporada', '2013');
        $session->set('jornadaActual', '33');
        $votacio = new Votacio();
        $form = $this->createForm(new VotacioType(), $votacio, array(
        		'action' => $this->generateUrl('vote'),
        ));
        
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
