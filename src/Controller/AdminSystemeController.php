<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\Form\AdminSystemeType;
use App\Entity\AdminSysteme;

/**
 * AdminSysteme controller.
 * @Route("/api",name="api_")
 */
class AdminSystemeController extends FOSRestController
{
    /** 
     * Lists all adminSystemes. 
     *@Rest\Get("/adminSystemes") 
     *@return Response*/
     public function getAdminSystemeAction()
    {
        $repository = $this->getDoctrine()->getRepository(AdminSysteme::class);
        $adminSystemes=$repository->findall();
        
        return $this->handleView($this->view($adminSystemes));
    }

    /** Create AdminSysteme.
     * @Rest\Post("/adminSysteme")
     * 
     * @return Response
     */ 
    public function postAdminSystemeAction(Request $request)
  {
      $adminSysteme = new AdminSysteme();
        $form= $this->createForm(AdminSystemeType::class, $adminSysteme);
        $data = json_decode($request->getContent(), true);
        $form->submit($data);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($adminSysteme);
            $em->flush();
            return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));
    }
    return $this->handleView($this->view($form->getErrors()));
}
}