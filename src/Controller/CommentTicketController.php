<?php

namespace App\Controller;

use App\Entity\Tickets;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class CommentTicketController extends AbstractController
{
    #[Route('/sort', name: 'app_sort_ticket', methods: ["get"])]
    public function sort(Request $request, ManagerRegistry $doctrine, ValidatorInterface $validator): Response
    {
        $uid = $request->getSession()->get("uid");
        if (isset($uid)) {
            $user = $doctrine->getRepository(User::class)->find($uid);
        }
        $Data= $request->query->all();

        $tickets = $doctrine->getRepository(Tickets::class) -> SortTickets($Data,"Active");

        $htmlMessage = $this->renderView('admin/ticket_list.html.twig', [
            'ActiveTickets' => $tickets,
        ]);

        $tecketsData =[
            "target"=>"tickets_list",
            "html"=>$htmlMessage,];
        if ( $Data["offset"] !==0 ||  $Data["offset"] !== ""){
            $tecketsData["method"]="append";
        } else {
            $tecketsData["method"]="replace";
        }
        $Reaponse=[];
        if (count($tickets) > 0) {
            $Reaponse["content"]=[$tecketsData,
                [
                    "target"=>"paginator",
                    "method"=>"setAttribute",
                    "attributs"=>[
                        "value"=>intval( $Data["offset"])+10]
                ]
            ];
        } else {

            $htmlMessage =  $this->renderView('float_messag.html.twig', [
                'error' => ["message"=>"Заявок больше нет"],
            ]);

            $response=[
                "type"=>"floatNote",
                "target"=>"float_wrapper",
                "html"=>$htmlMessage,
            ];
            $Reaponse["errors"][0]=$response;

        }

        return  new Response(json_encode($Reaponse));

    }



    #[Route('/requests/{id}', name: 'app_comment_ticket', methods: ["put", "post"])]
    public function index(int $id, Request $request, ManagerRegistry $doctrine, ValidatorInterface $validator): Response
    {

        $session = $request->getSession();
        $uid = $session->get("uid");

        if (isset($uid)) {
            $user = $doctrine->getRepository(User::class)->find($uid);
        }

        $Data= $request->request->all();


//print_r(json_decode($request->getContent()));
        if ($Data["comment"] !==""){
            $em = $doctrine->getManager();
            $ticket = $doctrine->getRepository(Tickets::class)->find($id);
            $ticket->setComment($Data["comment"]);
            $ticket->setUpdatedTo(new \DateTime());
            $ticket->setStatus("Resolved");
            $em->persist($ticket);
//            $errors = $validator->validate($ticket);
            $em->flush();
        } else {
            $htmlMessage =  $this->renderView('float_messag.html.twig', [
                'error' => "Необходимо оставить комментарий",
            ]);

            $response=[
                "type"=>"floatNote",
                "target"=>"float_wrapper",
                "html"=>$htmlMessage,
            ];
            $Reaponse["errors"][0]=$response;
            return  new Response(json_encode($Reaponse));
        }

        $ticket = $doctrine->getRepository(Tickets::class)->find($id);

        $htmlMessage = $this->renderView('tickets/ticket.html.twig', [
            'ticket' => $ticket,
        ]);

        $Reaponse["content"]=[[
            "method"=>"prepend",
            "target"=>"resolved_ticket",
            "html"=>$htmlMessage,],
            ["method"=>"remove",
             "target"=>"ticket_".$id,]
        ];

        return  new Response(json_encode($Reaponse));

    }
}
