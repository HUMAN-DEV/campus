<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class AulaAdmin extends AbstractAdmin
{
	/**
	 * @param DatagridMapper $datagridMapper
	 */
	protected function configureDatagridFilters (DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add ('id')
			->add ('nombre')
			->add ('tamanio')
			->add ('capacidad');
	}

	/**
	 * @param ListMapper $listMapper
	 */
	protected function configureListFields (ListMapper $listMapper)
	{
		$listMapper
			->add ('id')
			->add ('nombre')
			->add ('tamanio')
			->add ('capacidad')
			->add ('_action', NULL, [
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
			->add ('nombre')
			->add ('tamanio', NULL, [
				'label' => 'Tamaño Mts'
			])
			->add ('capacidad')
			->add ('estado', 'choice', [
				'choices' => [
					'Bueno'   => 'Bueno',
					'Regular' => 'Regular',
					'Malo'    => 'Malo',
				]
			])
			->add ('sede');
	}

	/**
	 * @param ShowMapper $showMapper
	 */
	protected function configureShowFields (ShowMapper $showMapper)
	{
		$showMapper
			->add ('id')
			->add ('nombre')
			->add ('tamanio')
			->add ('capacidad');
	}
}
