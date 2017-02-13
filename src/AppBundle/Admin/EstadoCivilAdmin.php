<?php

namespace AppBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EstadoCivilAdmin extends AbstractAdmin
{
	protected function configureFormFields (FormMapper $formMapper)
	{

		$formMapper
			->with ('Estado Civil', ['class' => 'col-md-9'])
			->add ('EstadoCivil')
			->end ();

	}

	protected function configureDatagridFilters (DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add ('EstadoCivil');
	}

	protected function configureListFields (ListMapper $listMapper)
	{
		$listMapper
			->addIdentifier ('EstadoCivil');
	}

	// Fields to be shown on show action
	protected function configureShowFields (ShowMapper $showMapper)
	{
		$showMapper
			->add ('EstadoCivil');
	}

}
