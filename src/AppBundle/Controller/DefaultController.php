<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class DefaultController extends Controller
{
    /**
     * HomePage
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request, SessionInterface $session)
    {
        $monthConsume = [
            ['month' => 'Ce mois', 'amount' => '545 €'],
            ['month' => 'Mars', 'amount' => '852 €'],
            ['month' => 'Février', 'amount' => '200 €'],
            ['month' => 'Total', 'amount' => '1856 €'],
        ];
        $transactions = [
            [
                'commerce' => "L'escale",
                'amount' => '-97 €',
                'createdDate' => '2018-04-13',
                'createdTime' => '02:25',
                'category' => 'Bar',
                'cards' => ['blue-card']
            ],
            [
                'commerce' => "Aubade",
                'amount' => '-180 €',
                'createdDate' => '2018-04-13',
                'createdTime' => '02:25',
                'category' => 'Vêtement',
                'cards' => ['blue-card']
            ],
            [
                'commerce' => "Franprix",
                'amount' => '-14,30 €',
                'createdDate' => '2018-04-13',
                'createdTime' => '13:46',
                'category' => 'SuperMarché',
                'cards' => ['green-card']
            ],
            [
                'commerce' => "Louvard",
                'amount' => '-4,80 €',
                'createdDate' => '2018-04-13',
                'createdTime' => '12:25',
                'category' => 'Restaurant',
                'cards' => ['blue-card', 'yellow-card']
            ],
        ];

        $cards = [
            ['type' => 'creditCard', 'bank' => 'visa', 'cardNumber' => '41001210215486', 'category' => ['Vêtement']],
            [
                'type' => 'creditCard',
                'bank' => 'apetitz',
                'cardNumber' => '41001210215486',
                'category' => ['Restaurant', 'Bar']
            ],
            [
                'type' => 'creditCard',
                'bank' => 'mastercard',
                'cardNumber' => '41001210215486',
                'category' => ['SuperMarché']
            ],
            ['type' => 'creditCard', 'bank' => 'amex', 'cardNumber' => '41001210215486', 'category' => ['Bar']],
            ['type' => 'fidelityCard', 'bank' => 'visa', 'cardNumber' => '41001210215486', 'category' => ['Vêtement']],
        ];

        $categories = ['Bar', 'Vêtement', 'Restaurant', 'SuperMarché'];

        $session->set('transactions', $transactions);
        $session->set('cards', $cards);
        $session->set('categories', $categories);
        $session->set('monthConsume', $monthConsume);

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
            'transactions' => $transactions
        ]);
    }
}
