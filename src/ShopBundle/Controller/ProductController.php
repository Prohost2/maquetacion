<?php

namespace ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    public function indexAction()
    {
        return $this->render('ShopBundle:Product:index.html.twig');
    }
    public function checkAction()
    {
        return $this->render('ShopBundle:Product:checkout_one.html.twig');
    }
    public function infoAction()
    {
        return $this->render('ShopBundle:Product:checkout_two.html.twig');
    }
}
