<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class StatController extends Controller
{
    /**
     * HomePage
     * @Route("/stat", name="stat")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('stat/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
