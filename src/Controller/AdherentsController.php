<?php


namespace App\Controller;


use App\Entity\Adherents;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdherentsController extends AbstractFOSRestController
{
    /***ListsallAdherents.
     *@Rest\Get("/adherents")
     **@returnResponse*/
    public function getAdherents(){
        $repository=$this->getDoctrine()->getRepository(Adherents::class);
        $adherents=$repository->findall();
        return$this->handleView($this->view($adherents));
    }
}