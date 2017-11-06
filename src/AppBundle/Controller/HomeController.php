<?php 

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
* 
*/
class HomeController extends Controller
{
	public function indexAction()
	{
		return new Response('Hello World');
	}
}

 ?>