<?php

namespace AppBundle\Admin;

use AppBundle\Entity\Ocupacion;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class OcupacionAdmin extends AbstractAdmin
{
	public function toString ($object)
	{
		return $object instanceof Ocupacion ? $object->getOcupacion () : 'Ocupacion';
	}

	/**
	 * @param DatagridMapper $datagridMapper
	 */
	protected function configureDatagridFilters (DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add ('ocupacion')
			->add ('ciuo');
	}

	/**
	 * @param ListMapper $listMapper
	 */
	protected function configureListFields (ListMapper $listMapper)
	{
		$listMapper
			->add ('id', null, ['label' => 'ID'])
			->add ('ciuo', null, ['label' => 'CIUO'])
			->add ('ocupacion', null, ['label' => 'Ocupación'])
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
			->add ('ciuo', null, [
				'help'  => 'Clasificación Internacional Uniforme de Ocupaciones (CIUO)',
				'label' => 'CIUO'
			])
			->add ('ocupacion', null, [
				'label' => 'Ocupación'
			]);
	}

	/**
	 * @param ShowMapper $showMapper
	 */
	protected function configureShowFields (ShowMapper $showMapper)
	{
		$showMapper
			->add ('id')
			->add ('ocupacion');
	}
}
