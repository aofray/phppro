<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LogoutController extends AbstractController
{
    #[Route('/logout', name: 'app_logout')]
    public function index(Request $request): Response
    {
        $session = $request->getSession();
        $uid = $session->get("uid");
        $session->invalidate();

        return $this->render('index.html.twig', [
            'controller_name' => 'LogoutController',
        ]);
    }
}
