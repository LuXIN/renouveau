<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CardController extends Controller
{
    /**
     * @Route("/card/add", name="addcard")
     */
    public function addAction()
    {
        return $this->render('card/add.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }


    /**
     * @Route("/card/update", name="updatecard")
     */
    public function updateAction()
    {
        return $this->render('card/update.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/card/delete", name="deletecard")
     */
    public function deleteAction()
    {
        return $this->render('card/delete.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
