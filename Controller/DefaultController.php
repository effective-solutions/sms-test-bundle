<?php

namespace EffectiveSolutions\SMSTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EffectiveSolutionsSMSTestBundle:Default:index.html.twig');
    }
}
