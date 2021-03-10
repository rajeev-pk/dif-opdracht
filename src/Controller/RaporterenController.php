<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RaporterenController extends AbstractController
{
    /**
     * @Route("/raporteren", name="raporteren")
     * @Security("is_granted('ROLE_ADMIN')  or is_granted('ROLE_BOEK')")
     * 
     */
    public function index(): Response
    {
        return $this->render('raporteren/index.html.twig', [
            'controller_name' => 'RaporterenController',
        ]);
    }
}
