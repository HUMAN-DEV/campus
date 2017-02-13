<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AsignaturaAdmin extends AbstractAdmin
{
	protected function configureFormFields (FormMapper $formMapper)
	{

		$formMapper
			->with ('Asignatura', ['class' => 'col-md-9'])
			->add ('nombre', TextType::class)
			->end ()
			->with ('Area', ['class' => 'col-md-3'])
			->add ('area', 'sonata_type_model', [
				'class'    => 'AppBundle\Entity\Area',
				'property' => 'nombre'
			])
			->add ('intesidad_horaria')
			->end ();

	}

	protected function configureDatagridFilters (DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add ('nombre')
			->add ('area', null, [], EntityType::class, [
				'class'    => 'AppBundle\Entity\Area',
				'property' => 'nombre',
			]);
	}

	protected function configureListFields (ListMapper $listMapper)
	{
		$listMapper
			->addIdentifier ('nombre')
			->add ('area.nombre')
			->add ('intesidad_horaria', NumberType::class, [
				'editable' => true
			]);
	}

	// Fields to be shown on show action
	protected function configureShowFields (ShowMapper $showMapper)
	{
		$showMapper
			->add ('mombre')
			->add ('area.nombre')
			->add ('intesidad_horaria');
	}

}
