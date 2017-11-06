<?php

namespace ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ShopBundle:Default:index.html.twig');
    }
    public function categoryAction()
    {
        return $this->render('ShopBundle:Category:index.html.twig');
    }
    public function saleAction()
    {
        return $this->render('ShopBundle:Default:sale.html.twig');
    }
}
