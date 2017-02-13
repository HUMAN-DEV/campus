<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class SedeAdmin extends AbstractAdmin
{
	/**
	 * @param DatagridMapper $datagridMapper
	 */
	protected function configureDatagridFilters (DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add ('id')
			->add ('codigoDane')
			->add ('nombre')
			->add ('representanteLegal')
			->add ('ciudad')
			->add ('zona')
			->add ('barrio')
			->add ('vereda')
			->add ('direccion')
			->add ('telefono')
			->add ('fax')
			->add ('correo');
	}

	/**
	 * @param ListMapper $listMapper
	 */
	protected function configureListFields (ListMapper $listMapper)
	{
		$listMapper
			->add ('id')
			->add ('codigoDane')
			->add ('nombre')
			->add ('representanteLegal')
			->add ('ciudad')
			->add ('zona')
			->add ('barrio')
			->add ('vereda')
			->add ('direccion')
			->add ('telefono')
			->add ('fax')
			->add ('correo')
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
			->add ('codigoDane')
			->add ('nombre')
			->add ('representanteLegal')
			->add ('ciudad', 'sonata_type_model_autocomplete', [
				'class'        => 'AppBundle\Entity\Town',
				'property'     => 'name',
				'label_render' => 'name',
				'attr'         => ['data-sonata-select2-allow-clear' => 'true']
			])
			->add ('zona')
			->add ('barrio')
			->add ('vereda')
			->add ('direccion')
			->add ('telefono')
			->add ('fax')
			->add ('correo', EmailType::class);
	}

	/**
	 * @param ShowMapper $showMapper
	 */
	protected function configureShowFields (ShowMapper $showMapper)
	{
		$showMapper
			->add ('id')
			->add ('codigoDane')
			->add ('nombre')
			->add ('representanteLegal')
			->add ('direccion')
			->add ('telefono')
			->add ('fax')
			->add ('correo');
	}
}
