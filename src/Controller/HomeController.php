<?php

namespace App\Controller;

use PhpParser\Node\Expr\Cast\String_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;





class HomeController extends AbstractController
{
    #[Route('/nursebyname?user={user}&pass={pass}', name: 'app_nurse', methods: ['GET'])]
    public function nursebyname(string $user, string $pass): JsonResponse
    {
        
        $enfermeros = array(
            array("Pepe", "1234wsd"),
            array("Paco", "patata"),
            array("Pepita", "firulay"),
            array("Benito", "austrolopitecus")
        );

        $length_enfermeros = count($enfermeros);

        for ($i = 0; $i < $length_enfermeros; $i++) {
            if ($enfermeros[$i][0] == $user && $enfermeros[$i][1] == $pass) {

                return new JsonResponse(true);
            }
        }

        return new JsonResponse(false);

        /* return $this->json([
            'message' => 'Nurse',
            'path' => 'src/Controller/HomeController.php',
        ]); */
    }
}
