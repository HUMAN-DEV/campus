<?php

namespace AppBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class BarrioAdmin extends AbstractAdmin
{
	protected function configureFormFields (FormMapper $formMapper)
	{

		$formMapper
			->with ('Barrios', ['class' => 'col-md-9'])
			->add ('nombre')
			->add ('ciudad', 'sonata_type_model_autocomplete', [
				'class'    => 'AppBundle\Entity\Town',
				'property' => 'name',
				'label_render' => 'name'
			])
			->end ();

	}

	protected function configureDatagridFilters (DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add ('nombre')
			->add ('ciudad', NULL, [], EntityType::class, [
				'class'    => 'AppBundle\Entity\Town',
				'property' => 'name',
			]);
	}

	protected function configureListFields (ListMapper $listMapper)
	{
		$listMapper
			->addIdentifier ('nombre')
			->add ('ciudad', NULL, [
				'class'    => 'AppBundle\Entity\Town',
				'property' => 'name',
			]);
	}

	// Fields to be shown on show action
	protected function configureShowFields (ShowMapper $showMapper)
	{
		$showMapper
			->add ('nombre')
			->add ('ciudad', NULL, [
				'class'    => 'AppBundle\Entity\Town',
				'property' => 'name',
			]);
	}

}
