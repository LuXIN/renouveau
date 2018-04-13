<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class OptionController extends Controller
{
    /**
     * HomePage
     * @Route("/option", name="option")
     */
    public function indexAction(Request $request)
    {
        $transactions = $this->get('session')->get('transactions');
        return $this->render('option/index.html.twig', [
            'transactions' => $transactions,
        ]);
    }
}
