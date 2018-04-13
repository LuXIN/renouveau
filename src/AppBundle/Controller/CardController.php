<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CardController extends Controller
{
    /**
     * List Cards
     * @Route("/card", name="listcards")
     */
    public function indexAction(Request $request, SessionInterface $session)
    {
        $cards = $this->get('session')->get('cards');
        return $this->render('card/index.html.twig', [
            'cards' => $cards,
        ]);
    }

    /**
     * @Route("/card/add", name="addcard")
     */
    public function addAction()
    {
        /*$form = $this->createFormBuilder($task)
               ->add('task', TextType::class)
               ->add('dueDate', DateType::class)
               ->add('save', SubmitType::class, array('label' => 'Create Task'))
               ->getForm();

           $form->handleRequest($request);

           if ($form->isSubmitted() && $form->isValid()) {
               // $form->getData() holds the submitted values
               // but, the original `$task` variable has also been updated
               $task = $form->getData();

               // ... perform some action, such as saving the task to the database
               // for example, if Task is a Doctrine entity, save it!
               // $entityManager = $this->getDoctrine()->getManager();
               // $entityManager->persist($task);
               // $entityManager->flush();

               return $this->redirectToRoute('task_success');
           }

           return $this->render('default/new.html.twig', array(
               'form' => $form->createView(),
           ));
        */
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
