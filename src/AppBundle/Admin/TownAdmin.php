<?php

namespace AppBundle\Admin;


use AppBundle\Entity\Town;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class TownAdmin extends AbstractAdmin
{
	public function toString ($object)
	{
		return $object instanceof Town ? $object->getName () : 'Ciudad';
	}

	protected function configureFormFields (FormMapper $formMapper)
	{

		$formMapper
			->with ('Ciudades', ['class' => 'col-md-9'])
			->add ('id', null, ['label' => 'Código'])
			->add ('name', null, ['label' => 'Nombre'])
			->add ('longitude', NumberType::class, [
				'label' => 'Longitud',
				'scale' => 15,
			])
			->add ('latitude', NumberType::class, [
				'label' => 'Latitud',
				'scale' => 15,
			])
			->end ();

	}

	protected function configureDatagridFilters (DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add ('id', null, ['label' => 'Código'])
			->add ('name', null, ['label' => 'Nombre']);
	}

	protected function configureListFields (ListMapper $listMapper)
	{
		$listMapper
			->addIdentifier ('id', null, ['label' => 'Código'])
			->add ('name', null, ['label' => 'Nombre'])
			->add ('longitude', null, ['label' => 'Longitud'])
			->add ('latitude', null, ['label' => 'Latitud']);
	}

	// Fields to be shown on show action
	protected function configureShowFields (ShowMapper $showMapper)
	{
		$showMapper
			->add ('id', null, ['label' => 'Código'])
			->add ('name', null, ['label' => 'Nombre'])
			->add ('longitude', null, ['label' => 'Longitud'])
			->add ('latitude', null, ['label' => 'Latitud']);
	}

}
