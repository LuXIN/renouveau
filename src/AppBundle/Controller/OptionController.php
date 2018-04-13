<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class OptionController extends Controller
{
    /**
     * HomePage
     * @Route("/option", name="option")
     */
    public function indexAction(Request $request, SessionInterface $session)
    {
        $transactions = $this->get('session')->get('transactions');
        return $this->render('option/index.html.twig', [
            'transactions' => $transactions,
        ]);
    }
}
