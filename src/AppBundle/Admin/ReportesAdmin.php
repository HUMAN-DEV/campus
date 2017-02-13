<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 21/01/17
 * Time: 14:32
 */

namespace AppBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Route\RouteCollection;

class ReportesAdmin extends AbstractAdmin
{
	protected function configureRoutes (RouteCollection $collection)
	{
		parent::configureRoutes ($collection);
		$collection->add ('report_by_student');
	}

}