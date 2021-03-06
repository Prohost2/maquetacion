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
    public function category_landingAction()
    {
        return $this->render('ShopBundle:Category:landing.html.twig');
    }
    public function saleAction()
    {
        return $this->render('ShopBundle:Default:sale.html.twig');
    }
    public function searchAdvanceAction()
    {
        return $this->render('ShopBundle:Default:search_advance.html.twig');
    }
    public function contactAction()
    {
        return $this->render('ShopBundle:Default:contact.html.twig');
    }
    public function loginAction()
    {
        return $this->render('ShopBundle:Default:login.html.twig');
    }
}
