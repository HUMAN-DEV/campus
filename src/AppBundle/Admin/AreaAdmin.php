<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AreaAdmin extends AbstractAdmin
{
	protected function configureFormFields (FormMapper $formMapper)
	{

		$formMapper
			->with ('Area', ['class' => 'col-md-6'])
			->add ('nombre')
			->end ();
	}

	protected function configureDatagridFilters (DatagridMapper $datagridMapper)
	{
		$datagridMapper->add ('nombre');
	}

	protected function configureListFields (ListMapper $listMapper)
	{
		$listMapper->addIdentifier ('nombre');
	}

}
