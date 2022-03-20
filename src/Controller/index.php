<?php
namespace App\Controller;

use App\Entity\User;
use App\Entity\Tickets;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\Persistence\ManagerRegistry;
class index extends AbstractController
{
   /**
   * @Route("/", name="secure", schemes={"https"})
    */
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {
        $session = $request->getSession();
        $uid = $session->get("uid");
        if (isset($uid)) {

            $user = $doctrine->getRepository(User::class)->find($uid);
            if ($user->getRole() === "user"){
               $tickets = $doctrine->getRepository(Tickets::class) -> UserTickets($user->getEmail());

                return $this->render($user->getRole().'/dashboard.html.twig', [
                    'ajax' => false,
                    'user' => $user,
                    'tickets' => $tickets,
                ]);
            } else  if ($user->getRole() === "admin"){

                $ActiveTickets = $doctrine->getRepository(Tickets::class) -> TicketsByStatus("Active", 0);
                $ResolveTickets = $doctrine->getRepository(Tickets::class) -> TicketsByStatus("Resolved", 0);

//
                return $this->render($user->getRole().'/dashboard.html.twig', [
                    'ajax' => false,
                    'user' => $user,
                    'ActiveTickets' => $ActiveTickets,
                    'ResolveTickets' => $ResolveTickets,
                ]);
            }
        }
//        $s = $this->render('index.html.twig');

//        return new Response(
//            '<html><body>Lucky number: '.$number.'</body></html>'
//        );


        return $this->render('index.html.twig');
    }
}