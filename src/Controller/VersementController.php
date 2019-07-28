<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\Form\VersementType;
use App\Entity\Versement;
/**
 * Versement controller.
 * @Route("/api",name="api_")
 */
class VersementController extends FOSRestController
{
    /** 
     * Lists all Versements. 
     *@Rest\Get("/versements") 
     *@return Response*/
    public function getVersementAction()
    {
        $repository = $this->getDoctrine()->getRepository(Versement::class);
        $versements=$repository->findall();
        
        return $this->handleView($this->view($versements));
    }

    /** Create Versement.
     * @Rest\Post("/versement")
     * 
     * @return Response
     */ 
    public function postVersementAction(Request $request)
  {
      $versement = new Versement();
        $form= $this->createForm(VersementType::class, $versement);
        $data = json_decode($request->getContent(), true);
        $form->submit($data);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($versement);
            $em->flush();
            return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));
    }
    return $this->handleView($this->view($form->getErrors()));
}
}
