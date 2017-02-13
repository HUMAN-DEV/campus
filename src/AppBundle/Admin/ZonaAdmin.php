<?php
/**
 * Created by PhpStorm.
 * User: Fabio
 * Date: 4/11/16
 * Time: 18:59
 */

namespace AppBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ZonaAdmin extends AbstractAdmin
{
	protected function configureFormFields (FormMapper $formMapper)
	{

		$formMapper
			->with ('Zona', ['class' => 'col-md-9'])
			->add ('nombreZona')
			->end ();

	}

	protected function configureDatagridFilters (DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add ('nombreZona');
	}

	protected function configureListFields (ListMapper $listMapper)
	{
		$listMapper
			->addIdentifier ('nombreZona');
	}

	// Fields to be shown on show action
	protected function configureShowFields (ShowMapper $showMapper)
	{
		$showMapper
			->add ('nombreZona');
	}

}
