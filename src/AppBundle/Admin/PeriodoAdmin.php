<?php

namespace AppBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PeriodoAdmin extends AbstractAdmin
{
	protected function configureFormFields (FormMapper $formMapper)
	{

		$formMapper
			->with ('Períodos', ['class' => 'col-md-9'])
			->add ('periodo')
			->add ('desde', 'sonata_type_date_picker', [
				'format' => 'yyyy-MM-dd',
				'widget' => 'single_text',
				'attr'   => ['class' => 'datepicker']
			])
			->add ('hasta', 'sonata_type_date_picker', [
				'format' => 'yyyy-MM-dd',
				'widget' => 'single_text',
				'attr'   => ['class' => 'datepicker']
			])
			->add ('descripcion')
			->end ();

	}

	protected function configureDatagridFilters (DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add ('periodo')
			->add ('descripcion');
	}

	protected function configureListFields (ListMapper $listMapper)
	{
		$listMapper
			->addIdentifier ('periodo')
			->add ('desde', null, ['editable' => true])
			->add ('hasta', null, ['editable' => true])
			->add ('descripcion');
	}

	// Fields to be shown on show action
	protected function configureShowFields (ShowMapper $showMapper)
	{
		$showMapper
			->add ('periodo')
			->add ('desde')
			->add ('hasta')
			->add ('descripcion');
	}

}
