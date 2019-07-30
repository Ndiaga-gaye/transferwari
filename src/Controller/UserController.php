<?php

namespace App\Controller;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
/**
 * @Route("/api",name="api")
 */
class UserController extends AbstractController
{
    
/**
 * @Rest\Post("/register")
 */

public function register(ObjectManager $om, UserPasswordEncoderInterface $passwordEncoder, Request $request)
{
   $user = new User();
   $email                  = $request->request->get("email");
   $password               = $request->request->get("password");
   $passwordConfirmation   = $request->request->get("password_confirmation");
   return $this->json([
       'email' => $email,
       'password' => $password,
       'password_confirmation' => $passwordConfirmation
   ]);
}
}