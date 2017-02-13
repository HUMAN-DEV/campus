<?php

namespace AppBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TipoInstitucionAdmin extends AbstractAdmin
{
	protected function configureFormFields (FormMapper $formMapper)
	{

		$formMapper
			->with ('Tipo de Institución', ['class' => 'col-md-9'])
			->add ('nombre')
			->end ();

	}

	protected function configureDatagridFilters (DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add ('nombre');
	}

	protected function configureListFields (ListMapper $listMapper)
	{
		$listMapper
			->addIdentifier ('nombre');
	}

	// Fields to be shown on show action
	protected function configureShowFields (ShowMapper $showMapper)
	{
		$showMapper
			->add ('nombre');
	}

}
