<?php


namespace App\Controller;


use App\Entity\Adherents;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdherentsController extends Controller
{
    /**
     *
     *@Route("/adherents", name="adherents", methods={"GET"})
     */
    public function getAdherents(){

        $repository=$this->getDoctrine()->getRepository(Adherents::class);
        $adherents=$repository->findall();
        $data = $this->get('jms_serializer')->serialize($adherents, 'json');
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
        return $response;

    }
}