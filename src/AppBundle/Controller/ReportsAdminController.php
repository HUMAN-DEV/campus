<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\BrowserKit\Response;

class ReportsAdminController extends CRUDController
{
	public function listAction ()
	{
//    	$students = $this->getDoctrine()->getRepository('AppBundle:Estudiante')->findAll();
		return $this->render ('@App/reports/index.html.twig');
	}

	public function reportByStudentAction ()
	{
		return $this->render ('@App/reports/formXStudent.html.twig');
	}

	/**
	 * @Route("/report_x/{code}/{student}", name="report_x_student",  options={"expose"= true})
	 */
	public function reportAction ($code, $student)
	{
		echo $code . ' - ' . $student;
	}
}