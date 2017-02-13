<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class InasistenciaAdmin extends AbstractAdmin
{
	/**
	 * @param DatagridMapper $datagridMapper
	 */
	protected function configureDatagridFilters (DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add ('fecha')
			->add ('estudiante')
			->add ('asignatura');
	}

	/**
	 * @param ListMapper $listMapper
	 */
	protected function configureListFields (ListMapper $listMapper)
	{
		$listMapper
			->add ('inasistencia', null, [
				'label' => 'Horas Falto a Clase'
			])
			->add ('fecha')
			->add ('estudiante')
			->add ('asignatura')
			->add ('observaciones')
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
			->with ('Inasistencia', ['class' => 'col-md-3'])
			->add ('inasistencia', null, [
				'label' => 'Horas Falto a Clase'
			])
			->add ('fecha', 'sonata_type_date_picker', [
				'dp_use_current' => true,
				'format'         => 'yyyy-MM-dd',
				'widget'         => 'single_text',
				'attr'           => ['class' => 'datepicker']
			])
			->end ()
			->with ('Estudiante', ['class' => 'col-md-4'])
			->add ('estudiante', 'sonata_type_model_autocomplete', [
//				'class'        => 'AppBundle\Entity\Estudiante',
				'property'     => ['nombre1', 'apellido1', 'id', 'documento'],
				'label_render' => 'nombreCompleto'
			])
			->end ()
//			->with ('Periodo', ['class' => 'col-md-3'])
//			->add ('periodo')
//			->end ()
			->with ('Asignatura', ['class' => 'col-md-4'])
			->add ('asignatura')
			->end ()
			->with (' ', ['class' => 'col-md-9'])
			->add ('observaciones')
			->add ('excusa', null, ['label' => 'Tiene Excusa?'])
			->end ();
	}

	/**
	 * @param ShowMapper $showMapper
	 */
	protected function configureShowFields (ShowMapper $showMapper)
	{
		$showMapper
			->add ('id')
			->add ('inasistencia')
			->add ('fecha')
			->add ('estudiante')
			->add ('asignatura')
			->add ('observaciones');
	}
}
