<?php

namespace ERN\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ERNPlatformBundle:Default:index.html.twig');
    }
}
