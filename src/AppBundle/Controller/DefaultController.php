<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
	/**
	 * @Route("/", name="homepage")
	 */
	public function indexAction ()
	{

		return $this->render ('@App/Default/index.html.twig');
	}

	/**
	 * @Route("/student", name="student")
	 */
	public function reportXStudent ()
	{
		return $this->render ('@App/Default/reportXStudent.html.twig');
	}

//	/**
//	 * @Route("/home", name="home")
//	 */
//	public function homeAction ()
//	{
//		return $this->render ('custom_dashboard.html.twig');
//	}
}
