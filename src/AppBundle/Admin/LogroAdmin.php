<?php

namespace AppBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class LogroAdmin extends AbstractAdmin
{
	protected function configureFormFields (FormMapper $formMapper)
	{

		$formMapper
			->with ('Logros', ['class' => 'col-md-6'])
			->add ('nombre')
			->end ()
			->with ('.', ['class' => 'col-md-3'])
			->add ('calificativo', null, ['label' => 'Desempeño'])
			->end ()
			->with ('Asignatura', ['class' => 'col-md-3'])
			->add ('asignatura', 'sonata_type_model', [
				'class'    => 'AppBundle\Entity\Asignatura',
				'property' => 'nombre'
			])
			->end ()
//			->with ('Valoración', ['class' => 'col-md-3'])
//			->add ('valoracion')
//			->end ()

		;

	}

	protected function configureDatagridFilters (DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add ('nombre')
			->add ('asignatura', null, [], EntityType::class, [
				'class'    => 'AppBundle\Entity\Asignatura',
				'property' => 'nombre',
			]);
	}

	protected function configureListFields (ListMapper $listMapper)
	{
		$listMapper
			->addIdentifier ('nombre')
			->add ('asignatura.nombre');
	}

	// Fields to be shown on show action
	protected function configureShowFields (ShowMapper $showMapper)
	{
		$showMapper
			->add ('nombre')
			->add ('asignatura.nombre');
	}

}
