<?php

namespace MozhBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/mozh")
     */
    public function indexAction()
    {
        return $this->render('MozhBundle:Default:index.html.twig');
    }
}
