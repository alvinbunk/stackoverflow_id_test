<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ID_Form;
use AppBundle\Form\ID_FormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $id_form = new ID_Form();
		$form = $this->createForm(ID_FormType::class, $id_form);
		$form->handleRequest($request);
        
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
