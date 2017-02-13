<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class GrupoAdmin extends AbstractAdmin
{
	/**
	 * @param DatagridMapper $datagridMapper
	 */
	protected function configureDatagridFilters (DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add ('id')
			->add ('abreviacion')
			->add ('nombre')
			->add ('grado')
			->add ('director')
			->add ('aula')
			->add ('estudiantes');
	}

	/**
	 * @param ListMapper $listMapper
	 */
	protected function configureListFields (ListMapper $listMapper)
	{
		$listMapper
			->add ('id')
			->add ('abreviacion')
			->add ('nombre')
			->add ('grado')
			->add ('director')
			->add ('aula')
			->add ('estudiantes')
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
			->add ('abreviacion')
			->add ('nombre')
			->add ('grado')
			->add ('director')
			->add ('aula')
			->add ('estudiantes', 'sonata_type_model', [
				'multiple'     => true,
				'btn_add'          => false,
				'by_reference' => false
			]);
	}

	/**
	 * @param ShowMapper $showMapper
	 */
	protected function configureShowFields (ShowMapper $showMapper)
	{
		$showMapper
			->add ('id')
			->add ('abreviacion')
			->add ('nombre')
			->add ('grado')
			->add ('director')
			->add ('aula')
			->add ('estudiantes');
	}
}
