<?php

namespace App\Controller;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Session\Session;
class RegController extends AbstractController
{
    #[Route('/reg', name: 'app_reg')]
    public function registration(Request $request, ManagerRegistry $doctrine, ValidatorInterface $validator): Response
    {
        $AuthData =  $request->request->all();

        $em = $doctrine->getManager();
        $user = new User;
        $em->persist($user);

        $user->setEmail($AuthData["email"]);
        $user->setName($AuthData["name"]);
        $user->setPwd($AuthData["password"]);
        $user->setRole($AuthData["role"]);

        $errors = $validator->validate($user);

        $Reaponse = [];
        if (count($errors) > 0) {
            $Reaponse["errors"]=[];
            foreach ($errors as $key=> $value) {
                $htmlMessage =  $this->renderView('float_messag.html.twig', [
                    'error' => $value,
                ]);

                $response=[
                    "type"=>"floatNote",
                    "target"=>"float_wrapper",
                    "html"=>$htmlMessage,
                ];
                $Reaponse["errors"][$key]=$response;

            }

           return  new Response(json_encode($Reaponse));
        } else {
//            $em->persist($user);
            $em->flush();
        }
        $id = $user->getId();

        $newUser = $doctrine->getRepository(User::class)->find($id);

        $session = new Session();
        $session->start();
        $session->set('uid', $newUser->getId());
        $ajax = $request->isXmlHttpRequest();

        $result = $this->renderView($newUser->getRole().'/dashboard.html.twig', [
            'ajax' => $ajax,
            'user' => $newUser,
        ]);

        $Reaponse["content"]=[[
            "method"=>"replace",
            "target"=>"content",
            "html"=>$result,]
        ];



        return  new Response(json_encode($Reaponse));
    }
}
