<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class HorarioAdmin extends AbstractAdmin
{
	/**
	 * @param DatagridMapper $datagridMapper
	 */
	protected function configureDatagridFilters (DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add ('id')
			->add ('dia')
			->add ('hora');
	}

	/**
	 * @param ListMapper $listMapper
	 */
	protected function configureListFields (ListMapper $listMapper)
	{
		$listMapper
			->add ('grupo')
			->add ('hora')
			->add ('dia')
			->add ('aula')
			->add ('asignatura')
			->add ('docente')
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
			->add ('dia', 'choice', [
				'choices' => [
					'Lunes'     => 'Lunes',
					'Martes'    => 'Martes',
					'Miercoles' => 'Miercoles',
					'Jueves'    => 'Jueves',
					'Viernes'   => 'Viernes',
				],

			])
			->add ('hora', 'sonata_type_datetime_picker', [
				'format'       => 'hh:mm',
				'dp_pick_time' => true

			])
			->add ('aula')
			->add ('asignatura')
			->add ('grupo')
			->add ('docente');
	}

	/**
	 * @param ShowMapper $showMapper
	 */
	protected function configureShowFields (ShowMapper $showMapper)
	{
		$showMapper
			->add ('id')
			->add ('dia')
			->add ('hora');
	}
}
