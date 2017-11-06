<?php

namespace ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    /*
    * Route: shop/product
    */
    public function indexAction()
    {
        return $this->render('ShopBundle:Product:index.html.twig');
    }
    /*
    * Route: shop/check
    */    
    public function checkAction()
    {
        return $this->render('ShopBundle:Product:checkout_one.html.twig');
    }
    /*
    * Route: shop/info
    */
    public function infoAction()
    {
        return $this->render('ShopBundle:Product:checkout_two.html.twig');
    }
    /*
    * Route: shop/payments
    */
    public function paymentsAction()
    {
        return $this->render('ShopBundle:Product:checkout_three.html.twig');
    }
    /*
    * Route: shop/confirm_payments
    */
    public function confirm_paymentsAction()
    {
        return $this->render('ShopBundle:Product:checkout_four.html.twig');
    }
}
