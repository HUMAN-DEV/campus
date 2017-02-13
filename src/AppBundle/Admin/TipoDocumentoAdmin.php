<?php

namespace AppBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TipoDocumentoAdmin extends AbstractAdmin
{
	protected function configureFormFields (FormMapper $formMapper)
	{

		$formMapper
			->with ('Tipo de Documento', ['class' => 'col-md-9'])
			->add ('tipo')
			->add ('abreviacion')
			->end ();

	}

	protected function configureDatagridFilters (DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add ('tipo')
			->add ('abreviacion');
	}

	protected function configureListFields (ListMapper $listMapper)
	{
		$listMapper
			->addIdentifier ('tipo')
			->add ('abreviacion');
	}

	// Fields to be shown on show action
	protected function configureShowFields (ShowMapper $showMapper)
	{
		$showMapper
			->add ('tipo')
			->add ('abreviacion');
	}

}
