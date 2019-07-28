<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\Form\CaissierType;
use App\Entity\Caissier;

/**
 * Caissier controller.
 * @Route("/api",name="api_")
 */
class CaissierController extends FOSRestController
{
    
    /** 
     * Lists all caissiers. 
     *@Rest\Get("/caissiers") 
     *@return Response*/
    public function getcaissierAction()
    {
        $repository = $this->getDoctrine()->getRepository(Caissier::class);
        $caissiers=$repository->findall();
        return $this->handleView($this->view($caissiers));
        
    }

    /** Create Caissier.
     * @Rest\Post("/caissier")
     * 
     * @return Response
     */ 
    public function postCaissierAction(Request $request)
  {
      $caissier = new Caissier();
        $form= $this->createForm(CaissierType::class, $caissier);
        $data = json_decode($request->getContent(), true);
        $form->submit($data);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($caissier);
            $em->flush();
            return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));
    }
    return $this->handleView($this->view($form->getErrors()));
}
}
