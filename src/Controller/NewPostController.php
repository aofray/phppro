<?php

namespace App\Controller;
use App\Entity\Tickets;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Session\Session;
class NewPostController extends AbstractController
{
    #[Route('/requests', name: 'app_new_post',  methods: ['POST'])]
    public function postTicket(Request $request, ManagerRegistry $doctrine, ValidatorInterface $validator): Response
    {
        $session = $request->getSession();
        $uid = $session->get("uid");

        if (isset($uid)) {
            $user = $doctrine->getRepository(User::class)->find($uid);
        }


        $Data =  $request->request->all();

        $em = $doctrine->getManager();
        $ticket = new Tickets();



        $ticket->setEmail( $user->getEmail());
        $ticket->setName( $user->getName());
        $ticket->setMessage($Data["message"]);
        $ticket->setStatus("Active");
        $ticket->setCreatedAt(new \DateTime());
        $errors = $validator->validate($ticket);

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
            $em->persist($ticket);
            $em->flush();
        }

        $newTicket = $doctrine->getRepository(Tickets::class)->find($ticket->getId());


        $htmlMessage = $this->renderView('tickets/ticket.html.twig', [
            'ticket' => $newTicket,
            'user' => $user,
        ]);

        $Reaponse["content"]=[[
            "method"=>"prepend",
            "target"=>"tickets_list",
            "html"=>$htmlMessage,]
        ];
        return  new Response(json_encode($Reaponse));
    }
}
