<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\Form\PartenaireType;
use App\Entity\Partenaire;

/**
 * Partenaire controller.
 * @Route("/api",name="api_")
 */
class PartenaireController extends FOSRestController
{
   /** 
     * Liste de tous les Partenaires. 
     *@Rest\Get("/partenaires") 
     *@return Response*/
    public function getPartenaireAction()
    {

        $repository = $this->getDoctrine()->getRepository(Partenaire::class);
        $partenaires=$repository->findall();
        
        return $this->handleView($this->view($partenaires));
        
    }
    /** Create Partenaire.
     * @Rest\Post("/partenaire")
     * 
     * @return Response
     */ 
    public function postPartenaireAction(Request $request){
        $partenaire = new Partenaire();
        $form= $this->createForm(PartenaireType::class, $partenaire);
        $data = json_decode($request->getContent(), true);
        $form->submit($data);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($partenaire);
            $em->flush();
            return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));
    }
    return $this->handleView($this->view($form->getErrors()));
}
}
