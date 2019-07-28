<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\Form\SousPartenaireType;
use App\Entity\SousPartenaire;


/**
 * SousPartenaire controller.
 * @Route("/api",name="api_")
 */
class SousPartenaireController extends FOSRestController
{
    /** 
     * Lists all sousPartenaires. 
     *@Rest\Get("/sousPartenaires") 
     *@return Response*/
     public function getSousPartenaireAction()
     {
         $repository = $this->getDoctrine()->getRepository(SousPartenaire::class);
         $sousPartenaires=$repository->findall();
         return $this->handleView($this->view($sousPartenaires));
     }
 
     /** Create SousPartenaire.
      * @Rest\Post("/sousPartenaire")
      * 
      * @return Response
      */ 
     public function postSousPartenaire(Request $request)
   {
       $sousPartenaire = new SousPartenaire();
         $form= $this->createForm(SousPartenaireType::class, $sousPartenaire);
         $data = json_decode($request->getContent(), true);
         $form->submit($data);
         if ($form->isSubmitted() && $form->isValid()) {
             $em = $this->getDoctrine()->getManager();
             $em->persist($sousPartenaire);
             $em->flush();
             return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));
     }
     return $this->handleView($this->view($form->getErrors()));
 }
}
