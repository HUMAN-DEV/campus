<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
	/**
	 * @Route("/admin/home")
	 */
	public function homeAction ()
	{
		return $this->render ('custom_dashboard.html.twig');
	}
}
