<?php


namespace App\Controller;


use App\Entity\Adherents;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LEDNController extends AbstractController
{
    /**
     *
     * @Route("/creation", name="creation")
     */
    public function createProduct(): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $adherent = new Adherents();
        $adherent->setNom('Nana');
        $adherent->setPrenom('Richard');
        $adherent->setAdresse('Hall 12 - 6 rue Pierre Bourdan 75012 Paris');
        $adherent->setTelephone('0778515421');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($adherent);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Adherent enregistré avec l\'id suivant '.$adherent->getId());
    }



}