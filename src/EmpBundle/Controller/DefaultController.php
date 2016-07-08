<?php

namespace EmpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EmpBundle:Default:index.html.twig');
    }
}
