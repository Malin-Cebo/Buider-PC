<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends AbstractController 
{
    /**
     * @Route("/")
     */
    public function index() {
        return $this->render('default/index.html.twig');
    }
}

?>