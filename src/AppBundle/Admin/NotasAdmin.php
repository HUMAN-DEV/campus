<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class NotasAdmin extends AbstractAdmin
{
	/**
	 * @param DatagridMapper $datagridMapper
	 */
	protected function configureDatagridFilters (DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add ('id')
			->add ('fecha')
			->add ('estudiante')
			->add ('asignatura')
			->add ('actividad')
			->add ('nota');
	}

	/**
	 * @param ListMapper $listMapper
	 */
	protected function configureListFields (ListMapper $listMapper)
	{
		$listMapper
			->addIdentifier ('id')
			->add ('estudiante')
			->add ('asignatura')
			->add ('fecha')
			->add ('actividad')
			->add ('nota')
			->add ('_action', null, [
				'actions' => [
					'show'   => [],
					'edit'   => [],
					'delete' => [],
				]
			]);
	}

	/**
	 * @param FormMapper $formMapper
	 */
	protected function configureFormFields (FormMapper $formMapper)
	{
		$formMapper
			->with ('Nota', ['class' => 'col-md-6'])
			->add ('fecha', 'sonata_type_date_picker', [
				'dp_use_current' => true,
				'format'         => 'yyyy-MM-dd',
				'widget'         => 'single_text',
				'attr'           => ['class' => 'datepicker']
			])
			->add ('actividad')
			->add ('nota')
			->end ()
			->with ('Asignatura', ['class' => 'col-md-3'])
			->add ('asignatura')
			->end ()
			->with ('Estudiante', ['class' => 'col-md-3'])
			->add ('estudiante', 'sonata_type_model_autocomplete', [
				'class'        => 'AppBundle\Entity\Estudiante',
				'property'     => ['nombre1', 'apellido1', 'id', 'documento'],
				'label_render' => 'nombreCompleto'
			])
			->end ()
			->with ('Docente', ['class' => 'col-md-3'])
			->add ('docente')
			->end ();
	}

	/**
	 * @param ShowMapper $showMapper
	 */
	protected function configureShowFields (ShowMapper $showMapper)
	{
		$showMapper
			->add ('id')
			->add ('estudiante')
			->add ('asignatura')
			->add ('fecha')
			->add ('actividad')
			->add ('nota');
	}
}
