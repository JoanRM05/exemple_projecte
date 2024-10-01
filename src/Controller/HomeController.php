<?php

namespace App\Controller;

use PhpParser\Node\Expr\Cast\String_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    public static $enfermeros = array(
        array("Pepe", "1234wsd"),
        array("Paco", "patata"),
        array("Pepita", "firulay"),
        array("Benito", "austrolopitecus")
    );

    #[Route('/nursebyname/', name: 'app_nurse', methods: ['GET'])]
    public function nursebyname(Request $request): JsonResponse
    {   

        $length_enfermeros = count(self::$enfermeros);

        for ($i = 0; $i < $length_enfermeros; $i++) {
            if (self::$enfermeros[$i][0] == $request->get("user") && self::$enfermeros[$i][1] == $request->get("pass")) {

                return new JsonResponse(true);
            }
        }

        return new JsonResponse(false);
    }
}
